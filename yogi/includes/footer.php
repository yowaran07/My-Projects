 <?php

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://motivational-quotes1.p.rapidapi.com/motivation",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "POST",
	CURLOPT_POSTFIELDS => "{\r\n    \"key1\": \"value\",\r\n    \"key2\": \"value\"\r\n}",
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: motivational-quotes1.p.rapidapi.com",
		"X-RapidAPI-Key: 9ffa87fd14msh2f6bcadf6ea90a6p130a2bjsn87f67f183fb7",
		"content-type: application/json"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	// echo $response;
} 



?>
<footer class="py-1 bg-info">
      <div class="container-fluid">
        <p class="m-0 text-center text-white">Copyright &copy; Yogi <?php echo date('Y');?></p>
        <p class="m-0 text-center text-white"><?php echo $response;?></p>
      </div>
      <!-- /.container -->
    </footer>