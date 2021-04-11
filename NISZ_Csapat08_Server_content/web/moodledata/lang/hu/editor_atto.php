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
 * Strings for component 'editor_atto', language 'hu', version '3.10'.
 *
 * @package     editor_atto
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['autosavefailed'] = 'Nem sikerült a szerverhez kapcsolódni. Ha most adja le az oldalt, módosításai elveszhetnek.';
$string['autosavefrequency'] = 'Automatikus mentés gyakorisága';
$string['autosavefrequency_desc'] = 'Az automatikus mentésre ilyen időközönként kerül sor. Ezen beállítás szerint történik a szöveg mentése, így az automatikusan helyreállítható, ha ugyanaz a felhasználó ugyanahhoz az űrlaphoz visszatér.';
$string['autosaves'] = 'Szerkesztő automatikus mentésre vonatkozó adatai';
$string['autosavesucceeded'] = 'Piszkozat mentve.';
$string['editor_command_keycode'] = 'Cmd + {$a}';
$string['editor_control_keycode'] = 'Ctrl + {$a}';
$string['errorcannotparseline'] = 'A  \'{$a}\' sor formája nem megfelelő';
$string['errorgroupisusedtwice'] = 'A(z)  \'{$a}\' csoport kétszer van megadva; a csoportok neve csakis egyedi lehet';
$string['errornopluginsorgroupsfound'] = 'Ninc s segédprogram vagy csoport; vegyen fel néhány csoportot és segédprogramot.';
$string['errorpluginisusedtwice'] = 'A(z) \'{$a}\' segédprogram kétszer van megadva; a segédprogramok neve csakis egyedi lehet';
$string['errorpluginnotfound'] = 'A(z) \'{$a}\' segédprogram nem használható - úgy tűnik, nem telepítette.';
$string['errortextrecovery'] = 'Sajnos a piszkozatot nem lehet helyreállítani.';
$string['infostatus'] = 'Információ';
$string['plugin_title_shortcut'] = '{$a->title} [{$a->shortcut}]';
$string['pluginname'] = 'Atto HTML-szerkesztő';
$string['privacy:metadata:database:atto_autosave'] = 'A szerkesztő automatikusan mentett vázlatai.';
$string['privacy:metadata:database:atto_autosave:drafttext'] = 'A mentett szöveg.';
$string['privacy:metadata:database:atto_autosave:timemodified'] = 'A tartalom módosításának időpontja.';
$string['privacy:metadata:database:atto_autosave:userid'] = 'Azon felhasználó azonosítója, akinek az adatairól mentés készült.';
$string['recover'] = 'Visszanyerés';
$string['settings'] = 'Az Alto eszközsorának beállításai';
$string['subplugintype_atto'] = 'Az Alto segédprogramja';
$string['subplugintype_atto_plural'] = 'Az Alto segédprogramjai';
$string['taskautosavecleanup'] = 'Lejárt automatikusan mentett tervezetek törlése az adatbázisból.';
$string['textrecovered'] = 'A szöveg piszkozatának automatikus helyreállítása megtörtént.';
$string['toolbarconfig'] = 'Eszközsor beállítása';
$string['toolbarconfig_desc'] = 'A segédprogramok felsorolását és sorrendjét itt állíthatja be: (soronként) egy csoport, utána a hozzá tartozó segédprogramok rendezett listája. A csoportot a segédprogramoktól egyenlőségjel választja el, a segédprogramok közé vesszőt kell tenni. Egyedi csoportneveket kell használni, amelyek jelzik, mi a közös a gombokban. A gomb és a csoportnevek nem ismétlődhetnek, és csak betűkből és számokból állhatnak.';
$string['warningstatus'] = 'Figyelmeztetés';
