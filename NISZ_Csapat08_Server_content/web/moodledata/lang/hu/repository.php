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
 * Strings for component 'repository', language 'hu', version '3.10'.
 *
 * @package     repository
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessiblefilepicker'] = 'Elérhető fájlválasztó';
$string['activaterep'] = 'Aktív adattárak';
$string['activerepository'] = 'Elérhető adattár-segédprogramok';
$string['activitybackup'] = 'Tevékenység biztonsági mentése';
$string['add'] = 'Hozzáadás';
$string['addfile'] = 'Hozzáadás...';
$string['addfiletext'] = 'Állomány hozzáadása';
$string['addplugin'] = 'Adattár-segédprogram hozzáadása';
$string['aliaseschange'] = '{$a} álneves/parancsikonos fájl használja forrásként ezt a fájlt. Ha folytatja, az álnevek valós példányokká alakulnak át.';
$string['allowexternallinks'] = 'Külső uhivatkozások engedélyezése';
$string['areacategoryintro'] = 'Kategória bevezetője';
$string['areacourseintro'] = 'Kurzus bevezetője';
$string['areacourseoverviewfiles'] = 'Kurzuskép';
$string['areamainfile'] = 'Fő állomány';
$string['arearoot'] = 'Rendszer';
$string['areauserbackup'] = 'Felhasználó biztonsági mentése';
$string['areauserdraft'] = 'Vázlatok';
$string['areauserpersonal'] = 'Magánállományok';
$string['areauserprofile'] = 'Profil';
$string['attachedfiles'] = 'Csatolt állományok';
$string['attachment'] = 'Csatolt állomány:';
$string['author'] = 'Szerző:';
$string['automatedbackup'] = 'Automatikus biztonsági mentések';
$string['back'] = 'Vissza';
$string['backtodraftfiles'] = 'Vissza a vázlatkezelőhöz';
$string['cachecleared'] = 'A gyorsítótárba helyezett állományok törlődtek';
$string['cacheexpire'] = 'A gyorsítótár lejárata';
$string['cannotaccessparentwin'] = 'HTTPS használata esetén az adattár automatikusan nem frissül. Térjen vissza a fájlválasztáshoz és ismét válassza ki az adattárat.';
$string['cannotdelete'] = 'Az állomány nem törölhető.';
$string['cannotdownload'] = 'Az állomány nem tölthető le.';
$string['cannotdownloaddir'] = 'A mappa nem tölthető le.';
$string['cannotinitplugin'] = 'A plugin_init meghívása nem sikerült.';
$string['cannotunzipcontentunreadable'] = 'Nem lehet az állományt kicsomagolni, mert a tartalma nem olvasható.';
$string['cannotunzipextractfileerror'] = 'A tömörített állományt nem lehet kicsomagolni, mert egy vagy több állománya nem olvasható.';
$string['cannotunzipquotaexceeded'] = 'Nem lehet az állományt kicsomagolni, mert mérete meghaladja a piszkozati területen  megengedettet.';
$string['choosealink'] = 'Válasszon hivatkozást...';
$string['chooselicense'] = 'Válasszon engedélyt:';
$string['chooselicense_help'] = 'Az elérhető engedélyekkel kapcsolatos további információkért kövesse ezeket a hivatkozásokat:';
$string['cleancache'] = 'A gyorsítótárba helyezett állományaim törlése';
$string['close'] = 'Bezárás';
$string['commonrepositorysettings'] = 'Közös adattár beállításai';
$string['configallowexternallinks'] = 'Ezzel minden felhasználó eldöntheti, hogy a külső média bemásolódjon-e a Moodle-ba. Kikapcsolt állapotban a média mindig bemásolódik a Moodle-ba (a globális adatépség és biztonság érdekében ez általában a legjobb megoldás). Bekapcsolása esetén a felhasználók minden egyes alkalommal dönthetnek, ha valamely szöveghez médiumot adnak hozzá.';
$string['configcacheexpire'] = 'Az állománylistázás helyi gyorsítótárba helyezésének időtartama (másodpercben) külső adattárak böngészése közben.';
$string['configgetfiletimeout'] = 'Külső állomány Moodle-ba való letöltésének időtúllépése másodpercben';
$string['configsaved'] = 'Beállítások elmentve!';
$string['configsyncfiletimeout'] = 'Külső állomány szinkronizálásának időtúllépése másodpercben';
$string['configsyncimagetimeout'] = 'Külső adattárból egy képállomány letöltésének időtúllépése másodpercben szinkronizálás közben';
$string['confirmdelete'] = 'Biztosan törli a(z) {$a} adattárat? Ha a "Folytatás és letöltés" mellett dönt, az állományok külső tartalmakra való hivatkozásai letöltődnek a Moodle-ba. Ez időigényes lehet.';
$string['confirmdeletefile'] = 'Biztosan törli ezt az állományt?';
$string['confirmdeletefilewithhref'] = 'Biztosan törölni akarja ezt a fájlt? Vannak olyan {$a} fájlok, amelyek ezt forrásként használják. Ha folytatja, ezek átalakulnak valós példányokká.';
$string['confirmdeletefolder'] = 'Biztosan törli a mappát? Minden fájl és almappa is vele törlődik.';
$string['confirmdeleteselectedfile'] = 'Biztosan törli a kiválasztott {$a} állományt?';
$string['confirmremove'] = 'Biztosan törli ezt az adattár-segédprogramot, annak beállításait és <strong>összes példányát</strong> - {$a}? Ha a "Folytatás és letöltés" pontot választja, a Moodle letölti a külső fájlhivatkozásokat, de ez eltarthat egy ideig.';
$string['confirmrenamefile'] = 'Biztosan átnevezi/áthelyezi ezt a fájlt?';
$string['confirmrenamefolder'] = 'Biztosan átnevezi/áthelyezi ezt a mappát? A mappában lévő fájlokra hivatkozások átalakulnak valós példányokká.';
$string['continueuninstall'] = 'Folytatás';
$string['continueuninstallanddownload'] = 'Folytatás és letöltés';
$string['copying'] = 'Másolás';
$string['coursebackup'] = 'Kurzus biztonsági mentései';
$string['create'] = 'Létrehozás';
$string['createfolder'] = 'Mappa létrehozása';
$string['createfolderfail'] = 'A mappa létrehozása nem sikerült.';
$string['createfoldersuccess'] = 'A mappa létrehozása sikerült.';
$string['createinstance'] = 'Adattárpéldány létrehozása';
$string['createrepository'] = 'Adattár létrehozása';
$string['createxxinstance'] = '"{$a}" előfordulás létrehozása';
$string['date'] = 'Dátum';
$string['datecreated'] = 'Létrehozva:';
$string['deleted'] = 'Adattár törölve';
$string['deleterepository'] = 'Adattár törlése';
$string['detailview'] = 'Részletek megtekintése';
$string['dimensions'] = 'Méretek:';
$string['disabled'] = 'Kikapcsolva';
$string['displayasdetails'] = 'Megjelenítés állományrészletek formájában';
$string['displayasicons'] = 'Megjelenítés állományikonok formájában';
$string['displayastree'] = 'Megjelenítés állomány-faszerkezet formájában';
$string['displaydetails'] = 'Mappa megjelenítése az állományok adataival';
$string['displayicons'] = 'Mappa megjelenítése az állományok adataival';
$string['displaytree'] = 'Mappa megjelenítése állományok nélkül';
$string['download'] = 'Letöltés';
$string['downloadallfiles'] = 'Az összes állomány letöltése';
$string['downloadfolder'] = 'Összes letöltése';
$string['downloadsucc'] = 'Az állomány letöltése sikerült.';
$string['draftareanofiles'] = 'Nem tölthető le, mert nincsenek csatolt állományok';
$string['editrepositoryinstance'] = 'Adattárpéldány szerkesztése';
$string['emptylist'] = 'Üres lista';
$string['emptytype'] = 'Az adattártípus nem hozható létre: a típus neve üres.';
$string['enablecourseinstances'] = 'Kurzusadattár kurzushoz való hozzáadásának engedélyezése a felhasználók számára';
$string['enableuserinstances'] = 'Kurzusadattár felhasználói környezethez való hozzáadásának engedélyezése a felhasználók számára';
$string['enter'] = 'Belépés';
$string['entername'] = 'Adja meg a mappa nevét.';
$string['enternewname'] = 'Adja meg az új állomány nevét.';
$string['error'] = 'Ismeretlen hiba történt!';
$string['errordoublereference'] = 'A fájl más névvel nem írható fölül, mert ilyen már létezik';
$string['errornotyourfile'] = 'Nem választhat olyan állományt, amelyet nem Ön adott hozzá.';
$string['errorpostmaxsize'] = 'A feltöltendő állomány túl nagy a szervernek.';
$string['erroruniquename'] = 'Az adattár példányának egyedi névvel kell rendelkezni.';
$string['errorwhilecommunicatingwith'] = 'Hiba a(z) \'{$a}\' adattárral való kommunikáció közben.';
$string['errorwhiledownload'] = 'Hiba történt az állomány letöltése közben: {$a}';
$string['existingrepository'] = 'Az adattár már létezik.';
$string['federatedsearch'] = 'Mélységi keresés';
$string['fileexists'] = 'Az adott állománynév már használatban van, válasszon egy másikat.';
$string['fileexistsdialog_editor'] = 'A szerkesztendő szöveghez már csatoltak ilyen névvel állományt.';
$string['fileexistsdialog_filemanager'] = 'Ilyen névvel már csatoltak állományt.';
$string['fileexistsdialogheader'] = 'Az állomány létezik.';
$string['filename'] = 'Állománynév';
$string['filenotnull'] = 'Válasszon ki egy feltöltendő állományt.';
$string['filepicker'] = 'Állományválasztó';
$string['filesaved'] = 'Az állomány elmentve';
$string['filesizenull'] = 'Az állományméretet nem lehet meghatározni.';
$string['folderexists'] = 'A mappa neve használatban van, adjon meg egy másikat.';
$string['foldernotfound'] = 'A mappa nem található';
$string['folderrecurse'] = 'A mappa nem helyezhető át saját almappájába';
$string['getfile'] = 'Az állomány kiválasztása';
$string['getfiletimeout'] = 'Állomány elérésének időtúllépése';
$string['help'] = 'Súgó';
$string['iconview'] = 'Megtekintés ikonként';
$string['imagesize'] = '{$a->width} x {$a->height} px';
$string['instance'] = 'példány';
$string['instancedeleted'] = 'Példány törölve';
$string['instances'] = 'Adattárpéldányok';
$string['instancesforcourses'] = '{$a} egész kurzuson belüli előfordulása(i)';
$string['instancesforsite'] = '{$a} egész portálon belüli előfordulása(i)';
$string['instancesforusers'] = '{$a} felhasználói magánpéldánya(i)';
$string['invalidfiletype'] = '{$a} típusú állomány nem fogadható el.';
$string['invalidjson'] = 'Érvénytelen JSON-szöveg';
$string['invalidparams'] = 'Érvénytelen paraméterek';
$string['invalidplugin'] = 'Érvénytelen {$a} adattár-segédprogram';
$string['invalidrepositoryid'] = 'Érvénytelen adattár-azonosító';
$string['isactive'] = 'Aktív?';
$string['keyword'] = 'Kulcsszó';
$string['lastmodified'] = 'Utolsó módosítás dátuma:';
$string['license'] = 'Engedély:';
$string['linkexternal'] = 'Külső csatolása';
$string['listview'] = 'Megtekintés listaként';
$string['loading'] = 'Betöltés...';
$string['login'] = 'Lépjen be fiókjába';
$string['logintoaccount'] = 'Jelentkezzen be  {$a} fiókjába';
$string['logout'] = 'Kilépés';
$string['lostsource'] = 'Hiba! Hiányzik a tananyag:  {$a}';
$string['makefilecontrolledlink'] = 'Hozzáférést illetően szabályozott hivatkozás létrehozása az állományhoz';
$string['makefileinternal'] = 'Állományról másolat készítése';
$string['makefilelink'] = 'Kapcsolás a külső állományhoz';
$string['makefilereference'] = 'Kapcsolás az állományhoz';
$string['manage'] = 'Adattárak kezelése';
$string['manageinstances'] = 'Előfordulások kezelése';
$string['manageurl'] = 'Kezelés';
$string['manageuserrepository'] = 'Egyedi adattárak kezelése';
$string['missingsourcekey'] = 'Hiányzik a forráskulcs. Az állomány eléréséhez a kulcsot is meg kell adni.';
$string['moving'] = 'Áthelyezés';
$string['name'] = 'Név:';
$string['newfolder'] = 'Új mappa';
$string['newfoldername'] = 'Új mappa neve:';
$string['noenter'] = 'Nincs megadva semmi';
$string['nofilesattached'] = 'Nincs csatolva állomány';
$string['nofilesavailable'] = 'Nincs elérhető állomány';
$string['nofilesselected'] = 'Nincs kiválasztott állomány';
$string['nolicenses'] = 'Nincs elérhető engedély';
$string['nomorefiles'] = 'Több állományt nem csatolhat.';
$string['nopathselected'] = 'Nincs kiválasztva célútvonal (a fa csomópontjára kattintva válassza ki).';
$string['nopermissiontoaccess'] = 'Nincs engedély az adattárhoz';
$string['norepositoriesavailable'] = 'Egyik aktuális adattára sem szolgáltat a kért formában állományokat.';
$string['norepositoriesexternalavailable'] = 'Egyik aktuális adattára sem szolgáltat külső állományokat.';
$string['noresult'] = 'Nincs ilyen eredmény';
$string['notyourinstances'] = 'Más adattárpéldányait nem tekintheti meg/szerkesztheti.';
$string['off'] = 'Be van kapcsolva, de rejtett';
$string['on'] = 'Be van kapcsolva és látható';
$string['openpicker'] = 'Állományválasztó megnyitása';
$string['operation'] = 'Művelet';
$string['original'] = 'Eredeti';
$string['originalextensionchange'] = 'A fájlnévmódosítás részeként módosult az eredeti kiterjesztés. Ha a  ".{$a->originalextension}" kiterjesztés ".{$a->newextension}" kiterjesztésre módosul, olyan állomány állhat elő, amelyet nem tud megnyitni.';
$string['originalextensionremove'] = 'A fájlnévmódosítás részeként törlődött az eredeti kiterjesztés. A(z)  ".{$a}" kiterjesztés törlésével olyan állomány állhat elő, amelyet nem tud megnyitni.';
$string['overwrite'] = 'Felülírás';
$string['overwriteall'] = 'Az összes felülírása';
$string['path'] = 'Útvonal:';
$string['plugin'] = 'Adattár-segédprogramok';
$string['pluginerror'] = 'Hibák vannak az adattár-segédprogramban.';
$string['pluginname'] = 'Az adattár-segédprogram neve';
$string['pluginnamehelp'] = 'Ha üresen hagyja, az alapértelmezett nevet használja a rendszer.';
$string['popup'] = 'A belépéshez kattintson a "Belépés" gombra.';
$string['popupblockeddownload'] = 'A letöltési ablak blokkolva van. Engedélyezze a felugró ablakot és próbálja meg újra.';
$string['preview'] = 'Előkép';
$string['privacy:metadata:repository'] = 'Az alapvető alrendszeren belül az Adattár összetevő tárolja az adattárak típusait.';
$string['privacy:metadata:repository_instances'] = 'Az alapvető alrendszeren belül az Adattár segédprogram-összetevő tárolja az adattárak előfordulásának adatait.';
$string['privacy:metadata:repository_instances:name'] = 'Az adattár egyedi neve.';
$string['privacy:metadata:repository_instances:password'] = 'Az adattárhoz beállított esetleges jelszó.';
$string['privacy:metadata:repository_instances:timecreated'] = 'Az adattár létrehozásának az ideje.';
$string['privacy:metadata:repository_instances:timemodified'] = 'Az adattár módosításának az ideje.';
$string['privacy:metadata:repository_instances:typeid'] = 'Az adattár azonosítójának a típusa.';
$string['privacy:metadata:repository_instances:userid'] = 'Az adattár tulajdonosának felhasználói azonosítója.';
$string['privacy:metadata:repository_instances:username'] = 'Az adattárhoz beállított esetleges felhasználónév.';
$string['privatefilesof'] = '{$a} magánállomány';
$string['readonlyinstance'] = 'Csak olvasható példányt nem szerkeszthet/törölhet';
$string['referencesexist'] = '{$a} másik név/hivatkozás használja ezt  az állomány mint tananyagot';
$string['referenceslist'] = 'Másik név/hivatkozás';
$string['refresh'] = 'Frissítés';
$string['refreshnonjsfilepicker'] = 'Zárja be az ablakot és frissítse a nem javascript fáljválasztót.';
$string['removed'] = 'Az adattár törölve.';
$string['renameall'] = 'Az összes átnevezése';
$string['renameto'] = 'Átnevezés erre: "{$a}".';
$string['repositories'] = 'Adattárak';
$string['repository'] = 'Adattár';
$string['repositorycourse'] = 'Kurzusadattárak';
$string['repositoryerror'] = 'A távoli adattár hibát jelzett: {$a}';
$string['repositoryicon'] = 'Adattár ikonja';
$string['save'] = 'Mentés';
$string['saveas'] = 'Mentés mint:';
$string['saved'] = 'Elmentve';
$string['saving'] = 'Mentés';
$string['search'] = 'Keresés';
$string['searching'] = 'Hol keres?';
$string['searchrepo'] = 'Keresés az adattárban';
$string['sectionbackup'] = 'Terület biztonsági mentései';
$string['select'] = 'Kiválasztás';
$string['setmainfile'] = 'Fő állomány beállítása';
$string['setmainfile_help'] = 'Ha a mappában több állomány van, a megtekintő oldalon a fő állomány jelenik meg, a többi (kép, videó stb.) beágyazódik.';
$string['settings'] = 'Beállítások';
$string['setupdefaultplugins'] = 'Alapbeállítás szerinti adattár-segédprogramok beállítása';
$string['siteinstances'] = 'A portál adattárpéldányai';
$string['size'] = 'Méret:';
$string['sourcekeymismatch'] = 'A forrás webcíme nem egyezik a forráskulccsal.';
$string['submit'] = 'Leadás';
$string['sync'] = 'Szinkronizálás';
$string['syncfiletimeout'] = 'Állomány szinkronizálásának időtúllépése';
$string['syncimagetimeout'] = 'Kép szinkronizálásának időtúllépése';
$string['thumbview'] = 'Megtekintés ikonként';
$string['title'] = 'Válasszon állományt...';
$string['type'] = 'Típus';
$string['typenotvisible'] = 'A típus nem látható.';
$string['undisclosedreference'] = '(Rejtett)';
$string['undisclosedsource'] = '(Rejtett)';
$string['unknownoriginal'] = 'Ismeretlen';
$string['unknownsource'] = 'Ismeretlen forrás';
$string['unzipped'] = 'A kibontás sikerült.';
$string['upload'] = 'Állomány feltöltése';
$string['uploading'] = 'Feltöltés...';
$string['uploadsucc'] = 'Az állomány feltöltése sikerült.';
$string['uselatestfile'] = 'Utolsó állomány használata';
$string['usenonjsfilemanager'] = 'Az állománykezelő megnyitása új ablakban';
$string['usenonjsfilepicker'] = 'Az állományválasztó megnyitása új ablakban';
$string['usercontextrepositorydisabled'] = 'Felhasználói környezetben nem szerkesztheti ezt az adattárat.';
$string['wrongcontext'] = 'A környezethez nem férhet hozzá.';
$string['xhtmlerror'] = 'Valószínűleg szigorú fejlécű XHTML-t használ. Ebben az üzemmódban egyes YUI-alkotóelemek nem működnek, ezért Moodle-ban kapcsolja ki.';
$string['ziped'] = 'A mappa tömörítése sikerült.';
