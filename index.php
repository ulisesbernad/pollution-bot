<?php

#Format city must be lowercase
#
echo "This is Telegram Polution BOT";


?>
<br />

<h1>API TELEGRAM</h1>
<br />

<?php

$token='bot849910385:AAHwtSA3u7e305iC54SNJryop-7qcgGj9WM';

//Getting data from Telegram
$ch = curl_init();

// Establece la URL y otras opciones apropiadas
curl_setopt($ch, CURLOPT_URL, 'https://api.telegram.org/'.$token.'/getupdates');
curl_setopt($ch, CURLOPT_HEADER, 0);

// Captura la URL y la envía al navegador
//We will use it soon
$string=curl_exec($ch);

echo '<br /><br /><br /><br /><br />';

//JSON format example:
//$string='{"ok":true,"result":[{"update_id":832768844,"message":{"message_id":36,"from":{"id":173379172,"is_bot":false,"first_name":"Fran","language_code":"es"},"chat":{"id":173379172,"first_name":"Fran","type":"private"},"date":1578999327,"text":"Madrid"}}]}';
//echo $string;
//Don't work
echo '<br />';
//$info = json_decode($string);
$info=json_decode($string, true);

print_r($info);



//print_r($info->result);

//echo $info->result[0];



//int on JSON "message" > "from" > "id"
$user_id=0;

//string city from JSON
$city='berlin';

?>


<h1>API WAQI</h1>
<br />
<?php

#Example QUERY
#
#We must change madrid for $city variable for get the data.
#
#http://api.waqi.info/feed/madrid/?token=b340407b2e6e2ffda796bfc6633093303a965ece





#
// CONEXION CON API DE WAQI
$ch = curl_init();

// Establece la URL y otras opciones apropiadas
curl_setopt($ch, CURLOPT_URL, "http://api.waqi.info/feed/madrid/?token=b340407b2e6e2ffda796bfc6633093303a965ece");
curl_setopt($ch, CURLOPT_HEADER, 0);

// Captura la URL y la envía al navegador
curl_exec($ch);



//Send the mesage to Telegram
die();

$text='texto de prueba';

$request_params= [
    'chat_id'=> $user_id,
    'text'=> $text
];

$request_url='https://api.telegram.org/'.$token.'/sendMessage?'. http_build_query($request_params);

file_get_contents($request_url);
?>
