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
 * Strings for component 'tool_dbtransfer', language 'hu', version '3.10'.
 *
 * @package     tool_dbtransfer
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clidriverlist'] = 'Elérhető adatbázis-meghajtók az áttelepítéshez';
$string['cliheading'] = 'Adatbázis áttelepítése -, ügyeljen arra, hogy az áttelepítés alatt senki ne férjen hozzá a szerverhez!';
$string['climigrationnotice'] = 'Adatbázis áttelepítése folyamatban, várjon, amíg az áttelepítés véget ér és a rendszergazda frissíti a beállításokat és törli a $CFG-&gt;dataroot/climaintenance.html fájlt.';
$string['convertinglogdisplay'] = 'Naplózás megjelenítési lépéseinek beállítása';
$string['dbexport'] = 'Adatbázis exportálása';
$string['dbtransfer'] = 'Adatbázis áttelepítése';
$string['enablemaintenance'] = 'Karbantartási üzemmód bekapcsolása';
$string['enablemaintenance_help'] = 'Bekapcsolja a karbantartási üzemmódot az áttelepítés alatt és után, így megakadályozza a felhasználók hozzáférését amíg az áttelepítés befejeződik. A szokásos működés folytatásához a rendszergazdának kézzel törölni kell a $CFG-&gt;dataroot/climaintenance.html fájlt a config.php beállításainak frissítése után.';
$string['exportdata'] = 'Adatok exportálása';
$string['notargetconectexception'] = 'A céladatbázishoz nem lehet kapcsolódni.';
$string['options'] = 'Beállítások';
$string['pluginname'] = 'Adatbázis átvitele';
$string['privacy:metadata'] = 'A Database transfer segédprogram nem tárol személyes adatokat.';
$string['targetdatabase'] = 'Céladatbázis';
$string['targetdatabasenotempty'] = 'A céladatbázisban nem lehet adott előtagú tábla!';
$string['transferdata'] = 'Adatátvitel';
$string['transferdbintro'] = 'A kód az adatbázis teljes tartalmát átviszi egy másik adatbázisszerverre.';
$string['transferdbtoserver'] = 'Ezen Moodle-adatbázis átvitele egy másik szerverre.';
$string['transferringdbto'] = '{$a->dbtype}  adatbázis átvitele {$a->dbname} adatbázisba a(z) {$a->dbhost} gazdagépre.';
