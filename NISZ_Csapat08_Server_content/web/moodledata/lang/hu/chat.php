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
 * Strings for component 'chat', language 'hu', version '3.10'.
 *
 * @package     chat
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityoverview'] = 'Csevegés közeleg';
$string['ajax'] = 'Ajax-változat';
$string['autoscroll'] = 'Automatikus görgetés';
$string['beep'] = 'Hangjelzés';
$string['bubble'] = 'Buborék';
$string['cantlogin'] = 'Nem lehetett bejelentkezni a csevegőszobába!!';
$string['chat:addinstance'] = 'Új csevegés hozzáadása';
$string['chat:chat'] = 'Belépés egy csevegőszobába';
$string['chat:deletelog'] = 'Csevegésnaplók törlése';
$string['chat:exportparticipatedsession'] = 'Csevegéseinek exportálása';
$string['chat:exportsession'] = 'Bármely csevegés exportálása';
$string['chat:readlog'] = 'Csevegésnaplók olvasása';
$string['chat:talk'] = 'Beszélgetés csevegéssel';
$string['chat:view'] = 'Csevegési tevékenység megtekintése';
$string['chatintro'] = 'Bevezető szöveg';
$string['chatname'] = 'A csevegőszoba neve';
$string['chatreport'] = 'Csevegések';
$string['chattime'] = 'A következő csevegés időpontja';
$string['compact'] = 'Kompakt';
$string['composemessage'] = 'Üzenet szerkesztése';
$string['configmethod'] = 'Ajax alapú szokásos csevegés során a kliensprogramok rendszeresen a szerverhez fordulnak frissítésért. Semmilyen beállítást nem igényel és mindenhol működik, de sok csevegő esetén jelentősen megterheli a szervert. Szerverdémon használata során a unix héjszintű elérésére van szükség, az eredmény viszont egy gyors és skálázható csevegési környezet.';
$string['confignormalupdatemode'] = 'A csevegőszoba frissítéseit megfelelően támogatja a HTTP 1.1 Keep-Alive funkciója, ennek ellenére meglehetősen leterheli a szervert. A frissítések felhasználókhoz való eljuttatására alkalmasabb módszer a Stream használata. A Stream sokkal hatékonyabb (hasonló a chatd módszerhez), de előfordulhat, hogy használatát szervere nem támogatja.';
$string['configoldping'] = 'Mennyi ideig tartó hallgatás után kell egy felhasználót kilépettnek tekinteni (másodpercben)? Ez csak egy felső határ, mert a lekapcsolódás gyorsan érzékelhető. Alacsonyabb értékek jobban megterhelik a szervert. Ha a szokásos módszert használja, soha ne állítsa ezt az értéket alacsonyabbra, mint a chat_refresh_room idejének kétszerese.';
$string['configrefreshroom'] = 'Milyen gyakran legyen frissítve a csevegőszoba (másodpercben)? Alacsony értékre állítva a csevegőszoba gyorsabbnak látszik, azonban nagyobb terhelést jelenthet a szervernek, ha egyszerre sokan csevegnek. Ha <em>Stream</em> frissítést használ, kiválaszthat egy magasabb frissítési gyakoriságot - próbálkozzék 2-vel.';
$string['configrefreshuserlist'] = 'Milyen gyakran legyen frissítve a felhasználók listája (mp-ben)?';
$string['configserverhost'] = 'A szerverdémont tartalmazó számítógép gazdaneve';
$string['configserverip'] = 'A fenti gazdanévnek megfelelő numerikus IP-cím';
$string['configservermax'] = 'Csevegők maximálisan megengedett száma';
$string['configserverport'] = 'A szerveren a démonnal használandó port';
$string['coursetheme'] = 'Kurzusstílus';
$string['crontask'] = 'Háttérben zajló feldolgozás a csevegéshez.';
$string['currentchats'] = 'Folyamatban lévő csevegések';
$string['currentusers'] = 'Mostani felhasználók';
$string['deletesession'] = 'Csevegés törlése';
$string['deletesessionsure'] = 'Biztosan törölni akarja ezt a csevegést?';
$string['donotusechattime'] = 'Ne jelenjen meg a csevegések ideje';
$string['enterchat'] = 'Kattintson ide a csevegésbe való bekapcsolódáshoz';
$string['entermessage'] = 'Írja be az üzenetet';
$string['errornousers'] = 'Nincsenek felhasználók!';
$string['eventmessagesent'] = 'Üzenet elküldve';
$string['eventsessionsviewed'] = 'Megtekintett folyamatok';
$string['explaingeneralconfig'] = 'Ezek a beállítások <strong>mindig</strong>  érvényesek';
$string['explainmethoddaemon'] = 'Ezek a beállítások csak akkor érvényesek, ha csevegési módszerként "Csevegő szerverdémon"-t adott meg.';
$string['explainmethodnormal'] = 'Ezek a beállítások csak akkor érvényesek, ha csevegési módszerként "Szokásos"-t adott meg.';
$string['generalconfig'] = 'Általános beállítás';
$string['idle'] = 'Tétlen';
$string['indicator:cognitivedepth'] = 'Kognitív csevegés';
$string['indicator:cognitivedepth_help'] = 'Ez a jelző a tanuló által a csevegés kapcsán elért kognitív mélységen alapul.';
$string['indicator:cognitivedepthdef'] = 'Kognitív csevegés';
$string['indicator:cognitivedepthdef_help'] = 'A résztvevő az elemzési időszak alatt a Csevegés tevékenységei során kognitív elfoglaltság terén ezt a százalékot érte el (Szintek - Nincs megtekintés, Megtekintés, Leadás, Visszajelzés megtekintése, Visszajelzéshez kapcsolódó megjegyzés)';
$string['indicator:socialbreadth'] = 'Társas csevegés';
$string['indicator:socialbreadth_help'] = 'Ez a jelző a tanuló által a csevegés kapcsán elért társas lefedettségen alapul.';
$string['indicator:socialbreadthdef'] = 'Társas csevegés';
$string['indicator:socialbreadthdef_help'] = 'A résztvevő az elemzési időszak alatt a Csevegés tevékenységei során társas elfoglaltság terén ezt a százalékot érte el (Szintek - Nincs részvétel, Egyedüli részvétel, Másokkal együtt való részvétel)';
$string['inputarea'] = 'Adatbevitel területe';
$string['invalidid'] = 'Nem található a csevegőszoba!';
$string['list_all_sessions'] = 'Az összes kurzusrész felsorolása';
$string['list_complete_sessions'] = 'Csak a befejezett kurzusrészek felsorolása';
$string['listing_all_sessions'] = 'Az összes kurzusrész felsorolása folyamatban';
$string['messagebeepseveryone'] = '{$a} mindenkit csönget!';
$string['messagebeepsyou'] = '{$a} most csöngetett Önnek!';
$string['messageenter'] = '{$a} most lépett be a csevegésbe';
$string['messageexit'] = '{$a} most lépett ki a csevegésből';
$string['messages'] = 'Üzenetek';
$string['messageyoubeep'] = '{$a} csengetett';
$string['method'] = 'Csevegési módszer';
$string['methodajax'] = 'Ajax';
$string['methoddaemon'] = 'Csevegés szerverdémona';
$string['methodnormal'] = 'Szokásos';
$string['modulename'] = 'Csevegés';
$string['modulename_help'] = 'A csevegési modul segítségével a résztvevők a weben keresztül valós időben beszélgetést folytathatnak.

A csevegés lehet egyszeri és a hét vagy a nap idott időpontjában ismétlődő tevékenység, mely elmenthető és mások számára megtekinthetővé tehető.

Különösen akkor hasznos, ha a csoport tagjai nem tudnak személyesen találkozni, pl.

* Online kurzusokban való rendszeres részvétel esetén egymástól távol lévők oszthatják meg véleményüket
* Egy tanuló átmenetileg nem tud részt venni a tanárral való személyes megbeszélésen, ugyanakkor utol kell érnia a többieket
* Gyakorlarton lévő tanulók kicserélhetik tapasztalataikat egymással és a tanárral
* A fiatalabb korosztály a csevegést otthoni esténkénti szabályozott (felügyelt) tevékenységként a társas hálózati együttműködés bevezetőjeként veheti igénybe
* Kérdezz-felelek jellegű tevékenység egy más helyen lévő meghívott előadóval
* Tanulók felkészítése tesztek megoldására, mely során a tanár vagy a többi tanuló tesz fel kérdéseket';
$string['modulenameplural'] = 'Csevegések';
$string['neverdeletemessages'] = 'Az üzenetek soha ne törlődjenek';
$string['nextsession'] = 'A következő előjegyzett csevegés';
$string['no_complete_sessions_found'] = 'Nincsenek befejezett kurzusrészek.';
$string['nochat'] = 'Nincs csevegés';
$string['noguests'] = 'A csevegésbe vendégek nem kapcsolódhatnak be';
$string['nomessages'] = 'Még nincs üzenet';
$string['nopermissiontoseethechatlog'] = 'A csevegési naplók megtekintéséhez nincs engedélye.';
$string['normalkeepalive'] = 'KeepAlive';
$string['normalstream'] = 'Stream';
$string['noscheduledsession'] = 'Nincs előjegyzett csevegés';
$string['notallowenter'] = 'Nem léphet be a csevegőszobába!';
$string['notlogged'] = 'Nincs bejelentkezve!';
$string['oldping'] = 'Szétkapcsolás időtúllépés miatt';
$string['page-mod-chat-x'] = 'Bármely csevegő moduloldal';
$string['pastchats'] = 'Korábbi csevegések';
$string['pluginadministration'] = 'Csevegés kezelése';
$string['pluginname'] = 'Csevegés';
$string['privacy:metadata:chat_messages_current'] = 'Az aktuális csevegés. Az adatok ideiglenesek és a csevegés törlése után törlődnek.';
$string['privacy:metadata:chat_users'] = 'Nyomon követi, mely felhasználók vannak az egyes csevegőszobákban.';
$string['privacy:metadata:chat_users:firstping'] = 'A csevegőszobába való első belépés időpontja.';
$string['privacy:metadata:chat_users:ip'] = 'Felhasználói IP';
$string['privacy:metadata:chat_users:lang'] = 'Felhasználó nyelve';
$string['privacy:metadata:chat_users:lastmessageping'] = 'A csevegőszoba utolsó üzenetének időpontja';
$string['privacy:metadata:chat_users:lastping'] = 'A csevegőszobába való utolsó belépés időpontja.';
$string['privacy:metadata:chat_users:userid'] = 'Felhasználóazonosító';
$string['privacy:metadata:chat_users:version'] = 'Hogyan kapcsolódott a felhasználó a csevegésbe (sockets/basic/ajax/header_js)';
$string['privacy:metadata:messages'] = 'Csevegés során elküldött üzenetek rekordja';
$string['privacy:metadata:messages:issystem'] = 'Az üzenetet a rendszer állította-e elő';
$string['privacy:metadata:messages:message'] = 'Az üzenet';
$string['privacy:metadata:messages:timestamp'] = 'Az üzenet elküldésének időpontja';
$string['privacy:metadata:messages:userid'] = 'Az üzenet szerzőjének felhasználói azonosítója';
$string['refreshroom'] = 'Frissítési idő';
$string['refreshuserlist'] = 'Felhasználói lista frissítése';
$string['removemessages'] = 'Az összes üzenet törlése';
$string['repeatdaily'] = 'Minden nap ugyanakkor';
$string['repeatnone'] = 'Nincs ismétlés - csak a megadott időpont közzététele';
$string['repeattimes'] = 'Csevegések ismétlése';
$string['repeatweekly'] = 'Minden héten ugyanakkor';
$string['saidto'] = 'mondta';
$string['savemessages'] = 'Korábbi csevegések mentése';
$string['search:activity'] = 'Csevegési tevékenységek';
$string['seesession'] = 'A csevegés megtekintése';
$string['send'] = 'Elküld';
$string['sending'] = 'Küldés';
$string['serverhost'] = 'Szerver neve';
$string['serverip'] = 'Szerver ip-címe';
$string['servermax'] = 'Max. felhasználó';
$string['serverport'] = 'Szerver portja';
$string['sessions'] = 'Csevegések';
$string['sessionstart'] = 'A következő csevegés kezdete  {$a->date}, (mostantól {$a->fromnow})';
$string['strftimemessage'] = '%H:%M';
$string['studentseereports'] = 'A korábbi csevegéseket mindenki megtekintheti';
$string['studentseereports_help'] = 'Nem-re állítva csak a mod/chat:readlog képességgel rendelkezők nézhetik meg a csevegési naplókat.';
$string['talk'] = 'Beszéljen';
$string['updatemethod'] = 'Frissítés módszere';
$string['updaterate'] = 'Értékelés frissítése:';
$string['userlist'] = 'Felhasználók felsorolása';
$string['usingchat'] = 'A csevegés használata';
$string['usingchat_help'] = '<p>A csevegésre használt modul tartalmaz néhány olyan vonást, amely révén a csevegés valamelyest kellemesebbé tehető.</p>

<dl>
<dt><strong>Emotikonok</strong></dt>
<dd>Bármely érzelmet kifejező kép (emotikon), amelyet a Moodle-ban máshol használhat, itt is begépelhető és megfelelő módon megjeleníthető.
Például, :-) = <img alt="smiley" src="pix/s/smiley.gif" /> </dd>

<dt><strong>Hivatkozások</strong></dt>
<dd>Az internetes címek automatikusan hivatkozásokká alakulnak át.</dd>

<dt><strong>Érzelem kifejezése</strong></dt>
<dd>Érzelem kifejezéséhez használható az "/én" vagy ":" sorkezdet.
Például ha a felhasználó neve Kati és azt gépeli be, hogy
":nevet!" vagy "/én nevetek!", akkor a kijelzés mindenki előtt "Kati nevet!" alakban lesz látható.</dd>

<dt><strong>Hangjelzések</strong></dt>
<dd>Ha valakinek a neve mellett lévő "hangjelző" hivatkozásra kattint,
az illetőhöz hangjelzést tud küldeni. Ha egyszerre minden embernek szeretne hangjelzést küldeni egy
csevegés során, gépelje be a "beep all" [hangjelzés mindenkinek] utasítást.</dd>

<dt><strong>HTML</strong></dt>
<dd>Ha valamelyest járatos a HTML-ben, kódot illeszthet a szövegbe, mellyel képet szúrhat be,
hangot játszhat le, és különféle színű és méretű szövegeket
jeleníthet meg.</dd>

</dl>';
$string['viewreport'] = 'Korábbi csevegések megtekintése';
