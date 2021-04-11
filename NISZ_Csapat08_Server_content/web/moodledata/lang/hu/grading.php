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
 * Strings for component 'grading', language 'hu', version '3.10'.
 *
 * @package     grading
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activemethodinfo'] = 'A(z) \'{$a->area}\' területhez aktív pontozási módszerként kiválasztott módszer a(z) \'{$a->method}\'';
$string['activemethodinfonone'] = 'A(z) \'{$a->area}\' területhez nincs kiválasztva részletesebb pontozási módszer. Az egyszerű pontozási módszer alkalmazására kerül sor.';
$string['changeactivemethod'] = 'Az aktív pontozási módszer módosítása erre';
$string['clicktoclose'] = 'lezárás kattintással';
$string['error:notinrange'] = 'Érvénytelen \'{$a->grade}\' osztályzatot adott. Az osztályzatnak 0 és {$a->maxgrade} közé kell esnie.';
$string['exc_gradingformelement'] = 'A pontozási űrlapelem nem hozható létre';
$string['formnotavailable'] = 'Részletes osztályozási módszer használatát választotta, de az osztályozási űrlap még nem elérhető. Előbb adja meg a lépések menün vagy az adminisztrációs blokk segítségével.';
$string['gradingformunavailable'] = 'Figyelem: A részletes pontozási űrlap még nem készült el. Érvényesítéséig az egyszerű pontozási módszer alkalmazására kerül sor.';
$string['gradingmanagement'] = 'Részletes pontozás';
$string['gradingmanagementtitle'] = 'Részletes pontozás
{$a->component} ({$a->area})';
$string['gradingmethod'] = 'Pontozási módszer';
$string['gradingmethod_help'] = 'Az adott környezetben a pontok kiszámításához válassza a részletes pontozási módszert.

Kikapcsolásához és az alapbeállítás szerinti pontozáshoz válassza az \'Egyszerű közvetlen pontozás\' pontot.';
$string['gradingmethodnone'] = 'Egyszerű közvetlen pontozás';
$string['gradingmethods'] = 'Pontozási módszerek';
$string['manageactionclone'] = 'Új pontozási űrlap létrehozása sablonból';
$string['manageactiondelete'] = 'Az aktuális űrlap törlése';
$string['manageactiondeleteconfirm'] = 'A(z) \'{$a->formname}\' pontozási űrlap és annak összes kapcsolódó \'{$a->component} ({$a->area}) űrlapjának törlésére készül. Gondolja végig ennek alábbi következményeit:

* A művelet visszaállítása nem lehetséges.
* Az űrlap törlése nélkül áttérhet egy másik pontozási módszerre, ideértve az egyszerű közvetlen pontozást.
* A  pontozási űrlapok kitöltésével kapcsolatos összes információ elvész.
* Az osztályozónaplóban tárolt számított eredmények nem módosulnak, viszont a kiszámításuk módja nem lesz elérhető.
* A művelet nem érinti az űrlap más tevékenységekben esetlegesen használt másolatait.';
$string['manageactiondeletedone'] = 'Az űrlap törlése sikerült.';
$string['manageactionedit'] = 'Az aktuális űrlapdefiníció szerkesztése';
$string['manageactionnew'] = 'Új pontozási űrlap definiálása sablon nélkül';
$string['manageactionshare'] = 'Az űrlap új sablonként való közzététele';
$string['manageactionshareconfirm'] = 'A(z) \'{$a}\' pontozási űrlapot új nyilvános sablonként készül elmenteni. A portál többi felhasználója tevékenységeihez új pontozási űrlapokat hozhat létre ebből a sablonból.';
$string['manageactionsharedone'] = 'Az űrlap sablonként való elmentése sikerült.';
$string['noitemid'] = 'Az osztályozás nem hajtható végre. Az osztályozási tétel nem létezik.';
$string['nosharedformfound'] = 'Nem található sablon';
$string['privacy:metadata:grading_definitions'] = 'Osztályozható területen meghatározott részletes osztályozási űrlap alapadatai.';
$string['privacy:metadata:grading_definitions:areaid'] = 'A részletes osztályozó űrlap meghatározási területének azonosítója.';
$string['privacy:metadata:grading_definitions:copiedfromid'] = 'A másolási helyen lévő osztályozási meghatározás azonosítója.';
$string['privacy:metadata:grading_definitions:description'] = 'A részletes osztályozási módszer leírása.';
$string['privacy:metadata:grading_definitions:method'] = 'A meghatározáshoz kapcsolódó osztályozási módszer.';
$string['privacy:metadata:grading_definitions:name'] = 'A részletes osztályozási meghatározás neve.';
$string['privacy:metadata:grading_definitions:options'] = 'Az osztályozási meghatározás egyes beállításai.';
$string['privacy:metadata:grading_definitions:status'] = 'A részletes osztályozási meghatározás állapota.';
$string['privacy:metadata:grading_definitions:timecopied'] = 'Az osztályozási meghatározás másolásának időpontja.';
$string['privacy:metadata:grading_definitions:timecreated'] = 'Az osztályozási meghatározás létrehozásának időpontja.';
$string['privacy:metadata:grading_definitions:timemodified'] = 'Az osztályozási meghatározás utolsó módosításának időpontja.';
$string['privacy:metadata:grading_definitions:usercreated'] = 'Az osztályozási meghatározást létrehozó felhasználó azonosítója.';
$string['privacy:metadata:grading_definitions:usermodified'] = 'Az osztályozási meghatározást utoljára módosító felhasználó azonosítója.';
$string['privacy:metadata:grading_instances'] = 'Egy értékelő által értékelt egy osztályozási tétel értékelési rekordja.';
$string['privacy:metadata:grading_instances:feedback'] = 'A felhasználó visszajelzése.';
$string['privacy:metadata:grading_instances:feedbackformat'] = 'A felhasználó visszajelzésének szöveges formája.';
$string['privacy:metadata:grading_instances:raterid'] = 'Az osztályozást értékelő felhasználó azonosítója.';
$string['privacy:metadata:grading_instances:rawgrade'] = 'Az osztályozáshoz tartozó osztályzat.';
$string['privacy:metadata:grading_instances:status'] = 'Az osztályozás állapota.';
$string['privacy:metadata:grading_instances:timemodified'] = 'Az osztályozás utolsó módosításának időpontja.';
$string['privacy:metadata:gradingformpluginsummary'] = 'Az osztályozási módszer adatai.';
$string['searchownforms'] = 'saját űrlapjaim hozzáadása';
$string['searchtemplate'] = 'Pontozási űrlapok keresése';
$string['searchtemplate_help'] = 'Itt kereshet pontozási űrlapokat, melyeket sablonként hasznosíthat az új pontozáshoz. Írjon be olyan szavakat, amelyek az űrlap nevében, leírásában vagy törzsrészében szerepelnek. Kifejezésre kereséshez használjon előtte és utána kettős idézőjelet.

Alapesetben csak a megosztott sablonként elmentett pontozási űrlapok vesznek részt a keresésben. Saját pontozási űrlapjait úgyszintén beleveheti a keresésbe. Ily módon anélkül használhatja fel pontozási űrlapjait, hogy megosztaná őket. Csak a \'Használatra kész\' megjelölésű űrlapokat használhatja fel újból.';
$string['statusdraft'] = 'Piszkozat';
$string['statusready'] = 'Használatra kész';
$string['templatedelete'] = 'Törlés';
$string['templatedeleteconfirm'] = 'A megosztott \'{$a}\' sablon törlésére készül. A sablon törlése nem érinti a belőle létrehozott sablonokat..';
$string['templateedit'] = 'Szerkesztés';
$string['templatepick'] = 'Ezzel a sablonnal';
$string['templatepickconfirm'] = 'A(z) \'{$a->formname}\' pontozási űrlapot új pontozási űrlap sablonjaként kívánja használni  \'{$a->component} ({$a->area})\' esetén?';
$string['templatepickownform'] = 'Az űrlap használata sablonként';
$string['templatesource'] = 'Hely: {$a->component} ({$a->area})';
$string['templatetypeown'] = 'Saját űrlap';
$string['templatetypeshared'] = 'Megosztott sablon';
