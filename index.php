<?php

#Format city must be lowercase

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
//Al parecer sin esta opcion no podemos ver la array.
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Captura la URL y la envía al navegador
//We will use it soon
$string=curl_exec($ch);

//JSON format example:
//echo $string;
//Don't work
echo '<br />';
//$info = json_decode($string);
$string=json_decode($string, true);

echo $string;
print_r($string);
echo '<br />';
echo '<br />';

$oks= $string['result'];
echo $oks;

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





// CONEXION CON API DE WAQI
$ch = curl_init();

// Establece la URL y otras opciones apropiadas
curl_setopt($ch, CURLOPT_URL, "http://api.waqi.info/feed/madrid/?token=b340407b2e6e2ffda796bfc6633093303a965ece");
curl_setopt($ch, CURLOPT_HEADER, 0);

// Captura la URL y la envía al navegador
curl_exec($ch);



//Send the mesage to Telegram


$text='texto de prueba';

$request_params= [
    'chat_id'=> $user_id,
    'text'=> $text
];

$request_url='https://api.telegram.org/'.$token.'/sendMessage?'. http_build_query($request_params);

file_get_contents($request_url);
?>
