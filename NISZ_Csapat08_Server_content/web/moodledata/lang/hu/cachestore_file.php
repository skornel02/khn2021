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
 * Strings for component 'cachestore_file', language 'hu', version '3.10'.
 *
 * @package     cachestore_file
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['autocreate'] = 'Könyvtár automatikus létrehozása';
$string['autocreate_help'] = 'Bekapcsolása esetén az útvonalban megadott könyvtár - ha még nem létezik - automatikusan létrejön.';
$string['path'] = 'Gyorsítótár útvonala';
$string['path_help'] = 'Gyorsítótárban tárolandó fájlok könyvtára. Ha üresen hagyja, a moodledata könyvtárban automatikusan létrehoz egy könyvtárat. Ezzel egy gyorsabb meghajtón (pl. a memóriában) lévő könyvtár fájltárolójára mutathat.';
$string['pluginname'] = 'Fájl gyorsítótára';
$string['prescan'] = 'Könyvtár előzetes ellenőrzése';
$string['prescan_help'] = 'Bekapcsolása esetén a gyorsítótár első használatakor és a fájlkérések beolvasott adatokkal való egybevetésekor sor kerül a könyvtár ellenőrzésére. Hasznos lehet lassú fájlrendszer esetén.';
$string['privacy:metadata'] = 'A File cache cachestore segédprogram gyorsítótárként rövid ideig tárol adatokat, de ezeket rendszeresen törli.';
$string['singledirectory'] = 'Egyetlen könyvtárban';
$string['singledirectory_help'] = 'Bekapcsolása esetén a fájlokat (a gyorsítótárba helyezett elemeket) több könyvtár helyett egyetlen könyvtárban tárolja.<br /> Egyrészről gyorsabb lesz a fájlok közötti kapcsolattartás, másrészről viszont a fájlrendszer korlátaiba ütközhet.<br /> Csak az alábbiak esetén kapcsolja be:<br />
* Tudja, hogy a gyorsítótár elemeinek a száma elég alacsony lesz és nem okoz gondot az adott fájlrendszerben.
* A gyorsítótárba helyezett adatok könnyen előállíthatók. Akkor is ez lehet a megoldás, ha ütközik az alapértelmezettel, mert csökken a lehetséges gondok esélye.';
