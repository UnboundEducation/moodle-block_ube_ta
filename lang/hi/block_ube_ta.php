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
 * Hindi / हिंदी
 *
 * @package    block_ube_ta
 * @copyright  2023 David Wipperfurth <dwipperfurth@unboundeducation.org>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['pluginname'] = 'शिक्षण सहायक ब्लॉक';

// वैश्विक सेटिंग्स
$string['oracle_apikey'] = 'API कुंजी';
$string['oracle_apikey_help'] = 'आपको Oracle API तक पहुंचने के लिए दी गई API कुंजी।';
$string['oracle_privatekey'] = 'निजी कुंजी';
$string['oracle_privatekey_help'] = 'आपको Oracle API तक पहुंचने के लिए दी गई निजी कुंजी।';
$string['oracle_session'] = 'सत्र लंबाई';
$string['oracle_session_help'] = 'सत्र की अवधि सेकंड में। इसे आशावादी रूप से LMS के सत्र लंबाई को मिरर करना चाहिए।';
$string['oracle_domain'] = 'ऑरेकल डोमेन';
$string['oracle_domain_help'] = 'ऑरेकल API का डोमेन। यह ऑरेकल API का डोमेन और पोर्ट होना चाहिए।';
$string['css_url'] = 'CSS URL';
$string['css_url_help'] = 'इस ब्लॉक के लिए उपयोग किए जाने वाले CSS फ़ाइल का URL। यह पूर्ण URL CSS फ़ाइल होना चाहिए।';

// ब्लॉक सेटिंग्स
$string['data_filters'] = 'डेटा फ़िल्टर';
$string['config_opener'] = 'संवाद खोलने वाला';
$string['config_opener_help'] = 'जब चैट पहली बार खोला जाता है, तो इसे अंत उपयोगकर्ता को "बॉट द्वारा" भेजा जाने वाला प्रारंभिक संदेश।<p>
<i>नोट: डिफ़ॉल्ट रूप से, यह एक भाषा विशेषित स्ट्रिंग है। डिफ़ॉल्ट से बदलने पर भाषा समर्थन को अधिलेखित किया जाएगा।</i></p>';
$string['config_filters'] = 'फ़िल्टर कॉन्फ़िगर करें';
$string['config_filters_help'] = 'इस ब्लॉक के लिए उपयोग किए जाने वाले फ़िल्टर को कॉन्फ़िगर करें।<p>
उदाहरण: {"श्रेणी": "गणित", "कक्षा": "3", "फ़ाइल": "हैंडआउट.pdf"}
</p>';
$string['config_showsource'] = 'स्रोत दिखाएँ';
$string['config_showsource_help'] = 'चैट लॉग में खींची गई स्रोत को अंत उपयोगकर्ता को दिखाना चाहिए या नहीं। चाहे दिखाएं या न दिखाएं, स्रोतों को अगलाई जाती हैं और AI को प्रदान की जाती हैं।';
$string['config_startopen'] = 'शुरूत में खोलें';
$string['config_startopen_help'] = 'चैट को खोला जाए या नहीं, यह निर्धारित करें।';
$string['config_condenseprompt'] = 'संक्षिप्त प्रॉम्प्ट';
$string['config_condenseprompt_help'] = 'चैट इतिहास और प्रश्न को एक ही प्रॉम्प्ट में संयोजित करने के लिए प्रॉम्प्ट टेम्पलेट। डिफ़ॉल्ट प्रॉम्प्ट का उपयोग करने के लिए रिक्त छोड़ें।<p>
<i>नोट: यह सुविधा केवल खातों पर काम करती है जिनमें प्रॉम्प्ट इंजीनियरिंग सक्षम है।</i></p>';
$string['config_questionprompt'] = 'प्रश्न प्रॉम्प्ट';
$string['config_questionprompt_help'] = 'प्रश्न पूछने के लिए प्रॉम्प्ट टेम्पलेट। डिफ़ॉल्ट प्रॉम्प्ट का उपयोग करने के लिए रिक्त छोड़ें।<p>
<i>नोट: यह सुविधा केवल प्रॉम्प्ट इंजीनियरिंग सक्षम है खातों पर काम करती है।</i></p>';
$string['config_temperature'] = 'तापमान';
$string['config_temperature_help'] = 'OpenAI GPT तापमान पैरामीटर। 0 से 1 तक के मान समर्थित हैं। 0 के आसपास के मान अधिक पूर्वानुमानी, लेकिन कम सृजनात्मक प्रतिक्रियाएँ प्रदान करेंगे। 1 के आसपास के मान अधिक सृजनात्मक, लेकिन कम पूर्वानुमानी प्रतिक्रियाएँ प्रदान करेंगे। डिफ़ॉल्ट मान का उपयोग करने के लिए रिक्त छोड़ें।';
$string['config_sourcecount'] = 'स्रोत की संख्या';
$string['config_sourcecount_help'] = 'AI को प्रदान करने के लिए स्रोतों की संख्या। 0 से 5 तक के समर्थित मान हैं।';
$string['config_customcss'] = 'कस्टम CSS';
$string['config_customcss_help'] = 'इस ब्लॉक के लिए उपयोग किए जाने वाले कस्टम CSS। यह मान्य CSS होना चाहिए।';
$string['metadata_filter'] = 'मेटाडेटा फिल्टर';
$string['field_name'] = 'नाम';
$string['field_value'] = 'मान';
$string['add_filter'] = 'फ़िल्टर जोड़ें';

// ब्लॉक स्ट्रिंग्स
$string['input_placeholder'] = 'सवाल पूछें...';
$string['opener'] = 'नमस्ते। मैं आपकी कैसे सहायता कर सकता हूँ?';

// अनुमतियाँ
$string['ube_ta:addinstance'] = 'नया UBE TA ब्लॉक जोड़ें';
$string['ube_ta:myaddinstance'] = 'मेरे Moodle पेज में नया UBE TA ब्लॉक जोड़ें';

// गोपनीयता
$string['privacy:metadata'] = 'UBE TA ब्लॉक किसी भी व्यक्तिगत डेटा को स्टोर नहीं करता।';
