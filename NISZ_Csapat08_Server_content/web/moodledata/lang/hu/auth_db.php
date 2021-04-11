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
 * Strings for component 'auth_db', language 'hu', version '3.10'.
 *
 * @package     auth_db
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_dbcannotconnect'] = 'Nem sikerül a külső adatbázishoz csatlakozás.';
$string['auth_dbcannotreadtable'] = 'Nem sikerül a külső tábla olvasása.';
$string['auth_dbcantconnect'] = 'Nem sikerült csatlakozni a megadott hitelesítési adatbázishoz...';
$string['auth_dbchangepasswordurl_key'] = 'Jelszómódosító URL';
$string['auth_dbcolumnlist'] = 'A külső tábla az alábbi oszlopokat tartalmazza: <br />{$a}';
$string['auth_dbdebugauthdb'] = 'Az ADOdb hibaszűrése';
$string['auth_dbdebugauthdbhelp'] = 'Az ADOdb külső adatbázishoz csatlakozásának hibaszűrése - belépéskor üres oldal megjelenése esetén használandó. Éles portálokon nem használandó!';
$string['auth_dbdeleteuser'] = '{$a->name} nevű {$a->id} azonosítójú felhasználó törlése';
$string['auth_dbdeleteusererror'] = 'Hiba  {$a} felhasználó törlése közben';
$string['auth_dbdescription'] = 'Ez a módszer külső adatbázistábla alapján ellenőrzi az adott felhasználónév és jelszó érvényességét. Új fiók esetén egyéb mezők adatai is átmásolhatók a Moodle-ba.';
$string['auth_dbextencoding'] = 'Külső adatbázis kódolása';
$string['auth_dbextencodinghelp'] = 'A külső adatbázisban használt kódolás';
$string['auth_dbextrafields'] = 'Ezek választható mezők. Az itt megadott <b>külső adatbázismezőkből</b> előre kitölthet egyes Moodle-hoz tartozó felhasználói mezőket. <p>Ha üresen hagyja, az alapbeállítás adatai kerülnek bele.</p><p>Belépés után a felhasználó mindkét esetben az összes mezőt szerkesztheti.</p>';
$string['auth_dbfieldpass'] = 'A jelszavakat tartalmazó mező neve';
$string['auth_dbfieldpass_key'] = 'Jelszómező';
$string['auth_dbfielduser'] = 'A felhasználóneveket tartalmazó mező neve. A mező adattípusa varchar.';
$string['auth_dbfielduser_key'] = 'Felhasználónév-mező';
$string['auth_dbhost'] = 'Az adatbázisszerver gazdagépe.  ODBC használata esetén rendszerszintű DSN-bejegyzés használandó. PDO esetén használjon PDO DSN-bejegyzést.';
$string['auth_dbhost_key'] = 'Gazdagép';
$string['auth_dbinsertuser'] = '{$a->name} nevű {$a->id} azonosítójú felhasználó beszúrva';
$string['auth_dbinsertuserduplicate'] = 'Hiba {$a->username} beillesztése közben - ezt a felhasználót a(z) \'{$a->auth}\' segédprogram már létrehozta.';
$string['auth_dbinsertusererror'] = 'Hiba {$a} felhasználó beszúrása közben';
$string['auth_dbname'] = 'Az adatbázis neve. ODBC-DSN használata esetén hagyja üresen. Ha a PDO DSN már tartalmazza az adatbázis nevét, hagyja üresen.';
$string['auth_dbname_key'] = 'Adatbázisnév';
$string['auth_dbnoexttable'] = 'Nincs megadva külső tábla.';
$string['auth_dbnouserfield'] = 'Nincs megadva külső felhasználói mező.';
$string['auth_dbpass'] = 'A fenti felhasználónévnek megfelelő jelszó';
$string['auth_dbpass_key'] = 'Jelszó';
$string['auth_dbpasstype'] = '<p>Adja meg a jelszómező által használt formátumot.</p> <p>Használja a \'belsőt\', ha a külső adatbázissal kívánja kezelni a felhasználóneveket és az e-mail címeket, de a jelszavak kezelését a Moodle-ra bízná. A \'belső\' használata esetén a külső adatbázisban meg <i>kell</i>  adnia egy létező e-mail címet és rendszeresen le kell futtatnia mind az admin/cron.php, mind az auth/db/cli/sync_users.php kódot. A Moodle az új felhasználóknak ideiglenes jelszót tartalmazó e-mailt küld.</p>';
$string['auth_dbpasstype_key'] = 'A jelszó formája';
$string['auth_dbreviveduser'] = '{$a->name} nevű {$a->id} azonosítójú felhasználó ismét bekapcsolva';
$string['auth_dbrevivedusererror'] = 'Hiba {$a} felhasználó ismételt bekapcsolása közben';
$string['auth_dbsaltedcrypt'] = 'Egyirányú karaktersor-kivonatolás elrejtése';
$string['auth_dbsetupsql'] = 'SQL-beállítási parancs';
$string['auth_dbsetupsqlhelp'] = 'SQL-parancs speciális adatbázis-beállításhoz, mely gyakran a kommunikáció kódolásához használatos - MySQL és PostgreSQL esetén pl.: <em>SET NAMES \'utf8\'</em>';
$string['auth_dbsuspenduser'] = '{$a->name} nevű {$a->id} azonosítójú felhasználó felfüggesztve';
$string['auth_dbsuspendusererror'] = 'Hiba {$a} felhasználó felfüggesztése közben';
$string['auth_dbsybasequoting'] = 'Sybase-idézőjelek használata';
$string['auth_dbsybasequotinghelp'] = 'Sybase-féle egyszeres idézőjelek használata Oracle, MS SQL és néhány más adatbázis esetén. MySQL-hez nem használandó!';
$string['auth_dbsyncuserstask'] = 'Felhasználói feladat szinkronizálása';
$string['auth_dbtable'] = 'Az adatbázis táblájának neve';
$string['auth_dbtable_key'] = 'Tábla';
$string['auth_dbtableempty'] = 'A külső tábla üres.';
$string['auth_dbtype'] = 'Az adatbázis típusa (aA részleteket lásd az <a href="../lib/adodb/readme.htm#drivers">ADOdb dokumentációjában</a>)';
$string['auth_dbtype_key'] = 'Adatbázis';
$string['auth_dbupdateerror'] = 'Hiba a külső adatbázis frissítése sorén.';
$string['auth_dbupdateusers'] = 'Felhasználók frissítése';
$string['auth_dbupdateusers_description'] = 'Új felhasználók felvétele mellett a meglévők frissítése';
$string['auth_dbupdatinguser'] = '{$a->name} nevű {$a->id} azonosítójú felhasználó frissítése';
$string['auth_dbuser'] = 'Az adatbázishoz olvasási joggal hozzáférő felhasználó neve';
$string['auth_dbuser_key'] = 'Adatbázis-felhasználó';
$string['auth_dbuserstoadd'] = 'Beszúrandó felhasználói adatok: {$a}';
$string['auth_dbuserstoremove'] = 'Eltávolítandó felhasználói adatok: {$a}';
$string['pluginname'] = 'Külső adatbázis';
$string['privacy:metadata'] = 'Az External adatbázis-hitelesítő segédprogramja semmilyen személyes adatot nem tárol.';
