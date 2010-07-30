<?php
/**
*
* @package tracker
* @version 1.0.0
* @copyright (c) Unknown Bliss of http://unknownbliss.co.uk (Present Contributor)
* @copyright (c) Jeff Russo and evil<3 (Past Contributors)
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (!isset($status_type))
{
	global $phpbb_root_path, $phpEx;
	$status_type = include($phpbb_root_path . 'includes/tracker/tracker_status.' . $phpEx);
}

/*
* Tracker types defined below
* The three default types are
* bug, feature and issue trackers
*/

$tracker_types = array();

$tracker_types[0] = array(
	'id' 				=> 'bug',
	'title' 			=> 'BUG_TRACKER',
	'show_version' 		=> true,
	'show_component' 	=> true,
	'show_priority' 	=> true,
	'show_severity'		=> true,
	'show_environment' 	=> true,
	'status' 			=> $status_type['bugs'],
);

$tracker_types[1] = array(
	'id' 				=> 'feature',
	'title' 			=> 'FEATURE_TRACKER',
	'show_version' 		=> true,
	'show_component'	=> true,
	'show_priority' 	=> true,
	'show_severity' 	=> false,
	'show_environment' 	=> true,
	'status' 			=> $status_type['feature'],
);

$tracker_types[2] = array(
	'id' 				=> 'issue',
	'title' 			=> 'ISSUE_TRACKER',
	'show_version' 		=> true,
	'show_component' 	=> true,
	'show_priority' 	=> true,
	'show_severity' 	=> true,
	'show_environment' 	=> true,
	'status' 			=> $status_type['issue'],
);

return $tracker_types;

?>