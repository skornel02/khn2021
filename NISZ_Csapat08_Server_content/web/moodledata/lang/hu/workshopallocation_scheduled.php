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
 * Strings for component 'workshopallocation_scheduled', language 'hu', version '3.10'.
 *
 * @package     workshopallocation_scheduled
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['crontask'] = 'Háttérfeldolgozás az ütemezett hozzárendeléshez';
$string['currentstatus'] = 'Jelen állapot';
$string['currentstatusexecution'] = 'Állapot';
$string['currentstatusexecution1'] = 'Végrehajtás ideje: {$a->datetime}';
$string['currentstatusexecution2'] = 'Ismételten végrehajtandó ekkor: {$a->datetime}';
$string['currentstatusexecution3'] = 'Végrehajtandó ekkor: {$a->datetime}';
$string['currentstatusexecution4'] = 'Végrehajtásra vár';
$string['currentstatusnext'] = 'Következő végrehajtás';
$string['currentstatusnext_help'] = 'Egyes esetekben a hozzárendelés akkor is automatikusan újból megtörténik, ha a végrehajtás már lezajlott. Ez megeshet pl. a leadási határidő meghosszabbítása esetén.';
$string['currentstatusreset'] = 'Nullázás';
$string['currentstatusreset_help'] = 'Ha az űrlapot a bejelölt négyzettel menti el, azzal a jelen állapotot visszaállítja. A korábbi végrehajtásra vonatkozó adatok törlődnek, így a hozzárendelés megismételhetővé válik (ha fent be van kapcsolva).';
$string['currentstatusresetinfo'] = 'A végrehajtás eredményének nullázásához jelölje be a négyzetet és mentse el az űrlapot.';
$string['currentstatusresult'] = 'Utolsó végrehajtási eredmény';
$string['enablescheduled'] = 'Ütemezett hozzárendelés bekapcsolása';
$string['enablescheduledinfo'] = 'A leadási szakasz végén automatikusan hozzárendeli a leadott munkákat.';
$string['pluginname'] = 'Ütemezett hozzárendelés';
$string['privacy:metadata'] = 'A Scheduled allocation segédprogram nem tárol személyes adatokat. A ki kit értékel aktuális személyes adatait maga a Műhelymodul tárolja, ez képezi az értékelési adatok exportálásának az alapját.';
$string['randomallocationsettings'] = 'Hozzárendelési beállítások';
$string['randomallocationsettings_help'] = 'Itt adhatók meg a véletlenszerű hozzárendelés paraméterei. Ezeket a véletlenszerű hozzárendelés segédprogramja a leadások tényleges hozzárendeléséhez használja fel.';
$string['resultdisabled'] = 'Ütemezett hozzárendelés kikapcsolva';
$string['resultenabled'] = 'Ütemezett hozzárendelés bekapcsolva';
$string['resultexecuted'] = 'Sikerült';
$string['resultfailed'] = 'A leadott munkák automatikus hozzárendelése nem sikerült.';
$string['resultfailedconfig'] = 'Hibásan beállított ütemezett hozzárendelés';
$string['resultfaileddeadline'] = 'A műhelymunkához nincs megadva leadási határidő.';
$string['resultfailedphase'] = 'A műhelymunka nincs leadási szakaszban.';
$string['resultvoid'] = 'Nincsenek hozzárendelve leadott munkák';
$string['resultvoiddeadline'] = 'Még nem telt le a leadási határidő';
$string['resultvoidexecuted'] = 'A hozzárendelés már megtörtént.';
$string['scheduledallocationsettings'] = 'Ütemezett hozzárendelés beállításai';
$string['scheduledallocationsettings_help'] = 'Bekapcsolása esetén a hozzárendelési módszer a leadás végén automatikusan kiosztja értékelésre a leadott munkákat. A leadás végét a műhelymunkák &quot;Leadási határidő&quot; alatt lehet beállítanio.

A hozárendelés az űrlapon megadott paraméterekkel, véletlenszerűen történik.

A kiosztás *nem* kerül sorrfa, ha a műhelymunkát kézzel a leadási határidő előtt értékelési szakaszba állítja át. Ez esetben a kiosztást Önnek kell elvégezni. A tervezett kiosztási módszer különösen akkor hasznos, ha együtt használja az automata szakaszátkapcsolófunkciót.';
$string['setup'] = 'Ütemezett hozzárendelés beállítása';
