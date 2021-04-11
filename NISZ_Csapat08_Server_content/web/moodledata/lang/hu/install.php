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
 * Strings for component 'install', language 'hu', version '3.10'.
 *
 * @package     install
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['admindirerror'] = 'A megadott rendszergazda-könyvtár hibás';
$string['admindirname'] = 'Rendszergazda-könyvtár';
$string['admindirsetting'] = 'Nagyon kevés kiszolgálónál használatos az /admin mint a vezérlőpanel vagy egyéb elérésére szolgáló külön URL. Ez ütközik a Moodle rendszergazda-oldalainak szokásos helyével. Ha telepítésében átnevezi a könyvtárat és az új nevet ide helyezi, a hiba megoldódik. Például: <br /> <br /><b>moodleadmin</b>.<br /> <br /> Ezzel a Moodle-ban rendbe tehetők a rendszergazda-hivatkozások.';
$string['admindirsettinghead'] = 'A rendszergazda-könyvtár beállítása...';
$string['admindirsettingsub'] = 'Nagyon kevés kiszolgálónál használatos az /admin mint a vezérlőpanel vagy egyéb elérésére szolgáló külön URL. Ez ütközik a Moodle rendszergazda-oldalainak szokásos helyével. Ha telepítésében átnevezi a könyvtárat és az új nevet ide helyezi, a hiba megoldódik. Például: <br /> <br /><b>moodleadmin</b>.<br /> <br /> Ezzel a Moodle-ban rendbe tehetők a rendszergazda-hivatkozások.';
$string['availablelangs'] = 'Elérhető nyelvek listája';
$string['caution'] = 'Vigyázat';
$string['chooselanguage'] = 'Válasszon nyelvet';
$string['chooselanguagehead'] = 'Nyelv kiválasztása';
$string['chooselanguagesub'] = 'Válasszon nyelvet a telepítéshez! Ez lesz a portál alapbeállítás szerinti nyelve, de később módosíthatja.';
$string['cliadminemail'] = 'Új rendszergazdához tartozó e-mail cím';
$string['cliadminpassword'] = 'Új rendszergazda jelszava';
$string['cliadminusername'] = 'Rendszergazda fiókjának felhasználóneve
';
$string['clialreadyconfigured'] = 'A config.php már létezik, a portál telepítéséhez használja az admin/cli/install_database.php állományt.';
$string['clialreadyinstalled'] = 'A config.php már létezik, a portál frissítéséhez használja az admin/cli/upgrade.php állományt.';
$string['cliinstallfinished'] = 'A telepítés sikeresen lezajlott.';
$string['cliinstallheader'] = 'A Moodle {$a} parancssori telepítő programja';
$string['climustagreelicense'] = 'Nem interaktív üzemmódban el kell fogadnia az engedélyt az --agree-license megadásával';
$string['cliskipdatabase'] = 'Adatbázis telepítése kihagyva';
$string['clitablesexist'] = 'Azt adatbázistáblák már léteznek, a CLI telepítése leáll.';
$string['compatibilitysettings'] = 'PHP-beállításainak ellenőrzése ...';
$string['compatibilitysettingshead'] = 'PHP-beállítások ellenőrzése ...';
$string['compatibilitysettingssub'] = 'Szerverének az összes tesztet sikeresen kell lefuttatnia ahhoz, hogy a Moodle megfelelően működjön.';
$string['configfilenotwritten'] = 'A telepítő kóddal nem lehetett a megadott beállításaival létrehozni a config.php állományt, feltehetőleg azért, mert a Moodle könyvtára nem írható. Az alábbi kódot kézzel átmásolhatja a Moodle gyökérkönyvtárába egy config.php nevű állományba.';
$string['configfilewritten'] = 'a config.php létrehozása sikerült';
$string['configurationcomplete'] = 'A beállítások elkészültek';
$string['configurationcompletehead'] = 'Beállítás kész';
$string['configurationcompletesub'] = 'A Moodle megpróbálta beállításait a telepítés gyökérkönyvtárában egy állományba elmenteni.';
$string['database'] = 'Adatbázis';
$string['databasehead'] = 'Az adatbázis beállításai';
$string['databasehost'] = 'Az adatbázis gazdagépe';
$string['databasename'] = 'Az adatbázis neve';
$string['databasepass'] = 'Az adatbázis jelszava';
$string['databaseport'] = 'Adatbázisport';
$string['databasesocket'] = 'Unix kommunikációs végpont';
$string['databasetypehead'] = 'Adatbázismotor kiválasztása';
$string['databasetypesub'] = 'A Moodle többféle adatbázisszervert támogat. Forduljon a rendszergazdához, ha nem tudja, melyiket kell használnia.';
$string['databaseuser'] = 'Az adatbázis felhasználója';
$string['dataroot'] = 'Adatkönyvtár';
$string['datarooterror'] = 'A megadott \'Adatkönyvtár\' nem létezik, vagy nem sikerült létrehozni. Módosítsa az útvonalat vagy hozza létre a könyvtárat.';
$string['datarootpermission'] = 'Engedély adatkönyvtárakhoz';
$string['datarootpublicerror'] = 'A megadott adatkönyvtár a netről közvetlenül elérhető, adjon meg egy másik könyvtárat.';
$string['dbconnectionerror'] = 'Nem sikerült a megadott adatbázishoz csatlakozni. Ellenőrizze adatbázisának beállításait.';
$string['dbcreationerror'] = 'Hiba az adatbázis létrehozása közben. A megadott beállításokkal nem lehetett létrehozni az adatbázis nevét.';
$string['dbhost'] = 'Gazdagép szervere';
$string['dbpass'] = 'Jelszó';
$string['dbport'] = 'Port';
$string['dbprefix'] = 'Táblázat előtagja';
$string['dbtype'] = 'Típus';
$string['directorysettings'] = '<p>Hagyja jóvá a Moodle telepítésének a helyét.</p><p><b>Webcím:</b> Adja meg a teljes webcímet, ahol a Moodle elérhető lesz. Ha portálja több webcímről is elérhető, adja meg azt, amelyet a tanulók leginkább használni fognak. Ne tegyen a végére perjelet.</p><p><b>Moodle-könyvtár:</b> Adja meg a telepítés teljes útvonalát. Ügyeljen a kis-/nagybetűk különbözésére.</p><p><b>Adatkönyvtár:</b> Egy olyan helyre lesz szüksége, ahova a Moodle a feltöltött állományokat menti. A könyvtárnak olvashatónak és a webszerver felhasználója által (ez általában "nobody" vagy "apache") ÍRHATÓNAK kell lennie, ugyanakkor ne legyen az internetről közvetlenül elérhető. Ha nem létezik, a telepítő megpróbálja létrehozni.</p>';
$string['directorysettingshead'] = 'Hagyja jóvá a Moodle telepítésének helyét.';
$string['directorysettingssub'] = '<b>Webcím:</b> Adja meg a teljes webcímet, ahol a Moodle elérhető lesz. Ha portálja több webcímről is elérhető, adja meg azt, amelyet a tanulók leginkább használni fognak. Ne tegyen a végére perjelet.</p><p><b>Moodle-könyvtár:</b> Adja meg a telepítés teljes útvonalát. Ügyeljen a kis-/nagybetűk különbözésére.</p><p><b>Adatkönyvtár:</b> Egy olyan helyre lesz szüksége, ahova a Moodle a feltöltött állományokat menti. A könyvtárnak olvashatónak és a webszerver felhasználója által (ez általában "nobody" vagy "apache") ÍRHATÓNAK kell lennie, ugyanakkor ne legyen az internetről közvetlenül elérhető. Ha nem létezik, a telepítő megpróbálja létrehozni.</p>';
$string['dirroot'] = 'Moodle-könyvtár';
$string['dirrooterror'] = 'A "Moodle-könyvtár" beállítása feltehetőleg hibás - nem található alatta a Moodle telepítése. Az alábbi értéket visszaállítottuk.';
$string['download'] = 'Letöltés';
$string['downloadlanguagebutton'] = 'Töltse le a {$a} nyelvi csomagot';
$string['downloadlanguagehead'] = 'Nyelvi csomag letöltése';
$string['downloadlanguagenotneeded'] = 'Folytathatja a telepítést az alapértelmezés szerinti &quot;{$a}&quot; nyelvi csomaggal.';
$string['downloadlanguagesub'] = 'Letölthet most egy nyelvi csomagot és azon a nyelven folytathatja a telepítést.<br /><br />Ha nem tudja letölteni, folytathatja a telepítést angol nyelven. (A telepítés végén lehetősége lesz további nyelvi csomagok letöltésére és telepítésére.)';
$string['doyouagree'] = 'Egyetért? (igen/nem):';
$string['environmenthead'] = 'Környezetének ellenőrzése ...';
$string['environmentsub'] = 'Ellenőrizzük, hogy rendszerének különféle összetevői megfelelnek-e a rendszerkövetelményeknek';
$string['environmentsub2'] = 'Minden Moodle-változat valamilyen minimális verziójú PHP és szükséges számú PHP-bővítmény használatát írja elő. A telepítések és frissítések előtt teljes környezet-ellenőrzésre kerül sor. Ha nem tudja, hogyan kell egy új verziót telepíteni és a PHP-bővítményeket bekapcsolni, forduljon a rendszergazdához.';
$string['errorsinenvironment'] = 'A környezet ellenőrzése nem sikerült!';
$string['fail'] = 'Hiba';
$string['fileuploads'] = 'Állományok feltöltése';
$string['fileuploadserror'] = 'Be kell kapcsolni';
$string['fileuploadshelp'] = '<p>Szerverén az állományok feltöltése feltehetőleg ki van kapcsolva.</p> <p>A Moodle ettől még telepíthető, de nem fog tudni kurzusállományokat vagy új felhasználói profilokat feltölteni.</p> <p>Állományok feltöltésének bekapcsolásához Önnek (vagy rendszeradminisztrátorának) a rendszer fő php.ini nevű állományában a <b>file_uploads</b> beállítást \'1\'-re kell módosítania.</p>';
$string['inputdatadirectory'] = 'Adatkönyvtár:';
$string['inputwebadress'] = 'Webcím:';
$string['inputwebdirectory'] = 'Moodle-könyvtár:';
$string['installation'] = 'Telepítés';
$string['invaliddbprefix'] = 'Érvénytelen előtag. Az előtag csak kisbetűket és aláhúzást tartalmazhat.';
$string['langdownloaderror'] = 'A(z) "{$a}" nyelvet nem lehet letölteni. A telepítés angolul folytatódik.
';
$string['langdownloadok'] = 'A "{$a}" nyelv telepítése sikerült. A telepítés ezen a nyelven folytatódik.';
$string['memorylimit'] = 'Memóriakorlát';
$string['memorylimiterror'] = 'A PHP-memóriakorlát túl alacsonyra van állítva... ez a későbbiekben gondot okozhat.';
$string['memorylimithelp'] = '<p>Szerverén a PHP memóriakorlátja jelenleg {$a}. </p><p>Ez a Moodle számára a későbbiekben gondot okozhat, különösen akkor, ha sok modulja és/vagy sok felhasználója van bekapcsolva.</p><p> Ha lehet, állítsa be a PHP-t magasabb korláttal, pl. 40M-tal. Többféleképpen próbálkozhat:</p><ol><li> Ha lehet, fordítsa újra a PHP-t <i>--enable-memory-limit</i>-tel. Így a Moodle maga állíthatja be a memóriakorlátot.</li><li>Ha elérhető a php.ini állomány, módosítsa a <b>memory_limit</b> beállítását pl. 40M-ra. Ha nem éri el az állományt, kérje meg a rendszergazdát a módosítás elvégzésére.</li><li>Egyes PHP-szervereken létrehozhat egy .htaccess állományt a Moodle-könyvtárban az alábbi sorral: <blockquote><div>php_value memory_limit 40M.</div></blockquote>    <p> Vannak szerverek, ahol ez az összes PHP-oldal működését megakadályozza (az oldalak hibát jeleznek), ezért el kell távolítania a .htaccess állományt.</p></li></ol>';
$string['mysqliextensionisnotpresentinphp'] = 'A PHP nincs jól beállítva a MySQL-bővítményhez, így nem tud vele kommunikálni. Ellenőrizze a php.ini fájlt, vagy fordítsa újra a PHP-t.';
$string['nativeauroramysql'] = 'Aurora MySQL (native/auroramysql)';
$string['nativeauroramysqlhelp'] = '<p>Az itt beállítandó adatbázis tárolja a Moodle legtöbb beállítását és adatait.</p>
<p>Szükséges megadni az adatbázis nevét, a felhasználónevet és a jelszót; a táblázat előtagja nem kötelező.</p>
<p>Az adatbázis nevében csak alfanumerikus karakterek, dollárjel ($) és aláhúzás (_) szerepelhet.</p>
<p>Ha az adatbázis még nem létezik és a megadandó felhasználónak van ilyen jogosultsága, akkor a Moodle a megfelelő engedélyekkel és beállításokkal megpróbál létrehozni egy új adatbázist.</p>
<p>A meghajtó régebbi MyISAM-motorral nem kompatibilis.</p>';
$string['nativemariadb'] = 'MariaDB (natív/mariadb)';
$string['nativemariadbhelp'] = 'Az adatbázis az a hely, ahol a Moodle beállításainak és adatainak a többségét tárolni fogja. Itt kell beállítania.
Kitöltendő az adatbázis neve, a felhasználónév és a jelszó. A tábla előtagjának a megadása nem kötelező.
Az adatbázis nevében csak betűk és számok, a dollár ($) és az aláhúzás (_) szerepelhet.
Ha még nem létezik az adatbázis és a megadott felhasználó rendelkezik engedéllyel, a Moodle megpróbál létrehozni egy új adatbázist a megfelelő jogosultságokkal és beállításokkal.
A meghajtó a korábbi MyISAM-motorral nem kompatibilis.';
$string['nativemysqli'] = 'Tökéletesített MySQL (native/mysqli)';
$string['nativemysqlihelp'] = 'Az adatbázis az a hely, ahol a Moodle beállításainak és adatainak a többségét tárolni fogja. Itt kell beállítania.
Kitöltendő az adatbázis neve, a felhasználónév és a jelszó. A tábla előtagjának a megadása nem kötelező.
Az adatbázis nevében csak betűk és számok, a dollár ($) és az aláhúzás (_) szerepelhet.
Ha még nem létezik az adatbázis és a megadott felhasználó rendelkezik engedéllyel, a Moodle megpróbál létrehozni egy új adatbázist a megfelelő jogosultságokkal és beállításokkal.
A meghajtó a korábbi MyISAM-motorral nem kompatibilis.';
$string['nativeoci'] = 'Oracle (natív/oci)';
$string['nativeocihelp'] = 'Most be kell állítania azt az adatbázist, ahová a Moodle legtöbb adata kerül majd.
Az adatbázisnak a hozzáféréshez szükséges felhasználónévvel és jelszóval már léteznie kell. Táblaelőtag használata kötelező.
';
$string['nativepgsql'] = 'PostgreSQL (natív/pgsql)';
$string['nativepgsqlhelp'] = 'Most be kell állítania azt az adatbázist, ahol a Moodle beállításainak és adatainak a többségét tárolni fogja.
Az adatbázis neve, a felhasználónév és jelszó, valamint a tábla előtagja kötelező.
Az adatbázisnak már léteznie kell, a felhasználónak olvasási és írási jogosultsággal kell hozzá rendelkeznie.';
$string['nativesqlsrv'] = 'SQL*Server Microsoft (native/sqlsrv)';
$string['nativesqlsrvhelp'] = 'Most be kell állítania azt az adatbázist, ahová a Moodle legtöbb adata kerül majd.
Az adatbázisnak a hozzáféréshez szükséges felhasználónévvel és jelszóval már léteznie kell. Táblaelőtag használata kötelező.
';
$string['nativesqlsrvnodriver'] = 'A Microsoft SQL Server meghajtói nincsenek telepítve vagy megfelelően beállítva a PHP használatához.';
$string['ociextensionisnotpresentinphp'] = 'A PHP nincs megfelelően beállítva az OCI8 bővítményhez, így nem tud kommunikálni az Oracle-lal. Ellenőrizze a php.ini állományt, vagy fordítsa le újra a PHP-t.';
$string['pass'] = 'Sikerült';
$string['paths'] = 'Útvonalak';
$string['pathserrcreatedataroot'] = 'A telepítő nem tudja létrehozni az adatkönyvtárat ({$a->dataroot}).';
$string['pathshead'] = 'Útvonalak megerősítése';
$string['pathsrodataroot'] = 'Az adatok gyökérkönyvtára nem írható.';
$string['pathsroparentdataroot'] = 'A felettes könyvtár ({$a->parent}) nem írható. A telepítő nem tudja létrehozni az adatkönyvtárat ({$a->dataroot}).';
$string['pathssubadmindir'] = 'Egy pár webes gazdagép esetén az /admin speciális URL pl. a vezérlőpanel eléréséhez. Ez ütközik a Moodle admin oldalainak standard helyével. Javítás: a telepítésben nevezze át a rendszergazda könyvtárát, az új nevet pedig írja be ide. Például: <em>moodleadmin</em>. Ezzel helyrehozhatók a Moodle rendszergazdai hivatkozásai.';
$string['pathssubdataroot'] = 'Szüksége van egy helyre, ahol a Moodle mentheti a feltöltött állományokat. Ez a könyvtár a webszerver felhasználója (általában \'nobody\' vagy \'apache\') számára legyen mind olvasható, MIND ÍRHATÓ. Ha nem létezik, a telepítő megpróbálja létrehozni.';
$string['pathssubdirroot'] = 'Teljes útvonal a Moodle telepítéséhez. ';
$string['pathssubwwwroot'] = 'A Moodle elérésére használandó teljes webcím. A Moodle egyszerre több címről nem érhető el. Ha portálja több címet használ, a jelen cím kivételével az összeshez állandó
átirányítást kell beállítania. Ha portálja mind intranetről, mind az internetről elérhető, a nyilvános címet itt adja meg, a DNS-t pedig úgy állítsa be, hogy az intranetről a nyilvános cím is elérhető legyen. Ha a cím hibás, módosítsa böngészőjében a webcímet, hogy a telepítés egy másik értékkel induljon újra.';
$string['pathsunsecuredataroot'] = 'Az adatok gyökérkönyvtára nem biztonságos.';
$string['pathswrongadmindir'] = 'Nem létezik az admin könyvtár.';
$string['pgsqlextensionisnotpresentinphp'] = 'A PHP nincs megfelelően beállítva a PGSQL-bővítményhez, így nem tud kommunikálni a PostgreSQL-lel.  Ellenőrizze a php.ini állományt, vagy fordítsa le újra a PHP-t.';
$string['phpextension'] = '{$a} PHP-bővítmény';
$string['phpversion'] = 'PHP-verzió';
$string['phpversionhelp'] = 'A Moodle használatához legalább a PHP 5.6.5 vagy 7.1 verziója szükséges
 (a 7.0.x bizonyos korlátokkal rendelkezik).</p>
<p> Az Ön által használt
verzió {$a}. </p>
<p>Frissítse a PHP-verziót, vagy térjen át újabb PHP-verziót
működtető gazdagépre!</p>';
$string['releasenoteslink'] = 'A Moodle ezen verziójának adataival kapcsolatosan olvassa el a(z) {$a} címen a Változatra vonatkozó megjegyzéseket';
$string['safemode'] = 'Biztonságos mód';
$string['safemodeerror'] = 'A Moodle bekapcsolt biztonságos mód esetén gondokba ütközhet';
$string['safemodehelp'] = 'A Moodle bekapcsolt biztonságos mód esetén egy sor problémába ütközhet, mindenekelőtt feltehetőleg nem tud majd új állományokat létrehozni.

A biztonságos módot általában túlzottan pánikoló webes rendszergazdák kapcsolják be, így valószínűleg egy másik gazdagépet kell keresnie a Moodle számára.

Ha kívánja, folytathatja a telepítést, de számítson a későbbiekben néhány hibára.';
$string['sessionautostart'] = 'Automatikus folyamatkezdés';
$string['sessionautostarterror'] = 'Ezt ki kell kapcsolni';
$string['sessionautostarthelp'] = 'A Moodle-nak folyamattámogatásra van szüksége, nélküle nem működik. A folyamatok a php.ini állományban kapcsolhatók be, lásd a session.auto_start paramétert.';
$string['sqliteextensionisnotpresentinphp'] = 'A PHP nincs megfelelően beállítva az SQLite-bővítményhez.  Ellenőrizze a php.ini állományt vagy fordítsa le újra a PHP-t.';
$string['upgradingqtypeplugin'] = 'Kérdés/típus segédprogramjának frissítése';
$string['welcomep10'] = '{$a->installername} ({$a->installerversion})';
$string['welcomep20'] = 'Azért látja ezt az oldalt, mert sikeresen telepítette és futtatja a(z) {$a->packname} {$a->packversion} csomagot számítógépén. Gratulálunk!';
$string['welcomep30'] = 'A(z) {$a->installername} tartalmazza azokat az alkalmazásokat, amelyekkel a Moodle számára kialakítható a működési környezet, azaz:';
$string['welcomep40'] = 'A csomag tartalmazza a Moodle {$a->moodlerelease} ({$a->moodleversion})-t is.';
$string['welcomep50'] = 'A csomagban lévő alkalmazások használatára a vonatkozó engedélyek érvényesek. A teljes {$a->installername} csomag <a href="https://www.opensource.org/docs/definition_plain.html">nyílt forráskódú</a>, közreadása pedig a <a href="https://www.gnu.org/copyleft/gpl.html">GPL</a>-licenc alapján történik.';
$string['welcomep60'] = 'A következő oldalak segítségével számítógépén egyszerűen telepítheti és állíthatja be a <strong>Moodle</strong>-t. Elfogadhatja az alapbeállításokat, de igényeinek megfelelően módosíthatja is őket.';
$string['welcomep70'] = 'Kattintson az alábbi "Következő" gombra és folytassa a Moodle telepítését.';
$string['wwwroot'] = 'Webcím';
$string['wwwrooterror'] = 'A webcím nem érvényes - a Moodle mostani telepítése nincs a megadott címen. Az alábbi értéket visszaállítottuk.';
