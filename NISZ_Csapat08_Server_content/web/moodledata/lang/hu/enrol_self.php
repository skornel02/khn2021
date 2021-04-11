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
 * Strings for component 'enrol_self', language 'hu', version '3.10'.
 *
 * @package     enrol_self
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['canntenrol'] = 'A beiratkozás ki van kapcsolva vagy nem aktív';
$string['canntenrolearly'] = 'Még nem iratkozhat be, mert az  {$a} időpontban kezdődik.';
$string['canntenrollate'] = 'Már nem iratkozhat be, mert az  {$a} időpontban befejeződött.';
$string['cohortnonmemberinfo'] = 'Csak a(z) \'{$a}\' globális csoport tagjai iratkozhatnak ki';
$string['cohortonly'] = 'Csak a globális csoport tagjai';
$string['cohortonly_help'] = 'A kiiratkozás meghatározott globális csoport tagjaira korlátozható. A beállítás módosítása nem érinti a meglévő beiratkozásokat.';
$string['confirmbulkdeleteenrolment'] = 'Biztosan törli ezeket a beiratkozásokat?';
$string['customwelcomemessage'] = 'Egyedi üdvözlés';
$string['customwelcomemessage_help'] = 'Egyedi üdvözlő szöveget adhat meg egyszerű szöveg vagy HTML címkékkel és többnyelvű címkékkel ellátott szöveg formájában.

Az alábbi helyőrzők kerülhetnek a szövegbe:

* Kurzusnév {$a->coursename}
* Hivatkozás a felhasználói profiloldalra {$a->profileurl}
* Felhasználó e-mailje {$a->email}
* Felhasználó teljes neve {$a->fullname}';
$string['defaultrole'] = 'Alapbeállított szerep-hozzárendelés';
$string['defaultrole_desc'] = 'Válassza ki azt a szerepet, amelyet a felhasználók saját beiratkozás esetén megkapnak.';
$string['deleteselectedusers'] = 'Kiválasztott beiratkozások törlése';
$string['editselectedusers'] = 'Kiválasztott beiratkozások szerkesztése';
$string['enrolenddate'] = 'Befejezési időpont';
$string['enrolenddate_help'] = 'Bekapcsolása esetén a felhasználók csak ezen időpontig iratkozhatnak be.';
$string['enrolenddaterror'] = 'A beiratkozás befejezési időpontja nem lehet korábban, mint a kezdési időpont';
$string['enrolme'] = 'Iratkoztasson be';
$string['enrolperiod'] = 'Beiratkozási időszak';
$string['enrolperiod_desc'] = 'Az alapbeállítás szerinti érvényes beiratkozási idő. 0 megadása esetén a beiratkozási időszak korlátlan.';
$string['enrolperiod_help'] = 'A beiratkozási időszak alapértelmezett hossza a felhasználó beiratkozásától kezdve. Kikapcsolása esetén beiratkozási időszak alapesetben korlátlan lesz.';
$string['enrolstartdate'] = 'Kezdési időpont';
$string['enrolstartdate_help'] = 'Bekapcsolása esetén a felhasználók csak ezen időponttól iratkozhatnak be.';
$string['expiredaction'] = 'Beiratkozás lejáratához kapcsolódó intézkedés';
$string['expiredaction_help'] = 'Válassza ki a beiratkozás lejáratához kapcsolódó intézkedést. A kiiratkozás során egyes kurzusadatok és beállítások törlődnek!';
$string['expirymessageenrolledbody'] = 'Kedves {$a->user},

Tájékoztatjuk, hogy \'{$a->course}\' kurzusfelvétele {$a->timeend} időpontban lejár.

Segítségért forduljon ide: {$a->enroller}.';
$string['expirymessageenrolledsubject'] = 'Tájékoztatás önbeiratkozás lejártáról';
$string['expirymessageenrollerbody'] = 'Tájékoztatjuk, hogy {$a->users} felhasználók \'{$a->course}\' kurzusfelvétele {$a->threshold} időn belül lejár.

Beiratkozásuk meghosszabbításához térjen át ide: {$a->extendurl}.';
$string['expirymessageenrollersubject'] = 'Tájékoztatás önbeiratkozás lejártáról';
$string['expirynotifyall'] = 'Ügyintéző és beiratkozott felhasználó';
$string['expirynotifyenroller'] = 'Csak az ügyintéző';
$string['groupkey'] = 'Csoportos beiratkozási kulcs használata';
$string['groupkey_desc'] = 'Csoportos beiratkozási kulcs használata alapesetben.';
$string['groupkey_help'] = 'A kurzus elérésének kulcs ismeretéhez kötésén túl a csoportos beiratkozási kulcs használata esetén a felhasználók automatikusan egy csoportba kerülnek, amikor felvesznek egy kurzust.

Megjegyzés: a csoportos beiratkozási kulcs használatához a kurzusbeállítások között meg kell adni egy beiratkozási kulcsot, a csoportbeállítások között pedig egy csoportos beiratkozási kulcsot.';
$string['keyholder'] = 'A beiratkozási kulcsot innen kellett megkapnia:';
$string['longtimenosee'] = 'Tétlenségi kiiratkoztatás időtartama';
$string['longtimenosee_help'] = 'Ha egy felhasználó hosszú ideig nem lép be a kurzusba, automatikusan kiiratkoztatja a rendszer. Ez a paraméter határozza meg ennek időtartamát.';
$string['maxenrolled'] = 'Max. beiratkozott felhasználó';
$string['maxenrolled_help'] = 'Saját beiratkozású felhasználók max. száma. A 0 korlátlant jelent.';
$string['maxenrolledreached'] = 'A saját beiratkozású felhasználók max. számát elérte.';
$string['messageprovider:expiry_notification'] = 'Tájékoztatás önbeiratkozás lejártáról';
$string['newenrols'] = 'Új kurzus felvételének engedélyezése';
$string['newenrols_desc'] = 'Alapesetben engedélyezi új kurzusok egyéni felvételét';
$string['newenrols_help'] = 'Ez szabja meg, hogy a felhasználó felveheti-e a kurzust.';
$string['nopassword'] = 'Beiratkozási kulcsra nincs szükség';
$string['password'] = 'Beiratkozási kulcs';
$string['password_help'] = 'A beiratkozási kulccsal csak azok léphetnek be a kurzusba, akik ismerik azt.
Ha a mező üres, bárki beiratkozhat.
Ha van megadva beiratkozási kulcs, azt bármely kurzust fölvevőnek meg kell adnia. Ugyanakkor a beiratkozási kulcsot CSAK EGYSZER, a beiratkozáskor kell megadni.';
$string['passwordinvalid'] = 'Hibás beiratkozási kulcs, próbálja meg újra.';
$string['passwordinvalidhint'] = 'Ez a beiratkozási kulcs hibás, próbálja újra (Segítségül: kezdete \'{$a}\')';
$string['pluginname'] = 'Saját beiratkozás';
$string['pluginname_desc'] = 'A saját beiratkozás segédprogramjával a felhasználók megválasztják, melyik kurzusokat kívánják fölvenni. A kurzust beiratkozási kulcs védheti. Belsőleg a beiratkozást egy kézi beiratkozási segédprogram végzi, melyet az adott kurzusban be kell kapcsolni.';
$string['privacy:metadata'] = 'A Self enrolment segédprogram semmilyen személyes adatot nem tárol.';
$string['requirepassword'] = 'Beiratkozási kulcs előírása';
$string['requirepassword_desc'] = 'Új kurzusokhoz beiratkozási kulcs előírása és meglévő kurzusok esetén a beiratkozási kulcs eltávolításának megakadályozása';
$string['role'] = 'Alapesetben hozzárendelt szerep';
$string['self:config'] = 'Saját beiratkozási példányok beállítása';
$string['self:enrolself'] = 'Kurzus saját felvétele';
$string['self:holdkey'] = 'Önbeiratkozási kulcs tulajdonosaként jelenik meg';
$string['self:manage'] = 'Beiratkozott felhasználók kezelése';
$string['self:unenrol'] = 'Felhasználók kiiratkoztatása a kurzusból';
$string['self:unenrolself'] = 'Kurzus leadása';
$string['sendcoursewelcomemessage'] = 'Küldjön a kurzusba belépéshez üdvözlő üzenetet.';
$string['sendcoursewelcomemessage_help'] = 'Ha egy felhasználó beiratkozik, üdvözlő e-mail üzenetet kap. Ha a feladó a kurzus kapcsolattartója (alapesetben a tanár) és többen osztoznak ezen a szerepen, akkor a szerepet elsőként kapó felhasználótól érkezik az üzenet.';
$string['sendexpirynotificationstask'] = 'Önbeiratkozáshoz lejáratra figyelmeztetés küldésének feladata';
$string['showhint'] = 'Tipp megjelenítése';
$string['showhint_desc'] = 'Vendég belépési kulcsából az első betű megjelenítése';
$string['status'] = 'Meglévő beiratkozások bekapcsolása';
$string['status_desc'] = 'Új kurzusok egyéni felvételének engedélyezése';
$string['status_help'] = 'Kikapcsolt "Új beiratkozások engedélyezése" melletti bekapcsolásakor csak az önbeiratkozók léphetnek be a kurzusba. Kikapcsolásakor az önbeiratkozás ki van kapcsolva, mivel minden önbeiratkozás szünetel, új felhasználók pedig nem vehetnek fel kurzust.';
$string['syncenrolmentstask'] = 'Önbeiratkozási feladat szinkronizálása';
$string['unenrol'] = 'Felhasználó kiiratkoztatása';
$string['unenrolselfconfirm'] = 'Biztosan leadja a(z) "{$a}" kurzust?';
$string['unenroluser'] = 'Biztosan kiiratkoztatja "{$a->user}" felhasználót ebből a kurzusból: "{$a->course}"?';
$string['unenrolusers'] = 'Felhasználók kiiratkoztatása';
$string['usepasswordpolicy'] = 'Jelszóeljárás használata';
$string['usepasswordpolicy_desc'] = 'Standard jelszóeljárás használata beiratkozási kulcsok esetén ';
$string['welcometocourse'] = 'Üdvözöljük itt: {$a}';
$string['welcometocoursetext'] = 'Üdvözöljük {$a->coursename} kurzusunkban! Ha még nem tette meg, állítsa be felhasználói profilját, hogy többet megtudjunk Önről: {$a->profileurl}';
