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
 * Strings for component 'glossary', language 'hu', version '3.10'.
 *
 * @package     glossary
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcategory'] = 'Kategória hozzáadása';
$string['addcomment'] = 'Megjegyzés hozzáadása';
$string['addentry'] = 'Új fogalom hozzáadása';
$string['addingcomment'] = 'Megjegyzés hozzáadása';
$string['alias'] = 'Kulcsszó';
$string['aliases'] = 'Kulcsszó(-szavak)';
$string['aliases_help'] = '<p>A fogalomtár minden eleméhez kulcsszó (vagy szinonima) kapcsolható.</p>

<p><strong>A szinonimákat új sorban kell megadni</strong> (vessző nélkül).</p>

<p>A szinonimákat a fogalom alternatíváját jelentő szóként vagy kifejezésként
használhatja. Ha például a fogalomtár automatikus kapcsolási szűrőjét használja,
a szinonimák (és a fogalom fő neve) alapján dől el, mely szavak kapcsolódnak majd ehhez a fogalomhoz.</p>';
$string['allcategories'] = 'Minden kategória';
$string['allentries'] = 'MIND';
$string['allowcomments'] = 'Megjegyzések engedélyezése';
$string['allowcomments_help'] = '<p>Lehetővé teheti mások számára, hogy megjegyzéseket fűzzenek a fogalomtárban
szereplő fogalmakhoz.</p>

<p>Ezt az opciót be-, illetve kikapcsolhatja.</p>';
$string['allowduplicatedentries'] = 'Lehetnek ismétlődő fogalmak';
$string['allowduplicatedentries_help'] = '<p>Ha bekapcsolja ezt az opciót, egyszerre több fogalmat használhat ugyanazon fogalomnév alatt.</p>';
$string['allowprintview'] = 'Nyomtatási nézet engedélyezése';
$string['allowprintview_help'] = '<p>A tanulók használhatják a fogalomtár nyomtatási képét.</p>

<p>Ennek engedélyezéséről itt dönthet.</p>

<p>A tanárok a nyomtatási képet mindig használhatják.</p>';
$string['andmorenewentries'] = 'és  {$a} új fogalom';
$string['answer'] = 'Válasz';
$string['approvaldisplayformat'] = 'Jóváhagyás megjelenítési formája';
$string['approvaldisplayformat_help'] = 'Szójegyzéktételek jóváhagyásakor használhat más megjelenítésű jóváhagyást.';
$string['approve'] = 'Jóváhagy';
$string['areaattachment'] = 'Csatolt állományok';
$string['areaentry'] = 'Meghatározások';
$string['areyousuredelete'] = 'Biztosan törölni akarja ezt a fogalmat?';
$string['areyousuredeletecomment'] = 'Biztosan törölni akarja ezt a megjegyzést?';
$string['areyousureexport'] = 'Biztosan ide akarja exportálni ezt a fogalmat';
$string['ascending'] = 'növekvő';
$string['attachment'] = 'Csatolt állomány';
$string['attachment_help'] = 'Bármely fogalomhoz állományokat csatolhat.';
$string['author'] = 'szerző';
$string['authorview'] = 'Böngészés szerző szerint';
$string['back'] = 'Vissza';
$string['cachedef_concepts'] = 'Fogalomkapcsolás';
$string['cantinsertcat'] = 'A kategória nem szúrható be';
$string['cantinsertrec'] = 'A rekord nem szúrható be';
$string['cantinsertrel'] = 'A relációs kategóriafogalom nem szúrható be';
$string['casesensitive'] = 'A kis- és nagybetűk különböznek';
$string['casesensitive_help'] = '<p>Ez a beállítás azt határozza meg, hogy a kizárólag nagy- vagy kizárólag kisbetűk
szerinti egyezés szükséges-e ezen fogalmak automatikus összekapcsolása során.</p>

<p>Ha például ez az opció be van kapcsolva, akkor a "html" szó egy fórumra küldött üzenetben NEM
kapcsolódik össze a fogalomtárban szereplő "HTML" elnevezésű fogalmakkal.</p>';
$string['cat'] = 'kat';
$string['categories'] = 'Kategóriák';
$string['category'] = 'Kategória';
$string['categorydeleted'] = 'A kategória törölve';
$string['categoryview'] = 'Böngészés kategória szerint';
$string['changeto'] = 'módosítás erre: {$a}';
$string['cnfallowcomments'] = 'Állítsa be, hogy egy fogalomtárhoz tartozó fogalmakhoz alapesetben kapcsolódhassanak-e megjegyzések.';
$string['cnfallowdupentries'] = 'Állítsa be, hogy egy fogalomtárban alapesetben egy fogalom szerepelhet-e többször.';
$string['cnfapprovalstatus'] = 'Állítsa be, hogy egy tanuló által beküldött fogalomnak alapesetben milyen legyen a jóváhagyása.';
$string['cnfcasesensitive'] = 'Állítsa be, hogy egy kapcsolt fogalom esetén alapesetben a kis- és nagybetűk különbözzenek-e.';
$string['cnfdefaulthook'] = 'Adja meg a fogalomtár első használatakor megjelenő választást.';
$string['cnfdefaultmode'] = 'Válassza ki a fogalomtár első használatakor megjelenő keretet.';
$string['cnffullmatch'] = 'Állítsa be, hogy egy kapcsolt fogalom  kis- és nagybetűk tekintetében alapesetben egyezzen-e a célszöveggel.';
$string['cnflinkentry'] = 'Állítsa be, hogy egy fogalom alapesetben automatikusan össze legyen-e kapcsolva.';
$string['cnflinkglossaries'] = 'Állítsa be, hogy egy fogalomtár alapesetben automatikusan össze legyen-e kapcsolva.';
$string['cnfrelatedview'] = 'Válassza ki az automatikus kapcsoláshoz és a fogalomnézethez használandó megjelenítési formát.';
$string['cnfshowgroup'] = 'Adja meg, látható legyen-e a csoportszünet.';
$string['cnfsortkey'] = 'Válassza ki az alapbeállítás szerinti válogatási kulcsot.';
$string['cnfsortorder'] = 'Válassza ki az alapbeállítás szerinti válogatási sorrendet.';
$string['cnfstudentcanpost'] = 'Állítsa be, hogy a tanulók alapesetben beküldhetnek-e fogalmakat.';
$string['cnftabs'] = 'A szójegyzékformához válasszon látható füleket.';
$string['comment'] = 'Megjegyzés';
$string['commentdeleted'] = 'A megjegyzés törölve.';
$string['comments'] = 'Megjegyzések';
$string['commentson'] = 'Megjegyzések ehhez';
$string['commentupdated'] = 'A megjegyzés frissítve.';
$string['completionentries'] = 'A tanulónak ezen fogalmakat kell létrehozni:';
$string['completionentriesdesc'] = 'A tanulónak legalább {$a} bejegyzést létre kell hoznia';
$string['completionentriesgroup'] = 'Fogalmak előírása';
$string['concept'] = 'Fogalom';
$string['concepts'] = 'Fogalmak';
$string['configenablerssfeeds'] = 'Ezzel kapcsolható be az RSS-hír az összes fogalomtárhoz. Ettől függetlenül az egyes fogalomtárak beállításainál a híreket kézzel kell bekapcsolni.';
$string['current'] = 'Jelenlegi rendezés: {$a}';
$string['currentglossary'] = 'Jelenlegi fogalomtár';
$string['date'] = 'dátum';
$string['dateview'] = 'Böngészés dátum szerint';
$string['defaultapproval'] = 'Alapesetben jóváhagyva';
$string['defaultapproval_help'] = '<p>Ezzel a beállítással a tanár meghatározhatja, hogy mi történjen a tanulók által
hozzáadott új fogalmakkal. Lehetőség van arra, hogy automatikusan bárki elérje őket, ellenkező esetben a
tanárnak egyenként kell elvégezni a jóváhagyást.</p>';
$string['defaulthook'] = 'Alapkapocs';
$string['defaultmode'] = 'Alapbeállítás szerinti üzemmód';
$string['defaultsortkey'] = 'Alapbeállítás szerinti rendezési kulcs';
$string['defaultsortorder'] = 'Alapbeállítás szerinti rendezés';
$string['definition'] = 'Meghatározás';
$string['definitions'] = 'Meghatározások';
$string['deletecategory'] = 'Kategória törlése';
$string['deleteentry'] = 'Fogalom törlése';
$string['deleteentrya'] = 'Törlendő: {$a}';
$string['deletenotenrolled'] = 'Be nem iratkozott felhasználók bejegyzéseinek törlése';
$string['deletingcomment'] = 'Megjegyzés törlése';
$string['deletingnoneemptycategory'] = 'A kategória törlésével a benne lévő fogalmak nem törlődnek - besorolatlan jelzést kapnak.';
$string['descending'] = 'csökkenő';
$string['destination'] = 'Importált fogalmak helye';
$string['destination_help'] = '<p>Itt adhatja meg, hová kívánja importálni a fogalmakat:</p>
<ul>
<li><strong>Jelenlegi fogalomtár:</strong> A fogalmakat a jelenleg nyitott fogalomtárba importálja.</li>
<li><strong>Új fogalomtár:</strong> A kiválasztott importálási állományban talált
információ alapján létrehoz egy új fogalomtárat és az új fogalmakat ebbe rakja.</li>
</ul>';
$string['disapprove'] = 'Jóváhagyás elvetése';
$string['displayformat'] = 'Kijelzési forma';
$string['displayformat_help'] = '7 megjelenítési forma közül választhat:
* Egyszerű szótárforma - A szerző nincs megjelenítve és a csatolt állományok hivatkozásokként láthatók.
* Folyamatos, szerző nélkül - A fogalmak követik egymást, csak a szerkesztő ikonok választják el őket egymástól.
* Teljes, szerzővel együtt - Fórumszerű kijelzési forma, tartalmazza a szerző adatait is. A csatolt állományok hivatkozásokként láthatók
* Teljes, szerző nélkül - Fórumszerű kijelzési forma, szerző adatai nélkül. A csatolt állományok hivatkozásokként láthatók
* Enciklopédia - Akárcsak a teljes forma szerzővel együtt, de a csatolt képek a sorba beszúrva láthatók.
* Fogalomlista - A fogalmakat hivatkozások formájában sorolja föl.
* GYIK - A KÉRDÉS és VÁLASZ szavakat a fogalom, ill. a meghatározás után beilleszti';
$string['displayformatcontinuous'] = 'Folyamatos, szerző nélkül';
$string['displayformatdefault'] = 'Alapesetben a kijelzéssel megegyező';
$string['displayformatdictionary'] = 'Egyszerű szótárforma';
$string['displayformatencyclopedia'] = 'Enciklopédia';
$string['displayformatentrylist'] = 'Fogalomlista';
$string['displayformatfaq'] = 'GYIK';
$string['displayformatfullwithauthor'] = 'Teljes, szerzővel';
$string['displayformatfullwithoutauthor'] = 'Teljes, szerző nélkül';
$string['displayformats'] = 'Kijelzési formák';
$string['displayformatssetup'] = 'Kijelzési formák beállítása';
$string['duplicatecategory'] = 'Ismétlődő kategória';
$string['duplicateentry'] = 'Ismétlődő fogalom';
$string['editalways'] = 'Bármikor szerkeszthető';
$string['editalways_help'] = '<p>Ezzel határozhatja meg, hogy a tanulók fogalmaikat bármikor szerkeszthetik-e.</p>

<p>Lehetőségek:</p>

<ul>
<li><strong>Igen:</strong> A fogalmak bármikor szerkeszthetők.</li>

<li><strong>Nem:</strong> A fogalmak megadott ideig szerkeszthetők.</li>
</ul>';
$string['editcategories'] = 'Kategóriák szerkesztése';
$string['editcategory'] = 'Kategória szerkesztése';
$string['editentry'] = 'Bejegyzés szerkesztése';
$string['editentrya'] = 'Elem szerkesztése: {$a}';
$string['editingcomment'] = 'Megjegyzés szerkesztése';
$string['entbypage'] = 'Oldalankénti fogalmak száma';
$string['entries'] = 'Bejegyzések';
$string['entrieswithoutcategory'] = 'Kategória nélküli fogalmak';
$string['entry'] = 'Fogalom';
$string['entryalreadyexist'] = 'A fogalom már létezik';
$string['entryapproved'] = 'Ezt a fogalmat már jóváhagyták';
$string['entrydeleted'] = 'A fogalom törölve';
$string['entryexported'] = 'A fogalom exportálása sikerült';
$string['entryishidden'] = '(ez a fogalom most rejtve van)';
$string['entryleveldefaultsettings'] = 'Fogalomszintű alapbeállítások';
$string['entrylink'] = 'Kapcsolódás:  {$a}';
$string['entrynotapproved'] = 'A bejegyzés nincs jóváhagyva';
$string['entrysaved'] = 'A fogalom mentése megtörtént';
$string['entryupdated'] = 'A fogalom frissítése megtörtént';
$string['entryusedynalink'] = 'A fogalom automatikusan kapcsolódjon';
$string['entryusedynalink_help'] = '<p>Ennek a bekapcsolásakor a fogalom összekapcsolása automatikusan megtörténik, ha a fogalom vagy kifejezés
megjelenik a kurzus további részeiben. Ebbe beletartoznak a fórumüzenetek, a belső tananyagok,
a heti összesítések, naplók stb.  </p>

<p>Ha valamely szöveget (mondjuk egy fórumüzenetben) nem kíván összekapcsolni,
vegye körbe a szöveget &lt;nolink&gt; és &lt;/nolink&gt; címkékkel.</p>

<p>A funkció bekapcsolásához a fogalomtár szintjén működnie kell az automatikus kapcsolásnak.</p>';
$string['errcannoteditothers'] = 'Mások fogalmait nem szerkesztheti.';
$string['errconceptalreadyexists'] = 'A fogalom már létezik. A fogalomtárban nem szerepelhetnek ismétlődések.';
$string['errdeltimeexpired'] = 'Nem törölheti. Lejárt az idő!';
$string['erredittimeexpired'] = 'A fogalom szerkesztési ideje lejárt.';
$string['errorparsingxml'] = 'Hiba az állomány feldolgozása közben. Ellenőrizze, érvényes-e az XML-szintaxis.';
$string['eventcategorycreated'] = 'Kategória létrehozva';
$string['eventcategorydeleted'] = 'Kategória törölve';
$string['eventcategoryupdated'] = 'Kategória frissítve';
$string['evententryapproved'] = 'Bejegyzés jóváhagyva';
$string['evententrycreated'] = 'Bejegyzés létrehozva';
$string['evententrydeleted'] = 'Bejegyzés törölve';
$string['evententrydisapproved'] = 'A bejegyzést nem hagyták jóvá.';
$string['evententryupdated'] = 'Bejegyzés frissítve';
$string['evententryviewed'] = 'Bejegyzés megtekintve';
$string['explainaddentry'] = 'Új fogalom hozzáadása ehhez a fogalomtárhoz. A fogalom és a meghatározás kötelezően kitöltendő.';
$string['explainall'] = 'MINDEN fogalom megjelenítése egyetlen oldalon';
$string['explainalphabet'] = 'Fogalomtár böngészése ezzel az indexszel';
$string['explainexport'] = 'A fogalomtárbeli fogalmak exportálásához kattintson az alábbi gombra.<br />Ebbe vagy egy másik kurzusba bármikor importálhatja.<p>Ne feledje, hogy a csatolt állományok (pl. képek) és a szerzők az exportálásból kimaradnak.</p>';
$string['explainimport'] = 'Meg kell adnia az importálandó állományt és meg kell határoznia a folyamat kritériumait.<p>Adja le kérését és tekintse át az eredményeket.</p>';
$string['explainspecial'] = 'Megjeleníti a nem betűvel kezdődő fogalmakat';
$string['exportedentry'] = 'Exportált fogalom';
$string['exportentries'] = 'Fogalmak exportálása';
$string['exportentriestoxml'] = 'Fogalmak exportálása XML-állományba';
$string['exportfile'] = 'Fogalmak exportálása állományba';
$string['exportglossary'] = 'Fogalomtár exportálása';
$string['exporttomainglossary'] = 'Exportálás a fő fogalomtárba';
$string['filetoimport'] = 'Importálandó állomány';
$string['filetoimport_help'] = '<p>Válassza ki a gépéről azt az XML-állományt, amely tartalmazza az importálandó fogalmakat.</p>';
$string['fillfields'] = 'A fogalom és a meghatározás kötelezően kitöltendő.';
$string['filtername'] = 'A fogalomtár automatikus kapcsolása';
$string['fullmatch'] = 'Csak egész szavak egyezése';
$string['fullmatch_help'] = '<p>Ha be van kapcsolva az automatikus összekapcsolás, akkor ezen beállítás alkalmazásával csak
egész szavak összekapcsolására van mód.</p>

<p>Például a fogalomtárban szereplő "elem" fogalom esetén nem jön létre kapcsolat a "vegyelemzés"
szó belsejében.</p>';
$string['glossary:addinstance'] = 'Új szójegyzék hozzáadása';
$string['glossary:approve'] = 'Jóváhagyás és a jóváhagyottak elvetése';
$string['glossary:comment'] = 'Megjegyzések létrehozása';
$string['glossary:export'] = 'Fogalmak exportálása';
$string['glossary:exportentry'] = 'Egyetlen fogalom exportálása';
$string['glossary:exportownentry'] = 'Egyetlen saját fogalom exportálása';
$string['glossary:import'] = 'Fogalmak importálása';
$string['glossary:managecategories'] = 'Kategóriák kezelése';
$string['glossary:managecomments'] = 'Megjegyzések kezelése';
$string['glossary:manageentries'] = 'Fogalmak kezelése';
$string['glossary:rate'] = 'Fogalmak értékelése';
$string['glossary:view'] = 'Fogalomtár megtekintése';
$string['glossary:viewallratings'] = 'Egyének általi összes nyers értékelés megtekintése';
$string['glossary:viewanyrating'] = 'Bárki által kapott összes értékelés megtekintése';
$string['glossary:viewrating'] = 'Az Ön által kapott összes értékelés megtekintése';
$string['glossary:write'] = 'Új fogalmak létrehozása';
$string['glossaryleveldefaultsettings'] = 'Fogalomtárszintű alapbeállítások';
$string['glossarytype'] = 'Fogalomtár típusa';
$string['glossarytype_help'] = 'A fő fogalomtár olyan fogalomtár, amelybe bármely másodlagos
fogalomtárból fogalmakat importálhat. Kurzusonként csak egy fő fogalomtárat használhat, Ha nincs szükség fogalmak importálására, a kurzus összes fogalomtára lehet másodlagos
fogalomtár.';
$string['guestnoedit'] = 'Vendégek nem szerkeszthetnek szójegyzékeket.';
$string['importcategories'] = 'Kategóriák importálása';
$string['importedcategories'] = 'Importált kategóriák';
$string['importedentries'] = 'Importált fogalmak';
$string['importentries'] = 'Fogalmak importálása';
$string['importentriesfromxml'] = 'Fogalmak importálása XML-állományból';
$string['includegroupbreaks'] = 'Csoportszünetek beiktatása';
$string['indicator:cognitivedepth'] = 'Kognitív szójegyzék';
$string['indicator:cognitivedepth_help'] = 'Ez a jelző a tanuló által a szójegyzék kapcsán elért kognitív mélységen alapul.';
$string['indicator:cognitivedepthdef'] = 'Kognitív szójegyzék';
$string['indicator:cognitivedepthdef_help'] = 'A résztvevő az elemzési időszak alatt a Szójegyzék tevékenységei során kognitív elfoglaltság terén ezt a százalékot érte el (Szintek - Nincs megtekintés, Megtekintés, Leadás)';
$string['indicator:socialbreadth'] = 'Társas szójegyzék';
$string['indicator:socialbreadth_help'] = 'Ez a jelző a tanuló által a szójegyzék kapcsán elért társas lefedettségen alapul.';
$string['indicator:socialbreadthdef'] = 'Társas szójegyzék';
$string['indicator:socialbreadthdef_help'] = 'A résztvevő az elemzési időszak alatt a Szójegyzék tevékenységei során társas elfoglaltság terén ezt a százalékot érte el (Szintek - Nincs részvétel, Egyedüli részvétel)';
$string['isglobal'] = 'Ez a fogalomtár globális?';
$string['isglobal_help'] = 'A rendszergazda egy adott fogalomtárat globálisként definiálhat. Az ilyen fogalomtárak az egész portált átfogó
kapcsolatokat hoznak létre.';
$string['letter'] = 'betű';
$string['linkcategory'] = 'Automatikusan kapcsolja ezt a kategóriát';
$string['linkcategory_help'] = '<p>Eldöntheti, hogy egy-egy kategória automatikusan legyen-e kapcsolva, vagy sem.</p>

<p>Megjegyzés: A kategóriák között a különbségtétel betűérzékeny, teljes
illesztés alapján történik.</p>';
$string['linking'] = 'Automatikus kapcsolás';
$string['mainglossary'] = 'Fő fogalomtár';
$string['maxtimehaspassed'] = 'Ennek a megjegyzésnek ({$a}) a szerkesztésére rendelkezésre álló idő letelt!';
$string['modulename'] = 'Fogalomtár';
$string['modulename_help'] = 'A fogalomtárral szótárszerű meghatározásokat hozhat létre. A fogalmakat automatikusan összekapcsolhatja a kurzusban bárhol megjelenő szavakkal és kifejezésekkel.';
$string['modulenameplural'] = 'Fogalomtárak';
$string['newentries'] = 'Új fogalomtárbeli fogalmak';
$string['newglossary'] = 'Új fogalomtár';
$string['newglossarycreated'] = 'Létrejött az új fogalomtár.';
$string['newglossaryentries'] = 'Új fogalomtárbeli fogalmak:';
$string['nocomment'] = 'Nincs megjegyzés';
$string['nocomments'] = '(Nincs megjegyzés ehhez a fogalomhoz)';
$string['noconceptfound'] = 'Nincs fogalom vagy meghatározás.';
$string['noentries'] = 'Ebben a részben nincs fogalom';
$string['noentry'] = 'Nincs fogalom.';
$string['nopermissiontodelcomment'] = 'Mások megjegyzéseit nem törölheti!';
$string['nopermissiontodelinglossary'] = 'A szójegyzékhez nem adhat hozzá megjegyzéseket!';
$string['nopermissiontoviewresult'] = 'Csak a saját fogalmaihoz kapcsolódó eredményeket tekintheti meg';
$string['notapproved'] = 'a szójegyzék bejegyzése még nincs jóváhagyva';
$string['notcategorised'] = 'Nincs kategorizálva';
$string['numberofentries'] = 'Fogalmak száma';
$string['onebyline'] = '(soronként egy)';
$string['page-mod-glossary-edit'] = 'A fogalomtár bövítésének/szerkesztésének az oldala';
$string['page-mod-glossary-view'] = 'A fogalomtár megtekintése szerkesztésének az oldala';
$string['page-mod-glossary-x'] = 'A A fogalomtármodul bármely oldala';
$string['pluginadministration'] = 'Fogalomtár kezelése';
$string['pluginname'] = 'Fogalomtár';
$string['popupformat'] = 'Előugró forma';
$string['print'] = 'Nyomtatás';
$string['printerfriendly'] = 'Nyomtatóbarát változat';
$string['printviewnotallowed'] = 'Nyomtatási kép nincs engedélyezve';
$string['privacy'] = 'Az eredmények bizalmas volta';
$string['privacy:metadata:core_comments'] = 'A szójegyzék meghatározásaira vonatkozó megjegyzések tárolása a core_comment rendszerrel történik';
$string['privacy:metadata:core_files'] = 'A szójegyzék meghatározásaihoz kapcsolódó állományok tárolása a core_files rendszerrel történik';
$string['privacy:metadata:core_rating'] = 'A szócikkekhez kapcsolódó értékelések tárolása a core_rating rendszerrel történik';
$string['privacy:metadata:core_tag'] = 'A szójegyzék meghatározásaihoz kapcsolódó címkék tárolása a core_tag rendszerrel történik';
$string['privacy:metadata:glossary_entries'] = 'A felhasználó adott szójegyzékhez kapcsolódó szócikkeinek az adatai';
$string['privacy:metadata:glossary_entries:attachment'] = 'A felhasználó által hozzáadott szócikk csatolmánya';
$string['privacy:metadata:glossary_entries:concept'] = 'A felhasználó által hozzáadott szócikk fogalma';
$string['privacy:metadata:glossary_entries:definition'] = 'A felhasználó által hozzáadott szócikk meghatározása';
$string['privacy:metadata:glossary_entries:glossaryid'] = 'A szójegyzék-tevékenység azonosítója';
$string['privacy:metadata:glossary_entries:timemodified'] = 'A szócikk felhasználó általi módosításának időbélyegzője';
$string['privacy:metadata:glossary_entries:userid'] = 'A szócikket hozzáadó felhasználó azonosítója';
$string['question'] = 'Kérdés';
$string['rejectedentries'] = 'Elutasított fogalmak';
$string['rejectionrpt'] = 'Jelentés az elutasításról';
$string['removeallglossarytags'] = 'Az összes szójegyzékcímke eltávolítása';
$string['resetglossaries'] = 'Fogalom törlése';
$string['resetglossariesall'] = 'Az összes szójegyzék fogalmainak törlése';
$string['rssarticles'] = 'Friss RSS-cikkek száma';
$string['rssarticles_help'] = '<p>Ezzel az opcióval kiválaszthatja, hogy hány cikk kerüljön az RSS-hírek közé.</p>

<p>A legtöbb fogalomtár esetén egy 5 és 20 közötti szám megadása elegendő.  Növelje meg a
számot, ha a fogalomtárat sűrűn használja.</p>';
$string['rsssubscriberss'] = 'RSS-hír megjelenítése a(z) \'{$a}\' fogalmakhoz';
$string['rsstype'] = 'A tevékenységhez tartozó RSS-hírek';
$string['rsstype_help'] = 'RSS-híreket kapcsolhat ehhez a tevékenységhez, ha kiválasztja a szerzővel szereplő vagy szerző nélküli fogalmakat mint a hírben megjelenőket.';
$string['search:activity'] = 'Szójegyzék tevékenységei';
$string['search:entry'] = 'Szójegyzék bejegyzései';
$string['searchindefinition'] = 'Keresés a teljes szövegben';
$string['secondaryglossary'] = 'Másodlagos fogalomtár';
$string['showall'] = 'Összes megjelenítése';
$string['showall_help'] = '<p>Azt, hogy egy felhasználó miként böngészhet a fogalomtárban, akár módosíthatja is.
A böngészés és a keresés mindig elérhető, de még három további lehetőséget is
meghatározhat:</p>

<p><strong>Speciális megjelenítés</strong> Be- és kikapcsolja a speciális karakterekkel, például
@, # stb. való böngészést.</p>

<p><strong>Betűrend megjelenítése</strong> Be- és kikapcsolja az ábécé betűivel való
böngészést.</p>

<p><strong>Összes megjelenítése</strong> Be- és kikapcsolja az összes fogalom egyszerre való
megjelenítését.</p>';
$string['showalphabet'] = 'Betűrend megjelenítése';
$string['showalphabet_help'] = 'Bekapcsolása esetén a felhasználó az ábécé betűivel böngészhet a fogalomtárban.';
$string['showspecial'] = 'Speciális megjelenítés';
$string['showspecial_help'] = '<p>Azt, hogy egy felhasználó miként böngészhet a fogalomtárban, akár módosíthatja is.
A böngészés és a keresés mindig elérhető, de még három további lehetőséget is
meghatározhat:</p>

<p><strong>Speciális megjelenítés</strong> Be- és kikapcsolja a speciális karakterekkel, például
@, # stb. való böngészést.</p>

<p><strong>Betűrend megjelenítése</strong> Be- és kikapcsolja az ábécé betűivel való
böngészést.</p>

<p><strong>Összes megjelenítése</strong> Be- és kikapcsolja az összes fogalom egyszerre való
megjelenítését.</p>';
$string['sortby'] = 'Rendezési szempont';
$string['sortbycreation'] = 'Létrehozás dátuma szerint';
$string['sortbylastupdate'] = 'Utolsó frissítés szerint';
$string['sortchronogically'] = 'Időrendi válogatás';
$string['special'] = 'Speciális';
$string['standardview'] = 'Böngészés betűrend szerint';
$string['studentcanpost'] = 'A tanulók hozzáadhatnak fogalmakat';
$string['tagarea_glossary_entries'] = 'Szójegyzék egységei';
$string['tagsdeleted'] = 'A szójegyzékcímkék eltávolítása megtörtént';
$string['totalentries'] = 'Fogalom összesen';
$string['usedynalink'] = 'Fogalmak automatikus összekapcsolása';
$string['usedynalink_help'] = '<p>Ennek a funkciónak a bekapcsolásakor az adott fogalomtárban lévő fogalmak automatikusan
összekapcsolódnak az ezen kurzusban bárhol előforduló szavakkal vagy kifejezésekkel, így a
fórumüzenetekkel, a belső tananyagokkal, a heti összegzésekkel, a naplókkal stb. </p>

<p>Ha egy konkrét szöveget nem kíván összekapcsolni (mondjuk egy fórumüzenet esetén), akkor a
szöveget <nolink> és </nolink> jelekkel kell közrefogni.</p>

<p>Megjegyzendő, hogy a kategórianevek úgyszintén össze vannak kapcsolva.</p>';
$string['visibletabs'] = 'Látható fülek';
$string['waitingapproval'] = 'Jóváhagyásra vár';
$string['warningstudentcapost'] = '(Csak ha a fogalomtár nem fő fogalomtár)';
$string['withauthor'] = 'Fogalmak szerzővel együtt';
$string['withoutauthor'] = 'Fogalmak szerző nélkül';
$string['writtenby'] = 'írta';
$string['youarenottheauthor'] = 'Nem Ön írta ezt a megjegyzést, ezért nem is szerkesztheti.';
