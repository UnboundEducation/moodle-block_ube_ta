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
 * Traditional Chinese
 *
 * @package    block_ube_ta
 * @copyright  2023 David Wipperfurth <dwipperfurth@unboundeducation.org>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['pluginname'] = '助教模塊';

// 全域設定
$string['oracle_apikey'] = 'API 密鑰';
$string['oracle_apikey_help'] = '訪問 Oracle API 時提供給您的 API 密鑰。';
$string['oracle_privatekey'] = '私鑰';
$string['oracle_privatekey_help'] = '訪問 Oracle API 時提供給您的私鑰。';
$string['oracle_session'] = '會話時長';
$string['oracle_session_help'] = '以秒為單位的會話時長。理想情況下，這應該與 LMS 的會話時長一致。';
$string['oracle_domain'] = 'Oracle 網域';
$string['oracle_domain_help'] = 'Oracle API 的網域。這應該是 Oracle API 的網域和埠。';
$string['css_url'] = 'CSS URL';
$string['css_url_help'] = '用於此模塊的 CSS 文件的 URL。這應該是指向 CSS 文件的完整 URL。';

// 模塊設定
$string['data_filters'] = '數據過濾器';
$string['config_opener'] = '會話開啟語';
$string['config_opener_help'] = '聊天首次打開時，“機器人發送”的初始消息。<p>
<i>注意：默認情況下，這是一個特定語言的字符串。更改默認設置將覆蓋語言支持。</i></p>';
$string['config_filters'] = '配置過濾器';
$string['config_filters_help'] = '配置此模塊使用的過濾器。<p>
示例: {"類別": "數學", "年級": "3", "文件": "handout.pdf"}
</p>';
$string['config_showsource'] = '顯示來源';
$string['config_showsource_help'] = '是否在聊天記錄中向最終用戶顯示提取的來源。無論是否顯示，來源仍將被提取並提供給 AI。';
$string['config_startopen'] = '啟動時打開';
$string['config_startopen_help'] = '聊天開始時是打開還是關閉。';
$string['config_condenseprompt'] = '簡化提示';
$string['config_condenseprompt_help'] = '用於將聊天記錄和問題整合成一個提示的模板。留空以使用默認提示。<p>
<i>注意：此功能僅適用於啟用了提示工程的帳戶。</i></p>';
$string['config_questionprompt'] = '問題提示';
$string['config_questionprompt_help'] = '用於提問的提示模板。留空以使用默認提示。<p>
<i>注意：此功能僅適用於啟用了提示工程的帳戶。</i></p>';
$string['config_temperature'] = '溫度';
$string['config_temperature_help'] = 'OpenAI GPT 溫度參數。支持的值為 0 到 1。接近 0 的值將產生更可預測但創造性較低的回應。接近 1 的值將產生更具創造性但不太可預測的回應。留空以使用默認值。';
$string['config_sourcecount'] = '來源數量';
$string['config_sourcecount_help'] = '提取並提供給 AI 的來源數量。支持的值為 0 到 5。';
$string['config_customcss'] = '自定義 CSS';
$string['config_customcss_help'] = '用於此模塊的自定義 CSS。應該是有效的 CSS。';
$string['metadata_filter'] = '元數據過濾器';
$string['field_name'] = '名稱';
$string['field_value'] = '值';
$string['add_filter'] = '添加過濾器';

// 模塊字符串
$string['input_placeholder'] = '提出問題...';
$string['opener'] = '你好，我能幫你什麼？';

// 權限
$string['ube_ta:addinstance'] = '添加一個新的 UBE TA 模塊';
$string['ube_ta:myaddinstance'] = '將一個新的 UBE TA 模塊添加到我的 Moodle 頁面';

// 隱私
$string['privacy:metadata'] = 'UBE TA 模塊不存儲任何個人數據。';
