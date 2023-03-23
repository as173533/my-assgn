<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Yajra\Datatables\Datatables;
use Intervention\Image\ImageManagerStatic as Image;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use File;
use Validator;
use Carbon\Carbon;
use App\Helpers\CalenderApi;
use PDF;
/* * ************Request***************** */
use App\Http\Requests\ChangePasswordRequest;
use App\Http\Requests\EditprofileRequest;
use App\Http\Requests\AddTaskRequest;
/* * ****************Model*********************** */
use URL;
use DB;
use Artisan;
use App\Model\UserMaster;
use App\Model\Task;

class UserController extends Controller {

    public function dashboard() {
        $id = Auth::guard('frontend')->user()->id;

        $data = [];

        $data['model'] = UserMaster::find(Auth()->guard('frontend')->user()->id);
        return view('user.dashboard', $data);
    }

    public function get_profile() {
        $model = UserMaster::where('id',Auth()->guard('frontend')->user()->id)->first();
        return view('user.edit_profile', ['user' => $model]);
    }
    public function get_myAccount() {
        $model = UserMaster::find(Auth()->guard('frontend')->user()->id);
        return view('user.myAccount', ['model' => $model]);
    }

    public function post_profile(EditprofileRequest $request) {
        if ($request->ajax()) {
            $data_msg = [];
            // $model = UserMaster::find(Auth()->guard('frontend')->user()->id);
            $model = UserMaster::where('id',Auth()->guard('frontend')->user()->id)->first();
            $input = $request->all();
            if ($request->hasFile('photo')) {
                $sample_image = $request->file('photo');
                $imagename = $this->rand_string(14) . '.' . $sample_image->getClientOriginalExtension();
                $destinationPath = public_path('uploads/user');
                $sample_image->move($destinationPath, $imagename);
                $input['photo'] = $imagename;
            }
            
            
            $model->update($input);

            $model->status = '1';
            $model->save();
            
            $request->session()->flash('success_msg', 'Profile updated successfully.');
            $data_msg['msg'] = 'Profile updated successfully.';
            $data_msg['link'] = Route('my-profile');

            return response()->json($data_msg);
        }
    }

    public function reset_password(ChangePasswordRequest $request) {
        if ($request->ajax()) {
            $data_msg = [];
            $model = UserMaster::findOrFail(Auth::guard('frontend')->user()->id);
            $input = $request->all();
            $input['password'] = Hash::make($input['password']);
            $model->update($input);
            $data_msg['msg'] = 'Your password changed successfully.';
            return response()->json($data_msg);
        }
    }

    public function task() {
        $model = Task::where('user_id', Auth()->guard('frontend')->user()->id)->get();
        return view('user.user_task', ['model' => $model]);
    }
    

    public function task_datatable() {
        $quiz = Task::where('user_id', Auth()->guard('frontend')->user()->id)->orderBy('id', 'DESC')->get();
        return Datatables::of($quiz)
                        ->addIndexColumn()
                        ->editColumn('task_date', function ($model) {
                            return (!empty($model->task_date)) ? \Carbon\Carbon::parse($model->task_date)->format('d-F-Y') : 'Not Found';
                        })
                        ->editColumn('task_time', function ($model) {
                            return (!empty($model->task_time)) ? \Carbon\Carbon::parse($model->task_time)->format('h:i') : 'Not Found';
                        })
                        ->addColumn('action', function ($model) {
                            return
                                    '<a href="' . Route("user-task-edit", ['id'=>base64_encode($model->id)]) . '" class="btn btn-xs btn-primary pull-left"><i class="fa fa-edit"></i> Edit</a>' .
                                    '<a href="javascript:;" onclick="deleteTask(this);" data-href="' . Route("user-task-delete", [$model->id]) . '" class="btn btn-xs btn-primary pull-left"><i class="fa fa-trash"></i> Delete</a>';
                        })
                        
                        ->rawColumns([ 'action'])
                        ->make(true);
    }
    public function get_add_task() {
        return view('user.user_task_add');
    }
    public function post_add_task(AddTaskRequest $request) {
        if ($request->ajax()) {
            $data_msg = [];
            $id=Auth()->guard('frontend')->user()->id;
            $input = $request->all();      

            $input['user_id']=$id;
            $model = Task::create($input);
            $data_msg['status'] = '1';
            $data_msg['msg'] = 'Task added successfully.';
            $request->session()->flash('success_msg', 'Task added successfully.');
            $data_msg['link'] = Route('user-task');
            

            return response()->json($data_msg);
        }
    }
    public function user_task_update($id) {
        $data['task'] = $task = Task::where('id', '=', base64_decode($id))->first();
        
        if (!$task) {
            return redirect()->back()->with('error_msg', 'Invalid Link!');
        }
        $data['id'] = base64_decode($id);
        return view('user.user_task_edit', $data);
    }
    public function post_user_task_update(AddTaskRequest $request, $id) {
        if ($request->ajax()) {
            $data_msg = [];
            $input = $request->all();
            $model=Task::where('id',$id)->first();
            $model->update($input);
            $data_msg['msg'] = 'Task updated successfully.';
            $data_msg['link'] = Route('user-task');

            return response()->json($data_msg);
        }
    }
    public function task_delete($id) {
        $data = [];
        $model = Task::findOrFail($id);
        
        
        $model->delete();
        //--- Redirect Section     
        $data['status'] = 200;
        $data['msg'] = 'Data Deleted Successfully.';
        return response()->json($data);
        //--- Redirect Section Ends     
    }
   

    

    

}
