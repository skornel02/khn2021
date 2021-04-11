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
 * Strings for component 'tool_mobile', language 'hu', version '3.10'.
 *
 * @package     tool_mobile
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adodbdebugwarning'] = 'Az ADOdb hibakeresés bekapcsolva. A hibakeresést a külső adatbázis hitelesítésében vagy beiratkozási segédprogramjában ki kell kapcsolni.';
$string['androidappid'] = 'Az Android alkalmazás egyedi azonosítója';
$string['androidappid_desc'] = 'A beállítást megtarthatja, kivéve, ha Android alkalmazása egyedi';
$string['apppolicy'] = 'Az alkalmazás szabályzatának webcíme';
$string['apppolicy_help'] = 'Az alkalmazás szabályzatának webcímét a Névjegy oldalon fogják látni a felhasználók. Ha üresen hagyja, a Moodle-portál szabályzatának a webcíme jelenik meg helyette.';
$string['apprequired'] = 'A funkció csak a Moodle mobil vagy asztali alkalmazásával érhető el.';
$string['autologinkeygenerationlockout'] = 'Automatikus bejelentkezési kulcs előállítása leállítva. Kérelmek között tartson 6 perc szünetet.';
$string['autologinnotallowedtoadmins'] = 'Automatikus bejelentkezés portálok rendszergazdáinak nem engedélyezett';
$string['cachedef_plugininfo'] = 'Ez tárolja a mobil kiegészítőkkel rendelkező segédprogramok listáját';
$string['cachedef_subscriptiondata'] = 'Ez tárolja a Moodle-alkalmazás előfizetési adatait.';
$string['clickheretolaunchtheapp'] = 'Kattintson ide, ha az alkalmazás nem nyílik meg automatikusan.';
$string['configmobilecssurl'] = 'Mobil alkalmazás felületének testreszabására való CSS-állomány';
$string['customlangstrings'] = 'Egyedi nyelvi szövegek';
$string['customlangstrings_desc'] = 'Az alkalmazásban megjelenő szavakat és kifejezéseket itt alakíthatja át. Minden szöveget írjon új sorba az alábbi formában: szövegazonosító, egyedi nyelvi szöveg és nyelvkód, az elválasztó karakter a függőleges vonás. Pl.:
<pre>
mm.user.student|Learner|en
mm.user.student|Tanuló|hu
</pre>
A szövegazonosítók felsorolását l. a dokumentációban.';
$string['custommenuitems'] = 'Egyedi menüpontok';
$string['custommenuitems_desc'] = 'Itt adhatja meg az alkalmazás főmenüjéhez hozzáadandó további menüpontokat. Az egyedi menüpontokat soronként adja meg függőleges vonalakkal elválasztva az alábbi formában: menüpont szövege, hivatkozás webcíme, hivatkozás megnyitásának módja, valamint nyelvkód (választható, ha a menüpontot csak az adott nyelvet használók láthatják).

A hivatkozás megnyitásának módjai: app (az alkalmazás által támogatott hivatkozás böngészőben való megnyitásához), inappbrowser (ugrópont böngészőben való megnyitásához az alkalmazásból való kilépés nélkül), browser (hivatkozás alkalmazáson kívüli, az alapértelmezett böngészőben való megnyitásához) és embedded (a hivatkozásnak az alkalmazás új oldalán iframe-ben való megjelenítéséhez).

Ha egyes tételekhez nincs meg a fordítás, más nyelvek kerülnek sorra, kivéve, ha a nyelvkódhoz  "_only" van hozzáfűzve.

Pl.:
<pre>
App súgója|https://webcím.xyz/help|inappbrowser
Osztályzataim|https://webcím.xyz/local/mygrades/index.php|embedded|en
Mis calificaciones|https://someurl.xyz/local/mygrades/index.php|embedded|es
Ez csak angolul lesz látható|https://webcím.xyz/english|browser|en_only
</pre>';
$string['darkmode'] = 'Sötét üzemmód';
$string['disabledfeatures'] = 'Kikapcsolt funkciók';
$string['disabledfeatures_desc'] = 'Itt válassza ki, portálján a Moodle alkalmazás mely funkciói ne legyenek elérhetők. Előfordulhat, hogy egyes funkciókat a portál beállításai már kikapcsoltak. A változások megtekintéséhez lépjen ki az alkalmazásból, majd lépjen vissza.';
$string['displayerrorswarning'] = 'A hibakeresési üzenetek (debugdisplay) be vannak kapcsolva. Kapcsolja ki!';
$string['downloadcourse'] = 'Kurzus letöltése';
$string['downloadcourses'] = 'Kurzusok letöltése';
$string['enablesmartappbanners'] = 'App Banners engedélyezése';
$string['enablesmartappbanners_desc'] = 'Megjeleníti a Moodle mobilalkalmazásának szalagcímét a portál Mobile böngészőben való felkeresésekor.';
$string['filetypeexclusionlist'] = 'Kivételt képező állománytípusok listája';
$string['filetypeexclusionlist_desc'] = 'Azon állománytípusok listája, amelyeknek az alkalmazásban való megnyitását nem kívánjuk a felhasználóknak lehetővé tenni. Ezek az állományok szerepelnek a kurzusban, de megnyitásuk során figyelmeztetés jelenik meg, mely szerint az állománytípus mobil eszközön nem használható. A felhasználó vagy érvényteleníti a megnyitást, vagy ennek ellenére megnyitja az állományt.';
$string['filetypeexclusionlistplaceholder'] = 'Kivételt képező mobil állománytípusok listája';
$string['forcedurlscheme'] = 'Ha egyedi alkalmazást akar böngészőablakban megnyitni,  webcímsémáját adja meg itt. Ha csak a hivatalos alkalmazást kívánja engedélyezni, állítsa be az alapértéket. Ha bármely alkalmazást engedélyezni kívánja, hagyja a mezőt üresen.';
$string['forcedurlscheme_key'] = 'Webcímséma';
$string['forcelogout'] = 'Kijelentkezés előírása';
$string['forcelogout_desc'] = 'Bekapcsolása esetén az alkalmazás \'Portál módosítása\' opciója helyébe a \'Kijelentkezés\' kerül.';
$string['getmoodleonyourmobile'] = 'Töltse le a Moodle-t a mobiljára';
$string['h5poffline'] = 'H5P-tartalom offline megtekintése';
$string['httpsrequired'] = 'HTTPS szükséges';
$string['insecurealgorithmwarning'] = 'Úgy tűnik, a HTTPS-tanúsítvány az aláíráshoz (SHA-1) nem biztonságos algoritmust használ. Frissítse a tanúsítványt.';
$string['invalidcertificatechainwarning'] = 'Úgy tűnik, a tanúsítványlánc érvénytelen.';
$string['invalidcertificateexpiredatewarning'] = 'Úgy tűnik, a portál HTTPS-tanúsítványa lejárt.';
$string['invalidcertificatestartdatewarning'] = 'Úgy tűnik, a portál HTTPS-tanúsítványa még nem érvényes (kezdetének időpontja még nem érkezett el).';
$string['invalidprivatetoken'] = 'Érvénytelen magánjel. A jel nem lehet üres és nem küldhető át  GET paraméteren keresztül.';
$string['invaliduserquotawarning'] = 'A felhasználói kvóta (userquota) száma érvénytelen. A Portál biztonsági beállításában adjon meg  egy érvényes (egész) számot.';
$string['iosappid'] = 'Az iOS alkalmazás egyedi azonosítója';
$string['iosappid_desc'] = 'A beállítás megmaradhat alapértelmezettként, kivéve, ha egyedi  iOS alkalmazással rendelkezik.';
$string['loginintheapp'] = 'Az alkalmazáson keresztül';
$string['logininthebrowser'] = 'Böngészőablakon keresztül (SSO-segédprogramokhoz)';
$string['loginintheembeddedbrowser'] = 'Beágyazott böngészőn keresztül (SSO-segédprogramokhoz)';
$string['logoutconfirmation'] = 'Biztosan kijelentkezik a mobil alkalmazásból az összes mobil eszközön? Ez esetben minden érintett eszközön újból be kell majd jelentkeznie.';
$string['mainmenu'] = 'Főmenü';
$string['managefiletypes'] = 'Állománytípusok kezelése';
$string['minimumversion'] = 'Korábbi verziót használók nem fognak tudni belépni a portálra, amíg nem frissítenek 3.8.0 vagy magasabb verzióra.';
$string['minimumversion_key'] = 'Előírt minimális verziószámú applikáció';
$string['mobileapp'] = 'Mobilalkalmazás';
$string['mobileappconnected'] = 'Moodle-alkalmazás csatlakoztatva';
$string['mobileappearance'] = 'Mobil megjelenés';
$string['mobileappenabled'] = 'A portálon a mobilalkalmazáshoz való hozzáférés bekapcsolva.<br /><a href="{$a}">Töltse le a mobilalkalmazást</a>.';
$string['mobileappsubscription'] = 'Moodle-alkalmazás előfizetése';
$string['mobileauthentication'] = 'Mobil hitelesítés';
$string['mobilecssurl'] = 'CSS';
$string['mobilefeatures'] = 'Mobil jellemzők';
$string['mobilenotificationsdisabledwarning'] = 'A mobil értesítések nincsenek bekapcsolva. Az Üzenetek beállításai alatt kapcsolja be.';
$string['mobilesettings'] = 'Mobil beállítások';
$string['moodleappsportalfeatureswarning'] = 'Felhívjuk figyelmét, hogy bizonyos szolgáltatások korlátozottak lehetnek a Moodle alkalmazás előfizetésétől függően. A részletekért keresse fel a <a href="{$a}" target="_blank"> Moodle Apps portált </a>.';
$string['notifications'] = 'Értesítések';
$string['notificationsactivedevices'] = 'Aktív eszközök';
$string['notificationscurrentactivedevices'] = 'Eszközök, amelyekre ebben a hónapban értesítés érkezik';
$string['notificationsignorednotifications'] = 'Az értesítéseket nem küldtük el';
$string['notificationslimitreached'] = 'A havi aktív felhasználói eszközök korlátját túllépte. Néhány felhasználó értesítéseit nem küldjük el. Frissítse alkalmazástervét a <a href="{$a}" target="_blank"> Moodle-alkalmazások portálján </a>.';
$string['notificationsmissingwarning'] = 'A Moodle-alkalmazás értesítési statisztikája nem elérhető. Ez valószínűleg azért van, mert a portálon a mobil értesítések még nem engedélyezettek. Engedélyezheti a Portáladminisztráció / Üzenetek / Mobil menüpont alatt.';
$string['notificationsnewdevices'] = 'Új eszközök';
$string['notificationsseemore'] = 'Megjegyzés: A Moodle-alkalmazás használatának statisztikáját nem valós időben számítjuk ki. A részletesebb statisztikákhoz, beleértve a korábbi hónapok adatait is, jelentkezzen be a <a href="{$a}" target="_blank"> Moodle-alkalmazások portálra </a>.';
$string['notificationssentnotifications'] = 'Értesítések elküldve';
$string['oauth2identityproviders'] = 'OAuth 2 azonosságszolgáltatók';
$string['offlineuse'] = 'Offline használat';
$string['openusingembeddedbrowser'] = 'Megnyitás a beépített böngészővel';
$string['pluginname'] = 'Moodle mobileszközök';
$string['pluginnotenabledorconfigured'] = 'A segédprogram nincs bekapcsolva vagy beállítva.';
$string['privacy:metadata:core_userkey'] = 'A jelenlegi felhasználó számára létrehozott automatikus belépési kulcsot igénylő felhasználó adatai.';
$string['privacy:metadata:preference:tool_mobile_autologin_request_last'] = 'Az utolsó automatikus belépési kulcs igénylésének dátuma. Minden igénylés között legalább 6 percnek kell eltelnie.';
$string['qrcodedisabled'] = 'A QR-kódon keresztüli hozzáférés letiltva';
$string['qrcodeformobileappaccess'] = 'QR-kód a mobil alkalmazáshoz való hozzáféréshez';
$string['qrcodeformobileapploginabout'] = 'Szkennelje be a QR-kódot a mobilalkalmazással, ezzel automatikusan bejelentkezik. A QR-kód {$a} perc múlva lejár.';
$string['qrcodeformobileappurlabout'] = 'Szkennelje be a QR-kódot a mobilalkalmazással és töltse be a portál webcímét.';
$string['qrcodetype'] = 'QR-kódos hozzáférés';
$string['qrcodetype_desc'] = 'QR-kód adható meg a mobilalkalmazás felhasználói számára a szkenneléshez. Ez használható webhely címének kitöltéséhez a felhasználó automatikus, név és jelszó megadása nélküli beléptetése esetén.';
$string['qrcodetypelogin'] = 'QR-kód automatikus bejelentkezéssel';
$string['qrcodetypeurl'] = 'QR-kód webcímmel';
$string['qrsiteadminsnotallowed'] = 'Biztonsági okokból a QR-kóddal történő bejelentkezés nem engedélyezett a portál rendszergazdái számára, vagy ha már másik felhasználóként van bejelentkezve.';
$string['readingthisemailgettheapp'] = 'Erről olvas az e-mailben?  <a href="{$a}">Töltse le a mobil alkalmazást az értesítések mobil eszközön való fogadásához</a>.';
$string['remoteaddons'] = 'Távoli kiegészítők';
$string['responsivemainmenuitems'] = 'Rugalmas menüelemek';
$string['scanqrcode'] = 'QR-kód beolvasása';
$string['selfsignedoruntrustedcertificatewarning'] = 'Úgy tűnik, a HTTPS-tanúsítvány önaláírással vagy nem megbízható aláírással van ellátva. A mobil alkalmazás csak megbízható portálokon használható.';
$string['setuplink'] = 'Alkalmazás letöltési oldala';
$string['setuplink_desc'] = 'Weboldal címe a mobilalkalmazás App Store-ból és Google Play-ből való letöltéséhez. A letöltési hivatkozás a láblécen és a felhasználó profiljában jelenik meg. Kihagyásához hagyja üresen.';
$string['smartappbanners'] = 'App Banners';
$string['subscription'] = 'Előfizetés';
$string['subscriptioncreated'] = 'Kezdési dátum';
$string['subscriptionerrorrequest'] = 'Váratlan hiba történt a Moodle-alkalmazás előfizetési adatainak a lekérésekor.';
$string['subscriptionexpiration'] = 'Lejárati dátum';
$string['subscriptionfeaturenotapplied'] = 'Ez a funkció az Ön portálján be van állítva, de nem szerepel a Moodle alkalmazástervében. Így a beállításnak nincs hatása.';
$string['subscriptionfeatures'] = 'Előfizetési szolgáltatások';
$string['subscriptionlimitsurpassed'] = 'Az előfizetési korlátot túllépte';
$string['subscriptionregister'] = 'A különböző alkalmazástervekkel kapcsolatos részletekhez, valamint a Moodle-alkalmazás használati statisztikáinak az eléréséhez keresse fel a <a href="{$a}" target="_blank"> Moodle-alkalmazások portálját </a>.';
$string['subscriptionsseemore'] = 'Megjegyzés: A megjelenített adatok valós időben nem frissítődnek. A frissítések megtekintéséhez lépjen ki, majd lépjen be újra.. Alkalmazásterve frissítésével kapcsolatos információkért jelentkezzen be a <a href="{$a}" target="_blank"> Moodle-alkalmazások portálra </a>.';
$string['typeoflogin'] = 'Belépés típusa';
$string['typeoflogin_desc'] = 'Ha a portál SSO-hitelesítést használ, válasszon böngészőablakból vagy beágyazott böngészővel. A beágyazott böngésző használata kényelmesebb, de nem minden SSO segédprogrammal működik.';
$string['viewqrcode'] = 'QR-kód megtekintése';
