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
 * Strings for component 'local_amos', language 'hu', version '3.10'.
 *
 * @package     local_amos
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['about'] = '<p>Az AMOS a Moodle szövegeinek központi adattára. Nyomon követi a Moodle programkódjába bekerülő angol szövegeket, egybefogja a fordításaikat, valamint kezeli a közös fordítási feladatokat és előállítja a Moodle szerverein használandó nyelvi csomagokat.</p> <p>További részletek: <a href="http://docs.moodle.org/en/AMOS">Az AMOS dokumentációja</a>.</p>';
$string['amos'] = 'AMOS fordítási segédeszköz';
$string['amos:changecontriblang'] = 'Leadott szövegek nyelvének módosítása';
$string['amos:commit'] = 'Szövegtárban lévő szövegek rögzítése a fő adattárban';
$string['amos:execute'] = 'Az adott AMOScript futtatása';
$string['amos:importfile'] = 'Szövegek importálása és szövegtárba helyezése feltöltött állományból';
$string['amos:importstrings'] = 'Szövegek importálása (angolokkal együtt) közvetlenül a fő adattárba.';
$string['amos:manage'] = 'Az AMOS-portál kezelése';
$string['amos:stage'] = 'Az AMOS fordítóeszköz használata és a szövegek szövegtárba helyezése';
$string['amos:stash'] = 'A szövegtár tárolása gyűjtőfájlban';
$string['amos:usegoogle'] = 'A Google-fordító használata';
$string['applangindexfile'] = 'A Moodle App LangIndex állomány helye';
$string['applangindexfile_desc'] = 'Töltse ki a letöltési webcímet. A letöltést a cron hajtja végre.';
$string['commitbutton'] = 'Rögzítés';
$string['commitkeepstaged'] = 'Megőrzés a szövegtárban';
$string['commitmessage'] = 'Rögzítéshez kapcsolódó üzenet';
$string['commitmessageempty'] = 'Írjon rögzítéshez kapcsolódó üzenetet';
$string['commitstage'] = 'Szövegtárbeli szövegek rögzítése';
$string['commitstage_help'] = 'Szövegtárba helyezett fordítások végleges rögzítése az AMOS adattárában. A szövegtár a rögzítés előtt automatikusan frissül. Csak a zölddel jelölt szövegeket fogja rögzíteni. Rögzítés után a szövegtár törlődik.';
$string['committableall'] = 'minden nyelv';
$string['committablenone'] = 'nincs elérhető nyelv - forduljon az AMOS kezelőjéhez.';
$string['componentsall'] = 'Mind';
$string['componentsapp'] = 'Moodle Alkalmazás';
$string['componentsnone'] = 'Egy sem';
$string['componentsstandard'] = 'Alap';
$string['confirmaction'] = 'A rögzítés nem vonható vissza! Folytatja?';
$string['contribaccept'] = 'Elfogad';
$string['contribactions'] = 'Külső fordítás';
$string['contribactions_help'] = 'Jogosultságától és a munkafolyamatba való bekapcsolódásától függően az alábbi tevékenységeket hajthatja végre:

* Alkalmaz - átmásolja a leadott fordítást az Ön szövegtárába, de nem módosítja a kapcsolódó bejegyzést
* Hozzárendel - beállítja a leadott fordításért és annak beépítéséért felelős személyt
* Visszavon - törli a leadott fordításért felelős személyt
* Ellenőriz - a leadott fordításért Önt állítja be felelős személynek, a fordítást \'Ellenőrzés folyamatban\' állapotba helyezi és átmásolja a leadott fordítást az Ön szövegtárolójába
* Elfogad - a leadott fordítást elfogadottként jelöli meg
* Elutasít - a leadott fordítást elutasítottként jelöli meg; megjegyzésben indokolja meg.

A fordító e-mailben értesítést kap, ha a leadott fordítás állapota módosul.';
$string['contribapply'] = 'Alkalmaz';
$string['contribassignee'] = 'Jelölt';
$string['contribassigneenone'] = '-';
$string['contribassigntome'] = 'Nekem adja';
$string['contribauthor'] = 'Szerző';
$string['contribclosedno'] = 'Ellenőrzött fordítások elrejtése';
$string['contribclosedyes'] = 'Ellenőrzött fordítások megjelenítése';
$string['contribcomponents'] = 'Összetevők';
$string['contribid'] = 'Azonosító';
$string['contribincomingnone'] = 'Nem érkezett fordítás';
$string['contribincomingsome'] = 'Beérkezett fordítások ({$a})';
$string['contriblanguage'] = 'Nyelv';
$string['contriblanguagebutton'] = 'Átalakítás';
$string['contriblanguagechange'] = 'Hibás fordítási nyelv javítása';
$string['contriblanguagechange_help'] = 'Ha a beérkezett fordítás rossz nyelvi csomagba került, válassza ki a helyes nyelvet a lenyíló menüből, majd nyomja meg az Átalakítás gombot.';
$string['contriblanguagereport'] = 'Hibás fordítási nyelv jelentése';
$string['contriblanguagereport_help'] = 'Ha a beérkezett fordítás rossz nyelvi csomagba került, küldje el a webcímét e-mailben a `translation@moodle.org` címre. Ennek hatására a fordítás a megfelelő nyelvhez kerül át.';
$string['contriblanguagewrong'] = 'Hibás nyelv?';
$string['contribnotif'] = '[AMOS] Értesítés beérkezett fordításról (#{$a->id})';
$string['contribnotifaccepted'] = '#{$a->id} {$a->subject} beérkezett fordítását {$a->fullname} elfogadta.

------------------
Beérkezett oldal: {$a->contriburl}';
$string['contribnotifcommented'] = '#{$a->id} {$a->subject} beérkezett fordításhoz {$a->fullname} megjegyzést fűzött.


{$a->message}

---------------------------------------------------------------------
Beérkezett oldal:  {$a->contriburl}';
$string['contribnotifconverted'] = '#{$a->id} {$a->subject} beérkezett fordítását {$a->fullname} átalakította.

Köszönjük a fordítást, amely valószínűleg hibás nyelvi csomagba került.
Ellenőrzés céljából átkerült a helyes nyelvi csomagba.

Legközelebb ellenőrizze, hogy a megfelelő nyelvet választotta-e ki.


---------------------------------------------------------------------
Eredeti oldal: {$a->contriborigurl}
Új oldal: {$a->contribnewurl}';
$string['contribnotifpending'] = 'Intézkedésre váró beérkezett fordítás #{$a->id} {$a->subject}

Ellenőrizze és hagyja jóvá a beérkezett fordításokat.

Részletek: {$a->docsurl}.
---------------------------------------------------------------------
Beérkezett oldal: {$a->contriburl}';
$string['contribnotifrejected'] = '{$a->fullname} elutasította beérkezett #{$a->id} {$a->subject} fordítását.

---------------------------------------------------------------------
Beérkezett oldal:  {$a->contriburl}';
$string['contribnotifsubmitted'] = '{$a->fullname} új #{$a->id} {$a->subject} fordítást küldött be.
---------------------------------------------------------------------

{$a->message}

* Nyelv: {$a->language}
* Összetevők: {$a->components}
* Szövegek: {$a->strings}

---------------------------------------------------------------------
Beérkezett oldal: {$a->contriburl}';
$string['contribreject'] = 'Elutasít';
$string['contribresign'] = 'Visszavon';
$string['contribstaged'] = 'Szövegtárba leadott <a href="contrib.php?id={$a->id}">#{$a->id}</a> azonosítójú fordítás {$a->author} részéről';
$string['contribstagedinfo'] = 'Szövegtárba leadott fordítás';
$string['contribstagedinfo_help'] = 'A szövegtár leadott szövegeket tartalmaz, melyeket a nyelvi csomag felelősének át kell nézni és fel kell venni a hivatalos nyelvi csomagba, vagy el kell vetni (ha kihagyandók).';
$string['contribstartreview'] = 'Ellenőrzés indítása';
$string['contribstatus'] = 'Állapot';
$string['contribstatus0'] = 'Új';
$string['contribstatus10'] = 'Ellenőrzés folyamatban';
$string['contribstatus20'] = 'Elutasítva';
$string['contribstatus30'] = 'Elfogadva';
$string['contribstatus_help'] = 'Egy leadott fordítás munkafolyamata az alábbi:

* Új - a fordítást leadták, de még nem ellenőrizték
* Ellenőrzés folyamatban - a leadott fordítást egy nyelvi csomagért felelős megkapta és ellenőrzésre eltárolta
* Elutasítva - a nyelvi csomagért felelős elutasította a fordítást és feltehetőleg indoklást fűzött hozzá
* Elfogadva - a nyelvi csomagért felelős elfogadta a fordítást';
$string['contribstrings'] = 'Szövegek';
$string['contribstringseq'] = '{$a->orig} új';
$string['contribstringsnone'] = '{$a->orig} (már mindet tartalmazza a nyelvi csomag)';
$string['contribstringssome'] = '{$a->orig} ({$a->same} közülük frissebb fordítással rendelkezik)';
$string['contribsubject'] = 'Tárgy';
$string['contribsubmittednone'] = 'Nincs leadott fordítás';
$string['contribsubmittedsome'] = 'Leadott fordításai  ({$a})';
$string['contribtimemodified'] = 'Módosult';
$string['contribute'] = 'Beküld';
$string['contributenow'] = 'Most beküldi!';
$string['contributestats'] = 'Ez ideig  <strong>{$a->count}</strong> lefordított szöveg került az AMOS-ba.';
$string['contributethanks'] = 'Köszönet {$a->listcontributors} fordítónak mostani fordításáért!';
$string['contributions'] = 'Leadott fordítások';
$string['creditsaddcontributor'] = 'Fordító hozzáadása';
$string['creditsaddmaintainer'] = 'Felelős hozzáadása';
$string['creditscontact'] = 'Üzenet küldése';
$string['creditscontributors'] = 'Egyéb fordítók';
$string['creditsdelcontributor'] = 'Fordító eltávolítása';
$string['creditsdelmaintainer'] = 'Felelős eltávolítása';
$string['creditsmaintainedby'] = 'Karbantartja';
$string['creditsnomaintainer'] = 'Jelenleg nincs, aki karbantartja. <a href="{$a->url}">Vállalja a karbantartást!</a>';
$string['creditsthanks'] = 'Ezen az oldalon köszönetet mondunk mindenkinek, aki a Moodle fordításában közreműködött. Munkájuknak köszönhetően a Moodle világszerte elterjedt rendszer lett.';
$string['creditstitlelong'] = 'Nyelvi csomagok felelősei és fordítói';
$string['creditstitleshort'] = 'Köszönetnyilvánítás';
$string['diff'] = 'Összehasonlít';
$string['diffstringmode'] = 'Összehasonlítás kikapcsolása';
$string['err_exception'] = 'Hiba: {$a}';
$string['err_invalidlangcode'] = 'Érvénytelen nyelvkód';
$string['err_parser'] = 'Feldolgozási hiba: {$a}';
$string['filtercmp'] = 'Összetevők';
$string['filtercmp_desc'] = 'Ezen összetevők szövegeinek megjelenítése';
$string['filtercmpnothingselected'] = 'Válasszon egy összetevőt.';
$string['filterlng'] = 'Nyelvek';
$string['filterlng_desc'] = 'Fordítások megjelenítése ezeken a nyelveken';
$string['filterlngnothingselected'] = 'Válasszon nyelvet!';
$string['filtermis'] = 'Egyéb';
$string['filtermis_desc'] = 'A megjelenítendő szövegekre vonatkozó egyéb megszorítások';
$string['filtermisfapp'] = 'csak a  Moodle Alkalmazásban használt szövegek';
$string['filtermisfapp_help'] = 'A szöveg a Moodle Alkalmazásban {$a} alakban használatos';
$string['filtermisfhas'] = 'csak a lefordított szövegek';
$string['filtermisfhlp'] = 'csak a súgó szövegei';
$string['filtermisfmis'] = 'csak a hiányzó és az elavult szövegek';
$string['filtermisfout'] = 'csak az elavult szövegek';
$string['filtermisfstg'] = 'csak a szövegtárba helyezett szövegek';
$string['filtersid'] = 'Szöveg azonosítója';
$string['filtersid_desc'] = 'A szövegtömb kulcsa';
$string['filtersidpartial'] = ' részleges egyezés';
$string['filtertxt'] = 'Részszöveg';
$string['filtertxt_desc'] = 'A szövegben előforduló szövegrész';
$string['filtertxtcasesensitive'] = 'betűérzékeny';
$string['filtertxtregex'] = 'reguláris kifejezés';
$string['filterver'] = 'Verziók';
$string['filterver_desc'] = 'Ezen Moodle-verziók szövegeinek megjelenítése';
$string['filtervernothingselected'] = 'Válasszon verziót!';
$string['foundmissingonthispage'] = 'ezen az oldalon';
$string['googletranslate'] = 'Google-keresés';
$string['importfile'] = 'Lefordított szövegek importálása állományból';
$string['importfile_help'] = 'Ha offline fordít szövegeket, ezzel az űrlappal helyezheti őket a szövegtárba.
Feltételek:

* Az állomány érvényes Moodle PHP szövegdefiníciós fájl legyen. Példákért tekintse meg a Moodle aktuális telepítésének `/lang/en/` könyvtárát.
* Az állomány neve ugyanaz legyen, mint az angol eredetié (pl. `moodle.php`, `assignment.php` vagy `enrol_manual.php`).

Az állományban szereplő összes szöveg bekerül a kiválasztott verzió és nyelv szövegtárába.

Egyszerre több PHP-állományt is feldolgozhat, ha tömörített állományba rakja őket.';
$string['language'] = 'Nyelv';
$string['languages'] = 'Nyelvek';
$string['languagesall'] = 'Mind';
$string['languagesnone'] = 'Egy sem';
$string['lastavailable'] = 'Legfrissebb elérhető verzió';
$string['log'] = 'Napló';
$string['logfilterbranch'] = 'Verziók';
$string['logfiltercommithash'] = 'bemenő tömb';
$string['logfiltercommitmsg'] = 'A rögzítéshez fűzött üzenet tartalma';
$string['logfiltercommits'] = 'A rögzítés szűrője';
$string['logfiltercommittedafter'] = 'Rögzítés ez után';
$string['logfiltercommittedbefore'] = 'Rögzítés ez előtt';
$string['logfiltercomponent'] = 'Összetevők';
$string['logfilterlang'] = 'Nyelvek';
$string['logfiltershow'] = 'Szűrt rögzítések és szövegek megjelenítése';
$string['logfiltersource'] = 'Forrás';
$string['logfiltersourceamos'] = 'amos (webalapú fordító)';
$string['logfiltersourceautomerge'] = 'automatikus egyesítés (másik ágból másolt fordítás esetén)';
$string['logfiltersourcebot'] = 'bot (programkód ömlesztett műveletsora)';
$string['logfiltersourcecommitscript'] = 'commitscript (AMOScript a rögzítéshez fűzött üzenetben)';
$string['logfiltersourcefixdrift'] = 'fixdrift (rögzített AMOS-git drift)';
$string['logfiltersourcegit'] = 'git (a Moodle forráskódjának és az 1.x csomagoknak a git tükrözése)';
$string['logfiltersourceimport'] = 'importálás (segédprogramhoz tartozó importált szövegek)';
$string['logfiltersourcerevclean'] = 'revclean (fordított törlési folyamat)';
$string['logfilterstringid'] = 'Szövegazonosító';
$string['logfilterstrings'] = 'Szövegszűrő';
$string['logfilterusergrp'] = 'Rögzítésre leadó személy';
$string['logfilterusergrpor'] = 'vagy';
$string['maintainers'] = 'Felelős';
$string['markuptodate'] = 'A fordítás megjelölése naprakészként';
$string['markuptodatelabel'] = 'Aktuálisként elfogad';
$string['messageprovider:checker'] = 'Nyelvi csomag ellenőrzésének eredményei';
$string['messageprovider:contribution'] = 'Nyelvi csomag ellenőrzésének eredményei';
$string['morefilteringoptions'] = 'További lehetőségek';
$string['newlanguage'] = 'Új nyelv';
$string['nodiffs'] = 'Nincs eltérés';
$string['nofiletoimport'] = 'Adja meg az importálandó állományt.';
$string['nologsfound'] = 'Nincs ilyen szöveg, módosítsa a szűrőket.';
$string['nostringsfound'] = 'Nincs ilyen szöveg';
$string['nostringtoimport'] = 'Az állományban nincs érvényes szöveg. Ellenőrizze az állomány nevét és formátumát.';
$string['nothingtostage'] = 'A művelet nem adott vissza szövegtárba helyezhető szöveget.';
$string['novalidzip'] = 'A tömörített állományt nem lehet kibontani.';
$string['numofcommitsabovelimit'] = '{$a->found} leadott szöveg felel meg a szűrőnek, {$a->limit} a legfrissebb';
$string['numofcommitsunderlimit'] = '{$a->found} leadott szöveg felel meg a szűrőnek.';
$string['numofmatchingstrings'] = '{$a->commits} módosítása közül {$a->strings}  felel meg a szövegszűrőnek';
$string['outdatednotcommitted'] = 'Elavult szöveg';
$string['outdatednotcommitted_help'] = 'Az AMOS szerint a szöveg elavult lehet, mert az angol szöveg a fordítás után módosult. Ellenőrizze a fordítást.';
$string['outdatednotcommittedwarning'] = 'Elavult';
$string['ownstashactions'] = 'Gyűjtőfájlhoz tartozó tevékenységek';
$string['ownstashactions_help'] = '* Alkalmaz - a gyűjtőfájlból a szövegtárba másolja a lefordított szövegeket, a gyűjtőfájl nem módosul. A meglévőket felülírja.
* Átvisz - a gyűjtőfájlból a szövegtárba helyezi át a lefordított szövegeket vagyis Alkalmaz és Elvet).
* Elvet - elveti az összes szövegtárba helyezett szöveget.
* Lead - megnyit egy űrlapot, amelyen a szövegtár benyújtható a nyelvi csomagért felelős fordítóhoz.';
$string['ownstashes'] = 'Az Ön gyűjtőfájljai';
$string['ownstashes_help'] = 'Az Ön gyűjtőfájljainak listája';
$string['ownstashesnone'] = 'Nincs gyűjtőfájlja';
$string['permalink'] = 'Permalink';
$string['placeholder'] = 'Helyőrző';
$string['placeholder_help'] = 'A helyőrző a szövegben megjelenő utasítás, például: `{$a}` vagy `{$a->valami}`. A szöveg megjelenésekor a helyére érték kerül.

Ezeket a fordításban meg kell őrizni.';
$string['placeholderwarning'] = 'helyőrzők';
$string['pluginclasscore'] = 'Alapvető alrendszerek';
$string['pluginclassnonstandard'] = 'Nem szabványos segédprogramok';
$string['pluginclassstandard'] = 'Szabványos segédprogramok';
$string['pluginname'] = 'AMOS';
$string['presetcommitmessage'] = '{$a->author} által leadott #{$a->id} fordítás';
$string['presetcommitmessage2'] = '{$a->source} hiányzó szövegeinek egyesítése {$a->target} verzióval';
$string['presetcommitmessage3'] = 'A(z) {$a->versiona} és {$a->versionb} verziók közötti eltérések kiküszöbölése';
$string['privacy:commitnumber'] = '{$a} rögzítése';
$string['privacy:contribnumber'] = '{$a} leadott fordítás';
$string['privacy:filterusage'] = 'Szűrőhasználat';
$string['privacy:metadata:db:amoscommits'] = 'Megőrzi az összes rögzítéshez kapcsolódó metaadatot.';
$string['privacy:metadata:db:amoscommits:commitmsg'] = 'A felhasználó üzenetének rögzítése.';
$string['privacy:metadata:db:amoscommits:timecommitted'] = 'A rögzítés időbélyegzője.';
$string['privacy:metadata:db:amoscommits:userinfo'] = 'Felhasználó azonosítása a rögzítési forrás helye szerinti formában, pl. Git esetén.';
$string['privacy:metadata:db:amoscontributions'] = 'Közösségi tagok által leadott fordítások.';
$string['privacy:metadata:db:amoscontributions:lang'] = 'A leadott fordításhoz tartozó nyelvkód.';
$string['privacy:metadata:db:amoscontributions:message'] = 'A leadott munkát leíró eredeti üzenet.';
$string['privacy:metadata:db:amoscontributions:stashid'] = 'A csatolt gyűjtőfájl belső azonosítója.';
$string['privacy:metadata:db:amoscontributions:status'] = 'A leadott fordítás munkamenetének állapota.';
$string['privacy:metadata:db:amoscontributions:subject'] = 'A leadott munka tárgya.';
$string['privacy:metadata:db:amoscontributions:timecreated'] = 'A leadott fordítás rekordjának létrehozási időbélyegzője.';
$string['privacy:metadata:db:amoscontributions:timemodified'] = 'A leadott fordítás rekordjának módosítási időbélyegzője.';
$string['privacy:metadata:db:amosfilterusage'] = 'Az  AMOS-fordító szűrőhasználatának naplója.';
$string['privacy:metadata:db:amosfilterusage:currentlang'] = 'Az aktuális munkamenet nyelve.';
$string['privacy:metadata:db:amosfilterusage:ismaintainer'] = 'A felhasználó rögzíthet az AMOS adattárába?';
$string['privacy:metadata:db:amosfilterusage:numofcomponents'] = 'A kiválasztott összetevők száma';
$string['privacy:metadata:db:amosfilterusage:numoflanguages'] = 'A kiválasztott nyelvek száma';
$string['privacy:metadata:db:amosfilterusage:numofversions'] = 'A kiválasztott verziók száma';
$string['privacy:metadata:db:amosfilterusage:showexistingonly'] = 'Csak a létező fordítások jelenjenek meg?';
$string['privacy:metadata:db:amosfilterusage:showgreylistedonly'] = 'Csak az elutasított fordítások jelenjenek meg?';
$string['privacy:metadata:db:amosfilterusage:showhelpsonly'] = 'Csak a súgó fordításai jelenjenek meg?';
$string['privacy:metadata:db:amosfilterusage:showmissingonly'] = 'Csak a hiányzó és az elavult fordítások jelenjenek meg?';
$string['privacy:metadata:db:amosfilterusage:showoutdatedonly'] = 'Csak az elavult fordítások jelenjenek meg?';
$string['privacy:metadata:db:amosfilterusage:showstagedonly'] = 'Csak a szövegtárban lévő fordítások jelenjenek meg?';
$string['privacy:metadata:db:amosfilterusage:showwithoutgreylisted'] = 'Az elutasított fordítások törlődjenek az eredményből?';
$string['privacy:metadata:db:amosfilterusage:stringidpartial'] = 'A stringid-hez szükség van részleges egyezésre?';
$string['privacy:metadata:db:amosfilterusage:substringcasesensitive'] = 'A részszöveget tekintse betűérzékenynek?';
$string['privacy:metadata:db:amosfilterusage:substringregex'] = 'A részszöveget tekintse reguláris kifejezésnek?';
$string['privacy:metadata:db:amosfilterusage:timesubmitted'] = 'A szűrősablon leadásának időbélyegzője';
$string['privacy:metadata:db:amosfilterusage:usercountry'] = 'A felhasználó profiljában kiválasztott ország kódja';
$string['privacy:metadata:db:amosfilterusage:userlang'] = 'A felhasználó profiljában megadott nyelv';
$string['privacy:metadata:db:amosfilterusage:usesdefaultlang'] = 'A felhasználó az előre kiválasztott nyelveket használta?';
$string['privacy:metadata:db:amosfilterusage:usesdefaultversion'] = 'A felhasználó a sablonban az előre kiválasztott verziókat használta?';
$string['privacy:metadata:db:amosfilterusage:withstringid'] = 'Volt megadva stringid?';
$string['privacy:metadata:db:amosfilterusage:withsubstring'] = 'Volt megadva keresendő részszöveg?';
$string['privacy:metadata:db:amosstashes'] = 'A gyűjtőfájlok adatait a gyűjtőben őrzi';
$string['privacy:metadata:db:amosstashes:components'] = 'A gyűjtőben tárolt összetevők listája';
$string['privacy:metadata:db:amosstashes:id'] = 'A gyűjtőfájl belső azonosítója';
$string['privacy:metadata:db:amosstashes:languages'] = 'A gyűjtőben tárolt nyelvek listája';
$string['privacy:metadata:db:amosstashes:message'] = 'A gyűjtőfájlt leíró teljes üzenet mint rögzítési alapüzenet a leadott fordítás rögzítéséhez.';
$string['privacy:metadata:db:amosstashes:strings'] = 'A gyűjtőfájl címe';
$string['privacy:metadata:db:amosstashes:timecreated'] = 'A gyűjtőfájl létrehozásának időbélyegzője';
$string['privacy:metadata:db:amosstashes:timemodified'] = 'A rekord módosításának időbélyegzője';
$string['privacy:metadata:db:amostranslators'] = 'Egy nyelvi csomag és egy felhasználó kapcsolatát írja le. Ez lehet egy csomag felelőse (aki jogosult a nyelvi csomagot rögzíteni), vagy egy konkrét fordító (aki a köszönetnyilvánítási oldalon jelenik meg akkor is, ha még nem adott le fordítást).';
$string['privacy:metadata:db:amostranslators:lang'] = 'A fordító fordítási nyelvének kódja, vagy csillag, ha minden nyelvre fordíthat.';
$string['privacy:metadata:db:amostranslators:status'] = 'Meghatározza, hogy a felhasználó egy nyelvi csomag felelőse (0), vagy egy konkrét fordító (1).';
$string['privacy:metadata:external:languagepacks'] = 'A leadott fordítások tömörített állományokba kerülnek globális szétosztás és Moodle-portálokon való telepítés végett.';
$string['privacy:metadata:external:languagepacks:email'] = 'A nyelvi csomag tartalmazhatja a fordító e-mail-címét.';
$string['privacy:metadata:external:languagepacks:firstname'] = 'A nyelvi csomag tartalmazhatja a fordító keresztnevét.';
$string['privacy:metadata:external:languagepacks:lastname'] = 'A nyelvi csomag tartalmazhatja a fordító vezetéknevét.';
$string['privacy:metadata:subsystem:comment'] = 'Írja le, miként használja a segédprogram a megjegyzések alrendszerét.';
$string['privacy:stashnumber'] = '{$a} gyűjtőfájl';
$string['privileges'] = 'Jogosultságai';
$string['privilegesnone'] = 'A nyilvános információhoz csak olvasási jogosultsággal rendelkezik';
$string['processing'] = 'Feldolgozás...';
$string['quicklinks'] = 'Gyors ugrópontok';
$string['quicklinks_amos'] = 'AMOS fordító';
$string['quicklinks_forum'] = 'Fordítási fórum';
$string['quicklinks_manual'] = 'Felhasználói kézikönyv';
$string['quicklinks_newcomers'] = 'Segítség új közremúködőknek';
$string['requestactions'] = 'Tevékenység';
$string['requestactions_help'] = '* Alkalmaz - a lefordított szövegeket átmásolja a szövegtárba. A meglévőt felülírja.
* Elrejt - az átmásolandó szöveget elrejti.';
$string['savefilter'] = 'Szűrőbeállítások mentése';
$string['script'] = 'AMOScript';
$string['script_help'] = 'Az AMOScript a szövegtárolón végrehajtandó műveletek utasításainak a készlete';
$string['scriptexecute'] = 'Végrehajtás és az eredmény szövegtárba helyezése';
$string['sourceversion'] = 'Forrásverzió';
$string['stage'] = 'Szövegtár';
$string['stageactions'] = 'Szövegtárhoz kapcsolódó tevékenységek';
$string['stageactions_help'] = '* Szövegtárba helyezett szöveg szerkesztése  - módosítja a fordító szűrőbeállításait, így csak a szövegtárba helyezett szövegek lesznek láthatók.
* Nem rögzíthető szövegek eltávolítása - kiveszi a szövegtárból azokat a szövegeket, amelyek rögzítésére nincs jogosultsága. A szövegtár rögzítés előtt automatikusan kiürül.
* Frissítés - kiveszi a szövegtárból azokat a szövegeket, amelyek vagy nem változtak, vagy régebbiek az adattárban lévőknél. A szövegtár rögzítés előtt automatikusan frissítődik.
* Szövegtár ürítése - törli a szövegtárat, a szövegtárba leadott fordítások elvesznek.';
$string['stagedownload'] = 'Letöltés';
$string['stageedit'] = 'A szövegtár szerkesztése';
$string['stageprune'] = 'Nem rögzíthető szövegek eltávolítása';
$string['stagerebase'] = 'Frissítés';
$string['stagestringsnocommit'] = 'A szövegtár {$a->staged} szöveget tartalmaz';
$string['stagestringsnone'] = 'A szövegtár nem tartalmaz szöveget';
$string['stagestringssome'] = 'A szövegtár {$a->staged} szöveget tartalmaz, ebből {$a->committable} rögzíthető';
$string['stagesubmit'] = 'Szövegek leadása a fordításért felelős személynek';
$string['stagetoolopen'] = 'Áttérés a szövegtárhoz';
$string['stagetranslation'] = 'Fordítás';
$string['stagetranslation_help'] = 'Megjeleníti a rögzítendő, szövegtárban lévő fordítást. A cella háttérszínének jelentése:

* Zöld - hozzáadott egy hiányzó fordítást, és most rögzítheti.
* Sárga - módosított egy szöveget, és most rögzítheti a változtatást.
* Kék - módosította a szöveget vagy hozzáadott egy hiányzó fordítást, de nem rögzítheti.
* Nincs szín - a szövegtárban lévő fordítás azonos a jelenlegivel, ezért rögzítésére nem kerül sor.';
$string['stageunstageall'] = 'Szövegtár ürítése';
$string['stashactions'] = 'Folyamatban lévő munka mentése';
$string['stashactions_help'] = 'A gyűjtőfájl az adott szövegtárat tükrözi. A gyűjtőfájlokat a nyelvi csomagba való integráláshoz le lehet adni a fordításért felelős személynek';
$string['stashapply'] = 'Alkalmaz';
$string['stashautosave'] = 'Automatikusan elmentett biztonsági gyűjtőfájl';
$string['stashautosave_help'] = 'Ez a gyűjtőfájl tartalmazza az adott szövegtár legfrissebb változatát. Biztonsági mentésként használhatja, ha pl. véletlenül törlődnek a szövegtárban lévő szövegek. Az \'Alkalmaz\' visszamásolja a gyűjtőfájlban lévő szövegeket a szövegtárba (az ott lévőket felülírja).';
$string['stashcomponents'] = '<span>Összetevők:</span> {$a}';
$string['stashdownload'] = 'Letöltés';
$string['stashdrop'] = 'Elvet';
$string['stashes'] = 'Gyűjtőfájlok';
$string['stashlanguages'] = '<span>Nyelvek:</span> {$a}';
$string['stashpop'] = 'Áthelyez';
$string['stashpush'] = 'A szövegtárban lévő szövegeket új gyűjtőfájlba helyezi át';
$string['stashstrings'] = '<span>Szövegek száma:</span> {$a}';
$string['stashsubmit'] = 'Leadás a fordításért felelős személynek';
$string['stashsubmitdetails'] = 'Leadás adatai';
$string['stashsubmitmessage'] = 'Üzenet';
$string['stashsubmitsubject'] = 'Tárgy';
$string['stashtitle'] = 'Gyűjtőfájl neve';
$string['stashtitledefault'] = 'Folyamatban lévő munka -  {$a->time}';
$string['stringhistory'] = 'Előzmény';
$string['strings'] = 'Szövegek';
$string['submitting'] = 'Fordítás leadása';
$string['submitting_help'] = 'Elküldi a lefordított szövegeket a fordításért felelős személynek, aki beépíti azt a nyelvi csomagba. Üzenetben tájékoztathatja őt a munka részleteiről és arról, miért szeretné a fordítását a nyelvi csomagba beépíteni.';
$string['targetversion'] = 'Célnyelvi változat';
$string['timeline'] = 'idősor';
$string['translatortool'] = 'Fordító';
$string['translatortoolopen'] = 'Az AMOS fordító megnyitása';
$string['translatortranslation'] = 'Fordítás';
$string['translatortranslation_help'] = 'A szerkesztő megnyitásához kattintson a cellára. Írja be a fordítást, a fordítás szövegtárba helyezéséhez kattintson a cellán kívül. A cella háttérszínének jelentése:

* Zöld - a szöveg már le van fordítva, de a fordítást módosíthatja.
* Sárga - a szöveget felülírhatták . Az angol változat módosulhatott a szöveg lefordítása után.
* Piros - a szöveg nincs lefordítva.
* Kék - módosította a fordítást, és az a szövegtárba került.
* Szürke - Az AMOS-szal nem fordítható. Például a korábbi 1.9-es Moodle szövegeit csak a korábbi CVS-en keresztül lehet szerkeszteni.

A nyelvi csomag felelőse a leadható szövegek cellájának sarkában egy kis piros jelet lát.';
$string['typecontrib'] = 'Nem szabványos segédprogramok';
$string['typecore'] = 'Alapvető alrendszerek';
$string['typestandard'] = 'Szabványos segédprogramok';
$string['unableenfixaddon'] = 'Angol javítások csak szabványos segédprogramok esetén engedélyezettek';
$string['unableenfixcountries'] = 'Az országneveket az  ISO 3166-1 tartalmazza.';
$string['unableunmaintained'] = 'A(z)  \'{$a}\' nyelvi csomagnak pillanatnyilag nincs felelőse, ezért nem kerülhet sor fordítások elfogadására. Esetleg vegye fontolóra, szeretne-e a(z)  \'{$a}\' nyelv fordításainak a felelőse lenni.';
$string['unstage'] = 'Nem helyezi szövegtárba';
$string['unstageconfirm'] = 'Biztos?';
$string['unstaging'] = 'Nem helyezi szövegtárba';
$string['untranslate'] = 'fordítás elvetése';
$string['untranslateconfirm'] = '<p>Törli a(z) <code>{$a->stringid}</code> szöveg, <code>{$a->component}</code> összetevő  létező fordítását a(z) <code>{$a->language}</code> nyelvi csomag minden verziójából.</p><p>Biztosan ezt akarja?</p>';
$string['untranslatetitle'] = 'Fordítás törlése a nyelvi csomagból';
$string['untranslating'] = 'Fordítás elvetése';
$string['userdefaultreset'] = 'Alapbeállítások visszaállítása';
$string['version'] = 'Verzió';
