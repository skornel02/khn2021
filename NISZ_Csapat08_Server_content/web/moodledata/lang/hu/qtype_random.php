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
 * Strings for component 'qtype_random', language 'hu', version '3.10'.
 *
 * @package     qtype_random
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['configselectmanualquestions'] = 'A véletlen kérdéstípus választhat-e kézi osztályozású kérdést, ha egy kategória kérdését véletlenszerűen választja ki?';
$string['includingsubcategories'] = 'Alkategóriák szerepeltetése';
$string['pluginname'] = 'Véletlen';
$string['pluginname_help'] = 'A véletlen kérdés nem kérdéstípus, hanem egy adott kategóriából véletlenszerűen kiválasztott kérdések tesztbe illesztésének módja.';
$string['pluginnameediting'] = 'Véletlen kérdés szerkesztése';
$string['privacy:metadata'] = 'A Random question type segédprogram semmilyen személyes adatot nem tárol.';
$string['randomqname'] = 'Véletlen ({$a})';
$string['randomqnamefromtop'] = 'Hibás véletlenszerű kérdés. Törölje a kérdést!';
$string['randomqnamefromtoptags'] = 'Hibás véletlenszerű kérdés! Törölje!';
$string['randomqnametags'] = 'Véletlenszerű ({$a->category}, címke: {$a->tags})';
$string['randomqplusname'] = 'Véletlen ({$a} és alkategóriái)';
$string['randomqplusnamecourse'] = 'Véletlenszerű (a kurzus bármely kategóriája)';
$string['randomqplusnamecoursecat'] = 'Véletlenszerű (a {$a} kurzuskategória bármely kategóriája)';
$string['randomqplusnamecoursecattags'] = 'Véletlenszerű (bármely kategória {$a->category} kurzuskategória alatt, címke: {$a->tags})';
$string['randomqplusnamecoursetags'] = 'Véletlenszerű (bármely kategória a kurzusban, címke: {$a->tags})';
$string['randomqplusnamemodule'] = 'Véletlenszerű (a teszt bármely kategóriája)';
$string['randomqplusnamemoduletags'] = 'Véletlenszerű (bármely kategória a tesztben, címke: {$a->tags})';
$string['randomqplusnamesystem'] = 'Véletlenszerű (bármely rendszerszintű kategória)';
$string['randomqplusnamesystemtags'] = 'Véletlenszerű (bármely rendszerszintű kategória, címke: {$a->tags})';
$string['randomqplusnametags'] = 'Véletlenszerű ({$a->category} és alkategória, címke: {$a->tags})';
$string['selectedby'] = '{$a->questionname} nevű kérdést választotta ki {$a->randomname}';
$string['selectmanualquestions'] = 'A véletlen kérdések használhatnak kézi osztályozású kérdéseket.';
$string['taskunusedrandomscleanup'] = 'Nem használt véletlenszerű kérdések eltávolítása';
