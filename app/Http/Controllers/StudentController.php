<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $moduleName="Assign User Role ";
    private $sdc;
    public function __construct(){ $this->sdc = new CoreCustomController(); }
    
    public function index(){
        $tab=Student::all();
        return view('admin.pages.student.student_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){           
        return view('admin.pages.student.student_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
                
                'firstname'=>'required',
                'lastname'=>'required',
                'gender'=>'required',
        ]);

        

        $filename_student='';
        if (!empty($request->file('photo'))) {
            $img_student = $request->file('photo');
            $upload_student = 'upload/student';
            $filename_student = time() . '.' . $img_student->getClientOriginalExtension();
            $img_student->move($upload_student, $filename_student);
        }

                
        $tab=new Student();
        
        $tab->firstname=$request->firstname;
        $tab->lastname=$request->lastname;
        $tab->gender=$request->gender;
        $tab->photo=$filename_student;
        $tab->address=$request->address;
        $tab->save();

        return redirect('student')->with('status','Added Successfully !');

    }

    public function ajax(Request $request)
    {
        $this->validate($request,[
                
                'firstname'=>'required',
                'lastname'=>'required',
                'gender'=>'required',
        ]);

        $tab=new Student();
        
        $tab->firstname=$request->firstname;
        $tab->lastname=$request->lastname;
        $tab->gender=$request->gender;
        $tab->photo=$filename_student;
        $tab->address=$request->address;
        $tab->save();

        echo json_encode(array("status"=>"success","msg"=>"Added Successfully."));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */

    private function methodToGetMembersCount($search=""){

        $tab=Customer::select('id','name','address','phone','email','last_invoice_no','created_at')
                     ->where('store_id',$this->sdc->storeID())->orderBy('id','DESC')
                     ->when($search, function ($query) use ($search) {
                        $query->where('id','LIKE','%'.$search.'%');
                            $query->orWhere('firstname','LIKE','%'.$search.'%');
                            $query->orWhere('lastname','LIKE','%'.$search.'%');
                            $query->orWhere('gender','LIKE','%'.$search.'%');
                            $query->orWhere('photo','LIKE','%'.$search.'%');
                            $query->orWhere('address','LIKE','%'.$search.'%');
                            $query->orWhere('created_at','LIKE','%'.$search.'%');

                        return $query;
                     })
                     ->count();
        return $tab;
    }


    private function methodToGetMembers($start, $length,$search=''){

        $tab=Customer::select('id','name','address','phone','email','last_invoice_no','created_at')
                     ->where('store_id',$this->sdc->storeID())->orderBy('id','DESC')
                     ->when($search, function ($query) use ($search) {
                        $query->where('id','LIKE','%'.$search.'%');
                            $query->orWhere('firstname','LIKE','%'.$search.'%');
                            $query->orWhere('lastname','LIKE','%'.$search.'%');
                            $query->orWhere('gender','LIKE','%'.$search.'%');
                            $query->orWhere('photo','LIKE','%'.$search.'%');
                            $query->orWhere('address','LIKE','%'.$search.'%');
                            $query->orWhere('created_at','LIKE','%'.$search.'%');

                        return $query;
                     })
                     ->skip($start)->take($length)->get();
        return $tab;
    }

    public function datatable(Request $request){

        $draw = $request->get('draw');
        $start = $request->get('start');
        $length = $request->get('length');
        $search = $request->get('search');

        $search = (isset($search['value']))? $search['value'] : '';

        $total_members = $this->methodToGetMembersCount($search); // get your total no of data;
        $members = $this->methodToGetMembers($start, $length,$search); //supply start and length of the table data

        $data = array(
            'draw' => $draw,
            'recordsTotal' => $total_members,
            'recordsFiltered' => $total_members,
            'data' => $members,
        );

        echo json_encode($data);

    }

    
    public function StudentQuery($request)
    {
        $Student_data=Student::orderBy('id','DESC')->get();

        return $Student_data;
    }
    
   

    public function ExportExcel(Request $request) 
    {
         $dataDateTimeIns=formatDateTime(date('d-M-Y H:i:s a'));
        $data=array();
        $array_column=array(
                                'ID','First Name','Last Name','Gender','Photo','Address','Created Date');
        array_push($data, $array_column);
        $inv=$this->StudentQuery($request);
        foreach($inv as $voi):
            $inv_arry=array(
                                $voi->id,$voi->firstname,$voi->lastname,$voi->gender,$voi->photo,$voi->address,formatDate($voi->created_at));
            array_push($data, $inv_arry);
        endforeach;

        $excelArray=array(
            'report_name'=>'Student Report',
            'report_title'=>'Student Report',
            'report_description'=>'Report Genarated : '.$dataDateTimeIns,
            'data'=>$data
        );

        $this->sdc->ExcelLayout($excelArray);
        
    }

    public function ExportPDF(Request $request)
    {

        $html="<table class='table table-bordered' style='width:100%;'>
                <thead>
                <tr>
                <th class='text-center' style='font-size:12px;'>ID</th>
                            <th class='text-center' style='font-size:12px;' >First Name</th>
                        
                            <th class='text-center' style='font-size:12px;' >Last Name</th>
                        
                            <th class='text-center' style='font-size:12px;' >Gender</th>
                        
                            <th class='text-center' style='font-size:12px;' >Photo</th>
                        
                            <th class='text-center' style='font-size:12px;' >Address</th>
                        
                <th class='text-center' style='font-size:12px;'>Created Date</th>
                </tr>
                </thead>
                <tbody>";

                    $inv=$this->StudentQuery($request);
                    foreach($inv as $voi):
                        $html .="<tr>
                        <td style='font-size:12px;' class='text-center'>".$voi->id."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->firstname."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->lastname."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->gender."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->photo."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->address."</td>
                        <td style='font-size:12px;' class='text-right'>".formatDate($voi->created_at)."</td>
                        </tr>";

                    endforeach;


                $html .="</tbody>
                
                </table>


                ";

                $this->sdc->PDFLayout('Student Report',$html);


    }
    public function show(Student $student)
    {
        
        $tab=Student::all();return view('admin.pages.student.student_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student,$id=0)
    {
        $tab=Student::find($id);      
        return view('admin.pages.student.student_edit',['dataRow'=>$tab,'edit'=>true]);  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student,$id=0)
    {
        $this->validate($request,[
                
                'firstname'=>'required',
                'lastname'=>'required',
                'gender'=>'required',
        ]);
        

        $filename_student=$request->ex_photo;
        if (!empty($request->file('photo'))) {
            $img_student = $request->file('photo');
            $upload_student = 'upload/student';
            $filename_student = time() . '.' . $img_student->getClientOriginalExtension();
            $img_student->move($upload_student, $filename_student);
        }

                
        $tab=Student::find($id);
        
        $tab->firstname=$request->firstname;
        $tab->lastname=$request->lastname;
        $tab->gender=$request->gender;
        $tab->photo=$filename_student;
        $tab->address=$request->address;
        $tab->save();

        return redirect('student')->with('status','Updated Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student,$id=0)
    {
        $tab=Student::find($id);
        $tab->delete();
        return redirect('student')->with('status','Deleted Successfully !');}
}
