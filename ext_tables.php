<?php
if (!defined ('TYPO3_MODE')){
	die ('Access denied.');
}


Tx_Extbase_Utility_Extension::registerPlugin ($_EXTKEY, 'Pi1', 'Formula energy' );
t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'FormulaEnergy');


t3lib_extMgm::addLLrefForTCAdescr('tx_formulaenergy_domain_model_formulas', 'EXT:formula_energy/Resources/Private/Language/locallang_csh_tx_formulaenergy_domain_model_formulas.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_formulaenergy_domain_model_formulas');
$TCA['tx_formulaenergy_domain_model_formulas'] = array(
	'ctrl' => array(
		'title'				=> 'LLL:EXT:formula_energy/Resources/Private/Language/locallang_db.xml:tx_formulaenergy_domain_model_formulas',
		'label' 			=> 'energyformula',
		'tstamp' 			=> 'tstamp',
		'crdate' 			=> 'crdate',
		'dividers2tabs' => true,
		'versioningWS' 		=> 2,
		'versioning_followPages'	=> TRUE,
		'origUid' 			=> 't3_origuid',
		'languageField' 	=> 'sys_language_uid',
		'transOrigPointerField' 	=> 'l10n_parent',
		'transOrigDiffSourceField' 	=> 'l10n_diffsource',
		'delete' 			=> 'deleted',
		'enablecolumns' 	=> array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
			),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Formulas.php',
		'iconfile' 			=> t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_formulaenergy_domain_model_formulas.gif'
	),
);

t3lib_extMgm::addLLrefForTCAdescr('tx_formulaenergy_domain_model_usercheck', 'EXT:formula_energy/Resources/Private/Language/locallang_csh_tx_formulaenergy_domain_model_usercheck.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_formulaenergy_domain_model_usercheck');
$TCA['tx_formulaenergy_domain_model_usercheck'] = array(
	'ctrl' => array(
		'title'				=> 'LLL:EXT:formula_energy/Resources/Private/Language/locallang_db.xml:tx_formulaenergy_domain_model_usercheck',
		'label' 			=> 'ipnumber',
		'tstamp' 			=> 'tstamp',
		'crdate' 			=> 'crdate',
		'dividers2tabs' => true,
		'versioningWS' 		=> 2,
		'versioning_followPages'	=> TRUE,
		'origUid' 			=> 't3_origuid',
		'languageField' 	=> 'sys_language_uid',
		'transOrigPointerField' 	=> 'l10n_parent',
		'transOrigDiffSourceField' 	=> 'l10n_diffsource',
		'delete' 			=> 'deleted',
		'enablecolumns' 	=> array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
			),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Usercheck.php',
		'iconfile' 			=> t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_formulaenergy_domain_model_usercheck.gif'
	),
);


$extensionName = t3lib_div::underscoredToUpperCamelCase($_EXTKEY);
$pluginSignature = strtolower($extensionName) . '_pi1';

$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$pluginSignature] = 'layout,select_key,recursive';
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
t3lib_extMgm::addPiFlexFormValue($pluginSignature, 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/flexform.xml');
?>