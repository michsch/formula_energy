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
 * Controller for the Usercheck object
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */

class Tx_FormulaEnergy_Controller_UsercheckController extends Tx_Extbase_MVC_Controller_ActionController {
	
	/**
	 * usercheckRepository
	 * 
	 * @var Tx_FormulaEnergy_Domain_Repository_UsercheckRepository
	 */
	protected $usercheckRepository;

	/**
	 * Initializes the current action
	 *
	 * @return void
	 */
	protected function initializeAction() {
		$this->usercheckRepository = t3lib_div::makeInstance('Tx_FormulaEnergy_Domain_Repository_UsercheckRepository');
	}
	
	
		
	/**
	 * Displays all Userchecks
	 *
	 * @return string The rendered list view
	 */
	public function listAction() {
		$userchecks = $this->usercheckRepository->findAll();
		
		$this->view->assign('userchecks', $userchecks);
	}
	
		
	/**
	 * Displays a single Usercheck
	 *
	 * @param Tx_FormulaEnergy_Domain_Model_Usercheck $usercheck the Usercheck to display
	 * @return string The rendered view
	 */
	public function showAction(Tx_FormulaEnergy_Domain_Model_Usercheck $usercheck) {
		$this->view->assign('usercheck', $usercheck);
	}
	
		
	/**
	 * Creates a new Usercheck and forwards to the list action.
	 *
	 * @param Tx_FormulaEnergy_Domain_Model_Usercheck $newUsercheck a fresh Usercheck object which has not yet been added to the repository
	 * @return string An HTML form for creating a new Usercheck
	 * @dontvalidate $newUsercheck
	 */
	public function newAction(Tx_FormulaEnergy_Domain_Model_Usercheck $newUsercheck = NULL) {
		$this->view->assign('newUsercheck', $newUsercheck);
	}
	
		
	/**
	 * Creates a new Usercheck and forwards to the list action.
	 *
	 * @param Tx_FormulaEnergy_Domain_Model_Usercheck $newUsercheck a fresh Usercheck object which has not yet been added to the repository
	 * @return void
	 */
	public function createAction(Tx_FormulaEnergy_Domain_Model_Usercheck $newUsercheck) {
		$this->usercheckRepository->add($newUsercheck);
		$this->flashMessageContainer->add('Your new Usercheck was created.');
		
		$this->redirect('list');
	}
	
		
	
	/**
	 * Updates an existing Usercheck and forwards to the index action afterwards.
	 *
	 * @param Tx_FormulaEnergy_Domain_Model_Usercheck $usercheck the Usercheck to display
	 * @return string A form to edit a Usercheck 
	 */
	public function editAction(Tx_FormulaEnergy_Domain_Model_Usercheck $usercheck) {
		$this->view->assign('usercheck', $usercheck);
	}
	
		

	/**
	 * Updates an existing Usercheck and forwards to the list action afterwards.
	 *
	 * @param Tx_FormulaEnergy_Domain_Model_Usercheck $usercheck the Usercheck to display
	 */
	public function updateAction(Tx_FormulaEnergy_Domain_Model_Usercheck $usercheck) {
		$this->usercheckRepository->update($usercheck);
		$this->flashMessageContainer->add('Your Usercheck was updated.');
		$this->redirect('list');
	}
	
		
			/**
	 * Deletes an existing Usercheck
	 *
	 * @param Tx_FormulaEnergy_Domain_Model_Usercheck $usercheck the Usercheck to be deleted
	 * @return void
	 */
	public function deleteAction(Tx_FormulaEnergy_Domain_Model_Usercheck $usercheck) {
		$this->usercheckRepository->remove($usercheck);
		$this->flashMessageContainer->add('Your Usercheck was removed.');
		$this->redirect('list');
	}
	

}
?>