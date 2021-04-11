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
 * Strings for component 'url', language 'hu', version '3.10'.
 *
 * @package     url
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['chooseavariable'] = 'Válasszon egy változót...';
$string['clicktoopen'] = 'A tananyag megnyitásához kattintson erre: {$a}.';
$string['configdisplayoptions'] = 'Válassza ki az elérendő opciókat; a létező beállítások nem módosulnak. Több mező kiválasztásához nyomja le a CTRL-billentyűt.';
$string['configframesize'] = 'Ha egy weboldal vagy egy feltöltött állomány keretben jelenik meg, ez az érték a felső (navigációt tartalmazó) keret magassága (képpontban).';
$string['configrolesinparams'] = 'Kapcsolja be, ha az elérhető paraméterváltozók között szerepeltetni kíván honosított szerepneveket.';
$string['configsecretphrase'] = 'Ezzel a titkos kifejezéssel paraméterként kódolt értéket továbbíthat egyes szerverekhez. A kód az adott felhasználó IP-címének és a titkos kifejezésnek az egyesítésével létrejövő md5 érték, vagyis kód = md5(IP.titkoskifejezés). Ne feledje, hogy a megoldás nem teljesen megbízható, mivel az IP-címek változhatnak és gyakran több gép között oszlanak meg.';
$string['contentheader'] = 'Tartalom';
$string['createurl'] = 'URL létrehozása';
$string['displayoptions'] = 'Elérhető megjelenítési lehetőségek';
$string['displayselect'] = 'Megjelenítés';
$string['displayselect_help'] = 'Ez a beállítás, továbbá az URL állománytípusa és a böngészőben a beágyazás engedélyezése szabja meg az URL megjelenését. Az alábbi lehetőségek közül választhat:

* Automatikus - Az adott URL típusához automatikusan kiválasztja a legjobb megjelenítést
* Beágyazás - Az URL az oldalon a navigációs sáv alatt leírásával és az esetleges blokkokkal együtt jelenik meg
* Megnyitás - A böngésző ablakában csak az URL jelenik meg
* Előugró ablakban - Az URL új böngészőablakban, menük vagy címsor nélkül jelenik meg
* Keretben - Az URL a navigációs sáv alatt egy keretben jelenik meg
* Új ablakban - Az URL új böngészőablakban, menükkel és címsorral jelenik meg';
$string['displayselectexplain'] = 'Válassza ki a megjelenítés típusát. Nem minden típus használható minden  webcímmel.';
$string['externalurl'] = 'Külső URL';
$string['framesize'] = 'Keret magassága';
$string['indicator:cognitivedepth'] = 'Kognitív URL';
$string['indicator:cognitivedepth_help'] = 'Ez a jelző a tanuló által egy internetes tananyagban elért kognitív mélységet mutatja.';
$string['indicator:cognitivedepthdef'] = 'Kognitív webcím';
$string['indicator:cognitivedepthdef_help'] = 'A résztvevő az elemzési időszak alatt a Webcím tananyagainak tevékenységei során kognitív elfoglaltság terén ezt a százalékot érte el (Szintek - Nincs megtekintés, Megtekintés)';
$string['indicator:socialbreadth'] = 'Társas URL';
$string['indicator:socialbreadth_help'] = 'Ez a jelző a tanuló által egy internetes tananyagban elért társas lefedettséget mutatja.';
$string['indicator:socialbreadthdef'] = 'Társas webcím';
$string['indicator:socialbreadthdef_help'] = 'A résztvevő az elemzési időszak alatt a Webcím tananyagainak tevékenységei során társas elfoglaltság terén ezt a százalékot érte el (Szintek - Nincs részvétel, Egyedüli részvétel)';
$string['invalidstoredurl'] = 'A forrás nem jeleníthető meg. Érvénytelen URL';
$string['invalidurl'] = 'A megadott URL érvénytelen.';
$string['modulename'] = 'URL';
$string['modulename_help'] = 'Az internetes modullal a tanár internetes hivatkozást adhat meg tananyagként. Bármi, ami szabadon hozzáférhető az interneten, például dokumentumok vagy képek, megadható. A webcímet nem szükséges egy portál honlapjaként megadni. Egy adott weboldal címét kimásolhatja a vágólapra és beszúrhatja, vagy használhatja az állományválasztót, és kiválaszthat egy adattárbeli (pl. Flickr, YouTube vagy Wikimedia) ugrópontot  (attól függően, hogy mely adattárak vannak engedélyezve a portálon.)

A webcím többféle megjelenítési lehetősége közül lehet választani (beágyazás, megnyitás új ablakban, további lehetőségek az információk, mint például a tanuló nevének, ha szükséges, a webcímnek az átadására.

A webcím a szövegszerkesztővel bármilyen egyéb tananyaghoz vagy tevékenységtípushoz hozzáadható.';
$string['modulenameplural'] = 'Webcímek';
$string['page-mod-url-x'] = 'Bármely webcímes modul oldala';
$string['parameterinfo'] = '&amp;paraméter=változó';
$string['parametersheader'] = 'Webcímes változók';
$string['parametersheader_help'] = 'Az URL egyes belső Moodle-változókkal automatikusan kiegészülhet. Az egyes szövegmezőkbe paraméterként írja be a nevét, majd válassza ki a megfelelő szükséges változót.';
$string['pluginadministration'] = 'URL kezelése';
$string['pluginname'] = 'URL';
$string['popupheight'] = 'Felugró ablak magassága (képpontban)';
$string['popupheightexplain'] = 'A felugró ablakok alapmagasságát határozza meg.';
$string['popupwidth'] = 'Felugró ablak szélessége (képpontban)';
$string['popupwidthexplain'] = 'A felugró ablakok alapszélességét határozza meg.';
$string['printintro'] = 'Webcímleírás megjelenítése';
$string['printintroexplain'] = 'Az URL leírása a tartalom alatt jelenjen meg? Egyes megjelenítési típusok esetén akkor sem jelenik meg, ha be van kapcsolva.';
$string['privacy:metadata'] = 'Az URL resource segédprogram semmilyen személyes adatot nem tárol.';
$string['rolesinparams'] = 'A szerepnevek jelenjenek meg a paraméterek között';
$string['search:activity'] = 'URL';
$string['serverurl'] = 'Szerver webcíme';
$string['url:addinstance'] = 'Új internetes tananyag hozzáadása';
$string['url:view'] = 'URL megtekintése';
