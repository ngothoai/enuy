<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
class LoginController extends Controller
{
    public function __construct()
    {
        // $this->middleware('guest');
    }
    public function getDashboard(){
         if(Auth::check()){
              return view('admin.dashboard');
         }else{
        return view('admin.login');
         }
    }
    public function postLogin(Request $request){
        $this->validate($request,
            [
                'email' => 'required',
                'password' => 'required|min:3'
            ],
            [
                'email.required' => 'Bạn chưa nhập đúng email',
                'password.required' => 'Bạn chưa nhập password',
                'password.min' => 'Password không được nhỏ hơn 3 ký tự',
            ]
            );
        if(Auth::attempt(['email' => $request->email,'password'=> $request->password])){
            return redirect('ch-admin/dashboard');
        }else{
            return redirect()->back()->with('thongbao' , 'Đăng nhập sai rồi vui lòng nhập lại!!!');
        }
    }
    public function getLogin()
    {
        return view('admin.login');
    }
    public function postRegister(Request $request){
        $this->validate($request,
            [
                'username' => 'required|min:3',
                'email' => 'required|unique:users,email|email',
                'password' => 'required|min:8',
                'password_again' => 'required|same:password',
            ],
            [
                'username.required' =>'Bạn phải nhập tên tài khoản',
                'username.min' =>'Tên tài khoản phải từ 3 ký tự trở lên',
                'email.required' =>'Bạn phải nhập email',
                'email.unique' =>'Email đã tồn tại',
                'email.email' =>'Định dạng email chưa đúng',
                'password.min' =>'Tên tài khoản phải từ 8 ký tự trở lên',
                'password.required' =>'Bạn phải nhập mật khẩu',
                'password_again.required' =>'Bạn phải nhập lại mật khẩu',
                'password_again.same' =>'Mật khẩu chưa trùng khớp',
                'option' =>'accepted'
            ]);
                $user = new User;
                $user->name = $request->username;
                $user->email = $request->email;
                $user->password= bcrypt($request->password);
                $user->save();
        return redirect()->back()->with('thongbao','Thêm tài khoản thành công');
    }
    public function getRegister()
    {
        return view('admin.register');
    }
}
