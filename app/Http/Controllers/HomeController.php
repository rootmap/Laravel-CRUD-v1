<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function site()
    {
        return view('site.pages.index');
    }

    public function sitelayout()
    {
        return view('site.layout.master');
    }

    public function blank()
    {
        return view('admin.layout.index');
    }

    public function form()
    {
        return view('admin.pages.form');
    }

    public function addmore()
    {
        return view('admin.pages.addmore');
    }

    

    public function crud()
    {
        /*$tables = \DB::select('SHOW TABLES');

        $tables = array_map('current',$tables);

        dd($tables);
        die();*/
        return view('admin.pages.crud');
    }    

    private function GenarateWithLink($fileLink='',$content=''){
        $handle = fopen($fileLink, 'a') or die('Cannot open file:  '.$fileLink);
        $new_data =str_replace("&#36;","$",$content);
        $new_data =str_replace("&#$2$#;","",$new_data);
        fwrite($handle, $new_data);
        fclose($handle);
    }

    private function genarateModelName($data=''){
        $data=str_replace(" ","",$data);
        return $data;
        //page_name
    }

    public static function getPluralPrase($phrase,$value){
        $plural='';
        if($value>1){
            for($i=0;$i<strlen($phrase);$i++){
                if($i==strlen($phrase)-1){
                    $plural.=($phrase[$i]=='y')? 'ies':(($phrase[$i]=='s'|| $phrase[$i]=='x' || $phrase[$i]=='z' || $phrase[$i]=='ch' || $phrase[$i]=='sh')? $phrase[$i].'es' :$phrase[$i].'s');
                }else{
                    $plural.=$phrase[$i];
                }
            }
            return $plural;
        }
        return $phrase;
    }

    private function modelResourceDirectory($modelFileName=''){
        return str_replace(" ","",strtolower($modelFileName));
    }

    private function createDirectoryWithLocation($structure=''){
        if (!mkdir($structure, 0777, true)) {
            die('Failed to create folders...');
        }
        else{
            return true;
        }
    }

    private function genarateFieldName($fieldName=''){
        return db_esc_like_raw(str_replace(" ","",strtolower($fieldName)));
    }

    private function genrateFormField($request){
        $content='';
        foreach($request->field_name as $key=>$field){

           if($request->field_type[$key]==1)
           {
                $content .='
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="'.$this->genarateFieldName($field).'">'.$field.'</label>
                            <div class="col-md-9">
                                <input type="text" id="'.$this->genarateFieldName($field).'" name="'.$this->genarateFieldName($field).'" class="form-control" placeholder="'.$request->field_name_placeholder[$key].'">
                            </div>
                        </div>';
           }
           elseif($request->field_type[$key]==2)
           {
                $content .='
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="'.$this->genarateFieldName($field).'">'.$field.'</label>
                            <div class="col-md-9">
                                <textarea id="'.$this->genarateFieldName($field).'" name="'.$this->genarateFieldName($field).'" rows="9" class="form-control" placeholder="'.$request->field_name_placeholder[$key].'"></textarea>
                            </div>
                        </div>';
           }
           elseif($request->field_type[$key]==3)
           {
                $content .='
                        <div class="form-group">
                            <label class="col-md-3 control-label">'.$field.'</label>
                            <div class="col-md-9">
                                '.$this->genarateStaticCheckbox($this->genarateFieldName($field),$request->field_name_placeholder[$key]).'
                            </div>
                        </div>';
           }
           elseif($request->field_type[$key]==4)
           {
                $content .='
                        <div class="form-group">
                            <label class="col-md-3 control-label">'.$field.'</label>
                            <div class="col-md-9">
                                '.$this->genarateStaticRadioButton($this->genarateFieldName($field),$request->field_name_placeholder[$key]).'
                            </div>
                        </div>';
           }
           elseif($request->field_type[$key]==5)
           {
                $content .='
                        <div class="form-group">
                            <label class="col-md-3 control-label">'.$field.'</label>
                            <div class="col-md-9">
                                <select id="'.$this->genarateFieldName($field).'" name="'.$this->genarateFieldName($field).'" class="form-control" size="1">
                                    '.$this->genarateStaticDropDown($request->field_name_placeholder[$key]).'
                                </select>
                            </div>
                        </div>';
           }
           elseif($request->field_type[$key]==6)
           {
                $content .='
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="'.$this->genarateFieldName($field).'">'.$field.'</label>
                            <div class="col-md-9">
                                <input type="file" id="'.$this->genarateFieldName($field).'" name="'.$this->genarateFieldName($field).'">
                            </div>
                        </div>';
           }
           elseif($request->field_type[$key]==7)
           {
                $content .='
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="'.$this->genarateFieldName($field).'">'.$field.'</label>
                            <div class="col-md-9">
                                <input type="file" id="'.$this->genarateFieldName($field).'" name="'.$this->genarateFieldName($field).'">
                            </div>
                        </div>';
           }
            
        }


        return $content;
    }

    private function genrateEditFormField($request,$data){
        $content='';
        foreach($request->field_name as $key=>$field){

           if($request->field_type[$key]==1)
           {
                $content .='
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="'.$this->genarateFieldName($field).'">'.$field.'</label>
                            <div class="col-md-9">
                                <input type="text" ';

                                $content .='
                                <?php 
                                if(isset(&#36;dataRow->'.$this->genarateFieldName($field).')){
                                    ?>
                                    value="{{&#36;dataRow->'.$this->genarateFieldName($field).'}}" 
                                    <?php 
                                }
                                ?>
                                ';

                                $content .='id="'.$this->genarateFieldName($field).'" name="'.$this->genarateFieldName($field).'" class="form-control" placeholder="'.$request->field_name_placeholder[$key].'">
                            </div>
                        </div>';
           }
           elseif($request->field_type[$key]==2)
           {
                $content .='
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="'.$this->genarateFieldName($field).'">'.$field.'</label>
                            <div class="col-md-9">
                                <textarea id="'.$this->genarateFieldName($field).'" name="'.$this->genarateFieldName($field).'" rows="9" class="form-control" placeholder="'.$request->field_name_placeholder[$key].'">';
                                    $content .='<?php 
                                if(isset(&#36;dataRow->'.$this->genarateFieldName($field).')){
                                    
                                    echo &#36;dataRow->'.$this->genarateFieldName($field).';
                                    
                                }
                                ?>';
                                $content .='</textarea>
                            </div>
                        </div>';
           }
           elseif($request->field_type[$key]==3)
           {
                $content .='
                        <div class="form-group">
                            <label class="col-md-3 control-label">'.$field.'</label>
                            <div class="col-md-9">
                                '.$this->genarateStaticCheckbox($this->genarateFieldName($field),$request->field_name_placeholder[$key],$data).'
                            </div>
                        </div>';
           }
           elseif($request->field_type[$key]==4)
           {
                $content .='
                        <div class="form-group">
                            <label class="col-md-3 control-label">'.$field.'</label>
                            <div class="col-md-9">
                                '.$this->genarateStaticRadioButton($this->genarateFieldName($field),$request->field_name_placeholder[$key],$data).'
                            </div>
                        </div>';
           }
           elseif($request->field_type[$key]==5)
           {
                $content .='
                        <div class="form-group">
                            <label class="col-md-3 control-label">'.$field.'</label>
                            <div class="col-md-9">
                                <select id="'.$this->genarateFieldName($field).'" name="'.$this->genarateFieldName($field).'" class="form-control" size="1">
                                    '.$this->genarateStaticDropDown($request->field_name_placeholder[$key],$data,$this->genarateFieldName($field)).'
                                </select>
                            </div>
                        </div>';
           }
           elseif($request->field_type[$key]==6)
           {
                $imgEncodeURL="'upload/".strtolower($this->genarateModelName($request->page_name))."/'.&#36;dataRow->".$this->genarateFieldName($field);
                $content .='
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="'.$this->genarateFieldName($field).'">'.$field.'</label>
                            <div class="col-md-9">
                                <input type="file" id="'.$this->genarateFieldName($field).'" name="'.$this->genarateFieldName($field).'"> <br />
                                <input type="hidden" value="{{&#36;dataRow->'.$this->genarateFieldName($field).'}}" name="ex_'.$this->genarateFieldName($field).'" />
                                @if(isset(&#36;dataRow->'.$this->genarateFieldName($field).'))
                                    @if(!empty(&#36;dataRow->'.$this->genarateFieldName($field).'))
                                        <img src="{{url('.$imgEncodeURL.')}}" width="150">
                                    @endif
                                @endif
                            </div>
                        </div>';
           }
           elseif($request->field_type[$key]==7)
           {
                $imgEncodeURL="'upload/".strtolower($this->genarateModelName($request->page_name))."/'.&#36;dataRow->".$this->genarateFieldName($field);
                $content .='
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="'.$this->genarateFieldName($field).'">'.$field.'</label>
                            <div class="col-md-9">
                                <input type="file" id="'.$this->genarateFieldName($field).'" name="'.$this->genarateFieldName($field).'">
                                <input type="hidden" value="{{&#36;dataRow->'.$this->genarateFieldName($field).'}}" name="ex_'.$this->genarateFieldName($field).'" />
                                @if(isset(&#36;dataRow->'.$this->genarateFieldName($field).'))
                                    @if(!empty(&#36;dataRow->'.$this->genarateFieldName($field).'))
                                        <img src="{{url('.$imgEncodeURL.')}}" width="150">
                                    @endif
                                @endif
                            </div>
                        </div>';
           }
            
            
        }


        return $content;
    }

    private function genarateStaticDropDown($param='',$datafill='',$filedName=''){
        $content='
        <option value="">Please select</option>';
        $checkBoxArray=explode(",",$param);
        foreach ($checkBoxArray as $key => $value) {
            $content .='
            <option ';


                if(!empty($datafill)){
                    $content .='
                    <?php 
                    if(&#36;dataRow->'.$filedName.'=="'.trim($value).'"){
                        ?>
                        selected="selected" 
                        <?php 
                    }
                    ?> ';
                }


$content .='
            value="'.trim($value).'">'.$value.'</option>';
        }

        return $content;
    }

    private function genarateStaticCheckbox($filedName,$param,$datafill=''){
        $content='';
        $checkBoxArray=explode(",",$param);
        foreach ($checkBoxArray as $key => $value) {
            $content .='
                                <div class="checkbox">
                                    <label for="example-checkbox1">
                                        <input type="checkbox" ';

                                        if(!empty($datafill)){
                                            $content .=' <?php 
                                            if(&#36;dataRow->'.$filedName.'=="'.trim($value).'"){
                                                ?>
                                                checked="checked" 
                                                <?php 
                                            }
                                            ?>';
                                        }

                                       $content .=' id="'.$filedName.'_'.$key.'" name="'.$filedName.'" value="'.trim($value).'"> '.$value.'
                                    </label>
                                </div>';
        }

        return $content;
    }


    private function genarateStaticRadioButton($filedName,$param,$datafill=''){
        $content='';
        $checkBoxArray=explode(",",$param);
        foreach ($checkBoxArray as $key => $value) {
            $content .='
                                <div class="radio">
                                    <label for="example-radio1">
                                        <input type="radio" ';

                                        if(!empty($datafill)){
                                            $content .='<?php 
                                            if(&#36;dataRow->'.$filedName.'=="'.trim($value).'"){
                                                ?>
                                                checked="checked" 
                                                <?php 
                                            }
                                            ?>';
                                        }

                                        $content .='
                                        id="'.$filedName.'_'.$key.'" name="'.$filedName.'" value="'.trim($value).'">'.$value.'
                                    </label>
                                </div>';
        }

        return $content;
    }


    private function CoreRouteResource($page_route){
        $routePath = __DIR__."/../../../routes/web.php";
        $routeContent='';
        $routeContent .="\n//======================== ".ucfirst($page_route)." Route Start ===============================//";
        $routeContent .="\nRoute::get('/".$page_route."/list','".ucfirst($page_route)."Controller@show');";
        $routeContent .="\nRoute::get('/".$page_route."/create','".ucfirst($page_route)."Controller@create');";
        $routeContent .="\nRoute::get('/".$page_route."/edit/{id}','".ucfirst($page_route)."Controller@edit');";
        $routeContent .="\nRoute::get('/".$page_route."/delete/{id}','".ucfirst($page_route)."Controller@destroy');";
        $routeContent .="\nRoute::get('/".$page_route."','".ucfirst($page_route)."Controller@index');";

        $routeContent .="\nRoute::post('/".$page_route."','".ucfirst($page_route)."Controller@store');";
        $routeContent .="\nRoute::post('/".$page_route."/ajax','".ucfirst($page_route)."Controller@ajaxSave');";
        $routeContent .="\nRoute::post('/".$page_route."/datatable/ajax','".ucfirst($page_route)."Controller@datatable');";
        $routeContent .="\nRoute::post('/".$page_route."/update/{id}','".ucfirst($page_route)."Controller@update');";
        $routeContent .="\n//======================== ".ucfirst($page_route)." Route End ===============================//";
        $this->GenarateWithLink($routePath,$routeContent);

    }

    private function CoreModelResource($modelFileName,$getMigrationTable,$request){


        $migFileName=str_replace(" ","_",$request->page_name);
        $getMigrationTableFile=$this->getPluralPrase(strtolower($migFileName),strlen($migFileName));

        $modelContent='';
        $modelContent .="<?php

namespace App; 

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ".$modelFileName." extends Model
{
    use SoftDeletes;
    protected &#36;dates = ['deleted_at'];
    protected &#36;table='".$getMigrationTableFile."';
}
        ";

        $modelPathFile = __DIR__."/../../".$modelFileName.".php";

        $this->GenarateWithLink($modelPathFile,$modelContent);
    }

    private function CoreControllerResource($modelFileName,$controllerPathFile,$request){
        $controllerContent='';
        $controllerContent .='<?php

namespace App\Http\Controllers;

use App\&#$2$#;'.$modelFileName.';
use Illuminate\Http\Request;

class '.$modelFileName.'Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){';

        $controllerContent .="
        return view('admin.pages.".$this->modelResourceDirectory($modelFileName).".".$this->modelResourceDirectory($modelFileName)."_list');";
        
     $controllerContent .='
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){';

    $controllerContent .="           
        return view('admin.pages.".$this->modelResourceDirectory($modelFileName).".".$this->modelResourceDirectory($modelFileName)."_create');";

        $contentValidation="";
        foreach($request->field_name as $key=>$field){
            if(isset($request->field_validation[$key]))
            {
                if($request->field_validation[$key]=="on"){
                    $contentValidation .="
                '".$this->genarateFieldName($field)."'=>'required',";
                }
            }
        }


        $storeSuccess="return redirect('".strtolower($modelFileName)."')->with('status','Added Successfully !');";
        $storeUpdateSuccess="return redirect('".strtolower($modelFileName)."')->with('status','Updated Successfully !');";

    $controllerContent .='
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  &#36;request
     * @return \Illuminate\Http\Response
     */
    public function store(Request &#36;request)
    {
        &#36;this->validate(&#36;request,[
                '.$contentValidation.'
        ]);

        ';


    
        $contentSaveString="";
        foreach($request->field_name as $key=>$field){       

            if($request->field_type[$key]=="6" || $request->field_type[$key]=="7"){

                $controllerContent .="

        &#36;filename_".strtolower($modelFileName)."='';
        if (!empty(&#36;request->file('".$this->genarateFieldName($field)."'))) {
            &#36;img_".strtolower($modelFileName)." = &#36;request->file('".$this->genarateFieldName($field)."');
            &#36;upload_".strtolower($modelFileName)." = 'upload/".strtolower($modelFileName)."';
            &#36;filename_".strtolower($modelFileName)." = time() . '.' . &#36;img_".strtolower($modelFileName)."->getClientOriginalExtension();
            &#36;img_".strtolower($modelFileName)."->move(&#36;upload_".strtolower($modelFileName).", &#36;filename_".strtolower($modelFileName).");
        }

                ";


                $contentSaveString .="
        &#36;tab->".$this->genarateFieldName($field)."=&#36;filename_".strtolower($modelFileName).";";
            }else{
                $contentSaveString .="
        &#36;tab->".$this->genarateFieldName($field)."=&#36;request->".$this->genarateFieldName($field).";";
            }

            
        }

        

        $controllerContent .='
        &#36;tab=new '.$modelFileName.'();
        '.$contentSaveString.'
        &#36;tab->save();

        '.$storeSuccess.'

    }

    public function ajax(Request &#36;request)
    {
        &#36;this->validate(&#36;request,[
                '.$contentValidation.'
        ]);

        &#36;tab=new '.$modelFileName.'();
        '.$contentSaveString.'
        &#36;tab->save();

        echo json_encode(array("status"=>"success","msg"=>"Added Successfully."));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\&#$2$#;'.$modelFileName.'  &#36;'.strtolower($modelFileName).'
     * @return \Illuminate\Http\Response
     */

    private function methodToGetMembersCount(&#36;search=""){';
        $controllerContent .="

        &#36;tab=Customer::select('id','name','address','phone','email','last_invoice_no','created_at')
                     ->where('store_id',&#36;this->sdc->storeID())->orderBy('id','DESC')
                     ->when(&#36;search, function (&#36;query) use (&#36;search) {
                        &#36;query->where('id','LIKE','%'.&#36;search.'%');";
                        foreach($request->field_name as $key=>$field){                         
                            $controllerContent .="
                            &#36;query->orWhere('".$this->genarateFieldName($field)."','LIKE','%'.&#36;search.'%');";
                        }


                        $controllerContent .="
                            &#36;query->orWhere('created_at','LIKE','%'.&#36;search.'%');

                        return &#36;query;
                     })
                     ->count();
        return &#36;tab;
    }


    private function methodToGetMembers(&#36;start, &#36;length,&#36;search=''){";
        $controllerContent .="

        &#36;tab=Customer::select('id','name','address','phone','email','last_invoice_no','created_at')
                     ->where('store_id',&#36;this->sdc->storeID())->orderBy('id','DESC')
                     ->when(&#36;search, function (&#36;query) use (&#36;search) {
                        &#36;query->where('id','LIKE','%'.&#36;search.'%');";
                        foreach($request->field_name as $key=>$field){                         
                            $controllerContent .="
                            &#36;query->orWhere('".$this->genarateFieldName($field)."','LIKE','%'.&#36;search.'%');";
                        }


                        $controllerContent .="
                            &#36;query->orWhere('created_at','LIKE','%'.&#36;search.'%');

                        return &#36;query;
                     })
                     ->skip(&#36;start)->take(&#36;length)->get();
        return &#36;tab;
    }";

    $controllerContent .="

    public function datatable(Request &#36;request){

        &#36;draw = &#36;request->get('draw');
        &#36;start = &#36;request->get('start');
        &#36;length = &#36;request->get('length');
        &#36;search = &#36;request->get('search');

        &#36;search = (isset(&#36;search['value']))? &#36;search['value'] : '';

        &#36;total_members = &#36;this->methodToGetMembersCount(&#36;search); // get your total no of data;
        &#36;members = &#36;this->methodToGetMembers(&#36;start, &#36;length,&#36;search); //supply start and length of the table data

        &#36;data = array(
            'draw' => &#36;draw,
            'recordsTotal' => &#36;total_members,
            'recordsFiltered' => &#36;total_members,
            'data' => &#36;members,
        );

        echo json_encode(&#36;data);

    }

    ";

    $controllerContent .='
    public function show('.$modelFileName.' &#36;'.strtolower($modelFileName).')
    {
        ';
        $controllerContent .="return view('admin.pages.".$this->modelResourceDirectory($modelFileName).".".$this->modelResourceDirectory($modelFileName)."_list');";
    $controllerContent .='
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\&#$2$#;'.$modelFileName.'  &#36;'.strtolower($modelFileName).'
     * @return \Illuminate\Http\Response
     */
    public function edit('.$modelFileName.' &#36;'.strtolower($modelFileName).',&#36;id=0)
    {
        &#36;tab='.$modelFileName.'::find(&#36;id); ';

    $controllerContent .="     return view('admin.pages.".$this->modelResourceDirectory($modelFileName).".".$this->modelResourceDirectory($modelFileName)."_edit',['dataRow'=>&#36;tab,'edit'=>true]); ";

    $controllerContent .=' }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  &#36;request
     * @param  \App\&#$2$#;'.$modelFileName.'  &#36;'.strtolower($modelFileName).'
     * @return \Illuminate\Http\Response
     */
    public function update(Request &#36;request, '.$modelFileName.' &#36;'.strtolower($modelFileName).',&#36;id=0)
    {
        &#36;this->validate(&#36;request,[
                '.$contentValidation.'
        ]);
        ';

        $contentSaveString="";
        foreach($request->field_name as $key=>$field){       

            if($request->field_type[$key]=="6" || $request->field_type[$key]=="7"){

                $controllerContent .="

        &#36;filename_".strtolower($modelFileName)."=&#36;request->ex_".$this->genarateFieldName($field).";
        if (!empty(&#36;request->file('".$this->genarateFieldName($field)."'))) {
            &#36;img_".strtolower($modelFileName)." = &#36;request->file('".$this->genarateFieldName($field)."');
            &#36;upload_".strtolower($modelFileName)." = 'upload/".strtolower($modelFileName)."';
            &#36;filename_".strtolower($modelFileName)." = time() . '.' . &#36;img_".strtolower($modelFileName)."->getClientOriginalExtension();
            &#36;img_".strtolower($modelFileName)."->move(&#36;upload_".strtolower($modelFileName).", &#36;filename_".strtolower($modelFileName).");
        }

                ";


                $contentSaveString .="
        &#36;tab->".$this->genarateFieldName($field)."=&#36;filename_".strtolower($modelFileName).";";
            }else{
                $contentSaveString .="
        &#36;tab->".$this->genarateFieldName($field)."=&#36;request->".$this->genarateFieldName($field).";";
            }

            
        }


        $controllerContent .='
        &#36;tab='.$modelFileName.'::find(&#36;id);
        '.$contentSaveString.'
        &#36;tab->save();

        '.$storeUpdateSuccess.'
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\&#$2$#;'.$modelFileName.'  &#36;'.strtolower($modelFileName).'
     * @return \Illuminate\Http\Response
     */
    public function destroy('.$modelFileName.' &#36;'.strtolower($modelFileName).',&#36;id=0)
    {
        &#36;tab='.$modelFileName.'::find(&#36;id);
        &#36;tab->delete();
        ';
        $controllerContent .="return redirect('".strtolower($modelFileName)."')->with('status','Deleted Successfully !');";
        
    $controllerContent .='}
}
';

        $this->GenarateWithLink($controllerPathFile,$controllerContent);
    }

    private function CoreCreateViewFileResource($modelFileName,$page_route,$request){
        $createfilename=$this->modelResourceDirectory($modelFileName)."_create.blade.php";
        $resourceViewPath_create = __DIR__."/../../../resources/views/admin/pages/".$this->modelResourceDirectory($modelFileName)."/".$createfilename;


        $postCreate="'".$page_route."'";
        $res_create_content='';
        $res_create_content .='@extends("admin.layout.index")
@section("title","'.$request->page_name.'")
@section("page-name","'.$request->page_name.'")
@section("Module","'.$request->page_name.'")
@section("Module-Action","Create")
@section("content")
                <form action="{{url('.$postCreate.')}}" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered">
                    {{csrf_field()}}
                    '.$this->genrateFormField($request).'
                    
                    <div class="form-group form-actions">
                        <div class="col-md-9 col-md-offset-3">
                            <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-angle-right"></i> Submit</button>
                            <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Reset</button>
                        </div>
                    </div>
                </form>
@endsection';

        $this->GenarateWithLink($resourceViewPath_create,$res_create_content);
    }

    private function CoreEditViewFileResource($modelFileName,$page_route,$request){
        $createfilename=$this->modelResourceDirectory($modelFileName)."_edit.blade.php";
        $resourceViewPath_create = __DIR__."/../../../resources/views/admin/pages/".$this->modelResourceDirectory($modelFileName)."/".$createfilename;


        $postCreate="'".$page_route."/update/'.&#36;dataRow->id";
        $res_create_content='';
        $res_create_content .='@extends("admin.layout.index")
@section("title","'.$request->page_name.'")
@section("page-name","'.$request->page_name.'")
@section("Module","'.$request->page_name.'")
@section("Module-Action","Edit")
@section("content")
                <form action="{{url('.$postCreate.')}}" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered">
                    {{csrf_field()}}
                    '.$this->genrateEditFormField($request,1).'
                    
                    <div class="form-group form-actions">
                        <div class="col-md-9 col-md-offset-3">
                            <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-angle-right"></i> Submit</button>
                            <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Reset</button>
                        </div>
                    </div>
                </form>
@endsection';

        $this->GenarateWithLink($resourceViewPath_create,$res_create_content);
    }

    private function CoreListViewFileResource($modelFileName,$page_route,$request){
        $createfilename=$this->modelResourceDirectory($modelFileName)."_list.blade.php";
        $resourceViewPath_create = __DIR__."/../../../resources/views/admin/pages/".$this->modelResourceDirectory($modelFileName)."/".$createfilename;


        $postCreate="'".$page_route."'";
        $res_create_content='';
        $res_create_content .='@extends("admin.layout.index")
@section("title","'.$request->page_name.'")
@section("page-name","'.$request->page_name.'")
@section("Module","'.$request->page_name.'")
@section("Module-Action","List")
@section("content")
                <div class="table-responsive">
                    <table id="'.strtolower($modelFileName).'_lsit" class="table table-vcenter table-condensed table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center">ID</th>';

foreach($request->field_name as $key=>$field){       
$res_create_content .='
                                <th class="text-center">'.$field.'</th>';    
}
                                

$res_create_content .='
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
@endsection
@section("js")
';

$edturl="'".strtolower($modelFileName)."/edit'";
$dlturl="'".strtolower($modelFileName)."/delete'";

$res_create_content .='<script>
    
    $(document).ready(function(e){
        var '.strtolower($modelFileName).'EditLink="{{url('.$edturl.')}}";
        var '.strtolower($modelFileName).'DeleteLink="{{url('.$dlturl.')}}";

        function actionTemplate(id){';
        $res_create_content .="
            var actHTml='';
                
                actHTml+='<a href=";
                $res_create_content .='"';
                $res_create_content .="'+customerEditLink+'/'+id+'";
                $res_create_content .='" class="btn btn-green mr-1 btn-darken-2"><i class="icon-edit"></i> </a>';
                $res_create_content .="';";
$res_create_content .="
                actHTml+='<a href=";
$res_create_content .='"';
$res_create_content .="'+customerDeleteLink+'/'+id+'";

$res_create_content .='" class="btn btn-green mr-1 btn-darken-3"><i class="icon-trash"></i> </a>';
$res_create_content .="';";
$res_create_content .="
                return actHTml;
        }

        function replaceNull(valH){";
            $res_create_content .='
            var returnHt="";

            if(valH !== null && valH !== "") {
                    returnHt=valH;
                
                
            }

            return returnHt;
        }

        $("#post_list").dataTable({
            "bProcessing": true,
            "serverSide": true,
            "ajax":{

                url :"{{url(';
                    $res_create_content .="'".strtolower($modelFileName)."/datatable/ajax'";
                    $res_create_content .=')}}",
                headers: {';
                $res_create_content .="
                    'X-CSRF-TOKEN':'{{csrf_token()}}',

                },";
                $res_create_content .='type: "POST",
                complete:function(data){
                    console.log(data.responseJSON);
                    var totalData=data.responseJSON;
                    console.log(totalData.data);';
                    $res_create_content .="
                    var strHTML='';
                    $.each(totalData.data,function(key,row){
                        console.log(row);";
$res_create_content .="
                        strHTML+='<tr>';";

foreach($request->field_name as $key=>$field){       
$res_create_content .="
                        strHTML+='      <td>'+replaceNull(row.".$this->genarateFieldName($field).")+'</td>';";    
}

$res_create_content .="
                        strHTML+='      <td>'+actionTemplate(row.id)+'</td>';
                        strHTML+='</tr>';";
$res_create_content .='    
                    });

                    $("tbody").html(strHTML);

                    $("#'.strtolower($modelFileName).'_lsit").DataTable();
                },
                initComplete: function(settings, json) {
                    alert("DataTables has finished its initialisation.");
                  },
                error: function(){
                  $("#'.strtolower($modelFileName).'_lsit_processing").css("display","none");
                }
            }
        });
    });


    </script>
@include("admin.extra.datatable")
';

$res_create_content .='
@endsection';

        $this->GenarateWithLink($resourceViewPath_create,$res_create_content);
    }

    private function CoreMigrationFileResource($request){

        $resourceMigPath_create = __DIR__."/../../../database/migrations/";

        $migFileName=str_replace(" ","_",$request->page_name);
        $getMigrationTableFile=$this->getPluralPrase(strtolower($migFileName),strlen($migFileName));

        $migFileClassName=str_replace(" ","",$request->page_name);
        $getMigrationTableFileCLass=$this->getPluralPrase($migFileClassName,strlen($migFileClassName));

        //echo $getMigrationTableFileCLass; die();
        $slashes=date('Y_m_d_his')."_create_".$getMigrationTableFile."_table";

        $finalMigrationFIle=$resourceMigPath_create."".$slashes.".php";


        $migContent="";
        $migContent .="<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create".$getMigrationTableFileCLass."Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('".$getMigrationTableFile."', function (Blueprint &#36;table) {
            &#36;table->increments('id');";

foreach($request->field_name as $key=>$field){       
        $migContent .="
            &#36;table->string('".$this->genarateFieldName($field)."');";    
}

$migContent .="
            &#36;table->integer('store_id');
            &#36;table->integer('created_by');
            &#36;table->integer('updated_by');
            
            &#36;table->softDeletes();
            &#36;table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('".$getMigrationTableFile."');
    }
}
";
        
        $sqlCheckMax=\DB::table('migrations')->orderBy('batch','DESC')->first();
        \DB::statement("INSERT INTO ecom_migrations (migration,batch) values ('".$slashes."','".($sqlCheckMax->batch+1)."')");

        $this->GenarateWithLink($finalMigrationFIle,$migContent);
    }

    public function crudgenarate(Request $request)
    {
        $logPath = __DIR__;


        //Route Genaration Start
        //$this->CoreRouteResource($request->page_route);
        //Route Genaration End

        //Model Genaration Start
        //$modelPath = __DIR__."/../../";


        //$modelFileName=$this->genarateModelName($request->page_name);
        //$getMigrationTable=$this->getPluralPrase(strtolower($modelFileName),strlen($modelFileName));
        //$this->CoreModelResource($modelFileName,$getMigrationTable,$request);
        //Model Genaration End


        //Controller Genaration Start
        //$controllerPath = __DIR__."/";
        //$controllerPathFile = __DIR__."/".ucfirst($request->page_route)."Controller.php";
        //$this->CoreControllerResource($modelFileName,$controllerPathFile,$request);
        //Controller Genaration End

        //Resource Directory Genaration Start
        //$resourcePath = __DIR__."/../../../resources/views/admin/pages/".$this->modelResourceDirectory($modelFileName);
        //if($this->createDirectoryWithLocation($resourcePath))
        //Resource Directory Genaration End


        //Resource Create View Genaration Start
        //$this->CoreCreateViewFileResource($modelFileName,$request->page_route,$request);
        //$this->CoreEditViewFileResource($modelFileName,$request->page_route,$request);
        //$this->CoreListViewFileResource($modelFileName,$request->page_route,$request);
        //Resource Create View Genaration End
        
        //Migration Create Genaration Start
        $this->CoreMigrationFileResource($request);
        //Migration Create Genaration End

      
        //echo $routePath; die();
        dd($request);
    }

    
}
