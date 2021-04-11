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
 * Strings for component 'oublog', language 'hu', version '3.10'.
 *
 * @package     oublog
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessdenied'] = 'Az oldalt Ön nem tekintheti meg.';
$string['addcomment'] = 'Megjegyzés hozzáadása';
$string['addlink'] = 'Ugrópont hozzáadása';
$string['addpost'] = 'Blogbejegyzés  hozzáadása';
$string['allowcomments'] = 'Megjegyzések engedélyezése';
$string['allowcomments_help'] = '"Belépett felhasználóktól" - a bloghoz hozzáférő felhasználóktól fogad el megjegyzéseket.

"Mindenkitől" - a bloghoz hozzáférő felhasználóktól és másoktól egyaránt fogad el megjegyzéseket.. Kap majd egy e-mailt, mely alapján jóváhagyhatja vagy elutasíthatja a nem belépett felhasználóktól érkező megjegyzéseket.

"Nem" - megakadályozza, hogy bárki megjegyzést fűzzön ehhez a bejegyzéshez.';
$string['allowcommentsmax'] = 'Megjegyzések engedélyezése (ha a bejegyzéshez kapcsolódik)';
$string['atom'] = 'Atom';
$string['atomfeed'] = 'Atomhír';
$string['attachments'] = 'Mellékletek';
$string['attachments_help'] = 'A blogbejegyzéshez egy vagy több fájlt csatolhat. Ha képet csatol, az az üzenet után jelenik meg,';
$string['blogfeed'] = 'Bloghírek';
$string['bloginfo'] = 'Blogadatok';
$string['blogname'] = 'Blog címe';
$string['blogoptions'] = 'Blog beállításai';
$string['blogsummary'] = 'Blog összegzése';
$string['comment'] = 'Megjegyzés hozzáadása';
$string['commentonby'] = 'Megjegyzés <u>{$a->author}</u> <u>{$a->title}</u> blogjához';
$string['comments'] = 'Megjegyzések';
$string['commentsby'] = '{$a} megjegyzései';
$string['commentsfeed'] = 'Csak megjegyzések';
$string['commentsnotallowed'] = 'Nem fűzhetők hozzá megjegyzések';
$string['completioncomments'] = 'A felhasználó köteles a blogbejegyzésekhez megjegyzéseket hozzáfűzni';
$string['completioncommentsgroup'] = 'Megjegyzések előírása';
$string['completioncommentsgroup_help'] = 'Bekapcsolása esetén a blog akkor kap egy tanuló esetén "teljesített" megjelölést, amikor a megadott számú megjegyzést hozzáfűzte';
$string['completionposts'] = 'A felhasználó köteles blogbejegyzéseket készíteni:';
$string['completionpostsgroup'] = 'Blogbejegyzések előírása';
$string['completionpostsgroup_help'] = 'Bekapcsolása esetén a blog akkor kap egy tanuló esetén "teljesített" megjelölést, amikor a megadott számú bejegyzést elkészítette.';
$string['computingguide'] = 'Útmutató OU-blogokhoz';
$string['computingguideurl'] = 'Számítástechnikai útmutató URL-je';
$string['computingguideurlexplained'] = 'Adja meg az OU-blogok számítástechnikai útmutatójának URL-jét.';
$string['configmaxattachments'] = 'Mellékletek alapértelmezett maximális megengedett  száma egy blogbejegyzéshez';
$string['configmaxbytes'] = 'A portál összes blogmellékletének alapértelmezett maximális mérete (a kurzus korlátainak és más helyi beállításoknak a függvényében)';
$string['confirmdeletecomment'] = 'Biztosan törli ezt a megjegyzést?';
$string['confirmdeletelink'] = 'Biztosan törli ezt az ugrópontot?';
$string['confirmdeletepost'] = 'Biztosan törli ezt a blogbejegyzést?';
$string['couldnotaddcomment'] = 'A megjegyzést nem sikerült hozzáadni.';
$string['couldnotaddlink'] = 'Az ugrópontot nem sikerült hozzáadni.';
$string['defaultpersonalblogname'] = '{$a} blogja';
$string['delete'] = 'Törlés';
$string['deletedby'] = '{$a->timedeleted} időpontban törölte {$a->fullname},';
$string['deleteglobalblog'] = 'A globális blogot nem törölheti.';
$string['details'] = 'Részletek';
$string['displayversion'] = 'OU-blog verziója: <strong>{$a}</strong>';
$string['downloadas'] = 'Adatletöltés módja';
$string['edit'] = 'Szerkesztés';
$string['editlink'] = 'Ugrópont szerkesztése';
$string['editonsummary'] = 'Szerkesztés ideje: {$a->editdate}';
$string['editpost'] = 'Blogbejegyzés frissítése';
$string['editsummary'] = '{$a->editdate} időpontban szerkesztette {$a->editby}';
$string['error_alreadyapproved'] = 'A megjegyzés jóváhagyása/elutasítása már megtörtént';
$string['error_grouppubliccomments'] = 'Nyilvános megjegyzéseket csoportos üzemmódú blog esetén nem engedélyezhet.';
$string['error_moderatednotallowed'] = 'Moderált megjegyzésekre ezen a blogon vagy blogbejegyzésen már nincs lehetőség.';
$string['error_noconfirm'] = 'Írja be a fenti félkövér szöveget a szövegmezőbe, pontosan a megadott alakban.';
$string['error_toomanycomments'] = 'Túl sok blogmegjegyzést írt az elmúlt órában erről az internetes címről. ÍVárjon egy kicsit, majd próbálja újra.';
$string['error_unspecified'] = 'A rendszer nem tudja teljesíteni ezt a kérést, mert hiba történt ({$a})';
$string['error_wrongkey'] = 'A megjegyzés kulcsa hibás.';
$string['exportedpost'] = 'Exportált blogbejegyzés';
$string['externaldashboardadd'] = 'Blog hozzáadása a műszerfalhoz';
$string['externaldashboardremove'] = 'Blog eltávolítása a műszerfalról';
$string['extranavolderposts'] = 'Korábbi bejegyzések: {$a->from}-{$a->to}';
$string['extranavtag'] = 'Címke: {$a}';
$string['feedhelp'] = 'Hírek';
$string['feedhelp_help'] = 'Ha híreket használ felvehet ugrópontokat az Atomhoz vagy az RSS-hez annak érdekében, hogy naprakész legyen a blogot illetően. A legtöbb hírolvasó támogatja az RSS és az Atom használatát. Ha a blog megengedi a megjegyzések használatát, akkor használhat &quot;Csak megjegyzések&quot; számára szóló híreket.';
$string['feeds'] = 'Hírek';
$string['feedsnotenabled'] = 'A Hírek nincs bekapcsolva';
$string['foruser'] = '{$a} részére';
$string['globalblogmissing'] = 'Nincs globális blog';
$string['gradesupdated'] = 'Osztályozás frissítve';
$string['guestblog'] = 'Ha van fiókja, <a href=\'{$a}\'>jelentkezzen be a blog használatához</a>.';
$string['individualblogs'] = 'Egyedi blogok';
$string['individualblogs_help'] = '<p> <strong>Nem (blog együtt vagy csoportosan):</strong> <em>Egyedi blogok nem használatosak</em> - nincs beállítva egyedi blog, mindenki része egy nagyobb közösségnek (a "Csoportos üzemmód" beállításától függően). </p><p> <strong>Külön egyedi blogok:</strong> <em>Az egyedi blogok magánhasználatban vannak</em> - Az egyes felhasználók csak küldhetnek bejegyzéseket és saját blogjaikat tekinthetik meg, kivéve, ha rendelkeznek ("viewindividual") engedéllyel más egyedi blogok megtekintéséhez. </p><p> <strong>Látható egyedi blogok:</strong> <em>Az egyedi blogok nyilvánosak</em> - az egyes felhasználók csak saját blogjaikba küldhetnek bejegyzést, de megtekinthetnek egyéb egyedi blogbejegyzéseket. </p>';
$string['invalidblog'] = 'Egyedi blog azonosítója';
$string['invalidblogdetails'] = 'A(z)  {$a} blogbejegyzés részletei nem találhatók';
$string['invalidcomment'] = 'Érvénytelen azonosító a megjegyzéshez';
$string['invalidedit'] = 'Érvénytelen azonosító a szerkesztéshez';
$string['invalidformat'] = 'A formátumnak atomnak vagy rss-nek kell lenni.';
$string['invalidlink'] = 'Érvénytelen ugrópont-azonosító';
$string['invalidpost'] = 'Érvénytelen bejegyzés-azonosító';
$string['invalidpostid'] = 'Érvénytelen bejegyzés-azonosító';
$string['invalidvisbilitylevel'] = 'Érvénytelen {$a} láthatósági szint';
$string['invalidvisibility'] = 'Érvénytelen láthatósági szint';
$string['lastcomment'] = '(legfrissebb beküldője {$a->fullname}, {$a->timeposted})';
$string['links'] = 'Kapcsolódó ugrópontok';
$string['logincomments'] = 'Igen, bejelentkezett felhasználóktól';
$string['maxattachments'] = 'Mellékletek maximális száma';
$string['maxattachments_help'] = 'Ez adja meg a blogbejegyzéshez kapcsolható mellékletek maximális számát.';
$string['maxattachmentsize'] = 'Mellékletek maximális mérete';
$string['maxattachmentsize_help'] = 'Ez adja meg a blogbejegyzéshez kapcsolható mellékletek maximális méretét.';
$string['maxvisibility'] = 'Maximális láthatóság';
$string['maxvisibility_help'] = '<p> <em>Személyes blog esetén:</em> <strong>Csak a blog tulajdonosa számára látható (magán)</strong> - senki más nem tekintheti meg a bejegyzést. </p><p> <em>Kurzusblog esetén:</em> <strong>A kurzus résztvevői számára látható</strong> -, a bejegyzés megtekintéséhez hozzáféréssel kell rendelkezni a bloghoz, ami általában úgy érhető el, hogy felveszi a hozzá kapcsolódó kurzust. </p><p> <strong>Bejelentkezettek számára látható</strong> - mindenki, aki bejelentkezett, megtekintheti a bejegyzést, még akkor is, ha nem vette föl a kurzust. </p><p> <strong>Mindenki számára látható</strong> - bármely internet-felhasználó megtekintheti a bejegyzést, ha ismeri a blog címét. </p>
<p> Ez választható a teljes blogra vagy az egyedi bejegyzésekre. Ha a teljes blogra van beállítva, akkor az lesz a maximum. Például ha a teljes blog az első szintre van beállítva, akor az egyedi bejegyzés szintjét egyáltalán nem tudja megváltoztatni. </p>';
$string['maybehiddenposts'] = 'A blog tartalmazhat csak bejelentkezett felhasználók számára látható, vagy általuk kommentálható bejegyzéseket. Ha van fiókja, <a href=\'{$a}\'>jelentkezzen be a blog teljes eléréséhez</a>.';
$string['message'] = 'Üzenet';
$string['moderated_addedcomment'] = 'Köszönjük a megjegyzést, amely csak akkor jelenik meg, ha a bejegyzés szerzője jóváhagyta.';
$string['moderated_approve'] = 'Megjegyzés jóváhagyása';
$string['moderated_authorname'] = 'Neve';
$string['moderated_awaiting'] = 'Jóváhagyásra váró megjegyzések';
$string['moderated_awaitingnote'] = 'A megjegyzéseket mások csak jóváhagyással láthatják. A rendszer nem tudja, kik szólnak hozzá. A megjegyzések olyan ugrópontokat tartalmazhatnak, amelyek használata <strong>károsíthatja a számítógépet</strong>. Kétes esetben inkább vesse el a megjegyzéseket.';
$string['moderated_confirm'] = 'Megerősítés';
$string['moderated_confirminfo'] = 'Az <strong>igen</strong> alábbi megadásával erősítse meg.';
$string['moderated_confirmvalue'] = 'igen';
$string['moderated_emailhtml'] = '<p> (Ez egy automatikus e-mail, ne válaszoljon rá.) </p><p> Valaki megjegyzést,  fűzött blogüzenetéhez: {$a->postlink} </p><p> Közzététel előtt <strong>jóvá kell hagynia</strong>. </p><p> A rendszer nem tudja, ki a szerző. A megjegyzés tartalmazhat ugrópontokat, amelyek követése <strong>károsíthatja a számítógépet.</strong> Ha bármilyen kétsége van, <strong>az ugrópontok használata nélkül</strong> vesse el a a megjegyzést. </p><hr/><p> Megadott név: {$a->commenter} </p><hr/><h3> {$a->commenttitle} </h3> {$a->comment} <hr/><ul class=\'oublog-approvereject\'><li> <a href=\'{$a->approvelink}\'>{$a->approvetext}</a> </li><li> <a href=\'{$a->rejectlink}\'>{$a->rejecttext}</a> </li></ul><p> A levelet figyelmen kívül hagyhatja. A megjegyzés 30 nap múlva automatikusan törlődik. </p><p> Ha túl sok ilyen e-mailt kap, érdemes lehet a megjegyzés lehetőségét csak a bejelentkezett felhasználókra korlátozni. </p><ul class=\'oublog-restrict\'><li> <a href=\'{$a->restrictpostlink}\'>{$a->restrictposttext}</a> </li><li> <a href=\'{$a->restrictbloglink}\'>{$a->restrictblogtext}</a> </li></ul>';
$string['moderated_emailsubject'] = 'A következő megjegyzés jóváhagyásra vár:  {$a->blog} ({$a->commenter})';
$string['moderated_emailtext'] = 'Ez egy automatikus e-mail, ne válaszoljon rá.
Valaki megjegyzést,  fűzött blogüzenetéhez: {$a->postlink}
Közzététel előtt jóvá kell hagynia.
A rendszer nem tudja, ki a szerző. A megjegyzés tartalmazhat ugrópontokat, amelyek követése károsíthatja a számítógépet.
Ha bármilyen kétsége van, az ugrópontok használata nélkül vesse el a a megjegyzést.
<hr/><p> Megadott név: {$a->commenter} </p><hr/><h3> {$a->commenttitle} </h3> {$a->comment} <hr/><ul class=\'oublog-approvereject\'><li> <a href=\'{$a->approvelink}\'>{$a->approvetext}</a> </li><li> <a href=\'{$a->rejectlink}\'>{$a->rejecttext}</a> </li></ul><p> A levelet figyelmen kívül hagyhatja. A megjegyzés 30 nap múlva automatikusan törlődik. </p><p> Ha túl sok ilyen e-mailt kap, érdemes lehet a megjegyzés lehetőségét csak a bejelentkezett felhasználókra korlátozni.
* {$a->restrictposttext}: {$a->restrictpostlink}
* {$a->restrictblogtext}: {$a->restrictbloglink}';
$string['moderated_info'] = 'Mivel nincs bejelentkezve, megjegyzése csak jóváhagyás után jelenik meg. Ha van fiókja, a blog használatához <a href=\'{$a}\'>jelentkezzen be</a>.';
$string['moderated_postername'] = '<strong>{$a}</strong> név használatával';
$string['moderated_reject'] = 'A megjegyzés elvetése';
$string['moderated_rejectedon'] = '{$a} elvetve:';
$string['moderated_restrictblog'] = 'Blogüzenetekhez való megjegyzések korlátozása';
$string['moderated_restrictblog_info'] = 'Korlátozni kívánja a blogüzeneteihez fűzött megjegyzéseket azokra, akik be vannak jelentkezve a rendszerbe?';
$string['moderated_restrictpage'] = 'Megjegyzések korlátozása';
$string['moderated_restrictpost'] = 'Blogüzenethez való megjegyzések korlátozása';
$string['moderated_restrictpost_info'] = 'Korlátozni kívánja a blogüzenetéhez fűzött megjegyzéseket azokra, akik be vannak jelentkezve a rendszerbe?';
$string['moderated_submitted'] = 'Moderálásra vár';
$string['moderated_typicaltime'] = 'Korábban ez kb. {$a} időt vett igénybe.';
$string['modulename'] = 'OU-blog';
$string['modulenameplural'] = 'OU-blogok';
$string['mustprovidepost'] = 'Üzenetazonosító megadása kötelező';
$string['myparticipation'] = 'Részvételem';
$string['ncomments'] = '{$a} megjegyzés';
$string['newblogposts'] = 'Új blogüzenetek';
$string['newcomment'] = 'Új blogmegjegyzés';
$string['newerposts'] = 'Friss üzenetek &gt;';
$string['newpost'] = 'Új blogüzenet';
$string['no'] = 'Nincs';
$string['no_blogtogetheroringroups'] = 'Nincs (összes vagy csoportos blog)';
$string['noblogposts'] = 'Nincs blogüzenet';
$string['nocomments'] = 'Megjegyzésre nincs mód';
$string['noposts'] = 'A blogban nincs látható üzenet.';
$string['notaddpost'] = 'Az üzenetet nem lehet hozzáadni.';
$string['notaddpostnogroup'] = 'Az üzenetet csoport nélkül nem lehet hozzáadni.';
$string['nousercomments'] = 'A felhasználó nem fűzött megjegyzést a bloghoz.';
$string['nouserposts'] = 'A felhasználó nem küldött üzenetet a bloghoz.';
$string['npending'] = '{$a}  megjegyzés vár jóváhagyásra';
$string['npendingafter'] = ', {$a}  vár jóváhagyásra';
$string['numposts'] = '{$a}  üzenet';
$string['olderposts'] = '&lt; régebbi üzenet';
$string['onecomment'] = '{$a} megjegyzés';
$string['onepending'] = '{$a} megjegyzés vár jóváhagyásra';
$string['onependingafter'] = ', {$a} vár jóváhagyásra';
$string['onlyworkspersonal'] = 'Csak személyes blogok esetén használható';
$string['oublog'] = 'OU-blog';
$string['oublog:addinstance'] = 'Új OU-blog hozzáadása';
$string['oublog:audit'] = 'Törölt üzenetek és régi verziók megtekintése';
$string['oublog:comment'] = 'Megjegyzés egy üzenethez';
$string['oublog:contributepersonal'] = 'Üzenet és megjegyzés személyes blogok esetén';
$string['oublog:exportownpost'] = 'Saját üzenet exportálása';
$string['oublog:exportpost'] = 'Üzenet exportálása';
$string['oublog:grade'] = 'OU-blog felhasználói részvételének osztályozása';
$string['oublog:managecomments'] = 'Megjegyzések kezelése';
$string['oublog:managelinks'] = 'Ugrópontok kezelése';
$string['oublog:manageposts'] = 'Üzenetek kezelése';
$string['oublog:post'] = 'Új üzenet létrehozása';
$string['oublog:view'] = 'Üzenetek megtekintése';
$string['oublog:viewindividual'] = 'Egyedi üzenetek megtekintése';
$string['oublog:viewparticipation'] = 'OU-blog felhasználói részvételének megtekintése';
$string['oublog:viewpersonal'] = 'Személyes blogok üzeneteinek megtekintése';
$string['overviewnumentrylog'] = 'bejegyzés az utolsó bejelentkezés óta';
$string['overviewnumentrylog1'] = 'bejegyzés az utolsó bejelentkezés óta';
$string['overviewnumentryvw'] = 'bejegyzés az utolsó megtekintés óta';
$string['overviewnumentryvw1'] = 'bejegyzés az utolsó megtekintés óta';
$string['participation'] = 'Részvétel';
$string['participationbyuser'] = 'Részvétel felhasználónként';
$string['permalink'] = 'Idehivatkozás';
$string['personalblognotsetup'] = 'Személyes blog nincs beállítva';
$string['pluginadministration'] = 'OU-blog kezelése';
$string['pluginname'] = 'OU-blog';
$string['postauthor'] = 'Üzenet szerzője';
$string['postdate'] = 'Üzenet kelte';
$string['postedby'] = 'szerző {$a}';
$string['postedbymoderated'] = '{$a->commenter} megjegyzése (jóváhagyta {$a->approver}, {$a->approvedate} időpontban)';
$string['postedbymoderatedaudit'] = '{$a->commenter} } [{$a->ip}] megjegyzése (jóváhagyta {$a->approver}, {$a->approvedate} időpontban)';
$string['posts'] = 'Üzenetek';
$string['postsby'] = '{$a} üzenetei';
$string['posttime'] = 'Üzenet időpontja';
$string['posttitle'] = 'Üzenet címe';
$string['publiccomments'] = 'Igen, bárki (a nem bejelentkezettek is)';
$string['publiccomments_info'] = 'Ha egy nem bejelentkezett felhasználó fűz az üzenethez megjegyzést, e-mailben értesítést kap erről, és elfogadhatja vagy elvetheti a megjegyzést. Erre a levélszemét megakadályozása érdekében van szükség.';
$string['re'] = 'Tárgy {$a}';
$string['rss'] = 'RSS';
$string['rssfeed'] = 'RSS-hír';
$string['savegrades'] = 'Pontok mentése';
$string['searchblogs'] = 'Üzenetek keresése';
$string['searchthisblog'] = 'Keresés az üzenetben';
$string['separateindividual'] = 'Külön személyek';
$string['separateindividualblogs'] = 'Külön személyes blogok';
$string['siteentries'] = 'Portálbejegyzések megtekintése';
$string['subscribefeed'] = 'Felíratkozás egy (megfelelő szoftvert igénylő) hírre, mellyel értesítést kap, ha a blogot frissítik.';
$string['summary'] = 'Összegzés';
$string['tags'] = 'Címkék';
$string['tags_help'] = 'A címkékkel blogüzeneteket kereshet és csoportosíthat.';
$string['tagsfield'] = 'Címkék (vesszőkkel elválasztva)';
$string['tagupdatefailed'] = 'A címkék frissítése nem sikerült.';
$string['title'] = 'Cím';
$string['unsupportedbrowser'] = '<p> Az Ön böngészője nem tudja megjeleníteni az Atom vagy az RSS híreit. </p><p> A hírek külön számítógépes programok vagy weboldalak esetén hasznosak. Ha a hírt ilyen programban szeretné használni, másolja be a címet a böngésző címsorába. </p>';
$string['url'] = 'Teljes webcím';
$string['usergrade'] = 'Felhasználói pont';
$string['userparticipation'] = 'Felhasználói részvétel';
$string['viewallusers'] = 'Minden felhasználó megtekintése';
$string['viewallusersingroup'] = 'Minden csoportbeli felhasználó megtekintése';
$string['viewblogdetails'] = 'Blogadatok megtekintése';
$string['viewblogposts'] = 'Vissza a bloghoz';
$string['viewedit'] = 'Szerkesztés megtekintése';
$string['views'] = 'Összes bloglátogatás';
$string['visibility'] = 'Ki olvashatja?';
$string['visibility_help'] = '<p> <strong>Kurzusrésztvevők számára látható</strong> - az üzenet megtekintéséhez a bloghoz hozzáféréssel kell rendelkeznie, ami általában biztosítható azzal, hogy felvette a bloghoz kapcsolódó kruzust. </p>
<p> <strong>Bejelentkezettek számára látható</strong> - Mindenki, aki bejelentkezett, megtekintheti az üzenetet, akkor is, ha nem vette fel a kurzust. </p><p> <strong>MIndenki számára látható</strong> - Bármely internet-felhasználó láthatja az üzenetet, ha tudja a blog címét. </p>';
$string['visibleblogusers'] = 'Csak a blogrésztvevők láthatják';
$string['visiblecourseusers'] = 'A kurzusban részt vevők láthatják';
$string['visibleindividual'] = 'Látható személyek';
$string['visibleindividualblogs'] = 'Látható személyes blogok';
$string['visibleloggedinusers'] = 'Bejelentkezettek láthatják';
$string['visiblepublic'] = 'Bárki láthatja';
$string['visibleyou'] = 'Csak a blogtulajdonos láthatja (magán)';
$string['yes'] = 'Igen';
