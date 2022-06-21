<?php


       $nombre = $_POST['txtNombre'];
        $email = $_POST['txtEmail'];
        $sugerencia = $_POST['txtSugerencia'];

    

        $msg = "
        Sugerencia recibida de $nombre

        Los siguientes datos:
        Nombre: $nombre
        E-mail: $email

        Y una Sugerencia:
        $sugerencia";



            $apiToken = "5254222351:AAFRa5pqsrVwXayOmajaJB54B-G2ePYgn-I";

            $data = [
                'chat_id' => '@yarjaj',
                'text' => $msg
            ];

            $response = getSslPage("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );



function getSSLPage($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE); 
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE); 
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_REFERER, $url); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); 
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}

?>
<?php
header("Location: ../sugerencia.php");
?>