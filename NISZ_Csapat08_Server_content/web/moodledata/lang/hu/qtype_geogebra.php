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
 * Strings for component 'qtype_geogebra', language 'hu', version '3.10'.
 *
 * @package     qtype_geogebra
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addconstraints'] = 'Határértékek (feltételek) változókhoz adása.';
$string['addmorevarblanks'] = 'Üres hely további {no} változóhoz';
$string['answerinvalid'] = 'A visszatérő információban a válasz karakterlánca érvénytelen. Ennek nem szabadna megtörténnie.';
$string['answermissing'] = 'A visszatérő információból hiányzik a felelet. Valószínűleg a böngészőben ki van kapcsolva a JavaScript, vagy más, ismeretlen hiba történt.';
$string['answervar'] = 'Változók az automatikus osztályozáshoz';
$string['answervar_help'] = 'Az automatikus osztályozáshoz: egy logikai objektum neve a GeoGebra-ban, amely igaz, ha a tanuló a kérdést (legalább részben) megoldotta. Összegzi az összes osztályzatot az összes logikai változóval. Helyes a megoldás, ha bármelyik kombináció meghaladja a 100%-t, de legyen legalább egy olyan kombináció, amely pontosan 100%-t tesz ki. Kézi osztályozáshoz hagyja üresen.';
$string['applet_advanced_settings'] = 'További beállítások…';
$string['constraints'] = 'Határértékek (kondíciók)';
$string['constraints_help'] = 'Van olyan, változókra vonatkozó kondíció (mint például a < b), amelyet nem lehet a csúszkákkal megadni? A támogatott szimbólumok: <, <=, >=, >, vesszővel elválasztva. Ha egyenlőségre van szükség, ugyanazt a változót kell használni a GeoGebra munkalap létrehozásakor. A dinamikus tartományok, azaz min / max csúszkák változókkal történő használata nem támogatott.';
$string['constraintswrongortoohard'] = 'A(z) {$a->inequalities} tévesek vagy túl nehezen teljesíthetők, {$a->time} másodperc alatt {$a->try} alkalommal, puszta erőből (brute force) tett kísérlet ellenére. Lehet, hogy a jövőben jobb módszert fogunk használni…';
$string['dragndrop'] = 'A GeoGebra állomány a GeoGebra kisalkalmazás területén bárhová behúzható';
$string['enable_label_drags'] = 'Címkék elhúzásának engedélyezése';
$string['enable_right_click'] = 'Jobb egérgombos kattintás és billentyűzettel történő szerkesztés engedélyezése';
$string['enable_shift_drag_zoom'] = 'Shift-húzás és nagyítás engedélyezése';
$string['feedback'] = 'Visszajelzés, ha a változó igaz értéket vesz fel';
$string['feedback_help'] = 'A visszajelzés automatikusan kiemelve a GeoGebra állományban lévő változó feliratából.';
$string['geogebraapplet'] = 'GeoGebra kisalkalmazás';
$string['getvars'] = 'Olyan, a kisalkalmazásból származó változók megszerzése, melyek véletlen értéket is felvehetnek';
$string['ggbfilemissing'] = 'A visszatérő információból hiányzik a base64 karakterlánc. Valószínűleg a böngészőben ki van kapcsolva a JavaScript, vagy más, ismeretlen hiba történt.';
$string['ggbturl'] = 'A GeoGebra munkalap azonosítója vagy webcíme';
$string['ggbturl_help'] = 'Használható a megosztás gomb a GeoGebra-ban, a GeoGebra tároló, vagy beilleszthető egy máshonnan másolt hivatkozás. A kisalkalmazás és a paraméterek az adatbázisban tárolódnak, a kisalkalmazás csak akkor töltődik be újra a GeoGebra alkalmazásból, ha erre kérés érkezik. Csak a kisalkalmazás azonosítójának vagy megosztási kulcsának a megadása szintén támogatott.';
$string['ggbxmlmissing'] = 'A visszatérő információból hiányzik az XML karakterlánc. Valószínűleg a böngészőben ki van kapcsolva a JavaScript, vagy más, ismeretlen hiba történt.';
$string['invalidinequality'] = '{$a} érvénytelen';
$string['isexercise'] = 'GeoGebra-Gyakorlat használata a kérdés ellenőrzéséhez';
$string['isexercise_help'] = 'A kisalkalmazás a felhasználó által megadott eszközöket tartalmaz, amelyek automatikusan ellenőrizni tudják a gyakorlást.\\nFigyelem: a lenti válaszok egyike sem érvényes erre a feladatra!';
$string['israndomized'] = 'Van olyan változó, amelynek véletlen értéket kell felvennie?';
$string['loadapplet'] = 'A kisalkalmazás (ismételt) betöltése és megjelenítése';
$string['loadapplet_help'] = 'A kisalkalmazás (ismételt) betöltése a GeoGebrából és az új verzió tárolása az adatbázisban.';
$string['mineqmax'] = 'A(z) {a} véletlenszerű változóra vonatkozó minimum és maximum értékek nem megfelelően vannak meghatározva: vagy nincs megadva a csúszka két határértéke, vagy az elem egyáltalán nem csúszka. Ezt valószínűleg a GeoGebra állományban kell kijavítani.';
$string['minplusstepgtmax'] = 'A(z) {a} változóra vonatkozó minimális érték és lépésköz összege nagyobb a maximális értéknél. Ezt valószínűleg a GeoGebra állományban kell kijavítani.';
$string['noappletloaded'] = 'A kisalkalmazás nincs betöltve! Ellenőrizni kell a webcímet, és hogy látható-e a kisalkalmazás egy link kiválasztása vagy a kisalkalmazás (ismételt) betöltése után';
$string['nofractionsumeq1'] = 'Az osztályzatok legalább egy kombinációjának 100%-ot kell kiadnia';
$string['pluginname'] = 'GeoGebra';
$string['pluginname_help'] = 'Kérdések, melyekre a tanulók a GeoGebra használatával felelhetnek.';
$string['pluginnameadding'] = 'GeoGebra kérdés hozzáadása';
$string['pluginnameediting'] = 'GeoGebra kérdés szerkesztése';
$string['pluginnamesummary'] = 'A számítást igénylő kérdések változatai, amelyek a GeoGebrát használják a kérdés megjelenítéséhez és a válasz azonnali ellenőrzéséhez.';
$string['randomizedbutnovars'] = 'Az a lehetőség van kiválasztva, hogy a kérdésnek véletlenszerű számokat kell tartalmaznia, de nincs meghatározva érvényes változó, amely ilyen értéket vehetne fel.';
$string['randomizedvar'] = 'Véletlenszerűnek szánt változók';
$string['randomizedvar_help'] = 'A véletlenszerű értéket felvevő változók vesszővel elválasztott listája. A GeoGebra csúszka opcióival deklarálhatók a határértékek és a lépésköz. Ezek a változók kapcsos zárójelekkel közrefogva a kérdés szövegében is felhasználhatók, például: {a}';
$string['show_algebra_input'] = 'Beviteli terület megjelenítése';
$string['show_menu_bar'] = 'Menü megjelenítése';
$string['show_reset_icon'] = 'Konstrukció-visszaállító ikon megjelenítése';
$string['show_tool_bar'] = 'Eszköztár megjelenítése';
$string['stepzero'] = 'A(z) {a} változóra vonatkozó lépésköz értéke 0: vagy nincs megadva a csúszka lépésköze, vagy az elem egyáltalán nem csúszka. Ezt valószínűleg a GeoGebra állományban kell kijavítani.';
$string['useafile'] = '… vagy egy ggb állomány használata';
$string['valuecheckedfor'] = 'A GeoGebrában használt logikai objektum, mely a pontos válasz ellenőrzésére szolgál.';
$string['variablenamewrong'] = 'A megadott néven nem található változó a GeoGebra állományban.';
$string['variableno'] = '{a} változó';
$string['variables'] = 'Változók';
$string['willbereadfromfile'] = 'A GeoGebrából lesz kiolvasva (súgó gomb)';
