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
 * Strings for component 'search', language 'hu', version '3.10'.
 *
 * @package     search
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['advancedsearch'] = 'Részletes keresés';
$string['all'] = 'Mind';
$string['allareas'] = 'Minden terület';
$string['allcourses'] = 'Minden kurzus';
$string['allusers'] = 'Minden felhasználó';
$string['author'] = 'Szerző';
$string['authorname'] = 'Szerző neve';
$string['back'] = 'Vissza';
$string['beadmin'] = 'Az oldal használatához rendszergazdának kell lennie.';
$string['checkdb'] = 'Adatbázis ellenőrzése';
$string['checkdbadvice'] = 'Ellenőrizze, nincsenek-e gondok az adatbázisával.';
$string['checkdir'] = 'Könyvtár ellenőrzése';
$string['checkdiradvice'] = 'Ellenőrizze, létezik-e az adatkönyvtár és írható-e.';
$string['commenton'] = 'Megjegyzés ehhez:';
$string['confirm_delete'] = 'Biztosan törli {$a} indexét? A kereső terület indexálásáig a felhasználók erről a területről nem kapnak keresési eredményt.';
$string['confirm_deleteall'] = 'Biztosan törli az összes indexált tartalmat? A portál újbóli indexálásáig a felhasználók nem kapnak keresési eredményt.';
$string['confirm_indexall'] = 'Biztosan frissíti az indexált tartalmat?  Ha nagy mennyiségű tartalmat kell indexálni, az eltarthat egy ideig. Működő szerverek esetén célszerű  az indexálást a \'Globális keresés indexálása\' ütemezett feladatra bízni.';
$string['confirm_reindexall'] = 'Biztosan újból indexálja a portál teljes tartalmát?  Ha portálján nagy mennyiségű tartalommal rendelkezik, az indexálás eltarthat egy ideig. Ezalatt a felhasználók esetleg nem kapnak teljes keresési eredményt.';
$string['core-all'] = 'Összes';
$string['core-course-content'] = 'Kurzustartalom';
$string['core-courses'] = 'Kurzusok';
$string['core-other'] = 'Egyéb';
$string['core-users'] = 'Felhasználók';
$string['createanindex'] = 'mutató létrehozása';
$string['createdon'] = 'Létrehozás időpontja';
$string['database'] = 'Adatbázis';
$string['databasestate'] = 'Adatbázis állapotának indexálása';
$string['datadirectory'] = 'Adatkönyvtár';
$string['deleteindex'] = '{$a} mutató törlése';
$string['deletionsinindex'] = 'Mutatóban szereplő törlések';
$string['docmodifiedon'] = 'Utolsó módosítás dátuma: {$a}';
$string['doctype'] = 'Dokumentumtípus';
$string['doctypenotsupported'] = 'A dokumentumtípust a rendszer még nem támogatja.';
$string['documents'] = 'dokumentumok';
$string['documentsfor'] = 'Dokumentumok ehhez:';
$string['documentsindatabase'] = 'Adatbázis dokumentumai';
$string['documentsinindex'] = 'Mutató dokumentumai';
$string['duration'] = 'Időtartam';
$string['emptydatabaseerror'] = 'Az adatbázis táblázata hiányzik vagy nem tartalmaz indexrekordot.';
$string['enginenotfound'] = '{$a} motor nem található';
$string['enginenotinstalled'] = '{$a} motor nincs telepítve';
$string['enginenotselected'] = 'Nem választott ki keresőmotort.';
$string['engineserverstatus'] = 'A keresőmotor nem elérhető. Forduljon a rendszergazdához.';
$string['enteryoursearchquery'] = 'Adja meg keresési lekérdezését';
$string['error_indexing'] = 'Hiba történt az indexálás közben';
$string['errorareanotavailable'] = '{$a} keresési terület nem elérhető.';
$string['errors'] = 'Hibák';
$string['everywhere'] = 'Bárhol elérhető';
$string['filesinindexdirectory'] = 'Indexkönyvtár állományai';
$string['filterheader'] = 'Szűrő';
$string['fromtime'] = 'Módosítva ez után';
$string['globalsearch'] = 'Globális keresés';
$string['globalsearchdisabled'] = 'A globális keresés nincs bekapcsolva.';
$string['gradualreindex'] = '{$a} fokozatos újraindexálása';
$string['gradualreindex_confirm'] = 'Biztosan újraindexálja {$a}-t? Ez eltart egy darabig, jóllehet, a meglévő adatok az újraindexálás alatt elérhetőek maradnak.';
$string['gradualreindex_queued'] = 'Újraindexálást kértek {$a->name} esetén ({$a->count} környezetben). Az indexálást a &lsquo;Globális keresés indexálása&rsquo; ütemezett feladat hajtja végre.';
$string['incourse'] = '{$a} kurzusban';
$string['index'] = 'Mutató';
$string['indexwhendisabledfullnotice'] = 'Kikapcsolt keresés mellett az indexálás nem engedélyezett. Engedélyezését lásd a <a href="{$a->url}">searchindexwhendisabled</a> beállítás alatt.';
$string['indexwhendisabledshortnotice'] = 'Az indexálás nem elérhető.';
$string['invalidindexerror'] = 'Az indexkönyvtárban vagy hibás index szerepel, vagy nem tartalmaz indexet.';
$string['ittook'] = 'Időtartama';
$string['matchingfile'] = '<span class="filename">{$a}</span> állomány szerint egyező';
$string['matchingfiles'] = 'Egyező állományok:';
$string['mycoursesonly'] = 'Csak a kurzusaim';
$string['next'] = 'Következő';
$string['noindexmessage'] = 'Rendszergazda: nincs keresési index.';
$string['noresults'] = 'Nincs eredmény';
$string['normalsearch'] = 'Szokásos keresés';
$string['notitle'] = 'Nincs cím';
$string['openedon'] = 'megnyitás időpontja';
$string['optimize'] = 'Optimalizál';
$string['order'] = 'Eredmények sorrendje';
$string['order_location'] = '{$a} eredményeinek sorrendbe állítása';
$string['order_relevance'] = 'Először a leginkább releváns eredmények';
$string['priority'] = 'Elsőbbség';
$string['priority_normal'] = 'Szokásos';
$string['priority_reindexing'] = 'Újraindexálás';
$string['privacy:metadata'] = 'A kereső alrendszer nem tárol személyes adatokat.';
$string['progress'] = 'Folyamat';
$string['queryerror'] = 'A(z)  {$a} keresőmotor nem tudta feldolgozni a kérést.';
$string['queueheading'] = '({$a} tétel) indexálási sor hozzáadása';
$string['resultsreturnedfor'] = 'eredmények visszaküldésének célja';
$string['runindexer'] = 'Indexáló futtatása (valós)';
$string['runindexertest'] = 'Indexáló teszt futtatása';
$string['schemanotupdated'] = 'A keresési séma nem naprakész.';
$string['schemaversionunknown'] = 'A keresőmotor nem ismeri a séma jelenlegi verzióját.';
$string['score'] = 'Pontszám';
$string['search'] = 'Keresés';
$string['search:course'] = 'Kurzusok';
$string['search:customfield'] = 'Egyedi kurzusmezők';
$string['search:message_received'] = 'Üzenetek - fogadott';
$string['search:message_sent'] = 'Üzenetek - elküldött';
$string['search:mycourse'] = 'Kurzusaim';
$string['search:section'] = 'Kurzusszekciók';
$string['search:user'] = 'Felhasználók';
$string['searcharea'] = 'Keresési terület';
$string['searchareacategories'] = 'Keresési területhez tartozó kategóriák';
$string['searching'] = 'Keresés helye ...';
$string['searchnotpermitted'] = 'Ön nem végezhet keresést.';
$string['searchsetupdescription'] = 'Az alábbi lépésekkel beállíthatja a Moodle globális keresését.';
$string['searchwithin'] = 'Keresés itt';
$string['seconds'] = 'másodperc';
$string['solutions'] = 'Megoldások';
$string['statistics'] = 'Statisztika';
$string['step'] = 'Lépés';
$string['thesewordshelpimproverank'] = 'Ezekkel a szavakkal javul a rangsor';
$string['thesewordsmustappear'] = 'Ezeknek a szavaknak szerepelni kell';
$string['thesewordsmustnotappear'] = 'Ezek a szavak nem jelenhetnek meg';
$string['title'] = 'Cím';
$string['tofetchtheseresults'] = 'ezen eredmények elérése';
$string['totalsize'] = 'Méret összesen';
$string['totime'] = 'Módosítva ez előtt';
$string['type'] = 'Típus';
$string['uncompleteindexingerror'] = 'Az indexálást nem sikerült végrehajtani, indítsa el újra.';
$string['versiontoolow'] = 'A globális kereséshez PHP 5.0.0 vagy későbbi verzióra van szükség';
$string['viewresultincontext'] = 'Az eredmény megtekintése környezetben';
$string['wordsintitle'] = 'Címbeli szavak';
