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
 * French / Français
 *
 * @package    block_ube_ta
 * @copyright  2023 David Wipperfurth <dwipperfurth@unboundeducation.org>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['pluginname'] = 'Bloc Assistant d\'Enseignement';

// Paramètres globaux
$string['oracle_apikey'] = 'Clé API';
$string['oracle_apikey_help'] = 'La clé API fournie pour accéder à l\'API Oracle.';
$string['oracle_privatekey'] = 'Clé Privée';
$string['oracle_privatekey_help'] = 'La clé privée fournie pour accéder à l\'API Oracle.';
$string['oracle_session'] = 'Durée de la Session';
$string['oracle_session_help'] = 'La durée de la session en secondes. Cela devrait idéalement correspondre à la durée de session du LMS.';
$string['oracle_domain'] = 'Domaine Oracle';
$string['oracle_domain_help'] = 'Le domaine de l\'API Oracle. Cela devrait être le domaine et le port de l\'API Oracle.';
$string['css_url'] = 'URL CSS';
$string['css_url_help'] = 'L\'URL du fichier CSS à utiliser pour ce bloc. Cela devrait être une URL complète vers le fichier CSS.';

// Paramètres du bloc
$string['data_filters'] = 'Filtres de Données';
$string['config_opener'] = 'Message d\'Ouverture';
$string['config_opener_help'] = 'Le message initial "envoyé par le bot" à l\'utilisateur final, lorsque le chat est d\'abord ouvert.<p>
<i>Remarque : Par défaut, c\'est une chaîne spécifique à une langue. La modifier depuis la valeur par défaut remplacera la prise en charge de la langue.</i></p>';
$string['config_filters'] = 'Configurer les Filtres';
$string['config_filters_help'] = 'Configurer les filtres à utiliser pour ce bloc.<p>
Exemple : {"Catégorie": "Mathématiques", "Niveau": "3", "fichier": "document.pdf"}
</p>';
$string['config_showsource'] = 'Afficher la Source';
$string['config_showsource_help'] = 'Afficher ou non les sources récupérées à l\'utilisateur final dans le journal de discussion. Que ce soit affiché ou non, les sources seront toujours récupérées et fournies à l\'IA.';
$string['config_startopen'] = 'Commencer Ouvert';
$string['config_startopen_help'] = 'Commencer le chat ouvert ou fermé.';
$string['config_condenseprompt'] = 'Résumé du Prompt';
$string['config_condenseprompt_help'] = 'Le modèle de prompt utilisé pour consolider l\'historique du chat et la question en un seul prompt. Laisser vide pour utiliser le prompt par défaut.<p>
<i>Remarque : Cette fonctionnalité ne fonctionne que sur les comptes avec l\'ingénierie des prompts activée.</i></p>';
$string['config_questionprompt'] = 'Prompt de la Question';
$string['config_questionprompt_help'] = 'Le modèle de prompt utilisé pour poser la question. Laisser vide pour utiliser le prompt par défaut.<p>
<i>Remarque : Cette fonctionnalité ne fonctionne que sur les comptes avec l\'ingénierie des prompts activée.</i></p>';
$string['config_temperature'] = 'Température';
$string['config_temperature_help'] = 'Paramètre de température OpenAI GPT. Prend en charge les valeurs de 0 à 1. Les valeurs proches de 0 donneront des réponses plus prévisibles, mais moins créatives. Les valeurs proches de 1 donneront des réponses plus créatives, mais moins prévisibles. Laisser vide pour utiliser la valeur par défaut.';
$string['config_sourcecount'] = 'Nombre de Sources';
$string['config_sourcecount_help'] = 'Nombre de sources à récupérer et fournir à l\'IA. Les valeurs prises en charge vont de 0 à 5.';
$string['config_customcss'] = 'CSS Personnalisé';
$string['config_customcss_help'] = 'CSS personnalisé à utiliser pour ce bloc. Cela doit être du CSS valide.';
$string['metadata_filter'] = 'Filtres de métadonnées';
$string['field_name'] = 'Nom';
$string['field_value'] = 'Valeur';
$string['add_filter'] = 'Ajouter un filtre';

// Chaînes du bloc
$string['input_placeholder'] = 'Poser une question...';
$string['opener'] = 'Bonjour. Comment puis-je vous aider?';

// Permissions
$string['ube_ta:addinstance'] = 'Ajouter un nouveau bloc UBE TA';
$string['ube_ta:myaddinstance'] = 'Ajouter un nouveau bloc UBE TA à ma page Moodle';

// Confidentialité
$string['privacy:metadata'] = 'Le bloc UBE TA ne stocke aucune donnée personnelle.';
