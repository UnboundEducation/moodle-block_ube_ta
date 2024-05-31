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
 * Simplified Chinese
 *
 * @package    block_ube_ta
 * @copyright  2023 David Wipperfurth <dwipperfurth@unboundeducation.org>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['pluginname'] = '助教模块';

// 全局设置
$string['oracle_apikey'] = 'API 密钥';
$string['oracle_apikey_help'] = '访问 Oracle API 时提供给您的 API 密钥。';
$string['oracle_privatekey'] = '私钥';
$string['oracle_privatekey_help'] = '访问 Oracle API 时提供给您的私钥。';
$string['oracle_session'] = '会话时长';
$string['oracle_session_help'] = '以秒为单位的会话时长。理想情况下，这应该与 LMS 的会话时长一致。';
$string['oracle_domain'] = 'Oracle 域名';
$string['oracle_domain_help'] = 'Oracle API 的域名。这应该是 Oracle API 的域名和端口。';
$string['css_url'] = 'CSS URL';
$string['css_url_help'] = '用于此模块的 CSS 文件的 URL。这应该是指向 CSS 文件的完整 URL。';

// 模块设置
$string['data_filters'] = '数据过滤器';
$string['config_opener'] = '会话开启语';
$string['config_opener_help'] = '聊天首次打开时，“机器人发送”的初始消息。<p>
<i>注意：默认情况下，这是一个特定语言的字符串。更改默认设置将覆盖语言支持。</i></p>';
$string['config_filters'] = '配置过滤器';
$string['config_filters_help'] = '配置此模块使用的过滤器。<p>
示例: {"类别": "数学", "年级": "3", "文件": "handout.pdf"}
</p>';
$string['config_showsource'] = '显示来源';
$string['config_showsource_help'] = '是否在聊天记录中向最终用户显示提取的来源。无论是否显示，来源仍将被提取并提供给 AI。';
$string['config_startopen'] = '启动时打开';
$string['config_startopen_help'] = '聊天开始时是打开还是关闭。';
$string['config_condenseprompt'] = '简化提示';
$string['config_condenseprompt_help'] = '用于将聊天记录和问题整合成一个提示的模板。留空以使用默认提示。<p>
<i>注意：此功能仅适用于启用了提示工程的账户。</i></p>';
$string['config_questionprompt'] = '问题提示';
$string['config_questionprompt_help'] = '用于提问的提示模板。留空以使用默认提示。<p>
<i>注意：此功能仅适用于启用了提示工程的账户。</i></p>';
$string['config_temperature'] = '温度';
$string['config_temperature_help'] = 'OpenAI GPT 温度参数。支持的值为 0 到 1。接近 0 的值将产生更可预测但创造性较低的响应。接近 1 的值将产生更具创造性但不太可预测的响应。留空以使用默认值。';
$string['config_sourcecount'] = '来源数量';
$string['config_sourcecount_help'] = '提取并提供给 AI 的来源数量。支持的值为 0 到 5。';
$string['config_customcss'] = '自定义 CSS';
$string['config_customcss_help'] = '用于此模块的自定义 CSS。应该是有效的 CSS。';
$string['metadata_filter'] = '元数据过滤器';
$string['field_name'] = '名称';
$string['field_value'] = '值';
$string['add_filter'] = '添加过滤器';

// 模块字符串
$string['input_placeholder'] = '提出问题...';
$string['opener'] = '你好，我能帮你什么？';

// 权限
$string['ube_ta:addinstance'] = '添加一个新的 UBE TA 模块';
$string['ube_ta:myaddinstance'] = '将一个新的 UBE TA 模块添加到我的 Moodle 页面';

// 隐私
$string['privacy:metadata'] = 'UBE TA 模块不存储任何个人数据。';
