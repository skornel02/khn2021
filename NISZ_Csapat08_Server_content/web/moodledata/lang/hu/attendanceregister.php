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
 * Strings for component 'attendanceregister', language 'hu', version '3.10'.
 *
 * @package     attendanceregister
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['are_you_sure_to_delete_offline_session'] = 'Biztosan törli ezt az offline munkafolyamatot?';
$string['attendanceregister:addinstance'] = 'Új jelenléti ív hozzáadása';
$string['attendanceregister:addotherofflinesess'] = 'Hozzáadhat offline munkafolyamatot mások nyilvántartásához';
$string['attendanceregister:addownofflinesess'] = 'Hozzáadhat offline munkafolyamatot saját nyilvántartásához';
$string['attendanceregister:deleteotherofflinesess'] = 'Törölhet offline munkafolyamatot mások nyilvántartásából';
$string['attendanceregister:deleteownofflinesess'] = 'Törölhet offline munkafolyamatot saját nyilvántartásából';
$string['attendanceregister:recalcsessions'] = 'Újraszámíthat jelenléti ívhez kapcsolódó munkafolyamatot';
$string['attendanceregister:tracked'] = 'A jelenléti ív nyomon követi';
$string['attendanceregister:viewotherregisters'] = 'Megtekintheti mások jelenléti ívét';
$string['attendanceregister:viewownregister'] = 'Megtekintheti saját jelenléti ívét';
$string['back_to_normal'] = 'Vissza az alapváltozathoz';
$string['back_to_tracked_user_list'] = 'Vissza a figyelt felhasználók listájához';
$string['click_for_detail'] = 'Kattintson a részletekhez';
$string['comments'] = 'Megjegyzések';
$string['count'] = 'db';
$string['dayscertificable'] = 'nappal ezelőtt';
$string['dayscertificable_exceeded'] = 'Legfeljebb {$a} nappal ezelőtt lehet';
$string['dayscertificable_help'] = 'Korlátozza az offline munkafolyamatok korát..<br />A tanuló ennyi napnál régebbi offline munkafolyamatot nem rögzíthet.';
$string['duration'] = 'Időtartam';
$string['duration_hh_mm'] = '{$a->hours} óra, {$a->minutes} perc';
$string['duration_mm'] = '{$a->minutes} perc';
$string['enable_offline_sessions_certification'] = 'Offline munkafolyamatok bekapcsolása';
$string['end'] = 'Vége';
$string['force_recalc_all_session'] = 'Az összes online munkafolyamat újraszámolása';
$string['force_recalc_all_session_help'] = 'MInden figyelt felhasználó összes online munkafolyamatának törlése és újraszámolása.
Általában <b>nincs rá szükség</b>!<br /> Az új munkafolyamatok számolása a háttérben automatikusan zajlik (némi késleltetéssel).<br /> A művel <b>csak</b> az alábbi esetekben lehet hasznos: <ul> <li>Egy felhasználó egy figyelt kurzusban korábban más szerepben vett részt (pl. tanárról tanulóra váltásnál, ha a tanulót figyeli a rendzser, de a tanárt nem).</li> <li>A munkafolyamat számítását befolyásoló nyilvántartás beállításának módosítása után (azaz <i>Jelenlétet figyelő üzemmódban</i>, <i>Online munkafolyamat időtúllépése</i>)</li> </ul> Ha <b>új felhasználókat írat be. az újraszámítást nem kell végrehajtani</b>!<br /><br /> Az újraszámítás végrehajtható azonnal vagy a következő cron lefutásakor. Nagy kurzusok esetén az utóbbi hatékonyabb.';
$string['force_recalc_all_session_now'] = 'Munkafolyamatok újraszámítása most';
$string['force_recalc_user_session'] = 'A felhasználók online munkafolyamatainak újraszámítása';
$string['force_recalc_user_session_help'] = 'Ezen  felhasználó összes online munkafolyamatának törlése és újraszámítása.<br /> Általában <b>erre nincs szükség</b>!<br /> Az új munkafolyamatok számítása automatikusan a háttérben zajlik (némi késedelemmel).<br /> Erre <b>csak</b> az alábbi esetekben lehet szükség: <ul> <li>A felhasználó korábbi szerepének  megváltozása valamely figyelt kurzusban (azaz tanárról tanulóra váltás, amikor a tanulót figyeli a rendszer, a tanárt viszont nem).</li> <li>A jelenléti ívnek a munkafolyamatok számítását érintő módosítása  (vagyis <i>Jelenlétet figyelő üzemmód</i>, <i>Online munkafolyamat lejárata</i>)</li> </ul>';
$string['fullname'] = 'Név';
$string['grandtotal_time'] = 'Összes idő';
$string['insert_new_offline_session'] = 'Új offline munkafolyamat beszúrása';
$string['insert_new_offline_session_for_another_user'] = 'Új offline munkafolyamat beszúrása {$a->fullname} részére';
$string['last_calc_online_session_logout'] = 'Utolsóként bejegyzett online munkafolyamat vége (az aktuálisat kivéve)';
$string['last_session_logout'] = 'Utolsó munkafolyamat vége';
$string['last_site_access'] = 'Utolsó tevékenység a portálon';
$string['last_site_login'] = 'Utolsó bejelentkezés a portálra';
$string['login_must_be_before_logout'] = 'Kezdet időpontja a vége utánira esik!';
$string['logout_is_future'] = 'Nem lehet jövőbeni';
$string['mandatory_offline_sessions_comments'] = 'Kötelező megjegyzések';
$string['mandatoryofflinespecifycourse'] = 'Kötelező kurzusválasztás';
$string['mandatoryofflinespecifycourse_help'] = 'Az offline munkafolyamatban megadott kurzus kötelező lesz';
$string['maynotaddselfcertforother'] = 'Mások számára nem szúrhat be offline munkafolyamatot';
$string['modulename'] = 'Jelenléti ív';
$string['modulename_help'] = 'A jelenléti ív kiszámítja a felhasználók által online kurzusokban eltöltött időt.<br /> Választható a felhasználó offline tevékenységeinek a rögzítése is.<br /> Üzemmódtól függően a jelenléti ív figyelheti egyetlen kurzus tevékenységeit, azonos kategórián belül az összes kurzusét, illetve a jelenléti ív kurzusához "kapcsolódó" összes kurzusét.<br /> Az online munkafolyamatok számítása a Moodle által rögzített naplóbejegyzésekben zajlik.<br /> <b>Az új online munkafolyamatokat a cron némi késedelemmel, a felhasználó kijelentkezése után adja hozzá.</b>';
$string['modulenameplural'] = 'Jelenléti ívek';
$string['never'] = '(soha)';
$string['no_refcourse'] = '(nincs megadva kurzus)';
$string['no_session'] = 'Nincs munkafolyamat';
$string['no_session_for_this_user'] = '- A felhasználónak még nincs munkafolyamata -';
$string['no_tracked_user'] = '- A jelenléti ívben még nincs megadva felhasználó -';
$string['not_specified'] = '(nincs megadva)';
$string['offline'] = 'Offline';
$string['offline_refcourse_duration'] = 'Offline idő, kurzus';
$string['offline_session_comments'] = 'Megjegyzések';
$string['offline_session_comments_help'] = 'Offline munkafolyamat témájának leírása';
$string['offline_session_deleted'] = 'Offline munkafolyamat törölve';
$string['offline_session_end'] = 'Vége';
$string['offline_session_ref_course'] = 'Kurzushivatkozás';
$string['offline_session_ref_course_help'] = 'Válassza ki, melyik kurzushoz kapcsolódik az offline munka, vagy melyik kurzus kapcsolódik a munka témájához';
$string['offline_session_saved'] = 'Új offline munkafolyamat mentve';
$string['offline_session_start'] = 'Kezdet';
$string['offline_session_start_help'] = 'Válassza ki a beküldendő offline munkafolyamat kezdetének és végének dátumát és időpontját.<br />
Az offline munkafolyamat nem eshet egybe sem egy (offline vagy online) korábbival, sem a mostani online munkafolyamattal.';
$string['offline_sessions_certification'] = 'Offline munkafolyamatok';
$string['offline_sessions_certification_help'] = 'Offline munkafolyamatok beszúrását teszi lehetővé.<br /> Ez egyfajta az elvégzett munkáról szóló <i>önbizonyítvány</i>. <br /> Olyankor hasznos, amikor az "adminisztráció" előírja minden tanulói tevékenység rögzítését.<br /> Offline munkafolyamatot csak valós felhasználó adhat hozzá: <i>Bejelentkezés módja...</i> rendszergazda nem!';
$string['offline_sessions_total_duration'] = 'Teljes offline idő';
$string['offlinecomments'] = 'Felhasználó megjegyzései';
$string['offlinecomments_help'] = 'Szöveges megjegyzések bekapcsolása offline munkafolyamathoz';
$string['offlinespecifycourse'] = 'Kurzus megadása offline munkafolyamatokhoz';
$string['offlinespecifycourse_help'] = 'Offline munkafolyamathoz kapcsolódó kurzus kiválasztása<br />
Csak akkor van értelme, ha a jelenléti ív egynél több kurzust figyel (azaz a jelenléti üzemmód "Kategória" vagy "Összekapcsolt"';
$string['online'] = 'Online';
$string['online_offline'] = 'Online/Offline';
$string['online_session_updated'] = 'Online munkafolyamatok frissítve';
$string['online_session_updated_report'] = '{$a->fullname} online munkafolyamat frissítve: {$a->numnewsessions} új';
$string['online_sessions_total_duration'] = 'Online munkafolyamatok teljes ideje';
$string['onlyrealusercanaddofflinesessions'] = 'Offline munkafolyamatot csak létező felhasználó adhat hozzá';
$string['onlyrealusercandeleteofflinesessions'] = 'Offline munkafolyamatot csak létező felhasználó törölhet';
$string['overlaps_current_session'] = 'Egybeesik az online munkafolyamattal (a mostani bejelentkezés óta)';
$string['overlaps_old_sessions'] = 'Egybeesik egy másik online vagy offline munkafolyamattal';
$string['pluginadministration'] = 'Jelenléti ív kezelése';
$string['pluginname'] = 'Jelenléti ív';
$string['prev_site_login'] = 'Előző bejelentkezés a portálra';
$string['recalc_already_pending'] = '(A Cron következő végrehajtásakor kerül sorra)';
$string['recalc_complete'] = 'A munkafolyamat újraszámítása kész';
$string['recalc_scheduled'] = 'A munkafolyamat újraszámítása beütemezve, a  Cron következő végrehajtásakor kerül sorra';
$string['recalc_scheduled_on_next_cron'] = 'A munkafolyamat újraszámítása a  Cron következő végrehajtásakor kerül sorra';
$string['ref_course'] = 'Kurzushivatkozás';
$string['registername'] = 'Jelenléti ív címe';
$string['registertype'] = 'Jelenlét figyelése';
$string['registertype_help'] = 'A jelenlétet figyelő üzemmód meghatározza, hogy mely kurzusokat (mely felhasználói tevékenységeket) követ a jelenléti ív:
* _Csak ez a kurzus_: Csak azt a kurzust, amelyben a jelenléti ív modul helyet kap.
* _Azonos kategórián belül minden kurzus_: a kategórián belül az összes kurzust, amelyben a jelenléti ív modul helyet kap.
* _Minden összekapcsolt kurzus_: A jelen kurzust és az összes vele összekapcsolt kurzust.';
$string['schedule_reclalc_all_session'] = 'Munkafolyamat újraszámításának ütemezése';
$string['select_a_course'] = '- Kurzus kiválasztása -';
$string['select_a_course_if_any'] = '- Kurzus kiválasztása, ha van -';
$string['session_added_by_another_user'] = 'Hozzáadta: {$a}';
$string['sessions_grandtotal_duration'] = 'Teljes idő mindösszesen';
$string['sessiontimeout'] = 'Online munkafolyamat lejárata';
$string['sessiontimeout_help'] = 'A munkafolyamat időtúllépése az online munkafolyamat időtartamának becslésére használatos.<br /> Az online munkafolyamatok legalább a munkafolyamat időtúllépésének a <b>felét</b> veszik igénybe.<br /> Ha az időtúllépés túl hosszú, a jelenléti ív túl hosszú időtartamot becsülhet.<br /> Ha viszont túl rövid, a valós munkafolyamatok sok apró munkafolyamatra töredeznek.<br /> <h3>KIfejtve</h3> Az online munkafolyamatokról <b>becslés</b> készül a figyelt kurzusok felhasználójának naplóbejegyzései alapján (lásd: <i>Jelenlétet figyelő üzemmód</i>).<br/> Ha két egymást követő naplóbejegyzés között a munkafolyamat időtúllépésénél rövidebb idő van megadva, akkor a jelenléti ív a felhasználót mint folyamatosan online tevékenykedőt tekinti.<br /> Hosszabb esetén a felhasználót az utolsó naplóbejegyzéstől az online munkát a munkafolyamat időtúllépésének a <b>felével</b> abbahagyóként veszi figyelembe, aki a következő  naplóbejegyzéskor tér vissza (azaz egy új munkafolyamat veszi kezdetét)';
$string['show_printable'] = 'Nyomtatható változat megjelenítése';
$string['start'] = 'Kezdet';
$string['total_time_offline'] = 'Teljes offline idő';
$string['total_time_online'] = 'Teljes online idő';
$string['tracked_courses'] = 'Figyelt kurzusok';
$string['tracked_users'] = 'Figyelt felhasználók';
$string['type_category'] = 'A kategóriához tartozó összes kurzus';
$string['type_course'] = 'Csak ez a kurzus';
$string['type_meta'] = 'Minden kurzust Kurzusok metakapcsolója kapcsol össze';
$string['unknown'] = '(ismeretlen)';
$string['unreasoneable_session'] = 'Biztos? Ez {$a} óránál is hosszabb!';
$string['updating_online_sessions_of'] = '{$a} online munkafolyamatainak frissítése';
$string['user_sessions_summary'] = 'Felhasználó munkafolyamatainak összegzése';
