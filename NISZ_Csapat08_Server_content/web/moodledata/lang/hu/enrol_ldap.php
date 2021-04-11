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
 * Strings for component 'enrol_ldap', language 'hu', version '3.10'.
 *
 * @package     enrol_ldap
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['assignrole'] = 'A(z) \'{$a->role_shortname}\' szerep hozzárendelése a(z) \'{$a->user_username}\' felhasználóhoz \'{$a->course_shortname}\' kurzus esetén (id {$a->course_id})';
$string['assignrolefailed'] = 'Nem sikerült hozzárendelni a(z) \'{$a->role_shortname}\' szerepet a(z) \'{$a->user_username}\' felhasználóhoz \'{$a->course_shortname}\' kurzus esetén (id {$a->course_id})';
$string['autocreate'] = 'Automatikusan létrehozhatók kurzusok, ha a Moodle-ban még nem létező kurzusra iratkoznak fel. Ha ezt alkalmazza, a négy fenti kurzusmező (azonosítószám, rövid név, teljes név és összegzés) módosításának megelőzésére ajánlatos eltávolítani az alábbi elemeket a vonatkozó szerepekből: moodle/course:changeidnumber, moodle/course:changeshortname, moodle/course:changefullname and moodle/course:changesummary .';
$string['autocreate_key'] = 'Automatikus létrehozás';
$string['autocreation_settings'] = 'Automatikus kurzus-létrehozási beállítások';
$string['autoupdate_settings'] = 'Automatikus kurzusfrissítési beállítások';
$string['autoupdate_settings_desc'] = '<p>Válassza ki a szinkronizálás alatt frissítendő mezőket (enrol\\ldap\\task\\sync_enrolments).</p><p>Ha legalább egy mezőt kiválaszt, a frissítés lefut.</p>';
$string['bind_dn'] = 'Ha bind-user-t kíván felhasználók keresésére használni, állítsa be itt. Például: n=ldapuser,ou=public,o=org';
$string['bind_dn_key'] = 'A bind-felhasználó egyedi neve';
$string['bind_pw'] = 'A bind-felhasználó jelszava.';
$string['bind_pw_key'] = 'Jelszó';
$string['bind_settings'] = 'Bind-beállítások';
$string['cannotcreatecourse'] = 'A kurzus nem hozható létre: szükséges adatok hiányoznak az LDAP-rekordból';
$string['cannotupdatecourse'] = 'A kurzus nem frissíthető: az LDAP-rekordból adatok hiányoznak! A kurzus azonosítószáma: \'{$a->idnumber}\'';
$string['cannotupdatecourse_duplicateshortname'] = 'A kurzus nem frissíthető: a rövid cím ismétlődik. A \'{$a->idnumber}\'... azonosítószámú kurzus kihagyva.';
$string['category'] = 'Automatikusan létrehozott kurzusok kategóriája.';
$string['category_key'] = 'Kategória';
$string['contexts'] = 'LDAP-környezetek';
$string['couldnotfinduser'] = 'Nincs \'{$a}\' felhasználó, kihagyva';
$string['course_fullname'] = 'Opcionális: LDAP-mező a teljes név eléréséhez';
$string['course_fullname_key'] = 'Teljes név';
$string['course_fullname_updateonsync'] = 'Teljes név frissítése szinkronizálás alatt';
$string['course_fullname_updateonsync_key'] = 'Teljes név frissítése';
$string['course_idnumber'] = 'Egyeztesse az LDAP egyedi azonosítójával, ez általában <em>cn</em> vagy <em>uid</em>. Automatikusan létrehozott kurzusok esetén célszerű az értéket zárolni.';
$string['course_idnumber_key'] = 'Azonosítószám';
$string['course_search_sub'] = 'Csoporttagság keresése alkörnyezetekben';
$string['course_search_sub_key'] = 'Keresés alkörnyezetekben';
$string['course_settings'] = 'Beállítások a kurzusbeiratkozáshoz';
$string['course_shortname'] = 'Opcionális: LDAP-mező a rövid név eléréséhez';
$string['course_shortname_key'] = 'Rövid cím';
$string['course_shortname_updateonsync'] = 'Rövid cím frissítése szinkronizálás alatt';
$string['course_shortname_updateonsync_key'] = 'Rövid cím frissítése';
$string['course_summary'] = 'Opcionális: LDAP-mező az összegzés eléréséhez';
$string['course_summary_key'] = 'Összegzés';
$string['course_summary_updateonsync'] = 'Összegzés frissítése szinkronizálás alatt';
$string['course_summary_updateonsync_key'] = 'Összegzés frissítése';
$string['coursenotexistskip'] = 'Nincs \'{$a}\' kurzus, az automatikus létrehozás ki van kapcsolva - kihagyva';
$string['courseupdated'] = '\'{$a->idnumber}\' azonosítószámú kurzus sikeresen frissítve.';
$string['courseupdateskipped'] = '\'{$a->idnumber}\' azonosítószámú kurzus nem szorul frissítésre, kihagyva...';
$string['createcourseextid'] = 'A CREATE User nem létező \'{$a->courseextid}\' kurzust vett fel';
$string['createnotcourseextid'] = 'A felhasználó nem létező \'{$a->courseextid}\' kurzust vett fel ';
$string['creatingcourse'] = '\'{$a}\' kurzus létrehozása...';
$string['duplicateshortname'] = 'Hiba a kurzus létrehozása közben. Ismétlődő rövid cím.  \'{$a->idnumber}\' azonosítószámú kurzus kihagyása...';
$string['editlock'] = 'Érték zárolása';
$string['emptyenrolment'] = 'Üres beiratkozás \'{$a->role_shortname}\' szerep esetén \'{$a->course_shortname}\' kurzusban.';
$string['enrolname'] = 'LDAP';
$string['enroluser'] = '\'{$a->user_username}\' felhasználó beíratása a(z) \'{$a->course_shortname}\' kurzusba (id {$a->course_id})';
$string['enroluserenable'] = '\'{$a->user_username}\' felhasználó \'{$a->course_shortname}\' kurzusfelvétele (id {$a->course_id}) érvényesítve';
$string['explodegroupusertypenotsupported'] = 'Az ldap_explode_group() nem támogatja a kiválasztott {$a} felhasználótípust';
$string['extcourseidinvalid'] = 'A kurzus külső azonosítója érvénytelen! ';
$string['extremovedsuspend'] = '\'{$a-&gt;user_username}\' felhasználó esetén \'{$a-&gt;course_shortname}\' kurzusban (id {$a-&gt;course_id}) beiratkozás kikapcsolva';
$string['extremovedsuspendnoroles'] = '\'{$a-&gt;user_username}\' felhasználó esetén \'{$a-&gt;course_shortname}\' kurzusban (id {$a-&gt;course_id}) beiratkozás kikapcsolva és szerepek eltávolítva';
$string['extremovedunenrol'] = '\'{$a-&gt;user_username}\' felhasználó törlése a(z) \'{$a-&gt;course_shortname}\' kurzusból (id {$a-&gt;course_id})';
$string['failed'] = 'Nem sikerült!';
$string['general_options'] = 'Általános lehetőségek';
$string['group_memberofattribute'] = 'Azon paraméter neve, amely megadja, melyik csoportokhoz tartozik a felhasználó vagy a csoport (pl. memberOf, groupMembership stb.)';
$string['group_memberofattribute_key'] = '\'Tagja\' paraméter';
$string['host_url'] = 'Az LDAP-gazdagépet webcímszerűen adja meg: \'ldap://ldap.myorg.com/\' vagy \'ldaps://ldap.myorg.com/\'';
$string['host_url_key'] = 'Gazdagép webcíme';
$string['idnumber_attribute'] = 'Ha a csoporttagság egyedi neveket tartalmaz, adja meg ugyanazt a paramétert, mint amelyet a felhasználó \'azonosítószámaként\' adott meg az LDAP hitelesítési beállításai között.
';
$string['idnumber_attribute_key'] = 'Azonosítószám-paraméter';
$string['ldap:manage'] = 'LDAP-beiratkozás példányainak kezelése';
$string['ldap_encoding'] = 'Adja meg az LDAP-szerver által használt kódolást. Legvalószínűbb az utf-8, az MS AD v2 alapbeállításként cp1252, cp1250 stb. kódolást használ.';
$string['ldap_encoding_key'] = 'LDAP-kódolás';
$string['memberattribute'] = 'LDAP-tag attribútuma';
$string['memberattribute_isdn'] = 'Ha a csoporttagság egyedi neveket tartalmaz, azokat itt kell megadnia. Ez esetben az adott rész többi beállítását is
át kell alakítania.';
$string['memberattribute_isdn_key'] = 'A tag paraméter dn-t használ';
$string['nested_groups'] = 'Beágyazott csoportokat (csoportok csoportjait) használna a beiratkozáshoz?';
$string['nested_groups_key'] = 'Beágyazott csoportok';
$string['nested_groups_settings'] = 'Beágyazott csoportok beállításai';
$string['nosuchrole'] = 'Nem létezik \'{$a}\' szerep';
$string['objectclass'] = 'Kurzusok keresésére használt objektumosztály. Általában posixGroup.';
$string['objectclass_key'] = 'Objektumosztály';
$string['ok'] = 'Rendben!';
$string['opt_deref'] = 'Ha a csoporttagság egyedi neveket tartalmaz, adja meg, miként kell a névhelyettesítőket csere során kezelni. Az alábbiak közül válasszon: \'Nem\'
(LDAP_DEREF_NEVER) vagy \'Igen\' (LDAP_DEREF_ALWAYS)';
$string['opt_deref_key'] = 'Névhelyettesítők kikapcsolása';
$string['phpldap_noextension'] = 'A PHP LDAP-modulja hiányzik. Telepítse és kapcsolja be, ha ezt a beiratkozási segédprogramot kívánja használni.';
$string['pluginname'] = 'DAP-beiratkozások';
$string['pluginname_desc'] = '<p>Beiratkozásait kezelheti egy LDAP-szerver segítségével. Feltételezés szerint az Ön LDAP-fája olyan csoportokat tartalmaz, amelyek kurzusoknak vannak megfeleltetve, az egyes kurzusok/csoportok pedig tagjegyzékkel rendelkeznek a tanulók megfeleltetéséhez. </p> <p>A kurzusok csoportokként szerepelnek az LDAP-ben, mindegyik csoport több olyan tagsági (<em>tag</em> vagy <em>tagazonosító</em>) mezővel rendelkezik, amely a  felhasználó egyedi azonosítóját tartalmazza.</p> <p>Az LDAP-beiratkozás használatához felhasználóinak érvényes azonosítószám-mezővel kell rendelkezni.  Ez általában akkor működik megfelelően, ha már használ LDAP-hitelesítést.</p> <p>A beiratkozások frissítése a felhasználó belépésekor történik. A beiratkozások naprakészen tartásához lefuttathat egy programkódot is. Lásd: <em>enrol/ldap/enrol_ldap_sync.php</em>.</p> <p>Ezt a kódrészletet beállíthatja úgy, hogy automatikusan új kurzusokat hozzon létre, ha új csoportok jelennek meg az LDAP-ben.</p>';
$string['pluginnotenabled'] = 'A segédprogram nincs bekapcsolva!';
$string['privacy:metadata'] = 'Az LDAP enrolments segédprogram semmilyen személyes adatot nem tárol.';
$string['role_mapping'] = '<p>Az LDAP-ból hozzárendelendő összes szerephez meg kell adnia, hol vannak a szerephez tartozó kurzuscsoportok. Az egyes környezeteket \';\'-vel válassza el.</p>
<p>Meg kell adnia azt a paramétert is, amelyet LDAP-szervere egy csoport tagjainak a tárolására használ. Rendszerint \'member\' vagy \'memberUid\'.</p>';
$string['role_mapping_attribute'] = 'LDAP-tag attribútuma {$a} esetén';
$string['role_mapping_context'] = 'LDAP környezete {$a} esetén';
$string['role_mapping_key'] = 'LDAP-szerepek megfeleltetése ';
$string['roles'] = 'Szerepek megfeleltetése';
$string['server_settings'] = 'Az LDAP-szerver beállításai';
$string['synccourserole'] = '== \'{$a-&gt;idnumber}\' kurzus szinkronizálása \'{$a-&gt;role_shortname}\' szerephez';
$string['syncenrolmentstask'] = 'Beiratkozási feladat szinkronizálása';
$string['template'] = 'Opcionális: az automatikusan létrehozott kurzusok a sablonkurzusból átmásolhatják beállításaikat.';
$string['template_key'] = 'Sablon';
$string['unassignrole'] = '\'{$a-&gt;role_shortname}\' szerep \'{$a-&gt;user_username}\' felhasználóhoz rendelésének törlése a(z) \'{$a-&gt;course_shortname}\' kurzus esetén (id {$a-&gt;course_id})';
$string['unassignrolefailed'] = 'A(z) \'{$a-&gt;role_shortname}\' szerep \'{$a-&gt;user_username}\' felhasználóhoz rendelése \'{$a-&gt;course_shortname}\' kurzus (id
{$a-&gt;course_id}) esetén nem sikerült.';
$string['unassignroleid'] = '\'{$a-&gt;role_id}\' szerepazonosító \'{$a-&gt;user_id}\' felhasználói azonosítóhoz rendelésének megszüntetése';
$string['updatelocal'] = 'Helyi adatok frissítése';
$string['user_attribute'] = 'Ha a csoporttagság egyedi neveket tartalmaz, adja meg a felhasználók elnevezésére/keresésére használt paramétert. Ha LDAP-hitelesítést alkalmaz, ennek az értéknek egyeznie kell az LDAP hitelesítési segédprogramban megadott \'Azonosítószám\' hozzárendelésével.';
$string['user_attribute_key'] = 'Azonosítószám-paraméter';
$string['user_contexts'] = 'Ha a csoporttagság egyedi neveket tartalmaz, sorolja föl, hol vannak a felhasználók. Az egyes környezeteket válassza el
\';\'-vel. Például: \'ou=users,o=org; ou=others,o=org\'.';
$string['user_contexts_key'] = 'Környezetek';
$string['user_search_sub'] = 'Ha a csoporttagság egyedi neveket tartalmaz, adja meg, hogy a felhasználók keresése kiterjedjen-e az alkörnyezetekre is.';
$string['user_search_sub_key'] = 'Keresés az alkörnyezetekben';
$string['user_settings'] = 'Felhasználó-keresési beállítások';
$string['user_type'] = 'Ha a csoporttagság egyedi neveket tartalmaz, adja meg, miként tárolódnak a felhasználók az LDAP-ban.';
$string['user_type_key'] = 'Felhasználó típusa';
$string['version'] = 'A szervere által használt LDAP-protokoll verziója';
$string['version_key'] = 'Verzió';
