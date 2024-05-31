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
 * German / Deutsch
 *
 * @package    block_ube_ta
 * @copyright  2023 David Wipperfurth <dwipperfurth@unboundeducation.org>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['pluginname'] = 'Lehrassistent Block';

// Globale Einstellungen
$string['oracle_apikey'] = 'API-Schlüssel';
$string['oracle_apikey_help'] = 'Der Ihnen zur Verfügung gestellte API-Schlüssel für den Zugriff auf die Oracle-API.';
$string['oracle_privatekey'] = 'Privatschlüssel';
$string['oracle_privatekey_help'] = 'Der Ihnen zur Verfügung gestellte Privatschlüssel für den Zugriff auf die Oracle-API.';
$string['oracle_session'] = 'Sitzungslänge';
$string['oracle_session_help'] = 'Die Länge der Sitzung in Sekunden. Dies sollte idealerweise der Sitzungslänge des LMS entsprechen.';
$string['oracle_domain'] = 'Oracle-Domäne';
$string['oracle_domain_help'] = 'Die Domäne der Oracle-API. Dies sollte die Domäne und der Port der Oracle-API sein.';
$string['css_url'] = 'CSS-URL';
$string['css_url_help'] = 'Die URL zur CSS-Datei, die für diesen Block verwendet werden soll. Dies sollte eine vollständige URL zur CSS-Datei sein.';

// Blockeinstellungen
$string['data_filters'] = 'Datenfilter';
$string['config_opener'] = 'Eröffnungsnachricht';
$string['config_opener_help'] = 'Die anfängliche Nachricht, die "vom Bot" an den Endbenutzer gesendet wird, wenn der Chat zum ersten Mal geöffnet wird.<p>
<i>Hinweis: Standardmäßig ist dies eine sprachspezifische Zeichenkette. Eine Änderung von der Standardzeichenkette überschreibt die Sprachunterstützung.</i></p>';
$string['config_filters'] = 'Filter konfigurieren';
$string['config_filters_help'] = 'Konfigurieren Sie die Filter, die für diesen Block verwendet werden sollen.<p>
Beispiel: {"Kategorie": "Mathematik", "Klasse": "3", "Datei": "handout.pdf"}
</p>';
$string['config_showsource'] = 'Quelle anzeigen';
$string['config_showsource_help'] = 'Ob die abgerufenen Quellen im Chatprotokoll dem Endbenutzer angezeigt werden sollen. Unabhängig davon, ob sie angezeigt werden oder nicht, werden die Quellen dennoch abgerufen und der KI bereitgestellt.';
$string['config_startopen'] = 'Geöffnet starten';
$string['config_startopen_help'] = 'Ob der Chat geöffnet oder geschlossen starten soll.';
$string['config_condenseprompt'] = 'Kondensierte Eingabeaufforderung';
$string['config_condenseprompt_help'] = 'Die Eingabeaufforderungsvorlage, die verwendet wird, um den Chatverlauf und die Frage in eine einzige Eingabeaufforderung zu konsolidieren. Leer lassen, um die Standardaufforderung zu verwenden.<p>
<i>Hinweis: Diese Funktion funktioniert nur auf Konten mit aktiviertem Prompt-Engineering.</i></p>';
$string['config_questionprompt'] = 'Frageaufforderung';
$string['config_questionprompt_help'] = 'Die Eingabeaufforderungsvorlage, die verwendet wird, um die Frage zu stellen. Leer lassen, um die Standardaufforderung zu verwenden.<p>
<i>Hinweis: Diese Funktion funktioniert nur auf Konten mit aktiviertem Prompt-Engineering.</i></p>';
$string['config_temperature'] = 'Temperatur';
$string['config_temperature_help'] = 'OpenAI GPT-Temperaturparameter. Unterstützt Werte von 0 bis 1. Werte näher an 0 führen zu vorhersehbareren, aber weniger kreativen Antworten. Werte näher an 1 führen zu kreativeren, aber weniger vorhersehbaren Antworten. Leer lassen, um den Standardwert zu verwenden.';
$string['config_sourcecount'] = 'Quellenanzahl';
$string['config_sourcecount_help'] = 'Wie viele Quellen abgerufen und der KI bereitgestellt werden sollen. Unterstützte Werte sind 0 bis 5.';
$string['config_customcss'] = 'Benutzerdefiniertes CSS';
$string['config_customcss_help'] = 'Benutzerdefiniertes CSS für diesen Block. Dies sollte gültiges CSS sein.';
$string['metadata_filter'] = 'Metadatenfilter';
$string['field_name'] = 'Name';
$string['field_value'] = 'Wert';
$string['add_filter'] = 'Filter hinzufügen';

// Blockzeichenketten
$string['input_placeholder'] = 'Stellen Sie eine Frage...';
$string['opener'] = 'Hallo. Wie kann ich Ihnen helfen?';

// Berechtigungen
$string['ube_ta:addinstance'] = 'Einen neuen UBE TA Block hinzufügen';
$string['ube_ta:myaddinstance'] = 'Einen neuen UBE TA Block zu meiner Moodle-Seite hinzufügen';

// Datenschutz
$string['privacy:metadata'] = 'Der UBE TA Block speichert keine personenbezogenen Daten.';
