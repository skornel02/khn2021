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
 * Strings for component 'tool_oauth2', language 'hu', version '3.10'.
 *
 * @package     tool_oauth2
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['authconfirm'] = 'Ezzel a hitelesített fiók állandó hozzáférést szerez a  Moodle-hoz. Célja, hogy rendszerfiókként üzemeljen a  Moodle fájljainak kezeléséhez.';
$string['authconnected'] = 'A rendszerfiók offline hozzáféréshez összekapcsolva';
$string['authnotconnected'] = 'A rendszerfiók offline hozzáféréshez nincs összekapcsolva';
$string['configured'] = 'Beállítva';
$string['configuredstatus'] = 'Beállítva';
$string['connectsystemaccount'] = 'Kapcsolódás egy rendszerfiókhoz';
$string['createfromtemplate'] = 'OAuth 2 szolgáltatás létrehozása sablonból';
$string['createfromtemplatedesc'] = 'Válasszon egyet az alábbi OAuth 2 szolgáltatási sablonokból és hozzon létre egy ismert szolgáltatási típushoz érvényes beállítással rendelkező OAuth 2 szolgáltatást. Ezzel létrejön az érvényes OAuth 2 szolgáltatás a hitelesítéshez szükséges összes megfelelő végponttal és paraméterrel, de használata előtt meg kell adnia az ügyfél azonosítóját és titkos jelszavát.';
$string['createnewendpoint'] = '"{$a}" kibocsátó részére új végpont létrehozása';
$string['createnewfacebookissuer'] = 'Új Facebook-szolgáltatás létrehozása';
$string['createnewgoogleissuer'] = 'Új Google-szolgáltatás létrehozása';
$string['createnewissuer'] = 'Új ügyfél-szolgáltatás létrehozása';
$string['createnewmicrosoftissuer'] = 'Új Microsoft-szolgáltatás létrehozása';
$string['createnewnextcloudissuer'] = 'Új  Nextcloud-szolgáltatás létrehozása';
$string['createnewuserfieldmapping'] = '"{$a}" kibocsátó részére új felhasználói mezőmegfeleltetés létrehozása';
$string['deleteconfirm'] = 'Biztosan törli "{$a}" identitáskibocsátót? A tőle függő segédprogramok leállnak.';
$string['deleteendpointconfirm'] = 'Biztosan törli "{$a->issuer}" kibocsátó "{$a->endpoint}" végpontját? A tőle függő segédprogramok leállnak.';
$string['deleteuserfieldmappingconfirm'] = 'Biztosan törli "{$a->issuer}" kibocsátó felhasználói mezőmegfeleltetését?';
$string['discovered'] = 'A szolgáltatás felderítése sikerült.';
$string['discovered_help'] = 'A felderítés azt jelenti, hogy az OAuth2 végpontok automatikusan megállapíthatók az OAuth-szolgáltatás alapvető webcíméből. Nem minden szolgáltatás szorul "felderítésre", viszont az ilyenek esetén a végpontokat és a felhasználói mezőmegfeleltetés adatait kézzel kell megadni.';
$string['discoverystatus'] = 'Felderítés';
$string['editendpoint'] = 'Végpont szerkesztése: {$a->endpoint} {$a->issuer} kibocsátó esetén';
$string['editendpoints'] = 'Végpontok beállítása';
$string['editissuer'] = 'Identitáskibocsátó szerkesztése: {$a}';
$string['edituserfieldmapping'] = '{$a}  kibocsátó felhasználói mezőmegfeleltetésének szerkesztése';
$string['edituserfieldmappings'] = 'Felhasználói mezőmegfeleltetések beállítása';
$string['endpointdeleted'] = 'Végpont törölve';
$string['endpointname'] = 'Név';
$string['endpointname_help'] = 'Végpont keresésére használt kulcs. "_endpoint"-ra kell végződnie.';
$string['endpointsforissuer'] = 'Kibocsátó végpontja: {$a}';
$string['endpointurl'] = 'Webcím';
$string['endpointurl_help'] = 'Végpont webcíme. A https:// használata kötelező.';
$string['issueralloweddomains'] = 'Bejelentkezési domének';
$string['issueralloweddomains_help'] = 'Beállítása esetén ez az adott szolgáltató esetére korlátozott bejelentkezési domének vesszővel ellátott listája.';
$string['issuerbaseurl'] = 'A szolgáltatás alapvető webcíme';
$string['issuerbaseurl_help'] = 'A szolgáltatás elérésére használt alapvető webcím.';
$string['issuerclientid'] = 'Ügyfél-azonosító';
$string['issuerclientid_help'] = 'A kibocsátó  OAuth ügyfél-azonosítója';
$string['issuerclientsecret'] = 'Ügyfél titkos jelszava';
$string['issuerclientsecret_help'] = 'A kibocsátó OAuth-ügyfél titkos jelszava';
$string['issuerdeleted'] = 'Identitáskibocsátó törölve';
$string['issuerdisabled'] = 'Identitáskibocsátó kikapcsolva';
$string['issuerenabled'] = 'Identitáskibocsátó bekapcsolva';
$string['issuerimage'] = 'Logó webcíme';
$string['issuerimage_help'] = 'A kibocsátó logója képének webcíme. Megjelenhet a bejelentkezési oldalon.';
$string['issuerloginparams'] = 'Bejelentkezés kéréséhez tartozó további paraméterek';
$string['issuerloginparams_help'] = 'Egyes rendszereken a felhasználók alapvető profiljának a beolvasásához a bejelentkezés kéréséhez további paramétereket írnak elő.';
$string['issuerloginparamsoffline'] = 'Offline hozzáférés bejelentkezési kéréséhez tartozó további paraméterek';
$string['issuerloginparamsoffline_help'] = 'Offline hozzáférés kéréséhez minden OAuth-rendszer más-más módszert ír elő. Pl. a Google további paramétereket kér: "access_type=offline&prompt=consent". Ezeket a paramétereket  webcím-lekérdezési paraméterformában kell megadni.';
$string['issuerloginscopes'] = 'Bejelentkezés kéréséhez tartozó hatókörök';
$string['issuerloginscopes_help'] = 'Egyes rendszerek a felhasználók alapvető profiljának a beolvasásához a bejelentkezés kéréséhez további hatóköröket írnak elő.  OpenID Connect-nek megfelelő rendszer esetén a szokásos hatókör az "openid profile email".';
$string['issuerloginscopesoffline'] = 'Offline hozzáférés bejelentkezési kéréséhez tartozó hatókörök';
$string['issuerloginscopesoffline_help'] = 'Offline hozzáférés kéréséhez minden OAuth-rendszer más-más módszert ír elő. Pl. a Microsoft további "offline_access" hatókört ír elő.';
$string['issuername'] = 'Név';
$string['issuername_help'] = 'Az identitáskibocsátó neve. Megjelenhet a bejelentkezési oldalon.';
$string['issuerrequireconfirmation'] = 'E-mail igazolásának előírása';
$string['issuerrequireconfirmation_help'] = 'Előírja, hogy minden felhasználó igazolja e-mail címét, mielőtt OAuth segítségével bejelentkezik.Ez vonatkozik az újonnan létrehozott fiókokra, vagy ha egy meglévő Moodle-fiók OAuth bejelentkezéssel kapcsolódik megfelelő e-mail címeken keresztül.';
$string['issuers'] = 'Kibocsátók';
$string['issuersetup'] = 'Az általános OAuth 2 szolgáltatások beállításáról szóló részletes utasítások';
$string['issuersetuptype'] = 'A(z)  {$a}  OAuth 2 szolgáltató beállításáról szóló részletes utasítások';
$string['issuershowonloginpage'] = 'Megjelenítés a bejelentkezési oldalon.';
$string['issuershowonloginpage_help'] = 'Ha az  OAuth 2 hitelesítő segédprogram be van kapcsolva, ez a bejelentkezési kibocsátó feltűnik a bejelentkezési oldalon, így a felhasználók bejelentkezhetnek a kibocsátó fiókjaiból.';
$string['loginissuer'] = 'Bejelentkezés engedélyezése';
$string['notconfigured'] = 'Nincs beállítva';
$string['notdiscovered'] = 'A szolgáltatás felderítése nem sikerült.';
$string['notloginissuer'] = 'Bejelentkezés engedélyezésének megtagadása';
$string['pluginname'] = 'OAuth 2 szolgáltatások';
$string['privacy:metadata'] = 'Az OAuth 2 services segédprogram nem tárol személyes adatokat.';
$string['savechanges'] = 'Módosítások mentése';
$string['serviceshelp'] = 'Szolgáltató beállításáról szóló utasítások';
$string['systemaccountconnected'] = 'Rendszerfiók csatlakoztatva';
$string['systemaccountconnected_help'] = 'A rendszerfiókok bővítik a segédprogramok működését. A bejelentkezéshez nem szükséges, de az OAuth-szolgáltatást használó segédprogramok működése szűkülhet, ha a rendszerfiók nincs csatlakoztatva. Például az adattárak csak rendszerfiókkal támogatják "kontrollált hivatkozások" használatát fájlműveletek végrehajtása során.';
$string['systemaccountnotconnected'] = 'Rendszerfiók nincs csatlakoztatva';
$string['systemauthstatus'] = 'Rendszerfiók csatlakoztatva';
$string['usebasicauth'] = 'Jogkivonat-kérelmek hitelesítése HTTP-fejléceken keresztül';
$string['usebasicauth_help'] = 'Alapvető HTTP hitelesítési séma használata ügyfél-azonosító és -jelszó frissítési jogkivonat-kérelemmel való küldésekor. Az OAuth 2 szabvány ajánlja, de előfordulhat, hogy egyes kibocsátók esetén nem elérhető.';
$string['userfieldexternalfield'] = 'Külső mező neve';
$string['userfieldexternalfield_error'] = 'Ez a mező nem tartalmazhat HTML-t.';
$string['userfieldexternalfield_help'] = 'Külső OAuth-rendszertől kapott mező neve';
$string['userfieldinternalfield'] = 'Belső mező neve';
$string['userfieldinternalfield_help'] = 'Azon Moodle-felhasználói mező neve, amelyet meg kell feleltetni a külső mezőnek.';
$string['userfieldmappingdeleted'] = 'Felhasználói mezőmegfeleltetés törölve';
$string['userfieldmappingsforissuer'] = 'Felhasználói mezőmegfeleltetések ezen kiadó esetén:  {$a}';
