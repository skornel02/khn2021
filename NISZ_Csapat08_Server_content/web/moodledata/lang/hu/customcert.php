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
 * Strings for component 'customcert', language 'hu', version '3.10'.
 *
 * @package     customcert
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activity'] = 'Tevékenység';
$string['addcertpage'] = 'Oldal hozzáadása';
$string['addelement'] = 'Elem hozzáadása';
$string['awardedto'] = 'Kapja:';
$string['cannotverifyallcertificates'] = 'Nincs jogosultsága a portál összes bizonyítványának a megtekintéséhez';
$string['certificate'] = 'Bizonyítvány';
$string['code'] = 'Kód';
$string['copy'] = 'Másol';
$string['coursetimereq'] = 'Kurzusban töltendő percek';
$string['coursetimereq_help'] = 'Itt adja meg percekben azt a minimális időt, amennyit a tanulóknak a kurzusban bejelentkezve kell eltölteniük, mielőtt megkaphatják a bizonyítványt.';
$string['createtemplate'] = 'Sablon létrehozása';
$string['customcert:addinstance'] = 'Új egyedi bizonyítvány hozzáadása';
$string['customcert:manage'] = 'Egyedi bizonyítványok kezelése';
$string['customcert:manageemailothers'] = 'További e-mail-beállítások kezelése';
$string['customcert:manageemailstudents'] = 'Tanulói e-mail-beállítások kezelése';
$string['customcert:manageemailteachers'] = 'Tanári e-mail-beállítások kezelése';
$string['customcert:manageprotection'] = 'Védelmi beállítások kezelése';
$string['customcert:manageverifyany'] = 'Ellenőrzési beállítások kezelése';
$string['customcert:receiveissue'] = 'Bizonyítvány átvétele';
$string['customcert:verifyallcertificates'] = 'A portál összes bizonyítványának ellenőrzése';
$string['customcert:verifycertificate'] = 'Bizonyítvány ellenőrzése';
$string['customcert:view'] = 'Egyedi bizonyítvány megtekintése';
$string['customcert:viewallcertificates'] = 'Minden bizonyítvány megtekintése';
$string['customcert:viewreport'] = 'Kurzusjelentés megtekintése';
$string['customcertsettings'] = 'Bizonyítvány egyedi beállításai';
$string['deletecertpage'] = 'Bizonyítványoldal törlése';
$string['deleteconfirm'] = 'Törlés jóváhagyása';
$string['deleteelement'] = 'Elem törlése';
$string['deleteelementconfirm'] = 'Biztosan törli az elemet?';
$string['deleteissueconfirm'] = 'Biztosan törli a bizonyítványt?';
$string['deleteissuedcertificates'] = 'Kiállított bizonyítványok törlése';
$string['deletepageconfirm'] = 'Biztosan törli a bizonyítványoldalt?';
$string['deletetemplateconfirm'] = 'Biztosan törli a bizonyítványsablont?';
$string['description'] = 'Leírás';
$string['duplicate'] = 'Másolat';
$string['duplicateconfirm'] = 'Másolat megerősítése';
$string['duplicatetemplateconfirm'] = 'Biztosan szeretne másolatot készíteni erről a bizonyítványsablonról?';
$string['editcustomcert'] = 'Egyedi bizonyítvány szerkesztése';
$string['editelement'] = 'Elem szerkesztése';
$string['edittemplate'] = 'Sablon szerkesztése';
$string['elementname'] = 'Elem neve';
$string['elementname_help'] = 'Az egyedi bizonyítvány szerkesztése során az elem azonosítására használandó név. Például amikor több képet használ egy oldalon, és bizonyítványszerkesztés közben szeretné őket egymástól könnyen megkülönböztetni. Megjegyzés: a név nem jelenik meg a PDF-en.';
$string['elements'] = 'Elemek';
$string['elements_help'] = 'Azon elemek listája, amelyek a bizonyítványon megjelennek.

Figyelem: az elemek leképezése ebben a sorrendben történik. A sorrend az egyes elemek melletti nyilakkal módosítható.';
$string['elementwidth'] = 'Szélesség';
$string['elementwidth_help'] = 'Elem szélességének meghatározása - \'0\' esetén nincs korlátozás.';
$string['emailnonstudentbody'] = 'Mellékelve található \'{$a->userfullname} felhasználó \'{$a->coursefullname}\' kurzushoz tartozó \'{$a->certificatename}\' bizonyítványa.';
$string['emailnonstudentcertificatelinktext'] = 'Bizonyítványhoz tartozó jelentés megtekintése';
$string['emailnonstudentgreeting'] = 'Üdvözöljük!';
$string['emailnonstudentsubject'] = '{$a->coursename}: {$a->certificatename}';
$string['emailothers'] = 'E-mail másoknak';
$string['emailothers_help'] = 'Beállítása esetén e-mailben elküldi a bizonyítvány másolatát a (vesszővel elválasztott) listában szereplő e-mail címekre, amikor a másolat elérhetővé válik.';
$string['emailstudentbody'] = 'Mellékelve találja a(z) \'{$a->coursefullname}\' kurzushoz tartozó \'{$a->certificatename}\' bizonyítványát.';
$string['emailstudentcertificatelinktext'] = 'Bizonyítvány megtekintése';
$string['emailstudentgreeting'] = 'Kedves {$a}!';
$string['emailstudents'] = 'E-mail tanulóknak';
$string['emailstudents_help'] = 'Beállítása esetén e-mailben elküldi a tanulóknak a bizonyítvány másolatát, amikor elérhetővé válik.';
$string['emailstudentsubject'] = '{$a->coursename}: {$a->certificatename}';
$string['emailteachers'] = 'E-mail tanároknak';
$string['emailteachers_help'] = 'Beállítása esetén e-mailben elküldi a tanároknak a bizonyítvány másolatát, amikor elérhetővé válik.';
$string['font'] = 'Betű';
$string['font_help'] = 'Az elem generálásakor használt betű.';
$string['fontcolour'] = 'Szín';
$string['fontcolour_help'] = 'A betű színe.';
$string['fontsize'] = 'Méret';
$string['fontsize_help'] = 'A betű mérete pontokban.';
$string['getcustomcert'] = 'Bizonyítvány letöltése';
$string['height'] = 'Magasság';
$string['height_help'] = 'A PDF-bizonyítvány magassága mm-ben. Például egy A4-es lap 297 mm, a levélméretű pedig 279 mm magas.';
$string['invalidcode'] = 'Érvénytelen kód';
$string['invalidcolour'] = 'Érvénytelen szín';
$string['invalidelementwidth'] = 'Adjon meg egy pozitív számot!';
$string['invalidheight'] = 'A magasság 0-nál nagyobb érvényes szám lehet.';
$string['invalidmargin'] = 'A margó 0-nál nagyobb érvényes szám lehet.';
$string['invalidposition'] = '{$a} pozíciójához válasszon egy pozitív számot!';
$string['invalidwidth'] = 'A szélesség  0-nál nagyobb érvényes szám lehet.';
$string['landscape'] = 'Fekvő';
$string['leftmargin'] = 'Bal margó';
$string['leftmargin_help'] = 'A PDF-bizonyítvány bal margója mm-ben.';
$string['listofissues'] = 'Címzettek: {$a}';
$string['load'] = 'Betölt';
$string['loadtemplate'] = 'Sablon betöltése';
$string['loadtemplatemsg'] = 'Biztosan be szeretné tölteni a sablont? Ezzel eltávolítja a bizonyítvány minden létező oldalát és elemét.';
$string['managetemplates'] = 'Sablonok kezelése';
$string['managetemplatesdesc'] = 'Ezzel egy új képernyőre kerül, ahol a kurzusokban használt egyedi bizonyítványsablonokat kezelheti.';
$string['modify'] = 'Módosít';
$string['modulename'] = 'Egyedi bizonyítvány';
$string['modulename_help'] = 'Ez a modul PDF-bizonyítványok dinamikus generálását teszi lehetővé.';
$string['modulenameplural'] = 'Egyedi bizonyítvány';
$string['mycertificates'] = 'Bizonyítványaim';
$string['mycertificatesdescription'] = 'Ezek azok a bizonyítványok, amelyeket e-mailben vagy kézi letöltésre kapott meg.';
$string['name'] = 'Név';
$string['nametoolong'] = 'Túllépte a név maximális hosszát.';
$string['nocustomcerts'] = 'Ehhez a kurzushoz nincsenek egyedi bizonyítványok';
$string['noimage'] = 'Nincs kép';
$string['notemplates'] = 'Nincsenek sablonok';
$string['notissued'] = 'Nincs kiállítva';
$string['notverified'] = 'Nincs ellenőrizve';
$string['options'] = 'Lehetőségek';
$string['page'] = '{$a}. oldal';
$string['pluginadministration'] = 'Egyedi bizonyítványok adminisztrációja';
$string['pluginname'] = 'Egyedi bizonyítvány';
$string['portrait'] = 'Portré';
$string['posx'] = 'X pozíció';
$string['posx_help'] = 'A bal felső saroktól számított pozíció mm-ben, ahová x irányban az elem referenciapontja kerül.';
$string['posy'] = 'Y pozíció';
$string['posy_help'] = 'A bal felső saroktól számított pozíció mm-ben, ahová y irányban az elem referenciapontja kerül.';
$string['print'] = 'Nyomtat';
$string['rearrangeelements'] = 'Elemek áthelyezése';
$string['rearrangeelementsheading'] = 'Húzza el a bizonyítványon megjelenő elemeket helyzetük megváltoztatásához.';
$string['receiveddate'] = 'Átvétel dátuma';
$string['refpoint'] = 'Referenciapont helyzete';
$string['refpoint_help'] = 'A referenciapont egy elem helyzete, mely alapján az x és y koordináták meghatározása történik. Ez \'+\' jellel van jelölve, amely az elem közepén vagy sarkaiban jelenik meg.';
$string['replacetemplate'] = 'Csere';
$string['requiredtimenotmet'] = 'Legalább {$a->requiredtime} percet kell a kurzusban töltenie, mielőtt hozzáférhet a bizonyítványhoz.';
$string['rightmargin'] = 'Jobb margó';
$string['rightmargin_help'] = 'A PDF-bizonyítvány jobb margója mm-ben.';
$string['save'] = 'Ment';
$string['saveandclose'] = 'Ment és bezár';
$string['saveandcontinue'] = 'Ment és folytat';
$string['savechangespreview'] = 'Módosítások mentése és előnézet';
$string['savetemplate'] = 'Sablon mentése';
$string['search:activity'] = 'Egyedi bizonyítvány - tevékenység adatai';
$string['setprotection'] = 'Védelem beállítása';
$string['setprotection_help'] = 'Válassza ki azon tevékenységeket, amelyeket a felhasználók ezzel a bizonyítvánnyal nem hajthatnak végre.  Megjegyzés: a felületen azt kell megjelölni, hogy mit tehet vele a felhasználó, PRINT, MODIFY és COPY jelölőnégyzetek vannak.';
$string['showposxy'] = 'X és Y pozíció mutatása';
$string['showposxy_desc'] = 'Megmutatja egy elem X és Y pozícióját szerkesztés közben, lehetővé téve a felhasználó számára a helyzet pontos meghatározását.';
$string['taskemailcertificate'] = 'Bizonyítványok e-mailben küldésének kezelése';
$string['templatename'] = 'Sablon neve';
$string['templatenameexists'] = 'Ez a sablonnév jelenleg foglalt, válasszon másikat.';
$string['topcenter'] = 'Közép';
$string['topleft'] = 'Bal felső';
$string['topright'] = 'Jobb felső';
$string['type'] = 'Típus';
$string['uploadimage'] = 'Képfeltöltés';
$string['uploadimagedesc'] = 'Ezzel egy új képernyőre kerül, ahol képeket tölthet fel. Az így feltöltött képek az egész portálon elérhetőek lesznek minden olyan felhasználó számára, aki jogosult egyedi bizonyítványt létrehozni.';
$string['verified'] = 'Ellenőrizve';
$string['verify'] = 'Ellenőriz';
$string['verifyallcertificates'] = 'Az összes bizonyítvány ellenőrzésének az engedélyezése';
$string['verifyallcertificates_desc'] = 'Bekapcsolt állapotban a portálon lévő bármely bizonyítvány ellenőrzéséhez bárki (a nem bejelentkezett felhasználók is) meglátogathatja a(z) {$a} oldalt ahelyett, hogy minden egyes bizonyítvány ellenőrzéséhez külön oldalra kellene navigálnia.

Figyelem - ez csak azokra a bizonyítványokra érvényes, ahol a bizonyítvány beállításaiban a "Bizonyítvány ellenőrzésének engedélyezése bárki számára" Igen-re van állítva.';
$string['verifycertificate'] = 'Bizonyítvány ellenőrzése';
$string['verifycertificateanyone'] = 'Bizonyítvány ellenőrzésének engedélyezése bárki számára';
$string['verifycertificateanyone_help'] = 'Ez a beállítás lehetővé teszi bárkinek, aki hozzáfér a bizonyítvány ellenőrzéséhez (beleértve a nem bejelentkezett felhasználókat), hogy ellenőrizzen egy bizonyítványt.';
$string['width'] = 'Szélesség';
$string['width_help'] = 'A PDF-bizonyítvány szélessége mm-ben. Például egy A4-es lap 210 mm, a levélméretű pedig 216 mm széles.';
