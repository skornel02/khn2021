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
 * Strings for component 'report_performance', language 'hu', version '3.10'.
 *
 * @package     report_performance
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['check_backup'] = 'Automatikus biztonsági mentés';
$string['check_backup_comment_disable'] = 'A teljesítmény biztonsági mentés alatt csökkenhet. Bekapcsolása esetén a biztonsági mentéseket csúcsidőn kívülre kell beütemezni.';
$string['check_backup_comment_enable'] = 'A teljesítmény biztonsági mentés alatt csökkenhet. Bekapcsolása esetén a biztonsági mentéseket csúcsidőn kívülre kell beütemezni.';
$string['check_backup_details'] = 'Automatikus biztonsági mentés bekapcsolása esetén a megadott időpontban a szerveren lévő összes kurzusról mentés készül. <p>Ezalatt több erőforrásra lesz szükség, ami befolyásolhatja a teljesítményt.</p>';
$string['check_cachejs_comment_disable'] = 'Bekapcsolása esetén javul az oldalbetöltés sebessége.';
$string['check_cachejs_comment_enable'] = 'Kikapcsolása esetén az oldal betöltése lelassulhat.';
$string['check_cachejs_details'] = 'A Javascript gyorsítótárazása és a tömörítés nagyban javítja az oldalbetöltés sebességét. Használata éles portálokon mindenképpen ajánlott.';
$string['check_debugmsg_comment_developer'] = 'Ha a beállítás nem DEVELOPER, a teljesítmény némileg javulhat.';
$string['check_debugmsg_comment_nodeveloper'] = 'Ha a beállítás DEVELOPER, a teljesítmény némileg romolhat.';
$string['check_debugmsg_details'] = 'Fejlesztői szintre váltás csak fejlesztőknek ajánlott.<p>Ha hibajelzést kapott, kimásolta és beszúrta valahova, a hibaszűrést mindenképpen állítsa vissza NONE-ra. A hibaüzenetek ötleteket adhatnak hekkereknek a portálja beállításáról és, és befolyásolhatják a teljesítményt is.</p>';
$string['check_enablestats_comment_disable'] = 'A teljesítményt befolyásolhatja a statisztikai feldolgozás. Bekapcsolása esetén a statisztika beállításait óvatosan kell kezelni.';
$string['check_enablestats_comment_enable'] = 'A teljesítményt befolyásolhatja a statisztikai feldolgozás. Bekapcsolása esetén a statisztika beállításait óvatosan kell kezelni.';
$string['check_enablestats_details'] = 'Bekapcsolása esetén feldolgozza a cronjob naplóit és statisztikát gyűjt. A portál forgalmától függően ez eltarthat egy ideig.<p>A feldolgozás több erőforrást igényel és befolyásolhatja a teljesítményt.</p>';
$string['check_themedesignermode_comment_disable'] = 'Bekapcsolása esetén a képek és a stíluslapok nem kerülnek gyorsítótárba, ezért a teljesítmény számottevően csökkenni fog.';
$string['check_themedesignermode_comment_enable'] = 'Kikapcsolása esetén a képek és a stíluslapok gyorsítótárba kerülnek, ezért a teljesítmény számottevően javulni fog.';
$string['check_themedesignermode_details'] = 'Gyakran ez az oka a Moodle-portálok lassúságának. Legalább kétszer annyi CPU-ra van szükség a Moodle-portál bekapcsolt stílustervezővel való működtetéséhez.';
$string['comments'] = 'Megjegyzések';
$string['disabled'] = 'Kikapcsolva';
$string['edit'] = 'Szerkesztés';
$string['enabled'] = 'Bekapcsolva';
$string['issue'] = 'Gond';
$string['morehelp'] = 'további segítség';
$string['performance:view'] = 'A teljesítményről szóló jelentés megtekintése';
$string['performancereportdesc'] = 'A jelentés a(z) {$a} portál teljesítményét befolyásoló gondokat sorolja föl.';
$string['pluginname'] = 'A teljesítmény áttekintése';
$string['privacy:metadata'] = 'A Performance overview segédprogram semmilyen személyes adatot nem tárol.';
$string['value'] = 'Érték';
