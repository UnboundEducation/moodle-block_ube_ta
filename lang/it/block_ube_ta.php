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
 * Italian / Italiano
 *
 * @package    block_ube_ta
 * @copyright  2023 David Wipperfurth <dwipperfurth@unboundeducation.org>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['pluginname'] = 'Blocco Assistente Didattico';

// Impostazioni globali
$string['oracle_apikey'] = 'Chiave API';
$string['oracle_apikey_help'] = 'La chiave API fornita per accedere all\'API di Oracle.';
$string['oracle_privatekey'] = 'Chiave Privata';
$string['oracle_privatekey_help'] = 'La chiave privata fornita per accedere all\'API di Oracle.';
$string['oracle_session'] = 'Durata Sessione';
$string['oracle_session_help'] = 'La durata della sessione in secondi. Questo dovrebbe idealmente riflettere la durata della sessione del LMS.';
$string['oracle_domain'] = 'Dominio Oracle';
$string['oracle_domain_help'] = 'Il dominio dell\'API di Oracle. Questo dovrebbe essere il dominio e la porta dell\'API di Oracle.';
$string['css_url'] = 'URL CSS';
$string['css_url_help'] = 'L\'URL al file CSS da utilizzare per questo blocco. Questo dovrebbe essere un URL completo al file CSS.';

// Impostazioni del blocco
$string['data_filters'] = 'Filtri Dati';
$string['config_opener'] = 'Messaggio di Apertura';
$string['config_opener_help'] = 'Il messaggio iniziale "inviato dal bot" all\'utente finale quando la chat viene aperta per la prima volta.<p>
<i>Nota: Per impostazione predefinita, questo è una stringa specifica della lingua. Cambiarlo dalla predefinita sovrascriverà il supporto linguistico.</i></p>';
$string['config_filters'] = 'Configura Filtri';
$string['config_filters_help'] = 'Configura i filtri da utilizzare per questo blocco.<p>
Esempio: {"Categoria": "Matematica", "Classe": "3", "file": "handout.pdf"}
</p>';
$string['config_showsource'] = 'Mostra Fonte';
$string['config_showsource_help'] = 'Se mostrare le fonti estratte all\'utente finale nel registro della chat. Indipendentemente dal fatto che siano mostrate o meno, le fonti verranno comunque estratte e fornite all\'IA.';
$string['config_startopen'] = 'Avvia Aperto';
$string['config_startopen_help'] = 'Se iniziare la chat aperta o chiusa.';
$string['config_condenseprompt'] = 'Prompt Condensato';
$string['config_condenseprompt_help'] = 'Il modello di prompt utilizzato per consolidare la cronologia della chat e la domanda in un unico prompt. Lasciare vuoto per utilizzare il prompt predefinito.<p>
<i>Nota: Questa funzionalità funziona solo su account con l\'ingegneria dei prompt abilitata.</i></p>';
$string['config_questionprompt'] = 'Prompt Domanda';
$string['config_questionprompt_help'] = 'Il modello di prompt utilizzato per fare la domanda. Lasciare vuoto per utilizzare il prompt predefinito.<p>
<i>Nota: Questa funzionalità funziona solo su account con l\'ingegneria dei prompt abilitata.</i></p>';
$string['config_temperature'] = 'Temperatura';
$string['config_temperature_help'] = 'Parametro di temperatura OpenAI GPT. Supporta valori da 0 a 1. I valori più vicini a 0 produrranno risposte più prevedibili ma meno creative. I valori più vicini a 1 produrranno risposte più creative ma meno prevedibili. Lasciare vuoto per utilizzare il valore predefinito.';
$string['config_sourcecount'] = 'Conteggio Fonti';
$string['config_sourcecount_help'] = 'Quante fonti estrarre e fornire all\'IA. I valori supportati vanno da 0 a 5.';
$string['config_customcss'] = 'CSS Personalizzato';
$string['config_customcss_help'] = 'CSS personalizzato da utilizzare per questo blocco. Deve essere un CSS valido.';
$string['metadata_filter'] = 'Filtri metadati';
$string['field_name'] = 'Nome';
$string['field_value'] = 'Valore';
$string['add_filter'] = 'Aggiungi filtro';

// Stringhe del blocco
$string['input_placeholder'] = 'Fai una domanda...';
$string['opener'] = 'Ciao. Come posso aiutarti?';

// Permessi
$string['ube_ta:addinstance'] = 'Aggiungi un nuovo blocco UBE TA';
$string['ube_ta:myaddinstance'] = 'Aggiungi un nuovo blocco UBE TA alla mia pagina Moodle';

// Privacy
$string['privacy:metadata'] = 'Il blocco UBE TA non memorizza dati personali.';
