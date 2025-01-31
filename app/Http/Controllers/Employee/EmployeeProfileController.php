<?php 
namespace App\Http\Controllers\Employee;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use App\Models\User;
use App\Models\Roll;
use Redirect;
use DB;
use DateTime;

class EmployeeProfileController extends Controller{  

    public function __construct(){

    }
 

   public function index(Request $request){

        $data['user'] = User::where('userid',emp_user_id())->first();
        $data['js_file'] = 'employee_change_password';
        $data['title'] = 'Profile';		
        return view('employee/profile',$data);
    }
    public function changePassword(Request $request){

		$request->validate([
		  
		  'current_pass' => 'required',
		  'new_pass' =>  'required',
		  'confirm_pass'=>'required|same:new_pass',
		], [
            'current_pass.required' => 'Please Enter The Email',
            'new_pass.required' => 'Please Enter The Password',
			'confirm_pass.required' => 'Please Enter The Password'
		]);
				$current_pass =encrypt_decrypt('encrypt',$request['current_pass']);
				$new_pass =$request->new_pass;
				$confirm_pass =$request->confirm_pass;

				
				$check_old_password = User::select('password')->where('userid',emp_user_id())->where('password',$current_pass);			
				
				if($check_old_password->count() !=0){
					if($new_pass == $confirm_pass){
						$updateData =[
							'password' => encrypt_decrypt('encrypt',$new_pass)		
						];

						User::where('userid',emp_user_id())->update($updateData);
						return redirect('employees/logout')->with('success', 'Password Changed Successfully');
					}else{
						return redirect()->back()->with('error', 'New Password & Confirm Password Not Matching');
						}					
					}else{
					return redirect()->back()->with('error', 'Current Password Does Not Match');
				}
				
}

    


}


?>
