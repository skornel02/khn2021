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
 * Strings for component 'qbehaviour_adaptive', language 'hu', version '3.10'.
 *
 * @package     qbehaviour_adaptive
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['disregardedwithoutpenalty'] = 'A leadott munka érvénytelen volt: pontlevonás nélkül kihagyva.';
$string['gradingdetails'] = 'A kérdésre {$a->raw} / {$a->max} pontot kapott.';
$string['gradingdetailsadjustment'] = 'Korábbi próbálkozásokkal együtt: <strong>{$a->cur}/{$a->max}</strong>.';
$string['gradingdetailspenalty'] = 'A leadott munkához {$a} levonás tartozik.';
$string['gradingdetailspenaltytotal'] = 'Eddigi összes levonás: {$a}.';
$string['gradingdetailswithadjustment'] = 'A leadott (utolsó) válasz pontszáma {$a->raw} / {$a->max} pont. A korábbi próbálkozások beszámításával a kérdésre <strong>{$a->cur} / {$a->max}</strong> pontot kapott.';
$string['gradingdetailswithadjustmentpenalty'] = 'Leadott munkára adott osztályzatok: {$a->raw} / {$a->max}. A korábbi próbálkozások beszámításával: <strong>{$a->cur} / {$a->max}</strong>: A leadott munka levonása: {$a->penalty}.';
$string['gradingdetailswithadjustmenttotalpenalty'] = 'Leadott munkára adott osztályzatok: {$a->raw} / {$a->max}. A korábbi próbálkozások beszámításával: <strong>{$a->cur} / {$a->max}</strong>: A leadott munka levonása: {$a->penalty}. Eddigi levonások: {$a->totalpenalty}.';
$string['gradingdetailswithpenalty'] = 'A leadott munka pontszáma jelenleg: {$a->raw} / {$a->max} pont. Újrapróbálkozás esetén a hibás válasz miatti pontlevonás {$a->penalty} pont lesz.';
$string['gradingdetailswithtotalpenalty'] = 'Leadott munkára adott osztályzatok: {$a->raw} / {$a->max}. A leadott munka levonása: {$a->penalty}. Eddigi levonások: {$a->totalpenalty}.';
$string['notcomplete'] = 'Nincs befejezve';
$string['pluginname'] = 'Adaptív mód';
$string['privacy:metadata'] = 'Az Adaptive mode question behaviour segédprogram semmilyen személyes adatot nem tárol.';
