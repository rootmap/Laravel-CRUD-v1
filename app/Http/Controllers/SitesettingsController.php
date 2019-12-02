<?php

namespace App\Http\Controllers;

use App\SiteSettings;
use Illuminate\Http\Request;

class SiteSettingsController extends Controller
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
        $tab=SiteSettings::all();
        return view('admin.pages.sitesettings.sitesettings_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){           
        return view('admin.pages.sitesettings.sitesettings_create');
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
                
                'sitename'=>'required',
        ]);

        

        $filename_sitesettings='';
        if (!empty($request->file('sitelogo'))) {
            $img_sitesettings = $request->file('sitelogo');
            $upload_sitesettings = 'upload/sitesettings';
            $filename_sitesettings = time() . '.' . $img_sitesettings->getClientOriginalExtension();
            $img_sitesettings->move($upload_sitesettings, $filename_sitesettings);
        }

                
        $tab=new SiteSettings();
        
        $tab->sitename=$request->sitename;
        $tab->sitelogo=$filename_sitesettings;
        $tab->save();

        return redirect('sitesettings')->with('status','Added Successfully !');

    }

    public function ajax(Request $request)
    {
        $this->validate($request,[
                
                'sitename'=>'required',
        ]);

        $tab=new SiteSettings();
        
        $tab->sitename=$request->sitename;
        $tab->sitelogo=$filename_sitesettings;
        $tab->save();

        echo json_encode(array("status"=>"success","msg"=>"Added Successfully."));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SiteSettings  $sitesettings
     * @return \Illuminate\Http\Response
     */

    private function methodToGetMembersCount($search=""){

        $tab=Customer::select('id','name','address','phone','email','last_invoice_no','created_at')
                     ->where('store_id',$this->sdc->storeID())->orderBy('id','DESC')
                     ->when($search, function ($query) use ($search) {
                        $query->where('id','LIKE','%'.$search.'%');
                            $query->orWhere('sitename','LIKE','%'.$search.'%');
                            $query->orWhere('sitelogo','LIKE','%'.$search.'%');
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
                            $query->orWhere('sitename','LIKE','%'.$search.'%');
                            $query->orWhere('sitelogo','LIKE','%'.$search.'%');
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

    
    public function SiteSettingsQuery($request)
    {
        $SiteSettings_data=SiteSettings::orderBy('id','DESC')->get();

        return $SiteSettings_data;
    }
    
   

    public function ExportExcel(Request $request) 
    {
         $dataDateTimeIns=formatDateTime(date('d-M-Y H:i:s a'));
        $data=array();
        $array_column=array(
                                'ID','Site Name','Site logo','Created Date');
        array_push($data, $array_column);
        $inv=$this->SiteSettingsQuery($request);
        foreach($inv as $voi):
            $inv_arry=array(
                                $voi->id,$voi->sitename,$voi->sitelogo,formatDate($voi->created_at));
            array_push($data, $inv_arry);
        endforeach;

        $excelArray=array(
            'report_name'=>'Site Settings Report',
            'report_title'=>'Site Settings Report',
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
                            <th class='text-center' style='font-size:12px;' >Site Name</th>
                        
                            <th class='text-center' style='font-size:12px;' >Site logo</th>
                        
                <th class='text-center' style='font-size:12px;'>Created Date</th>
                </tr>
                </thead>
                <tbody>";

                    $inv=$this->SiteSettingsQuery($request);
                    foreach($inv as $voi):
                        $html .="<tr>
                        <td style='font-size:12px;' class='text-center'>".$voi->id."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->sitename."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->sitelogo."</td>
                        <td style='font-size:12px;' class='text-right'>".formatDate($voi->created_at)."</td>
                        </tr>";

                    endforeach;


                $html .="</tbody>
                
                </table>


                ";

                $this->sdc->PDFLayout('Site Settings Report',$html);


    }
    public function show(SiteSettings $sitesettings)
    {
        
        $tab=SiteSettings::all();return view('admin.pages.sitesettings.sitesettings_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SiteSettings  $sitesettings
     * @return \Illuminate\Http\Response
     */
    public function edit(SiteSettings $sitesettings,$id=0)
    {
        $tab=SiteSettings::find($id);      
        return view('admin.pages.sitesettings.sitesettings_edit',['dataRow'=>$tab,'edit'=>true]);  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SiteSettings  $sitesettings
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SiteSettings $sitesettings,$id=0)
    {
        $this->validate($request,[
                
                'sitename'=>'required',
        ]);
        

        $filename_sitesettings=$request->ex_sitelogo;
        if (!empty($request->file('sitelogo'))) {
            $img_sitesettings = $request->file('sitelogo');
            $upload_sitesettings = 'upload/sitesettings';
            $filename_sitesettings = time() . '.' . $img_sitesettings->getClientOriginalExtension();
            $img_sitesettings->move($upload_sitesettings, $filename_sitesettings);
        }

                
        $tab=SiteSettings::find($id);
        
        $tab->sitename=$request->sitename;
        $tab->sitelogo=$filename_sitesettings;
        $tab->save();

        return redirect('sitesettings')->with('status','Updated Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SiteSettings  $sitesettings
     * @return \Illuminate\Http\Response
     */
    public function destroy(SiteSettings $sitesettings,$id=0)
    {
        $tab=SiteSettings::find($id);
        $tab->delete();
        return redirect('sitesettings')->with('status','Deleted Successfully !');}
}
