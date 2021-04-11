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
 * Strings for component 'enrol_lti', language 'hu', version '3.10'.
 *
 * @package     enrol_lti
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowframeembedding'] = 'Megjegyzés: ajánlatos a portálon a keretbeágyazást bekapcsolni, így az eszközök keretben, ne új ablakban jelenjenek meg.';
$string['authltimustbeenabled'] = 'Megjegyzés: a segédprogramhoz be kell kapcsolni az LTI hitelesítő segédprogramot is.';
$string['cartridgeurl'] = 'Kazettás URL';
$string['couldnotestablishproxy'] = 'A fogyasztóval nem létesíthető proxy.';
$string['enrolenddate'] = 'Befejezési időpont';
$string['enrolenddate_help'] = 'Bekapcsolása esetén a felhasználók csak eddig érhetik el.';
$string['enrolenddateerror'] = 'A beiratkozás befejezési időpontja nem lehet a kezdési időpontnál korábbi.';
$string['enrolisdisabled'] = 'A \'Közzététel LTI-eszközként\' segédprogram ki van kapcsolva.';
$string['enrolmentfinished'] = 'A beiratkozás véget ért.';
$string['enrolmentnotstarted'] = 'A beiratkozás még nem kezdődött el.';
$string['enrolperiod'] = 'A beiratkozás időtartama';
$string['enrolperiod_help'] = 'A beiratkozási idő tartama onnantól, amikor a felhasználók a távoli rendszerből beiratkoznak. Kikapcsolása esetén a beiratkozás időtartama korlátlan.';
$string['enrolstartdate'] = 'Kezdési időpont';
$string['enrolstartdate_help'] = 'Bekapcsolása esetén a felhasználók csak ekkortól érhetik el.';
$string['failedrequest'] = 'Kérés sikertelen. Indoka: {$a->reason}';
$string['frameembeddingnotenabled'] = 'Az eszköz eléréséhez kövesse az alábbi hivatkozást.';
$string['gradesync'] = 'Osztályzat szinkronizálása';
$string['gradesync_help'] = 'Az eszköztől az osztályzatok a távoli rendszerhez  (LTI-fogyasztóhoz) kerüljenek-e.';
$string['incorrecttoken'] = 'A jel hibás, ellenőrizze a webcímet és próbálja meg újra, vagy forduljon az eszköz rendszergazdájához.';
$string['invalidrequest'] = 'Érvénytelen kérés';
$string['invalidtoolconsumer'] = 'Érvénytelen eszközfogyasztó';
$string['launchdetails'] = 'Indítás részletei';
$string['launchdetails_help'] = 'Az eszköz beállításához konfigurációs webcím és titkos jelszó, vagy indítási webcím szükséges.';
$string['launchurl'] = 'Indító webcím';
$string['lti:config'] = 'Beállítás \'Közzététel LTI-eszközként\' példányaként';
$string['lti:unenrol'] = 'Felhasználók kiiratkoztatása a kurzusból.';
$string['maxenrolled'] = 'Maximális beiratkozott';
$string['maxenrolled_help'] = 'Megadja a távoli rendszerből eléréssel rendelkező felhasználók maximális számát. Ha a szám 0, a beiratkozottak száma korlátlan.';
$string['maxenrolledreached'] = 'Elérte az eszköz elérésére jogosult felhasználók maximális számát.';
$string['membersync'] = 'Felhasználó szinkronizálása';
$string['membersync_help'] = 'A távoli rendszerbe beiratkozott felhasználókat szinkronizálja-e ütemezett feladat ebbe a kurzusba, igény szerint fiókkal minden távoli felhasználónak és szükség szerint be- vagy kiiratkoztatva őket.

Nem választása esetén amint egy  távoli felhasználó hozzáfér az eszközhöz, fiók készül a számára és automatikusan be is iratkozik.';
$string['membersyncmode'] = 'Felhasználó-szinkronizálás módja';
$string['membersyncmode_help'] = 'Ez határozza meg, hogy a távoli felhasználók felvegyék és/vagy leadják-e ezt a kurzust.';
$string['membersyncmodeenrolandunenrol'] = 'Új tagok be- és hiányzó tagok kiiratkoztatása';
$string['membersyncmodeenrolnew'] = 'Új tagok beiratkoztatása';
$string['membersyncmodeunenrolmissing'] = 'Hiányzó tagok kiiratkoztatása';
$string['notoolsprovided'] = 'Nincs megadva eszköz';
$string['opentool'] = 'Eszköz megnyitása';
$string['pluginname'] = 'Közzététel LTI-eszközként';
$string['pluginname_desc'] = 'A Közzététel LTI-eszközként segédprogram az LTI hitelesítő segédprogrammal együtt engedélyezi távoli felhasználóknak a kiválasztott kurzusok és tevékenységek elérését. Itt a Moodle afféle LTI-szolgáltatóként működik.';
$string['privacy:metadata:enrol_lti_users'] = 'LTI-szolgáltatón keresztül beiratkozott felhasználók felsorolása';
$string['privacy:metadata:enrol_lti_users:lastaccess'] = 'A felhasználó utolsó kurzusba belépésének a dátuma';
$string['privacy:metadata:enrol_lti_users:lastgrade'] = 'A felhasználó utolsó rögzített osztályzata';
$string['privacy:metadata:enrol_lti_users:timecreated'] = 'A felhasználó beiratkozásának dátuma';
$string['privacy:metadata:enrol_lti_users:userid'] = 'A felhasználó azonosítója';
$string['registration'] = 'Közzétett eszköz regisztrálása';
$string['registrationurl'] = 'Regisztrációs URL';
$string['registrationurl_help'] = 'Foglalási URL használata esetén az eszköz beállítása automatikusan történik.';
$string['remotesystem'] = 'Távoli rendszer';
$string['requirecompletion'] = 'A kurzust vagy tevékenységet az osztályzatok szinkronizálása előtt be kell fejezni';
$string['returnurlnotset'] = 'Visszatérési URL nincs megadva.';
$string['roleinstructor'] = 'Oktató szerepe';
$string['roleinstructor_help'] = 'Ezt a szerepet kapja az eszközt illetően a távoli tanár.';
$string['rolelearner'] = 'Tanuló szerepe';
$string['rolelearner_help'] = 'Ezt a szerepet kapja az eszközt illetően a a távoli tanuló.';
$string['secret'] = 'Titok';
$string['secret_help'] = 'Ez a távoli rendszerrel (LTI-fogyasztóval) az eszköz elérése érdekében megosztott titok';
$string['sharedexternaltools'] = 'LTI-eszközökként közzétett';
$string['successfulregistration'] = 'Sikeres regisztráció';
$string['tasksyncgrades'] = 'LTI-eszköz osztályzatszinkronizálásaként közzétesz';
$string['tasksyncmembers'] = 'LTI-eszköz felhasználószinkronizálásaként közzétesz';
$string['toolsprovided'] = 'Közzétett eszközök';
$string['toolsprovided_help'] = 'Egy eszközt az indítás részleteinek vagy egy foglalási webcímnek a megadásával oszthat meg egy másik portállal.';
$string['tooltobeprovided'] = 'Közzéteendő eszköz';
$string['toolurl'] = 'Eszköz webcíme';
$string['userdefaultvalues'] = 'Felhasználói alapértékek';
