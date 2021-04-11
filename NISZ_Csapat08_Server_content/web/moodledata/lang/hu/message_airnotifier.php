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
 * Strings for component 'message_airnotifier', language 'hu', version '3.10'.
 *
 * @package     message_airnotifier
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['airnotifier:managedevice'] = 'Eszközök kezelése';
$string['airnotifieraccesskey'] = 'Airnotifier elérési kulcsa';
$string['airnotifierappname'] = 'Airnotifier alkalmazás neve';
$string['airnotifiermobileappname'] = 'Mobil alkalmazás neve';
$string['airnotifierport'] = 'Airnotifier portja';
$string['airnotifierurl'] = 'Airnotifier webcíme';
$string['configairnotifieraccesskey'] = 'Az Airnotifier szerverhez való csatlakozáshoz szükséges hozzáférési kulcs. A hozzáférési kulcsot az alábbi „Hozzáférési kulcs kérése” hivatkozásra kattintva kaphatja meg (csak regisztrált portálok esetén), vagy fiókot hozhat létre a <a href="https://apps.moodle.com">Moodle Apps portálon</ a >.';
$string['configairnotifierappname'] = 'Airnotifier esetén az alkalmazás nevének azonosítója';
$string['configairnotifiermobileappname'] = 'A mobil alkalmazás egyedi azonosítója (általában pl. com.moodle.moodlemobile).';
$string['configairnotifierport'] = 'Airnotifier szerverre csatlakozás során használandó port';
$string['configairnotifierurl'] = 'Szerver csatlakozási webcíme értesítések szerverről való küldéséhez';
$string['deletecheckdevicename'] = 'Törölje eszközét: {$a->name}';
$string['deletedevice'] = 'Törölje az eszközt. Egy alkalmazás ismét regisztrálhatja az alkalmazást. Ha az eszköz ismét feltűnik, kapcsolja ki.';
$string['devicetoken'] = 'Eszköz jele';
$string['enableprocessor'] = 'Mobil értesítések bekapcsolása';
$string['errorretrievingkey'] = 'Hiba történt a hozzáférési kulcs lekérése közben. A szolgáltatás használatához portálját regisztrálni kell. Ha portálját már regisztrálták, próbálja meg frissíteni a regisztrációt. Alternatív megoldásként hozzáférési kulcsot is szerezhet, ha fiókot hoz létre a <a href="https://apps.moodle.com">Moodle Apps portálon</a>.';
$string['keyretrievedsuccessfully'] = 'A hozzáférési kulcs lekérése sikerült. A Moodle alkalmazáshasználati statisztikáinak eléréséhez hozzon létre egy fiókot a <a href="https://apps.moodle.com">Moodle Apps portálon</a>.';
$string['moodleappsportallimitswarning'] = 'Felhívjuk figyelmét, hogy az értesítések fogadására engedélyezett felhasználói eszközök száma a Moodle alkalmazás előfizetésétől függ. A részletekért keresse fel a <a href="{$a}" target="_blank">Moodle Apps portált</a>.';
$string['nodevices'] = 'Nincs regisztrált eszköz. Ha telepíti a Moodle mobil alkalmazását és hozzáadja a portálhoz, akkor az eszközök automatikusan megjelennek.';
$string['nopermissiontomanagedevices'] = 'Eszközök kezeléséhez nincs meg a jogosultsága.';
$string['notconfigured'] = 'Az  Airnotifier-szervert nem konfigurálták, így nincs lehetőség ilyen üzenetek küldésére.';
$string['pluginname'] = 'Mobil';
$string['privacy:appiddescription'] = 'Ez azonosító a használt alkalmazáshoz.';
$string['privacy:enableddescription'] = 'Az eszköz be van-e kapcsolva az airnotifier használatára.';
$string['privacy:metadata:date'] = 'Az üzenet küldésének dátuma.';
$string['privacy:metadata:enabled'] = 'Az airnotifier eszköz be van-e kapcsolva.';
$string['privacy:metadata:externalpurpose'] = 'Az információ külső portálra kerül a felhasználó mobil eszközére kézbesítés céljából.';
$string['privacy:metadata:fullmessage'] = 'A teljes üzenet.';
$string['privacy:metadata:notification'] = 'Az üzenet értesítés-e.';
$string['privacy:metadata:smallmessage'] = 'Az üzenet egy része.';
$string['privacy:metadata:subject'] = 'Az üzenet tárgysora.';
$string['privacy:metadata:tableexplanation'] = 'Az airnotifier eszköz adatai itt tárolódnak.';
$string['privacy:metadata:userdeviceid'] = 'A felhasználó mobil eszközéhez kapcsolódó azonosító';
$string['privacy:metadata:userfromfullname'] = 'Az üzenetet küldő felhasználó teljes neve.';
$string['privacy:metadata:userfromid'] = 'Az üzenet szerzőjének felhasználói azonosítója.';
$string['privacy:metadata:userid'] = 'Az üzenetet küldő felhasználó azonosítója.';
$string['privacy:metadata:username'] = 'A felhasználó felhasználóneve.';
$string['privacy:metadata:usersubsystem'] = 'A segédprogram a felhasználói alrendszerhez kapcsolódik.';
$string['privacy:subcontext'] = 'Airnotifier-üzenet';
$string['requestaccesskey'] = 'Elérési kulcs kérése';
$string['showhide'] = 'Eszköz ki-/bekapocsolása';
$string['sitemustberegistered'] = 'A nyilvános Airnotifier-példány használatához regisztrálja portálját. Alternatív megoldásként hozzáférési kulcsot is kérhet, ha fiókot hoz létre a <a href="https://apps.moodle.com">Moodle Apps portálon</a>.';
$string['unknowndevice'] = 'Ismeretlen eszköz';
