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
 * Strings for component 'enrol_database', language 'hu', version '3.10'.
 *
 * @package     enrol_database
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['database:config'] = 'Adatbázis beiratkozási példányainak beállítása';
$string['database:unenrol'] = 'Felfüggesztett felhasználók kiiratkoztatása';
$string['dbencoding'] = 'Adatbázis kódolása';
$string['dbhost'] = 'Az adatbázis gazdagépe';
$string['dbhost_desc'] = 'Adja meg az adatbázis szerverének IP-címét vagy a gazdagép nevét.  ODBC használata esetén rendszerszintű DSN-név használandó.  PDO használata esetén használjon PDO DSN-t.';
$string['dbname'] = 'Adatbázisnév';
$string['dbname_desc'] = 'Hagyja üresen, ha az adatbázis gazdagépénél DSN-nevet használ.';
$string['dbpass'] = 'Adatbázisjelszó';
$string['dbsetupsql'] = 'Adatbázis beállítási parancsa';
$string['dbsetupsql_desc'] = 'Adatbázis speciális beállításának SQL-parancsa, gyakran a kommunikáció kódolásának beállítására használatos - pl. MySQL és PostgreSQL esetén: <em>SET NAMES \'utf8\'</em>';
$string['dbsybasequoting'] = 'Sybase-idézőjelek használata';
$string['dbsybasequoting_desc'] = 'A sybase-szerű egyszeres idézőjelek használata - Oracle, MS SQL és néhány másik adatbázis esetén használatos. Ne használja MySQL-hez!';
$string['dbtype'] = 'Adatbázis-meghajtó';
$string['dbtype_desc'] = 'Az ADOdb adatbázis-meghajtó neve, a külső adatbázismotor típusa';
$string['dbuser'] = '    
Adatbázis-felhasználó';
$string['debugdb'] = 'Az ADOdb hibaelhárítása';
$string['debugdb_desc'] = 'Az ADOdb külső adatbázishoz való kapcsolódásában keletkezett hiba elhárítása - akkor használandó, amikor belépéskor üres oldal jelenik meg. Éles portálokra nem alkalmas!';
$string['defaultcategory'] = 'Alapbeállítás szerinti új kurzuskategória';
$string['defaultcategory_desc'] = 'Automatikusan létrehozott kurzusok alapbeállítás szerinti kategóriája. Akkor használandó, ha nincs megadva vagy nem található új kategória-azonosító.';
$string['defaultrole'] = 'Alapszerep';
$string['defaultrole_desc'] = 'Alaphelyzetben hozzárendelt szerep, ha külső táblázatban nincs megadva egyéb szerep.';
$string['ignorehiddencourses'] = 'Rejtett kurzusok kihagyása';
$string['ignorehiddencourses_desc'] = 'Ha a tanulók számára nem elérhetőként beállított kurzusokba a bekapcsolt felhasználókat nem iratkoztatja be.';
$string['localcategoryfield'] = 'Helyi kategóriamező';
$string['localcoursefield'] = 'Helyi kurzusmező';
$string['localrolefield'] = 'Helyi szerepmező';
$string['localuserfield'] = 'Helyi felhasználómező';
$string['newcoursecategory'] = 'Új kurzuskategória mezője';
$string['newcoursefullname'] = 'Új kurzus teljes címének mezője';
$string['newcourseidnumber'] = 'Új kurzus azonosítószámának mezője';
$string['newcourseshortname'] = 'Új kurzus rövid címének a mezője';
$string['newcoursetable'] = 'Új távoli kurzusok táblázata';
$string['newcoursetable_desc'] = 'Adja meg azon kurzusok listáját tartalmazó táblázat nevét, amely automatikusan hozandó létre. Ha üres, nem jönnek létre kurzusok.';
$string['pluginname'] = 'Külső adatbázis';
$string['pluginname_desc'] = 'Használhat (szinte tetszőleges típusú) külső adatbázist a beiratkozások kezelésére. Feltételezzük, hogy külső adatbázisa legalább egy kurzus-azonosítót és egy felhasználó-azonosítót rögzítő mezőt tartalmaz. Ezeket veti egybe a helyi kurzusok és felhasználók táblázataiban talált adatokkal.';
$string['privacy:metadata'] = 'Az External database enrolment segédprogram semmilyen személyes adatot nem tárol.';
$string['remotecoursefield'] = 'A távoli kurzus mezője';
$string['remotecoursefield_desc'] = 'A távoli táblázatban azon mező neve, amelyet a kurzustáblázatban lévő bejegyzések megfeleltetésére használunk.';
$string['remoteenroltable'] = 'Távoli felhasználó-beiratkoztatási táblázat';
$string['remoteenroltable_desc'] = 'Adja meg azon táblázat nevét, amely a felhasználó-beiratkoztatásokat tartalmazza. Ha üres, nem szinkronizálja a felhasználó-beiratkoztatásokat.';
$string['remoteotheruserfield'] = 'Távoli egyéb felhasználói mező';
$string['remoteotheruserfield_desc'] = 'A távoli táblázat azon mezőjének a neve, amelyet az "Egyéb felhasználó" szerep-hozzárendeléseinek megjelölésére használunk';
$string['remoterolefield'] = 'Távoli szerepek mezője';
$string['remoterolefield_desc'] = 'Távoli táblázatban a szerepek táblázatában lévő bejegyzések megfeleltetésére használt mező neve.';
$string['remoteuserfield'] = 'Távoli felhasználó mezője';
$string['remoteuserfield_desc'] = 'A távoli táblázatban a felhasználói táblázatban lévő bejegyzések megfeleltetésére használt mező neve.';
$string['settingsheaderdb'] = 'Külső adatbázis csatlakozása';
$string['settingsheaderlocal'] = 'Helyi mező megfeleltetése';
$string['settingsheadernewcourses'] = 'Új kurzusok létrehozása';
$string['settingsheaderremote'] = 'Távoli beiratkozások szinkronizálása';
$string['syncenrolmentstask'] = 'Külső adatbázis beiratkozásainak szinkronizálása';
$string['templatecourse'] = 'Új kurzussablon';
$string['templatecourse_desc'] = 'Választható: az automatikusan létrejövő kurzusok beállításaikat átvehetik egy kurzussablonból. Itt adja meg a kurzussablon rövid nevét. ';
