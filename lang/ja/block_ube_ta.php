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
 * Japanese / 日本語
 *
 * @package    block_ube_ta
 * @copyright  2023 David Wipperfurth <dwipperfurth@unboundeducation.org>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['pluginname'] = '教育アシスタントブロック';

// グローバル設定
$string['oracle_apikey'] = 'APIキー';
$string['oracle_apikey_help'] = 'Oracle APIにアクセスするために提供されたAPIキーです。';
$string['oracle_privatekey'] = 'プライベートキー';
$string['oracle_privatekey_help'] = 'Oracle APIにアクセスするために提供されたプライベートキーです。';
$string['oracle_session'] = 'セッションの長さ';
$string['oracle_session_help'] = 'セッションの長さ（秒単位）。これは理想的にはLMSのセッションの長さを反映するべきです。';
$string['oracle_domain'] = 'Oracleドメイン';
$string['oracle_domain_help'] = 'Oracle APIのドメインです。これはOracle APIのドメインとポートであるべきです。';
$string['css_url'] = 'CSS URL';
$string['css_url_help'] = 'このブロックに使用するCSSファイルへのURLです。これはCSSファイルへの完全なURLである必要があります。';

// ブロックの設定
$string['data_filters'] = 'データフィルタ';
$string['config_opener'] = '開始メッセージ';
$string['config_opener_help'] = '最初にチャットが開かれたときにエンドユーザーに「ボットが送信した」初期メッセージ。<p>
<i>注意: デフォルトでは、これは言語固有の文字列です。デフォルトから変更すると、言語サポートが上書きされます。</i></p>';
$string['config_filters'] = 'フィルタの設定';
$string['config_filters_help'] = 'このブロックで使用するフィルタを構成します。<p>
例: {"カテゴリ": "数学", "学年": "3", "ファイル": "handout.pdf"}
</p>';
$string['config_showsource'] = 'ソースを表示';
$string['config_showsource_help'] = 'チャットログに抽出されたソースをエンドユーザーに表示するかどうか。表示されていなくても、ソースはAIに引き続き提供されます。';
$string['config_startopen'] = '開始時にオープン';
$string['config_startopen_help'] = 'チャットを開いた状態で開始するかどうか。';
$string['config_condenseprompt'] = 'プロンプトを縮小';
$string['config_condenseprompt_help'] = 'チャット履歴と質問を1つのプロンプトに統合するために使用されるプロンプトテンプレート。デフォルトのプロンプトを使用するには空白のままにしてください。<p>
<i>注意: この機能はプロンプトエンジニアリングが有効なアカウントでのみ機能します。</i></p>';
$string['config_questionprompt'] = '質問プロンプト';
$string['config_questionprompt_help'] = '質問をするために使用されるプロンプトテンプレート。デフォルトのプロンプトを使用するには空白のままにしてください。<p>
<i>注意: この機能はプロンプトエンジニアリングが有効なアカウントでのみ機能します。</i></p>';
$string['config_temperature'] = '温度';
$string['config_temperature_help'] = 'OpenAI GPTの温度パラメータ。0から1までの値がサポートされています。0に近い値は予測しやすいが、創造性に乏しい応答を生成します。1に近い値は創造的ですが、予測しにくい応答を生成します。デフォルト値を使用するには空白のままにしてください。';
$string['config_sourcecount'] = 'ソースの数';
$string['config_sourcecount_help'] = 'AIに提供するソースの数。サポートされる値は0から5です。';
$string['config_customcss'] = 'カスタムCSS';
$string['config_customcss_help'] = 'このブロックで使用するカスタムCSS。有効なCSSである必要があります。';
$string['metadata_filter'] = 'メタデータフィルタ';
$string['field_name'] = '名前';
$string['field_value'] = '値';
$string['add_filter'] = 'フィルタを追加';

// ブロックの文字列
$string['input_placeholder'] = '質問してください...';
$string['opener'] = 'こんにちは。どのようにお手伝いしましょうか？';

// 権限
$string['ube_ta:addinstance'] = '新しいUBE TAブロックを追加する';
$string['ube_ta:myaddinstance'] = '私のMoodleページに新しいUBE TAブロックを追加する';

// プライバシー
$string['privacy:metadata'] = 'UBE TAブロックは個人データを保存しません。';
