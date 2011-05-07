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
 * Energy formulas added by users
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */

class Tx_FormulaEnergy_Domain_Model_Formulas extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * The formula wich is insert by user
	 *
	 * @var string $energyformula
	 * @validate NotEmpty
	 */
	protected $energyformula;

	/**
	 * Ther gender from the person
	 *
	 * @var boolean $gender
	 * @validate NotEmpty
	 */
	protected $gender;

	/**
	 * Firstname from the person
	 *
	 * @var string $firstname
	 * @validate NotEmpty
	 */
	protected $firstname;

	/**
	 * Lastname from the person
	 *
	 * @var string $lastname
	 * @validate NotEmpty
	 */
	protected $lastname;

	/**
	 * Companyname
	 *
	 * @var string $companyname
	 */
	protected $companyname;

	/**
	 * The name of the street and house number
	 *
	 * @var string $streetnumber
	 * @validate NotEmpty
	 */
	protected $streetnumber;

	/**
	 * The name of the city and zip number
	 *
	 * @var string $zipcity
	 * @validate NotEmpty
	 */
	protected $zipcity;

	/**
	 * The user´s email
	 *
	 * @var string $email
	 * @validate NotEmpty
	 */
	protected $email;

	/**
	 * User has checked the agb
	 *
	 * @var boolean $agbchecked
	 * @validate NotEmpty
	 */
	protected $agbchecked;

	/**
	 * is the data hidden
	 *
	 * @var boolean $hide
	 */
	protected $hide;

	/**
	 * i like cookies
	 *
	 * @var string $cookie
	 */
	protected $cookie;

	/**
	 * The ip number
	 *
	 * @var string $ipnumber
	 */
	protected $ipnumber;

	/**
	 * All votes given in month of publishing
	 *
	 * @var integer $votes
	 */
	protected $votes;

	/**
	 * Final votes, who will win
	 *
	 * @var integer $finalvotes
	 */
	protected $finalvotes;

	/**
	 * Setter for energyformula
	 *
	 * @param string $energyformula The formula wich is insert by user
	 * @return void
	 */
	public function setEnergyformula($energyformula) {
		$this->energyformula = $energyformula;
	}

	/**
	 * Getter for energyformula
	 *
	 * @return string The formula wich is insert by user
	 */
	public function getEnergyformula() {
		return $this->energyformula;
	}

	/**
	 * Setter for gender
	 *
	 * @param boolean $gender Ther gender from the person
	 * @return void
	 */
	public function setGender($gender) {
		$this->gender = $gender;
	}

	/**
	 * Getter for gender
	 *
	 * @return boolean Ther gender from the person
	 */
	public function getGender() {
		return $this->gender;
	}

	/**
	 * Returns the state of gender
	 *
	 * @return boolean the state of gender
	 */
	public function isGender() {
		return $this->getGender();
	}

	/**
	 * Setter for firstname
	 *
	 * @param string $firstname Firstname from the person
	 * @return void
	 */
	public function setFirstname($firstname) {
		$this->firstname = $firstname;
	}

	/**
	 * Getter for firstname
	 *
	 * @return string Firstname from the person
	 */
	public function getFirstname() {
		return $this->firstname;
	}

	/**
	 * Setter for lastname
	 *
	 * @param string $lastname Lastname from the person
	 * @return void
	 */
	public function setLastname($lastname) {
		$this->lastname = $lastname;
	}

	/**
	 * Getter for lastname
	 *
	 * @return string Lastname from the person
	 */
	public function getLastname() {
		return $this->lastname;
	}

	/**
	 * Setter for companyname
	 *
	 * @param string $companyname Companyname
	 * @return void
	 */
	public function setCompanyname($companyname) {
		$this->companyname = $companyname;
	}

	/**
	 * Getter for companyname
	 *
	 * @return string Companyname
	 */
	public function getCompanyname() {
		return $this->companyname;
	}

	/**
	 * Setter for streetnumber
	 *
	 * @param string $streetnumber The name of the street and house number
	 * @return void
	 */
	public function setStreetnumber($streetnumber) {
		$this->streetnumber = $streetnumber;
	}

	/**
	 * Getter for streetnumber
	 *
	 * @return string The name of the street and house number
	 */
	public function getStreetnumber() {
		return $this->streetnumber;
	}

	/**
	 * Setter for zipcity
	 *
	 * @param string $zipcity The name of the city and zip number
	 * @return void
	 */
	public function setZipcity($zipcity) {
		$this->zipcity = $zipcity;
	}

	/**
	 * Getter for zipcity
	 *
	 * @return string The name of the city and zip number
	 */
	public function getZipcity() {
		return $this->zipcity;
	}

	/**
	 * Setter for email
	 *
	 * @param string $email The user´s email
	 * @return void
	 */
	public function setEmail($email) {
		$this->email = $email;
	}

	/**
	 * Getter for email
	 *
	 * @return string The user´s email
	 */
	public function getEmail() {
		return $this->email;
	}

	/**
	 * Setter for agbchecked
	 *
	 * @param boolean $agbchecked User has checked the agb
	 * @return void
	 */
	public function setAgbchecked($agbchecked) {
		$this->agbchecked = $agbchecked;
	}

	/**
	 * Getter for agbchecked
	 *
	 * @return boolean User has checked the agb
	 */
	public function getAgbchecked() {
		return $this->agbchecked;
	}

	/**
	 * Returns the state of agbchecked
	 *
	 * @return boolean the state of agbchecked
	 */
	public function isAgbchecked() {
		return $this->getAgbchecked();
	}

	/**
	 * Setter for hide
	 *
	 * @param boolean $hide is the data hidden
	 * @return void
	 */
	public function setHide($hide) {
		$this->hide = $hide;
	}

	/**
	 * Getter for hide
	 *
	 * @return boolean is the data hidden
	 */
	public function getHide() {
		return $this->hide;
	}

	/**
	 * Returns the state of hide
	 *
	 * @return boolean the state of hide
	 */
	public function isHide() {
		return $this->getHide();
	}

	/**
	 * Setter for cookie
	 *
	 * @param string $cookie i like cookies
	 * @return void
	 */
	public function setCookie($cookie) {
		$this->cookie = $cookie;
	}

	/**
	 * Getter for cookie
	 *
	 * @return string i like cookies
	 */
	public function getCookie() {
		return $this->cookie;
	}

	/**
	 * Setter for ipnumber
	 *
	 * @param string $ipnumber The ip number
	 * @return void
	 */
	public function setIpnumber($ipnumber) {
		$this->ipnumber = $ipnumber;
	}

	/**
	 * Getter for ipnumber
	 *
	 * @return string The ip number
	 */
	public function getIpnumber() {
		return $this->ipnumber;
	}

	/**
	 * Setter for votes
	 *
	 * @param integer $votes All votes given in month of publishing
	 * @return void
	 */
	public function setVotes($votes) {
		$this->votes = $votes;
	}

	/**
	 * Getter for votes
	 *
	 * @return integer All votes given in month of publishing
	 */
	public function getVotes() {
		return $this->votes;
	}

	/**
	 * Setter for finalvotes
	 *
	 * @param integer $finalvotes Final votes, who will win
	 * @return void
	 */
	public function setFinalvotes($finalvotes) {
		$this->finalvotes = $finalvotes;
	}

	/**
	 * Getter for finalvotes
	 *
	 * @return integer Final votes, who will win
	 */
	public function getFinalvotes() {
		return $this->finalvotes;
	}

}
?>