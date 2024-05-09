<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Block UBE TA
 *
 * @package    block_ube_ta
 * @copyright  2023 David Wipperfurth <dwipperfurth@unboundeducation.org>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

class block_ube_ta extends block_base {
    public function init() {
        $this->title = \get_string('pluginname', 'block_ube_ta');
    }

    public function has_config() {
        return true;
    }

    public function specialization() {
        if (!empty($this->config->title)) {
            $this->title = $this->config->title;
        }
    }

    function html_attributes() {
        $attributes = parent::html_attributes();
        
        if (!$this->page->user_is_editing()) {
            $attributes['class'] .= ' ube_hide_block';
        }

        return $attributes;
    }

    public function get_content() {
        global $CFG;

        if ($this->content !== null) {
            return $this->content;
        }
        
        $config = \get_config('block_ube_ta');

        $apipath = null;
        if (!empty($config->oracle_domain)) {
            $apipath = 'https://'.$config->oracle_domain.'/api/v1';
        }

        $apikey = null;
        if (!empty($config->oracle_apikey)) {
            $apikey = $config->oracle_apikey;
        }

        $expires = time();
        $signature = '';
        if (!empty($config->oracle_privatekey) && !empty($config->oracle_session)) {
            $expires = time() + (int)$config->oracle_session;
            $signature = $this->getSignature($expires, $config->oracle_privatekey);
        }

        $filters = 'null';
        if (!empty($this->config->filters)) {
            //validate formatting
            json_decode($this->config->filters, null, 512, \JSON_THROW_ON_ERROR);

            $filters = $this->config->filters;
            //$filters = base64_encode($this->config->config_filters);
        }

        $cssurl = null;
        if (!empty($config->css_url)) {
            $cssurl = $config->css_url;
        }

        $this->content = (object)[
            'text' => "
                <script type='module'>
                    const settings = {
                        apiPath: '{$apipath}',
                        cssPath: '{$cssurl}',
                        apiKey: '{$apikey}', 
                        expires: '{$expires}',
                        signature: '{$signature}', 
                        filters: {$filters},
                        showSource: true,
                    };
                
                    import {UBETA} from '{$CFG->wwwroot}/blocks/ube_ta/js/ubeta-bot1.js';
                    const ubeta = new UBETA(settings);
                </script>
            ",
        ];

        return $this->content;

    }

    protected function getSignature($expires, $privateKey):string {
        // validate parameters
        if (empty($expires)){
            throw new \Exception("Expires is empty.");
        }
        if (!is_numeric($expires)){
            throw new \Exception("Expires is not a valid number.");
        }
        if (empty($privateKey)){
            throw new \Exception("Private key is empty.");
        }
        if (!base64_decode($privateKey)){
            throw new \Exception("Private key is not a valid base64 string.");
        }

        // convert privateKey from Base64 DER to PEM
        $pem = chunk_split($privateKey, 64, "\n");
        $pem = "-----BEGIN PRIVATE KEY-----\n".$pem."-----END PRIVATE KEY-----\n";

        // sign message
        $signature = '';
        openssl_sign($expires, $signature, $pem, \OPENSSL_ALGO_SHA256);
        $signature = base64_encode($signature);

        return $signature;
    }
}
