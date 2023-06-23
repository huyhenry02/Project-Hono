<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class AuthClientController extends Controller
{
    public function show_email_resetPass()
    {
        return view('hono.login.verifiedEmail');
    }
    public function show_login()
    {
        return view('hono.login.index');
    }
    public function show_register()
    {
        return view('hono.login.register');
    }
    public function postRegister(Request $request)
    {
        $request->validate(
            [
                'password'=>'required',
                'email'=>'required'
            ],[
                'password.required'=>'Vui lòng nhập mật khẩu',
                'email.required'=>'Vui lòng nhập địa chỉ email'
        ]);
        $data = $request->only('name','email','password');
        $password_h = bcrypt($request->password);
        $user = new User();
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = $password_h;
        $user->save();
        $accessToken = $user->createToken('authToken')->accessToken;
        $user->password = $password_h;
        $user->token = $accessToken;
        if ($user) {
            Mail::send('hono.login.verification', compact('user'), function ($email) use ($user) {
                $email->subject('Hono - Xác nhận tài khoản');
                $email->to($user->email, $user->name);
            });
//            Session::put('success', 'Vui lòng check mail để xác nhận tài khoản');
            return redirect()->route('login_client.index')->with('success_Register', 'Vui lòng check mail để xác nhận tài khoản');
        }
//        Session::put('false', 'Đăng ký không thành công');
        return redirect()->back()->with('false_Register', 'Đăng ký không thành công');
    }
    public function actived(User $user,$token)
    {
        if($user->token === $token){
        $user->update(['status'=>1,'token'=>null]);
            Session::put('success_actived', 'tài khoản đã được xác nhận ');
        return redirect()->route('login_client.index');
        }else{
//            Session::put('false_actived', 'tài khoản chưa được xác nhận ');
            return redirect()->route('login_client.index')->with('false_actived', 'tài khoản chưa được xác nhận ');
        }
    }
    public function postLogin(Request $request)
    {
        $credentials = [
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ];
        $user =  Auth::attempt($credentials);
        if ($user) {
            $accessToken = Auth::user()->createToken('token')->token;
//            Session::put('success_Login', 'Đăng nhập thành công.');
//            dd(Session::has('success'));
           return view('hono.account.index')->with('success_Login', 'Đăng nhập thành công.');
        } else {

            return redirect()->back()->with('false_Login', 'Đăng nhập thất bại.');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login_client.index');
    }
    public function forgotPassword (User $user,Request $request)
    {
        $request->validate([
           'email'=>'required|exists:users',
        ],[
            'email.required'=>'Vui lòng nhập địa chỉ Email',
            'email.exists'=>'Email không tồn tại trong hệ thống',
        ]);
        $token = \Illuminate\Support\Str::random(10);
        $user = User::where('email',$request->email)->first();
        $user->update(['token'=>$token]);

            Mail::send('hono.login.confirmPassEmail', compact('user'), function ($email) use ($user) {
                $email->subject('Hono - Lấy lại mật khẩu');
                $email->to($user->email, $user->name);
            });
//        Session::put('success', 'Vui lòng check mail để thực hiện thay đổi ');
            return redirect()->route('login_client.index')->with('success_forgotPassword', 'Vui lòng check mail để thực hiện thay đổi ');
    }
    public function show_reset_pass(User $user,$token)
    {
        if($user->token === $token){
            return view('hono.login.change_pass',['user' => $user]);
        }else{
           return abort(404);
        }
    }
    public function resetPassword(Request $request, User $user,$token)
    {
        $request->validate(
            ['password'=>'required',]);
        $password_h = bcrypt($request->password);
        $user->update(['password'=>$password_h,'token'=>null]);
//        Session::put('success_resetPassword', 'Bạn đã đổi mật khẩu thành công');
        return \redirect()->route('login_client.index')->with('success_resetPassword','Bạn đã đổi mật khẩu thành công');
    }
    


















    public function verifyEmail(Request $request)
    {
        $user = User::find($request->id);
        if ($user && $user->makeEmailAsVerified())
        {
            return redirect()->route('change_pass.index')->with('success','Đã gửi email thành công');
        }
        return redirect()->route('email_resetPass.index')->with('error','Gửi Email không thành công');
    }

}
