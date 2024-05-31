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
 * Basque
 *
 * @package    block_ube_ta
 * @copyright  2023 David Wipperfurth <dwipperfurth@unboundeducation.org>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['pluginname'] = 'Irakasle Laguntzaile Blokea';

// Ezarpen globalak
$string['oracle_apikey'] = 'API Gakoa';
$string['oracle_apikey_help'] = 'Oracle APIra sartzeko emandako API gakoa.';
$string['oracle_privatekey'] = 'Gako Pribatua';
$string['oracle_privatekey_help'] = 'Oracle APIra sartzeko emandako gako pribatua.';
$string['oracle_session'] = 'Saioaren Iraupena';
$string['oracle_session_help'] = 'Saioa erabiltzeko denbora segundotan. Hau LMS saioaren iraupena islatzea komeni da.';
$string['oracle_domain'] = 'Oracle Domeinua';
$string['oracle_domain_help'] = 'Oracle APIaren domeinua. Hau Oracle APIaren domeinua eta portua izan beharko luke.';
$string['css_url'] = 'CSS URLa';
$string['css_url_help'] = 'Bloke honetarako erabiliko den CSS fitxategiaren URLa. Hau CSS fitxategiaren URLa osoa izan beharko luke.';

// Bloke ezarpenak
$string['data_filters'] = 'Datu Iragazkiak';
$string['config_opener'] = 'Elkarrizketa Irekitzailea';
$string['config_opener_help'] = 'Erabiltzaileari "bot-ak bidalitako" hasierako mezua, txata lehen aldiz irekitzen denean.<p>
<i>Oharra: Lehenetsita, hau hizkuntza espezifikoko kate bat da. Lehenetsitakoa aldatzeak hizkuntza euskarria gaindituko du.</i></p>';
$string['config_filters'] = 'Iragazkiak Konfiguratu';
$string['config_filters_help'] = 'Bloke honetarako erabiliko diren iragazkiak konfiguratu.<p>
Adibidea: {"Kategoria": "Matematika", "Maila": "3", "fitxategia": "eskuorri.pdf"}
</p>';
$string['config_showsource'] = 'Iturria Erakutsi';
$string['config_showsource_help'] = 'Txat erregistroan erabiltzaileari erakutsi iturriak. Erakutsi ala ez, iturriak aterako dira eta AIari emango zaizkio.';
$string['config_startopen'] = 'Ireki Hasi';
$string['config_startopen_help'] = 'Txata irekita edo itxita hasi behar den.';
$string['config_condenseprompt'] = 'Eskaera Laburtu';
$string['config_condenseprompt_help'] = 'Txataren historia eta galdera eskaera bakarrean bateratzeko erabiltzen den eskaera txantiloia. Hutsik utzi eskaera lehenetsia erabiltzeko.<p>
<i>Oharra: Ezaugarri hau eskaera ingeniaritza gaituta duten kontuetan bakarrik funtzionatzen du.</i></p>';
$string['config_questionprompt'] = 'Galdera Eskaera';
$string['config_questionprompt_help'] = 'Galdera egiteko erabiltzen den eskaera txantiloia. Hutsik utzi eskaera lehenetsia erabiltzeko.<p>
<i>Oharra: Ezaugarri hau eskaera ingeniaritza gaituta duten kontuetan bakarrik funtzionatzen du.</i></p>';
$string['config_temperature'] = 'Tenperatura';
$string['config_temperature_help'] = 'OpenAI GPT tenperatura parametroa. 0tik 1era balioak onartzen ditu. 0ra hurbilago dauden balioek erantzun aurreikusgarriagoak, baina gutxiago sortzaileak, emango dituzte. 1era hurbilago dauden balioek erantzun sortzaileagoak, baina gutxiago aurreikusgarriak, emango dituzte. Hutsik utzi lehenetsitako balioa erabiltzeko.';
$string['config_sourcecount'] = 'Iturri Kopurua';
$string['config_sourcecount_help'] = 'Zenbat iturri atera eta AIari emango zaizkion. Onartutako balioak 0tik 5era dira.';
$string['config_customcss'] = 'CSS Pertsonalizatua';
$string['config_customcss_help'] = 'Bloke honetarako erabiliko den CSS pertsonalizatua. CSS baliozkoa izan beharko litzateke.';
$string['metadata_filter'] = 'Metadatuen Iragazkiak';
$string['field_name'] = 'Izena';
$string['field_value'] = 'Balioa';
$string['add_filter'] = 'Gehitu Iragazkia';

// Bloke kateak
$string['input_placeholder'] = 'Egin galdera bat...';
$string['opener'] = 'Kaixo. Nola lagundu dezaket?';

// Baimenak
$string['ube_ta:addinstance'] = 'UBE TA bloke berri bat gehitu';
$string['ube_ta:myaddinstance'] = 'UBE TA bloke berri bat Gehitu Nire Moodle orrira';

// Pribatutasuna
$string['privacy:metadata'] = 'UBE TA blokearen ez du datu pertsonalik gordetzen.';
