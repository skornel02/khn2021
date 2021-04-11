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
 * Strings for component 'cachestore_memcached', language 'hu', version '3.10'.
 *
 * @package     cachestore_memcached
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['bufferwrites'] = 'Pufferhasználat';
$string['bufferwrites_help'] = 'Ki-/bekapcsolja a puffer I/O-t. Bekapcsolása esetén a tárolási utasítások elküldés helyett a "pufferbe" kerülnek. Adatelőhívással kapcsolatos intézkedés esetén a puffert a távoli kapcsolatra küldi ki. A kapcsolat elhagyása vagy bezárása esetén a puffert szintén a távoli kapcsolatra küldi ki.';
$string['clustered'] = 'Fürtözött szerverek engedélyezése';
$string['clustered_help'] = 'Ezzel az egy olvasása - több beállítása funkciót engedélyezheti.

A cél kiegyensúlyozott terhelésű konfigurációkhoz jobb tárhely kialakítása. A tárhely egy szerverről (rendszerint a localhostról) kap adatokat, de többre lesz beállítva (a terhelés kiegyensúlyozásában részt vevő összes szerverre). Ezzel nagy olvasási kapacitású gyorsítótárak esetén számottevő fölös hálózati terhelés takarítható meg.

Engedélyezése esetén a fent felsorolt szerver vesz részt a beolvasásban.';
$string['clusteredheader'] = 'Megosztott szerverek';
$string['hash'] = 'Kivonatoló módszer';
$string['hash_crc'] = 'CRC';
$string['hash_default'] = 'Alapbeállítás (egyesével)';
$string['hash_fnv1_32'] = 'FNV1_32';
$string['hash_fnv1_64'] = 'FNV1_64';
$string['hash_fnv1a_32'] = 'FNV1A_32';
$string['hash_fnv1a_64'] = 'FNV1A_64';
$string['hash_help'] = 'Meghatározza a tételkulcsok kivonatoló algoritmusát. Minden kivonatoló algoritmusnak megvan az előnye és a hátránya. Ha nem tudja vagy közömbös, hogy melyiket választja, döntsön az alapbeállítás mellett.';
$string['hash_hsieh'] = 'Hsieh';
$string['hash_md5'] = 'MD5';
$string['hash_murmur'] = 'Murmur';
$string['isshared'] = 'Megosztott gyorsítótár.';
$string['isshared_help'] = 'Más alkalmazás is használja a gyorsítótáras szervert?

Ha igen, minden kulcs egyenként törlődik, hogy csak ezen alkalmazás adatai törlődjenek (a külső alkalmazás gyorsítótáras adatai változatlanul maradnak). Emiatt a gyorsítótár ürítése során a szerverbeállítástól függően csökkenhet a teljesítmény.

Ha az alkalmazáshoz kijelölt gyorsítótárat használ, a teljes gyorsítótárat biztonsággal kiürítheti a másik alkalmazás adatainak veszélyeztetése nélkül. Ezzel javulhat a teljesítmény adatürítés során-';
$string['pluginname'] = 'Memcached';
$string['prefix'] = 'Előtag kulcsa';
$string['prefix_help'] = 'Ezzel tételkulcsaihoz "domént" hozhat létre, így egy memóriában gyorsított telepítéshez több memóriában gyorsított tárhelyet hozhat létre. Max. 16 karakter hosszú lehet a kulcs hosszúságával összefüggő gondok elkerülése érdekében.';
$string['prefixinvalid'] = 'Érvénytelen előtag. Csak a-z A-Z 0-9-_ használható.';
$string['privacy:metadata:memcached'] = 'A Memcache cachestore segédprogram gyorsítótárként rövid ideig egy Memcache szerveren tárol adatokat, amely ezeket rendszeresen törli.';
$string['privacy:metadata:memcached:data'] = 'A gyorsítótárban tárolt különféle adatok';
$string['serialiser_igbinary'] = 'Az igbinary szerializáló';
$string['serialiser_json'] = 'A JSON szerializáló';
$string['serialiser_php'] = 'Az alapbeállítás szerinti PHP szerializáló';
$string['servers'] = 'Szerverek';
$string['servers_help'] = 'A memóriában gyorsított adapter által használandó tesztelő szervereket állítja be.
A szervereket soronként kell megadni szervercím és választhatóan port és súlyozás alapján. Ha nincs megadva port, a rendszer az alapbeállítás szerinti portot (11211) használja.

Példa:

<pre> server.url.com ipaddress:port servername:port:weight </pre>

Ha alább be van kapcsolva a "Fürtözött szerverek engedélyezése", itt csak egy szerver szerepelhet. Ez rendszerint a helyi gépet azonosító 127.0.0.1 vagy localhost.';
$string['serversclusterinvalid'] = 'Fürtözés engedélyezése esetén pontosan egy szerverre van szükség.';
$string['sessionhandlerconflict'] = 'Vigyázat: a memcache példány ({$a}) ugyanazt a memcache szervert használja, mint a folyamatok. Az összes gyorsítótár ürítésével minden folyamat ürítésére is sor kerül.';
$string['setservers'] = 'Szerverek beállítása';
$string['setservers_help'] = 'Ezen szerverek felsorolása frissítődik, ha módosulnak a gyorsítótár adatai. Általában a listában szereplő szerverek teljes neve.
Ebben akkor is szerepelnie **kell** a fenti *Szerverek* alatt felsoroltnak, ha más a gazdagépneve.
Soronként egy szervert kell megadni, a szerver címével és esetlegesen a porttal. Ha nincs megadva port, az alapbeállítás szerinti (11211) portot használja.

Példa:
<pre>
server.url.com
ipaddress:port
</pre>';
$string['testservers'] = 'Tesztelő szerverek';
$string['testservers_desc'] = 'Egy vagy több csatlakozó karaktersor a memória-gyorsítótáras szerverek teszteléséhez. Ha van megadva tesztelő szerver, akkor az adminisztrációs blokk gyorsítótáras teljesítményével ellenőrizhető a memória-gyorsítótáras teljesítmény. Pl.: 127.0.0.1:11211';
$string['upgrade200recommended'] = 'Frissítsen legalább Memcached PHP 2.0.0 verzióra.
A jelenlegi verzióval a Moodle nem tudja biztosítani a próbagyorsítótárat. Addig is kerülje más alkalmazás ugyanazon gyorsítótáras szerveren való használatát, mint amilyenre a Moodle van beállítva.';
$string['usecompression'] = 'Tömörítés használata';
$string['usecompression_help'] = 'Ki-/bekapcsolja a hasznos forgalom tömörítését. Bekapcsolása esetén az adott küszöböt (jelenleg 100 bájtot) meghaladó hosszúságú tételértékeket tároláskor tömöríti, előhíváskor kibontja.';
$string['useserialiser'] = 'Szerializáló használata';
$string['useserialiser_help'] = 'Meghatározza a nem skaláris értékek szerializálására használandó szerializálót Érvényes szerializálók:
Memcached::SERIALIZER_PHP vagy
Memcached::SERIALIZER_IGBINARY.
Az utóbbit csak a memcached --enable-memcached-igbinary opcióval és betöltött igbinary kibővítéssel támogatja.';
