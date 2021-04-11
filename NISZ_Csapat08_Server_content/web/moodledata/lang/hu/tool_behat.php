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
 * Strings for component 'tool_behat', language 'hu', version '3.10'.
 *
 * @package     tool_behat
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aim'] = 'Ez az eszköz fejlesztőknek és tesztíróknak segít a Moodle funkcióit leíró .feature fájlok létrehozásában és automatikus futtatásában. A használható lépésdefiníciók felsorolását lásd alább';
$string['allavailablesteps'] = 'Minden elérhető lépésdefiníció';
$string['errorapproot'] = 'A(z) $CFG->behat_ionic_dirroot érvénytelen Moodle alkalmazásfejlesztői telepítésre mutat.';
$string['errorbehatcommand'] = 'Hiba a behat CLI-parancs futtatása közben. Próbálja meg kézzel CLI-ből futtatni a "{$a} --help" parancsot a további tájékozódáshoz..';
$string['errorcomposer'] = 'A szerkesztői kapcsolatok nincsenek telepítve.';
$string['errordataroot'] = 'A $CFG->behat_dataroot nincs beállítva, vagy érvénytelen.';
$string['errorsetconfig'] = 'A $CFG->behat_dataroot, $CFG->behat_prefix és a$CFG->behat_wwwroot értékeit állítsa be a config.php-ben.';
$string['erroruniqueconfig'] = 'A $CFG->behat_dataroot, $CFG->behat_prefix és a $CFG->behat_wwwroot értékeinek el kell térni a $CFG->dataroot, $CFG->prefix, $CFG->wwwroot, $CFG->phpunit_dataroot és $CFG->phpunit_prefix értékeitől.';
$string['fieldvalueargument'] = 'Mezőérték-argumentumok';
$string['fieldvalueargument_help'] = 'Az argumentumot mezőértékkel kell kitölteni. Sokféle mező létezik. Egyszerű, pl. a jelölőnégyzet, a szöveges mező, bonyolultabb pl. az adatkiválasztó. Lásd az elfogadott mezőértékek dokumentációját itt: <a href="https://docs.moodle.org/dev/Acceptance_testing" target="_blank">Elfogadhatóság ellenőrzése</a> .';
$string['giveninfo'] = 'Adottak: a környezetet beállító folyamatok';
$string['infoheading'] = 'Infó';
$string['installinfo'] = 'Telepítéshez és tesztek végrehajtásához elolvasandó: {$a}.';
$string['newstepsinfo'] = 'Új lépésdefiníciók hozzáadását lásd itt: {$a}.';
$string['newtestsinfo'] = 'Új tesztek írásához elolvasandó: {$a}.';
$string['nostepsdefinitions'] = 'Nincsenek a szűrőnek megfelelő lépésdefiníciók';
$string['pluginname'] = 'Átvételi ellenőrzés';
$string['privacy:metadata'] = 'Az Acceptance testing segédprogram semmilyen személyes adatot nem tárol.';
$string['stepsdefinitionscomponent'] = 'Terület';
$string['stepsdefinitionscontains'] = 'Tartalma';
$string['stepsdefinitionsfilters'] = 'Lépésdefiníciók';
$string['stepsdefinitionstype'] = 'Típus';
$string['theninfo'] = 'Ezután: ellenőrizze, hogy az eredmény megfelelő-e.';
$string['unknownexceptioninfo'] = 'Hiba történt a Selenium vagy a böngésző használata során. Próbálja meg frissíteni a Seleniumot. A hiba:';
$string['viewsteps'] = 'Szűrő';
$string['wheninfo'] = 'Mikor. Egy eseményt előidéző lépés';
$string['wrongbehatsetup'] = 'Hibás a behat beállítása, ezért a lépésdefiníciók nem sorolhatók föl.
Ellenőrizze, hogy:
:<ul>
<li>a $CFG->behat_dataroot, $CFG->behat_prefix és a $CFG->behat_wwwroot eltérő értékkel van-e beállítva a config.php-ben, mint a $CFG->dataroot, $CFG->prefix és $CFG->wwwroot.</li>
<li>A "{$a->behatinit}"-t a Moodle gyökérkönyvtárából futtatta-e.</li>
<li>A kapcsolatok a vendor/ alatt telepítve vannak-e és a {$a->behatcommand} rendelkezik-e futtatási jogosultságokkal.</li></ul>';
