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
 * Strings for component 'tool_uploadcourse', language 'hu', version '3.10'.
 *
 * @package     tool_uploadcourse
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowdeletes'] = 'Törlés engedélyezése';
$string['allowdeletes_help'] = 'Elfogadja-e a törlési mezőt.';
$string['allowrenames'] = 'Átnevezés engedélyezése';
$string['allowrenames_help'] = 'Elfogadja-e az átnevezési mezőt.';
$string['allowresets'] = 'Visszaállítás engedélyezése';
$string['allowresets_help'] = 'Elfogadja-e a visszaállítási mezőt.';
$string['cachedef_helper'] = 'Súgó gyorsítótárazása';
$string['cannotdeletecoursenotexist'] = 'Nem létező kurzust nem lehet törölni.';
$string['cannotforcelang'] = 'A kurzus esetén a nyelv előírása nem engedélyezett';
$string['cannotgenerateshortnameupdatemode'] = 'Nem hozható létre rövid név, ha a frissítés engedélyezve van.';
$string['cannotreadbackupfile'] = 'A biztonsági mentés állománya nem olvasható';
$string['cannotrenamecoursenotexist'] = 'Nem létező kurzust nem lehet átnevezni.';
$string['cannotrenameidnumberconflict'] = 'A kurzust nem lehet átnevezni, a kurzus azonosítószáma egy létező kurzuséval ütközik.';
$string['cannotrenameshortnamealreadyinuse'] = 'A kurzust nem lehet átnevezni, a rövid név már használatban van.';
$string['cannotupdatefrontpage'] = 'A címoldalt tilos módosítani!';
$string['canonlyrenameinupdatemode'] = 'Csak akkor nevezhető át egy kurzus, ha a frissítés engedélyezve van.';
$string['canonlyresetcourseinupdatemode'] = 'Egy kurzus csak frissítési üzemmódban állítható vissza.';
$string['couldnotresolvecatgorybyid'] = 'Az azonosító alapján nem oldható fel a kategória.';
$string['couldnotresolvecatgorybyidnumber'] = 'Az azonosítószám alapján nem oldható fel a kategória.';
$string['couldnotresolvecatgorybypath'] = 'Az útvonal alapján nem oldható fel a kategória.';
$string['coursecreated'] = 'A kurzus elkészült.';
$string['coursedeleted'] = 'A kurzus törölve lett.';
$string['coursedeletionnotallowed'] = 'A kurzustörlés nincs engedélyezve';
$string['coursedoesnotexistandcreatenotallowed'] = 'A kurzus nem létezik, kurzusok létrehozása pedig nincs engedélyezve';
$string['courseexistsanduploadnotallowed'] = 'A kurzus létezik, a frissítés pedig nincs engedélyezve';
$string['coursefile'] = 'Állomány';
$string['coursefile_help'] = 'Ennek CSV-állománynak kell lennie.';
$string['courseidnumberincremented'] = 'A kurzus azonosítószáma {$a->from} értékről {$a->to} értékre növelve';
$string['courseprocess'] = 'Kurzusfolyamat';
$string['courserenamed'] = 'A kurzus át lett nevezve';
$string['courserenamingnotallowed'] = 'A kurzus átnevezése nincs engedélyezve';
$string['coursereset'] = 'A kurzus vissza lett állítva';
$string['courseresetnotallowed'] = 'A kurzus visszaállítása nincs engedélyezve';
$string['courserestored'] = 'A kurzus helyre lett állítva';
$string['coursescreated'] = 'Elkészült kurzus:  {$a}';
$string['coursesdeleted'] = 'Törölt kurzus:  {$a}';
$string['courseserrors'] = 'Kurzushiba:  {$a}';
$string['courseshortnamegenerated'] = 'Előállított rövid kurzusnév:  {$a}';
$string['courseshortnameincremented'] = 'A kurzus rövid neve {$a->from} értékről {$a->to} értékre növelve';
$string['coursestotal'] = 'Összes kurzus:  {$a}';
$string['coursesupdated'] = 'Frissített kurzus:  {$a}';
$string['coursetemplatename'] = 'Feltöltés után helyreállítás ebből a kurzusból';
$string['coursetemplatename_help'] = 'Adjon meg egy létező rövid kurzusnevet az összes kurzus létrehozásához szolgáló sablonhoz.';
$string['coursetorestorefromdoesnotexist'] = 'A helyreállítandó kurzus nem létezik.';
$string['courseupdated'] = 'A kurzus frissítve lett';
$string['createall'] = 'Az összes létrehozása szükség esetén a rövid név növelésével';
$string['createnew'] = 'Csak új kurzusok létrehozása a meglévők kihagyásával';
$string['createorupdate'] = 'Új kurzusok létrehozása vagy a meglévők frissítése';
$string['csvdelimiter'] = 'CSV-elválasztó';
$string['csvdelimiter_help'] = 'A CSV-állomány CSV-határolójele.';
$string['csvfileerror'] = 'Gond van a CSV-fájl formátumával. Ellenőrizze, egyeznek-e a fejlécek és az oszlopok, és helyes-e az elválasztó és a kódolás: {$a}';
$string['csvline'] = 'Sor';
$string['customfieldinvalid'] = 'Az egyedi  \'{$a}\' mező üres vagy érvénytelen adatot tartalmaz';
$string['defaultvalues'] = 'Kurzus alapértékei';
$string['defaultvaluescustomfieldcategory'] = '\'{$a}\' alapértékei';
$string['encoding'] = 'Kódolás';
$string['encoding_help'] = 'A CSV-állomány kódolása';
$string['errorcannotcreateorupdateenrolment'] = 'A(z)  \'{$a}\' beiratkozási módszert nem lehet létrehozni vagy frissíteni';
$string['errorcannotdeleteenrolment'] = 'A(z)  \'{$a}\' beiratkozási módszert nem lehet törölni';
$string['errorcannotdisableenrolment'] = 'A(z)  \'{$a}\' beiratkozási módszert nem lehet érvényteleníteni';
$string['errorwhiledeletingcourse'] = 'Hiba a kurzus törlése közben';
$string['errorwhilerestoringcourse'] = 'Hiba a kurzus helyreállítása közben';
$string['generatedshortnamealreadyinuse'] = 'Az előállított rövid név már használatban van.';
$string['generatedshortnameinvalid'] = 'Az előállított rövid név  érvénytelen.';
$string['id'] = 'Azonosító';
$string['idnumberalreadyinuse'] = 'Az azonosítószámot egy kurzus már használja';
$string['importoptions'] = 'Importálási beállítások';
$string['invalidbackupfile'] = 'A biztonsági mentés állománya érvénytelen';
$string['invalidcourseformat'] = 'Érvénytelen kurzusforma';
$string['invalidcsvfile'] = 'Érvénytelen bemeneti CSV-fájl';
$string['invalidencoding'] = 'Érvénytelen kódolás';
$string['invalideupdatemode'] = 'A kiválasztott frissítési mód érvénytelen';
$string['invalidfullnametoolong'] = 'A teljes név mezője legfeljebb {$a} karakter lehet.';
$string['invalidmode'] = 'A kiválasztott üzemmód érvénytelen';
$string['invalidroles'] = 'Érvénytelen szerepnév: {$a}';
$string['invalidshortname'] = 'Érvénytelen rövid név';
$string['invalidshortnametoolong'] = 'A rövid név mezője legfeljebb {$a} karakter lehet.';
$string['invalidvisibilitymode'] = 'Érvénytelen láthatósági mód';
$string['missingmandatoryfields'] = 'Hiányzó érték előírt mezők esetén:  {$a}';
$string['missingshortnamenotemplate'] = 'Hiányzik a rövid név és nincs beállítva hozzá sablon';
$string['mode'] = 'Feltöltési mód';
$string['mode_help'] = 'Itt adhatja meg, hogy létrehozhatók és/vagy frissíthetők-e kurzusok.';
$string['nochanges'] = 'Nincs változás';
$string['pluginname'] = 'Kurzusfeltöltés';
$string['preview'] = 'Előnézet';
$string['privacy:metadata'] = 'A  Course upload segédprogram nem tárol személyes adatokat.';
$string['reset'] = 'Feltöltés után a kurzus visszaállítása';
$string['reset_help'] = 'Létrehozás és/vagy frissítés után visszaállítsa-e a kurzust.';
$string['restoreafterimport'] = 'Importálás után helyreállítás';
$string['result'] = 'Eredmény';
$string['rowpreviewnum'] = 'Előnézet sorai';
$string['rowpreviewnum_help'] = 'A CSV-állomány következő oldalon megjelenítendő sorainak száma. Ezzel korlátozható a következő oldal mérete.';
$string['shortnametemplate'] = 'Rövid név előállításához való sablon';
$string['shortnametemplate_help'] = 'A kurzus rövid címe megjelenik a navigálásban. Használhatja a sablon szintaxisát (%f = teljes cím, %i = azonosítószám), vagy megadhat egy növelendő kezdeti értéket.';
$string['templatefile'] = 'Feltöltés után helyreállítás ebből a fájlból.';
$string['templatefile_help'] = 'Fájl kiválasztása sablonként az összes kurzus létrehozásához';
$string['unknownimportmode'] = 'Ismeretlen importálási mód';
$string['updatemissing'] = 'Hiányzó elemek pótlása CSV-adatokból és alapértékekből.';
$string['updatemode'] = 'Frissítési üzemmód';
$string['updatemode_help'] = 'Ha engedélyezi kurzusok frissítését, azt is meg kell adnia, hogy mivel frissüljenek a kurzusok.';
$string['updatemodedoessettonothing'] = 'A frissítési üzemmód semmilyen frissítést nem engedélyez';
$string['updateonly'] = 'Csak a létező kurzusok frissítése';
$string['updatewithdataonly'] = 'Frissítés csak CSV-adatokkal';
$string['updatewithdataordefaults'] = 'Frissítés CSV-adatokkal  és alapértékekkel.';
$string['uploadcourses'] = 'Kurzusok feltöltése';
$string['uploadcourses_help'] = 'Kurzusok feltölthetők az alábbi formátumú szöveges állományból:
* Az állomány minden sora egy rekordot tartalmaz
* Minden rekord vesszővel (vagy más elhatárolóval) elválasztott adatsort tartalmaz
* Az első rekord az állomány többi részét meghatározó mezőnevek felsorolását tartalmazza
* Előírt mezőnevek a rövid név, a teljes név és a kategória';
$string['uploadcoursespreview'] = 'Kurzusok előnézetének feltöltése';
$string['uploadcoursesresult'] = 'Kurzuseredmények feltöltése';
