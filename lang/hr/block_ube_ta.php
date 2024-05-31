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
 * Croatian / Hrvatski
 *
 * @package    block_ube_ta
 * @copyright  2023 David Wipperfurth <dwipperfurth@unboundeducation.org>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['pluginname'] = 'Blok Pomoćnika u Nastavi';

// Globalne postavke
$string['oracle_apikey'] = 'API Ključ';
$string['oracle_apikey_help'] = 'API ključ koji vam je dodijeljen za pristup Oracle API-ju.';
$string['oracle_privatekey'] = 'Privatni Ključ';
$string['oracle_privatekey_help'] = 'Privatni ključ koji vam je dodijeljen za pristup Oracle API-ju.';
$string['oracle_session'] = 'Duljina Sesije';
$string['oracle_session_help'] = 'Trajanje sesije u sekundama. Ovo bi idealno trebalo odražavati duljinu sesije LMS-a.';
$string['oracle_domain'] = 'Oracle Domena';
$string['oracle_domain_help'] = 'Domena Oracle API-ja. Ovo bi trebala biti domena i port Oracle API-ja.';
$string['css_url'] = 'CSS URL';
$string['css_url_help'] = 'URL do CSS datoteke koja će se koristiti za ovaj blok. Ovo bi trebao biti puni URL do CSS datoteke.';

// Postavke bloka
$string['data_filters'] = 'Filtar Podataka';
$string['config_opener'] = 'Početna Poruka';
$string['config_opener_help'] = 'Početna poruka "poslana od strane bota" krajnjem korisniku, kada se chat prvi put otvori.<p>
<i>Napomena: Prema zadanim postavkama, ovo je jezični specifičan niz. Promjena ovog zadanog poništit će podršku za jezik.</i></p>';
$string['config_filters'] = 'Konfiguriraj Filtar';
$string['config_filters_help'] = 'Konfigurirajte filtre za ovaj blok.<p>
Primjer: {"Kategorija": "Matematika", "Razred": "3", "datoteka": "handout.pdf"}
</p>';
$string['config_showsource'] = 'Prikaži Izvor';
$string['config_showsource_help'] = 'Hoće li krajnjem korisniku prikazati izvorne podatke u zapisniku chata. Bez obzira prikazuje li se ili ne, izvori će biti izvučeni i pruženi AI-u.';
$string['config_startopen'] = 'Započni Otvoreno';
$string['config_startopen_help'] = 'Hoće li chat započeti otvoren ili zatvoren.';
$string['config_condenseprompt'] = 'Sažmi Prompt';
$string['config_condenseprompt_help'] = 'Predložak prompta korišten za konsolidaciju povijesti chata i pitanja u jedan prompt. Ostavite prazno za korištenje zadanog prompta.<p>
<i>Napomena: Ova značajka radi samo na računima s omogućenom inženjerijom prompta.</i></p>';
$string['config_questionprompt'] = 'Prompt za Pitanje';
$string['config_questionprompt_help'] = 'Predložak prompta korišten za postavljanje pitanja. Ostavite prazno za korištenje zadanog prompta.<p>
<i>Napomena: Ova značajka radi samo na računima s omogućenom inženjerijom prompta.</i></p>';
$string['config_temperature'] = 'Temperatura';
$string['config_temperature_help'] = 'Parametar temperature OpenAI GPT-a. Podržane vrijednosti su od 0 do 1. Vrijednosti bliže 0 rezultirat će predvidljivijim, ali manje kreativnim odgovorima. Vrijednosti bliže 1 rezultirat će kreativnijim, ali manje predvidljivim odgovorima. Ostavite prazno za korištenje zadane vrijednosti.';
$string['config_sourcecount'] = 'Broj Izvora';
$string['config_sourcecount_help'] = 'Koliko izvora izvući i pružiti AI-u. Podržane vrijednosti su od 0 do 5.';
$string['config_customcss'] = 'Prilagođeni CSS';
$string['config_customcss_help'] = 'Prilagođeni CSS za ovaj blok. Ovo bi trebao biti valjani CSS.';
$string['metadata_filter'] = 'Filtriranje metapodataka';
$string['field_name'] = 'Naziv';
$string['field_value'] = 'Vrijednost';
$string['add_filter'] = 'Dodaj filtar';

// Blok poruke
$string['input_placeholder'] = 'Postavite pitanje...';
$string['opener'] = 'Pozdrav. Kako vam mogu pomoći?';

// Dopuštenja
$string['ube_ta:addinstance'] = 'Dodaj novi UBE TA blok';
$string['ube_ta:myaddinstance'] = 'Dodaj novi UBE TA blok na Moju Moodle stranicu';

// Privatnost
$string['privacy:metadata'] = 'UBE TA blok ne pohranjuje nikakve osobne podatke.';
