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
 * Lang Strings
 *
 * @package    block_ube_ta
 * @copyright  2023 David Wipperfurth <dwipperfurth@unboundeducation.org>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['pluginname'] = 'Teaching Assistant Block';

// Global settings
$string['oracle_apikey'] = 'API Key';
$string['oracle_apikey_help'] = 'The API key provided to you for accessing the Oracle API.';
$string['oracle_privatekey'] = 'Private Key';
$string['oracle_privatekey_help'] = 'The private key provided to you for accessing the Oracle API.';
$string['oracle_session'] = 'Session Length';
$string['oracle_session_help'] = 'The length of time in seconds to use as a session.  This should ideally mirrior the session length of the LMS.';
$string['oracle_domain'] = 'Oracle Domain';
$string['oracle_domain_help'] = 'The domain of the Oracle API.  This should be the domain and port of the Oracle API.';

//Block settings
$string['data_filters'] = 'Data Filters';
$string['config_filters'] = 'Configure Filters';
$string['config_filters_help'] = 'Configure the filters to use for this block.<p>
Exmaple: {"Category": "Math", "Grade": "3", "file": "handout.pdf"}
</p>';

// Permissions
$string['ube_ta:addinstance'] = 'Add a new UBE TA block';
$string['ube_ta:myaddinstance'] = 'Add a new UBE TA block to the My Moodle page';

// Privacy
$string['privacy:metadata'] = 'The UBE TA block does not store any personal data.';
