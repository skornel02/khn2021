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
 * Strings for component 'tool_httpsreplace', language 'hu', version '3.10'.
 *
 * @package     tool_httpsreplace
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['complete'] = 'Befejezve';
$string['count'] = 'Beágyazott tartalomelemek száma';
$string['disclaimer'] = 'Tisztában vagyok a művelet kockázataival';
$string['doclink'] = 'HTTPS-átalakító';
$string['doit'] = 'Átalakítás végrehajtása';
$string['domain'] = 'Problémás domén';
$string['domainexplain'] = 'Ha egy előfordulás HTTP-ből HTTPS-be kerül át, az összes  HTTP-tartalom működése leáll. Az eszköz lehetővé teszi a HTTP-tartalom automatikus HTTPS-be alakítását. Alább lefuttathat egy jelentést az esetlegesen nem működő tartalmakról. Ellenőrizze, hogy a HTTPS mindegyik esetén rendelkezésre áll-e, vagy kereshet alternatív tananyagokat.';
$string['domainexplainhelp'] = 'Ezek a domének előfordulnak az Ön tartalmában, de nem támogatják a HTTPS-tartalmat. HTTPS-re való áttérés után az ezen portálokon lévő tartalmat a Moodle nem fogja megjeleníteni modern biztonságos böngészővel rendelkező felhasználók számára. Előfordulhat, hogy a portálok ideiglenesen vagy folyamatosan elérhetetlenek, és egyik biztonsági beállítás mellett sem működnek. Csak az eredmények átnézése és a külső szerveren lévő tartalom szükségtelenségének eldöntése után lépjen tovább. A tartalom a  HTTPS-re való áttérés után egyébként sem fog működni.';
$string['httpwarning'] = 'Ez az előfordulás továbbra is HTTP-vel működik. Az eszközt futtathatja és a külső tartalmat átteheti HTTPS-be, de a belső tartalom HTTP-s marad. A kódot HTTPS-be kapcsolás után újból le kell futtatnia a belső tartalom átalakításához.';
$string['notimplemented'] = 'Ezt a funkciót adatbázis-kezelő programja még nem tartalmazza.';
$string['oktoprocede'] = 'A vizsgálat a tartalomban nem talált hibát. Áttérhet a tartalom HTTP-ből HTTPS-be frissítésére.';
$string['pageheader'] = 'Külső szerveren lévő tartalom webcímének frissítése HTTPS-re.';
$string['pluginname'] = 'HTTPS-átalakító';
$string['privacy:metadata'] = 'A HTTPS conversion tool segédprogram nem tárol személyes adatokat.';
$string['replacing'] = 'HTTP-tartalom cseréje HTTPS-re...';
$string['searching'] = '{$a} keresése';
$string['takeabackupwarning'] = 'Az eszköz futtatása után a módosításokat nem lehet visszaállítani, ezért előtte készítsen teljes biztonsági másolatot. Esetlegesen előfordulhat, hogy hibás tartalomcserére kerül sor, ami további bonyodalmakhoz vezethet.';
$string['toolintro'] = 'Ha portálját HTTPS-re készül átállítani, beépített tartalmának HTTPS-re konvertálására használhatja a <a href="{$a}">HTTPS-átalakítót</a>.';
