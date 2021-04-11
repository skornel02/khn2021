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
 * Strings for component 'certificate', language 'hu', version '3.10'.
 *
 * @package     certificate
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addlinklabel'] = 'Másik kapcsolódó tevékenység lehetőségének hozzáadása';
$string['addlinktitle'] = 'Másik kapcsolódó tevékenység lehetőségének hozzáadásához kattintson ide';
$string['areaintro'] = 'Bizonyítvány bevezetője';
$string['awarded'] = 'Adományozó';
$string['awardedto'] = 'Adományozott';
$string['back'] = 'Vissza';
$string['border'] = 'Szegély';
$string['borderblack'] = 'Fekete';
$string['borderblue'] = 'Kék';
$string['borderbrown'] = 'Barna';
$string['bordercolor'] = 'Szegélyvonalak';
$string['bordercolor_help'] = 'Mivel a képek jelentősen növelik a PDF-fájl méretét, dönthet úgy, hogy helyettük szegélyvonalakat használ (a Szegélykép beállítása legyen Nincs). A szegélyvonalakkal tetszetős, háromvonalas, változó szélességű szegélyt nyomtathat az Ön által választott színben.';
$string['bordergreen'] = 'Zöld';
$string['borderlines'] = 'Vonalak';
$string['borderstyle'] = 'Szegélykép';
$string['borderstyle_help'] = 'A Szegélykép segítségével a certificate/pix/borders mappából szegélyképet választhat a bizonyítványhoz. Ellenkező esetben válassza a Nincs szegély lehetőséget.';
$string['certificate'] = 'Bizonyítványkód ellenőrzése';
$string['certificate:manage'] = 'Bizonyítvány kezelése';
$string['certificate:printteacher'] = 'Tanár nevének noymtatása';
$string['certificate:student'] = 'Bizonyítvány átvétele';
$string['certificate:view'] = 'Bizonyítvány megtekintése';
$string['certificatename'] = 'Bizonyítvány megnevezése';
$string['certificatereport'] = 'Bizonyítványokról szóló jelentés';
$string['certificatesfor'] = 'Bizonyítvány témaköre';
$string['certificatetype'] = 'Bizonyítvány típusa';
$string['certificatetype_help'] = 'Itt adja meg a bizonyítvány elrendezését. A bizonyítványtípus  mappája négy alapértelmezett bizonyítványt tartalmaz: Az A4-es beágyazott betűs nyomatok A4 méretű papíron jelennek meg beágyazott betűtípussal. Az A4-es nem beágyazott betűs nyomatok beágyazott betűtípusok nélkül jelennek meg. A Letter beágyazott betűs nyomatok Letter méretű papíron jelennek meg beágyazott betűtípussal. A Letter nem beágyazott betűs nyomatok beágyazott betűtípusok nélkül készülnek.

A nem beágyazott típusok Helvetica és Times betűtípust használnak. Ha úgy gondolja, hogy a felhasználók számítógépén nem lesznek meg ezek a betűtípusok, vagy ha a használt nyelvben vannak olyan karakterek vagy szimbólumok, amelyek nem kapnak helyet  a Helvetica és a Times betűtípusban, akkor válasszon beágyazott típust. Beágyazott típusokat használ a Dejavusans és a Dejavuserif. Ezekkel a PDF-fájlok meglehetősen terjedelmesek lesznek, így használatuk csak indokolt esertben ajánlott.

Új típusokhoz mappákat hozhat létre a bizonyítvány/típus mappában. A mappa nevét és új nyelvek esetén az esetleges új szöveget hozzá kell adni a bizonyítvány nyelvi állományához.';
$string['certify'] = 'Ezennel tanúsítjuk, hogy';
$string['code'] = 'Kód';
$string['completiondate'] = 'Kurzus teljesítése';
$string['course'] = 'Témakör';
$string['coursegrade'] = 'Kurzusosztályzat';
$string['coursename'] = 'Kurzus';
$string['credithours'] = 'Kreditóra';
$string['customtext'] = 'Egyedi szöveg';
$string['customtext_help'] = 'Ha a bizonyítványon a tanár nevét más betűkkel szeretni nyomtatni, mint a tanár szerepével rendelkezőkét, akkor ne válassza a Tanár nyomtatása pontot és az aláírásképet, csak a vonalképet adja meg. Nyomtatáshoz írja be a tanár nevét a szövegdobozba. Alapesetben ez a szöveg a bizonyítvány bal alsó sarkába kerül. A következő html-címkéket használhatja: <br>, <p> <b>, <i>, <u>, <img> (az src és a width (vagy a height) megadása kötelező), <a> (a href kötelező) , <font> (lehetséges attribútumai: color, (hex. színkód), face, (arial, times, courier, helvetica, symbol)).';
$string['date'] = 'Dátum';
$string['datefmt'] = 'Dátumforma';
$string['datefmt_help'] = 'Válasszon dátumformát a bizonyítványra nyomtatáshoz, vagy válassza az utolsó elemet, ha a dátumot a felhasználó nyelvének megfelelő formában kívánja kinyomtatni.';
$string['datehelp'] = 'Dátum';
$string['deletissuedcertificates'] = 'Kiállított bizonyítványok törlése';
$string['delivery'] = 'Kézbesítés';
$string['delivery_help'] = 'Itt adja meg, hogyan kapják meg a tanulók a bizonyítványt.
Böngészőben megnyitva: megnyitja a bizonyítványt egy új böngészőablakban. Letöltés előírása: megnyitja a böngésző fájlletöltő ablakát.
Bizonyítvány e-mailben: a tanuló a bizonyítványt  e-mail mellékleteként kapja meg. Miután a felhasználó megkapta a bizonyítványt, a kurzus kezdőoldalán a bizonyítványra kattintva megnézheti, mikort kapta a bizonyítványt, és ellenőrizheti annak tartalmát.';
$string['designoptions'] = 'Megjelenési lehetőségek';
$string['download'] = 'Letöltés előírása';
$string['emailcertificate'] = 'E-mail (mentés is választandó!)';
$string['emailothers'] = 'E-mail másoknak';
$string['emailothers_help'] = 'Vesszőkkel elválasztva adja meg, kiket kell e-mailben értesíteni, ha a tanulók bizonyítványt kapnak.';
$string['emailstudenttext'] = '{$a->course}.kurzushoz kapcsolódóan mellékeljük bizonyítványát.';
$string['emailteachermail'] = '{$a->student} bizonyítványt kapott: \'{$a->certificate}\' a(z) {$a->course} kurzus keretében. Itt ellenőrizheti: {$a->url}';
$string['emailteachermailhtml'] = '{$a->student} bizonyítványt kapott: \'<i>{$a->certificate}</i>\' a(z) {$a->course} kurzus keretében. Itt ellenőrizheti: <a href="{$a->url}">Bizonyítványról szóló jelentés</a>.';
$string['emailteachers'] = 'E-mail tanároknak';
$string['emailteachers_help'] = 'Bekapcsolása esetén a tanárok e-mailben értesítést kapnak, ha a tanulók bizonyítványt kapnak.';
$string['entercode'] = 'Adja meg ellenőrzéshez a bizonyítvány kódját:';
$string['getcertificate'] = 'Bizonyítvány lekérése';
$string['grade'] = 'Osztályzat';
$string['gradedate'] = 'Osztályzat dátuma';
$string['gradefmt'] = 'Osztályzat formája';
$string['gradefmt_help'] = 'Ha a bizonyítványra osztályzatot nyomtat, három forma közül választhat:
Százalék: az osztályzat százalékként jelenik meg. Pontszám: az osztályzat pontértékként jelenik meg. Betű: az osztályzat betűként jelenik meg.';
$string['gradeletter'] = 'Osztályzat betűvel';
$string['gradepercent'] = 'Osztályzat százalékkal';
$string['gradepoints'] = 'Osztályzat pontszámmal';
$string['incompletemessage'] = 'A bizonyítvány letöltéséhez hajtsa végre az összes előírt tevékenységet. A kurzusmunka teljesítéséhez térjen vissza kurzusához.';
$string['intro'] = 'Bevezető';
$string['issued'] = 'Kiállítás';
$string['issueddate'] = 'Kiállítás kelte';
$string['issueoptions'] = 'Kiállítási lehetőségek';
$string['landscape'] = 'Fekvő';
$string['lastviewed'] = 'A bizonyítvány utolsó átvételének dátuma:';
$string['letter'] = 'Betű';
$string['lockingoptions'] = 'Zárolási lehetőségek';
$string['modulename'] = 'Bizonyítvány';
$string['modulenameplural'] = 'Bizonyítványok';
$string['mycertificates'] = 'Bizonyítványaim';
$string['nocertificates'] = 'Nincs bizonyítvány';
$string['nocertificatesissued'] = 'Nincs kiállított bizonyítvány';
$string['nocertificatesreceived'] = 'Nem kapott kurzus elvégzéséről bizonyítványt';
$string['nogrades'] = 'Nincs osztályzat';
$string['notapplicable'] = 'Nem vonatkozik rá';
$string['notfound'] = 'A bizonyítvány száma nem ellenőrizhető';
$string['notissued'] = 'Nincs kiállítva';
$string['notissuedyet'] = 'Még nincs kiállítva';
$string['notreceived'] = 'A bizonyítványt nem kapta meg.';
$string['openbrowser'] = 'Megnyitás új ablakban';
$string['opendownload'] = 'Az alábbi gombra kattintva mentse el a bizonyítványát a számítógépére.';
$string['openemail'] = 'Az alábbi gombra kattintva bizonyítványát a számítógépére küldheti csatolt állományban.';
$string['openwindow'] = 'Az alábbi gombra kattintva nyissa meg a bizonyítványát egy új böngészőablakban.';
$string['or'] = 'Vagy';
$string['orientation'] = 'Tájolás';
$string['orientation_help'] = 'Álló vagy fekvő bizonyítványt szeretne?';
$string['pluginadministration'] = 'Bizonyítvánnyal kapcsolatos ügyintézés';
$string['pluginname'] = 'Bizonyítvány';
$string['portrait'] = 'Álló';
$string['printdate'] = 'Nyomtatás dátuma';
$string['printdate_help'] = 'Ez a dátum jelenik meg Nyomtatási dátum kiválasztása esetén. Ha a kurzus teljesítésének dátumát választotta, de a tanuló még nem végezte el a kurzust, akkor a nyomaton az átvétel dátuma jelenik meg. Választhatja valamely tevékenység leosztályozásának a dátumát is. Ha a bizonyítványt ez előtt állítják ki, azon az átvétel dátuma jelenik meg.';
$string['printerfriendly'] = 'Nyomtatóbarát oldal';
$string['printgrade'] = 'Osztályzat nyomtatása';
$string['printgrade_help'] = 'A kurzus osztályozási tételei közül bármelyiket kiválaszthatja az osztályozónaplóból való kinyomtatásra. A tételek a naplóban való megjelenés sorrendjében vannak felsorolva. Az osztályzat formáját válassza ki alább.';
$string['printhours'] = 'Kreditórák nyomtatása';
$string['printhours_help'] = 'Itt adja meg a bizonyítványra nyomtatandó kreditórák számát.';
$string['printnumber'] = 'Kód nyomtatása';
$string['printnumber_help'] = 'Egy egyedi, 10 jegyű, véletlenszerű betűkből és számokból előálló kódot nyomtathat a bizonyítványra. Ezt ellenőrzésképpen egybevetheti a bizonyítványokról szóló jelentésben szereplő kóddal.';
$string['printoutcome'] = 'Eredmény nyomtatása';
$string['printoutcome_help'] = 'Tetszőleges kurzuseredményt kiválaszthat a bizonyítványra nyomtatáshoz. Például: Feladat. Eredménye: Haladó.';
$string['printseal'] = 'Pecsét vagy logó';
$string['printseal_help'] = 'Ezzel a certificate/pix/seals mappából kiválaszthat egy pecsétet vagy logót a bizonyítványhoz. Alapesetben ez a kép kerül a bizonyítvány jobb alsó sarkába.';
$string['printsignature'] = 'Aláírás képe';
$string['printsignature_help'] = 'Ezzel a certificate/pix/signatures mappából kiválaszthatja egy aláírás képét a bizonyítványhoz. Kinyomtathatja a képet, vagy kézi aláíráshoz kinyomtathat egy vonalat. Alapesetben ez a kép kerül a bizonyítvány bal alsó sarkába.';
$string['printteacher'] = 'Tanár(ok) nevének nyomtatása';
$string['printteacher_help'] = 'A tanár nevének a bizonyítványon való feltüntetéséhez modulszinten állítsa be a tanári szerepet. Ezt akkor hajtsa végre, ha vagy több tanár tartja a tanfolyamot, vagy ha a bizonyítványokra más-más tanár nevét kívánja rányomtatni. Először kattintson a bizonyítvány szerkesztéséhez, majd kattinson a Helyileg hozzárendelt szerepek fülre. Ezután a Tanár szerepét (szerkesztő tanár) rendelje hozzá a bizonyítványhoz (a tanár NEM szükségszerűen a kurzust oktató tanár - a szerepet bárkihez hozzárendelheti).
Ekkor a tanárhoz tartozó bizonyítványokon meg fog jelenni a tanár neve.';
$string['printwmark'] = 'Vízjel';
$string['printwmark_help'] = 'A bizonyítvány hátterében vízjelet helyezhet el. A vízjel halványan megjelenő grafika, például logó, pecsét, címer vagy szöveg.';
$string['receivedcerts'] = 'Átvett bizonyítványok';
$string['receiveddate'] = 'Átvétel dátuma';
$string['reissuecert'] = 'Bizonyítványok újbóli kiállítása';
$string['reissuecert_help'] = 'Ha itt Igen-t választ, akkor a bizonyítvány új dátummal, osztályzattal és kódszámmal áll elő, ha egy felhasználó rákattint a bizonyítvány ugrópontjára. Megjegyzés: a korábbi kiállítási dátumok egy táblázatban megjelennek ugyan, de a felhasználók számára Ellenőrzés gomb nem lesz elérhető . Csak a legutóbbi kiadott bizonyítvány jelenik meg a bizonyítványról szóló jelentésben.';
$string['removecert'] = 'Kiállított bizonyítványok törölve';
$string['report'] = 'Jelentés';
$string['reportcert'] = 'Bizonyítványokról szóló jelentés';
$string['reportcert_help'] = 'Igen választása esetén a bizonyítvány átvételének napja, kódszáma és a kurzus neve megjelenik a felhasználó bizonyítvánnyal kapcsolatos jelentésében. Ha osztályzatot kíván a bizonyítványon feltüntetni, akkor az is megjelenik a felhasználó bizonyítvánnyal kapcsolatos jelentésében.';
$string['reviewcertificate'] = 'Bizonyítvány ellenőrzése';
$string['savecert'] = 'Bizonyítvány mentése';
$string['savecert_help'] = 'Ha ezt választja, az egyes felhasználók bizonyítványairól pdf-fájl készül a kurzus moddata mappájában. A bizonyítvánnyal kapcsolatos jelentésben ugrópont jelenik meg az egyes  felhasználók elmentett bizonyítványához.';
$string['sigline'] = 'vonal';
$string['statement'] = 'a kurzust teljesítette';
$string['summaryofattempts'] = 'Korábban kapott bizonyítványok összegzése';
$string['textoptions'] = 'Szöveges lehetőségek';
$string['title'] = 'BIZONYÍTVÁNY';
$string['to'] = 'Adományozott';
$string['typeA4_embedded'] = 'Beágyazott A4';
$string['typeA4_non_embedded'] = 'Nem beágyazott A4';
$string['typeletter_embedded'] = 'Beágyazott Letter';
$string['typeletter_non_embedded'] = 'Nem beágyazott Letter';
$string['userdateformat'] = 'Felhasználó nyelve szerinti dátumforma';
$string['validate'] = 'Ellenőrzés';
$string['verifycertificate'] = 'Bizonyítvány ellenőrzése';
$string['viewcertificateviews'] = '{$a} kiállított bizonyítvány megtekintése';
$string['viewed'] = 'A bizonyítvány átvételének dátuma:';
$string['viewtranscript'] = 'Bizonyítványok megtekintése';
