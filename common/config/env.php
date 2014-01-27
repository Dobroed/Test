<?php
/**
 *
 * @author Antonio Ramirez <amigo.cobos@gmail.com>
 * @link http://www.ramirezcobos.com/
 * @link http://www.2amigos.us/
 * @copyright 2013 2amigOS! Consultation Group LLC
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */
return array(
   
	'modules' => array(
		'gii' => array(
			'class' => 'system.gii.GiiModule',
			'password' => 'yii',
			'ipFilters' => array('127.0.0.1','::1'),
                    'generatorPaths' => array('common.gii'),
		),
	),
	'components' => array(
//		change to suit your needs
		'db' => array(
			'connectionString' => 'mysql:host=yii.loc;dbname=yii',
			'username' => 'mysql',
			'password' => 'mysql',
			'enableProfiling' => true,
			'enableParamLogging' => true,
			'charset' => 'utf8',
		),
	),
	'params' => array(
		'yii.handleErrors'   => true,
		'yii.debug' => true,
		'yii.traceLevel' => 3,
	)
);