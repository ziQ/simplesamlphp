<?php
/* 
 * The configuration of simpleSAMLphp statistics package
 */

$config = array (

	'protected' => FALSE,
	'auth' => 'admin',
	'useridattr' => 'eduPersonPrincipalName',
	
	'default' => 'sso',
	
	'allowedUsers' => array(
		'admin'
	),
	
	'default' => 'sso_hoursweek',
	
	'useridattr' => 'eduPersonPrincipalName',
	'allowedUsers' => array('andreas@uninett.no', 'ola.normann@sp.example.org'),

	'statdir' => '/tmp/stats/',
	'inputfile' => '/var/log/simplesamlphp.stat',
	'offset' => 60*60*2 + 60*60*24*3, // Two hours offset to match epoch and norwegian winter time.
	
	'datestart' => 1,
	'datelength' => 15,
	'offsetspan' => 21,
	
	// Dimensions on graph from Google Charts in pixels...
	'dimension.x' => 800,
	'dimension.y' => 350,
	
	/*
	 * Do you want to generate statistics using the cron module? If so, specify which cron tag to use.
	 * Examples: daily, weekly
	 * To not run statistics in cron, set value to 
	 *     'cron_tag' => NULL,
	 */
	'cron_tag' => 'daily',

	/*
	 * Set max running time for this script. This is also controlle by max_execution_time in php.ini
	 * and is defalut set to 30 sec. Your web server can have other timeout configurations that may
	 * also interrupt PHP execution. Apache has a Timeout directive and IIS has a
	 * CGI timeout function. Both default to 300 seconds.
	 */
	'time_limit' => 300,
	
	'timeres' => array(
		'day' => array(
			'name' => 'Day',
			'slot'		=> 60*15,			// Slots of 15 minutes
			'fileslot'	=> 60*60*24,		// One day (24 hours) file slots
			'axislabelint' => 6*4,			// Number of slots per label. 4 per hour *6 = 6 hours 
			'dateformat-period'	=> 'j. M', 			//  4. Mars
			'dateformat-intra'	=> 'j. M H:i', 		//  4. Mars 12:30	
		),
		'week' => array(
			'name' => 'Week',
			'slot'		=> 60*60,			// Slots of one hour
			'fileslot'	=> 60*60*24*7,		// 7 days of data in each file
			'axislabelint' => 24,			// Number of slots per label. 24 is one each day
			'dateformat-period'	=> 'j. M', 			//  4. Mars
			'dateformat-intra'	=> 'j. M H:i', 		//  4. Mars 12:30
		),
		'month' => array(
			'name' => 'Month',
			'slot'		=> 60*60*24,		// Slots of one day
			'fileslot'	=> 60*60*24*30,		// 30 days of data in each file
			'axislabelint' => 7,			// Number of slots per label. 7 days => 1 week
			'dateformat-period'	=> 'j. M Y H:i', 	//  4. Mars 12:30
			'dateformat-intra'	=> 'j. M', 			//  4. Mars
		),
		'monthaligned' => array(
			'name' => 'AlignedMonth',
			'slot'		=> 60*60*24,		// Slots of one day
			'fileslot'	=> NULL,		// 30 days of data in each file
			'customDateHandler' => 'month',
			'axislabelint' => 7,			// Number of slots per label. 7 days => 1 week
			'dateformat-period'	=> 'j. M Y H:i', 	//  4. Mars 12:30
			'dateformat-intra'	=> 'j. M', 			//  4. Mars
		),
		
		'days180' => array(
			'name' => '180 days',
			'slot'		=> 60*60*24,		// Slots of 1 day (24 hours)
			'fileslot'	=> 60*60*24*180,	// 80 days of data in each file
			'axislabelint' => 30,			// Number of slots per label. 7 days => 1 week
			'dateformat-period'	=> 'j. M', 		//  4. Mars
			'dateformat-intra'	=> 'j. M', 		//  4. Mars
		),
	),
	
	'time_limit' => 300,
	
	'timeres' => array(
		'day' => array(
			'name' => 'Day',
			'slot'		=> 60*15,			// Slots of 15 minutes
			'fileslot'	=> 60*60*24,		// One day (24 hours) file slots
			'axislabelint' => 6*4,			// Number of slots per label. 4 per hour *6 = 6 hours 
			'dateformat-period'	=> 'j. M', 			//  4. Mars
			'dateformat-intra'	=> 'j. M H:i', 		//  4. Mars 12:30	
		),
		'week' => array(
			'name' => 'Week',
			'slot'		=> 60*60,			// Slots of one hour
			'fileslot'	=> 60*60*24*7,		// 7 days of data in each file
			'axislabelint' => 24,			// Number of slots per label. 24 is one each day
			'dateformat-period'	=> 'j. M', 			//  4. Mars
			'dateformat-intra'	=> 'j. M H:i', 		//  4. Mars 12:30
		),
		'month' => array(
			'name' => 'Month',
			'slot'		=> 60*60*24,		// Slots of one day
			'fileslot'	=> 60*60*24*30,		// 30 days of data in each file
			'axislabelint' => 7,			// Number of slots per label. 7 days => 1 week
			'dateformat-period'	=> 'j. M Y H:i', 	//  4. Mars 12:30
			'dateformat-intra'	=> 'j. M', 			//  4. Mars
		),
		'monthaligned' => array(
			'name' => 'AlignedMonth',
			'slot'		=> 60*60*24,		// Slots of one day
			'fileslot'	=> NULL,		// 30 days of data in each file
			'customDateHandler' => 'month',
			'axislabelint' => 7,			// Number of slots per label. 7 days => 1 week
			'dateformat-period'	=> 'j. M Y H:i', 	//  4. Mars 12:30
			'dateformat-intra'	=> 'j. M', 			//  4. Mars
		),
		
		'days180' => array(
			'name' => '180 days',
			'slot'		=> 60*60*24,		// Slots of 1 day (24 hours)
			'fileslot'	=> 60*60*24*180,	// 80 days of data in each file
			'axislabelint' => 30,			// Number of slots per label. 7 days => 1 week
			'dateformat-period'	=> 'j. M', 		//  4. Mars
			'dateformat-intra'	=> 'j. M', 		//  4. Mars
		),
	),
	'statrules' => array(
// 		'sloratio' => array(
// 			'name' 		=> 'SSO to SLO ratio',
// 			'descr'		=> 'ratio',
// 		
// 			'type' => 'ratio',
// 			
// 			'action' 	=> 'saml20-idp-SSO',
// 			'col'		=> 6,				// Service Provider EntityID
// 			'fieldPresentation' => array(
// 				'class' => 'statistics:Entity',
// 				'config' => 'saml20-sp-remote',
// 			),
// 		),
		'sso' => array(
			'name' 		=> 'SSO to service',
			'descr'		=> 'The number of logins at a Service Provider.',
			'action' 	=> 'saml20-idp-SSO',
			'col'		=> 6,				// Service Provider EntityID
			'fieldPresentation' => array(
				'class' => 'statistics:Entity',
				'config' => 'saml20-sp-remote',
			),
		),
		'ssofirst' => array(
			'name' 		=> 'SSO-first to service',
			'descr'		=> 'The number of logins at a Service Provider.',
			'action' 	=> 'saml20-idp-SSO-first',
			'col'		=> 6,				// Service Provider EntityID
			'fieldPresentation' => array(
				'class' => 'statistics:Entity',
				'config' => 'saml20-sp-remote',
			),
		),
		'ssoservicerealm' => array(
			'name' 		=> 'SSO to service and realm',
			'descr'		=> 'The number of logins per realm and service provider.',
			'action' 	=> 'saml20-idp-SSO',
			'col'		=> array(6,8),				// Service Provider EntityID, realm
			'fieldPresentation' => array(
				'class' => 'feide:SPandOrg',
				'config' => 'saml20-sp-remote',
			),
		),
		'ssorealm' => array(
			'name' 		=> 'SSO by realm',
			'descr'		=> 'The number of logins at a Service Provider divided into slots of one day. Each file contains data for 80 days',
			'action' 	=> 'saml20-idp-SSO',
			'col'		=> 8,				// Realm
			'fieldPresentation' => array(
				'class' => 'feide:Org',
				'config' => 'saml20-sp-remote',
			),
		),
		'slo' => array(
			'name' 		=> 'Logout',
			'descr'		=> 'The number of initated Sinlge Logout.',
			'action' 	=> 'saml20-idp-SLO',
			'col'		=> 7,				// Service Provider EntityID that initiated the logout.
			'fieldPresentation' => array(
				'class' => 'statistics:Entity',
				'config' => 'saml20-sp-remote',
			),
		),
		'consent' => array(
			'name' 		=> 'Consent',
			'descr'		=> 'Consent statistics. Everytime a user logs in to a service an entry is logged for one of three states: consent was found, consent was not found or consent storage was not available.',
			'action' 	=> 'consent',
			'col'		=> 6,
			'fieldPresentation' => array(
				'class' => 'statistics:Entity',
				'config' => 'saml20-sp-remote',
			),
		),
		'consentresponse' => array(
			'name' 		=> 'Consent response',
			'descr'		=> 'Consent response statistics. Everytime a user accepts consent, it is logged whether the user selected to remember the consent to next time.',
			'action' 	=> 'consentResponse',
			'col'		=> 6,
			'fieldPresentation' => array(
				'class' => 'statistics:Entity',
				'config' => 'saml20-sp-remote',
			),
		),
		
	),

);

