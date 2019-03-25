<?php
namespace App\Http\Controllers;
use App\Profile;
class ProfileController extends Controller
{
    public function index()
    {
        // ただの変数定義ですが、ここでModelにデータの処理を行わせたりします（後述）。
        $profile = '俺は';
        
        // ここでProfileビュー「profile.blade.php」を呼び出し、データ「profile」を渡している。
        return view('profile', ['profile' => $profile]);
    }

}