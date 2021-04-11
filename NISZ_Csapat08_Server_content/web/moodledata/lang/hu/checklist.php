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
 * Strings for component 'checklist', language 'hu', version '3.10'.
 *
 * @package     checklist
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcomments'] = 'Megjegyzések hozzáadása';
$string['additem'] = 'Hozzáadás';
$string['additemalt'] = 'Új elem hozzáadása a listához';
$string['additemhere'] = 'Elem hozzáadása ez után';
$string['addownitems'] = 'Saját elemek hozzáadása';
$string['addownitems-stop'] = 'Saját elemek hozzáadásának vége';
$string['allowmodulelinks'] = 'Modulkapcsolások engedélyezése';
$string['anygrade'] = 'Bármilyen';
$string['anygrouping'] = 'Bármilyen csoportosítás';
$string['autopopulate'] = 'Mutassa a kurzusmodulokat a feladatlistán';
$string['autopopulate_help'] = 'Ez automatikusan hozzáad a feladatlistához egy listát a kurzusban lévő anyagokról és tevékenységekről.<br/>
Ez a lista automatikusan frissül mindig, amikor a feladatlista szerkesztési oldalára lép.<br/>
Az elemek az "elrejtés" ikonra való kattintással elrejthetőek a listából.<br/>
Az automatikus elemek eltávolításához állítsa vissza ezt a beállítást Nem-re, majd kattintson a "Kurzusmodul elemeinek eltávolítása" pontra a "Szerkesztés" oldalon.';
$string['autoupdate'] = 'Bejelölés modulok teljesítésekor';
$string['autoupdate2'] = 'Bejelölés kurzusok vagy modulok teljesítésekor';
$string['autoupdate2_help'] = 'Ez automatikusan bejelöli a feladatlista elemeit, amikor a vonatkozó tevékenységet teljesíti a kurzuson.<br/>
Ha a teljesítés nyomon követése be van kapcsolva egy bizonyos tevékenységhez, azzal bejelöli az elemet a listán.<br>
Máskülönben egy tevékenység teljesítése tevékenységenként változthat - egy tananyag megtekintése, egy teszt kitöltése, hozzászólás egy fórumban stb. (hogy pontosan mikor kap egy tevékenység "teljesített" jelölést, a rendszergazda ki tudja derítani a \'mod/checklist/classes/local/autoupdate.php\' fájl alapján)<br>
Ha egy elem kapcsolva van egy kurzushoz és a kurzuson be van kapcsolva a teljesítés, akkor az elem frissülni fog, amikor a kurzus "teljesített" jelölést kap.';
$string['autoupdate_help'] = 'Ez automatikusan bejelöli a feladatlista elemeit, amikor a vonatkozó tevékenységek teljesítetté válnak a kurzuson.<br/>
Ha a teljesítés nyomon követése be van kapcsolva egy bizonyos tevékenységhez, ez felhasználható arra, hogy bejelölje az elemet a listán.<br>
Máskülönben egy tevékenység teljesítése tevékenységenként változthat - egy fájl megtekintése, egy teszt kitöltése, hozzászólás egy fórumban, stb. (hogy pontosan mitől lesz teljesített egy tevékenység, kérje meg a portál adminisztrátorát, hogy nézze meg a \'mod/checklist/classes/local/autoupdate.php\' fájlban)<br>';
$string['autoupdatenote'] = 'A tanuló jelölése frissül automatikusan - a csak a tanár által szerkesztett listákon nem jelennek meg frissítések';
$string['autoupdatewarning_both'] = 'Vannak olyan elemek ezen a listán, amelyek automatikusan frissülni fognak (ahogy a tanulók teljesítik a kapcsolt tevékenységet). Viszont ez egy tanuló és tanár által szerkesztett lista, tehát a haladásjelzők nem fognak frissülni, amíg a tanár jóvá nem hagyja a jelöléseket.';
$string['autoupdatewarning_student'] = 'Vannak olyan elemek ezen a listán, amelyek automatikusan frissülni fognak (ahogy a tanulók teljesítik a kapcsolt tevékenységet).';
$string['autoupdatewarning_teacher'] = 'Vannak olyan elemek ezen a listán, amelyek automatikusan frissülni fognak (ahogy a tanulók teljesítik a kapcsolt tevékenységet).';
$string['calendardescription'] = 'Ezt az eseményt ez a feladatlista adta hozzá: {$a}';
$string['canceledititem'] = 'Mégse';
$string['changetextcolour'] = 'Új szövegszín';
$string['checkeditemsdeleted'] = 'Bejelölt elemek törölve';
$string['checklist'] = 'feladatlista';
$string['checklist:addinstance'] = 'Új feladatlista hozzáadása';
$string['checklist:edit'] = 'Feladatlisták létrehozása és szerkesztése';
$string['checklist:emailoncomplete'] = 'E-mailek fogadása a teljesítésekről';
$string['checklist:preview'] = 'Feladatlista előnézete';
$string['checklist:updatelocked'] = 'Lezárt jelölések frissítése';
$string['checklist:updateother'] = 'Tanulók jelöléseinek frissítése';
$string['checklist:updateown'] = 'Jelöléseim frissítése';
$string['checklist:viewmenteereports'] = 'Mentorált haladásának megtekintése';
$string['checklist:viewreports'] = 'Tanulók haladásának megtekintése';
$string['checklistautoupdate'] = 'Feladatlisták automatikus frissítésének engedélyezése';
$string['checklistfor'] = 'Feladatlista ehhez:';
$string['checklistintro'] = 'Bevezetés';
$string['checklistsettings'] = 'Beállítások';
$string['checks'] = 'Jelölések';
$string['choosecourse'] = 'Válasszon kurzust...';
$string['comments'] = 'Megjegyzések';
$string['completionpercent'] = 'A négyzetek ennyi százalékának kell bejelöltnek lennie:';
$string['completionpercentgroup'] = 'Bejelölés szükséges';
$string['configchecklistautoupdate'] = 'Mielőtt ezt engedélyezné, néhány módosítás szükséges a Moodle kódjában, a részleteket olvassa el a mod/checklist/README.txt fájlból!';
$string['configshowcompletemymoodle'] = 'Ha ez nincs bejelölve, akkor a teljesített feladatok listái nem jelennek meg a "Személyes" oldalon.';
$string['configshowmymoodle'] = 'Ha ez nincs bejelölve, akkor a Feladatlista tevékenységei (haladásjelölőkkel) nem jelennek meg a "Személyes" oldalon.';
$string['configshowupdateablemymoodle'] = 'Ha ez be van jelölve, akkor csak a frissíthető feladatlisták jelennek meg a "Személyes" oldalon';
$string['confirmdeleteitem'] = 'Biztos benne, hogy végleg törli ezt a feladatlista-elemet?';
$string['deleteitem'] = 'Törölje ezt az elemet';
$string['duedatesoncalendar'] = 'Határidők hozzáadása a naptárhoz';
$string['edit'] = 'Feladatlista szerkesztése';
$string['editchecks'] = 'Jelölések szerkesztése';
$string['editdatesstart'] = 'Dátumok szerkesztése';
$string['editdatesstop'] = 'Dátumok szerkesztésének vége';
$string['edititem'] = 'Elem szerkesztése';
$string['emailoncomplete'] = 'E-mail küldése, ha a feladatlista kész:';
$string['emailoncomplete_help'] = 'Amikor egy feladatlista teljesül, értesítő e-mail küldhető: a tanulónak, aki teljesítette, a kurzus minden tanárának, vagy mindkettőnek.<br/>
Egy rendszergazda ellenőrizheti, hogy ki kapja meg ezt az e-mailt a \'mod:checklist/emailoncomplete\' funkcióval - alapesetben minden tanár és nem szerkesztő tanár jogosult rá.';
$string['emailoncompletebody'] = '{$a->user} felhasználó teljesítette a(z) \'{$a->checklist}\' feladatlistát a(z) \'{$a->coursename}\' kurzuson.
A feladatlista itt megtekinthető:';
$string['emailoncompletebodyown'] = 'Ön teljesítette a(z) \'{$a->checklist}\' feladatlistát a(z) \'{$a->coursename}\' kurzuson.
A feladatlista itt megtekinthető:';
$string['emailoncompletesubject'] = '{$a->user} felhasználó teljesítette a(z) \'{$a->checklist} feladatlistát.';
$string['emailoncompletesubjectown'] = 'Ön teljesítette a(z) \'{$a->checklist} feladatlistát.';
$string['enterurl'] = 'Írja be a webcímet...';
$string['eventchecklistcomplete'] = 'Feladatlista teljesítve';
$string['eventeditpageviewed'] = 'Szerkesztési oldal megtekintve';
$string['eventreportviewed'] = 'Lekérdezés megtekintve';
$string['eventstudentchecksupdated'] = 'Tanulók jelölései frissítve';
$string['eventteacherchecksupdated'] = 'Tanárok jelölései frissítve';
$string['export'] = 'Elemek exportálása';
$string['forceupdate'] = 'Jelölések frissítése az automatikus elemeknél';
$string['gradetocomplete'] = 'Osztályzat a teljesítéshez:';
$string['grouping'] = 'Látható a csoportosítás számára';
$string['guestsno'] = 'Nincs engedélye a feladatlista megtekintéséhez';
$string['headingitem'] = 'Ez az elem fejléc - nem lesz mellette jelölőnégyzet';
$string['import'] = 'Elemek importálása';
$string['importfile'] = 'Válasszon importálandó fájlt';
$string['importfromcourse'] = 'Teljes kurzus';
$string['importfromsection'] = 'Jelenlegi szekció';
$string['indentitem'] = 'Elem behúzása';
$string['itemcomplete'] = 'Elkészült';
$string['items'] = 'Feladatlista elemei';
$string['linkcourses'] = 'Kurzusokhoz kapcsolás engedélyezése';
$string['linkcourses_desc'] = 'Ha engedélyezve van, a feladatlista elemeit hozzákapcsolhatja a Moodle kurzusaihoz, ahol "teljesített" jelölést kapnak a kapcsolódó kurzus teljesítésekor. Az engedélyezés feladatlisták szerkesztésekor befolyásolhatja a teljesítményt, ha a portál sok kurzust kezel.';
$string['linkto'] = 'Kapcsolás ehhez:';
$string['linktocourse'] = 'Az elemhez kapcsolt kurzus';
$string['linktomodule'] = 'Az elemhez kapcsolt tevékenység';
$string['linktourl'] = 'Az elemhez kapcsolt hivatkozás';
$string['lockteachermarks'] = 'Tanári jelölések lezárása';
$string['lockteachermarks_help'] = 'Ha ez be van kapcsolva, amint a tanár "Igen" jelölést állít be, utána már nem tudja megváltoztatni azt. A \'mod/checklist:updatelocked\' jogosultsággal bíró felhasználók még így is tudják módosítani.';
$string['lockteachermarkswarning'] = 'Figyelem: ha már elmentette ezeket a jelöléseket, az "Igen"-t nem tudja megváltoztatni.';
$string['modulename'] = 'Feladatlista';
$string['modulename_help'] = 'A Feladatlista modullal a tanár feladatlistát állíthat össze a tanulóknak.';
$string['modulenameplural'] = 'Feladatlisták';
$string['moveitemdown'] = 'Elem mozgatása lefelé';
$string['moveitemup'] = 'Elem mozgatása felfelé';
$string['noitems'] = 'Nincsenek elemek a feladatlistában';
$string['optionalhide'] = 'Választható elemek elrejtése';
$string['optionalitem'] = 'Ez az elem választható';
$string['optionalshow'] = 'Választható elemek mutatása';
$string['or'] = 'VAGY';
$string['percentcomplete'] = 'Szükséges elemek';
$string['percentcompleteall'] = 'Minden elem';
$string['pluginadministration'] = 'Feladatlista kezelése';
$string['pluginname'] = 'Feladatlista';
$string['preview'] = 'Előnézet';
$string['progress'] = 'Haladás';
$string['removeauto'] = 'Kurzusmodul elemeinek eltávolítása';
$string['report'] = 'Haladás megtekintése';
$string['reporttablesummary'] = 'Táblázat, amely mutatja azokat az elemeket a feladatlistából, amelyeket az egyes tanulók már elvégeztek';
$string['requireditem'] = 'Ez az elem kötelező - teljesíteni kell';
$string['resetchecklistprogress'] = 'Feladatlistán elért haladás és felhasználói elemek visszaállítása';
$string['savechecks'] = 'Mentés';
$string['showcompletemymoodle'] = 'Elvégzett feladatlisták megjelenítése a "Személyes" oldalon';
$string['showfulldetails'] = 'Részletek megjelenítése';
$string['showhidechecked'] = 'A kiválasztott elemek mutatása/elrejtése';
$string['showmymoodle'] = 'Feladatlisták megjelenítése a "Személyes" oldalon';
$string['showprogressbars'] = 'Haladásjelzők mutatása';
$string['showupdateablemymoodle'] = 'Csak a frissíthető feladatlisták megjelenítése a "Személyes" oldalon';
$string['teacheralongsidecheck'] = 'Tanuló és tanár';
$string['teachercomments'] = 'A tanárok hozzáadhatnak megjegyzéseket';
$string['teacherdate'] = 'Tanár általi utolsó frissítés dátuma';
$string['teacheredit'] = 'Frissítette:';
$string['teacherid'] = 'A jelölést utoljára frissítő tanár';
$string['teachermarkno'] = 'A tanár szerint Ön még NEM teljesítette ezt';
$string['teachermarkundecided'] = 'A tanár még nem jelölte ezt';
$string['teachermarkyes'] = 'A tanár szerint Ön ezt teljesítette';
$string['teachernoteditcheck'] = 'Csak tanuló';
$string['teacheroverwritecheck'] = 'Csak tanár';
$string['theme'] = 'Feladatlista megjelenítésének stílusa';
$string['togglecolumn'] = 'Oszlop váltása';
$string['toggledates'] = 'Nevek és dátumok váltása';
$string['togglerow'] = 'Sor váltása';
$string['unindentitem'] = 'Elem kiengedése';
$string['updatecompletescore'] = 'Teljesítés osztályzatainak mentése';
$string['updateitem'] = 'Frissítés';
$string['userdate'] = 'A felhasználó ekkor frissítette ezt az elemet utoljára:';
$string['useritemsallowed'] = 'A felhasználók hozzáadhatják a saját elemeiket';
$string['useritemsdeleted'] = 'Felhasználói elemek törölve';
$string['view'] = 'Feladatlista megtekintése';
$string['viewall'] = 'Minden tanuló megtekintése';
$string['viewallcancel'] = 'Mégse';
$string['viewallsave'] = 'Mentés';
$string['viewsinglereport'] = 'Haladás megtekintése';
$string['viewsingleupdate'] = 'Haladás frissítése';
$string['yesnooverride'] = 'Igen, nem felülírható';
$string['yesoverride'] = 'Igen, felülírható';
