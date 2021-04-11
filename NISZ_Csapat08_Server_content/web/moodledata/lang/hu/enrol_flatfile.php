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
 * Strings for component 'enrol_flatfile', language 'hu', version '3.10'.
 *
 * @package     enrol_flatfile
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['encoding'] = 'Fájl kódolása';
$string['expiredaction'] = 'Intézkedés beiratkozás lejártakor';
$string['expiredaction_help'] = 'Válasszon ki egy intézkedést, amelyre a felhasználó beiratkozásának lejártakor kerül sor. Kiiratkozáskor egyes felhasználói adatok és beállítások törlődnek a kurzusból!';
$string['filelockedmail'] = 'Az Ön által beiratkozásra használt szöveges állományt ({$a}) a cron folyamattal nem lehet törölni. Ez olyankor fordul elő, ha nem megfelelő engedélyek vannak hozzárendelve. Állítsa be az engedélyeket úgy, hogy a Moodle törölni tudja az állományt, ellenkező esetben megismétlődhet annak feldolgozása.';
$string['filelockedmailsubject'] = 'Lényeges hiba: beiratkozási állomány';
$string['flatfile:manage'] = 'Beiratkozások kézi kezelése';
$string['flatfile:unenrol'] = 'Kézi kiiratkoztatás';
$string['flatfileenrolments'] = 'Flat file (CSV) beiratkozások';
$string['flatfilesync'] = 'Sima állományos beiratkozás szinkronizálása';
$string['location'] = 'Állomány helye';
$string['location_desc'] = 'Teljes útvonal megadása a beiratkozási fájl számára. Feldolgozás után a fájl törlődik.';
$string['mapping'] = 'Megfeleltetés egyszerű állomány alapján';
$string['messageprovider:flatfile_enrolment'] = 'Egyszerű állománnyal való beiratkozás üzenetei';
$string['notifyadmin'] = 'Rendszergazda értesítése';
$string['notifyenrolled'] = 'Beiratkozottak értesítése';
$string['notifyenroller'] = 'Beiratkozási felelős értesítése';
$string['pluginname'] = 'Egyszerű (CSV) állomány ';
$string['pluginname_desc'] = 'Ez a módszer ismételten ellenőrzi és feldolgozza a megadott helyen lévő, speciális formázású szöveget.
A szöveg vesszőkkel elválasztott állomány, soronként négy-hat mezővel:
<pre class="informationbox">
* operation, role, idnumber(user), idnumber(course) [, starttime,
endtime]
ahol:
* operation = add | del
* role = student | teacher | teacheredit
* idnumber(user) = idnumber in the user table NB not id
* idnumber(course) = idnumber in the course table NB not id
* starttime = start time (in seconds since epoch) - optional
* endtime = end time (in seconds since epoch) - optional
</pre>
Ez lehet például a következő:

add, student, 5, CF101
add, teacher, 6, CF101
add, teacheredit, 7, CF101
del, student, 8, CF101
del, student, 17, CF101
add, student, 21, CF101, 1091115000, 1091215000
</pre>';
$string['privacy:metadata:enrol_flatfile'] = 'A Flat file (CSV) beiratkozási segédprogram az enrol_flatfile táblában a jövőbeni beiratkozásokhoz személyes adatokat tárolhat.';
$string['privacy:metadata:enrol_flatfile:action'] = 'Az adott napon várható beiratkozási lépés';
$string['privacy:metadata:enrol_flatfile:courseid'] = 'A beiratkozáshoz kapcsolódó kurzus-azonosító';
$string['privacy:metadata:enrol_flatfile:roleid'] = 'A kiosztandó vagy megvonandó szerep azonosítója';
$string['privacy:metadata:enrol_flatfile:timeend'] = 'A beiratkozás vége';
$string['privacy:metadata:enrol_flatfile:timemodified'] = 'A beiratkozás változtatásának módosítása';
$string['privacy:metadata:enrol_flatfile:timestart'] = 'A beiratkozás kezdete';
$string['privacy:metadata:enrol_flatfile:userid'] = 'A szerep hozzárendeléséhez kapcsolódó felhasználó azonosítója';
