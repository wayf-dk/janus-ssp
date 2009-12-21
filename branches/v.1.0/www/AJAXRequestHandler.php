<?php

$session = SimpleSAML_Session::getInstance();

if (!$session->isValid($authsource)) {
	echo json_encode(array("status" => "error_no_session"));
	die();
}
	
if(isset($_POST)) {
	//Handle requests
	
	$result = array();
	if(!isset($_POST['func'])) {
		$result['status'] = 'error_no_func';
	} else {
		// TO-DO do some stuff
		$function_name = $_POST['func'];
		$params = $_POST;

		// Make function call
		$return = $function_name($params);

		// Did function return a result
		if($return) {
			if(is_array($return)) {
				$result = array_merge($result, $return);
			}
			$result['status'] = 'success';
		} else {
			$result['status'] = 'error_func_call';
		}

	}

	// Send back result	
	echo json_encode($result);
} else if(isset($_GET)) {
	// Handle GET requests
}





function deleteUser($params) {
	if(!isset($params['uid'])) {
		return FALSE;
	}

	$config = SimpleSAML_Configuration::getInstance();
	$janus_config = SimpleSAML_Configuration::getConfig('module_janus.php');

	$uid = $params['uid'];

	$user = new sspmod_janus_User($janus_config->getValue('store'));
	$user->setUid($uid);
	$user->load(sspmod_janus_User::UID_LOAD);
	$user->setActive('no');
	$user->save();

	return TRUE;
}

function getEntityUsers($params) {
	if(!isset($params['entityid'])) {
		return FALSE;
	}

	$entityid = $params['entityid'];

	$util = new sspmod_janus_AdminUtil();
	$users = $util->hasAccess($entityid);

	$return = array();
	foreach($users AS $user) {
		$return[] = array('optionValue' => $user['uid'], 'optionDisplay' => $user['email']);
	}
	return array('data' => $return);
}

function getNonEntityUsers($params) {
	if(!isset($params['entityid'])) {
		return FALSE;
	}

	$entityid = $params['entityid'];

	$util = new sspmod_janus_AdminUtil();
	$users = $util->hasNoAccess($entityid);

	$return = array();
	foreach($users AS $user) {
		$return[] = array('optionValue' => $user['uid'], 'optionDisplay' => $user['email']);
	}
	return array('data' => $return);
}

function removeUserFromEntity($params) {
	if(!isset($params['entityid']) || !isset($params['uid'])) {
		return FALSE;
	}

	$entityid = $params['entityid'];
	$uid = $params['uid'];

	$util = new sspmod_janus_AdminUtil();
	if(!$util->removeUserFromEntity($entityid, $uid)) {
		return FALSE;
	}
	return array('entityid' => $entityid, 'uid' => $uid);
}

function addUserToEntity($params) {
	if(!isset($params['entityid']) || !isset($params['uid'])) {
		return FALSE;
	}

	$entityid = $params['entityid'];
	$uid = $params['uid'];

	$util = new sspmod_janus_AdminUtil();
	if(!$email = $util->addUserToEntity($entityid, $uid)) {
		return FALSE;
	}
	return array('entityid' => $entityid, 'uid' => $uid, 'email' => $email);
}
?>