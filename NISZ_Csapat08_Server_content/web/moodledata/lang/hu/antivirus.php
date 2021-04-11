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
 * Strings for component 'antivirus', language 'hu', version '3.10'.
 *
 * @package     antivirus
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actantivirushdr'] = 'Elérhető vírusölők';
$string['antiviruscommonsettings'] = 'Szokásos vírusirtós beállítások';
$string['antiviruses'] = 'Vírusölők';
$string['antivirussettings'] = 'Vírusölők kezelése';
$string['configantivirusplugins'] = 'Válassza ki és rendezze el a használandó vírusölőket.';
$string['datainfecteddesc'] = 'Fertőzött adatok fordulnak elő.';
$string['datainfectedname'] = 'Fertőzött adatok';
$string['datastream'] = 'Adatok';
$string['emailadditionalinfo'] = 'További részletek a vírusirtó motortól:';
$string['emailauthor'] = 'Feltöltötte:';
$string['emailcontenthash'] = 'Tartalomkivonat:';
$string['emailcontenttype'] = 'Tartalomtípus:';
$string['emaildate'] = 'Feltöltés ideje:';
$string['emailfilename'] = 'Állomány neve:';
$string['emailfilesize'] = 'Állomány mérete:';
$string['emailgeoinfo'] = 'Földrajzi hely';
$string['emailinfectedfiledetected'] = 'Fertőzött állomány észlelve';
$string['emailipaddress'] = 'IP-cím:';
$string['emailreferer'] = 'Hivatkozó:';
$string['emailreport'] = 'Jelentés:';
$string['emailscanner'] = 'Szkenner:';
$string['emailscannererrordetected'] = 'Szkennerhiba történt';
$string['emailsubject'] = '{$a} :: A Clam vírusirtó üzenete';
$string['enablequarantine'] = 'Karantén bekapcsolása';
$string['enablequarantine_help'] = 'Karantén bekapcsolásakor a vírusos állományok későbbi vizsgálat céljából karanténmappába  ([dataroot]/{$a}) kerülnek. A feltöltés eredménytelen marad. Ha van vírusirtója, hagyja ki a karanténmappát az ellenőrzésből.';
$string['fileinfecteddesc'] = 'Fertőzött állomány észlelve.';
$string['fileinfectedname'] = 'Fertőzött állomány';
$string['notifyemail'] = 'Vírusirtó figyelmeztető e-mailje';
$string['notifyemail_help'] = 'Beállítása esetén csak a megadott e-mailre megy figyelmeztetés, egyéb esetben minden rendszergazda kap értesítést.';
$string['privacy:metadata'] = 'A vírusirtó rendszer semmilyen személyes adatot nem tárol.';
$string['quarantinedfiles'] = 'Vírusirtóval karanténba helyezett állományok';
$string['quarantinedisabled'] = 'Karantén kikapcsolva, az állomány nem tárolódik.';
$string['quarantinetime'] = 'Maximális karanténidő';
$string['quarantinetime_desc'] = 'Az ennél régebbi karanténba helyezett állományok törlődnek.';
$string['taskcleanup'] = 'Karanténba helyezett állományok kitakarítása';
$string['unknown'] = 'Ismeretlen';
$string['virusfound'] = '{$a->item} beolvasása fertőzést jelző vírusellenőrzővel történt!';
