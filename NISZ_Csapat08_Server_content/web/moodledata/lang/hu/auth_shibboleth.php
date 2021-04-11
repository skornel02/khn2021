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
 * Strings for component 'auth_shibboleth', language 'hu', version '3.10'.
 *
 * @package     auth_shibboleth
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_shib_auth_logo'] = 'Hitelesítési módszer logója';
$string['auth_shib_auth_logo_description'] = 'Adjon meg egy, a felhasználói számára ismert Shibboleth hitelesítési módszerhez tartozó logót, pl. <tt>SWITCHaai Login</tt> vagy <tt>InCommon Login</tt>, vagy valami hasonlót.';
$string['auth_shib_auth_method'] = 'A hitelesítési módszer neve';
$string['auth_shib_auth_method_description'] = 'Adjon meg egy nevet a felhasználói által ismert Shibboleth hitelesítési módszerhez. Ez lehet pl. a Shibboleth-föderáció neve, pl. <tt>SWITCHaai Login</tt>, <tt>InCommon Login</tt> vagy ehhez hasonló.';
$string['auth_shib_changepasswordurl'] = 'Jelszómódosító URL';
$string['auth_shib_contact_administrator'] = 'Ha nincs kapcsolata az adott szervezetekhez  és el kell érnie egy kurzust ezen a szerveren, akkor forduljon <a href="mailto:{$a}"> a Moodle rendszergazdájához</a>.';
$string['auth_shib_convert_data'] = 'Adatmódosítási felület';
$string['auth_shib_convert_data_description'] = 'Ezen a felületen tovább módosíthatja a Shibboleth adatait. További utasítások a  <a href="{$a}">README</a> alatt találhatók.';
$string['auth_shib_convert_data_warning'] = 'Az állomány nem létezik, vagy a webszerver nem tudja olvasni!';
$string['auth_shib_idp_list'] = 'Azonosítási szolgáltatók';
$string['auth_shib_idp_list_description'] = 'Azonosítási szolgáltatók entityID-inek listája, melyekből a felhasználók a belépési oldalon választhatnak.<br />Minden soron az IdP entityID-je (l. a Shibboleth metaadat-állományát) és az IdP lenyíló listán megjelenítendő nevének vesszővel elválasztott felsorolása látható.<br />Választható harmadik paraméterként hozzáadhatja a Shibboleth folyamatkezdeményezőjének a helyét, amely a több föderációs Moodle-telepítés részét képezi.';
$string['auth_shib_instructions'] = 'Használja a <a href="{$a}">Shibboleth-belépést</a> a Shibbolethen keresztüli hozzáféréshez, ha intézménye ezt támogatja. Egyéb esetben használja az itt megjelenő szokásos belépési űrlapot.';
$string['auth_shib_instructions_help'] = 'Itt kell megadnia a Shibboleth használatával kapcsolatos utasításokat felhasználói számára. Ez a  belépési oldalon az utasításokat tartalmazó részben jelenik meg. Az utasításoknak "<b>{$a}</b>" hivatkozást kell tartalmazni, hogy a felhasználók belépéskor rákattinthassanak.';
$string['auth_shib_instructions_key'] = 'Belépési utasítások';
$string['auth_shib_integrated_wayf'] = 'A Moodle WAYF-szolgáltatása';
$string['auth_shib_integrated_wayf_description'] = 'Bejelölése esetén a Moodle saját WAYF-szolgáltatását használja a Shibboleth-hez beállított helyett. A Moodle egy lenyíló listát jelenít meg ezen az alternatív belépési oldalon, ahol a felhasználónak ki kell választania a saját azonosítási szolgáltatóját.';
$string['auth_shib_logout_return_url'] = 'Alternatív visszatérési URL kilépéshez.';
$string['auth_shib_logout_return_url_description'] = 'Azon URL megadása, amelyre a Shibboleth-felhasználók kilépés után kerülnek. <br />Ha üresen hagyja, a felhasználók a Moodle által használt átirányítási helyre kerülnek.';
$string['auth_shib_logout_url'] = 'A Shibboleth-szolgáltató kilépési webcímkezelője';
$string['auth_shib_logout_url_description'] = 'Adja meg a Shibboleth-szolgáltató kilépési webcímkezelőjét. Ez rendszerint <tt>/Shibboleth.sso/Logout</tt>.';
$string['auth_shib_no_organizations_warning'] = 'Ha az integrált WAYF-szolgáltatást kívánja használni, vesszővel elválasztva sorolja fel az azonosítási szolgáltatókhoz tartozó entityID-ket, nevüket és opcionálisan az esemény kezdeményezőjét.';
$string['auth_shib_only'] = 'Csak Shibboleth';
$string['auth_shib_only_description'] = 'Jelölje be ezt a lehetőséget, ha Shibboleth-hitelesítést kell használni.';
$string['auth_shib_username_description'] = 'A webszerver azon Shibboleth környezeti változójának a neve, amelyet Moodle-felhasználónévként fog használni.';
$string['auth_shibboleth_errormsg'] = 'Válassza ki, melyik szervezetnek a tagja!';
$string['auth_shibboleth_login'] = 'Belépés Shibboleth-tel';
$string['auth_shibboleth_login_long'] = 'Belépés a Moodle-ba Shibboleth-tel';
$string['auth_shibboleth_manual_login'] = 'Kézi belépés';
$string['auth_shibboleth_select_member'] = 'A(z) ... tagja vagyok';
$string['auth_shibboleth_select_organization'] = 'A Shibboleth révén való hitelesítéshez válassza ki szervezetét a lenyíló listából:';
$string['auth_shibbolethdescription'] = 'Ezzel a módszerrel Shibboleth-szerverhez kapcsolódva hozhat létre és hitelesíthet felhasználókat. A részleteket lásd a <a href="{$a}">README</a> állományban.';
$string['pluginname'] = 'Shibboleth';
$string['privacy:metadata'] = 'A Shibboleth hitelesítő segédprogramja semmilyen személyes adatot nem tárol.';
$string['shib_invalid_account_error'] = 'Shibboleth-hitelesítéssel rendelkezik, de a Moodle-ban nincs érvényes felhasználói fiókja. Lehet, hogy nem létezik vagy használatát felfüggesztették.';
$string['shib_no_attributes_error'] = 'Úgy tűnik, rendelkezik Shibboleth-jogosultsággal, de a Moodle nem kapott semmilyen felhasználói attribútumot. Ellenőrizze, hogy az azonosítási szolgáltatója átadja-e a Moodle szolgáltatója részére a szükséges attribútumokat ({$a}), vagy értesítse a szerver webmesterét.';
$string['shib_not_all_attributes_error'] = 'A Moodle-nak a Shibboleth néhány attribútumára van szüksége, melyek az Ön esetében hiányoznak. Ezek a következők: {$a} <br />Értesítse a szerver webmesterét vagy az azonosítási szolgáltatóját.';
$string['shib_not_set_up_error'] = 'A Shibboleth jogosultsága nincs megfelelően beállítva, mert az oldalhoz nincsenek meg a Shibboleth környezeti változói. A Shibboleth-jogosultsággal kapcsolatosan olvassa el a <a href="{$a}">README</a> állományt vagy értesítse a Moodle ezen telepítésének webmesterét.';
