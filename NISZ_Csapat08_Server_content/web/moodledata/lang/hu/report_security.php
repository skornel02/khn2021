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
 * Strings for component 'report_security', language 'hu', version '3.10'.
 *
 * @package     report_security
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['check_configrw_details'] = '<p>Telepítés után ajánlatos a <code>config.php</code>-ben módosítani a fájlengedélyeket, nehogy a webszerver módosítsa az állományt.
Ez nem növeli lényegesen a szerver biztonságát, a használatot viszont némileg lassíthatja vagy korlátozhatja.</p>';
$string['check_configrw_name'] = 'Írható config.php';
$string['check_configrw_ok'] = 'A config.php-t PHP-kódokkal nem lehet módosítani.';
$string['check_configrw_warning'] = 'A config.php-t PHP-kódokkal lehet módosítani.';
$string['check_cookiesecure_details'] = '<p>Ha bekapcsolja a https-kommunikációt, ajánlatos a biztonsági sütiket is bekapcsolni. Adjon hozzá folyamatos http--https átirányítást is. Ha  lehet, küldjön HSTS-fejléceket.</p>';
$string['check_cookiesecure_error'] = 'Kapcsolja be a biztonsági sütiket.';
$string['check_cookiesecure_http'] = 'Biztonságos sütihasználathoz kapcsolja be a https-t';
$string['check_cookiesecure_name'] = 'Biztonsági sütik';
$string['check_cookiesecure_ok'] = 'Biztonsági sütik bekapcsolva.';
$string['check_crawlers_details'] = '<p>Az Elérhető a Google számára beállítással engedélyezi a keresőgépek számára, hogy vendégként belépjenek a kurzusokba. Ha nem engedélyezi vendégek belépését, akkor ennek a beállításnak nincs értelme.</p>';
$string['check_crawlers_error'] = 'A keresőgépek hozzáférése engedélyezve van, de a vendégként való belépést kikapcsolta.';
$string['check_crawlers_info'] = 'A keresőgépek bejelentkezhetnek vendégként.';
$string['check_crawlers_name'] = 'Elérhető a Google számára';
$string['check_crawlers_ok'] = 'A keresőgépek hozzáférése nincs engedélyezve.';
$string['check_defaultuserrole_details'] = '<p>Minden belépett felhasználó az alapbeállítás szerinti felhasználói szerephez tartozó jogosultságokat kapja.  Ezen szerephez ne engedélyezzen kockázatos szerepet.</p>
<p>A korábbi alapbeállítás szerinti egyetlen támogatott kurzusszerep a <em>Hitelesített felhasználó</em>.</p>Ne engedélyezze a kurzus megtekintését.</p>';
$string['check_defaultuserrole_error'] = 'Hibásan megadott alapbeállítás szerinti "{$a}" felhasználói szerep!';
$string['check_defaultuserrole_name'] = 'Az összes felhasználó alapbeállítás szerinti szerepe';
$string['check_defaultuserrole_notset'] = 'Az alapbeállítás szerinti szerep nincs beállítva.';
$string['check_defaultuserrole_ok'] = 'Az alapbeállítás szerinti szerep minden felhasználó-meghatározás esetén rendben van.';
$string['check_displayerrors_details'] = '<p>A <code>display_errors</code> PHP-beállítás bekapcsolása éles portálokon nem ajánlott, mert a hibaüzenetek érzékeny adatokat közölhetnek szerveréről.</p>';
$string['check_displayerrors_error'] = 'A hibajelző PHP-beállítás be van kapcsolva. Először ezt kapcsolja ki.';
$string['check_displayerrors_name'] = 'PHP-hibák kijelzése';
$string['check_displayerrors_ok'] = 'PHP-hibák kijelzése kikapcsolva.';
$string['check_emailchangeconfirmation_details'] = '<p>E-mailben való megerősítés beiktatása ajánlott, ha a felhasználók profiljukban módosítják e-mail címüket. Ha ki van kapcsolva, szerverére levélszemétküldők települhetnek.</p>
<p>Az e-mail mezőjét hozzáférhetetlenné kell tenni a hitelesítő segédprogramok számára is, ezzel a kérdéssel bővebben itt nem foglalkozunk.</p>';
$string['check_emailchangeconfirmation_error'] = 'A felhasználók bármilyen e-mail címet megadhatnak.';
$string['check_emailchangeconfirmation_info'] = 'A felhasználók csak engedélyezett doménekről jövő e-mail-címet adhatnak meg.';
$string['check_emailchangeconfirmation_name'] = 'E-mail cím módosításának megerősítése';
$string['check_emailchangeconfirmation_ok'] = 'A felhasználói profilban lévő e-mail cím módosításának megerősítése.';
$string['check_embed_details'] = '<p>A korlátlan objektumbeágyazás igen veszélyes - bármely bejegyzett felhasználó XSS-támadást indíthat a szerver más felhasználói ellen. Éles portálokon ezt a beállítást ki kell kapcsolni.</p>';
$string['check_embed_error'] = 'Korlátlan objektumbeágyazás bekapcsolva - a szerverek többségénél ez igen veszélyes.';
$string['check_embed_name'] = 'EMBED és OBJECT engedélyezése';
$string['check_embed_ok'] = 'Nem engedélyezett a korlátlan objektumbeágyazás.';
$string['check_frontpagerole_details'] = '<p>Az alapbeállított kezdőoldali szerep minden bejegyzett felhasználó számára engedélyezve van a kezdőoldali tevékenységekhez. Ellenőrizze, nincsenek-e engedélyezve hozzá kockázatot jelentő lehetőségek.</p>
<p>E célból ajánlott létrehozni egy speciális szerepet a korábbi használata helyett.</p>';
$string['check_frontpagerole_error'] = 'Hibásan megadott "{$a}" kezdőoldali szerep!';
$string['check_frontpagerole_name'] = 'Kezdőoldali szerep';
$string['check_frontpagerole_notset'] = 'Nincs beállítva kezdőoldali szerep.';
$string['check_frontpagerole_ok'] = 'A kezdőoldali szerep meghatározása rendben van.';
$string['check_guestrole_details'] = '<p>A vendégszerep vendégeknek, be nem lépő felhasználóknak vagy a kurzusba ideiglenes vendégként belépőknek  van fenntartva. Ebben a szerepben ne engedélyezzen kockázatos lehetőségeket.</p>
<p>Az egyetlen korábbi támogatott típus vendégszerep esetén a <em>Vendég</em>.</p>';
$string['check_guestrole_error'] = 'A(z) "{$a}" vendégszerep meghatározása hibás!';
$string['check_guestrole_name'] = 'Vendégszerep';
$string['check_guestrole_notset'] = 'Nincs beállítva vendégszerep.';
$string['check_guestrole_ok'] = 'A vendégszerep meghatározása rendben van.';
$string['check_mediafilterswf_details'] = '<p>Az automatikus swf-beágyazás  igen veszélyes - bármely bejegyzett felhasználó XSS-támadást indíthat a szerver más felhasználói ellen. Éles portálokon ezt a beállítást ki kell kapcsolni.</p>';
$string['check_mediafilterswf_error'] = 'A Flash médiumszűrő be van kapcsolva - a szerverek többségénél ez igen veszélyes.';
$string['check_mediafilterswf_name'] = 'Az .swf médiumszűrő be van kapcsolva';
$string['check_mediafilterswf_ok'] = 'A Flash médiumszűrő ki van kapcsolva.';
$string['check_nodemodules_details'] = '<p>A(z) <code>{$a->path}</code> könyvtárban Node.js modulok vannak tartozékokkal, melyeket általában az NPM-segédeszköz telepíti. A modulokra szükség lehet a helyi Moodle-fejlesztéshez. Éles Moodle-portál működtetéséhez nincs rájuk szükség és potenciálisan veszélyes, távoli támadásokra érzékeny kódot tartalmazhatnak.</p><p>Ha a portál nyilvánosan elérhető, mindenképpen távolítsa el a könyvtárat, vagy legalább tiltsa le a webes hozzáférést a webszerver beállításában.</p>';
$string['check_nodemodules_info'] = 'Nyilvános portálon nincs helye node_modules könyvtárnak!';
$string['check_nodemodules_name'] = 'Node.js modulok könyvtára';
$string['check_openprofiles_details'] = '<p>A nyitott felhasználói profilokkal visszaélhetnek a levélszemetet küldők. Ajánlott a <code>Felhasználói belépés előírása</code> vagy a  <code>Felhasználói belépés előírása a profilhoz</code> bekapcsolása.</p>';
$string['check_openprofiles_error'] = 'Bárki belépés nélkül megtekintheti a felhasználói profilokat.';
$string['check_openprofiles_name'] = 'Nyitott felhasználói profilok';
$string['check_openprofiles_ok'] = 'A felhasználói profilok megtekintése előtt be kell jelentkezni.';
$string['check_passwordpolicy_details'] = '<p>Ajánlott jelszóstratégiát előírni, mert a jelszó találgatásával a legkönnyebb jogosulatlanul belépni.
Ugyanakkor ne írjon elő túl szigorú követelményeket, mert a felhasználók elfelejthetik vagy leírhatják valahova.</p>';
$string['check_passwordpolicy_error'] = 'Nincs előírva jelszóstratégia.';
$string['check_passwordpolicy_name'] = 'Jelszóstratégia';
$string['check_passwordpolicy_ok'] = 'Jelszóstratégia bekapcsolva.';
$string['check_preventexecpath_details'] = '<p>Futtatható programok útvonalainak rendszergazdai felületen való engedélyezése a jogosultságok emeléséhez kapcsolódó vektor. Írja elő a config.php-ben:</p><p><code>$CFG->preventexecpath = true;<code></p>';
$string['check_preventexecpath_name'] = 'Futtatható programok útvonalai';
$string['check_preventexecpath_ok'] = 'Csak a config.php-ban beállítható futtatható programok útvonalai';
$string['check_preventexecpath_warning'] = 'Futtatható programok útvonalai beállíthatók a rendszergazdai felületen.';
$string['check_riskadmin_detailsok'] = '<p>Ellenőrizze a rendszergazdák alábbi listáját:</p>{$a}';
$string['check_riskadmin_detailswarning'] = '<p>Ellenőrizze a rendszergazdák alábbi listáját:</p>{$a->admins}
<p>Rendszergazda szerepét csak rendszerkörnyezetben ajánlott hozzárendelni. Az alábbi felhasználók nem támogatott rendszergazdai szereppel rendelkeznek:</p>{$a->unsupported}';
$string['check_riskadmin_name'] = 'Rendszergazdák';
$string['check_riskadmin_ok'] = '{$a} rendszergazdát találtam.';
$string['check_riskadmin_unassign'] = '<a href="{$a->url}">{$a->fullname} ({$a->email}) szerep-hozzárendelés felülvizsgálata</a>';
$string['check_riskadmin_warning'] = '{$a->admincount} rendszergazdát és{$a->unsupcount} nem támogatott rendszergazdai szerep-hozzárendelést találtam.';
$string['check_riskbackup_details_overriddenroles'] = '<p>Az aktív felülírásokkal a felhasználók felhasználói adatokat rögzíthetnek a biztonsági mentésekben. Ügyeljen arra, hogy ehhez a jogosultság elő legyen írva.</p> {$a}';
$string['check_riskbackup_details_systemroles'] = '<p>Az alábbi rendszerszerepekkel a felhasználók felhasználói adatokat rögzíthetnek a biztonsági mentésekben. Ügyeljen arra, hogy ehhez a jogosultság elő legyen írva.</p> {$a}';
$string['check_riskbackup_details_users'] = '<p>A fenti szerepek vagy helyi felülírások miatt az alábbi felhasználói fiókok a kurzusba beiratkozott összes felhasználóról magánadatokat rögzíthetnek a biztonsági mentésekben. Ellenőrizze, hogy (a) megbízhatóak-e és (b) erős jelszavak védik-e az adatokat:</p> {$a}';
$string['check_riskbackup_detailsok'] = 'A felhasználói adatok biztonsági mentésekben való rögzítését kifejezetten egyik szerep sem engedélyezi. Ettől függetlenül a korlátlan jogkörű rendszergazdák ezt feltehetőleg megtehetik.';
$string['check_riskbackup_editoverride'] = '<a href="{$a->url}">{$a->name} itt: {$a->contextname}</a>';
$string['check_riskbackup_editrole'] = '<a href="{$a->url}">{$a->name}</a>';
$string['check_riskbackup_name'] = 'Felhasználói adatok biztonsági mentése';
$string['check_riskbackup_ok'] = 'A felhasználói adatok biztonsági mentésekben való rögzítését kifejezetten egyik szerep sem engedélyezi.';
$string['check_riskbackup_unassign'] = '<a href="{$a->url}">{$a->fullname} ({$a->email}) itt: {$a->contextname}</a>';
$string['check_riskbackup_warning'] = '{$a->rolecount} szerep, {$a->overridecount} felülírás és {$a->usercount} felhasználó rögzíthet biztonsági mentésekben felhasználói adatokat.';
$string['check_riskxss_details'] = '<p>A RISK_XSS az összes veszélyes, csak megbízható felhasználók által használható lehetőséget jelöli.</p>
<p>Ellenőrizze az alábbi felhasználólistát és azt, hogy megbízik-e mindannyiukban:</p><p>{$a}</p>';
$string['check_riskxss_name'] = 'XSS megbízható felhasználó';
$string['check_riskxss_warning'] = 'RISK_XSS - {$a} megbízhatónak minősítendő felhasználót találtam.';
$string['check_unsecuredataroot_details'] = '<p>Az adatok gyökérkönyvtára nem lehet internetről elérhető. Ennek érdekében olyan könyvtárat használjon, amelyik nem nyilvánosan elérhető.</p>
<p>Ha áthelyezi a könyvtárat, frissítse a <code>$CFG->dataroot</code> beállítást a <code>config.php</code> fájlban.</p>';
$string['check_unsecuredataroot_error'] = 'Az adatok <code>{$a}</code> gyökérkönyvtára rossz helyen van és elérhető az internetről!';
$string['check_unsecuredataroot_name'] = 'Nem biztonságos adatgyökérkönyvtár';
$string['check_unsecuredataroot_ok'] = 'Az adatok gyökérkönyvtára nem lehet internetről elérhető.';
$string['check_unsecuredataroot_warning'] = 'Az adatok <code>{$a}</code> gyökérkönyvtára rossz helyen van és elérhető lehet az internetről!';
$string['check_vendordir_details'] = '<p>A külsős <code>{$a->path}</code> könyvtárban különféle mappák és tartozékok vannak, melyeket általában a PHP Composer telepíti. Helyi fejlesztéshez szükség lehet rájuk pl. a PHPUnit keretrendszer telepítéséhez. Éles Moodle-portál működtetéséhez nincs rájuk szükség és potenciálisan veszélyes, távoli támadásokra érzékeny kódot tartalmazhatnak.</p><p>Ha a portál nyilvánosan elérhető, mindenképpen távolítsa el a könyvtárat, vagy legalább tiltsa le a webes hozzáférést a webszerver beállításában.</p>';
$string['check_vendordir_info'] = 'Nyilvános portálon külsős könyvtárnak nincs helye!';
$string['check_vendordir_name'] = 'Külsős könyvtár';
$string['check_webcron_details'] = '<p>A cron böngészőből futtatása esetén névtelen felhasználók bizalmas adatok juthatnak a tudomásukra. Ezért vagy csak a parancssorból futtassa a crfont, vagy állítson be jelszót a távoli eléréshez.</p>';
$string['check_webcron_name'] = 'Webről használt cron';
$string['check_webcron_ok'] = 'Névtelen felhasználók nem érhetik el a cront.';
$string['check_webcron_warning'] = 'Névtelen felhasználók nem érhetik el a cront.';
$string['configuration'] = 'Beállítás';
$string['description'] = 'Leírás';
$string['details'] = 'Részletek';
$string['eventreportviewed'] = 'Megtekintett biztonsági ellenőrzésről szóló jelentés';
$string['issue'] = 'Gond';
$string['pluginname'] = 'Biztonsági ellenőrzések';
$string['privacy:metadata'] = 'A Security overview segédprogram semmilyen személyes adatot nem tárol.';
$string['security:view'] = 'Biztonsági jelentés megtekintése';
$string['timewarning'] = 'Az adatfeldolgozás eltarthat egy ideig, legyen türelmes...';
