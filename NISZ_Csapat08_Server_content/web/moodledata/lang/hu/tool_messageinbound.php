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
 * Strings for component 'tool_messageinbound', language 'hu', version '3.10'.
 *
 * @package     tool_messageinbound
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['classname'] = 'Osztály neve';
$string['component'] = 'Összetevő';
$string['configmessageinboundhost'] = 'A Moodle által ellenőrizendő levelező szerver címe. Ha nem alapértelmezett portot akar megadni, használja a [server]:[port] formát, pl. mail.example.com:993. Ha üresen hagyja, a Moodle a megadott levelező szerver alapértelmezett portját fogja használni.';
$string['defaultexpiration'] = 'Cím alapbeállítás szerinti lejárata';
$string['defaultexpiration_help'] = 'Ha eseménykezelő állít elő egy e-mail címet, ajánlott beállítani hozzá egy automatikus lejárati időt.';
$string['description'] = 'Leírás';
$string['domain'] = 'E-mail doménje';
$string['edit'] = 'Szerkesztés';
$string['edithandler'] = '{$a} eseménykezelő beállításainak szerkesztése';
$string['editinghandler'] = '{$a} szerkesztése';
$string['enabled'] = 'Bekapcsolva';
$string['fixedenabled_help'] = 'Az eseménykezelő állapotát nem módosíthatja, például azért, mert azt más eseménykezelők igénylik.';
$string['fixedvalidateaddress'] = 'Küldő címének ellenőrzése';
$string['fixedvalidateaddress_help'] = 'Az eseménykezelőhöz nem módosíthatja a címellenőrzést, például mert az egy adott beállítást igényel..';
$string['handlerdisabled'] = 'Az elérni kívánt e-mail eseménykezelő ki van kapcsolva. Az üzenet pillanatnyilag nem dolgozható föl.';
$string['incomingmailconfiguration'] = 'Bejövő levél beállításai';
$string['incomingmailserversettings'] = 'Bejövő levelezőszerver beállításai';
$string['incomingmailserversettings_desc'] = 'A Moodle képes megfelelően beállított IMAP-szervereket összekapcsolni. Itt adhatja meg az IMAP-szerveréhez való csatlakozáshoz a beállításokat.';
$string['invalid_recipient_handler'] = 'Ha érvényes üzenet érkezik, de a feladó nem hitelesíthető, az üzenet a szerveren marad, a felhasználó pedig a profiljában megadott e-mail címre kap üzenetet. Ha válaszol rá, ezzel hitelesítheti az eredeti üzenetet.

Ez az eseménykezelő dolgozza fel a válaszokat.

Az eseménykezelőben nem lehet kikapcsolni a feladó ellenőrzését, mert a felhasználó hibás e-mail címről válaszolhat, ha a kliense hibásan van beállítva.';
$string['invalid_recipient_handler_name'] = 'Feladó eseménykezelője érvénytelen';
$string['invalidrecipientdescription'] = 'A(z) "{$a->subject}" üzenet nem hitelesíthető, mert a profiljában megadottól eltérő e-mail címről küldték el. Hitelesítéshez válaszoljon erre az üzenetre.,';
$string['invalidrecipientdescriptionhtml'] = 'A(z) "{$a->subject}" üzenet nem hitelesíthető, mert a profiljában megadottól eltérő e-mail címről küldték el. Hitelesítéshez válaszoljon erre az üzenetre.';
$string['invalidrecipientfinal'] = 'A(z) "{$a->subject}" üzenet nem hitelesíthető. Ellenőrizze, hogy a Moodle-profiljában megadott e-mail címről küldi-e az üzenetet.';
$string['mailbox'] = 'Levélszekrény neve';
$string['mailboxconfiguration'] = 'Levélszekrény beállítása';
$string['mailboxdescription'] = '[mailbox]+subaddress@[domain]';
$string['mailsettings'] = 'Levelezési beállítások';
$string['message_handlers'] = 'Üzenetek eseménykezelői';
$string['messageinbound'] = 'Bejövő üzenet';
$string['messageinboundenabled'] = 'Bejövő levelek feldolgozásának bekapcsolása';
$string['messageinboundenabled_desc'] = 'A bejövő levelek feldolgozását be kell kapcsolni ahhoz, hogy az üzenetek elküldése megfelelő adatokkal történjen.';
$string['messageinboundgeneralconfiguration'] = 'Általános beállítás';
$string['messageinboundgeneralconfiguration_desc'] = 'A bejövő levelek feldolgozása révén az e-maileket a Moodle-ban fogadhatja és dolgozhatja föl, valamint fórumüzenetekre válaszolhat vagy állományokat adhat hozzá saját állományaihoz..';
$string['messageinboundhost'] = 'Bejövő levelek szervere';
$string['messageinboundhostpass'] = 'Jelszó';
$string['messageinboundhostpass_desc'] = 'Ez a szolgáltatója által a bejelentkezéshez megadott jelszó.';
$string['messageinboundhostssl'] = 'SSL használatával';
$string['messageinboundhostssl_desc'] = 'Egyes levelező szerverek a biztonság növelése érdekében titkosítják a Moodle és a szervere közötti kommunikációt. Ha szervere támogatja, ajánlott az SSL-kódolást választania.';
$string['messageinboundhosttype'] = 'Szerver typusa';
$string['messageinboundhostuser'] = 'Felhasználónév';
$string['messageinboundhostuser_desc'] = 'Ez a szolgáltatója által a bejelentkezéshez megadott felhasználónév.';
$string['messageinboundmailboxconfiguration_desc'] = 'Üzenetek küldésekor azok a cim+adat@pelda.com formát követik. A címek Moodle-ból való megbízható előállításához adja meg a @ előtt használt szokásos címet, majd külön a @ utáni doménnevet. Például a levélszekrény neve a példában a "cim", a domén pedig a "pelda.com". Erre a célra használjon dedikált e-mail fiókot.';
$string['messageprocessingerror'] = '"{$a->subject}" tárgyú e-mailt küldött a Moodle részére, melyet a Moodle nem tudott földolgozni.

A hiba részleteit l. alább.

{$a->error}';
$string['messageprocessingerrorhtml'] = '"{$a->subject}" tárgyú e-mailt küldött a Moodle részére, melyet a Moodle nem tudott földolgozni.

A hiba részleteit l. alább.

{$a->error}';
$string['messageprocessingfailed'] = '"{$a->subject}" tárgyú e-mailt küldött a Moodle részére, melyet a Moodle nem tudott földolgozni. A hibaüzenet a következő volt: "{$a->message}".';
$string['messageprocessingfailedunknown'] = '"{$a->subject}" tárgyú e-mailt küldött a Moodle részére, melyet a Moodle nem tudott földolgozni. További felvilágosításért forduljon a rendszergazdához.';
$string['messageprocessingsuccess'] = '{$a->plain}

Ha nem kíván értesítéseket kapni, módosítsa személyes beállításait böngészőjében a(z)  {$a->messagepreferencesurl} oldal megnyitásával.';
$string['messageprocessingsuccesshtml'] = '{$a->html}

Ha nem kíván értesítéseket kapni,  <a href="{$a->messagepreferencesurl}">módosítsa személyes beállításait</a>.';
$string['messageprovider:invalidrecipienthandler'] = 'Öntől beérkező üzeneteket megerősítő üzenetek';
$string['messageprovider:messageprocessingerror'] = 'Figyelmeztetés feldolgozhatatlan beérkező üzenetre';
$string['messageprovider:messageprocessingsuccess'] = 'Üzenet sikeres feldolgozásának megerősítése';
$string['name'] = 'Név';
$string['noencryption'] = 'Ki - nincs titkosítás';
$string['noexpiry'] = 'Nincs lejárat';
$string['oldmessagenotfound'] = 'Kézzel próbált nem létező üzenetet hitelesíteni. Lehet, hogy már feldolgozták vagy lejárt.';
$string['oneday'] = 'Egy nap';
$string['onehour'] = 'Egy óra';
$string['oneweek'] = 'Egy hét';
$string['oneyear'] = 'Egy év';
$string['pluginname'] = 'Beérkező üzenet beállítása';
$string['privacy:metadata:coreuserkey'] = 'Beérkező e-mailt érvényesítő felhasználói kulcsok';
$string['privacy:metadata:messagelist'] = 'Sikertelenül érvényesített és további engedélyezést igénylő üzenetazonosítók listája';
$string['privacy:metadata:messagelist:address'] = 'Az e-mail-küldés címe';
$string['privacy:metadata:messagelist:messageid'] = 'Üzenetazonosító';
$string['privacy:metadata:messagelist:timecreated'] = 'A rekordkészítés ideje';
$string['privacy:metadata:messagelist:userid'] = 'Az üzenetet jóváhagyó felhasználó azonosítója';
$string['replysubjectprefix'] = 'Tárgy:';
$string['requirevalidation'] = 'Feladó címének ellenőrzése';
$string['ssl'] = 'SSL (SSL-verzió automatikus kiderítése)';
$string['sslv2'] = 'SSLv2 (SSL 2. verzió előírása)';
$string['sslv3'] = 'SSLv3 (SSL 3. verzió előírása)';
$string['taskcleanup'] = 'Ellenőrizetlen beérkező e-mail takarítása';
$string['taskpickup'] = 'Beérkező e-mail átvétele';
$string['tls'] = 'TLS (TLS; nem titkosított csatornán keresztüli protokollszintű egyeztetéssel indult; biztonságos kapcsolat kezdeményezésének AJÁNLOTT módja)';
$string['tlsv1'] = 'TLSv1 (közvetlen TLS 1.x verzióval csatlakozás a szerverhez)';
$string['validateaddress'] = 'Feladó e-mail címének ellenőrzése';
$string['validateaddress_help'] = 'Üzenet beérkezésekor a Moodle a feladó  e-mail címének a felhasználói profilban lévővel való összevetésével próbálja ellenőrizni az üzenetet.

Ha nincs egyezés, a feladó megerősítést kérő üzenetet kap.

Ha a beállítás ki van kapcsolva, a feladó  e-mail címének ellenőrzése elmarad.';
