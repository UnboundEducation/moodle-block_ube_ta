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
 * Brazilian Portuguese
 *
 * @package    block_ube_ta
 * @copyright  2023 David Wipperfurth <dwipperfurth@unboundeducation.org>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['pluginname'] = 'Bloco de Assistente de Ensino';

// Configurações Globais
$string['oracle_apikey'] = 'Chave API';
$string['oracle_apikey_help'] = 'A chave API fornecida para você para acessar a API Oracle.';
$string['oracle_privatekey'] = 'Chave Privada';
$string['oracle_privatekey_help'] = 'A chave privada fornecida para você para acessar a API Oracle.';
$string['oracle_session'] = 'Duração da Sessão';
$string['oracle_session_help'] = 'A duração da sessão em segundos. Esta deve idealmente espelhar a duração da sessão do LMS.';
$string['oracle_domain'] = 'Domínio Oracle';
$string['oracle_domain_help'] = 'O domínio da API Oracle. Este deve ser o domínio e a porta da API Oracle.';
$string['css_url'] = 'URL do CSS';
$string['css_url_help'] = 'A URL do arquivo CSS a ser usado para este bloco. Esta deve ser uma URL completa para o arquivo CSS.';

// Configurações do Bloco
$string['data_filters'] = 'Filtros de Dados';
$string['config_opener'] = 'Mensagem de Abertura';
$string['config_opener_help'] = 'A mensagem inicial "enviada pelo bot" para o usuário final, quando o chat é aberto pela primeira vez.<p>
<i>Nota: Por padrão, esta é uma string específica do idioma. Alterá-la do padrão substituirá o suporte ao idioma.</i></p>';
$string['config_filters'] = 'Configurar Filtros';
$string['config_filters_help'] = 'Configure os filtros a serem usados para este bloco.<p>
Exemplo: {"Categoria": "Matemática", "Ano": "3", "arquivo": "apostila.pdf"}
</p>';
$string['config_showsource'] = 'Mostrar Fonte';
$string['config_showsource_help'] = 'Se deve mostrar as fontes obtidas para o usuário final, no registro do chat. Se mostrado ou não, as fontes ainda serão obtidas e fornecidas para a IA.';
$string['config_startopen'] = 'Iniciar Aberto';
$string['config_startopen_help'] = 'Se deve iniciar o chat aberto ou fechado.';
$string['config_condenseprompt'] = 'Consolidar Prompt';
$string['config_condenseprompt_help'] = 'O template do prompt usado para consolidar o histórico do chat e a pergunta em um único prompt. Deixe em branco para usar o prompt padrão.<p>
<i>Nota: Este recurso só funciona em contas com engenharia de prompt habilitada.</i></p>';
$string['config_questionprompt'] = 'Prompt de Pergunta';
$string['config_questionprompt_help'] = 'O template do prompt usado para fazer a pergunta. Deixe em branco para usar o prompt padrão.<p>
<i>Nota: Este recurso só funciona em contas com engenharia de prompt habilitada.</i></p>';
$string['config_temperature'] = 'Temperatura';
$string['config_temperature_help'] = 'Parâmetro de temperatura do OpenAI GPT. Suporta valores de 0 a 1. Valores mais próximos de 0 resultarão em respostas mais previsíveis, mas menos criativas. Valores mais próximos de 1 resultarão em respostas mais criativas, mas menos previsíveis. Deixe em branco para usar o valor padrão.';
$string['config_sourcecount'] = 'Quantidade de Fontes';
$string['config_sourcecount_help'] = 'Quantas fontes obter e fornecer para a IA. Valores suportados são de 0 a 5.';
$string['config_customcss'] = 'CSS Personalizado';
$string['config_customcss_help'] = 'CSS personalizado a ser usado para este bloco. Deve ser um CSS válido.';
$string['metadata_filter'] = 'Filtros de Metadados';
$string['field_name'] = 'Nome';
$string['field_value'] = 'Valor';
$string['add_filter'] = 'Adicionar Filtro';

// Strings do Bloco
$string['input_placeholder'] = 'Faça uma pergunta...';
$string['opener'] = 'Olá. Como posso ajudá-lo?';

// Permissões
$string['ube_ta:addinstance'] = 'Adicionar um novo bloco UBE TA';
$string['ube_ta:myaddinstance'] = 'Adicionar um novo bloco UBE TA à página Meu Moodle';

// Privacidade
$string['privacy:metadata'] = 'O bloco UBE TA não armazena nenhum dado pessoal.';
