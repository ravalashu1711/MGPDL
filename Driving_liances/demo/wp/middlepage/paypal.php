<?php
// var_dump($_POST);
// For test payments we want to enable the sandbox mode. If you want to put live
// payments through then this setting needs changing to `false`.
$enableSandbox = true;
// Database settings. Change these for your database configuration.
$dbConfig = [
	'host' => 'localhost',
	'username' => 'root',
	'password' => '123',
	'name' => 'license'
];
// PayPal settings. Change these to your account details and the relevant URLs
// for your site.
$paypalConfig = [
	'email' => 'mgpdlseller@gmail.com',
	'return_url' => 'http://mgpdl.local/index.php?page=success',
	'cancel_url' => 'http://mgpdl.local/index.php?page=cancel',
	'notify_url' => 'http://mgpdl.local/index.php?page=paypal'
];
$paypalUrl = $enableSandbox ? 'https://www.sandbox.paypal.com/cgi-bin/webscr' : 'https://www.paypal.com/cgi-bin/webscr';
// Product being purchased.
$itemName = $_POST['name'];
$itemAmount = $_POST['amount'];
// Include Functions
require 'functions.php';
// Check if paypal request or response
if (!isset($_POST["txn_id"]) && !isset($_POST["txn_type"])) {
	// Grab the post data so that we can set up the query string for PayPal.
	// Ideally we'd use a whitelist here to check nothing is being injected into
	// our post data.
	$data = [];
	foreach ($_POST as $key => $value) {
		$data[$key] = stripslashes($value);
	}
	// Set the PayPal account.
	$data['business'] = $paypalConfig['email'];
	$data['password'] = $paypalConfig['password'];
	// Set the PayPal return addresses.
	$data['return'] = stripslashes($paypalConfig['return_url']);
	$data['cancel_return'] = stripslashes($paypalConfig['cancel_url']);
	$data['notify_url'] = stripslashes($paypalConfig['notify_url']);
	// Set the details about the product being purchased, including the amount
	// and currency so that these aren't overridden by the form data.
	$data['item_name'] = $itemName;
	$data['amount'] = $itemAmount;
	$data['currency_code'] = 'INR';
	// Add any custom fields for the query string.
	//$data['custom'] = USERID;
	// Build the query string from the data.
	$queryString = http_build_query($data);
	// var_dump($queryString);
	// Redirect to paypal IPN
	header('location:' . $paypalUrl . '?' . $queryString);
	exit();
} 
else {
	// Handle the PayPal response.
	// Create a connection to the database.
	$db = new PDO('mysql:host=localhost,dbname=license','root','123');
	// Assign posted variables to local data array.
	$data = [
		'item_name' => $_POST['item_name'],
		'item_number' => $_POST['item_number'],
		'payment_status' => $_POST['payment_status'],
		'payment_amount' => $_POST['mc_gross'],
		'payment_currency' => $_POST['mc_currency'],
		'txn_id' => $_POST['txn_id'],
		'receiver_email' => $_POST['receiver_email'],
		'payer_email' => $_POST['payer_email'],
		'custom' => $_POST['custom'],
	];
	if (verifyTransaction($_POST) && checkTxnid($data['txn_id'])) {
		if (addPayment($data) !== false) {
			// Payment successfully added.
		}
	}
		
}