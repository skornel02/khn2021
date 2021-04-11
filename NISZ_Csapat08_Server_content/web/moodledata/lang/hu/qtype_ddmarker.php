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
 * Strings for component 'qtype_ddmarker', language 'hu', version '3.10'.
 *
 * @package     qtype_ddmarker
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmoreitems'] = 'Üres hely további {no} jelölőhöz';
$string['alttext'] = 'Vagylagos szöveg';
$string['answer'] = 'Válasz';
$string['bgimage'] = 'Háttérkép';
$string['clearwrongparts'] = 'Hibásan elhelyezett jelölők visszahelyezése a kép alatti kiinduló helyzetbe';
$string['coords'] = 'Koordináták';
$string['correctansweris'] = 'A helyes válasz: {$a}';
$string['draggableimage'] = 'Elhúzható kép';
$string['draggableitem'] = 'Elhúzható elem';
$string['draggableitemheader'] = '{$a} elhúzható elem';
$string['draggableitemtype'] = 'Típus';
$string['draggableword'] = 'Elhúzható szöveg';
$string['dropbackground'] = 'Háttérkép a jelölők elhúzásához';
$string['dropzone'] = '{$a} célzóna';
$string['dropzoneheader'] = 'Célzónák';
$string['dropzones'] = 'Célzónák';
$string['dropzones_help'] = 'A célzónákat koordinátákkal adhatja meg, vagy a fenti előnézetben helyükre húzhatja őket.

Ha először formát (kör, négyszög vagy sokszög) választ, az előnézet bal felső részéhez egy új célzónát ad hozzá. Célszerű kicsire állítani a Jelölők részt, így a célzónák szerkesztése alatt látható lesz az előnézet.

Forma szerkesztéséhez előnézetben kattintson a formára a kezelők megjelenítéséhez. A formát a középső kezelővel mozgathatja, vagy a csúcsos kezelőkkel módosíthatja a méretét.

Sokszögek esetén ha lenyomva tartja a vezérlő gombot (Mac esetén a parancsgombot), a csúcsos vezérlőre kattintva új csúcsot adhat a sokszöghöz. Igyekezzen minél egyszerűbb, keresztező vonalaktól mentes alakzatot használni.

Tájékoztatásul a három forma a koordinátákat az alábbiak szerint használja:<br />
 * Kör: x_közepe, y_közepe; sugár<br />pl.: <code>80, 100; 50</code><br />
* Négyszög: bal_fölső_x, bal_fölső_y; szélesség, magasság<br />pl.: <code>20, 60; 80, 40</code>
* Sokszög: x1, y1; x2, y2; ...; xn, yn<br />pl.:  <code>20, 60; 100, 60; 20, 100</code>

Jelölőszöveg kiválasztása esetén előnézetben a formához hozzáadja a szöveget.';
$string['followingarewrong'] = 'Ezek a jelölők rossz területre kerültek:  {$a}.';
$string['followingarewrongandhighlighted'] = 'Ezek a jelölők rossz területre kerültek:  {$a}. A kiemelt(ek) most megfelelő helyen van(nak)..<br /> Az engedélyezett terület kiemeléséhez kattintson a jelölőre.';
$string['formerror_nobgimage'] = 'A célterület hátteréhez válasszon képet.';
$string['formerror_noitemselected'] = 'Célzónát adott meg, de nem választott a zónába húzandó jelölőt.';
$string['formerror_nosemicolons'] = 'A koordinátákat nem választja el pontosvessző. Egy {$a->shape} esetén a koordinátákat így kell megadni - {$a->coordsstring}.';
$string['formerror_onlysometagsallowed'] = 'Jelölőcímke esetén csak  "{$a}" használható.';
$string['formerror_onlyusewholepositivenumbers'] = 'Pozitív egész számokkal adja meg a  koordinátákat és a méretet. Egy {$a->shape} esetén a koordinátákat így kell megadni - {$a->coordsstring}.';
$string['formerror_polygonmusthaveatleastthreepoints'] = 'Sokszöghöz legalább 3 pontot kell megadnia. Egy {$a->shape} esetén a koordinátákat így kell megadni - {$a->coordsstring}.';
$string['formerror_repeatedpoint'] = 'Kétszer adta meg ugyanazt a koordinátát. Egy {$a->shape} esetén a koordinátákat így kell megadni - {$a->coordsstring}.';
$string['formerror_shapeoutsideboundsofbgimage'] = 'A megadott alak túlnyúlik a háttérképen.';
$string['formerror_toomanysemicolons'] = 'Túl sok pontosvessző választja el a koordinátákat. Egy {$a->shape} esetén a koordinátákat így kell megadni - {$a->coordsstring}.';
$string['formerror_unrecognisedwidthheightpart'] = 'Hibás a szélesség és a magasság. Egy {$a->shape} esetén a koordinátákat így kell megadni - {$a->coordsstring}.';
$string['formerror_unrecognisedxypart'] = 'Hibásak az x,y koordináták. Egy {$a->shape} esetén a koordinátákat így kell megadni - {$a->coordsstring}.';
$string['infinite'] = 'Végtelen';
$string['marker'] = 'Jelölő';
$string['marker_n'] = '{no} jelölő';
$string['markers'] = 'Jelölők';
$string['nolabel'] = 'Nincs címkeszöveg';
$string['noofdrags'] = 'Szám';
$string['pleasedragatleastonemarker'] = 'Válasza hiányos, legalább egy jelölőt tegyen a képre.';
$string['pluginname'] = 'Elhúzható jelölők';
$string['pluginname_help'] = 'Elhúzható jelölők esetén a szövegcímkéket a háttérképen megadott célzónákba kell ejteni.';
$string['pluginnameadding'] = 'Elhúzható jelölők hozzáadása';
$string['pluginnameediting'] = 'Elhúzható jelölők szerkesztése';
$string['pluginnamesummary'] = 'Jelölők elhúzása a háttérképre.

Megjegyzés: a kérdéstípust látáskorlátozott felhasználók nem használhatják.';
$string['previewareaheader'] = 'Előnézet';
$string['previewareamessage'] = 'Válasszon háttérképet, adja meg a jelölők szövegcímkéit és a háttérképen adja meg ezek célzónáit.';
$string['privacy:metadata'] = 'A Drag and drop markers question type segédprogram semmilyen személyes adatot nem tárol.';
$string['refresh'] = 'Előnézet frissítése';
$string['shape'] = 'Alakzat';
$string['shape_circle'] = 'Kör';
$string['shape_circle_coords'] = 'x,y;r (az x,y a kör középpontjának x és y koordinátája, az r pedig a sugara)';
$string['shape_circle_lowercase'] = 'kör';
$string['shape_polygon'] = 'Sokszög';
$string['shape_polygon_coords'] = 'x1,y1;x2,y2;x3,y3;x4,y4....(ahol az x1, y1 az első csúcs x és y koordinátája, az x2, y2 a másodiké stb. A sokszög lezárásához nem kell megismételni az első csúcs koordinátáit)';
$string['shape_polygon_lowercase'] = 'sokszög';
$string['shape_rectangle'] = 'Négyszög';
$string['shape_rectangle_coords'] = 'x,y;w,h (ahol az x,y a négyszög bal fölső sarkának az x és y koordinátája, a w a szélessége és a h a magassága)';
$string['shape_rectangle_lowercase'] = 'négyszög';
$string['showmisplaced'] = 'Jelölje ki azokat a célzónákat, amelyekbe nem a megfelelő jelölő került.';
$string['shuffleimages'] = 'Elhúzható elemek összekeverése minden próbálkozás alkalmával';
$string['stateincorrectlyplaced'] = 'Adja meg, mely jelölők kerültek rossz helyre.';
$string['summariseplace'] = '{$a->no}. {$a->text}';
$string['summariseplaceno'] = '{$a} célzóna';
$string['ytop'] = 'Fent';
