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
 * Arabic
 *
 * @package    block_ube_ta
 * @copyright  2023 David Wipperfurth <dwipperfurth@unboundeducation.org>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['pluginname'] = 'كتلة مساعد التدريس';

// الإعدادات العامة
$string['oracle_apikey'] = 'مفتاح API';
$string['oracle_apikey_help'] = 'مفتاح API المقدم لك للوصول إلى واجهة برمجة تطبيقات Oracle.';
$string['oracle_privatekey'] = 'المفتاح الخاص';
$string['oracle_privatekey_help'] = 'المفتاح الخاص المقدم لك للوصول إلى واجهة برمجة تطبيقات Oracle.';
$string['oracle_session'] = 'مدة الجلسة';
$string['oracle_session_help'] = 'مدة الجلسة بالثواني. يجب أن تعكس هذه المدة طول الجلسة في نظام إدارة التعلم.';
$string['oracle_domain'] = 'نطاق Oracle';
$string['oracle_domain_help'] = 'نطاق واجهة برمجة تطبيقات Oracle. يجب أن يكون هذا النطاق والمنفذ الخاص بواجهة برمجة تطبيقات Oracle.';
$string['css_url'] = 'عنوان URL لملف CSS';
$string['css_url_help'] = 'عنوان URL لملف CSS الذي سيتم استخدامه لهذا الكتلة. يجب أن يكون عنوان URL كاملاً لملف CSS.';

// إعدادات الكتلة
$string['data_filters'] = 'مرشحات البيانات';
$string['config_opener'] = 'رسالة البدء';
$string['config_opener_help'] = 'الرسالة الأولية "المرسلة من قبل البوت" للمستخدم النهائي عند فتح المحادثة لأول مرة.<p>
<i>ملاحظة: بشكل افتراضي، هذه سلسلة لغة محددة. تغييرها من الافتراضي سيتجاوز دعم اللغة.</i></p>';
$string['config_filters'] = 'تكوين المرشحات';
$string['config_filters_help'] = 'قم بتكوين المرشحات لاستخدامها لهذه الكتلة.<p>
مثال: {"الفئة": "رياضيات", "الصف": "3", "الملف": "handout.pdf"}
</p>';
$string['config_showsource'] = 'عرض المصدر';
$string['config_showsource_help'] = 'ما إذا كان يجب عرض المصادر المستخرجة للمستخدم النهائي في سجل المحادثة. سواء تم عرضها أم لا، سيتم استخراج المصادر وتقديمها للذكاء الاصطناعي.';
$string['config_startopen'] = 'بدء مفتوح';
$string['config_startopen_help'] = 'ما إذا كان يجب أن تبدأ المحادثة مفتوحة أو مغلقة.';
$string['config_condenseprompt'] = 'تكثيف الموجه';
$string['config_condenseprompt_help'] = 'نموذج الموجه المستخدم لتوحيد تاريخ المحادثة والسؤال في موجه واحد. اتركه فارغاً لاستخدام الموجه الافتراضي.<p>
<i>ملاحظة: هذه الميزة تعمل فقط على الحسابات التي تم تمكين هندسة الموجه فيها.</i></p>';
$string['config_questionprompt'] = 'موجه السؤال';
$string['config_questionprompt_help'] = 'نموذج الموجه المستخدم لطرح السؤال. اتركه فارغاً لاستخدام الموجه الافتراضي.<p>
<i>ملاحظة: هذه الميزة تعمل فقط على الحسابات التي تم تمكين هندسة الموجه فيها.</i></p>';
$string['config_temperature'] = 'درجة الحرارة';
$string['config_temperature_help'] = 'معامل درجة الحرارة لـ OpenAI GPT. يدعم القيم من 0 إلى 1. القيم الأقرب إلى 0 ستنتج ردود أكثر توقعاً ولكن أقل إبداعاً. القيم الأقرب إلى 1 ستنتج ردوداً أكثر إبداعاً ولكن أقل توقعاً. اتركه فارغاً لاستخدام القيمة الافتراضية.';
$string['config_sourcecount'] = 'عدد المصادر';
$string['config_sourcecount_help'] = 'عدد المصادر التي سيتم استخراجها وتقديمها للذكاء الاصطناعي. القيم المدعومة هي من 0 إلى 5.';
$string['config_customcss'] = 'CSS مخصص';
$string['config_customcss_help'] = 'CSS مخصص لاستخدامه لهذه الكتلة. يجب أن يكون CSS صالحاً.';
$string['metadata_filter'] = 'مرشحات البيانات الوصفية';
$string['field_name'] = 'الاسم';
$string['field_value'] = 'القيمة';
$string['add_filter'] = 'إضافة مرشح';

// سلاسل الكتلة
$string['input_placeholder'] = 'اطرح سؤالاً...';
$string['opener'] = 'مرحباً. كيف يمكنني مساعدتك؟';

// الأذونات
$string['ube_ta:addinstance'] = 'إضافة كتلة UBE TA جديدة';
$string['ube_ta:myaddinstance'] = 'إضافة كتلة UBE TA جديدة إلى صفحة "Moodle الخاصة بي"';

// الخصوصية
$string['privacy:metadata'] = 'كتلة UBE TA لا تخزن أي بيانات شخصية.';
