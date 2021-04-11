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
 * Strings for component 'mlbackend_python', language 'hu', version '3.10'.
 *
 * @package     mlbackend_python
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['errornoconfigdata'] = 'A szerverbeállítás nem teljes';
$string['errorserver'] = '{$a} szerverhiba';
$string['host'] = 'Gazdagép';
$string['hostdesc'] = 'Gazdagép';
$string['packageinstalledshouldbe'] = 'A "moodlemlbackend" python csomagot frissíteni kell. Az előírt verzió: "{$a->required}", a telepített pedig: "{$a->installed}"';
$string['packageinstalledtoohigh'] = 'A "moodlemlbackend" Python csomag ezzel a Moodle-verzióval nem kompatibilis. Legalább "{$a->required}" verzióra van szüksége, ha az az API-val kompatibilis. A telepített "{$a->installed}" verzió túl magas.';
$string['password'] = 'Jelszó';
$string['passworddesc'] = 'Jelszóként használt karakterlánc a Moodle-szerver  és a python-szerver közötti kommunikációhoz.';
$string['pluginname'] = 'Python  gépi tanulási háttéreszköz';
$string['port'] = 'Port';
$string['portdesc'] = 'Port';
$string['privacy:metadata'] = 'A Python machine learning backend segédprogram semmilyen személyes adatot nem tárol.';
$string['pythonpackagenotinstalled'] = 'A "moodlemlbackend" python csomag nincs telepítve, vagy hibás. További információkért parancssorból futtassa le a(z) "{$a}"-t.';
$string['pythonpathnotdefined'] = 'A futtatható Python-kód útvonala nincs megadva. Itt állítsa be: "{$a}".';
$string['secure'] = 'HTTPS használata';
$string['securedesc'] = 'HTTP, avagy HTTPS használata.';
$string['serversettingsinfo'] = 'A szerverbeállítások megjelenítéséhez jelölje be a "Szerver használata" pontot.';
$string['tensorboardinfo'] = 'A TensorBoard parancssorból való indításához írja be webszerverébe ezt: tensorboard --logdir=\'{$a}\'';
$string['username'] = 'Felhasználónév';
$string['usernamedesc'] = 'Felhasználónévként használt karakterlánc a Moodle-szerver és a python-szerver közötti kommunikációhoz.';
$string['useserver'] = 'Szerver használata';
$string['useserverdesc'] = 'A gépi tanulási háttéralkalmazás python-csomagja nem a webszerveren van telepítve.';
