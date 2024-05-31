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
 * Dutch / Nederlands
 *
 * @package    block_ube_ta
 * @copyright  2023 David Wipperfurth <dwipperfurth@unboundeducation.org>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['pluginname'] = 'Lesassistent Blok';

// Globale instellingen
$string['oracle_apikey'] = 'API Sleutel';
$string['oracle_apikey_help'] = 'De API-sleutel die aan u is verstrekt voor toegang tot de Oracle API.';
$string['oracle_privatekey'] = 'Privésleutel';
$string['oracle_privatekey_help'] = 'De privésleutel die aan u is verstrekt voor toegang tot de Oracle API.';
$string['oracle_session'] = 'Sessie Lengte';
$string['oracle_session_help'] = 'De sessieduur in seconden. Dit zou idealiter overeen moeten komen met de sessieduur van de LMS.';
$string['oracle_domain'] = 'Oracle Domein';
$string['oracle_domain_help'] = 'Het domein van de Oracle API. Dit zou het domein en de poort van de Oracle API moeten zijn.';
$string['css_url'] = 'CSS URL';
$string['css_url_help'] = 'De URL naar het CSS-bestand dat voor dit blok moet worden gebruikt. Dit moet een volledige URL naar het CSS-bestand zijn.';

// Blokinstellingen
$string['data_filters'] = 'Datafilters';
$string['config_opener'] = 'Gesprek Startbericht';
$string['config_opener_help'] = 'Het eerste bericht dat door de bot naar de eindgebruiker wordt gestuurd wanneer de chat voor het eerst wordt geopend.<p>
<i>Opmerking: Standaard is dit een taal specifieke string. Als u dit verandert, wordt de taalondersteuning overschreven.</i></p>';
$string['config_filters'] = 'Configureer Filters';
$string['config_filters_help'] = 'Configureer de filters die voor dit blok moeten worden gebruikt.<p>
Voorbeeld: {"Categorie": "Wiskunde", "Klas": "3", "bestand": "handout.pdf"}
</p>';
$string['config_showsource'] = 'Toon Bron';
$string['config_showsource_help'] = 'Of de opgehaalde bronnen in de chatlog aan de eindgebruiker moeten worden getoond. Of ze nu getoond worden of niet, de bronnen worden nog steeds opgehaald en aan de AI geleverd.';
$string['config_startopen'] = 'Start Open';
$string['config_startopen_help'] = 'Of de chat geopend of gesloten moet beginnen.';
$string['config_condenseprompt'] = 'Samenvattende Prompt';
$string['config_condenseprompt_help'] = 'De promptsjabloon die wordt gebruikt om de chatgeschiedenis en vraag samen te voegen tot één prompt. Laat leeg om de standaardprompt te gebruiken.<p>
<i>Opmerking: Deze functie werkt alleen op accounts met ingeschakelde prompt engineering.</i></p>';
$string['config_questionprompt'] = 'Vraagprompt';
$string['config_questionprompt_help'] = 'De promptsjabloon die wordt gebruikt om de vraag te stellen. Laat leeg om de standaardprompt te gebruiken.<p>
<i>Opmerking: Deze functie werkt alleen op accounts met ingeschakelde prompt engineering.</i></p>';
$string['config_temperature'] = 'Temperatuur';
$string['config_temperature_help'] = 'De temperatuurparameter van OpenAI GPT. Ondersteunt waarden van 0 tot 1. Waarden dichter bij 0 resulteren in meer voorspelbare, maar minder creatieve antwoorden. Waarden dichter bij 1 resulteren in creatievere, maar minder voorspelbare antwoorden. Laat leeg om de standaardwaarde te gebruiken.';
$string['config_sourcecount'] = 'Aantal Bronnen';
$string['config_sourcecount_help'] = 'Hoeveel bronnen moeten worden opgehaald en aan de AI worden geleverd. Ondersteunde waarden zijn van 0 tot 5.';
$string['config_customcss'] = 'Aangepaste CSS';
$string['config_customcss_help'] = 'Aangepaste CSS voor dit blok. Dit moet geldige CSS zijn.';
$string['metadata_filter'] = 'Metadatafilters';
$string['field_name'] = 'Naam';
$string['field_value'] = 'Waarde';
$string['add_filter'] = 'Filter toevoegen';

// Blokstrings
$string['input_placeholder'] = 'Stel een vraag...';
$string['opener'] = 'Hallo. Hoe kan ik u helpen?';

// Rechten
$string['ube_ta:addinstance'] = 'Voeg een nieuw UBE TA blok toe';
$string['ube_ta:myaddinstance'] = 'Voeg een nieuw UBE TA blok toe aan Mijn Moodle pagina';

// Privacy
$string['privacy:metadata'] = 'Het UBE TA blok slaat geen persoonlijke gegevens op.';
