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
 * Strings for component 'cachestore_memcache', language 'hu', version '3.10'.
 *
 * @package     cachestore_memcache
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clustered'] = 'Fürtözött szerverek engedélyezése';
$string['clustered_help'] = 'Ezzel az egy olvasása - több beállítása funkciót engedélyezheti.

A cél kiegyensúlyozott terhelésű konfigurációk kialakítása. A tárhely egy szerverről (rendszerint a localhostról) kap adatokat, de többre lesz beállítva (a terhelés kiegyensúlyozásában részt vevő összes szerverre). Ezzel nagy olvasási kapacitású gyorsítótárak esetén számottevő fölös hálózati terhelés takarítható meg.

Engedélyezése esetén a fent felsorolt szerver vesz részt a beolvasásban.';
$string['clusteredheader'] = 'Megosztott szerverek';
$string['pluginname'] = 'Memcache';
$string['prefix'] = 'Kulcs előtagja';
$string['prefix_help'] = 'Ezt az előtagot használja a memcache szerver összes kulcsneve.
* Ha a Moodle ezen a szerveren csak egy példányban fut, őrizze meg az alapbeállítást.
* Korlátozott kulcshosszúság miatt legfeljebb 5 karatkert használhat.';
$string['prefixinvalid'] = 'Érvénytelen előtag. Csak a-z A-Z 0-9-_ használható.';
$string['privacy:metadata:memcache'] = 'A Memcache cachestore segédprogram gyorsítótárként rövid ideig egy Memcache szerveren tárol adatokat, amely ezeket rendszeresen törli.';
$string['privacy:metadata:memcache:data'] = 'A gyorsítótárban tárolt különféle adatok';
$string['servers'] = 'Szerverek';
$string['servers_help'] = 'Itt állíthatja be a memcache adapterrel használandó szervereket. Soronként egyet, a szerver címével és esetlegesen a porttal és súllyal. Ha nincs megadva port, az alapbeállítás szerinti (11211) portot használja. Példa:
<pre> server.url.com ipaddress:port servername:port:weight </pre>

Ha alább be van kapcsolva a "Fürtözött szerverek engedélyezése", itt csak egy szerver szerepelhet. Ez rendszerint a helyi gépet azonosító 127.0.0.1 vagy localhost.';
$string['serversclusterinvalid'] = 'Fürtözés engedélyezése esetén pontosan egy szerverre van szükség.';
$string['sessionhandlerconflict'] = 'Vigyázat: a memcache példány ({$a}) ugyanazt a memcache szervert használja, mint a folyamatok. Az összes gyorsítótár ürítésével minden folyamat ürítésére is sor kerül.';
$string['setservers'] = 'Szerverek beállítása';
$string['setservers_help'] = 'Ezen szerverek felsorolása frissítődik, ha módosulnak a gyorsítótár adatai. Általában a listában szereplő szerverek teljes neve.

Ebben akkor is szerepelnie **kell** a fenti *Szerverek* alatt felsoroltnak, ha más a gazdagépneve.
Soronként egy szervert kell megadni, a szerver címével és esetlegesen a porttal. Ha nincs megadva port, az alapbeállítás szerinti (11211) portot használja. Példa:
<pre>
server.url.com
ipaddress:port
</pre>';
$string['testservers'] = 'Tesztelő szerverek';
$string['testservers_desc'] = 'Egy vagy több csatlakozó karaktersor a memória-gyorsítótáras szerverek teszteléséhez. Ha van megadva tesztelő szerver, akkor az adminisztrációs blokk gyorsítótáras teljesítményével ellenőrizhető a memória-gyorsítótáras teljesítmény. Pl.: 127.0.0.1:11211';
