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
 * Strings for component 'tool_analytics', language 'hu', version '3.10'.
 *
 * @package     tool_analytics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accuracy'] = 'Pontosság';
$string['actionexecutedgroupedusefulness'] = 'Csoportosított lépések';
$string['actions'] = 'Lépések';
$string['actionsexecutedbyusers'] = 'Felhasználói lépések';
$string['actionsexecutedbyusersfor'] = 'A(z)  "{$a}" modellel kapcsolatban végrehajtott felhasználói lépések';
$string['allpredictions'] = 'Minden előrejelzés';
$string['alltimesplittingmethods'] = 'Az összes elemzési időszak';
$string['analysingsitedata'] = 'A portál elemzése';
$string['analysis'] = 'Elemzés';
$string['analyticmodels'] = 'Analitikai modellek';
$string['bettercli'] = 'A modellek értékelése és előrejelzések előállítása számításigényes. Ezeket a lépéseket parancssorból hajtsa végre.';
$string['cantguessenddate'] = 'Nem található ki a befejezés dátuma';
$string['cantguessstartdate'] = 'Nem található ki a kezdés dátuma';
$string['classdoesnotexist'] = 'A(z) {$a} osztály nem létezik';
$string['clearmodelpredictions'] = 'Törli az összes "{$a}" előrejelzést?';
$string['clearpredictions'] = 'Előrejelzések törlése';
$string['clienablemodel'] = 'A modellt egy elemzési időszak azonosítójának a kiválasztásával kapcsolhatja be. Webes felületről később is bekapcsolhatja (kilépés: \'egyik sem\')';
$string['clievaluationandpredictions'] = 'Egy ütemezett feladat nézi végig a bekapcsolt modelleket és nyer ki előrejelzéseket. A modellek webes felületről való értékelése ki van kapcsolva. Kézi végrehajtást engedélyezhet webes felületről az <a href="{$a}">\'onlycli\' </a> analitika kikapcsolása révén.';
$string['clievaluationandpredictionsnoadmin'] = 'A bekapcsolt modelleken ütemezett feladat végrehajtására kerül sor. Webes felületről a modellértékelés nem elérhető, azt a rendszergazda tudja bekapcsolni.';
$string['component'] = 'Összetevő';
$string['componentcore'] = 'Alapprogram';
$string['componentselect'] = 'Válassza a(z) \'{$a}\' összetevő által biztosított összes modellt';
$string['componentselectnone'] = 'Minden kijelölés megszüntetése';
$string['contexts'] = 'Környezetek';
$string['contexts_help'] = 'A modell ezekre a környezetekre korlátozódik. Ha nincs kiválasztva környezet, környezetkorlátozásra nem kerül sor.';
$string['createmodel'] = 'Modell létrehozása';
$string['currenttimesplitting'] = 'A jelenlegi elemzési időszak';
$string['delete'] = 'Törlés';
$string['deletemodelconfirmation'] = 'Biztosan törlendő a(z) "{$a}"? A módosítások  nem állíthatók vissza.';
$string['disabled'] = 'Kikapcsolva';
$string['editmodel'] = '"{$a}" modell szerkesztése';
$string['edittrainedwarning'] = 'A modell már be van tanítva. Jelölőinek vagy elemzési időszakának a megváltoztatásával törlődnek korábbi előrejelzései és újak állnak elő.';
$string['enabled'] = 'Bekapcsolva';
$string['errorcantenablenotimesplitting'] = 'A modell bekapcsolása előtt válasszon egy elemzési időszakot';
$string['errornoenabledandtrainedmodels'] = 'Nincs bekapcsolt vagy betanított modell az előrejelzéshez';
$string['errornoenabledmodels'] = 'Nincs bekapcsolt modell a betanításhoz';
$string['errornoexport'] = 'Csak betanított modelleket lehet exportálni';
$string['errornostaticevaluated'] = 'Feltételezéseken alapuló modelleket nem lehet értékelni, a meghatározásuk szerint mindig 100%-ban helyesek';
$string['errornostaticlog'] = 'Feltételezéseken alapuló modelleket nem lehet értékelni, nincs teljesítménynapló';
$string['erroronlycli'] = 'Végrehajtás csak a parancssor+ból lehetséges';
$string['errortrainingdataexport'] = 'A modell betanítási adatait nem lehet exportálni';
$string['evaluate'] = 'Értékel';
$string['evaluatemodel'] = 'Modell értékelése';
$string['evaluationinbatches'] = 'A portál tartalmát kötegekben számítja és tárolja. Értékelés közben bármikor leállíthatja, a következő alkalommal onnan fogja folytatni.';
$string['evaluationmode'] = 'Értékelési mód';
$string['evaluationmode_help'] = 'Kétféle értékelési mód létezik:

* Betanított modell - A portál adatait használja a betanított modell pontosságának értékeléséhez.
* Beállítás - A portál adatait betanítási és ellenőrzési adatokra bontja a modellbeállítás pontosságának az ellenőrzéséhez.

A betanított modell csak akkor érhető el, ha a portálra olyan betanított modellt importáltak, amelyet a portáladatokkal még nem tanítottak be újból.';
$string['evaluationmodecolconfiguration'] = 'Beállítás';
$string['evaluationmodecoltrainedmodel'] = 'Betanított modell';
$string['evaluationmodeconfiguration'] = 'A modellbeállítás értékelése';
$string['evaluationmodeinfo'] = 'A modellt a portálra importálták. Vagy értékelheti a modell teljesítményét, vagy a portáladatokkal értékelheti a modellbeállítás teljesítményét.';
$string['evaluationmodetrainedmodel'] = 'A  betanított modell értékelése';
$string['executescheduledanalysis'] = 'Ütemezett elemzés végrehajtása';
$string['export'] = 'Exportálás';
$string['exportincludeweights'] = 'A betanított modell súlyaival együtt';
$string['exportmodel'] = 'Beállítások exportálása';
$string['exporttrainingdata'] = 'Betanítási adatok exportálása';
$string['extrainfo'] = 'Infó';
$string['generalerror'] = 'Értékelési hiba. Állapotkód:  {$a}';
$string['getpredictions'] = 'Előrejelzések bekérése';
$string['goodmodel'] = 'Ez jó modell és használható előrejelzésre, kapcsolja be az előrejelzések bekéréséhez';
$string['ignoreversionmismatches'] = 'Verzióeltérések figyelmen kívül hagyása';
$string['ignoreversionmismatchescheckbox'] = 'A jelen portálverzió és az eredeti portálverzió közötti eltérések figyelmen kívül hagyása';
$string['importedsuccessfully'] = 'A modell importálása sikerült.';
$string['importmodel'] = 'Modell importálása';
$string['indicators'] = 'Jelölők';
$string['indicators_help'] = 'A jelzők arra utalnak, mit tekint a cél pontos előrejelzéséhez elvezető tényezőknek.';
$string['indicatorsnum'] = 'Jelzők száma:  {$a}';
$string['info'] = 'Infó';
$string['insights'] = 'Ötletek';
$string['insightsreport'] = 'Betekintési jelentés';
$string['invalidanalysables'] = 'Érvénytelen portálelemek';
$string['invalidanalysablesinfo'] = 'Ezen az oldalon szerepelnek azok az elemezhető portálelemek, amelyeket az előrejelző modell nem tud használni. A felsorolt elemek sem tanításra, sem előrejelzések kinyerésére nem használhatók.';
$string['invalidanalysablestable'] = 'Érvénytelen elemezhető portálelemek táblázata';
$string['invalidcurrenttimesplitting'] = 'Ezen a modellen a megadott elemzési időtartam érvénytelen. Válasszon egy másik időtartamot.';
$string['invalidindicatorsremoved'] = 'Új modell hozzáadására került sor. A kiválasztott céllal nem használható jelzők automatikusan törlődtek.';
$string['invalidprediction'] = 'Érvénytelen előrejelzések kinyeréséhez';
$string['invalidtimesplitting'] = 'A kiválasztott elemzési időtartam érvénytelen a kiválasztott célhoz.';
$string['invalidtimesplittinginmodels'] = 'Egyes modellek számára a használt elemzési időtartam érvénytelen. Az alábbi modellekhez válasszon másik időtartamot: {$a}';
$string['invalidtraining'] = 'Érvénytelen  a modell betanításához';
$string['loginfo'] = 'Külön infó naplózása';
$string['missingmoodleversion'] = 'Az importált állomány nem ad meg verziószámot';
$string['modelid'] = 'Modell azonosítója';
$string['modelinvalidanalysables'] = 'Érvénytelen elemezhető elemek "{$a}" modell esetén';
$string['modelname'] = 'Modell neve';
$string['modelresults'] = '{$a} eredmény';
$string['modeltimesplitting'] = 'Elemzési időszak';
$string['newmodel'] = 'Új modell';
$string['nextpage'] = 'Következő oldal';
$string['noactionsfound'] = 'Az előállt ötletekkel kapcsolatosan a felhasználók részéről semmilyen lépésre nem került sor.';
$string['nodatatoevaluate'] = 'Nincs adat a modell értékeléséhez';
$string['nodatatopredict'] = 'Az előrejelzéshez nincsenek új elemek';
$string['nodatatotrain'] = 'Nincs betanításhoz használható új adat';
$string['noinvalidanalysables'] = 'A portálon nincs érvénytelen elemzésre váró elem.';
$string['notdefined'] = 'Még nincs megadva';
$string['pluginname'] = 'Analitikai modellek';
$string['predictionprocessfinished'] = 'Előrejelzési folyamat véget ért';
$string['predictionresults'] = 'Előrejelzés eredményei';
$string['predictmodels'] = 'Modellek előrejelzése';
$string['predictorresultsin'] = 'Az előrejelző {$a} könyvtárba naplózott adatokat';
$string['previouspage'] = 'Előző oldal';
$string['privacy:metadata'] = 'Az Analytic models segédprogram semmilyen személyes adatot nem tárol.';
$string['restoredefault'] = 'Alapmodellek helyreállítása';
$string['restoredefaultempty'] = 'Válassza ki a helyreállítandó modelleket.';
$string['restoredefaultinfo'] = 'Az alapmodellek hiányoznak vagy telepítésük óta módosultak. A kiválasztott alapmodelleket helyreállíthatja.';
$string['restoredefaultnone'] = 'Az alapprogrammal és a telepített segédprogramokkal kapott összes alapmodell már létrejött. Új modell nem található, így nincs mit helyreállítani.';
$string['restoredefaultsome'] = '{$a->count} új modell sikeresen újból létrehozva.';
$string['restoredefaultsubmit'] = 'Kiválasztottak helyreállítása';
$string['sameenddate'] = 'Hibás aktuális befejezési dátum';
$string['samestartdate'] = 'Hibás aktuális kezdési dátum';
$string['scheduledanalysisresults'] = 'Eredmények a(z) {$a->name} időtartamának felosztásával';
$string['scheduledanalysisresultscli'] = 'Eredmények  a(z) {$a->name} (id: {$a->id})  időtartamának felosztásával';
$string['selecttimesplittingforevaluation'] = 'Válassza ki a modell beállításának értékelésére használandó elemzési időszakot.';
$string['target'] = 'Célpont';
$string['target_help'] = 'A cél egyezik a modell által jósolttal.';
$string['timesplittingnotdefined'] = 'Elemzési időszak nincs meghatározva.';
$string['timesplittingnotdefined_help'] = 'A modell bekapcsolása előtt elemzési időszakot kell kiválasztania.';
$string['trainandpredictmodel'] = 'Modell betanítása és előrejelzések számítása';
$string['trainingprocessfinished'] = 'A betanítási folyamat véget ért';
$string['trainingresults'] = 'A betanítás eredményei';
$string['trainmodels'] = 'Modellek betanítása';
$string['versionnotsame'] = 'Az importált állomány a jelenlegitől ({$a->version}) eltérő  verzióból ({$a->importedversion}) származik.';
$string['viewlog'] = 'Értékelési napló';
$string['weeksenddateautomaticallyset'] = 'Befejezési dátum automatikusan beállítva a kezdés és a szakaszok száma alapján';
$string['weeksenddatedefault'] = 'Befejezési dátum automatikusan kiszámítva a kezdési dátum alapján';
