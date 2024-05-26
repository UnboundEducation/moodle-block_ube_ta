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
 * Plugin Settings
 *
 * @package    block_ube_ta
 * @copyright  2023 David Wipperfurth <dwipperfurth@unboundeducation.org>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

global $CFG;

$settings->add(new admin_setting_configtext(
    'block_ube_ta/oracle_domain',
    \get_string('oracle_domain', 'block_ube_ta'),
    \get_string('oracle_domain_help', 'block_ube_ta'),
    '',
    \PARAM_TEXT
));

$settings->add(new admin_setting_configtext(
    'block_ube_ta/oracle_apikey',
    \get_string('oracle_apikey', 'block_ube_ta'),
    \get_string('oracle_apikey_help', 'block_ube_ta'),
    '',
    \PARAM_TEXT
));

$settings->add(new admin_setting_configtextarea(
    'block_ube_ta/oracle_privatekey',
    \get_string('oracle_privatekey', 'block_ube_ta'),
    \get_string('oracle_privatekey_help', 'block_ube_ta'),
    '',
    \PARAM_TEXT
));

$settings->add(new admin_setting_configduration(
    'block_ube_ta/oracle_session',
    \get_string('oracle_session', 'block_ube_ta'),
    \get_string('oracle_session_help', 'block_ube_ta'),
    60 * 60 * 2,
    \PARAM_INT
));

$settings->add(new admin_setting_configtext(
    'block_ube_ta/css_url',
    \get_string('css_url', 'block_ube_ta'),
    \get_string('css_url_help', 'block_ube_ta'),
    $CFG->wwwroot.'/blocks/ube_ta/css/ubeta-bot1.css',
    \PARAM_TEXT
));