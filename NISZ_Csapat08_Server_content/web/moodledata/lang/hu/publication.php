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
 * Strings for component 'publication', language 'hu', version '3.10'.
 *
 * @package     publication
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add_uploads'] = 'Fájlok hozzáadása';
$string['allfiles'] = 'Minden fájl';
$string['allowedfiletypes'] = 'Engedélyezett fájltípusok (,)';
$string['allowedfiletypes_err'] = 'Ellenőrizze a bevitelt! Nem engedélyezett fájlkiterjesztés vagy elválasztó';
$string['allowedfiletypes_help'] = 'Adja meg az engedélyezett fájltípusokat, vesszővel (,) elválasztva. pl. txt, jpg
Ha tetszőleges fájltípus engedélyezett, hagyja a mezőt üresen. A szűrő nem tesz különbséget kis- és nagybetűk között, tehát PDF=pdf.';
$string['allowsubmissionsanddescriptionfromdatesummary'] = 'A feladat részletei és a leadási űrlap ekkortól lesznek elérhetőek: <strong>{$a}</strong>';
$string['allowsubmissionsfromdate'] = 'ekkortól:';
$string['allowsubmissionsfromdate_import'] = 'Jóváhagyás ekkortól';
$string['allowsubmissionsfromdate_upload'] = 'Feltöltés lehetséges ekkortól:';
$string['allowsubmissionsfromdateh'] = 'Feltöltés/Jóváhagyás időszaka';
$string['allowsubmissionsfromdateh_help'] = 'Meghatározhatja azt az időszakot, amely alatt a tanulók feltölthetik a fájlokat vagy jóváhagyhatják a közzétételt. Ezalatt szerkeszthetik a fájlokat és vissza is vonhatják a közzétételre vonatkozó jóváhagyásukat.';
$string['allowsubmissionsfromdatesummary'] = 'Ez a feladat ekkortól fogad leadott munkákat: <strong>{$a}</strong>';
$string['alwaysshowdescription'] = 'Mindig mutassa a leírást';
$string['alwaysshowdescription_help'] = 'Kikapcsolt állapotban a feladat leírása csak a "Leadott munkák engedélyezése ekkortól" időponttól válik láthatóvá a tanulók számára';
$string['approval_timeover'] = 'Csak a módosítási időszakban változtathatja meg a jóváhagyását!';
$string['approveusers'] = 'látható mindenkinek';
$string['assignment'] = 'Feladat';
$string['assignment_help'] = 'Válassza ki a feladatot, amelyből importálni szeretné a fájlokat! Jelenleg a rendszer a csoportos feladatokat nem támogatja, így az nem választható.';
$string['assignment_notfound'] = 'Az importálásra használt feladat nem található.';
$string['assignment_notset'] = 'Nincs kiválasztva feladat!';
$string['availability'] = 'Feltöltés/Jóváhagyás időszaka';
$string['choose'] = 'válasszon...';
$string['configmaxbytes'] = 'Fájlok alapértelmezett maximális mérete a tanulói könyvtárban';
$string['configmaxfiles'] = 'Csatolmányok engedélyezett alapértelmezett maximális száma felhasználónként';
$string['configobtainstudentapproval'] = 'A dokumentumok a tanuló beleegyezése után lesznek láthatóak';
$string['configobtainteacherapproval'] = 'A tanulók dokumentumai alapesetben láthatóak a többi résztvevő számára';
$string['configrequiremodintro'] = 'Kapcsolja ki ezt a beállítást, ha nem kívánja előírni a felhasználóknak, hogy minden tevékenységhez leírást adjanak meg.';
$string['courseuploadlimit'] = 'Kurzus feltöltési korlátja';
$string['cutoffdate'] = 'Lezárás dátuma';
$string['cutoffdate_help'] = 'Beállítása esetén a feladat nem fogad leadott munkákat ezen időpont után, ha nincs meghosszabbítás.';
$string['cutoffdate_import'] = 'Jóváhagyási határidő:';
$string['cutoffdate_upload'] = 'Feltöltési határidő:';
$string['cutoffdatefromdatevalidation'] = 'A lezárás dátuma nem előzheti meg a leadott munkák engedélyezésének kezdő dátumát.';
$string['cutoffdatevalidation'] = 'A lezárás dátuma nem lehet korábbi a határidőnél';
$string['downloadall'] = 'Minden fájl letöltése ZIP-ként';
$string['duedate'] = 'eddig:';
$string['duedate_help'] = 'A feladat leadási határideje. Ezt követően is lehet munkákat leadni, de azok késői leadásként lesznek megjelölve. Egy bizonyos időponton túli leadás megakadályozásához állítson be lezárási dátumot.';
$string['duedate_import'] = 'Jóváhagyás eddig:';
$string['duedate_upload'] = 'Feltöltés lehetséges eddig:';
$string['duedatevalidation'] = 'A határidő nem előzheti meg a leadott munkák engedélyezésének kezdő időpontját.';
$string['edit_timeover'] = 'A fájlokat csak a módosítási időszak alatt lehet szerkeszteni.';
$string['edit_uploads'] = 'fájlok szerkesztése/feltöltése';
$string['entiresperpage'] = 'Oldalankénti résztvevők száma';
$string['extensionduedate'] = 'Meghosszabbítási határidő';
$string['extensionnotafterduedate'] = 'A meghosszabbítási idő nem előzheti meg a leadási határidőt';
$string['extensionnotafterfromdate'] = 'A meghosszabbítási idő nem előzheti meg a leadott munkák engedélyezésének kezdő időpontját.';
$string['extensionto'] = 'Meghosszabbítás eddig:';
$string['go'] = 'Mehet';
$string['grantextension'] = 'meghosszabbítás engedélyezése';
$string['guideline'] = 'látható mindenkinek:';
$string['hidden'] = 'rejtett';
$string['importfrom_err'] = 'Válasszon feladatot az importáláshoz.';
$string['maxbytes'] = 'Csatolmányok maximális mérete';
$string['maxfiles'] = 'Csatolmányok maximális száma';
$string['mode'] = 'Mód';
$string['mode_help'] = 'Válassza ki, hogy a tanulók maguk tölthetnek-e fel dokumentumokat a könyvtárba, vagy egy feladat dokumentumai legyenek a forrás.';
$string['modeimport'] = 'egy feladatból vegyen dokumentumokat';
$string['modeupload'] = 'a tanulók maguk tölthetnek fel dokumentumokat';
$string['modulename'] = 'Tanulói mappa';
$string['modulename_help'] = 'A tanulói mappával a következők érhetők el:

* A résztvevők feltölthetnek dokumentumokat, melyek vagy azonnal elérhetőek lesznek a többi résztvevő számára, vagy csak ha már ellenőrizte a dokumentumokat és hozzájárulását adta.
*Kijelölhető egy feladat, amely a mappa alapját képezi. A tanár eldöntheti, hogy a feladat mely dokumentumai legyenek láthatóak minden résztvevő számára. A tanárok engedélyezhetik is, hogy a résztvevők döntsék el, mely dokumentumok legyenek a többiek számára láthatóak.';
$string['modulenameplural'] = 'Tanulói mappák';
$string['myfiles'] = 'Saját fájlok';
$string['name'] = 'Tanulói mappa neve';
$string['nofiles'] = 'Nincsenek fájlok';
$string['nofilestozip'] = 'Nincsenek tömöríthető fájlok';
$string['nopublicationsincourse'] = 'A kurzusban nincs közzététel.';
$string['nothingtodisplay'] = 'Nincsenek megjeleníthető bejegyzések';
$string['notice'] = 'Figyelem:';
$string['notice_importnoapproval'] = 'A következő fájlok mindenki számára láthatóak';
$string['notice_importrequireapproval'] = 'Döntse el, hogy a fájljait mindenki elérheti-e.';
$string['notice_uploadnoapproval'] = 'Minden fájl azonnal mindenki számára láthatóvá válik. A tanár fenntartja a jogot, hogy bármikor elrejtse a közzétett fájlokat.';
$string['notice_uploadrequireapproval'] = 'Minden feltöltött fájl csak tanári ellenőrzés után lesz látható';
$string['obtainstudentapproval'] = 'Jóváhagyás megszerzése';
$string['obtainstudentapproval_help'] = 'Döntse el, hogy a tanulói jóváhagyás megszerezhető-e: <br><ul><li> igen - A fájlok csak akkor érhetőek el mindenkinek, miután a tanuló jóváhagyta. A tanár kiválaszthat tanulókat/fájlokat, hogy jóváhagyást kérjen.</li><li> nem - A tanuló jóváhagyását nem kezeli a Moodle.
 A fájl láthatósága egyedül a tanár döntése.</li></ul>';
$string['obtainteacherapproval'] = 'Alapesetben jóváhagyva';
$string['obtainteacherapproval_help'] = 'Döntse el, hogy a fájlok feltöltés után azonnal láthatóak legyenek-e, vagy sem: <br><ul><li> igen - minden fájl azonnal látható lesz mindenki számára </li><li> nem - a fájlok csak a tanár jóváhagyása után lesznek közzétéve</li></ul>';
$string['optionalsettings'] = 'Beállítások';
$string['pluginadministration'] = 'Tanulói mappa beállításai';
$string['pluginname'] = 'Tanulói mappa';
$string['publication:addinstance'] = 'Új tanulói mappa hozzáadása';
$string['publication:approve'] = 'Döntse el, hogy a fájlokat minden tanuló láthatja-e';
$string['publication:grantextension'] = 'Meghosszabbítás engedélyezése';
$string['publication:upload'] = 'Fájlok feltöltése tanulói mappába';
$string['publication:view'] = 'Tanulói mappa megtekintése';
$string['publicfiles'] = 'Nyilvános fájlok';
$string['published_aftercheck'] = 'nem, csak tanári jóváhagyás után';
$string['published_immediately'] = 'igen, azonnal, tanári jóváhagyás nélkül';
$string['rejectusers'] = 'mindenki számára láthatatlan';
$string['requiremodintro'] = 'Kötelező legyen a tevékenységleírás';
$string['reset'] = 'Visszaállítás';
$string['reset_userdata'] = 'Minden adat';
$string['resetstudentapproval'] = 'Állapot visszaállítása';
$string['save_changes'] = 'Módosítások mentése';
$string['saveapproval'] = 'Jóváhagyás mentése';
$string['savestudentapprovalwarning'] = 'Biztosan szeretné elmenteni a módosításokat? Az állapoton nem tud változtatni, ha már be van állítva.';
$string['saveteacherapproval'] = 'jóváhagyás mentése';
$string['status'] = 'Állapot';
$string['student_approve'] = 'jóváhagy';
$string['student_approved'] = 'jóváhagyva';
$string['student_pending'] = 'nem látható (nincs jóváhagyva)';
$string['student_reject'] = 'visszautasít';
$string['student_rejected'] = 'visszautasítva';
$string['studentapproval'] = 'Állapot';
$string['studentapproval_help'] = 'Az oszlop állapota jelzi a tanulók jóváhagyással kapcsolatos válaszát

* ? - jóváhagyás függőben
* ✓ - jóváhagyás megadva
* ✖ - jóváhagyás elutasítva';
$string['teacher_approved'] = 'látható (jóváhagyva)';
$string['teacher_pending'] = 'jóváhagyás függőben';
$string['teacher_rejected'] = 'elutasítva';
$string['teacherapproval'] = 'Jóváhagyás';
$string['updatefiles'] = 'Fájlok frissítése';
$string['updatefileswarning'] = 'Egy tanuló tanulói mappában lévő fájljai a feladat leadásakor frissülnek. A már látható fájlok is lecserélődnek, ha törli vagy frissíti őket - a tanuló láthatósággal kapcsolatos beállításai nem változnak.';
$string['visibility'] = 'mindenki számára látható';
$string['visible'] = 'látható';
$string['visibleforstudents'] = 'mindenki számára látható';
$string['visibleforstudents_no'] = 'Ez a fájl NEM látható a tanulóknak';
$string['visibleforstudents_yes'] = 'A tanulók láthatják ezt a fájlt';
$string['warning_changefromobtainstudentapproval'] = 'Ha végrehajtja a változtatást, csak Ön döntheti el, mely fájlok legyen láthatóak minden tanuló számára. A tanulók jóváhagyására nem lesz szükség. Minden jóváhagyottként megjelölt fájl látható lesz minden tanuló számára, függetlenül az adott tanuló jóváhagyásától.';
$string['warning_changefromobtainteacherapproval'] = 'A beállítás bekapcsolása után minden feltöltött fájl látható lesz a többi résztvevő számára. Bizonyos tanulók számára manuálisan elrejthet fájlokat.';
$string['warning_changetoobtainstudentapproval'] = 'Ha végrehajtja a változtatást, a tanulóktól jóváhagyásra lesz szükség minden láthatóként megjelölt fájlhoz. A fájlok csak a tanulók jóváhagyása után lesznek láthatóak.';
$string['warning_changetoobtainteacherapproval'] = 'Miután kikapcsolta ezt a beállítást, a feltöltött fájlok nem lesznek láthatóak automatikusan a többi résztvevőnek. Önnek kell eldöntenie, mely fájlok legyenek láthatóak. A már látható fájlok láthatatlanok lesznek.';
$string['withselected'] = 'A kiválasztottakkal...';
$string['zipusers'] = 'Letöltés ZIP-ként';
