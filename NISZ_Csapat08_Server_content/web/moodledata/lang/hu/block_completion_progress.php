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
 * Strings for component 'block_completion_progress', language 'hu', version '3.10'.
 *
 * @package     block_completion_progress
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['completed_colour'] = '#73A839';
$string['completed_colour_descr'] = 'HTML-színkód a teljesített elemek jelölésére';
$string['completed_colour_title'] = 'Teljesített elemek színe';
$string['completion_not_enabled'] = 'A teljesítés követése ezen a portálon nincs bekapcsolva.';
$string['completion_not_enabled_course'] = 'A teljesítés követése ebben a kurzusban nincs bekapcsolva.';
$string['completion_progress:addinstance'] = 'Új teljesítési szint blokkjának hozzáadása';
$string['completion_progress:myaddinstance'] = 'Új teljesítési szint blokkjának hozzáadása a Honlapomhoz';
$string['completion_progress:overview'] = 'Az összes tanuló kurzusszintű teljesítési szintjének megjelenítése';
$string['completion_progress:showbar'] = 'Haladási sáv megjelenítése a teljesítési szint blokkjában';
$string['config_activitiesincluded'] = 'Tevékenységekkel együtt';
$string['config_activitycompletion'] = 'Minden teljesítéssel rögzített tevékenység';
$string['config_default_title'] = 'Teljesítési szint';
$string['config_group'] = 'Csak csoportok és csoportosítások részére látható';
$string['config_header_monitored'] = 'Megfigyelve';
$string['config_icons'] = 'Ikonok használata az állapotjelző sávon';
$string['config_longbars'] = 'Hosszú sávok megjelenítése';
$string['config_orderby'] = 'A sáv rendezési elve';
$string['config_orderby_course_order'] = 'Rendezés a kurzusban';
$string['config_orderby_due_time'] = '{$a} dátum- és időformátum használata';
$string['config_percentage'] = 'Százalék megjelenítése a tanulók részére';
$string['config_scroll'] = 'Görgetés';
$string['config_selectactivities'] = 'Tevékenységek kiválasztása';
$string['config_selectedactivities'] = 'Kiválasztott tevékenységek';
$string['config_squeeze'] = 'Beszorít';
$string['config_title'] = 'Tartalék cím';
$string['config_wrap'] = 'Sortörés';
$string['coursenametoshow'] = 'Az irányítópulton megjelenítendő kurzuscím';
$string['defaultlongbars'] = 'Hosszú sávok alapértelmezett megjelenítése';
$string['forceiconsinbar'] = 'Ikonok kényszerített megjelenítése a sávban';
$string['fullname'] = 'Teljes kurzuscím';
$string['futureNotCompleted_colour'] = '#025187';
$string['futureNotCompleted_colour_descr'] = 'HTML-színkód a később teljesítendő elemek jelölésére';
$string['futureNotCompleted_colour_title'] = 'Később teljesítendő elemek színe';
$string['how_activitiesincluded_works'] = 'Hogyan működik a tevékenységek hozzáadása';
$string['how_activitiesincluded_works_help'] = '<p>Alapesetben a teljesítéssel beállított összes tevékenység megjelenik a sávban.</p><p>Kézzel is hozzáadhat tevékenységeket.</p>';
$string['how_group_works'] = 'Hogyan működik a látható csoport';
$string['how_group_works_help'] = '<p>Egy csoport vagy csoportosítás kiválasztása esetén csak annak tagjai láthatják ezt a blokkot.</p>';
$string['how_longbars_works'] = 'Hogy jelennek meg a hosszú sávok';
$string['how_longbars_works_help'] = '<p>Ha a sávok meghaladják a beállított hosszúságot, az alábbi módok egyikével jeleníthetők meg.</p>
<ul>
<li>Egy vízszintes sávba szorítva</li>
<li>A túlcsorduló elemek megjelenítése oldalsó görgetés használatával</li>
<li>Az összes sávszegmens megjelenítése sortöréssel, több sorban</li>
</ul>
<p>Sortörés használata esetén a MOST jelző nem jelenik meg.</p>';
$string['how_ordering_works'] = 'Hogyan működik a rendezés';
$string['how_ordering_works_help'] = '<p>Kétféleképpen rendezheti a teljesítési blokk tevékenységeit.</p>
<ul>
<li><em>"A teljesítés várható időpontja"</em> alapján (alapértelmezett)<br>A sáv méretezéséhez a tevékenységek/tananyagok várható teljesítési dátumait használja. Ahol a tevékenységeknek/tananyagoknak nincs várható teljesítési időpontja, ott a kurzuson belüli sorrendet alkalmazza. Kiválasztása esetén megjelenik a MOST jelző.</li>
<li><em>Kurzuson belüli sorrend</em> alapján<br>A tevékenységek/tananyagok a kurzuson belüli sorrendjükben jelennek meg. Ennek kiválasztása esetén a várható teljesítési időpontokat figyelmen kívül hagyja és a MOST jelző nem jelenik meg.</li>
</ul>';
$string['how_selectactivities_works'] = 'Hogyan működik a tevékenységek hozzáadása';
$string['how_selectactivities_works_help'] = '<p>A sávba illesztendő tevékenységek kézi kiválasztásához a "Hozzáadott tevékenységek" értéke legyen "kiválasztott tevékenységek".</p>
<p>Csak azok a tevékenységek adhatók hozzá, amelyekhez teljesítési határidőt lehet beállítani.</p>
<p>A CTRL/Cmd gomb lenyomásával több tevékenységet választhat ki.</p>';
$string['lastonline'] = 'Utoljára a kurzusban';
$string['mouse_over_prompt'] = 'Információ megjelenítése a sávra húzott egérmutatóra vagy érintésre.';
$string['no_activities_config_message'] = 'Nincsenek vagy nincsenek kiválasztva teljesítési időponttal rendelkező tevékenységek vagy tananyagok. A teljesítési időpontok beállítása után végezhetők el a blokk beállításai.';
$string['no_activities_message'] = 'Nincs megfigyelt tevékenység vagy tananyag. A beállítások használatával ez bekapcsolható.';
$string['no_blocks'] = 'Kurzusaihoz nincsenek beállítva teljesítési szintet jelző blokkok.';
$string['no_courses'] = 'Egy kurzust sem vett fel. Csak a felvett kurzusok teljesítési sávjai jelennek meg.';
$string['no_visible_activities_message'] = 'Jelenleg egyetlen megfigyelt tevékenység sem látható.';
$string['notCompleted_colour'] = '#C71C22';
$string['notCompleted_colour_descr'] = 'HTML-színkód a még nem teljesített elemek jelölésére';
$string['notCompleted_colour_title'] = 'Még nem teljesített elemek színe';
$string['not_all_expected_set'] = 'Nincs minden teljesítendő tevékenységhez {$a} dátum beállítva.';
$string['now_indicator'] = 'MOST';
$string['overview'] = 'Tanulók áttekintése';
$string['pluginname'] = 'Teljesítési szint';
$string['privacy:metadata'] = 'A teljesítési szint blokkja csak a meglévő teljesítési adatokat jeleníti meg.';
$string['progress'] = 'Szint';
$string['progressbar'] = 'Teljesítési szint';
$string['shortname'] = 'Rövid kurzuscím';
$string['showallinfo'] = 'Minden információ megjelenítése';
$string['showinactive'] = 'Az inaktív tanulók megjelenítése az áttekintésben';
$string['showlastincourse'] = 'A tanuló utolsó kurzusbeli részvételének a megjelenítése az áttekintésben';
$string['submitted'] = 'Leadva';
$string['submittednotcomplete_colour'] = '#FFCC00';
$string['submittednotcomplete_colour_descr'] = 'HTML-színkód a leadott, de még nem teljesített elemek jelölésére';
$string['submittednotcomplete_colour_title'] = 'Leadott, de nem teljesített elemek színe';
$string['time_expected'] = 'Elvárt';
$string['why_set_the_title'] = 'Miért érdemes átírni a blokk-példányok nevét?';
$string['why_set_the_title_help'] = '<p>Egyszerre több teljesítési szintet jelző blokk is használatban lehet. A különböző blokkok használhatók a tevékenységek különböző csoportjainak nyomon követésére, pl. az egyikkel követhető a feladatok teljesítésének a szintje, míg egy másikkal a teszteké. Ezért a blokkok alapértelmezett neve felülírható.</p>';
$string['why_show_precentage'] = 'Miért láthatják a tanulók a teljesítési szint százalékos értékét?';
$string['why_show_precentage_help'] = '<p>A tanulók részére megjeleníthető a teljes kurzusra vonatkozó előrehaladás százalékos értéke.</p><p>Ennek értéke a már teljesített tevékenységek száma elosztva a sávhoz rendelt összes tevékenység számával.</p><p>A százalékos érték addig látható, amíg a tanuló a sáv egy eleme felett tartja az egér-kurzort.</p>';
$string['why_use_icons'] = 'Miért érdemes ikonokat használni?';
$string['why_use_icons_help'] = '<p>A teljesítési szint blokkján megjeleníthetők "pipa" és "kereszt" ikonok, hogy a színtévesztők számára is értelmezhetők legyenek.</p><p>Ez a blokkok jelentését is egyértelműbbé teszi, ha a színek alkalmazása akár személyes, akár kulturális okokból nem elégséges.</p><p>';
$string['wrapafter'] = 'Sortörés esetén a sorok száma';
