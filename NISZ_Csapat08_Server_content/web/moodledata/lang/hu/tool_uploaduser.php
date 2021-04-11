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
 * Strings for component 'tool_uploaduser', language 'hu', version '3.10'.
 *
 * @package     tool_uploaduser
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowdeletes'] = 'Törlés engedélyezése';
$string['allowrenames'] = 'Átnevezés engedélyezése';
$string['allowsuspends'] = 'Fiókok felfüggesztésének és bekapcsolásának engedélyezése';
$string['assignedsysrole'] = 'Hozzárendelt {$a} rendszerszerep';
$string['clidefault'] = 'Alapeset:';
$string['clierrorargument'] = 'Érvénytelen  érték  --{$a->name} esetén. Megengedett értékek  {$a->values}';
$string['clifile'] = 'CSV-állomány útvonala felhasználói adatokkal. Kötelező.';
$string['clifilenotreadable'] = 'A(z) állomány nem létezik vagy nem olvasható';
$string['clihelp'] = 'A súgó kinyomtatása';
$string['climissingargument'] = '--{$a} argumentum szükséges';
$string['clititle'] = 'Parancssor feltöltési felhasználói eszköz';
$string['clivalidationerror'] = 'Validálási hiba:';
$string['csvdelimiter'] = 'CSV-határoló';
$string['defaultvalues'] = 'Alapértékek';
$string['deleteerrors'] = 'Hibák törlése';
$string['encoding'] = 'Kódolás';
$string['errormnetadd'] = 'Nem lehet távoli felhasználókat fölvenni.';
$string['errorprefix'] = 'Hiba:';
$string['errors'] = 'Hibák';
$string['examplecsv'] = 'Szöveges mintaállomány';
$string['examplecsv_help'] = 'A szöveges mintaállomány használatához töltse le és nyissa meg egy szövegszerkesztőben vagy egy táblázatkezelőben. AZ első soron ne változtasson, a további sorokat (rekordokat) szerkessze meg és adja hozzá felhasználói adatait. Ha szükséges, adjon hozzá új sorokat. Az állományt mentse el CSV-ként és töltse fel.

A szöveges mintaállományt használhatja tesztelésre, mivel előre megtekintheti  a felhasználói adatokat, majd akár törölheti is a lépést, mielőtt a felhasználói fiókok létrejönnek.';
$string['infoprefix'] = 'Tájékoztatás:';
$string['invalidtheme'] = 'A(z)  "{$a}" stílus nincs telepítve';
$string['invalidupdatetype'] = 'A kiválasztott \'Feltöltése típusa\' esetén nem választhatja ezt a lehetőséget.';
$string['invaliduserdata'] = 'Érvénytelen adatok  {$a} felhasználó esetén, melyeket a rendszer automatikusan megtisztított.';
$string['linex'] = '{$a} sor';
$string['nochanges'] = 'Nincs változás';
$string['notheme'] = 'A felhasználóhoz nincs stílus megadva.';
$string['pluginname'] = 'Felhasználói feltöltés';
$string['privacy:metadata'] = 'A User upload segédprogram nem tárol személyes adatokat.';
$string['renameerrors'] = 'Átnevezési hibák';
$string['requiredtemplate'] = 'Kitöltendő. Itt használhat sablonszintaxist (%l = vezetéknév, %f = keresztnév, %u = felhasználónév). A részleteket és a példákat lásd a súgóban!';
$string['rowpreviewnum'] = 'Sorok előnézete';
$string['unassignedsysrole'] = 'Nem hozzárendelt {$a} rendszerszerep';
$string['uploadpicture_baduserfield'] = 'A megadott felhasználói attribútum érvénytelen.';
$string['uploadpicture_cannotmovezip'] = 'A tömörített állomány nem helyezhető át ideiglenes könyvtárba.';
$string['uploadpicture_cannotprocessdir'] = 'A kibontott állományokat nem lehet feldolgozni.';
$string['uploadpicture_cannotsave'] = 'A(z) {$a} felhasználó képállományát nem lehet elmenteni. Ellenőrizze az eredeti képállományt.';
$string['uploadpicture_cannotunzip'] = 'A képállományt nem lehet kibontani.';
$string['uploadpicture_invalidfilename'] = 'A(z) {$a} képállomány nevében érvénytelen karakterek vannak.';
$string['uploadpicture_overwrite'] = 'Felülírja a meglévő felhasználói képeket?';
$string['uploadpicture_userfield'] = 'A képekhez kapcsolódó felhasználói attribútum:';
$string['uploadpicture_usernotfound'] = '\'{$a->userfield}\' értékű \'{$a->uservalue}\' felhasználó nem létezik.';
$string['uploadpicture_userskipped'] = 'A(z) {$a} felhasználó kihagyva (már van képe).';
$string['uploadpicture_userupdated'] = 'A(z) {$a} felhasználó képe frissítve.';
$string['uploadpictures'] = 'Felhasználók képének feltöltése';
$string['uploadpictures_help'] = 'Felhasználói képeket képállományokból készített tömörített fájlként tölthet fel. A képállományokat kiválasztott-felhasználói-attribútum.kiterjesztés formában kell elnevezni. Ha például a képek megfeleltetéséhez a kiválasztott felhasználói attribútum a felhasználónév, a felhasználó neve pedig user1234, akkor az állomány neve user1234.jpg lesz.';
$string['uploaduser:uploaduserpictures'] = 'Felhasználói képek feltöltése';
$string['uploadusers'] = 'Felhasználók feltöltése';
$string['uploadusers_help'] = 'A felhasználókat feltöltheti (és adott esetben beiratkoztathatja) szöveges állományból is. A szöveget az alábbiak szerint kell megformáznia:

* Az állomány minden sora egy rekordot tartalmazzon.
* Minden rekord pontosvesszőkkel (vagy más határoló karakterekkel) elválasztott adatmezőket tartalmazzon.
* Az első rekord a mezőneveket tartalmazza, melyek meghatározzák az állomány fennmaradó részének a formátumát.
* Kötelező mezőnevek: felhasználónév, jelszó, keresztnév, vezetéknév és e-mail-cím';
$string['uploaduserspreview'] = 'Felhasználók feltöltésének előzetes megtekintése';
$string['uploadusersresult'] = 'Felhasználók feltöltésének eredménye';
$string['useraccountupdated'] = 'Felhasználó frissítve';
$string['useraccountuptodate'] = 'Felhasználó frissítve';
$string['userdeleted'] = 'Felhasználó törölve';
$string['userrenamed'] = 'Átnevezett felhasználó';
$string['userscreated'] = 'Létrehozott felhasználók';
$string['usersdeleted'] = 'Törölt felhasználók';
$string['usersrenamed'] = 'Átnevezett felhasználók';
$string['usersskipped'] = 'Kihagyott felhasználók';
$string['usersupdated'] = 'Frissített felhasználók';
$string['usersweakpassword'] = 'Gyenge jelszóval rendelkező felhasználók';
$string['userthemesnotallowed'] = 'Felhasználói stílusokat nem használhat, ezért az esetleges feltöltöttet a rendszer figyelmen kívül hagyja.';
$string['uubulk'] = 'Tömeges művelethez kiválaszt';
$string['uubulkall'] = 'Minden felhasználó';
$string['uubulknew'] = 'Új felhasználók';
$string['uubulkupdated'] = 'Frissített felhasználók';
$string['uucsvline'] = 'CSV-sor';
$string['uulegacy1role'] = '(Eredeti tanuló) típusszám=1';
$string['uulegacy2role'] = '(Eredeti tanár) típusszám=2';
$string['uulegacy3role'] = '(Eredeti nem tananyagszerkesztő tanár) típusszám=3';
$string['uunoemailduplicates'] = 'E-mail címek ismétlődésének megakadályozása';
$string['uuoptype'] = 'Típus feltöltése';
$string['uuoptype_addinc'] = 'Mind hozzáadása, szükség esetén számláló hozzákapcsolása a felhasználónevekhez';
$string['uuoptype_addnew'] = 'Csak újak hozzáadása, meglévő felhasználók kihagyása';
$string['uuoptype_addupdate'] = 'Újak hozzáadása és meglévő felhasználók frissítése';
$string['uuoptype_update'] = 'Csak meglévő felhasználók frissítése';
$string['uupasswordcron'] = 'A cron állítja elő';
$string['uupasswordnew'] = 'Új felhasználói jelszó';
$string['uupasswordold'] = 'Meglévő felhasználói jelszó';
$string['uustandardusernames'] = 'Felhasználónevek szabványosítása';
$string['uuupdateall'] = 'Állománnyal és alapbeállításokkal való felülírás';
$string['uuupdatefromfile'] = 'Állománnyal való felülírás';
$string['uuupdatemissing'] = 'Hiányzó állományból és alapbeállításokból való kitöltése';
$string['uuupdatetype'] = 'Meglévő felhasználó adatai';
$string['uuusernametemplate'] = 'Felhasználónév-sablon';
$string['warningprefix'] = 'Figyelmeztetés:';
