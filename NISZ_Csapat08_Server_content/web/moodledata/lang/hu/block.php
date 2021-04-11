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
 * Strings for component 'block', language 'hu', version '3.10'.
 *
 * @package     block
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addtodock'] = 'Áthelyezés a tárolóba';
$string['anypagematchingtheabove'] = 'A fentinek megfelelő bármely oldal';
$string['appearsinsubcontexts'] = 'Alkörnyezetekben jelenik meg';
$string['assignrolesinblock'] = '{$a} blokkban szerepek hozzárendelése';
$string['blocksdrawertoggle'] = 'Blokkfiók elrejtése/megjelenítése';
$string['blocksettings'] = 'Blokk beállításai';
$string['bracketfirst'] = '{$a} (első)';
$string['bracketlast'] = '{$a} (utolsó)';
$string['configureblock'] = '{$a} blokk beállítása';
$string['contexts'] = 'Oldalkörnyezetek';
$string['contexts_help'] = 'A környezetek olyan speciálisabb oldaltípusok, ahol ez a blokk az eredeti blokk helyén jeleníthető meg. Az eredeti blokk helyétől és pillanatnyi helyzetétől függően különféle lehetőségeket vehet igénybe. Például egy blokk megjelenését korlátozhatja egy kurzus fórumoldalaira, ha hozzáadja a blokkot a kurzushoz (és az összes aloldalon megjeleníti), majd áttér egy fórumra és újból módosítja a blokk beállításait, hogy a megjelenítés csak a fórum oldalaira korlátozódjék.';
$string['createdat'] = 'Eredeti blokk helye';
$string['createdat_help'] = 'A blokk létrehozásának eredeti helye. A blokk beállításai miatt az eredeti helyen belül egyéb helyeken (környezeteken) belül is megjelenhet.Például egy kurzusoldalon létrehozott blokk megjelenhet a kurzuson belüli tevékenységekben. A címoldalon létrehozott blokk az egész portálon láthatóvá tehető.';
$string['defaultregion'] = 'Hova kerül';
$string['defaultregion_help'] = 'A stílusokban egy vagy több névvel ellátott blokkrégiót lehet kijelölni a blokkok megjelenítéséhez. Ez a beállítás szabja meg, hogy az a blokk alapesetben melyikben jelenjen meg. A régió szükség esetén egyes oldalakon felülírható.';
$string['defaultweight'] = 'Alapsúly';
$string['defaultweight_help'] = 'Az alapsúllyal nagyjából megszabhatja, hogy a kiválasztott régión belül hol jelenjen meg a blokk - fölül vagy alul. A végleges hely kiszámítása a régiót alkotó összes blokk alapján történik (előfordulhat, például, hogy fölül csak egyetlen blokk kap helyet). A régió szükség esetén egyes oldalakon felülírható.';
$string['deleteblock'] = '{$a} blokk törlése';
$string['deleteblockcheck'] = 'Biztosan törli a(z) {$a} nevű blokkot?';
$string['deleteblockwarning'] = '<p>Olyan blokkot készül törölni, amely máshol is megjelenik.</p><p>A blokk eredeti helye {$a->location}<br />Megjelenés oldalak típusai: {$a->pagetype}</p><p>Biztosan folytatja?</p>';
$string['deletecheck'] = 'Törli a(z) {$a} blokkot?';
$string['dockblock'] = '{$a} blokk rögzítése';
$string['hideblock'] = '{$a} blokk elrejtése';
$string['hidedockpanel'] = 'A rögzítési felület elrejtése';
$string['hidepanel'] = 'Felület elrejtése';
$string['moveblock'] = '{$a} blokk áthelyezése';
$string['moveblockafter'] = 'Blokk áthelyezése {$a} blokk mögé';
$string['moveblockbefore'] = 'Blokk áthelyezése {$a} blokk elé';
$string['moveblockinregion'] = 'Blokk áthelyezése a(z) {$a} területre';
$string['movingthisblockcancel'] = 'Ezen blokk ({$a}) áthelyezése';
$string['myblocks'] = 'Blokkjaim';
$string['onthispage'] = 'Ezen az oldalon';
$string['pagetypes'] = 'Oldaltípusok';
$string['pagetypewarning'] = 'A korábban megadott oldaltípust már nem lehet kiválasztani. Válassza ki a legmegfelelőbb oldaltípust alább.';
$string['privacy:metadata:userpref:dockedinstance'] = 'Rögzíti, mikor dokkolt a felhasználó egy blokkot';
$string['privacy:metadata:userpref:hiddenblock'] = 'Rögzíti, mikor csukott össze/rejtett el a felhasználó egy blokkot';
$string['privacy:request:blockisdocked'] = 'Jelzi, hogy dokkolták-e a blokkot';
$string['privacy:request:blockishidden'] = 'Jelzi, hogy összecsukták-e/elrejtették-e a blokkot';
$string['region'] = 'Terület';
$string['restrictpagetypes'] = 'Megjelenítés ezen oldaltípusokon';
$string['showblock'] = '{$a} blokk megjelenítése';
$string['showoncontextandsubs'] = 'Megjelenítés helye a benne lévő oldalakkal együtt: \'{$a}\'';
$string['showoncontextonly'] = 'Megjelenítés csak itt: \'{$a}\'';
$string['showonentiresite'] = 'Megjelenítés az egész portálon';
$string['showonfrontpageandsubs'] = 'Megjelenítés a kezdőoldalon és az ahhoz hozzáadott oldalakon';
$string['showonfrontpageonly'] = 'Megjelenítés csak a kezdőoldalon';
$string['subpages'] = 'Oldalak kiválasztása';
$string['thisspecificpage'] = 'Konkrétan ez az oldal';
$string['undockall'] = 'Összes kivétele a tárolóból';
$string['undockblock'] = '{$a} blokk feloldása';
$string['undockitem'] = 'Ezen tétel kivétele a tárolóból';
$string['visible'] = 'Látható';
$string['weight'] = 'Súly';
$string['wherethisblockappears'] = 'Ahol a blokk megjelenik';
