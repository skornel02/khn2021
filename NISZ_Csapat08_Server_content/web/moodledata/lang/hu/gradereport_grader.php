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
 * Strings for component 'gradereport_grader', language 'hu', version '3.10'.
 *
 * @package     gradereport_grader
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['ajaxchoosescale'] = 'Választás';
$string['ajaxclicktoclose'] = 'Törléshez kattintson a négyzetre
';
$string['ajaxerror'] = 'Hiba';
$string['ajaxfailedupdate'] = '[1] nem frissíthető ezzel: [2]';
$string['ajaxfieldchanged'] = 'A szerkesztés alatti mező módosult. A frissített értéket kívánja használni?';
$string['eventgradereportviewed'] = 'Osztályozói jelentés megtekintve';
$string['grader:manage'] = 'Pontozói jelentés kezelése';
$string['grader:view'] = 'Pontozói jelentés megtekintése';
$string['overriddengrade'] = 'Felülírt osztályzat';
$string['pluginname'] = 'Pontozói jelentés';
$string['preferences'] = 'Pontozói jelentés beállításai';
$string['privacy:metadata:preference:grade_report_aggregationposition'] = 'Az osztályozó napló jelentéseiben a kategória és a kurzusösszesítő oszlopai elsőként vagy utolsóként jelenjenek meg';
$string['privacy:metadata:preference:grade_report_averagesdecimalpoints'] = 'Az átlagoknál használt tizedesjegyek száma, illetve használja-e a rendszer (örökléssel) a kategória és az osztályozási tétel globális tizedesjegy-beállítását.';
$string['privacy:metadata:preference:grade_report_averagesdisplaytype'] = 'A (közép)átlag valós osztályzatként, százalékként vagy betűként jelenjen meg, illetve használja-e a rendszer (örökléssel) a kategória és az osztályozási tétel megjelenítési típusát.';
$string['privacy:metadata:preference:grade_report_enableajax'] = 'Az oszlopműveletek egyszerűsítése és felgyorsítása végett kiegészüljön-e az osztályozó napló jelentése egy AJAX-funkciós réteggel';
$string['privacy:metadata:preference:grade_report_grader_collapsed_categories'] = 'Az osztályozó napló összecsukandó kategóriáinak felsorolása';
$string['privacy:metadata:preference:grade_report_meanselection'] = 'Az egyes kategóriák vagy osztályozási tételek átlagának kiszámításában szerepeljenek-e az osztályozást nem tartalmazó cellák';
$string['privacy:metadata:preference:grade_report_quickgrading'] = 'Megjelenjen-e minden osztályzathoz szövegbeviteli mező egyszerre több osztályzat szerkesztése érdekében';
$string['privacy:metadata:preference:grade_report_rangesdecimalpoints'] = 'Az egyes tartományokban megjelenítendő tizedesjegyek száma, illetve a kategória vagy osztályozási tétel globális beállítását használja inkább (öröklés)';
$string['privacy:metadata:preference:grade_report_rangesdisplaytype'] = 'A tartományok valós osztályzatok, százalékok vagy betűk  formájában jelenjen meg, vagy inkább a kategória típusa vagy az osztályozási tétel szerepeljen inkább (öröklés)';
$string['privacy:metadata:preference:grade_report_showactivityicons'] = 'A tevékenységnevek mellett látsszanak-e azok ikonjai';
$string['privacy:metadata:preference:grade_report_showanalysisicon'] = 'Alapesetben látsszon-e az osztályzat elemzés ikonja. Ha a tevékenységmodul ezt támogatja, az ikon átvisz egy oldalra, amely részletes magyarázatot ad az osztályzatról és megszerzésének a módjáról.';
$string['privacy:metadata:preference:grade_report_showaverages'] = 'Jelenjen-e meg minden kategóriához és osztályozási tételhez egy átlagot tartalmazó külön sor';
$string['privacy:metadata:preference:grade_report_showcalculations'] = 'Szerkesztés bekapcsolásakor osztályozási tétel számítása közben jelenjen-e meg minden kategóriához és osztályozási tételhez egy számológépikon';
$string['privacy:metadata:preference:grade_report_showeyecons'] = 'Minden osztályzathoz jelenjen-e meg egy megjelenítés/elrejtés ikon a tanulói láthatóság szabályozásához';
$string['privacy:metadata:preference:grade_report_showlocks'] = 'Szerkesztés bekapcsolásakor minden osztályzathoz jelenjen-e meg egy zárás/nyitás ikon, ha az osztályzatot a kapcsolódó tevékenység automatikusan frissítheti';
$string['privacy:metadata:preference:grade_report_shownumberofgrades'] = 'Átlagszámítás során megjelenjen-e zárójelben minden átlag után az osztályzatok száma';
$string['privacy:metadata:preference:grade_report_showonlyactiveenrol'] = 'Az osztálynapló jelentésében csak az aktív beiratkozott (nem felfüggesztett) felhasználók látsszanak, vagy az összes beiratkozott felhasználó';
$string['privacy:metadata:preference:grade_report_showquickfeedback'] = 'Jelenjen-e meg minden osztályzathoz egy pontozott szegélyű, visszajelzés szövegét rögzítő négyzet, mellyel több osztályzathoz kapcsolódó visszajelzést szerkeszthet egy időben';
$string['privacy:metadata:preference:grade_report_showranges'] = 'Jelenjen-e meg minden kategóriához és osztályozási tételhez egy tartományt tartalmazó külön sor';
$string['privacy:metadata:preference:grade_report_showuserimage'] = 'Látsszon-e a felhasználó neve mellett a profilképe';
$string['privacy:metadata:preference:grade_report_studentsperpage'] = 'Az osztályozó jelentésében oldalanként látható tanulók száma';
$string['privacy:request:preference:grade_report_grader_collapsed_categories'] = 'A(z) "{$a->name}" kurzusban egyes osztálynapló-kategóriák be vannak csukva';
$string['summarygrader'] = 'Táblázat első oszlopában a tanulók nevével, fent kurzusonkénti és kategóriánkénti értékelhető tevékenységekkel.';
$string['useractivityfeedback'] = '{$a} visszajelzés';
$string['useractivitygrade'] = '{$a} osztályzat';
