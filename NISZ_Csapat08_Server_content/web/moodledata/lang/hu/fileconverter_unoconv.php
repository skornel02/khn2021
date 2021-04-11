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
 * Strings for component 'fileconverter_unoconv', language 'hu', version '3.10'.
 *
 * @package     fileconverter_unoconv
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pathtounoconv'] = 'Útvonal az unoconv dokumentumátalakítóhoz';
$string['pathtounoconv_help'] = 'Útvonal az unoconv dokumentumátalakítóhoz. Ez olyan program, amely a LibreOffice által támogatott formátumok között tud átalakítást végezni. Használata választható, de ha meg van adva, a Moodle automatikusan ezzel végzi a dokumentumok közötti átalakítást. Számos bemeneti állományfélét támogat a PDF feladatannotálási funkciója érdekében.';
$string['pluginname'] = 'Unoconv';
$string['privacy:metadata'] = 'Az Unoconv dokumentum-átalakító segédprogram semmilyen személyes adatot nem tárol.';
$string['test_unoconv'] = 'Az unoconv útvonalának ellenőrzése';
$string['test_unoconvdoesnotexist'] = 'Az unoconv útvonala nem a programra mutat. Ellenőrizze az útvonal beállításait.';
$string['test_unoconvdownload'] = 'Töltse le a konvertált PDF-tesztfájlt.';
$string['test_unoconvempty'] = 'Az unoconv útvonala nincs beállítva. Ellenőrizze a beállításokat.';
$string['test_unoconvisdir'] = 'Az unoconv útvonala mappára mutat. Az útvonalba vegye fel az unoconv programot.';
$string['test_unoconvnotestfile'] = 'Hiányzik a PDF-be konvertálandó tesztdokumentum.';
$string['test_unoconvnotexecutable'] = 'Az unoconv útvonala nem futtatható állományra mutat.';
$string['test_unoconvok'] = 'Az unoconv útvonala megfelelő.';
$string['test_unoconvversionnotsupported'] = 'Az unoconv telepített változatát a rendszer nem támogatja. A Moodle feladatosztályozó funkciójához 0.7 vagy magasabb verzió szükséges.';
