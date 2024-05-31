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
 * Danish / Dansk
 *
 * @package    block_ube_ta
 * @copyright  2023 David Wipperfurth <dwipperfurth@unboundeducation.org>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['pluginname'] = 'Undervisningsassistent Blok';

// Globale indstillinger
$string['oracle_apikey'] = 'API Nøgle';
$string['oracle_apikey_help'] = 'API-nøglen, der er tildelt dig for at få adgang til Oracle API\'et.';
$string['oracle_privatekey'] = 'Privat Nøgle';
$string['oracle_privatekey_help'] = 'Den private nøgle, der er tildelt dig for at få adgang til Oracle API\'et.';
$string['oracle_session'] = 'Sessionslængde';
$string['oracle_session_help'] = 'Sessionslængden i sekunder. Dette bør ideelt set matche sessionslængden for LMS\'et.';
$string['oracle_domain'] = 'Oracle Domæne';
$string['oracle_domain_help'] = 'Domænet for Oracle API\'et. Dette bør være domænet og porten for Oracle API\'et.';
$string['css_url'] = 'CSS URL';
$string['css_url_help'] = 'URL\'en til CSS-filen, der skal bruges til denne blok. Dette bør være en fuld URL til CSS-filen.';

// Blokindstillinger
$string['data_filters'] = 'Datafiltre';
$string['config_opener'] = 'Åbningsbesked';
$string['config_opener_help'] = 'Den indledende besked "sendt af botten" til slutbrugeren, når chatten først åbnes.<p>
<i>Bemærk: Som standard er dette en sprogafhængig streng. Ændring af denne fra standard vil overskrive sprogunderstøttelsen.</i></p>';
$string['config_filters'] = 'Konfigurer Filtre';
$string['config_filters_help'] = 'Konfigurer de filtre, der skal bruges til denne blok.<p>
Eksempel: {"Kategori": "Matematik", "Klassetrin": "3", "fil": "handout.pdf"}
</p>';
$string['config_showsource'] = 'Vis Kilde';
$string['config_showsource_help'] = 'Om kilderne, der trækkes ind, skal vises for slutbrugeren i chatloggen. Uanset om de vises eller ej, vil kilderne stadig blive hentet og leveret til AI\'en.';
$string['config_startopen'] = 'Start Åben';
$string['config_startopen_help'] = 'Om chatten skal starte åben eller lukket.';
$string['config_condenseprompt'] = 'Kondenser Prompt';
$string['config_condenseprompt_help'] = 'Promptskabelonen, der bruges til at konsolidere chatloggen og spørgsmålet til en enkelt prompt. Lad være tom for at bruge standardprompten.<p>
<i>Bemærk: Denne funktion virker kun på konti med prompt engineering aktiveret.</i></p>';
$string['config_questionprompt'] = 'Spørgsmålsprompt';
$string['config_questionprompt_help'] = 'Promptskabelonen, der bruges til at stille spørgsmålet. Lad være tom for at bruge standardprompten.<p>
<i>Bemærk: Denne funktion virker kun på konti med prompt engineering aktiveret.</i></p>';
$string['config_temperature'] = 'Temperatur';
$string['config_temperature_help'] = 'OpenAI GPT temperaturparameter. Understøtter værdier fra 0 til 1. Værdier tættere på 0 vil resultere i mere forudsigelige, men mindre kreative svar. Værdier tættere på 1 vil resultere i mere kreative, men mindre forudsigelige svar. Lad være tom for at bruge standardværdien.';
$string['config_sourcecount'] = 'Antal Kilder';
$string['config_sourcecount_help'] = 'Hvor mange kilder der skal trækkes og leveres til AI\'en. Understøttede værdier er 0 til 5.';
$string['config_customcss'] = 'Brugerdefineret CSS';
$string['config_customcss_help'] = 'Brugerdefineret CSS til denne blok. Dette bør være gyldig CSS.';
$string['metadata_filter'] = 'Metadatafiltre';
$string['field_name'] = 'Navn';
$string['field_value'] = 'Værdi';
$string['add_filter'] = 'Tilføj filter';

// Blokstrenge
$string['input_placeholder'] = 'Stil et spørgsmål...';
$string['opener'] = 'Hej. Hvordan kan jeg hjælpe dig?';

// Tilladelser
$string['ube_ta:addinstance'] = 'Tilføj en ny UBE TA blok';
$string['ube_ta:myaddinstance'] = 'Tilføj en ny UBE TA blok til Min Moodle side';

// Privatliv
$string['privacy:metadata'] = 'UBE TA blokken gemmer ingen personlige data.';
