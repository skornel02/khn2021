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
 * Strings for component 'quizaccess_seb', language 'hu', version '3.10'.
 *
 * @package     quizaccess_seb
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addtemplate'] = 'Új sablon hozzáadása';
$string['allowedbrowserkeysdistinct'] = 'A kulcsok mindegyikének eltérőnek kell lennie.';
$string['allowedbrowserkeyssyntax'] = 'A kulcsnak 64 karakterből álló hex karakterláncnak kell lennie.';
$string['cachedef_config'] = 'SEB konfigurációs gyorsítótár';
$string['cachedef_configkey'] = 'SEB konfigurációs kulcs gyorsítótára';
$string['cachedef_quizsettings'] = 'SEB tesztbeállítások gyorsítótára';
$string['cantdelete'] = 'A sablont nem lehet törölni, mivel egy vagy több tesztnél használják';
$string['cantedit'] = 'A sablont nem lehet szerkeszteni, mivel egy vagy több tesztnél használják';
$string['clientrequiresseb'] = 'Ez a teszt úgy lett konfigurálva, hogy a Biztonságos vizsgaböngészőt használja ügyfélkonfigurációval.';
$string['confirmtemplateremovalquestion'] = 'Biztosan törli ezt a sablont?';
$string['confirmtemplateremovaltitle'] = 'Megerősíti a sablon eltávolítását?';
$string['conflictingsettings'] = 'Nincs jogosultsága a Biztonságos vizsgaböngésző meglévő beállításainak a frissítésére';
$string['content'] = 'Sablon';
$string['description'] = 'Leírás';
$string['disabledsettings'] = 'Kikapcsolt beállítások.';
$string['disabledsettings_help'] = 'A Biztonságos vizsgaböngésző tesztbeállításait meglévő tesztpróbálkozás esetén nem lehet módosítani. Egy beállítás módosításához előbb minden próbálkozást törölni kell.';
$string['downloadsebconfig'] = 'SEB konfigurációs fájl letöltése';
$string['duplicatetemplate'] = 'Ilyen nevű sablon már létezik';
$string['edittemplate'] = 'Sablon szerkesztése';
$string['enabled'] = 'Bekapcsolva';
$string['event:accessprevented'] = 'A teszthez való hozzáférést megakadályozták';
$string['event:templatecreated'] = 'SEB-sablon létrehozva';
$string['event:templatedeleted'] = 'SEB-sablon törölve';
$string['event:templatedisabled'] = 'SEB-sablon kikapcsolva';
$string['event:templateenabled'] = 'SEB-sablon bekapcsolva';
$string['event:templateupdated'] = 'SEB-sablon frissítve';
$string['exitsebbutton'] = 'Kilépés a Biztonságos vizsgaböngészőből';
$string['filemanager_sebconfigfile'] = 'A Biztonságos vizsgaböngésző konfigurációs fájljának feltöltése';
$string['filemanager_sebconfigfile_help'] = 'Töltse fel saját Biztonságos vizsgaböngészőhöz készített konfigurációs fájlját ehhez a teszthez.';
$string['filenotpresent'] = 'A SEB konfigurációs fájljának feltöltése';
$string['fileparsefailed'] = 'A feltöltött fájlt nem lehet SEB konfigurációs fájlként elmenteni.';
$string['httplinkbutton'] = 'Konfiguráció letöltése';
$string['invalid_browser_key'] = 'Érvénytelen SEB-böngészős kulcs';
$string['invalid_config_key'] = 'Érvénytelen SEB konfigurációs kulcs';
$string['invalidkeys'] = 'A konfigurációs kulcsot vagy a böngésző vizsgakulcsait nem lehetett érvényesíteni. Győződjön meg arról, hogy a Biztonságos vizsgaböngészőt a helyes konfigurációs fájllal használja-e.';
$string['invalidtemplate'] = 'Érvénytelen SEB-konfigurációs sablon';
$string['manage_templates'] = 'Biztonságos vizsgaböngésző sablonjai';
$string['managetemplates'] = 'Sablonok kezelése';
$string['missingrequiredsettings'] = 'A konfigurációs beállításokból hiányzik néhány szükséges érték.';
$string['name'] = 'Név';
$string['newtemplate'] = 'Új sablon';
$string['noconfigfilefound'] = 'Nem található feltöltött SEB-konfigurációs fájl a cmid: {$a} azonosítójú teszthez';
$string['noconfigfound'] = 'Nem található SEB-konfiguráció a cmid: {$a} azonosítójú teszthez';
$string['not_seb'] = 'Nincs SEB-böngésző';
$string['notemplate'] = 'Nincs sablon';
$string['passwordnotset'] = 'A jelenlegi beállításokhoz a Biztonságos vizsgaböngészőt használó tesztekre van szükség a tesztjelszó beállításához.';
$string['pluginname'] = 'Biztonságos vizsgaböngésző hozzáférési szabályai';
$string['privacy:metadata:quizaccess_seb_quizsettings'] = 'A Biztonságos vizsgaböngésző beállításai egy teszthez. Ez magában foglalja azon utolsó felhasználó azonosítóját, aki létrehozta vagy módosította a beállításokat.';
$string['privacy:metadata:quizaccess_seb_quizsettings:quizid'] = 'A beállításokhoz kapcsolódó teszt azonosítója.';
$string['privacy:metadata:quizaccess_seb_quizsettings:timecreated'] = 'A beállítások létrehozásának unix-ideje.';
$string['privacy:metadata:quizaccess_seb_quizsettings:timemodified'] = 'A beállítások utolsó módosításának unix-ideje.';
$string['privacy:metadata:quizaccess_seb_quizsettings:usermodified'] = 'Azon felhasználó azonosítója, aki utoljára létrehozta vagy módosította a beállításokat.';
$string['privacy:metadata:quizaccess_seb_template'] = 'A Biztonságos vizsgaböngésző sablonjának beállításai. Ez magában foglalja azon felhasználó azonosítóját, aki utoljára létrehozta vagy módosította a sablont.';
$string['privacy:metadata:quizaccess_seb_template:timecreated'] = 'A sablon létrehozásának unix-ideje.';
$string['privacy:metadata:quizaccess_seb_template:timemodified'] = 'A sablon utolsó módosításának unix-ideje.';
$string['privacy:metadata:quizaccess_seb_template:usermodified'] = 'Azon felhasználó azonosítója, aki utoljára létrehozta vagy módosította a sablont.';
$string['quizsettings'] = 'Tesztbeállítások';
$string['restoredfrom'] = '{$a->name} (helyreállítva cmid {$a->cmid} segítségével)';
$string['seb'] = 'Biztonságos vizsgaböngésző';
$string['seb:bypassseb'] = 'A teszt Biztonságos vizsgaböngészőben való kötelező megtekintésének a kihagyása.';
$string['seb:manage_filemanager_sebconfigfile'] = 'A Biztonságos vizsgaböngésző tesztbeállításának módosítása: SEB konfigurációs fájl kiválasztása';
$string['seb:manage_seb_activateurlfiltering'] = 'A Biztonságos vizsgaböngésző tesztbeállításának módosítása: webcímszűrés bekapcsolása';
$string['seb:manage_seb_allowedbrowserexamkeys'] = 'A Biztonságos vizsgaböngésző tesztbeállításának módosítása: használható vizsgakulcsok módosítása';
$string['seb:manage_seb_allowreloadinexam'] = 'A Biztonságos vizsgaböngésző tesztbeállításának módosítása: újratöltés engedélyezése';
$string['seb:manage_seb_allowspellchecking'] = 'A Biztonságos vizsgaböngésző tesztbeállításának módosítása: helyesírás-ellenőrzés bekapcsolása';
$string['seb:manage_seb_allowuserquitseb'] = 'A Biztonságos vizsgaböngésző tesztbeállításának módosítása: kilépés engedélyezése';
$string['seb:manage_seb_enableaudiocontrol'] = 'A Biztonságos vizsgaböngésző tesztbeállításának módosítása: hangvezérlő bekapcsolása';
$string['seb:manage_seb_expressionsallowed'] = 'A Biztonságos vizsgaböngésző tesztbeállításának módosítása: egyszerű kifejezések engedélyezése';
$string['seb:manage_seb_expressionsblocked'] = 'A Biztonságos vizsgaböngésző tesztbeállításának módosítása: egyszerű kifejezések tiltása';
$string['seb:manage_seb_filterembeddedcontent'] = 'A Biztonságos vizsgaböngésző tesztbeállításának módosítása: beágyazott tartalom szűrése';
$string['seb:manage_seb_linkquitseb'] = 'A Biztonságos vizsgaböngésző tesztbeállításának módosítása: kilépési hivatkozás';
$string['seb:manage_seb_muteonstartup'] = 'A Biztonságos vizsgaböngésző tesztbeállításának módosítása: némítás indításkor';
$string['seb:manage_seb_quitpassword'] = 'A Biztonságos vizsgaböngésző tesztbeállításának módosítása: kilépési jelszó';
$string['seb:manage_seb_regexallowed'] = 'A Biztonságos vizsgaböngésző tesztbeállításának módosítása: reguláris kifejezések bekapcsolása';
$string['seb:manage_seb_regexblocked'] = 'A Biztonságos vizsgaböngésző tesztbeállításának módosítása: reguláris kifejezések tiltása';
$string['seb:manage_seb_requiresafeexambrowser'] = 'A Biztonságos vizsgaböngésző tesztbeállításának módosítása: Biztonságos vizsgaböngésző előírása';
$string['seb:manage_seb_showkeyboardlayout'] = 'A Biztonságos vizsgaböngésző tesztbeállításának módosítása: billentyűzet megjelenítése';
$string['seb:manage_seb_showreloadbutton'] = 'A Biztonságos vizsgaböngésző tesztbeállításának módosítása: újratöltés gombjának megjelenítése';
$string['seb:manage_seb_showsebdownloadlink'] = 'A Biztonságos vizsgaböngésző tesztbeállításának módosítása: letöltés gombjának megjelenítése';
$string['seb:manage_seb_showsebtaskbar'] = 'A Biztonságos vizsgaböngésző tesztbeállításának módosítása: tálca megjelenítése';
$string['seb:manage_seb_showtime'] = 'A Biztonságos vizsgaböngésző tesztbeállításának módosítása: idő megjelenítése';
$string['seb:manage_seb_showwificontrol'] = 'A Biztonságos vizsgaböngésző tesztbeállításának módosítása: wifi-vezérlő megjelenítése';
$string['seb:manage_seb_templateid'] = 'A Biztonságos vizsgaböngésző tesztbeállításának módosítása: SEB-sablon kiválasztása';
$string['seb:manage_seb_userconfirmquit'] = 'A Biztonságos vizsgaböngésző tesztbeállításának módosítása: megerősítés kilépéskor';
$string['seb:managetemplates'] = 'A Biztonságos vizsgaböngésző konfigurációs sablonjainak kezelése';
$string['seb_activateurlfiltering'] = 'Webcímszűrés bekapcsolása';
$string['seb_activateurlfiltering_help'] = 'Bekapcsolása esetén a webcímeket a weboldalak betöltésekor szűrjük. A szűrőkészletet alább kell meghatározni.';
$string['seb_allowedbrowserexamkeys'] = 'Használható vizsgaböngészős kulcsok';
$string['seb_allowedbrowserexamkeys_help'] = 'Ebben a mezőben megadhatja a Biztonságos vizsgaböngésző azon verzióinak használható vizsgaböngészős kulcsait, amelyekkel a teszt elérhető. Ha nem ad meg kulcsot, akkor nem kerül sor a vizsgaböngészős kulcsok ellenőrzésére.';
$string['seb_allowreloadinexam'] = 'Újratöltés engedélyezése a vizsga során';
$string['seb_allowreloadinexam_help'] = 'Bekapcsolása esetén az oldal újratöltése megengedett (újratöltés gombja a SEB-tálcán, a böngésző eszköztárán, az iOS oldalsó csúszka menüjében, az F5/cmd+R billentyűparancsoknál). Az offline gyorsítótár leállhat, ha a felhasználó internetkapcsolat nélkül próbál egy oldalt újratölteni.';
$string['seb_allowspellchecking'] = 'Helyesírás-ellenőrzés bekapcsolása';
$string['seb_allowspellchecking_help'] = 'Bekapcsolása esetén a helyesírás-ellenőrzés a SEB-böngészőben megengedett';
$string['seb_allowuserquitseb'] = 'SEB-ből való kilépés ngedélyezése';
$string['seb_allowuserquitseb_help'] = 'Bekapcsolása esetén a felhasználók kiléphetnek a SEB-ből a SEB-tálca "Kilépés" gombjával, vagy a Ctrl-Q gombok megnyomásával, illetve a fő böngészőablakot bezáró gombra kattintva.';
$string['seb_enableaudiocontrol'] = 'Hangvezérlők engedélyezése';
$string['seb_enableaudiocontrol_help'] = 'Bekapcsolása esetén a SEB-tálcán megjelenik a hangvezérlő ikon.';
$string['seb_expressionsallowed'] = 'Engedélyezett kifejezések';
$string['seb_expressionsallowed_help'] = 'Szövegmező, amely tartalmazza az engedélyezett webcímek engedélyezett szűrési kifejezéseit. A \'\\*\' helyettesítő karakter használata lehetséges. Példák kifejezésekre: \'example.com\' vagy \'example.com/stuff/\\*\'. Az "example.com" megfelel az "example.com", a "www.example.com" és a "www.mail.example.com" kifejezéseknek. Az \'example.com/stuff/\\*\' megfelel az összes \'example.com\' aldoménjére vonatkozó példának, amelyeknél az útvonal első szegmense a \'stuff\'.';
$string['seb_expressionsblocked'] = 'Nem engedélyezett kifejezések';
$string['seb_expressionsblocked_help'] = 'Szövegmező, amely tartalmazza a nem engedélyezett webcímek szűrési kifejezéseit. A \'\\*\' helyettesítő karakter használata lehetséges. Példák kifejezésekre: \'example.com\' vagy \'example.com/stuff/\\*\'. Az \'example.com\' megfelel az \'example.com\', a \'www.example.com\' és a \'www.mail.example.com\' kifejezéseknek. Az \'example.com/stuff/\\*\' megfelel az összes \'example.com\' aldoménjére vonatkozó példának, amelyeknél az útvonal első szegmense a \'stuff\'.';
$string['seb_filterembeddedcontent'] = 'Szűrje be a beágyazott tartalmat is';
$string['seb_filterembeddedcontent_help'] = 'Bekapcsolása esetén a szűrőkészlettel szűri az összes beágyazott tananyagot is.';
$string['seb_help'] = 'Teszt beállítása a Biztonságos vizsgaböngésző használatához.';
$string['seb_linkquitseb'] = 'A Kilépés a Biztonságos vizsgaböngészőből gomb megjelenítése ezzel a kilépési hivatkozással';
$string['seb_linkquitseb_help'] = 'Ebben a mezőben megadhatja a SEB-ből való kilépéshez szükséges hivatkozást. Ezt a vizsga benyújtását követően megjelenő oldalon feltűnő "Kilépés a Biztonságos vizsgaböngészőből" gomb használja. Ha rákattint a gombra vagy a bárhol elhelyezett hivatkozásra, akkor jelszó megadása nélkül kiléphet a SEB-ből. Ha nem ad meg hivatkozást, akkor a "Kilépés a Biztonságos vizsgaböngészőből" gomb nem jelenik meg, és nem lesz beállítva olyan hivatkozás, amellyel kiléphet a SEB-ből.';
$string['seb_managetemplates'] = 'A Biztonságos vizsgaböngésző sablonjainak kezelése';
$string['seb_muteonstartup'] = 'Némítás induláskor';
$string['seb_muteonstartup_help'] = 'Bekapcsolása esetén a SEB indításakor a hang elnémul.';
$string['seb_quitpassword'] = 'Kilépési jelszó';
$string['seb_quitpassword_help'] = 'Ezt a jelszót akkor kéri, amikor a felhasználó megpróbál kilépni a SEB-ből a "Kilépés", a Ctrl-Q vagy a fő böngészőablakban a Bezárás gomb segítségével. Ha nincs beállítva kilépési jelszó, akkor a SEB csak azt kérdezi: "Biztosan kilép a SEB-ből?"';
$string['seb_regexallowed'] = 'Engedélyezett reguláris kifejezések';
$string['seb_regexallowed_help'] = 'Szövegmező, amely tartalmazza az engedélyezett webcímek szűrő kifejezéseit reguláris kifejezés (Regex) formátumban.';
$string['seb_regexblocked'] = 'Kizárt reguláris kifejezések';
$string['seb_regexblocked_help'] = 'Szövegmező, amely tartalmazza a kizárt webcímek szűrő kifejezéseit reguláris kifejezés (Regex) formátumban.';
$string['seb_requiresafeexambrowser'] = 'Biztonságos vizsgaböngésző előírása';
$string['seb_requiresafeexambrowser_help'] = 'Bekapcsolása esetén  a tanulók csak a Biztonságos vizsgaböngészővel próbálkozhatnak.
Lehetőségek:

* Nem
<br/>a Biztonságos vizsgaböngésző használata nem szükséges.
* Igen – Meglévő sablonnal<br/>A Biztonságos vizsgaböngésző beállítására használt sablonnal. A sablonokat a portálrendszergazda kezeli. Kézi beállításai felülírják a sablon beállításait.
* Igen – Kézi beállítás
<br/>A Biztonságos vizsgaböngésző beállításához sablon használatára nem kerül sor. A Biztonságos vizsgaböngészőt kézzel állíthatja be.
* Igen – Saját beállításom feltöltése<br/>Feltöltheti a Biztonságos vizsgaböngészőre vonatkozó saját konfigurációs fájlját. Az összes kézi beállítást és sablonhasználatot felülírja.
* Igen – SEB-ügyfél konfigurációjának használata
<br/>A Biztonságos vizsgaböngészőhöz a portálon nincs beállítás. A teszttel a Biztonságos vizsgaböngészőhöz készített tetszőleges konfigurációval próbálkozhat.';
$string['seb_showkeyboardlayout'] = 'Billentyűzet megjelenítése';
$string['seb_showkeyboardlayout_help'] = 'Bekapcsolása esetén a SEB-tálcán megjelenik az aktuális billentyűzet. Az operációs rendszerben engedélyezett egyéb billentyűzetek közül válogathat.';
$string['seb_showreloadbutton'] = 'Újratöltés gombjának megjelenítése';
$string['seb_showreloadbutton_help'] = 'Bekapcsolása esetén a SEB-tálcán megjelenik az újratöltés gombja. Ezzel újratöltheti az aktuális weboldalt.';
$string['seb_showsebdownloadlink'] = 'A Biztonságos vizsgaböngésző letöltési gombjának megjelenítése';
$string['seb_showsebdownloadlink_help'] = 'Bekapcsolása esetén a teszt kezdőoldalán megjelenik a Biztonságos vizsgaböngésző letöltési gombja.';
$string['seb_showsebtaskbar'] = 'SEB-tálca megjelenítése';
$string['seb_showsebtaskbar_help'] = 'Bekapcsolása esetén a SEB-ablak alján megjelenik egy tálca. A tálcára olyan elemek megjelenítéséhez van szükség, mint a wifi-vezérlőt, az újratöltési gombot, az idő vagy a billentyűzet.';
$string['seb_showtime'] = 'Idő megjelenítése';
$string['seb_showtime_help'] = 'Bekapcsolása esetén a SEB-tálcán megjelenik az aktuális idő.';
$string['seb_showwificontrol'] = 'Wifi-vezérlő megjelenítése';
$string['seb_showwificontrol_help'] = 'Bekapcsolása esetén a SEB-tálcán megjelenik a wifi-vezérlő gombja, mellyel újra kapcsolódhat korábban már használt wifi-hálózatokhoz.';
$string['seb_templateid'] = 'A Biztonságos vizsgaböngésző konfigurációs sablonja';
$string['seb_templateid_help'] = 'A teszt során a rendszer a Biztonságos vizsgaböngésző konfigurációs sablonját használja. Kézzel a beállítások felülírhatók.';
$string['seb_use_client'] = 'Igen – SEB-ügyfél konfigurációjának használata';
$string['seb_use_manually'] = 'Igen – Kézi beállítás';
$string['seb_use_template'] = 'Igen – Meglévő sablonnal';
$string['seb_use_upload'] = 'Igen – Saját beállításom feltöltése';
$string['seb_userconfirmquit'] = 'Megerősítés kilépéskor';
$string['seb_userconfirmquit_help'] = 'Bekapcsolása esetén ha észlelhető kilépési hivatkozás, akkor a SEB-ből való kilépést a felhasználónak meg kell erősítenie.';
$string['sebdownloadbutton'] = 'A Biztonságos vizsgaböngésző letöltése';
$string['seblinkbutton'] = 'A Biztonságos vizsgaböngésző indítása';
$string['sebrequired'] = 'Ez a teszt úgy van beállítva, hogy a tanulók csak a Biztonságos vizsgaböngészővel próbálkozhassanak.';
$string['setting:autoreconfigureseb'] = 'A SEB automatikus konfigurálása';
$string['setting:autoreconfigureseb_desc'] = 'Bekapcsolása esetén azok a felhasználók, akik a Biztonságos vizsgaböngészővel jutnak el a teszthez, automatikusan a Biztonságos vizsgaböngésző újrakonfigurálására kényszerülnek.';
$string['setting:displayblocksbeforestart'] = 'Blokkok megjelenítése a teszt elkezdése előtt';
$string['setting:displayblocksbeforestart_desc'] = 'Bekapcsolása esetén blokkok jelennek meg a teszt elkezdése előtt.';
$string['setting:displayblockswhenfinished'] = 'Blokkok megjelenítése a teszt befejezése után';
$string['setting:displayblockswhenfinished_desc'] = 'Bekapcsolása esetén a blokkok a teszt befejezése után jelennek meg.';
$string['setting:downloadlink'] = 'A Biztonságos vizsgaböngésző letöltési hivatkozása';
$string['setting:downloadlink_desc'] = 'Webcím a Biztonságos vizsgaböngésző letöltéséhez';
$string['setting:quizpasswordrequired'] = 'Tesztjelszó szükséges';
$string['setting:quizpasswordrequired_desc'] = 'Bekapcsolása esetén a Biztonságos vizsgaböngészővel megoldandó tesztekhez tesztjelszót kell beállítani.';
$string['setting:showhttplink'] = 'http:// hivatkozás megjelenítése';
$string['setting:showseblink'] = 'seb:// hivatkozás megjelenítése';
$string['setting:showseblinks'] = 'A Biztonságos vizsgaböngésző konfigurációs hivatkozásai';
$string['setting:showseblinks_desc'] = 'Döntse el, lássanak-e hivatkozásokat a felhasználók a Biztonságos vizsgaböngésző konfigurációs fájljának az eléréséhez, ha a teszt nem elérhető. Vegye figyelembe, hogy a seb:// hivatkozások nem működnek minden böngészőben.';
$string['setting:supportedversions'] = 'Felhívjuk figyelmét, hogy a Biztonságos vizsgaböngésző alábbi minimális verziója szükséges a Config Key szolgáltatás használatához: macOS - 2.1.5pre2, Windows - 3.0, iOS - 2.1.14';
$string['settingsfrozen'] = 'Mivel legalább egy próbálkozásra már sor került, ezért a Biztonságos vizsgaböngésző nem frissíthető.';
$string['unknown_reason'] = 'Ismeretlen ok';
$string['used'] = 'Használatban';
