<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Exception\RequestException;

class AuthController extends Controller
{
    public function regist(){
        $client = new Client();
        $meki = $client->get('http://xclub22.pre.transsion.net/plugin.php?id=countryname&is_country=1');
        $response = $meki->getBody()->getContents();
        $data = json_decode($response,true);
        $model = $data['lists'];
        $password = '1vvRGgTNA9g27pNC';
        $plaintext = 'version =8&module=registerbyemail_offline &email=thoriqabdul.ta@gmail.com&nationality=Indonesia&city =Bali';
        encrypt($plaintext, $password);
        return view('regist', compact('model'));
    }

    public function index(){
        return view('landing');
    }

    function encrypt($plaintext, $password) {
        $method = "AES-256-CBC";
        $key = hash('sha256', $password, true);
        $iv = openssl_random_pseudo_bytes(16);
    
        $ciphertext = openssl_encrypt($plaintext, $method, $key, OPENSSL_RAW_DATA, $iv);
        $hash = hash_hmac('sha256', $ciphertext . $iv, $key, true);
    
        return $iv . $hash . $ciphertext;
    }
    
    function decrypt($ivHashCiphertext, $password) {
        $method = "AES-256-CBC";
        $iv = substr($ivHashCiphertext, 0, 16);
        $hash = substr($ivHashCiphertext, 16, 32);
        $ciphertext = substr($ivHashCiphertext, 48);
        $key = hash('sha256', $password, true);
    
        if (!hash_equals(hash_hmac('sha256', $ciphertext . $iv, $key, true), $hash)) return null;
    
        return openssl_decrypt($ciphertext, $method, $key, OPENSSL_RAW_DATA, $iv);
    }

    public function spin(){
        return view('spin');
    }

    public function kalah(Request $req){
        if($req->q%2 == 0){
            $user = Auth::user()->username;
            return view('menang', compact('user'));
        }else{
            return view('kalah');
        }
    }
    public function menang(){
        return view('menang');
    }
}
