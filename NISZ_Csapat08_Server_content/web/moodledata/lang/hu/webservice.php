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
 * Strings for component 'webservice', language 'hu', version '3.10'.
 *
 * @package     webservice
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessexception'] = 'Hozzáférés-szabályozási kivétel';
$string['actwebserviceshhdr'] = 'Aktív webszolgáltatási protokollok';
$string['addaservice'] = 'Szolgáltatás hozzáadása';
$string['addcapabilitytousers'] = 'Felhasználók lehetőségeinek ellenőrzése';
$string['addcapabilitytousersdescription'] = 'A webszolgáltatások használatához a felhasználóknak kétféle képességgel kell
rendelkezni. Ezek: \'/webservice:createtoken\' és a webszolgáltatási protokolloknak megfelelő képesség (\'webservice/rest:use\', \'webservice/soap:use\', ...). Ennek egyik beállítási módja, ha létrehoz egy új webszolgáltatási szerepet, és valamilyen webszolgáltatási protokolloknak megfelelő képességeket. Ezt rendszerszintű szerepként rendelje hozzá a webszolgáltatás felhasználójához.';
$string['addfunction'] = 'Feladat hozzáadása';
$string['addfunctionhelp'] = 'Válassza ki a szolgáltatáshoz hozzáadandó feladatot.';
$string['addfunctions'] = 'Funkciók hozzáadása';
$string['addfunctionsdescription'] = 'A z újonnan létrehozott szolgáltatáshoz válassza ki a szükséges funkciókat.';
$string['addrequiredcapability'] = 'Előírt képesség hozzárendelése/leválasztása';
$string['addservice'] = 'Új szolgáltatás hozzáadása: {$a->name} (azonosító: {$a->id})';
$string['addservicefunction'] = 'Funkciók hozzáadása a(z) "{$a}" szolgáltatáshoz';
$string['allusers'] = 'Minden felhasználó';
$string['apiexplorer'] = 'API explorer';
$string['apiexplorernotavalaible'] = 'Az API explorer még nem elérhető.';
$string['arguments'] = 'Argumentumok';
$string['authmethod'] = 'Hitelesítési módszer';
$string['callablefromajax'] = 'AJAX-ból hívható';
$string['cannotcreatetoken'] = 'Nincs engedélye a szolgáltatáshoz kapcsolódó webszolgáltatási jel létrehozásához {$a}.';
$string['cannotgetcoursecontents'] = 'A kurzustartalom nem elérhető.';
$string['checkusercapability'] = 'Felhasználó lehetőségeinek ellenőrzése';
$string['checkusercapabilitydescription'] = 'A felhasználóknak a megfelelő képességekkel (pl. webservice/rest:use, webservice/soap:use) kell rendelkezni.  Ezt rendszerszintű szerepként rendelje hozzá a webszolgáltatás felhasználójához.';
$string['configwebserviceplugins'] = 'Biztonsági okokból csak a használt protokollokat kapcsolja be.';
$string['context'] = 'Környezet';
$string['createservicedescription'] = 'A szolgáltatás webszolgáltatási funkciók adott készlete. Az új szolgáltatás eléréséhez biztosítson hozzáférést a felhasználó számára. A <strong>Szolgáltatás hozzáadása</strong> oldalon jelölje be a \'Bekapcsolás\' és az \'Engedéllyel rendelkezők\' mezőt. Válassza ki a \'Nincs előírt képesség\' pontot. ';
$string['createserviceforusersdescription'] = 'A szolgáltatás webszolgáltatási funkciók adott készlete. Az új szolgáltatás eléréséhez biztosítson hozzáférést a felhasználó számára. A <strong>Szolgáltatás hozzáadása</strong> oldalon jelölje be a \'Bekapcsolás\' mezőt, az \'Engedéllyel rendelkezők\' mezőt pedig ne jelölje be. Válassza ki a \'Nincs előírt képesség\' pontot.';
$string['createtoken'] = 'Jel létrehozása';
$string['createtokenforuser'] = 'Jel létrehozása felhasználó számára';
$string['createtokenforuserdescription'] = 'A webszolgáltatás felhasználójának hozzon létre egy jelet.';
$string['createuser'] = 'Konkrét felhasználó létrehozása ';
$string['createuserdescription'] = 'A Moodle-t vezérlő rendszer számára egy webszolgáltatás-felhasználóra van szükség. ';
$string['criteriaerror'] = 'Nincs engedély a feltételre kereséshez';
$string['default'] = 'Alapesetben "{$a}"';
$string['deleteaservice'] = 'Szolgáltatás törlése';
$string['deleteservice'] = 'A szolgáltatás törlése: {$a->name} (azonosító: {$a->id})';
$string['deleteserviceconfirm'] = 'A szolgáltatás törlésekor törli a hozzá kapcsolódó jelet is. Biztosan törli a külső "{$a}" szolgáltatást?';
$string['deletetokenconfirm'] = 'Biztosan törli <strong>{$a->user}</strong> felhasználó <strong>{$a->service}</strong> szolgáltatáshoz kapcsolódó jelét? ';
$string['disabledwarning'] = 'Minden webszolgáltatási protokoll ki van kapcsolva, a "Webszolgáltatások bekapcsolása" a  Részletes funkciók alatt érhető el.';
$string['doc'] = 'Dokumentáció';
$string['docaccessrefused'] = 'Ezen jel dokumentációját nem tekintheti meg';
$string['documentation'] = 'webszolgáltatás dokumentációja';
$string['downloadfiles'] = 'Letölthetők állományok.';
$string['downloadfiles_help'] = 'Bekapcsolása esetén a felhasználók biztonsági kulcsukkal állományokat tölthetnek le. Persze csak azokat, amelyeket a portál engedélyez számukra.';
$string['editaservice'] = 'A szolgáltatás szerkesztése';
$string['editservice'] = 'A szolgáltatás szerkesztése: {$a->name} (azonosító: {$a->id})';
$string['enabled'] = 'Bekapcsolva';
$string['enabledocumentation'] = 'Fejlesztői dokumentáció engedélyezése';
$string['enabledocumentationdescription'] = 'A bekapcsolt  protokollokhoz elérhető a webszolgáltatások részletes dokumentációja.';
$string['enableprotocols'] = 'Protokollok bekapcsolása';
$string['enableprotocolsdescription'] = 'Legalább egy protokollt be kell kapcsolni. A biztonság érdekében csak a használandó  protokollokat kapcsolja be.';
$string['enablews'] = 'Webszolgáltatások bekapcsolása';
$string['enablewsdescription'] = 'A webszolgáltatásokat a Részletes funkciók alatt be kell kapcsolni';
$string['entertoken'] = 'Biztonsági kulcs/jel megadása:';
$string['error'] = 'Hiba: {$a}';
$string['errorcatcontextnotvalid'] = 'A (kategória-azonosító:{$a->catid}) kategória-környezetben nem futtathat funkciókat. Ezt a környezeti hibaüzenetet kapta: {$a->message}';
$string['errorcodes'] = 'Hibaüzenet';
$string['errorcoursecontextnotvalid'] = 'A (kurzus-azonosító:{$a->courseid}) kurzuskörnyezetben nem futtathat funkciókat. Ezt a környezeti hibaüzenetet kapta: {$a->message}';
$string['errorinvalidparam'] = 'Érvénytelen "{$a}" paraméter.';
$string['errornotemptydefaultparamarray'] = 'A(z) \'{$a}\' nevű webszolgáltatást leíró paraméter egy egy vagy több elemből álló struktúra. Alapesetben lehet üres tömb. Ellenőrizze a webszolgáltatás leírását.';
$string['erroroptionalparamarray'] = 'A(z) \'{$a}\' nevű webszolgáltatást leíró paraméter egy egy vagy több elemből álló struktúra. VALUE_OPTIONAL formában nem állítható be. Ellenőrizze a webszolgáltatás leírását.';
$string['eventwebservicefunctioncalled'] = 'Webszolgáltatási függvényhívás';
$string['eventwebserviceloginfailed'] = 'Webszolgáltatási bejelentkezés sikertelen';
$string['eventwebserviceservicecreated'] = 'Webszolgáltatás létrehozva';
$string['eventwebserviceservicedeleted'] = 'Webszerviz törölve';
$string['eventwebserviceserviceupdated'] = 'Webszolgáltatás frissítve';
$string['eventwebserviceserviceuseradded'] = 'Webszolgáltatás felhasználója hozzáadva';
$string['eventwebserviceserviceuserremoved'] = 'Webszolgáltatás felhasználója törölve';
$string['eventwebservicetokencreated'] = 'Webszolgáltatási jel létrehozva';
$string['eventwebservicetokensent'] = 'Webszolgáltatási jel elküldve';
$string['execute'] = 'Végrehajtás';
$string['executewarnign'] = 'VIGYÁZAT:  a Végrehajtás lenyomásakor adatbázisa módosulni fog, a változásokat pedig nem lehet automatikusan érvényteleníteni!';
$string['externalservice'] = 'Külső szolgáltatás';
$string['externalservicefunctions'] = 'Külső szolgáltatás feladatai';
$string['externalservices'] = 'Külső szolgáltatások';
$string['externalserviceusers'] = 'Külső szolgáltatást használók';
$string['failedtolog'] = 'Nem készült napló';
$string['filenameexist'] = 'Az állománynév {$a} már létezik.';
$string['forbiddenwsuser'] = 'Visszaigazolatlan, törölt, felfüggesztett vagy vendég felhasználóhoz nem hozható létre jel.';
$string['function'] = 'Feladat';
$string['functions'] = 'Feladatok';
$string['generalstructure'] = 'Általános struktúra';
$string['information'] = 'Információ';
$string['installexistingserviceshortnameerror'] = '"{$a}" rövid névvel már létezik webszolgáltatás, ezen a néven másik webszolgáltatást nem lehet telepíteni/frissíteni.';
$string['installserviceshortnameerror'] = 'Kódolási hiba: "{$a}" szolgáltatás rövid neve csak számokból, betűkből, valamint "_", "-", "." jelekből állhat.';
$string['invalidextparam'] = 'Érvénytelen külső {$a} interfészparaméter';
$string['invalidextresponse'] = 'Érvénytelen külső {$a} interfészválasz';
$string['invalidiptoken'] = 'Érvénytelen jel - IP-je nincs támogatva';
$string['invalidtimedtoken'] = 'Érvénytelen jel - a jel lejárt';
$string['invalidtoken'] = 'Érvénytelen jel - nincs meg a jel';
$string['iprestriction'] = 'IP-korlátozás';
$string['iprestriction_help'] = 'A felhasználónak a webszolgáltatást a felsorolt (vesszővel elválasztott)  IP-kről kell elérni.';
$string['key'] = 'Kulcs';
$string['keyshelp'] = 'A kulcsokkal külső alkalmazásokból érheti el Moodle-fiókját.';
$string['loginrequired'] = 'Csak belépett felhasználóknak';
$string['manageprotocols'] = 'Protokollok kezelése';
$string['managetokens'] = 'Lexikális elemek kezelése';
$string['missingcaps'] = 'Hiányzó képességek';
$string['missingcaps_help'] = 'Azon képességek felsorolása, amelyek a szolgáltatás funkcióihoz kellenek, de a felhasználó nem rendelkezik velük. A szolgáltatás igénybevételéhez adja hozzá a képességeket a felhasználóhoz.';
$string['missingpassword'] = 'Hiányzik a jelszó';
$string['missingrequiredcapability'] = '{$a} képességre van szükség.';
$string['missingusername'] = 'Hiányzik a felhasználónév';
$string['missingversionfile'] = 'Kódolási hiba: {$a} összetevőhöz hiányzik a version.php állomány';
$string['nameexists'] = 'A nevet már egy másik szolgáltatás használja.';
$string['nocapabilitytouseparameter'] = 'A(z) {$a} paraméter használatához a felhasználónak nincs meg a szükséges jogosultsága';
$string['nofunctions'] = 'A szolgáltatásnak nincsenek funkciói';
$string['norequiredcapability'] = 'Nincs előírt képesség';
$string['notoken'] = 'Még nem hozott létre lexikális elemet.';
$string['onesystemcontrolling'] = 'A Moodle vezérlésének engedélyezése egy külső rendszer számára';
$string['onesystemcontrollingdescription'] = 'Az alábbiak szerint beállíthat egy Moodle-webszolgáltatást egy külső rendszerhez, amely a Moodle-t vezérli. Ezzel beállíthat egy jel- (biztonsági kulcs-) hitelesítési módot is.';
$string['onlyseecreatedtokens'] = 'Csak saját vagy létrehozott jelek láthatók. Egyéb jeleket viszont törölhet.';
$string['operation'] = 'Művelet';
$string['optional'] = 'Választható';
$string['passwordisexpired'] = 'A jelszó lejárt.';
$string['phpparam'] = 'XML-RPC (PHP-struktúra)';
$string['phpresponse'] = 'XML-RPC (PHP-struktúra)';
$string['postrestparam'] = 'PHP-kód REST-hez (POST-kérés)';
$string['potusers'] = 'Jogosulatlan felhasználók';
$string['potusersmatching'] = 'Egyező jogosulatlan felhasználók';
$string['print'] = 'Az összes nyomtatása';
$string['privacy:metadata:serviceusers'] = 'Bizonyos külső szolgáltatást igénybe venni képes felhasználók felsorolása';
$string['privacy:metadata:serviceusers:iprestriction'] = 'A szolgáltatás használatára korlátozott IP';
$string['privacy:metadata:serviceusers:timecreated'] = 'A rekord létrehozásának dátuma';
$string['privacy:metadata:serviceusers:userid'] = 'A felhasználó azonosítója';
$string['privacy:metadata:serviceusers:validuntil'] = 'A jogosultság lejáratának a dátuma';
$string['privacy:metadata:tokens'] = 'A Moodle-lal webszolgáltatásokon vagy mobil alkalmazásokon keresztül való kapcsolattartás tokenjeinek rekordja.';
$string['privacy:metadata:tokens:creatorid'] = 'A tokent létrehozó felhasználó azonosítója';
$string['privacy:metadata:tokens:iprestriction'] = 'A token használatára korlátozott IP';
$string['privacy:metadata:tokens:lastaccess'] = 'A token utolsó használatának a dátuma';
$string['privacy:metadata:tokens:privatetoken'] = 'Titkosabb jellegű token, melyet esetenként bizonyos műveletek, pl. SSO érvényesítésére használnak.';
$string['privacy:metadata:tokens:timecreated'] = 'A token létrehozásának a dátuma';
$string['privacy:metadata:tokens:token'] = 'A felhasználó tokene';
$string['privacy:metadata:tokens:tokentype'] = 'A token típusa';
$string['privacy:metadata:tokens:userid'] = 'A token felhasználójának azonosítója';
$string['privacy:metadata:tokens:validuntil'] = 'A token lejáratának a dátuma';
$string['privacy:request:notexportedsecurity'] = 'Biztonsági okokból az exportálás elmarad';
$string['protocol'] = 'Protokoll';
$string['removefunction'] = 'Eltávolítás';
$string['removefunctionconfirm'] = 'Eltávolítja a(z) "{$a->function}" feladatot a(z) "{$a->service}" szolgáltatásból?';
$string['requireauthentication'] = 'Ez a metódus xxx engedéllyel rendelkező hitelesítést ír elő.';
$string['required'] = 'Előírt';
$string['requiredcapability'] = 'Előírt képesség';
$string['requiredcapability_help'] = 'Beállítása esetén csak az előírt képességgel rendelkező felhasználók vehetik igénybe a szolgáltatást.';
$string['requiredcaps'] = 'Előírt képességek';
$string['resettokenconfirm'] = 'Biztosan visszaállítja <strong>{$a->user}</strong> webszolgáltatási kulcsát <strong>{$a->service}</strong> szolgáltatás esetén?';
$string['resettokenconfirmsimple'] = 'Biztosan visszaállítja a kulcsot? A régi kulcshoz tartozó hivatkozások nem fognak működni.';
$string['response'] = 'Válasz';
$string['restcode'] = 'REST';
$string['restexception'] = 'REST';
$string['restoredaccountresetpassword'] = 'Jel beszerzése előtt helyreállított fiók esetén ismét be kell állítani a jelszót.';
$string['restparam'] = 'REST (POST-paraméterek)';
$string['restrictedusers'] = 'Csak jogosult felhasználók';
$string['restrictedusers_help'] = 'Itt állítja be, hogy a webszolgáltatási jel létrehozásához engedéllyel rendelkezők biztonsági kulcsok oldalán állíthatnak-e elő jelet a szolgáltatáshoz, vagy csak az erre jogosultak tehetik ezt meg.';
$string['securitykey'] = 'Biztonsági kulcs (jel)';
$string['securitykeys'] = 'Biztonsági kulcsok';
$string['selectauthorisedusers'] = 'Engedéllyel rendelkezők kiválasztása';
$string['selectedcapability'] = 'Kiválasztott';
$string['selectedcapabilitydoesntexit'] = 'A beállított előírt képesség ({$a}) már nem létezik. Módosítsa és mentse el a változtatásokat.';
$string['selectservice'] = 'Szolgáltatás kiválasztása';
$string['selectspecificuser'] = 'Konkrét felhasználó kiválasztása';
$string['selectspecificuserdescription'] = 'A webszolgáltatás felhasználójának jogosult felhasználóként való hozzáadása.';
$string['service'] = 'Szolgáltatás';
$string['servicehelpexplanation'] = 'A szolgáltatás funkciók készlete. A szolgáltatást igénybe veheti minden felhasználó, vagy  csak meghatározott felhasználók.';
$string['servicename'] = 'Szolgáltatás neve';
$string['servicenotavailable'] = 'A webszolgáltatás nem érhető el (nem létezik vagy ki van kapcsolva).';
$string['servicerequireslogin'] = 'A webszolgáltatás nem elérhető (kilépett a munkamenetből, vagy annak időtartama lejárt)';
$string['servicesbuiltin'] = 'Beépített szolgáltatások';
$string['servicescustom'] = 'Egyedi szolgáltatások';
$string['serviceusers'] = 'Jogosult felhasználók';
$string['serviceusersettings'] = 'Felhasználói beállítások';
$string['serviceusersmatching'] = 'Egyező jogosult felhasználók';
$string['serviceuserssettings'] = 'Jogosult felhasználók beállításainak módosítása';
$string['shortnametaken'] = 'A rövid címet egy másik szolgáltatás ({$a}) már használja';
$string['simpleauthlog'] = 'Belépés egyszerű hitelesítéssel';
$string['step'] = 'Lépés';
$string['supplyinfo'] = 'További részletek';
$string['testauserwithtestclientdescription'] = 'A szolgáltatás külső elérését szimulálja a webszolgáltatás tesztügyfele segítségével. Áttérés előtt lépjen be mint moodle/webservice:createtoken képességgel rendelkező felhasználó, a biztonsági kulcsot (jelet) a "Profilom" beállításaiból szerezze be. Ezt a jelet fogja tesztügyfélként használni. A tesztügyfél alatt jelhitelesítéssel válasszon ki egy bekapcsolt protokollt is. <strong>Vigyázat: a tesztelendő funkciók VÉGREHAJTÓDNAK, ügyeljen arra, hogy mit fog tesztelni!!!</strong>';
$string['testclient'] = 'Webszolgáltatást tesztelő kliens';
$string['testclientdescription'] = '* A webszolgáltatás tesztügyfele <strong>ÉLESBEN</strong> végrehajtja a <strong>FUNKCIÓKAT</strong>. Ismeretlen funkciót ne teszteljen! <br/>* A webszolgáltatás összes létező funkciója még nincs beépítve a tesztügyfélbe. <br/>* Annak ellenőrzésére, hogy egy felhasználó bizonyos funkciókat nem tud elérni, kipróbálhat olyan funkciókat, amelyeket nem engedélyezett.<br/>* Egyértelműbb hibaüzenetekhez állítsa a hibaszűrést <strong>{$a->mode}</strong> módra itt: {$a->atag}.';
$string['testwithtestclient'] = 'A szolgáltatás tesztelése';
$string['testwithtestclientdescription'] = 'A szolgáltatás külső elérését szimulálja a webszolgáltatás tesztügyfele segítségével. Használjon bekapcsolt protokollt jelhitelesítéssel. <strong>Vigyázat: a tesztelendő funkciók VÉGREHAJTÓDNAK, ügyeljen arra, hogy mit fog tesztelni!!!</strong>';
$string['token'] = 'Jel';
$string['tokenauthlog'] = 'Jelhitelesítés';
$string['tokencreatedbyadmin'] = 'Csak rendszergazda (*) állíthatja vissza';
$string['tokencreator'] = 'Jelelőállító';
$string['unknownoptionkey'] = 'Ismeretlen opciókulcs ({$a})';
$string['unnamedstringparam'] = 'Egy füzérparaméternek nincs neve.';
$string['updateusersettings'] = 'Frissítés';
$string['uploadfiles'] = 'Feltölthet állományokat';
$string['uploadfiles_help'] = 'Bekapcsolása esetén biztonsági kulcsával bárki feltölthet állományokat saját állományainak területére vagy egy átmeneti területre. Az esetleges méretkorlátok érvényesek.';
$string['userasclients'] = 'Felhasználók mint jellel rendelkező ügyfelek';
$string['userasclientsdescription'] = 'Az alábbi módon állíthatja be a Moodle-webszolgáltatást ügyfél felhasználók számára. Eközben beállíthatja az ajánlott jel- (biztonsági kulcs-) hitelesítési módszert is. Ez esetben a felhasználó jelét a biztonsági kulcsok oldalán a Profilom beállításaiból állítja elő.';
$string['usermissingcaps'] = 'Hiányzó képességek: {$a}.';
$string['usernameorid'] = 'Felhasználónév/-azonosító';
$string['usernameorid_help'] = 'Adjon meg egy felhasználónevet vagy -azonosítót.';
$string['usernameoridnousererror'] = 'Ezzel a felhasználónévvel/-azonosítóval nincs felhasználó';
$string['usernameoridoccurenceerror'] = 'Ezzel a felhasználónévvel több felhasználó található. Adja meg a felhasználói azonosítót.';
$string['usernotallowed'] = 'A szolgáltatást a felhasználó nem veheti igénybe. Először engedélyezze az engedéllyel rendelkező felhasználókat kezelő {$a} oldalon.';
$string['userservices'] = 'Felhasználói szolgáltatások: {$a}';
$string['usersettingssaved'] = 'Felhasználói beállítások elmentve';
$string['validuntil'] = 'Érvényességi idő';
$string['validuntil_help'] = 'Beállítása esetén a szolgáltatás a felhasználó részére ezen időpont után kikapcsol.';
$string['webservice'] = 'Webszolgáltatás';
$string['webservices'] = 'Webszolgáltatások';
$string['webservicesoverview'] = 'Áttekintés';
$string['webservicetokens'] = 'Webszolgáltatási jelek';
$string['wrongusernamepassword'] = 'Hibás felhasználónév vagy jelszó';
$string['wsaccessuserdeleted'] = '{$a} törölt felhasználónév miatt a webszolgáltatás elérése visszautasítva';
$string['wsaccessuserexpired'] = '{$a} lejárt jelszavas felhasználónév miatt a webszolgáltatás elérése visszautasítva';
$string['wsaccessusernologin'] = '{$a} be nem jelentkezett hitelesítési felhasználónév miatt a webszolgáltatás elérése visszautasítva';
$string['wsaccessusersuspended'] = '{$a} felfüggesztett felhasználónév miatt a webszolgáltatás elérése visszautasítva';
$string['wsaccessuserunconfirmed'] = '{$a} visszaigazolatlan felhasználónév miatt a webszolgáltatás elérése visszautasítva';
$string['wsclientdoc'] = 'A Moodle-webszolgáltatás ügyfél-dokumentációja';
$string['wsdocapi'] = 'Az alkalmazás dokumentációja';
$string['wsdocumentation'] = 'Webszolgáltatás dokumentációja';
$string['wsdocumentationdisable'] = 'A webszolgáltatás dokumentációja ki van kapcsolva';
$string['wsdocumentationintro'] = 'Alább látható a <b>{$a}</b> felhasználónévhez elérhető webszolgáltatások felsorolása.<br/>Kliens létrehozásához olvassa el a <a href="http://docs.moodle.org/en/Development:Creating_a_web_service_and_a_web_service_function#Create_your_own_client">Moodle dokumentációját</a>.';
$string['wsdocumentationlogin'] = 'Adja meg webszolgáltatási felhasználónevét és jelszavát.';
$string['wspassword'] = 'Webszolgáltatási jelszó';
$string['wsusername'] = 'Webszolgáltatási felhasználónév';
