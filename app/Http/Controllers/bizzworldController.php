<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\File;
use Image;
use DB;
use Input;
use App\Item;
use Session;
use Response;
use Validator;

class bizzworldController extends Controller
{
	public function index(){
		return view('home');
	}
    public function getintouch(Request $request){
    	$validate = $this->validate($request, [
        'firstName'	=> 'required',
        'lastName' 	=> 'required',
        'email' 	=> 'required',
        'subject' 	=> 'required',
        'message' 	=> 'required',
        ]);
        Mail::send('emails.getintouch', ['name' => 'Bizz World',
            'email' => 'bwc@bizzworld.com','request' => $request],
        function ($message) {
        $message->to('avidhaus.mehroz@gmail.com')
        ->subject('Get In Touch');
        });
        return redirect('/'); 
    }
    public function applynow(Request $request){
		$validate = $this->validate($request, [
        'fullName' 		=> 'required',
        'email' 		=> 'required',
        'applingfor' 	=> 'required',
        'jobtype' 		=> 'required',
        'contactnumber' => 'required',
        'message' 		=> 'required',
        ]);
        $this->validate($request,[
        'file'=>'mimes:pdf,docx|max:5120|required',
         ]);
  		$filename;
    	$name = $request->name;
        if ($request->has('file')) {
        		if( $request->file->isValid()){
		            $number = rand(1,999);
			        $numb = $number / 7 ;
			        $extension = $request->file->extension();
		            $filename  = date('Y-m-d')."_".$numb."_".$name."_.".$extension;
		            $filename = $request->file->move(public_path('candidateresume/'),$filename);
				}
	            }else{
        	        $filename = 'no_cv.jpg'; 
    	        }
    	Mail::send('emails.applynow', ['name' => 'Bizz World',
            'email' => 'bwc@bizzworld.com','request' => $request,'filename' => $filename],
        function ($message) {
        $message->to('avidhaus.mehroz@gmail.com')
        ->subject('Candidate Apply');
        });
        return redirect('/'); 
	}
	public function message(Request $request){
		$validate = $this->validate($request, [
        'name'			=> 'required',
        'email' 		=> 'required',
        'usermessage' 	=> 'required',
        ]);
        Mail::send('emails.message', ['name' => 'Bizz World',
            'email' => 'bwc@bizzworld.com','request' => $request],
        function ($message) {
        $message->to('avidhaus.mehroz@gmail.com')
        ->subject('Message');
        });
        return redirect('/'); 
    }
	public function services(){
		return view('services');
	}
	public function faq(){
		return view('faq');
	}
	public function gallery(){
		return view('gallery');
	}
	public function logout(){
		session()->forget('id');
		session()->forget('name');
		session()->forget('email');
	 	return view('admin.login');
	}
	public function login(){
		return view('admin.login');
	}
	public function adminlogin(Request $request){
    if($request->username != ""){
			if($request){
			$task = DB::table('users')
			->select('users.*')
			->where('users_email','=',$request->username)
			->where('users_password','=',$request->password)
			->where('status_id','=',1)
			->first();
			if($task){
			 session()->put([
			  'id' => $task->users_id,
			  'name' => $task->users_name,
			  'email' => $task->users_email,
			  ]);
			 if(session()->get("email")){
			 	return redirect('/bizzadmin');
			}else{
				return redirect('/login')->with('message','You Are Not Allowed To Visit Portal Without login');
			}
			}else{
				return redirect('/login')->with('message','Kindly Reachout BizzWorld Admin for Credential');
			}
			}else{
				return redirect('/login')->with('message','You Are Not Allowed To Visit Portal Without login');
			}	
			}else{
				return redirect('/login')->with('message','You Are Not Allowed To Visit Portal Without login');
			}	
	}
	public function bizzadmin(){
		if(session()->get("email")){
		return view('admin.admin');
		}else{
			return redirect('/login')->with('message','You Are Not Allowed To Visit Portal Without login');
		}
	}
	public function jobpost(Request $request){
		// dd($request);
		if(session()->get("email")){
		$validate = $this->validate($request, [
        'title' 		=> 'required',
        'timing' 		=> 'required',
        'salary' 		=> 'required',
        'qualification' => 'required',
        'skills' 		=> 'required',
        'experience' 	=> 'required',
        'location' 		=> 'required',
        'description' 	=> 'required',
        ]);
        $this->validate($request,[
        'image' =>'mimes:jpeg,bmp,png,jpg|max:5120|required',
        ]);
  		$filename;
    	$name = $request->image->getClientOriginalName();
        if ($request->has('image')) {
        		if( $request->image->isValid()){
		            $number = rand(1,999);
			        $numb = $number / 7 ;
			        $filename  = date('Y-m-d')."_".$numb."_".$name;
		            $filename = $request->image->move(public_path('jobpost/'),$filename);
		            $filename  = date('Y-m-d')."_".$numb."_".$name;
				}
	            }else{
        	        $filename = 'no_image.jpg'; 
    	        }
			$adds[] = array(
				'job_title'			=> $request->title,
				'job_timing' 		=> $request->timing,
				'job_salary' 		=> $request->salary,
				'job_qualification' => $request->qualification,
				'job_skills'		=> $request->skills,
				'job_experience' 	=> $request->experience,
				'job_location' 		=> $request->location,
				'job_description' 	=> $request->description,
				'job_image' 		=> $filename,
				'status_id' 		=> 1,
				'created_by'		=> session()->get('name'),
				'created_at' 		=> date('Y-m-d h:i:s'),
			);
			DB::table('job')->insert($adds);
        	return redirect('/bizzadmin')->with('message','Success'); 
        }else{
			return redirect('/login')->with('message','You Are Not Allowed To Visit Portal Without login');
		}
	}
	public function admingallery(){
		if(session()->get("email")){
		return view('admin.admingallery');
		}else{
			return redirect('/login')->with('message','You Are Not Allowed To Visit Portal Without login');
		}
	}
	public function uploadgallery(Request $request){
		if(session()->get("email")){
        $this->validate($request,[
        'image.*'=>'mimes:jpeg,bmp,png,jpg|max:5120|required',
        'image'  => 'max:10',
         ]);
  		$index = 0 ;
        $filename = array();
  		$images = $request->image;
    	if ($request->has('image')) {
        	    foreach($images as $ima){
            		if( $request->image[$index]->isValid()){
						$name = $request->image[$index]->getClientOriginalName();
			           	$number = rand(1,999);
				        $numb = $number / 7 ;
				        $filename  = date('Y-m-d')."_".$numb."_".$name;
			            $filename = $request->image[$index]->move(public_path('gallery/'),$filename);
			            $filename  = date('Y-m-d')."_".$numb."_".$name;
				        $adds[] = array(
							'gallery_image' 	=> $filename,
							'status_id' 		=> 1,
							'created_by'		=> session()->get('name'),
							'created_at' 		=> date('Y-m-d h:i:s'),
						);
						$index++;
            		}
            	}
			DB::table('gallery')->insert($adds);
		}else{
                $filename = 'no_image.png'; 
             }
        	return redirect('/admingallery')->with('message','Success');
    	}else{
			return redirect('/login')->with('message','You Are Not Allowed To Visit Portal Without login');
		}
	}
	public function test(){
		dd(DB::connection('mysql'));
	}
	public function admincampaigndashboard(Request $request){
		$getuser = DB::table('getuserdetails')
		->select('*')
		->where('user_id','=',2)
		->where('status_id','=',1)
		->first();
		// dd($getuser);
		$getmonth = "2021-07";
		$getpreviousmonth = date("Y-m", strtotime("-1 months"));
		$getcampaigntarget = DB::table('user')
		->select('user_target')
		->where('campaign_id','=',1)
		->whereIn('role_id',[3,4])
		->where('status_id','=',1)
		->sum('user_target');
		function countDays($year, $month, $ignore) {
		    $count = 0;
		    $counter = mktime(0, 0, 0, $month, 1, $year);
		    while (date("n", $counter) == $month) {
		        if (in_array(date("w", $counter), $ignore) == false) {
		            $count++;
		        }
		        $counter = strtotime("+1 day", $counter);
		    }
		    return $count;
		}
		// $workingdays = countDays(2013, 1, array(0, 6));
		// dd($workingdays);
			// $gettargetachieved = DB::table('order')
			// ->select('order_amountquoted')
			// ->where('status_id','=',1)
			// ->where('campaign_id','=',$request->id)
			// ->whereIn('orderstatus_id',[7,8,9,10,11,17])
			// ->where('created_at','like',$getmonth.'%')
			// ->sum('order.order_amountquoted');	
			// $gettargetpaid = DB::table('order')
			// ->select('order_amountquoted')
			// ->where('status_id','=',1)
			// ->where('campaign_id','=',$request->id)
			// ->where('orderstatus_id','=',11)
			// ->where('created_at','like',$getmonth.'%')
			// ->sum('order.order_amountquoted');	
			// $getunpaidamount = $gettargetachieved-$gettargetpaid;
			// $getuser->achieved = $gettargetachieved;
			// $getuser->paid = $gettargetpaid;
			// $getuser->unpaidamount = $getunpaidamount;
			// $getuser->remaining = $getcampaigntarget - $gettargetachieved;
			// $getuser->perday = $getcampaigntarget / $workingdays;
			// $alldata = $getuser;
			// new updates 30th July 2021 start
			$getgrosssale = DB::table('order')
			->select('order_amountquoted')
			->where('status_id','=',1)
			->where('campaign_id','=',1)
			->whereIn('orderstatus_id',[7,8,9,10,11,12,17])
			->where('created_at','like',$getmonth.'%')
			->sum('order.order_amountquoted');
			$getpaidamount = DB::table('order')
			->select('order_amountquoted')
			->where('status_id','=',1)
			->where('campaign_id','=',1)
			->where('orderstatus_id','=',11)
			->where('created_at','like',$getmonth.'%')
			->sum('order.order_amountquoted');
			$getcancelamount = DB::table('order')
			->select('order_amountquoted')
			->where('status_id','=',1)
			->where('campaign_id','=',1)
			->where('orderstatus_id','=',12)
			->where('created_at','like',$getmonth.'%')
			->sum('order.order_amountquoted');
			$getunpaidamount = $getgrosssale-$getpaidamount-$getcancelamount;
			$getpreviousunpaid = DB::table('order')
			->select('order_amountquoted')
			->where('status_id','=',1)
			->where('campaign_id','=',1)
			->where('orderstatus_id','=',7)
			->where('created_at','like',$getpreviousmonth.'%')
			->sum('order.order_amountquoted');
			$gettotalunpaidamount = $getunpaidamount+$getpreviousunpaid;
			$getpreviousrecovery = DB::table('order')
			->select('order_amountquoted')
			->where('status_id','=',1)
			->where('campaign_id','=',1)
			->where('orderstatus_id','=',18)
			->where('created_at','like',$getpreviousmonth.'%')
			->sum('order.order_amountquoted');
			$getremainingunpaidamount = $gettotalunpaidamount-$getpreviousrecovery;

			$getuser->campaigntarget = $getcampaigntarget;
			$getuser->grosssale = $getgrosssale;
			$getuser->paidamount = $getpaidamount;
			$getuser->cancelamount = $getcancelamount;
			$getuser->unpaidamount = $getunpaidamount;
			$getuser->previousunpaid = $getpreviousunpaid;
			$getuser->totalunpaidamount = $gettotalunpaidamount;
			$getuser->previousrecovery = $getpreviousrecovery;
			$getuser->remainingunpaidamount = $getremainingunpaidamount;
			// new updates 30th July 2021 end

			$list=array();
			$month = date('m');
			$year = date('Y');
			$noofdays = date('t');

			for($d=1; $d<=$noofdays; $d++)
			{
			    $time=mktime(12, 0, 0, $month, $d, $year);          
			    if (date('m', $time)==$month)       
			        $list[]=date('Y-m-d', $time);
			}
			// dd($list);
			$datewiseordercount = array();
			$index = 0;
			foreach ($list as $lists) {
				// dd($lists);
			$getdailynooforders = DB::table('order')
			->select('order_id')
			->where('status_id','=',1)
			->where('campaign_id','=',1)
			->where('created_at','like',$lists.'%')
			->count('order_id');
			$getdailyorderamount = DB::table('order')
			->select('order_amountquoted')
			->where('status_id','=',1)
			->where('campaign_id','=',1)
			->where('created_at','like',$lists.'%')
			->sum('order_amountquoted');
			// dd($lists);
			$datewiseordercount[$index]['nooforders'] = $getdailynooforders;
			$datewiseordercount[$index]['orderamount'] = $getdailyorderamount;
			$datewiseordercount[$index]['orderdate'] = $lists;
			// $alldata[] = $getuser;
			$index++;
			}
			$getmonthlytotalnooforders = DB::table('order')
			->select('order_id')
			->where('status_id','=',1)
			// ->where('campaign_id','=',$request->id)
			->where('created_at',$getmonth.'%')
			->count('order_id');
			// dd($getmonthlytotalnooforders);
			$getmonthlycompleteorders = DB::table('order')
			->select('order_id')
			->where('status_id','=',1)
			->whereIn('orderstatus_id',[7,8,9,10,11,17,18])
			->where('campaign_id','=',1)
			->where('created_at','like',$getmonth.'%')
			->count('order_id');

			$getmonthlypaidorders = DB::table('order')
			->select('order_id')
			->where('status_id','=',1)
			->where('orderstatus_id','=',11)
			->where('campaign_id','=',1)
			->where('created_at','like',$getmonth.'%')
			->count('order_id');

			$getmonthlypendingorders = $getmonthlytotalnooforders-$getmonthlycompleteorders;

			$ordercounts = array();
			$ordercounts['totalorder'] = $getmonthlytotalnooforders;
			$ordercounts['completeorder'] = $getmonthlycompleteorders;
			$ordercounts['paidorder'] = $getmonthlypaidorders;
			$ordercounts['pendingorder'] = $getmonthlypendingorders;

			$timestamp = strtotime(date('Y-m-d'));
			$daysRemaining = (int)date('t', $timestamp) - (int)date('j', $timestamp);
			$allData = array("userdata" => $getuser, "daileordercount" => $datewiseordercount, "orderscount" => $ordercounts);
			dd($allData);
		if(isset($getuser)){
		return response()->json(['userdata' => $getuser, 'daileordercount' => $datewiseordercount,'orderscount' => $ordercounts, 'message' => 'User Dashboard Details'],200);
		}else{
			return response()->json("Oops! Something Went Wrong", 400);
		}
	}
}
