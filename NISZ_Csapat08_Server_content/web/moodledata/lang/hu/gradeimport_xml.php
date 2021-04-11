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
 * Strings for component 'gradeimport_xml', language 'hu', version '3.10'.
 *
 * @package     gradeimport_xml
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['errbadxmlformat'] = 'Hiba - rossz XML-forma';
$string['errduplicategradeidnumber'] = 'Hiba – a kurzusban két osztályozási tétel szerepel \'{$a}\' azonosítószámmal. Ez így nem használható!';
$string['errduplicateidnumber'] = 'Hiba – ismétlődő azonosítószám';
$string['errincorrectgradeidnumber'] = 'Hiba – az importált állományból származó \'{$a}\' azonosítószám egyetlen osztályozási tétellel sem egyezik.';
$string['errincorrectidnumber'] = 'Hiba – téves azonosítószám';
$string['errincorrectuseridnumber'] = 'Hiba – az importált állományból származó \'{$a}\' azonosítószám egyetlen felhasználóval sem egyezik.';
$string['error'] = 'Hibák történtek';
$string['errorduringimport'] = 'Hiba {$a} importálása közben.';
$string['fileurl'] = 'Távoli állomány webcíme';
$string['fileurl_help'] = 'A távoli állomány webcímmezője távoli szerverről, pl. tanulói információs rendszerből származó adatok elérésére szolgál.';
$string['importxml'] = 'XML-importálás';
$string['importxml_help'] = 'Az osztályzatok importálhatók egy olyan XML-állományból, amely tartalmazza a felhasználók és a tevékenységek azonosítószámait. A helyes formátum megállapításához először exportáljon pár osztályzatot XML-állományba, majd vegye szemügyre az állományt.';
$string['pluginname'] = 'XML-állomány';
$string['privacy:metadata'] = 'Az Import grades from XML segédprogram semmilyen személyes adatot nem tárol.';
$string['xml:publish'] = 'XML-pontszám importálásának közzététele';
$string['xml:view'] = 'Pontok importálása XML-ből';
