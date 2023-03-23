<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Validator;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use App\Mail\Thankyou;
use Craftsys\Msg91\Facade\Msg91;
use Craftsys\Msg91\Client;
use PDF;
use Illuminate\Support\Facades\Input;

/* * ************Request***************** */
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\ForgotRequest;
use App\Http\Requests\ResetRequest;
use App\Http\Requests\ContactUsRequest;

use SimpleSoftwareIO\QrCode\Facades\QrCode;

/* * ****************Model*********************** */
use URL;
use DB;
use Artisan;
use App\Model\UserMaster;
use App\Model\Task;

class SiteController extends Controller {

    public function index() {
		return redirect()->route('login');
        $data = [];
        return view('site.index', $data);
    }

    public function get_signup() {
		$data = [];
        return view('site.signup', $data);
    }

    public function post_signup(RegisterRequest $request) {
        if ($request->ajax()) {
            $data_msg = [];
            $input = $request->all();
            $input['password'] = Hash::make($input['password']);
            $input['type_id'] = '2';
            // $input['activation_token'] = $this->rand_string(20);
            $model = UserMaster::create($input);
            // $link = Route('active-account', ['id' => base64_encode($model->id), 'token' => $model->activation_token]);

            $email_setting = $this->get_email_data('user_registration', array('NAME' => $input['full_name'], 'EMAIL' => $input['email']));
            $email_data = [
                'to' => $model->email,
                'subject' => $email_setting['subject'],
                'template' => 'signup',
                'data' => ['message' => $email_setting['body']]
            ];
            $this->SendMail($email_data);
            Auth::guard('frontend')->login($model);
            $model->status = '1';
            $model->last_login = Carbon::now()->toDateTimeString();
            $model->save();

            $data_msg['link'] = Route('my-profile');
            $data_msg['u_id'] = $model->id;
            $request->session()->flash('success', 'You are successfully registered.');
            $data_msg['msg'] = "You are successfully registered.";
            return response()->json($data_msg);
        }
    }

    

    

    public function get_active_account(Request $request, $id, $token) {
        if ($id == "" && $token == "") {
            return redirect()->route('/')->with('error', 'Oops! Something went wrong in this url.');
        }
        $id = base64_decode($id);

        $model = UserMaster::where('id', $id)->where('activation_token', $token)->first();
        if (empty($model))
            return redirect()->route('/')->with('error', 'Requested url is no longer valid. Please try again.');
        else {
            Auth::guard('frontend')->login($model);
//            $model->email_verified_at = Carbon::now()->toDateTimeString();
            $model->activation_token = NULL;
            $model->status = '1';
            $model->last_login = Carbon::now()->toDateTimeString();
            $model->save();

//            Mail::to($model->email)->send(new Thankyou($model));
            return redirect()->route('login')->with('success', 'Your account has been activated successfully.');
        }
    }

    function imageUpload($image) {
        $name = $this->rand_string(15) . time() . '.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('uploads/users/');
        $image->move($destinationPath, $name);
        return $name;
    }

    public function get_login() {
        $data = [];
        return view('site.login', $data);
    }

    public function post_login(LoginRequest $request) {
        if ($request->ajax()) {
            $data_msg = [];
            $input = $request->all();
            $model = UserMaster::where('email', '=', $input['email'])->first();
            if (!empty($request->input('rememberMe'))) {
                $expire = time() + 172800;
                setcookie('email', $request->input('email'), $expire, '/');
                setcookie('password', $request->input('password'), $expire, '/');
            } else {
                $expire = time() - 172800;
                setcookie('email', '', $expire, '/');
                setcookie('password', '', $expire, '/');
            }
            Auth::guard('frontend')->login($model);
            $model->last_login = Carbon::now()->toDateTimeString();
            $model->save();
            $data_msg['link'] = Route('my-profile');

            $request->session()->flash('success', 'You are successfully logged in.');
            return response()->json($data_msg);
        }
    }

    public function get_forgot_password() {
        return view('site.forgot-one');
    }

    public function post_forgot_password(ForgotRequest $request) {
        if ($request->ajax()) {
            $data_msg = [];
            $input = $request->all();
            $input['reset_password_token'] = $this->rand_string(20);
            $model = UserMaster::where('email', '=', $input['email'])->first();
            $model->update($input);

            $link = Route('reset-password', ['id' => base64_encode($model->id), 'token' => $model->reset_password_token]);

            $email_setting = $this->get_email_data('forgot_password', array('NAME' => $model->full_name, 'EMAIL' => $input['email'], 'LINK' => $link));

            $email_data = [
                'to' => $model->email,
                'subject' => $email_setting['subject'],
                'template' => 'forgot_password',
                'data' => ['message' => $email_setting['body']]
            ];
            $this->SendMail($email_data);
            $data_msg['msg'] = 'Your reset password link has been sent to your email.';
            return response()->json($data_msg);
        }
    }

    public function get_reset_password($id, $token) {
        if ($id === "" && $token === "") {
            return redirect()->route('/')->with('error', 'oops! Something went wrong in this url.');
        }
        $id = base64_decode($id);
        $model = UserMaster::where('id', $id)->where('reset_password_token', $token)->first();
        if (empty($model))
            return redirect()->route('/')->with('error', 'oops! Something went wrong in this url.');
        else {
            Session::put('user_id', $id);
            Session::put('forgot_token', $token);
            $data = [];
            return view('site.forgot-two', $data);
        }
    }

    public function post_reset_password(ResetRequest $request) {
        if ($request->ajax()) {
            $data_msg = [];
            $input = $request->all();

            $input['password'] = Hash::make($input['password']);

            $input['reset_password_token'] = NULL;
            $user_id = Session::get('user_id');
            $model = UserMaster::findOrFail($user_id);
            $model->update($input);
            Session::remove('user_id');
            Session::remove('forgot_token');
            $data_msg['link'] = Route('/');

            $request->session()->flash('success', 'Your password changed successfully.');
            return response()->json($data_msg);
        }
    }

    

    public function logout() {
        Auth::guard('frontend')->logout();
        return redirect('/')->with('success', 'You are successfully logged out.');
    }

    

    

    public function about_us() {
        $data = [];
        return view('site.about_us', $data);
    }
    //cron
    public function reminder_set() {
        $taks=Task::get();
        $date = date("Y-m-d");
        $time = date("H:i");
        foreach($taks as $task){
            if(($task->task_date==$date) && ($task->task_time==$time)){
                $user=UserMaster::where('id',$task->user_id)->first();
                $email_setting = $this->get_email_data('user_registration', array('NAME' => $user->full_name, 'TIME' => $time));
                $email_data = [
                    'to' => $user->email,
                    'subject' => $email_setting['subject'],
                    'template' => 'signup',
                    'data' => ['message' => $email_setting['body']]
                ];
                $this->SendMail($email_data);
            }
        }
    }

    

    

   

    

    

}
