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
 * Strings for component 'tool_filetypes', language 'hu', version '3.10'.
 *
 * @package     tool_filetypes
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addfiletypes'] = 'Új állománytípus hozzáadása';
$string['corestring'] = 'Alternatív nyelvi változat';
$string['corestring_help'] = 'A beállítással alternatív nyelvi változat választható ki az alap mimetypes.php nyelvi állományból. Általában hagyja üresen. Egyedi típusokhoz használja a leírási mezőt.';
$string['defaulticon'] = 'MIME-típus alapikonja';
$string['defaulticon_help'] = 'Ha egy MIME-típushoz több kiterjesztés létezik, válassza ezt az egyikhez a típusból való ikon-meghatározáshoz.';
$string['delete_confirmation'] = 'Biztosan törlendő ez: <strong>.{$a}</strong>?';
$string['deletea'] = '{$a} törlendő';
$string['deletefiletypes'] = 'Állománytípus törlése';
$string['description'] = 'Egyedi leírás';
$string['description_help'] = 'Állománytípus egyszerű leírása, pl. &lsquo;Kindle ebook&rsquo;. Ha portálja több nyelvet támogat és ehhez nyelvi szűrőt használ, a mezőben több címkét megadhat az egyes leírásokhoz.';
$string['descriptiontype'] = 'Leírás típusa';
$string['descriptiontype_custom'] = 'Egyedileg megadott leírás';
$string['descriptiontype_default'] = 'alap (MIME-típus vagy nyelvi kifejezés, ha van)';
$string['descriptiontype_help'] = 'Háromféleképpen adhat meg leírást.

* Alap, MIME-típus használatával. Ha van neki megfelelő kifejezés a mimetypes.php állományban, akkor az lesz használatos, egyébként maga a MIME-típus lesz látható
* Az űrlapon egyedi leírást adhat meg
* A MIME-típus helyett megadhatja a mimetypes.php állományban használandó nyelvi kifejezés nevét.';
$string['descriptiontype_lang'] = 'Alternatív nyelvi változat (a mimetypes.php állományból)';
$string['displaydescription'] = 'Leírás';
$string['editfiletypes'] = 'Meglévő állománytípus szerkesztése';
$string['emptylist'] = 'Nincs megadva állománytípus.';
$string['error_addentry'] = 'Az állománytípus kiterjesztése, leírása, MIME-típusa és ikonja nem tartalmazhat soremelés és pontosvessző karaktert.';
$string['error_defaulticon'] = 'Másik kiterjesztés van megadva alapikonként ugyanahhoz a MIME-típushoz.';
$string['error_extension'] = 'A(z)  <strong>{$a}</strong> állománytípus-kiterjesztés már létezik vagy érvénytelen. A kiterjesztés csak egyedi lehet, és nem tartalmazhat speciális karaktereket.';
$string['error_notfound'] = 'A(z)  {$a} állománytípus-kiterjesztés nem található.';
$string['extension'] = 'Kiterjesztés';
$string['extension_help'] = 'Állománynév-kiterjesztés pont nélkül, pl. &lsquo;mobi&rsquo;';
$string['groups'] = 'Típuscsoportok';
$string['groups_help'] = 'A típust magában foglaló állománytípus-csoportok választható listája. Ezek alapkategóriák, pl.  &lsquo;document&rsquo; és &lsquo;image&rsquo;.';
$string['icon'] = 'Állományikon';
$string['icon_help'] = 'Állománynév ikonja

A Moodle  /pix/f mappájában szereplőikonok felsorolása. Ha szükséges, hozzáadhat egyedi ikonokat a mappához.';
$string['mimetype'] = 'MIME-típus';
$string['mimetype_help'] = 'Az állománytípushoz kapcsolódó MIME-típus, pl.  &lsquo;application/x-mobipocket-ebook&rsquo;';
$string['pluginname'] = 'Állománytípusok';
$string['privacy:metadata'] = 'A File types segédprogram nem tárol személyes adatokat.';
$string['revert'] = '{$a} visszaállítása a Moodle szerinti alaphelyzetbe';
$string['revert_confirmation'] = 'Biztosan elveti a módosításokat és visszaállítja a(z) <strong>.{$a}</strong>-t a Moodle szerinti alaphelyzetbe?';
$string['revertfiletype'] = 'Állománytípus visszaállítása';
$string['source'] = 'Típus';
$string['source_custom'] = 'Egyedi';
$string['source_deleted'] = 'Törölve';
$string['source_modified'] = 'Módosítva';
$string['source_standard'] = 'Standard';
