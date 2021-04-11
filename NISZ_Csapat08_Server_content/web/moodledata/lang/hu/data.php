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
 * Strings for component 'data', language 'hu', version '3.10'.
 *
 * @package     data
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = 'Művelet';
$string['add'] = 'Bejegyzés hozzáadása';
$string['addcomment'] = 'Megjegyzés hozzáadása';
$string['addentries'] = 'Bejegyzések hozzáadása';
$string['addtemplate'] = 'Sablon hozzáadása';
$string['advancedsearch'] = 'Részletes keresés';
$string['allowcomments'] = 'Megjegyzések engedélyezése';
$string['alttext'] = 'Alternatív szöveg';
$string['approvalstatus'] = 'Jóváhagyás állapota';
$string['approve'] = 'Jóváhagy';
$string['approved'] = 'Jóváhagyva';
$string['areacontent'] = 'Mezők';
$string['ascending'] = 'Növekvő';
$string['asearchtemplate'] = 'Részletes keresés sablonja';
$string['atmaxentry'] = 'Elérte a megengedett bejegyzések maximális számát!';
$string['authorfirstname'] = 'Szerző keresztneve';
$string['authorlastname'] = 'Szerző vezetékneve';
$string['autogenallforms'] = 'Minden alapsablon előállítása';
$string['autolinkurl'] = 'URL automatikus kapcsolása';
$string['availablefromdate'] = 'Ekkortól érhető el:';
$string['availabletags'] = 'Meglévő címkék';
$string['availabletags_help'] = '<p align="center"><strong>Rendelkezésre álló címkék</strong></p>
<p>A címkék olyan helykitöltők a sablonban, amelyeket mezők vagy más elemek, például egy szerkesztőikon vált fel a bejegyzések szerkesztése vagy megtekintése során.</p>
<p>A mezők [[fieldname]] formájúak. Az összes többi címke formája ##sometag##.</p>
<p>Csak a &quot;Rendelkezésre álló címkék&quot; listáján szereplő címkék használhatók az adott sablon esetén.</p>';
$string['availabletodate'] = 'Eddig érhető el:';
$string['availabletodatevalidation'] = 'Az elérhetőség lejárata nem előzheti meg annak kezdetét.';
$string['blank'] = 'Üres';
$string['buttons'] = 'Lépések';
$string['bynameondate'] = '{$a->name} írta {$a->date} időpontban';
$string['calendarend'] = '{$a} lezárul';
$string['calendarstart'] = '{$a} megnyílik';
$string['cancel'] = 'Mégse';
$string['cannotaccesspresentsother'] = 'Ön nem jogosult más felhasználók előzetes beállításainak elérésére';
$string['cannotadd'] = 'Nem lehet tételeket hozzáadni';
$string['cannotdeletepreset'] = 'Hiba egy előzetes beállítás törlése közben!';
$string['cannotoverwritepreset'] = 'Hiba a beállítás felülírása közben';
$string['cannotunziptopreset'] = 'Az előzetesen beállított könyvtárba nem lehetett kicsomagolni.';
$string['checkbox'] = 'Jelölőnégyzet';
$string['chooseexportfields'] = 'Válassza ki az exportálandó mezőket:';
$string['chooseexportformat'] = 'Válassza ki az exportálandó formát:';
$string['chooseorupload'] = 'Állomány kiválasztása';
$string['closebeforeopen'] = 'A befejezési idő megelőzi a kezdési időt.';
$string['columns'] = 'oszlopok';
$string['comment'] = 'Megjegyzés';
$string['commentdeleted'] = 'Megjegyzés törölve';
$string['commentempty'] = 'A megjegyzés üres volt';
$string['comments'] = 'Megjegyzések';
$string['commentsaved'] = 'Megjegyzés elmentve';
$string['commentsn'] = '{$a} megjegyzés';
$string['commentsoff'] = 'A Megjegyzések szolgáltatás nincs bekapcsolva';
$string['completionentries'] = 'Fogalmak előírása';
$string['completionentriescount'] = 'Fogalmak száma';
$string['completionentriesdesc'] = 'Bejegyzések előírt minimális száma:  {$a}';
$string['configenablerssfeeds'] = 'Ezzel bekapcsolja az RSS-híreket minden adatbázis számára. Ettől függetlenül minden adatbázis beállításánál az üzeneteket kézzel kell beállítania.';
$string['confirmdeletefield'] = 'Kitörli a mezőt, biztosan ezt akarja tenni?';
$string['confirmdeleterecord'] = 'Biztosan törölni akarja ezt a bejegyzést?';
$string['confirmdeleterecords'] = 'Biztosan törli a bejegyzéseket?';
$string['csstemplate'] = 'CSS-sablon';
$string['csvfailed'] = 'A CSV-állományból nem sikerül kiolvasni a nyers adatokat.';
$string['csvfile'] = 'CSV-állomány';
$string['csvimport'] = 'CSV-állomány importálása';
$string['csvimport_help'] = '<p align="center"><strong>Importálás CSV-fájlból</strong></p>

<p>A CSV a szöveges adatcsere elterjedt formája, jelentése: Comma Separated Values
(vesszővel elválasztott értékek).</p>
<p>A szükséges fájlformátum egyszerű szöveges állomány, első rekordként a
mezőneveket tartalmazza. Ezután következnek az adatok, soronként egy rekord.
<p>A mezőhatároló alapértelmezésben a vessző, a mezőt záró határoló nincs
meghatározva (a mezőhatároló az a karakter, amely az egyes rekordokban az egyes mezőket körülveszi).
<p>A rekordokat egymástól soremelés (a RETURN vagy ENTER billentyű lenyomása) választja el.
A tabulátorokat t, a soremelést n jelzi. </p>
<p>Minta:
<pre>
  név,magasság,testsúly
  Kai,180 cm,80kg
  Kim,170 cm,60kg
  Koo,190 cm,20kg
</pre>
</p>
<p>Figyelmeztetés: előfordulhat, hogy a rendszer nem támogatja az összes mezőtípust.</p>';
$string['csvwithselecteddelimiter'] = '<acronym title="Vesszővel elválasztott értékek">CSV</acronym>-szöveg kiválasztott határolóval:';
$string['data:addinstance'] = 'Új adatbázis hozzáadása';
$string['data:approve'] = 'Fogalmak jóváhagyása vagy jóváhagyottak elvetése.';
$string['data:comment'] = 'Megjegyzések írása';
$string['data:exportallentries'] = 'Összes adatbázis-bejegyzés exportálása';
$string['data:exportentry'] = 'Egyetlen adatbázis-bejegyzés exportálása';
$string['data:exportownentry'] = 'Saját adatbázis-bejegyzés exportálása';
$string['data:exportuserinfo'] = 'Felhasználói adatok exportálása';
$string['data:managecomments'] = 'Megjegyzések kezelése';
$string['data:manageentries'] = 'Bejegyzések kezelése';
$string['data:managetemplates'] = 'Sablonok kezelése';
$string['data:manageuserpresets'] = 'Összes előzetes sablonbeállítás kezelése';
$string['data:rate'] = 'Bejegyzések értékelése';
$string['data:readentry'] = 'Bejegyzések olvasása';
$string['data:view'] = 'Adatbázis-tevékenység megtekintése';
$string['data:viewallratings'] = 'Egyének összes nyers értékelésének megtekintése';
$string['data:viewalluserpresets'] = 'Minden felhasználó előzetes beállításainak megtekintése';
$string['data:viewanyrating'] = 'Bárki összes értékelésének megtekintése';
$string['data:viewentry'] = 'Bejegyzések megtekintése';
$string['data:viewrating'] = 'Összes kapott értékelés megtekintése';
$string['data:writeentry'] = 'Fogalmak írása';
$string['date'] = 'Dátum';
$string['dateentered'] = 'Rögzítés dátuma';
$string['defaultfielddelimiter'] = '(alapbeállítás szerint a vessző)';
$string['defaultfieldenclosure'] = '(alapbeállítás szerint semmi)';
$string['defaultsortfield'] = 'Alapbeállítás szerinti válogatási mező';
$string['delcheck'] = 'Tömeges törlés jelölőnégyzete';
$string['delete'] = 'Törlés';
$string['deleteallentries'] = 'Az összes bejegyzés törlése';
$string['deletecomment'] = 'Biztosan törölni akarja ezt a megjegyzést?';
$string['deleted'] = 'törölve';
$string['deletefield'] = 'Meglévő mező törlése';
$string['deletenotenrolled'] = 'Be nem iratkozott felhasználók bejegyzéseinek törlése';
$string['deletewarning'] = 'Biztosan törli ezt az előzetes beállítást?';
$string['descending'] = 'Csökkenő';
$string['directorynotapreset'] = '{$a->directory} nem egy előre beállított tétel: a hiányzó állományok: {$a->missing_files}';
$string['disapprove'] = 'Jóváhagyás elvetése';
$string['download'] = 'Letöltés';
$string['edit'] = 'Szerkesztés';
$string['editcomment'] = 'Megjegyzés szerkesztése';
$string['editentry'] = 'Bejegyzés szerkesztése';
$string['editordisable'] = 'Szerkesztő kikapcsolása';
$string['editorenable'] = 'Szerkesztő bekapcsolása';
$string['emptyadd'] = 'A Hozzáadás sablon üres, alapbeállítás szerinti űrlap készül...';
$string['emptyaddform'] = 'Nem töltött ki egy mezőt sem!';
$string['enabletemplateeditorcheck'] = 'Biztosan bekapcsolja a szerkesztőt? A sablon mentése közben módosulhat a tartalom.';
$string['entries'] = 'Bejegyzések';
$string['entrieslefttoadd'] = 'A tevékenység befejezéséhez {$a->entriesleft} további tételt kell hozzáadnia.';
$string['entrieslefttoaddtoview'] = 'Még {$a->entrieslefttoview} bejegyzést kell hozzáadnia, mielőtt megtekintheti más résztvevők bejegyzéseit.';
$string['entry'] = 'Fogalom';
$string['entrysaved'] = 'A bejegyzés elmentése megtörtént';
$string['errormustbeteacher'] = 'Az oldal használatához tanárnak kell lennie!';
$string['errormustsupplyvalue'] = 'Itt egy értéket kell megadnia.';
$string['errorpresetexists'] = 'Ez a kiválasztott névvel már be van állítva.';
$string['eventfieldcreated'] = 'Mező létrehozva';
$string['eventfielddeleted'] = 'Mező törölve';
$string['eventfieldupdated'] = 'Mező frissítve';
$string['eventrecordcreated'] = 'Rekord létrehozva';
$string['eventrecorddeleted'] = 'Rekord törölve';
$string['eventrecordupdated'] = 'Rekord frissítve';
$string['eventtemplateupdated'] = 'Sablon frissítve';
$string['eventtemplateviewed'] = 'Megtekintett sablonok';
$string['example'] = 'Minta-adatbázismodul';
$string['excel'] = 'Excel';
$string['expired'] = 'A tevékenység {$a} időpontban lezárult és már nem érhető el.';
$string['export'] = 'Exportálás';
$string['exportaszip'] = 'Exportálás tömörítve';
$string['exportaszip_help'] = '<p align="center"><strong>Exportálás tömörített állományként</strong></p>
<p>A sablonokat számítógépére mentheti, melyeket a későbbiek folyamán az
importálás tömörített állományból funkcióval egy másik adatbázisba tölthet fel.</p>';
$string['exportedtozip'] = 'Exportálva ideiglenes ... tömörített állományba';
$string['exportentries'] = 'Fogalmak exportálása';
$string['exportownentries'] = 'Csak a saját tételeit exportálja? ({$a->mine}/{$a->all})';
$string['failedpresetdelete'] = 'Hiba egy előre beállított tétel törlése közben!';
$string['fieldadded'] = 'Mező hozzáadva';
$string['fieldallowautolink'] = 'Automatikus kapcsolás engedélyezése';
$string['fielddeleted'] = 'Mező törölve';
$string['fielddelimiter'] = 'Mezőhatároló';
$string['fielddescription'] = 'Mezőleírás';
$string['fieldenclosure'] = 'Mezőhatárolás';
$string['fieldheight'] = 'Magasság';
$string['fieldheightlistview'] = 'Magasság felsorolási nézetben';
$string['fieldheightsingleview'] = 'Magasság egyszeres nézetben';
$string['fieldids'] = 'Mezőazonosítók';
$string['fieldmappings'] = 'Mezőillesztések';
$string['fieldmappings_help'] = 'Ez a menü lehetővé teszi adatok megőrzését a meglévő adatbázisból. Egy adott mező adatainak a megőrzéséhez át kell őket másolni egy új mezőbe, ahol majd megjelennek. Bármely mező akár üresen is hagyható, így nem másolódik bele semmilyen információ. Az új mezőbe át nem másolt régi mező az adataival együtt elvész.
Csak azonos típusú mezők másolhatók, így minden lenyíló
menüben más-más mezők szerepelnek. Ügyeljen arra is, hogy egy régi mező csakis egyetlen új mezőbe kerüljön át.';
$string['fieldname'] = 'Mezőnév';
$string['fieldnotmatched'] = 'Állományának alábbi mezői nem szerepelnek az adatbázisban: {$a}';
$string['fieldoptions'] = 'Választási lehetőségek (soronként egy)';
$string['fields'] = 'Mezők';
$string['fieldupdated'] = 'Mező frissítve';
$string['fieldwidth'] = 'Szélesség';
$string['fieldwidthlistview'] = 'Szélesség felsorolási nézetben';
$string['fieldwidthsingleview'] = 'Szélesség egyszeres nézetben';
$string['file'] = 'Állomány';
$string['fileencoding'] = 'Kódolás';
$string['filesnotgenerated'] = 'Nem minden állomány jött létre: {$a}';
$string['filtername'] = 'Adatbázis automatikus kapcsolása';
$string['footer'] = 'Lábléc';
$string['forcelinkname'] = 'Kapcsolat kötelező neve';
$string['foundnorecords'] = 'Nincsenek rekordok (<a href="{$a->reseturl}">Szűrők visszaállítása</a>)';
$string['foundrecords'] = 'Vannak rekordok: {$a->num}/{$a->max} (<a href="{$a->reseturl}">Szűrők visszaállítása</a>)';
$string['fromfile'] = 'Importálás tömörített állományból';
$string['fromfile_help'] = '<p align=\'center\'><strong>Előzetes beállítások importálása tömörített állományból</strong></p>
<p>Az exportálási funkcióval számítógépre mentett előzetes beállítások feltöltésére szolgál.</p>';
$string['generateerror'] = 'Nem minden állomány jött létre!';
$string['header'] = 'Fejléc';
$string['headeraddtemplate'] = 'Fogalmak hozzáadásához vagy szerkesztéséhez megadja a felületet';
$string['headerasearchtemplate'] = 'Meghatározza a részletes keresési felületet';
$string['headercsstemplate'] = 'Más sablonokhoz megadja a helyi CSS-t';
$string['headerjstemplate'] = 'Testre szabott javascript meghatározása a Lista, Egyedi és Hozzáadás sablonokban megjelenő elemek kezeléséhez';
$string['headerlisttemplate'] = 'Többszörös fogalmakhoz megadja a böngésző felületet';
$string['headerrsstemplate'] = 'Megadja a bejegyzések megjelenését RSS-üzenetekben';
$string['headersingletemplate'] = 'Egyetlen fogalomhoz megadja a böngésző felületet';
$string['importentries'] = 'Fogalmak importálása';
$string['importsuccess'] = 'Az előzetes beállítási tétel alkalmazása sikerült.';
$string['includeapproval'] = 'Jóváhagyás állapotának feltüntetése';
$string['includetags'] = 'Címkékkel együtt';
$string['includetime'] = 'Hozzáadás/módosítás idejének feltüntetése';
$string['includeuserdetails'] = 'Felhasználói adatok feltüntetése';
$string['indicator:cognitivedepth'] = 'Kognitív adatbázis';
$string['indicator:cognitivedepth_help'] = 'Ez a jelző a tanuló által az adatbázis kapcsán elért kognitív mélységen alapul.';
$string['indicator:cognitivedepthdef'] = 'Kognitív adatbázis';
$string['indicator:cognitivedepthdef_help'] = 'A résztvevő az elemzési időszak alatt az Adatbázis tevékenységei során kognitív elfoglaltság terén ezt a százalékot érte el (Szintek - Nincs megtekintés, Megtekintés, Leadás)';
$string['indicator:socialbreadth'] = 'Társas adatbázis';
$string['indicator:socialbreadth_help'] = 'Ez a jelző a tanuló által az adatbázis kapcsán elért társas lefedettségen alapul.';
$string['indicator:socialbreadthdef'] = 'Társas adatbázis';
$string['indicator:socialbreadthdef_help'] = 'A résztvevő az elemzési időszak alatt az Adatbázis tevékenységei során társas elfoglaltság terén ezt a százalékot érte el (Szintek - Nincs részvétel, Egyedüli részvétel)';
$string['insufficiententries'] = 'több fogalom szükséges az adatbázis megtekintéséhez';
$string['intro'] = 'Bevezetés';
$string['invalidaccess'] = 'Az oldal elérése hibásan történt';
$string['invalidfieldid'] = 'Hibás mezőazonosító';
$string['invalidfieldname'] = 'Válasszon másik nevet a mezőhöz';
$string['invalidfieldtype'] = 'Hibás mezőtípus';
$string['invalidid'] = 'Hibás adatazonosító';
$string['invalidpreset'] = 'A(z) {$a} nem előzetes beállítás.';
$string['invalidrecord'] = 'Hibás rekord';
$string['invalidurl'] = 'A megadott URL nem érvényes';
$string['jstemplate'] = 'Javascript-sablon';
$string['latitude'] = 'Szélesség';
$string['latlong'] = 'Szélesség/hosszúság';
$string['latlongboth'] = 'Mind a szélesség, mind a hosszúság kitöltendő.';
$string['latlongdownloadallhint'] = 'Minden bejegyzéshez hivatkozás letöltése KML-ként';
$string['latlongkmllabelling'] = 'Hogyan címkézhetők az elemek a KML-állományokban (Google Earth)';
$string['latlonglinkservicesdisplayed'] = 'Megjelenítendő kapcsolási szolgáltatások';
$string['latlongotherfields'] = 'Egyéb mezők';
$string['list'] = 'Felsorolás megtekintése';
$string['listtemplate'] = 'Listasablon';
$string['longitude'] = 'Hosszúság';
$string['manageapproved'] = 'Jóváhagyott elemek szerkesztésének engedélyezése';
$string['manageapproved_help'] = 'Kikapcsolása esetén a jóváhagyott elemeket nem szerkesztheti/törölheti. Csak akkor működik, ha a jóváhagyást előírta.';
$string['mapexistingfield'] = 'Illesztés erre: {$a}';
$string['mapnewfield'] = 'Új mező létrehozása';
$string['mappingwarning'] = 'Minden új mezőhöz nem illesztett régi mező elvész, adatai pedig törlődnek.';
$string['maxentries'] = 'Bejegyzések maximális száma';
$string['maxentries_help'] = '<p align="center"><strong>Maximális fogalomszám</strong></p>

<p>A tevékenységhez egy résztvevő által leadható fogalmak maximális száma.</p>';
$string['maxsize'] = 'Maximális méret';
$string['menu'] = 'Menü';
$string['menuchoose'] = 'Választás...';
$string['missingdata'] = 'A mezőosztályhoz adatazonosítót vagy objektumot kell megadni';
$string['missingfield'] = 'Programozói hiba: mezőosztály meghatározásakor mezőt és/vagy adatot kell megadnia.';
$string['modulename'] = 'Adatbázis';
$string['modulename_help'] = 'Az adatbázis-tevékenységi modullal a résztvevők tételrekordokat hozhatnak létre, tarthatnak fenn és kereshetnek végig. A tételek szerkezetét a tanár mezőszámként adja meg. A mezőtípusok lehetnek jelölőnégyzetek, választógombok, lenyíló menük, szöveges területek, webcímek, képek és feltöltött állományok.

Megjelenésüket sablonokkal szabályozhatja. Az adatbázis-tevékenységeket kurzusok között előre beállítottként megoszthatja, a tanár pedig tételeket importálhat vagy exportálhat.

Bekapcsolt automatikus adatbázis-kapcsolás esetén sor kerül az egyes tételek kurzuson belüli szavakkal vagy kifejezésekkel való automatikus összekapcsolására.

A tanár engedélyezheti megjegyzések hozzáadását a tételekhez. a tételeket a tanárok és a tanulók értékelhetik (utóbbi esetben: csoporttársi értékelés), az értékelések összegezhetők és az osztályozónaplóba bekerülő végső osztályzattá alakíthatók.

Jellemző alkalmazásai:

* Netes hivatkozások, könyvek, könyvszemlék, folyóirat-hivatkozások stb. közösen kialakított gyűjteménye.
* Tanulói fényképek, poszterek, csoporttársi értékelésre szánt honlapok, versek stb. megjelenítése.';
$string['modulenameplural'] = 'Adatbázisok';
$string['more'] = 'Tovább';
$string['moreurl'] = 'Több URL';
$string['movezipfailed'] = 'A tömörített állomány nem helyezhető át';
$string['multientry'] = 'Ismétlődő fogalom';
$string['multimenu'] = 'Menü (többszörös választás)';
$string['multipletags'] = 'Többszörös címke! A sablon nincs elmentve';
$string['newentry'] = 'Új bejegyzés';
$string['newfield'] = 'Új mező létrehozása';
$string['newfield_help'] = 'A mező adatbevitelre ad módot. Az adatbázis-tevékenység minden bejegyzésének különféle mezői lehetnek, pl. adatmező, amellyel a résztvevők egy lenyíló menüből évet, hónapot és napot választhatnak, képmező, amellyel képet tölthetnek föl, vagy jelölőnégyzet mezője, melyben lehetőségek közül választhatnak.

Minden mezőnek egyedi nevet kell adni. A mező leírása nem kötelező.';
$string['noaccess'] = 'Ehhez az oldalhoz nem férhet hozzá';
$string['nodefinedfields'] = 'Az új előre beállított tételhez nincsenek megadva mezők!';
$string['nofieldcontent'] = 'A mező tartalma nem található';
$string['nofieldindatabase'] = 'Az adatbázishoz nincsenek megadva mezők.';
$string['nolisttemplate'] = 'Nincs meghatározva listasablon';
$string['nomatch'] = 'Nincs egyező fogalom!';
$string['nomaximum'] = 'Nincs maximum';
$string['norecords'] = 'Nincsenek bejegyzések az adatbázisban';
$string['nosingletemplate'] = 'Nincs meghatározva egyszeres sablon';
$string['notapproved'] = 'A bejegyzés még nincs jóváhagyva.';
$string['notinjectivemap'] = 'Nem injektív leképezés';
$string['notopenyet'] = 'A tevékenység {$a} időpontig nem elérhető.';
$string['number'] = 'Szám';
$string['numberrssarticles'] = 'RSS-cikkek';
$string['numnotapproved'] = 'Folyamatban';
$string['numrecords'] = '{$a} bejegyzés';
$string['ods'] = '<acronym title="OpenDocument számolótábla">ODS</acronym> (OpenOffice)';
$string['openafterclose'] = 'A megnyitási idő a lezárási idő utánra esik.';
$string['optionaldescription'] = 'Rövid leírás (opcionális)';
$string['optionalfilename'] = 'Állománynév (opcionális)';
$string['other'] = 'Más';
$string['overrwritedesc'] = 'Írja felül a beállított értéket, ha már létezik.';
$string['overwrite'] = 'Felülírás';
$string['overwritesettings'] = 'A jelenlegi beállítások felülírása';
$string['page-mod-data-x'] = 'Bármely adatbázis-tevékenységgel kapcsolatos moduloldal';
$string['pagesize'] = 'Oldalankénti bejegyzés';
$string['participants'] = 'Résztvevők';
$string['picture'] = 'Kép';
$string['pleaseaddsome'] = 'Hozzon létre néhányat alább, illetve a kezdéshez <a href="{$a}">válasszon egy előre megadott készletet</a>.';
$string['pluginadministration'] = 'Adatbázis-tevékenység kezelése';
$string['pluginname'] = 'Adatbázis';
$string['portfolionotfile'] = 'Állomány helyett portfólióba való exportálás (csakis csv és leap2a)';
$string['presetinfo'] = 'Ha előzetes beállításként elmenti, akkor a sablont közzéteszi. Így más felhasználók is használhatják adatbázisaikban.';
$string['presets'] = 'Előzetes beállítások';
$string['privacy:metadata:commentpurpose'] = 'Adatbázisrekordokkal összefüggő megjegyzések';
$string['privacy:metadata:data_content'] = 'Az adatbázis-tevékenység moduljában egy mezőre adott választ képvisel';
$string['privacy:metadata:data_content:content'] = 'Tartalom';
$string['privacy:metadata:data_content:content1'] = '1. kiegészítő tartalom';
$string['privacy:metadata:data_content:content2'] = '2. kiegészítő tartalom';
$string['privacy:metadata:data_content:content3'] = '3. kiegészítő tartalom';
$string['privacy:metadata:data_content:content4'] = '4. kiegészítő tartalom';
$string['privacy:metadata:data_content:fieldid'] = 'Meződefiníció azonosítója';
$string['privacy:metadata:data_records'] = 'Az adatbázis-tevékenység moduljának rekordjait képviseli';
$string['privacy:metadata:data_records:approved'] = 'Jóváhagyás állapota';
$string['privacy:metadata:data_records:groupid'] = 'Csoport';
$string['privacy:metadata:data_records:timecreated'] = 'A rekord létrehozásának időpontja';
$string['privacy:metadata:data_records:timemodified'] = 'A rekord utolsó módosításának időpontja';
$string['privacy:metadata:data_records:userid'] = 'A rekordot létrehozó felhasználó';
$string['privacy:metadata:datafieldnpluginsummary'] = 'Adatbázis-tevékenység moduljának mezői';
$string['privacy:metadata:filepurpose'] = 'Az adatbázisrekordhoz csatolt állomány';
$string['privacy:metadata:ratingpurpose'] = 'Adatbázisrekordok értékelései';
$string['privacy:metadata:tagpurpose'] = 'Adatbázisrekordok címkéi';
$string['radiobutton'] = 'Rádiógombok';
$string['recordapproved'] = 'Bejegyzés jóváhagyva';
$string['recorddeleted'] = 'Bejegyzés törölve';
$string['recorddisapproved'] = 'Nem jóváhagyott fogalom';
$string['recordsnotsaved'] = 'Nem került sor bejegyzés elmentésére. Ellenőrizze a feltöltött állomány formáját.';
$string['recordssaved'] = 'bejegyzés elmentve';
$string['removealldatatags'] = 'Minden adatbáziscímke törlése';
$string['requireapproval'] = 'Jóváhagyás szükséges';
$string['requireapproval_help'] = '<p align="center"><strong>Jóváhagyással</strong></p>

<p>Jóvá kell a tanárnak hagyni a fogalmakat, mielőtt azt a többi tanuló láthatja? Ez a funkció hasznos lehet potenciálisan bántó vagy helytelen tartalmak kiszűréséhez.</p>';
$string['required'] = 'Kitöltendő';
$string['requiredentries'] = 'Teljesítéshez előírt fogalmak (régi)';
$string['requiredentries_help'] = 'Beállítása esetén üzenet közli a teljesítéshez szükséges fogalmak számát.

A tevékenység befejezéséhez szükséges fogalmakhoz az új tevékenység befejezéséhez kapcsolódó "Fogalmak előírása" beállítást kell használni. A beállítás teljes törléséhez állítsa nullára, majd mentse a módosításokat. Használja helyette a tevékenység befejezéséhez kapcsolódó "Fogalmak előírása" beállítást.';
$string['requiredentriestoview'] = 'Megtekintéshez szükséges fogalmak';
$string['requiredentriestoview_help'] = '<p align="center"><strong>Megtekintés előtt szükséges fogalmak száma</strong></p>

<p>Egy résztvevő által leadandó fogalmak száma, mielőtt megnézhetnek bármely fogalmat
ezen adatbázishoz kapcsolódó tevékenység során.</p>';
$string['requiredentrieswarning'] = 'A beállítást a tevékenység befejezéséhez kapcsolódó "Fogalmak előírása" beállítás váltotta fel.';
$string['requiredfield'] = 'Kitöltendő mező';
$string['resetsettings'] = 'Szűrők visszaállítása';
$string['resettemplate'] = 'Sablon visszaállítása';
$string['resizingimages'] = 'Miniatűr képek átméretezése';
$string['rows'] = 'sorok';
$string['rssglobaldisabled'] = 'Kikapcsolva. Lásd a portál beállítási változóit.';
$string['rsstemplate'] = 'RSS-sablon';
$string['rsstitletemplate'] = 'RSS-címsablon';
$string['rsstype'] = 'RSS-hírek ehhez a tevékenységhez';
$string['save'] = 'Mentés';
$string['saveandadd'] = 'Mentés és egy másik hozzáadása';
$string['saveandview'] = 'Mentés és megtekintés';
$string['saveaspreset'] = 'Mentés előzetes beállításként';
$string['saveaspreset_help'] = '<p align="center"><strong>Mentés előzetes beállításként</strong></p>
<p>Ezzel a meglévő sablonokat előzetes beállításként menti el, melyeket
a portálon bárki megtekinthet és használhat. Az előzetes beállítás
megjelenik az előzetes beállítások felsorolásában. Eltávolítása bármikor lehetséges.</p>';
$string['savesettings'] = 'Beállítások mentése';
$string['savesuccess'] = 'A mentés sikerült. Előzetes beállítása az egész portálon elérhető lesz.';
$string['savetemplate'] = 'Sablon mentése';
$string['search'] = 'Keresés';
$string['search:activity'] = 'Adatbázis - tevékenység adatai';
$string['search:entry'] = 'Adatbázis-bejegyzések';
$string['selectedrequired'] = 'Minden kiválasztott szükséges';
$string['showall'] = 'Minden tétel megjelenítése';
$string['single'] = 'Egyetlen megtekintése';
$string['singletemplate'] = 'Egyszeres sablon';
$string['subplugintype_datafield'] = 'Adatbázis mezőjének típusa';
$string['subplugintype_datafield_plural'] = 'Adatbázis mezőjének típusai';
$string['subplugintype_datapreset'] = 'Előre megadott';
$string['subplugintype_datapreset_plural'] = 'Előzetes beállítások';
$string['tagarea_data_records'] = 'Adatrekordok';
$string['tags'] = 'Címkék';
$string['tagsdeleted'] = 'Az adatbáziscímkék törlődtek';
$string['teachersandstudents'] = '{$a->teachers} és {$a->students}';
$string['templates'] = 'Sablonok';
$string['templatesaved'] = 'Sablon elmentve';
$string['text'] = 'Szöveg';
$string['textarea'] = 'Szövegnégyzet';
$string['timeadded'] = 'Időpont hozzáadva';
$string['timemodified'] = 'Időpont módosult';
$string['todatabase'] = 'ehhez az adatbázishoz';
$string['type'] = 'Mezőtípus';
$string['undefinedprocessactionmethod'] = 'Nincs megadva műveletmódszer a Data_Preset-ben a(z) "{$a}" művelet kezeléséhez.';
$string['unsupportedexport'] = 'A(z) ({$a->fieldtype}) nem exportálható.';
$string['updatefield'] = 'Meglévő mező frissítése';
$string['uploadfile'] = 'Állomány feltöltése';
$string['uploadrecords'] = 'Bejegyzések feltöltése állományból';
$string['uploadrecords_help'] = 'A fogalmak feltölthetők szöveges állományból. Ennek formátuma a következő:

* Minden sorban egy rekord szerepel
* Minden rekord vesszőkkel (vagy egyéb határolókkal) elválasztott adatsorból áll
* Az első rekord tartalmazza az állomány többi részhét meghatározó mezőnevek felsorolását.

A mezőhatároló az egyes rekordok mezőit egymástól elválasztó karakter. Általában nem szükséges megadni.';
$string['url'] = 'URL';
$string['usedate'] = 'Keresésben szerepeljen.';
$string['usestandard'] = 'Előzetes beállítás használata';
$string['usestandard_help'] = '<p align="center"><strong>Használat előzetes beállításként</strong></p>
<p>Az egész portálon elérhető sablont használja.</p>
<p> Ha az előzetes beállítást a könyvtárba a \'Mentés előzetes beállításként\'
funkcióval mentette el, akkor törölheti is.</p>';
$string['viewfromdate'] = 'Megtekinthető ekkortól';
$string['viewtodate'] = 'Megtekinthető eddig';
$string['viewtodatevalidation'] = 'Az olvashatóság lejárata nem előzheti meg annak kezdetét.';
$string['wrongdataid'] = 'Hibás adatazonosítót adott meg';
