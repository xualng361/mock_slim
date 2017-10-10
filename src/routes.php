<?php

$config['routes'] = [
    'MockController:index1Action' => [
        'method' => 'GET',
        'path' => '/',
        'action' => '\MockController:indexAction'
    ],
    'MockController:indexAction' => [
        'method' => 'GET',
        'path' => '/mock/[page-{page}[/url-{url}]]',
        'action' => '\MockController:indexAction'
    ],
    'MockController:addAction' => [
        'method' => 'GET',
        'path' => '/mock/add/[id-{id}]',
        'action' => '\MockController:addAction'
    ],
    'MockController:deleteAction' => [
        'method' => 'POST',
        'path' => '/mock/delete',
        'action' => '\MockController:deleteAction'
    ],
    'MockController:urlsearchAction' => [
        'method' => 'POST',
        'path' => '/mock/urlsearch',
        'action' => '\MockController:urlsearchAction'
    ],
    'MockController:saveAction' => [
        'method' => 'POST',
        'path' => '/mock/save/[id-{id}]',
        'action' => '\MockController:saveMockAction'
    ],
    'MockController:mappingSaveAction' => [
        'method' => 'POST',
        'path' => '/mock/mappingSave',
        'action' => '\MockController:mappingSaveAction'
    ],
    'MockController:/mock/findIpAction' => [
        'method' => 'GET',
        'path' => '/mock/findIp',
        'action' => '\MockController:findIpAction'
    ],
    'MockController:/mock/findVarAction' => [
        'method' => 'POST',
        'path' => '/mock/findVar',
        'action' => '\MockController:findVarAction'
    ],
    'MockController:/mock/varSaveAction' => [
        'method' => 'POST',
        'path' => '/mock/varSave',
        'action' => '\MockController:varSaveAction'
    ],
    'MockController:/mock/findResponseAction' => [
        'method' => 'GET',
        'path' => '/mock/findResponse',
        'action' => '\MockController:findResponseAction'
    ],
    'MockController:/mock/responseSaveAction' => [
        'method' => 'POST',
        'path' => '/mock/responseSave',
        'action' => '\MockController:responseSaveAction'
    ],
    'MockController:/mock/find2Action' => [
        'method' => 'POST',
        'path' => '/mock/find2',
        'action' => '\MockController:find2Action'
    ],
    'MockController:/mock/turnResponseAction' => [
        'method' => 'POST',
        'path' => '/mock/turnResponse',
        'action' => '\MockController:turnResponseAction'
    ],
    'MockController:/mock/delResponseAction' => [
        'method' => 'POST',
        'path' => '/mock/delResponse',
        'action' => '\MockController:delResponseAction'
    ],
];