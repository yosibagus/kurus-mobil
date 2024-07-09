<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PHPMailer\PHPMailer\PHPMailer;

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
            echo "Username / Password tidak sesuai";
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

    public function lupa()
    {
        return view('auth.lupa_password');
    }

    public function otp(Request $request)
    {

        $user = User::where('email', $request->email);
        if ($user->count() > 0) {
            $mail = new PHPMailer(true);
            try {
                //Server settings
                $mail->SMTPDebug = false;  //Enable verbose debug output
                $mail->isSMTP();   //Send using SMTP
                $mail->Host       = 'smtp.gmail.com'; //hostname/domain yang dipergunakan untuk setting smtp
                $mail->SMTPAuth   = true;  //Enable SMTP authentication
                $mail->Username   = 'bemkmunibamadura2024@gmail.com'; //SMTP username
                $mail->Password   = 'hljawxhnvrvxorhf';   //SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;   //Enable implicit TLS encryption
                $mail->Port       = 465;   //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                $nama = $user->first()->nama_lengkap;
                $tujuan = $user->first()->email;

                //Recipients
                $mail->setFrom('bemkmunibamadura2024@gmail.com', 'KURSUS BAYANGKARA 2');
                $mail->addAddress($tujuan, $nama);     //email tujuan
                #$mail->addReplyTo('emailtujuan@domainaddreply.com', 'Information'); //email tujuan add reply (bila tidak dibutuhkan bisa diberi pagar)
                #$mail->addCC('emailtujuan@domaincc.com'); // email cc (bila tidak dibutuhkan bisa diberi pagar)
                #$mail->addBCC('emailtujuan@domainbcc.com'); // email bcc (bila tidak dibutuhkan bisa diberi pagar)

                //Attachments
                #$mail->addAttachment('/var/tmp/file.tar.gz');   //Add attachments
                #$mail->addAttachment('/tmp/image.jpg', 'new.jpg');  //Optional name

                //Content
                $mail->isHTML(true);   //Set email format to HTML
                $mail->Subject = 'Kursus Mobil Bayangkara 2 - ' . $nama;

                $mail->Body    = '
                <div style="border-style:solid;border-width:thin;border-color:#dadce0;border-radius:8px;padding:40px 20px; width:70%; margin: auto;" align="center">
                    <div style="font-family:Roboto-Regular,Helvetica,Arial,sans-serif;font-size:14px;color:rgba(0,0,0,0.87);line-height:20px;padding-top:0px;text-align:left">
                        <p><b>Reset Password</b></p>
                        <p>Password Anda adalah <b>' . $user->first()->hint . '</b> silahkan login ulang. jika ada kesulitan silahkan hubungi admin (082312312313)</p>
                    </div>
                </div>
                ';

                $mail->AltBody = '';

                $mail->send();
                // echo 'Message has been sent';
                return redirect('/lupa-password')->with('success', 'Verifikasi berhasil dikirim ke email Anda');
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
        } else {
            return redirect('/lupa-password')->with('error', 'Email tidak ditemukan');
        }
    }
}
