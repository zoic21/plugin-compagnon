<?php

/* This file is part of Jeedom.
 *
 * Jeedom is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Jeedom is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Jeedom. If not, see <http://www.gnu.org/licenses/>.
 */
header('Content-type: application/json');

require_once dirname(__FILE__) . "/../../../../core/php/core.inc.php";

if (!jeedom::apiAccess(init('apikey'), 'compagnon')) {
	echo __('Clef API non valide, vous n\'êtes pas autorisé à effectuer cette action (compagnon)', __FILE__);
	die();
}

$content = file_get_contents('php://input');
$json = json_decode($content, true);
log::add('compagnon', 'debug', $content);

$eqlogic = compagnon::byId(init('id'));
if (!is_object($eqlogic)) {
	throw new Exception(__('Equipement ID compagnon inconnu : ', __FILE__) . init('id'));
}
if ($eqlogic->getEqType_name() != 'compagnon') {
	throw new Exception(__('Cette commande n\'est pas de type compagnon : ', __FILE__) . init('id'));
}

if (is_array($json)) {
	if (isset($json['location']['coords']['latitude']) && isset($json['location']['coords']['longitude'])) {
		$eqlogic->checkAndUpdateCmd('geolocalisation', $json['location']['coords']['latitude'] . ',' . $json['location']['coords']['longitude']);
	}
}