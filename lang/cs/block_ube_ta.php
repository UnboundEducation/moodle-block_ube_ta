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
 * Czech / Čeština
 *
 * @package    block_ube_ta
 * @copyright  2023 David Wipperfurth <dwipperfurth@unboundeducation.org>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['pluginname'] = 'Blok Asistenta Výuky';

// Globální nastavení
$string['oracle_apikey'] = 'API Klíč';
$string['oracle_apikey_help'] = 'API klíč, který vám byl poskytnut pro přístup k Oracle API.';
$string['oracle_privatekey'] = 'Soukromý Klíč';
$string['oracle_privatekey_help'] = 'Soukromý klíč, který vám byl poskytnut pro přístup k Oracle API.';
$string['oracle_session'] = 'Délka Relace';
$string['oracle_session_help'] = 'Délka trvání relace v sekundách. Toto by mělo ideálně odpovídat délce relace v LMS.';
$string['oracle_domain'] = 'Oracle Doména';
$string['oracle_domain_help'] = 'Doména Oracle API. Toto by měla být doména a port Oracle API.';
$string['css_url'] = 'CSS URL';
$string['css_url_help'] = 'URL k CSS souboru, který se má použít pro tento blok. Toto by měla být úplná URL adresa CSS souboru.';

// Nastavení bloku
$string['data_filters'] = 'Filtry Dat';
$string['config_opener'] = 'Úvodní Zpráva';
$string['config_opener_help'] = 'Úvodní zpráva "odeslaná robotem" uživateli, když je chat poprvé otevřen.<p>
<i>Poznámka: Ve výchozím nastavení je toto jazykově specifický řetězec. Změnou výchozího nastavení přepíšete podporu jazyka.</i></p>';
$string['config_filters'] = 'Konfigurace Filtrů';
$string['config_filters_help'] = 'Nastavení filtrů pro tento blok.<p>
Příklad: {"Kategorie": "Matematika", "Ročník": "3", "soubor": "handout.pdf"}
</p>';
$string['config_showsource'] = 'Zobrazit Zdroj';
$string['config_showsource_help'] = 'Zda zobrazit uživateli zdroje ve záznamu chatu. Zda jsou zobrazeny či nikoli, zdroje budou stále získány a poskytnuty AI.';
$string['config_startopen'] = 'Start Otevřený';
$string['config_startopen_help'] = 'Zda začít chat otevřený nebo zavřený.';
$string['config_condenseprompt'] = 'Kondenzovaný Prompt';
$string['config_condenseprompt_help'] = 'Šablona promptu používaná ke konsolidaci historie chatu a otázky do jednoho promptu. Nechte prázdné pro použití výchozího promptu.<p>
<i>Poznámka: Tato funkce funguje pouze na účtech s povoleným inženýrstvím promptů.</i></p>';
$string['config_questionprompt'] = 'Prompt Otázky';
$string['config_questionprompt_help'] = 'Šablona promptu používaná k položení otázky. Nechte prázdné pro použití výchozího promptu.<p>
<i>Poznámka: Tato funkce funguje pouze na účtech s povoleným inženýrstvím promptů.</i></p>';
$string['config_temperature'] = 'Teplota';
$string['config_temperature_help'] = 'Parametr teploty OpenAI GPT. Podporuje hodnoty od 0 do 1. Hodnoty blíže 0 budou mít za následek předvídatelnější, ale méně kreativní odpovědi. Hodnoty blíže 1 budou mít za následek kreativnější, ale méně předvídatelné odpovědi. Nechte prázdné pro použití výchozí hodnoty.';
$string['config_sourcecount'] = 'Počet Zdroje';
$string['config_sourcecount_help'] = 'Kolik zdrojů získat a poskytnout AI. Podporované hodnoty jsou od 0 do 5.';
$string['config_customcss'] = 'Vlastní CSS';
$string['config_customcss_help'] = 'Vlastní CSS pro tento blok. Mělo by se jednat o platné CSS.';
$string['metadata_filter'] = 'Filtry metadat';
$string['field_name'] = 'Název';
$string['field_value'] = 'Hodnota';
$string['add_filter'] = 'Přidat filtr';

// Řetězce bloku
$string['input_placeholder'] = 'Zeptejte se na otázku...';
$string['opener'] = 'Dobrý den. Jak vám mohu pomoci?';

// Oprávnění
$string['ube_ta:addinstance'] = 'Přidat nový blok UBE TA';
$string['ube_ta:myaddinstance'] = 'Přidat nový blok UBE TA na Moji Moodle stránku';

// Soukromí
$string['privacy:metadata'] = 'Blok UBE TA neukládá žádné osobní údaje.';
