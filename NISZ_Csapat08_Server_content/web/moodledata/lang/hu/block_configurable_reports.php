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
 * Strings for component 'block_configurable_reports', language 'hu', version '3.10'.
 *
 * @package     block_configurable_reports
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitypost'] = 'Aktivitási bejegyzések';
$string['activityview'] = 'Aktivitás megtekintései';
$string['addreport'] = 'Lekérdezés hozzáadása';
$string['anyone'] = 'Bárki';
$string['anyone_summary'] = 'Bárki megtekintheti majd ezt a lekérdezést';
$string['availablemarks'] = 'Elérhető jelölések';
$string['average'] = 'Átlagos';
$string['badconditionexpr'] = 'Helytelen feltétel-meghatározás';
$string['badsize'] = 'Helytelen méret, %-ban vagy pixelben kell megadni';
$string['badtablewidth'] = 'Helytelen szélesség, %-ban vagy abszolút értékben kell megadni';
$string['bar'] = 'Oszlop';
$string['barsummary'] = 'Oszlopdiagram';
$string['blockname'] = 'Alakítható lekérdezések';
$string['calcs'] = 'Számítások';
$string['categories'] = 'Kategóriák';
$string['categoryfield'] = 'Kategóriamező';
$string['categoryfieldorder'] = 'Kategóriamezők sorrendje';
$string['ccoursefield'] = 'Kurzusmező feltétele';
$string['cellalign'] = 'Cellaigazítás';
$string['cellsize'] = 'Cellaméret';
$string['cellwrap'] = 'Sortöréssel több sorba';
$string['column'] = 'Oszlop';
$string['columnandcellproperties'] = 'Oszlop és cella tulajdonságai';
$string['columncalculations'] = 'Oszlopszámítások';
$string['columns'] = 'Oszlopok';
$string['comp_calcs'] = 'Számítások';
$string['comp_calcs_help'] = '<p>Itt lehet számításokat hozzáadni oszlopokhoz, azaz: a kurzusokra beiratkozott felhasználók átlagos száma</p>

<p>További információ: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">Plugin documentation</a></p>';
$string['comp_calculations'] = 'Számítások';
$string['comp_calculations_help'] = '<p>Itt lehet számításokat hozzáadni oszlopokhoz, azaz: a kurzusokra beiratkozott felhasználók átlagos száma</p>';
$string['comp_columns'] = 'Oszlopok';
$string['comp_columns_help'] = '<p>Itt lehet választani a különböző oszlopok közül a lekérdezés típusának megfelelően.</p>

<p>További információ: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">Plugin documentation</a></p>';
$string['comp_conditions'] = 'Feltételek';
$string['comp_conditions_help'] = '<p>Itt lehet megadni a feltételeket (azaz kurzusok csak ebből a kategóriából, felhasználók csak Spanyolországból stb.) </p>

<p>Logikai kifejezés hozzáadható, ha egynél több feltételt használ.</p>

<p>További információ: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">Plugin documentation</a></p>';
$string['comp_customsql'] = 'Egyéni SQL';
$string['comp_customsql_help'] = '<p>Működő SQL-lekérdezés hozzáadása. Ne használja a Moodle adatbázisának $CFG->prefix előtagját, helyette használja a  "prefix_" alakot idézőjelek nélkül</p>
<p>Példa: SELECT * FROM prefix_course</p>

<p>Itt sok SQL-jelentés található: <a href="http://docs.moodle.org/en/ad-hoc_contributed_reports" target="_blank">ad-hoc contributed reports</a></p>

<p>Mivel ez a blokk támogatja Tim Hunt CustomSQL lekérdezési jelentéseit, bármilyen lekérdezést használhat.</p>

<p>Ne felejtsen "Time filter"-t hozzáadni,  ha időtokenes lekérdezésekkel dolgozik. </p>

<p>Szűrők használata: <a href="http://docs.moodle.org/en/blocks/configurable_reports/#Creating_a_SQL_Report" target="_blank">Creating a SQL Report Tutorial</a></p>';
$string['comp_filters'] = 'Szűrők';
$string['comp_filters_help'] = '<p>Itt választhatóak ki a megjelenítendő szűrők.</p>

<p>A szűrővel a felhasználó oszlopokat választhat a jelentésből eredmények szűréséhez.</p>

<p>SQL-szűrők esetén további információ: <a href="http://docs.moodle.org/en/blocks/configurable_reports/#Creating_a_SQL_Report" target="_blank">Creating a SQL Report Tutorial</a></p>

<p>További információ: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">Plugin documentation</a></p>';
$string['comp_ordering'] = 'Rendezés';
$string['comp_ordering_help'] = '<p>Itt lehet megadni a lekérdezés elrendezését</p>

<p>More help: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">Plugin documentation</a></p>';
$string['comp_permissions'] = 'Engedélyek';
$string['comp_permissions_help'] = '<p>Itt választható ki, hogy ki láthatja a lekérdezést.</p>

<p>Logikai kifejezést adhat hozzá a végleges engedély kiszámításához, ha több feltételt használ.</p>

<p>További információ: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">Plugin documentation</a></p>';
$string['comp_plot'] = 'Diagram';
$string['comp_plot_help'] = '<p>Itt adható hozzá diagram a lekérdezéshez, ami az oszlopokon és azok értékein alapul.</p>

<p>További információ: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">Plugin documentation</a></p>';
$string['comp_template'] = 'Sablon';
$string['comp_template_help'] = '<p>Megadható a lekérdezés kinézete sablon készítésével</p>

<p>További információ: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">Plugin documentation</a></p>';
$string['componenthelp'] = 'Összetevő súgója';
$string['conditionexpr'] = 'Feltétel';
$string['conditionexpr_conditions'] = 'Feltétel';
$string['conditionexpr_conditions_help'] = '<p>A feltételek kombinálhatóak logikai kifejezések segítségével</p>

<p>Írjon be egy érvényes logikai kifejezést ezekkel az operátorokkal: and, or.</p>';
$string['conditionexpr_permissions'] = 'Feltétel';
$string['conditionexpr_permissions_help'] = '<p>A feltételek kombinálhatóak logikai kifejezések segítségével</p>

<p>Írjon be egy érvényes logikai kifejezést ezekkel az operátorokkal: and, or.</p>';
$string['conditionexprhelp'] = 'Érvényes feltételt írjon be, azaz (c1 and c2) or (c4 and c3)';
$string['conditions'] = 'Feltételek';
$string['configurable_reports:addinstance'] = 'Új alakítható lekérdezésblokk hozzáadása';
$string['configurable_reports:manageownreports'] = 'Saját lekérdezések kezelése';
$string['configurable_reports:managereports'] = 'Lekérdezések kezelése';
$string['configurable_reports:managesqlreports'] = 'SQL-lekérdezések kezelése';
$string['configurable_reports:myaddinstance'] = 'Új alakítható lekérdezésblokk hozzáadása a Főoldalhoz';
$string['configurable_reports:viewreports'] = 'Lekérdezések megtekintése';
$string['confirmdeletereport'] = 'Biztosan törli ezt a lekérdezést?';
$string['coursecategories'] = 'Kurzuskategória szűrője';
$string['coursecategory'] = 'Kurzus a kategóriában';
$string['coursechild'] = 'Kurzusok, melyek ez alá tartoznak:';
$string['coursededicationtime'] = 'Kurzusra kijelölt idő';
$string['coursefield'] = 'Kurzusmező';
$string['coursefieldorder'] = 'Kurzus mező elrendezése';
$string['coursemodules'] = 'Kurzusmodul';
$string['courseparent'] = 'Kurzusok, melyek fölé tartozik';
$string['courses'] = 'Kurzusok';
$string['coursestats'] = 'Kurzusstatisztikák';
$string['cron'] = 'Automatikus naponkénti végrehajtás';
$string['cron_help'] = 'Lekérdezés ütemezése minden napra (éjjel)';
$string['crondescription'] = 'Lekérdezés ütemezése minden napra (nappal)';
$string['crrepository'] = 'Lekérdezések tárolója';
$string['crrepositoryinfo'] = 'Távoli, megosztott tároló, működő lekérdezési mintákkal (GitHub fiók tulajdonosa + perjel + tároló neve)';
$string['currentreportcourse'] = 'Aktuális lekérdezés kurzusa';
$string['currentreportcourse_summary'] = 'A kurzus, amelyikről a lekérdezés készült';
$string['currentuser'] = 'Aktuális felhasználó';
$string['currentuser_summary'] = 'A lekérdezést megtekintő felhasználó';
$string['currentusercourses'] = 'Aktuális felhasználó által felvett kurzusok';
$string['currentusercourses_summary'] = 'Aktuális felhasználók kurzusainak listája (csak a látható kurzusok)';
$string['currentuserfinalgrade'] = 'Aktuális felhasználó végleges osztályzata a kurzuson';
$string['currentuserfinalgrade_summary'] = 'Ez az oszlop mutatja az aktuális felhasználó végleges osztályzatát a kurzussorban';
$string['cuserfield'] = 'Felhasználói mező feltétele';
$string['custom'] = 'Egyéni';
$string['customdateformat'] = 'Egyéni dátumforma';
$string['customsql'] = 'Egyéni SQL';
$string['datatables'] = 'DataTables JS könyvtár engedélyezése';
$string['datatables_emptytable'] = 'Nincs elérhető adat a táblázatban';
$string['datatables_first'] = 'Első';
$string['datatables_info'] = '_START_ to _END_ of _TOTAL_ bejegyzések mutatása';
$string['datatables_infoempty'] = '0-ból 0 és 0 közötti bejegyzések mutatása';
$string['datatables_infofiltered'] = '(filtered from _MAX_ total entries)';
$string['datatables_last'] = 'Utolsó';
$string['datatables_lengthmenu'] = '_MENU_ bejegyzések mutatása';
$string['datatables_loadingrecords'] = 'Betöltés...';
$string['datatables_next'] = 'Következő';
$string['datatables_previous'] = 'Előző';
$string['datatables_processing'] = 'Feldolgozás...';
$string['datatables_search'] = 'Keresés:';
$string['datatables_sortascending'] = ': kapcsolja be az oszlopok növekvő sorrendbe rendezéséhez';
$string['datatables_sortdescending'] = ': kapcsolja be az oszlopok csökkenő sorrendbe rendezéséhez';
$string['datatables_zerorecords'] = 'Nincsenek egyező találatok';
$string['datatablesinfo'] = 'DataTables JS könyvtár (Oszlopok, fix fejléc, keresés, lapozás...)';
$string['date'] = 'Dátum';
$string['dateformat'] = 'Dátumforma';
$string['dbhost'] = 'Adatbázis gazdagépe';
$string['dbhostinfo'] = 'Távoli adatbázis gazdagépének a neve (ahol az SQL lekérdezések történnek)';
$string['dbname'] = 'Adatbázis neve';
$string['dbnameinfo'] = 'Távoli adatbázis neve (ahol az SQL lekérdezések történnek)';
$string['dbpass'] = 'Adatbázis jelszava';
$string['dbpassinfo'] = 'Távoli adatbázis jelszava (a fentebbi felhasználóhoz)';
$string['dbuser'] = 'Adatbázis felhasználóneve';
$string['dbuserinfo'] = 'Távoli adatbázis felhasználóneve (SELECT joggal kell rendelkeznie a fenti adatbázisban)';
$string['decimals'] = 'Tizedesjegyek száma';
$string['direction'] = 'Irány';
$string['disabled'] = 'Kikapcsolva';
$string['displayglobalreports'] = 'Globális lekérdezések megjelenítése';
$string['displayreportslist'] = 'Lekérdezések megjelenítése a blokkon';
$string['donotshowtime'] = 'Ne mutassa a dátuminformációkat';
$string['download'] = 'Letöltés';
$string['downloadreport'] = 'Lekérdezés letöltése';
$string['email_message'] = 'Üzenet';
$string['email_send'] = 'Küldés';
$string['email_subject'] = 'Tárgy';
$string['enabled'] = 'Engedélyezve';
$string['enableglobal'] = 'Ez egy globális lekérdezés (elérhető bármelyik kurzusból)';
$string['enablejsordering'] = 'JavaScript rendezés engedélyezése';
$string['enablejspagination'] = 'JavaScript lapozás engedélyezése';
$string['endtime'] = 'Befejezés dátuma';
$string['enrolledstudents'] = 'Beiratkozott felhasználók';
$string['error_field'] = 'Mező nem engedélyezett';
$string['error_operator'] = 'Operátor nem engedélyezett';
$string['error_value_expected_integer'] = 'Egész szám használandó';
$string['excludedeletedusers'] = 'Törölt felhasználók mellőzése (csak SQL-lekérdezések esetén)';
$string['executeat'] = 'Végrehajtás ekkor:';
$string['executeatinfo'] = 'A Moodle CRON lefuttatja az ütemezett SQL-lekérdezéseket a megjelölt idő után, 24 óránként egyszer.';
$string['export_csv'] = 'Exportálás CSV formátumban';
$string['export_ods'] = 'Exportálás ODS formátumban';
$string['export_xls'] = 'Exportálás XLS formátumban';
$string['exportoptions'] = 'Exportálási beállítások';
$string['exportreport'] = 'Lekérdezés exportálása';
$string['fcoursefield'] = 'Kurzusmező szűrője';
$string['field'] = 'Mező';
$string['filter'] = 'Szűrő';
$string['filter_all'] = 'Mindegyik';
$string['filter_apply'] = 'Alkalmazás';
$string['filter_searchtext'] = 'Szöveg keresése';
$string['filter_searchtext_summary'] = 'Szabad szöveg szűrője';
$string['filtercategories'] = 'Kategóriák szűrése';
$string['filtercategories_summary'] = 'Szűrés kategória alapján';
$string['filtercoursecategories'] = 'Kurzuskategória szűrője';
$string['filtercoursecategories_summary'] = 'Kurzusok szűrése felső kategóriájuk alapján';
$string['filtercoursemodules'] = 'Kurzusmodul';
$string['filtercoursemodules_summary'] = 'Kurzusmodulok szűrése';
$string['filtercourses'] = 'Kurzusok';
$string['filtercourses_summary'] = 'Ez a szűrő mutatja a kurzusok listáját.  Egyszerre csak egy kurzus választható ki';
$string['filterenrolledstudents'] = 'A kurzusra beiratkozott diákok';
$string['filterenrolledstudents_summary'] = 'Felhasználó szűrése (azonosító alapján) a beiratkozottak közül';
$string['filterrole'] = 'szerep';
$string['filterrole_summary'] = 'Rendszerszerepek szűrése (Tanuló, Tanár...)';
$string['filters'] = 'Szűrők';
$string['filtersemester'] = 'Szemeszter (héber)';
$string['filtersemester_list'] = 'סמסטר א,סמסטר ב,סמסטר ג,סמינריון';
$string['filtersemester_summary'] = 'מאפשר סינון לפני סמסטרים (בעברית, למשל: סמסטר א,סמסטר ב)';
$string['filterstartendtime_summary'] = 'Kezdő/végdátum szűrője';
$string['filtersubcategories'] = 'Kategória (alkategóriákat beleértve)';
$string['filtersubcategories_summary'] = 'Használja: %%FILTER_SUBCATEGORIES:mdl_course_category.path%%';
$string['filteruser'] = 'Aktuális kurzus felhasználója';
$string['filteruser_summary'] = 'Felhasználó szűrése (azonosító alapján) a jelenlegi kurzus felhasználói közül';
$string['filterusers'] = 'Rendszerfelhasználó';
$string['filterusers_summary'] = 'Felhasználó szűrése (azonosító alapján) a rendszerfelhasználók listájából';
$string['filteryearhebrew'] = 'Év (héber)';
$string['filteryearhebrew_list'] = 'תשע,תשעא,תשעב,תשעג,תשעד,תשעה';
$string['filteryearhebrew_summary'] = 'A szűrő héber éveket használ (תשעג,...)';
$string['filteryearnumeric'] = 'Év (számjegyes)';
$string['filteryearnumeric_summary'] = 'A szűrő számjegyes éveket használ (2013...)';
$string['filteryears'] = 'Év (számjegyes)';
$string['filteryears_list'] = '2010,2011,2012,2013,2014,2015';
$string['filteryears_summary'] = 'Évek szűrése (számjegyekkel, 2012...)';
$string['finalgradeincurrentcourse'] = 'Végső osztályzat a jelenlegi kurzuson';
$string['fixeddate'] = 'Rögzített dátum';
$string['footer'] = 'Lábléc';
$string['forcemidnight'] = 'Force midnight';
$string['fsearchuserfield'] = 'Felhasználómező kereső négyzete';
$string['fuserfield'] = 'Felhasználómező szűrője';
$string['global'] = 'Globális lekérdezés';
$string['global_help'] = 'A globális lekérdezések a platform bármelyik kurzusáról elérhetőek, ha a lekérdezés URL-jének végén szerepel a &courseid=MY_COURSE_ID';
$string['globalstatsshouldbeenabled'] = 'A portálstatisztikát engedélyezni kell. Rendszergazda -> Szerver -> Statisztikák';
$string['groupseries'] = 'Csoport sorozatai';
$string['groupvalues'] = 'Csoport azonos értékei (összeg)';
$string['head_color'] = 'Diagram háttérszíne';
$string['head_data'] = 'Diagram adatai';
$string['head_size'] = 'Diagram mérete';
$string['header'] = 'Fejléc';
$string['height'] = 'Magasság';
$string['importfromrepository'] = 'Lekérdezés importálása a tárolóból';
$string['importreport'] = 'Lekérdezés importálása';
$string['includesubcats'] = 'Alkategóriákat is beleértve';
$string['jsordering'] = 'JavaScript rendezés';
$string['jsordering_help'] = 'A JavaScript rendezés lehetővé teszi a táblázat rendezését az oldal újratöltése nélkül';
$string['label_field'] = 'Címmező';
$string['label_field_help'] = 'Ebbe a mezőbe írt nevek jelennek meg a diagramon';
$string['lastexecutiontime'] = 'Végrehajtási idő = {$a} (mp)';
$string['legacylognotenabled'] = 'A korábbi típusú naplózást engedélyezni kell.
(Portáladminisztráció -> Segédprogramok -> Naplózás -> Naplótárak kezelése)';
$string['limitcategories'] = 'Kategórialimit beállítása a diagramon';
$string['line'] = 'Vonaldiagram';
$string['linesummary'] = 'Vonaldiagram többféle adatsorral';
$string['listofsqlreports'] = 'Nyomja meg az F11-et, amikor a kurzor a szerkesztőben van, a teljes képernyős szerkesztés közti váltáshoz. Az Esc lenyomásával is ki lehet lépni.<br/><br/><a href="http://docs.moodle.org/en/ad-hoc_contributed_reports" target="_blank">List of SQL Contributed reports</a>';
$string['managereports'] = 'Lekérdezések kezelése';
$string['max'] = 'Maximum';
$string['min'] = 'Minimum';
$string['missingcolumn'] = 'Egy oszlop szükséges';
$string['module'] = 'Modul';
$string['newreport'] = 'Új lekérdezés';
$string['nocalcsyet'] = 'Még nincsenek számítások';
$string['nocolumnsyet'] = 'Még nincsenek oszlopok';
$string['noconditionsyet'] = 'Még nincsenek feltételek';
$string['noexplicitprefix'] = 'Még nincsenek meghatározott előtagok';
$string['nofiltersyet'] = 'Még nincsenek szűrők';
$string['nofilteryet'] = 'Még nincsenek szűrők';
$string['noorderingyet'] = 'Még nincs rendezés';
$string['nopermissionsyet'] = 'Még nincsenek engedélyek';
$string['noplotyet'] = 'Még nincsenek diagramok';
$string['norecordsfound'] = 'Nincsenek találatok';
$string['noreportsavailable'] = 'Nincsenek elérhető lekérdezések';
$string['norowsreturned'] = 'Nincsenek sorok';
$string['nosemicolon'] = 'Nincs pontosvessző';
$string['notallowedwords'] = 'Nem engedélyezett szavak';
$string['operator'] = 'Operátor';
$string['ordering'] = 'Rendezés';
$string['others'] = 'Egyebek';
$string['pagination'] = 'Lapozás';
$string['pagination_help'] = 'Oldalankénti találatok száma. 0=nincs lapozás';
$string['parentcategory'] = 'Felsőbb kategória';
$string['permissions'] = 'Engedélyek';
$string['pie'] = 'Kördiagram';
$string['pieareaname'] = 'Név';
$string['pieareavalue'] = 'Érték';
$string['piesummary'] = 'Egy kördiagram';
$string['plot'] = 'Diagramok';
$string['pluginname'] = 'Alakítható lekérdezések';
$string['previousdays'] = 'Elmúlt napok';
$string['previousend'] = 'Előző befejezés';
$string['previousstart'] = 'Előző kezdés';
$string['printreport'] = 'Lekérdezés nyomtatása';
$string['puserfield'] = 'Felhasználói mező értéke';
$string['puserfield_summary'] = 'A kiválasztott értékű felhasználó a kiválasztott mezőben';
$string['queryfailed'] = 'Lekérdezés sikertelen <code><pre>{$a}</pre></code>';
$string['querysql'] = 'SQL-lekérdezés';
$string['remote'] = 'Futtatás távoli adatbázison';
$string['remote_help'] = 'Szeretné ezt a lekérdezést távoli adatbázison futtatni?';
$string['remotedescription'] = 'Szeretné ezt a lekérdezést távoli adatbázison futtatni?';
$string['remotequerysql'] = 'SQL-lekérdezés';
$string['report'] = 'Lekérdezés';
$string['report_categories'] = 'Kategóriák lekérdezése';
$string['report_courses'] = 'Kurzusok lekérdezése';
$string['report_sql'] = 'SQL-lekérdezés';
$string['report_timeline'] = 'Előrehaladás lekérdezése';
$string['report_users'] = 'Felhasználók lekérdezése';
$string['reportcategories'] = '1) Válasszon távoli lekérdezés-kategóriát';
$string['reportcolumn'] = 'Másik lekérdezésoszlop';
$string['reportcreated'] = 'Lekérdezés sikeresen elkészítve';
$string['reportlimit'] = 'Lekérdezéssorok korlátja';
$string['reportlimitinfo'] = 'A lekérdezés táblázatban megjelenő sorok számának korlátja (alapértelmezésként 5000. Jobb, ha van korlát beállítva, hogy a felhasználók ne terheljék túl az adatbázist)';
$string['reports'] = 'Lekérdezések';
$string['reportscapabilities'] = 'Lekérdezési jogosultság';
$string['reportscapabilities_summary'] = 'Felhasználók, akiknél a moodle/site:viewreports jogosultság be van kapcsolva';
$string['reportsincategory'] = '2) Válasszon egy lekérdezést a listából';
$string['reporttable'] = 'Lekérdezés-táblázat';
$string['reporttable_help'] = '<p>Ez a táblázat szélessége, ahol a lekérdezés eredménye megjelenik.</p>

<p>Ha sablont használ, akkor ennek a beállításnak nincs hatása</p>';
$string['reporttableui'] = 'Lekérdezési táblázat felhasználói felülete';
$string['reporttableuiinfo'] = 'A lekérdezés-táblázat megjelenítése lehet: egyszerű, görghethető HTML táblázat, jQuery oszloprendezéssel, vagy DataTables JS könyvtár';
$string['repository'] = 'Lekérdezések tárolója';
$string['repository_help'] = 'Importálhat lekérdezési mintákat egy nyilvános, megosztott tárolóból.

Vegye figyelembe, hogy napi korlát van a tároló használatára!

Ha a tárolóhoz való kapcsolat nem működik, kézzel tölthető le innen: <a href="https://github.com/jleyva/moodle-configurable_reports_repository" target="_blank">https://github.com/jleyva/moodle-configurable_reports_repository</a> Ez importálható az alábbi "Lekérdezés importálása" funkcióval.';
$string['role'] = 'Szerep';
$string['roleincourse'] = 'A kijelölt szereppel bíró felhasználók a jelenlegi lekérdezés kurzusában';
$string['roleusersn'] = 'Felhasználók száma ezzel a szereppel...';
$string['searchtext'] = 'Szöveg keresése';
$string['semester'] = 'Szemeszter (héber)';
$string['serieid'] = 'Sorozat oszlopa';
$string['sessionlimittime'] = 'Kattintások közötti korlát (percben megadva)';
$string['sessionlimittime_help'] = 'A kattintások közötti korlát határozza meg, hogy két kattintás ugyanazon időablak része-e, vagy sem';
$string['setcourseid'] = 'Kurzusazonosító beállítása';
$string['sharedsqlrepository'] = 'Megosztott sql tároló';
$string['sharedsqlrepositoryinfo'] = 'GitHub fiók tulajdonosának neve + perjel + tároló neve';
$string['sqlsecurity'] = 'Sql biztonság';
$string['sqlsecurityinfo'] = 'Adatbevitelhez mondatokat tartalmazó SQL-lekérdezések végrehajtásához kapcsolja ki';
$string['sqlsyntaxhighlight'] = 'SQL-szintaxis kiemelése';
$string['sqlsyntaxhighlightinfo'] = 'SQL-szintaxis  kiemelése a kódszerkesztőben (CodeMirror JS könyvtár)';
$string['startendtime'] = 'Kezdési/Befejezési dátum szűrője';
$string['starttime'] = 'Kezdés időpontja';
$string['stat'] = 'Statisztika';
$string['statsactiveenrolments'] = 'Aktív (elmúlt heti) beiratkozások';
$string['statslogins'] = 'Bejelentkezések a platformra';
$string['statstotalenrolments'] = 'Összes beiratkozás';
$string['student'] = 'Tanuló';
$string['subcategories'] = 'Kategória (alkategóriákkal együtt)';
$string['sum'] = 'Összeg';
$string['tablealign'] = 'Táblázat igazítása';
$string['tablecellpadding'] = 'Cellán belüli margó';
$string['tablecellspacing'] = 'Cellák közti távolság';
$string['tableclass'] = 'Táblázatosztály';
$string['tablewidth'] = 'Táblázat szélessége';
$string['template'] = 'Sablon';
$string['template_marks'] = 'Sablonjelölők';
$string['template_marks_help'] = '<p>Az alábbiak közül bármelyik jelölő használható:</p>

<ul>
<li>##reportname## - A lekérdezés nevének hozzávétele</li>
<li>##reportsummary## - A lekérdezés összegzésének hozzávétele</li>
<li>##graphs## - A diagramok hozzávétele</li>
<li>##exportoptions## - Exportálási lehetőségek hozzávétele</li>
<li>##calculationstable## - A számítási táblázat hozzávétele</li>
<li>##pagination## - A lapozás hozzávétele </li>

</ul>';
$string['templaterecord'] = 'Bejegyzéssablon';
$string['timeinterval'] = 'Időintervallum';
$string['timeline'] = 'Előrehaladás';
$string['timemode'] = 'Időmód';
$string['totalrecords'] = 'Bejegyzések összes száma = {$a->totalrecords}';
$string['type'] = 'Lekérdezés típusa';
$string['typeofreport'] = 'Lekérdezés típusa';
$string['typeofreport_help'] = 'Válassza ki az elkészíteni kívánt lekérdezés típusát!
Biztonsági okokból az SQL-lekérdezéshez szükséges egy további jogosultság.';
$string['user'] = 'Kurzusbeli felhasználó (azonosító)';
$string['usercompletion'] = 'A felhasználó kurzusbeli előrehaladásának állapota';
$string['usercompletionsummary'] = 'Kurzusbeli előrehaladás állapota';
$string['userfield'] = 'Felhasználói profilmező';
$string['userfieldorder'] = 'Felhasználói mező rendezése';
$string['usermodactions'] = 'Felhasználói modul lépései';
$string['usermodoutline'] = 'Felhasználói modul áttekintő statisztikája';
$string['users'] = 'Rendszerfelhasználó (azonosító)';
$string['usersincohorts'] = 'Felhasználó, aki egy vagy több globális csoport tagja';
$string['usersincohorts_summary'] = 'Csak azon felhasználók, akik a kiválasztott globális csoport(ok) tagjai';
$string['usersincoursereport'] = 'Bármelyik felhasználó a jelenlegi lekérdezés kurzusán';
$string['usersincoursereport_summary'] = 'Bármelyik felhasználó a jelenlegi lekérdezés kurzusán';
$string['usersincurrentcourse'] = 'Felhasználó a jelenlegi lekérdezés kurzusán';
$string['usersincurrentcourse_summary'] = 'A lekérdezés kurzusában a kiválasztott szereppel rendelkező felhasználók';
$string['userstats'] = 'Felhasználói statisztikák';
$string['value'] = 'Érték';
$string['value_fields'] = 'Értékmezők';
$string['value_fields_help'] = 'Mezők, amelyek szerepelnek a diagramon. Ctrl+kattintással több válaszható. Ha a Címmezőt választja, vagy egy nem számjegyes mezőt, az kimarad.';
$string['viewreport'] = 'Lekérdezés megtekintése';
$string['width'] = 'Szélesség';
$string['xandynotequal'] = 'Az X és az Y tengelynek különbözőnek kell lennie';
$string['xaxis'] = 'X tengely';
$string['yaxis'] = 'Y tengely';
$string['yearhebrew'] = 'Év (héber)';
$string['yearnumeric'] = 'Év (számmal)';
$string['years'] = 'Év (számmal)';
$string['youmustselectarole'] = 'Legalább egy szerep szükséges';
