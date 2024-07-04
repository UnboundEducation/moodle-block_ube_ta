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

 defined('MOODLE_INTERNAL') || die();

 /**
  * Block class
  * Compiles all the settings and loads the chatbot JS
  */
class block_ube_ta extends block_base {

    /**
     * Initialize the block
     */
    public function init() {
        $this->title = \get_string('pluginname', 'block_ube_ta');
    }

    /**
     * Allow the block to have a configuration
     */
    public function has_config() {
        return true;
    }

    /**
     * Allow the block to be added multiple times
     */
    public function specialization() {
        if (!empty($this->config->title)) {
            $this->title = $this->config->title;
        }
    }

    /**
     * Allow the block to be added multiple times
     */
    public function html_attributes() {
        $attributes = parent::html_attributes();
        
        if (!$this->page->user_is_editing()) {
            $attributes['class'] .= ' ube_hide_block';
        }

        return $attributes;
    }

    /**
     * Get the content for the block
     */
    public function get_content() {
        global $CFG;

        if ($this->content !== null) {
            return $this->content;
        }
        
        $config = \get_config('block_ube_ta');

        $apipath = null;
        if (!empty($config->oracle_domain)) {
            if (strpos($config->oracle_domain, 'localhost') !== false || strpos($config->oracle_domain, '127.0.0.1') !== false){
                $apipath = 'http://'.$config->oracle_domain.'/api/v1';
            } else {
                $apipath = 'https://'.$config->oracle_domain.'/api/v1';
            }
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

        $quick_filters = 'null';
        if (!empty($this->config->quick_filters)) {
            echo json_encode($this->config->quick_filters);
        }

        $showsource = 'false';
        if (!empty($this->config->showsource)) {
            $showsource = 'true';
        }

        $startopen = 'false';
        if (!empty($this->config->startopen)) {
            $startopen = 'true';
        }

        $condenseprompt = '';

        $questionprompt = '';
        if (!empty($this->config->questionprompt)) {
            $questionprompt = htmlspecialchars(addslashes(str_replace(["\r","\n"], ' ', $this->config->questionprompt)));
        }

        $temperature = 0;
        if (!empty($this->config->temperature)) {
            $temperature = $this->config->temperature;
        }

        $sourcecount = 5;
        if (!empty($this->config->sourcecount)) {
            $sourcecount = $this->config->sourcecount;
        }

        $customcss = '';
        if (!empty($this->config->customcss)) {
            $customcss = addslashes(str_replace(["\r","\n"], ' ', $this->config->customcss));
        }

        $cssurl = null;
        if (!empty($config->css_url)) {
            $cssurl = $config->css_url;
        }

        $inputPlaceholder = htmlspecialchars(addslashes(str_replace(["\r","\n"], ' ', \get_string('input_placeholder', 'block_ube_ta'))));

        $opener = \get_string('opener', 'block_ube_ta');
        if (!empty($this->config->opener)) {
            $opener = addslashes(str_replace(["\r","\n"], ' ', $this->config->opener));
        }

        $this->content = (object)[
            'text' => "
                <script type='module'>
                    const settings = {
                        apiPath: \"{$apipath}\",
                        cssPath: \"{$cssurl}\",
                        apiKey: \"{$apikey}\", 
                        expires: \"{$expires}\",
                        signature: \"{$signature}\", 
                        filters: {$filters},
                        inputPlaceholder: \"{$inputPlaceholder}\",
                        opener: \"{$opener}\",
                        showSource: {$showsource},
                        resultCount: {$sourcecount},
                        condensePrompt: \"{$condenseprompt}\",
                        questionPrompt: \"{$questionprompt}\",
                        temperature: {$temperature},
                        customCSS: \"{$customcss}\",
                        startOpen: {$startopen},
                    };
                
                    import {UBETA} from '{$CFG->wwwroot}/blocks/ube_ta/js/ubeta-bot1.js';
                    const ubeta = new UBETA(settings);
                </script>
            ",
        ];

        return $this->content;

    }

    /**
     * Get the signature for the Oracle API
     */
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