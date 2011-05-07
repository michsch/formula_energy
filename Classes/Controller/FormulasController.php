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
 * Controller for the Formulas object
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */

class Tx_FormulaEnergy_Controller_FormulasController extends Tx_Extbase_MVC_Controller_ActionController {

	/**
	 * formulasRepository
	 *
	 * @var Tx_FormulaEnergy_Domain_Repository_FormulasRepository
	 */
	protected $formulasRepository;

	/**
	 * Initializes the current action
	 *
	 * @return void
	 */
	protected function initializeAction() {
		$this->formulasRepository = t3lib_div::makeInstance('Tx_FormulaEnergy_Domain_Repository_FormulasRepository');
	}



	/**
	 * Displays all Formulas
	 *
	 * @return string The rendered list view
	 */
	public function listAction() {
		$formulas = $this->formulasRepository->findAll();

		$this->view->assign('formulas', $formulas);
	}


	/**
	 * Displays a single Formulas
	 *
	 * @param Tx_FormulaEnergy_Domain_Model_Formulas $formulas the Formulas to display
	 * @return string The rendered view
	 */
	public function showAction(Tx_FormulaEnergy_Domain_Model_Formulas $formulas) {
		$this->view->assign('formulas', $formulas);
	}


	/**
	 * Creates a new Formulas and forwards to the list action.
	 *
	 * @param Tx_FormulaEnergy_Domain_Model_Formulas $newFormulas a fresh Formulas object which has not yet been added to the repository
	 * @return string An HTML form for creating a new Formulas
	 * @dontvalidate $newFormulas
	 */
	public function newAction(Tx_FormulaEnergy_Domain_Model_Formulas $newFormulas = NULL) {
		$this->view->assign('newFormulas', $newFormulas);
	}


	/**
	 * Creates a new Formulas and forwards to the list action.
	 *
	 * @param Tx_FormulaEnergy_Domain_Model_Formulas $newFormulas a fresh Formulas object which has not yet been added to the repository
	 * @return void
	 */
	public function createAction(Tx_FormulaEnergy_Domain_Model_Formulas $newFormulas) {
		$this->formulasRepository->add($newFormulas);
		$this->view->assign('newFormulas', $newFormulas);
	}



	/**
	 * Updates an existing Formulas and forwards to the index action afterwards.
	 *
	 * @param Tx_FormulaEnergy_Domain_Model_Formulas $formulas the Formulas to display
	 * @return string A form to edit a Formulas
	 */
	public function editAction(Tx_FormulaEnergy_Domain_Model_Formulas $formulas) {
		$this->view->assign('formulas', $formulas);
	}



	/**
	 * Updates an existing Formulas and forwards to the list action afterwards.
	 *
	 * @param Tx_FormulaEnergy_Domain_Model_Formulas $formulas the Formulas to display
	 */
	public function updateAction(Tx_FormulaEnergy_Domain_Model_Formulas $formulas) {
		$this->formulasRepository->update($formulas);
		$this->flashMessageContainer->add('Your Formulas was updated.');
		$this->redirect('list');
	}


			/**
	 * Deletes an existing Formulas
	 *
	 * @param Tx_FormulaEnergy_Domain_Model_Formulas $formulas the Formulas to be deleted
	 * @return void
	 */
	public function deleteAction(Tx_FormulaEnergy_Domain_Model_Formulas $formulas) {
		$this->formulasRepository->remove($formulas);
		$this->flashMessageContainer->add('Your Formulas was removed.');
		$this->redirect('list');
	}


}
?>