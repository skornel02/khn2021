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
 * Strings for component 'reengagement', language 'hu', version '3.10'.
 *
 * @package     reengagement
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitycompleted'] = 'Ez a tevékenység teljesítettként van megjelölve';
$string['afterdelay'] = 'Késleltetéssel';
$string['areyousure'] = 'Biztos benne, hogy módosítani szeretné?';
$string['completeattimex'] = 'Ez a tevékenység {$a} időpontban ér véget';
$string['completion'] = 'Teljesítés';
$string['completiondatesupdated'] = 'Teljesítési dátumok frissítve.';
$string['completiontime'] = 'Teljesítés ideje';
$string['completionwillturnon'] = 'A tevékenység hozzáadása a kurzushoz bekapcsolja a teljesítés nyomon követését.';
$string['crontask'] = 'Újbóli bekapcsolódás cron feladata';
$string['cronwarning'] = 'Az Újbóli bekapcsolódás ütemezett feladata legalább 60 perce nem futott le - be kell állítani a cront az Újbóli bekapcsolódások helyes működése érdekében.';
$string['days'] = 'Nap';
$string['duration'] = 'Időtartam';
$string['duration_help'] = '<p>Az újbóli bekapcsolódás időtartama a felhasználó általi újrakezdés és a tevékenység teljesítettként való megjelölése közötti idő.
Az újbóli bekapcsolódás időtartamát annak hosszával (pl. hét) és számával (pl. 7) adjuk meg.</p>

<p>Ebben a példában az újból bekapcsolódó felhasználó tevékenysége 7 hét elteltével kap teljesített jelölést. </p>';
$string['emailcontent'] = 'Értesítés tartalma (Felhasználó)';
$string['emailcontent_help'] = 'Amikor a modul értesít egy felhasználót, az értesítés tartalmát ebből a mezőből veszi.';
$string['emailcontentdefaultvalue'] = 'Ez egy emlékeztető értesítés a(z) %courseshortname% kurzusból.';
$string['emailcontentmanager'] = 'Értesítés tartalma (Felettes)';
$string['emailcontentmanager_help'] = 'Amikor a modul értesíti egy felhasználó (egy vagy több) felettesét, az értesítés tartalmát ebből a mezőből veszi.';
$string['emailcontentmanagerdefaultvalue'] = 'Ez egy emlékeztető értesítés a(z) %courseshortname% kurzusból %userlastname% %userfirstname% felhasználóra vonatkozóan.';
$string['emailcontentthirdparty'] = 'Értesítés tartalma (Harmadik fél)';
$string['emailcontentthirdparty_help'] = 'Amikor a modul értesít egy harmadik felet, az értesítés tartalmát ebből a mezőből veszi.';
$string['emailcontentthirdpartydefaultvalue'] = 'Ez egy emlékeztető értesítés a(z) %courseshortname% kurzusból %userlastname% %userfirstname% felhasználóra vonatkozóan.';
$string['emaildelay'] = 'Értesítés késleltetése';
$string['emaildelay_help'] = 'Amikor a modult úgy állítjuk be, hogy "Késleltetéssel" történjen a felhasználók értesítése, ez a beállítás adja meg, hogy milyen hosszú legyen a késleltetés.';
$string['emailrecipient'] = 'Értesítendő(k)';
$string['emailrecipient_help'] = 'Amikor ki kell küldeni egy értesítést, amely felhívja a felhasználó figyelmét, hogy térjen vissza a kurzusba, ez a beállítás adja meg, hogy az értesítést a felhasználónak, a felettesének, vagy mindkettőnek kell-e kiküldeni.';
$string['emailsubject'] = 'Értesítés tárgya (Felhasználó)';
$string['emailsubject_help'] = 'Amikor a modul értesít egy felhasználót, az értesítés tárgyát ebből a mezőből veszi.';
$string['emailsubjectmanager'] = 'Értesítés tárgya (Felettes)';
$string['emailsubjectmanager_help'] = 'Amikor a modul értesíti egy felhasználó (egy vagy több) felettesét, az értesítés tartalmát ebből a mezőből veszi.';
$string['emailsubjectthirdparty'] = 'Értesítés tárgya (Harmadik fél)';
$string['emailsubjectthirdparty_help'] = 'Amikor a modul értesít egy harmadik felet, az értesítés tárgyát ebből a mezőből veszi.';
$string['emailtime'] = 'Értesítés ideje';
$string['emailuser'] = 'Értesítendő felhasználó';
$string['emailuser_help'] = 'Mikor értesítse a tevékenység a felhasználókat: <ul> <li>Soha: Ne értesítse a felhasználókat.</li><li>Újrakezdett tevékenység teljesítésekor: Értesítse a felhasználót, ha az újrakezdett tevékenység befejeződött.</li><li>Késleltetéssel: Értesítse a felhasználót a tevékenység megkezdése után egy adott idővel.</li></ul>';
$string['frequencytoohigh'] = 'Az Ön által beállított késleltetési időbe maximum {$a} emlékeztető fér bele.';
$string['hours'] = 'Óra';
$string['introdefaultvalue'] = 'Ez egy újbóli bekapcsolódáshoz tartozó tevékenység. A célja, hogy az előtte és utána lévő tevékenységek közé időt iktasson be.';
$string['messageprovider:mod_reengagement'] = 'Újbóli bekapcsolódás értesítései';
$string['minutes'] = 'Perc';
$string['modulename'] = 'Újbóli bekapcsolódás';
$string['modulenameplural'] = 'Újbóli bekapcsolódások';
$string['mustenablecompletionavailability'] = 'Az Újbóli bekapcsolódás használatához a Teljesítés nyomon követését és a Korlátozott elérhetőséget be kell kapcsolni.';
$string['never'] = 'Soha';
$string['newcompletiontime'] = 'Új teljesítési idő';
$string['nochange'] = 'Nincs változás';
$string['nochangenoaccess'] = 'Nincs változás (a felhasználó nem lépett be a kurzusba)';
$string['noemailattimex'] = 'A(z) {$a} időpontra időzített üzenetet nem küldjük ki, mivel Ön teljesítette a céltevékenységet';
$string['nosuppresstarget'] = 'Nincs kiválasztva céltevékenység';
$string['oncompletion'] = 'Az újbóli bekapcsolódás teljesítésekor';
$string['periodtoolow'] = 'A késleltetés túl rövid - legalább 5 percnek kell lennie.';
$string['pluginname'] = 'Újbóli bekapcsolódás';
$string['privacy:metadata:completiontime'] = 'Amikor ez a tevékenység teljesítettként lesz megjelölve';
$string['privacy:metadata:emailsent'] = 'Az e-mail elküldve';
$string['privacy:metadata:emailtime'] = 'Amikor ennek a felhasználónak e-mailt küldünk';
$string['privacy:metadata:reengagement'] = 'Újbóli bekapcsolódás azonosítója';
$string['privacy:metadata:reengagement_inprogress'] = 'Újbóli bekapcsolódáshoz tartozó tevékenységek folyamatban';
$string['privacy:metadata:userid'] = 'Az ehhez a rekordhoz tartozó felhasználóazonosító';
$string['receiveemailattimex'] = 'Az üzenetet {$a} időpontban küldjük el.';
$string['receiveemailattimexunless'] = 'Az üzenetet {$a}  időpontban küldjük el, ha nem teljesíti a céltevékenységet.';
$string['reengagement'] = 'újbóli bekapcsolódás';
$string['reengagement:addinstance'] = 'reengagement:addinstance';
$string['reengagement:bulkactions'] = 'Újbóli bekapcsolódáskor tömeges műveletek végrehajtása';
$string['reengagement:editreengagementduration'] = 'Újbóli bekapcsolódás időtartamának a szerkesztése';
$string['reengagement:startreengagement'] = 'Újbóli bekapcsolódás indítása';
$string['reengagementduration'] = 'Újbóli bekapcsolódás időtartama';
$string['reengagementfieldset'] = 'Újbóli bekapcsolódás részletei';
$string['reengagementintro'] = 'Újbóli bekapcsolódás bevezetője';
$string['reengagementname'] = 'Újbóli bekapcsolódás neve';
$string['reengagementsinprogress'] = 'Folyamatban lévő újbóli bekapcsolódások';
$string['remindercount'] = 'Emlékeztetők száma';
$string['remindercount_help'] = 'Azt mutatja, hogy egy e-mailt hányszor küld ki a rendszer minden egyes késleltetési időszakok után. A használható értékekre van néhány korlátozás<ul>
<li>24 óránál kevesebb - legfeljebb 2 emlékeztető</li>
<li>5 napnál kevesebb - legfeljebb 10 emlékeztető</li>
<li>15 napnál kevesebb - legfeljebb 26 emlékeztető</li>
<li>15 napnál több - legfeljebb 40 emlékeztető.</li></ul>';
$string['resetbyenrolment'] = 'Beiratkozás dátuma és {$a} időtartam szerint';
$string['resetbyfirstaccess'] = 'Első kurzusba lépés és {$a} időtartam szerint';
$string['resetbyspecificdate'] = 'Adott dátum szerint';
$string['resetcompletion'] = 'Teljesítési dátum visszaállítása';
$string['search:activity'] = 'Újbóli bekapcsolódás - tevékenységgel kapcsolatos információ';
$string['specifydate'] = 'Teljesítési határidő beállítása:';
$string['suppressemail'] = 'Értesítések megszüntetése, ha a céltevékenység teljesített';
$string['suppressemail_help'] = 'Arra utasítja a tevékenységet, hogy ne küldjön értesítést azoknak a felhasználóknak, akik egy adott tevékenység teljesítettek.';
$string['suppresstarget'] = 'Céltevékenység.';
$string['suppresstarget_help'] = 'Ezzel a legördülő menüvel megadhatja, hogy az emlékeztető értesítés elküldése előtt melyik tevékenység teljesítettségét kell ellenőrizni.';
$string['thirdpartyemails'] = 'Harmadik fél címzettek';
$string['thirdpartyemails_help'] = 'Azon harmadik felek e-mail-címeinek vesszővel elválasztott listája, melyekre értesítést kell küldeni, amikor a felhasználót értesítjük.';
$string['userandmanager'] = 'Felhasználó és Felettese(i)';
$string['weeks'] = 'Hét';
$string['withselectedusers'] = 'A kiválasztott felhasználókkal...';
$string['withselectedusers_help'] = '* Üzenet küldése - egy vagy több résztvevőnek
* Teljesítési dátum visszaállítása kurzusba belépéshez képest - Az újbóli bekapcsolódás teljesítési dátumának a kurzusba való első belépéshez mért beállításához.';
