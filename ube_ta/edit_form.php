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

        $mform->addElement('header', 'config_header', get_string('blocksettings', 'block'));

        $mform->addElement('textarea', 'config_filters', get_string('data_filters', 'block_ube_ta'));
        $mform->setDefault('config_filters', '');
        $mform->setType('config_filters', PARAM_TEXT);
        $mform->addHelpButton('config_filters', 'config_filters', 'block_ube_ta');
    }
}
