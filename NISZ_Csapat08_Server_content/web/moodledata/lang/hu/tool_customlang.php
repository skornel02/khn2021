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
 * Strings for component 'tool_customlang', language 'hu', version '3.10'.
 *
 * @package     tool_customlang
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['checkin'] = 'Szövegek mentése a nyelvi csomagba';
$string['checkout'] = 'Nyelvi csomag megnyitása szerkesztésre';
$string['checkoutdone'] = 'A nyelvi csomag be van töltve';
$string['checkoutinprogress'] = 'Nyelvi csomag betöltése';
$string['cliexportfileexists'] = 'A(z) {$a->lang} állománya már létezik, kihagyás. Ha felül kívánja írni, adja hozzá az --override=true opciót.';
$string['cliexportfilenotfoundforcomponent'] = 'A(z) {$a->filepath} állomány {$a->lang} nyelv esetén nem található. Az állomány kihagyva.';
$string['cliexportheading'] = 'Nyelvi állományok exportálásának indítása';
$string['cliexportnofilefoundforlang'] = 'Nincs exportálandó állomány. Az adott nyelv exportálása kihagyva.';
$string['cliexportstartexport'] = '{$a} nyelv exportálása';
$string['cliexportzipdone'] = '{$a} tömörített állománya létrehozva';
$string['cliexportzipfail'] = '{$a} tömörített állománya nem hozható létre';
$string['clifiles'] = '{$a} helyre importálandó állományok';
$string['cliimporting'] = 'Állományszöveg importálása  ({$a} mód)';
$string['climissingfiles'] = 'Érvényes állományok hiányoznak';
$string['climissinglang'] = 'Hiányzó nyelv';
$string['climissingmode'] = 'Hiányzó vagy érvénytelen mód (érvényes az összes, az új és a frissítés)';
$string['climissingsource'] = 'Hiányzó állomány vagy mappa';
$string['clinolog'] = '{$a} helyre nincs mit importálni';
$string['confirmcheckin'] = 'A módosított szövegeket helyi nyelvi csomagjában fogja rögzíteni. Ezzel az átalakított szövegek átkerülnek a fordítóból az adatkönyvtárba, a Moodle pedig a módosított szövegeket kezdi el használni. A \'Tovább\' gombra kattintva folytathatja a rögzítést.';
$string['customlang:edit'] = 'Helyi fordítás szerkesztése';
$string['customlang:export'] = 'Helyi fordítás exportálása';
$string['customlang:view'] = 'Helyi fordítás megtekintése';
$string['export'] = 'Egyedi stövegek exportálása';
$string['exportfilter'] = 'Exportálandó összetevő(k) kiválasztása';
$string['filter'] = 'Szövegek szűrése';
$string['filtercomponent'] = 'Ezen összetevők szövegeinek megjelenítése';
$string['filtercustomized'] = 'Csak az átalakított';
$string['filtermodified'] = 'Csak ebben a munkamenetben módosított';
$string['filteronlyhelps'] = 'Csak a súgó';
$string['filtershowstrings'] = 'Szövegek megjelenítése';
$string['filterstringid'] = 'Szövegazonosító';
$string['filtersubstring'] = 'Csak az ezt tartalmazó szövegek';
$string['headingcomponent'] = 'Összetevő';
$string['headinglocal'] = 'Helyi átalakítás';
$string['headingstandard'] = 'Alapszöveg';
$string['headingstringid'] = 'Szöveg';
$string['import'] = 'Egyedi szövegek importálása';
$string['import_all'] = 'Az összes szöveg összetevő(k)ből való létrehozása vagy frissítése';
$string['import_mode'] = 'Importálás módja';
$string['import_new'] = 'Csak helyi illesztés nélküli szövegek létrehozása';
$string['import_update'] = 'Csak helyi illesztésű szövegek frissítése';
$string['importfile'] = 'Állomány importálása';
$string['langpack'] = 'Nyelvi összetevő(k)';
$string['markinguptodate'] = 'Átalakítás naprakészként való megjelölése\'';
$string['markinguptodate_help'] = 'Az átalakított fordítás elavulttá válhat, ha az angol eredeti vagy az alapfordítás az adott szövegnek a portálján végrehajtott átalakítása óta módosult. Ellenőrizze az átalakított fordítást. Ha naprakésznek találja, kattintson a jelölőnégyzetre. Ha nem, írja át a szöveget.';
$string['markuptodate'] = 'megjelölés naprakészként';
$string['modifiedno'] = 'Nincs rögzítendő módosított szöveg.';
$string['modifiednum'] = '{$a} módosított szöveg fordul elő. Menti ezeket a helyi nyelvi csomagjába?';
$string['nolocallang'] = 'Nincsenek helyi szovegek';
$string['nostringsfound'] = 'Nincs szöveg, módosítsa a szűrő beállításait.';
$string['notice_ignorenew'] = 'Az illesztés nélküli  {$a->component}/{$a->stringid} szöveg figyelmen kívül hagyása';
$string['notice_ignoreupdate'] = 'A(z) {$a->component}/{$a->stringid} szöveg mint meghatározott figyelmen kívül hagyása';
$string['notice_inexitentstring'] = 'A(z) {$a->component}/{$a->stringid} szöveg nem található.';
$string['notice_missingcomponent'] = 'Hiányzó {$a->component} összetevő';
$string['notice_success'] = 'A(z) {$a->component}/{$a->stringid} szöveg frissítése sikerült.';
$string['placeholder'] = 'Helyettesítő';
$string['placeholder_help'] = 'A helyettesítők a szövegen belül található speciális utasítások, pl. \'{$a}\' vagy \'{$a->something}\'. A szöveg nyomtatása során ezek helyén értékek jelennek meg.

Fontos, hogy másolásuk az eredeti szövegével azonos formában történjék. Ne fordítsa le őket és ne módosítsa balról jobbra írásukat.';
$string['placeholderwarning'] = 'a szöveg helyettesítőt tartalmaz';
$string['pluginname'] = 'Nyelvi átalakítás';
$string['privacy:metadata'] = 'A Language customisation segédprogram semmilyen személyes adatot nem tárol.';
$string['savecheckin'] = 'Módosítások mentése a nyelvi csomagba';
$string['savecontinue'] = 'Mentés és a szerkesztés folytatása';
