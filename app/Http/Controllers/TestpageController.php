<?php

namespace App\Http\Controllers;

use App\TestPage;
use Illuminate\Http\Request;

class TestPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $tab=TestPage::all();
        return view('admin.pages.testpage.testpage_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){           
        return view('admin.pages.testpage.testpage_create');
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
                
                'name'=>'required',
        ]);

        
        $tab=new TestPage();
        
        $tab->name=$request->name;
        $tab->address=$request->address;
        $tab->save();

        return redirect('testpage')->with('status','Added Successfully !');

    }

    public function ajax(Request $request)
    {
        $this->validate($request,[
                
                'name'=>'required',
        ]);

        $tab=new TestPage();
        
        $tab->name=$request->name;
        $tab->address=$request->address;
        $tab->save();

        echo json_encode(array("status"=>"success","msg"=>"Added Successfully."));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TestPage  $testpage
     * @return \Illuminate\Http\Response
     */

    private function methodToGetMembersCount($search=""){

        $tab=Customer::select('id','name','address','phone','email','last_invoice_no','created_at')
                     ->where('store_id',$this->sdc->storeID())->orderBy('id','DESC')
                     ->when($search, function ($query) use ($search) {
                        $query->where('id','LIKE','%'.$search.'%');
                            $query->orWhere('name','LIKE','%'.$search.'%');
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
                            $query->orWhere('name','LIKE','%'.$search.'%');
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

    
    public function show(TestPage $testpage)
    {
        
        $tab=TestPage::all();return view('admin.pages.testpage.testpage_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TestPage  $testpage
     * @return \Illuminate\Http\Response
     */
    public function edit(TestPage $testpage,$id=0)
    {
        $tab=TestPage::find($id);      
        return view('admin.pages.testpage.testpage_edit',['dataRow'=>$tab,'edit'=>true]);  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TestPage  $testpage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TestPage $testpage,$id=0)
    {
        $this->validate($request,[
                
                'name'=>'required',
        ]);
        
        $tab=TestPage::find($id);
        
        $tab->name=$request->name;
        $tab->address=$request->address;
        $tab->save();

        return redirect('testpage')->with('status','Updated Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TestPage  $testpage
     * @return \Illuminate\Http\Response
     */
    public function destroy(TestPage $testpage,$id=0)
    {
        $tab=TestPage::find($id);
        $tab->delete();
        return redirect('testpage')->with('status','Deleted Successfully !');}
}
