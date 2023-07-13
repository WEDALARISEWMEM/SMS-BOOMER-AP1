<?php
include('../../server/authcontrol.php');

Bim($_POST['phone']); /*CODER BY KRON1K*/
/*CODER BY KRON1K*/
function Bim($phone) {
    try {
        $bim = curl_init();
        curl_setopt($bim, CURLOPT_URL, "https://bim.veesk.net:443/service/v1.0/account/login");
        curl_setopt($bim, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($bim, CURLOPT_POST, 1);
        $json_data = array(
            "phone" => $phone
        );
        $json_encoded_data = json_encode($json_data);
        curl_setopt($bim, CURLOPT_POSTFIELDS, $json_encoded_data);
        curl_setopt($bim, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        $response = curl_exec($bim);
        $http_status = curl_getinfo($bim, CURLINFO_HTTP_CODE);
        curl_close($bim);

        if ($http_status == 200) {
            echo "Başarılı! bim\n";
        } else {
            throw new Exception();
        }
    } catch (Exception $e) {
        echo "Başarısız! bim\n";
    }
}  /*CODER BY KRON1K*/

/* not: KENDİNİZE GÖRE AYARLARSINIZ ATTIM BURAYA Bİ APİ  OLAN KULLANMAK İSTEYEN KULLANSIN Pythondan php curl ile yaptım kafama eserse daha atarım izinsiz paylaşılması yasaktır 3-5 çapulcuya prim dahi vermicem apileri yokmuş alsınlar kullansınlar ;)

Farkıyla ;)*/
