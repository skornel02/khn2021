<?php
// This file is part of Moodle - https://moodle.org/
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
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'repository_onedrive', language 'hu', version '3.10'.
 *
 * @package     repository_onedrive
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['access'] = 'Hozzáférés';
$string['both'] = 'Belső és külső';
$string['cachedef_folder'] = 'OneDrive állományazonosítók a rendszerfiókban lévő mappákhoz';
$string['configplugin'] = 'OneDrive segédprogram beállítása';
$string['confirmimportskydrive'] = 'Biztosan minden  "Microsoft SkyDrive" adattárban lévő fájlt a "Microsoft OneDrive" adattárba importálna?  Amíg a Microsoft OneDrive adattár be van állítva és működik, minden fájl a korábbiak szerint működik. A módosítást nem állíthatja vissza.';
$string['defaultreturntype'] = 'Alapvető visszaadási típus';
$string['external'] = 'Külső  (csak a Moodle-ban tárolt hivatkozások)';
$string['fileoptions'] = 'Itt állíthatja be a visszaadott fájlok típusát és alapbeállítását. Minden külsőleg összekapcsolt fájl frissítődik, így a tulajdonos a Moodle rendszerfiókja.';
$string['importskydrivefiles'] = 'Microsoft SkyDrive adattárban lévő fájlok importálása';
$string['internal'] = 'Belső (Moodle-ban tárolt fájlok)';
$string['issuer'] = 'OAuth 2 szolgáltatás';
$string['issuer_help'] = 'Válassza ki a OneDrive alkalmazással való kommunikációra beállított OAuth 2 szolgáltatást. Ha még nem létezik, előfordulhat, hogy saját magának kell létrehoznia.';
$string['mysitenotfound'] = 'Korábban nem használta a OneDrive-ot. Legalább egyszer jelentkezzen be a OneDrive-ba a Moodle-lal való használathoz.';
$string['oauth2serviceslink'] = '<a href="{$a}" title="hHivatkozás az OAuth Services beállításához">OAuth 2 Services beállítása</a>';
$string['onedrive:view'] = 'OneDrive adattár megtekintése';
$string['owner'] = 'Tulajdonosa: {$a}';
$string['pluginname'] = 'Microsoft OneDrive';
$string['privacy:metadata:repository_onedrive'] = 'A Microsoft OneDrive adattár ideiglenesen tárolja a hozzáférési engedélyeket, továbbá a Moodle-ból felhasználói adatokat továbbít a távoli rendszerbe.';
$string['privacy:metadata:repository_onedrive:repository_onedrive_access:itemid'] = 'A Microsoft OneDrive ideiglenes hozzáférési engedély azonosítójával.';
$string['privacy:metadata:repository_onedrive:repository_onedrive_access:permissionid'] = 'A Microsoft OneDrive ideiglenes hozzáférési engedély megadásának az azonosítójával.';
$string['privacy:metadata:repository_onedrive:repository_onedrive_access:timecreated'] = 'A Microsoft OneDrive ideiglenes hozzáférési engedélyének létrehozási ideje.';
$string['privacy:metadata:repository_onedrive:repository_onedrive_access:timemodified'] = 'A Microsoft OneDrive ideiglenes hozzáférési engedélyének módosítási ideje.';
$string['privacy:metadata:repository_onedrive:repository_onedrive_access:usermodified'] = 'A Microsoft OneDrive ideiglenes hozzáférési engedélyét módosító felhasználó azonosítója.';
$string['privacy:metadata:repository_onedrive:searchtext'] = 'A Microsoft OneDrive adattárat használó lekérdezési szövege.';
$string['removetempaccesstask'] = 'Kontrollált hivatkozásokból az ideiglenes írási jogosultság eltávolítása';
$string['searchfor'] = '{$a} keresése';
$string['servicenotenabled'] = 'Jogosultság nincs beállítva';
$string['skydrivefilesexist'] = 'Fájlok vannak a Microsoft SkyDrive adattárban. Az adattárat a Microsoft elavultként kezeli - belőle a fájlok automatikusan importálhatók a Microsoft OneDrive adattárba.';
$string['skydrivefilesimported'] = 'Minden fájl Microsoft SkyDrive adattárból való importálása megtörtént.';
$string['skydrivefilesnotimported'] = 'Néhány fájl importálása a Microsoft SkyDrive adattárból nem sikerült.';
$string['supportedreturntypes'] = 'Támogatott fájlok';
