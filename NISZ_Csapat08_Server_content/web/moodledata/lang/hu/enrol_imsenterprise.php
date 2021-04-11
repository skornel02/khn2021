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
 * Strings for component 'enrol_imsenterprise', language 'hu', version '3.10'.
 *
 * @package     enrol_imsenterprise
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aftersaving...'] = 'A beállítások mentése után lehetőség van';
$string['allowunenrol'] = 'Az IMS adataival tanulók/tanárok kiiratkoztatása';
$string['allowunenrol_desc'] = 'Ha az Enterprise adatai ezt tartalmazzák, a beállítás bekapcsolásakor a kurzusfelvételek törlődnek.';
$string['basicsettings'] = 'Alapbeállítások';
$string['categoryidnumber'] = 'Kategória azonosítószámának engedélyezése';
$string['categoryidnumber_desc'] = 'Bekapcsolása esetén az IMS Enterprise kategóriát hoz létre azonosítószámmal';
$string['categoryseparator'] = 'Kategóriaelválasztó karakter';
$string['categoryseparator_desc'] = 'Akkor szükséges, ha a "Kategória azonosítószáma" be van kapcsolva. Ez a karakter választja el a kategória nevét az azonosítószámától.';
$string['coursesettings'] = 'Kurzusadatokkal kapcsolatos lehetőségek';
$string['createnewcategories'] = 'Új (rejtett) kurzuskategóriák létrehozása, ha a Moodle-ban nem találhatók';
$string['createnewcategories_desc'] = 'a az <org><orgunit> elem szerepel egy kurzus bejövő adatai között, annak tartalma szolgál a kategória létrehozására, ha egy kurzust a legelejétől kell létrehozni. A segédprogram a meglévő kurzusokat NEM sorolja be újra kategóriákba.

Ha a megadott névvel nem szerepel kategória, akkor egy rejtett kategória jön létre.';
$string['createnewcourses'] = 'Új (rejtett) kurzusok létrehozása, ha a Moodle-ban nem találhatók';
$string['createnewcourses_desc'] = 'Az IMS Enterprise beiratkozási segédprogramjával új kurzusok hozhatók létre bármely, az IMS-adatok között szereplő, de a Moodle adatbázisában nem szereplő beiratkozásokhoz, ha ez a beállítás be van kapcsolva.
Bármely újonnan előállított kurzus létrehozásakor rejtett lesz.';
$string['createnewusers'] = 'Új felhasználói fiókok létrehozása a Moodle-ban még nem regisztrált felhasználók számára';
$string['createnewusers_desc'] = '<p>Általában az IMS Enterprise beiratkozásai adatai tanulók egy csoportját írják le. Ha ez be van kapcsolva, bármely, a Moodle adatbázisában nem létező felhasználóhoz létre lehet hozni azonosítót.</p>
<p>A felhasználók keresése először "azonosítószám", majd Moodle-beli felhasználói nevük alapján történik.</p>


<p>Az IMS Enterprise segédprogram a jelszavakat nem importálja. A felhasználók hitelesítéséhez ajánlatos a Moodle hitelesítési segédprogramjainak a használata.</p>';
$string['cronfrequency'] = 'Feldolgozás gyakorisága';
$string['deleteusers'] = 'Felhasználók törlése, ha az IMS adataiban elő van írva';
$string['deleteusers_desc'] = '<p>Ha ez a beállítás be van kapcsolva, az IMS Enterprise beiratkozási adataival megadhatók törölni kívánt felhasználói azonosítók (ha a "recstatus" jelölő 3-ra van állítva, ami a felhasználói azonosító törlését jelenti).</p>
<p>A Moodle-ban szokásos megoldásnak megfelelően a felhasználói rekord ténylegesen nem törlődik a Moodle adatbázisából, helyette egy jelölő kerül a felhasználói azonosító mellé, jelezve annak törölt voltát.</p>';
$string['doitnow'] = 'az IMS Enterprise importálás azonnali végrehajtására';
$string['emptyattribute'] = 'Hagyja üresen';
$string['filelockedmail'] = 'Az IMS-állomány alapú beiratkozáshoz ({$a}) használt szöveges állományt a cron nem tudja törölni. Ez rendszerint azt jelenti, hogy az engedélyek nem megfelelőek. Javítsa ki az engedélyeket, hogy a Moodle ki tudja törölni a fájlt, ellenkező esetben megismétlődhet annak feldolgozása.';
$string['filelockedmailsubject'] = 'Lényeges hiba: beiratkozási állomány';
$string['fixcasepersonalnames'] = 'A személyneveknek a cím írásmódja szerinti átalakítása';
$string['fixcaseusernames'] = 'Felhasználónevek kisbetűsre módosítása';
$string['ignore'] = 'Kihagyás';
$string['importimsfile'] = 'IMS Enterprise állomány importálása';
$string['imsenterprise:config'] = 'IMS Enterprise beiratkozási példányainak beállítása';
$string['imsenterprisecrontask'] = 'Beiratkozási állomány feldolgozása';
$string['imsrolesdescription'] = 'Az IMS Enterprise specifikációja 8 különféle szerepet foglal magában. Válassza ki, miként szeretné ezeket a Moodle-hoz hozzárendelni, és azt is, ha valamelyiket szeretné figyelmen kívül hagyni.';
$string['location'] = 'Állomány helye';
$string['logtolocation'] = 'Naplófájl kimeneti helye (üres, ha nincs naplózás)';
$string['mailadmins'] = 'Rendszergazdák értesítése e-mailben';
$string['mailusers'] = 'Felhasználók értesítése e-mailben';
$string['messageprovider:imsenterprise_enrolment'] = 'Az MS Enterprise beiratkozási üzenetei';
$string['miscsettings'] = 'Egyéb';
$string['nestedcategories'] = 'Beágyazott kategóriák engedélyezése';
$string['nestedcategories_desc'] = 'Bekapcsolása esetén az IMS Enterprise beágyazott kategóriákat hoz létre';
$string['pluginname'] = 'IMS Enterprise állomány';
$string['pluginname_desc'] = 'Ez a módszer ismételten ellenőrzi és feldolgozza a megadott helyen lévő, speciális formázású szöveget. Az állománynak meg kell felelnie az IMS Enterprise specifikációinak, azaz tartalmaznia kell a személy, csoport és tagság XML elemeit.';
$string['privacy:metadata'] = 'Az  IMS Enterprise file enrolment segédprogram semmilyen személyes adatot nem tárol.';
$string['processphoto'] = 'Felhasználó fényképadatainak hozzáadása a profilhoz';
$string['processphotowarning'] = 'Figyelmeztetés: a képfeldolgozás valószínűleg számottevően megterheli a szervert. Ha sok tanuló adatait kell feldolgozni, inkább kapcsolja ki ezt a lehetőséget.';
$string['restricttarget'] = 'Csak az alábbi cél megadása esetén dolgozza fel az adatokat';
$string['restricttarget_desc'] = 'Egy IMS Enterprise adatfájlt számos "célra", vagyis különféle tanuláskezelő rendszerekbe, vagy ugyanazon iskolán/egyetemen belül
eltérő rendszerekbe szánhatunk. Az Enterprise fájlban megadhatjuk, hogy az adatokat egy vagy több névvel azonosított célrendszer számára szánjuk-e,
éspedig úgy, hogy <target> címkével ruházzuk fel őket a <properties> címkén belül.
Sok esetben ezzel nem kell törődnünk. Elég a beállítást üresen hagyni, a Moodle az adatállományt mindig feldolgozza, akár van megadva cél, akár nincs.
 Egyéb esetben adja meg a <target> címkén belül előállítandó nevet.';
$string['roles'] = 'Szerepek';
$string['settingfullname'] = 'IMS leíró címke a kurzus teljes címéhez';
$string['settingfullnamedescription'] = 'A teljes név kötelező kurzusmező, ezért a kiválasztott leíró címkét meg kell adnia az  IMS Enterprise állományban.';
$string['settingshortname'] = 'IMS leíró címke a kurzus rövid címéhez';
$string['settingshortnamedescription'] = 'A rövid cím kötelező kurzusmező, ezért a kiválasztott leíró címkét meg kell adnia az  IMS Enterprise állományban.';
$string['settingsummary'] = 'IMS leíró címke a kurzus összegzéséhez';
$string['settingsummarydescription'] = 'Választható mező. Hagyja üresen, ha nem kíván kurzusösszegzést megadni.';
$string['sourcedidfallback'] = 'Az adott személy azonosítójaként használja a &quot;sourceid&quot;-t, ha a &quot;userid&quot; mező nem található';
$string['sourcedidfallback_desc'] = 'Az IMS adatai között a <sourcedid> mező a forrásrendszerben használatos, személyhez kapcsolódó azonosítókódot képviseli. A <userid> egy ettől különböző mező, amelyben a felhasználó által belépéskor használandó azonosítókód szerepel. Sokszor, de nem mindenkor, a két kód lehet azonos.
Egyes tanulói információs rendszerek nem állítják elő a <userid> mezőt. Ilyenkor be kell kapcsolnia a beállítást a <sourcedid> Moodle felhasználói azonosítójaként való használatának engedélyezésére. Ellenkező esetben hagyja kikapcsolt állapotban.';
$string['truncatecoursecodes'] = 'Kurzuskódok rövidítése ilyen hosszúságúra';
$string['truncatecoursecodes_desc'] = '<p>Bizonyos esetekben lehetnek olyan kurzuskódjai, amelyeket feldolgozás előtt megadott hosszúságra le kíván rövidíteni. Ilyen esetben adja meg a cellában a karakterek számát. Ellenkező esetben hagyja a cellát <strong>üresen</strong>, ekkor nem történik lerövidítés.</p>';
$string['updatecourses'] = 'Kurzus frissítése';
$string['updatecourses_desc'] = 'Bekapcsolása esetén az IMS Enterprise beiratkozási segédprogramja frissíti a kurzus teljes és rövid címét (ha a "recstatus" 2-re, azaz frissítésre van állítva).';
$string['updateusers'] = 'Felhasználói fiókok frissítése, ha ezek az IMS-adatok között meg vannak adva';
$string['updateusers_desc'] = 'Bekapcsolása esetén az IMS Enterprise beiratkozási adatai a felhasználói fiókok módosítását írhatják elő (ha a "recstatus" 2-re, azaz frissítésre van állítva).';
$string['usecapitafix'] = 'Jelölje be a négyzetet, ha Capitat használ (ezek XML-formája kissé eltérő)';
$string['usecapitafix_desc'] = '<p>A Capita által létrehozott tanulói adatbázisrendszerben egy apró hiba van annak XML-kimenetében. Ha a Capita-t használja, kapcsolja be ezt az opciót, ellenkező esetben hagyja bejelöletlenül.</p>';
$string['usersettings'] = 'Felhasználói adatok lehetőségei';
$string['zeroisnotruncation'] = 'A 0 azt jelenti, hogy nincs rövidítés';
