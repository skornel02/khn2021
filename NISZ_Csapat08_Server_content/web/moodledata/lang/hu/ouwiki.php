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
 * Strings for component 'ouwiki', language 'hu', version '3.10'.
 *
 * @package     ouwiki
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actionheading'] = 'Lépések';
$string['add'] = 'Hozzáadás';
$string['addannotation'] = 'Széljegyzet hozzáadása';
$string['addedbegins'] = '[Ide kerül a beszúrt szöveg]';
$string['addedends'] = '[A beszúrt szöveg  vége]';
$string['addnewsection'] = 'Új szakasz hozzáadása az oldalhoz';
$string['advice_annotate'] = '<p> Lássa el jegyzettel az alábbi oldalt, majd kattintson a <strong>Módosítások mentése</strong> gombra. </p><ul><li> A jegyzet beszúrásához kattintson az egyik jegyzetjelölőre és írja be a kívánt szöveget. </li><li> Az új és a meglévő széljegyzetek az alábbi űrlapon lévő összes szöveg törlésével távolíthatók el. </li><li> A zárójelben lévő számok a széljegyzetekre utalnak. </li></ul>';
$string['advice_diff'] = 'A régebbi verzió a bal oldalon <span class=\'accesshide\'> a Régebbi verzió címszó alatt jelenik meg,</span> ahol a törölt szöveg ki van emelve. A hozzáadott szöveg az újabb változatban a jobb oldalon <span class=\'accesshide\'>Az Újabb verzió címszó alatt látható.
Minden változást egy hozzáadott vagy törölt szövegpár előtt és után megjelnő képpár jelez a megfelelő alternatív szöveggel.</span>';
$string['advice_edit'] = '<p>Az alábbi oldal szerkesztése. </p><ul><li> Készítsen egy másik oldalra vezető ugrópontot; ehhez írja az oldal nevét dupla szögletes zárójelbe: [[oldal neve]]. Az ugrópont akkor lesz aktív, ha elmenti a változásokat. </li><li> Új oldal létrehozásához először a fenti módon készítsen hozzá egy ugrópontot. {$a} </li></ul>';
$string['advice_history'] = '<p> Az alábbi táblázat az <a href="{$a}">aktuális oldal</a> összes változását mutatja. </p><p> Megnézheti a régi verziókat, illetve azt, hogy mi változott egy adott verzió esetén. Ha két változatot szeretne összehasonlítani, válassza ki a megfelelő jelölőnégyzeteket és kattintson  "A kiválasztottak összehasonlítása" pontra. </p>';
$string['advice_missingpage'] = 'Az oldalra ugrópont mutat, de még nem hozták létre';
$string['advice_missingpages'] = 'Az oldalakra ugrópontok mutatnak, de még nem hozták őket létre';
$string['advice_viewdeleted'] = 'Az oldal törölt változatát látja.';
$string['advice_viewold'] = 'Az oldal régebbi változatát látja.';
$string['advice_wikirecentchanges_changes'] = '<p> Az alábbi táblázat felsorolja a wikin bármely oldalán eszközölt összes módosítást, kezdve a legújabb módosításokat. Az egyes oldalak legújabb verziója kiemelten jelenik meg. </p><p> Az ugrópontokkal úgy tekinthet meg egy oldalt, ahogy az egy konkrét változás után vagy az pillanatban módosult. </p>';
$string['advice_wikirecentchanges_changes_nohighlight'] = '<p> Az alábbi táblázat felsorolja a wiki bármely oldalán végrehajtott összes módosítást, kezdve a legújabb módosításokkal. </p><p> Az ugrópontokkal megtekintheti az oldalt egy konkrét változás utáni vagy az adott pillanatban érvényes állapotában. </p>';
$string['advice_wikirecentchanges_pages'] = '<p> A táblázat azt mutatja, hogy mikor kerültek az egyes oldalak a wikibe, kezdve a legutóbb létrehozottal. </p>';
$string['ajaxnotenabled'] = 'Profiljában nincs bekapcsolva az AJAX';
$string['allowediting_help'] = '<p>Bekapcsolása esetén a wiki az adott időpontig csak olvasható üzemmódba kerül. Ekkor a felhasználók látják az oldalakat, mozoghatnak köztük, megnézhetik az előzményeiket, részt vehetnek a megvitatásban, de nem szerkeszthetik őket. </p><h2> Szerkesztés kikapcsolása ekkortól </h2><p> Bekapcsolása esetén a wiki az adott időponttól csak olvasható üzemmódba kerül. </p>';
$string['annotate'] = 'Jegyzettel ellát';
$string['annotatingpage'] = 'Oldal ellátása széljegyzettel';
$string['annotationmarker'] = 'Széljegyzetjelölő';
$string['annotations'] = 'Széljegyzetek';
$string['annotationsystem'] = 'Jegyzetelő rendszer';
$string['annotationsystem_help'] = 'Engedéllyel rendelkező felhasználók számára bekapcsolja a Széljegyzet fület, mely segítségével jegyzetekkel láthat el wikioldalakat (például tanár megjegyzései egy tanuló munkájához).';
$string['attachments'] = 'Mellékletek';
$string['cannotlockpage'] = 'Az oldal zárolása, így módosításainak mentése nem sikerült';
$string['changebutton'] = 'Módosítás';
$string['changedby'] = 'Módosította';
$string['changes'] = 'módosítások';
$string['changesnav'] = 'Módosítások';
$string['collapseallannotations'] = 'Széljegyzetek összecsukása';
$string['collapseannotation'] = 'Széljegyzet összecsukása';
$string['compare'] = 'Összehasonlítás';
$string['compareselected'] = 'Kiválasztott összehasonlítása';
$string['completion_help'] = '<ul><li> Ha az &quot;Új oldalak előírása&quot; pontot választja, a wiki akkor lesz készként megjelölve, ha a felhasználó létrehozta a megadott számú oldalt. Ez esetben a felhasználók üres oldalakkal kezdenek, de valaki más is létrehozhatja az oldalt. </li><li> Ha a &quot;Szerkesztés előírása&quot; pontot választja, a wiki akkor lesz készként megjelölve, ha a felhasználó végrehajtott bizonyos számú szerkesztést. Ez lehet több oldal vagy egy oldal többszöri szerkesztése. </li></ul><p> Egy oldal első változata is szerkesztésnek számít, ezért ha azt szeretné, hogy valaki a létrehozáson  <i>túl </i> legalább egy szerkesztést és végrehajtson, akkor az oldalakat állítsa 1-re, a szerkesztéseket 2-re. </p>';
$string['completionedits'] = 'A felhasználónak szerkesztést kell végrehajtania';
$string['completioneditsgroup'] = 'Szerkesztés előírása';
$string['completioneditshelp'] = 'befejezéshez szerkesztés előírása';
$string['completionpages'] = 'A felhasználónak új oldalakat kell létrehoznia';
$string['completionpagesgroup'] = 'Új oldalak előírása';
$string['completionpageshelp'] = 'befejezéshez új oldalak előírása';
$string['contributions'] = '<strong>{$a->pages}</strong> új oldal{$a->pagesplural}, <strong>{$a->changes}</strong> egyéb módosítás{$a->changesplural}.';
$string['contributionsbyuser'] = 'Felhasználói hozzátétel';
$string['contributionsgrouplabel'] = 'Csoport';
$string['countdowntext'] = 'Ez a wiki csak {$a} percet ad a szerkesztésre. A módosítások után kattintson a Mentés vagy a Mégse gombra, mielőtt a (jobbra lévő) fennmaradó idő eléri a nullát.';
$string['countdownurgent'] = 'Fejezze be vagy törölje a szerkesztést. Ha nem ment, a módosítások mentése automatikusan megtörténik.';
$string['create'] = 'Létrehozás';
$string['createdbyon'] = 'létrehozta {$a->name} {$a->date} időpontban';
$string['createlinkedwiki'] = 'Új oldal létrehozása';
$string['createlinkedwiki_help'] = 'Szerkesztés közben beírhat egy olyan oldalra mutató ugrópontot, amely még nem létezik, pl. [[Békák]]. Mentse az oldalt és az új oldal létrtehozásához kattintson a "Békák" ugrópontra.

Új oldalt létrehozhat a "Nézet" fülön is az \'Új oldal létrehozása" menüpontból.';
$string['createnewpage'] = 'Új oldal létrehozása';
$string['createpage'] = 'Oldal létrehozása';
$string['csvdownload'] = 'Letöltés számolótáblaként (UTF-8 .csv)';
$string['current'] = 'mostani';
$string['currentversion'] = 'Mostani verzió';
$string['currentversionof'] = 'Mostani verzió:';
$string['deletedbegins'] = '[Ide kerül a törölt szöveg]';
$string['deletedends'] = '[Törölt szöveg vége]';
$string['deleteorphanedannotations'] = 'Elveszett széljegyzetek törlése';
$string['deleteversionerror'] = 'Hiba az oldalverzió törlése során';
$string['deleteversionerrorversion'] = 'Nem létező oldalverzió törlése sikertelen';
$string['detail'] = 'részletek';
$string['diff_nochanges'] = 'A szerkesztés során nem módosult a szöveg, így nincs mit kiemelni. Lehet, hogy a megjelenés változott.';
$string['diff_someannotations'] = 'A szerkesztés a szöveget nem módosította, így alább nincs kiemelve eltérés, a széljegyzetek viszont megváltoztak. A megjelenés szintén változhatott.';
$string['displayversion'] = 'OU-wiki verziója: <strong>{$a}</strong>';
$string['downloadspreadsheet'] = 'Letöltés számolótáblaként';
$string['duplicatepagetitle'] = 'Az új oldal címe nem lehet ugyanaz, mint egy már létező oldal címe.';
$string['editbegin'] = 'Szerkesztés engedélyezése ekkortól';
$string['editbegin_help'] = '<p>Bekapcsolása esetén a wiki a megadott időpontig csak olvasható üzemmódra vált. A csak olvasható üzemmód során a felhasználók láthatják az oldalakat, mozoghatnak bennük, megnézhetik az előzményeket és részt vehetnek a vitákban, de nem szerkeszthetik az oldalakat. </p>';
$string['editedby'] = 'Szerkesztette {$a}';
$string['editend'] = 'Szerkesztés zárolása ekkortól';
$string['editend_help'] = 'Bekapcsolása esetén a wiki a megadott időponttól csak olvasható üzemmódra vált.';
$string['editingpage'] = 'Oldal szerkesztése';
$string['editingsection'] = '{$a} szakasz szerkesztése';
$string['editpage'] = 'Oldal szerkesztése';
$string['editsection'] = 'Szakasz szerkesztése';
$string['emptypagetitle'] = 'Az új oldal címe nem lehet üres.';
$string['emptysectiontitle'] = 'Az új szakasz címe nem lehet üres.';
$string['endannotation'] = 'Széljegyzet vége';
$string['entirewiki'] = 'Teljes wiki';
$string['error_export'] = 'Hiba történt a wikiadatok exportálása során.';
$string['errorcoursesubwiki'] = '"Nincs csoport", kivéve, ha az alwikik beállítása "Csoportonként egy wiki"';
$string['errorgroupssubwiki'] = 'Be kell kapcsolni,  ha az alwikik beállítása "Csoportonként egy wiki"';
$string['excelcsvdownload'] = 'Letöltés Excellel kompatibilis formátumban (.csv)';
$string['expandallannotations'] = 'Széljegyzetek kibontása';
$string['expandannotation'] = 'Széljegyzet kibontása';
$string['externaldashboardadd'] = 'Wiki hozzáadása a műszerfalhoz';
$string['externaldashboardremove'] = 'Wiki eltávolítása a műszerfalról';
$string['feedalt'] = 'Feliratkozás Atom-hírcsatornára';
$string['feedchange'] = 'Módosította {$a->name} ( <a href=\'{$a->url}\'>nézetváltozás</a> )';
$string['feeddescriptionchanges'] = 'A wiki összes módosításának felsorolása. Iratkozzon fel a hírcsatornára, ha értesülni szeretne a wiki változásairól.';
$string['feeddescriptionhistory'] = 'A wikioldal összes módosításának felsorolása. Iratkozzon fel a hírcsatornára, ha értesülni szeretne a wikioldal változásairól.';
$string['feeddescriptionpages'] = 'A wiki összes új oldalának felsorolása. Iratkozzon fel a hírcsatornára, ha értesülni szeretne új wikioldal létrehozásáról.';
$string['feeditemdescriptiondate'] = '{$a->main} {$a->date} időpontban.';
$string['feeditemdescriptionnodate'] = '{$a->main}';
$string['feednewpage'] = 'Készítette {$a->name}';
$string['feedsubscribe'] = 'Feliratkozhat az információt tartalmazó <a href=\'{$a->atom}\'>Atom</a> vagy <a href=\'{$a->rss}\'>RSS</a> hírcsatornára.';
$string['feedtitle'] = '{$a->course} wiki: {$a->name} - {$a->subtitle}';
$string['format_html'] = 'Online megtekintés';
$string['format_rtf'] = 'Letöltés szövegszerkesztő formátumban';
$string['format_template'] = 'Letöltés wikisablonként';
$string['frompage'] = 'kezdet: {$a}';
$string['frompages'] = 'kezdet: {$a}...';
$string['gradesupdated'] = 'Pontok frissítve';
$string['hideannotationicons'] = 'Széljegyzetek elrejtése';
$string['historycompareaccessibility'] = '{$a->lastdate} {$a->createdtime} kiválasztása';
$string['historyfor'] = 'Előzmények:';
$string['index'] = 'Wikimutató';
$string['jsajaxrequired'] = 'A Széljegyzet oldal előírja a Javascript engedélyezését a böngészőben, valamint az AJAX és a Javascript felhasználói profilbeli beállításának "Igen: fejlett webes szolgáltatások használata" értékre állítását.';
$string['jsnotenabled'] = 'Böngészőjében a Javascript nincs engedélyezve.';
$string['lastchange'] = 'Utolsó módosítás: {$a->date} / {$a->userlink}';
$string['linkedfrom'] = 'Az oldalra hivatkozó oldalak';
$string['linkedfromsingle'] = 'Az oldalra hivatkozó oldal';
$string['lockcancelled'] = 'A szerkesztési zárat feloldották, és most valaki más szerkeszti ezt az oldalt. Ha meg szeretné tartani a változásokat, válassza ki és másolja ki őket, mielőtt rákattint a Mégse gombra. Ezután próbálja ismét szerkeszteni.';
$string['lockediting'] = 'Wiki zárolása - nincs szerkesztés';
$string['lockpage'] = 'Oldal zárolása';
$string['missingpages'] = 'Hiányzó oldalak';
$string['modulename'] = 'OU-wiki';
$string['modulename_help'] = '<p> A wiki olyan webalapú rendszer, amellyel a felhasználó egymáshoz  oldalakat szerkeszthet. A Moodle-ban a wiki általában akkor jön kapóra,  ha a tanulók tartalom létrehozását kapják feladatul. </p><p> Az OU-wiki többféle lehetőséget kínál. Olvassa el az egyes elemekhez kapcsolódó segítséget. </p>';
$string['modulenameplural'] = 'OU-wikik';
$string['mustspecify2'] = 'Az egybevetéshez pontosan két verziót kell megadnia.';
$string['myparticipation'] = 'Részvételem';
$string['newerversion'] = 'Újabb verzió';
$string['newpage'] = 'első  verzió';
$string['next'] = 'Régebbi változtatások';
$string['nextversion'] = 'Következő: {$a}';
$string['noattachments'] = 'Nincs melléklet';
$string['nochanges'] = 'Nem módosító felhasználók';
$string['nojsbrowser'] = 'Olyan böngészőt használ, amelyet a rendszer  nem támogat teljes mértékben.';
$string['nojsdisabled'] = 'A böngésző beállításaiban kikapcsolta a JavaScriptet.';
$string['nojswarning'] = 'Ezért csak {$a->minutes} percig tudjuk megtartani ezt az oldalt. A változásokat {$a->deadline} időpontig mentse el (az aktuális idő {$a->now}). Egyébként előfordulhat, hogy más szerkeszti az oldalt, így módosításai elveszhetnek.';
$string['noparticipation'] = 'Nincs megjeleníthető részvétel.';
$string['nousersingroup'] = 'A kiválasztott csoportban nincs felhasználó.';
$string['nowikipages'] = 'A wikiben nincsenek oldalak.';
$string['numedits'] = '{$a} szerkesztés';
$string['numwords'] = 'Szószám: {$a}';
$string['olderversion'] = 'Régebbi verzió';
$string['oldversion'] = 'Régi verzió';
$string['onepageview'] = 'A wiki összes oldalát egyszerre megtekintheti a kényelmes nyomtatás vagy az állandó referencia érdekében.';
$string['orphanedannotations'] = 'Elveszett széljegyzetek';
$string['orphanpages'] = 'Kapcsolódás nélküli oldalak';
$string['ouwiki:addinstance'] = 'Új OU-wiki hozzáadása';
$string['ouwiki:annotate'] = 'Széljegyzet engedélyezve';
$string['ouwiki:deletepage'] = 'Wikioldalak törlése';
$string['ouwiki:edit'] = 'Wikioldalak szerkesztése';
$string['ouwiki:grade'] = 'A wikihez hozzáférő felhasználók osztályozása';
$string['ouwiki:lock'] = 'Oldalak zárolása és feloldása engedélyezve';
$string['ouwiki:overridelock'] = 'Zárolt oldalak felülírása';
$string['ouwiki:view'] = 'Wikik megtekintése';
$string['ouwiki:viewallindividuals'] = 'Felhasználónkénti alwikik: az összes megtekintése';
$string['ouwiki:viewcontributions'] = 'Felhasználónkénti hozzájárulások felsorolásának megtekintése';
$string['ouwiki:viewgroupindividuals'] = 'Felhasználónkénti alwikik: azonos csoport megtekintése';
$string['ouwiki:viewparticipation'] = 'A wikihez hozzáférő összes beiratkozott felhasználó részvételének megtekintése';
$string['overridelock'] = 'Zár kiiktatása';
$string['overviewnumentrysince'] = 'új wikibejegyzés az utolsó belépés óta.';
$string['overviewnumentrysince1'] = 'új wikibejegyzés az utolsó belépés óta.';
$string['page'] = 'oldal';
$string['pagedeletedinfo'] = 'Néhány törölt verzió megjelenik az alábbi listában. Ezeket csak a törlésre jogosult felhasználók láthatják.';
$string['pagedoesnotexist'] = 'Ez az oldal még nem létezik a wikiben.';
$string['pageedits'] = 'Oldalszerkesztések';
$string['pagelockeddetails'] = '{$a->name} kezdte szerkeszteni ezt az oldalt {$a->lockedat} időpontban, és {$a->seenat} időpontban még mindig szerkeszti.  Ön csak akkor tudja szerkeszteni, ha ő befejezi.';
$string['pagelockeddetailsnojs'] = '{$a->name} kezdte szerkeszteni ezt az oldalt. {$a->nojs} időpontig szerkeszti. Ön csak akkor tudja szerkeszteni, ha ő befejezi.';
$string['pagelockedoverride'] = 'Ön jogosult a szerkesztést törölni és az oldal zárolását megszüntetni.
Ha így tesz, minden módosítás el fog veszni! Alaposan fontolja meg, mielőtt megnyomja a Kiiktatás gombot.';
$string['pagelockedtimeout'] = 'A szerkesztési idő {$a} időpontban ér véget.';
$string['pagelockedtitle'] = 'Ezt az oldalt  valaki más szerkeszti.';
$string['pagenameisstartpage'] = 'Az oldal neve ugyanaz, mint a kezdőoldalé. Adjon meg egy másik oldalnevet.';
$string['pagenametoolong'] = 'Az oldal neve túl hosszú. Adjon meg egy rövidebb oldalnevet.';
$string['pagescreated'] = 'elkészült oldalak';
$string['participation'] = 'Részvétel';
$string['participationbyuser'] = 'Felhasználónkénti részvétel';
$string['pluginadministration'] = 'OU-wiki kezelése';
$string['pluginname'] = 'OU-wiki';
$string['preview'] = 'Előnézet';
$string['previewwarning'] = 'A változtatások következő előnézetét még nem mentette. <strong>Ha nem menti a változásokat, a munka el fog veszni.</strong> Az oldal végén lévő Mentés gombbal mentheti a módosításokat.';
$string['previous'] = 'Újabb módosítások';
$string['previousversion'] = 'Előző: {$a}';
$string['recentchanges'] = 'Legutóbbi szerkesztések';
$string['returntohistory'] = '( <a href=\'{$a}\'>Vissza az Előzmények nézethez</a>.)';
$string['returntopage'] = 'Vissza a wikioldalhoz';
$string['returntoview'] = 'Aktuális oldal megtekintése';
$string['revert'] = 'Visszatérés';
$string['reverterrorcapability'] = 'Ön nem térhet vissza egy korábbi verzióhoz';
$string['reverterrorversion'] = 'Nem lehet visszatérni egy nem létező verzióhoz';
$string['revertversion'] = 'Visszatérés';
$string['revertversionconfirm'] = '<p>Az oldal visszatér {$a} időpont szerinti állapotába, az azóta eszközölt változások törlődnek. A törölt változások az oldal előzményeiben elérhetők.</p><p>Biztosan visszatér ehhez az állapothoz?</p>';
$string['savedat'] = 'Mentés időpontja {$a}';
$string['savedby'] = 'mentette {$a}';
$string['savefailcontent'] = 'Az oldal Ön által szerkesztett alábbi változatából kimásolhatja a releváns részeket egy másik programba. Ha később visszailleszti a wikibe, ügyeljen arra, nehogy fölülírja mások munkáját.';
$string['savefaildesynch'] = 'Miközben az oldalt szerkesztette, valakinek sikerült azt módosítani. (Ez különböző helyzetekben előfordulhat, például ha egy szokatlan böngészőt használ, vagy ha a JavaScript ki van kapcsolva.) Sajnos a módosításokat nem lehet menteni, mert azzal fölülírja a másik személy módosításait.';
$string['savefaillocked'] = 'Miközben az oldalt szerkesztette, valakinek sikerült megszerezni a kulcsát. (Ez különböző helyzetekben előfordulhat, például ha egy szokatlan böngészőt használ, vagy ha a JavaScript ki van kapcsolva.) Sajnos a módosításokat nem lehet menteni.';
$string['savefailtitle'] = 'Az oldal nem menthető';
$string['savegrades'] = 'Osztályzatok mentése';
$string['savetemplate'] = 'Wiki mentése sablonként';
$string['search'] = 'Keresés a wikiben';
$string['search_help'] = 'Írja be a keresendő kifejezést, és nyomja meg az Enter billentyűt vagy kattintson a gombra.
Pontos kifejezésekre kereséshez használjon idézőjeleket.
Egy szó kirekesztéséhez szúrjon be egy kötőjelet közvetlenül a szó elé.

Példa: a keresett <tt>Picasso -szobor &quot;korai munkái&quot;</tt> kifejezés eredménye &quot;Picasso&quot;, vagy a &quot;korai munkái&quot; kifejezés, de kirekeszti a &quot;szobor&quot; tételeket tartalmazó kifejezéseket..';
$string['seedetails'] = 'teljes előzmény';
$string['showannotationicons'] = 'Széljegyzetek megjelenítése';
$string['showwordcounts'] = 'Szószám megjelenítése';
$string['showwordcounts_help'] = 'Bekapcsolása esetén kiszámítja az oldalakon szereplő szavak számát és megjeleníti a fő tartalom alatt.';
$string['sizewarning'] = 'Ez a wiki oldal nagyon nagy, ezért lassan működhet. Ha lehet, ossza fel a tartalmat logikus egységekre, majd külön oldalakra elhelyezve kapcsolja össze őket.';
$string['startpage'] = 'Kezdőoldal';
$string['startpagedoesnotexist'] = 'A wiki kezdőoldala még nem készült el.';
$string['subwikis'] = 'Alwikik';
$string['subwikis_groups'] = 'Csoportonként egy wiki';
$string['subwikis_help'] = '<ul><li> <strong>Egyetlen kurzuswiki </strong> <br /> Ez a wiki úgy viselkedik, mint egy önálló wiki. A kurzusban mindenki ugyanazokat az oldalakat látja. </li><li> <strong>Csoportonként egy wiki</strong> <br />Az egyes  csoportok tagjai a wiki saját csoportjuknak megfelelő teljesen külön példányát (alwiki) látják. Csak az azonos csoportbeliek által létrehozott oldalakat látja. Ha egynél több  csoportja van, vagy ha engedélye van az összes csoport megtekintésére, akkor egy legördülő menüből választhat ki egy csoportot. </li><li> <strong>Külön wiki minden felhasználó számára</strong> <br /> Minden felhasználó egy teljesen más wikit kap.  Csak saját wikijét láthatja, hacsak nincs engedélye mások megtekintésére, mely esetben egy legördülő menüből választhat ki egy felhasználót. (Ezáltal a tanulók munkát adhatnak le, bár erre vanak egyéb módok is, pl. az értékelési tevékenység.) </li></ul><p> Ne feledje, hogy a csoport a kiválasztott csoportosítással működik. Figyelmen kívül hagyja a más csoportosításokban lévő csoportokat. </p>';
$string['subwikis_individual'] = 'Külön wiki minden felhasználónak';
$string['subwikis_single'] = 'Egyetlen kurzuswiki';
$string['summary'] = 'Összegzés';
$string['summary_help'] = '<p> Ha megad egy összegzést, az a wiki kezdőoldalán jelenik meg a szokásos szerkeszthető wikiszöveg fölött, és azt a felhasználók nem szerkeszthetik. </p><p> Az összegzés megadása opcionális, ha nincs rá szüksége, hagyja üresen a mezőt. </p>';
$string['system'] = 'a rendszer';
$string['tab_annotate'] = 'Széljegyzet beszúrása';
$string['tab_discuss'] = 'Megvitatás';
$string['tab_edit'] = 'Szerkesztés';
$string['tab_history'] = 'Előzmény';
$string['tab_index_alpha'] = 'Betűrendben';
$string['tab_index_changes'] = 'Minden módosítás';
$string['tab_index_pages'] = 'Új oldalak';
$string['tab_index_tree'] = 'Szerkezet';
$string['tab_view'] = 'Nézet';
$string['template'] = 'Sablon';
$string['template_help'] = '<p> A sablon előre meghatározott wikioldalak készlete. Amikor egy sablon be van állítva, a wiki a sablonban meghatározott tartalommal indul. </p><p> A sablon minden alwikire érvényes. Például &quot;Csoportonként egy wiki &quot; üzemmódban minden csoport wikije a sablonban szereplő oldalakkal indul. </p><p> Sablon létrehozásához írja be a wikihez szükséges oldalakat, majd térjen át a Mutató oldalra és kattintson a &quot;Wiki mentése sablonként&quot; gombra. (Kézzel is létrehozhat sablonokat más programmal, mivel a sablon egy rendkívül egyszerű XML-formátum, a mentett sablonra ránézve megtekintheti a formátumot.) </p><p>A wiki létrehozása után a sablon nem módosítható. Ha mégis ezt szeretné, törölje ki teljesen a wikit, majd hozzon létre egy új sablont. </p>';
$string['thispageislocked'] = 'A wiki zárolva van, nem szerkeszthető.';
$string['timelocked_after'] = 'A wiki zárolva van, már nem szerkeszthető.';
$string['timelocked_before'] = 'A wiki zárolva van. {$a} időponttól lesz szerkeszthető.';
$string['timeout'] = 'Szerkesztésre rendelkezésre álló idő';
$string['timeout_help'] = '<p>Ha kiválaszt egy lejáratot, a wikin a szerkesztők csak addig dolgozhatnak. A wiki szerkesztés alatt zárolja az oldalakat (nehogy ketten egyszerre szerkesszék ugyanazt az oldalt), a lejárat beállításával viszont a wikihez mások is hozzáférnek. </p> <h3>Mit látnak a felhasználók</h3> <p> Lejárat bekapcsolása esetén a felhasználók szerkesztés közben egy számlálót látnak. Ha az eléri a nullát, böngészőjük automatikusan menti a módosításokat és leállítja a szerkesztést. </p> <h3>Javascript nélküli felhasználók</h3> <p> Ennek nincs hatása a Javascript nélküli vagy régi böngészővel rendelkező felhasználókra. Esetükben mindenkor egy tizenöt perces lejárat van érvényben. Szerkesztés során látják a mentésre rendelkezésre álló időt; ha nem mentenek, munkájuk elveszhet. </p> <h3>Amiért szükségtelen lehet</h3> <p> Bekapcsolt állapotában is a zárak automatikusan kikapcsolnak szerkesztés során az alábbi esetekben: </p> <ul> <li>Mentés vagy törlés nélkül áttér egy másik oldalra.</li> <li>Bezárja a böngészőt.</li> <li>A gépe lefagy.</li> <li>Megszűnik az internetkapcsolat.</li> </ul> <p> Ilyen esetekben a zár kb. 2 perc után automatikusan kikapcsol </p> <p> Emellett az oktatók alapesetben bármikor érvényteleníthetik a zárat. </p> <h3>Mire nem való</h3> <p> Nem akadályozza meg, hogy valaki az oldalon tartózkodva másokat ne hagyjon szerkeszteni. Ilyenkor szerkesztés után egészen a lejáratig várhatnak a mentéssel, majd gyorsan visszatérhetnek a szerkesztéshez. </p>';
$string['timeout_none'] = 'Nincs időkorlát';
$string['tryagain'] = 'Próbálja meg újból.';
$string['typeinpagename'] = 'Az oldal nevét írja be ide';
$string['typeinsectionname'] = 'A szakasz címét írja be ide';
$string['undelete'] = 'Törlés visszavonása';
$string['unlockpage'] = 'Oldal feloldása';
$string['userdetails'] = '{$a} részletei';
$string['usergrade'] = 'Felhasználói osztályzat';
$string['userparticipation'] = 'Felhasználói részvétel';
$string['viewdeletedversionerrorcapability'] = 'Hiba az oldalverzió megtekintése közben';
$string['viewparticipationerrror'] = 'Nem látható a felhasználói részvétel';
$string['viewwikichanges'] = '{$a} változásai';
$string['viewwikistartpage'] = '{$a} megtekintése';
$string['wikifor'] = 'Wiki megtekintése:';
$string['wikifullchanges'] = 'Teljes változáslista megtekintése';
$string['wikirecentchanges'] = 'Wiki változásai';
$string['wikirecentchanges_from'] = 'Wiki változásai ({$a} oldal)';
$string['words'] = 'Szavak';
$string['wordsadded'] = 'Beszúrt szavak';
$string['wordsdeleted'] = 'Törölt szavak';
$string['wouldyouliketocreate'] = 'Létrehozza?';
