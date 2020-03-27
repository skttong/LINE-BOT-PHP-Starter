<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://opend.data.go.th/get-ckan/datastore_search?resource_id=93f74e67-6f76-4b25-8f5d-b485083100b6&limit=5000",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "api-key: cwPA74U5PYxRRkZlaJNVzlhRbOKeIadw"
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
?>
