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
 * Strings for component 'blog', language 'hu', version '3.10'.
 *
 * @package     blog
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addnewentry'] = 'Új üzenet hozzáadása';
$string['addnewexternalblog'] = 'Külső blog regisztrálása...';
$string['assocdescription'] = 'Ha egy kurzusról és/vagy tevékenységmodulokról ír, itt válassza ki őket.';
$string['associated'] = 'Kapcsolódó {$a}';
$string['associatewithcourse'] = '{$a->coursename} kurzusról szóló blog';
$string['associatewithmodule'] = 'Blog {$a->modtype}: {$a->modname} témakörben';
$string['association'] = 'Kapcsolódás';
$string['associations'] = 'Kapcsolódások';
$string['associationunviewable'] = 'Az üzenetet mások csak akkor tekinthetik meg, ha kurzust kapcsol hozzá vagy módosítja az \'Értesítendő\' mezőt.';
$string['autotags'] = 'Címkék hozzáadása';
$string['autotags_help'] = '<p>A külső blogjából ezen portálra másolandó blogüzenetekhez automatikusan kapcsolódó címkék vesszővel elválasztott felsorolása. A címkékkel szűrheti a blogüzeneteket és fellelheti azokat, amelyek a külső bloghoz kapcsolódnak.</p>';
$string['backupblogshelp'] = 'Bekapcsolásakor a blogok bekerülnek a PORTÁL automatikusan mentett állományai közé';
$string['blockexternalstitle'] = 'Külső blogok';
$string['blog'] = 'Blog';
$string['blogaboutthis'] = 'Blog {$a->type} témakörben';
$string['blogaboutthiscourse'] = 'Üzenet hozzáadása a kurzusról';
$string['blogaboutthismodule'] = 'Üzenet hozzáadása erről {$a}';
$string['blogadministration'] = 'Blog kezelése';
$string['blogdeleteconfirm'] = 'Törli a(z) \'{$a}\' blogbejegyzést?';
$string['blogdisable'] = 'A blogolás ki van kapcsolva!';
$string['blogentries'] = 'Blogüzenetek';
$string['blogentriesabout'] = 'Blogüzenetek {$a} témakörben';
$string['blogentriesbygroupaboutcourse'] = 'Blogüzenetek {$a->course} témakörben  {$a->group} részéről';
$string['blogentriesbygroupaboutmodule'] = 'Blogüzenetek {$a->mod} témakörben  {$a->group} részéről';
$string['blogentriesbyuseraboutcourse'] = 'Blogüzenetek {$a->course} témakörben  {$a->user} részéről';
$string['blogentriesbyuseraboutmodule'] = 'Blogüzenetek {$a->mod} témakörben {$a->user} részéről';
$string['blogentrybyuser'] = '{$a} blogüzenete';
$string['blogpreferences'] = 'Blogbeállítások';
$string['blogs'] = 'Blogok';
$string['blogscourse'] = 'Kurzusblogok';
$string['blogssite'] = 'Portálblogok';
$string['blogtags'] = 'Blogcímkék';
$string['cannotviewcourseblog'] = 'Nincs engedélye a kurzus blogjainak megtekintéséhez';
$string['cannotviewcourseorgroupblog'] = 'Nincs engedélye a kurzus/csoport blogjainak megtekintéséhez';
$string['cannotviewsiteblog'] = 'Nincs engedélye a portál összes blogjának a megtekintéséhez';
$string['cannotviewuserblog'] = 'Nincs engedélye felhasználói blogok olvasáshoz';
$string['configexternalblogcrontime'] = 'Milyen gyakran ellenőrzi a Moodle, hogy érkeztek-e új külső blogüzenetek?';
$string['configmaxexternalblogsperuser'] = 'Egy felhasználó ennyi külső blogüzenetet kapcsolhat Moodle-blogjához.';
$string['configuseblogassociations'] = 'Blogüzenetek kurzusokhoz vagy kurzusmodulokhoz kapcsolásának engedélyezése';
$string['configuseexternalblogs'] = 'Bekapcsolja külső blogüzenetek felhasználói hozzáadását. A Moodle rendszeresen ellenőrzi ezeket az üzeneteket, az újakat pedig a felhasználó helyi blogjába másolja át.';
$string['courseblog'] = '{$a} kurzusblog';
$string['courseblogdisable'] = 'A kurzusblog nincs bekapcsolva';
$string['courseblogs'] = 'A felhasználók csak a kurzusban részt vevők számára írt blogüzeneteket láthatják';
$string['deleteblogassociations'] = 'Blogkapcsolatok törlése';
$string['deleteblogassociations_help'] = '<p>A blogüzenetek megmaradnak, de már nem kapcsolódnak a kurzushoz vagy annak tevékenységeihez és forrásaihoz.</p>';
$string['deleteentry'] = 'Bejegyzés törlése';
$string['deleteexternalblog'] = 'A külső blog törlése a bejegyzésből';
$string['deleteotagswarn'] = 'Biztosan eltávolítja ez(eke)t a címké(ke)t minden blogüzenetből és törli a rendszerből?';
$string['description'] = 'Leírás';
$string['description_help'] = 'Külső blogját összegző egy-két mondatos leírás. Ha üresen hagyja, a külső blogban meglévő leírás jelenik meg helyette.';
$string['donothaveblog'] = 'Önnek nincs saját blogja.';
$string['editentry'] = 'Blogüzenet szerkesztése';
$string['editexternalblog'] = 'A külső blogüzenet szerkesztése';
$string['emptybody'] = 'A blogüzenet törzse nem lehet üres';
$string['emptyrssfeed'] = 'A megadott URL nem mutat érvényes RSS-hírre.';
$string['emptytitle'] = 'A blogüzenet címe nem lehet üres';
$string['emptyurl'] = 'Webcímet kell megadnia egy érvényes RSS-hírhez';
$string['entrybody'] = 'Blogüzenet törzse';
$string['entrybodyonlydesc'] = 'Üzenet leírása';
$string['entryerrornotyours'] = 'Ez nem az Ön üzenete';
$string['entrysaved'] = 'Az üzenet elmentése megtörtént';
$string['entrytitle'] = 'Üzenet címe';
$string['eventblogassociationadded'] = 'Blogkapcsolás létrehozva';
$string['eventblogassociationdeleted'] = 'Blogtársítás törölve';
$string['eventblogentriesviewed'] = 'Megtekintett blogüzenetek';
$string['eventblogexternaladded'] = 'Külső blog bejegyezve';
$string['eventblogexternalremoved'] = 'Külső blog bejegyzése törölve';
$string['eventblogexternalupdated'] = 'Külső blog frissítve';
$string['evententryadded'] = 'Blogbejegyzés hozzáadva';
$string['evententrydeleted'] = 'Blogbejegyzés törölve.';
$string['evententryupdated'] = 'Blogüzenet frissítve';
$string['eventexternalblogsviewed'] = 'Külső bejegyzett blogok megtekintve';
$string['externalblogcrontime'] = 'Külső blog cronjának ütemezése';
$string['externalblogdeleteconfirm'] = 'Lekapcsolja ezt a külső blogot?';
$string['externalblogdeleted'] = 'Külső blog lekapcsolva';
$string['externalblogs'] = 'Külső blogok';
$string['feedisinvalid'] = 'A hír érvénytelen';
$string['feedisvalid'] = 'A hír érvényes';
$string['filterblogsby'] = 'Üzenetek szűrési szempontja...';
$string['filtertags'] = 'Címkék szűrése';
$string['filtertags_help'] = 'Ezzel szűrheti a használni kívánt üzeneteket. A külső blogból csak az itt megadott (vesszővel elválasztott) címkéknek megfelelő üzenetek átmásolására kerül sor.';
$string['groupblog'] = 'Csoportblog: {$a}';
$string['groupblogdisable'] = 'A csoportblog nincs bekapcsolva';
$string['groupblogentries'] = '{$a->coursename} témakörben {$a->groupname}
csoporthoz kapcsolódó blogüzenetek';
$string['groupblogs'] = 'A felhasználók csak a csoportban részt vevők blogüzeneteit láthatják';
$string['incorrectblogfilter'] = 'A megadott blogszűrő típusa hibás';
$string['intro'] = 'Az RSS-üzenet egy vagy több blogból automatikusan állt elő.';
$string['invalidgroupid'] = 'Érvénytelen csoportazonosító';
$string['invalidurl'] = 'A webcím nem elérhető';
$string['linktooriginalentry'] = 'Kapcsolás az eredeti blogüzenethez';
$string['maxexternalblogsperuser'] = 'Külső blogok felhasználónkénti maximális száma';
$string['myprofileuserblogs'] = 'Az összes blogbejegyzés megtekintése';
$string['name'] = 'Név';
$string['name_help'] = 'Külső blogját leíró név. Ha üres, a külső blog címe jelenik meg.';
$string['noentriesyet'] = 'Itt nincsenek látható üzenetek';
$string['noguestpost'] = 'Vendégek nem írhatnak blogüzeneteket!';
$string['nopermissionstodeleteentry'] = 'Nincs engedélye a blogüzenet törléséhez.';
$string['norighttodeletetag'] = 'Ezt a címkét Ön nem törölheti: {$a}';
$string['nosuchentry'] = 'Nincs ilyen blogüzenet';
$string['notallowedtoedit'] = 'Ezt az üzenetet Ön nem szerkesztheti';
$string['numberofentries'] = 'Üzenetek: {$a}';
$string['numberoftags'] = 'Megjelenítendő címkék száma';
$string['page-blog-edit'] = 'Blogszerkesztő oldalak';
$string['page-blog-index'] = 'Bloglistázó oldalak';
$string['page-blog-x'] = 'Minden blogoldal';
$string['pagesize'] = 'Oldalankénti blogüzenetek száma';
$string['permalink'] = 'Permalink';
$string['personalblogs'] = 'A felhasználók csak saját blogjaikat láthatják';
$string['preferences'] = 'Blogbeállítások';
$string['privacy:metadata:core_comments'] = 'Blogbejegyzésekhez kapcsolódó megjegyzések';
$string['privacy:metadata:core_files'] = 'Blogbejegyzésekhez csatolt állományok';
$string['privacy:metadata:core_tag'] = 'Blogbejegyzésekhez kapcsolódó címkék';
$string['privacy:metadata:external'] = 'Külső RSS-hírfolyam hivatkozása';
$string['privacy:metadata:external:description'] = 'A hírfolyam leírása';
$string['privacy:metadata:external:filtertags'] = 'Bejegyzések szűrésére használandó címkék felsorolása';
$string['privacy:metadata:external:name'] = 'A hírfolyam neve';
$string['privacy:metadata:external:timefetched'] = 'A hírfolyam utolsó elérésének dátuma';
$string['privacy:metadata:external:timemodified'] = 'Az utolsó kapcsolódásmódosítás dátuma';
$string['privacy:metadata:external:url'] = 'A hírfolyam webcíme';
$string['privacy:metadata:external:userid'] = 'A külső bejegyzést hozzáadó felhasználó azonosítója';
$string['privacy:metadata:post'] = 'Blogbejegyzésekhez kapcsolódó információ';
$string['privacy:metadata:post:content'] = 'Külső bejegyzés tartalma';
$string['privacy:metadata:post:created'] = 'A bejegyzés létrehozásának dátuma';
$string['privacy:metadata:post:lastmodified'] = 'A bejegyzés utolsó módosításának dátuma';
$string['privacy:metadata:post:publishstate'] = 'Láthatják-e mások is a bejegyzést';
$string['privacy:metadata:post:subject'] = 'A bejegyzés címe';
$string['privacy:metadata:post:summary'] = 'Blogbejegyzés szövege';
$string['privacy:metadata:post:uniquehash'] = 'Külső bejegyzés egyedi azonosítója, rendszerint a webcíme';
$string['privacy:metadata:post:userid'] = 'A bejegyzést hozzáadó felhasználó azonosítója.';
$string['privacy:metadata:post:usermodified'] = 'A bejegyzést utoljára módosító felhasználó';
$string['privacy:path:blogassociations'] = 'Kapcsolódó blogüzenetek';
$string['privacy:unknown'] = 'Ismeretlen';
$string['publishto'] = 'Közzéteendő itt';
$string['publishto_help'] = '<p>Három beállítás közül választhat:</p>

<p><strong>Csak én (piszkozat)</strong> - A bejegyzést Önön kívül csak a rendszergazdák láthatják.</p>

<p><strong>A portálon bárki</strong> - A bejegyzést minden portálra feliratkozott láthatja.</p>

<p><strong>A világon bárki</strong> - A bejegyzést bárki, akár vendégek is láthatják.</p>';
$string['publishtocourse'] = 'Kurzustársai';
$string['publishtocourseassoc'] = 'Kapcsolódó kurzustársak';
$string['publishtocourseassocparam'] = '{$a} kurzustársai';
$string['publishtogroup'] = 'Csoporttársai';
$string['publishtogroupassoc'] = 'Kapcsolódó kurzusbeli csoporttársak';
$string['publishtogroupassocparam'] = '{$a} csoporttársai';
$string['publishtonoone'] = 'Csak én (piszkozat)';
$string['publishtosite'] = 'A portálon bárki';
$string['publishtoworld'] = 'A világon bárki';
$string['readfirst'] = 'Olvassa el!';
$string['relatedblogentries'] = 'Kapcsolódó blogüzenetek';
$string['retrievedfrom'] = 'Forrás helye';
$string['rssfeed'] = 'RSS-hír blogja';
$string['searchterm'] = 'Keresés itt: {$a}';
$string['settingsupdatederror'] = 'Hiba történt, a blog beállításait nem lehetett frissíteni';
$string['siteblogdisable'] = 'A portálblog nincs bekapcsolva';
$string['siteblogheading'] = 'Portálblog';
$string['siteblogs'] = 'A portál minden felhasználója minden blogüzenetet láthat';
$string['tagdatelastused'] = 'Címke utolsó használatának dátuma';
$string['tagparam'] = 'Címke: {$a}';
$string['tags'] = 'Címkék';
$string['tagsort'] = 'Címkék megjelenítésének rendezési szempontja';
$string['tagtext'] = 'Címkeszöveg';
$string['timefetched'] = 'Utolsó szinkronizálás időpontja';
$string['timewithin'] = 'Ennyi napon belül használt címkék megjelenítése';
$string['updateentrywithid'] = 'Üzenet frissítése';
$string['url'] = 'RSS-hír webcíme';
$string['url_help'] = 'Adja meg külső blogja RSS-hírének webcímét.';
$string['useblogassociations'] = 'Blogkapcsolások engedélyezése';
$string['useexternalblogs'] = 'Külső blogok bekapcsolása';
$string['userblog'] = '{$a} felhasználói blog';
$string['userblogentries'] = '{$a} blogüzenetei';
$string['valid'] = 'Érvényes';
$string['viewallblogentries'] = '{$a} témakörben írt összes üzenet';
$string['viewallmodentries'] = '{$a->type} témakörben írt összes üzenet megtekintése';
$string['viewallmyentries'] = 'Összes üzenetem megtekintése';
$string['viewblogentries'] = '{$a->type} témakörben írt üzenetek';
$string['viewblogsfor'] = 'Összes ilyen üzenet megtekintése...';
$string['viewcourseblogs'] = 'Összes kurzusüzenet megtekintése';
$string['viewentriesbyuseraboutcourse'] = '{$a} összes kurzusüzenetének megtekintése';
$string['viewgroupblogs'] = 'Összes ilyen csoport üzenetének megtekintése...';
$string['viewgroupentries'] = 'Csoportüzenet';
$string['viewmodblogs'] = 'Összes ilyen modulüzenet megtekintése...';
$string['viewmodentries'] = 'Modulüzenetek';
$string['viewmyentries'] = 'Üzeneteim';
$string['viewmyentriesaboutcourse'] = 'Kurzusüzeneteim megtekintése';
$string['viewmyentriesaboutmodule'] = 'Üzeneteim megtekintése erről: {$a}';
$string['viewsiteentries'] = 'Összes üzenet megtekintése';
$string['viewuserentries'] = '{$a} összes üzenetének megtekintése';
$string['worldblogs'] = 'A bárki számára elérhetőként megjelölt blogüzeneteket mindenki elolvashatja';
$string['wrongexternalid'] = 'Hibás külső blogazonosító';
$string['wrongpostid'] = 'Hibás blogüzenet-azonosító';
