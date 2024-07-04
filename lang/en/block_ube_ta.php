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
 * English
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
$string['oracle_session_help'] = 'The length of time in seconds to use as a session.  This should, ideally, mirrior the session length of the LMS.';
$string['oracle_domain'] = 'Oracle Domain';
$string['oracle_domain_help'] = 'The domain of the Oracle API.  This should be the domain and port of the Oracle API.';
$string['css_url'] = 'CSS URL';
$string['css_url_help'] = 'The URL to the CSS file to use for this block.  This should be a full URL to the CSS file.';

//Block settings
$string['data_filters'] = 'Data Filters';
$string['config_opener'] = 'Conversation Opener';
$string['config_opener_help'] = 'The initial message "sent by the bot" to the end-user, when the chat is first opened.<p>
<i>Note: By default, this is a language specific string. Changing it from the default will override language support.</i></p>';
$string['config_filters'] = 'Advanced Filtering';
$string['config_filters_help'] = 'Configure the filters to use for this block.<p>
Exmaple: {"Category": "Math", "Grade": "3", "file": "handout.pdf"}
</p>';
$string['config_showsource'] = 'Show Source';
$string['config_showsource_help'] = 'Whether to show the pulled sources to the end-user, in the chat log. Whether shown or not, the sources will still be pulled and provided to the AI.';
$string['config_startopen'] = 'Start Open';
$string['config_startopen_help'] = 'Whether to start the chat open, or closed.';
$string['config_condenseprompt'] = 'Condense Prompt';
$string['config_condenseprompt_help'] = 'The prompt template used to consolidate the chat history and question into a single prompt. Leave blank to use the default prompt.<p>
<i>Note:  This feature only works on accounts with prompt engineering enabled.</i></p>';
$string['config_questionprompt'] = 'Question Prompt';
$string['config_questionprompt_help'] = 'The prompt template used to ask the question. Leave blank to use the default prompt.<p>
<i>Note:  This feature only works on accounts with prompt engineering enabled.</i></p>';
$string['config_temperature'] = 'Temperature';
$string['config_temperature_help'] = 'OpenAI GPT temperature parameter. Supports values from 0 to 1. Values closer to 0 will result in more predictable, but less creative, responses. Values closer to 1 will result in more creative, but less predictable, responses. Leave blank to use the default value.';
$string['config_sourcecount'] = 'Source Count';
$string['config_sourcecount_help'] = 'How many sources to pull and provide to the AI. Supported values are 0 to 5.';
$string['config_customcss'] = 'Custom CSS';
$string['config_customcss_help'] = 'Custom CSS to use for this block.  This should be valid CSS.';
$string['metadata_filter'] = 'Metadata Filters';
$string['field_name'] = 'Name';
$string['field_value'] = 'Value';
$string['add_filter'] = 'Add Filter';

// Block strings
$string['input_placeholder'] = 'Ask a question...';
$string['opener'] = 'Hello.  How may I help you?';

// Permissions
$string['ube_ta:addinstance'] = 'Add a new UBE TA block';
$string['ube_ta:myaddinstance'] = 'Add a new UBE TA block to the My Moodle page';

// Privacy
$string['privacy:metadata'] = 'The UBE TA block does not store any personal data.';
