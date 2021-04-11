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
 * Strings for component 'booking', language 'hu', version '3.10'.
 *
 * @package     booking
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['active'] = 'Aktív';
$string['activitycompletionsuccess'] = 'Minden kiválasztott felhasználó a tevékenység elvégzésére bejelölve';
$string['addastemplate'] = 'Hozzáadás sablonként';
$string['addcategory'] = 'Kategóriák szerkesztése';
$string['addeditbooking'] = 'Foglalási lehetőség szerkesztése';
$string['addmorebookings'] = 'További foglalások hozzáadása';
$string['addnewbookingoption'] = 'Új foglalási lehetőség hozzáadása';
$string['addnewbookingoptionfromtemplate'] = 'Új foglalási lehetőség hozzáadása sablonból';
$string['addnewcategory'] = 'Új kategória hozzáadása';
$string['addnewinstitution'] = 'Új intézmény hozzáadása';
$string['addnewtagtemplate'] = 'Új címkesablon hozzáadása';
$string['address'] = 'Cím';
$string['addteachers'] = 'Tanárok hozzáadása';
$string['addtocalendar'] = 'Hozzáadás a naptárhoz';
$string['addtogroup'] = 'Felhasználók automatikus beiratkoztatása a csoportba';
$string['addtogroup_help'] = 'Felhasználók automatikus beiratkoztatása a csoportba - automatikusan létrejön egy Foglalás nevű - Lehetőség nevű csoport';
$string['addusertogroup'] = 'Felhasználó hozzáadása a csoporthoz:';
$string['advancedoptions'] = 'További lehetőségek';
$string['aftercompletedtext'] = 'A tevékenység befejezése után';
$string['aftercompletedtext_help'] = 'A portál alapértelmezett szövegének a használatához hagyja üresen. A szövegben az alábbi heylőrzők bármelyikét használhatja:
<ul>
<li>{status}</li>
<li>{participant}</li>
<li>{email} - Felhasználói e-mail</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{pollurl}</li>
<li>{pollurlteachers}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher}</li>
<li>{teacherN} - az N a tanár sorszáma, pl. {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - QR-kód és felhasználói azonosító beszúrása </li>
<li>{qr_username} - QR-kód és felhasználónév beszúrása  </li>
<li>{times} - Foglalkozások ideje</li>
<li>{shorturl} - Rövid webcímes lehetőség</li>
</ul>';
$string['agreetobookingpolicy'] = 'A foglalási szabályzatot elolvastam és elfogadom';
$string['allbookingoptions'] = 'Az összes foglalási lehetőséghez tartozó felhasználó letöltése';
$string['allchangessave'] = 'Az összes módosítás elmentve.';
$string['allcomments'] = 'Bárki hozzászólhat';
$string['allmailssend'] = 'A felhasználók összes e-mailje elküldve!';
$string['allowdelete'] = 'A felhasználók számára saját foglalásaik törlésének engedélyezése';
$string['allowupdate'] = 'A foglalás frissítésének engedélyezése';
$string['allratings'] = 'Bárki értékelhet';
$string['allusersbooked'] = 'Az összes {$a} kiválasztott felhasználó a foglalási lehetőséghez sikeresen hozzárendelve.';
$string['answer'] = 'Válasz';
$string['answered'] = 'Megválaszolta';
$string['asglobaltemplate'] = 'Globális sablonként való használat';
$string['associatedcourse'] = 'Kapcsolódó kurzus';
$string['astemplate'] = 'A kurzusban sablonként használandó';
$string['attachedfiles'] = 'Csatolt állományok';
$string['attachical'] = 'Foglalásonként egy naptáresemény csatolása';
$string['attachicaldesc'] = 'Bekapcsolása esetén az e-mail értesítésekhez egy csatolt naptáresemény kapcsolódik. A naptár vagy a foglalási lehetőségek beállításában megadott kezdő és záró időpontot, vagy az első foglalkozás kezdő időpontját és az utolsó foglalkozás záró időpontját foglalja magában.';
$string['attachicalsess'] = 'Az összes foglalkozási dátum csatolása naptáreseményként';
$string['attachicalsessdesc'] = 'Az e-mail értesítésekhez a foglalási lehetőségeknél megadott összes foglalkozási dátum csatolása naptáreseményként.';
$string['autoenrol'] = 'Felhasználók automatikus beiratkoztatása';
$string['autoenrol_help'] = 'Kiválasztása esetén a felhasználók foglaláskor azonnal felveszik a kurzust, a foglalás törlésekor pedig azonnal leadják.';
$string['availability'] = 'Még elérhető';
$string['available'] = 'Elérhető helyek';
$string['availableplaces'] = 'Elérhető helyek: {$a->maxanswers} / {$a->available}';
$string['backtoresponses'] = '<< Vissza a válaszokhoz';
$string['banusernames'] = 'Felhasználónevek tiltása';
$string['banusernames_help'] = 'Azon felhasználónevek korlátozásához, akik nem jelentkezhetnek, írja be a neveket ebbe a mezőbe, vesszővel elválasztva. A gmail.com-ra és yahoo.com-ra végződő felhasználónevek tiltásához írja ezt: gmail.com,yahoo.com';
$string['banusernameswarning'] = 'A felhasználóneve le van tiltva, ezért nem foglalhat.';
$string['beforebookedtext'] = 'Foglalt elé';
$string['beforebookedtext_help'] = 'A portál alapértelmezett szövegének a használatához hagyja üresen. A szövegben az alábbi heylőrzők bármelyikét használhatja: <ul> <li>{status}</li> <li>{participant}</li> <li>{email} - Felhasználói e-mail</li> <li>{title}</li> <li>{duration}</li> <li>{starttime}</li> <li>{endtime}</li> <li>{startdate}</li> <li>{enddate}</li> <li>{courselink}</li> <li>{bookinglink}</li> <li>{pollurl}</li> <li>{pollurlteachers}</li> <li>{location}</li> <li>{institution}</li> <li>{address}</li> <li>{eventtype}</li> <li>{teacher}</li> <li>{teacherN} - az N a tanár sorszáma, pl. {teacher1}</li> <li>{pollstartdate}</li> <li>{qr_id} - QR-kód és felhasználói azonosító beszúrása </li> <li>{qr_username} - QR-kód és felhasználónév beszúrása </li> <li>{times} - Foglalkozások ideje</li> <li>{shorturl} - Rövid webcímes lehetőség</li> </ul>';
$string['beforecompletedtext'] = 'Foglalt után';
$string['beforecompletedtext_help'] = 'A portál alapértelmezett szövegének a használatához hagyja üresen. A szövegben az alábbi heylőrzők bármelyikét használhatja: <ul> <li>{status}</li> <li>{participant}</li> <li>{email} - Felhasználói e-mail</li> <li>{title}</li> <li>{duration}</li> <li>{starttime}</li> <li>{endtime}</li> <li>{startdate}</li> <li>{enddate}</li> <li>{courselink}</li> <li>{bookinglink}</li> <li>{pollurl}</li> <li>{pollurlteachers}</li> <li>{location}</li> <li>{institution}</li> <li>{address}</li> <li>{eventtype}</li> <li>{teacher}</li> <li>{teacherN} - az N a tanár sorszáma, pl. {teacher1}</li> <li>{pollstartdate}</li> <li>{qr_id} - QR-kód és felhasználói azonosító beszúrása </li> <li>{qr_username} - QR-kód és felhasználónév beszúrása </li> <li>{times} - Foglalkozások ideje</li> <li>{shorturl} - Rövid webcímes lehetőség</li> </ul>';
$string['booked'] = 'Foglalt';
$string['bookedpast'] = 'Foglalt (a kurzus lezárva)';
$string['bookedtext'] = 'Foglalás megerősítése';
$string['bookedtext_help'] = 'A portál alapértelmezett szövegének a használatához hagyja üresen. A szövegben az alábbi heylőrzők bármelyikét használhatja: <ul> <li>{status}</li> <li>{participant}</li> <li>{email} - Felhasználói e-mail</li> <li>{title}</li> <li>{duration}</li> <li>{starttime}</li> <li>{endtime}</li> <li>{startdate}</li> <li>{enddate}</li> <li>{courselink}</li> <li>{bookinglink}</li> <li>{pollurl}</li> <li>{pollurlteachers}</li> <li>{location}</li> <li>{institution}</li> <li>{address}</li> <li>{eventtype}</li> <li>{teacher}</li> <li>{teacherN} - az N a tanár sorszáma, pl. {teacher1}</li> <li>{pollstartdate}</li> <li>{qr_id} - QR-kód és felhasználói azonosító beszúrása </li> <li>{qr_username} - QR-kód és felhasználónév beszúrása </li> <li>{times} - Foglalkozások ideje</li> <li>{shorturl} - Rövid webcímes lehetőség</li> </ul>';
$string['bookedusers'] = 'Felvett felhasználók';
$string['booking'] = 'Foglalás';
$string['booking:addeditownoption'] = 'Új lehetőség hozzáadása és saját lehetőségek szerkesztése';
$string['booking:addinstance'] = 'Új foglalás hozzáadása';
$string['booking:choose'] = 'Foglalás';
$string['booking:comment'] = 'Hozzászólások beszúrása';
$string['booking:communicate'] = 'Kommunikációra képes';
$string['booking:deleteresponses'] = 'Válaszok törlése';
$string['booking:downloadresponses'] = 'Válaszok letöltése';
$string['booking:managecomments'] = 'Hozzászólások kezelése';
$string['bookingattachment'] = 'Melléklet';
$string['bookingcategory'] = 'Kategória';
$string['bookingclose'] = 'Eddig';
$string['bookingdeleted'] = 'Foglalását töröltük.';
$string['bookingduration'] = 'Időtartam';
$string['bookingfull'] = 'Nincsenek szabad helyek';
$string['bookingfulldidntregister'] = 'A lehetőség betelt, nem küldtem át az összes felhasználót!';
$string['bookingmanagererror'] = 'A megadott felhasználónév érvénytelen: vagy nincs ilyen, vagy több felhasználó kapcsolódik a névhez (példa: be van kapcsolva az mnet és a helyi hitelesítés).';
$string['bookingmeanwhilefull'] = 'Időközben valaki már jelentkezett az utolsó helyre.';
$string['bookingname'] = 'Foglalás neve';
$string['bookingopen'] = 'Nyitva';
$string['bookingoption_created'] = 'Foglalási lehetőség létrehozva';
$string['bookingoption_deleted'] = 'Foglalási lehetőség törölve';
$string['bookingoption_updated'] = 'Foglalási lehetőség frissítve';
$string['bookingoptioncalendarentry'] = 'Áttérés a(z) <a href="{$a}">foglalási lehetőséghez</a>.';
$string['bookingoptionname'] = 'Foglalási lehetőség megnevezése';
$string['bookingoptionsfromtemplatemenu'] = 'Új foglalási lehetőség sablonból';
$string['bookingoptionsmenu'] = 'Foglalási lehetőségek';
$string['bookingoptiontext'] = 'Foglalási lehetőség szövege a foglalás állapotától függően';
$string['bookingoptiontitle'] = 'Foglalási lehetőség címe';
$string['bookingorganizatorname'] = 'Szervező megnevezése';
$string['bookingpoints'] = 'Kurzuspont';
$string['bookingpolicy'] = 'Foglalási szabályzat';
