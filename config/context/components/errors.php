<?php
$GLOBALS['TYPO3_CONF_VARS'] = array_replace_recursive($GLOBALS['TYPO3_CONF_VARS'], [
    'BE' => [
        'debug' => true,
    ],
    'FE' => [
        'debug' => true,
    ],
    'SYS' => [
        'devIPmask' => '*',
        'displayErrors' => 1,
        'enableDeprecationLog' => 'file',
        'errorHandlerErrors' => '30466',
        'exceptionalErrors' => '4096',
        'sqlDebug' => 1,
        'systemLogLevel' => 0,
    ],
]);
