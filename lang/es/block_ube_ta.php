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
 * Spanish (international) / Español - Internacional
 *
 * @package    block_ube_ta
 * @copyright  2023 David Wipperfurth <dwipperfurth@unboundeducation.org>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['pluginname'] = 'Bloque de Asistente de Enseñanza';

// Configuraciones globales
$string['oracle_apikey'] = 'Clave de API';
$string['oracle_apikey_help'] = 'La clave de API proporcionada para acceder a la API de Oracle.';
$string['oracle_privatekey'] = 'Clave Privada';
$string['oracle_privatekey_help'] = 'La clave privada proporcionada para acceder a la API de Oracle.';
$string['oracle_session'] = 'Duración de la Sesión';
$string['oracle_session_help'] = 'La duración de la sesión en segundos. Idealmente, esto debería reflejar la duración de la sesión del LMS.';
$string['oracle_domain'] = 'Dominio de Oracle';
$string['oracle_domain_help'] = 'El dominio de la API de Oracle. Debería ser el dominio y el puerto de la API de Oracle.';
$string['css_url'] = 'URL de CSS';
$string['css_url_help'] = 'La URL al archivo CSS que se utilizará para este bloque. Debería ser una URL completa al archivo CSS.';

// Configuraciones del bloque
$string['data_filters'] = 'Filtros de Datos';
$string['config_opener'] = 'Mensaje de Apertura';
$string['config_opener_help'] = 'El mensaje inicial "enviado por el bot" al usuario final cuando se abre el chat por primera vez.<p>
<i>Nota: Por defecto, esto es una cadena específica del idioma. Cambiarlo desde el valor predeterminado anulará el soporte del idioma.</i></p>';
$string['config_filters'] = 'Configurar Filtros';
$string['config_filters_help'] = 'Configurar los filtros a utilizar para este bloque.<p>
Ejemplo: {"Categoría": "Matemáticas", "Grado": "3", "archivo": "handout.pdf"}
</p>';
$string['config_showsource'] = 'Mostrar Origen';
$string['config_showsource_help'] = 'Si mostrar las fuentes extraídas al usuario final en el registro de chat. Ya sea que se muestren o no, las fuentes seguirán siendo extraídas y proporcionadas al AI.';
$string['config_startopen'] = 'Iniciar Abierto';
$string['config_startopen_help'] = 'Si iniciar el chat abierto o cerrado.';
$string['config_condenseprompt'] = 'Condensar Indicación';
$string['config_condenseprompt_help'] = 'La plantilla de indicación utilizada para consolidar el historial de chat y la pregunta en una sola indicación. Deje en blanco para usar la indicación predeterminada.<p>
<i>Nota: Esta función solo funciona en cuentas con ingeniería de indicaciones habilitada.</i></p>';
$string['config_questionprompt'] = 'Indicación de Pregunta';
$string['config_questionprompt_help'] = 'La plantilla de indicación utilizada para hacer la pregunta. Deje en blanco para usar la indicación predeterminada.<p>
<i>Nota: Esta función solo funciona en cuentas con ingeniería de indicaciones habilitada.</i></p>';
$string['config_temperature'] = 'Temperatura';
$string['config_temperature_help'] = 'Parámetro de temperatura de OpenAI GPT. Admite valores de 0 a 1. Los valores más cercanos a 0 generarán respuestas más predecibles pero menos creativas. Los valores más cercanos a 1 generarán respuestas más creativas pero menos predecibles. Deje en blanco para usar el valor predeterminado.';
$string['config_sourcecount'] = 'Conteo de Orígenes';
$string['config_sourcecount_help'] = 'Cuántas fuentes extraer y proporcionar al AI. Los valores admitidos van de 0 a 5.';
$string['config_customcss'] = 'CSS Personalizado';
$string['config_customcss_help'] = 'CSS personalizado para usar en este bloque. Debe ser CSS válido.';
$string['metadata_filter'] = 'Filtros de Metadatos';
$string['field_name'] = 'Nombre';
$string['field_value'] = 'Valor';
$string['add_filter'] = 'Agregar Filtro';

// Cadenas del bloque
$string['input_placeholder'] = 'Haz una pregunta...';
$string['opener'] = 'Hola. ¿Cómo puedo ayudarte?';

// Permisos
$string['ube_ta:addinstance'] = 'Agregar un nuevo bloque UBE TA';
$string['ube_ta:myaddinstance'] = 'Agregar un nuevo bloque UBE TA a mi página de Moodle';

// Privacidad
$string['privacy:metadata'] = 'El bloque UBE TA no almacena datos personales.';
