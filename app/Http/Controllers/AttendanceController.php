<?php

namespace App\Http\Controllers;

use App\Attendance;
use Illuminate\Http\Request;



use TADPHP\TADFactory;
use TADPHP\TAD;


class AttendanceController extends Controller
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

        //$zklib_commands = TAD::zklib_commands_available();

        //dd($zklib_commands);

        $comands = TAD::commands_available();
        $tad = (new TADFactory(['ip'=>'192.168.1.201', 'com_key'=>0,'udp_port'=>8080,'udp_port' => 20000]))->get_instance();

        //$tad = (new TADFactory(['ip'=>'192.168.1.201']))->get_instance();

        //dd($tad);

        $logs = $tad->get_att_log();

        dd($tad);

        //$tab=Attendance::all();
        //return view('admin.pages.attendance.attendance_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){           
        return view('admin.pages.attendance.attendance_create');
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
                
                'membername'=>'required',
                'memberid'=>'required',
        ]);

        
        $tab=new Attendance();
        
        $tab->membername=$request->membername;
        $tab->memberid=$request->memberid;
        $tab->locker=$request->locker;
        $tab->intime=$request->intime;
        $tab->outtime=$request->outtime;
        $tab->save();

        return redirect('attendance')->with('status','Added Successfully !');

    }

    public function ajax(Request $request)
    {
        $this->validate($request,[
                
                'membername'=>'required',
                'memberid'=>'required',
        ]);

        $tab=new Attendance();
        
        $tab->membername=$request->membername;
        $tab->memberid=$request->memberid;
        $tab->locker=$request->locker;
        $tab->intime=$request->intime;
        $tab->outtime=$request->outtime;
        $tab->save();

        echo json_encode(array("status"=>"success","msg"=>"Added Successfully."));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */

    private function methodToGetMembersCount($search=""){

        $tab=Customer::select('id','name','address','phone','email','last_invoice_no','created_at')
                     ->where('store_id',$this->sdc->storeID())->orderBy('id','DESC')
                     ->when($search, function ($query) use ($search) {
                        $query->where('id','LIKE','%'.$search.'%');
                            $query->orWhere('membername','LIKE','%'.$search.'%');
                            $query->orWhere('memberid','LIKE','%'.$search.'%');
                            $query->orWhere('locker','LIKE','%'.$search.'%');
                            $query->orWhere('intime','LIKE','%'.$search.'%');
                            $query->orWhere('outtime','LIKE','%'.$search.'%');
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
                            $query->orWhere('membername','LIKE','%'.$search.'%');
                            $query->orWhere('memberid','LIKE','%'.$search.'%');
                            $query->orWhere('locker','LIKE','%'.$search.'%');
                            $query->orWhere('intime','LIKE','%'.$search.'%');
                            $query->orWhere('outtime','LIKE','%'.$search.'%');
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

    
    public function AttendanceQuery($request)
    {
        $Attendance_data=Attendance::orderBy('id','DESC')->get();

        return $Attendance_data;
    }
    
   

    public function ExportExcel(Request $request) 
    {
         $dataDateTimeIns=formatDateTime(date('d-M-Y H:i:s a'));
        $data=array();
        $array_column=array(
                                'ID','Member Name','Member ID','Locker','In Time','Out Time','Created Date');
        array_push($data, $array_column);
        $inv=$this->AttendanceQuery($request);
        foreach($inv as $voi):
            $inv_arry=array(
                                $voi->id,$voi->membername,$voi->memberid,$voi->locker,$voi->intime,$voi->outtime,formatDate($voi->created_at));
            array_push($data, $inv_arry);
        endforeach;

        $excelArray=array(
            'report_name'=>'Attendance Report',
            'report_title'=>'Attendance Report',
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
                            <th class='text-center' style='font-size:12px;' >Member Name</th>
                        
                            <th class='text-center' style='font-size:12px;' >Member ID</th>
                        
                            <th class='text-center' style='font-size:12px;' >Locker</th>
                        
                            <th class='text-center' style='font-size:12px;' >In Time</th>
                        
                            <th class='text-center' style='font-size:12px;' >Out Time</th>
                        
                <th class='text-center' style='font-size:12px;'>Created Date</th>
                </tr>
                </thead>
                <tbody>";

                    $inv=$this->AttendanceQuery($request);
                    foreach($inv as $voi):
                        $html .="<tr>
                        <td style='font-size:12px;' class='text-center'>".$voi->id."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->membername."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->memberid."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->locker."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->intime."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->outtime."</td>
                        <td style='font-size:12px;' class='text-right'>".formatDate($voi->created_at)."</td>
                        </tr>";

                    endforeach;


                $html .="</tbody>
                
                </table>


                ";

                $this->sdc->PDFLayout('Attendance Report',$html);


    }
    public function show(Attendance $attendance)
    {
        
        $tab=Attendance::all();return view('admin.pages.attendance.attendance_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function edit(Attendance $attendance,$id=0)
    {
        $tab=Attendance::find($id);      
        return view('admin.pages.attendance.attendance_edit',['dataRow'=>$tab,'edit'=>true]);  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Attendance $attendance,$id=0)
    {
        $this->validate($request,[
                
                'membername'=>'required',
                'memberid'=>'required',
        ]);
        
        $tab=Attendance::find($id);
        
        $tab->membername=$request->membername;
        $tab->memberid=$request->memberid;
        $tab->locker=$request->locker;
        $tab->intime=$request->intime;
        $tab->outtime=$request->outtime;
        $tab->save();

        return redirect('attendance')->with('status','Updated Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Attendance $attendance,$id=0)
    {
        $tab=Attendance::find($id);
        $tab->delete();
        return redirect('attendance')->with('status','Deleted Successfully !');}
}
