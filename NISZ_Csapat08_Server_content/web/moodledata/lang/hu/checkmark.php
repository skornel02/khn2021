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
 * Strings for component 'checkmark', language 'hu', version '3.10'.
 *
 * @package     checkmark
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activateindividuals'] = 'Egyéni funkció aktiválása';
$string['addsubmission'] = 'Leadott munka hozzáadása';
$string['all'] = 'Összes';
$string['allowresubmit'] = 'Újraleadás engedélyezése';
$string['allowresubmit_help'] = 'Ha be van kapcsolva, a tanulók újra le tudják adni a jelöléseiket, akkor is, ha már osztályozva vannak (újraosztályzásra).';
$string['alreadygraded'] = 'A leadását már osztályozták, és az újraleadás nem engedélyezett.';
$string['alwaysshowdescription'] = 'Mindig mutassa a leírást';
$string['alwaysshowdescription_help'] = 'Ha ki van kapcsolva, a jelölések leírása csak a "Leadások engedélyezése ekkortól" időpontjától jelenik meg a tanulók számára.';
$string['autograde_all'] = 'Az összes leadott munka osztályozása';
$string['autograde_confirm'] = 'Frissíteni fogja az osztályzatokat és a visszajelzést itt: <strong>{$a}</strong>. A korábbi osztályzatok és visszajelzés felülíródik.';
$string['autograde_confirm_continue'] = 'Biztosan folytatja?';
$string['autograde_custom'] = 'Kiválasztott felhasználók osztályozása';
$string['autograde_error'] = 'Hiba történt az automatikus osztályozás során.';
$string['autograde_failed'] = 'Az automatikus osztályozás sikertelen!';
$string['autograde_no_users_selected'] = 'Nem választott ki egy felhasználót sem. Válassza ki a szükséges felhasználókat az alábbi táblázat bal oszlopában lévő jelölőnégyzetekkel.';
$string['autograde_non_numeric_grades'] = 'Az automatikus osztályozáshoz be kell állítani egy maximális osztályzatot. Ez az eseti beállításoknál tehető meg.';
$string['autograde_notsupported'] = 'Ezt a skálát nem támogatja az automatikus osztályozás';
$string['autograde_req'] = 'Osztályozás visszavonva';
$string['autograde_str'] = 'Automatikus osztályozás';
$string['autograde_str_help'] = 'Az automatikus osztályozás kiszámolja az osztályzatokat a jelölések alapján. Minden jelölés után hozzáadja a rendelt pontértéket, ebből számolja az osztályzatot. <ul><li>kiválasztott felhasználók osztályozása - csak a kijelölt felhasználókat osztályozza. Ha egy felhasználó nem adott le semmit, üres leadott munka adódik hozzá.</li><li>osztályozandók osztályozása - minden olyan leadott munkát osztályoz, amelyik későbbi, mint a meglévő osztályzat</li><li>minden leadott munka osztályozása - minden jelenlegi leadott munkát osztályoz (az előfordulás esetén). NEM ad hozzá üres leadott munkákat.</li></ul><br />Az osztályzat a jelölések alapján számolódik:<ul><li>standard osztályozás: itt minden példa egyformán súlyozott. Az osztályzat a bejelölt elemek és a jelölések értékének és számának a szorzatán alapul.</li><li>egyéni súlyozás: az osztályzat az egyedi beállításoknak megfelelően számolódik.</li></ul>';
$string['autograde_strall'] = 'Minden leadott munka';
$string['autograde_strchanged'] = 'Automatikus osztályozás miatt <strong>{$a}</strong> tanuló(k) esetében meg fogja változtatni az osztályzatokat.';
$string['autograde_strmultiplesubmissions'] = '{$a} leadott munka';
$string['autograde_stronesubmission'] = '1 leadott munka';
$string['autograde_strreq'] = 'Leadott munkák, ahol osztályzat frissítése szükséges';
$string['autograde_success'] = 'Az automatikus osztályozás sikeres! {$a} leadott munka frissítve.';
$string['autogradebuttonstitle'] = 'Leadott munkák osztályzatának kiszámítása {$a} jelölés esetén';
$string['availabledate'] = 'Leadások engedélyezése ekkortól';
$string['availabledate_help'] = 'A leadási időszak kezdete. Ezen dátum után tudnak leadni a tanulók.';
$string['cannotviewcheckmark'] = 'Nem tekinthető meg ez a jelölés';
$string['cantfixevent'] = 'Nem lehetett megjavítani a(z) {$a->name} nevű {$a->id} azonosítójú eseményt ({$a->matches} esetben)';
$string['cfg_nowarning'] = 'Nincs figyelmeztetés';
$string['cfg_pdfexampleswarning'] = 'Figyelmeztetésként megjelenítendő példák száma PDF exportálásánál';
$string['cfg_pdfexampleswarning_desc'] = 'Az a minimálisan hibás példaszám, amelytől kezdve figyelmeztetés jelenik meg a PDF elfogadható  exportálásának korlátjáról. Általában nem kell ezen változtatni.';
$string['checkbrokengradebookgrades'] = 'Hibás osztályzatok ellenőrzése';
$string['checkbrokengradebookgrades_desc'] = 'A 2.9.1-es verzióban lévő programhiba miatt az osztályzatok nem megfelelően kerültek át a naplóba. A hiba a következő leadott munkákat érinti:';
$string['checkbrokengradebookgrades_mail'] = 'A 2.9.1-es verzióban lévő programhiba miatt az osztályzatok nem megfelelően kerültek át a naplóba. A hiba a következő, automatikusan javított leadott munkákat érinti:';
$string['checkmark:addinstance'] = 'Jelölési eset hozzáadása';
$string['checkmark:grade'] = 'Jelölés osztályozása';
$string['checkmark:submit'] = 'Jelölés leadása';
$string['checkmark:view'] = 'Jelölés megtekintése';
$string['checkmark:view_preview'] = 'Előnézet';
$string['checkmark_overviewsummary'] = 'Bejelölte ezeket: {$a->checked_examples} / {$a->total_examples} ({$a->checked_grade} / {$a->total_grade} points)<br />{$a->grade}<br/>';
$string['checkmark_summary'] = 'Bejelölte ezeket: <span id="examples">{$a->checked_examples}</span> ennyiből: {$a->total_examples}.<br />(<span id="grade">{$a->checked_grade}</span> maximális pontszám: {$a->total_grade} points)';
$string['checkmarkdetails'] = 'Jelölés részletei';
$string['checkmarkmail'] = '{$a->grader} visszajelzést tett közzé
a \'{$a->checkmark}\' leadásra.

Itt megnézheti:

    {$a->url}';
$string['checkmarkmailhtml'] = '{$a->grader} visszajelzést tett közzé
a \'<i>{$a->checkmark}</i>\' leadásra <br /><br />
<a href="{$a->url}">Itt megnézheti</a>.';
$string['checkmarkmailsmall'] = '{$a->grader} visszajelzést tett közzé
a \'{$a->checkmark}\' jelölésre. Megtekintheti leadott munkájához csatolva.';
$string['checkmarkname'] = 'Jelölés neve';
$string['checkmarks'] = 'Jelölések';
$string['checkmarkstatstitle'] = 'Kurzusáttekintő jelölés';
$string['checkmarksubmission'] = 'Jelölés leadott munkái';
$string['checksummary'] = 'Jelölés összegzése';
$string['comment'] = 'Megjegyzés';
$string['configshowrecentsubmissions'] = 'Mindenki láthatja a leadott munkákról szóló értesítéseket a legutóbbi tevékenységek jelentéseiben.';
$string['couldfixevent'] = 'A(z) {$a->id} azonosítójú, {$a->name} nevű eseményt sikerült javítani.';
$string['count_individuals_mismatch'] = 'Az egyedi nevek ({$a->namecount}) száma nem egyezik meg az egyedi osztályzatok ({$a->gradecount}) számával!';
$string['coursemisconf'] = 'A kurzus beállítása hibás';
$string['currentgrade'] = 'Jelenlegi osztályzat a naplóban';
$string['cutoffdate'] = 'Lezárási dátum';
$string['cutoffdate_help'] = 'Bekapcsolása esetén ez jelzi a leadási időszak végét. Az időpont után a tanulók már nem tudnak munkát leadni.';
$string['data_preview'] = 'Adat előnézete';
$string['data_preview_help'] = 'Kattintson a [+]-ra vagy a [-]-ra az oszlopok elrejtéséhez vagy megjelenítéséhez a nyomtatási előnézetben';
$string['data_settings'] = 'Nyomtatás beállításai';
$string['datasettingstitle'] = 'Adatok beállításai';
$string['deleteallsubmissions'] = 'Minden leadott munka törlése';
$string['description'] = 'Leírás';
$string['downloadall'] = 'Minden jelölés letöltése ZIP formátumban';
$string['due'] = 'Jelölési határidő';
$string['duedate'] = 'Határidő';
$string['duedate_help'] = 'A névleges leadási határidő vége. Ez után is tudnak majd leadni a tanulók, de munkáik elkésettként lesznek megjelölve.';
$string['duedateno'] = 'Nincs határidő';
$string['duedatevalidation'] = 'A leadási határidőnek az elérhetőség dátumánál későbbinek kell lennie.';
$string['early'] = '{$a} korai';
$string['editmysubmission'] = 'Leadásom szerkesztése';
$string['element_disabled'] = 'A következő elem a már meglévő leadások miatt inaktív';
$string['elements_disabled'] = 'A következő elemek a már meglévő leadások miatt inaktívak';
$string['emailstudents'] = 'E-mailben figyelmeztetés a tanulóknak';
$string['emailteachermail'] = '{$a->username} frissítette ezt a jelölését:
\'{$a->checkmark}\' ekkor: {$a->dayupdated} {$a->timeupdated}.

Itt elérhető:

    {$a->url}';
$string['emailteachermailhtml'] = '{$a->username} frissítette ezt a jelölését:
<i>\'{$a->checkmark}\' ekkor: {$a->dayupdated} {$a->timeupdated}</i><br /><br />
<a href="{$a->url}">Elérhető itt</a>.';
$string['emailteachers'] = 'E-mailben figyelmeztetés a tanároknak';
$string['emailteachers_help'] = 'Ha be van kapcsolva, a tanárok e-mail értesítést kapnak, amikor egy diák hozzáad vagy frissít egy jelölés-leadást.

Csak azok a tanárok kapnak értesítést, akik osztályozhatják a leadott munkát, Pl. ha a kurzus külön csoportokat használ, egy bizonyos csoportra korlátozott tanárok nem fognak értesítést kapni más csoportok tanulóiról.';
$string['emptysubmission'] = 'Még nem adott le semmit';
$string['enablenotification'] = 'Értesítés küldése';
$string['enablenotification_help'] = 'Ha be van kapcsolva, a tanulók értesítést kapnak, amikor osztályozva lett a leadásuk.';
$string['end_of_submission_for'] = '{$a} leadásának vége';
$string['errornosubmissions'] = 'Nincsenek letölthető leadott munkák';
$string['eventgradeupdated'] = 'Osztályzat frissítve';
$string['eventsubmissionsexported'] = 'Leadás exportálva';
$string['eventsubmissionupdated'] = 'Leadás frissítve';
$string['eventviewprintpreview'] = 'Megtekintett nyomtatási előnézet';
$string['eventviewsubmissions'] = 'Megtekintett leadások';
$string['example_preview_title'] = 'Elem előnézete';
$string['example_preview_title_help'] = 'Ez az előnézet áttekintést ad a jelölés lehetőségeiről.';
$string['examplegrades'] = 'Egyéni osztályzatok';
$string['examplegrades_help'] = 'Meghatározza az egyes elemek súlyozását. Ezeket zárójelben megadott elválasztóval kell elkülöníteni.';
$string['examplenames'] = 'Egyedi nevek';
$string['examplenames_help'] = 'Meghatározza az egyedi neveket. Ezeket zárójelben megadott elválasztóval kell elkülöníteni.';
$string['exampleprefix'] = 'Egyedi előtag';
$string['exampleprefix_help'] = 'Lehetséges egyedi előtagot bevinni, ami automatikusan minden egyedi név előtt megjelenik. Ez a mező üresen hagyható.';
$string['failedupdatefeedback'] = '{$a} felhasználónak szóló visszajelzés frissítése sikertelen';
$string['feedback'] = 'Visszajelzés';
$string['feedbackfromteacher'] = 'Visszajelzés erről: {$a}';
$string['feedbackupdated'] = 'Visszajelzés frissítése {$a} tanulónál';
$string['filter'] = 'Szűrő';
$string['firstexamplenumber'] = 'Első elem száma';
$string['firstexamplenumber_help'] = 'Az első elem száma. A további elemek száma 1-gyel növekszik az előzőhöz képest';
$string['flexiblenaming'] = 'Egyedi megnevezés/osztályozás';
$string['flexiblenaming_help'] = 'Bekapcsolása esetén az egyes elemeknél egyedi nevek és osztályzatok használatára kerül sor';
$string['format'] = 'Formátum';
$string['grade'] = 'Osztályzat';
$string['grade_help'] = 'Ha az egyedi funkciók aktiválva vannak, az osztályzat értékének az elemek pontértékeinek összegével kell egyezőnek lennie (max. 100).<br />Ha a standard elemeket használja, az osztályzat értékének az elemek számának egész számú többszörösének kell lennie. Ebben az esetben az elemenkénti pontok automatikusan igazodnak.<br />Ha a JavaScript aktiválva van, az osztályzat egyedi funkciók használatakor automatikusan kiválasztódik. A standard elemek használatakor aktivált JavaScript esetén az elemek számának egész számú többszöröse fogadható el.';
$string['grade_mismatch'] = 'Az osztályzatnak az elemek számának egész számú többszörösének kell lennie!';
$string['graded'] = 'Osztályozva';
$string['gradesum_mismatch'] = 'Az egyedi osztályzatok összege nem egyezik meg a kiválasztott ({$a->gradesum}/{$a->maxgrade}) összpontszámmal!';
$string['guestnosubmit'] = 'Vendégek nem adhatnak le jelölést. Leadáshoz jelentkezzen be!';
$string['guestnoupload'] = 'Vendégek nem tölthetnek fel!';
$string['hideintro'] = 'Leírás elrejtése az "Elérhető ekkortól" időpontig';
$string['hideintro_help'] = 'Ha engedélyezve van, a jelölés leírása rejtve marad az "Elérhető ekkortól" időpontig. Csak a név látszik.';
$string['invalidcheckmark'] = 'Helytelen jelölés';
$string['invalidid'] = 'A jelölési azonosító helytelen';
$string['invaliduserid'] = 'Érvénytelen felhasználói azonosító';
$string['itemstocount'] = 'Szám';
$string['lastgrade'] = 'Legutóbbi osztályzat';
$string['late'] = '{$a} elkésett';
$string['manycolumnsinpdfwarning'] = 'Figyelem: a magas elemszám és a korlátozott hely miatt nem javasolt a PDF exportálása. Próbálja meg elrejteni a felesleges oszlopokat vagy használjon XLSX vagy ODS exportálást.';
$string['maximumgrade'] = 'Maximális osztályzat';
$string['messageprovider:checkmark_updates'] = 'Jelöléssel kapcsolatos értesítések';
$string['modulename'] = 'Jelölés';
$string['modulename_help'] = 'A jelölések lehetővé teszik a tanároknak, hogy olyan feladatot hozzanak létre, ahol a diákoknak jelöléseket kell leadniuk, amik osztályozhatóak';
$string['modulenameplural'] = 'Jelölések';
$string['newsubmissions'] = 'Leadott jelölések';
$string['noattempts'] = 'Nem történt még próbálkozás ezzel a jelöléssel';
$string['nocheckmarks'] = 'Nincsenek még leadások';
$string['nomoresubmissions'] = 'Nem engedélyezettek további leadások';
$string['nonnegativeintrequired'] = '0-nál nagyobbnak vagy 0-val egyenlőnek és egész számnak kell lennie!';
$string['norequiregrading'] = 'Nincsenek osztályozásra váró jelölések';
$string['nostudents'] = 'Nincsenek megjeleníthető felhasználók';
$string['nostudentsmatching'] = 'Nincsenek a jelen beállításoknak megfelelő felhasználók!';
$string['nosubmission'] = 'Nincsenek leadott jelölések';
$string['nosubmisson'] = 'Nincsenek leadott jelölések';
$string['notactive'] = 'Nem aktív';
$string['notavailableyet'] = 'A jelölés még nem érhető el.<br />Az utasítások majd itt jelennek meg az alább megadott dátumtól kezdődően.';
$string['notgradedyet'] = 'Még nincs osztályozva';
$string['notsubmittedyet'] = 'Még nincs leadva';
$string['nousers'] = 'Nincsenek megjeleníthető felhasználók!';
$string['numberofexamples'] = 'Elemek száma';
$string['numberofexamples_help'] = 'Elemek száma ebben a jelölésben';
$string['operation'] = 'Művelet';
$string['optimum'] = 'Optimális';
$string['optionalsettings'] = 'További beállítások';
$string['page-mod-checkmark-submissions'] = 'Jelölésmodul leadási oldala';
$string['page-mod-checkmark-view'] = 'Jelölésmodul főoldala';
$string['page-mod-checkmark-x'] = 'Jelölésmodul minden oldala';
$string['pagesize'] = 'Oldalankénti leadások száma';
$string['pagesize_help'] = 'Válassza az "Optimális" gombot a listaelemek elrendezésének optimalizálásához, ha sok résztvevő van a kurzuson';
$string['pdfpageorientation'] = 'Oldaltájolás';
$string['pdfpagesize'] = 'Oldalankénti leadások száma';
$string['pdfpagesize_help'] = 'Válassza az "Optimális" gombot a listaelemek elrendezésének optimalizálásához, ha sok résztvevő van a kurzuson';
$string['pdfprintheader'] = 'Fejléc/lábléc nyomtatása';
$string['pdfprintheader_help'] = 'Fejléc/lábléc nyomtatása, ha be van jelölve';
$string['pdfprintheaderlong'] = 'Fejléc/lábléc nyomtatása, ha be van jelölve';
$string['pdfsettings'] = 'PDF-beállítások';
$string['pdftextsize'] = 'Szövegméret';
$string['pluginadministration'] = 'Jelölések kezelése';
$string['pluginname'] = 'Jelölés';
$string['popupinnewwindow'] = 'Megnyitás felugró ablakban';
$string['posintrequired'] = '0-nál nagyobb egész számnak kell lennie!';
$string['posintst100required'] = 'Egész számnak kell lennie 0 és 100 között (0 <= X <= 100)!';
$string['printsettingstitle'] = 'Beállítások exportálása';
$string['quickgrade'] = 'Gyors osztályozás engedélyezése';
$string['quickgrade_help'] = 'Ha engedélyezve van, a jelölések egy oldalon osztályozhatóak. Adja hozzá az osztályzatokat és a megjegyzéseket, majd nyomja meg a "Visszajelzéseim mentése" gombot!';
$string['requiregrading'] = 'Osztályozás előírása';
$string['reviewed'] = 'Bírálva';
$string['saveallfeedback'] = 'Visszajelzéseim mentése';
$string['sendnotifications'] = 'Értesítések küldése';
$string['showrecentsubmissions'] = 'Legutóbbi leadások';
$string['signature'] = 'Aláírás';
$string['str_userid'] = 'Tanulói azonosító';
$string['strallononepage'] = 'Mind nyomtatása egy oldalra';
$string['strassignment'] = 'Feladat';
$string['strautograded'] = '[automatikusan osztályozott]';
$string['strexample'] = 'Példa';
$string['strexamples'] = 'Példák';
$string['strlandscape'] = 'Fekvő';
$string['strlarge'] = 'Nagy';
$string['strmedium'] = 'Közepes';
$string['strpapersizes'] = 'Lapméret';
$string['strpoint'] = 'Pont';
$string['strpoints'] = 'Pont';
$string['strportrait'] = 'Álló';
$string['strprint'] = 'Fájl letöltése';
$string['strprintpreview'] = 'Exportálás';
$string['strprintpreviewtabalt'] = 'Exportálás megnyitása';
$string['strrefreshdata'] = 'Adatok előnézetének frissítése';
$string['strsmall'] = 'Kicsi';
$string['strstdexamplecount'] = 'Elemek száma';
$string['strstdexamplecountdesc'] = 'Alapértelmezésben ennyi elem lesz használva';
$string['strstdexamplestart'] = 'Első elem száma';
$string['strstdexamplestartdesc'] = 'Az első elem száma';
$string['strstdgrades'] = 'Standard osztályozás';
$string['strstdgradesdesc'] = 'Osztályozás egyedi elnevezések esetén';
$string['strstdnames'] = 'Standard nevek';
$string['strstdnamesdesc'] = 'Elemnevek egyedi elnevezések esetén';
$string['strsubmissions'] = 'Leadások';
$string['strsubmissionstabalt'] = 'Leadási nézet megnyitása';
$string['strsum'] = 'Összeg';
$string['strvalidmsgtime'] = 'Üzenet érvényességének időtartama';
$string['strvalidmsgtimedesc'] = 'Napok száma, melyek után már nem lehet osztályozással kapcsolatos értesítéseket küldeni felhasználóknak';
$string['submission'] = 'Leadás';
$string['submissionfeedback'] = 'Leadási visszajelzés';
$string['submissions'] = 'Leadások';
$string['submissionsamount'] = '{$a->total} közül {$a->submitted} tanuló adott már le munkát.';
$string['submissionsaved'] = 'Módosítások elmentve';
$string['submissionsgraded'] = '{$a->all} leadott munkából {$a->graded} leosztályozva';
$string['submissionsnotgraded'] = '{$a->all} leadott munkából még nincs leosztályozva {$a->reqgrading}';
$string['submitcheckmark'] = 'Adja le a jelöléseket az űrlap segítségével';
$string['submitted'] = 'Leadva';
$string['summary_abs'] = 'x/y elemek bejelölve';
$string['summary_rel'] = '% elem bejelölve';
$string['usermisconf'] = 'A felhasználó beállításai hibásak';
$string['usernosubmit'] = 'Jelölés leadása Önnek nem engedélyezett.';
$string['viewfeedback'] = 'Jelölési osztályzatok és visszajelzések megtekintése';
$string['viewmysubmission'] = 'Leadásom megtekintése';
$string['viewsubmissions'] = '{$a} leadott jelölés megtekintése';
$string['yoursubmission'] = 'Az Ön leadása';
