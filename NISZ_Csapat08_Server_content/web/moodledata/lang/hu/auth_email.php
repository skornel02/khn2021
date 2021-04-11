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
 * Strings for component 'auth_email', language 'hu', version '3.10'.
 *
 * @package     auth_email
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_emaildescription'] = '<p> E-mail alapú regisztrációval a felhasználó saját fiókot hozhat létre a bejelentkező oldalon megjelenő "Új fiók létrehozása" gombbal. A felhasználó ekkor kap egy e-mailt, amely egy biztonságos hivatkozást tartalmaz arra az oldalra, ahol megerősítheti fiókját. A későbbi bejelentkezéskor a rendszer csak a felhasználónevet és a jelszót veti egybe a Moodle adatbázisában tárolt értékekkel . </p>
<p> Megjegyzés: a segédprogram bekapcsolása mellett ki kell választania az e-mail alapú regisztrációt is a &quot;Hitelesítés kezelése&quot; oldalon megjelenő legördülő menüből.';
$string['auth_emailnoemail'] = 'Nem sikerült Önnek e-mailt küldeni!';
$string['auth_emailrecaptcha'] = 'Látható/hallható űrlapelemet ad hozzá a belépési oldalhoz önmagukat e-mailben regisztráló felhasználók számára. Ezzel megvédi portálját a levélszeméttől, így használata indokolt. A részleteket lásd: http://www.google.com/recaptcha';
$string['auth_emailrecaptcha_key'] = 'A reCAPTCHA-elem bekapcsolása';
$string['auth_emailsettings'] = 'Beállítások';
$string['pluginname'] = 'E-mail alapú önregisztráció';
$string['privacy:metadata'] = 'Az e-mail alapú önregisztrációt hitelesítő segédprogram semmilyen személyes adatot nem tárol.';
