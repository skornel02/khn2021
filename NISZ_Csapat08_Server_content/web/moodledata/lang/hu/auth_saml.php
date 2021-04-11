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
 * Strings for component 'auth_saml', language 'hu', version '3.10'.
 *
 * @package     auth_saml
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_saml_course_mapping_dsn'] = 'Kurzushoz tartozó dsn';
$string['auth_saml_course_mapping_sql'] = 'Kurzushoz tartozó sql';
$string['auth_saml_course_not_found'] = 'A kurzushoz tartozó saml {$a->course} hiányzik {$a->user} saml-felhasználó esetén';
$string['auth_saml_courses'] = 'SAML-kurzusok összekapcsolása';
$string['auth_saml_courses_description'] = 'Kurzusadatokat tartalmazó SAML-attribútum (alapesetben schacUserStatus)';
$string['auth_saml_db_reset_button'] = 'Gyári értékek visszaállítása';
$string['auth_saml_db_reset_error'] = 'HIba a saml-segédprogram értékeinek visszaállítása közben';
$string['auth_saml_disable_debugdisplay'] = '* Hibaszűrés kikapcsolása a bejelentkezési/beiratkozási hibák elrejtése érdekében';
$string['auth_saml_dosinglelogout'] = 'Egyszeri kijelentkezés';
$string['auth_saml_dosinglelogout_description'] = 'Egyszeri kijelentkezéshez jelölje be. Ezzel kilép a Moodle-ból és a kapcsolódó szolgáltatók rendszereiből.';
$string['auth_saml_duplicated_lms_data'] = 'Az alábbi lms-adat ismétlődik';
$string['auth_saml_duplicated_saml_data'] = 'Az alábbi saml-adat ismétlődik';
$string['auth_saml_error_attribute_course_mapping'] = 'Hiba a kurzustáblázat összekapcsolásának attribútumneveiben (indexében). Ellenőrizze az externalcoursemappingsql szintaxisát.';
$string['auth_saml_error_attribute_role_mapping'] = 'Hiba a szereptáblázat összekapcsolásának attribútumneveiben (indexében). Ellenőrizze az externalrolemappingsql szintaxisát.';
$string['auth_saml_error_authentication_process'] = 'HIba {$a} hitelesítési eljárása közben';
$string['auth_saml_error_complete_user_data'] = 'Hiba {$a} felhasználói adatainak kitöltése közben';
$string['auth_saml_error_complete_user_login'] = 'Hiba {$a} felhasználói bejelentkezése közben';
$string['auth_saml_error_creating_course_mapping'] = 'HIba a course_mapping Moodle-adatbázisban való létrehozása közben';
$string['auth_saml_error_creating_role_mapping'] = 'HIba a role_mapping Moodle-adatbázisban való létrehozása közben';
$string['auth_saml_error_executing'] = 'Végrehajtási hiba';
$string['auth_saml_error_executing_course_mapping_query'] = 'Végrehajtási hiba a kurzus megfeleltetésére vonatkozó lekérdezés során';
$string['auth_saml_error_executing_role_mapping_query'] = 'HIba a szerepösszekapcsoló lekérdezés közben';
$string['auth_saml_error_role_not_found'] = 'Beiratkozási hiba. A(z) {$a} szerep a Moodle-ban nem létezik.';
$string['auth_saml_errorbadhook'] = 'HIbás kapcsoló a SAML-segédprogramhoz: {$a}';
$string['auth_saml_errorbadlib'] = 'Hibás SimpleSAMLPHP lib {$a} könyvtár.';
$string['auth_saml_errorsamlexternal'] = 'A kurzus és a szerep összekapcsolása külsőleg történik, ezért a DSN és az SQL lekérdezésének összes paraméterét meg kell adnia.';
$string['auth_saml_errorsp_source'] = 'HIbás a SimpleSAMLPHP sp forrása {$a}.';
$string['auth_saml_form_error'] = 'Az űrlapon hiba van. Javításhoz l. alább.';
$string['auth_saml_ignoreinactivecourses'] = 'Passzív kurzusok kihagyása';
$string['auth_saml_ignoreinactivecourses_description'] = 'Ha nincs bejelölve, a segédprogram a passzív kurzusokat kiiktatja';
$string['auth_saml_initialize_roles'] = 'Szerep inicializálása';
$string['auth_saml_logfile'] = 'Naplózási fájl útvonala';
$string['auth_saml_logfile_description'] = 'Adjon meg egy fájlnevet, ha nem a syslogban akarja naplózni a saml hibáit. (Ha nem teljes útvonalat ad meg, a Moodle a fájlt a moodledata mappába menti)';
$string['auth_saml_logo_info'] = 'SAML-bejelentkezés leírása';
$string['auth_saml_logo_info_description'] = 'A SAML bejelentkező gombja alatt megjelenő leírás';
$string['auth_saml_logo_path'] = 'SAML-kép';
$string['auth_saml_logo_path_description'] = 'A SAML bejelentkező gombjához tartozó kép útvonala';
$string['auth_saml_mapping_dsn_description'] = 'Adatforrás neve a kurzust/szerepet összekapcsoló adatbázishoz (a dsn-hez SQLite esetén teljes útvonalat kell megadni)-';
$string['auth_saml_mapping_dsn_examples'] = 'mysql://moodleuser:moodlepass@localhost/saml_course_mapping sqlite:/<útvonal>/mapping.sqlite3 oci8://user:pwd@host/sid postgresql7://user:pwd@host/sid';
$string['auth_saml_mapping_external_warning'] = 'Megjegyzés: ha az adatbázis összekapcsolása azonos típusú a Moodle-lal, a csatlakozás nem jön létre. Ilyenkor célszerű a belső kurzusösszekapcsolási módot használni, előtte pedig minden adatot kézzel kell exportálni.';
$string['auth_samldescription'] = 'SSO-hitelesítés SimpleSAML segítségével';
