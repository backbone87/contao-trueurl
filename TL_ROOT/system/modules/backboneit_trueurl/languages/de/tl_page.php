<?php

$GLOBALS['TL_LANG']['tl_page']['bbit_turl_aliasShow']
	= array('Seitenalias zeigen', 'Den Alias der Seiten in der Übersicht anzeigen.');
$GLOBALS['TL_LANG']['tl_page']['bbit_turl_aliasHide']
	= array('Seitenalias verstecken', 'Den Alias der Seiten in der Übersicht verstecken.');
$GLOBALS['TL_LANG']['tl_page']['bbit_turl_regenerate']
	= array('Seiten regenerieren', 'Regeneriert alle direkten Referenzen auf die Startpunktseite in der sich die jeweilige Seite befindet. Diese Information wird von der Erweiterung "backboneit_trueurl" benötigt um eine effiziente Ermittelung der anzuzeigenden Seite durchzuführen.');
$GLOBALS['TL_LANG']['tl_page']['bbit_turl_repair']
	= array('Seitenalias reparieren', 'Überprüft alle Seitenaliase und repariert diese, wenn nötig. Außerdem werden leere Aliase automatisch befüllt.');
$GLOBALS['TL_LANG']['tl_page']['bbit_turl_autoInherit']
	= array('Automatische Vererbung des Seitenalias prüfen und aktivieren', 'Aktiviert die automatische Vererbung des Seitenalias für diese und alle Unterseiten, wenn der jeweilige Seitenalias mit der Elternseite beginnt.');
	
$GLOBALS['TL_LANG']['tl_page']['bbit_turl_defaultInherit']
	= array('Standardmäßig den Alias der Elternseite als Prefix verwenden', 'Die Standardeinstellungen für die Option "Alias der Elternseite als Prefix verwenden" von neu erstellten Seiten unterhalb dieses Startpunkts.');
$GLOBALS['TL_LANG']['tl_page']['bbit_turl_inherit']
	= array('Alias der Elternseite als Prefix verwenden', 'Der Alias der Elternseite wird als diesem Seitenalias als Prefix vorangestellt. Änderungen im Elternalias werden automatisch auf diese Seite übertragen.');

$GLOBALS['TL_LANG']['tl_page']['errNoAlias']
	= 'Alias fehlt!';
$GLOBALS['TL_LANG']['tl_page']['errNoFragment']
	= 'Alias-Fragment fehlt!';
$GLOBALS['TL_LANG']['tl_page']['errInvalidFragment']
	= 'Alias endet nicht Alias-Fragment!';
$GLOBALS['TL_LANG']['tl_page']['errInvalidParentAlias']
	= 'Alias der Elternseite fehlt!';