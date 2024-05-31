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
 * Hungarian / magyar
 *
 * @package    block_ube_ta
 * @copyright  2023 David Wipperfurth <dwipperfurth@unboundeducation.org>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['pluginname'] = 'Oktatási Asszisztens Blokk';

// Globális beállítások
$string['oracle_apikey'] = 'API kulcs';
$string['oracle_apikey_help'] = 'Az Oracle API eléréséhez szükséges API kulcs.';
$string['oracle_privatekey'] = 'Privát kulcs';
$string['oracle_privatekey_help'] = 'Az Oracle API eléréséhez szükséges privát kulcs.';
$string['oracle_session'] = 'Munkamenet Hossza';
$string['oracle_session_help'] = 'A munkamenet hossza másodpercekben. Ez ideálisan a LMS munkamenet hosszával egyezzen meg.';
$string['oracle_domain'] = 'Oracle Domain';
$string['oracle_domain_help'] = 'Az Oracle API domainje. Ez az Oracle API domainje és portja legyen.';
$string['css_url'] = 'CSS URL';
$string['css_url_help'] = 'A blokkhoz használt CSS fájl URL-je. Ez egy teljes URL legyen a CSS fájlhoz.';

// Blokk beállítások
$string['data_filters'] = 'Adatszűrők';
$string['config_opener'] = 'Megnyitó Üzenet';
$string['config_opener_help'] = 'A kezdeti üzenet, amit a "bot" küld a végfelhasználónak, amikor a csevegés először megnyílik.<p>
<i>Megjegyzés: Alapértelmezés szerint ez egy nyelvspecifikus szöveg. Ennek módosítása felülírja a nyelvi támogatást.</i></p>';
$string['config_filters'] = 'Szűrők Konfigurálása';
$string['config_filters_help'] = 'Konfigurálja a blokkhoz használt szűrőket.<p>
Példa: {"Kategória": "Matematika", "Osztály": "3", "fájl": "kézirat.pdf"}
</p>';
$string['config_showsource'] = 'Forrás Megjelenítése';
$string['config_showsource_help'] = 'Megjelenítse-e a lekért forrásokat a végfelhasználónak a csevegési naplóban. Függetlenül attól, hogy megjelennek-e vagy sem, a források lekérdezésre és az AI számára biztosítva lesznek.';
$string['config_startopen'] = 'Nyitottan Kezdődik';
$string['config_startopen_help'] = 'Nyitva vagy zárva kezdődjön a csevegés.';
$string['config_condenseprompt'] = 'Kondenzált Prompt';
$string['config_condenseprompt_help'] = 'A prompt sablon, amelyet a csevegési előzmények és a kérdés egyetlen promptba történő konszolidálására használnak. Hagyja üresen az alapértelmezett prompt használatához.<p>
<i>Megjegyzés: Ez a funkció csak a prompt engineering engedélyezett fiókokon működik.</i></p>';
$string['config_questionprompt'] = 'Kérdés Prompt';
$string['config_questionprompt_help'] = 'A prompt sablon, amelyet a kérdés feltevésére használnak. Hagyja üresen az alapértelmezett prompt használatához.<p>
<i>Megjegyzés: Ez a funkció csak a prompt engineering engedélyezett fiókokon működik.</i></p>';
$string['config_temperature'] = 'Hőmérséklet';
$string['config_temperature_help'] = 'OpenAI GPT hőmérséklet paraméter. Támogatott értékek: 0-tól 1-ig. Az értékek, amelyek közelebb vannak a 0-hoz, előre láthatóbb, de kevésbé kreatív válaszokat eredményeznek. Az 1-hez közelebb eső értékek kreatívabb, de kevésbé előre látható válaszokat eredményeznek. Hagyja üresen az alapértelmezett érték használatához.';
$string['config_sourcecount'] = 'Források Száma';
$string['config_sourcecount_help'] = 'Hány forrást kell lekérni és az AI-nak biztosítani. Támogatott értékek: 0-tól 5-ig.';
$string['config_customcss'] = 'Egyéni CSS';
$string['config_customcss_help'] = 'Egyéni CSS használata ehhez a blokkokhoz. Ez érvényes CSS legyen.';
$string['metadata_filter'] = 'Metaadat szűrők';
$string['field_name'] = 'Név';
$string['field_value'] = 'Érték';
$string['add_filter'] = 'Szűrő hozzáadása';

// Blokk szövegek
$string['input_placeholder'] = 'Tegyen fel egy kérdést...';
$string['opener'] = 'Helló. Hogyan segíthetek?';

// Engedélyek
$string['ube_ta:addinstance'] = 'Új UBE TA blokk hozzáadása';
$string['ube_ta:myaddinstance'] = 'Új UBE TA blokk hozzáadása a Saját Moodle oldalhoz';

// Adatvédelem
$string['privacy:metadata'] = 'Az UBE TA blokk nem tárol személyes adatokat.';
