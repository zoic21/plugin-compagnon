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

/* * ***************************Includes********************************* */
require_once dirname(__FILE__) . '/../../../../core/php/core.inc.php';

class compagnon extends eqLogic {
	/*     * *************************Attributs****************************** */

	/*     * ***********************Methode static*************************** */

	/*
		     * Fonction exécutée automatiquement toutes les minutes par Jeedom
		      public static function cron() {

		      }
	*/

	/*
		     * Fonction exécutée automatiquement toutes les heures par Jeedom
		      public static function cronHourly() {

		      }
	*/

	/*
		     * Fonction exécutée automatiquement tous les jours par Jeedom
		      public static function cronDayly() {

		      }
	*/

	/*     * *********************Méthodes d'instance************************* */

	public function preInsert() {

	}

	public function postInsert() {

	}

	public function preSave() {

	}

	public function postSave() {

	}

	public function preUpdate() {

	}

	public function postUpdate() {

	}

	public function preRemove() {

	}

	public function postRemove() {

	}

	/*
		     * Non obligatoire mais permet de modifier l'affichage du widget si vous en avez besoin
		      public function toHtml($_version = 'dashboard') {

		      }
	*/

	/*     * **********************Getteur Setteur*************************** */
}

class compagnonCmd extends cmd {
	/*     * *************************Attributs****************************** */

	/*     * ***********************Methode static*************************** */

	/*     * *********************Methode d'instance************************* */

	/*
		     * Non obligatoire permet de demander de ne pas supprimer les commandes même si elles ne sont pas dans la nouvelle configuration de l'équipement envoyé en JS
		      public function dontRemoveCmd() {
		      return true;
		      }
	*/

	public function execute($_options = array()) {

	}

	/*     * **********************Getteur Setteur*************************** */
}
