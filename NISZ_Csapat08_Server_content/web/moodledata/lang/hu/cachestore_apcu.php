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
 * Strings for component 'cachestore_apcu', language 'hu', version '3.10'.
 *
 * @package     cachestore_apcu
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clusternotice'] = 'Az APCu csak egy csomóponttal rendelkező portálok vagy helyben helyreállítható gyorsítótárak esetén jön számításba.
További információk: <a href="{$a}">APC user cache documentation</a>.';
$string['notice'] = 'Figyelmeztetés';
$string['pluginname'] = 'APC felhasználói gyorsítótár (APCu)';
$string['prefix'] = 'Előtag';
$string['prefix_help'] = 'Az APC adott példánya esetén minden kulcshoz a fenti előtagot használja. Alapesetben az adatbázis előtagja használatos.';
$string['prefixinvalid'] = 'A kiválasztott előtag érvénytelen. Csak a-z A-Z 0-9 használható.';
$string['prefixnotunique'] = 'A kiválasztott előtag nem egyedi. Válasszon egyedi előtagot.';
$string['privacy:metadata'] = 'Az APC user cache (APCu) segédprogram gyorsítótárként rövid ideig tárol adatokat, de ezeket rendszeresen törli és semmilyen módon nem továbbítja rendszeren kívülre.';
$string['testperformance'] = 'Teljesítmény ellenőrzése';
$string['testperformance_desc'] = 'Bekapcsolása esetén az APCu teljesítménye szerepel a Teljesítmény ellenőrzése oldal megtekintésekor. Éles portálokon kerülni kell a bekapcsolását.';
