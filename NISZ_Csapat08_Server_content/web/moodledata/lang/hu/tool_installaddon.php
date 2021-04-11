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
 * Strings for component 'tool_installaddon', language 'hu', version '3.10'.
 *
 * @package     tool_installaddon
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acknowledgement'] = 'Tudomásulvétel';
$string['acknowledgementtext'] = 'Tudomásul veszem, hogy a kiegészítő segédprogramok telepítése előtt a portálról teljes biztonsági mentést kell készítenem, mert azok biztonsági lyukakat tartalmazhatnak, elérhetetlenné tehetik a portált, illetve magánadatok kiszivárgását vagy elvesztését okozhatják.';
$string['featuredisabled'] = 'A portálon a segédprogramot telepítő modul nincs engedélyezve.';
$string['installaddon'] = 'Segédprogram telepítése!';
$string['installaddons'] = 'Segédprogramok telepítése';
$string['installfromrepo'] = 'A segédprogramokat telepítse a Moodle segédprogramjainak a könyvtárából.';
$string['installfromrepo_help'] = 'A segédprogramok kereséséhez és telepítéséhez átirányítjuk a Moodle segédprogramjainak könyvtárába. A telepítés megkönnyítéséhez elküldjük portálja teljes nevét, a  webcímet és a Moodle verziószámát.';
$string['installfromzip'] = 'Segédprogram telepítése tömörített állományból';
$string['installfromzip_help'] = 'A Moodle segédprogramjainak könyvtárából való közvetlen telepítés helyett  a segédprogramot feltöltheti becsomagolva, ha annak szerkezete megegyezik a Moodle segédprogramjainak könyvtárából letöltött csomagéval.';
$string['installfromzipfile'] = 'Tömörített csomag';
$string['installfromzipfile_help'] = 'A segédprogram tömörített csomagja csak egy, a segédprogrammal egyező nevű könyvtárat tartalmazhat. A csomagot a rendszer a segédprogram típusának megfelelő helyre csomagolja ki. Ha a segédprogramot a Moodle segédprogramjainak könyvtárából töltötte le, akkor az ilyen szerkezetű.';
$string['installfromzipinvalid'] = 'A segédprogram tömörített csomagja csak egy, a segédprogrammal egyező nevű könyvtárat tartalmazhat. Az adott fájl a segédprogram érvénytelen tömörített csomagja.';
$string['installfromziprootdir'] = 'Gyökérkönyvtár átnevezése';
$string['installfromziprootdir_help'] = 'Egyes csomagok, pl. a Github által előállítottak gyökérkönyvtárának hibás lehet a neve. Ilyen esetben a helyes nevet itt adhatja meg.';
$string['installfromzipsubmit'] = 'Segédprogram telepítése a tömörített állományból';
$string['installfromziptype'] = 'Segédprogram típusa';
$string['installfromziptype_help'] = 'A telepítő a helyes összetevőnévvel rendelkező segédprogramok típusát automatikusan azonosítja. Ha ez nem sikerül, kézzel válassza ki a telepítendő segédprogram típusát. Ha rossz típust ad meg, a telepítés sikertelen lehet.';
$string['permcheck'] = 'Válassza ki a telepítendő segédprogram helyes típusát. Ha rossz típust ad meg, a telepítés sikertelen lehet.';
$string['permcheckerror'] = 'Hiba az írási engedély ellenőrzése közben';
$string['permcheckprogress'] = 'Írási engedély ellenőrzése';
$string['permcheckrepeat'] = 'Ismételt ellenőrzés';
$string['permcheckresultno'] = 'A segédprogram típusának helye <em>{$a->path}</em> nem írható';
$string['permcheckresultyes'] = 'A segédprogram típusának helye <em>{$a->path}</em> írható';
$string['pluginname'] = 'Segédprogram-telepítő';
$string['privacy:metadata'] = 'A Plugin installer segédprogram nem tárol személyes adatokat.';
$string['remoterequestalreadyinstalled'] = '{$a->name} segédprogramot ({$a->component}) {$a->version} verzióban szeretne telepíteni a portálon a Moodle segédprogramjainak könyvtárából, miközben a segédprogram <strong>már telepítve van</strong>.';
$string['remoterequestconfirm'] = '{$a->name} segédprogramot ({$a->component}) {$a->version} verzióban szeretne telepíteni a portálon a Moodle segédprogramjainak könyvtárából. Ha folytatja, a kiegészítő csomagja ellenőrzés céljából letöltődik, de telepítésre még nem kerül sor.';
$string['remoterequestinvalid'] = '{$a->name} segédprogramot ({$a->component}) {$a->version} verzióban szeretne telepíteni a portálon a Moodle segédprogramjainak könyvtárából. Kérése érvénytelen, ezért a kiegészítő telepítésére nem kerül sor.';
$string['remoterequestnoninstallable'] = 'A  Moodle segédprogramjainak könyvtárából {$a->name} ({$a->component}) segédprogram {$a->version}  verzióját kérte telepíteni, azonban az előzetes ellenőrzés sikertelen (a hiba oka: {$a->reason}).';
$string['remoterequestpermcheck'] = '{$a->name} segédprogramot ({$a->component}) {$a->version} verzióban szeretne telepíteni a portálon a Moodle segédprogramjainak könyvtárából. A segédprogram típusának helye <strong>{$a->typepath}</strong> azonban  <strong>nem írható</strong>. Engedélyezze, majd a Folytatás gombbal ismételje meg az ellenőrzést.';
$string['remoterequestpluginfoexception'] = 'Hiba történt {$a->name} segédprogram ({$a->component}) {$a->version} verziója adatainak olvasása közben. A segédprogram nem telepíthető. Részletekért kapcsolja be a hibakeresési módot.';
$string['typedetectionfailed'] = 'A segédprogram típusát nem sikerült azonosítani. Válassza ki a segédprogram típusát.';
$string['typedetectionmismatch'] = 'A segédprogram kiválasztott típusa nem egyezik a segédprogram szerinti típussal: {$a}';
