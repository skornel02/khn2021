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
 * Strings for component 'enrol', language 'hu', version '3.10'.
 *
 * @package     enrol
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actenrolshhdr'] = 'Elérhető kurzusfelvételi segédprogramok';
$string['addinstance'] = 'Módszer hozzáadása';
$string['addinstanceanother'] = 'Módszer hozzáadása és egy másik létrehozása';
$string['ajaxnext25'] = 'Következő 25...';
$string['ajaxoneuserfound'] = '1 felhasználót találtam';
$string['ajaxxmoreusersfound'] = '{$a} felhasználónál többet találtam';
$string['ajaxxusersfound'] = '{$a} felhasználót találtam';
$string['assignnotpermitted'] = 'Ebben a kurzusban nem jogosult vagy nem tud szerepeket hozzárendelni.';
$string['bulkuseroperation'] = 'Egyesített felhasználói művelet';
$string['configenrolplugins'] = 'Válassza ki az összes szükséges segédprogramot és rendezze el őket a helyes sorrendben.';
$string['custominstancename'] = 'Egyedi előfordulás neve';
$string['defaultenrol'] = 'Előfordulás hozzáadása új kurzusokhoz';
$string['defaultenrol_desc'] = 'Ezt a segédprogramot alaphelyzetben minden új kurzushoz hozzáadhatja';
$string['deleteinstanceconfirm'] = 'Biztosan törli a(z) "{$a->name}" beiratkozási segédprogramot? Minden {$a->users} jelenleg beiratkozott és ezt a beiratkozási módszert használó felhasználót a rendszer kiiratkoztatja a kurzushoz tartozó adatokat (osztályzatok, csoporttagság, fórumtagság) pedig törli.
Biztosan folytatja?';
$string['deleteinstanceconfirmself'] = 'Biztosan törli a kurzushoz hozzáférést nyújtó "{$a->name}" esetet? Lehet, hogy nem fog hozzáférni a kurzushoz, ha folytatja.';
$string['deleteinstancenousersconfirm'] = 'A(z) "{$a->name}" beiratkozási módszert törölni fogja.
Biztosan folytatja?';
$string['disableinstanceconfirmself'] = 'Biztosan törli a kurzushoz hozzáférést nyújtó "{$a->name}" esetet? Lehet, hogy nem fog hozzáférni a kurzushoz, ha folytatja.';
$string['durationdays'] = '{$a} nap';
$string['editenrolment'] = 'Beiratkozás szerkesztése';
$string['edituserenrolment'] = '{$a} beiratkozásának szerkesztése';
$string['enrol'] = 'Beírat';
$string['enrolcandidates'] = 'Be nem iratkozott felhasználók';
$string['enrolcandidatesmatching'] = 'Megfelelő be nem iratkozott felhasználók';
$string['enrolcohort'] = 'Globális csoport beíratása';
$string['enrolcohortusers'] = 'Felhasználók beíratása';
$string['enroldetails'] = 'A beiratkozás adatai';
$string['enrollednewusers'] = 'Sikeresen beiratkoztatott ($a) új felhasználót';
$string['enrolledusers'] = 'Beiratkozott felhasználók';
$string['enrolledusersmatching'] = 'Megfelelő beiratkozott felhasználók';
$string['enrolme'] = 'Felveszem ezt a kurzust';
$string['enrolmentinstances'] = 'Beiratkozási módszerek';
$string['enrolmentmethod'] = 'Beiratkozási mód';
$string['enrolmentnew'] = 'Új beiratkozás itt: {$a}';
$string['enrolmentnewuser'] = '{$a->user} felvette ezt a kurzust: "{$a->course}"';
$string['enrolmentoptions'] = 'Beiratkozási lehetőségek';
$string['enrolments'] = 'Beiratkozások';
$string['enrolmentupdatedforuser'] = '"{$a->fullname}" felhasználó beiratkozása frissítve';
$string['enrolnotpermitted'] = 'Ebben a kurzusban nem jogosult vagy nem tud beiratkoztatni.';
$string['enrolperiod'] = 'Beiratkozási időszak';
$string['enroltimecreated'] = 'Beiratkozás létrehozva';
$string['enroltimeend'] = 'Beiratkozás véget ér';
$string['enroltimeendinvalid'] = 'A beiratkozás végének a kezdeti időpontnál későbbre kell esni.';
$string['enroltimestart'] = 'Beiratkozás kezdete';
$string['enrolusage'] = 'Előfordulások / beiratkozások';
$string['enrolusers'] = 'Felhasználók beiratkoztatása';
$string['enrolxusers'] = '{$a} felhasználó beiratkoztatása';
$string['errajaxfailedenrol'] = 'Felhasználók beiratkoztatása sikertelen';
$string['errajaxsearch'] = 'Hiba felhasználók keresése közben';
$string['erroreditenrolment'] = 'Hiba történt a felhasználói beiratkozások szerkesztése közben';
$string['errorenrolcohort'] = 'Hiba a globális csoport szinkronizált kurzusba való beíratása közben';
$string['errorenrolcohortusers'] = 'Hiba a globális csoport kurzusba való beíratása közben';
$string['errorthresholdlow'] = 'A minimális értesítési idő 1 nap';
$string['errorwithbulkoperation'] = 'Hiba történt az egyesített beiratkozások módosításának feldolgozása közben';
$string['eventenrolinstancecreated'] = 'Beiratkozás létrehozva';
$string['eventenrolinstancedeleted'] = 'Beiratkozás törölve';
$string['eventenrolinstanceupdated'] = 'Beiratkozás frissítve';
$string['eventuserenrolmentcreated'] = 'Kurzust felvett felhasználó';
$string['eventuserenrolmentdeleted'] = 'Kurzust leadott felhasználó';
$string['eventuserenrolmentupdated'] = 'Felhasználói kurzusleadás frissítve';
$string['expirynotify'] = 'Beiratkozás lejárata előtt értesítendő';
$string['expirynotify_help'] = 'Ez határozza meg, hogy sor kerül-e beiratkozás lejáratához kapcsolódó tájékoztatásra';
$string['expirynotifyall'] = 'Ügyintéző és beiratkozott felhasználó';
$string['expirynotifyenroller'] = 'Csak az ügyintéző';
$string['expirynotifyhour'] = 'A beiratkozás lejáratához kapcsolódó értesítések kiküldésének órája';
$string['expirythreshold'] = 'Minimális értesítési idő';
$string['expirythreshold_help'] = 'A beiratkozás lejárata előtt mennyi idővel kell értesíteni a felhasználókat?';
$string['extremovedaction'] = 'Külső kiiratkoztatási lépés';
$string['extremovedaction_help'] = 'Válassza ki a végrehajtandó tevékenységet, ha a felhasználó beiratkozása eltűnik a külső beiratkoztatási állományból. A kiiratkoztatás során egyes felhasználói adatok és beállítások törlődnek a kurzusból.';
$string['extremovedkeep'] = 'Felhasználók beiratkozásának megtartása';
$string['extremovedsuspend'] = 'Kurzusfelvétel kikapcsolása';
$string['extremovedsuspendnoroles'] = 'Kurzusfelvétel kikapcsolása és szerepek eltávolítása';
$string['extremovedunenrol'] = 'Felhasználó kiiratkoztatása a kurzusból ';
$string['finishenrollingusers'] = 'Felhasználók beiratkoztatásának befejezése';
$string['foundxcohorts'] = '{$a} globális csoport található.';
$string['instanceadded'] = 'Módszer hozzáadva';
$string['instanceeditselfwarning'] = 'Figyelmeztetés';
$string['instanceeditselfwarningtext'] = 'Ezzel a módszerrel vette fel a kurzust. a változások miatt módosulhat a kurzus elérése';
$string['invalidenrolduration'] = 'Érvénytelen beiratkozási időtartam';
$string['invalidenrolinstance'] = 'Beiratkoztatás érvénytelen előfordulása';
$string['invalidrequest'] = 'Érvénytelen kérés';
$string['invalidrole'] = 'Érvénytelen szerep';
$string['manageenrols'] = 'Beiratkozási segédprogramok kezelése';
$string['manageinstance'] = 'Kezelés';
$string['migratetomanual'] = 'Áttelepítés a kézi beiratkozásokhoz';
$string['nochange'] = 'Nincs változás';
$string['noexistingparticipants'] = 'Nincs résztvevő';
$string['nogroup'] = 'Nincs csoport';
$string['noguestaccess'] = 'A kurzusba vendégek nem léphetnek be, próbáljon meg bejelentkezni.';
$string['none'] = 'Nincs';
$string['notenrollable'] = 'Ezt a kurzust nem veheti fel.';
$string['notenrolledusers'] = 'Más felhasználók';
$string['otheruserdesc'] = 'Az alábbi felhasználók nem vették fel a kurzust, de öröklött vagy hozzárendelt szereppel rendelkeznek.';
$string['participationactive'] = 'Aktív';
$string['participationnotcurrent'] = 'Nem aktív';
$string['participationstatus'] = 'Állapot';
$string['participationsuspended'] = 'Felfüggesztve';
$string['periodend'] = '{$a}-ig';
$string['periodnone'] = 'beiratkozott {$a}';
$string['periodstart'] = 'kezdete: {$a}';
$string['periodstartend'] = '{$a->start}-tól/-től {$a->end}-ig';
$string['privacy:metadata:user_enrolments'] = 'Beiratkozások';
$string['privacy:metadata:user_enrolments:enrolid'] = 'A beiratkozási segédprogram példánya';
$string['privacy:metadata:user_enrolments:modifierid'] = 'A felhasználói beiratkozást utoljára módosító felhasználó azonosítója';
$string['privacy:metadata:user_enrolments:status'] = 'A felhasználói kurzusfelvétel állapota';
$string['privacy:metadata:user_enrolments:tableexplanation'] = 'A beiratkozáskezelő a beiratkozott felhasználókat tárolja.';
$string['privacy:metadata:user_enrolments:timecreated'] = 'A felhasználói beiratkozás létrehozásának időpontja';
$string['privacy:metadata:user_enrolments:timeend'] = 'A felhasználói beiratkozás lejáratának időpontja';
$string['privacy:metadata:user_enrolments:timemodified'] = 'A felhasználói beiratkozás módosításának időpontja';
$string['privacy:metadata:user_enrolments:timestart'] = 'A felhasználói beiratkozás kezdetének időpontja';
$string['privacy:metadata:user_enrolments:userid'] = 'A felhasználó azonosítója';
$string['proceedtocourse'] = 'Tovább a kurzustartalomra';
$string['recovergrades'] = 'A felhasználó korábbi osztályzatainak visszanyerése, ha lehetséges';
$string['rolefromcategory'] = '{$a->role} (Kurzuskategóriából örökölte)';
$string['rolefrommetacourse'] = '{$a->role} (Felettes kategóriából örökölte)';
$string['rolefromsystem'] = '{$a->role} (Portálszinten hozzárendelve)';
$string['rolefromthiscourse'] = '{$a->role} (A kurzusban lett hozzárendelve)';
$string['sendfromcoursecontact'] = 'A kurzus kapcsolattartójától';
$string['sendfromkeyholder'] = 'A kulcstulajdonostól';
$string['sendfromnoreply'] = 'Választ nem váró feladótól';
$string['startdatetoday'] = 'Ma';
$string['synced'] = 'Szinkronizálva';
$string['testsettings'] = 'Beállítások tesztelése';
$string['testsettingsheading'] = 'Beiratkozási beállítások tesztelése - {$a}';
$string['totalenrolledusers'] = '{$a} beiratkozott felhasználó';
$string['totalotherusers'] = '{$a} egyéb felhasználó';
$string['totalunenrolledusers'] = '{$a} leiratkozott felhasználó';
$string['unassignnotpermitted'] = 'Ebben a kurzusban nem jogosult hozzárendelt szerepeket törölni.';
$string['unenrol'] = 'Kiiratkoztatás';
$string['unenrolconfirm'] = 'Biztosan kiiratkoztatja "{$a->user}" felhasználót a(z) "{$a->course}" kurzusból (korábban "{$a->enrolinstancename}" névvel iratkozott be) ?';
$string['unenrolleduser'] = '"{$a->fullname}" felhasználó kiiratkozott a kurzusból';
$string['unenrolme'] = 'Leadom a(z) {$a} kurzust';
$string['unenrolnotpermitted'] = 'Ebből a kurzusból nem jogosult vagy nem tud kiiratkoztatni.';
$string['unenrolroleusers'] = 'Felhasználók kiiratkoztatása';
$string['uninstallmigrating'] = '"{$a}" beiratkozás áttelepítése';
$string['unknowajaxaction'] = 'Ismeretlen tevékenység kérése';
$string['unlimitedduration'] = 'Korlátlan';
$string['userremovedfromselectiona'] = '"{$a}" felhasználó a kiválasztásból törölve lett';
$string['usersearch'] = 'Keresés';
$string['withselectedusers'] = 'A kiválasztott felhasználókkal';
$string['youenrolledincourse'] = 'Feliratkozott a kurzusra.';
$string['youunenrolledfromcourse'] = 'Leiratkozott a(z) "{$a}" kurzusról.';
