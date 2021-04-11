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
 * Strings for component 'enrol_paypal', language 'hu', version '3.10'.
 *
 * @package     enrol_paypal
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['assignrole'] = 'Szerep hozzárendelése';
$string['businessemail'] = 'PayPal munkahelyi e-mail
';
$string['businessemail_desc'] = 'Munkahelyi PayPal-fiókjának  e-mail címe';
$string['cost'] = 'Beiratkozási költség';
$string['costerror'] = 'A beiratkozási költség nem számjegy';
$string['costorkey'] = 'Válasszon az alábbi beiratkozási módok közül.';
$string['currency'] = 'Pénznem';
$string['defaultrole'] = 'Alapvető szerep-hozzárendelés';
$string['defaultrole_desc'] = 'Válassza ki a felhasználókhoz hozzárendelendő szerepeket PayPal beiratkozások idejére';
$string['enrolenddate'] = 'Végső időpont';
$string['enrolenddate_help'] = 'Bekapcsolása esetén a felhasználók csak ezen időpontig iratkoztathatók be.';
$string['enrolenddaterror'] = 'A végső beiratkozási időpont nem előzheti meg a kezdő időpontot';
$string['enrolperiod'] = 'Beiratkozási időszak';
$string['enrolperiod_desc'] = 'Az alapbeállítás szerinti érvényes beiratkozási idő. 0 megadása esetén a beiratkozási időszak korlátlan.';
$string['enrolperiod_help'] = 'A beiratkozási időszak alapértelmezett hossza a felhasználó beíratásától kezdve. Kikapcsolása esetén beiratkozási időszak alapesetben korlátlan lesz.';
$string['enrolstartdate'] = 'Kezdő időpont';
$string['enrolstartdate_help'] = 'Bekapcsolása esetén a felhasználók csak ezen időponttól iratkozhatnak be.';
$string['errdisabled'] = 'A PayPal segédprogram ki van kapcsolva, nem kezel fizetési értesítéseket.';
$string['erripninvalid'] = 'A PayPal nem ellenőrizte az azonnali fizetési értesítést.';
$string['errpaypalconnect'] = 'Az azonnali fizetési értesítés ellenőrzéséhez nem sikerült {$a->url} címre kapcsolódni:  {$a->result}';
$string['expiredaction'] = 'Beiratkozás lejáratához kapcsolódó intézkedés';
$string['expiredaction_help'] = 'Válasszon ki egy intézkedést, amelyre a felhasználó beiratkozásának lejártakor kerül sor. Kiiratkozáskor egyes felhasználói adatok és beállítások törlődnek a kurzusból!';
$string['mailadmins'] = 'Rendszergazda értesítése';
$string['mailstudents'] = 'Tanulók értesítése';
$string['mailteachers'] = 'Tanárok értesítése';
$string['messageprovider:paypal_enrolment'] = 'A PayPal beiratkozási üzenetei';
$string['nocost'] = 'A kurzus felvételéhez nincs hozzákapcsolva költség!';
$string['paypal:config'] = 'PayPal beiratkoztatási példányok beállítása';
$string['paypal:manage'] = 'Beiratkozott felhasználók kezelése';
$string['paypal:unenrol'] = 'Felhasználók kiiratkoztatása a kurzusból';
$string['paypal:unenrolself'] = 'Kurzus leadása';
$string['paypalaccepted'] = 'PayPal-lel való fizetést elfogadunk';
$string['pluginname'] = 'PayPal';
$string['pluginname_desc'] = 'A PayPal modullal fizetős kurzusokat hozhat létre. ha egy kurzus költsége nulla, a tanulóknak nem kell fizetni a belépésért. Alapbeállításként itt kell megadni az egész portálra érvényes költséget, majd ezt követően egyenként kell beállítani a kurzusokat. A kurzusköltség felülírja a portálköltséget.';
$string['privacy:metadata:enrol_paypal:enrol_paypal'] = 'PayPal-ügyletek adatai PayPal alapú beiratkozásokhoz.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:business'] = 'A befizetés kedvezményezettjének (azaz a kereskedőnek) az e-mail-címe vagy PayPal-fiókjának az azonosítója.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:courseid'] = 'Az értékesített kurzus azonosítója.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:instanceid'] = 'A kurzusfelvétel azonosítója.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:item_name'] = 'Az értékesített beiratkozású kurzus teljes neve.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:memo'] = 'A PayPal fizetési oldalán a vevő által beírt megjegyzés.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:option_selection1_x'] = 'A vevő teljes neve.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:parent_txn_id'] = 'Visszatérítés, sztornírozás vagy törölt sztornírozás esetén ez az eredeti ügylet azonosítója.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:payment_status'] = 'A fizetés állapota.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:payment_type'] = 'Nyilvántartja, hogy a fizetés eCheckkel (echeck), PayPal-egyenlegből, hitelkártyával vagy azonnali átutalással (instant) történt.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:pending_reason'] = 'A fizetés függő állapotának indoka (ha arról van szó).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:reason_code'] = 'A fizetés Sztornózott (Reversed), Visszatérített (Refunded), Törölt-Sztornózott (Canceled_Reversal) vagy Elutasított (Denied) állapotának indoka (ha ezek egyikéről van szó).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:receiver_email'] = 'A befizetés kedvezményezettjének (azaz a kereskedőnek) az elsődleges e-mail-címe.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:receiver_id'] = 'A befizetés kedvezményezettjének (azaz a kereskedőnek) az egyedi PayPal-fiókazonosítója.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:tax'] = 'A fizetés után felszámított adó összege.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:timeupdated'] = 'Amikor a PayPal értesíti a Moodle-t a fizetésről.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:txn_id'] = 'A kereskedő eredeti ügyletazonosító száma a vevői befizetéshez, mellyel kapcsolatosan az esetet rögzítették';
$string['privacy:metadata:enrol_paypal:enrol_paypal:userid'] = 'A kurzusfelvételt megvásároló felhasználó azonosítója.';
$string['privacy:metadata:enrol_paypal:paypal_com'] = 'A PayPal beiratkozási segédprogram felhasználói adatokat továbbít a Moodle-tól a PayPal weboldalára.';
$string['privacy:metadata:enrol_paypal:paypal_com:address'] = 'A kurzust megvásároló felhasználó címe.';
$string['privacy:metadata:enrol_paypal:paypal_com:city'] = 'A kurzust megvásároló felhasználó helysége.';
$string['privacy:metadata:enrol_paypal:paypal_com:country'] = 'A kurzust megvásároló felhasználó országa.';
$string['privacy:metadata:enrol_paypal:paypal_com:custom'] = 'A felhasználó (a vevő) azonosítóját, a kurzus azonosítóját és a kurzusfelvétel azonosítóját tartalmazó, kötőjelekkel elválasztott szöveg.';
$string['privacy:metadata:enrol_paypal:paypal_com:email'] = 'A kurzust megvásároló felhasználó e-mail-címe.';
$string['privacy:metadata:enrol_paypal:paypal_com:first_name'] = 'A kurzust megvásároló felhasználó keresztneve.';
$string['privacy:metadata:enrol_paypal:paypal_com:last_name'] = 'A kurzust megvásároló felhasználó vezetékneve.';
$string['privacy:metadata:enrol_paypal:paypal_com:os0'] = 'A vevő teljes neve.';
$string['processexpirationstask'] = 'A PayPal beiratkozáshoz kötődő lejárati értesítés küldésének feladata';
$string['sendpaymentbutton'] = 'Fizetés küldése Paypal-lel';
$string['status'] = 'PayPal beiratkozások engedélyezése';
$string['status_desc'] = 'Felhasználók számára alaphelyzetben beiratkozások engedélyezése PayPal segítségével';
$string['transactions'] = 'PayPal-ügyletek';
$string['unenrolselfconfirm'] = 'Biztosan leadja a(z) "{$a}" kurzust?';
