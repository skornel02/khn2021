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
 * Strings for component 'role', language 'hu', version '3.10'.
 *
 * @package     role
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addinganewrole'] = 'Új szerep hozzáadása';
$string['addrole'] = 'Új szerep hozzáadása';
$string['advancedoverride'] = 'Részletes szerepfelülírás';
$string['allow'] = 'Engedélyez';
$string['allowassign'] = 'Szerepek hozzárendelésének engedélyezése';
$string['allowed'] = 'Engedélyezett';
$string['allowoverride'] = 'Szerepek felülírásának engedélyezése';
$string['allowroletoassign'] = '{$a->fromrole} szerepű felhasználók részére {$a->targetrole} szerep hozzárendelésének engedélyezése';
$string['allowroletooverride'] = '{$a->fromrole} szerepű felhasználók részére {$a->targetrole} szerep felülírásának engedélyezése';
$string['allowroletoswitch'] = '{$a->fromrole} szereppel rendelkező felhasználók részére {$a->targetrole} szerepre váltás engedélyezése';
$string['allowroletoview'] = '{$a->fromrole} szerepű felhasználók számára a(z) {$a->targetrole} szerep megtekintésének engedélyezése';
$string['allowswitch'] = 'Szerepváltás engedélyezése';
$string['allowview'] = 'Szerep megtekintésének engedélyezése';
$string['allsiteusers'] = ' a portál minden felhasználója';
$string['analytics:listinsights'] = 'Ötletek felsorolása';
$string['analytics:listowninsights'] = 'Saját ötletek felsorolása';
$string['analytics:managemodels'] = 'Modellek kezelése';
$string['archetype'] = 'Szerep alaptípusa';
$string['archetype_help'] = 'A szerep alaptípusa a szerep visszaállításakor hozzárendelt engedélyeket és a portál frissítésekor a szerephez hozzárendelt esetleges új engedélyeket határozza meg.';
$string['archetypecoursecreator'] = 'ALAPTÍPUS: Kurzuskészítő';
$string['archetypeeditingteacher'] = 'ALAPTÍPUS: Tanár (szerkesztő)';
$string['archetypefrontpage'] = 'ALAPTÍPUS: Hitelesített felhasználó a kezdőoldalon';
$string['archetypeguest'] = 'ALAPTÍPUS: Vendég';
$string['archetypemanager'] = 'ALAPTÍPUS: Igazgató';
$string['archetypestudent'] = 'ALAPTÍPUS: Tanuló';
$string['archetypeteacher'] = 'ALAPTÍPUS: Tanár (nem szerkesztő)';
$string['archetypeuser'] = 'ALAPTÍPUS: Hitelesített felhasználó';
$string['assignanotherrole'] = 'Másik szerep hozzárendelése';
$string['assignedroles'] = 'Hozzárendelt szerepek';
$string['assignerror'] = 'Hiba {$a->role} szerep {$a->user} felhasználóhoz rendelése közben.';
$string['assignglobalroles'] = 'Rendszerszerepek hozzárendelése';
$string['assignmentcontext'] = 'Hozzárendelési környezet';
$string['assignmentoptions'] = 'Hozzárendelési lehetőségek';
$string['assignrole'] = 'Szerep hozzárendelése';
$string['assignrolenameincontext'] = '\'{$a->role}\' szerep hozzárendelése  {$a->context} környezetben';
$string['assignroles'] = 'Szerepek hozzárendelése';
$string['assignroles_help'] = 'Ha adott környezetben egy felhasználóhoz hozzárendelünk valamilyen szerepet,
azzal az adott szerephez tartozó engedélyekkel ruházzuk fel az adott környezethez és minden az "alatt lévő" környezethez.
Ha például egy felhasználóhoz egy kurzusban tanulói szerepet rendelünk hozzá, akkor a kurzus alá tartozó összes blokk és tevékenység kapcsán is ezzel a szereppel ruházzuk őt fel.';
$string['assignrolesin'] = 'Szerepek hozzárendelése - {$a}';
$string['assignrolesrelativetothisuser'] = 'Szerepek hozzárendelése ezen felhasználót illetően';
$string['backtoallroles'] = 'Vissza az összes szerep listájához';
$string['backup:anonymise'] = 'Biztonsági mentés esetén a felhasználói adatok ne jelenjenek meg';
$string['backup:backupactivity'] = 'Tevékenységek biztonsági mentése ';
$string['backup:backupcourse'] = 'Kurzusok biztonsági mentése';
$string['backup:backupsection'] = 'Szakaszok biztonsági mentése';
$string['backup:backuptargetimport'] = 'Biztonsági mentés importáláshoz';
$string['backup:configure'] = 'Biztonsági mentés lehetőségeinek beállítása';
$string['backup:downloadfile'] = 'Állományok letöltése a biztonsági mentés területeiről';
$string['backup:userinfo'] = 'Felhasználói adatok biztonsági mentése';
$string['badges:awardbadge'] = 'Kitűző adományozása';
$string['badges:configurecriteria'] = 'Kitűző feltételeinek beállítása/szerkesztése';
$string['badges:configuredetails'] = 'Kitűző részleteinek beállítása/szerkesztése';
$string['badges:configuremessages'] = 'Kitűzőhöz kapcsolódó üzenet beállítása';
$string['badges:createbadge'] = 'Kitűzők létrehozása/másolása';
$string['badges:deletebadge'] = 'Kitűzők törlése';
$string['badges:earnbadge'] = 'Kitűző megszerzése';
$string['badges:manageglobalsettings'] = 'Kitűző globális beállításainak kezelése';
$string['badges:manageownbadges'] = 'Saját kitűzőim megtekintése és kezelése';
$string['badges:revokebadge'] = 'Kitűző visszavonása egy felhasználótól';
$string['badges:viewawarded'] = 'Megadott kitűzőt megszerzett, kitűzőt nem adományozó felhasználók megtekintése';
$string['badges:viewbadges'] = 'Meglévő kitűzők megszerzés nélküli megtekintése';
$string['badges:viewotherbadges'] = 'Más felhasználók profiljában lévő nyilvános kitűzők megtekintése';
$string['block:edit'] = 'Blokk beállításainak szerkesztése';
$string['block:view'] = 'Blokk megtekintése';
$string['blog:create'] = 'Új blogüzenetek létrehozása';
$string['blog:manageentries'] = 'Bejegyzések szerkesztése és kezelése';
$string['blog:manageexternal'] = 'Külső blogok szerkesztése és kezelése';
$string['blog:search'] = 'Keresés a blogüzenetek között';
$string['blog:view'] = 'Blogüzenetek megtekintése';
$string['blog:viewdrafts'] = 'Blogüzenetek piszkozatainak megtekintése';
$string['calendar:manageentries'] = 'Tetszőleges naptári bejegyzések kezelése';
$string['calendar:managegroupentries'] = 'Csoport naptári bejegyzéseinek kezelése';
$string['calendar:manageownentries'] = 'Saját naptári bejegyzések kezelése';
$string['capabilities'] = 'Jogosultságok';
$string['capability'] = 'Jogosultság';
$string['category:create'] = 'Kategóriák létrehozása';
$string['category:delete'] = 'Kategóriák törlése';
$string['category:manage'] = 'Kategóriák kezelése';
$string['category:update'] = 'Kategóriák frissítése';
$string['category:viewcourselist'] = 'Nem felvett kurzusok listájának megtekintése';
$string['category:viewhiddencategories'] = 'Rejtett kategóriák megtekintése';
$string['category:visibility'] = 'Rejtett kategóriák megtekintése';
$string['checkglobalpermissions'] = 'Rendszerengedélyek ellenőrzése';
$string['checkpermissions'] = 'Engedélyek ellenőrzése';
$string['checkpermissionsin'] = '{$a} engedélyeinek ellenőrzése';
$string['checksystempermissionsfor'] = '{$a->fullname} rendszerengedélyeinek ellenőrzése';
$string['checkuserspermissionshere'] = '{$a->fullname} rendszerengedélyeinek ellenőrzése {$a->contextlevel} szinten';
$string['chooseroletoassign'] = 'Válasszon ki egy hozzárendelendő szerepet';
$string['cohort:assign'] = 'Globális csoport tagjainak hozzáadása és törlése';
$string['cohort:manage'] = 'Globális csoportok létrehozása, törlése és áthelyezése';
$string['cohort:view'] = 'Portál globális csoportjainak megjelenítése';
$string['comment:delete'] = 'Megjegyzések törlése';
$string['comment:post'] = 'Megjegyzések beküldése';
$string['comment:view'] = 'Megjegyzések megtekintése';
$string['competency:competencygrade'] = 'Készség besorolásának beállítása';
$string['competency:competencymanage'] = 'Készségkeretek kezelése';
$string['competency:competencyview'] = 'Készségkeretek megtekintése';
$string['competency:coursecompetencyconfigure'] = 'Kurzuskészség beállítása';
$string['competency:coursecompetencygradable'] = 'Készségjegyek átvétele';
$string['competency:coursecompetencymanage'] = 'Kurzuskészségek kezelése';
$string['competency:coursecompetencyview'] = 'Kurzuskészségek megtekintése';
$string['competency:evidencedelete'] = 'Bizonyíték törlése';
$string['competency:plancomment'] = 'Megjegyzés egy tanulási tervhez';
$string['competency:plancommentown'] = 'Megjegyzés saját tanulási tervhez';
$string['competency:planmanage'] = 'Tanulási tervek kezelése';
$string['competency:planmanagedraft'] = 'Vázlatos tanulási tervek kezelése';
$string['competency:planmanageown'] = 'Saját  tanulási tervek kezelése';
$string['competency:planmanageowndraft'] = 'Saját  vázlatos tanulási tervek kezelése';
$string['competency:planrequestreview'] = 'Tanulási terv ellenőrzésének kérése';
$string['competency:planrequestreviewown'] = 'Saját tanulási terv ellenőrzésének kérése';
$string['competency:planreview'] = 'Tanulási terv ellenőrzése';
$string['competency:planview'] = 'Minden tanulási terv megtekintése';
$string['competency:planviewdraft'] = 'Vázlatos tanulási tervek megtekintése';
$string['competency:planviewown'] = 'Saját tanulási tervek megtekintése';
$string['competency:planviewowndraft'] = 'Saját vázlatos tanulási tervek megtekintése';
$string['competency:templatemanage'] = 'Tanulási tervsablonok kezelése';
$string['competency:templateview'] = 'Tanulási tervsablonok megtekintése';
$string['competency:usercompetencycomment'] = 'Megjegyzés egy felhasználói készséghez';
$string['competency:usercompetencycommentown'] = 'Megjegyzés saját felhasználói készséghez';
$string['competency:usercompetencyrequestreview'] = 'Felhasználói készség ellenőrzésének kérése';
$string['competency:usercompetencyrequestreviewown'] = 'Saját felhasználói készség ellenőrzésének kérése';
$string['competency:usercompetencyreview'] = 'Egy felhasználói készség ellenőrzése';
$string['competency:usercompetencyview'] = 'Egy felhasználói készség megtekintése';
$string['competency:userevidencemanage'] = 'Előtanulmányok bizonyítékának kezelése';
$string['competency:userevidencemanageown'] = 'Saját előtanulmányok bizonyítékának kezelése';
$string['competency:userevidenceview'] = 'Egy felhasználó előtanulmányai bizonyítékának a megtekintése';
$string['confirmaddadmin'] = 'Biztosan hozzáadja <strong>{$a}</strong> felhasználót mint a portál új rendszergazdáját?';
$string['confirmdeladmin'] = 'Biztosan törli <strong>{$a}</strong> felhasználót a portál rendszergazdái közül?';
$string['confirmroleprevent'] = 'Biztosan törli a(z) <strong>{$a->role}</strong> szerepet {$a->cap} engedélyezett szerepei közül {$a->context} környezet esetén?';
$string['confirmroleunprohibit'] = 'Biztosan törli a(z) <strong>{$a->role}</strong> szerepet {$a->cap} tiltott szerepei közül {$a->context} környezet esetén?';
$string['confirmunassign'] = 'Biztosan törli a felhasználó ezen szerepét?';
$string['confirmunassignno'] = 'Mégse';
$string['confirmunassigntitle'] = 'Szerepmódosítás megerősítése';
$string['confirmunassignyes'] = 'Törlés';
$string['contentbank:access'] = 'Tartalombank elérése';
$string['contentbank:deleteanycontent'] = 'Tetszőleges tartalom törlése a tartalombankból';
$string['contentbank:deleteowncontent'] = 'Tartalom törlése saját tartalombankból';
$string['contentbank:downloadcontent'] = 'Tartalom letöltése a tartalombankból';
$string['contentbank:manageanycontent'] = 'Tartalombank bármely tartalmának kezelése';
$string['contentbank:manageowncontent'] = 'Saját tartalombankból származó tartalom kezelése';
$string['contentbank:upload'] = 'Új tartalom feltöltése a tartalombankba';
$string['contentbank:useeditor'] = 'Tartalom létrehozása vagy szerkesztése a tartalomtípus-szerkesztővel';
$string['context'] = 'Környezet';
$string['course:activityvisibility'] = 'Tevékenységek elrejtése/megjelenítése';
$string['course:bulkmessaging'] = 'Üzenet küldése egyszerre több címzettnek';
$string['course:changecategory'] = 'Kurzuskategória kiválasztása';
$string['course:changefullname'] = 'A kurzus teljes címének módosítása';
$string['course:changeidnumber'] = 'Kurzus azonosítószámának módosítása';
$string['course:changelockedcustomfields'] = 'Zárolt egyedi mezők módosítása';
$string['course:changeshortname'] = 'Kurzus rövid címének módosítása';
$string['course:changesummary'] = 'Kurzusösszegzés módosítása';
$string['course:configurecustomfields'] = 'Egyedi mezők beállítása';
$string['course:configuredownloadcontent'] = 'Kurzustartalom letöltésének beállítása';
$string['course:create'] = 'Kurzusok létrehozása';
$string['course:creategroupconversations'] = 'Csoportbeszélgetések létrehozása';
$string['course:delete'] = 'Kurzusok törlése';
$string['course:downloadcoursecontent'] = 'Kurzustartalom letöltése';
$string['course:enrolconfig'] = 'Kurzusfelvétel beállítása';
$string['course:enrolreview'] = 'Kurzusfelvétel ellenőrzése';
$string['course:ignoreavailabilityrestrictions'] = 'Elérhetőségi korlátozások figyelmen kívül hagyása';
$string['course:ignorefilesizelimits'] = 'Állománykorlátot meghaladó méretű fájlok használata';
$string['course:isincompletionreports'] = 'Jelenjen meg a teljesítési jelentésben';
$string['course:manageactivities'] = 'Tevékenységek kezelése';
$string['course:managefiles'] = 'Állományok kezelése';
$string['course:managegrades'] = 'Pontok kezelése';
$string['course:managegroups'] = 'Csoportok kezelése';
$string['course:managescales'] = 'Skálák kezelése';
$string['course:markcomplete'] = 'A kurzus befejezésekor a felhasználók megjelölése kurzusteljesítőként ';
$string['course:movesections'] = 'Szakaszok áthelyezése';
$string['course:overridecompletion'] = 'Tevékenység befejezési állapotának fölülírása';
$string['course:recommendactivity'] = 'Tevékenységek ajánlása a tevékenységválasztón keresztül';
$string['course:renameroles'] = 'Szerepek átnevezése';
$string['course:request'] = 'Új kurzusok kérése';
$string['course:reset'] = 'Kurzus visszaállítása';
$string['course:reviewotherusers'] = 'Más felhasználók áttekintése';
$string['course:sectionvisibility'] = 'Szekció láthatóságának szabályozása';
$string['course:setcurrentsection'] = 'Jelenlegi szekció beállítása';
$string['course:setforcedlanguage'] = 'Kurzusnyelv előírása';
$string['course:tag'] = 'Kurzuscímkék módosítása';
$string['course:togglecompletion'] = 'Tevékenységek elvégzésének kézi bejelölése';
$string['course:update'] = 'Kurzusbeállítások frissítése';
$string['course:useremail'] = 'E-mail cím bekapcsolása/kikapcsolása';
$string['course:view'] = 'Résztvevő nélküli kurzusok megtekintése';
$string['course:viewcoursegrades'] = 'Kurzuspontok megtekintése';
$string['course:viewhiddenactivities'] = 'Rejtett tevékenységek megtekintése';
$string['course:viewhiddencourses'] = 'Rejtett kurzusok megtekintése';
$string['course:viewhiddensections'] = 'Rejtett szekciók megtekintése';
$string['course:viewhiddenuserfields'] = 'Rejtett felhasználói mezők megtekintése';
$string['course:viewparticipants'] = 'Résztvevők megtekintése';
$string['course:viewscales'] = 'Skálák megtekintése';
$string['course:viewsuspendedusers'] = 'Felfüggesztett felhasználók megtekintése';
$string['course:visibility'] = 'Kurzusok elrejtése/megjelenítése';
$string['createrolebycopying'] = 'Új szerep létrehozása {$a} másolása révén';
$string['createthisrole'] = 'A szerep létrehozása';
$string['currentcontext'] = 'Jelenlegi környezet';
$string['currentrole'] = 'Jelenlegi szerep';
$string['customroledescription'] = 'Egyedi leírás';
$string['customroledescription_help'] = 'A standard szerepek leírása adott nyelven automatikusan készül el, ha az egyedi leírás üres.';
$string['customrolename'] = 'Egyedi teljes név';
$string['customrolename_help'] = 'A standard szerepek neve adott nyelven automatikusan készül el, ha az egyedi leírás üres. Minden egyedi szerephez teljes nevet kell megadnia.';
$string['defaultrole'] = 'Alapszerep';
$string['defaultx'] = 'Alaphelyzetben: {$a}';
$string['defineroles'] = 'Szerepek meghatározása';
$string['deletecourseoverrides'] = 'A kurzus összes felülírásának törlése';
$string['deletelocalroles'] = 'Összes helyi szerep-hozzárendelés törlése';
$string['deleterolesure'] = 'Biztosan törli a(z) "{$a->name} ({$a->shortname})" szerepet?</p><p>Jelenleg ez {$a->count} felhasználóhoz van hozzárendelve.';
$string['deletexrole'] = '{$a} szerep törlése';
$string['duplicaterole'] = 'Ismétlődő szerep';
$string['duplicaterolesure'] = 'Biztosan másodpéldányt készít a(z) "{$a->name} ({$a->shortname})" szerepről?</p>';
$string['editingrolex'] = '\'{$a}\' szerep szerkesztése';
$string['editrole'] = 'Szerep szerkesztése';
$string['editxrole'] = 'A(z) \'{$a}\' szerep szerkesztése';
$string['errorbadrolename'] = 'Hibás szerepnév';
$string['errorbadroleshortname'] = 'Hibás rövid szerepnév';
$string['errorexistsrolename'] = 'A szerepnév már létezik';
$string['errorexistsroleshortname'] = 'A szerepnév már létezik';
$string['errorroleshortnametoolong'] = 'A rövid elnevezés nem lehet hosszabb 100 karakternél!';
$string['eventcapabilityassigned'] = 'Készség hozzárendelve';
$string['eventcapabilityunassigned'] = 'Készség nincs hozzárendelve';
$string['eventroleallowassignupdated'] = 'Szerep-hozzárendelés engedélyezése';
$string['eventroleallowoverrideupdated'] = 'Szerep felülírásának engedélyezése';
$string['eventroleallowswitchupdated'] = 'Szerep felcserélésének engedélyezése';
$string['eventroleallowviewupdated'] = 'Szerep megtekintésének engedélyezése';
$string['eventroleassigned'] = 'Szerep hozzárendelve';
$string['eventrolecapabilitiesupdated'] = 'Szerephez tartozó képességek frissítve';
$string['eventroledeleted'] = 'Szerep törölve';
$string['eventroleunassigned'] = 'Szerep hozzárendelve';
$string['eventroleupdated'] = 'Szerep frissítve';
$string['existingadmins'] = 'Jelenlegi portálszintű rendszergazdák';
$string['existingusers'] = '{$a} létező felhasználó';
$string['explanation'] = 'Kifejtés';
$string['export'] = 'Exportálás';
$string['extusers'] = 'Létező felhasználók';
$string['extusersmatching'] = '\'{$a}\' szerinti létező felhasználók';
$string['filter:manage'] = 'Helyi szűrőbeállítások kezelése';
$string['frontpageuser'] = 'Hitelesített felhasználó a kezdőoldalon';
$string['frontpageuserdescription'] = 'Összes belépett felhasználó a kezdőoldali kurzusban';
$string['globalrole'] = 'Rendszerszintű szerep';
$string['globalroleswarning'] = 'FIGYELMEZTETÉS! Az oldalon lévő bármely szerep hozzárendelése a teljes portál kijelölt felhasználóira vonatkozni fog, ideértve a kezdőoldalt és az összes kurzust.';
$string['gotoassignroles'] = 'Térjen át a szerepek hozzárendelésére ezen {$a->contextlevel} szinten';
$string['gotoassignsystemroles'] = 'Térjen át a rendszerszerepek hozzárendelésére';
$string['grade:edit'] = 'Pontok szerkesztése';
$string['grade:export'] = 'Pontok exportálása';
$string['grade:hide'] = 'Pontok vagy tételek elrejtése/felfedése';
$string['grade:import'] = 'Pontok importálása';
$string['grade:lock'] = 'Pontok vagy tételek zárolása';
$string['grade:manage'] = 'Osztályozási tételek kezelése';
$string['grade:managegradingforms'] = 'Részletes pontozási módszerek kezelése';
$string['grade:manageletters'] = 'Pontozó betűk kezelése';
$string['grade:manageoutcomes'] = 'Pontozási eredmények kezelése';
$string['grade:managesharedforms'] = 'Részletes pontozási űrlapok kezelése';
$string['grade:override'] = 'Pontok felülírása';
$string['grade:sharegradingforms'] = 'Részletes pontozási űrlapok sablonként való megosztása';
$string['grade:unlock'] = 'Pontok vagy tételek feloldása';
$string['grade:view'] = 'Saját pontok megtekintése';
$string['grade:viewall'] = 'Más felhasználók pontjainak megtekintése';
$string['grade:viewhidden'] = 'Tulajdonos rejtett pontjainak megtekintése';
$string['h5p:deploy'] = 'H5P-tartalom használata';
$string['h5p:setdisplayoptions'] = 'H5P-tartalom megjelenítésének beállítása';
$string['h5p:updatelibraries'] = 'H5P tartalomtípusok kezelése';
$string['highlightedcellsshowdefault'] = 'Az alábbi táblázatban kijelölt engedélyek a fent kiválasztott szereptípus alapengedélyei';
$string['highlightedcellsshowinherit'] = 'A táblázat kijelölt cellái az (esetleges) öröklendő engedélyt mutatják. Azon képességektől eltekintve, amelyek engedélyét módosítani kívánja, mindent hagyjon Örököl-re állítva.';
$string['inactiveformorethan'] = '{$a->timeperiod} időtartamot meghaladóan tétlen';
$string['ingroup'] = 'az  "{$a->group}" csoportban';
$string['inherit'] = 'Örököl';
$string['invalidpresetfile'] = 'Érvénytelen szerepmeghatározás';
$string['legacy:admin'] = 'ÖRÖKÖLT SZEREP: rendszergazda';
$string['legacy:coursecreator'] = 'ÖRÖKÖLT SZEREP: kurzuskészítő';
$string['legacy:editingteacher'] = 'ÖRÖKÖLT SZEREP: tanár (tananyagszerkesztő)';
$string['legacy:guest'] = 'ÖRÖKÖLT SZEREP: vendég';
$string['legacy:student'] = 'ÖRÖKÖLT SZEREP: tanuló';
$string['legacy:teacher'] = 'ÖRÖKÖLT SZEREP: tanár (nem tananyagszerkesztő)';
$string['legacy:user'] = 'ÖRÖKÖLT SZEREP: hitelesített felhasználó';
$string['legacytype'] = 'Örökölt szerep típusa';
$string['listallroles'] = 'Összes szerep felsorolása';
$string['localroles'] = 'Helyileg hozzárendelt szerepek';
$string['mainadmin'] = 'Fő rendszergazda';
$string['mainadminset'] = 'Fő rendszergazda beállítása';
$string['manageadmins'] = 'Portálszintű rendszergazdák kezelése';
$string['manager'] = 'Igazgató';
$string['managerdescription'] = 'Az igazgatók elérhetik és módosíthatják a kurzusokat, de rendszerint nem vesznek részt bennük.';
$string['manageroles'] = 'Szerepek kezelése';
$string['maybeassignedin'] = 'Azon környezettípusok, ahol ez a szerep hozzárendelhető';
$string['morethan'] = 'Több mint {$a}';
$string['multipleroles'] = 'Több szerep';
$string['my:configsyspages'] = 'Az Irányítópult-oldalak rendszersablonjainak beállítása';
$string['my:manageblocks'] = 'Az Irányítópult oldalblokkjainak kezelése';
$string['neededroles'] = 'Engedélyhez kötött szerepek';
$string['nocapabilitiesincontext'] = 'Ebben a környezetben nincsenek jogosultságok';
$string['noneinthisx'] = '{$a} esetén egy sem';
$string['noneinthisxmatching'] = '\'{$a->search}\' szerint egy felhasználó sincs ebben a {$a->contexttype} környezettípusban';
$string['norole'] = 'Érvénytelen szerepmeghatározás';
$string['noroleassignments'] = 'Ennek a felhasználónak sehol a portálon nincs hozzárendelt szerepe.';
$string['noroles'] = 'Nincs szerep';
$string['notabletoassignroleshere'] = 'Itt a rendszergazda nem engedélyezte szerepek hozzárendelését.';
$string['notabletooverrideroleshere'] = 'Itt nem írhatja felül semmilyen szerep engedélyét.';
$string['notes:manage'] = 'Megjegyzések kezelése';
$string['notes:view'] = 'Megjegyzések megtekintése';
$string['notset'] = 'Nincs megadva';
$string['novisibleroles'] = 'Nincs szerep';
$string['overrideanotherrole'] = 'Másik szerep felülírása';
$string['overridecontext'] = 'Környezet felülírása';
$string['overridepermissions'] = 'Engedélyek felülírása';
$string['overridepermissions_help'] = 'Az engedélymódosításokkal valamely
adott környezethez kapcsolódó képességek engedélyezhetők vagy letilthatók.
';
$string['overridepermissionsforrole'] = '\'{$a->role}\' szerep felülírása {$a->context} környezetben';
$string['overridepermissionsin'] = 'Engedélyek felülírása itt: {$a}';
$string['overrideroles'] = 'Szerepek felülírása';
$string['overriderolesin'] = 'Szerepek felülírása itt: {$a}';
$string['overrides'] = 'Felülírja';
$string['overridesbycontext'] = 'Felülírások (környezet)';
$string['payment:manageaccounts'] = 'Fiókok kezelése';
$string['payment:viewpayments'] = 'Befizetések megtekintése';
$string['permission'] = 'Engedély';
$string['permission_help'] = 'Az engedélyek konkrét lehetőségekre módot adó beállítások. Négy érték közül választhat:

* Nincs beállítva
* Engedélyez - Engedélyezi a lehetőség használatát
* Megakadályoz - A lehetőség használatától megvonja az engedélyt, még akkor is, ha ez egy magasabb környezetben engedélyezve van.
* Tilt - Engedély teljes letiltása úgy, hogy alacsonyabb (konkrétabb) szinten se lehessen módosítani';
$string['permissions'] = 'Engedélyek';
$string['permissionsforuser'] = 'Engedélyek {$a} felhasználó esetén';
$string['permissionsincontext'] = 'Engedélyek {$a} környezetben';
$string['portfolio:export'] = 'Exportálás portfóliókba';
$string['potentialusers'] = '{$a} potenciális felhasználó';
$string['potusers'] = 'Potenciális felhasználó';
$string['potusersmatching'] = '\'{$a}\' szerint megfelelő potenciális felhasználó';
$string['prevent'] = 'Megakadályoz';
$string['privacy:metadata:preference:showadvanced'] = 'A részletes üzemmódgomb ki-/bekapcsolásának a kezelése.';
$string['privacy:metadata:role_assignments'] = 'Szerep-hozzárendelések';
$string['privacy:metadata:role_assignments:component'] = 'A szerep-hozzárendelésért felelős segédprogram, kézi hozzárendelés esetén üres.';
$string['privacy:metadata:role_assignments:itemid'] = 'A szerep-hozzárendelésért felelős beiratkozási/hitelesítési segédprogram azonosítója';
$string['privacy:metadata:role_assignments:modifierid'] = 'A szerep-hozzárendelést létrehozó vagy módosító felhasználó azonosítója';
$string['privacy:metadata:role_assignments:roleid'] = 'A szerep azonosítója';
$string['privacy:metadata:role_assignments:tableexplanation'] = 'A tábla az egyes környezetekben hozzárendelt szerepeket tárolja.';
$string['privacy:metadata:role_assignments:timemodified'] = 'A szerep-hozzárendelés létrehozásának vagy módosításának az ideje.';
$string['privacy:metadata:role_assignments:userid'] = 'A felhasználó azonosítója';
$string['privacy:metadata:role_capabilities'] = 'Szerepkészségek';
$string['privacy:metadata:role_capabilities:capability'] = 'A készség megnevezése.';
$string['privacy:metadata:role_capabilities:modifierid'] = 'A készséget létrehozó vagy módosító felhasználó azonosítója';
$string['privacy:metadata:role_capabilities:permission'] = 'Készséghez tartozó engedély: öröklés, engedélyezés, megakadályozás vagy tiltás.';
$string['privacy:metadata:role_capabilities:roleid'] = 'A szerep azonosítója';
$string['privacy:metadata:role_capabilities:tableexplanation'] = 'Az adott környezetben az adott szerephez tartozó készségek és felülírási készségek';
$string['privacy:metadata:role_capabilities:timemodified'] = 'A készség létrehozásának vagy módosításának az ideje.';
$string['privacy:metadata:role_cohortroles'] = 'Globális csoporthoz tartozó szerep';
$string['prohibit'] = 'Tilt';
$string['prohibitedroles'] = 'Tiltva van';
$string['question:add'] = 'Új kérdések hozzáadása';
$string['question:config'] = 'Kérdéstípusok beállítása';
$string['question:editall'] = 'Az összes kérdés szerkesztése';
$string['question:editmine'] = 'Saját kérdések szerkesztése';
$string['question:flag'] = 'Kérdések megjelölése próbálkozás közben';
$string['question:managecategory'] = 'Kérdéskategóriák szerkesztése';
$string['question:moveall'] = 'Az összes kérdés áthelyezése';
$string['question:movemine'] = 'Saját kérdések áthelyezése';
$string['question:tagall'] = 'Az összes kérdés címkézése';
$string['question:tagmine'] = 'Saját kérdések címkézése';
$string['question:useall'] = 'Az összes kérdés felhasználása';
$string['question:usemine'] = 'Saját kérdések felhasználása';
$string['question:viewall'] = 'Az összes kérdés megtekintése';
$string['question:viewmine'] = 'Saját kérdések megtekintése';
$string['rating:rate'] = 'Tételekhez értékelés hozzáadása';
$string['rating:view'] = 'Összes kapott értékelésének megtekintése';
$string['rating:viewall'] = 'Összes egyedi értékelés megtekintése';
$string['rating:viewany'] = 'Összes bárki által kapott értékelés megtekintése';
$string['resetrole'] = 'Visszaállítás';
$string['resettingrole'] = 'A(z)  \'{$a}\' szerep visszaállítása';
$string['restore:configure'] = 'Visszaállítási lehetőségek beállítása';
$string['restore:createuser'] = 'Felhasználók létrehozása helyreállítás során';
$string['restore:restoreactivity'] = 'Tevékenységek visszaállítása';
$string['restore:restorecourse'] = 'Kurzusok visszaállítása ';
$string['restore:restoresection'] = 'Szakaszok visszaállítása ';
$string['restore:restoretargetimport'] = 'Visszaállítás importálási rendeltetésű állományokból';
$string['restore:rolldates'] = 'Engedély helyreállításkor tevékenységek beállítási dátumainak görgetéséhez';
$string['restore:uploadfile'] = 'Állományok feltöltése biztonsági mentési területekre';
$string['restore:userinfo'] = 'Felhasználói adatok helyreállítása';
$string['restore:viewautomatedfilearea'] = 'Kurzusok helyreállítása automatikus biztonsági mentésekből';
$string['risks'] = 'Kockázatok';
$string['role:assign'] = 'Szerepek hozzárendelése felhasználókhoz';
$string['role:manage'] = 'Szerepek létrehozása és kezelése';
$string['role:override'] = 'Mások engedélyeinek felülírása';
$string['role:review'] = 'Mások engedélyeinek ellenőrzése';
$string['role:safeoverride'] = 'Mások biztonságos engedélyeinek felülírása';
$string['role:switchroles'] = 'Váltás más szerepekre';
$string['roleallowheader'] = 'Ezen szerep engedélyezése:';
$string['roleallowinfo'] = '{$a->context} környezet és {$a->cap} lehetőség esetén szerep kiválasztása az engedélyezett szerepekhez való hozzáadáshoz:';
$string['roleassignments'] = 'Szerepek hozzárendelése';
$string['roledefinitions'] = 'Szerep-meghatározások';
$string['rolefullname'] = 'Név';
$string['roleincontext'] = '{$a->role} {$a->context} környezetben';
$string['roleprohibitheader'] = 'Szerep letiltása';
$string['roleprohibitinfo'] = '{$a->context} környezet és {$a->cap} lehetőség esetén szerep kiválasztása a tiltott szerepekhez való hozzáadáshoz:';
$string['rolerepreset'] = 'Szerep előzetes beállításának használata';
$string['roleresetdefaults'] = 'Alapbeállítások';
$string['roleresetrole'] = 'Szerep vagy szereptípus használata';
$string['rolerisks'] = 'Szerephez kapcsolódó kockázatok';
$string['roles'] = 'Szerepek';
$string['roles_help'] = 'A szerep az egész rendszerre meghatározott engedélyek összessége, melyet adott felhasználókhoz adott környezetben hozzárendelhet.';
$string['roleselect'] = 'Szerep kiválasztása';
$string['rolesforuser'] = '{$a} szerepei';
$string['roleshortname'] = 'Rövid név';
$string['roleshortname_help'] = 'A szerep rövid neve olyan szerepazonosító, amelyben csak ASCII alfanumerikus karakterek szerepelhetnek. A standard szerepek rövid neveit ne változtassa meg!';
$string['roletoassign'] = 'Hozzárendelendő szerep';
$string['roletooverride'] = 'Felülírandó szerep';
$string['safeoverridenotice'] = 'Megjegyzés: a kockázatosabb képességek zárolva vannak, mert csak a biztonságosakat írhatja felül.';
$string['search:query'] = 'Keresés a teljes portálon';
$string['selectanotheruser'] = 'Válasszon ki egy másik felhasználót.';
$string['selectauser'] = 'Válasszon ki egy felhasználót.';
$string['selectrole'] = 'Szerep kiválasztása';
$string['showallroles'] = 'Minden szerep megjelenítése';
$string['showthisuserspermissions'] = 'A felhasználó engedélyeinek megjelenítése';
$string['site:accessallgroups'] = 'Minden csoport elérése';
$string['site:approvecourse'] = 'Kurzus létrehozásának jóváhagyása';
$string['site:backup'] = 'Kurzusok biztonsági mentése';
$string['site:config'] = 'Portálbeállítások módosítása';
$string['site:configview'] = 'A portál adminisztrációs fájának (összes oldal nélküli) megtekintése';
$string['site:deleteanymessage'] = 'A portál bármely üzenetének törlése';
$string['site:deleteownmessage'] = 'A felhasználó kapott és küldött üzeneteinek törlése';
$string['site:doanything'] = 'Bármit tehet';
$string['site:doclinks'] = 'Portálon kívüli dokumentumok hivatkozásainak megmutatása';
$string['site:forcelanguage'] = 'Kurzusnyelv felülírása';
$string['site:import'] = 'Más kurzusok importálása egy kurzusba';
$string['site:maintenanceaccess'] = 'Karbantartási üzemmódban a portál elérése';
$string['site:manageallmessaging'] = 'Bármely felhasználó kapcsolatainak hozzáadása, törlése, zárolása és feloldása';
$string['site:manageblocks'] = 'Oldalon lévő blokkok kezelése';
$string['site:managecontextlocks'] = 'Környezetbefagyasztás kezelése';
$string['site:messageanyuser'] = 'Felhasználói üzenetküldési adatvédelmi beállítások kikerülése';
$string['site:mnetloginfromremote'] = 'Belépés egy távoli Moodle-ból';
$string['site:mnetlogintoremote'] = 'Áttérés egy távoli alkalmazásra hálózati Moodle segítségével\'';
$string['site:readallmessages'] = 'Portál összes üzenetének elolvasása';
$string['site:restore'] = 'Kurzusok helyreállítása';
$string['site:senderrormessage'] = 'A hibaoldalról üzenet küldése a támogató felhasználó részére';
$string['site:sendmessage'] = 'Üzenetek elküldése bármely felhasználónak';
$string['site:trustcontent'] = 'Beküldött tartalom megbízhatónak tekintése';
$string['site:uploadusers'] = 'Új felhasználók feltöltése állományból';
$string['site:viewanonymousevents'] = 'A névtelen események megjelenítése a jelentésekben';
$string['site:viewfullnames'] = 'Mindig a felhasználók teljes neve látszik';
$string['site:viewparticipants'] = 'Résztvevők megtekintése';
$string['site:viewreports'] = 'Jelentések megtekintése';
$string['site:viewuseridentity'] = 'A teljes felhasználói azonosítást lásd a listákban';
$string['siteadministrators'] = 'Portálszintű rendszergazdák';
$string['tag:edit'] = 'Létező címkék szerkesztése';
$string['tag:editblocks'] = 'Blokkok szerkesztése címkeoldalakon';
$string['tag:flag'] = 'Címkék helytelenként való megjelölése';
$string['tag:manage'] = 'Az összes címke kezelése';
$string['thisnewrole'] = 'Ez az új szerep';
$string['thisusersroles'] = 'A felhasználó szerep-hozzárendelései';
$string['unassignarole'] = '{$a} szerep hozzárendelésének törlése';
$string['unassignconfirm'] = 'Biztosan törli "{$a->user}" felhasználó  "{$a->role}"  szerepét?';
$string['unassignerror'] = 'Hiba {$a->user} felhasználó {$a->role} szerepének törlése közben.';
$string['user:changeownpassword'] = 'Saját jelszó módosítása';
$string['user:create'] = 'Felhasználók létrehozása';
$string['user:delete'] = 'Felhasználók törlése';
$string['user:editmessageprofile'] = 'Felhasználói üzenetküldés profiljának szerkesztése';
$string['user:editownmessageprofile'] = 'Saját felhasználói üzenetküldés profiljának szerkesztése';
$string['user:editownprofile'] = 'Saját felhasználói profil szerkesztése';
$string['user:editprofile'] = 'Felhasználói profil szerkesztése';
$string['user:ignoreuserquota'] = 'Felhasználói korlát figyelmen kívül hagyása';
$string['user:loginas'] = 'Belépés másik felhasználóként';
$string['user:manageblocks'] = 'Blokkok kezelése más felhasználók felhasználói profilján';
$string['user:manageownblocks'] = 'Blokkok kezelése saját nyilvános felhasználói profilján';
$string['user:manageownfiles'] = 'Állományok kezelése saját állományok magánterületén';
$string['user:managesyspages'] = 'Alapoldal elrendezésének beállítása nyilvános felhasználói profilokhoz';
$string['user:readuserblogs'] = 'Minden felhasználói blog megjelenítése';
$string['user:readuserposts'] = 'Minden felhasználói hozzászólás megjelenítése';
$string['user:update'] = 'Felhasználói profilok frissítése';
$string['user:viewalldetails'] = 'Összes felhasználói adat megtekintése';
$string['user:viewdetails'] = 'Felhasználói profilok megtekintése';
$string['user:viewhiddendetails'] = 'Rejtett felhasználói adatok megtekintése';
$string['user:viewlastip'] = 'Utolsó felhasználói ip-cím megtekintése';
$string['user:viewuseractivitiesreport'] = 'Felhasználói tevékenységekről szóló jelentés megtekintése';
$string['user:viewusergrades'] = 'Felhasználói pontok megjelenítése';
$string['usersfrom'] = '{$a} felhasználói';
$string['usersfrommatching'] = '{$a->contextname} környezetben \'{$a->search}\' szerint megfelelő felhasználók';
$string['usersinthisx'] = '{$a} felhasználói';
$string['usersinthisxmatching'] = '{$a->contexttype} környezettípusban \'{$a->search}\' szerint megfelelő felhasználók';
$string['userswithrole'] = 'Minden szereppel rendelkező felhasználó';
$string['userswiththisrole'] = 'Ezen szereppel rendelkező felhasználók';
$string['useshowadvancedtochange'] = 'A módosításhoz használja a \'További megjelenítése\' beállítást';
$string['viewingdefinitionofrolex'] = '\'{$a}\' szerep meghatározásának megtekintése';
$string['viewrole'] = 'Szerepek részleteinek megtekintése';
$string['webservice:createmobiletoken'] = 'Webszolgáltatási jel létrehozása mobil hozzáféréshez';
$string['webservice:createtoken'] = 'Webszolgáltatási jel létrehozása';
$string['webservice:managealltokens'] = 'Összes felhasználó webszolgáltatásának kezelése';
$string['whydoesuserhavecap'] = '{$a->fullname} miért rendelkezik {$a->capability} képességgel {$a->context} környezetben?';
$string['whydoesusernothavecap'] = '{$a->fullname} miért nem rendelkezik {$a->capability} képességgel {$a->context} környezetben';
$string['xroleassignments'] = '{$a} hozzárendelt szerepei';
$string['xuserswiththerole'] = '"{$a->role}" szerepű felhasználók';
