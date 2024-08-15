<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PHPMailer\PHPMailer\PHPMailer;
use Illuminate\Support\Str;


class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login_admin');
    }

    public function login_user()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($infologin)) {
            if (Auth::user()->role == 'user') {
                return redirect('home');
            } else {
                return redirect('beranda');
            }
        } else {
            return redirect()->back()->with('error', 'Username / Password tidak sesuai');
        }
    }

    public function registrasi()
    {
        return view('auth.registrasi');
    }

    public function store(Request $request)
    {
        $data = [
            'nama_lengkap' => $request->nama_lengkap,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'password' => bcrypt($request->password),
            'hint' => $request->password,
            'role' => 'user'
        ];

        User::create($data);
        return redirect('/user');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/user');
    }

    public function lupa($role)
    {
        $data['role'] = $role;
        return view('auth.lupa_password', $data);
    }

    public function otp($role, Request $request)
    {
        $user = User::where('email', $request->email)->first();
        $token = 'wvjn!qq5zgtszQcs934E';

        if (User::where('email', $request->email)->count() > 0) {
            $random = Str::random(5);
            $target = $user->no_hp;
            $pesan = "Anda menggunakan fitur lupa password. Password anda otomatis diganti oleh sistem! silahkan login dengan:\n*Username : $user->email*\n*Password : $random*";

            User::where('email', $user->email)->update(['password' => bcrypt($random), 'hint' => $random]);

            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://api.fonnte.com/send',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => array(
                    'target' => $target,
                    'message' => $pesan,
                ),
                CURLOPT_HTTPHEADER => array(
                    "Authorization: " . $token . ""
                ),
            ));

            $response = curl_exec($curl);

            curl_close($curl);
            $data = json_decode($response);

            if ($data->status == 1) {
                return redirect('lupa-password/' . $role)->with('success', 'Verifikasi berhasil dikirim ke no Hp anda');
            } else {
                return redirect('lupa-password/' . $role)->with('error', 'Coba bererapa saat lagi');
            }
        } else {
            return redirect('lupa-password/' . $role)->with('error', 'Email tidak ditemukan');
        }
    }
}
