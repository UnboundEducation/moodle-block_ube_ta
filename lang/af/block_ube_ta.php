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
 * Afrikaans
 *
 * @package    block_ube_ta
 * @copyright  2023 David Wipperfurth <dwipperfurth@unboundeducation.org>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['pluginname'] = 'Onderwysassistent Blok';

// Globale instellings
$string['oracle_apikey'] = 'API Sleutel';
$string['oracle_apikey_help'] = 'Die API sleutel wat aan jou verskaf is om toegang tot die Oracle API te kry.';
$string['oracle_privatekey'] = 'Privaat Sleutel';
$string['oracle_privatekey_help'] = 'Die privaat sleutel wat aan jou verskaf is om toegang tot die Oracle API te kry.';
$string['oracle_session'] = 'Sessie Lengte';
$string['oracle_session_help'] = 'Die lengte van tyd in sekondes om as \'n sessie te gebruik. Dit moet ideaal gesproke die sessie lengte van die LMS weerspieël.';
$string['oracle_domain'] = 'Oracle Domein';
$string['oracle_domain_help'] = 'Die domein van die Oracle API. Dit moet die domein en poort van die Oracle API wees.';
$string['css_url'] = 'CSS URL';
$string['css_url_help'] = 'Die URL na die CSS-lêer wat vir hierdie blok gebruik moet word. Dit moet \'n volledige URL na die CSS-lêer wees.';

// Blok instellings
$string['data_filters'] = 'Data Filters';
$string['config_opener'] = 'Gesprek Oopmaker';
$string['config_opener_help'] = 'Die aanvanklike boodskap "gestuur deur die bot" aan die eindgebruiker, wanneer die klets eerste oopgemaak word.<p>
<i>Let wel: Standaard is dit \'n taalspesifieke string. Om dit van die standaard te verander, sal taalondersteuning oorskry.</i></p>';
$string['config_filters'] = 'Stel Filters in';
$string['config_filters_help'] = 'Stel die filters in wat vir hierdie blok gebruik moet word.<p>
Voorbeeld: {"Kategorie": "Wiskunde", "Graad": "3", "lêer": "handout.pdf"}
</p>';
$string['config_showsource'] = 'Wys Bron';
$string['config_showsource_help'] = 'Of die verkrygde bronne aan die eindgebruiker getoon moet word in die kletsgeskiedenis. Of dit gewys word of nie, die bronne sal steeds verkry word en aan die AI verskaf word.';
$string['config_startopen'] = 'Begin Oop';
$string['config_startopen_help'] = 'Of die klets moet begin as oop of toe.';
$string['config_condenseprompt'] = 'Kondenseer Prompt';
$string['config_condenseprompt_help'] = 'Die prompt sjabloon wat gebruik word om die kletsgeskiedenis en vraag in \'n enkele prompt te konsolideer. Laat leeg om die standaard prompt te gebruik.<p>
<i>Let wel: Hierdie funksie werk slegs op rekeninge met prompt-ingenieurswese geaktiveer.</i></p>';
$string['config_questionprompt'] = 'Vraag Prompt';
$string['config_questionprompt_help'] = 'Die prompt sjabloon wat gebruik word om die vraag te vra. Laat leeg om die standaard prompt te gebruik.<p>
<i>Let wel: Hierdie funksie werk slegs op rekeninge met prompt-ingenieurswese geaktiveer.</i></p>';
$string['config_temperature'] = 'Temperatuur';
$string['config_temperature_help'] = 'OpenAI GPT temperatuur parameter. Ondersteun waardes van 0 tot 1. Waardes nader aan 0 sal meer voorspelbare, maar minder kreatiewe, antwoorde tot gevolg hê. Waardes nader aan 1 sal meer kreatiewe, maar minder voorspelbare, antwoorde tot gevolg hê. Laat leeg om die standaard waarde te gebruik.';
$string['config_sourcecount'] = 'Aantal Bronne';
$string['config_sourcecount_help'] = 'Hoeveel bronne om te verkry en aan die AI te verskaf. Ondersteunde waardes is 0 tot 5.';
$string['config_customcss'] = 'Pasgemaakte CSS';
$string['config_customcss_help'] = 'Pasgemaakte CSS wat vir hierdie blok gebruik moet word. Dit moet geldige CSS wees.';
$string['metadata_filter'] = 'Metadata Filters';
$string['field_name'] = 'Naam';
$string['field_value'] = 'Waarde';
$string['add_filter'] = 'Voeg Filter By';

// Blok strings
$string['input_placeholder'] = 'Vra \'n vraag...';
$string['opener'] = 'Hallo. Hoe kan ek jou help?';

// Permissies
$string['ube_ta:addinstance'] = 'Voeg \'n nuwe UBE TA blok by';
$string['ube_ta:myaddinstance'] = 'Voeg \'n nuwe UBE TA blok by die My Moodle bladsy by';

// Privaatheid
$string['privacy:metadata'] = 'Die UBE TA blok stoor geen persoonlike data nie.';
 