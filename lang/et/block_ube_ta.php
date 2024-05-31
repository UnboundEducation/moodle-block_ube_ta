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
 * Estonian / eesti
 *
 * @package    block_ube_ta
 * @copyright  2023 David Wipperfurth <dwipperfurth@unboundeducation.org>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['pluginname'] = 'Õppeassistent Blokk';

// Üldised seadistused
$string['oracle_apikey'] = 'API Võti';
$string['oracle_apikey_help'] = 'API võti, mis on teile antud Oracle API-le juurdepääsuks.';
$string['oracle_privatekey'] = 'Privaatvõti';
$string['oracle_privatekey_help'] = 'Privaatvõti, mis on teile antud Oracle API-le juurdepääsuks.';
$string['oracle_session'] = 'Sessiooni Pikkus';
$string['oracle_session_help'] = 'Sessiooni pikkus sekundites. See peaks ideaalis peegeldama LMS-i sessiooni pikkust.';
$string['oracle_domain'] = 'Oracle Domeen';
$string['oracle_domain_help'] = 'Oracle API domeen. See peaks olema Oracle API domeen ja port.';
$string['css_url'] = 'CSS URL';
$string['css_url_help'] = 'URL CSS-faili jaoks, mida selle bloki jaoks kasutada. See peaks olema täielik URL CSS-failini.';

// Bloki seadistused
$string['data_filters'] = 'Andmefiltrid';
$string['config_opener'] = 'Vestluse Avamine';
$string['config_opener_help'] = 'Algne sõnum, mille "bot" saadab lõppkasutajale, kui vestlus esmakordselt avatakse.<p>
<i>Märkus: Vaikimisi on see keelespetsiifiline string. Selle muutmine muudab keele toe kehtetuks.</i></p>';
$string['config_filters'] = 'Seadista Filtrid';
$string['config_filters_help'] = 'Seadistage selle bloki jaoks kasutatavad filtrid.<p>
Näide: {"Kategooria": "Matemaatika", "Klass": "3", "fail": "handout.pdf"}
</p>';
$string['config_showsource'] = 'Näita Allikat';
$string['config_showsource_help'] = 'Kas kuvada lõppkasutajale vestluslogis allikad. Allikad saadakse ja antakse AI-le, olenemata sellest, kas need kuvatakse või mitte.';
$string['config_startopen'] = 'Alusta Avatuna';
$string['config_startopen_help'] = 'Kas vestlus algab avatuna või suletuna.';
$string['config_condenseprompt'] = 'Kondenseeritud Küsimus';
$string['config_condenseprompt_help'] = 'Küsimuse esitamiseks kasutatav küsimuse šabloon. Jätke tühjaks, et kasutada vaikimisi küsimust.<p>
<i>Märkus: See funktsioon töötab ainult kontodel, millel on lubatud küsimuste vormistamine.</i></p>';
$string['config_questionprompt'] = 'Küsimuse Küsimus';
$string['config_questionprompt_help'] = 'Küsimuse esitamiseks kasutatav küsimuse šabloon. Jätke tühjaks, et kasutada vaikimisi küsimust.<p>
<i>Märkus: See funktsioon töötab ainult kontodel, millel on lubatud küsimuste vormistamine.</i></p>';
$string['config_temperature'] = 'Temperatuur';
$string['config_temperature_help'] = 'OpenAI GPT temperatuuriparameeter. Toetatud väärtused on 0 kuni 1. Väärtused, mis on lähemal 0-le, annavad etteaimatavamaid, kuid vähem loovaid vastuseid. Väärtused, mis on lähemal 1-le, annavad loovamaid, kuid vähem etteaimatavaid vastuseid. Jätke tühjaks, et kasutada vaikimisi väärtust.';
$string['config_sourcecount'] = 'Allikate Arv';
$string['config_sourcecount_help'] = 'Mitu allikat saadakse ja antakse AI-le. Toetatud väärtused on 0 kuni 5.';
$string['config_customcss'] = 'Kohandatud CSS';
$string['config_customcss_help'] = 'Kohandatud CSS selle bloki jaoks. See peaks olema kehtiv CSS.';
$string['metadata_filter'] = 'Metaandmete filtrid';
$string['field_name'] = 'Nimi';
$string['field_value'] = 'Väärtus';
$string['add_filter'] = 'Lisa filter';

// Bloki stringid
$string['input_placeholder'] = 'Esita küsimus...';
$string['opener'] = 'Tere. Kuidas saan aidata?';

// Õigused
$string['ube_ta:addinstance'] = 'Lisa uus UBE TA blokk';
$string['ube_ta:myaddinstance'] = 'Lisa uus UBE TA blokk Minu Moodle lehele';

// Privaatsus
$string['privacy:metadata'] = 'UBE TA blokk ei salvesta isikuandmeid.';
