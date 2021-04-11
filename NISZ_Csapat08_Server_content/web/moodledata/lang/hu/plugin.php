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
 * Strings for component 'plugin', language 'hu', version '3.10'.
 *
 * @package     plugin
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Tevékenységek';
$string['availability'] = 'Elérhetőség';
$string['cancelinstallall'] = 'Új ({$a}) telepítések törlése';
$string['cancelinstallhead'] = 'Segédprogramok telepítésének törlése';
$string['cancelinstallinfo'] = 'Az alábbi segédprogramok teljes telepítése nem történt meg, így telepítésük leállítható. Ehhez távolítsa el a segédprogram mappáját a szerverről. Biztosan ezt akarja tenni (ezzel adatok, pl. a kód módosításai törlődhetnek)?';
$string['cancelinstallinfodir'] = 'Törlendő mappa: {$a}';
$string['cancelinstallone'] = 'Telepítés törlése';
$string['cancelupgradeall'] = '({$a}) frissítések törlése';
$string['cancelupgradehead'] = 'Segédprogramok korábbi verziójának helyreállítása';
$string['cancelupgradeone'] = 'A frissítés törlése';
$string['checkforupdates'] = 'Elérhető frissítések ellenőrzése';
$string['checkforupdateslast'] = 'Az utolsó ellenőrzés időpontja: {$a}.';
$string['dependencyavailable'] = 'Elérhető';
$string['dependencyfails'] = 'Hiba';
$string['dependencyinstall'] = 'Telepítés';
$string['dependencyinstallhead'] = 'Hiányzó kapcsolatok telepítése';
$string['dependencyinstallmissing'] = 'Hiányzó  ({$a}) kapcsolatok telepítése';
$string['dependencymissing'] = 'Hiányzik';
$string['dependencyunavailable'] = 'Nem elérhető';
$string['dependencyupload'] = 'Feltöltés';
$string['dependencyuploadmissing'] = 'ZIP-fájlok feltöltése';
$string['detectedmisplacedplugin'] = 'A segédprogram "{$a->component}" rossz helyre települt "{$a->current}", "{$a->expected}" helyett.';
$string['displayname'] = 'Segédprogram neve';
$string['err_response_curl'] = 'A frissítési adatok nem érhetők el - váratlan cURL-hiba.';
$string['err_response_format_version'] = 'Nem egyezik a válaszformátum verziója. Ellenőrizze, vannak-e frissítések.';
$string['err_response_http_code'] = 'A frissítési adatok nem érhetők el - váratlan HTTP-válaszkód.';
$string['filterall'] = 'Az összes megjelenítése';
$string['filtercontribonly'] = 'Csak a kiegészítő segédprogramok megjelenítése';
$string['filterupdatesonly'] = 'Csak a frissíthetők megjelenítése';
$string['incompatibleversion'] = 'Nem kompatibilis Moodle-verzió: {$a}';
$string['isenabled'] = 'Be van kapcsolva?';
$string['misdepinfoplugin'] = 'Segédprogram adatai';
$string['misdepinfoversion'] = 'Verzió adatai';
$string['misdepsavail'] = 'Elérhető hiányzó kapcsolatok';
$string['misdepsunavail'] = 'Nem elérhető hiányzó kapcsolatok';
$string['misdepsunavaillist'] = 'Nincs a kapcsolatok követelményeinek megfelelő verzió: {$a}.';
$string['misdepsunknownlist'] = 'Nincs a Segédprogramok könyvtárban: <strong>{$a}</strong>.';
$string['moodlebranch'] = 'Moodle {$a->min} - {$a->max}';
$string['moodleversion'] = 'Moodle  {$a} ';
$string['noneinstalled'] = 'Nincs ilyen típusú segédprogram telepítve';
$string['notdownloadable'] = 'A csomagot nem lehet letölteni.';
$string['notdownloadable_help'] = 'A frissítést tartalmazó tömörített csomagot nem lehet automatikusan letölteni. A részleteket olvassa el a dokumentáció oldaláról.';
$string['notes'] = 'Jegyzetek';
$string['notsupported'] = 'A segédprogram valószínűleg nem kompatibilis a Moodle {$a} verziójával';
$string['notwritable'] = 'A segédprogram állományai nem írhatók';
$string['notwritable_help'] = 'A segédprogram állományai a webszerver részéről nem írhatók. A segédprogram mappáját és állományait állítsa át írhatóra, esetlegesen az adott segédprogramfajta gyökérkönyvtárával együtt.';
$string['otherplugin'] = '{$a->component}';
$string['otherpluginversion'] = '{$a->component}
({$a->version})';
$string['overviewall'] = 'Minden segédprogram';
$string['overviewext'] = 'Kiegészítő segédprogramok';
$string['overviewupdatable'] = 'Elérhető frissítések';
$string['packagesdebug'] = 'Hibakeresési kimenet bekapcsolva';
$string['packagesdownloading'] = '{$a} letöltése';
$string['packagesextracting'] = '{$a} kibontása';
$string['packagesvalidating'] = '{$a} ellenőrzése';
$string['packagesvalidatingfailed'] = 'A telepítés ellenőrzési hiba miatt megszakadt';
$string['packagesvalidatingok'] = 'Az ellenőrzés sikeres, a telepítés folytatódhat';
$string['plugincheckall'] = 'Minden segédprogram';
$string['plugincheckattention'] = 'Problémás segédprogramok';
$string['pluginchecknone'] = 'Nincsenek problémás segédprogramok';
$string['pluginchecknotice'] = 'Ezen az oldalon jelennek meg a frissítés során esetleg beavatkozást igénylő segédprogramok. Kiemelten láthatók az új, telepítésre váró segédprogramok, a frissített, újratelepítésre váró segédprogramok, és az esetleg hiányzó segédprogramok. Ki vannak emelve a beépülő modulok is. A Moodle verziófrissítésének folytatása előtt ajánlatos ellenőrizni, nincs-e ezekből frissebb változat, és telepíteni kell a forráskódjukat is.';
$string['plugindisable'] = 'Kikapcsolás';
$string['plugindisabled'] = 'Kikapcsolva';
$string['pluginenable'] = 'Bekapcsolás';
$string['pluginenabled'] = 'Bekapcsolva';
$string['release'] = 'Közzététel';
$string['requiredby'] = 'Előíró: {$a}';
$string['requires'] = 'Kell hozzá';
$string['rootdir'] = 'Könyvtár';
$string['settings'] = 'Beállítások';
$string['source'] = 'Forrás';
$string['sourceext'] = 'Kiegészítő';
$string['sourcestd'] = 'Standard';
$string['status'] = 'Állapot';
$string['status_delete'] = 'Törlendő';
$string['status_downgrade'] = 'Ennél újabb verzió van már telepítve!';
$string['status_missing'] = 'Nincs a lemezen';
$string['status_new'] = 'Telepítendő';
$string['status_nodb'] = 'Nincs adatbázis';
$string['status_upgrade'] = 'Új verzióra frissítendő';
$string['status_uptodate'] = 'Telepítve';
$string['supportedconversions'] = 'Támogatott dokumentumátalakítások';
$string['supportedmoodleversions'] = 'Támogatott Moodle-verziók';
$string['systemname'] = 'Azonosító';
$string['type_antivirus'] = 'Vírusölő segédprogram';
$string['type_antivirus_plural'] = 'Vírusölő segédprogramok';
$string['type_auth'] = 'Hitelesítési módszer';
$string['type_auth_plural'] = 'Hitelesítési segédprogramok';
$string['type_availability'] = 'Elérhetőség korlátozása';
$string['type_availability_plural'] = 'Elérhetőség korlátozása';
$string['type_block'] = 'Blokk';
$string['type_block_plural'] = 'Blokkok';
$string['type_cachelock'] = 'Gyorsítótár zárolója';
$string['type_cachelock_plural'] = 'Gyorsítótár zárolói';
$string['type_cachestore'] = 'Gyorsítótár tárhelye';
$string['type_cachestore_plural'] = 'Gyorsítótár tárhelyei';
$string['type_calendartype'] = 'Naptár típusa';
$string['type_calendartype_plural'] = 'Naptártípusok';
$string['type_contentbank'] = 'Tartalombank';
$string['type_contentbank_plural'] = 'Tartalombank segédprogramjai';
$string['type_coursereport'] = 'Kurzusjelentés';
$string['type_coursereport_plural'] = 'Kurzusjelentések';
$string['type_customfield'] = 'Egyedi mező';
$string['type_customfield_plural'] = 'Egyedi mezők';
$string['type_dataformat'] = 'Adatformátum';
$string['type_dataformat_plural'] = 'Adatformátumok';
$string['type_editor'] = 'Szerkesztő';
$string['type_editor_plural'] = 'Szerkesztők';
$string['type_enrol'] = 'Beiratkozási módszer';
$string['type_enrol_plural'] = 'Beiratkozási módszerek';
$string['type_fileconverter'] = 'Dokumentumátalakító';
$string['type_fileconverter_plural'] = 'Dokumentumátalakítók';
$string['type_fileconvertermanage'] = 'Dokumentumátalakítók kezelése';
$string['type_filter'] = 'Szűrő';
$string['type_filter_plural'] = 'Szövegszűrők';
$string['type_format'] = 'Kurzusforma';
$string['type_format_plural'] = 'Kurzusformák';
$string['type_gradeexport'] = 'Pontexportálási módszer';
$string['type_gradeexport_plural'] = 'Pontexportálási módszerek';
$string['type_gradeimport'] = 'Pontimportálási módszer';
$string['type_gradeimport_plural'] = 'Pontimportálási módszerek';
$string['type_gradereport'] = 'Osztályozónaplóhoz kapcsolódó jelentés';
$string['type_gradereport_plural'] = 'Osztályozónaplóhoz kapcsolódó jelentések';
$string['type_gradingform'] = 'Részletes pontozási módszer';
$string['type_gradingform_plural'] = 'Részletes pontozási módszerek';
$string['type_h5plib'] = 'H5P-keret';
$string['type_h5plib_plural'] = 'H5P-keretek';
$string['type_local'] = 'Helyi segédprogram';
$string['type_local_plural'] = 'Helyi segédprogramok';
$string['type_media'] = 'Médialejátszó';
$string['type_media_plural'] = 'Médialejátszók';
$string['type_message'] = 'Értesítési segédprogram';
$string['type_message_plural'] = 'Értesítési segédprogramok';
$string['type_mlbackend'] = 'Gépi tanulás háttéreszköze';
$string['type_mlbackend_plural'] = 'Gépi tanulás háttéreszközei';
$string['type_mnetservice'] = 'MNet-szolgáltatás';
$string['type_mnetservice_plural'] = 'MNet-szolgáltatások';
$string['type_mod'] = 'Tevékenységmodul';
$string['type_mod_plural'] = 'Tevékenységmodulok';
$string['type_paygw'] = 'Fizetési átjáró';
$string['type_paygw_plural'] = 'Fizetési átjárók';
$string['type_paygwmanage'] = 'Fizetési átjárók kezelése';
$string['type_plagiarism'] = 'Tiltott másolást ellenőrző segédprogram';
$string['type_plagiarism_plural'] = 'Tiltott másolást ellenőrző segédprogramok';
$string['type_portfolio'] = 'Portfólió';
$string['type_portfolio_plural'] = 'Portfóliók';
$string['type_profilefield'] = 'Profilmezőtípus';
$string['type_profilefield_plural'] = 'Profilmezőtípusok';
$string['type_qbehaviour'] = 'Kérdés működése';
$string['type_qbehaviour_plural'] = 'Kérdés működése';
$string['type_qformat'] = 'Kérdés importálási/exportálási formája';
$string['type_qformat_plural'] = 'Kérdés importálási/exportálási formái';
$string['type_qtype'] = 'Kérdéstípus';
$string['type_qtype_plural'] = 'Kérdéstípusok';
$string['type_report'] = 'Portáljelentés';
$string['type_report_plural'] = 'Jelentések';
$string['type_repository'] = 'Adattár';
$string['type_repository_plural'] = 'Adattárak';
$string['type_search'] = 'Keresőmotor';
$string['type_search_plural'] = 'Keresőmotorok';
$string['type_theme'] = 'Stílus';
$string['type_theme_plural'] = 'Stílusok';
$string['type_tool'] = 'Rendszergazda eszköze';
$string['type_tool_plural'] = 'Rendszergazda eszközei';
$string['type_webservice'] = 'Webszolgáltatási protokoll';
$string['type_webservice_plural'] = 'Webszolgáltatási protokollok';
$string['uninstall'] = 'Eltávolítás';
$string['uninstallconfirm'] = 'A(z) <em>{$a->name}</em> segédprogram törlésére készül. Ezzel töröl mindent, ami az adatbázisban a segédprogramhoz kapcsolódik. Visszaállításra nem lesz lehetőség. BIZTOSAN folytatja?';
$string['uninstalldelete'] = 'A(z) <em>{$a->name}</em> segédprogramhoz kapcsolódó összes adat törlődött. Újratelepülésének megakadályozásához kézzel törölnie kell most a szerverről a <em>{$a->rootdir}</em> könyvtárat. Írási engedélyek miatt a Moodle nem tudja törölni.';
$string['uninstalldeleteconfirm'] = 'A(z) <em>{$a->name}</em> segédprogramhoz kapcsolódó összes adat törlődött. Újratelepülésének megakadályozásához kézzel törölnie kell most a szerverről a <em>{$a->rootdir}</em> könyvtárat. Törli?';
$string['uninstalldeleteconfirmexternal'] = 'A segédprogram jelenlegi verzióját forráskódkezelő rendszeren keresztül  ({$a}) szerezték be. Ha eltávolítja a könyvtárat, fontos helyi kódmódosítások veszhetnek el. Eltávolítás előtt még egyszer ellenőrizze, ezt kívánja-e tenni.';
$string['uninstallextraconfirmblock'] = 'A blokk {$a->instances} példányban létezik.';
$string['uninstallextraconfirmenrol'] = 'A blokk {$a->instances} példányban létezik.';
$string['uninstallextraconfirmmod'] = 'A modul a(z) {$a->courses} kurzusokban  {$a->instances} példányban létezik.';
$string['uninstalling'] = '{$a->name} eltávolítása';
$string['updateavailable'] = 'Új {$a} verzió érhető el!';
$string['updateavailable_moreinfo'] = 'További információk...';
$string['updateavailable_release'] = '{$a} programverzió';
$string['updatepluginconfirm'] = 'A segédprogram frissítésének megerősítése';
$string['updatepluginconfirmexternal'] = 'A segédprogram verzióját forráskódkezelőn ({$a}) keresztül szerezte be. Ha a frissítést telepíti, a forráskódkezelőn keresztül nem fog tudni frissítéseket beszerezni. Folytatás előtt győződjön meg arról, hogy a segédprogramot mindenképpen frissíteni kívánja-e.';
$string['updatepluginconfirminfo'] = 'A(z) <strong>{$a->name}</strong> segédprogram új verzióját fogja telepíteni. A segédprogram {$a->version} verziójának tömörített csomagját fogja letölteni innen: <a href="{$a->url}">{$a->url}</a>, amely a frissítéshez bekerül a Moodle telepített változatába.';
$string['updatepluginconfirmwarning'] = 'A Moodle frissítés előtt automatikusan nem készít biztonsági mentést az adatbázisról. Mindenképpen készítsen most egyet az új programkódban lévő esetleges hibák kivédésére, melyek miatt portálja elérhetetlenné, adatbázisa pedig használhatatlanná válhat. Saját felelősségére folytathatja a műveletet.';
$string['validationmsg_componentmatch'] = 'Összetevő teljes neve';
$string['validationmsg_componentmismatchname'] = 'A segédprogramok neve nem egyezik.';
$string['validationmsg_componentmismatchname_help'] = 'Egyes (pl. a Github által előállított) csomagok gyökérkönyvtárának a neve hibás. A gyökérkönyvtár nevét a segédprogramnak megfelelőre kell kijavítania.';
$string['validationmsg_componentmismatchname_info'] = 'A segédprogram szerint a neve \'{$a}\', de az nem felel meg a gyökérkönyvtár nevének.';
$string['validationmsg_componentmismatchtype'] = 'A segédprogram típusa nem egyezik.';
$string['validationmsg_componentmismatchtype_info'] = '\'{$a->expected}\' típust választott, de a segédprogram szerint annak típusa  \'{$a->found}\'.';
$string['validationmsg_filenotexists'] = 'A kicsomagolt állomány nem található.';
$string['validationmsg_filesnumber'] = 'A csomagban kevés állomány található.';
$string['validationmsg_filestatus'] = 'Az összes állományt nem lehet kicsomagolni.';
$string['validationmsg_filestatus_info'] = 'A(z) {$a->file} állomány kibontása közben \'{$a->status}\' hiba történt.';
$string['validationmsg_foundlangfile'] = 'A nyelvi állomány megvan';
$string['validationmsg_maturity'] = 'Jelzett stabilitás';
$string['validationmsg_maturity_help'] = 'A segédprogram jelezheti stabilitását. Ha fejlesztője stabilnak tekinti, jelzett stabilitása MATURITY_STABLE lesz. Minden egyéb esetben (alfa, béta...) nem tekintendő stabilnak és figyelmeztetéssel jár.';
$string['validationmsg_missingcomponent'] = 'A segédprogram nem adja meg komponensnevét';
$string['validationmsg_missingcomponent_help'] = 'A segédprogramoknak meg kell adni teljes komponensnevüket a version.php `$plugin->component` deklarációjában.';
$string['validationmsg_missingexpectedlangenfile'] = 'Az angol fájlnév nem egyezik';
$string['validationmsg_missingexpectedlangenfile_info'] = 'A segédprogram típusához nincs angol {$a} nyelvi fájl';
$string['validationmsg_missinglangenfile'] = 'Nincs angol nyelvi fájl';
$string['validationmsg_missinglangenfolder'] = 'Nincs angol nyelvi mappa';
$string['validationmsg_missingversion'] = 'A segédprogram nem jelzi verzióját';
$string['validationmsg_missingversionphp'] = 'Hiányzik a version.php fájl.';
$string['validationmsg_multiplelangenfiles'] = 'Több angol nyelvi fájl hiányzik';
$string['validationmsg_onedir'] = 'Érvénytelen szerkezetű csomag.';
$string['validationmsg_onedir_help'] = 'A csomagnak csak egy gyökérkönyvtára lehet, benne a segédprogram kódjával.  A gyökérkönyvtár és a segédprogram nevének egyezni kell.';
$string['validationmsg_pathwritable'] = 'Írhatóság ellenőrzése';
$string['validationmsg_pluginversion'] = 'Segédprogram verziója';
$string['validationmsg_pluginversiontoolow'] = 'A segédprogram magasabb verziója már telepítve van';
$string['validationmsg_release'] = 'Segédprogram kiadása';
$string['validationmsg_requiresmoodle'] = 'Szükséges Moodle-verzió';
$string['validationmsg_rootdir'] = 'Telepítendő segédprogram neve';
$string['validationmsg_rootdir_help'] = 'A csomagban lévő gyökérkönyvtár neve lesz a telepítendő segédprogram neve. Ha a név hibás, nevezze át a csomagban, mielőtt telepíti a segédprogramot.';
$string['validationmsg_rootdirinvalid'] = 'Érvénytelen segédprogramnév';
$string['validationmsg_rootdirinvalid_help'] = 'A csomagban lévő gyökérkönyvtár neve hibás. Egyes csomagok (pl. a Github által előállítottak) gyökérkönyvtárának hibás lehet a neve. Javítsa ki a segédprogram nevének megfelelőre.';
$string['validationmsg_targetexists'] = 'A megadott hely már létezik, törlődik.';
$string['validationmsg_targetexists_help'] = 'A segédprogram telepítéséhez megadott könyvtár már létezik, helyébe kerül a segédprogramcsomag tartalma.';
$string['validationmsg_targetnotdir'] = 'A célhelyet állomány foglalja el.';
$string['validationmsg_unknowntype'] = 'Ismeretlen típusú segédprogram';
$string['validationmsg_versionphpsyntax'] = 'Nem támogatott szintaxis a version.php állományban.';
$string['validationmsglevel_debug'] = 'Hibakeresés';
$string['validationmsglevel_error'] = 'Hiba';
$string['validationmsglevel_info'] = 'Rendben';
$string['validationmsglevel_warning'] = 'Figyelem!';
$string['version'] = 'Változat';
$string['versiondb'] = 'Aktuális verzió';
$string['versiondisk'] = 'Új verzió';
