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
 * Strings for component 'cachestore_mongodb', language 'hu', version '3.10'.
 *
 * @package     cachestore_mongodb
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['database'] = 'Adatbázis';
$string['database_help'] = 'A használandó adatbázis neve';
$string['extendedmode'] = 'Kibővített kulcsok használata';
$string['extendedmode_help'] = 'Bekapcsolása esetén a segédprogram használatakor teljes kulcskészletet használ. Belül még nem használatos, de ha kívánja, kézzel könnyen kereshet és kísérletezhet a MongoDB segédprogrammal. Bekapcsolása némileg erőforrás-igényes, csak akkor használja, ha szükséges.';
$string['password'] = 'Jelszó';
$string['password_help'] = 'A kapcsolathoz használt felhasználó jelszava';
$string['pleaseupgrademongo'] = 'A  PHP Mongo bővítményének régi (< 1.3) verzióját használja. Ezek támogatása a jövőben megszűnik. Frissítsen..';
$string['pluginname'] = 'MongoDB';
$string['privacy:metadata:mongodb'] = 'A MongoDB cachestore segédprogram gyorsítótárként rövid ideig egy MongoDB szerveren tárol adatokat, amely ezeket rendszeresen törli.';
$string['privacy:metadata:mongodb:data'] = 'A gyorsítótárban tárolt különféle adatok';
$string['replicaset'] = 'Replikakészlet';
$string['replicaset_help'] = 'A csatlakozáshoz használandó replikakészlet neve. Megadása esetén a fő adatbázist a magkiszolgálók ismaster parancsa alapján határozza meg, így a meghajtó olyan szerverhez csatlakozhat, amely a felsorolásban nem is szerepel.';
$string['server'] = 'Szerver';
$string['server_help'] = 'Csatlakozási karaktersor a használni kívánt szerverhez. Több szerver vesszővel elválasztva adható meg.';
$string['testserver'] = 'Tesztelő szerver';
$string['testserver_desc'] = 'Ez a használni kívánt tesztelő szerver csatlakozási karaktersora. Ha van megadva tesztelő szerver, akkor az adminisztrációs blokk gyorsítótáras teljesítményével ellenőrizhető a MongoDB teljesítménye. Pl.: mongodb://127.0.0.1:27017';
$string['username'] = 'Felhasználónév';
$string['username_help'] = 'Kapcsolathoz használandó felhasználónév';
$string['usesafe'] = 'Biztonságos üzemmód';
$string['usesafe_help'] = 'Bekapcsolása esetén a beillesztés, elérés és törlés biztonságos módban történik. Ha replikakészletet állított be, akkor mindenképpen átvált ebbe a módba.';
$string['usesafevalue'] = 'Biztonságos érték használata';
$string['usesafevalue_help'] = 'A biztonságos módhoz megadhat egy értéket. Ez határozza meg, hány szerveren kell lefutnia egy műveletnek, mielőtt befejezettnek minősül.';
