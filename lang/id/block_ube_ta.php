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
 * Indonesian / Bahasa Indonesia
 *
 * @package    block_ube_ta
 * @copyright  2023 David Wipperfurth <dwipperfurth@unboundeducation.org>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['pluginname'] = 'Blok Asisten Pengajar';

// Pengaturan Global
$string['oracle_apikey'] = 'Kunci API';
$string['oracle_apikey_help'] = 'Kunci API yang diberikan kepada Anda untuk mengakses Oracle API.';
$string['oracle_privatekey'] = 'Kunci Pribadi';
$string['oracle_privatekey_help'] = 'Kunci pribadi yang diberikan kepada Anda untuk mengakses Oracle API.';
$string['oracle_session'] = 'Durasi Sesi';
$string['oracle_session_help'] = 'Durasi sesi dalam detik. Ini seharusnya mencerminkan durasi sesi dari LMS.';
$string['oracle_domain'] = 'Domain Oracle';
$string['oracle_domain_help'] = 'Domain dari Oracle API. Ini seharusnya berupa domain dan port dari Oracle API.';
$string['css_url'] = 'URL CSS';
$string['css_url_help'] = 'URL ke file CSS yang digunakan untuk blok ini. Ini seharusnya berupa URL lengkap ke file CSS tersebut.';

// Pengaturan Blok
$string['data_filters'] = 'Filter Data';
$string['config_opener'] = 'Pesan Pembuka';
$string['config_opener_help'] = 'Pesan awal yang "dikirim oleh bot" kepada pengguna akhir saat obrolan pertama kali dibuka.<p>
<i>Catatan: Secara default, ini adalah string khusus bahasa. Mengubahnya dari default akan menimpa dukungan bahasa.</i></p>';
$string['config_filters'] = 'Konfigurasikan Filter';
$string['config_filters_help'] = 'Konfigurasikan filter yang digunakan untuk blok ini.<p>
Contoh: {"Kategori": "Matematika", "Kelas": "3", "file": "handout.pdf"}
</p>';
$string['config_showsource'] = 'Tampilkan Sumber';
$string['config_showsource_help'] = 'Apakah akan menampilkan sumber yang ditarik kepada pengguna akhir dalam log obrolan. Apakah ditampilkan atau tidak, sumber tetap akan ditarik dan diberikan kepada AI.';
$string['config_startopen'] = 'Mulai Terbuka';
$string['config_startopen_help'] = 'Apakah obrolan akan dimulai dalam keadaan terbuka atau tertutup.';
$string['config_condenseprompt'] = 'Menyusun Ulang Prompt';
$string['config_condenseprompt_help'] = 'Template prompt yang digunakan untuk mengonsolidasikan riwayat obrolan dan pertanyaan menjadi satu prompt. Biarkan kosong untuk menggunakan prompt default.<p>
<i>Catatan: Fitur ini hanya berfungsi pada akun dengan rekayasa prompt diaktifkan.</i></p>';
$string['config_questionprompt'] = 'Prompt Pertanyaan';
$string['config_questionprompt_help'] = 'Template prompt yang digunakan untuk mengajukan pertanyaan. Biarkan kosong untuk menggunakan prompt default.<p>
<i>Catatan: Fitur ini hanya berfungsi pada akun dengan rekayasa prompt diaktifkan.</i></p>';
$string['config_temperature'] = 'Temperatur';
$string['config_temperature_help'] = 'Parameter suhu OpenAI GPT. Mendukung nilai dari 0 hingga 1. Nilai yang lebih dekat dengan 0 akan menghasilkan respons yang lebih dapat diprediksi, tetapi kurang kreatif. Nilai yang lebih dekat dengan 1 akan menghasilkan respons yang lebih kreatif, tetapi kurang dapat diprediksi. Biarkan kosong untuk menggunakan nilai default.';
$string['config_sourcecount'] = 'Jumlah Sumber';
$string['config_sourcecount_help'] = 'Berapa banyak sumber yang akan ditarik dan diberikan kepada AI. Nilai yang didukung adalah 0 hingga 5.';
$string['config_customcss'] = 'CSS Khusus';
$string['config_customcss_help'] = 'CSS khusus yang digunakan untuk blok ini. Ini harus berupa CSS yang valid.';
$string['metadata_filter'] = 'Filter Metadata';
$string['field_name'] = 'Nama';
$string['field_value'] = 'Nilai';
$string['add_filter'] = 'Tambahkan Filter';

// String Blok
$string['input_placeholder'] = 'Ajukan pertanyaan...';
$string['opener'] = 'Halo. Bagaimana saya bisa membantu Anda?';

// Izin
$string['ube_ta:addinstance'] = 'Tambahkan blok UBE TA baru';
$string['ube_ta:myaddinstance'] = 'Tambahkan blok UBE TA baru ke halaman My Moodle';

// Privasi
$string['privacy:metadata'] = 'Blok UBE TA tidak menyimpan data pribadi.';
