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
 * Strings for component 'tool_dataprivacy', language 'hu', version '3.10'.
 *
 * @package     tool_dataprivacy
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitiesandresources'] = 'Tevékenységek és tananyagok';
$string['addcategory'] = 'Kategória hozzáadása';
$string['addnewdefaults'] = 'Új alapmodul hozzáadása';
$string['addpurpose'] = 'Cél hozzáadása';
$string['addroleoverride'] = 'Szerepfelülírás hozzáadása';
$string['approve'] = 'Jóváhagyás';
$string['approvedrequestsubmitted'] = 'Kérelmét megkaptuk, rövidesen feldolgozzuk.';
$string['approverequest'] = 'Kérés jóváhagyása';
$string['automaticdatadeletionapproval'] = 'Automatikus adattörlési kérelem jóváhagyása';
$string['automaticdatadeletionapproval_desc'] = 'Bekapcsolása esetén az adattörlési kérelmek jóváhagyása automatikus.
Az automatikus jóváhagyás bekapcsolása csak az új adattörlési kérelmeket érinti. A meglévő és jóváhagyásra váró adattörlési kérelmeket továbbra is kézzel kell az adatvédelmi felelősnek jóváhagynia.';
$string['automaticdataexportapproval'] = 'Automatikus adatexportálási kérelem jóváhagyása';
$string['automaticdataexportapproval_desc'] = 'Bekapcsolása esetén az adatexportálási kérelmek jóváhagyása automatikus.
Az automatikus jóváhagyás bekapcsolása csak az új adatexportálási kérelmeket érinti. A meglévő és jóváhagyásra váró adatexportálási kérelmeket továbbra is kézzel kell az adatvédelmi felelősnek jóváhagynia.';
$string['automaticdeletionrequests'] = 'Automatikus adattörlési kérések létrehozása';
$string['automaticdeletionrequests_desc'] = 'Bekapcsolása esetén a kézzel törölt felhasználói fiókokhoz automatikus adattörlési kérés jön létre.';
$string['bulkapproverequests'] = 'Kérések jóváhagyása';
$string['bulkdenyrequests'] = 'Kérések elutasítása';
$string['cachedef_contextlevel'] = 'A környezeti szint célja és kategóriája';
$string['cachedef_purpose'] = 'Adatcélok';
$string['cachedef_purpose_overrides'] = 'Célfelülírások az Adatvédelmi eszközben';
$string['cancelrequest'] = 'Kérés törlése';
$string['cancelrequestconfirmation'] = 'Biztosan törli az adatkérést?';
$string['cannotreset'] = 'A kérés nem állítható vissza. Csak elutasított kéréseket lehet visszaállítani.';
$string['categories'] = 'Kategóriák';
$string['categorieslist'] = 'Adatkategóriák felsorolása';
$string['category'] = 'Kategória';
$string['category_help'] = 'Az adatregiszterben egy kategória egy adattípust ír le. Hozzáadhat egy új kategóriát vagy - öröklés kiválasztása esetén - egy fölöttes környezetből származó adatkategória alkalmazására kerül sor. A környezetek (alulról fölfelé): Blokkok > Tevékenységmodulok > Kurzusok > Kurzuskategóriák > Felhasználó > Portál.';
$string['categorycreated'] = 'Kategória létrehozva';
$string['categorydefault'] = 'Alapkategória';
$string['categorydefault_help'] = 'Az alapkategória az egyes új előfordulásokra alkalmazott adatkategória. Öröklés kiválasztása esetén egy fölöttes környezetből származó adatkategória alkalmazására kerül sor. A környezetek (alulról fölfelé): Blokkok > Tevékenységmodulok > Kurzusok > Kurzuskategóriák > Felhasználó > Portál.';
$string['categoryupdated'] = 'Kategória frissítve';
$string['close'] = 'Bezárás';
$string['compliant'] = 'Megfelelő';
$string['confirmapproval'] = 'Biztosan jóváhagyja ezt az adatkérést?';
$string['confirmbulkapproval'] = 'A kiválasztott adatkéréseket biztosan ömlesztve kívánja jóváhagyni?';
$string['confirmbulkdenial'] = 'A kiválasztott adatkéréseket biztosan ömlesztve kívánja elutasítani?';
$string['confirmcompletion'] = 'Biztosan befejezettnek jelöli ezt a felhasználói érdeklődést?';
$string['confirmcontextdeletion'] = 'Biztosan jóváhagyja a kiválasztott környezetek törlését? Ezzel törli az egyes alkörnyezetekhez tartozó összes felhasználói adatot is.';
$string['confirmdenial'] = 'Biztosan elutasítja ezt az adatkérést?';
$string['confirmrequestresubmit'] = 'Biztosan érvényteleníti  {$a->username} felhasználó {$a->type} kérését, és újból leadja?';
$string['contactdataprotectionofficer'] = 'Kapcsolatfelvétel az adatvédelmi ügyintézővel';
$string['contactdataprotectionofficer_desc'] = 'Bekapcsolása esetén fölveheti a kapcsolatot az adatvédelmi ügyintézővel és a profiloldalán lévő hivatkozáson keresztül adatkérést adhat le.';
$string['contactdpoviaprivacypolicy'] = 'Az adatvédelmi szabályzatban leírtak szerint forduljon az adatvédelmi ügyintézőhöz.';
$string['contextlevelname10'] = 'Portál';
$string['contextlevelname30'] = 'Felhasználók';
$string['contextlevelname40'] = 'Kurzuskategóriák';
$string['contextlevelname50'] = 'Kurzusok';
$string['contextlevelname70'] = 'Tevékenységmodulok';
$string['contextlevelname80'] = 'Blokkok';
$string['contextpurposecategorysaved'] = 'Cél és kategória elmentve.';
$string['createcategory'] = 'Adatkategória létrehozása';
$string['createdeletedatarequest'] = 'Adattörlési kérelem létrehozása';
$string['createnewdatarequest'] = 'Új adatkérés létrehozása';
$string['createpurpose'] = 'Adatcél létrehozása';
$string['creationauto'] = 'Automatikusan';
$string['creationmanual'] = 'Kézileg';
$string['datadeletion'] = 'Adattörlés';
$string['datadeletionpagehelp'] = 'Itt vannak felsorolva a lejárt tárolási idejű adatok. Ellenőrizze és hagyja jóvá az adattörlést, amelyet a "Lejárt környezetek törlése" ütemezett feladat hajt végre.';
$string['dataprivacy:downloadallrequests'] = 'Exportált adatok letöltése mindenki számára';
$string['dataprivacy:downloadownrequest'] = 'Saját exportált adatok letöltése';
$string['dataprivacy:makedatadeletionrequestsforchildren'] = 'Adattörlés kérése kiskorúak esetén';
$string['dataprivacy:makedatarequestsforchildren'] = 'Adatkérés kiskorúak számára';
$string['dataprivacy:managedataregistry'] = 'Adatregiszter kezelése';
$string['dataprivacy:managedatarequests'] = 'Adatkérések kezelése';
$string['dataprivacy:requestdelete'] = 'Saját adattörlés kérése';
$string['dataprivacy:requestdeleteforotheruser'] = 'Adattörlés kérése másik felhasználó nevében';
$string['dataregistry'] = 'Adatregiszter';
$string['dataregistryinfo'] = 'Az adatregiszterrel kategóriákat (adattípusokat) és (adatfeldolgozási) célokat határozhat meg a portál összes tartalmához - a felhasználóktól és kurzusoktól kezdve egészen a tevékenységekig és blokkokig. Az egyes célokhoz tárolási időt állíthat be. Lejáratkor az adatokat a rendszer törlésre jegyzi elő, melyhez a rendszergazda jóváhagyása szükséges.';
$string['datarequestcreatedforuser'] = 'Adatkérés létrehozva {$a} részére';
$string['datarequestcreatedfromscheduledtask'] = 'Ütemezett feladatból automatikusan jön létre (korábban létező törölt felhasználó).';
$string['datarequestcreatedupondelete'] = 'Automatikusan jött létre a felhasználótörlés alkalmával.';
$string['datarequestemailsubject'] = 'Adatkérés: {$a}';
$string['datarequests'] = 'Adatkérések';
$string['dataretentionexplanation'] = 'Az összegzés a rendszer alapkategóriáit és a felhasználói adatok megőrzésének a célját ismerteti. A rendszer egyes területein az itt felsoroltaknál speciálisabb kategóriák és célok fordulhatnak elő.';
$string['dataretentionsummary'] = 'Adatmegőrzés összegzése';
$string['datecomment'] = '[{$a->date}]:
{$a->comment}';
$string['daterequested'] = 'Kérés ideje';
$string['daterequesteddetail'] = 'Kérés ideje:';
$string['defaultexpired'] = 'Adatok minden felhasználó számára';
$string['defaultexpiredexcept'] = 'Adatok minden felhasználó számára - az alábbi szerepekkel rendelkezők kivételével:<br>
{$a->unexpired}';
$string['defaultsinfo'] = 'Az alapkategóriák és -célok minden olyan újonnan létrehozott és már létező előfordulásra érvényesek, ahol nincs érték beállítva.';
$string['defaultssaved'] = 'Alapértékek elmentve';
$string['defaultswarninginfo'] = 'Vigyázat: az alapbeállítások módosítása befolyásolhatja az előfordulások megőrzési idejét.';
$string['defaultunexpired'] = 'Adatok csak az alábbi szerepekkel rendelkező felhasználók számára:<br>
{$a->expired}';
$string['defaultunexpiredwithexceptions'] = 'Adatok csak az alábbi szerepekkel rendelkező felhasználók számára:<br>
{$a->expired}
Az alábbi szerepekkel rendelkezők kivételével:<br> {$a->unexpired}';
$string['deletecategory'] = 'Kategória törlése';
$string['deletecategorytext'] = 'Biztosan törli a(z) "{$a}" kategóriát?';
$string['deletedefaults'] = 'Alapbeállítások törlése: {$a}';
$string['deletedefaultsconfirmation'] = 'Biztosan törli {$a} modulok esetén az alapkategóriát és -célt?';
$string['deleteexistingdeleteduserstask'] = 'Adattörlési kérelem létrehozása korábban létező törölt felhasználókhoz';
$string['deleteexpiredcontextstask'] = 'Lejárt környezetek törlése';
$string['deleteexpireddatarequeststask'] = 'A lejárt, teljesített adatlekérések fájljainak törlése';
$string['deletemyaccount'] = 'Fiókom törlése';
$string['deletepurpose'] = 'Cél törlése';
$string['deletepurposetext'] = 'Biztosan törli a(z) "{$a}" célt?';
$string['deny'] = 'Elutasítás';
$string['denyrequest'] = 'Kérés elutasítása';
$string['deprecated'] = 'Elavult';
$string['deprecatedexplanation'] = 'A segédprogram az adatvédelmi felületek régi változatát használja, frissítse!';
$string['download'] = 'Letöltés';
$string['downloadexpireduser'] = 'A letöltés határideje lejárt. Személyes adatainak exportálásához új igénylést kell benyújtania.';
$string['dporolemapping'] = 'Adatvédelmi ügyintézői szerep kiosztása';
$string['dporolemapping_desc'] = 'Az adatvédelmi ügyintéző adatkéréseket kezelhet. A megfelelő szerep kiosztásához a tool/dataprivacy:managedatarequests készséget engedélyezni kell.';
$string['duplicaterole'] = 'A szerep már meg van határozva';
$string['editcategories'] = 'Kategóriák szerkesztése';
$string['editcategory'] = 'Kategória szerkesztése';
$string['editdefaults'] = 'Alapbeállítások szerkesztése: {$a}';
$string['editmoduledefaults'] = 'A modul alapbeállításainak szerkesztése';
$string['editpurpose'] = 'Cél szerkesztése';
$string['editpurposes'] = 'Célok szerkesztése';
$string['effectiveretentionperiodcourse'] = '{$a} (a kurzus befejezése után)';
$string['effectiveretentionperioduser'] = '{$a} (mióta a felhasználó utoljára belépett a portálra)';
$string['emailsalutation'] = 'Kedves {$a}!';
$string['errorcannotrequestdeleteforother'] = 'Ezen felhasználó nevében nem hozhat létre adattörlési kérelmet.';
$string['errorcannotrequestdeleteforself'] = 'Saját maga részére nem hozhat létre adattörlési kérelmet.';
$string['errorcontexthasunexpiredchildren'] = 'A(z)  "{$a}" környezetben még vannak nem lejárt alkörnyezetek. A környezet törlésre előjegyzésére nem került sor.';
$string['errorinvalidrequestcomments'] = 'Ügyeljen arra, hogy megjegyzése csak egyszerű szöveget tartalmazzon.';
$string['errorinvalidrequestcreationmethod'] = 'Érvénytelen kérés-létrehozási módszer!';
$string['errorinvalidrequeststatus'] = 'Érvénytelen kérésállapot!';
$string['errorinvalidrequesttype'] = 'Érvénytelen kéréstípus!';
$string['errornocapabilitytorequestforothers'] = '{$a->requestedby} felhasználó nem igényelhet adatot {$a->userid} felhasználó nevében';
$string['errornoexpiredcontexts'] = 'Nincsenek lejárt feldolgozandó környezetek';
$string['errorrequestalreadyexists'] = 'Már folyamatban van egy kérése.';
$string['errorrequestnotfound'] = 'A kérés nem található';
$string['errorrequestnotwaitingforapproval'] = 'A kérés nem vár jóváhagyásra. Vagy még nem áll készen, vagy már sor került a feldolgozására.';
$string['errorsendingmessagetodpo'] = 'Hiba történt a(z) {$a} részére szóló üzenetküldés közben.';
$string['exceptionnotificationbody'] = '<p>Kivétel jelentkezett <b>{$a->fullmethodname}</b> meghívása közben.<br>Vagyis a(z) <b>{$a->component}</b> segédprogram nem dolgozta föl az adatokat. Alább információt talál a kivételről, amelyet elküldhet a segédprogram fejlesztőjének.</p><pre>{$a->message}<br>

{$a->backtrace}</pre>';
$string['exceptionnotificationsubject'] = 'Kivétel jelentkezett a magánadatok feldolgozása közben';
$string['expandplugin'] = 'A segédprogram kibontása vagy összecsukása.';
$string['expandplugintype'] = 'A segédprogramtípus kibontása vagy összecsukása.';
$string['expiredretentionperiodtask'] = 'Lejárt megőrzési idő';
$string['expiredrolewithretention'] = '{$a->retention} (Lejárt)';
$string['expiry'] = 'Lejárat';
$string['explanationtitle'] = 'Az oldalon használt ikonok és jelentésük.';
$string['external'] = 'További';
$string['externalexplanation'] = 'A portálra telepített további segédprogram.';
$string['filteroption'] = '{$a->category}: {$a->name}';
$string['frontpagecourse'] = 'Címlapkurzus';
$string['gdpr_art_6_1_a_description'] = 'Az érintett hozzájárulását adta személyes adatainak egy vagy több konkrét célból történő kezeléséhez';
$string['gdpr_art_6_1_a_name'] = 'Hozzájárulás (a GDPR 6.1(a) pontja)';
$string['gdpr_art_6_1_b_description'] = 'Az adatkezelés olyan szerződés teljesítéséhez szükséges, amelyben az érintett az egyik fél, vagy az a szerződés megkötését megelőzően az érintett kérésére történő lépések megtételéhez szükséges';
$string['gdpr_art_6_1_b_name'] = 'Szerződés  (a GDPR 6.1(b) pontja)';
$string['gdpr_art_6_1_c_description'] = 'Az adatkezelés az adatkezelőre vonatkozó jogi kötelezettség teljesítéséhez szükséges';
$string['gdpr_art_6_1_c_name'] = 'Jogi kötelezettség  (a GDPR 6.1(c) pontja)';
$string['gdpr_art_6_1_d_description'] = 'Az adatkezelés az érintett vagy egy másik természetes személy létfontosságú érdekeinek védelme miatt szükséges';
$string['gdpr_art_6_1_d_name'] = 'Létfontosságú érdekek (a GDPR 6.1(d) pontja)';
$string['gdpr_art_6_1_e_description'] = 'Az adatkezelés közérdekű vagy az adatkezelőre ruházott közhatalmi jogosítvány gyakorlásának keretében végzett feladat végrehajtásához szükséges';
$string['gdpr_art_6_1_e_name'] = 'Közérdekű feladat (a GDPR 6.1(e) pontja)';
$string['gdpr_art_6_1_f_description'] = 'Az adatkezelés az adatkezelő vagy egy harmadik fél jogos érdekeinek érvényesítéséhez szükséges, kivéve, ha ezen érdekekkel szemben elsőbbséget élveznek az érintett olyan érdekei vagy alapvető jogai és szabadságai, amelyek személyes adatok védelmét teszik szükségessé, különösen, ha az érintett gyermek';
$string['gdpr_art_6_1_f_name'] = 'Jogos érdekek (a GDPR 6.1(f) pontja)';
$string['gdpr_art_9_2_a_description'] = 'Az érintett kifejezett hozzájárulását adta az említett személyes adatok egy vagy több konkrét célból történő kezeléséhez, kivéve, ha az uniós vagy tagállami jog úgy rendelkezik, hogy a GDPR 9. cikkének (1) bekezdésében említett tilalom nem oldható fel az érintett hozzájárulásával';
$string['gdpr_art_9_2_a_name'] = 'Kifejezett hozzájárulás (a GDPR 9.2(a) pontja)';
$string['gdpr_art_9_2_b_description'] = 'Az adatkezelés az adatkezelőnek vagy az érintettnek a foglalkoztatást, valamint a szociális biztonságot és szociális védelmet szabályozó jogi előírásokból fakadó kötelezettségei teljesítése és konkrét jogai gyakorlása érdekében szükséges, ha az érintett alapvető jogait és érdekeit védő megfelelő garanciákról is rendelkező uniós vagy tagállami jog, illetve a tagállami jog szerinti kollektív szerződés ezt lehetővé teszi';
$string['gdpr_art_9_2_b_name'] = 'A foglalkoztatást, a szociális biztonságot és védelmet szabályozó jog  (a GDPR 9.2(b) pontja)';
$string['gdpr_art_9_2_c_description'] = 'Az adatkezelés az érintett vagy más természetes személy létfontosságú érdekeinek védelméhez szükséges, ha az érintett fizikai vagy jogi cselekvőképtelensége folytán nem képes a hozzájárulását megadni';
$string['gdpr_art_9_2_c_name'] = 'Létfontosságú érdekek védelme (a GDPR 9.2(c) pontja)';
$string['gdpr_art_9_2_d_description'] = 'Az adatkezelés valamely politikai, világnézeti, vallási vagy szakszervezeti célú alapítvány, egyesület vagy bármely más nonprofit szervezet megfelelő garanciák mellett végzett jogszerű tevékenysége keretében történik, azzal a feltétellel, hogy az adatkezelés kizárólag az ilyen szerv jelenlegi vagy volt tagjaira, vagy olyan személyekre vonatkozik, akik a szervezettel rendszeres kapcsolatban állnak a szervezet céljaihoz kapcsolódóan, és hogy a személyes adatokat az érintettek hozzájárulása nélkül nem teszik hozzáférhetővé a szervezeten kívüli személyek számára';
$string['gdpr_art_9_2_d_name'] = 'Alapítvány, egyesület vagy bármely más nonprofit szervezet tagjaira, vagy vele rendszeres kapcsolatban álló személyekre vonatkozó jogszerű tevékenység (a GDPR 9.2(d) pontja)';
$string['gdpr_art_9_2_e_description'] = 'Az adatkezelés olyan személyes adatokra vonatkozik, amelyeket az érintett kifejezetten nyilvánosságra hozott';
$string['gdpr_art_9_2_e_name'] = 'Érintett által nyilvánosságra hozott adatok (a GDPR 9.2(e) pontja)';
$string['gdpr_art_9_2_f_description'] = 'Az adatkezelés jogi igények előterjesztéséhez, érvényesítéséhez, illetve védelméhez szükséges, vagy amikor a bíróságok igazságszolgáltatási feladatkörükben járnak el';
$string['gdpr_art_9_2_f_name'] = 'Jogi igények és bírósági feladatok  (a GDPR 9.2(f) pontja)';
$string['gdpr_art_9_2_g_description'] = 'Az adatkezelés jelentős közérdek miatt szükséges, uniós jog vagy tagállami jog alapján, amely arányos az elérni kívánt céllal, tiszteletben tartja a személyes adatok védelméhez való jog lényeges tartalmát, és az érintett alapvető jogainak és érdekeinek biztosítására megfelelő és konkrét intézkedéseket ír elő';
$string['gdpr_art_9_2_g_name'] = 'Jelentős közérdek (a GDPR 9.2(g) pontja)';
$string['gdpr_art_9_2_h_description'] = 'Az adatkezelés megelőző egészségügyi vagy munkahelyi egészségügyi célokból, a munkavállaló munkavégzési képességének felmérése, orvosi diagnózis felállítása, egészségügyi vagy szociális ellátás vagy kezelés nyújtása, illetve egészségügyi vagy szociális rendszerek és szolgáltatások irányítása érdekében szükséges, uniós vagy tagállami jog alapján vagy egészségügyi szakemberrel kötött szerződés értelmében, továbbá a GDPR 9. cikke (3) bekezdésében említett feltételekre és garanciákra figyelemmel';
$string['gdpr_art_9_2_h_name'] = 'Egészségügyi célok (a GDPR 9.2(h) pontja)';
$string['gdpr_art_9_2_i_description'] = 'Az adatkezelés a népegészségügy területét érintő olyan közérdekből szükséges, mint a határokon át terjedő súlyos egészségügyi veszélyekkel szembeni védelem vagy az egészségügyi ellátás, a gyógyszerek és az orvostechnikai eszközök magas színvonalának és biztonságának a biztosítása, és olyan uniós vagy tagállami jog alapján történik, amely megfelelő és konkrét intézkedésekről rendelkezik az érintett jogait és szabadságait védő garanciákra, és különösen a szakmai titoktartásra vonatkozóan';
$string['gdpr_art_9_2_i_name'] = 'Népegészségügy (a GDPR 9.2(i) pontja)';
$string['gdpr_art_9_2_j_description'] = 'Az adatkezelés a 89. cikk (1) bekezdésével összhangban a közérdekű archiválás céljából, tudományos és történelmi kutatási célból vagy statisztikai célból szükséges olyan uniós vagy tagállami jog alapján, amely arányos az elérni kívánt céllal, tiszteletben tartja a személyes adatok védelméhez való jog lényeges tartalmát, és az érintett alapvető jogainak és érdekeinek biztosítására megfelelő és konkrét intézkedéseket ír elő';
$string['gdpr_art_9_2_j_name'] = 'Közérdek, tudományos/történelmi/statisztikai kutatás (a GDPR 9.2(j) pontja)';
$string['hide'] = 'Az összes összezárása';
$string['httpwarning'] = 'Előfordulhat, hogy a portálról letöltött bármely adat titkosítatlan. Forduljon a rendszergazdához és kérje meg, hogy telepítsen SSL-t a portálra.';
$string['inherit'] = 'Öröklés';
$string['lawfulbases'] = 'Jogszerűség';
$string['lawfulbases_help'] = 'Válasszon legalább egy lehetőséget, amely biztosítja a személyes adatok kezelésének jogszerűségét. A jogszerűséggel kapcsolatos részleteket lásd:  <a href="https://gdpr-info.eu/art-6-gdpr/" target="_blank">GDPR 6. cikk 1. pont</a>';
$string['markcomplete'] = 'Befejezettnek jelöl';
$string['markedcomplete'] = 'Érdeklődését az adatvédelmi ügyintéző befejezettnek jelölte.';
$string['message'] = 'Üzenet';
$string['messagelabel'] = 'Üzenet:';
$string['messageprovider:contactdataprotectionofficer'] = 'Adatkérések';
$string['messageprovider:datarequestprocessingresults'] = 'Az adatkérés feldolgozásának az eredményei';
$string['messageprovider:notifyexceptions'] = 'Adatkérési kivételekkel kapcsolatos értesítések';
$string['moduleinstancename'] = '{$a->instancename} ({$a->modulename})';
$string['mypersonaldatarequests'] = 'Személyes adatkéréseim';
$string['nameandparent'] = '{$a->parent} / {$a->name}';
$string['nameemail'] = '{$a->name} ({$a->email})';
$string['nchildren'] = '{$a} gyermek';
$string['newrequest'] = 'Új kérés';
$string['noactivitiestoload'] = 'Nincs tevékenység';
$string['noassignedroles'] = 'Nincs hozzárendelt szerep ebben a környezetben.';
$string['noblockstoload'] = 'Nincs blokk.';
$string['nocategories'] = 'Még nincsenek kategóriák';
$string['nocoursestoload'] = 'Nincs tevékenység';
$string['nodatarequests'] = 'Nincs adatkérés';
$string['nodatarequestsmatchingfilter'] = 'Nincsenek a szűrőnek megfelelő adatkérések';
$string['noexpiredcontexts'] = 'Ezen a környezeti szinten nincs lejárt megőrzési idejű adat.';
$string['nopersonaldatarequests'] = 'Nincs személyes adatkérése';
$string['nopurposes'] = 'Még nincs cél';
$string['nosubjectaccessrequests'] = 'Nincs intézkedésre váró adatkérés';
$string['nosystemdefaults'] = 'A portál célja és kategóriája még nincs meghatározva.';
$string['notset'] = 'Nincs beállítva (használja az alapértéket)';
$string['notyetexpired'] = '{$a} (még nem járt le)';
$string['overrideinstances'] = 'Előfordulások visszaállítása egyedi értékekkel';
$string['pluginname'] = 'Adatvédelem';
$string['pluginname_help'] = 'Adatvédelmi segédprogram';
$string['pluginregistry'] = 'A segédprogram adatvédelmi regisztere';
$string['pluginregistrytitle'] = 'A segédprogram adatvédelmi megfelelőségének a regisztere';
$string['privacy'] = 'Adatvédelem';
$string['privacy:metadata:preference:tool_dataprivacy_request-filters'] = 'Az adatkérési oldalon most használt szűrők.';
$string['privacy:metadata:preference:tool_dataprivacy_request-perpage'] = 'A felhasználó által egy oldalon látni kívánt adatkérések száma';
$string['privacy:metadata:request'] = 'Személyes adatkérésekből (elérési és törlési kérésekből) a portál számára készített tájékoztatás.';
$string['privacy:metadata:request:comments'] = 'A kéréshez kapcsolódó esetleges felhasználói megjegyzések.';
$string['privacy:metadata:request:dpocomment'] = 'A portál adatvédelmi ügyintézőjének kéréssel kapcsolatos esetleges megjegyzései.';
$string['privacy:metadata:request:requestedby'] = 'A kérést másik felhasználó nevében leadó felhasználó azonosítója.';
$string['privacy:metadata:request:timecreated'] = 'A kérés felhasználó általi leadásának időbélyegzője.';
$string['privacy:metadata:request:userid'] = 'A kéréshez tartozó felhasználó azonosítója';
$string['privacyofficeronly'] = 'Ehhez a tartalomhoz csak {$a} adatvédelmi szereppel rendelkező felhasználók férhetnek hozzá.';
$string['privacyrequestexpiry'] = 'Adatlekérés lejárata';
$string['privacyrequestexpiry_desc'] = 'Az az időkorlát, amíg rendelkezésre áll a letöltési lehetőség az engedélyezett adatlekérések számára. 0 beállítása esetén nincs időkorlát.';
$string['protected'] = 'Védett';
$string['protectedlabel'] = 'Az adat megőrzése jogilag előbbre való, mint a felhasználó elfeledtetési kérése. Az adat törlésére csak a megőrzési idő lejárta után kerül sor.';
$string['purpose'] = 'Cél';
$string['purpose_help'] = 'A cél az adatkezelés indokát írja le. Hozzáadhat új célt, vagy - Öröklés kiválasztása esetén - a rendszer a felettes környezet célját alkalmazza. A környezetek (alulról fölfelé): Blokkok > Tevékenységmodulok > Kurzusok > Kurzuskategóriák > Felhasználó > Portál.';
$string['purposecreated'] = 'Cél létrehozva';
$string['purposedefault'] = 'Alapcél';
$string['purposedefault_help'] = 'Az alapcél a minden új előfordulás esetén alkalmazott cél.
Öröklés kiválasztása esetén a rendszer a felettes környezet célját alkalmazza. A környezetek (alulról fölfelé): Blokkok > Tevékenységmodulok > Kurzusok > Kurzuskategóriák > Felhasználó > Portál.';
$string['purposeoverview'] = 'A cél a tárolt adatok rendeltetését és megőrzését írja le. A cél rögzíti az adatok tárolásának és megőrzésének az alapját is.';
$string['purposes'] = 'Célok';
$string['purposeslist'] = 'Adatcélok felsorolása';
$string['purposeupdated'] = 'Cél frissítve';
$string['replyto'] = 'Válasz ennek';
$string['requestactions'] = 'Lépések';
$string['requestapproved'] = 'A kérelem jóváhagyva';
$string['requestby'] = 'Kérte';
$string['requestbydetail'] = 'Kérte:';
$string['requestcomments'] = 'Megjegyzések';
$string['requestcomments_help'] = 'Ebbe a mezőbe további részleteket írhat be az adatkérésével kapcsolatosan.';
$string['requestcreation'] = 'Létrehozás';
$string['requestdenied'] = 'A kérelem elutasítva';
$string['requestemailintro'] = 'Önhöz adatkérés érkezett:';
$string['requestfor'] = 'Felhasználó';
$string['requestmarkedcomplete'] = 'A kérelem befejezettnek jelölve';
$string['requestorigin'] = 'Portál';
$string['requestsapproved'] = 'A kéréseket jóváhagyták';
$string['requestsdenied'] = 'A kéréseket elutasították';
$string['requeststatus'] = 'Állapot';
$string['requestsubmitted'] = 'Kérését a portál adatvédelmi ügyintézőjéhez irányítottuk';
$string['requesttype'] = 'Típus';
$string['requesttype_help'] = 'Válassza ki, miért kíván a portál adatvédelmi ügyintézőjéhez fordulni. Ne feledje: az összes személyes adat törlése esetén nem fog tudni belépni a portálra.';
$string['requesttypedelete'] = 'Törölje összes személyes adatomat';
$string['requesttypedeleteshort'] = 'Törlés';
$string['requesttypeexport'] = 'Exportálja összes személyes adatomat';
$string['requesttypeexportshort'] = 'Exportálás';
$string['requesttypeothers'] = 'Általános érdeklődés';
$string['requesttypeothersshort'] = 'Üzenet';
$string['requesttypeuser'] = '{$a->typename} ({$a->user})';
$string['requireallenddatesforuserdeletion'] = 'A befejezési idő nélküli kurzusokat tekintse aktívnak';
$string['requireallenddatesforuserdeletion_desc'] = 'A felhasználó érvényessége lejáratának a kiszámításához a rendszer több tényezőt vesz figyelembe:

* a felhasználó utolsó belépési idejét összehasonlítja a felhasználókra vonatkozó megőrzési idővel; valamint
* ellenőrzi, hogy a felhasználó ténylegesen felvette-e valamelyik kurzust.

A tényleges kurzusfelvétel ellenőrzésekor befejezési idő nélküli kurzus esetén ezt a beállítást veszi figyelembe annak megállapításához, hogy a kurzus aktív-e.

Ha befejezési idő nélküli kurzusról van szó és ez a beállítás be van kapcsolva, akkor a felhasználót nem lehet törölni.';
$string['requiresattention'] = 'Figyelmet igényel.';
$string['requiresattentionexplanation'] = 'A segédprogram nem foglalja magában a Moodle adatvédelmi felületét. Ha személyes adatokat tárol, azt a Moodle adatvédelmi rendszerén keresztül nem exportálhatja vagy törölheti.';
$string['resubmitrequest'] = '{$a->username} felhasználó {$a->type} kérésének újbóli leadása';
$string['resubmitrequestasnew'] = 'Új kérésként való leadás';
$string['resubmittedrequest'] = '{$a->username} felhasználó létező {$a->type} kérését törölték és újból leadták';
$string['resultdeleted'] = 'Nemrégiben {$a} portálon lévő fiókja és személyes adatai törlését kérte. A folyamat befejeződött, már nem tud belépni.';
$string['resultdownloadready'] = 'Nemrégiben {$a} portálról kért személyes adatainak másolata letöltésre kész. Az alábbi hivatkozásra kattintva kerül át a letöltési oldalra.';
$string['retentionperiod'] = 'Megőrzési idő';
$string['retentionperiod_help'] = 'A megőrzési idő szabja meg, mennyi ideig kell az adatait tárolni. Az idő lejárta után az adatokat megjelöljük és a rendszergazda jóváhagyására váró törlésre jegyezzük elő,';
$string['retentionperiodnotdefined'] = 'Nem volt megadva megőrzési idő';
$string['retentionperiodzero'] = 'Nincs megőrzési idő';
$string['reviewdata'] = 'Adatok ellenőrzése';
$string['role'] = 'Szerep';
$string['role_help'] = 'Melyik szerepre vonatkozzék a felülírás?';
$string['roleoverride'] = 'Szerepfelülírás';
$string['roleoverrideoverview'] = 'Az alapbeállítás szerinti megőrzés konkrét felhasználói szerepek esetén felülírható, így hosszabb vagy rövidebb megőrzési időt állíthat be. A felhasználó érvényessége csak összes szerepének a lejártával ér véget.';
$string['roleoverrides'] = 'Szerepfelülírások';
$string['selectbulkaction'] = 'Válasszon ki egy ömlesztve végrehajtandó lépést.';
$string['selectdatarequests'] = 'Válasszon ki adatkéréseket.';
$string['selectuserdatarequest'] = '{$a->username} {$a->requesttype} adatkérésének kiválasztása.';
$string['send'] = 'Küldés';
$string['sensitivedatareasons'] = 'Érzékeny személyes adatok kezelésének indokai';
$string['sensitivedatareasons_help'] = 'Válasszon egy vagy több indokot, amely mentesíti a célhoz kötődő érzékeny személyes adatok kezelésének tiltása alól. A részleteket lásd: <a href="https://gdpr-info.eu/art-9-gdpr/" target="_blank">GDPR 9. cikk 2. pont</a>';
$string['setdefaults'] = 'Alapértékek beállítása';
$string['showdataretentionsummary'] = 'Adatmegőrzési összegzés megjelenítése';
$string['showdataretentionsummary_desc'] = 'Bekapcsolása esetén az oldal láblécén és a felhasználói profiloldalon hivatkozás jelenik meg az adatmegőrzési összegzéshez.';
$string['statusapproved'] = 'Jóváhagyva';
$string['statusawaitingapproval'] = 'Jóváhagyásra vár';
$string['statuscancelled'] = 'Érvénytelenítve';
$string['statuscomplete'] = 'Kész';
$string['statusdeleted'] = 'Törölve';
$string['statusdetail'] = 'Állapot:';
$string['statusexpired'] = 'Lejárt';
$string['statuspending'] = 'Függőben';
$string['statusprocessing'] = 'Feldolgozás';
$string['statusready'] = 'Letöltésre kész';
$string['statusrejected'] = 'Elutasítva';
$string['subjectscope'] = 'Tárgy hatóköre';
$string['subjectscope_help'] = 'A tárgy hatóköre felsorolja azokat a szerepeket, amelyek ebben a környezetben hozzárendelhetők.';
$string['summary'] = 'A beállításjegyzék konfigurációjának összegzése';
$string['systemconfignotsetwarning'] = 'Portálcél és -kategória nincs megadva. Törlési kérések feldolgozásakor minden adat törlődik.';
$string['tobedeleted'] = 'Törlendő adatok';
$string['unexpiredrolewithretention'] = '{$a->retention} (Érvényes)';
$string['user'] = 'Felhasználó';
$string['userlistexplanation'] = 'A teljes körű adatmegőrzéshez a segédprogramnak az alapszolgáltatón túl a felhasználói listát szolgáltatóval is rendelkeznie kell.';
$string['userlistnoncompliant'] = 'Hiányzik a felhasználói lista szolgáltatója';
$string['viewrequest'] = 'Kérés megtekintése';
$string['visible'] = 'Összes kibontása';
