<?php

require_once 'components/authentication.php';
require_once 'components/caches.php';
require_once 'components/errors.php';
require_once 'components/login.php';

// Set custom backend favicon
$GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['backend']['backendFavicon'] = 'EXT:integration_project/Resources/Public/Icons/DevelopmentFavicon.png';
