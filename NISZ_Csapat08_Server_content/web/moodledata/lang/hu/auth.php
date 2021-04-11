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
 * Strings for component 'auth', language 'hu', version '3.10'.
 *
 * @package     auth
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actauthhdr'] = 'Elérhető hitelesítési segédprogramok';
$string['allowaccountssameemail'] = 'Azonos e-mail címmel rendelkező fiókok engedélyezése';
$string['allowaccountssameemail_desc'] = 'Bekapcsolása esetén egynél több felhasználónak lehet ugyanaz az e-mail címe. Ez titoktartási gondokhoz vezethet, pl. jelszó-megerősítés esetén.';
$string['alternatelogin'] = 'Ha itt egy webcímet ad meg, az lesz a portál bejelentkező oldala. Az oldalon egy űrlap található, melyen a tevékenység tulajdonságának beállítása a(z) {$a}, továbbá a felhasználónév és a jelszó mezőket adja vissza.<br />Ügyeljen a webcím pontos megadására, ellenkező esetben kizárhatja magát erről a portálról.<br />Az alapbeállítás szerinti bejelentkező oldal megtartásához hagyja a mezőt üresen.';
$string['alternateloginurl'] = 'Alternatív belépési URL';
$string['auth_changepasswordhelp'] = 'A jelszómódosítás súgója';
$string['auth_changepasswordhelp_expl'] = 'Megjeleníti a(z) {$a} jelszavukat elfelejtő felhasználók súgóját. Ez vagy a <strong>jelszó-módosítási webcímmel</strong>, vagy a Moodle belső jelszómódosításával együtt, vagy ahelyett jelenik meg.';
$string['auth_changepasswordurl'] = 'Jelszavas webcím módosítása';
$string['auth_changepasswordurl_expl'] = 'Adja meg a {$a} jelszavukat elfelejtő felhasználóknak küldendő webcímet. Állítsa a <strong>Szokásos jelszómódosító oldal használata</strong> pontot <strong>Nem</strong>-re.';
$string['auth_changingemailaddress'] = 'E-mail címét {$a->oldemail} címről {$a->newemail} címre kívánja módosítani. Biztonsági okokból e-mail üzenetet küldünk az új címre. E-mail címét az abban az üzenetben elküldött URL megnyitását követően frissítjük.';
$string['auth_common_settings'] = 'Általános beállítások';
$string['auth_data_mapping'] = 'Adatok illesztése';
$string['auth_fieldlock'] = 'Zárolás';
$string['auth_fieldlock_expl'] = 'Zárolás: Bekapcsolásakor a felhasználók és a rendszergazdák a mezőt nem szerkeszthetik közvetlenül. Akkor jelölje be, ha az adatokat a külső hitelesítési rendszerben kezeli.';
$string['auth_fieldlockfield'] = '({$a}) érték zárolása';
$string['auth_fieldlocks'] = 'Felhasználómezők zárolása';
$string['auth_fieldlocks_help'] = 'A felhasználómezőket zárolhatja. Ez akkor hasznos, ha a rendszergazdák a felhasználói adatokat kézzel tartják karban a felhasználói rekordok szerkesztése vagy a \'Felhasználók feltöltése\' segítségével. A Moodle által használt mezők zárolásakor ne feledje el megadni az adatokat a felhasználók létrehozásakor - ellenkező esetben a felhasználók nem kerülnek bele a rendszerbe. A probléma elkerülésére a zárolást beállíthatja \'Üres állapotban zárolatlan\'-ra.';
$string['auth_fieldmapping'] = '({$a}) adatmegfeleltetés';
$string['auth_invalidnewemailkey'] = 'Hiba: ha e-mail-cím módosítását próbálta megerősíteni, hibásan másolhatta ki az Önnek e-mailben megküldött webcímet. Próbálja meg újból kimásolni a címet és megismételni a megerősítést.';
$string['auth_multiplehosts'] = 'Több gazdagép VAGY cím adható meg (pl. host1.com;host2.com;host3.com vagy xxx.xxx.xxx.xxx;xxx.xxx.xxx.xxx)';
$string['auth_notconfigured'] = 'A(z)  {$a} hitelesítési mód nincs beállítva.';
$string['auth_outofnewemailupdateattempts'] = 'E-mail címének frissítéséhez nincs több próbálkozási lehetősége. Frissítési kérelmét töröltük.';
$string['auth_passwordisexpired'] = 'Jelszava lejárt. Módosítsa most!';
$string['auth_passwordwillexpire'] = 'Jelszava {$a} napon belül lejár. Kívánja most módosítani?';
$string['auth_remove_delete'] = 'Belső teljes törlése';
$string['auth_remove_keep'] = 'Megtartás belsőként';
$string['auth_remove_suspend'] = 'Belső felfüggesztése';
$string['auth_remove_user'] = 'Adja meg, mi történjék egy belső felhasználói fiókkal egyesített szinkronizálás során, ha a felhasználó a külső forrásból törölve lett. Csakis felfüggesztett felhasználók esetén automatikus az ismételt bekapcsolás, amennyiben újból megjelennek a külső forrásban.';
$string['auth_remove_user_key'] = 'Külső felhasználó törlése';
$string['auth_sync_script'] = 'Felhasználói fiók szinkronizálása';
$string['auth_sync_suspended'] = 'Bekapcsolása esetén a helyi felhasználói fiók felfüggesztésének frissítésekor a "felfüggesztett" attribútumot használja a rendszer.';
$string['auth_sync_suspended_key'] = 'A helyi felhasználói fiók felfüggesztésének szinkronizálása';
$string['auth_updatelocal'] = 'Helyi adatok frissítése';
$string['auth_updatelocal_expl'] = 'Helyi adatok frissítése: bekapcsolása esetén a mező (külső hitelesítésből) mindannyiszor frissítve lesz, ahányszor a felhasználó bejelentkezik, vagy a felhasználók szinkronizálására kerül sor. A helyileg frissítendő mezőket zárolni kell.';
$string['auth_updatelocalfield'] = 'Helyi ({$a}) frissítése';
$string['auth_updateremote'] = 'Külső adatok frissítése';
$string['auth_updateremote_expl'] = 'Külső adatok frissítése: Bekapcsolása esetén a külső hitelesítés mindannyiszor frissítve lesz, ahányszor a felhasználói rekord frissítésére sor kerül. Szerkesztés engedélyezéséhez a mezők zárolását fel kell oldani.';
$string['auth_updateremote_ldap'] = 'Megjegyzés: külső LDAP-adatok frissítéséhez egy bind-user-hez be kell állítani a binddn és a bindpw értékét az összes felhasználói rekordra vonatkozó szerkesztési privilégiummal. Jelenleg nem őrzi meg a többértékű attribútumokat és frissítéskor a fölös értékeket eltávolítja.';
$string['auth_updateremotefield'] = 'Külső ({$a}) frissítése';
$string['auth_user_create'] = 'Felhasználó létrehozásának engedélyezése';
$string['auth_user_creation'] = 'Új (névtelen) felhasználók is létrehozhatnak új felhasználói azonosítót a külső hitelesítési forráson, e-mailes megerősítéssel. Ha ezt engedélyezi, ne feledje megadni a felhasználó létrehozásához a modul-specifikus lehetőségeket.';
$string['auth_usernameexists'] = 'A választott felhasználónév már létezik. Válasszon másikat.';
$string['auth_usernotexist'] = 'A nem létező {$a} felhasználó frissítése nem lehetséges';
$string['authenticationoptions'] = 'Hitelesítési lehetőségek';
$string['authinstructions'] = 'Itt tájékoztathatja a felhasználókat arról, hogy milyen felhasználóneveket és jelszavakat használhatnak. Az itt megadott szöveg megjelenik a bejelentkező oldalon. Ha üresen hagyja, nem jelenik meg semmilyen tájékoztatás.';
$string['authloginviaemail'] = 'E-mailen keresztüli belépés engedélyezése';
$string['authloginviaemail_desc'] = 'Portálra belépés engedélyezése felhasználónévvel és (ha egyedi) e-mail címmel.';
$string['auto_add_remote_users'] = 'Távoli felhasználók automatikus hozzáadása';
$string['cannotmapfield'] = 'A(z) "{$a->fieldname}" mezőnév nem feleltethető meg, mert "{$a->shortname}" rövid neve túl hosszú. A megfeleltetéshez csökkentse a mező rövid nevét {$a->charlimit} karakterre. <a href="{$a->link}">Felhasználói profilmezők szerkesztése</a>';
$string['changepassword'] = 'Jelszó-módosítási URL';
$string['changepasswordhelp'] = 'Elfelejtett jelszó visszanyerésének webcíme, melyet a felhasználó e-mailben kap meg. A beállítás nem lép érvénybe, ha a hitelesítési általános beállításokban már van megadva ilyen webcím.';
$string['chooseauthmethod'] = 'Válasszon egy hitelesítési eljárást';
$string['chooseauthmethod_help'] = 'Ezzel állíthatja be az adott felhasználó hitelesítési módszerét. Csak bekapcsolt hitelesítési segédprogramot választhat, ellenkező esetben a felhasználó többé nem fog tudni bejelentkezni. A felhasználó kizárásához válassza a "Nincs bejelentkezés" opciót.';
$string['createpassword'] = 'Jelszó előállítása és felhasználó értesítése';
$string['createpasswordifneeded'] = 'Szükség esetén hozzon létre egy jelszót és küldje el e-mailben';
$string['emailchangecancel'] = 'E-mail cím módosításának törlése';
$string['emailchangepending'] = 'A módosítás folyamatban van. Nyissa meg a {$a->preference_newemail} címre kiküldött hivatkozást.';
$string['emailnowexists'] = 'Eredeti kérése óta a profiljához hozzáadandó e-mail címet már valaki máshoz rendeltük hozzá. Ezért e-mail címe módosítási kérelmét elutasítjuk, de próbálkozhat egy másik címmel.';
$string['emailupdate'] = 'E-mail cím frissítése';
$string['emailupdatemessage'] = 'Tisztelt {$a->fullname}!

A(z) {$a->site} portálon lévő fiókjához tartozó e-mail-cím módosítását kérte. A módosítás megerősítéséhez nyissa meg böngészőjében az alábbi webcímet.

{$a->url}

{$a->supportemail}';
$string['emailupdatesuccess'] = '<em>{$a->fullname}</em> felhasználó e-mail címének <em>{$a->email}</em> címre módosítása sikerült.';
$string['emailupdatetitle'] = 'A {$a->site} portálon az e-mail cím frissítésének megerősítése';
$string['errormaxconsecutiveidentchars'] = 'A jelszó legfeljebb {$a} azonos egymás utáni karaktert tartalmazhat.';
$string['errorminpassworddigits'] = 'A jelszó legalább {$a} számjegyet tartalmazzon.';
$string['errorminpasswordlength'] = 'A jelszó legalább {$a} karaktert tartalmazzon.';
$string['errorminpasswordlower'] = 'A jelszó legalább {$a} kisbetűt tartalmazzon.';
$string['errorminpasswordnonalphanum'] = 'A jelszó legalább {$a} nem-alfanumerikus karaktert tartalmazzon.';
$string['errorminpasswordupper'] = 'A jelszó legalább {$a} nagybetűt tartalmazzon.';
$string['errorpasswordreused'] = 'A jelszót korábban már használták, nem használható újra.';
$string['errorpasswordupdate'] = 'Hiba a jelszó frissítése közben, a jelszó nem módosult';
$string['eventuserloggedin'] = 'A felhasználó belépett';
$string['eventuserloggedinas'] = 'A felhasználó másik felhasználóként jelentkezett be.';
$string['eventuserloginfailed'] = 'A felhasználói belépés nem sikerült';
$string['forcechangepassword'] = 'Jelszómódosítás előírása';
$string['forcechangepassword_help'] = 'Felhasználói jelszó módosításának előírása a Moodle-ba való következő belépéskor.';
$string['forcechangepasswordfirst_help'] = 'Felhasználói jelszó módosításának előírása a Moodle-ba való első belépéskor.';
$string['forgottenpassword'] = 'Ha itt megad egy webcímet, az lesz a portálhoz tartozó elveszett jelszavak visszaállításának az oldala. Olyan portálokon használandó, ahol a jelszavakat a Moodle-on kívül kezelik. Az alapbeállítás szerinti jelszó-visszaállítás használatához hagyja üresen.';
$string['forgottenpasswordurl'] = 'Elfelejtett jelszó-URL';
$string['getrecaptchaapi'] = 'A reCAPTCHA használatához szerezzen be egy API-kulcsot innen: <a href=\'https://www.google.com/recaptcha/admin\'>https://www.google.com/recaptcha/admin</a>';
$string['guestloginbutton'] = 'Vendégkénti belépés gombja';
$string['incorrectpleasetryagain'] = 'Hibás, próbálja meg újra';
$string['infilefield'] = 'Az állományban szükséges mező';
$string['informminpassworddigits'] = 'legalább {$a} számjegy';
$string['informminpasswordlength'] = 'legalább {$a} karakter';
$string['informminpasswordlower'] = 'legalább {$a} kisbetű';
$string['informminpasswordnonalphanum'] = 'legalább {$a} nem alfanumerikus karakter';
$string['informminpasswordreuselimit'] = 'A jelszavak {$a} csere után használhatók újra.';
$string['informminpasswordupper'] = 'legalább {$a} nagybetű';
$string['informpasswordpolicy'] = 'A jelszó kötelező eleme: {$a}';
$string['instructions'] = 'Utasítások';
$string['internal'] = 'Belső';
$string['limitconcurrentlogins'] = 'Egyidejű belépések korlátozása';
$string['limitconcurrentlogins_desc'] = 'Bekapcsolása esetén korlátozódik a felhasználók egyidejű belépéseinek száma. A korlát elérése után a legkorábbi belépés ér véget, így elveszhetnek a nem mentett adatok. A beállítás nem használható SSO-hitelesítési segédprogramokkal.';
$string['locked'] = 'Zárolt';
$string['md5'] = 'MD5 titkosítás';
$string['nopasswordchange'] = 'A jelszó nem módosítható';
$string['nopasswordchangeforced'] = 'A továbblépéshez először módosítania kell a jelszavát, ehhez azonban nem áll rendelkezésre megfelelő oldal. Forduljon a Moodle rendszergazdájához.';
$string['noprofileedit'] = 'A profil nem szerkeszthető.';
$string['ntlmsso_attempting'] = 'Egyszeres belépés megpróbálása NTLM-en keresztül...';
$string['ntlmsso_failed'] = 'Az automatikus belépés nem sikerült, próbálkozzék a szokásos belépési oldallal...';
$string['ntlmsso_isdisabled'] = 'Az NTLM SSO ki van kapcsolva.';
$string['passwordhandling'] = 'Jelszómező kezelése';
$string['plaintext'] = 'Egyszerű szöveg';
$string['pluginnotenabled'] = 'A(z) \'{$a}\' hitelesítő segédprogram nincs bekapcsolva.';
$string['pluginnotinstalled'] = 'A(z) \'{$a}\' hitelesítő segédprogram nincs telepítve.';
$string['potentialidps'] = 'Lépjen be itteni fiókjával:';
$string['privacy:metadata:userpref:createpassword'] = 'Jelzi, hogy a felhasználó számára jelszót kell előállítani';
$string['privacy:metadata:userpref:forcepasswordchange'] = 'Jelzi, hogy a felhasználónak belépéskor kell-e jelszót módosítania';
$string['privacy:metadata:userpref:loginfailedcount'] = 'A felhasználó sikertelen belépéseinek a száma';
$string['privacy:metadata:userpref:loginfailedcountsincesuccess'] = 'A felhasználó sikertelen belépéseinek a száma az utolsó sikeres belépés óta';
$string['privacy:metadata:userpref:loginfailedlast'] = 'Az utolsó sikertelen belépés rögzítésének a dátuma';
$string['privacy:metadata:userpref:loginlockout'] = 'Jelzi, hogy a felhasználói fiók sikertelen belépések miatt zárolva van-e, és mikortól';
$string['privacy:metadata:userpref:loginlockoutignored'] = 'Jelzi, hogy a felhasználói fiókot soha nem szabad zárolni';
$string['privacy:metadata:userpref:loginlockoutsecret'] = 'Zárolás esetén a fiók feloldására használandó titkos jel';
$string['recaptcha'] = 'reCAPTCHA';
$string['recaptcha_help'] = 'A CAPTCHA az automatizált programokkal való visszaélés megakadályozására használatos. Az utasítások végrehajtásával igazolja, hogy Ön egy személy. Ez lehet egy bejelölendő négyzet, egy négyzetben látható karaktersor, vagy egy választandó képkészlet.

Ha nem biztos abban, hogy felismerte a képet, kérjen egy másik szöveget vagy egy hangos CAPTCHA-t.';
$string['security_question'] = 'Biztonsági kérdés';
$string['selfregistration'] = 'Önregisztráció';
$string['selfregistration_help'] = 'Ha hitelesítő segédprogramot, például e-mail alapú önregisztrációt választ, akkor a potenciális felhasználók regisztrálhatják magukat és fiókokat hozhatnak létre. Ezzel a levélszemetet gyártók fiókokat hozhatnak létre fórumüzenetek és blogüzenetek levélszeméttel való megtöltéséhez. Ennek elkerülésére az önregisztrációt ki kell kapcsolni vagy az <em>Engedélyezett e-mail-doménekre </em> kell korlátozni.';
$string['settingmigrationmismatch'] = 'Nem egyező értékeket találtunk a segédprogram beállítási neveinek javítása közben! A(z) \'{$a->plugin}\' hitelesítő segédprogram beállítása \'{$a->setting}\' a régi név alatt \'{$a->legacy}\' és \'{$a->current}\' az aktuális név alatt. Az utóbbi értéket állítottuk be érvényesnek, de azért ellenőrizze és erősítse meg.';
$string['sha1'] = 'SHA-1 titkosítás';
$string['showguestlogin'] = 'Megjelenítheti vagy elrejtheti a bejelentkező oldalon a vendég belépésére való gombot.';
$string['stdchangepassword'] = 'Szokásos jelszó-módosítási oldal használata';
$string['stdchangepassword_expl'] = 'Ha a külső hitelesítési rendszer lehetővé teszi a jelszómódosítást a Moodle-on keresztül, akkor ezt állítsa Igen-re. Ezzel fölülírja a \'Jelszó webcímének módosítása\' beállítást.';
$string['stdchangepassword_explldap'] = 'MEGJEGYZÉS: Az LDAP-ot távoli LDAP-szerver esetén célszerű SSL-kódoláson (ldaps://) keresztül használni.';
$string['suspended'] = 'Felfüggesztett fiók';
$string['suspended_help'] = 'Felfüggesztett fiókból nem lehet belépni vagy webszolgáltatásokat használni. A kimenő üzeneteket a rendszer megsemmisíti.';
$string['testsettings'] = 'Beállítások tesztelése';
$string['testsettingsheading'] = 'Hitelesítési beállítások tesztelése - {$a}';
$string['unlocked'] = 'Zárolatlan';
$string['unlockedifempty'] = 'Üres állapotban zárolatlan';
$string['update_never'] = 'Soha';
$string['update_oncreate'] = 'Létrehozáskor';
$string['update_onlogin'] = 'Minden belépés alkalmával';
$string['update_onupdate'] = 'Frissítéskor';
$string['user_activatenotsupportusertype'] = 'auth: ldap user_activate() nem támogatja a kiválasztott {$a} felhasználótípust.';
$string['user_disablenotsupportusertype'] = 'auth: ldap user_disable() (még...) nem támogatja a kiválasztott felhasználótípust.';
$string['username'] = 'Felhasználónév';
$string['username_help'] = 'Ne feledje, hogy egyes hitelesítő segédprogramok nem engedik a felhasználónév megváltoztatását.';
