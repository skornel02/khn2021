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
 * Strings for component 'scorm', language 'hu', version '3.10'.
 *
 * @package     scorm
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activation'] = 'Bekapcsolás';
$string['activityloading'] = 'Automatikusan átkerül ehhez a tevékenységhez:';
$string['activityoverview'] = 'Kezelendő SCORM-csomagjai vannak';
$string['activitypleasewait'] = 'Tevékenység betöltése folyamatban, várjon...';
$string['adminsettings'] = 'A rendszergazda beállításai';
$string['advanced'] = 'Paraméterek';
$string['aicchacpkeepsessiondata'] = 'Az AICC HACP folyamat adatai';
$string['aicchacpkeepsessiondata_desc'] = 'A külső AICC HACP folyamat adatainak megőrzési időtartama napokban';
$string['aicchacptimeout'] = 'Az AICC HACP lejárata';
$string['aicchacptimeout_desc'] = 'A külső AICC HACP folyamat nyitva tartásának időtartama percekben';
$string['aiccuserid'] = 'AICC felhasználói azonosító továbbítása';
$string['aiccuserid_desc'] = 'Az AICC-szabvány a Moodle-hoz képest a felhasználónevek használatát erősen korlátozza, az alfanumerikus karaktereken túl csak a kötőjel (-) és az aláhúzás (_) használatát engedélyezi, a pontot, a szóközt, az @-jelet nem. Bekapcsolt állapotban az AICC-csomag a felhasználónév helyett a felhasználó azonosítószámát kapja meg.';
$string['aliasonly'] = 'Ha egy adattárból  imsmanifest.xml fájlt választ, hozzá áljelet/hivatkozást kell megadnia.';
$string['allowapidebug'] = 'API hibaszűrésének és nyomon követésének bekapcsolása (az elemzési maszkot állítsa be az apidebugmask segítségével)';
$string['allowtypeaicchacp'] = 'Külső AICC HACP folyamat bekapcsolása';
$string['allowtypeaicchacp_desc'] = 'Bekapcsolása esetén a AICC HACP részére külső kommunikációt engedélyez a külső AICC HACP csomagból felhasználói bejelentkezés nélküli kérések leadásához.';
$string['allowtypeexternal'] = 'Külső csomagtípus bekapcsolása';
$string['allowtypeexternalaicc'] = 'Közvetlen AICC URL bekapcsolása';
$string['allowtypeexternalaicc_desc'] = 'Bekapcsolása esetén közvetlen  webcímet engedélyez egy egyszerű AICC-csomaghoz.';
$string['allowtypelocalsync'] = 'Letöltött csomagtípus bekapcsolása';
$string['apidebugmask'] = 'API hibaszűrésének elemzési maszkja - egyszerű regex használata a <username>:<activityname> esetén, pl. az admin:. * csak a rendszerhasználókra végez hibaszűrést';
$string['areacontent'] = 'Tartalomfájlok';
$string['areapackage'] = 'Csomagfájlok';
$string['asset'] = 'Tudáselem';
$string['assetlaunched'] = 'Tudáselem - megtekintve';
$string['attempt'] = 'Próbálkozás';
$string['attempt1'] = '1. próbálkozás';
$string['attempts'] = 'Próbálkozások';
$string['attemptsmanagement'] = 'Próbálkozások kezelése';
$string['attemptstatusall'] = 'Irányítópult és belépő oldal';
$string['attemptstatusentry'] = 'Csak a belépő oldal';
$string['attemptstatusmy'] = 'Csak Irányítópult';
$string['attemptsx'] = '{$a} próbálkozás';
$string['attr_error'] = 'Hibás érték a(z) {$a->tag} elem attribútumánál ({$a->attr}).';
$string['autocommit'] = 'Automatikus leadás';
$string['autocommit_help'] = 'Bekapcsolása esetén a SCORM-adatok mentése automatikus. Olyan SCORM-objektumok esetén hasznos, amelyek nem mentik rendszeresen az adataikat.';
$string['autocommitdesc'] = 'SCORM-adatok automatikus mentése, ha a csomag nem menti az adatokat.';
$string['autocontinue'] = 'Automatikus folytatás';
$string['autocontinue_help'] = '<p>Ha az automatikus folytatás be van kapcsolva, a SCO "kommunikáció lezárása" metódus
meghívásakor automatikusan elindul a következő meglévő SCO.</p>

<p>Kikapcsolása esetén a folytatáshoz a tanulónak meg kell nyomnia a "Tovább" gombot.</p>';
$string['autocontinuedesc'] = 'Bekapcsolása esetén a tanulási objektumok automatikusan elindulnak, ellenkező esetben a Folytatás gombot kell használni.';
$string['averageattempt'] = 'Próbálkozások átlaga';
$string['badarchive'] = 'Érvényes tömörített fájlt kell megadnia.';
$string['badimsmanifestlocation'] = 'Létezik imsmanifest.xml fájl, de nem a tömörített állomány gyökerében, csomagolja újra a SCORM-csomagot.';
$string['badmanifest'] = 'Hibás tananyagleírás: lásd a hibanaplót';
$string['browse'] = 'Előzetes megtekintés';
$string['browsed'] = 'Böngészés megtörtént';
$string['browsemode'] = 'Előzetes megtekintés üzemmódja';
$string['browserepository'] = 'Adattár böngészése';
$string['calculatedweight'] = 'Számított súly';
$string['calendarend'] = '{$a} lezárul';
$string['calendarstart'] = '{$a} megnyílik';
$string['cannotaccess'] = 'A programkódot így nem hívhatja meg.';
$string['cannotfindsco'] = 'Nincs meg a SCO';
$string['chooseapacket'] = 'SCORM-csomag kiválasztása vagy frissítése';
$string['closebeforeopen'] = 'Kezdő időpont előtti záró időpontot adott meg.';
$string['collapsetocwinsize'] = 'Ennél kisebb ablak esetén a tartalomjegyzéket csukja be';
$string['collapsetocwinsizedesc'] = 'Az itt megadottnál kisebb ablak esetén a tartalomjegyzék automatikusan becsukódik.';
$string['compatibilitysettings'] = 'Kompatibilitási beállítások';
$string['completed'] = 'Kész';
$string['completionscorerequired'] = 'Minimális pontszám előírása';
$string['completionscorerequired_help'] = 'Bekapcsolása esetén a tanulónak a megadott minimális pontszámot el kell érnie az adott SCORM-tevékenység teljesítéséhez - minden tevékenységgel kapcsolat előírás  teljesítésén túl.';
$string['completionscorerequireddesc'] = 'A befejezéshez minimálisan {$a} szükséges';
$string['completionstatus_completed'] = 'Teljesítve';
$string['completionstatus_passed'] = 'Átment';
$string['completionstatusallscos'] = 'Minden sco adja meg a teljesítés állapotát.';
$string['completionstatusallscos_help'] = 'Egyes SCORM-csomagok több elemből ("sco"-ból) állnak. Beállítása esetén a csomagban lévő összes sco-nak a tevékenység teljesítéséhez a megfelelő leckeállapothoz (lesson_status ) kell visszatérni.';
$string['completionstatusrequired'] = 'Előírás állapota';
$string['completionstatusrequired_help'] = 'Egy vagy több állapot bejelölése esetén a tanulónak a bejelölt követelmények közül legalább egyet teljesítenie kell az adott SCORM-tevékenység teljesítéséhez - minden további tevékenységgel kapcsolat előírás teljesítésén túl.';
$string['completionstatusrequireddesc'] = 'A tanulónak az alábbi állapotok közül legalább egyet el kell érnie: {$a}';
$string['confirmloosetracks'] = 'FIGYELEM: A csomagot módosították. Ha megváltozott a csomag szerkezete, egyes felhasználói nyomkövetések elveszhetnek a frissítés során.';
$string['contents'] = 'Tartalom';
$string['coursepacket'] = 'Kurzuscsomag';
$string['coursestruct'] = 'Kurzusszerkezet';
$string['crontask'] = 'Háttérben zajló feldolgozás a Scormhoz';
$string['currentwindow'] = 'Ez az ablak';
$string['datadir'] = 'A fájlrendszer hibája: nem lehet létrehozni a kurzusadatok könyvtárát';
$string['defaultdisplaysettings'] = 'Megjelenítési alapbeállítások';
$string['defaultgradesettings'] = 'Pontozási alapbeállítások';
$string['defaultothersettings'] = 'Egyéb alapbeállítások';
$string['deleteallattempts'] = 'Összes SCORM-próbálkozás törlése';
$string['deleteattemptcheck'] = 'Biztosan végérvényesen törli a próbálkozásokat?';
$string['deleteselected'] = 'A kiválasztott próbálkozások törlése';
$string['deleteuserattemptcheck'] = 'Biztosan törölni kíván minden próbálkozást?';
$string['details'] = 'SCO nyomon követésének részletei';
$string['directories'] = 'Könyvtárkapcsolatok megjelenítése';
$string['disabled'] = 'Kikapcsolva';
$string['display'] = 'Csomag megjelenítése';
$string['displayactivityname'] = 'Tevékenység nevének megjelenítése';
$string['displayactivityname_help'] = 'Megjelenjen-e a SCORM-lejátszó fölött a tevékenység neve';
$string['displayattemptstatus'] = 'Próbálkozás állapotának megjelenítése';
$string['displayattemptstatus_help'] = 'Ezzel szabályozható, hogy a próbálkozások megjelenjenek-e az Irányítópult kurzusáttekintő blokkjában és/vagy a SCORM belépő oldalán.';
$string['displayattemptstatusdesc'] = 'Az Irányítópult kurzusáttekintő blokkjában és/vagy a SCORM belépési oldalán megjelenjen-e a próbálkozások összegzése.';
$string['displaycoursestructure'] = 'Kurzusstruktúra megjelenítése a belépési oldalon';
$string['displaycoursestructure_help'] = '  

  <p>A kurzusszerkezet megjelenítésével szabályozható, hogy a SCORM-tartalomjegyzék látsszon-e a SCORM leíró oldalán. </p>';
$string['displaycoursestructuredesc'] = 'Bekapcsolása esetén a SCORM vázlatoldalán megjelenik a tartalomjegyzék.';
$string['displaydesc'] = 'A SCORM-csomag új ablakban jelenjen-e meg.';
$string['displaysettings'] = 'Megjelenítési beállítások';
$string['dnduploadscorm'] = 'SCORM-csomag hozzáadása';
$string['domxml'] = 'DOMXML külső könyvtár';
$string['duedate'] = 'Határidő';
$string['element'] = 'Elem';
$string['enter'] = 'Belépés';
$string['entercourse'] = 'Belépés a kurzusba';
$string['errorlogs'] = 'Hibanapló';
$string['eventattemptdeleted'] = 'Próbálkozás törölve';
$string['eventinteractionsviewed'] = 'Interakciók megtekintve';
$string['eventreportviewed'] = 'Jelentés megtekintve';
$string['eventscolaunched'] = 'Sco elindítva';
$string['eventscorerawsubmitted'] = 'Leadott nyers  SCORM-pont';
$string['eventstatussubmitted'] = 'Leadott SCORM állapota';
$string['eventtracksviewed'] = 'Sávok megtekintve';
$string['eventuserreportviewed'] = 'Felhasználói jelentés megtekintve';
$string['everyday'] = 'Naponta';
$string['everytime'] = 'Amikor használatos';
$string['exceededmaxattempts'] = 'Elérte a próbálkozások maximális számát.';
$string['exit'] = 'Kilépés a kurzusból';
$string['exitactivity'] = 'Kilépés a tevékenységből';
$string['expired'] = 'Ez a tevékenység {$a} időpontban lezárult és már nem érhető el.';
$string['external'] = 'Külső csomagok időzítésének frissítése';
$string['failed'] = 'Nem sikerült';
$string['finishscorm'] = 'Ha végzett a tananyag megtekintésével, {$a}';
$string['finishscormlinkname'] = 'ide kattintva térjen vissza a kurzusoldalra.';
$string['firstaccess'] = 'Első hozzáférés';
$string['firstattempt'] = 'Első próbálkozás';
$string['floating'] = 'Lebegő';
$string['forceattemptalways'] = 'Mindig';
$string['forceattemptoncomplete'] = 'Amikor a korábbi próbálkozás befejeződött, sikerült vagy nem sikerült';
$string['forcecompleted'] = 'Befejezés előírása';
$string['forcecompleted_help'] = 'Bekapcsolása esetén az adott próbálkozás kötelezően "befejezett" állapotba kerül (csak SCORM 1.2 csomagok esetén.';
$string['forcecompleteddesc'] = 'Ezzel állítja be a befejezés előírásához az alapértéket.';
$string['forcejavascript'] = 'JavaScript bekapcsolásának előírása';
$string['forcejavascript_desc'] = 'Bekapcsolása esetén (ajánlott!) megakadályozza SCORM-objektumok elérését, ha a felhasználó böngészőjében a JavaScript nem használható/ki van kapcsolva. Ilyenkor a felhasználó megtekintheti a SCORM-ot, de az alkalmazással való kommunikáció nem fog működni és az osztályzatokkal kapcsolatos információk mentésére sem kerül sor';
$string['forcejavascriptmessage'] = 'Az objektum megtekintéséhez böngészőjében kapcsolja be a JavaScript használatát, majd próbálja meg újra.';
$string['forcenewattempts'] = 'Új próbálkozás előírása';
$string['forcenewattempts_help'] = '3 lehetőség áll rendelkezésre:

* Nem - Ha egy korábbi próbálkozás befejeződik, sikerül vagy nem sikerül, a tanuló választhat, hogy áttér-e ellenőrzési üzemmódba vagy új próbálkozásba kezd.
* Amikor a korábbi próbálkozás befejeződött, sikerült vagy nem sikerült - Ez a SCORM-csomag \'befejeződött\', \'sikerült\' vagy \'nem sikerült\' állapotától függ.
* Mindig - A SCORM-tevékenységbe való minden bekapcsolódás új próbálkozást indít el, a tanuló nem jut vissza a korábbi próbálkozás során elért ponthoz.';
$string['found'] = 'Tananyagleírás megvan';
$string['frameheight'] = 'Ezzel állítja be a keret vagy ablak alapmagasságát.';
$string['framewidth'] = 'Ezzel állítja be a keret vagy ablak alapszélességét.';
$string['fromleft'] = 'Balról';
$string['fromtop'] = 'Fentről';
$string['fullscreen'] = 'Teljes képernyő kitöltése';
$string['general'] = 'Általános adatok';
$string['gradeaverage'] = 'Átlagpont';
$string['gradeforattempt'] = 'Próbálkozásra adott pont';
$string['gradehighest'] = 'Legmagasabb pont';
$string['grademethod'] = 'Pontozási módszer';
$string['grademethod_help'] = 'A pontozási módszer szabja meg, miként állapítja meg a tevékenységhez kapcsolódó egyetlen próbálkozásra adott pontot.

4 pontozási módszer létezik:

* Tanulási objektumok - Jelzi a tevékenység során teljesített tanulási objektumok számát
* Legmagasabb pont - A tanulók által az összes teljesített tanulási objektumra kapott legmagasabb pont
* Átlagpont - Az összes pontszám átlaga
* Összegzett pont - Az összes pontszám összege';
$string['grademethoddesc'] = 'Az osztályozási módszer meghatározza, hogy a tevékenységgel kapcsolatos egyetlen próbálkozásra milyen osztályzat adható.';
$string['gradereported'] = 'Jelentett pontszám';
$string['gradescoes'] = 'Tudásegységek';
$string['gradesettings'] = 'Pontozási beállítások';
$string['gradesum'] = 'Összes pont';
$string['height'] = 'Magasság';
$string['hidden'] = 'Rejtve';
$string['hidebrowse'] = 'Előzetes megtekintés kikapcsolása';
$string['hidebrowse_help'] = '<p>Ha ez a lehetőség Igen-re van beállítva, az Előnézet gomb a SCORM/AICC csomag tevékenységének nézetéből rejtve marad.</p>

<p>A tanuló választhatja a tevékenység előnézeti (böngésző módban) való megtekintését vagy próbálkozhat vele normál módban.</p>

<p>Amikor egy tanulási objektumot előnézet (böngésző) módban sajátít el, erre az  <img src="<?php echo $CFG->wwwroot.\'/mod/scorm/pix/browsed.gif\' ?>" alt="<?php print_string(\'browsed\',\'scorm\') ?>" title="<?php print_string(\'browsed\',\'scorm\') ?>" /> ikon utal.</p>';
$string['hidebrowsedesc'] = 'Előzetes megtekintési üzemmódban esetén a tanuló próbálkozás előtt böngészhet a tevékenységben.';
$string['hideexit'] = 'Kilépő hivatkozás elrejtése';
$string['hidereview'] = 'Ellenőrző gomb elrejtése';
$string['hidetoc'] = 'Kurzusszerkezet megjelenítése a lejátszóban';
$string['hidetoc_help'] = 'A tartalomjegyzék miként látsszon a SCORM-lejátszóban.';
$string['hidetocdesc'] = 'Ezzel állítja be, hogy a tartalomjegyzék miként látsszon a SCORM-lejátszóban.';
$string['highestattempt'] = 'Legjobb próbálkozás';
$string['identifier'] = 'Kérdés-azonosító';
$string['incomplete'] = 'Nem teljes';
$string['indicator:cognitivedepth'] = 'Kognitív SCORM';
$string['indicator:cognitivedepth_help'] = 'Ez a jelző a tanuló által egy SCORM-ban elért kognitív mélységet mutatja.';
$string['indicator:cognitivedepthdef'] = 'Kognitív SCORM';
$string['indicator:cognitivedepthdef_help'] = 'A résztvevő az elemzési időszak alatt a SCORM tevékenységei során kognitív elfoglaltság terén ezt a százalékot érte el (Szintek - Nincs megtekintés, Megtekintés, Leadás, Visszajelzés megtekintése)';
$string['indicator:socialbreadth'] = 'Társas SCORM';
$string['indicator:socialbreadth_help'] = 'Ez a jelző a tanuló által egy SCORM-ban elért társas lefedettséget mutatja.';
$string['indicator:socialbreadthdef'] = 'Társas SCORM';
$string['indicator:socialbreadthdef_help'] = 'A résztvevő az elemzési időszak alatt a SCORM tevékenységei során társas elfoglaltság terén ezt a százalékot érte el (Szintek - Nincs részvétel, Egyedüli részvétel)';
$string['info'] = 'Infó';
$string['interactions'] = 'Interakciók';
$string['invalidactivity'] = 'Hibás SCORM-tevékenység';
$string['invalidhacpsession'] = 'Érvénytelen HACP-folyamat';
$string['invalidmanifestname'] = 'Csak imsmanifest.xml vagy .zip fájlt választhat,';
$string['invalidmanifestresource'] = 'FIGYELEM: az alábbi tananyagok szerepelnek kimutatásában, de nem találhatók';
$string['invalidstatus'] = 'Érvénytelen állapot';
$string['invalidurl'] = 'Érvénytelen  webcímet adott meg';
$string['invalidurlhttpcheck'] = 'Érvénytelen  webcímet adott meg. <pre>{$a->cmsg}</pre> üzenet hibájának elhárítása';
$string['last'] = 'Utolsó hozzáférés időpontja';
$string['lastaccess'] = 'Utolsó hozzáférés';
$string['lastattempt'] = 'Utolsó befejezett próbálkozás';
$string['lastattemptlock'] = 'Lezárás az utolsó próbálkozás után';
$string['lastattemptlock_help'] = '

<p>Ezzel bekapcsolja a SCORM-lejátszó lezárását, ha a tanuló a rendelkezésére álló összes próbálkozást kihasználta.</p>
<p>A tanuló továbbra is ellátogathat a kurzust leíró oldalra és (ha be van kapcsolva) megtekintheti a próbálkozások állapotára vonatkozó információkat, de nem választhatja az "Enter" gombot a lejátszó elindítására.</p>';
$string['lastattemptlockdesc'] = 'Bekapcsolása esetén a tanuló próbálkozásainak kimerítése után nem indíthatja el a SCORM-lejátszót.';
$string['location'] = 'Helysáv megjelenítése';
$string['masteryoverride'] = 'A jártassági pont felülírja az állapotot.';
$string['masteryoverride_help'] = 'Bekapcsolása és létező jártassági pont mellett az LMSFinish futtatásakor beállított nyers pont esetén az állapotot a nyers pont és a jártassági pont alapján újraszámolja, a SCORM szerinti állapotot pedig (ideértve a "befejezetlen"-t) felülírja.';
$string['masteryoverridedesc'] = 'Beállítja a felülíró jártassági pont alapértékét.';
$string['max'] = 'Max. pontszám';
$string['maximumattempts'] = 'Próbálkozások száma';
$string['maximumattempts_help'] = '<p>Itt adhatja meg a próbálkozások megengedett számát.<br />Csak SCORM 1.2 és AICC csomaggal működik. A SCORM 2004 a próbálkozások maximális számának megadására saját eljárást használ.</p>';
$string['maximumattemptsdesc'] = 'Ezzel állítja be egy tevékenység próbálkozásainak alapértelmezett maximális számát.';
$string['maximumgradedesc'] = 'Ezzel állítja be egy tevékenység pontjainak alapértelmezett maximális számát.';
$string['menubar'] = 'Menüsáv megjelenítése';
$string['min'] = 'Min. pontszám';
$string['missing_attribute'] = 'Hiányzó {$a->attr} attribútum a(z) {$a->tag} címkében';
$string['missing_tag'] = 'Hiányzó {$a->tag} címke';
$string['missingparam'] = 'Egy paraméter hiányzik vagy hibás';
$string['mode'] = 'Leggyakoribb';
$string['modulename'] = 'SCORM-csomag';
$string['modulename_help'] = 'A SCORM és az AICC olyan specifikációk gyűjteménye, amelyek nyomán webes tananyagok válnak elérhetővé, egymással együtt használhatókká és újrafelhasználhatókká. A SCORM/AICC modullal SCORM/AICC csomagokat illeszthet a kurzusba.

A tartalom több oldalt foglalhat el, közöttük navigálási lehetőséggel. Egy előbukkanó ablakban való megjelenítési beállításokkal, tartalomjegyzékkel, navigációs gombokkal stb. A SCORM-tevékenységek általában kérdéseket tartalmaznak, a válaszok osztályozása bekerül egy osztályozónaplóba.

A SCORM-tevékenységek használhatók:

* multimédiás tartalom és animációk bemutatására
* értékelési eszközként.';
$string['modulenameplural'] = 'SCORM/AICC csomagok';
$string['myaiccsessions'] = 'AlCC-munkameneteim';
$string['myattempts'] = 'Próbálkozásaim';
$string['nav'] = 'Navigálás megjelenítése';
$string['nav_help'] = 'Meghatározza, hogy látsszanak-e a navigálási gombok és helyzetük

3 lehetőség közül választhat:

* Nem - ne látsszanak a navigálási gombok
* A tartalom alatt - a navigálási gombok a SCORM-csomagtartalom alatt látsszanak
* Lebegő - kézzel adhatja meg a navigálási gombok ablak tetejéhez és bal széléhez viszonyított helyzetét';
$string['navdesc'] = 'Meghatározza, hogy látsszanak-e a navigálási gombok és helyzetük';
$string['navigation'] = 'Navigáció';
$string['navpositionleft'] = 'A navigálási gombok bal szélhez viszonyított helyzete képpontban';
$string['navpositiontop'] = 'A navigálási gombok ablak tetejétől mért helyzete képpontban';
$string['networkdropped'] = 'A SCORM-lejátszó szerint internetkapcsolata megbízhatatlan vagy megszakadt. Ha folytatja a SCORM-tevékenységet, előfordulhat, hogy előrehaladásának mentése nem sikerül.
Lépjen ki a tevékenységből, és akkor tárjen vissza, ha kapcsolata megbízható lesz.';
$string['newattempt'] = 'Új próbálkozás elkezdése';
$string['next'] = 'Tovább';
$string['no_attributes'] = 'A(z) {$a->tag} címkének attribútumokkal kell rendelkezni';
$string['no_children'] = 'A(z) {$a->tag} címkének alcímkékkel kell rendelkezni';
$string['noactivity'] = 'Nincs jelentenivaló';
$string['noattemptsallowed'] = 'Engedélyezett próbálkozások száma';
$string['noattemptsmade'] = 'Próbálkozásainak száma';
$string['nolimit'] = 'Korlátlan számú próbálkozás';
$string['nomanifest'] = 'Érvénytelen tananyagcsomag - hiányzó tananyagleíró (imsmanifest.xml fájl vagy AICC-struktúra)';
$string['noprerequisites'] = 'Nem teljesített elegendő előfeltételt ezen tevékenység eléréséhez.';
$string['noreports'] = 'Nincs megjeleníthető jelentés';
$string['normal'] = 'Szokásos';
$string['noscriptnoscorm'] = 'Böngészője nem támogatja a javascript használatát, vagy annak támogatása ki van kapcsolva. A SCORM-csomag lejátszásával vagy az adatok mentésével gondok lehetnek.';
$string['not_corr_type'] = 'A(z) {$a->tag} címke típusa nem egyezik';
$string['notattempted'] = 'Nem oldották meg';
$string['notopenyet'] = 'A tevékenység {$a} időpontig nem érhető el.';
$string['objectives'] = 'Célok';
$string['openafterclose'] = 'A nyitási idő a zárási idő után van.';
$string['optallstudents'] = 'minden felhasználó';
$string['optattemptsonly'] = 'csak a próbálkozó felhasználók';
$string['options'] = 'Lehetőségek (egyes böngészők nem engedélyezik)';
$string['optionsadv'] = 'Lehetőségek (részletes)';
$string['optionsadv_desc'] = 'Bejelölése esetén a szélesség és a magasság a részletes beállítások között jelenik meg.';
$string['optnoattemptsonly'] = 'csak a nem próbálkozó felhasználók';
$string['organization'] = 'Szervezet';
$string['organizations'] = 'Szervezetek';
$string['othersettings'] = 'Egyéb beállítások';
$string['package'] = 'Csomagállomány';
$string['package_help'] = 'A csomag olyan zip (vagy pif) kiterjesztésű állomány, amely érvényes AICC- vagy SCORM-kurzusdefiníciós állományokat tartalmaz.';
$string['packagedir'] = 'Fájlrendszerbeli hiba: nem lehet létrehozni a csomag könyvtárát';
$string['packagefile'] = 'Nincs megadva csomagállomány';
$string['packagehdr'] = 'Csomag';
$string['packageurl'] = 'URL';
$string['packageurl_help'] = 'Ezzel a beállítással  webcímet adhat meg a SCORM-csomaghoz egy állomány állományválasztóval való kiválasztása helyett.';
$string['page-mod-scorm-x'] = 'Bármely SCORM-modul oldala';
$string['pagesize'] = 'Oldal mérete';
$string['passed'] = 'Sikerült';
$string['php5'] = 'PHP 5 (DOMXML eredeti könyvtára)';
$string['pluginadministration'] = 'SCORM-csomag kezelése';
$string['pluginname'] = 'SCORM-csomag';
$string['popup'] = 'Új ablak';
$string['popuplaunched'] = 'A SCORM-csomagot előbukkanó ablakból indították el. Megtekintése után kattintson ide a kurzusoldalra való visszatéréshez.';
$string['popupmenu'] = 'Lenyíló menüben';
$string['popupopen'] = 'Egy csomag megnyitása új ablakban';
$string['popupsblocked'] = 'Az előugró ablakok tiltva vannak, ezért a SCORM-modul nem játszható le. Újrakezdés előtt ellenőrizze böngészője beállításait.';
$string['position_error'] = 'A(z) {$a->tag} címke nem lehet a(z) {$a->parent} címke részeleme';
$string['preferencespage'] = 'Beállítások csak ehhez az oldalhoz';
$string['preferencesuser'] = 'Beállítások ehhez a jelentéshez';
$string['prev'] = 'Előző';
$string['privacy:metadata:aicc:data'] = 'Személyes adatok átvéve az  AICC/SCORM alrendszerből.';
$string['privacy:metadata:aicc:externalpurpose'] = 'A segédprogram az  AICC HACP használatával külsőleg továbbít adatokat.';
$string['privacy:metadata:aicc_session:lessonstatus'] = 'A figyelendő leckeállapot';
$string['privacy:metadata:aicc_session:scormmode'] = 'A figyelendő elem üzemmódja';
$string['privacy:metadata:aicc_session:scormstatus'] = 'A figyelendő elem állapota';
$string['privacy:metadata:aicc_session:sessiontime'] = 'A figyelendő munkamenetidő';
$string['privacy:metadata:aicc_session:timecreated'] = 'A megfigyelt elem létrehozásának ideje';
$string['privacy:metadata:attempt'] = 'A próbálkozás száma';
$string['privacy:metadata:scoes_track:element'] = 'A figyelendő elem neve';
$string['privacy:metadata:scoes_track:value'] = 'Az adott elem értéke';
$string['privacy:metadata:scorm_aicc_session'] = 'Az  AICC HACP munkamenetéről szóló információ';
$string['privacy:metadata:scorm_scoes_track'] = 'A tevékenységhez tartozó SCO-k megfigyelt adatai';
$string['privacy:metadata:timemodified'] = 'A megfigyelt elem módosításának az ideje';
$string['privacy:metadata:userid'] = 'A SCORM-tevékenységbe belépő felhasználó azonosítója';
$string['protectpackagedownloads'] = 'Csomagletöltések levédése';
$string['protectpackagedownloads_desc'] = 'Bekapcsolása esetén a SCORM-csomagokat csak course:manageactivities jogosultságú felhasználó töltheti le. Ellenkező esetben a csomagok mindig letölthetők.';
$string['raw'] = 'Nyers pontszám';
$string['regular'] = 'Szabványos tananyagleírás';
$string['report'] = 'Jelentés';
$string['reportcountallattempts'] = '{$a->nbattempts} próbálkozás {$a->nbusers} felhasználó esetén {$a->nbresults} eredmény közül';
$string['reportcountattempts'] = '{$a->nbresults} eredmény ({$a->nbusers} felhasználó)';
$string['reports'] = 'Jelentések';
$string['repositorynotsupported'] = 'Az adattár nem támogatja imsmanifest.xml fájl közvetlenl kapcsolását.';
$string['response'] = 'Válasz';
$string['result'] = 'Eredmény';
$string['results'] = 'Eredmények';
$string['review'] = 'Ellenőrzés';
$string['reviewmode'] = 'Ellenőrző üzemmód';
$string['rightanswer'] = 'Helyes válasz';
$string['scoes'] = 'Tudásegységek';
$string['score'] = 'Pontszám';
$string['scorm:addinstance'] = 'Új SCORM-csomag hozzáadása';
$string['scorm:deleteownresponses'] = 'Saját próbálkozások törlése';
$string['scorm:deleteresponses'] = 'SCORM-próbálkozások törlése';
$string['scorm:savetrack'] = 'Nyomkövetések mentése';
$string['scorm:skipview'] = 'Áttekintés kihagyása';
$string['scorm:viewreport'] = 'Jelentések megtekintése';
$string['scorm:viewscores'] = 'Pontszámok megtekintése';
$string['scormclose'] = 'Eddig';
$string['scormcourse'] = 'SCORM-kurzus';
$string['scormloggingoff'] = 'API naplózása kikapcsolva';
$string['scormloggingon'] = 'API naplózása bekapcsolva';
$string['scormopen'] = 'Ettől';
$string['scormresponsedeleted'] = 'Törölt felhasználói próbálkozások';
$string['scormstandard'] = 'SCORM-szabványok üzemmódja';
$string['scormstandarddesc'] = 'Kikapcsolása esetén a Moodle a SCORM 1.2 csomagoknak a specifikációban szereplőnél több tárolását engedélyezi, emellett a Moodle teljes névre vonatkozó beállításait használja, amikor felhasználók nevét továbbítja a SCORM-csomagnak.';
$string['scormtype'] = 'Típus';
$string['scormtype_help'] = 'Ez szabja meg, hogy kerüljön a csomag a kurzusba. Legfeljebb 4 lehetőség közül választhat:

* Feltöltött csomag - Lehetővé teszi SCORM-csomag kiválasztását az állományválasztón keresztül
* Külső SCORM-jegyzékfájl - Lehetővé teszi imsmanifest.xml URL megadását. Megjegyzés: ha a  webcímnek az Ön portáljáétól eltérő a doménneve, akkor jobb megoldás a "Letöltött csomag", mert ellenkező esetben nem kerül sor a pontok mentésére.
* Letöltött csomag - Lehetővé teszi csomag  webcímének megadását. A csomagot kibontja és helyben elmenti, a külső SCORM-csomag frissítésekor pedig frissíti.
* Külső AICC  webcíme - ez az indítási webcím egy adott IACC-tevékenységhez. Ehhez egy álcsomag jön létre.';
$string['scrollbars'] = 'Ablakgörgetés engedélyezése';
$string['search:activity'] = 'SCORM-csomag tevékenységei';
$string['selectall'] = 'Az összes kijelölése';
$string['selectnone'] = 'Összes kijelölés törlése';
$string['show'] = 'Megjelenítés';
$string['sided'] = 'Oldalra';
$string['skipview'] = 'A tanuló kihagyja a tartalmi struktúra oldalát';
$string['skipview_help'] = '<p>Ha csak egy tanulási objektumot tartalmazó csomagot ad a tananyaghoz, beállíthatja a tartalmi szerkezet oldalának automatikus átugrását, ha a felhasználók a kurzusoldalon a SCORM-tevékenyégre kattintanak.</p>

<p>Választható beállítások:
   <ul>
       <li><strong>Soha</strong> ne ugorja át a tartalmi szerkezet oldalát</li>
       <li><strong>Első eléréskor</strong> csakis az első megtekintéskor ugorja át a tartalmi szerkezet oldalát</li>
       <li><strong>Mindig</strong> ugorja át a tartalmi szerkezet oldalát</li>
   </ul>
</p>';
$string['skipviewdesc'] = 'Ezzel állítja be, hogy egy oldalon mikor maradjon ki a tartalomszerkezet';
$string['slashargs'] = 'VIGYÁZAT: a portálon a perjeles argumentumok ki vannak kapcsolva és az objektumok viselkedése szokatlan lehet!';
$string['stagesize'] = 'Keret/ablak mérete';
$string['stagesize_help'] = '<p>Ezen két beállítás határozza meg a tanulási objektum keretének/ablakának a magasságát és szélességét.</p>';
$string['started'] = 'Kezdés ideje';
$string['status'] = 'Állapot';
$string['statusbar'] = 'Állapotsor megjelenítése';
$string['student_response'] = 'Tanuló válasza';
$string['subplugintype_scormreport'] = 'Jelentés';
$string['subplugintype_scormreport_plural'] = 'Jelentések';
$string['suspended'] = 'Felfüggesztve';
$string['syntax'] = 'Szintaktikus hiba';
$string['tag_error'] = 'Ismeretlen címke ({$a->tag}) ezzel a tartalommal: {$a->value}';
$string['time'] = 'Idő';
$string['title'] = 'Cím';
$string['toc'] = 'Tartalomjegyzék';
$string['too_many_attributes'] = 'A(z) {$a->tag} címkének túl sok az attribútuma';
$string['too_many_children'] = 'A(z) {$a->tag} címkének túl sok az alcímkéje';
$string['toolbar'] = 'Eszköztár megjelenítése';
$string['totaltime'] = 'Idő';
$string['trackcorrectcount'] = 'Helyes szám';
$string['trackcorrectcount_help'] = 'A kérdésre adott helyes válaszok száma';
$string['trackid'] = 'Azonosító';
$string['trackid_help'] = 'SCORM-csomagjában a kérdéshez ez az azonosítókészlet, a SCORM-specifikáció a kérdés teljes szövegét nem engedi megjeleníteni.';
$string['trackingloose'] = 'FIGYELEM: Ezen Scorm-csomag követési adatai elvesznek!';
$string['tracklatency'] = 'Kivárás';
$string['tracklatency_help'] = 'A tanuló válaszadási lehetőségének megnyílása és az első válasz között eltelt idő';
$string['trackpattern'] = 'Minta';
$string['trackpattern_help'] = 'Ez a kérdésre adandó helyes válasz, a tanuló válaszát nem mutatja';
$string['trackresponse'] = 'Válasz';
$string['trackresponse_help'] = 'Ez a tanuló válasza a kérdésre';
$string['trackresult'] = 'Eredmény';
$string['trackresult_help'] = 'A tanulói válaszon és a helyes eredményen alapuló eredmény';
$string['trackscoremax'] = 'Maximális pontszám';
$string['trackscoremax_help'] = 'Nyers pontszám maximális értéke a tartományban';
$string['trackscoremin'] = 'Minimális pontszám';
$string['trackscoremin_help'] = 'Nyers pontszám minimális értéke a tartományban';
$string['trackscoreraw'] = 'Nyers pontszám';
$string['trackscoreraw_help'] = 'A min. és max. értékkel behatárolt tartományra vetített tanulói teljesítményt tükröző szám';
$string['tracksuspenddata'] = 'Adatok felfüggesztése';
$string['tracksuspenddata_help'] = 'Hely biztosítása a tanulói bekapcsolódások közötti adattároláshoz és -előhíváshoz';
$string['tracktime'] = 'Idő';
$string['tracktime_help'] = 'A próbálkozás megkezdésének időpontja';
$string['tracktype'] = 'Típus';
$string['tracktype_help'] = 'A kérdés típusa, pl. "feleletválasztós" vagy "kiegészítendő".';
$string['trackweight'] = 'Súly';
$string['trackweight_help'] = 'Az elemhez rendelt súly';
$string['type'] = 'Típus';
$string['typeaiccurl'] = 'Külső AICC webcíme';
$string['typeexternal'] = 'Külső SCORM-jegyzékfájl';
$string['typelocal'] = 'Feltöltött csomag';
$string['typelocalsync'] = 'Letöltött csomag';
$string['undercontent'] = 'A tartalom alatt';
$string['unziperror'] = 'Hiba történt kicsomagolás közben';
$string['updatefreq'] = 'Automatikus frissítés gyakorisága';
$string['updatefreq_error'] = 'Az automatikus frissítés gyakorisága csak akkor állítható be, ha a csomag külső gazdagépen van.';
$string['updatefreq_help'] = 'Ezzel a külső csomag automatikusan letölthető és frissíthető.';
$string['updatefreqdesc'] = 'Ezzel állítja be egy tevékenység alapértelmezett automatikus frissítését.';
$string['validateascorm'] = 'Scorm-csomag érvényesítése';
$string['validation'] = 'Érvényesítés eredménye';
$string['validationtype'] = 'Ez a preferencia beállítja a Scorm tananyagleírásának érvényesítéséhez használt DOMXML-könyvtárat. Ha bizonytalan, hagyja meg a kiválasztást.';
$string['value'] = 'Érték';
$string['versionwarning'] = 'A tananyagleírás régebbi az 1.3 változatnál, figyelmeztetés a {$a->tag} címkénél';
$string['viewallreports'] = '{$a} próbálkozás jelentéseinek megtekintése';
$string['viewalluserreports'] = '{$a} felhasználó jelentéseinek megtekintése';
$string['whatgrade'] = 'Próbálkozások pontozása';
$string['whatgrade_help'] = 'Ha többszöri próbálkozást engedélyez, kiválaszthatja, hogy a legjobb, az átlag, az első vagy az utolsó próbálkozás kerüljön-e az osztályozónaplóba. Az utolsó próbálkozásba nem kerülnek bele a \'sikertelen\' megjelölésű próbálkozások.

Többszöri próbálkozás kezelése

* Új próbálkozás a tartalomszerkezet oldalán a Belépés gomb fölötti jelölőnégyzettel indítható, így csak akkor engedélyezze az oldal elérését, ha többszöri próbálkozásra akar lehetőséget biztosítani.
* Nem minden SCORM-csomag kezeli az új próbálkozásokat megfelelően. Ha logikailag nem úgy épül föl, lehetővé teheti az adott próbálkozás felülírását akkor is, ha az "befejezett" vagy "sikerült".
* A "Befejezés előírása", az "Új próbálkozás előírása" és a "Lezárás utolsó próbálkozás után" beállításával további lehetőségeket használhat ki többszöri próbálkozások esetén.';
$string['whatgradedesc'] = 'Több próbálkozás engedélyezése esetén a legjobb, az átlag, az első vagy az utolsó befejezett próbálkozás kerüljön-e az osztályozónaplóba.';
$string['width'] = 'Szélesség';
$string['window'] = 'Ablak';
$string['youmustselectastatus'] = 'Válasszon ki előírandó állapotot';
