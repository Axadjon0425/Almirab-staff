<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AlmirabStaff;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class AlmirabStaffController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $AlmirabStaff = DB::table('staff AS s')
        ->select('s.*')
        ->where('s.status', $id)
        ->get();
        return view('staff.index', compact('AlmirabStaff'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $test = $request->test_duration;
         if ($request->status == 1) {
            $currentTime = Carbon::now()
            ->addDay($request->test_duration)
            ->format('Y-m-d');
         }else{
             $currentTime=' ';
         }
            
        
        $error = Validator::make($request->all(), [
            'firstname'      =>'required',
            'lastname'       =>'required',
            'reference'      =>'required',
            'address'        =>'required',
            'born'           =>'required',
            'phone_one'      =>'required',
            // 'phone_two'      =>'nullable',
            'specialty'      =>'required',
            'work_activity'  =>'required',
            // 'lang'           =>'nullable',
            // 'salary'         =>'nullable',
            'marital_status' =>'required',
            // 'file1'          =>'nullable',
            // 'file2'          =>'nullable',
            'status'         =>'required',
            // 'test_duration'  =>'nullable',
            // 'update_at'      =>'nullable'
        ]);

        if ($error->fails()) {
            return response()->json(array(
                'status' => 0,
                'errors' => $error->getMessageBag()->toArray()
            ));
        }
        else{
            $imgNewName1 = '';
            $img1 = $request->file('file1');
            $imgNewName2 = '';
            $img2 = $request->file('file2');
            if ($img1) {
                $imgNewName1 = 'passportOne'.rand().'.'.$img1->getClientOriginalExtension();
                $img1->move(public_path('upload/staff'), $imgNewName1);
            }
            if ($img2) {
                $imgNewName2 = 'passportTwo'.rand().'.'.$img2->getClientOriginalExtension();
                $img2->move(public_path('upload/staff'), $imgNewName2);
            }

            try {
                AlmirabStaff::create([
                    'firstname'      =>isset($request->firstname) ? $request->firstname :'',
                    'lastname'       =>isset($request->lastname) ? $request->lastname :'',
                    'reference'      =>isset($request->reference) ? $request-> reference :'',
                    'address'        =>isset($request->address) ? $request->address :'',
                    'born'           =>isset($request->born) ? $request->born :'',
                    'phone_one'      =>isset($request->phone_one) ? $request->phone_one :'',
                    'phone_two'      =>isset($request->phone_two) ? $request->phone_two :'',
                    'specialty'      =>isset($request->specialty) ? $request->specialty :'',
                    'work_activity'  => isset($request->work_activity) ? $request->work_activity :'',
                    'lang'           => isset($request->lang) ? $request->lang :'',
                    'salary'         => isset($request->salary) ? $request->salary :'',
                    'marital_status' => isset($request->marital_status) ? $request->marital_status :'',
                    'file1'          => isset($imgNewName1) ?  $imgNewName1 : '',
                    'file2'          => $imgNewName2,
                    'status'         =>isset($request->status) ? $request->status :'',
                    'gender'         =>isset($request->gender) ? $request->gender :'',
                    'test_duration'  =>$currentTime
                    
                ]);

                return response()->json([
                    'status' => 1,
                    'test' => $imgNewName1
                ]);

            } catch (\Exception $exception) {
                return response()->json([
                    'status' => 2,
                    'error' => $exception,
                ]);
                
            }
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // return view('staff.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($AlmirabStaff)
    {
        // return response()->json([
        //     'status' => 'salom',
        // ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $AlmirabStaff)
    {
        if ($request->status == 1) {
            $currentTime = Carbon::now()
            ->addDay($request->test_duration)
            ->format('Y-m-d');
         }else{
             $currentTime=' ';
         }

/**#######################################File1##################################### */
        if ($request->photo_hidden1) {
            $img_name1 = $request->photo_hidden1;
        }else{
            $img_name1= ' ';
        }
        
        $img1 = $request->file('file1');
        
        if ($img1) {
            $error = Validator::make($request->all(), $this->validateData());
    
            if ($error->fails()) {
                return response()->json([
                    'status' => 0,
                    'errors' => $error->getMessageBag()->toArray()
                ]);
            }
            else {
                $img_old_url1 =  public_path()."upload/staff/".$img_name1;
                if (file_exists($img_old_url1)) {
                    unlink($img_old_url1);
                }
              
                $img_name1 = 'passport'.rand().'.'.$img1->getClientOriginalExtension();
                $img1->move(public_path('upload/staff/'), $img_name1);
            }
        }
/**#######################################File1##################################### */         
/**#######################################File2##################################### */
        if ($request->photo_hidden2) {
            $img_name2 = $request->photo_hidden2;
        }else{
            $img_name2= ' ';
        }

        $img2 = $request->file('file2');

        if ($img2) {
                $img_old_url2 =  public_path()."upload/staff/".$img_name2;
                if (file_exists($img_old_url2)) {
                    unlink($img_old_url2);
                }
            
                $img_name2 = 'passport'.rand().'.'.$img2->getClientOriginalExtension();
                $img2->move(public_path('upload/staff/'), $img_name2);
           
        }   
/**#######################################File1##################################### */     

        else {
            $error = Validator::make($request->all(), [
                'firstname'      =>'required',
                'lastname'       =>'required',
                'reference'      =>'required',
                'address'        =>'required',
                'born'           =>'required',
                'phone_one'      =>'required',
                'specialty'      =>'required',
                'work_activity'  =>'required',
                'marital_status' =>'required',
                'status'         =>'required'
            ]);
            if ($error->fails()) {
                return response()->json(array(
                    'status' => 0,
                    'errors' => $error->getMessageBag()->toArray(),
                ));
            }
            
        }

        try {
            $form_data = array(
                'firstname'      =>$request->firstname,
                'lastname'       =>$request->lastname,
                'reference'      =>$request->reference,
                'address'        =>$request->address,
                'born'           =>$request->born,
                'phone_one'      =>$request->phone_one,
                'phone_two'      =>$request->phone_two,
                'specialty'      =>$request->specialty,
                'work_activity'  =>$request->work_activity,
                'lang'           =>$request->lang,
                'salary'         =>$request->salary,
                'marital_status' =>$request->marital_status,
                'file1'           =>$img_name1,
                'file2'           =>$img_name2,
                'status'         =>$request->status,
                'gender'         =>$request->gender,
                'test_duration'  =>$currentTime,
                'update_at'      =>Carbon::now()->format('Y-m-d')
            );
    
            AlmirabStaff::whereId($AlmirabStaff)->update($form_data);
    
            return response()->json([
                'status' => 1,
            ]);
        }
        catch(\Exception $exception) {
            return response()->json([
                'status' => 2,
                'errors' => $exception
            ]);
        }
        
    }

    public function validateData()
    {
        return [
            'firstname'      =>'required',
            'lastname'       =>'required',
            'reference'      =>'required',
            'address'        =>'required',
            'born'           =>'required',
            'phone_one'      =>'required',
            'specialty'      =>'required',
            'work_activity'  =>'required',
            'marital_status' =>'required',
            'status'         =>'required',
            'file1'          =>'mimes:jpeg,png,jpg',
            'file2'          =>'mimes:jpeg,png,jpg'   
        ];
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($AlmirabStaff)
    {
        $Almirab = AlmirabStaff::findOrFail($AlmirabStaff);

        $image_path = public_path()."upload/staff/".$Almirab->file1;
        if (file_exists($image_path)) {
            unlink($image_path);
        }
        $Almirab->delete();

        return response()->json(['status' => 1 ,'msg' => 'ochirildi']);
    }
}
