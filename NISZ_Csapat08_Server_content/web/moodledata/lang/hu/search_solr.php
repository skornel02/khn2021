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
 * Strings for component 'search_solr', language 'hu', version '3.10'.
 *
 * @package     search_solr
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['connectionerror'] = 'A megadott  Solr-szerver nem elérhető, vagy a megadott index nem létezik.';
$string['connectionsettings'] = 'Csatlakozás beállításai';
$string['errorcreatingschema'] = 'Hiba a Solr-séma létrehozása közben: {$a}';
$string['errorsolr'] = 'A Solr keresőmotor hibát jelzett: {$a}';
$string['errorvalidatingschema'] = 'Hiba a Solr-séma validálása során, nem létezik {$a->fieldname} mező. Kövesse <a href="{$a->setupurl}">ezt a hivatkozást</a> a szükséges mezők beállításához.';
$string['extensionerror'] = 'Nincs telepítve az  Apache Solr PHP-bővítmény. Ellenőrizze a dokumentációt.';
$string['fileindexing'] = 'Állományindexálás bekapcsolása';
$string['fileindexing_help'] = 'Ha a  Solr támogatja, a Moodle elküldi az állományokat indexálásra.
Az állományok hozzáadásához a funkció bekapcsolása után újra kell indexálnia az összes portáltartalmat.';
$string['fileindexsettings'] = 'Állományindexálás beállításai';
$string['maxindexfilekb'] = 'Indexálandó állomány maximális mérete (kB)';
$string['maxindexfilekb_help'] = 'Az ennél nagyobb állományok kimaradnak a keresésre indexálásból. 0 megadása esetén tetszőleges méretű állományt indexál.';
$string['minimumsolr4'] = 'A Moodle által megkívánt minimális verzió a Solr 4.0.';
$string['missingconfig'] = 'Az Apache Solr szerver még nincs beállítva a Moodle-hoz.';
$string['multivaluedfield'] = '"{$a}" mező esetén tömböt adott vissza skaláris helyett. Törölje a mostani indexet, hozzon létre egy újat és adatindexálás  előtt futtassa le a setup_schema.php-t.';
$string['nodatafromserver'] = 'Nincs adat a szervertől';
$string['pluginname'] = 'Solr';
$string['privacy:metadata'] = 'A segédprogram külsőleg küld adatokat egy kapcsolt Solr keresőgéphez, helyben nem tárol adatokat.';
$string['privacy:metadata:data'] = 'Személyes adatok átvéve a kereső alrendszerből.';
$string['schemafieldautocreated'] = '"{$a}" mező már létezik a Solr-sémában. Valószínűleg adatindexálás  előtt elfelejtette lefuttatni a kódot, adatindexálás  előtt, a Solr pedig automatikusan létrehozta a mezőket. Törölje a mostani indexet, hozzon létre egy újat és adatindexálás  előtt futtassa le ismét a setup_schema.php-t.';
$string['schemasetupfromsolr5'] = 'Solr szerverének verziója 5.0 alatti, a séma beállításához legalább Solr 5.0 szükséges. Kézzel állítsa be a séma mezőit a \\search_solr\\document::get_default_fields_definition()
szerint.';
$string['searchinfo'] = 'Keresési lekérdezések';
$string['searchinfo_help'] = 'A keresendő mezőt megadhatja a keresési kifejezés előtti \'title:\', \'content:\', \'name:\' vagy  \'intro:\' beírásával. Például \'title:news\' keresés esetén a címben a \'news\' szót tartalmazó eredmények jelennek meg.

Kulcsszavak kombinálásához vagy kizárásához használhatja a logikai operátorokat ("AND", "OR", "NOT").

A lekérdezésben használhat helyettesítő karaktereket is ("*", "?").';
$string['setupok'] = 'A séma használatra kész.';
$string['solrauthpassword'] = 'HTTP-hitelesítési jelszó';
$string['solrauthuser'] = 'HTTP-hitelesítési felhasználónév';
$string['solrhttpconnectionport'] = 'Port';
$string['solrhttpconnectiontimeout'] = 'Időkorlát';
$string['solrhttpconnectiontimeout_desc'] = 'A HTTP-csatlakozás időkorlátja a HTTP-adatátvitelre másodpercben engedélyezett maximális idő.';
$string['solrindexname'] = 'Index neve';
$string['solrinfo'] = 'Solr';
$string['solrnotselected'] = 'Nem a Solr-motor a megadott keresőmotor';
$string['solrsecuremode'] = 'Biztonságos üzemmód';
$string['solrserverhostname'] = 'Gazdagép neve';
$string['solrserverhostname_desc'] = 'A Solr-szerver doménneve';
$string['solrsetting'] = 'A Solr beállításai';
$string['solrsslcainfo'] = 'SSL CA-tanúsítványok neve';
$string['solrsslcainfo_desc'] = 'Társ ellenőrzésére szolgáló egy vagy több CA-tanúsítványt tartalmazó állomány neve';
$string['solrsslcapath'] = 'SSL CA-tanúsítványok útvonala';
$string['solrsslcapath_desc'] = 'Társ ellenőrzésére szolgáló több CA-tanúsítványt tartalmazó útvonal neve';
$string['solrsslcert'] = 'SSL-tanúsítvány';
$string['solrsslcert_desc'] = 'PEM-formájú magántanúsítvány állományneve';
$string['solrsslkey'] = 'SSL-kulcs';
$string['solrsslkey_desc'] = 'PEM-formájú magánkulcs állományneve';
$string['solrsslkeypassword'] = 'SSL-kulcs jelszava';
$string['solrsslkeypassword_desc'] = 'PEM-formájú magánkulcs jelszava';
