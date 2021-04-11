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
 * Strings for component 'profilefield_conditional', language 'hu', version '3.10'.
 *
 * @package     profilefield_conditional
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['apply'] = 'Rendben';
$string['conditionalhelp'] = 'Hogyan adjuk meg a lehetőségeket?';
$string['conditionalhelp_help'] = 'Pontosítsa a menü lehetőségeit, soronként egyet megadva. Utána adhatja meg, hogy melyik mezőnek kell láthatónak vagy rejtettnek lennie, ha kiválasztják az adott értéket ebből a legördülőből.';
$string['configurecondition'] = 'Feltételek beállítása';
$string['emptycondition'] = 'A feltételeket be kell állítani.';
$string['extradata'] = 'A megadott adat olyan mezők értékeit tartalmazza, amelyeket az itt választott lehetőség alapján üresen kell hagyni.';
$string['hidden'] = 'Rejtett';
$string['hiddeninitially'] = 'Alapesetben rejtett';
$string['hiddeninitially_help'] = '* Igen - Alapesetben egyik olyan mező sem látszik, amelynek a megjelenése feltételhez kötött. Egyes mezők csak akkor jelennek meg, ha a felhasználó előbb választ egy lehetőséget.
* Nem - Alapesetben minden mező látszik. Ha a felhasználó választ egy lehetőséget a feltételes mezőhöz, egyes mezők láthatatlanok lesznek.';
$string['hiddenrequired'] = 'Legalább egy mező rejtettre, ugyanakkor kitöltendőre van állítva!';
$string['menuoption'] = 'Menüpont';
$string['notaprofilefield'] = 'A feltételrendszerben hivatkozott egyes mezők nem léteznek. Pontosítsa a feltételeket! Ne felejtse el megnyomni a "Rendben" gombot, ha a beállítást megfelelőnek találja.';
$string['notice'] = 'Figyelem, több feltételes mező ellentmondásokat okozhat! Rejtett kitöltendő mezők akadályozhatják a leadást. Ennek megelőzése érdekében ellenőrizze, hogy a felhasználók nem kerülnek-e olyan helyzetbe, ahol egy feltételesen megjelenő mező egyrészt kitöltendő, másrészt rejtett.';
$string['optionconditionmismatch'] = 'Módosította a menüpontokat a feltételek legutóbbi beállítása óta. Ellenőrizze, hogy a feltételei naprakészek-e!';
$string['pluginname'] = 'Feltételes mező';
$string['required'] = 'Kitöltendő';
$string['requiredbycondition1'] = 'Ez a mező nem lehet üres, ha a {$a->field1} mező értéke {$a->value1}';
$string['requiredbycondition2'] = 'Töltse ki a(z) {$a->field2} mezőt! A kiválasztott érték miatt nem lehet üres.';
