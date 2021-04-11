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
 * Strings for component 'tool_assignmentupgrade', language 'hu', version '3.10'.
 *
 * @package     tool_assignmentupgrade
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['areyousure'] = 'Biztos?';
$string['areyousuremessage'] = 'Biztosan frissíti a(z) "{$a->name}" feladatot?';
$string['assignmentid'] = 'Feladatazonosító';
$string['assignmentnotfound'] = '(id={$a}) feladat nem található';
$string['assignmentsperpage'] = 'Feladat oldalanként';
$string['assignmenttype'] = 'Feladat típusa';
$string['backtoindex'] = 'Vissza a mutatóhoz';
$string['batchoperations'] = 'Kötegelt műveletek';
$string['batchupgrade'] = 'Több feladat frissítése';
$string['confirmbatchupgrade'] = 'Feladatok kötegelt frissítésének jóváhagyása';
$string['conversioncomplete'] = 'Feladat átalakítva';
$string['conversionfailed'] = 'A feladat átalakítása nem sikerült. A frissítés naplója:<br />{$a}';
$string['listnotupgraded'] = 'A nem frissített feladatok felsorolása';
$string['listnotupgraded_desc'] = 'Az egyes feladatokat itt frissítheti.';
$string['noassignmentsselected'] = 'Nincs kiválasztva feladat';
$string['noassignmentstoupgrade'] = 'Nincsenek frissítésre váró feladatok';
$string['notsupported'] = '';
$string['notupgradedintro'] = 'Ez az oldal a Moodle egy régebbi verziójával létrehozott, a Moodle 2.3-ra nem frissített feladatokat sorolja fel. Nem minden feladat frissíthető - ha egyedi feladat-altípussal hozták létre, akkor arra lesz szükség a frissítéshez.';
$string['notupgradedtitle'] = 'Nem frissített feladatok';
$string['pluginname'] = 'Súgó a feladatok frissítéséhez';
$string['privacy:metadata:preference:perpage'] = 'A felhasználó oldalankénti beállítása a feladatfrissítési rekordokhoz.';
$string['select'] = 'Választás';
$string['submissions'] = 'Leadott munkák';
$string['supported'] = 'Frissítés';
$string['unknown'] = 'Ismeretlen';
$string['updatetable'] = 'Táblázat frissítése';
$string['upgradable'] = 'Frissíthető';
$string['upgradeall'] = 'Az összes feladat frissítése';
$string['upgradeallconfirm'] = 'Frissíti az összes feladatot?';
$string['upgradeassignmentfailed'] = 'Eredmény: A frissítés nem sikerült. A frissítés naplója a következő volt: <br/><div class="tool_assignmentupgrade_upgradelog"> {$a->log} </div>';
$string['upgradeassignmentsuccess'] = 'Eredmény: a frissítés sikerült.';
$string['upgradeassignmentsummary'] = '{$a->name} feladat frissítése (Kurzus: {$a->shortname})';
$string['upgradeprogress'] = '{$a->total} közül {$a->current} feladat frissítése';
$string['upgradeselected'] = 'Kijelölt feladatok frissítése';
$string['upgradeselectedcount'] = 'Frissíti a(z) {$a} kijelölt feladatot?';
$string['upgradesingle'] = 'Egyetlen feladat frissítése';
$string['viewcourse'] = 'Az átalakított feladatot tartalmazó kurzus megtekintése';
