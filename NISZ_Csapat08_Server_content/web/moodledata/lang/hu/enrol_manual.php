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
 * Strings for component 'enrol_manual', language 'hu', version '3.10'.
 *
 * @package     enrol_manual
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['advanced'] = 'Részletes';
$string['alterstatus'] = 'Állapot megváltoztatása';
$string['altertimeend'] = 'Befejezési időpont megváltoztatása';
$string['altertimestart'] = 'Kezdési időpont megváltoztatása';
$string['assignrole'] = 'Szerep hozzárendelése';
$string['assignroles'] = 'Szerepek hozzárendelése';
$string['browsecohorts'] = 'Globális csoportok böngészése';
$string['browseusers'] = 'Felhasználók böngészése';
$string['confirmbulkdeleteenrolment'] = 'Biztosan törli ezeket a felhasználói beiratkozásokat?';
$string['defaultperiod'] = 'Alapbeállítás szerinti beiratkozási időszak';
$string['defaultperiod_desc'] = 'Az alapbeállítás szerinti érvényes beiratkozási idő. 0 megadása esetén a beiratkozási időszak korlátlan.';
$string['defaultperiod_help'] = 'A beiratkozási időszak alapértelmezett hossza a felhasználó beiratkozásától kezdve. Kikapcsolása esetén beiratkozási időszak alapesetben korlátlan lesz.';
$string['defaultstart'] = 'Alapvető beiratkozás indítása';
$string['deleteselectedusers'] = 'A kiválasztott felhasználói beiratkozások törlése';
$string['editselectedusers'] = 'A kiválasztott felhasználói beiratkozások szerkesztése';
$string['enrolledincourserole'] = 'A(z) "{$a->course}" kurzusba felvéve mint "{$a->role}"';
$string['enrolusers'] = 'Felhasználók beiratkoztatása';
$string['enroluserscohorts'] = 'Kiválasztott felhasználók és csoportok beíratása';
$string['expiredaction'] = 'Beiratkozás lejáratához kapcsolódó intézkedés';
$string['expiredaction_help'] = 'Válassza ki a beiratkozás lejáratához kapcsolódó intézkedést. A kiiratkozás során egyes kurzusadatok és beállítások törlődnek!';
$string['expirymessageenrolledbody'] = 'Tisztelt {$a->user}!

Tájékoztatjuk, hogy \'{$a->course}\' kurzusbeli részvétele {$a->timeend} időpontban lejár.

Ha segítségre van szüksége, forduljon {$a->enroller} ügyintézőhöz.';
$string['expirymessageenrolledsubject'] = 'Beiratkozás lejáratához kapcsolódó tájékoztatás';
$string['expirymessageenrollerbody'] = '{$a->users} felhasználók esetén \'{$a->course}\' kurzusbeli részvétel {$a->threshold} elteltével lejár: A beiratkozás meghosszabbításához térjen át ide: {$a->extendurl}';
$string['expirymessageenrollersubject'] = 'Beiratkozás lejáratához kapcsolódó tájékoztatás';
$string['manual:config'] = 'Kézi beiratkoztatási példányok beállítása';
$string['manual:enrol'] = 'Felhasználók beiratkoztatása';
$string['manual:manage'] = 'Felhasználói beiratkozások kezelése';
$string['manual:unenrol'] = 'Felhasználók kiiratkoztatása a kurzusból';
$string['manual:unenrolself'] = 'Kurzus leadása';
$string['manualpluginnotinstalled'] = 'A  "Manual" segédprogram még nincs telepítve';
$string['messageprovider:expiry_notification'] = 'Kézi beiratkozás lejáratához kapcsolódó értesítések';
$string['now'] = 'Most';
$string['pluginname'] = 'Kézi beiratkozások';
$string['pluginname_desc'] = 'A kézi beiratkozások segédprogramjával a felhasználók a kurzusadminisztráció beállításain keresztül kézileg iratkoztathatók be megfelelő jogosultságú személy, pl. tanár által. A segédprogramot célszerű bekapcsolni, mert más beiratkozási segédprogramoknak,
pl. az önbeíratási segédprogramnak szükségük van rá.
';
$string['privacy:metadata'] = 'A Manual enrolments segédprogram semmilyen személyes adatot nem tárol.';
$string['selectcohorts'] = 'Csoport kiválasztása';
$string['selection'] = 'Választás';
$string['selectusers'] = 'Felhasználók kiválasztása';
$string['sendexpirynotificationstask'] = 'Kézi beiratkozáshoz lejáratra figyelmeztetés küldésének feladata';
$string['status'] = 'Kézi beiratkozások bekapcsolása';
$string['status_desc'] = 'Belsőleg beiratkozottak számára engedélyezi a kurzushoz való hozzáférést. Többnyire célszerű bekapcsolni.';
$string['status_help'] = 'Ez a beállítás rögzíti, hogy megfelelő jogosultságú személy, pl. tanár kézzel a kurzusadminisztráció beállításain keresztül iratkoztathat-e be felhasználókat.';
$string['statusdisabled'] = 'Kikapcsolva';
$string['statusenabled'] = 'Bekapcsolva';
$string['syncenrolmentstask'] = 'Kézi beiratkozási feladat szinkronizálása';
$string['unenrol'] = 'Felhasználó kiiratkoztatása';
$string['unenrolselectedusers'] = 'A kiválasztott felhasználók kiiratkoztatása';
$string['unenrolselfconfirm'] = 'Biztosan leadja a(z) "{$a}" kurzust?';
$string['unenroluser'] = 'Biztosan kiiratkoztatja "{$a->user}" felhasználót a(z) "{$a->course}" kurzusból?';
$string['unenrolusers'] = 'Felhasználók kiiratkoztatása';
$string['wscannotenrol'] = 'A segédprogrammal {$a->courseid} azonosítóval rendelkező kurzusba nem lehet kézi úton felhasználót beiratkoztatni.';
$string['wsnoinstance'] = 'A kézi beiratkozási segédprogram {$a->courseid} azonosítóval rendelkező kurzus esetén ki van kapcsolva vagy nem létezik.';
$string['wsusercannotassign'] = '({$a->courseid}) azonosítóval rendelkező kurzus esetén ({$a->userid}) felhasználóhoz nem rendelheti hozzá a(z) ({$a->roleid}) szerepet.';
