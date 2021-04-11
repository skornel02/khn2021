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
 * Strings for component 'mnetservice_enrol', language 'hu', version '3.10'.
 *
 * @package     mnetservice_enrol
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['availablecourseson'] = '{$a} gazdagépen elérhető kurzusok';
$string['availablecoursesonnone'] = 'A távoli <a href="{$a->hosturl}">{$a->hostname}</a> gazdagép semmilyen kurzust nem kínál felhasználóinknak.';
$string['clientname'] = 'Távoli beiratkozások kliense';
$string['clientname_help'] = 'Moodle-telepítéséből felhasználók be- és kiiratkoztatása olyan Moodle-gazdagépeken, amelyekkel erre a hálózati Moodle beiratkozási segédprogramja lehetőséget ad.';
$string['editenrolments'] = 'Beiratkozások szerkesztése';
$string['hostappname'] = 'Alkalmazás';
$string['hostname'] = 'Gazdagép neve';
$string['hosturl'] = 'Távoli gazdagép webcíme';
$string['nopublishers'] = 'Nincsenek távoli társgépek';
$string['noroamingusers'] = 'A felhasználóknak távoli kurzusok felvételéhez a rendszerkörnyezetben \'{$a}\'  képességre van szükségük. Jelenleg nincs a rendszerben ilyen felhasználó. Ha a portálján a szükséges képességet egy vagy több szerephez hozzá kívánja rendelni, kattintson a Tovább gombra.';
$string['otherenrolledusers'] = 'Egyéb beiratkozott felhasználók';
$string['pluginname'] = 'Távoli beiratkozási szolgáltatás';
$string['privacy:metadata:mnetservice_enrol_enrolments'] = 'Távoli beiratkoztatás';
$string['privacy:metadata:mnetservice_enrol_enrolments:enroltime'] = 'A beiratkozás módosításának az időpontja.';
$string['privacy:metadata:mnetservice_enrol_enrolments:enroltype'] = 'A távoli szerveren a felhasználók kurzusukra való beiratkoztatásához használt beiratkoztatási típus';
$string['privacy:metadata:mnetservice_enrol_enrolments:hostid'] = 'A távoli MNet-gazdagép azonosítója';
$string['privacy:metadata:mnetservice_enrol_enrolments:remotecourseid'] = 'A távoli szerveren futó kurzus azonosítója.';
$string['privacy:metadata:mnetservice_enrol_enrolments:rolename'] = 'A távoli szerveren betöltött szerep neve.';
$string['privacy:metadata:mnetservice_enrol_enrolments:tableexplanation'] = 'Helyi felhasználók távoli gazdagépek kurzusaira való beiratkozásának az adatait tárolja.';
$string['privacy:metadata:mnetservice_enrol_enrolments:userid'] = 'Helyi felhasználó azonosítója ezen a szerveren';
$string['refetch'] = 'Aktuális állapot elérése távoli gazdagépekről';
