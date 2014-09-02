<?php
/**
 * @author Marijan Šuflaj <msufflaj32@gmail.com>
 * @link http://www.php4every1.com
 */

sleep(3);

if (empty($_POST['email'])) {
	$return['error'] = true;
	$return['msg'] = 'You did not enter you email.';
}
else {
	$return['error'] = false;
	$return['msg'] = 'You\'ve entered: ' . $_POST['email'] . '.';
}

echo json_encode($return);