<?php
$curl = curl_init('https://api.openweathermap.org/data/2.5/weather?q=Kinshasa&units=metric&appid=825f6d28048deaead717e57bd7113032'); 
curl_setopt_array($curl, [
    CURLOPT_CAINFO => __DIR__ . DIRECTORY_SEPARATOR . 'Certificat.pem',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_TIMEOUT => 5
]); 
$data = curl_exec($curl);
if ($data === false) {
    var_dump(curl_error($curl));
}else {
    if(curl_getinfo($curl, CURLINFO_HTTP_CODE) === 200) {
        $data = json_decode($data, true);
        echo 'Il fait ' . $data['main']['temp'] . '°C';
    }
}
curl_close($curl);