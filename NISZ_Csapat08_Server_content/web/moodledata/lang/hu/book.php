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
 * Strings for component 'book', language 'hu', version '3.10'.
 *
 * @package     book
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addafter'] = 'Új fejezet hozzáadása';
$string['addafterchapter'] = 'Új fejezet beszúrása "{$a->title}" után';
$string['book:addinstance'] = 'Új könyv hozzáadása';
$string['book:edit'] = 'Könyv fejezeteinek szerkesztése';
$string['book:read'] = 'Könyv olvasása';
$string['book:viewhiddenchapters'] = 'Rejtett fejezetek megtekintése';
$string['chapterandsubchaptersdeleted'] = '"{$a->title}" fejezet és {$a->subchapters} alfejezetei törölve';
$string['chapterdeleted'] = '"{$a->title}" fejezet törölve';
$string['chapters'] = 'Fejezetek';
$string['chaptertitle'] = 'Fejezet címe';
$string['confchapterdelete'] = 'Biztosan törli ezt a fejezetet?';
$string['confchapterdeleteall'] = 'Biztosan törli a fejezetet annak összes alfejezetével együtt?';
$string['content'] = 'Tartalom';
$string['customtitles'] = ' Egyedi címek';
$string['customtitles_help'] = 'A fejezetcímek csak a tartalomjegyzékben ÉS a tartalom fölötti fejlécként jelennek meg automatikusan.
Az Egyedi cím bejelölése esetén a fejezetcím a tartalom fölötti fejlécként nem jelenik meg. A tartalom részeként egy másik (a fejezetcímnél nem hosszabb) címet adhat meg.';
$string['deletechapter'] = '"{$a}" fejezet törlése';
$string['editchapter'] = '"{$a}" fejezet szerkesztése';
$string['editingchapter'] = 'Fejezet szerkesztése';
$string['errorchapter'] = 'Hiba a fejezet olvasása közben.';
$string['eventchaptercreated'] = 'A fejezet elkészült';
$string['eventchapterdeleted'] = 'A fejezet törölve';
$string['eventchapterupdated'] = 'A fejezet frissítve';
$string['eventchapterviewed'] = 'A fejezetet megtekintették';
$string['hidechapter'] = '"{$a}" fejezet elrejtése';
$string['indicator:cognitivedepth'] = 'Kognitív könyv';
$string['indicator:cognitivedepth_help'] = 'Ez a jelző a tanuló által a tankönyv kapcsán elért kognitív mélységen alapul.';
$string['indicator:cognitivedepthdef'] = 'Kognitív könyv';
$string['indicator:cognitivedepthdef_help'] = 'A résztvevő az elemzési időszak alatt a Könyv tevékenységei során kognitív elfoglaltság terén ezt a százalékot érte el (Szintek - Nincs megtekintés, Megtekintés)';
$string['indicator:socialbreadth'] = 'Társas könyv';
$string['indicator:socialbreadth_help'] = 'Ez a jelző a tanuló által a tankönyv kapcsán elért kognitív mélységen alapul.';
$string['indicator:socialbreadthdef'] = 'Társas könyv';
$string['indicator:socialbreadthdef_help'] = 'A résztvevő az elemzési időszak alatt a Könyv tevékenységei során társas elfoglaltság terén ezt a százalékot érte el (Szintek - Nincs részvétel, Egyedüli részvétel)';
$string['modulename'] = 'Könyv';
$string['modulename_help'] = 'A könyv egyszerű, többoldalas, fejezetekre és alfejezetekre tagolt tananyag. Média és szöveg egyaránt szerepelhet benne.
Olvasásra szánt anyag éppúgy elhelyezhető benne, mint egy tanszéki kézikönyv vagy egy tanulói munkákat tartalmazó portfólió.';
$string['modulenameplural'] = 'Könyvek';
$string['movechapterdown'] = '"{$a}" fejezet alá mozgatás';
$string['movechapterup'] = '"{$a}" fejezet fölé mozgatás';
$string['navexit'] = 'Kilépés a könyvből';
$string['navimages'] = 'Képek';
$string['navnext'] = 'Következő';
$string['navnexttitle'] = 'Következő: {$a}';
$string['navoptions'] = 'Navigálási hivatkozások beállítási lehetőségei';
$string['navoptions_desc'] = 'A könyvoldalakon a navigálás megjelenítési lehetőségei';
$string['navprev'] = 'Előző';
$string['navprevtitle'] = 'Előző: {$a}';
$string['navstyle'] = 'Navigálás módja';
$string['navstyle_help'] = '* Képek - navigálás ikonokkal
* Szöveg - navigálás fejezetcímekkel';
$string['navtext'] = 'Szöveg';
$string['navtoc'] = 'Csak a tartalomjegyzék';
$string['nocontent'] = 'A könyv még üres.';
$string['numbering'] = 'Fejezetszámozás';
$string['numbering0'] = 'Nincs';
$string['numbering1'] = 'Számok';
$string['numbering2'] = 'Felsorolásjelek';
$string['numbering3'] = 'Behúzott';
$string['numbering_help'] = '* Nincs - a fejezetek és alfejezetek címe nem tartalmaz semmilyen formázást.
* Számok - számozza a fejezeteket és alfejezeteket (1, 1.1, 1.2, 2, ...)
* Felsorolásjelek - az alfejezetek behúzással és felsorolásjelekkel különülnek el a tartalomjegyzékben
* Behúzott -  az alfejezetek behúzással jelennek meg a tartalomjegyzékben';
$string['numberingoptions'] = 'Fejezetszámozási lehetőségek';
$string['numberingoptions_desc'] = 'Válassza ki az új könyvek esetén alkalmazandó számozási lehetőséget';
$string['page-mod-book-x'] = 'Bármely könyvmodulhoz tartozó oldal';
$string['pluginadministration'] = 'Könyvek kezelése';
$string['pluginname'] = 'Könyv';
$string['previouschapter'] = 'Előző fejezet';
$string['privacy:metadata'] = 'A könyvtevékenység modulja semmilyen személyes adatot nem tárol.';
$string['removeallbooktags'] = 'Az összes könyvcímke eltávolítása';
$string['search:activity'] = 'Könyv - tananyag adatai';
$string['search:chapter'] = 'Könyv - fejezetek';
$string['showchapter'] = '"{$a}" fejezet megjelenítése';
$string['subchapter'] = 'Alfejezet';
$string['subchapternotice'] = '(Csak ez első fejezet létrehozása után érhető el.)';
$string['subplugintype_booktool'] = 'Könyv-eszköz';
$string['subplugintype_booktool_plural'] = 'Könyv-eszközök';
$string['tagarea_book_chapters'] = 'Könyvfejezetek';
$string['tagsdeleted'] = 'A könyvcímkék eltávolítása megtörtént';
$string['toc'] = 'Tartalomjegyzék';
$string['top'] = 'fent';
