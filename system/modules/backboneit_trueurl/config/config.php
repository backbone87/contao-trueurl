<?php

$GLOBALS['BE_MOD']['design']['page']['bbit_turl_regenerate'] = array('TrueURLBackend', 'keyRegenerate');
$GLOBALS['BE_MOD']['design']['page']['bbit_turl_repair'] = array('TrueURLBackend', 'keyRepair');

$GLOBALS['TL_HOOKS']['addCustomRegexp'][]       = array('TrueURLBackend', 'addCustomRegexp');
$GLOBALS['TL_HOOKS']['getPageIdFromUrl'][]      = array('TrueURLFrontend', 'getPageIdFromUrl');
