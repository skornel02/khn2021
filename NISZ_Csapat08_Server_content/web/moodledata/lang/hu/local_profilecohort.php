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
 * Strings for component 'local_profilecohort', language 'hu', version '3.10'.
 *
 * @package     local_profilecohort
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addintro'] = 'Ezen a fülön adható hozzá új szabály egyedi profilmezőkhöz, ami alapján globális csoportba kerülnek a felhasználók.';
$string['addrule'] = 'Szabály hozzáadása felhasználói profilmezőhöz...';
$string['addrules'] = 'Új szabály hozzáadása';
$string['andnextrule'] = 'A következő szabálynak egyeznie kell, hogy a globális csoporthoz lehessen kapcsolni.';
$string['cohortsintro'] = 'Ezen az oldalon választhatóak ki, hogy mely globális csoportokat kezelje a segédprogram.<br>Ha már ki van választva, akkor nem lehet kézzel frissíteni a csoporttagokat. Továbbá, minden felhasználó, aki tagja a csoportnak, el lesz távolítva, és a csoport újra fel lesz töltve a megadott szabályok alapján.<br>Ha úgy dönt, hogy abbahagyja egy globális csoport kezelését ezzel a segédprogrammal, akkor minden meglévő tag továbbra is tagja marad a csoportnak, valamint ismét frissíthető lesz kézzel a csoport.';
$string['delete'] = 'Szabály törlése';
$string['iffield'] = 'Ha {$a}';
$string['invisiblecohortsnote'] = 'Figyelem: Ez a segédprogram a rejtett csoportokat ugyanúgy kezeli, mint a láthatókat. Így ebben a listában olyan csoportok is megtalálhatóak, melyek rejtettként lettek létrehozva.';
$string['match_contains'] = 'tartalmaz';
$string['match_defined'] = 'meghatározva';
$string['match_exact'] = 'egyezik';
$string['match_notcontains'] = 'nem tartalmaz';
$string['match_notdefined'] = 'nincs meghatározva';
$string['match_notexact'] = 'nem egyezik';
$string['matchtype'] = 'Egyezés típusa';
$string['matchvalue'] = 'Egyezés értéke';
$string['members'] = 'Globális csoport tagjai';
$string['membersintro'] = 'Ezen a fülön láthatóak azok a felhasználók, akik jelenleg tagjai azoknak a globális csoportoknak, amelyeket ez a segédprogram kezel.';
$string['moveto'] = 'Áthelyezés';
$string['nocohorts'] = 'Nincsenek globális csoportok - térjen át a(z) {$a} oldalra és hozzon létre néhány globális csoportot';
$string['nofields'] = 'Nincsenek egyedi felhasználói profilmezők meghatározva.<br>Hozzon létre egyedi felhasználói profilmezőket, mielőtt itt szabályokat ad hozzá - térjen át a(z) {$a} oldalra és hozzon létre legalább egy felhasználói profilmezőt';
$string['nousers'] = 'Ez a globális csoport jelenleg üres.';
$string['pluginname'] = 'Felhasználói profilmezőn alapuló globális csoporttagság';
$string['selectcohorts'] = 'Válassza ki a kezelendő globális csoportokat';
$string['selectvalue'] = 'a felhasználó hozzá lesz adva a globális csoporthoz';
$string['updatecohorts'] = 'Globális csoportok frissítése egyedi felhasználói profilmezők alapján';
$string['viewintro'] = 'Ezen a fülön adhatja meg az egyedi felhasználói profilmezőkből származó azon globális csoportokhoz tartozó szabályokat, amelyekhez a felhasználót hozzáadja.<br>
A meghatározott szabályok feldolgozása a megjelenésük sorrendjében történik. Ha viszont egy felhasználó több szabálynak is megfelel, akkor minden releváns globális csoporthoz hozzáadódik.<br>Figyelem: amikor a szabályok megváltoznak, egy ütemezett feladat frissít minden érintett felhasználót - egy kis időbe beletelik (néhány percbe, az ütemezett feladatok és a cronjob beállításaitól függően), mire minden tagság frissül. Bármely olyan felhasználó tagsága, aki a háttérfeladat befejezése előtt jelentkezik be, azonnal frissítve lesz.';
$string['viewrules'] = 'Szabályok megtekintése/szerkesztése';
