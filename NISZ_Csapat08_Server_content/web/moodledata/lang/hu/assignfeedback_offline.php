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
 * Strings for component 'assignfeedback_offline', language 'hu', version '3.10'.
 *
 * @package     assignfeedback_offline
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['confirmimport'] = 'Osztályzatok importálásának megerősítése';
$string['default'] = 'Alapesetben bekapcsolva';
$string['default_help'] = 'Beállítása esetén a munkalapos offline osztályozás alapesetben minden új feladathoz be lesz kapcsolva.';
$string['downloadgrades'] = 'Osztályozó munkalap letöltése';
$string['enabled'] = 'Offline osztályozó munkalap';
$string['enabled_help'] = 'Bekapcsolása esetén a tanár a feladatok osztályozása során tanulói osztályzatokat tartalmazó munkalapot tölthet le vagy fel.';
$string['feedbackupdate'] = '"{$a->field}" mező beállítása "{$a->student}" részére erre: "{$a->text}"';
$string['gradelockedingradebook'] = '{$a} osztályozónaplójában az osztályzat zárolva van-';
$string['graderecentlymodified'] = '{$a} osztályozónaplójához képest a Moodle-ban az osztályzat módosítása frissebb.';
$string['gradesfile'] = 'Osztályzatokat tartalmazó munkalap (csv-forma)';
$string['gradesfile_help'] = 'Módosult osztályzatokat tartalmazó munkalap. Az állomány előírt formája feladatból letöltött csv, osztályzatot és azonosítót tartalmazó oszlopokkal, &quot;UTF-8&quot; kódolással.';
$string['gradeupdate'] = '{$a->student} osztályzatának beállítása erre: {$a->grade}';
$string['ignoremodified'] = 'A munkalaphoz képest a Moodle-ban frissebb módosításokat tartalmazó rekordok frissítésének engedélyezése .';
$string['ignoremodified_help'] = 'Ha az osztályozó munkalapot a Moodle-ból tölti le, abban megjelenik minden osztályzat utolsó módosításának a dátuma. Ha egy osztályzat a munkalap letöltése után frissítődik, alapesetben a Moodle az osztályzat importálása során nem írja fölül a frissített adatot. Ha ezt a lehetőséget választja, a Moodle kikapcsolja ezt a biztonsági ellenőrzést, így az értékelők fölülírhatják egymás osztályzatait.';
$string['importgrades'] = 'Az osztályozó munkalap változásainak jóváhagyása';
$string['invalidgradeimport'] = 'A Moodle nem tudja beolvasni a feltöltött munkalapot. Ellenőrizze, vesszőkkel elválasztott értékek (.csv) szerepelnek-e benne , és próbálja meg ismét.';
$string['nochanges'] = 'A feltöltött munkalapon nincs módosult osztályzat';
$string['offlinegradingworksheet'] = 'Osztályzatok';
$string['pluginname'] = 'Offline osztályozó munkalap';
$string['privacy:nullproviderreason'] = 'A segédprogramhoz nincs felhasználói adatokat tároló adatbázis. Az osztályozó felület megjelenítéséhez csak mod_assign-t használ.';
$string['processgrades'] = 'Osztályzatok importálása';
$string['skiprecord'] = 'Rekord kihagyása';
$string['updatedgrades'] = '{$a} frissített osztályzat és visszajelzés';
$string['updaterecord'] = 'Rekord frissítése';
$string['uploadgrades'] = 'Osztályozó munkalap feltöltése';
