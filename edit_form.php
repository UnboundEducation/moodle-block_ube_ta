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

class block_ube_ta_edit_form extends block_edit_form {

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

        $mform->addElement('textarea', 'config_condenseprompt', \get_string('config_condenseprompt', 'block_ube_ta'));
        $mform->setDefault('config_condenseprompt', '');
        $mform->setType('config_condenseprompt', \PARAM_TEXT);
        $mform->addHelpButton('config_condenseprompt', 'config_condenseprompt', 'block_ube_ta');

        $mform->addElement('textarea', 'config_questionprompt', \get_string('config_questionprompt', 'block_ube_ta'));
        $mform->setDefault('config_questionprompt', '');
        $mform->setType('config_questionprompt', \PARAM_TEXT);
        $mform->addHelpButton('config_questionprompt', 'config_questionprompt', 'block_ube_ta');

        $mform->addElement('select', 'config_temperature', \get_string('config_temperature', 'block_ube_ta'), ['0' => '0','0.2' => '0.2', '0.4' => '0.4', '0.6' => '0.6', '0.8' => '0.8', '1.0' => '1.0']);
        $mform->setDefault('config_temperature', 0);
        $mform->setType('config_temperature', \PARAM_TEXT);
        $mform->addHelpButton('config_temperature', 'config_temperature', 'block_ube_ta');

        $mform->addElement('textarea', 'config_filters', \get_string('config_filters', 'block_ube_ta'));
        $mform->setDefault('config_filters', '');
        $mform->setType('config_filters', \PARAM_TEXT);
        $mform->addHelpButton('config_filters', 'config_filters', 'block_ube_ta');

        $mform->addElement('select', 'config_sourcecount', \get_string('config_sourcecount', 'block_ube_ta'), ['0' => '0','1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5']);
        $mform->setDefault('config_sourcecount', 5);
        $mform->setType('config_sourcecount', \PARAM_NUMBER);
        $mform->addHelpButton('config_sourcecount', 'config_sourcecount', 'block_ube_ta');

        $mform->addElement('textarea', 'config_customcss', \get_string('config_customcss', 'block_ube_ta'));
        $mform->setDefault('config_customcss', '');
        $mform->setType('config_customcss', \PARAM_TEXT);
        $mform->addHelpButton('config_customcss', 'config_customcss', 'block_ube_ta');

    }
}
