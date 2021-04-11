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
 * Strings for component 'qtype_calculatedmulti', language 'hu', version '3.10'.
 *
 * @package     qtype_calculatedmulti
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['answeroptions'] = 'Választási lehetőségek';
$string['answeroptions_help'] = 'A javasolt választási képlet: ...<strong>{={x}+..}</strong>...';
$string['pluginname'] = 'Számításos feleletválasztós';
$string['pluginname_help'] = 'A számításos feleletválasztós kérdések olyan feleletválasztós kérdések, amelyekben a válaszokba kapcsos zárójelek között helyettesítő karakterekkel számítási képlet illeszthető, melyek helyére a teszt megoldása során konkrét értékek kerülnek. Ha például a kérdés a "Mekkora egy {l} hosszú és {w} széles téglalap területe?", az egyik válasz lehet a {={l}*{w}} (ahol a * a szorzást jelöli).';
$string['pluginnameadding'] = 'Számításos feleletválasztós kérdés hozzáadása';
$string['pluginnameediting'] = 'Számításos feleletválasztós kérdés szerkesztése';
$string['pluginnamesummary'] = 'A számításos feleletválasztós kérdések olyan feleletválasztós kérdések, amelyekben a válaszokba számértékek képletének eredményei illeszthetők, amelyek a teszt megoldása során egy halmazból véletlenszerűen kiválasztva konkrét értékekként kerülnek a megoldásba.';
$string['privacy:metadata'] = 'A Calculated multichoice question type segédprogram semmilyen személyes adatot nem tárol.';
