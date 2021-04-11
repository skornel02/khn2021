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
 * Strings for component 'media_videojs', language 'hu', version '3.10'.
 *
 * @package     media_videojs
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['audiocssclass'] = 'CSS-osztály hangállományokhoz';
$string['audioextensions'] = 'Hangállományok kiterjesztései';
$string['configaudiocssclass'] = 'Az <audio> elemhez hozzáadandó CSS-osztály';
$string['configaudioextensions'] = 'Támogatott hangállomány-kiterjesztések vesszővel elválasztott felsorolása. A VideoJS megpróbálja elérni a böngésző esetleges eredeti videólejátszóját, egyéb formátumok esetén a flash-lejátszót veszi igénybe, ha azt a böngésző támogatja és a lejátszást alább bekapcsolja.';
$string['configlimitsize'] = 'Ha be van kapcsolva és a videóhoz nincs megadva magasság és szélesség, az alapbeállítást használja. Ha nincs bejelölve, a videók mérete a lehető legnagyobb szélességhez igazodik.';
$string['configrtmp'] = 'Bekapcsolása esetén az rtmp:// kezdetű hivatkozásokat a segédprogram kezeli, tekintet nélkül a kiterjesztés támogatására. Az RTMP működéséhez a flash fallback bekapcsolása szükséges.';
$string['configuseflash'] = 'Ha a böngésző eredeti videólejátszója nem támogatja a formátumot, használja a flash-lejátszót. Bekapcsolása esetén a VideoJS a fenti lista bármely kiterjesztését a böngésző ellenőrzése nélkül elfogadja. Ne feledje, hogy a flash nem elérhető mobil böngészőkön, és sok asztali alkalmazás sem támogatja.';
$string['configvideocssclass'] = 'A <video> elemhez hozzáadandó CSS-osztály. Pl. a "vjs-big-play-centered" a lejátszás gombját középen helyezi el. Beállíthat egyedi felszínt is, lásd: docs.videojs.com.';
$string['configvideoextensions'] = 'Támogatott videóállomány-kiterjesztések vesszővel elválasztott felsorolása, a VideoJS megpróbálja elérni a böngésző esetleges eredeti videólejátszóját, egyéb formátumok esetén a flash-lejátszót veszi igénybe, ha azt a böngésző támogatja és a lejátszás alább be van kapcsolva.';
$string['configyoutube'] = 'YouTube videók lejátszásához használja a Video.JS-t. A Video.JS jelenleg nem támogatja a Youtube lejátszási listákat.';
$string['limitsize'] = 'Méretkorlátozás';
$string['pluginname'] = 'VideoJS-lejátszó';
$string['pluginname_help'] = 'Javascript keretprogram a böngésző eredeti videólejátszója által lejátszott videókhoz, végső esetben flash-lejátszóval. (A formátum támogatása a böngészőtől függ.)';
$string['privacy:metadata'] = 'A VideoJS player media segédprogram semmilyen személyes adatot nem tárol.';
$string['rtmp'] = 'RTMP-adatfolyamok';
$string['useflash'] = 'Végső esetben flash-lejátszó használata';
$string['videocssclass'] = 'CSS-osztály videókhoz';
$string['videoextensions'] = 'Videóállományok kiterjesztései';
$string['youtube'] = 'YouTube videók';
