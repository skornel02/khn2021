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
 * Strings for component 'tool_monitor', language 'hu', version '3.10'.
 *
 * @package     tool_monitor
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addrule'] = 'Új szabály hozzáadása';
$string['allevents'] = 'Minden esemény';
$string['allmodules'] = 'Minden előfordulás';
$string['area'] = 'Terület';
$string['areatomonitor'] = 'Figyelendő terület';
$string['cachedef_eventsubscriptions'] = 'Ez a lista az egyes kurzusok eseményeire való feliratkozásokat tárolja.';
$string['contactadmin'] = 'Bekapcsolásért forduljon a rendszergazdához.';
$string['core'] = 'Alap';
$string['currentsubscriptions'] = 'Jelenlegi alkalmazásai';
$string['defaultmessagetemplate'] = '{rulename} szabály<br />
Leírás: {description}<br />
Esemény: {eventname}';
$string['deleterule'] = 'Szabály törlése';
$string['deletesubscription'] = 'Alkalmazás törlése';
$string['description'] = 'Leírás:';
$string['disablefieldswarning'] = 'Egyes mezők nem szerkeszthetők, mert a szabályt már alkalmazzák.';
$string['duplicaterule'] = 'Szabály másolása';
$string['editrule'] = 'Szabály szerkesztése';
$string['enablehelp'] = 'Eseményfigyelés ki-/bekapcsolása';
$string['enablehelp_help'] = 'Szabályok létrehozásához és alkalmazásához be kell kapcsolnia az eseményfigyelést. Ez befolyásolhatja a portál teljesítményét!';
$string['errorincorrectevent'] = 'Válasszon az adott segédprogramhoz kapcsolódó eseményt.';
$string['event'] = 'Esemény';
$string['eventnotfound'] = 'Az esemény nem található.';
$string['eventrulecreated'] = 'Szabály létrehozva';
$string['eventruledeleted'] = 'Szabály törölve';
$string['eventruleupdated'] = 'Szabály frissítve';
$string['eventsubcreated'] = 'Elfogadás létrehozva';
$string['eventsubcriteriamet'] = 'Elfogadási feltételek teljesítve';
$string['eventsubdeleted'] = 'Elfogadás törölve';
$string['freqdesc'] = '{$a->mins} perc alatt: {$a->freq}';
$string['frequency'] = 'Értesítési küszöb';
$string['frequency_help'] = 'Adott idő alatt ennyi esemény szükséges értesítés elküldéséhez.';
$string['inminutes'] = 'percben';
$string['invalidmodule'] = 'Érvénytelen modul';
$string['manage'] = 'Kezelés';
$string['managerules'] = 'Eseményfigyelési szabályok';
$string['manageruleslink'] = 'A szabályokat a(z) {$a} oldalról kezelheti.';
$string['managesubscriptions'] = 'Eseményfigyelés';
$string['managesubscriptionslink'] = 'Szabályok elfogadásának oldala itt:  {$a}.';
$string['messageprovider:notification'] = 'Szabályalkalmazáshoz kapcsolódó értesítések';
$string['messagetemplate'] = 'Üzenet';
$string['messagetemplate_help'] = 'Ezt az üzenetet kapják a felhasználók, ha az értesítési küszöböt elérték. Az alábbiak közül bármelyiket vagy mindet használhatja.
<br /> {link} - Hivatkozás az esemény helyszínére.
<br /> {modulelink} - Hivatkozás a megfigyelt területre
<br /> {rulename} - A szabály neve
<br /> {description} - Leírás
<br /> {eventname} - Esemény';
$string['moduleinstance'] = 'Előfordulás';
$string['monitor:managerules'] = 'Eseményfigyelési szabályok kezelése';
$string['monitor:managetool'] = 'Eseményfigyelés ki-/bekapcsolása';
$string['monitor:subscribe'] = 'Eseményfigyelési szabályok alkalmazása';
$string['monitordisabled'] = 'Eseményfigyelés jelenleg kikapcsolva';
$string['monitorenabled'] = 'Eseményfigyelés jelenleg bekapcsolva';
$string['norules'] = 'Nincs eseményt figyelő szabály.';
$string['pluginname'] = 'Eseményfigyelő';
$string['privacy:createdrules'] = 'I. eseményfigyelő szabályok létrehozva';
$string['privacy:metadata:description'] = 'A szabály leírása';
$string['privacy:metadata:eventname'] = 'Az esemény teljesen elfogadott megnevezése';
$string['privacy:metadata:frequency'] = 'Értesítések gyakorisága';
$string['privacy:metadata:historysummary'] = 'Az elküldött üzenetértesítések előzményeit tárolja';
$string['privacy:metadata:inactivedate'] = 'Az a napokban megadott idő, amelynek a letelte után a tétlen előfizető teljességgel törlődik';
$string['privacy:metadata:lastnotificationsent'] = 'Az előfizetőnek utoljára küldött értesítés ideje.';
$string['privacy:metadata:messagesummary'] = 'Az értesítések az üzenetküldő rendszerbe érkeznek.';
$string['privacy:metadata:name'] = 'A szabály neve';
$string['privacy:metadata:plugin'] = 'A segédprogram frankenstyle neve';
$string['privacy:metadata:rulessummary'] = 'Ez figyelési szabályokat tárol.';
$string['privacy:metadata:subscriptionssummary'] = 'Különféle szabályokra való felhasználói előfizetéseket feliratkozásokat tárol';
$string['privacy:metadata:template'] = 'Üzenetsablon';
$string['privacy:metadata:timecreatedrule'] = 'Mikor jött létre a szabály';
$string['privacy:metadata:timecreatedsub'] = 'Mikor jött létre az előfizetés';
$string['privacy:metadata:timemodifiedrule'] = 'Mikor módosult utoljára a szabály';
$string['privacy:metadata:timesent'] = 'Mikor küldték el az üzenetet';
$string['privacy:metadata:timewindow'] = 'Időablak másodpercben';
$string['privacy:metadata:userid'] = 'A szabályt létrehozó felhasználó azonosítója.';
$string['privacy:metadata:useridhistory'] = 'Az értesítés címzettjének felhasználói azonosítója';
$string['privacy:metadata:useridsub'] = 'Az előfizető azonosítója.';
$string['privacy:subscriptions'] = 'Eseményfigyelő előfizetéseim';
$string['processevents'] = 'Események feldolgozása';
$string['ruleareyousure'] = 'Biztosan törli a(z)  "{$a}" szabályt?';
$string['ruleareyousureextra'] = 'A szabályhoz kapcsolódó {$a} szabályt alkalmazó is törlődik.';
$string['rulecopysuccess'] = 'A szabály másolása sikerült.';
$string['ruledeletesuccess'] = 'A szabály törlése sikerült.';
$string['rulehelp'] = 'A szabály részletei';
$string['rulehelp_help'] = 'A szabály akkor lép életbe, ha \'{$a->eventcomponent}\' \'{$a->eventname}\' eseményére {$a->minutes} perc alatt {$a->frequency} alkalommal sor kerül.';
$string['rulename'] = 'A szabály neve';
$string['rulenopermission'] = 'Nem iratkozhat fel eseményekre.';
$string['rulenopermissions'] = 'Nem rendelkezik "szabállyal kapcsolatos {$a}" jogosultsággal.';
$string['rulescansubscribe'] = 'Alkalmazható szabályok';
$string['selectacourse'] = 'Válasszon kurzust';
$string['selectcourse'] = 'A lehetséges modulok felsorolásához kurzusszinten látogasson el a jelentéshez.';
$string['subareyousure'] = 'Biztosan törli a(z) "{$a}" szabály adott alkalmazását?';
$string['subcreatesuccess'] = 'Az alkalmazás létrehozása sikerült.';
$string['subdeletesuccess'] = 'Az alkalmazás törlése sikerült.';
$string['subhelp'] = 'Az alkalmazás részletei';
$string['subhelp_help'] = 'Az alkalmazás akkor lép életbe, ha \'{$a->moduleinstance}\' \'{$a->eventname}\' eseményére {$a->minutes} perc alatt {$a->frequency} alkalommal sor kerül.';
$string['subscribeto'] = '"{$a}" szabály elfogadása';
$string['taskchecksubscriptions'] = 'Érvénytelen szabályjegyzések bekapcsolása/kikapcsolása';
$string['taskcleanevents'] = 'Törli az eseményfigyeléseket.';
$string['unsubscribe'] = 'Alkalmazás megszüntetése';
