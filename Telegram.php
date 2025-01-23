<?php

class Telegram {

    const CHAT_ID =  1310798044;
    
    const TOKEN = '7885798564:AAF6Tqh6hH89Ya4y9cu8tJ_de9DMw87lTkM';

    public static function sendMessage($message)
    {
        $url = "https://api.telegram.org/bot7885798564:AAF6Tqh6hH89Ya4y9cu8tJ_de9DMw87lTkM/sendMessage?chat_id=1310798044&text=" . urlencode($message);
        $ch = curl_init();
        $optArray = array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true
        );
        curl_setopt_array($ch, $optArray);
        $result = curl_exec($ch);
        curl_close($ch);
    }

}
