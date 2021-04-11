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
 * Strings for component 'completion', language 'hu', version '3.10'.
 *
 * @package     completion
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['achievinggrade'] = 'Pontot elérő';
$string['activities'] = 'Tevékenységek';
$string['activitiescompleted'] = 'Teljesített tevékenységek';
$string['activitiescompletednote'] = 'Megjegyzés: a tevékenység befejezését be kell állítani ahhoz, hogy a fenti listában megjelenjen.';
$string['activitieslabel'] = 'Tevékenységek / Tananyagok';
$string['activityaggregation'] = 'Előfeltétel';
$string['activityaggregation_all'] = 'MINDEN kiválasztott tevékenység végrehajtása';
$string['activityaggregation_any'] = 'VALAMELY kiválasztott tevékenység végrehajtása';
$string['activitycompletion'] = 'Tevékenység teljesítése';
$string['activitycompletionupdated'] = 'Módosítások elmentve';
$string['activitygradenotrequired'] = 'Osztályzat nem szükséges';
$string['affectedactivities'] = 'A módosítások az alábbi  <b>{$a}</b> tevékenységeket/tananyagokat érintik';
$string['aggregationmethod'] = 'Összegzési módszer';
$string['all'] = 'Mind';
$string['any'] = 'Bármelyik';
$string['approval'] = 'Jóváhagyás';
$string['areyousureoverridecompletion'] = 'Biztosan fölülírja  a felhasználó ezen tevékenységének befejezettségi állapotát és "{$a}" jelzéssel látja el?';
$string['badautocompletion'] = 'Automatikus teljesítés kiválasztásakor legalább egy követelményt (lásd alább) is meg kell adnia.';
$string['badcompletiongradeitemnumber'] = '<b>{$a}</b> esetén az osztályzat előírása nem működik, mert {$a} részéről az osztályozás nincs bekapcsolva.';
$string['bulkactivitycompletion'] = 'Tevékenységek teljesítésének tömeges szerkesztése';
$string['bulkactivitydetail'] = 'Tevékenységek kiválasztása tömeges szerkesztésre';
$string['bulkcompletiontracking'] = 'Teljesítés követése';
$string['bulkcompletiontracking_help'] = '<strong>Nincs:</strong> Nem jelzi a tevékenység teljesítését

<strong>Kézi:</strong> A tanulók kézzel bejelölhetik a tevékenység teljesítését

<strong>Feltétel(ek) esetén:</strong> A tevékenység akkor jelenik meg teljesítettként, ha bizonyos feltételek teljesültek';
$string['checkactivity'] = 'Tevékenység / tananyag jelölőnégyzete: {$a}';
$string['checkall'] = 'Minden tevékenység és tananyag bejelölése vagy a jelölés törlése';
$string['checkallsection'] = 'Minden tevékenység és tananyag bejelölése vagy a jelölés törlése az alábbi szakaszban: {$a}';
$string['completed'] = 'Teljesítve';
$string['completedunlocked'] = 'Teljesítési lehetőségek feloldva';
$string['completedunlockedtext'] = 'Ha menti a módosításokat, minden felhasználó esetén törlődik a teljesítési állapot. Ha ezen később módosítani szeretne, ne mentse el az űrlapot.';
$string['completedwarning'] = 'Teljesítési lehetőségek zárolva';
$string['completedwarningtext'] = '({$a}) résztvevő esetén a tevékenységet már megjelölte mint teljesítettet. A teljesítési lehetőségek módosításakor törlődik teljesítési állapotuk, ami zavarhoz vezethet. A lehetőségek zárolva vannak, csak akkor oldja fel őket, ha ez elengedhetetlen.';
$string['completion'] = 'Teljesítés nyomon követése';
$string['completion-alt-auto-enabled'] = 'A rendszer ezt a tételt a(z) {$a} feltételek szerint teljesítettet jelöli meg.';
$string['completion-alt-auto-fail'] = 'Teljesítve: {$a}  (a teljesítési pontszámot nem érte el)';
$string['completion-alt-auto-n'] = 'Nincs teljesítve:  {$a}';
$string['completion-alt-auto-n-override'] = 'Nincs teljesítve: {$a->modname} (beállította {$a->overrideuser})';
$string['completion-alt-auto-pass'] = 'Teljesítve: {$a} (a teljesítési pontszámot elérte)';
$string['completion-alt-auto-y'] = 'Teljesítve:  {$a}';
$string['completion-alt-auto-y-override'] = 'Teljesítve: {$a->modname} (beállította {$a->overrideuser})';
$string['completion-alt-manual-enabled'] = 'A felhasználók ezt a tételt kézzel mint teljesítettet jelölhetik meg: {$a}';
$string['completion-alt-manual-n'] = 'Nincs teljesítve:  {$a}; teljesítettként való megjelöléséhez válassza ki.';
$string['completion-alt-manual-n-override'] = 'Nincs teljesítve: {$a->modname} (beállította {$a->overrideuser}). Válassza ki teljesítettként való megjelölésre.';
$string['completion-alt-manual-y'] = 'Teljesítve:  {$a}, teljesítetlenként való megjelöléséhez válassza ki.';
$string['completion-alt-manual-y-override'] = 'Teljesítve: {$a->modname} (beállította {$a->overrideuser}). Válassza ki nem teljesítettként való megjelölésre.';
$string['completion-fail'] = 'Teljesítve (a teljesítési pontszámot nem érte el)';
$string['completion-n'] = 'Nem teljesítette';
$string['completion-n-override'] = 'Nincs teljesítve (beállította {$a})';
$string['completion-pass'] = 'Teljesítette (\'megfelelt\' osztályzatot kapott)';
$string['completion-y'] = 'Teljesítve';
$string['completion-y-override'] = 'Teljesítve (beállította {$a})';
$string['completion_automatic'] = 'A tevékenységet teljesítettként jelöli meg, ha a feltételek teljesültek.';
$string['completion_help'] = 'Bekapcsolása esetén a tevékenység teljesítését a rendszer bizonyos feltételek alapján kézi vagy automatikus úton figyeli. Szükség esetén több feltételt adhat meg. Ilyen esetben a tevékenység csak akkor teljesítődik, ha MINDEN feltétel teljesült.';
$string['completion_manual'] = 'A tanulók ezt a tevékenységet kézzel mint teljesítettet jelölhetik meg.';
$string['completion_none'] = 'Ne jelölje a tevékenység teljesítését';
$string['completionactivitydefault'] = 'Alaptevékenység használata';
$string['completiondefault'] = 'Alapteljesítés nyomon követése';
$string['completiondisabled'] = 'Kikapcsolva, a tevékenység beállításai között nem szerepel.';
$string['completionduration'] = 'Beiratkozás';
$string['completionenabled'] = 'Bekapcsolva, a teljesítésen és a tevékenység beállításain keresztül szabályozható';
$string['completionexpected'] = 'Teljesítés előírt időpontja';
$string['completionexpected_help'] = 'Ezzel állítja be azt az időpontot, amikorra a tevékenységet teljesíteni kell.';
$string['completionexpecteddesc'] = 'Tervezett teljesítés {$a} időpontban';
$string['completionexpectedfor'] = '{$a->instancename} teljesítendő';
$string['completionicons'] = 'Teljesítés jelölőnégyzetei';
$string['completionicons_help'] = 'A tevékenység melletti jelölőnégyzettel jelezheti a tevékenység teljesítését.

Ha pontozott szegélyű négyzetet lát, abban automatikusan megjelenik a pipa, ha a tevékenységet a tanár által beállított feltételeknek megfelelően teljesítette.

Ha vastag szegélyű jelölőnégyzet jelenik meg, rákattinthat, ha úgy véli, teljesített a tevékenységet (újbóli kattintással kiveheti a pipát, ha meggondolja magát).';
$string['completionmenuitem'] = 'Teljesítés';
$string['completionnotenabled'] = 'A teljesítés nincs bekapcsolva';
$string['completionnotenabledforcourse'] = 'A teljesítés ebben a kurzusban nincs bekapcsolva';
$string['completionnotenabledforsite'] = 'A teljesítés ezen a portálon nincs bekapcsolva';
$string['completionondate'] = 'Dátum';
$string['completionondatevalue'] = 'A kurzus ekkor lesz teljesítettként megjelölve';
$string['completionsettingslocked'] = 'A teljesítés beállításai zárolva';
$string['completionupdated'] = '<b>{$a}</b> tevékenység teljesítése frissítve';
$string['completionusegrade'] = 'Pontszám előírása';
$string['completionusegrade_desc'] = 'A tanulónak a tevékenység teljesítéséhez osztályzatot kell kapnia';
$string['completionusegrade_help'] = 'Bekapcsolása esetén a tanulónak a tevékenység teljesítéséhez osztályzatot kell kapnia. Ha teljesítési osztályzat van megadva, sikeres vagy sikertelen ikon jelenhet  meg. ';
$string['completionview'] = 'Megtekintés előírása';
$string['completionview_desc'] = 'A tanulónak a tevékenység teljesítéséhez a tevékenységet meg kell tekintenie';
$string['configcompletiondefault'] = 'Alapbeállítás a teljesítés nyomon követéséhez új tevékenységek létrehozása esetén';
$string['configenablecompletion'] = 'Bekapcsolása esetén beállíthatja a kurzus vagy a tevékenység teljesítési feltételeit. A tevékenység teljesítési feltételeinek beállítása esetén a felhasználók lényeges adatokról értesülhetnek az irányítópulton keresztül a kurzusáttekintőből.';
$string['confirmselfcompletion'] = 'Önálló teljesítés megerősítése';
$string['courseaggregation'] = 'Előfeltétel';
$string['courseaggregation_all'] = 'MINDEN kiválasztott kurzus teljesítése';
$string['courseaggregation_any'] = 'VALAMELY kiválasztott kurzus teljesítése';
$string['coursealreadycompleted'] = 'Már teljesítette a kurzust.';
$string['coursecomplete'] = 'Kurzus kész';
$string['coursecompleted'] = 'Kurzus teljesítve';
$string['coursecompletedmessage'] = '<p>Gratulálunk!</p><p>Az alábbi kurzust teljesítette: <a href="{$a->courselink}">{$a->coursename}</a>.</p>';
$string['coursecompletion'] = 'Kurzus teljesítése';
$string['coursecompletioncondition'] = 'Feltétel: {$a}';
$string['coursegrade'] = 'Kurzusosztályzat';
$string['coursesavailable'] = 'Felvehető kurzusok';
$string['coursesavailableexplaination'] = '<i>A kurzus listán való megjelenítéséhez teljesítési követelményeket kell beállítani</i>';
$string['criteria'] = 'Követelmények';
$string['criteriagroup'] = 'Követelménycsoport';
$string['criteriarequiredall'] = 'Az összes alábbi követelmény teljesítendő';
$string['criteriarequiredany'] = 'Bármely alábbi követelmény teljesítendő';
$string['csvdownload'] = 'Letöltés táblázatos (UTF-8 .csv) formában.';
$string['datepassed'] = 'Teljesítés dátuma';
$string['days'] = 'Nap';
$string['daysoftotal'] = '{$a->total} / {$a->days} nap';
$string['defaultcompletion'] = 'Tevékenységek teljesítésének alapbeállításai';
$string['defaultcompletionupdated'] = 'Módosítások elmentve';
$string['deletecompletiondata'] = 'Teljesítési adatok törlése';
$string['dependencies'] = 'Feltételek';
$string['dependenciescompleted'] = 'Más kurzusok teljesítése';
$string['editcoursecompletionsettings'] = 'A kurzusteljesítés beállításainak szerkesztése';
$string['enablecompletion'] = 'Teljesítés nyomon követésének bekapcsolása';
$string['enablecompletion_help'] = 'Bekapcsolása esetén a tevékenység beállításai és/vagy a kurzusteljesítési követelmények között beállíthatja a tevékenység teljesítési feltételeit. Ajánlott bekapcsolni, mert a kurzus előrehaladásának kijelzése így értelmes adatokat tud az Irányítópulton megjeleníteni.';
$string['enrolmentduration'] = 'Beiratkozás időtartama';
$string['enrolmentdurationlength'] = 'A felhasználónak beiratkozottnak kell maradnia erre';
$string['err_noactivities'] = 'A teljesítésre vonatkozó információk nem minden tevékenység esetén vannak bekapcsolva, így előfordulhat, hogy semmi nem jelenik meg. A teljesítésre vonatkozó információkat az adott tevékenység beállításainak szerkesztésével kapcsolhatja be.';
$string['err_nocourses'] = 'A kurzusteljesítés egyetlen másik kurzusnál sincs bekapcsolva, így egy sem jeleníthető meg. A kurzusteljesítést a kurzus beállításainál kapcsolhatja be.';
$string['err_nograde'] = 'A kurzushoz nincs beállítva teljesítési osztályzat. A követelmény bekapcsolásához állítson be egy teljesítési osztályzatot a kurzushoz.';
$string['err_noroles'] = 'A kurzusban nincs megadva \'moodle/course:markcomplete\' jogosultságú szerep.';
$string['err_nousers'] = 'A kurzusban vagy a csoportban nincs olyan felhasználó, akivel kapcsolatosan a teljesítésre vonatkozó információk megjelenhetnének. (A teljesítésre vonatkozó információk alaphelyzetben csak a \'teljesítési jelentésekben megjelenítendő\' tanulóknál jelennek meg, így ha nincsenek tanulók, megjelenik ez a hibaüzenet.)';
$string['err_settingslocked'] = 'Egy vagy több tanuló már teljesítette valamelyik követelményt, ezért a beállítások zárolva lettek. Ha feloldja a teljesítési követelmények beállítását, minden meglévő felhasználó adata törlődni fog és kavarodás keletkezhet.';
$string['err_system'] = 'A teljesítési rendszerben belső hiba lépett fel. (A rendszergazdák a hibaelhárítás bekapcsolásával további részleteket tudhatnak meg.)';
$string['eventcoursecompleted'] = 'Kurzus teljesítve';
$string['eventcoursecompletionupdated'] = 'Kurzusteljesítés frissítve';
$string['eventcoursemodulecompletionupdated'] = 'Kurzusmodul teljesítése frissítve';
$string['eventdefaultcompletionupdated'] = 'Kurzusmodul  alapértelmezett befejezése frissítve';
$string['excelcsvdownload'] = 'Letöltés Excellel kompatibilis (.csv) formában';
$string['fraction'] = 'Tört';
$string['graderequired'] = 'Előírt osztályzat';
$string['gradexrequired'] = '{$a} van előírva';
$string['hiddenrules'] = '<b>{$a}</b>  egyes beállításai rejtve vannak. Megtekintéshez szüntesse meg más tevékenységek kiválasztását';
$string['inprogress'] = 'Folyamatban';
$string['manual'] = 'Kézi';
$string['manualcompletionby'] = 'Kézzel teljesítette más';
$string['manualcompletionbynote'] = 'Megjegyzés: a listán való megjelenéshez egy szerephez engedélyezni kell a \'moodle/course:markcomplete\' jogosultságot.';
$string['manualselfcompletion'] = 'Saját teljesítés kézzel';
$string['manualselfcompletionnote'] = 'Megjegyzés: kézi saját teljesítés bekapcsolásakor a saját teljesítés blokkját hozzá kell adni a kurzushoz';
$string['markcomplete'] = 'Teljesítettként megjelöl';
$string['markedcompleteby'] = '{$a} teljesítettként jelölte meg';
$string['markingyourselfcomplete'] = 'Saját teljesítés megjelölése';
$string['modifybulkactions'] = 'Módosítsa a tömegesen szerkesztendő lépéseket.';
$string['moredetails'] = 'További részletek';
$string['nocriteriaset'] = 'Ebben a kurzusban nincsenek megadva teljesítési feltételek';
$string['nogradeitem'] = '<b>{$a}</b> esetén nem kapcsolható be az előírt osztályzat, mert a tevékenység nem kap osztályzatot.';
$string['notcompleted'] = 'Nem teljesítette';
$string['notenroled'] = 'Ezt a kurzust nem vette föl';
$string['nottracked'] = 'A kurzusban a teljesítését jelenleg nem követjük nyomon';
$string['notyetstarted'] = 'Még nem kezdődött el';
$string['overallaggregation'] = 'Teljesítési követelmények';
$string['overallaggregation_all'] = 'A kurzust akkor teljesítették, ha MINDEN feltételnek megfeleltek.';
$string['overallaggregation_any'] = 'A kurzust akkor teljesítették, ha VALAMELY feltételnek megfeleltek.';
$string['pending'] = 'Függőben';
$string['periodpostenrolment'] = 'Beiratkozás utáni időszak';
$string['privacy:metadata:completionstate'] = 'Elvégezték-e a tevékenységet';
$string['privacy:metadata:course'] = 'Kurzus-azonosító';
$string['privacy:metadata:coursecompletedsummary'] = 'Kurzus feltételeit teljesítő tanulók adatait tárolja.';
$string['privacy:metadata:coursemoduleid'] = 'A tevékenység azonosítója';
$string['privacy:metadata:coursemodulesummary'] = 'Egy felhasználó kapcsán a tevékenység elvégzésének az adatait tárolja';
$string['privacy:metadata:coursesummary'] = 'Egy felhasználó kapcsán a kurzus elvégzésének adatait tárolja.';
$string['privacy:metadata:gradefinal'] = 'A kurzus elvégzéséért kapott végső osztályzat.';
$string['privacy:metadata:overrideby'] = 'A tevékenység elvégzését fölülíró személy felhasználói azonosítója';
$string['privacy:metadata:reaggregate'] = 'Újból összesítették-e a kurzus elvégzését.';
$string['privacy:metadata:timecompleted'] = 'A kurzus elvégzésének időpontja.';
$string['privacy:metadata:timeenrolled'] = 'A felhasználó kurzusfelvételének az időpontja.';
$string['privacy:metadata:timemodified'] = 'A tevékenység elvégzése módosításának az időpontja';
$string['privacy:metadata:timestarted'] = 'A kurzus elkezdésének az időpontja.';
$string['privacy:metadata:unenroled'] = 'Leadta-e a felhasználó a kurzust';
$string['privacy:metadata:userid'] = 'A felhasználó azonosítója a kurzusra és a tevékenység elvégzésére vonatkozó adatokkal';
$string['privacy:metadata:viewed'] = 'A tevékenységet megtekintették-e';
$string['progress'] = 'A tanuló előmenetele';
$string['progress-title'] = '{$a->user}, {$a->activity}: {$a->state} {$a->date}';
$string['progresstotal'] = 'Előrehaladás:  {$a->complete} / {$a->total}';
$string['recognitionofpriorlearning'] = 'Korábbi tanulmányok beszámítása';
$string['remainingenroledfortime'] = 'Megadott ideig beiratkozott marad';
$string['remainingenroleduntildate'] = 'Megadott időpontig beiratkozott marad';
$string['reportpage'] = '{$a->total} közül {$a->from} - {$a->to} felhasználó megjelenítése.';
$string['requiredcriteria'] = 'Előírt követelmények';
$string['resetactivities'] = 'Minden tevékenység és tananyag bejelölésének törlése';
$string['restoringcompletiondata'] = 'A teljesítési adatok kiírása';
$string['roleaggregation'] = 'Előfeltétel';
$string['roleaggregation_all'] = 'MINDEN kiválasztott szerep osztályozzon, ha a feltétel teljesül.';
$string['roleaggregation_any'] = 'VALAMELY kiválasztott szerep osztályozzon, ha a feltétel teljesül.';
$string['roleidnotfound'] = '{$a} szerepazonosító nem található';
$string['saved'] = 'Elmentve';
$string['seedetails'] = 'Részletek megtekintése';
$string['select'] = 'Kiválasztás';
$string['self'] = 'Saját';
$string['selfcompletion'] = 'Saját teljesítés';
$string['showinguser'] = 'Felhasználó megjelenítése';
$string['unenrolingfromcourse'] = 'Kurzus leadása';
$string['unenrolment'] = 'Kiiratkozás';
$string['unit'] = 'Egység';
$string['unlockcompletion'] = 'A teljesítési lehetőségek feloldása';
$string['unlockcompletiondelete'] = 'A teljesítési lehetőségek feloldása és a felhasználó teljesítési adatainak törlése';
$string['updateactivities'] = 'Bejelölt tevékenység befejezési állapotának frissítése';
$string['usealternateselector'] = 'A másik kurzusválasztó használata';
$string['usernotenroled'] = 'Ezt a kurzust a felhasználó nem vette föl';
$string['viewcoursereport'] = 'Kurzusjelentés megtekintése';
$string['viewingactivity'] = '{$a} megtekintése';
$string['withconditions'] = 'Feltételek esetén';
$string['writingcompletiondata'] = 'A teljesítési adatok kiírása';
$string['xdays'] = '{$a} nap';
$string['yourprogress'] = 'Folyamatjelző';
