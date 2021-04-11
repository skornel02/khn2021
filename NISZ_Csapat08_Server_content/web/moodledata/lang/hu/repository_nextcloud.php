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
 * Strings for component 'repository_nextcloud', language 'hu', version '3.10'.
 *
 * @package     repository_nextcloud
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['both'] = 'Belső és külső';
$string['cannotconnect'] = 'A felhasználó hitelesítése sikertelen, jelentkezzen be, majd töltse fel az állományt.';
$string['chooseissuer'] = 'Kibocsátó';
$string['chooseissuer_help'] = 'Új kibocsátó hozzáadásához térjen át a Portáladminisztráció / Szerver / OAuth 2 szolgáltatások oldalra.';
$string['configplugin'] = 'Nextcloud adattár beállítása';
$string['configuration_exception'] = 'Hiba történt az OAuth 2 kliens beállításában: {$a}';
$string['contactadminwith'] = 'A kért lépést nem lehetett végrehajtani. Ha ez gyakran fordul elő, forduljon a rendszergazdához az alábbi adatokkal: <br>"<i>{$a}</i>"';
$string['couldnotmove'] = 'A kért állomány nem helyezhető át a(z) {$a} mappába.';
$string['defaultreturntype'] = 'Alapértelmezett visszatérési típus';
$string['endpointnotdefined'] = 'A(z) {$a} végpont nincs meghatározva.';
$string['external'] = 'Külső (csak a Moodle-ban tárolt hivatkozások)';
$string['filenotaccessed'] = 'A kért állomány nem elérhető. Ellenőrizze, érvényes állományt választott-e, és megfelelő fiókkal van-e hitelesítve.';
$string['fileoptions'] = 'Itt állíthatja be a visszatérő állományok típusát és alapértékeit. Minden külsőleg kapcsolódó állomány úgy frissül, hogy a tulajdonos a Moodle rendszerfiókja lesz.';
$string['foldername'] = 'Nextcloud felhasználóinak saját terében létrehozott mappa neve, mely tartalmazza az összes hozzáféréssel szabályozott hivatkozást.';
$string['foldername_help'] = 'Ahhoz, hogy a felhasználók megtalálják a velük megosztott állományokat, a megosztások külön mappába kerülnek. <br>
Ez a beállítás határozza meg a mappa nevét. Ajánlott a  Moodle-hoz kötődő nevet választania.';
$string['internal'] = 'Belső (a Moodle-ban tárolt állományok)';
$string['invalidresponse'] = 'Érvénytelen szerverválasz.';
$string['issuervalidation_invalid'] = 'Jelenleg  {$a} kibocsátó aktív, de nincs meg benne az összes szükséges végpont. Az adattár nem fog működni.';
$string['issuervalidation_valid'] = 'Jelenleg {$a} kibocsátó aktív.';
$string['issuervalidation_without'] = 'Még nem választott ki Nextcloud szervert mint OAuth 2 kibocsátót.';
$string['nextcloud'] = 'Nextcloud';
$string['nextcloud:view'] = 'Nextcloud megtekintése';
$string['no_right_issuers'] = 'A meglévő kibocsátók egyikénél sincs meg az összes szükséges végpont. Regisztráljon egy megfelelő kibocsátót.';
$string['noclientconnection'] = 'Az OAuth klienseket nem lehetett összekapcsolni.';
$string['notauthorized'] = 'Ön nem jogosult az előírt kérelmet végrehajtani. Ügyeljen arra, hogy a megfelelő fiókkal legyen hitelesítve.';
$string['oauth2serviceslink'] = '<a href="{$a}" title="Hivatkozás az OAuth 2 szolgáltatások beállításához">OAuth 2 szolgáltatások beállítása</a>';
$string['pathnotcreated'] = 'A rendszerfiókban a(z) {$a} mappaútvonalat nem lehetett létrehozni.';
$string['pluginname'] = 'Nextcloud';
$string['pluginname_help'] = 'Nextcloud adattára';
$string['privacy:metadata'] = 'A Nextcloud adattárának segédprogramja nem tárol személyes adatokat és nem továbbít ilyeneket a távoli rendszerhez.';
$string['request_exception'] = '{$a->instance} kérése sikertelen. {$a->errormessage}';
$string['requestnotexecuted'] = 'A kérést nem lehetett végrehajtani. Ha ez ismét bekövetkezik, forduljon a portál rendszergazdájához.';
$string['right_issuers'] = 'Az alábbi kibocsátóknál vannak meg a szükséges végpontok: <br> {$a}';
$string['supportedreturntypes'] = 'Támogatott állományok';
