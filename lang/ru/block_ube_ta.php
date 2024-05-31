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
 * Russian / Русский
 *
 * @package    block_ube_ta
 * @copyright  2023 David Wipperfurth <dwipperfurth@unboundeducation.org>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['pluginname'] = 'Блок помощника преподавателя';

// Глобальные настройки
$string['oracle_apikey'] = 'API ключ';
$string['oracle_apikey_help'] = 'API ключ, предоставленный вам для доступа к Oracle API.';
$string['oracle_privatekey'] = 'Закрытый ключ';
$string['oracle_privatekey_help'] = 'Закрытый ключ, предоставленный вам для доступа к Oracle API.';
$string['oracle_session'] = 'Продолжительность сессии';
$string['oracle_session_help'] = 'Продолжительность сессии в секундах. Это должно идеально соответствовать продолжительности сессии LMS.';
$string['oracle_domain'] = 'Домен Oracle';
$string['oracle_domain_help'] = 'Домен Oracle API. Это должен быть домен и порт Oracle API.';
$string['css_url'] = 'URL CSS';
$string['css_url_help'] = 'URL к CSS файлу, используемому для этого блока. Это должен быть полный URL к файлу CSS.';

// Настройки блока
$string['data_filters'] = 'Фильтры данных';
$string['config_opener'] = 'Открывающее сообщение';
$string['config_opener_help'] = 'Начальное сообщение, "отправленное ботом" конечному пользователю при первом открытии чата.<p>
<i>Примечание: По умолчанию это строка, зависимая от языка. Изменение этого параметра переопределит языковую поддержку.</i></p>';
$string['config_filters'] = 'Настройка фильтров';
$string['config_filters_help'] = 'Настройка фильтров для этого блока.<p>
Пример: {"Категория": "Математика", "Класс": "3", "файл": "handout.pdf"}
</p>';
$string['config_showsource'] = 'Показать источник';
$string['config_showsource_help'] = 'Показывать ли конечному пользователю извлеченные источники в журнале чата. Вне зависимости от того, показываются они или нет, источники все равно будут извлечены и переданы ИИ.';
$string['config_startopen'] = 'Начать открытый';
$string['config_startopen_help'] = 'Начинать ли чат открытым или закрытым.';
$string['config_condenseprompt'] = 'Сжатие подсказки';
$string['config_condenseprompt_help'] = 'Шаблон подсказки, используемый для сжатия истории чата и вопроса в одну подсказку. Оставьте пустым, чтобы использовать стандартную подсказку.<p>
<i>Примечание: Эта функция работает только на учетных записях с включенной инженерией подсказок.</i></p>';
$string['config_questionprompt'] = 'Подсказка для вопроса';
$string['config_questionprompt_help'] = 'Шаблон подсказки, используемый для задания вопроса. Оставьте пустым, чтобы использовать стандартную подсказку.<p>
<i>Примечание: Эта функция работает только на учетных записях с включенной инженерией подсказок.</i></p>';
$string['config_temperature'] = 'Температура';
$string['config_temperature_help'] = 'Параметр температуры OpenAI GPT. Поддерживаются значения от 0 до 1. Значения ближе к 0 будут прогнозируемее, но менее креативными, а значения ближе к 1 будут более креативными, но менее прогнозируемыми. Оставьте пустым, чтобы использовать значение по умолчанию.';
$string['config_sourcecount'] = 'Количество источников';
$string['config_sourcecount_help'] = 'Сколько источников извлечь и передать ИИ. Поддерживаемые значения от 0 до 5.';
$string['config_customcss'] = 'Пользовательский CSS';
$string['config_customcss_help'] = 'Пользовательский CSS для этого блока. Должен быть допустимым CSS.';
$string['metadata_filter'] = 'Фильтры метаданных';
$string['field_name'] = 'Название';
$string['field_value'] = 'Значение';
$string['add_filter'] = 'Добавить фильтр';

// Строки блока
$string['input_placeholder'] = 'Задайте вопрос...';
$string['opener'] = 'Привет. Чем могу помочь?';

// Разрешения
$string['ube_ta:addinstance'] = 'Добавить новый блок UBE TA';
$string['ube_ta:myaddinstance'] = 'Добавить новый блок UBE TA на мою страницу Moodle';

// Конфиденциальность
$string['privacy:metadata'] = 'Блок UBE TA не хранит персональных данных.';
