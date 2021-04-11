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
 * Strings for component 'tool_generator', language 'hu', version '3.10'.
 *
 * @package     tool_generator
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['bigfile'] = 'Nagy {$a} fájl.';
$string['courseexplanation'] = 'Ezzel az eszközzel szabványos próbakurzusokat hozhat létre.

Célja a különféle összetevők (pl. biztonsági mentés és helyreállítás) megbízhatóságának ellenőrzése.

Használatára azért van szükség, mert éles környezetben (pl. 1000 tevékenységet magában foglaló kurzus esetén) a rendszer nem működik.

Az eszközzel létrehozott kurzusok több 10 GB helyet foglalnak el, így tesztelés után törölni kell őket.

** Ne használja éles környezetben!**
Csak fejlesztői szerveren használja. (Vétlen használat elkerülésére csak akkor használható, ha a DEVELOPER hibakereső szintet is beállította.)';
$string['coursesize_0'] = 'XS (~10KB; létrejön ~1 mp alatt)';
$string['coursesize_1'] = 'S (~10MB;  létrejön ~30 mp alatt))';
$string['coursesize_2'] = 'M (~100MB; létrejön ~2 perc alatt)';
$string['coursesize_3'] = 'L (~1GB; létrejön ~30 perc alatt)';
$string['coursesize_4'] = 'XL (~10GB; létrejön ~2 óra alatt)';
$string['coursesize_5'] = 'XXL (~20GB; létrejön ~4 óra alatt)';
$string['coursewithoutusers'] = 'A kiválasztott kurzusban nincs felhasználó.';
$string['createcourse'] = 'Kurzus létrehozása';
$string['createtestplan'] = 'Tesztelési terv létrehozása';
$string['creating'] = 'Kurzus létrehozása';
$string['done'] = '({$a}) kész';
$string['downloadtestplan'] = 'Tesztelési terv letöltése';
$string['downloadusersfile'] = 'Felhasználói állomány letöltése';
$string['error_nocourses'] = 'A tesztelési terv létrehozásához nincsenek kurzusok.';
$string['error_noforumdiscussions'] = 'A kiválasztott kurzusban nincs fórummegbeszélés';
$string['error_noforuminstances'] = 'A kiválasztott kurzusban nincsenek fórummegbeszélések';
$string['error_noforumreplies'] = 'A kiválasztott kurzusban nincsenek fórumválaszok';
$string['error_nonexistingcourse'] = 'A megadott kurzus nem létezik';
$string['error_nopageinstances'] = 'A kiválasztott kurzusban nincsenek oldalmodulok';
$string['error_notdebugging'] = 'A szerveren nem elérhető, mert a hibajavítás beállítása DEVELOPER.';
$string['error_nouserspassword'] = 'A tesztelési terv létrehozásához a config.php állományban be kell állítania a $CFG->tool_generator_users_password értékét.';
$string['fullname'] = 'Próbakurzus:  {$a->size}';
$string['maketestcourse'] = 'Próbakurzus készítése';
$string['maketestplan'] = 'JMeter tesztelési terv létrehozása';
$string['notenoughusers'] = 'A kiválasztott kurzusban nincs elég felhasználó.';
$string['pluginname'] = 'Fejlesztési adatgenerátor';
$string['privacy:metadata'] = 'A Development data generator segédprogram nem tárol személyes adatokat.';
$string['progress_checkaccounts'] = 'Felhasználói fiókok ({$a}) ellenőrzése';
$string['progress_coursecompleted'] = 'Kurzusok teljesítve ({$a})';
$string['progress_createaccounts'] = 'Felhasználói fiókok létrehozása: ({$a->from} - {$a->to})';
$string['progress_createassignments'] = 'Feladatok ({$a}) létrehozása';
$string['progress_createbigfiles'] = 'Nagy {$a} fájlok létrehozása.';
$string['progress_createcourse'] = '{$a} kurzus létrehozása.';
$string['progress_createforum'] = '{$a} fórum létrehozása.';
$string['progress_createpages'] = '{$a} oldal létrehozása.';
$string['progress_createsmallfiles'] = 'Kis  {$a} fájlok létrehozása.';
$string['progress_enrol'] = 'Felhasználók felvétele {$a} kurzusba';
$string['progress_sitecompleted'] = 'Portál teljesítve ({$a})';
$string['shortsize_0'] = 'XS';
$string['shortsize_1'] = 'S';
$string['shortsize_2'] = 'M';
$string['shortsize_3'] = 'L';
$string['shortsize_4'] = 'XL';
$string['shortsize_5'] = 'XXL';
$string['sitesize_0'] = 'XS (~10 MB; 3 kurzus létrehozva ~30 mp alatt)';
$string['sitesize_1'] = 'S (~50 MB; 8 kurzus létrehozva ~2 p alatt)';
$string['sitesize_2'] = 'M (~200 MB; 73 kurzus létrehozva ~10 p alatt)';
$string['sitesize_3'] = 'L (~1,5 GB; 277 kurzus létrehozva ~1,5 óra alatt)';
$string['sitesize_4'] = 'XL (~10 GB; 1065 kurzus létrehozva ~5 óra alatt)';
$string['sitesize_5'] = 'XXL (~20 GB; 4177 kurzus létrehozva ~10 óra alatt)';
$string['size'] = 'Kurzus mérete';
$string['smallfiles'] = 'Kis fájlok';
$string['targetcourse'] = 'Célkurzus ellenőrzése';
$string['testplanexplanation'] = 'Az eszközzel JMeter tesztelési tervfájl hozható létre a felhasználó-hitelesítő állománnyal együtt. A tesztelési terv a(z) {$a} eszközzel működik együtt, mellyel egyszerűbb a tesztelési terv konkrét Moodle-környezetben futtatása, az információgyűjtés és az eredmények összehasonlítása. Ehhez töltse le és használja a test_runner.sh programkódot, vagy kövesse a telepítési és használati utasításokat.

A config.php-ben (pl. $CFG->tool_generator_users_password = \'moodle\';) jelszót kell beállítania a kurzust használók számára. Az illetéktelen használat megelőzésére alapesetben nincs beállítva jelszó. Ha a kurzust használók más jelszót használnak, vagy ha a tool_generator egy $CFG->tool_generator_users_password érték beállítása nélkül állított elő jelszót, akkor használja a jelszófrissítést.

Ez a tool_generator része, így jól működik a kurzusok és a portálok létrehozói által előállított kurzusokkal. Használható olyan kurzusokkal is, amelyek minimálisan az alábbiakat tartalmazzák:

* Kellő számú \'moodle\'-ra állított jelszavú beiratkozott felhasználó (a kiválasztott tesztelési tervmérettől függően)
* Egy oldalmodul
* Egy fórummodul legalább egy vitával és egy válasszal.

Vegye figyelembe a szerver kapacitását, ha túl nagy JMeter tesztelési terveket futtat. Noha a méretgondok kezelésére a felépítési idő a szálak (felhasználók) számához lett igazítva, a szerver terhelése így is igen nagy.

**Éles rendszeren ne futtasson tesztelési tervet**. Ennek kiválasztása esetén csak a JMeter betöltéséhez szükséges fájlok jönnek létre, így önmagában nem veszélyes, de éles portálon **SOHA** ne futtassa a tesztelési tervet.';
$string['testplansize_0'] = 'XS ({$a->users} felhasználó, {$a->loops} ciklus és {$a->rampup} felépítési idő)';
$string['testplansize_1'] = 'S ({$a->users} felhasználó, {$a->loops} ciklus és {$a->rampup} felépítési idő)';
$string['testplansize_2'] = 'M ({$a->users} felhasználó, {$a->loops} ciklus és {$a->rampup} felépítési idő)';
$string['testplansize_3'] = 'L ({$a->users} felhasználó, {$a->loops} ciklus és {$a->rampup} felépítési idő)';
$string['testplansize_4'] = 'XL ({$a->users} felhasználó, {$a->loops} ciklus és {$a->rampup} felépítési idő)';
$string['testplansize_5'] = 'XXL ({$a->users} felhasználó, {$a->loops} ciklus és {$a->rampup} felépítési idő)';
$string['updateuserspassword'] = 'A kurzust használók jelszavának frissítése';
$string['updateuserspassword_help'] = 'A JMeternek kurzusfelhasználóként kell bejelentkeznie, a jelszót
a config.php fájlban a $CFG->tool_generator_users_password segítségével állíthatja be. Hasznos lehet, ha nem a tool_generator által előállított kurzust használ, vagy ha a $CFG->tool_generator_users_passwordsegítségével nem állított be jelszót, amikor a próbakurzusokat létrehozta.';
