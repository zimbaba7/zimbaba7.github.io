<?php
// Query params are:  

require_once dirname(__FILE__) . '/kclient.php';
$client = new KClient('https://theeducationhub.info/api.php?', 'wCfQvrCM4nbCbrGb');
$client->sendAllParams();       // to send all params from page query
$client->forceRedirectOffer();       // redirect to offer if an offer is chosen
// $client->param('sub_id_5', '123'); // you can send any params
// $client->keyword('PASTE_KEYWORD');  // send custom keyword
// $client->currentPageAsReferrer(); // to send current page URL as click referrer
// $client->disableSessions(); // to disable using session cookie (without this cookie restoreFromSession wouldn't work)
// $client->debug();              // to enable debug mode and show the errors
// $client->execute();             // request to api, show the output and continue
$client->executeAndBreak();     // to stop page execution if there is redirect or some output
?>
<!DOCTYPE html>
<html lang="ru-RU">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Детский кинетический песок — Веселые материалы для детей</title>
</head>
</body>
</html>
