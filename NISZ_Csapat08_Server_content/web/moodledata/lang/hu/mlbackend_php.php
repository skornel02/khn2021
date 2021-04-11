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
 * Strings for component 'mlbackend_php', language 'hu', version '3.10'.
 *
 * @package     mlbackend_php
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['datasetsizelimited'] = 'Mérete miatt az értékelési adatkészletnek csak egy része értékelődött. Állítsa be a $CFG->mlbackend_php_no_memory_limit értéket, ha biztos abban, hogy rendszere {$a} adatkészlettel megbirkózik';
$string['errorcantloadmodel'] = 'Nem létezik {$a} modellállomány. Előrejelzés előtt ellenőrizze, hogy a modellt betanították-e.';
$string['errorlowscore'] = 'A kiértékelt modell-előrejelzés pontossága nem túl magas, egyes előrejelzések pontatlanok lehetnek. Model pontszáma = {$a->score}, minimális pontszám = {$a->minscore}';
$string['errornotenoughdata'] = 'Ezzel az elemzési időszakkal a modell értékeléséhez kevés az adat.';
$string['errornotenoughdatadev'] = 'Az értékelési eredmények túl változékonyak, több adat összegyűjtésével biztosíthatja a modell érvényességét. Az értékelési eredmények standard eltérése = {$a->deviation}, maximális ajánlott standard eltérés = {$a->accepteddeviation}';
$string['errorphp7required'] = 'A PHP gépi tanulási háttéreszközhöz PHP 7 szükséges';
$string['pluginname'] = 'PHP gépi tanulási háttéreszköz';
$string['privacy:metadata'] = 'A PHP machine learning backend segédprogram semmilyen személyes adatot nem tárol.';
