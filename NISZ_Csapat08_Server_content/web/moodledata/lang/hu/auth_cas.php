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
 * Strings for component 'auth_cas', language 'hu', version '3.10'.
 *
 * @package     auth_cas
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['CASform'] = 'Hitelesítés kiválasztása';
$string['accesCAS'] = 'CAS-felhasználók';
$string['accesNOCAS'] = 'egyéb felhasználók';
$string['auth_cas_auth_logo'] = 'Hitelesítési módszer logója';
$string['auth_cas_auth_logo_description'] = 'Adjon meg egy felhasználói által ismert logót a CAS hitelesítési módszerhez.';
$string['auth_cas_auth_name'] = 'Hitelesítési módszer neve';
$string['auth_cas_auth_name_description'] = 'Adjon meg egy felhasználói által ismert nevet a CAS hitelesítési módszerhez.';
$string['auth_cas_auth_service'] = 'CAS';
$string['auth_cas_auth_user_create'] = 'Felhasználók létrehozása kívülről';
$string['auth_cas_baseuri'] = 'A szerverhez tartozó URI (üres, ha nem baseUri)<br />Ha pl. a CAS-szerver a host.domaine.fr/CAS/-ra válaszol, akkor<br />cas_baseuri = CAS/';
$string['auth_cas_baseuri_key'] = 'Alap-URI';
$string['auth_cas_broken_password'] = 'Jelszava módosítása nélkül nem léphet tovább, ehhez viszont nincs elérhető weboldal. Forduljon a Moodle rendszergazdájához.';
$string['auth_cas_cantconnect'] = 'A CAS-modul LDAP-része nem tud a(z) {$a} szerverhez csatlakozni.';
$string['auth_cas_casversion'] = 'CAS-protokoll verziója';
$string['auth_cas_certificate_check'] = 'A szervertanúsítvány érvényesítéséhez állítsa \'igen\'-re';
$string['auth_cas_certificate_check_key'] = 'Szerverérvényesítés';
$string['auth_cas_certificate_path'] = 'A CA (PEM-formájú) láncfájl útvonala A szervertanúsítvány érvényesítéséhez ';
$string['auth_cas_certificate_path_empty'] = 'Bekapcsolt szerverérvényesítés esetén meg kell adnia a tanúsítvány útvonalát.';
$string['auth_cas_certificate_path_key'] = 'A tanúsítvány útvonala';
$string['auth_cas_changepasswordurl'] = 'Jelszó-módosítási URL';
$string['auth_cas_create_user'] = 'Kapcsolja be, ha CAS által hitelesített felhasználókat kíván a Moodle adatbázisába fölvenni.';
$string['auth_cas_create_user_key'] = 'Felhasználó létrehozása';
$string['auth_cas_curl_ssl_version'] = 'A használandó SSL-verzió (2 vagy 3). Alaphelyzetben a PHP megpróbálja ezt kideríteni, de esetenként kézileg kell beállítani.';
$string['auth_cas_curl_ssl_version_SSLv2'] = 'SSLv2';
$string['auth_cas_curl_ssl_version_SSLv3'] = 'SSLv3';
$string['auth_cas_curl_ssl_version_TLSv10'] = 'TLSv1.0';
$string['auth_cas_curl_ssl_version_TLSv11'] = 'TLSv1.1';
$string['auth_cas_curl_ssl_version_TLSv12'] = 'TLSv1.2';
$string['auth_cas_curl_ssl_version_TLSv1x'] = 'TLSv1.x';
$string['auth_cas_curl_ssl_version_default'] = 'Alaphelyzet';
$string['auth_cas_curl_ssl_version_key'] = 'cURL SSL-verzió';
$string['auth_cas_enabled'] = 'Kapcsolja be, ha CAS-hitelesítést kíván használni.';
$string['auth_cas_hostname'] = 'A CAS-szerver gazdagépneve, <br />pl. host.domain.fr';
$string['auth_cas_hostname_key'] = 'Gazdagépnév';
$string['auth_cas_invalidcaslogin'] = 'Belépése sikertelen - nem kapott jogosultságot.';
$string['auth_cas_language'] = 'Nyelv kiválasztása a hitelesítési oldalakhoz';
$string['auth_cas_language_key'] = 'Nyelv';
$string['auth_cas_logincas'] = 'Biztonságos kapcsolódás';
$string['auth_cas_logout_return_url'] = 'Adja meg a webcímet, ahová a CAS-felhasználók kijelentkezés után kerülnek.<br />Ha üresen hagyja, a felhasználók a Moodle által használt helyre kerülnek.';
$string['auth_cas_logout_return_url_key'] = 'Kijelentkezés utáni alternatív URL';
$string['auth_cas_logoutcas'] = 'Állítsa \'igen\'-re, ha a Moodle lekapcsolásakor a CAS-ból szeretne kijelentkezni.';
$string['auth_cas_logoutcas_key'] = 'Kilépés a CAS-ból';
$string['auth_cas_multiauth'] = 'Állítsa \'igen\'-re, ha többszörös (CAS + egyéb) hitelesítést szeretne.';
$string['auth_cas_multiauth_key'] = 'Többszörös hitelesítés';
$string['auth_cas_port'] = 'A CAS-szerver portja';
$string['auth_cas_port_key'] = 'Port';
$string['auth_cas_proxycas'] = 'Állítsa \'igen\'-re, ha a CAS-t proxy üzemmódban használja.';
$string['auth_cas_proxycas_key'] = 'Proxy üzemmód';
$string['auth_cas_server_settings'] = 'A CAS-szerver beállítása';
$string['auth_cas_text'] = 'Biztonságos kapcsolat';
$string['auth_cas_use_cas'] = 'A CAS használata';
$string['auth_cas_version'] = 'A CAS-protokoll használandó verziója';
$string['auth_casdescription'] = 'Ez a módszer CAS-szervert (központi hitelesítési szolgáltatást) használ felhasználók egyszeri belépési környezetben (SSO) való hitelesítésére. Használhat egyszerű LDAP-hitelesítést is. Ha a megadott felhasználónév és jelszó a CAS szerint érvényes, akkor a Moodle új felhasználót hoz létre adatbázisában, melyhez szükség esetén az LDAP-ból veszi a felhasználói tulajdonságokat. A további belépések alkalmával már csak a felhasználónév és a jelszó ellenőrzésére kerül sor.';
$string['auth_casnotinstalled'] = 'A CAS-hitelesítés nem használható. A PHP LDAP-modulja nincs telepítve.';
$string['noldapserver'] = 'A CAS-hoz nincs beállítva LDAP-szerver! Szinkronizálás kikapcsolva.';
$string['pluginname'] = 'CAS-szerver (SSO)';
$string['privacy:metadata'] = 'A CAS-szerver (SSO) hitelesítő segédprogramja semmilyen személyes adatot nem tárol.';
$string['synctask'] = 'CAS-felhasználói szinkronizálás';
