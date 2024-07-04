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
 * Instance Settings
 *
 * @package    block_ube_ta
 * @copyright  2023 David Wipperfurth <dwipperfurth@unboundeducation.org>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

/**
 * Add settings for the block
 */
class block_ube_ta_edit_form extends block_edit_form {

    /**
     * Define the form
     */
    protected function specific_definition($mform) {

        $mform->addElement('header', 'config_header', \get_string('blocksettings', 'block'));

        $mform->addElement('textarea', 'config_opener', \get_string('config_opener', 'block_ube_ta'));
        $mform->setDefault('config_opener', '');
        $mform->setType('config_opener', \PARAM_TEXT);
        $mform->addHelpButton('config_opener', 'config_opener', 'block_ube_ta');

        $mform->addElement('advcheckbox', 'config_showsource', \get_string('config_showsource', 'block_ube_ta'));
        $mform->setDefault('config_showsource', true);
        $mform->setType('config_showsource', \PARAM_BOOL);
        $mform->addHelpButton('config_showsource', 'config_showsource', 'block_ube_ta');

        $mform->addElement('advcheckbox', 'config_startopen', \get_string('config_startopen', 'block_ube_ta'));
        $mform->setDefault('config_startopen', false);
        $mform->setType('config_startopen', \PARAM_BOOL);
        $mform->addHelpButton('config_startopen', 'config_startopen', 'block_ube_ta');

        $mform->addElement('select', 'config_temperature', \get_string('config_temperature', 'block_ube_ta'), ['0' => '0','0.2' => '0.2', '0.4' => '0.4', '0.6' => '0.6', '0.8' => '0.8', '1.0' => '1.0']);
        $mform->setDefault('config_temperature', 0);
        $mform->setType('config_temperature', \PARAM_TEXT);
        $mform->addHelpButton('config_temperature', 'config_temperature', 'block_ube_ta');

        $mform->addElement('select', 'config_sourcecount', \get_string('config_sourcecount', 'block_ube_ta'), ['0' => '0','1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5']);
        $mform->setDefault('config_sourcecount', 5);
        $mform->setType('config_sourcecount', \PARAM_INT);
        $mform->addHelpButton('config_sourcecount', 'config_sourcecount', 'block_ube_ta');

        $mform->addElement('textarea', 'config_questionprompt', \get_string('config_questionprompt', 'block_ube_ta'));
        $mform->setDefault('config_questionprompt', '');
        $mform->setType('config_questionprompt', \PARAM_TEXT);
        $mform->addHelpButton('config_questionprompt', 'config_questionprompt', 'block_ube_ta');

        $mform->addElement('textarea', 'config_customcss', \get_string('config_customcss', 'block_ube_ta'));
        $mform->setDefault('config_customcss', '');
        $mform->setType('config_customcss', \PARAM_TEXT);
        $mform->addHelpButton('config_customcss', 'config_customcss', 'block_ube_ta');
        $mform->setAdvanced('config_customcss', true);

        // Metadata Filters
        $mform->addElement('header', 'filter_header', \get_string('metadata_filter', 'block_ube_ta'));
        $mform->setExpanded('filter_header', true);

        $grouparray = [
            $mform->createElement('static', 'field_name_label', \get_string('field_name', 'block_ube_ta'), \get_string('field_name', 'block_ube_ta')),
            $mform->createElement('text', 'field_name', \get_string('field_name', 'block_ube_ta')),
            $mform->createElement('static', 'field_value_label', \get_string('field_value', 'block_ube_ta'), " &nbsp; ".\get_string('field_value', 'block_ube_ta')),
            $mform->createElement('text', 'field_value', \get_string('field_value', 'block_ube_ta')),
        ];
        $repeatarray = [
            $mform->createElement('group', 'quick_filter_group', '', $grouparray)
        ];
        new MoodleQuickForm_group($mform, 'quick_filter_group', 'Quick Filters', $repeatarray, null, null, null, null, false);
        $repeatno = 0; // Number of elements to initially display
        if (!empty($this->block->config->filters)){
            $filters = json_decode($this->block->config->filters);
            if (is_array($filters)){
                $repeatno = count($filters);
                $i=0;
                foreach ($filters as $key => $value){
                    $mform->setDefault("quick_filter_group[$i][field_name]", $key);
                    $mform->setDefault("quick_filter_group[$i][field_value]", $value);
                    $i++;
                }
            }
        }
        $repeateloptions = [
            'quick_filter_group' => [
                'type' => \PARAM_RAW,
            ],
        ]; // Options to apply to each repeat
        $this->repeat_elements($repeatarray, $repeatno, $repeateloptions, 'config_quick_filters', 'add_filter', 1, \get_string('add_filter', 'block_ube_ta'), true);

        $mform->addElement('textarea', 'config_filters', \get_string('config_filters', 'block_ube_ta'));
        $mform->setDefault('config_filters', '');
        $mform->setType('config_filters', \PARAM_TEXT);
        $mform->addHelpButton('config_filters', 'config_filters', 'block_ube_ta');
        $mform->setAdvanced('config_filters', true);

    }

    function set_data($defaults) {
        if (!empty($this->block->config)) {
            //echo "set data";
            //echo json_encode($this->block->config);
            //echo json_encode($defaults);
            //die();

            if (!empty($this->block->config->filters)){
                $filters = json_decode($this->block->config->filters, true);
                $defaults->quick_filter_group = [];
                $defaults->config_quick_filters = count($filters);
                foreach ($filters as $key => $value){
                    $defaults->quick_filter_group []= (object)[
                        'field_name' => $key,
                        'field_value' => $value
                    ];
                }
            }
        }

        //echo "defaults";
        //echo json_encode($defaults);
        //die();

        parent::set_data($defaults);
    }

    public function get_data() {
        if ($data = parent::get_data()) {
            //echo "get data";
            //echo json_encode($data);
            //die();

            if (!empty($data->quick_filter_group)){
                $filters = [];
                foreach ($data->quick_filter_group as $filter){
                    if (!empty($filter['field_name']) && !empty($filter['field_value'])){
                        $filters[$filter['field_name']] = $filter['field_value'];
                    }
                }
                if (!empty($filters)) {
                    $data->config_filters = json_encode($filters);
                    $data->config_quick_filters = count($filters);
                }
            }
        }
        return $data;
    }
}
