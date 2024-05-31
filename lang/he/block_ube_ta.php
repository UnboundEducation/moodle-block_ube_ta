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
 * Hebrew
 *
 * @package    block_ube_ta
 * @copyright  2023 David Wipperfurth <dwipperfurth@unboundeducation.org>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['pluginname'] = 'בלוק עוזר הוראה';

// הגדרות כלליות
$string['oracle_apikey'] = 'מפתח API';
$string['oracle_apikey_help'] = 'מפתח ה-API שניתן לך לגישה ל-Oracle API.';
$string['oracle_privatekey'] = 'מפתח פרטי';
$string['oracle_privatekey_help'] = 'המפתח הפרטי שניתן לך לגישה ל-Oracle API.';
$string['oracle_session'] = 'משך זמן המושב';
$string['oracle_session_help'] = 'משך הזמן בשניות לשימוש כמושב. זה צריך להיות זהה למשך הזמן של המושב במערכת ניהול הלמידה (LMS).';
$string['oracle_domain'] = 'דומיין Oracle';
$string['oracle_domain_help'] = 'הדומיין של Oracle API. זה צריך להיות הדומיין והפורט של Oracle API.';
$string['css_url'] = 'URL של CSS';
$string['css_url_help'] = 'כתובת ה-URL של קובץ ה-CSS לשימוש בבלוק זה. זה צריך להיות URL מלא לקובץ ה-CSS.';

// הגדרות בלוק
$string['data_filters'] = 'מסנני נתונים';
$string['config_opener'] = 'הודעת פתיחה';
$string['config_opener_help'] = "ההודעה הראשונית \"שנשלחה על ידי הבוט\" למשתמש הקצה כאשר הצ'אט נפתח לראשונה.<p>
<i>הערה: כברירת מחדל, זהו מחרוזת ספציפית לשפה. שינוי זה מהברירת מחדל יבטל את התמיכה בשפה.</i></p>";
$string['config_filters'] = "הגדרת מסננים";
$string['config_filters_help'] = "הגדר את המסננים לשימוש בבלוק זה.<p>
דוגמה: {\"קטגוריה\": \"מתמטיקה\", \"כיתה\": \"3\", \"קובץ\": \"handout.pdf\"}
</p>";
$string['config_showsource'] = 'הצג מקור';
$string['config_showsource_help'] = "האם להציג את המקורות שנמשכו למשתמש הקצה ביומן הצ'אט. בין אם מוצגים ובין אם לא, המקורות עדיין יימשכו ויסופקו ל-AI.";
$string['config_startopen'] = 'התחל פתוח';
$string['config_startopen_help'] = "האם להתחיל את הצ'אט פתוח או סגור.";
$string['config_condenseprompt'] = 'תבנית פרומפט';
$string['config_condenseprompt_help'] = "תבנית הפרומפט המשמשת לצמצום היסטוריית הצ'אט והשאלה לפרומפט אחד. השאר ריק לשימוש בתבנית ברירת המחדל.<p>
<i>הערה: תכונה זו פועלת רק בחשבונות עם הנדסת פרומפט מופעלת.</i></p>";
$string['config_questionprompt'] = 'פרומפט שאלה';
$string['config_questionprompt_help'] = 'תבנית הפרומפט המשמשת לשאילת השאלה. השאר ריק לשימוש בתבנית ברירת המחדל.<p>
<i>הערה: תכונה זו פועלת רק בחשבונות עם הנדסת פרומפט מופעלת.</i></p>';
$string['config_temperature'] = 'טמפרטורה';
$string['config_temperature_help'] = 'פרמטר הטמפרטורה של OpenAI GPT. תומך בערכים בין 0 ל-1. ערכים קרובים יותר ל-0 יניבו תגובות יותר צפויות אך פחות יצירתיות. ערכים קרובים יותר ל-1 יניבו תגובות יותר יצירתיות אך פחות צפויות. השאר ריק לשימוש בערך ברירת המחדל.';
$string['config_sourcecount'] = 'מספר מקורות';
$string['config_sourcecount_help'] = 'כמה מקורות למשוך ולספק ל-AI. הערכים הנתמכים הם בין 0 ל-5.';
$string['config_customcss'] = 'CSS מותאם אישית';
$string['config_customcss_help'] = 'CSS מותאם אישית לשימוש בבלוק זה. זה צריך להיות CSS חוקי.';
$string['metadata_filter'] = 'מסנני מטה-נתונים';
$string['field_name'] = 'שם';
$string['field_value'] = 'ערך';
$string['add_filter'] = 'הוסף מסנן';

// מחרוזות בלוק
$string['input_placeholder'] = 'שאל שאלה...';
$string['opener'] = 'שלום. איך אני יכול לעזור לך?';

// הרשאות
$string['ube_ta:addinstance'] = 'הוסף בלוק UBE TA חדש';
$string['ube_ta:myaddinstance'] = 'הוסף בלוק UBE TA חדש לדף Moodle שלי';

// פרטיות
$string['privacy:metadata'] = 'בלוק UBE TA אינו שומר כל נתונים אישיים.';
