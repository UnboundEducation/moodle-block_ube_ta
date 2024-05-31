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
 * Thai / Thai
 * 
 * @package    block_ube_ta
 * @copyright  2023 David Wipperfurth <dwipperfurth@unboundeducation.org>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['pluginname'] = 'บล็อกผู้ช่วยการสอน';

// การตั้งค่าทั่วไป
$string['oracle_apikey'] = 'คีย์ API';
$string['oracle_apikey_help'] = 'คีย์ API ที่ให้มาให้คุณเพื่อเข้าถึง Oracle API';
$string['oracle_privatekey'] = 'คีย์ส่วนตัว';
$string['oracle_privatekey_help'] = 'คีย์ส่วนตัวที่ให้มาให้คุณเพื่อเข้าถึง Oracle API';
$string['oracle_session'] = 'ระยะเวลาเซสชัน';
$string['oracle_session_help'] = 'ระยะเวลาในหน่วยวินาทีที่จะใช้เป็นเซสชัน ควรสะท้อนระยะเวลาเซสชันของ LMS';
$string['oracle_domain'] = 'โดเมน Oracle';
$string['oracle_domain_help'] = 'โดเมนของ API Oracle ควรเป็นโดเมนและพอร์ตของ Oracle API';
$string['css_url'] = 'URL CSS';
$string['css_url_help'] = 'URL ไปยังไฟล์ CSS ที่จะใช้สำหรับบล็อกนี้ ควรเป็น URL เต็มไปด้วย';

// การตั้งค่าบล็อก
$string['data_filters'] = 'ตัวกรองข้อมูล';
$string['config_opener'] = 'ข้อความเปิด';
$string['config_opener_help'] = 'ข้อความเริ่มต้นที่ "ส่งโดยบอต" ถึงผู้ใช้เมื่อแชทถูกเปิดครั้งแรก<p>
<i>หมายเหตุ: โดยค่าเริ่มต้นนี้เป็นสตริงที่เกี่ยวข้องกับภาษา การเปลี่ยนแปลงจากค่าเริ่มต้นจะแทนที่การสนับสนุนภาษา</i></p>';
$string['config_filters'] = 'กำหนดค่าตัวกรอง';
$string['config_filters_help'] = 'กำหนดตัวกรองที่จะใช้สำหรับบล็อกนี้<p>
ตัวอย่าง: {"หมวดหมู่": "คณิตศาสตร์", "ชั้น": "3", "ไฟล์": "handout.pdf"}
</p>';
$string['config_showsource'] = 'แสดงต้นทาง';
$string['config_showsource_help'] = 'ว่าจะแสดงแหล่งที่มาที่ดึงได้หรือไม่ในบันทึกแชท ไม่ว่าจะแสดงหรือไม่แสดง ต้นทางก็จะยังถูกดึงและให้แก่ AI อยู่';
$string['config_startopen'] = 'เริ่มต้นเปิด';
$string['config_startopen_help'] = 'ว่าจะเริ่มแชทให้เปิดหรือไม่';
$string['config_condenseprompt'] = 'คำแนะนำย่อ';
$string['config_condenseprompt_help'] = 'แม่แบบคำแนะนำที่ใช้รวมประวัติแชทและคำถามเข้าไว้ในคำแนะนำเดียว ปล่อยว่างเพื่อใช้คำแนะนำเริ่มต้น<p>
<i>หมายเหตุ: คุณลักษณะนี้ทำงานได้เฉพาะบัญชีที่เปิดใช้งานเท่านั้น</i></p>';
$string['config_questionprompt'] = 'คำแนะนำการถาม';
$string['config_questionprompt_help'] = 'แม่แบบคำแนะนำที่ใช้สอบถามคำถาม ปล่อยว่างเพื่อใช้คำแนะนำเริ่มต้น<p>
<i>หมายเหตุ: คุณลักษณะนี้ทำงานได้เฉพาะบัญชีที่เปิดใช้งานเท่านั้น</i></p>';
$string['config_temperature'] = 'อุณหภูมิ';
$string['config_temperature_help'] = 'พารามิเตอร์อุณหภูมิของ OpenAI GPT รองรับค่าตั้งแต่ 0 ถึง 1 ค่าที่ใกล้ 0 จะทำให้ได้คำตอบที่เป็นประสิทธิภาพมากขึ้น แต่น้อยสร้างความคิดสร้างสรรค์น้อยลง ค่าที่ใกล้ 1 จะทำให้ได้คำตอบที่มีความคิดสร้างสรรค์มากขึ้น แต่น้อยคาดการณ์ได้น้อยลง ปล่อยให้ว่างเพื่อใช้ค่าเริ่มต้น';
$string['metadata_filter'] = 'ตัวกรองเมตาดาต้า';
$string['field_name'] = 'ชื่อ';
$string['field_value'] = 'ค่า';
$string['add_filter'] = 'เพิ่มตัวกรอง';

$string['config_sourcecount'] = 'จำนวนแหล่งข้อมูล';
$string['config_sourcecount_help'] = 'จำนวนแหล่งข้อมูลที่จะดึงและให้กับ AI รองรับค่าตั้งแต่ 0 ถึง 5';

$string['config_customcss'] = 'CSS แบบกำหนดเอง';
$string['config_customcss_help'] = 'CSS ที่กำหนดเองที่จะใช้สำหรับบล็อกนี้ ควรเป็น CSS ที่ถูกต้อง';

// ข้อความของบล็อก
$string['input_placeholder'] = 'ถามคำถาม...';
$string['opener'] = 'สวัสดี ฉันจะช่วยอะไรคุณ?';

// สิทธิ์
$string['ube_ta:addinstance'] = 'เพิ่มบล็อก UBE TA ใหม่';
$string['ube_ta:myaddinstance'] = 'เพิ่มบล็อก UBE TA ใหม่ลงในหน้า My Moodle';

// ความเป็นส่วนตัว
$string['privacy:metadata'] = 'บล็อก UBE TA ไม่เก็บข้อมูลส่วนบุคคล';
