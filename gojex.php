<?php 
$secret = '83415d06-ec4e-11e6-a41b-6c40088ab51e';
$headers = array();
$headers[] = 'Content-Type: application/json';
$headers[] = 'X-AppVersion: 3.27.0';
$headers[] = "X-Uniqueid: ac94e5d0e7f3f".rand(111,999);
$headers[] = 'X-Location: -6.147244,106.836802';

echo "\e[92mAUTO REGISTER, KLAIM VOUCHER\n";
print "CHANNEL YOUTUBE : MONANG CHANNEL \n\n";
        ulang:
        echo "[+] Masukkan 62 untuk ID dan 1 untuk US\n";
echo "[+] Nomor: ";
        $number = trim(fgets(STDIN));
        $numbers = $number[0].$number[1];
        $numberx = $number[5];
        if($numbers == "08") { 
            $number = str_replace("08","628",$number);
        } elseif ($numberx == " ") {
            $number = preg_replace("/[^0-9]/", "",$number);
            $number = "1".$number;
        }
        $nama = nama();
        $email = strtolower(str_replace(" ", "", $nama) . mt_rand(100,999) . "@gmail.com");
        $data1 = '{"name":"' . $nama . '","email":"' . $email . '","phone":"+' . $number . '","signed_up_country":"ID"}';
        $reg = curl('https://api.gojekapi.com/v5/customers', $data1, $headers);
        $regs = json_decode($reg[0]);
        // Verif OTP
        if($regs->success == true) {
            otp:
            echo "[+] OTP : ";
            $otp = trim(fgets(STDIN));
            $data2 = '{"client_name":"gojek:cons:android","data":{"otp":"' . $otp . '","otp_token":"' . $regs->data->otp_token . '"},"client_secret":"' . $secret . '"}';
            $verif = curl('https://api.gojekapi.com/v5/customers/phone/verify', $data2, $headers);
            $verifs = json_decode($verif[0]);
            if($verifs->success == true) {
                // Claim Voucher
                $token = $verifs->data->access_token;
                $headers[] = 'Authorization: Bearer '.$token;
                $live = "tokens";
                $fopen1 = fopen($live, "a+");
                $fwrite1 = fwrite($fopen1, "TOKEN => ".$token." \n NOMOR => ".$number." \n");
                fclose($fopen1);
                echo "Token ~> ".$token." \n";
                echo " [+] Token Tersimpan di ~> ".$live." \n\n";
                
                // SANTAI19
                echo "[!] 20K + 10K\n";
                $data3 = '{"promo_code":"GOFOODSANTAI19"}';
                $claim = curl('https://api.gojekapi.com/go-promotions/v1/promotions/enrollments', $data3, $headers);
                $claims = json_decode($claim[0]); 
                if($claims->success == true) 
                        {
                                // Claim Voucher
                                $live2 = "GABDA";
                                $fopen2 = fopen($live2, "a+");
                                $fwrite2 = fwrite($fopen2, "TOKEN => ".$token." \n");
                                fclose($fopen2);
                                echo "[✓]".$claims->data->message."[•] Token Tersimpan di ~> ".$live2;
                        } 
                        else 
                            {
                                echo "[×] Gagal Claim COY !";
                                    sleep(5);
                                    echo "\n";

                                    // SANTAI11
                                        echo "[!] 15K + 10K \n";
                                        $data4 = '{"promo_code":"GOFOOD021120A"}';
                                        $claim1 = curl('https://api.gojekapi.com/go-promotions/v1/promotions/enrollments', $data4, $headers);
                                        $claims1 = json_decode($claim1[0]);
                                        if($claims1->success == true) 
                                                {
                                                        // Claim Voucher
                                                        $live3 = "GABDA11";
                                                        $fopen3 = fopen($live3, "a+");
                                                        $fwrite3 = fwrite($fopen3, "TOKEN => ".$token." \n");
                                                        fclose($fopen3);
                                                        echo"[✓]".$claims1->data->message."[•] Tersimpan di ~> ".$live3;
                                                } else 
                                                    {
                                                        echo "[×] Gagal Claim COY !";
                                                            sleep(5);
                                                            echo "\n";

                                                            // SANTAI08
                                                                echo "[!] 10K +10K  \n";
                                                                $data5 = '{"promo_code":"GOFOOD021120A"}';
                                                                $claim2 = curl('https://api.gojekapi.com/go-promotions/v1/promotions/enrollments', $data5, $headers);
                                                                $claims2 = json_decode($claim2[0]);
                                                                if($claims2->success == true) 
                                                                        {
                                                                                // Claim Voucher
                                                                                $live4 = "GABDA08";
                                                                                $fopen4 = fopen($live4, "a+");
                                                                                $fwrite4 = fwrite($fopen4, "TOKEN => ".$token." \n");
                                                                                fclose($fopen4);
                                                                                echo " [✓]".$claims2->data->message." [•] Tersimpan di ~> ".$live4;
                                                                        } else 
                                                                            {
                                                                                echo "[×] Gagal Claim COY !";
                                                                            }

                                                    }

                            }

                sleep(5);
                echo "\n";
                echo "[!] GORIDE 10K \n";
                $data6 = '{"promo_code":"COBAINGOJEK"}';
                $claim3 = curl('https://api.gojekapi.com/go-promotions/v1/promotions/enrollments', $data6, $headers);
                $claims3 = json_decode($claim3[0]);
                if($claims3->success == true)
                        {
                                echo "[✓]".$claims3->data->message;
                        } else
                            {
                                echo "[×] Gagal Claim COY !";

                            }
                sleep(5);
                echo "\n";
                echo "[+] GORIDE 10K\n";
                $data7 = '{"promo_code":"AYOCOBAGOJEK"}';
                $claim4 = curl('https://api.gojekapi.com/go-promotions/v1/promotions/enrollments', $data7, $headers);
                $claims4 = json_decode($claim4[0]);
                if($claims4->success == true)
                        {
                                echo "[✓]".$claims4->data->message;
                        } else
                            {
                                echo "[×] Gagal Claim COY !";
                            }
                    sleep(5);
                    echo "\n";
                    
                
}else
    {
        echo ("[+] OTP salah\n");
    }   

         
                } else
                     {
                        echo ("[+] Ganti Nomor COY\n");
                    }   









function request($url, $token = null, $data = null, $pin = null, $otpsetpin = null, $uuid = null)
    {

    $header[] = "Host: api.gojekapi.com";
    $header[] = "User-Agent: okhttp/3.10.0";
    $header[] = "Accept: application/json";
    $header[] = "Accept-Language: id-ID";
    $header[] = "Content-Type: application/json; charset=UTF-8";
    $header[] = "X-AppVersion: 3.30.2";
    $header[] = "X-UniqueId: ".time()."57".mt_rand(1000,9999);
    $header[] = "Connection: keep-alive";
    $header[] = "X-User-Locale: id_ID";
    $header[] = "X-Location: -6.917464,107.619122";
    $header[] = "X-Location-Accuracy: 3.0";
    if ($pin):
    $header[] = "pin: $pin";
        endif;
    if ($token):
    $header[] = "Authorization: Bearer $token";
    endif;
    if ($otpsetpin):
    $header[] = "otp: $otpsetpin";
    endif;
    if ($uuid):
    $header[] = "User-uuid: $uuid";
    endif;
    $c = curl_init("https://api.gojekapi.com".$url);
        curl_setopt($c, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($c, CURLOPT_SSL_VERIFYPEER, false);
        if ($data):
        curl_setopt($c, CURLOPT_POSTFIELDS, $data);
        curl_setopt($c, CURLOPT_POST, true);
        endif;
        curl_setopt($c, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($c, CURLOPT_HEADER, true);
        curl_setopt($c, CURLOPT_HTTPHEADER, $header);
        $response = curl_exec($c);
        $httpcode = curl_getinfo($c);
        if (!$httpcode)
            return false;
        else {
            $header = substr($response, 0, curl_getinfo($c, CURLINFO_HEADER_SIZE));
            $body   = substr($response, curl_getinfo($c, CURLINFO_HEADER_SIZE));
        }
        $json = json_decode($body, true);
        return $body;
    }

function getStr($a,$b,$c)
    {
        $a = @explode($a,$c)[1];
        return @explode($b,$a)[0];
    }

function getStr1($a,$b,$c,$d)
    {
            $a = @explode($a,$c)[$d];
            return @explode($b,$a)[0];
    }

function color($color = "default" , $text)
    {
        $arrayColor = array(
            'grey'      => '1;30',
            'red'       => '1;31',
            'green'     => '1;32',
            'yellow'    => '1;33',
            'blue'      => '1;34',
            'purple'    => '1;35',
            'nevy'      => '1;36',
            'white'     => '1;0',
        );  
        return "\033[".$arrayColor[$color]."m".$text."\033[0m";
    }

function fetch_value($str,$find_start,$find_end)
    {
        $start = @strpos($str,$find_start);
        if ($start === false) {
            return "";
        }
        $length = strlen($find_start);
        $end    = strpos(substr($str,$start +$length),$find_end);
        return trim(substr($str,$start +$length,$end));
    }

function nama()
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://ninjaname.horseridersupply.com/indonesian_name.php");
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        $ex = curl_exec($ch);
        // $rand = json_decode($rnd_get, true);
        preg_match_all('~(&bull; (.*?)<br/>&bull; )~', $ex, $name);
        return $name[2][mt_rand(0, 14) ];
    }

function curl($url, $fields = null, $headers = null)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        if ($fields !== null) {
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
        }
        if ($headers !== null) {
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        }
        $result   = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        
        return array(
            $result,
            $httpcode
        );
    } 
?>
