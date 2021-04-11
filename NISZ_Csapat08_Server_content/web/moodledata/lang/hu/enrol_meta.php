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
 * Strings for component 'enrol_meta', language 'hu', version '3.10'.
 *
 * @package     enrol_meta
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addgroup'] = 'Hozzáadás a csoporthoz';
$string['coursesort'] = 'Kurzuslista rendezése';
$string['coursesort_help'] = 'Meghatározza, hogy az összekapcsolható kurzusok listájának rendezése a sorrend (vagyis a Portálkezelés > Kurzusok > Kurzusok és kategóriák kezelése szerinti rend) vagy a kurzusbeállítás betűrendje alapján történjen.';
$string['creategroup'] = 'Új csoport létrehozása';
$string['defaultgroupnametext'] = '{$a->name} kurzus {$a->increment}';
$string['enrolmetasynctask'] = 'Meta beiratkozás-szinkronizálási feladat';
$string['linkedcourse'] = 'Kurzus kapcsolása';
$string['meta:config'] = 'Egyesített beiratkozási példányok beállítása';
$string['meta:selectaslinked'] = 'Kurzus kiválasztása egyesített kapcsolásúként';
$string['meta:unenrol'] = 'Felfüggesztett felhasználók kiiratkoztatása';
$string['nosyncroleids'] = 'Szinkronizálatlan szerepek';
$string['nosyncroleids_desc'] = 'Alapesetben minden kurzusszintű szerep-hozzárendelést illetően a fő kurzus és az alkurzusok között végbemegy a szinkronizálás. Az itt kiválasztott szerepek kimaradnak a szinkronizálásból. Az aktuális szerepek frissítésére a cron következő lefuttatásakor kerül sor.';
$string['pluginname'] = 'Kurzus egyesített kapcsolása';
$string['pluginname_desc'] = 'A kurzus összekapcsolt beiratkozási segédprogramja két külön kurzusban szinkronizálja a beiratkozásokat és a szerepeket.';
$string['privacy:metadata:core_group'] = 'Az Enrol meta segédprogram új csoportot hoz létre vagy egy meglévőt használ a kapcsolódó kurzus összes résztvevőjének a hozzáadására.';
$string['syncall'] = 'Összes beiratkozott szinkronizálása';
$string['syncall_desc'] = 'Bekapcsolása esetén akkor is sor kerül az összes beiratkozott szinkronizálására, ha a fő kurzusban nincs szerepük- Kikapcsolt állapotban az alkurzust csak a legalább egy szinkronizált szereppel rendelkezők veszik föl.';
