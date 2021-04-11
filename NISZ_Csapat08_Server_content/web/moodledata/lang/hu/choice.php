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
 * Strings for component 'choice', language 'hu', version '3.10'.
 *
 * @package     choice
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmorechoices'] = 'További válaszlehetőségek hozzáadása';
$string['allowmultiple'] = 'Egynél több lehetőség választásának engedélyezése';
$string['allowupdate'] = 'Válaszlehetőség frissítésének engedélyezése';
$string['answered'] = 'Megválaszolva';
$string['atleastoneoption'] = 'Legalább egy lehetséges választ meg kell adnia.';
$string['calendarend'] = '{$a} lezárul';
$string['calendarstart'] = '{$a} megnyílik';
$string['cannotsubmit'] = 'Választásának leadásával gondok vannak. Próbálja meg később.';
$string['choice'] = 'Válaszlehetőség';
$string['choice:addinstance'] = 'Új választási lehetőség hozzáadása';
$string['choice:choose'] = 'Válaszlehetőség rögzítése';
$string['choice:deleteresponses'] = 'Válaszok módosítása és törlése';
$string['choice:downloadresponses'] = 'Tanuló által adott válaszok letöltése';
$string['choice:readresponses'] = 'Tanuló által adott válaszok olvasása';
$string['choice:view'] = 'Lehetőséghez kapcsolódó tevékenység megtekintése';
$string['choiceactivityname'] = 'Választás:  {$a}';
$string['choiceclose'] = 'Válaszok lehetségesek eddig';
$string['choicecloseson'] = 'A választás ekkor véget ér:  {$a}';
$string['choicefull'] = 'Egy vagy több kiválasztott lehetőség már betelt. Válaszát nem mentettük. Válasszon másikat.';
$string['choicename'] = 'Válaszlehetőség neve';
$string['choiceopen'] = 'Válaszok lehetségesek ekkortól';
$string['choiceoptions'] = 'Választási lehetőségek';
$string['choiceoptions_help'] = '<p>Itt adhatja meg azokat a lehetőségeket, amelyekből a résztvevőknek választani kell.</p>

<p>Ezekből tetszőleges számút kitölthet: ha nincs szüksége mind a 6 lehetőségre, néhányat közülük kitöltetlenül hagyhat. </p>';
$string['choicesaved'] = 'Válaszlehetőség elmentve';
$string['choicetext'] = 'Válaszlehetőség szövege';
$string['chooseaction'] = 'Válasszon ki egy lépést...';
$string['chooseoption'] = 'Választás:  {$a}';
$string['closebeforeopen'] = 'A kezdő időpont előtti záró időpontot adott meg.';
$string['completionsubmit'] = 'Készként jelenik meg, ha a felhasználó választ';
$string['description'] = 'Bevezető szöveg';
$string['deselectalloption'] = 'Összes "{$a}" kijelölésének törlése';
$string['displayhorizontal'] = 'Vízszintes kijelzés';
$string['displaymode'] = 'Kijelzési mód';
$string['displayvertical'] = 'Függőleges kijelzés';
$string['eventanswercreated'] = 'Választás hozzáadva';
$string['eventanswerdeleted'] = 'Válaszlehetőség törölve';
$string['eventanswersubmitted'] = 'Választás kész';
$string['eventanswerupdated'] = 'Választás frissítve';
$string['eventreportdownloaded'] = 'Választási jelentés letöltve';
$string['eventreportviewed'] = 'Választásról szóló jelentés megtekintve';
$string['expired'] = 'A tevékenység {$a} időpontban lezárult.';
$string['full'] = '(Betelt)';
$string['havetologin'] = 'Válaszlehetőség megadása előtt be kell jelentkeznie';
$string['includeinactive'] = 'Tétlen/felfüggesztett felhasználók válaszainak felvétele';
$string['indicator:cognitivedepth'] = 'Kognitív választás';
$string['indicator:cognitivedepth_help'] = 'Ez a jelző a tanuló által a választás kapcsán elért kognitív mélységen alapul.';
$string['indicator:cognitivedepthdef'] = 'Kognitív választás';
$string['indicator:cognitivedepthdef_help'] = 'A résztvevő az elemzési időszak alatt a Választás tevékenységei során kognitív elfoglaltság terén ezt a százalékot érte el (Szintek - Nincs megtekintés, Megtekintés, Leadás, Visszajelzés megtekintése)';
$string['indicator:socialbreadth'] = 'Társas választás';
$string['indicator:socialbreadth_help'] = 'Ez a jelző a tanuló által a választás kapcsán elért társas lefedettségen alapul.';
$string['indicator:socialbreadthdef'] = 'Társas választás';
$string['indicator:socialbreadthdef_help'] = 'A résztvevő az elemzési időszak alatt a Választás tevékenységei során társas elfoglaltság terén ezt a százalékot érte el (Szintek - Nincs részvétel, Egyedüli részvétel, Másokkal együtt való részvétel)';
$string['limit'] = 'Korlát';
$string['limita'] = 'Korlát: {$a}';
$string['limitanswers'] = 'Engedélyezett válaszok számának korlátozása';
$string['limitanswers_help'] = 'Ezzel korlátozhatja az egyes lehetőségeket választó résztvevők számát. A határértékek bekapcsolása esetén minden lehetőséghez beállíthat egy határértéket. Ennek elérését követően már senki nem választhatja az
adott lehetőséget.

Ez a tevékenység csoportos üzemmód esetén a korlát csoportonként érvényes. Pl. ha 5 van beállítva, akkor csoportonként 5 tag választhat egy adott lehetőséget. Így 3 csoport esetén legfeljebb 15 résztvevő választhatja  az adott lehetőséget.

Kikapcsolása esetén bárki bármelyik lehetőséget választhatja.';
$string['limitno'] = '{no}. korlát';
$string['modulename'] = 'Válaszlehetőség';
$string['modulename_help'] = 'A választási modullal a tanár kérdést tehet fel és több választ adhat meg hozzá.

A választás eredményét a tanulók válasza után egy adott dátum után akár közzé is teheti - a tanulók nevével együtt vagy anonim módon (a tanárok a tanulók nevét és válaszait mindenkor látják).

Használati lehetőségek:

* Gondolatébresztőként gyors rákérdezés
* A tanulói megértés gyors ellenőrzése
* Tanulói döntéshozatal elősegítése pl. azzal, hogy a tanulók szavazhatnak, milyen irányban haladjon tovább a kurzus';
$string['modulenameplural'] = 'Válaszlehetőségek';
$string['moveselectedusersto'] = 'Kiválasztott felhasználók áthelyezése ide...';
$string['multiplenotallowederror'] = 'Itt több válaszra nincs lehetőség.';
$string['mustchooseone'] = 'Mentés előtt válasszon egy választ. Semmiről nem készült mentés.';
$string['noguestchoose'] = 'Vendégek nem választhatnak.';
$string['noresultsviewable'] = 'Az eredmények jelenleg nem tekinthetők meg.';
$string['notanswered'] = 'Még nincs válasz';
$string['notenrolledchoose'] = 'Válaszlehetőség csak beiratkozottak számára áll rendelkezésre.';
$string['notopenyet'] = 'A tevékenység {$a} időpontig nem elérhető';
$string['numberofuser'] = 'Válaszok száma';
$string['numberofuserinpercentage'] = 'Válaszok száma százalékban';
$string['openafterclose'] = 'A nyitási idő a zárási idő után van.';
$string['option'] = 'Választás';
$string['optionno'] = '{no}. lehetőség';
$string['options'] = 'Lehetőségek';
$string['page-mod-choice-x'] = 'Bármely kiválasztási moduloldal';
$string['pluginadministration'] = 'Válaszlehetőség kezelése';
$string['pluginname'] = 'Válaszlehetőség';
$string['previewonly'] = 'Ez a tevékenység lehetőségeinek előnézete. A választását {$a} időpontig nem közölheti.';
$string['privacy'] = 'Az eredmények titkossága';
$string['privacy:metadata:choice_answers'] = 'Tájékoztatás adott választási tevékenység kapcsán a felhasználó által kiválasztott válasz(ok)ról';
$string['privacy:metadata:choice_answers:choiceid'] = 'A választási tevékenység azonosítója';
$string['privacy:metadata:choice_answers:optionid'] = 'A felhasználó által kiválasztott lehetőség azonosítója';
$string['privacy:metadata:choice_answers:timemodified'] = 'A felhasználó által módosított választás időbélyegzője';
$string['privacy:metadata:choice_answers:userid'] = 'Azon felhasználó azonosítója, aki a választási tevékenységre választ ad';
$string['publish'] = 'Eredmények közzététele';
$string['publishafteranswer'] = 'Eredmény megmutatása a tanulónak, miután válaszolt';
$string['publishafterclose'] = 'Eredmény megmutatása a tanulónak, miután a választási lehetőség lezárult';
$string['publishalways'] = 'Eredmények mindenkori megmutatása a tanulóknak';
$string['publishanonymous'] = 'Eredmények tanuló neve nélküli közzététele';
$string['publishinfoanonafter'] = 'A névtelen eredmények válasza után jelennek meg.';
$string['publishinfoanonclose'] = 'A névtelen eredmények a tevékenység lezárása után jelennek meg.';
$string['publishinfofullafter'] = 'A mindenki választását mutató eredmények a válasza után jelennek meg.';
$string['publishinfofullclose'] = 'A mindenki választását mutató eredmények a válasza után jelennek meg.';
$string['publishinfonever'] = 'A tevékenység eredményei a válasza után nem jelennek meg.';
$string['publishnames'] = 'Eredmények teljes közzététele nevekkel és válaszlehetőségekkel együtt';
$string['publishnot'] = 'Ne mutassa meg az eredményeket a tanulóknak';
$string['removemychoice'] = 'Válaszlehetőségem törlése';
$string['removeresponses'] = 'Az összes tanuló által adott válasz törlése';
$string['responses'] = 'Tanuló által adott válaszok';
$string['responsesa'] = 'Válaszok: {$a}';
$string['responsesresultgraphheader'] = 'Gráfmegjelenítés';
$string['responsesto'] = 'Tanuló által adott válaszok erre: {$a}';
$string['results'] = 'Eredmények';
$string['savemychoice'] = 'Válaszlehetőségem mentése';
$string['search:activity'] = 'Választási tevékenységek';
$string['selectalloption'] = 'Összes "{$a}" kijelölése';
$string['showavailable'] = 'Elérhető helyek kijelzése';
$string['showavailable_help'] = 'Résztvevők számára a lehetőségek korlátjának és az eddigi válaszok számának a kijelzése.';
$string['showpreview'] = 'Előnézet megtekintése';
$string['showpreview_help'] = 'Lehetővé teszi a tanulóknak a lehetőségek előzetes megtekintését a választás leadása előtt.';
$string['showunanswered'] = 'Válasz nélküli oszlop megjelenítése';
$string['spaceleft'] = 'felhasználható hely';
$string['spacesleft'] = 'felhasználható helyek';
$string['taken'] = 'Elvégezve';
$string['userchoosethisoption'] = 'Ezt választó felhasználók';
$string['viewallresponses'] = '{$a} tanuló által adott válasz megtekintése';
$string['viewchoices'] = 'Lehetőségek megjelenítése';
$string['withselected'] = 'A kiválasztottal';
$string['yourselection'] = 'Az Ön választása';
