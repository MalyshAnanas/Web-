<?php
require_once "../vendor/autoload.php";
function redirectToHome()
{
    header('Location: /index.php');
    exit();
}
if (false === isset($_POST['email'], $_POST['category'], $_POST['title'], $_POST['description'])){
    redirectToHome();
}
$category = $_POST['category'];
$title = $_POST['title'];
$description = $_POST['description'];
$apiKey = "AIzaSyCrzpduI4hQEnEWQIbZKFCQAx_bDLlbyy8";
$clientId = "233533346381-s3l62aqopus42hgpmdrhe7i012mjcms5.apps.googleusercontent.com";
$clientSecret = "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";

$client = new Google_Client();
$client->setApplicationName("testApplicationName");
$client->setScopes([Google_Service_Sheets::SPREADSHEETS]);
$client->setAccessType("offline");
try {
    $client->setAuthConfig(__DIR__ . "/dushnilka.json");
} catch (\Google\Exception $e) {
    echo "<p>Ошибка природы</p>";
}
$client->useApplicationDefaultCredentials();
$client->addScope('https://www.googleapis.com/auth/spreadsheets');

$service = new Google_Service_Sheets($client);
$spreadsheetId = '18ADpKZk-D9HnoeD41qf8RucLDvt2M_PHORm5IQaAcMw';

$range = "Лист1";
$response = $service->spreadsheets_values->get($spreadsheetId, $range);

$body = new Google_Service_Sheets_ValueRange(['values' => [[$title, $description, $category]]]);
$options = array('valueInputOption' => 'RAW');

$service->spreadsheets_values->update($spreadsheetId, 'Лист1!A' . (sizeof($response->getValues()) + 1), $body, $options);
redirectToHome();