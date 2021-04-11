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
 * Strings for component 'portfolio_picasa', language 'hu', version '3.10'.
 *
 * @package     portfolio_picasa
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clientid'] = 'Ügyfél-azonosító';
$string['noauthtoken'] = 'Nem jött hitelesítő jel a Google-tól. Ellenőrizze, hogy a Moodle hozzáfér-e az Ön Google-fiókjához.';
$string['nooauthcredentials'] = 'OAuth-adatok szükségesek';
$string['nooauthcredentials_help'] = 'A Picasa portfólió segédprogramjának használatához be kell állítania az OAuth hitelesítő adatait a portfólió beállításai alatt.';
$string['oauthinfo'] = '<p> A segédprogram használatához portálját regisztrálnia kell a Google-on a <a href="{$a->docsurl}">Google OAuth 2,0 beállítása</a> dokumentációban leírtak szerint. </p><p> A regisztráció során meg kell adnia a következő webcímet mint "Engedélyezett átirányítási URI-t": </p><p> {$a->callbackurl} </p> Ha regisztrált, kap egy ügyfél-azonosítót és titkos kódot, amellyel az összes Google Drive és Picasa segédprogramot beállíthatja. </p>';
$string['pluginname'] = 'Picasa';
$string['privacy:metadata'] = 'Ez a segédprogram kapcsolódó Picasa-fiókhoz továbbít adatokat külsőleg, helyben nem tárol adatokat.';
$string['privacy:metadata:data'] = 'A portfólió alrendszertől érkező személyes adatok.';
$string['secret'] = 'Titkos';
$string['sendfailed'] = 'A(z) {$a} állomány átvitele a Picasa alá nem sikerült.';
