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
 * Strings for component 'antivirus_clamav', language 'hu', version '3.10'.
 *
 * @package     antivirus_clamav
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['antivirusfailed'] = 'Gond támadt az AntiVirus-vizsgálattal. {$a->item} állománya nincs feltöltve. Próbálja meg újból.';
$string['clamfailed'] = 'A vírusirtó nem futott le. A hibajelzés {$a} volt. Íme a vírusirtó üzenete:';
$string['clamfailureonupload'] = 'A ClamAV hibája esetén';
$string['configclamactlikevirus'] = 'Az állományokat kezelje vírusosként';
$string['configclamdonothing'] = 'Az állományokat kezelje vírusmentesként';
$string['configclamfailureonupload'] = 'Ha Az állományokat kezelje vírusmentesként opciót választotta, az állományok a célkönyvtárba kerülnek át. A Feltöltés elutasítása, próbálkozzon újból választásakor a felhasználó Próbálkozzon újból üzenetet kap. Ha Az állományokat kezelje vírusosként opciót választotta és a clam valami miatt nem fut le (általában érvénytelen útvonal megadása miatt), akkor MINDEN feltöltött állomány a megadott karanténba kerül vagy törlődik.';
$string['configclamtryagain'] = 'Feltöltés elutasítása, próbálkozzon újból';
$string['errorcantopensocket'] = 'Hiba Unix doméncsatornára csatlakozás közben {$a}';
$string['errorclamavnoresponse'] = 'A ClamAV nem válaszol; ellenőrizze a démon futásának állapotát.';
$string['errornounixsocketssupported'] = 'A Unix doméncsatornán való továbbítást a rendszer nem támogatja. Használja a parancssort.';
$string['invalidpathtoclam'] = 'A Moodle feltöltéskor vírusirtóval ellenőrzi az állományt, de a vírusirtó megadott {$a} útvonala érvénytelen.';
$string['pathtoclam'] = 'Parancssor';
$string['pathtoclamdesc'] = 'Ha a futtatás "parancssor"-ra van állítva, itt adja meg a ClamAV útvonalát. Linux esetén ez a /usr/bin/clamscan vagy /usr/bin/clamdscan.
a';
$string['pathtounixsocket'] = 'Unix doméncsatorna';
$string['pathtounixsocketdesc'] = 'Ha a futtatás "Unix doméncsatorna"-ra van állítva, itt adja meg a ClamAV Unix doméncsatorna útvonalát. Debian Linux esetén ez a  /var/run/clamav/clamd.ctl. Ellenőrizze, hogy a clamav démonnak van-e olvasási jogosultsága a feltöltött állományokhoz. A legegyszerűbb, ha \'clamav\' felhasználót ad hozzá websezrvercsoportjához (\'www-data\' Debian Linux esetén).';
$string['pluginname'] = 'ClamAV vírusölő';
$string['privacy:metadata'] = 'A ClamAV Antivirus segédprogram semmilyen személyes adatot nem tárol.';
$string['quarantinedir'] = 'Karanténkönyvtár';
$string['runningmethod'] = 'Futtatási mód';
$string['runningmethodcommandline'] = 'Parancssor';
$string['runningmethoddesc'] = 'A ClamAV futtatási módja. Alapesetben parancssorról, de Unix-rendszerek esetén jobb teljesítmény érhető el rendszercsatornák használatával.';
$string['runningmethodtcpsocket'] = 'TCP-csatlakozó';
$string['runningmethodunixsocket'] = 'Unix doméncsatorna';
$string['tcpsockethost'] = 'TCP-csatlakozó állomásneve';
$string['tcpsockethostdesc'] = 'ClamAV-szerver tartományneve';
$string['tcpsocketport'] = 'TCP-csatlakozó portja';
$string['tcpsocketportdesc'] = 'A ClamAV-hez csatlakozásra használandó port';
$string['tries'] = 'Víruskeresési próbálkozások';
$string['tries_desc'] = 'A ClamAv által végzendő próbálkozások száma víruskeresési hiba esetén';
$string['tries_notice'] = 'A clamav a víruskereséssel  {$a->tries} alkalommal próbálkozott. {$a->notice}';
$string['unknownerror'] = 'Ismeretlen hiba történt a vírusirtóval.';
