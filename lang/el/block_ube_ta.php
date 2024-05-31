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
 * Greek / Ελληνικά
 *
 * @package    block_ube_ta
 * @copyright  2023 David Wipperfurth <dwipperfurth@unboundeducation.org>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['pluginname'] = 'Μπλοκ Βοηθού Διδασκαλίας';

// Γενικές ρυθμίσεις
$string['oracle_apikey'] = 'Κλειδί API';
$string['oracle_apikey_help'] = 'Το κλειδί API που σας παρέχεται για την πρόσβαση στο Oracle API.';
$string['oracle_privatekey'] = 'Ιδιωτικό Κλειδί';
$string['oracle_privatekey_help'] = 'Το ιδιωτικό κλειδί που σας παρέχεται για την πρόσβαση στο Oracle API.';
$string['oracle_session'] = 'Διάρκεια Συνεδρίας';
$string['oracle_session_help'] = 'Η διάρκεια της συνεδρίας σε δευτερόλεπτα. Αυτό θα πρέπει ιδανικά να αντικατοπτρίζει τη διάρκεια της συνεδρίας του LMS.';
$string['oracle_domain'] = 'Τομέας Oracle';
$string['oracle_domain_help'] = 'Ο τομέας του Oracle API. Αυτό θα πρέπει να είναι ο τομέας και η θύρα του Oracle API.';
$string['css_url'] = 'URL CSS';
$string['css_url_help'] = 'Το URL του αρχείου CSS που θα χρησιμοποιηθεί για αυτό το μπλοκ. Αυτό θα πρέπει να είναι ένα πλήρες URL προς το αρχείο CSS.';

// Ρυθμίσεις μπλοκ
$string['data_filters'] = 'Φίλτρα Δεδομένων';
$string['config_opener'] = 'Μήνυμα Έναρξης Συνομιλίας';
$string['config_opener_help'] = 'Το αρχικό μήνυμα που "στέλνει το bot" στον τελικό χρήστη, όταν ανοίγει για πρώτη φορά η συνομιλία.<p>
<i>Σημείωση: Από προεπιλογή, αυτό είναι μια συμβολοσειρά συγκεκριμένης γλώσσας. Η αλλαγή της από την προεπιλεγμένη θα αντικαταστήσει την υποστήριξη γλώσσας.</i></p>';
$string['config_filters'] = 'Ρύθμιση Φίλτρων';
$string['config_filters_help'] = 'Ρυθμίστε τα φίλτρα που θα χρησιμοποιηθούν για αυτό το μπλοκ.<p>
Παράδειγμα: {"Κατηγορία": "Μαθηματικά", "Τάξη": "3", "αρχείο": "handout.pdf"}
</p>';
$string['config_showsource'] = 'Εμφάνιση Πηγής';
$string['config_showsource_help'] = 'Αν θα εμφανίζονται οι αντλημένες πηγές στον τελικό χρήστη, στο ιστορικό συνομιλίας. Είτε εμφανίζονται είτε όχι, οι πηγές θα εξακολουθούν να αντλούνται και να παρέχονται στην AI.';
$string['config_startopen'] = 'Έναρξη Ανοικτή';
$string['config_startopen_help'] = 'Αν η συνομιλία θα ξεκινήσει ανοικτή ή κλειστή.';
$string['config_condenseprompt'] = 'Συμπύκνωση Προτροπής';
$string['config_condenseprompt_help'] = 'Το πρότυπο προτροπής που χρησιμοποιείται για τη συγχώνευση του ιστορικού συνομιλίας και της ερώτησης σε μία προτροπή. Αφήστε κενό για να χρησιμοποιήσετε την προεπιλεγμένη προτροπή.<p>
<i>Σημείωση: Αυτή η λειτουργία λειτουργεί μόνο σε λογαριασμούς με ενεργοποιημένη τη μηχανική προτροπών.</i></p>';
$string['config_questionprompt'] = 'Προτροπή Ερώτησης';
$string['config_questionprompt_help'] = 'Το πρότυπο προτροπής που χρησιμοποιείται για να γίνει η ερώτηση. Αφήστε κενό για να χρησιμοποιήσετε την προεπιλεγμένη προτροπή.<p>
<i>Σημείωση: Αυτή η λειτουργία λειτουργεί μόνο σε λογαριασμούς με ενεργοποιημένη τη μηχανική προτροπών.</i></p>';
$string['config_temperature'] = 'Θερμοκρασία';
$string['config_temperature_help'] = 'Παράμετρος θερμοκρασίας OpenAI GPT. Υποστηρίζει τιμές από 0 έως 1. Τιμές κοντά στο 0 θα δώσουν πιο προβλέψιμες, αλλά λιγότερο δημιουργικές απαντήσεις. Τιμές κοντά στο 1 θα δώσουν πιο δημιουργικές, αλλά λιγότερο προβλέψιμες απαντήσεις. Αφήστε κενό για να χρησιμοποιήσετε την προεπιλεγμένη τιμή.';
$string['config_sourcecount'] = 'Αριθμός Πηγών';
$string['config_sourcecount_help'] = 'Πόσες πηγές θα αντληθούν και θα παρασχεθούν στην AI. Υποστηριζόμενες τιμές είναι από 0 έως 5.';
$string['config_customcss'] = 'Προσαρμοσμένο CSS';
$string['config_customcss_help'] = 'Προσαρμοσμένο CSS για αυτό το μπλοκ. Αυτό πρέπει να είναι έγκυρο CSS.';
$string['metadata_filter'] = 'Φίλτρα Μεταδεδομένων';
$string['field_name'] = 'Όνομα';
$string['field_value'] = 'Τιμή';
$string['add_filter'] = 'Προσθήκη Φίλτρου';

// Συμβολοσειρές μπλοκ
$string['input_placeholder'] = 'Κάντε μια ερώτηση...';
$string['opener'] = 'Γειά σας. Πώς μπορώ να βοηθήσω;';

// Δικαιώματα
$string['ube_ta:addinstance'] = 'Προσθήκη νέου μπλοκ UBE TA';
$string['ube_ta:myaddinstance'] = 'Προσθήκη νέου μπλοκ UBE TA στη σελίδα Μου Moodle';

// Προστασία προσωπικών δεδομένων
$string['privacy:metadata'] = 'Το μπλοκ UBE TA δεν αποθηκεύει προσωπικά δεδομένα.';
