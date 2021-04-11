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
 * Strings for component 'cohort', language 'hu', version '3.10'.
 *
 * @package     cohort
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcohort'] = 'Globális csoport hozzáadása';
$string['allcohorts'] = 'Minden globális csoport';
$string['anycohort'] = 'Bárki';
$string['assign'] = 'Hozzárendelés';
$string['assigncohorts'] = 'Globális csoporttagok hozzárendelése';
$string['assignto'] = '\'{$a}\' globális csoport tagjai';
$string['backtocohorts'] = 'Vissza a globális csoportokhoz';
$string['bulkadd'] = 'Hozzáadás a globális csoporthoz';
$string['bulknocohort'] = 'Nincsenek globális csoportok';
$string['categorynotfound'] = 'A(z) <b>{$a}</b> kategória nem található, vagy nincs itt engedélye globális csoportot létrehozni. Marad az alapkörnyezet.';
$string['cohort'] = 'Globális csoport';
$string['cohorts'] = 'Globális csoportok';
$string['cohortsin'] = '{$a}: meglévő globális csoportok';
$string['component'] = 'Forrás';
$string['contextnotfound'] = 'A(z) <b>{$a}</b> környezet nem található, vagy nincs itt engedélye globális csoportot létrehozni. Marad az alapkörnyezet.';
$string['csvcontainserrors'] = 'Hiba a CSV-adatokban. A részleteket l. alább.';
$string['csvcontainswarnings'] = 'Figyelmeztetés a CSV-adatokban. A részleteket l. alább.';
$string['csvextracolumns'] = 'A(z)  <b>{$a}</b> csoport(ok) kimarad(nak).';
$string['currentusers'] = 'Jelenlegi felhasználók';
$string['currentusersmatching'] = 'Jelenlegi egyező felhasználók';
$string['defaultcontext'] = 'Alapkörnyezet';
$string['delcohort'] = 'Globális csoport törlése';
$string['delconfirm'] = 'Biztosan törli a(z) {$a} globális csoportot?';
$string['description'] = 'Leírás';
$string['displayedrows'] = '{$a->total} / {$a->displayed} sor megjelenítve.';
$string['duplicateidnumber'] = 'Ilyen azonosítószámmal már létezik globális csoport';
$string['editcohort'] = 'Globális csoport szerkesztése';
$string['editcohortidnumber'] = 'Globális csoport azonosítójának szerkesztése';
$string['editcohortname'] = 'Globális csoport nevének szerkesztése';
$string['eventcohortcreated'] = 'Globális csoport létrehozva';
$string['eventcohortdeleted'] = 'Globális csoport törölve';
$string['eventcohortmemberadded'] = 'Felhasználó a globális csoporthoz hozzáadva';
$string['eventcohortmemberremoved'] = 'Felhasználó a globális csoportból törölve';
$string['eventcohortupdated'] = 'Globális csoport frissítve';
$string['external'] = 'Külső globális csoport';
$string['idnumber'] = 'Globális csoport azonosítója';
$string['invalidtheme'] = 'A globális csoport stílusa nem létezik';
$string['memberscount'] = 'Globális csoport mérete';
$string['name'] = 'Név';
$string['namecolumnmissing'] = 'Gond van a CSV-állomány formátumával. Ellenőrizze, hogy helyes oszlopneveket tartalmaz-e. Új felhasználók meglévő globális csoporthoz való hozzáadásához a Portáladminisztráció alatt térjen át a Felhasználók feltöltése menüpontra.';
$string['namefieldempty'] = 'A mezőnév nem lehet üres.';
$string['newidnumberfor'] = 'Új azonosítószám  a(z) {$a} globális csoporthoz';
$string['newnamefor'] = 'Új név a(z) {$a} globális csoporthoz';
$string['nocomponent'] = 'Kézzel létrehozva';
$string['potusers'] = 'Lehetséges felhasználók';
$string['potusersmatching'] = 'Lehetséges egyező felhasználók';
$string['preview'] = 'Előnézet';
$string['privacy:metadata:cohort_members'] = 'Adatok a felhasználó globális csoportjáról.';
$string['privacy:metadata:cohort_members:cohortid'] = 'A globális csoport azonosítója';
$string['privacy:metadata:cohort_members:timeadded'] = 'A felhasználó globális csoportba való felvételének időbélyegzője';
$string['privacy:metadata:cohort_members:userid'] = 'A globális csoportba tartozó felhasználó azonosítója';
$string['removeuserwarning'] = 'Ha a globális csoportból felhasználókat torol, ezzel több kurzusból iratkoztathat ki felhasználókat, ami a felhasználók beállításainak, osztályzatainak, csoporttagságának és az érintett kurzusokhoz tartozó egyéb felhasználói információknak az eltávolításával jár.';
$string['search'] = 'Keresés';
$string['searchcohort'] = 'Globális csoport keresése';
$string['selectfromcohort'] = 'Tagok kiválasztása a globális csoportból';
$string['systemcohorts'] = 'Rendszerszintű globális csoport';
$string['unknowncohort'] = 'Ismeretlen globális csoport ({$a})!';
$string['uploadcohorts'] = 'Globális csoportok feltöltése';
$string['uploadcohorts_help'] = 'Globális csoportokat szöveges állományból tölthet föl. Formátuma::

* Soronként egy rekord
* Minden rekord vesszőkkel (vagy más határolókkal) elválasztott adatsor
* Az első rekord az állomány többi részének formátumát meghatározó mezőnevek felsorolása
* Kötelező mezőnév a név
* Választható mezőnevek: idnumber, leírás, descriptionformat, látható, környezet, kategória, category_id, category_idnumber, category_path';
$string['uploadedcohorts'] = '{$a} globális csoport feltöltése';
$string['useradded'] = 'A felhasználó hozzáadva a(z) "{$a}" globális csoporthoz';
$string['visible'] = 'Látható';
$string['visible_help'] = 'A globális csoport környezetében \'moodle/cohort:view\' engedéllyel rendelkezők bármely globális csoportot megtekinthetnek.<br/>A látható globális csoportokat a kapcsolódó kurzusok felhasználói is megtekinthetik';
