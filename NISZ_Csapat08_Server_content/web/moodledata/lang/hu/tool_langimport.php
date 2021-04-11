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
 * Strings for component 'tool_langimport', language 'hu', version '3.10'.
 *
 * @package     tool_langimport
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['downloadnotavailable'] = 'Nem sikerül a letöltő szerverhez kapcsolódni. A nyelvi csomagok nem telepíthetők vagy frissíthetők automatikusan. Töltse le a megfelelő tömörített állomány(oka)t a  <a href="{$a->src}">{$a->src}</a> címről, majd kézzel bontsa ki <code>{$a->dest}</code> adatkönyvtárába.';
$string['install'] = 'A kiválasztott nyelvi csomag(ok) telepítése';
$string['installedlangs'] = 'Telepített nyelvi csomagok';
$string['langimport'] = 'Nyelvimportáló segédeszköz';
$string['langimportdisabled'] = 'A nyelvimportálás ki van kapcsolva. Nyelvi csomagjait állományonként kézzel kell frissítenie. Ha végzett, ne felejtse kiüríteni a szöveges gyorsítótárakat.';
$string['langpackinstalled'] = 'A(z) {$a} nyelvi csomag telepítése sikerült';
$string['langpackinstalledevent'] = 'A nyelvi csomag telepítése sikerült';
$string['langpacknotremoved'] = 'Hiba történt. A(z) \'{$a}\' nyelvi csomag törlése nem teljesen sikerült. Ellenőrizze az állományokhoz kapcsolódó engedélyeket.';
$string['langpackremoved'] = 'A(z) {$a} nyelvi csomag eltávolítása megtörtént';
$string['langpackremovedevent'] = 'A nyelvi csomag eltávolítása megtörtént';
$string['langpackupdated'] = 'A(z) {$a} nyelvi csomag frissítése sikerült';
$string['langpackupdatedevent'] = 'A nyelvi csomag frissítése sikerült';
$string['langpackupdateskipped'] = 'A(z) {$a} nyelvi csomag frissítése kihagyva';
$string['langpackuptodate'] = 'A(z) {$a} nyelvi csomagja naprakész';
$string['langunsupported'] = '<p>Szervere nem teljesen támogatja az alábbi nyelveket:</p><ul>{$a->missinglocales}</ul><p>Helyettük egyes szövegek, pl. dátumok és számok formázására az általános ({$a->globallocale}) nyelvterület szabályait használja.</p>';
$string['langupdatecomplete'] = 'A nyelvi csomag frissítése befejeződött';
$string['missingcfglangotherroot'] = 'Nincs $CFG->langotherroot beállítási érték';
$string['missinglangparent'] = 'Hiányzik a(z) <em>{$a->lang}</em> nyelv <em>{$a->parent}</em> felettes nyelve.';
$string['noenglishuninstall'] = 'Az angol nyelvi csomag nem törölhető.';
$string['nolangupdateneeded'] = 'Minden nyelvi csomagja friss, frissítésre nincs szükség';
$string['pluginname'] = 'Nyelvi csomagok';
$string['privacy:metadata'] = 'A Language packs segédprogram nem tárol személyes adatokat.';
$string['purgestringcaches'] = 'Szöveges gyorsítótárak ürítése';
$string['selectlangs'] = 'Válassza ki a törölni kívánt nyelveket.';
$string['uninstall'] = 'Kiválasztott nyelvi csomag(ok) törlése';
$string['uninstallconfirm'] = 'A(z) <strong>{$a}</strong> nyelvi csomagokat teljesen eltávolítja, biztosan ezt akarja tenni?';
$string['updatelangs'] = 'Minden telepített nyelvi csomag frissítése';
