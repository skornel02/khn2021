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
 * Strings for component 'gradingform_guide', language 'hu', version '3.10'.
 *
 * @package     gradingform_guide
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcomment'] = 'Gyakori megjegyzés hozzáadása';
$string['addcriterion'] = 'Feltétel hozzáadása';
$string['additionalcomments'] = 'További megjegyzések';
$string['additionalcommentsforcriterion'] = 'További megjegyzések a feltételhez, {$a}';
$string['alwaysshowdefinition'] = 'Útmutató megjelenítése a tanulók számára';
$string['backtoediting'] = 'Vissza a szerkesztéshez';
$string['clicktocopy'] = 'Kattintással másolja a szöveget a feltételekkel kapcsolatos visszajelzésbe.';
$string['clicktoedit'] = 'Kattintson a szerkesztéshez';
$string['clicktoeditname'] = 'Kattintson a feltételnév szerkesztéséhez';
$string['comment'] = 'Megjegyzés';
$string['commentpickerforcriterion'] = 'Gyakran használt megjegyzések választója további {$a} megjegyzéshez';
$string['comments'] = 'Gyakori megjegyzések';
$string['commentsdelete'] = 'Megjegyzés törlése';
$string['commentsempty'] = 'Kattintson a megjegyzés szerkesztéséhez';
$string['commentsmovedown'] = 'Mozgatás lefelé';
$string['commentsmoveup'] = 'Mozgatás felfelé';
$string['confirmdeletecriterion'] = 'Biztosan törli ezt?';
$string['confirmdeletelevel'] = 'Biztosan törli ezt a szintet?';
$string['criterion'] = 'Feltétel neve';
$string['criteriondelete'] = 'Feltétel törlése';
$string['criterionempty'] = 'Kattintson a feltétel szerkesztéséhez';
$string['criterionmovedown'] = 'Mozgatás lefelé';
$string['criterionmoveup'] = 'Mozgatás felfelé';
$string['criterionname'] = 'Kritérium neve';
$string['criterionremark'] = '{$a} feltételjegyzet';
$string['definemarkingguide'] = 'Osztályozási útmutató megadása';
$string['description'] = 'Leírás';
$string['descriptionmarkers'] = 'Leírás az osztályozók számára';
$string['descriptionstudents'] = 'Leírás a tanulók számára';
$string['err_maxscoreisnegative'] = 'A maximális osztályzat érvénytelen, negatív érték nem használható.';
$string['err_maxscorenotnumeric'] = 'A maximális pontszám számjegyes feltétel';
$string['err_nocomment'] = 'A megjegyzés nem lehet üres';
$string['err_nodescription'] = 'A tanulói leírás nem lehet üres';
$string['err_nodescriptionmarkers'] = 'Az osztályozói leírás nem lehet üres';
$string['err_nomaxscore'] = 'A maximális pontszám nem lehet üres feltétel';
$string['err_noshortname'] = 'A feltételnév nem lehet üres';
$string['err_scoreinvalid'] = 'Érvénytelen pontszám {$a->criterianame} feltétel esetén, a max. pontszám {$a->maxscore}.';
$string['err_scoreisnegative'] = 'Érvénytelen pontszám {$a->criterianame} feltétel esetén,  negatív érték nem használható.';
$string['err_shortnametoolong'] = 'A kritérium neve nem lehet 256 karakternél hosszabb.';
$string['gradingof'] = '{$a} osztályozása';
$string['guide'] = 'Jegyzet mutatója';
$string['guidemappingexplained'] = 'FIGYELEM: Az osztályozási útmutató <b>{$a->maxscore} maximális pontszámot ír elő</b> de a tevékenységhez beállított  maximális pontszám {$a->modulegrade}. Az osztályozási útmutatóban megadott maximális pontszám a modul maximális pontszámához fog igazodni. <br /> A közbülső pontszámok is ennek megfelelőn változnak a legközelebbi elérhető osztályzatra kerekítve.';
$string['guidenotcompleted'] = 'Minden feltételhez érvényes osztályzatot adjon meg.';
$string['guideoptions'] = 'Osztályozási útmutató lehetőségei';
$string['guidestatus'] = 'Adott osztályozási útmutató állapota';
$string['hidemarkerdesc'] = 'Osztályozói feltételek leírásának elrejtése';
$string['hidestudentdesc'] = 'Tanulói feltételek leírásának elrejtése';
$string['informationforcriterion'] = '{$a} információ';
$string['insertcomment'] = 'Gyakran használt megjegyzés beszúrása';
$string['maxscore'] = 'Maximális pontszám';
$string['name'] = 'Név';
$string['needregrademessage'] = 'Az  osztályozási útmutató a tanuló osztályozása után módosult. A tanuló az osztályozási útmutatót csak annak ellenőrzése és az osztályzat frissítése után láthatja.';
$string['outof'] = '{$a} közül';
$string['pluginname'] = 'Osztályozási útmutató';
$string['previewmarkingguide'] = 'Osztályozási útmutató nyomtatási képe';
$string['privacy:metadata:criterionid'] = 'Azonosító a részletes értékelés kritériumához.';
$string['privacy:metadata:fillingssummary'] = 'Az értékelési útmutatóhoz adatokat tárol a felhasználó osztályzatáról és a visszajelzésről.';
$string['privacy:metadata:instanceid'] = 'Tevékenység által használt osztályzat azonosítója';
$string['privacy:metadata:preference:showmarkerdesc'] = 'Megjelenjenek-e a véleményezői feltétel leírásai';
$string['privacy:metadata:preference:showstudentdesc'] = 'Megjelenjenek-e a tanulói feltétel leírásai';
$string['privacy:metadata:remark'] = 'Az osztályozási feltételhez kapcsolódó megjegyzések';
$string['privacy:metadata:score'] = 'Az osztályozási feltételhez pontszám';
$string['regrademessage1'] = 'Már használt osztályozási útmutatót készül módosítani. Ha az osztályzatokat emiatt felül kell vizsgálni, akkor az osztályozási útmutató a tanulók elől az újrapontozásig rejtve lesz.';
$string['regrademessage5'] = 'Már használt osztályozási útmutatót készül módosítani. Az osztályzatokat emiatt nem változnak, de az osztályozási útmutató a tanulók elől az újrapontozásig rejtve lesz.';
$string['regradeoption0'] = 'Ne jelölje meg újraosztályozáshoz';
$string['regradeoption1'] = 'Jelölje meg újraosztályozáshoz';
$string['remark_help'] = 'Írjon be további megjegyzéseket a feltételhez.';
$string['restoredfromdraft'] = 'Megjegyzés: Az utolsó osztályozási próbálkozás mentése az adott személy esetén nem megfelelően ért véget, ezért a nem végleges osztályzatokat visszaállítottuk. Törléshez használja az alábbi Mégse gombot.';
$string['save'] = 'Mentés';
$string['saveguide'] = 'Osztályozási útmutató mentése és használatra való előkészítésre';
$string['saveguidedraft'] = 'Mentés piszkozatként';
$string['score'] = 'pontszám';
$string['score_help'] = 'Írjon be egy 0 és  {$a->maxscore} közötti pontszámot a(z) {$a->criterion} feltételhez.';
$string['scoreforcriterion'] = '{$a} pontszám';
$string['showmarkerdesc'] = 'Az osztályozói feltételek leírásának megjelenítése';
$string['showmarkspercriterionstudents'] = 'Feltételenkénti jegyek megjelenítése a tanulók számára';
$string['showstudentdesc'] = 'A tanulói feltételek leírásának megjelenítése';
