<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$TCA['tx_formulaenergy_domain_model_usercheck'] = array(
	'ctrl' => $TCA['tx_formulaenergy_domain_model_usercheck']['ctrl'],
	'interface' => array(
		'showRecordFieldList'	=> 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, ipnumber, cookie',
	),
	'types' => array(
		'1' => array('showitem'	=> 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, ipnumber, cookie,--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.access,starttime, endtime'),
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
				'foreign_table' => 'tx_formulaenergy_domain_model_usercheck',
				'foreign_table_where' => 'AND tx_formulaenergy_domain_model_usercheck.uid=###REC_FIELD_l10n_parent### AND tx_formulaenergy_domain_model_usercheck.sys_language_uid IN (-1,0)',
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
		'hidden' => array(
			'exclude'	=> 1,
			'label'		=> 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config'	=> array(
				'type'	=> 'check',
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
		'ipnumber' => array(
			'exclude'	=> 1,
			'label'		=> 'LLL:EXT:formula_energy/Resources/Private/Language/locallang_db.xml:tx_formulaenergy_domain_model_usercheck.ipnumber',
			'config'	=> array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'cookie' => array(
			'exclude'	=> 1,
			'label'		=> 'LLL:EXT:formula_energy/Resources/Private/Language/locallang_db.xml:tx_formulaenergy_domain_model_usercheck.cookie',
			'config'	=> array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
	),
);
?>