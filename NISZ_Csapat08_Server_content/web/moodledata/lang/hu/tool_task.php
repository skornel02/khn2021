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
 * Strings for component 'tool_task', language 'hu', version '3.10'.
 *
 * @package     tool_task
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adhoc'] = 'Alkalmi';
$string['adhocempty'] = 'Az eseti feladatsor üres';
$string['adhocqueueold'] = 'A legrégebbi feladat {$a->age} idővel ezelőtt jött létre, ami több mint {$a->max}';
$string['adhocqueuesize'] = 'Az eseti feladatsor {$a} feladatot tartalmaz';
$string['adhoctaskid'] = 'Alkalmi feladat azonosítója: {$a}';
$string['adhoctasks'] = 'Alkalmi feladatok';
$string['asap'] = 'Mielőbb';
$string['backtoscheduledtasks'] = 'Vissza az ütemezett feladatokhoz';
$string['blocking'] = 'Zárolás';
$string['cannotfindthepathtothecli'] = 'Nincs meg a PHP CLI útvonala. Állítsa be a "PHP CLI útvonalát" a "Portáladminisztráció / Szerver / Rendszerútvonalak" alatt.';
$string['checkadhocqueue'] = 'Eseti feladatsor';
$string['checkcronrunning'] = 'A cron fut';
$string['checkmaxfaildelay'] = 'Hibás maximális feladat miatti késlekedés';
$string['classname'] = 'Osztály neve';
$string['clearfaildelay_confirm'] = 'Biztosan törli \'{$a}\' feladat esetén a késedelmet? Ez esetben a feladat a szokásos ütemezéssel zajlik tovább.';
$string['component'] = 'Összetevő';
$string['corecomponent'] = 'Alap';
$string['crondisabled'] = 'A cron ki van kapcsolva, új feladatokra nem kerül sor. A rendszer újbóli bekapcsolásig nem fog helyesen működni.';
$string['cronok'] = 'A cron gyakran fut le';
$string['default'] = 'Alapeset';
$string['defaultx'] = 'Alapeset: {$a}';
$string['disabled'] = 'Kikapcsolva';
$string['disabled_help'] = 'A kikapcsolt ütemezett feladatokat a cron nem hajtja végre, a CLI-vel azonban kézzel végrehajthatók.';
$string['edittaskschedule'] = 'Szerkesztési feladat ütemezése: {$a}';
$string['enablerunnow'] = 'Ütemezett feladatokhoz  ‘Végrehajtás most’ engedélyezése';
$string['enablerunnow_desc'] = 'Rendszergazdák számára egy ütemezett feladat azonnali végrehajtását engedélyezi, így nem kell kivárni az ütemezés időpontját. A rendszerútvonalakon a  \'Path to PHP CLI\' (pathtophp) paramétert be kell állítani. A feladatra a webszerveren kerül sor, ezért egyes portálok teljesítménybeli problémák elkerülésére kikapcsolhatják ezt a funkciót.';
$string['faildelay'] = 'Késedelem';
$string['fromcomponent'] = 'Ettől az összetevőtől: {$a}';
$string['hostname'] = 'Gazdagép neve';
$string['lastruntime'] = 'Utolsó futtatás';
$string['lastupdated'] = 'Utolsó frissítés:  {$a}.';
$string['nextruntime'] = 'Következő futtatás';
$string['pid'] = 'PID';
$string['plugindisabled'] = 'Segédprogram kikapcsolva';
$string['pluginname'] = 'Ütemezett feladat beállítása';
$string['privacy:metadata'] = 'A Scheduled task configuration segédprogram nem tárol személyes adatokat.';
$string['resettasktodefaults'] = 'Feladatütemezés visszaállítása alaphelyzetre';
$string['resettasktodefaults_help'] = 'Elveti a helyi módosításokat és a feladat ütemezését visszaállítja az eredetinek megfelelően';
$string['runagain'] = 'Futtatás ismét';
$string['runningtasks'] = 'Jelenleg futó feladat';
$string['runnow'] = 'Végrehajtás most';
$string['runnow_confirm'] = 'Biztosan most kerüljön sor  a(z) ‘{$a}’ végrehajtására?  A feladatra a webszerveren kerül sor, ezért némi időt vehet igénybe.';
$string['runpattern'] = 'Minta futtatása';
$string['scheduled'] = 'Ütemezett';
$string['scheduledtaskchangesdisabled'] = 'A Moodle beállítása megakadályozta az ütemezett feladatlista módosítását.';
$string['scheduledtasks'] = 'Ütemezett feladatok';
$string['started'] = 'Elkezdett';
$string['taskdisabled'] = 'Feladat kikapcsolva';
$string['taskfailures'] = '{$a} feladat sikertelen';
$string['tasklogs'] = 'Feladatnaplók';
$string['tasknofailures'] = 'Nincs sikertelen feladat';
$string['taskscheduleday'] = 'Nap';
$string['taskscheduleday_help'] = 'A havi feladatütemezés napja. A mező formátuma azonos a unix cron-éval. Pl.:

* <strong>*</strong> Naponta
* <strong>*/2</strong> Másnaponként
* <strong>1</strong> Minden hó elsején
* <strong>1,15</strong> Minden hó elsején és tizenötödikén';
$string['taskscheduledayofweek'] = 'A hét napja';
$string['taskscheduledayofweek_help'] = 'A heti feladatütemezés napja. A mező formátuma azonos a unix cron-éval. Pl.:

* <strong>*</strong> Naponta
* <strong>0</strong> Vasárnaponként
* <strong>6</strong> Szombatonként
* <strong>1,5</strong> Minden hétfőn és pénteken';
$string['taskschedulehour'] = 'Óra';
$string['taskschedulehour_help'] = 'A feladatütemezés órája. A mező formátuma azonos a unix cron-éval. Pl.:

* <strong>*</strong>Óránként
* <strong>*/2</strong> 2 óránként
* <strong>2-10</strong> 2 és 10 óra között óránként
* <strong>2,6. 9</strong> 2-kor, 6-kor és 9-kor';
$string['taskscheduleminute'] = 'Perc';
$string['taskscheduleminute_help'] = 'A feladatütemezés perce. A mező formátuma azonos a unix cron-éval. Pl.:

* <strong>*</strong>Percenként
* <strong>*/5</strong> 5 percenként
* <strong>2-10</strong> óra 2. és 10. perce között percenként (beleértve az adott perceket)
* <strong>2,6. 9</strong> óra 2., 6. és 9. percekor';
$string['taskschedulemonth'] = 'Hónap';
$string['taskschedulemonth_help'] = 'A feladatütemezés hónapja. A mező formátuma azonos a unix cron-éval. Pl.:

* <strong>*</strong> Havonta
* <strong>*/2</strong> Kéthavonta
* <strong>1</strong> Minden januárban
* <strong>1,5</strong> Minden januárban és májusban';
$string['viewlogs'] = '{$a} naplóinak megtekintése';
