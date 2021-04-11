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
 * Strings for component 'tool_lpmigrate', language 'hu', version '3.10'.
 *
 * @package     tool_lpmigrate
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowedcourses'] = 'Engedélyezett kurzusok';
$string['allowedcourses_help'] = 'Válasszon ki kurzusokat az új keretbe való áthelyezéshez. Ha nincs megadva kurzus, az összes kurzus áthelyeződik.';
$string['continuetoframeworks'] = 'Tovább a keretekhez';
$string['coursecompetencymigrations'] = 'Kurzuskészségek áthelyezései';
$string['coursemodulecompetencymigrations'] = 'Kurzustevékenység és tananyaghoz kapcsolódó készségek áthelyezése';
$string['coursemodulesfound'] = 'Kurzustevékenység vagy tananyag észlelhető';
$string['coursesfound'] = 'Kurzus található';
$string['coursestartdate'] = 'Kurzusok kezdési időpontja';
$string['coursestartdate_help'] = 'Bekapcsolása esetén a kezdési időpont előtti kurzusok kimaradnak az áthelyezésből.';
$string['disallowedcourses'] = 'Nem engedélyezett kurzusok';
$string['disallowedcourses_help'] = 'Az itt megadott kurzusok kimaradnak az új keretbe való áthelyezésből.';
$string['errorcannotmigratetosameframework'] = 'Ugyanabba a kurzusba nem lehet áthelyezni';
$string['errorcouldnotmapcompetenciesinframework'] = 'Nem felel meg a keret egyetlen készségének sem.';
$string['errors'] = 'Hibák';
$string['errorwhilemigratingcoursecompetencywithexception'] = 'Hiba kurzuskészség áthelyezése közben: {$a}';
$string['errorwhilemigratingmodulecompetencywithexception'] = 'Hiba tevékenységhez vagy tananyaghoz kapcsolódó készség áthelyezése közben: {$a}';
$string['excludethese'] = 'Ezeket kivéve';
$string['explanation'] = 'Készségkeret újabb verzióra frissítésekor az eszközzel a régi keret alapján készségeket kereshet kurzusokban és kurzusmodulokban, majd frissítheti kapcsolódásukat az új keretnek megfelelően.

Nem ajánlott közvetlenül a régi készségegyüttest szerkeszteni, mert az kihat a felhasználói tanulási tervekben szereplő készségekre is.

Alapesetben a keret új verzióját használja, a régit elrejti, majd ezzel az eszközzel áthelyezi az új kurzusokat az új keretbe.';
$string['findingcoursecompetencies'] = 'Kurzuskészségek keresése';
$string['findingmodulecompetencies'] = 'Tevékenységhez vagy tananyaghoz kapcsolódó készségek keresése';
$string['frameworks'] = 'Keretek';
$string['limittothese'] = 'Ezekre korlátozva';
$string['lpmigrate:frameworksmigrate'] = 'Keretek áthelyezése';
$string['migrateframeworks'] = 'Keretek áthelyezése';
$string['migratefrom'] = 'Forrás';
$string['migratefrom_help'] = 'Válassza ki a most használt régi keretet.';
$string['migratemore'] = 'Több áthelyezése';
$string['migrateto'] = 'Cél';
$string['migrateto_help'] = 'Válassza ki a keret új verzióját. A keret nem lehet rejtett!';
$string['migratingcourses'] = 'Kurzusok áthelyezése';
$string['missingmappings'] = 'Hiányzó megfelelések';
$string['performmigration'] = 'Áthelyezés végrehajtása';
$string['pluginname'] = 'Készségáthelyező eszköz';
$string['privacy:metadata'] = 'A Competencies migration tool segédprogram nem tárol személyes adatokat.';
$string['results'] = 'Eredmények';
$string['startdatefrom'] = 'Kezdő időpont';
$string['unmappedin'] = '{$a} esetén nincs megfeleltetve';
$string['warningcouldnotremovecoursecompetency'] = 'A kurzuskészséget nem lehetett törölni.';
$string['warningcouldnotremovemodulecompetency'] = 'A tevékenységhez vagy tananyaghoz kapcsolódó készséget nem lehetett törölni.';
$string['warningdestinationcoursecompetencyalreadyexists'] = 'Már létezik ilyen kurzusbeli célkészség.';
$string['warningdestinationmodulecompetencyalreadyexists'] = 'A tevékenységhez vagy tananyaghoz kapcsolódó célkészség már létezik.';
$string['warnings'] = 'Figyelmeztetések';
