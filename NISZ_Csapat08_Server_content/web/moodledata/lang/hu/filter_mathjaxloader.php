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
 * Strings for component 'filter_mathjaxloader', language 'hu', version '3.10'.
 *
 * @package     filter_mathjaxloader
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['additionaldelimiters'] = 'További egyenlőséghatárolók';
$string['additionaldelimiters_help'] = 'A MathJax szűrő elemzi a határolók közötti szöveget egyenlőség szempontjából.

A felismert határolók itt hozzáadhatók (pl. az AsciiMath ezt használja `).

A határolók több karakterből állhatnak, ezeket vesszők választhatják el.';
$string['filtername'] = 'MathJax';
$string['httpsurl'] = 'MathJax webcíme';
$string['httpsurl_help'] = 'Teljes URL a MathJax könyvtárához.';
$string['localinstall'] = 'A MathJax helyi telepítése';
$string['localinstall_help'] = 'A MathJAX alapbeállítása a MathJAX CDN-verzióját használja, de szükség esetén a MathJAX helyileg is telepíthető.

Ezt indokolhatja a sávszélességgel való takarékoskodás vagy a helyi proxy korlátai.

A MathJAX helyi telepítésének használatához először töltse le a teljes MathJax-könyvtárat a https://www.mathjax.org/ portálról. Ezután telepítse egy webszerverre. Végezetül frissítse a MathJax httpurl és/vagy httpsurl szűrőbeállításait úgy, hogy azok a helyi MathJax.js webcímére mutassanak.';
$string['mathjaxsettings'] = 'A MathJAX beállítása';
$string['mathjaxsettings_desc'] = 'A MathJAX alapbeállítása a legtöbb felhasználó számára megfelelő, ugyanakkor jól konfigurálható. A standard konfigurációs beállításokat megadhatja itt..';
$string['privacy:metadata'] = 'A MathJax segédprogram semmilyen személyes adatot nem tárol.';
$string['texfiltercompatibility'] = 'TeX-szűrő kompatibilitása';
$string['texfiltercompatibility_help'] = 'A MathJax-szűrő használható a TeX-szűrő helyett.

A TeX-szűrő által támogatott határolókhoz a MathJax az összes egyenletet a TeX-szel "egy sorban" jeleníti meg.';
