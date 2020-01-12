<?php
$city='berlin';
#Format city must be lowercase
#
echo "This is Telegram Polution BOT";

#Example QUERY
#
#We must change madrid for $city variable for get the data.
#
#http://api.waqi.info/feed/madrid/?token=b340407b2e6e2ffda796bfc6633093303a965ece
#
// Crea un nuevo recurso cURL
$ch = curl_init();

// Establece la URL y otras opciones apropiadas
curl_setopt($ch, CURLOPT_URL, "http://api.waqi.info/feed/madrid/?token=b340407b2e6e2ffda796bfc6633093303a965ece");
curl_setopt($ch, CURLOPT_HEADER, 0);

// Captura la URL y la envía al navegador
curl_exec($ch);

die (curl_exec($ch));
?>
