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
*  the Free Software Foundation; either version 2 of the License, or
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
 * Testcase for class Tx_FormulaEnergy_Domain_Model_Formulas.
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @package TYPO3
 * @subpackage FormulaEnergy
 * 
 * @author Thorsten Mueller <info@immer-quer-durch.de>
 */
class Tx_FormulaEnergy_Domain_Model_FormulasTest extends Tx_Extbase_Tests_Unit_BaseTestCase {
	/**
	 * @var Tx_FormulaEnergy_Domain_Model_Formulas
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new Tx_FormulaEnergy_Domain_Model_Formulas();
	}

	public function tearDown() {
		unset($this->fixture);
	}
	
	
	/**
	 * @test
	 */
	public function getEnergyformulaReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setEnergyformulaForStringSetsEnergyformula() { 
		$this->fixture->setEnergyformula('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getEnergyformula()
		);
	}
	
	/**
	 * @test
	 */
	public function getGenderReturnsInitialValueForBoolean() { 
		$this->assertSame(
			TRUE,
			$this->fixture->getGender()
		);
	}

	/**
	 * @test
	 */
	public function setGenderForBooleanSetsGender() { 
		$this->fixture->setGender(TRUE);

		$this->assertSame(
			TRUE,
			$this->fixture->getGender()
		);
	}
	
	/**
	 * @test
	 */
	public function getFirstnameReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setFirstnameForStringSetsFirstname() { 
		$this->fixture->setFirstname('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getFirstname()
		);
	}
	
	/**
	 * @test
	 */
	public function getLastnameReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setLastnameForStringSetsLastname() { 
		$this->fixture->setLastname('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getLastname()
		);
	}
	
	/**
	 * @test
	 */
	public function getCompanynameReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setCompanynameForStringSetsCompanyname() { 
		$this->fixture->setCompanyname('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getCompanyname()
		);
	}
	
	/**
	 * @test
	 */
	public function getStreetnumberReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setStreetnumberForStringSetsStreetnumber() { 
		$this->fixture->setStreetnumber('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getStreetnumber()
		);
	}
	
	/**
	 * @test
	 */
	public function getZipcityReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setZipcityForStringSetsZipcity() { 
		$this->fixture->setZipcity('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getZipcity()
		);
	}
	
	/**
	 * @test
	 */
	public function getEmailReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setEmailForStringSetsEmail() { 
		$this->fixture->setEmail('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getEmail()
		);
	}
	
	/**
	 * @test
	 */
	public function getAgbcheckedReturnsInitialValueForBoolean() { 
		$this->assertSame(
			TRUE,
			$this->fixture->getAgbchecked()
		);
	}

	/**
	 * @test
	 */
	public function setAgbcheckedForBooleanSetsAgbchecked() { 
		$this->fixture->setAgbchecked(TRUE);

		$this->assertSame(
			TRUE,
			$this->fixture->getAgbchecked()
		);
	}
	
	/**
	 * @test
	 */
	public function getHideReturnsInitialValueForBoolean() { 
		$this->assertSame(
			TRUE,
			$this->fixture->getHide()
		);
	}

	/**
	 * @test
	 */
	public function setHideForBooleanSetsHide() { 
		$this->fixture->setHide(TRUE);

		$this->assertSame(
			TRUE,
			$this->fixture->getHide()
		);
	}
	
	/**
	 * @test
	 */
	public function getCookieReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setCookieForStringSetsCookie() { 
		$this->fixture->setCookie('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getCookie()
		);
	}
	
	/**
	 * @test
	 */
	public function getIpnumberReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setIpnumberForStringSetsIpnumber() { 
		$this->fixture->setIpnumber('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getIpnumber()
		);
	}
	
	/**
	 * @test
	 */
	public function getVotesReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getVotes()
		);
	}

	/**
	 * @test
	 */
	public function setVotesForIntegerSetsVotes() { 
		$this->fixture->setVotes(12);

		$this->assertSame(
			12,
			$this->fixture->getVotes()
		);
	}
	
	/**
	 * @test
	 */
	public function getFinalvotesReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getFinalvotes()
		);
	}

	/**
	 * @test
	 */
	public function setFinalvotesForIntegerSetsFinalvotes() { 
		$this->fixture->setFinalvotes(12);

		$this->assertSame(
			12,
			$this->fixture->getFinalvotes()
		);
	}
	
}
?>