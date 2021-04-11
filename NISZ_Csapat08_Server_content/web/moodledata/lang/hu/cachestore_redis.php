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
 * Strings for component 'cachestore_redis', language 'hu', version '3.10'.
 *
 * @package     cachestore_redis
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['compressor_none'] = 'Nincs tömörítés.';
$string['compressor_php_gzip'] = 'Gzip-tömörítés használata.';
$string['compressor_php_zstd'] = 'Zstandard-tömörítés használata.';
$string['password'] = 'Jelszó';
$string['password_help'] = 'Ez állítja be a  Redis-szerver jelszavát.';
$string['pluginname'] = 'Redis';
$string['prefix'] = 'Kulcs előtagja';
$string['prefix_help'] = 'A Redis-szerver összes kulcsneve ezt az előtagot használja.
* Ha csak egy Moodle fut, meghagyhatja az alapértéket.
* Kulcshosszkorlát miatt legfeljebb 5 karakter használható.';
$string['prefixinvalid'] = 'Érvénytelen előtag. Ezek használhatók: a-z A-Z 0-9-_.';
$string['privacy:metadata:redis'] = 'A Redis cachestore segédprogram gyorsítótárként rövid ideig egy Redis szerveren tárol adatokat, amely ezeket rendszeresen törli.';
$string['privacy:metadata:redis:data'] = 'A gyorsítótárban tárolt különféle adatok';
$string['serializer_igbinary'] = 'Az igbináris szerializáló';
$string['serializer_php'] = 'Az alapértelmezett PHP-szerializáló';
$string['server'] = 'Szerver';
$string['server_help'] = 'A használandó Redis-szerver gazdagépneve vagy IP-címe.';
$string['test_password'] = 'Szerver jelszavának ellenőrzése';
$string['test_password_desc'] = 'Redis tesztszerver jelszava';
$string['test_serializer'] = 'Szerializáló';
$string['test_serializer_desc'] = 'Tesztelésre használt szerializáló';
$string['test_server'] = 'Tesztelési szerver';
$string['test_server_desc'] = 'A tesztelésre használandó Redis-szerver.';
$string['usecompressor'] = 'Tömörítő használata';
$string['usecompressor_help'] = 'Megadja, melyik tömörítőt használja sorba rendezés után. Erre a Moodle Cache API szintjén, nem pedig a php-redis szintjén kerül sor.';
$string['useserializer'] = 'Szerializáló használata';
$string['useserializer_help'] = 'Megadja a szerializálásra használandó szerializálót. Érvényes szerializálók: Redis::SERIALIZER_PHP vagy Redis::SERIALIZER_IGBINARY.
Az utóbbi akkor érvényes, ha a phpredis --enable-redis-igbinary opcióval van konfigurálva és az igbináris kibővítés be van töltve.';
