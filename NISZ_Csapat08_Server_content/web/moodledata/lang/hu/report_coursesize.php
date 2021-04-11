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
 * Strings for component 'report_coursesize', language 'hu', version '3.10'.
 *
 * @package     report_coursesize
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['backupsize'] = 'Biztonsági mentés mérete';
$string['catsystembackupuse'] = 'A rendszer- és kategóriamentések mérete: {$a}.';
$string['catsystemuse'] = 'A rendszer és kategóriák mérete a kurzusok által használt területen túl: {$a}.';
$string['coursebackupbytes'] = 'A(z) {$a->shortname} kurzus biztonsági mentései által felhasznált terület: {$a->backupbytes} byte';
$string['coursebytes'] = 'A(z) {$a->shortname} kurzus mérete: {$a->bytes} byte';
$string['coursereport'] = 'Összesítés segédprogramtípusonként - Ezek összege kisebb lehet a jelentésbeli teljes kurzusméretnél és valószínűleg pontosabb értékeket tartalmaz.';
$string['coursesize'] = 'Kurzusok mérete';
$string['coursesize:view'] = 'A kurzusok méretéről szóló jelentés megtekintése';
$string['coursesize_desc'] = '<p>A jelentés csak becsült értékeket tartalmaz.
Ha egy állomány egy vagy több kurzusban többször használatos, a jelentés annak ellenére minden egyes használatot hozzáad a tárhelyfoglaláshoz, hogy a Moodle fizikailag csak egy példányban tárolja azt.</p>';
$string['coursesummary'] = '(részletek)';
$string['diskusage'] = 'Összesen';
$string['emptycourseshidden'] = 'A jelentésben nem jelennek meg azok a kurzusok, amelyek egyáltalán nem foglalnak tárhelyet.';
$string['exportcsv'] = 'CSV exportálása';
$string['nouserfiles'] = 'A felhasználók állományai nem jelennek meg.';
$string['pluginname'] = 'Kurzusok mérete';
$string['privacy:metadata'] = 'A Kurzusok mérete segédprogram nem tárol személyes adatokat.';
$string['sharedusage'] = 'Megosztott használat';
$string['sizerecorded'] = '(Rögzítve: {$a})';
$string['totalsitedata'] = 'A portál teljes mérete: {$a}';
$string['userstopnum'] = 'Felhasználók (első {$a})';
