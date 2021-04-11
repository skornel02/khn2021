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
 * Strings for component 'auth_saml2sso', language 'hu', version '3.10'.
 *
 * @package     auth_saml2sso
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_saml2ssodescription'] = 'Felhasználók beléphetnek a SAML2 azonosítás-szolgáltató (IdP) segítségével';
$string['error_create_user'] = 'Hiba történt a felhasználói fiók létrehozása közben. Kérjük, értesítse a rendszergazdát.';
$string['error_entityid'] = 'Az SP-forrás nevét kötelező megadni';
$string['error_field_idp_firstname'] = 'Az IdP szerinti keresztnévmező megadása kötelező';
$string['error_field_idp_lastname'] = 'Az IdP szerinti vezetéknévmező megadása kötelező';
$string['error_idpattr'] = 'A felhasználónévhez rendelt attribútum megadása kötelező';
$string['error_lockconfig_field_map_email'] = 'Az Adatok illesztése mezőben szereplő e-mail-cím megadása kötelező';
$string['error_lockconfig_field_map_firstname'] = 'Az Adatok illesztése mezőben szereplő keresztnév megadása kötelező';
$string['error_lockconfig_field_map_lastname'] = 'Az Adatok illesztése mezőben szereplő vezetéknév megadása kötelező';
$string['error_sp_path'] = 'A SAML2 szolgáltató (SP) útvonalát a konfigurációs fájlban kötelező megadni';
$string['help_autocreate'] = 'Engedélyezi új felhasználók létrehozását?';
$string['help_dual_login'] = 'Adja meg, hogy a felhasználók közvetlenül léphetnek-e be a Moodle-ba. Az IdP-hitelesítés megkerüléséhez használja a saml=off paramétert. Pl.: /login/index.php?saml=off';
$string['help_edit_profile'] = 'Ha a felhasználók nem szerkeszthetik profiljukat, nem jelenik meg a profilra hivatkozás sem';
$string['help_entityid'] = 'Az SP-forrás neve a /config/authsources.php fájlban található';
$string['help_field_idp_firstname'] = 'A felhasználó IdP szerinti keresztneve';
$string['help_field_idp_fullname'] = 'Az IdP szerinti felhasználónév mezője egy értéket tartalmaz? Ha igen, töltse ki a lenti mezőket ugyanazzal az értékkel';
$string['help_field_idp_lastname'] = 'A  felhasználó IdP szerinti vezetékneve';
$string['help_idpattr'] = 'Melyik IdP szerinti érték legyen a felhasználónév?';
$string['help_logout_url_redir'] = 'Kijelentkezéskor a rendszer erre a webcímre fogja átirányítani a felhasználókat. Ha a webcím érvénytelen vagy üres, a Moodle kezdőoldalára kerülnek (pl.: https://mood.le/egyedi_kilepes/ )';
$string['help_moodle_mapping'] = 'Hogyan ellenőrizzük, hogy létezik-e a felhasználónév? Ha az azonosítószámot használja, ne felejtse el a lenti Adatok illesztésénél beállítani';
$string['help_single_signoff'] = 'Felhasználók egyidejű kijelentkeztetése (SSO) a Moodle és az IdP rendszerekből?';
$string['help_sp_path'] = 'Az SP telepítésének abszolút útvonala Pl.: /var/simplesamlphp/';
$string['label_autocreate'] = 'Felhasználók automatikus létrehozása';
$string['label_dual_login'] = 'Kettős bejelentkezés';
$string['label_edit_profile'] = 'Szerkesztheti a felhasználó a profilját?';
$string['label_entityid'] = 'SP-forrás neve';
$string['label_field_idp_firstname'] = 'IdP szerinti keresztnév';
$string['label_field_idp_fullname'] = 'IdP szerinti teljes név';
$string['label_field_idp_lastname'] = 'IdP szerinti vezetéknév';
$string['label_idpattr'] = 'Felhasználónév illesztése';
$string['label_instructions_p1'] = '<p>A következő adatillesztési mezőket kötelező megadnia:</p><ul><li>Keresztnév => givenName</li><li>Vezetéknév => sn</li><li>E-mail-cím: => mail</li></ul><p>Ezen az <code>auth.php</code> fájlban lévő <code>$stringMapping</code> tömb módosításával változtathat</p>';
$string['label_instructions_title'] = 'Tennivalók';
$string['label_logout'] = 'Kattintson ide a kilépéshez';
$string['label_logout_url_redir'] = 'Kilépési webcím';
$string['label_moodle_mapping'] = 'Felhasználónév ellenőrzése';
$string['label_single_signoff'] = 'Egyidejű kijelentkezés';
$string['label_sp_path'] = 'SAML2 szolgáltató (SP)';
$string['nouser'] = 'Nincs ilyen azonosítójú felhasználó és az automatikus beiratkozás nem engedélyezett. A használt azonosító a következő:';
$string['pluginname'] = 'SAML2 SSO hitelesítés';
$string['success_config'] = 'Az összes konfigurációs mező mentése sikerült';
