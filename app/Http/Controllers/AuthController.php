<?php

namespace App\Http\Controllers;

use App\Result;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Exception\RequestException;
use Revolution\Google\Sheets\Facades\Sheets;

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
            // 1 is menang
            $result = new Result();
            $result->user_id = Auth::user()->id;
            $result->result = 1;
            $result->save();
            $notOne=1;
        }else{
            
            $result = new Result();
            $result->user_id = Auth::user()->id;
            $result->result = 0;
            $result->save();
            $notOne=0;
        }
        $tark = $result->result == 1 ? 'Menang' : 'Kalah';
        $date = date('d-m-Y h:i', strtotime($result->created_at));
        $append = [
            $result->user->username,
            $result->user->email,
            $tark,
            $date,
        ];

        Sheets::spreadsheet(config('sheet.post_spreadsheet_id'))
              ->sheet(config('sheet.post_sheet_id'))
              ->range('A1')
              ->append([$append]);
        return $notOne;
    }
    public function menang(){
        $result = Result::where('user_id', Auth::user()->id)->first();
        if($result->result == 1){
            $user = Auth::user()->username;
            return view('menang', compact('user'));
        }else{
            return view('kalah');
        }
    }
    public function reslt(){
        $result = Result::where('user_id', Auth::user()->id)->first();
        if($result->result == 1){
            $user = Auth::user()->username;
            return view('resultWin', compact('user'));
        }else{
            return view('resultLose');
        }
    }
}
