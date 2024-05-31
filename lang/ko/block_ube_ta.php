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
 * Korean / 한국어
 *
 * @package    block_ube_ta
 * @copyright  2023 David Wipperfurth <dwipperfurth@unboundeducation.org>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['pluginname'] = '보조 교육 블록';

// 전역 설정
$string['oracle_apikey'] = 'API 키';
$string['oracle_apikey_help'] = 'Oracle API에 액세스하기 위해 제공된 API 키입니다.';
$string['oracle_privatekey'] = '개인 키';
$string['oracle_privatekey_help'] = 'Oracle API에 액세스하기 위해 제공된 개인 키입니다.';
$string['oracle_session'] = '세션 길이';
$string['oracle_session_help'] = '세션 길이(초)입니다. 이는 이상적으로는 LMS의 세션 길이와 일치해야 합니다.';
$string['oracle_domain'] = 'Oracle 도메인';
$string['oracle_domain_help'] = 'Oracle API의 도메인입니다. 이는 Oracle API의 도메인 및 포트여야 합니다.';
$string['css_url'] = 'CSS URL';
$string['css_url_help'] = '이 블록에 사용할 CSS 파일의 URL입니다. 이는 CSS 파일의 전체 URL이어야 합니다.';

// 블록 설정
$string['data_filters'] = '데이터 필터';
$string['config_opener'] = '시작 메시지';
$string['config_opener_help'] = '채팅이 처음 열릴 때 최종 사용자에게 "봇이 보낸" 초기 메시지입니다.<p>
<i>참고: 기본적으로 이것은 언어별 문자열입니다. 기본값에서 변경하면 언어 지원이 재정의됩니다.</i></p>';
$string['config_filters'] = '필터 구성';
$string['config_filters_help'] = '이 블록에 사용할 필터를 구성합니다.<p>
예: {"카테고리": "수학", "학년": "3", "파일": "handout.pdf"}
</p>';
$string['config_showsource'] = '소스 표시';
$string['config_showsource_help'] = '채팅 로그에서 추출된 소스를 최종 사용자에게 표시할지 여부. 표시 여부에 관계없이 소스는 여전히 추출되어 AI에 제공됩니다.';
$string['config_startopen'] = '시작 시 열림';
$string['config_startopen_help'] = '채팅을 열린 상태로 시작할지 여부.';
$string['config_condenseprompt'] = '요약 프롬프트';
$string['config_condenseprompt_help'] = '채팅 기록과 질문을 단일 프롬프트로 통합하는 데 사용되는 프롬프트 템플릿입니다. 기본 프롬프트를 사용하려면 비워 두세요.<p>
<i>참고: 이 기능은 프롬프트 엔지니어링이 활성화된 계정에서만 작동합니다.</i></p>';
$string['config_questionprompt'] = '질문 프롬프트';
$string['config_questionprompt_help'] = '질문을 하기 위해 사용되는 프롬프트 템플릿입니다. 기본 프롬프트를 사용하려면 비워 두세요.<p>
<i>참고: 이 기능은 프롬프트 엔지니어링이 활성화된 계정에서만 작동합니다.</i></p>';
$string['config_temperature'] = '온도';
$string['config_temperature_help'] = 'OpenAI GPT 온도 매개변수입니다. 0부터 1까지의 값이 지원됩니다. 0에 가까운 값은 더 예측 가능하지만 덜 창의적인 응답을 생성하고, 1에 가까운 값은 더 창의적이지만 덜 예측 가능한 응답을 생성합니다. 기본값을 사용하려면 비워 두세요.';
$string['config_sourcecount'] = '소스 개수';
$string['config_sourcecount_help'] = 'AI에 제공할 소스 개수입니다. 지원되는 값은 0에서 5까지입니다.';
$string['config_customcss'] = '사용자 정의 CSS';
$string['config_customcss_help'] = '이 블록에 사용할 사용자 정의 CSS입니다. 유효한 CSS여야 합니다.';
$string['metadata_filter'] = '메타데이터 필터';
$string['field_name'] = '이름';
$string['field_value'] = '값';
$string['add_filter'] = '필터 추가';

// 블록 문자열
$string['input_placeholder'] = '질문을 해보세요...';
$string['opener'] = '안녕하세요. 무엇을 도와드릴까요?';

// 권한
$string['ube_ta:addinstance'] = '새로운 UBE TA 블록 추가';
$string['ube_ta:myaddinstance'] = '내 Moodle 페이지에 새로운 UBE TA 블록 추가';

// 개인정보 처리방침
$string['privacy:metadata'] = 'UBE TA 블록은 개인 데이터를 저장하지 않습니다.';
