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
 * Strings for component 'analytics', language 'hu', version '3.10'.
 *
 * @package     analytics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['analysablenotused'] = '{$a->analysableid} elemezhető nem használatos: {$a->errors}';
$string['analysablenotvalidfortarget'] = '{$a->analysableid} elemezhető nem érvényes ehhez: {$a->result}';
$string['analysisinprogress'] = 'Korábbi parancs még elemzi';
$string['analytics'] = 'Analitika';
$string['analyticsdisabled'] = 'Az analitika ki van kapcsolva. A "Portáladminisztráció > További funkciók" pontban.';
$string['analyticslogstore'] = 'Analitikához használt napló';
$string['analyticslogstore_help'] = 'A naplót az analitikai alkalmazás felhasználók tevékenységének a beolvasására használja.';
$string['analyticssettings'] = 'Analitika beállításai';
$string['analyticssiteinfo'] = 'Portálinformációk';
$string['defaultpredictionsprocessor'] = 'Alapvető előrejelzések feldolgozója';
$string['defaultpredictoroption'] = 'Alapvető  ({$a}) feldolgozó';
$string['defaulttimesplittingmethods'] = 'Alapvető elemzési időszakok a modell értékeléséhez.';
$string['defaulttimesplittingmethods_help'] = 'Az elemzési időszak határozza meg, hogy a rendszer mikor számítja ki az előrejelzéseket és ezekhez mely tevékenységnaplókat veszi figyelembe. A modell értékelési folyamata ezen elemzési időszakokon át ismétlődik, kivéve, ha egy konkrét elemzési időszak van megadva.';
$string['disabledmodel'] = 'Kikapcsolt modell';
$string['erroralreadypredict'] = '{$a}  állomány már szerepelt az előrejelzésben';
$string['errorcannotreaddataset'] = 'A(z) {$a} adatállomány nem olvasható.';
$string['errorcannotusetimesplitting'] = 'Ezen a modellen nem alkalmazható a megadott elemzési időtartam.';
$string['errorcannotwritedataset'] = 'A(z) {$a} adatállomány nem írható.';
$string['errorexportmodelresult'] = 'A gépi tanulási modell nem exportálható.';
$string['errorimport'] = 'Hiba az adott json-fájl importálása közben';
$string['errorimportmissingclasses'] = 'Az alábbi elemzési összetevők a portálon nem elérhetők: {$a->missingclasses}.';
$string['errorimportmissingcomponents'] = 'Az adott modellhez az alábbi segédprogramok telepítésére van szükség: {$a}. A verzióknak nem kell feltétlenül egyezni a rendszerén telepítettekkel. Jobbára elegendő a segédprogram azonos vagy újabb verziójának a telepítése.';
$string['errorimportversionmismatches'] = 'Az alábbi összetevők verziója a portálon telepítettől eltér: {$a}.  Az eltérések figyelmen kívül hagyásához használja a "Verzióeltérések figyelmen kívül hagyása" lehetőséget .';
$string['errorinvalidcontexts'] = 'A kiválasztott környezetek némelyike ezen a célhelyen nem használható.';
$string['errorinvalidindicator'] = 'Érvénytelen {$a} jelölő';
$string['errorinvalidtarget'] = 'Érvénytelen {$a} cél';
$string['errorinvalidtimesplitting'] = 'Érvénytelen elemzési időszak. Ellenőrizze, hogy megfelelő osztálynevet adott-e hozzá.';
$string['errornocontextrestrictions'] = 'A kiválasztott célhely nem támogatja a környezetkorlátozásokat.';
$string['errornoexportconfig'] = 'Hiba a modellbeállítás exportálása közben.';
$string['errornoexportconfigrequirements'] = 'Csak elemzési időszakot alkalmazó nemstatikus modellek exportálhatók.';
$string['errornoindicators'] = 'A modellnek nincs semmilyen jelölője';
$string['errornopredictresults'] = 'Az előrejelző nem adott vissza eredményt, ellenőrizze a kimeneti könyvtár tartalmát';
$string['errornoroles'] = 'Nincsenek megadva tanulói vagy tanári szerepek. Adja meg őket az analitika beállítási oldalán.';
$string['errornotarget'] = 'A modellnek nincs semmilyen célpontja';
$string['errornotimesplittings'] = 'A modellnek nincs elemzési időszaka.';
$string['errorpredictioncontextnotavailable'] = 'Az előrejelzési környezet már nem elérhető.';
$string['errorpredictionformat'] = 'Hibás formájú előrejelzési számítás';
$string['errorpredictionnotfound'] = 'Az előrejelzés nem található';
$string['errorpredictionsprocessor'] = 'Az előrejelzés-feldolgozó hibája: {$a}';
$string['errorpredictwrongformat'] = 'Az előrejelzés-feldolgozó eredménye értelmezhetetlen: "{$a}"';
$string['errorprocessornotready'] = 'A kiválasztott előrejelzés-feldolgozó nincs kész: {$a}';
$string['errorsamplenotavailable'] = 'Az előre jelzett minta már nem elérhető.';
$string['errorunexistingmodel'] = 'Nem létező {$a} modell';
$string['errorunexistingtimesplitting'] = 'A kiválasztott elemzési időszak nem elérhető.';
$string['errorunknownaction'] = 'Ismeretlen lépés';
$string['eventinsightsviewed'] = 'Megtekintett ötletek';
$string['eventpredictionactionstarted'] = 'Az előrejelzési folyamat elkezdődött';
$string['fixedack'] = 'Elfogad';
$string['incorrectlyflagged'] = 'Hibásan megjelölve';
$string['insightinfomessageaction'] = '{$a->text}: {$a->url}';
$string['insightinfomessagehtml'] = 'A rendszer ötlettel állt elő.';
$string['insightinfomessageplain'] = 'A rendszer ötlettel állt elő: {$a}';
$string['insightmessagesubject'] = 'Új ötlet ehhez: "{$a}"';
$string['invalidanalysablefortimesplitting'] = '{$a} elemzési időszakkal nem elemezhető';
$string['invalidtimesplitting'] = 'A(z) {$a} azonosítójú modellhez elemzési időszakra van szükség a betanításhoz.';
$string['levelinstitution'] = 'Oktatás szintje';
$string['levelinstitutionisced0'] = 'Óvodai oktatás (képzettségi szint szempontjából \'alsófokú alatti\')';
$string['levelinstitutionisced1'] = 'Alsófokú oktatás';
$string['levelinstitutionisced2'] = 'Felső tagozatos oktatás';
$string['levelinstitutionisced3'] = 'Középfokú oktatás';
$string['levelinstitutionisced4'] = 'Emelt szintű nem felsőfokú oktatás (ide tartozhat a vállalati vagy civil szervezetek által tartott oktatás)';
$string['levelinstitutionisced5'] = 'Rövid ciklusú felsőfokú oktatás (ide tartozhat a vállalati vagy civil szervezetek által tartott oktatás)';
$string['levelinstitutionisced6'] = 'Alapfokú vagy azzal egyenértékű';
$string['levelinstitutionisced7'] = 'Mesterfokú vagy azzal egyenértékű';
$string['levelinstitutionisced8'] = 'Doktori vagy azzal egyenértékű';
$string['modeinstruction'] = 'Oktatási formák';
$string['modeinstructionblendedhybrid'] = 'Kombinált';
$string['modeinstructionfacetoface'] = 'Személyes';
$string['modeinstructionfullyonline'] = 'Teljesen online';
$string['modeloutputdir'] = 'Modellek kimeneti könyvtára';
$string['modeloutputdirinfo'] = 'Az a könyvtár, amelyben az előrejelzés-feldolgozók az értékelési adatokat tárolják. Hasznos hibaelemzés és kutatás céljára';
$string['modeloutputdirwithdefaultinfo'] = 'Az a könyvtár, ahol a szójavaslat-feldolgozók az értékelési információkat tárolják. Hasznos hibaelhárítás és kutatás céljára. Ha üres, akkor a(z) {$a} lesz az alapértelmezett.';
$string['modeltimelimit'] = 'Modellenkénti elemzési időkorlát';
$string['modeltimelimitinfo'] = 'A beállítás korlátozza a modellenként a portáltartalom elemzésére fordított időt.';
$string['neutral'] = 'Közömbös';
$string['nocourses'] = 'Nincs elemzendő kurzus';
$string['nodata'] = 'Nincs elemezendő adat';
$string['noevaluationbasedassumptions'] = 'Feltételezéseken alapuló modellek nem értékelhetők';
$string['noinsights'] = 'Nincs leadott ötlet';
$string['noinsightsmodel'] = 'Ez a modell nem állít elő ötleteket';
$string['nonewdata'] = 'Nincs új adat. Elemzésre a következő elemzési időszak után kerül sor.';
$string['nonewranges'] = 'Még nincsenek új előrejelzések. Elemzésre a következő elemzési időszak után kerül sor.';
$string['nopredictionsyet'] = 'Még nincs előrejelzés';
$string['noranges'] = 'Még nincsenek előrejelzések';
$string['notapplicable'] = 'Nem értelmezhető';
$string['notrainingbasedassumptions'] = 'Feltételezéseken alapuló modellek nem igényelnek betanítást';
$string['notuseful'] = 'Nem hasznos';
$string['novaliddata'] = 'Nincs érvényes adat';
$string['novalidsamples'] = 'Nincs érvényes minta';
$string['onlycli'] = 'Analitikai folyamatok végrehajtása csakis a parancssorból';
$string['onlycliinfo'] = 'Az analitikai folyamatok, például a modellértékelés, a gépi tanulási algoritmusok betanítása vagy az előrejelzések előállítása időigényes lehet. Cron-feladatként működnek és a parancssorból futtathatók. Kapcsolja ki a beállítást, ha a rendszergazdák számára lehetővé kívánja tenni a webes felületen keresztüli kézi végrehajtást.';
$string['percentonline'] = 'százalékban online';
$string['percentonline_help'] = 'Ha az intézménye kombinált kurzusokat hirdet meg, a tanulói munka hány százaléka telik online Moodle-oktatással? 0 és 100 közötti számot adjon meg!';
$string['predictionsprocessor'] = 'Előrejelzés-feldolgozó';
$string['predictionsprocessor_help'] = 'Az előrejelzés-feldolgozó a gépi tanulás háttéreszköze, amely a modellek jelölői és célpontjai kiszámításával kapott adatkészleteket dolgozza föl. Minden modell más feldolgozót használhat, az itt megadott lesz az alapérték.';
$string['privacy:metadata:analytics:indicatorcalc'] = 'Jelzőszámítások';
$string['privacy:metadata:analytics:indicatorcalc:contextid'] = 'A környezet';
$string['privacy:metadata:analytics:indicatorcalc:endtime'] = 'Számítás végének időpontja';
$string['privacy:metadata:analytics:indicatorcalc:indicator'] = 'Jelzőszámító osztálya';
$string['privacy:metadata:analytics:indicatorcalc:sampleid'] = 'A minta-azonosító';
$string['privacy:metadata:analytics:indicatorcalc:sampleorigin'] = 'A minta eredeti táblája';
$string['privacy:metadata:analytics:indicatorcalc:starttime'] = 'Számítás kezdetének időpontja';
$string['privacy:metadata:analytics:indicatorcalc:timecreated'] = 'Mikor készült az előrejelzés';
$string['privacy:metadata:analytics:indicatorcalc:value'] = 'A számított érték';
$string['privacy:metadata:analytics:predictionactions'] = 'Előrejelzési lépések';
$string['privacy:metadata:analytics:predictionactions:actionname'] = 'A lépés neve';
$string['privacy:metadata:analytics:predictionactions:predictionid'] = 'Az előrejelzés azonosítója';
$string['privacy:metadata:analytics:predictionactions:timecreated'] = 'Mikor került sor az előrejelzési lépésre';
$string['privacy:metadata:analytics:predictionactions:userid'] = 'A lépést végrehajtó felhasználó';
$string['privacy:metadata:analytics:predictions'] = 'Előrejelzések';
$string['privacy:metadata:analytics:predictions:calculations'] = 'Jelzőszámítások';
$string['privacy:metadata:analytics:predictions:contextid'] = 'A környezet';
$string['privacy:metadata:analytics:predictions:modelid'] = 'A modell azonosítója';
$string['privacy:metadata:analytics:predictions:prediction'] = 'Az előrejelzés';
$string['privacy:metadata:analytics:predictions:predictionscore'] = 'Az előrejelzés pontszáma';
$string['privacy:metadata:analytics:predictions:rangeindex'] = 'Az elemzési időszak mutatója';
$string['privacy:metadata:analytics:predictions:sampleid'] = 'A minta-azonosító';
$string['privacy:metadata:analytics:predictions:timecreated'] = 'Mikor készült az előrejelzés';
$string['privacy:metadata:analytics:predictions:timeend'] = 'Számítási idő vége';
$string['privacy:metadata:analytics:predictions:timestart'] = 'Számítási idő kezdete';
$string['processingsitecontents'] = 'Portáltartalom feldolgozása';
$string['successfullyanalysed'] = 'Sikeresen elemezve';
$string['timesplittingmethod'] = 'Elemzési időszak';
$string['timesplittingmethod_help'] = 'Az elemzési időszak határozza meg, mikor kerül sor az előrejelzések kiszámítására, és ezekhez a tevékenységnaplók mely részét veszi figyelembe. Pl. a kurzus tartamát részekre bontja, és az előrejelző gép ezen részek végén fut le.';
$string['typeinstitution'] = 'Intézmény típusa';
$string['typeinstitutionacademic'] = 'Oktatási';
$string['typeinstitutionngo'] = 'Civil szervezet';
$string['typeinstitutiontraining'] = 'Vállalati képzés';
$string['useful'] = 'Hasznos';
$string['viewdetails'] = 'Részletek megtekintése';
$string['viewinsight'] = 'Ötlet megtekintése';
$string['viewinsightdetails'] = 'Ötlet részleteinek megtekintése';
$string['viewprediction'] = 'Előrejelzés részleteinek megtekintése';
$string['washelpful'] = 'Segítségére volt ez?';
