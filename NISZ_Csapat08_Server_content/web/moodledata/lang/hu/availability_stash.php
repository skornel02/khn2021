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
 * Strings for component 'availability_stash', language 'hu', version '3.10'.
 *
 * @package     availability_stash
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['condition'] = 'feltétel';
$string['description'] = 'A felhasználói gyűjteményben elérhető elem előírása a hozzáféréshez.';
$string['exactly'] = 'pontosan';
$string['lessthan'] = 'kevesebb mint';
$string['morethan'] = 'több mint';
$string['object'] = 'elem';
$string['objectnnotrequiredtogetaccess'] = 'Nincs  {$a->condition} {$a->quantity}db \'{$a->object}\' elem a gyűjteményében.';
$string['objectnrequiredtogetaccess'] = '{$a->condition} {$a->quantity}db \'{$a->object}\' elem van a gyűjteményében.';
$string['pluginname'] = 'Gyűjtemény elérhetősége';
$string['privacy:null'] = '-';
$string['quantity'] = 'mennyiség';
$string['theirstashcontains'] = 'A gyűjteményük {$a->conditions} {$a->quantity}db {$a->objects} elemet tartalmaz.';
$string['title'] = 'Gyűjteményelem';
$string['unknowncondition'] = '[Ismeretlen feltétel]';
$string['unknownobject'] = '[Ismeretlen elem]';
$string['youhavegota'] = 'Egyetlen \'{$a->object}\\ elemmel rendelkezik.';
$string['youhavegotlessthanna'] = '{$a->quantity}db \'{$a->object}\\ elemnél kevesebbel rendelkezik.';
$string['youhavegotmorethanna'] = '{$a->quantity}db \'{$a->object}\\ elemnél többel rendelkezik.';
$string['youhavegotna'] = '{$a->quantity}db \'{$a->object}\\ elemmel rendelkezik.';
$string['youhaventgota'] = 'Egyetlen \'{$a->object}\\ elemmel sem rendelkezik.';
$string['youhaventgotanya'] = 'Semennyi \'{$a->object}\\ elemmel nem rendelkezik.';
$string['youhaventgotlessthanna'] = '{$a->quantity}db \'{$a->object}\\ elemnél kevesebbel nem rendelkezik.';
$string['youhaventgotmorethanna'] = '{$a->quantity}db \'{$a->object}\\ elemnél többel nem rendelkezik.';
$string['youhaventgotna'] = '{$a->quantity}db \'{$a->object}\\ elemmel nem rendelkezik.';
