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
 * Strings for component 'feedback', language 'hu', version '3.10'.
 *
 * @package     feedback
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add_item'] = 'Kérdés hozzáadása';
$string['add_pagebreak'] = 'Oldaltörés hozzáadása';
$string['adjustment'] = 'Igazítás';
$string['after_submit'] = 'Leadás után';
$string['allowfullanonymous'] = 'Teljes névtelenség engedélyezése';
$string['analysis'] = 'Elemzés';
$string['anonymous'] = 'Névtelen';
$string['anonymous_edit'] = 'Felhasználónevek rögzítése';
$string['anonymous_entries'] = 'Névtelen bejegyzések ({$a})';
$string['anonymous_user'] = 'Névtelen felhasználó';
$string['answerquestions'] = 'Kérdések megválaszolása';
$string['append_new_items'] = 'Új tételek hozzáfűzése';
$string['autonumbering'] = 'Automatikus számok';
$string['autonumbering_help'] = 'Ki- és bekapcsolja automatikus számok használatát az egyes kérdésekhez';
$string['average'] = 'Átlag';
$string['bold'] = 'Félkövér';
$string['calendarend'] = '{$a} lezárul';
$string['calendarstart'] = '{$a} megnyílik';
$string['cannotaccess'] = 'A visszajelzést csak kurzusból érheti el.';
$string['cannotsavetempl'] = 'Sablonok mentése nem engedélyezett';
$string['captcha'] = 'Vizuális kód';
$string['captchanotset'] = 'Nincs beállítva vizuális kód.';
$string['check'] = 'Feleletválasztós - több válasz';
$string['check_values'] = 'Tanuló által adott lehetséges válaszok';
$string['checkbox'] = 'Feleletválasztós - több válasz lehetséges (jelölőnégyzetek)';
$string['choosefile'] = 'Válasszon állományt';
$string['chosen_feedback_response'] = 'Kiválasztott válasz a visszajelzéshez';
$string['closebeforeopen'] = 'A kezdési időpont előtti befejezési időpontot adott meg.';
$string['complete_the_form'] = 'Válaszoljon a kérdésekre';
$string['completed'] = 'Kész';
$string['completed_feedbacks'] = 'Leadott válaszok';
$string['completedon'] = 'Elkészült ekkor:  {$a}';
$string['completionsubmit'] = 'Visszajelzés leadása esetén tekintse befejezettnek';
$string['configallowfullanonymous'] = 'Igenre állítás esetén a visszajelzés belépés nélkül kitölthető. Csak a címoldalon lévő visszajelzéseket érinti.';
$string['confirmdeleteentry'] = 'Biztosan törli ezt a bejegyzést?';
$string['confirmdeleteitem'] = 'Biztosan törli ezt az elemet?';
$string['confirmdeletetemplate'] = 'Biztosan törli ezt a sablont?';
$string['confirmusetemplate'] = 'Biztosan ezt a sablont akarja használni?';
$string['continue_the_form'] = 'Kérdések megválaszolásának folytatása';
$string['count_of_nums'] = 'Számok összesen';
$string['courseid'] = 'Kurzus-azonosító';
$string['creating_templates'] = 'Kérdések elmentése új sablonként';
$string['delete_entry'] = 'Bejegyzés törlése';
$string['delete_item'] = 'Kérdés törlése';
$string['delete_old_items'] = 'Régi tételek törlése';
$string['delete_pagebreak'] = 'Oldaltörés törlése';
$string['delete_template'] = 'Sablon törlése';
$string['delete_templates'] = 'Sablon törlése...';
$string['depending'] = 'Függő tételek';
$string['depending_help'] = 'A függő tételekkel megtekintheti a más tételek értékétől függő tételeket.<br /> <strong>Íme egy szemléltető példa:</strong><br /> <ul> <li>Először hozzon létre egy tételt, melynek értékétől egyéb tételek függnek.</li> <li>Ezután szúrjon be egy oldaltörést.</li> <li>Ezután adjon hozzá tételeket, melyek az előző tétel értékétől függnek<br /> A tételkészítő űrlapon lévő listáról válassza ki a "függő tétel"-t és a "függő érték" szövegmezőbe írja be a szükséges értéket.</li> </ul> <strong>A szerkezet ekként néz ki:</strong> <ol> <li>Tételkérdés: van autója? V: van/nincs</li> <li>Oldaltörés</li> <li>Tételkérdés: milyen színű az autója?<br /> (ez a tétel az első = igen értékétől függ)</li> <li>Tételkérdés: miért nincs autója?<br /> (ez a tétel az első = nem értékétől függ)</li> <li> ... további tételek</li> </ol>';
$string['dependitem'] = 'Függő tétel';
$string['dependvalue'] = 'Függő érték';
$string['description'] = 'Leírás';
$string['do_not_analyse_empty_submits'] = 'Az üres leadásokat ne elemezze';
$string['downloadresponseas'] = 'Minden válasz letöltése ekként:';
$string['drop_feedback'] = 'Törlés a kurzusból';
$string['dropdown'] = 'Feleletválasztós - egyetlen válasz lehetséges (lenyíló lista)';
$string['dropdown_values'] = 'Válaszok';
$string['dropdownlist'] = 'Feleletválasztós - egyetlen válasz (lenyíló lista)';
$string['dropdownrated'] = 'Lenyíló lista (pontozott)';
$string['edit_item'] = 'Kérdés szerkesztése';
$string['edit_items'] = 'Kérdések szerkesztése';
$string['email_notification'] = 'Leadásról szóló értesítés bekapcsolása';
$string['email_notification_help'] = 'Bekapcsolása esetén a tanárok értesítést kapnak a visszajelzések beérkezéséről';
$string['emailteachermail'] = '{$a->username} befejezte a visszajelzési tevékenységet : \'{$a->feedback}\'. Itt megtekintheti: {$a->url}';
$string['emailteachermailhtml'] = '{$a->username} befejezte a visszajelzési tevékenységet : <i>\'{$a->feedback}\'</i><br /><br />Itt <a href="{$a->url}">megtekintheti</a>.';
$string['entries_saved'] = 'Válaszait a rendszer elmentette. Köszönet!';
$string['eventresponsedeleted'] = 'Válaszok törölve';
$string['eventresponsesubmitted'] = 'Válaszok leadva';
$string['export_questions'] = 'Kérdések exportálása';
$string['export_to_excel'] = 'Exportálás Excelbe';
$string['feedback:addinstance'] = 'Új visszajelzés hozzáadása';
$string['feedback:complete'] = 'Visszajelzés kitöltése';
$string['feedback:createprivatetemplate'] = 'Saját sablon létrehozása';
$string['feedback:createpublictemplate'] = 'Közös sablon létrehozása';
$string['feedback:deletesubmissions'] = 'Kitöltött leadások törlése';
$string['feedback:deletetemplate'] = 'Sablon törlése';
$string['feedback:edititems'] = 'Tételek szerkesztése';
$string['feedback:mapcourse'] = 'Kurzusok és globális visszajelzések összeillesztése';
$string['feedback:receivemail'] = 'Értesítés átvétele e-mailben';
$string['feedback:view'] = 'Visszajelzés megtekintése';
$string['feedback:viewanalysepage'] = 'Az elemzési oldal megtekintése leadás után';
$string['feedback:viewreports'] = 'Jelentések megtekintése';
$string['feedback_is_not_for_anonymous'] = 'A visszajelzés nem lehetséges névtelen felhasználó esetén';
$string['feedback_is_not_open'] = 'A visszajelzés nincs nyitva';
$string['feedbackclose'] = 'Válaszok engedélyezése a címzettnek';
$string['feedbackcompleted'] = '{$a->username} befejezte ezt: {$a->feedbackname}';
$string['feedbackopen'] = 'Válaszok engedélyezése a feladótól';
$string['file'] = 'Állomány';
$string['filter_by_course'] = 'Szűrés kurzus szerint';
$string['handling_error'] = 'Hiba történt a visszajelzési modul tevékenységkezelése közben';
$string['hide_no_select_option'] = 'A "Nincs kiválasztva" lehetőség elrejtése';
$string['horizontal'] = 'Vízszintes';
$string['import_questions'] = 'Kérdések importálása';
$string['import_successfully'] = 'Az importálás sikerült';
$string['importfromthisfile'] = 'Importálás ebből az állományból';
$string['includeuserinrecipientslist'] = '{$a} felvétele a címzettek listájára';
$string['indicator:cognitivedepth'] = 'Kognitív visszajelzés';
$string['indicator:cognitivedepth_help'] = 'Ez a jelző a tanuló által a visszajelzés kapcsán elért kognitív mélységen alapul.';
$string['indicator:cognitivedepthdef'] = 'Kognitív visszajelzés';
$string['indicator:cognitivedepthdef_help'] = 'A résztvevő az elemzési időszak alatt a Visszajelzés tevékenységei során kognitív elfoglaltság terén ezt a százalékot érte el (Szintek - Nincs megtekintés, Megtekintés, Leadás)';
$string['indicator:socialbreadth'] = 'Társas visszajelzés';
$string['indicator:socialbreadth_help'] = 'Ez a jelző a tanuló által a visszajelzés kapcsán elért társas lefedettségen alapul.';
$string['indicator:socialbreadthdef'] = 'Társas visszajelzés';
$string['indicator:socialbreadthdef_help'] = 'A résztvevő az elemzési időszak alatt a Visszajelzés tevékenységei során társas elfoglaltság terén ezt a százalékot érte el (Szintek - Nincs részvétel, Egyedüli részvétel, Másokkal együtt való részvétel)';
$string['info'] = 'Információk';
$string['infotype'] = 'Információk típusa';
$string['insufficient_responses'] = 'kevés válasz';
$string['insufficient_responses_for_this_group'] = 'A csoporthoz nincs elég tanulói válasz';
$string['insufficient_responses_help'] = 'A visszajelzés névtelenségének megőrzéséhez legalább 2 válaszra van szükség.';
$string['item_label'] = 'Címke';
$string['item_name'] = 'Kérdés';
$string['label'] = 'Címke';
$string['labelcontents'] = 'Tartalom';
$string['mapcourse'] = 'Visszajelzés kapcsolása kurzusokhoz';
$string['mapcourse_help'] = 'Alapesetben a honlapján létrehozott visszajelzési űrlapok az egész portálon elérhetők és minden visszajelzési blokkot használó kurzusban megjelennek. A visszajelzési űrlap megjelenését elérheti, ha jegyzetblokká alakítja át, vagy korlátozhatja a visszajelzési űrlap megjelenését konkrét kurzusokra.';
$string['mapcourseinfo'] = 'Ez az egész portálra érvényes visszajelzés, amely a visszajelzési blokkot használja az összes kurzus esetén. A kurzusok illesztésével korlátozhatja, mely kurzusok esetén jelenjen meg a visszajelzés. Keresse ki a kurzust és illessze ehhez a visszajelzéshez.';
$string['mapcoursenone'] = 'Nincs illesztett kurzus. A visszajelzés minden kurzusra érvényes.';
$string['mapcourses'] = 'A visszajelzés illesztése kurzusokhoz.';
$string['mappedcourses'] = 'Illesztett kurzusok';
$string['mappingchanged'] = 'A kurzustérkép módosult';
$string['maximal'] = 'Maximum';
$string['messageprovider:message'] = 'Visszajelzésre emlékeztető';
$string['messageprovider:submission'] = 'Értesítések visszajelzésekről';
$string['minimal'] = 'Minimum';
$string['mode'] = 'Mód';
$string['modulename'] = 'Visszajelzés';
$string['modulename_help'] = 'A visszajelzési modullal a tanár különféle kérdéstípusokkal (feleletválasztós, igen-nem, szövegbeviteles) egyedi felméréseket hozhat létre.

A visszajelzés lehet névtelen, az eredmény megtekinthetősége pedig szabályozható. A portál címoldalán megjelenő visszajelzési tevékenységbe nem bejelentkezett felhasználók is bekapcsolódhatnak.

Jellemző alkalmazásai:

* Kurzusértékelések a tartalom későbbi résztvevők számára való tökéletesítése érdekében
* Kurzusmodulokra, eseményekrte stb. való feliratkozás lehetővé tétele
* A kurzusválaszték vagy az intézményi politika vendégek általi értékelésének felmérése
* Bántalmazás felmérésére, mely során a tanulók az eseményeket név nélkül bejelenthetik.';
$string['modulenameplural'] = 'Visszajelzések';
$string['move_item'] = 'A kérdés áthelyezése';
$string['multichoice'] = 'Feleletválasztós';
$string['multichoice_values'] = 'Feleletválasztós értékek';
$string['multichoiceoption'] = '<span class="weight">({$a->weight}) </span>{$a->name}';
$string['multichoicerated'] = 'Feleletválasztós (osztályozott)';
$string['multichoicetype'] = 'Feleletválasztós típusa';
$string['multiplesubmit'] = 'Több leadás';
$string['multiplesubmit_help'] = 'Ha névtelen felmérésekhez be van kapcsolva, a felhasználók korlátlan számú visszajelzést adhatnak le.';
$string['name'] = 'Név';
$string['name_required'] = 'Név megadása kötelező';
$string['nameandlabelformat'] = '({$a->label}) {$a->name}';
$string['next_page'] = 'Következő oldal';
$string['no_handler'] = 'Nincs tevékenységkezelő ehhez:';
$string['no_itemlabel'] = 'Nincs címke';
$string['no_itemname'] = 'Nincs tételnév';
$string['no_items_available_yet'] = 'Még nincs beállítva kérdés';
$string['no_templates_available_yet'] = 'Még nincs sablon';
$string['non_anonymous'] = 'A felhasználó nevét a rendszer naplózza és a válaszok mellett megjeleníti';
$string['non_anonymous_entries'] = 'Nem névtelen bejegyzések ({$a})';
$string['non_respondents_students'] = 'Nem válaszoló tanulók ({$a})';
$string['not_completed_yet'] = 'Még nincs kész';
$string['not_selected'] = 'Nincs kiválasztva';
$string['not_started'] = 'Nem kezdődött el';
$string['numberoutofrange'] = 'Tartományon kívül eső szám';
$string['numeric'] = 'Számjegyes válasz';
$string['numeric_range_from'] = 'Tartomány kezdete';
$string['numeric_range_to'] = 'Tartomány vége';
$string['of'] = '/';
$string['oldvaluespreserved'] = 'Minden régi kérdés és hozzárendelt érték megőrződik';
$string['oldvalueswillbedeleted'] = 'A jelenlegi kérdések és minden válasz törlődik.';
$string['only_one_captcha_allowed'] = 'A visszajelzésben csak egy vizuális kód szerepelhet.';
$string['openafterclose'] = 'Zárási időpont utáni nyitási időpontot adott meg';
$string['overview'] = 'Áttekintés';
$string['page'] = 'Oldal';
$string['page-mod-feedback-x'] = 'Bármely visszajelzési moduloldal';
$string['page_after_submit'] = 'Teljesítéssel kapcsolatos üzenet';
$string['pagebreak'] = 'Oldaltörés';
$string['pluginadministration'] = 'Visszajelzések kezelése';
$string['pluginname'] = 'Visszajelzés';
$string['position'] = 'Helyzet';
$string['previous_page'] = 'Előző oldal';
$string['privacy:metadata:completed'] = 'A visszajelzéshez leadott munkák rögzítése';
$string['privacy:metadata:completed:anonymousresponse'] = 'Névtelen legyen-e a leadott munka.';
$string['privacy:metadata:completed:timemodified'] = 'A leadott munka utolsó módosításának időpontja.';
$string['privacy:metadata:completed:userid'] = 'A visszajelzést teljesítő felhasználó azonosítója';
$string['privacy:metadata:completedtmp'] = 'A még folyamatban lévő leadott munkák rögzítése.';
$string['privacy:metadata:value'] = 'Kérdésre adott válasz rögzítése.';
$string['privacy:metadata:value:value'] = 'A kiválasztott válasz.';
$string['privacy:metadata:valuetmp'] = 'Kérdésre adott válasz rögzítése folyamatban lévő leadott munka esetén.';
$string['public'] = 'Nyilvános';
$string['question'] = 'Kérdés';
$string['questionandsubmission'] = 'Kérdés és leadás beállításai';
$string['questions'] = 'Kérdések';
$string['questionslimited'] = 'Csak az első {$a} kérdés látszik, tekintse meg az egyes válaszokat vagy az összes megtekintéséhez töltse le a táblázat adatait.';
$string['radio'] = 'Feleletválasztós - egy válasz';
$string['radio_values'] = 'Tanuló válaszai';
$string['ready_feedbacks'] = 'Kész visszajelzések';
$string['required'] = 'Kitöltendő';
$string['resetting_data'] = 'Visszajelzésekhez kapcsolódó válaszok visszaállítása';
$string['resetting_feedbacks'] = 'Visszajelzések visszaállítása';
$string['response_nr'] = 'Válasz száma:';
$string['responses'] = 'Tanuló válaszai';
$string['responsetime'] = 'Tanuló válaszainak ideje';
$string['save_as_new_item'] = 'Mentés új kérdésként';
$string['save_as_new_template'] = 'Mentés új sablonként';
$string['save_entries'] = 'Válaszainak leadása';
$string['save_item'] = 'Kérdés mentése';
$string['saving_failed'] = 'A mentés nem sikerült!';
$string['search:activity'] = 'Visszajelzési tevékenységek';
$string['search_course'] = 'Kurzus keresése';
$string['searchcourses'] = 'Keresés a kurzusokban';
$string['searchcourses_help'] = 'Azon kurzus(ok) kódjának vagy nevének kikeresése, amelyet a visszajelzéssel össze kíván kapcsolni.';
$string['selected_dump'] = 'A $SESSION változó kiválasztott indexeinek előállítását lásd alább:';
$string['send'] = 'Küldés';
$string['send_message'] = 'Üzenet küldése';
$string['show_all'] = 'Mindet mutatja';
$string['show_analysepage_after_submit'] = 'Elemzési oldal megjelenítése';
$string['show_entries'] = 'Tanuló válaszainak megjelenítése';
$string['show_entry'] = 'Tanuló válaszának megjelenítése';
$string['show_nonrespondents'] = 'Nem válaszolók megjelenítése';
$string['site_after_submit'] = 'A portál a leadás után';
$string['sort_by_course'] = 'Rendezés kurzusok szerint';
$string['started'] = 'Elkezdődött';
$string['startedon'] = 'Elkezdődött ekkor:  {$a}';
$string['subject'] = 'Tárgy';
$string['switch_item_to_not_required'] = 'Beállítás szükségtelenként';
$string['switch_item_to_required'] = 'Beállítás szükségesként';
$string['template'] = 'Sablon';
$string['template_deleted'] = 'Sablon törölve';
$string['template_saved'] = 'Sablon elmentve';
$string['templates'] = 'Sablonok';
$string['textarea'] = 'Hosszabb szöveges válasz';
$string['textarea_height'] = 'Sorok száma';
$string['textarea_width'] = 'Szélesség';
$string['textfield'] = 'Rövid szöveges válasz';
$string['textfield_maxlength'] = 'Elfogadott maximális karakterszám';
$string['textfield_size'] = 'Szövegmező szélessége';
$string['there_are_no_settings_for_recaptcha'] = 'Nincs beállítás a vizuális kódhoz';
$string['this_feedback_is_already_submitted'] = 'Ezt a tevékenységet már befejezte.';
$string['typemissing'] = 'Hiányzik a "típus" értéke';
$string['update_item'] = 'Kérdés módosításainak elmentése';
$string['url_for_continue'] = 'Hivatkozás a következő tevékenységre';
$string['url_for_continue_help'] = 'Alapesetben a visszajelzés leadása után a Tovább gombbal a kurzusoldalra kerül. Vagy megadhat egy hivatkozást a következő tevékenységhez.';
$string['use_one_line_for_each_value'] = 'Minden válaszhoz egy sort használjon!';
$string['use_this_template'] = 'Ezen sablon használata';
$string['using_templates'] = 'Sablon használata';
$string['vertical'] = 'Függőleges';
