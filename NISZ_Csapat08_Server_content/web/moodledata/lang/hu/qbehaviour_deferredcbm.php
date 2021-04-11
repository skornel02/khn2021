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
 * Strings for component 'qbehaviour_deferredcbm', language 'hu', version '3.10'.
 *
 * @package     qbehaviour_deferredcbm
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accuracy'] = 'Pontosság';
$string['accuracyandbonus'] = 'Pontosság + jutalom';
$string['assumingcertainty'] = 'Nem választott ki bizonyossági értéket. A figyelembe vett érték: {$a}.';
$string['averagecbmmark'] = 'Átlagos CBM-jegy';
$string['basemark'] = '{$a} alapjegy';
$string['breakdownbycertainty'] = 'Bizonyosság szerinti bontás';
$string['cbmbonus'] = 'CBM-jutalom';
$string['cbmgradeexplanation'] = 'Bizonyosságon alapuló osztályozáshoz (CBM) a fenti osztályzat az összes helyes maximumához mérten jelenik meg, C=1.';
$string['cbmgrades'] = 'CBM-osztályzatok';
$string['cbmgrades_help'] = 'Bizonyosságon alapuló osztályozás (CBM) esetén C=1 (csekély bizonyosság) mellett minden helyesen megválaszolt kérdés esetén az osztályzat 100%. C=3 (nagyfokú bizonyosság) mellett minden helyesen megválaszolt kérdés esetén az osztályzat akár 300% is lehet. A félreértések (bizonyosnak vélt rossz válaszok) az osztályzatot sokkal inkább csökkentik, mint a bizonytalannak beállított rossz válaszok. Következésképpen akár negatív globális osztályzat születhet.

**Pontosság** a helyes %-a a bizonyosság figyelmen kívül hagyásával, de minden kérdés esetén maximális osztályzatra súlyozva. A bizonyos és kevésbé bizonyos válaszadások közötti sikeres különbségtétel jobb osztályzatot eredményez, mint ha minden kérdéshez azonos bizonyosság tartozik. Ezt jelzi a **CBM-jutalompont**. A **Pontosság** + **CBM-jutalompont** jobban méri a tudást, mint a **Pontosság**. A félreértések negatív jutalompontot eredményezhetnek, ami az ismert és ismeretlen tudáselemek gondos megvizsgálására hívhatja fel a figyelmet.';
$string['cbmmark'] = '{$a} CBM-jegy';
$string['certainty'] = 'Bizonyosság';
$string['certainty-1'] = 'Fogalma sincs';
$string['certainty1'] = 'C=1 (bizonytalan: 67% alatt)';
$string['certainty2'] = 'C=2 (közepes, 67% fölött)';
$string['certainty3'] = 'C=3 (nagyfokú, 80% fölött)';
$string['certainty_help'] = 'Bizonyosságon alapuló osztályozás esetén meg kell jelölnie, mennyire biztos a válaszában. Az alábbi szintek közül választhat:

Bizonyosság foka | C=1 (bizonytalan| C=2 (közepes) | C=3 (nagyfokú) ------------------- | ------------ | --------- | ----------------
Helyes válasz | 1 | 2 | 3
Helytelen válasz | 0 | -2 | -6
Valószínűség | <67% | 67-80% | >80%

A legjobb jegyet a bizonytalanság elismerésével szerzi. Ha pl. úgy véli, a hibás válasz esélye nagyobb, mint 3 az 1-hez, akkor a negatív jegy elkerülése érdekében adjon meg C=1-et.';
$string['certaintyshort-1'] = 'Fogalma sincs';
$string['certaintyshort1'] = 'C=1';
$string['certaintyshort2'] = 'C=2';
$string['certaintyshort3'] = 'C=3';
$string['dontknow'] = 'Fogalma sincs';
$string['foransweredquestions'] = 'Csak a(z)  {$a} megválaszolt kérdéshez tartozó eredmények';
$string['forentirequiz'] = 'A teljes teszthez tartozó eredmények ({$a} kérdés)';
$string['howcertainareyou'] = '{$a->help} bizonyossága:  {$a->choices}';
$string['judgementok'] = 'Rendben';
$string['judgementsummary'] = 'Válaszok: {$a->responses}. Pontosság: {$a->fraction}. (Optimális tartomány {$a->idealrangelow} -- {$a->idealrangehigh}). Ezzel a bizonyossági szinttel eredménye {$a->judgement} volt.';
$string['noquestions'] = 'Nincs válasz';
$string['overconfident'] = 'túlságosan biztos';
$string['pluginname'] = 'Halasztott visszajelzés CBM-mel';
$string['privacy:metadata'] = 'A Deferred feedback with CBM question behaviour segédprogram semmilyen személyes adatot nem tárol.';
$string['slightlyoverconfident'] = 'kissé túl biztos';
$string['slightlyunderconfident'] = 'kissé kevéssé biztos';
$string['underconfident'] = 'nem eléggé biztos';
$string['weightx'] = '{$a} súly';
