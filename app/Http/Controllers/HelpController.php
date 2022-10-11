<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelpController extends Controller
{
    public function sendMessage(Request $request)
    {

        // $bacot = 'bacot'; 
        // print $bacot; 
        // print $message; 
        // $message_text = "Halo Kisanak Saya Pendekar";
        $message = $request->input('message');
        $user = auth()->user()->name;
        // $message_text = $request->input('message'); 
        $message_text = "Pesan dari : " . $user . "\n\n" . 
                        "Isi Pesan : \n" . $message; 
        $secret_token = "5692744011:AAGy-UwOZPvgr8jaDjRiv_VjtkoVmid5xcE";

        $url = "https://api.telegram.org/bot" . $secret_token . "/sendMessage?parse_mode=markdown&chat_id=5291612412";
        $url = $url . "&text=" . urlencode($message_text);
        $ch = curl_init();
        $optArray = array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true
        );
        curl_setopt_array($ch, $optArray);
        $result = curl_exec($ch);
        curl_close($ch);

        print "Sukses Mengirim Pesan Ke Telegram";
    }
}
