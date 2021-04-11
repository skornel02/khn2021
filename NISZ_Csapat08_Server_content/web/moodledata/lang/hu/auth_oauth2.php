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
 * Strings for component 'auth_oauth2', language 'hu', version '3.10'.
 *
 * @package     auth_oauth2
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accountexists'] = 'Ezzel a felhasználónévvel már szerepel felhasználó a portálon. Ha ez az Ön fiókja, jelentkezzen be és kapcsolja össze hivatkozását a beállítási oldalon lévővel.';
$string['alreadylinked'] = 'Ez a külső fiók már kapcsolódik egy portálon lévő fiókhoz.';
$string['auth_oauth2description'] = 'OAuth 2 szabványon alapuló hitelesítés';
$string['auth_oauth2settings'] = 'OAuth 2 hitelesítés beállításai';
$string['confirmaccountemail'] = 'Üdvözöljük, {$a->fullname},

A(z) \'{$a->sitename}\' portálról az Ön e-mail-címével új fiók létrehozását kérték.

Új fiókjának megerősítéséhez látogasson el ide:

{$a->link}

A levelező programokban ez általában kék színben jelenik meg és kattintással használható. Ha ez nem működik, másolja ki a címet és illessze be böngészője címsorába.

Ha segítségre van szüksége, forduljon a rendszergazdához:
{$a->admin}

Ha Ön nem tett így, valaki más próbálhatott visszaélni a fiókjával. Haladéktalanul forduljon a rendszergazdához!';
$string['confirmaccountemailsubject'] = '{$a}: fiók adatai';
$string['confirmationinvalid'] = 'A megerősítő hivatkozás vagy érvénytelen, vagy lejárt. Kezdje újra a bejelentkezést az új megerősítő e-mail előállításához.';
$string['confirmationpending'] = 'A fiók e-mailben való megerősítésre vár.';
$string['confirmlinkedloginemail'] = 'Üdvözöljük, {$a->fullname},

A(z) \'{$a->sitename}\' portálon lévő fiókjához az Ön e-mail-címével  {$a->issuername} bejelentkezés
{$a->linkedemail} összekapcsolását kérték.

A kérelem megerősítéséhez és a bejelentkezések összekapcsolásához látogasson el ide:

{$a->link}

A levelező programokban ez általában kék színben jelenik meg és kattintással használható. Ha ez nem működik, másolja ki a címet és illessze be böngészője címsorába.

Ha segítségre van szüksége, forduljon a rendszergazdához:
{$a->admin}

Ha Ön nem tett így, valaki más próbálhatott visszaélni a fiókjával. Haladéktalanul forduljon a rendszergazdához!';
$string['confirmlinkedloginemailsubject'] = '{$a}: összekapcsolt bejelentkezés megerősítése';
$string['createaccountswarning'] = 'Ezzel a hitelesítő segédprogrammal a felhasználók fiókokat hozhatnak létre a portálján. Használata esetén bekapcsolhatja az "authpreventaccountcreation" beállítást.';
$string['createnewlinkedlogin'] = 'Új  ({$a}) fiók összekapcsolása';
$string['emailconfirmlink'] = 'Fiókjainak összekapcsolása';
$string['emailconfirmlinksent'] = '<p>Ezzel az e-mail címmel már létezik fiók, de még nincs összekapcsolva.</p>
<p>Bejelentkezés előtt a fiókokat össze kell kapcsolni.</p>
<p><b>{$a}</b> címére e-mailt kellett kapnia.</p>
<p>Benne megtalálja a fiókok összekapcsolásához szükséges egyszerű utasításokat.</p>
<p>Ha továbbra is gondjai vannak, forduljon a rendszergazdához.</p>';
$string['emailpasswordchangeinfo'] = 'Üdvözöljük, {$a->firstname}!

Valaki (vélhetőleg Ön) új jelszót kért a(z) \'{$a->sitename}\' portálon lévő fiókjához.

Jelszavát nem lehet visszaállítani, mert a bejelentkezéshez másik portálon lévő fiókját használja.

Lépjen be a korábbi módon az ott található ugróponntal.
{$a->admin}';
$string['emailpasswordchangeinfosubject'] = '{$a}: jelszómódosítás adatai';
$string['info'] = 'Külső fiók';
$string['issuer'] = 'OAuth 2 szolgáltatás';
$string['issuernologin'] = 'A kibocsátóval nem lehet belépni.';
$string['linkedlogins'] = 'Összekapcsolt bejelentkezések';
$string['linkedloginshelp'] = 'Összekapcsolt bejelentkezések súgója';
$string['loginerror_authenticationfailed'] = 'A hitelesítés nem sikerült.';
$string['loginerror_cannotcreateaccounts'] = 'E-mail címével nem létezik fiók.';
$string['loginerror_invaliddomain'] = 'A portálon az e-mail cím nem használható.';
$string['loginerror_nouserinfo'] = 'Nem érkezett vissza felhasználói adat. Lehet, hogy az OAuth 2 szolgáltatás hibásan van beállítva.';
$string['loginerror_userincomplete'] = 'A visszakapott felhasználói adat nem tartalmaz felhasználónevet és e-mail címet. Lehet, hogy az OAuth 2 szolgáltatás hibásan van beállítva.';
$string['noissuersavailable'] = 'A beállított OAuth2 szolgáltatások közül egyik sem engedi a bejelentkezési fiókok összekapcsolását.';
$string['notenabled'] = 'Az OAuth2 hitelesítő segédprogram nincs bekapcsolva.';
$string['notloggedindebug'] = 'A bejelentkezés nem sikerült. Oka:  {$a}';
$string['notwhileloggedinas'] = 'Összekapcsolt bejelentkezések más felhasználóként való bejelentkezés esetén nem kezelhetők.';
$string['oauth2:managelinkedlogins'] = 'Saját összekapcsolt bejelentkezési fiókok kezelése';
$string['plugindescription'] = 'Ez a  hitelesítő segédprogram a Moodle bejelentkezési oldalán felsorolja a beállított identitásszolgáltatókat. Ha kiválaszt egy identitásszolgáltatót, a felhasználók egy OAuth 2 szolgáltatótól származó hitelesítő adataikkal jelentkezhetnek be.';
$string['pluginname'] = 'OAuth 2';
$string['privacy:metadata:auth_oauth2'] = 'OAuth2 hitelesítés';
$string['privacy:metadata:auth_oauth2:authsubsystem'] = 'A segédprogram a hitelesítési alrendszerhez kapcsolódik.';
$string['privacy:metadata:auth_oauth2:confirmtoken'] = 'A megerősítő token.';
$string['privacy:metadata:auth_oauth2:confirmtokenexpires'] = 'A megerősítő token lejáratának időbélyegzője.';
$string['privacy:metadata:auth_oauth2:email'] = 'A fiókhoz kapcsolódó külső e-mail.';
$string['privacy:metadata:auth_oauth2:issuerid'] = 'Az OAuth2 belépéshez az OAuth2 kibocsátójának az azonosítója';
$string['privacy:metadata:auth_oauth2:tableexplanation'] = 'Egy felhasználó Moodle-fiókjához kapcsolt OAuth2 fiókok.';
$string['privacy:metadata:auth_oauth2:timecreated'] = 'Jelzi, mikor kapcsolták a felhasználói fiókot az OAuth2 belépéshez.';
$string['privacy:metadata:auth_oauth2:timemodified'] = 'Jelzi, mikor módosították a rekordot.';
$string['privacy:metadata:auth_oauth2:userid'] = 'Azon felhasználói fiók felhasználói azonosítója, amelyhez ezt a OAuth2 belépést kapcsolták.';
$string['privacy:metadata:auth_oauth2:usermodified'] = 'Azon felhasználó azonosítója, aki ezt a fiókot módosította,';
$string['privacy:metadata:auth_oauth2:username'] = 'A fiókhoz illő külső felhasználónév.';
