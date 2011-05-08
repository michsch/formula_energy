<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$TCA['tx_formulaenergy_domain_model_formulas'] = array(
	'ctrl' => $TCA['tx_formulaenergy_domain_model_formulas']['ctrl'],
	'interface' => array(
		'showRecordFieldList'	=> 'sys_language_uid, l10n_parent, l10n_diffsource, hide, energyformula, gender, firstname, lastname, companyname, streetnumber, zipcity, email, agbchecked, cookie, ipnumber, votes, finalvotes',
	),
	'types' => array(
		'1' => array('showitem'	=> 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource,  energyformula, gender, firstname, lastname, companyname, streetnumber, zipcity, email,' .
				'--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.access,hide, starttime, endtime,' .
				'--div--;LLL:EXT:formula_energy/Resources/Private/Language/locallang_db.xml:tx_formulaenergy_domain_model_formulas.options, agbchecked, cookie, ipnumber, votes, finalvotes'),
	),
	'palettes' => array(
		'1' => array('showitem'	=> ''),
	),
	'columns' => array(
		'sys_language_uid' => array(
			'exclude'			=> 1,
			'label'				=> 'LLL:EXT:lang/locallang_general.php:LGL.language',
			'config'			=> array(
				'type'					=> 'select',
				'foreign_table'			=> 'sys_language',
				'foreign_table_where'	=> 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.php:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.php:LGL.default_value', 0)
				),
			),
		),
		'l10n_parent' => array(
			'displayCond'	=> 'FIELD:sys_language_uid:>:0',
			'exclude'		=> 1,
			'label'			=> 'LLL:EXT:lang/locallang_general.php:LGL.l18n_parent',
			'config'		=> array(
				'type'			=> 'select',
				'items'			=> array(
					array('', 0),
				),
				'foreign_table' => 'tx_formulaenergy_domain_model_formulas',
				'foreign_table_where' => 'AND tx_formulaenergy_domain_model_formulas.uid=###REC_FIELD_l10n_parent### AND tx_formulaenergy_domain_model_formulas.sys_language_uid IN (-1,0)',
			),
		),
		'l10n_diffsource' => array(
			'config'		=>array(
				'type'		=>'passthrough',
			),
		),
		't3ver_label' => array(
			'displayCond'	=> 'FIELD:t3ver_label:REQ:true',
			'label'			=> 'LLL:EXT:lang/locallang_general.php:LGL.versionLabel',
			'config'		=> array(
				'type'		=>'none',
				'cols'		=> 27,
			),
		),
		'starttime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.starttime',
			'config' => array(
				'type' => 'input',
				'size' => '10',
				'max' => '20',
				'eval' => 'datetime',
				'checkbox' => '0',
				'default' => '0',
			),
		),
		'endtime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.endtime',
			'config' => array(
				'type' => 'input',
				'size' => '8',
				'max' => '20',
				'eval' => 'datetime',
				'checkbox' => '0',
				'default' => '0',
				'range' => array(
					'upper' => mktime(0,0,0,12,31,date('Y')+10),
					'lower' => mktime(0,0,0,date('m')-1,date('d'),date('Y'))
				),
			),
		),
		'energyformula' => array(
			'exclude'	=> 1,
			'label'		=> 'LLL:EXT:formula_energy/Resources/Private/Language/locallang_db.xml:tx_formulaenergy_domain_model_formulas.energyformula',
			'config'	=> array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim,required'
			),
		),
		'gender' => array(
			'exclude'	=> 1,
			'label'		=> 'LLL:EXT:formula_energy/Resources/Private/Language/locallang_db.xml:tx_formulaenergy_domain_model_formulas.gender',
			'config'	=> array(
				'type' => 'radio',
				'items' => array (
					array("LLL:EXT:formula_energy/Resources/Private/Language/locallang_db.xml:tx_formulaenergy_domain_model_formulas.gender.man",0),
					array("LLL:EXT:formula_energy/Resources/Private/Language/locallang_db.xml:tx_formulaenergy_domain_model_formulas.gender.woman",1),
				),
			),
		),
		'firstname' => array(
			'exclude'	=> 1,
			'label'		=> 'LLL:EXT:formula_energy/Resources/Private/Language/locallang_db.xml:tx_formulaenergy_domain_model_formulas.firstname',
			'config'	=> array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'lastname' => array(
			'exclude'	=> 1,
			'label'		=> 'LLL:EXT:formula_energy/Resources/Private/Language/locallang_db.xml:tx_formulaenergy_domain_model_formulas.lastname',
			'config'	=> array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'companyname' => array(
			'exclude'	=> 1,
			'label'		=> 'LLL:EXT:formula_energy/Resources/Private/Language/locallang_db.xml:tx_formulaenergy_domain_model_formulas.companyname',
			'config'	=> array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'streetnumber' => array(
			'exclude'	=> 1,
			'label'		=> 'LLL:EXT:formula_energy/Resources/Private/Language/locallang_db.xml:tx_formulaenergy_domain_model_formulas.streetnumber',
			'config'	=> array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'zipcity' => array(
			'exclude'	=> 1,
			'label'		=> 'LLL:EXT:formula_energy/Resources/Private/Language/locallang_db.xml:tx_formulaenergy_domain_model_formulas.zipcity',
			'config'	=> array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'email' => array(
			'exclude'	=> 1,
			'label'		=> 'LLL:EXT:formula_energy/Resources/Private/Language/locallang_db.xml:tx_formulaenergy_domain_model_formulas.email',
			'config'	=> array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'agbchecked' => array(
			'exclude'	=> 1,
			'label'		=> 'LLL:EXT:formula_energy/Resources/Private/Language/locallang_db.xml:tx_formulaenergy_domain_model_formulas.agbchecked',
			'config'	=> array(
				'type' => 'check',
				'default' => 0
			),
		),
		'hide' => array(
			'exclude'	=> 1,
			'label'		=> 'LLL:EXT:formula_energy/Resources/Private/Language/locallang_db.xml:tx_formulaenergy_domain_model_formulas.hide',
			'config'	=> array(
				'type' => 'check',
				'default' => 0
			),
		),
		'cookie' => array(
			'exclude'	=> 1,
			'label'		=> 'LLL:EXT:formula_energy/Resources/Private/Language/locallang_db.xml:tx_formulaenergy_domain_model_formulas.cookie',
			'config'	=> array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'ipnumber' => array(
			'exclude'	=> 1,
			'label'		=> 'LLL:EXT:formula_energy/Resources/Private/Language/locallang_db.xml:tx_formulaenergy_domain_model_formulas.ipnumber',
			'config'	=> array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'votes' => array(
			'exclude'	=> 1,
			'label'		=> 'LLL:EXT:formula_energy/Resources/Private/Language/locallang_db.xml:tx_formulaenergy_domain_model_formulas.votes',
			'config'	=> array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'finalvotes' => array(
			'exclude'	=> 1,
			'label'		=> 'LLL:EXT:formula_energy/Resources/Private/Language/locallang_db.xml:tx_formulaenergy_domain_model_formulas.finalvotes',
			'config'	=> array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
	),
);
?>