<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2011 Thorsten Mueller <info@immer-quer-durch.de>, QuerDurch
*  	
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 3 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/


/**
 * Checks the user like cia
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */

class Tx_FormulaEnergy_Domain_Model_Usercheck extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * Users ip number
	 *
	 * @var string $ipnumber
	 */
	protected $ipnumber;

	/**
	 * more cookies
	 *
	 * @var string $cookie
	 */
	protected $cookie;

	/**
	 * Setter for ipnumber
	 *
	 * @param string $ipnumber Users ip number
	 * @return void
	 */
	public function setIpnumber($ipnumber) {
		$this->ipnumber = $ipnumber;
	}

	/**
	 * Getter for ipnumber
	 *
	 * @return string Users ip number
	 */
	public function getIpnumber() {
		return $this->ipnumber;
	}

	/**
	 * Setter for cookie
	 *
	 * @param string $cookie more cookies
	 * @return void
	 */
	public function setCookie($cookie) {
		$this->cookie = $cookie;
	}

	/**
	 * Getter for cookie
	 *
	 * @return string more cookies
	 */
	public function getCookie() {
		return $this->cookie;
	}

}
?>