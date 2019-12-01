<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\PageName;
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

    public function dashboard()
    {
        return view('admin.pages.dashboard.index');
    }

    public function table()
    {
        return view('admin.pages.table');
    }


    public function create()
    {
        return view('admin.pages.create');
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
        return view('admin.pages.testpage.testpage_create');
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
        $tables = PageName::all();
        return view('admin.pages.crud',['table'=>$tables]);
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
                        <div class="form-row">
                            <div class="col-md">
                                <div class="form-group">
                                    <label for="inputGroupSelect07" class="" for="'.$this->genarateFieldName($field).'">'.$field.':</label>
                                    <input type="text" id="'.$this->genarateFieldName($field).'" name="'.$this->genarateFieldName($field).'" class="form-control" placeholder="'.$request->field_name_placeholder[$key].'">
                                </div><!-- end form-group -->
                            </div><!-- end column -->
                        </div><!-- end form-row -->
                        ';
           }
           elseif($request->field_type[$key]==2)
           {
                $content .='
                        <div class="form-group">
                                <h4 class="input-group-text left">'.$field.'</h4>
                                <textarea class="form-control textarea text-left p-3 h-100"
                                        id="'.$this->genarateFieldName($field).'" name="'.$this->genarateFieldName($field).'" rows="5" placeholder="'.$request->field_name_placeholder[$key].'"></textarea>
                        </div><!-- end form-group -->
                        ';
           }
           elseif($request->field_type[$key]==3)
           {
                $content .='
                        <div class="input-group mb-4">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              '.$this->genarateStaticCheckbox($this->genarateFieldName($field),$request->field_option[$key]).'
                            </div>
                          </div>
                          <input type="text" disabled="disabled"  for="'.$this->genarateFieldName($field).'" class="form-control" value="'.$request->field_name_placeholder[$key].'" />
                        </div>
                        ';
           }
           elseif($request->field_type[$key]==4)
           {
                $content .='

                        <div class="input-group mb-4">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              '.$this->genarateStaticRadioButton($this->genarateFieldName($field),$request->field_option[$key]).'
                            </div>
                          </div>
                          <input type="text" disabled="disabled"  for="'.$this->genarateFieldName($field).'" class="form-control" value="'.$request->field_name_placeholder[$key].'" />
                        </div>
                        ';
           }
           elseif($request->field_type[$key]==5)
           {

                if($request->field_table[$key]==1){

                    $content .='
                        <div class="form-row">
                            <div class="col-md">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <label for="inputGroupSelect01" class="input-group-text" for="'.$this->genarateFieldName($field).'">'.$request->field_name_placeholder[$key].':</label>
                                        </div>
                                        <select id="'.$this->genarateFieldName($field).'" name="'.$this->genarateFieldName($field).'" class="custom-select" size="1">
                                            '.$this->genarateStaticDropDown($request->field_option[$key]).'
                                        </select>
                                        <i class="fas fa-angle-down"></i>
                                    </div>
                            </div><!-- end form-group -->
                            </div><!-- end column -->
                        </div><!-- end form-row -->';
                }
                else{

                    $content .='
                        <div class="form-row">
                            <div class="col-md">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <label for="inputGroupSelect07" class="input-group-text" for="'.$this->genarateFieldName($field).'">'.$request->field_name_placeholder[$key].':</label>
                                        </div>
                                        <select id="'.$this->genarateFieldName($field).'" name="'.$this->genarateFieldName($field).'" class="custom-select" size="1">';
                                        $content .='
                                        <option value="">Choose</option>
                                        @if(isset(&#36;dataRow_'.$request->field_table[$key].'))    
                                            @if(count(&#36;dataRow_'.$request->field_table[$key].')>0)
                                                @foreach(&#36;dataRow_'.$request->field_table[$key].' as &#36;'.$request->field_table[$key].')
                                                    ';
                                            $datExplodeField=explode(",",$request->field_option[$key]);        
                                            $content .='<option value="{{&#36;'.$request->field_table[$key].'->'.$datExplodeField[0].'}}">{{&#36;'.$request->field_table[$key].'->'.$datExplodeField[1].'}}</option>
                                            ';
                                            $content .='        
                                                @endforeach
                                            @endif
                                        @endif 
                                        ';

                                        $content .='
                                        </select>
                                        <i class="fas fa-angle-down"></i>
                                    </div>
                            </div><!-- end form-group -->
                            </div><!-- end column -->
                        </div><!-- end form-row -->';                    
                }

                
           }
           elseif($request->field_type[$key]==6)
           {
                $content .='
                        <div class="form-row">
                            <div class="col-md">
                                <div class="form-group">
                                    <label for="inputGroupSelect07" class="" for="'.$this->genarateFieldName($field).'">'.$field.':</label>
                                <input type="file" id="'.$this->genarateFieldName($field).'" name="'.$this->genarateFieldName($field).'">
                            </div><!-- end form-group -->
                            </div><!-- end column -->
                        </div><!-- end form-row -->';
           }
           elseif($request->field_type[$key]==7)
           {
                $content .='
                        <div class="form-row">
                            <div class="col-md">
                                <div class="form-group">
                                    <label for="inputGroupSelect07" class="" for="'.$this->genarateFieldName($field).'">'.$field.':</label>
                                <input type="file" id="'.$this->genarateFieldName($field).'" name="'.$this->genarateFieldName($field).'">
                            </div><!-- end form-group -->
                            </div><!-- end column -->
                        </div><!-- end form-row -->';
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
                        <div class="form-row">
                            <div class="col-md">
                                <div class="form-group">
                                    <label for="inputGroupSelect07" class="" for="'.$this->genarateFieldName($field).'">'.$field.':</label>
                                    <input type="text" 
                                     ';

                                $content .='
                                <?php 
                                if(isset(&#36;dataRow->'.$this->genarateFieldName($field).')){
                                    ?>
                                    value="{{&#36;dataRow->'.$this->genarateFieldName($field).'}}" 
                                    <?php 
                                }
                                ?>
                                ';

                                $content .=' id="'.$this->genarateFieldName($field).'" name="'.$this->genarateFieldName($field).'" class="form-control" placeholder="'.$request->field_name_placeholder[$key].'">
                                </div><!-- end form-group -->
                            </div><!-- end column -->
                        </div><!-- end form-row -->';
           }
           elseif($request->field_type[$key]==2)
           {
                $content .='
                        <div class="form-group">
                                <h4>'.$field.'</h4>
                                <textarea class="form-control textarea text-left p-3 h-100"
                                        id="'.$this->genarateFieldName($field).'" name="'.$this->genarateFieldName($field).'" rows="5" placeholder="'.$request->field_name_placeholder[$key].'">';
                                    $content .='<?php 
                                if(isset(&#36;dataRow->'.$this->genarateFieldName($field).')){
                                    
                                    echo &#36;dataRow->'.$this->genarateFieldName($field).';
                                    
                                }
                                ?>';
                                $content .='</textarea>
                        </div><!-- end form-group -->';
           }
           elseif($request->field_type[$key]==3)
           {
                $content .='
                        <div class="input-group mb-4">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              '.$this->genarateStaticCheckbox($this->genarateFieldName($field),$request->field_option[$key],$data).'
                            </div>
                          </div>
                          <input type="text" disabled="disabled"  for="'.$this->genarateFieldName($field).'" class="form-control" value="'.$request->field_name_placeholder[$key].'" />
                        </div>';
           }
           elseif($request->field_type[$key]==4)
           {
                $content .='

                        <div class="input-group mb-4">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              '.$this->genarateStaticRadioButton($this->genarateFieldName($field),$request->field_option[$key],$data).'
                            </div>
                          </div>
                          <input type="text" disabled="disabled"  for="'.$this->genarateFieldName($field).'" class="form-control" value="'.$request->field_name_placeholder[$key].'" />
                        </div>';
           }
           elseif($request->field_type[$key]==5)
           {

                if($request->field_table[$key]==1){

                    $content .='
                        <div class="form-row">
                            <div class="col-md">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <label for="inputGroupSelect07" class="" for="'.$this->genarateFieldName($field).'">'.$request->field_name_placeholder[$key].':</label>
                                        </div>
                                        <select id="'.$this->genarateFieldName($field).'" name="'.$this->genarateFieldName($field).'" class="custom-select" size="1">
                                            '.$this->genarateStaticDropDown($request->field_option[$key],$data,$this->genarateFieldName($field)).'
                                        </select>
                                        <i class="fas fa-angle-down"></i>
                                    </div>
                                </div><!-- end form-group -->
                            </div><!-- end column -->
                        </div><!-- end form-row -->';
                }
                else{

                    $content .='
                        <div class="form-row">
                            <div class="col-md">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <label for="inputGroupSelect07" class="" for="'.$this->genarateFieldName($field).'">'.$request->field_name_placeholder[$key].':</label>
                                        </div>
                                        <select id="'.$this->genarateFieldName($field).'" name="'.$this->genarateFieldName($field).'" class="custom-select" size="1">';
                                        $content .='
                                        <option value="">Choose</option>
                                        @if(count(&#36;dataRow_'.$request->field_table[$key].')>0)
                                            @foreach(&#36;dataRow_'.$request->field_table[$key].' as &#36;'.$request->field_table[$key].')
                                                ';
                                        $datExplodeField=explode(",",$request->field_option[$key]);        
                                        $content .='<option 
                                        @if(isset(&#36;dataRow->'.$datExplodeField[0].'))
                                            @if(&#36;dataRow->'.$datExplodeField[0].'==&#36;'.$request->field_table[$key].'->'.$datExplodeField[0].')
                                                selected="selected" 
                                            @endif
                                        @endif 
                                         value="{{&#36;'.$request->field_table[$key].'->'.$datExplodeField[0].'}}">{{&#36;'.$request->field_table[$key].'->'.$datExplodeField[1].'}}</option>
                                        ';
                                        $content .='        
                                            @endforeach
                                        @endif
                                        ';

                                        $content .='
                                        </select>
                                        <i class="fas fa-angle-down"></i>
                                    </div>
                            </div><!-- end form-group -->
                            </div><!-- end column -->
                        </div><!-- end form-row -->';                    
                }

                
           }
           elseif($request->field_type[$key]==6)
           {
                $imgEncodeURL="'upload/".strtolower($this->genarateModelName($request->page_name))."/'.&#36;dataRow->".$this->genarateFieldName($field);
                $content .='
                        <div class="form-row">
                            <div class="col-md">
                                <div class="form-group">

                                    <label for="inputGroupSelect07" class="" for="'.$this->genarateFieldName($field).'">'.$field.':</label>
                                <input type="file" id="'.$this->genarateFieldName($field).'" name="'.$this->genarateFieldName($field).'">
                                <input type="hidden" value="{{&#36;dataRow->'.$this->genarateFieldName($field).'}}" name="ex_'.$this->genarateFieldName($field).'" />
                                @if(isset(&#36;dataRow->'.$this->genarateFieldName($field).'))
                                    @if(!empty(&#36;dataRow->'.$this->genarateFieldName($field).'))
                                        <img src="{{url('.$imgEncodeURL.')}}" width="150">
                                    @endif
                                @endif
                            </div><!-- end form-group -->
                            </div><!-- end column -->
                        </div><!-- end form-row -->';
           }
           elseif($request->field_type[$key]==7)
           {
                $imgEncodeURL="'upload/".strtolower($this->genarateModelName($request->page_name))."/'.&#36;dataRow->".$this->genarateFieldName($field);
                $content .='

                        <div class="form-row">
                            <div class="col-md">
                                <div class="form-group">
                                    <label for="inputGroupSelect07" class="" for="'.$this->genarateFieldName($field).'">'.$field.':</label>
                                <input type="file" id="'.$this->genarateFieldName($field).'" name="'.$this->genarateFieldName($field).'">
                                <input type="hidden" value="{{&#36;dataRow->'.$this->genarateFieldName($field).'}}" name="ex_'.$this->genarateFieldName($field).'" />
                                @if(isset(&#36;dataRow->'.$this->genarateFieldName($field).'))
                                    @if(!empty(&#36;dataRow->'.$this->genarateFieldName($field).'))
                                        <img src="{{url('.$imgEncodeURL.')}}" width="150">
                                    @endif
                                @endif
                            </div><!-- end form-group -->
                            </div><!-- end column -->
                        </div><!-- end form-row -->';
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
                                        &nbsp;<input type="checkbox" ';

                                        if(!empty($datafill)){
                                            $content .=' <?php 
                                            if(&#36;dataRow->'.$filedName.'=="'.trim($value).'"){
                                                ?>
                                                checked="checked" 
                                                <?php 
                                            }
                                            ?>';
                                        }

                                       $content .=' id="'.$filedName.'_'.$key.'" name="'.$filedName.'" value="'.trim($value).'">&nbsp;'.$value.'  &nbsp; 
                                    ';
        }

        return $content;
    }


    private function genarateStaticRadioButton($filedName,$param,$datafill=''){
        $content='';
        $checkBoxArray=explode(",",$param);
        foreach ($checkBoxArray as $key => $value) {
            $content .='
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
                                        id="'.$filedName.'_'.$key.'" name="'.$filedName.'" value="'.trim($value).'">&nbsp;'.$value."&nbsp; ";
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
use Illuminate\Http\Request;';

foreach($request->field_name as $key=>$field){
    if(isset($request->field_type[$key]))
    {
        if($request->field_type[$key]==5){
            if($request->field_table[$key]==1){}
            else{
                //echo 22; die();
                //echo $request->field_table[$key];
                $controllerContent .='
use App\&#$2$#;'.$request->field_table[$key].';
                ';
            }

            //echo 1; die();
            
        }
    }
}

$controllerContent .='

class '.$modelFileName.'Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){';

        $controllerContent .="
        &#36;tab=".$modelFileName."::all();";

        $controllerContent .="
        return view('admin.pages.".$this->modelResourceDirectory($modelFileName).".".$this->modelResourceDirectory($modelFileName)."_list',['dataRow'=>&#36;tab]);";
        
     $controllerContent .='
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){';

        $perseDataConcat="";
        $perseDataConcatParam="";

        $contentValidation="";


        foreach($request->field_name as $key=>$field){

            //$field=$_POST['field_validation_'.($key+1)];

            if(isset($_POST['field_validation_'.($key+1)]))
            {
                    $contentValidation .="
                '".$this->genarateFieldName($field)."'=>'required',";
            }

        }

        foreach($request->field_name as $key=>$field){
            if(isset($request->field_type[$key]))
            {
                if($request->field_type[$key]==5){
                    if($request->field_table[$key]==1){}
                    else{

                        $controllerContent .="
        &#36;tab_".$request->field_table[$key]."=".$request->field_table[$key]."::all();";
                        if(!empty($perseDataConcatParam)){
                            $perseDataConcatParam .=",'dataRow_".$request->field_table[$key]."'=>&#36;tab_".$request->field_table[$key]."";
                        }
                        else
                        {
                            $perseDataConcatParam .="'dataRow_".$request->field_table[$key]."'=>&#36;tab_".$request->field_table[$key]."";
                        }
                        
                    }
                    
                }
            }
        }

        if(!empty($perseDataConcatParam)){
            $perseDataConcat=",[".$perseDataConcatParam."]";
        }


        $storeSuccess="return redirect('".strtolower($modelFileName)."')->with('status','Added Successfully !');";
        $storeUpdateSuccess="return redirect('".strtolower($modelFileName)."')->with('status','Updated Successfully !');";

    $controllerContent .="           
        return view('admin.pages.".$this->modelResourceDirectory($modelFileName).".".$this->modelResourceDirectory($modelFileName)."_create'".$perseDataConcat.");";


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


        $controllerContent .="
        &#36;tab=".$modelFileName."::all();";


        $controllerContent .="return view('admin.pages.".$this->modelResourceDirectory($modelFileName).".".$this->modelResourceDirectory($modelFileName)."_list',['dataRow'=>&#36;tab]);";
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
        $perseDataConcat="";
        $perseDataConcatParam="";
        foreach($request->field_name as $key=>$field){
            if(isset($request->field_type[$key]))
            {
                if($request->field_type[$key]==5){
                    if($request->field_table[$key]==1){}
                    else{

                        $controllerContent .="
        &#36;tab_".$request->field_table[$key]."=".$request->field_table[$key]."::all();";
                        if(!empty($perseDataConcatParam)){
                            $perseDataConcatParam .=",'dataRow_".$request->field_table[$key]."'=>&#36;tab_".$request->field_table[$key]."";
                        }
                        else
                        {
                            $perseDataConcatParam .="'dataRow_".$request->field_table[$key]."'=>&#36;tab_".$request->field_table[$key]."";
                        }
                        
                    }
                    
                }
            }
        }

        if(!empty($perseDataConcatParam)){
            $perseDataConcat=",[".$perseDataConcatParam.",'dataRow'=>&#36;tab,'edit'=>true]";
        }
        else{
            $perseDataConcat=",['dataRow'=>&#36;tab,'edit'=>true]";
        }

    $controllerContent .="     
        return view('admin.pages.".$this->modelResourceDirectory($modelFileName).".".$this->modelResourceDirectory($modelFileName)."_edit'".$perseDataConcat."); ";




    $contentValidation="";
    foreach($request->field_name as $key=>$field){
        if($request->field_type[$key]=="6" || $request->field_type[$key]=="7"){
            
        }
        else
        {

            if(isset($_POST['field_validation_'.($key+1)]))
            {
                    $contentValidation .="
                '".$this->genarateFieldName($field)."'=>'required',";
            }

            /*if(isset($request->field_validation[$key]))
            {
                if($request->field_validation[$key]=="on"){
                    $contentValidation .="
                '".$this->genarateFieldName($field)."'=>'required',";
                }
            }*/
        }
    }

    $controllerContent .=' 
    }

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
        $listRoute="'".$page_route."/list'";
        $res_create_content='';
        $res_create_content .='
@extends("admin.layout.master")
@section("title","'.$request->page_name.'")
@section("content")
<section>
            <div class="content add-details">
                <div class="in-content-wrapper">
                    <div class="box">
                        <div class="hotel-listing-form">
                            <form class="text-left">
                                <div class="form-row">
                                    <div class="col">
                                        <div class="details-text">
                                            <h4>Add New '.$request->page_name.'</h4>
                                        </div><!-- end details-text -->
                                    </div><!-- End column -->
                                    <div class="col-md-6">
                                        <div class="breadcrumb">
                                            <div class="breadcrumb-item"><i class="fas fa-angle-right"></i><a href="{{url('.$listRoute.')}}"> '.$request->page_name.' Data</a>
                                            </div>
                                            <div class="breadcrumb-item active"><i class="fas fa-angle-right"></i> Create New 
                                            </div>
                                        </div><!-- end breadcrumb -->
                                    </div><!-- End column -->
                                </div><!-- end row -->
                            </form>
                        </div>


                        <div class="hotel-listing-form">
                            <form class="text-center" action="{{url('.$postCreate.')}}" method="post" enctype="multipart/form-data">
                               
                               {{csrf_field()}}
                            '.$this->genrateFormField($request).'



                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <button type="submit" class="btn">Submit</button>
                                    </li>
                                    <li class="list-inline-item">
                                        <button type="submit" class="btn">Cancel</button>
                                    </li>
                                </ul>

                            </form>
                        </div><!-- end hotel-listing-form -->
                    </div><!-- end box -->
                </div><!-- end in-content-wrapper -->
            </div><!-- end add-details -->
        </section>
@endsection';



        $this->GenarateWithLink($resourceViewPath_create,$res_create_content);
    }

    private function CoreEditViewFileResource($modelFileName,$page_route,$request){
        $createfilename=$this->modelResourceDirectory($modelFileName)."_edit.blade.php";
        $resourceViewPath_create = __DIR__."/../../../resources/views/admin/pages/".$this->modelResourceDirectory($modelFileName)."/".$createfilename;


        $postCreate="'".$page_route."/update/'.&#36;dataRow->id";
        $res_create_content='';
        $listRoute="'".$page_route."/list'";
        $CreateDataRoute="'".$page_route."/create'";
        $res_create_content .='

@extends("admin.layout.master")
@section("title","'.$request->page_name.'")
@section("content")
<section>
            <div class="content add-details">
                <div class="in-content-wrapper">
                    <div class="box">
                        <div class="hotel-listing-form">
                            <form class="text-left">
                                <div class="form-row">
                                    <div class="col">
                                        <div class="details-text">
                                            <h4>Add New '.$request->page_name.'</h4>
                                        </div><!-- end details-text -->
                                    </div><!-- End column -->
                                    <div class="col-md-6">
                                        <div class="breadcrumb">
                                            <div class="breadcrumb-item"><i class="fas fa-angle-right"></i><a href="{{url('.$listRoute.')}}"> Data List </a>
                                            </div>
                                            <div class="breadcrumb-item active"><i class="fas fa-angle-right"></i><a href="{{url('.$CreateDataRoute.')}}">  Create New </a>
                                            </div>
                                            <div class="breadcrumb-item"><i class="fas fa-angle-right"></i> Edit / Modify 
                                            </div>
                                            
                                        </div><!-- end breadcrumb -->
                                    </div><!-- End column -->
                                </div><!-- end row -->
                            </form>
                        </div>


                        <div class="hotel-listing-form">
                            <form class="text-center" action="{{url('.$postCreate.')}}" method="post" enctype="multipart/form-data" >
                               
                               {{csrf_field()}}
                            '.$this->genrateEditFormField($request,1).'



                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <button type="submit" class="btn">Update</button>
                                    </li>
                                    <li class="list-inline-item">
                                        <button type="submit" class="btn">Cancel</button>
                                    </li>
                                </ul>

                            </form>
                        </div><!-- end hotel-listing-form -->
                    </div><!-- end box -->
                </div><!-- end in-content-wrapper -->
            </div><!-- end add-details -->
        </section>
@endsection
';

        $this->GenarateWithLink($resourceViewPath_create,$res_create_content);
    }

    private function CoreListViewFileResource($modelFileName,$page_route,$request){
        $createfilename=$this->modelResourceDirectory($modelFileName)."_list.blade.php";
        $resourceViewPath_create = __DIR__."/../../../resources/views/admin/pages/".$this->modelResourceDirectory($modelFileName)."/".$createfilename;


        $postCreate="'".$page_route."'";
        $res_create_content='';
        $listRoute="'".$page_route."/list'";
        $CreateDataRoute="'".$page_route."/create'";
        $res_create_content .='
@extends("admin.layout.master")
@section("title","'.$request->page_name.' Data")
@section("content")
        <section>
            <div class="content listing-content">
                <div class="in-content-wrapper">
                    <div class="box">
                        <div class="row no-gutters" style="border-bottom: 3px #fff solid;">
                            <div class="col text-left">
                                <div class="add-new">
                                    <a href="{{url('.$CreateDataRoute.')}}">Add New<i class="fas fa-plus"></i></a>
                                </div><!-- End add-new-->
                            </div><!-- End column-->
                            <div class="col">
                                <div class="heading-messages">
                                    <h3 class="text-center">'.$request->page_name.' Listing</h3>
                                </div><!-- End heading-messages -->
                            </div><!-- End column -->
                            <div class="col text-right">
                                <div class="tools-btns">
                                    <!-- <a href="#"><i class="fas fa-print" data-toggle="tooltip" data-html="true"
                                            title="Print"></i></a>-->
                                    <a href="#"><i class="fas fa-file-pdf" data-toggle="tooltip" data-html="true"
                                            title="Pdf"></i></a>
                                    <a href="#"><i class="fas fa-file-excel" data-toggle="tooltip" data-html="true"
                                            title="Excel"></i></a>
                                </div><!-- End tool-btns-->
                            </div><!-- End text-right-->

                        </div><!-- end row -->
                        <div class="row no-gutters">
                            <div class="col">
                                <table id="example" class="display table-hover table-responsive-xl listing">
                                    <thead>
                                        <tr>
                                            <th class="text-center">ID</th>';
                                            $keyPlus=1;
                                foreach($request->field_name as $key=>$field){       
                                    $fieldCHeckName="field_data_table_".$keyPlus;
                                            if(isset($_POST[$fieldCHeckName]))
                                            {
                                                $res_create_content .='
                                            <th class="text-center">'.$field.'</th>';
                                            }
                                    

                                            $keyPlus++;
                                }
                                
                                $res_create_content .='
                                <th class="text-center">Created At</th>
                                <th class="text-center">Actions</th>

                                        </tr>
                                    </thead>
                                    <tbody>';

                                        $res_create_content .='
                                @if(count(&#36;dataRow))
                                    @foreach(&#36;dataRow as $row)  
                                        <tr>';
                                            

                                            $res_create_content .='<td class="text-center">{{&#36;row->id}}</td>';
                                            $keyPlus=1;
                                            foreach($request->field_name as $key=>$field){ 
                                                $fieldCHeckName="field_data_table_".$keyPlus;
                                                if(isset($_POST[$fieldCHeckName]))
                                                {
                                                    $res_create_content .='<td class="text-center">{{&#36;row->'.$this->genarateFieldName($field).'}}</td>';
                                                }
                                                $keyPlus++;
                                            }

                                            $edturl="'".strtolower($modelFileName)."/edit/'.&#36;row->id";
                                            $dlturl="'".strtolower($modelFileName)."/delete/'.&#36;row->id";
                                            $res_create_content .='
                                            <td>{{formatDate(&#36;row->created_at)}}</td>
                                            <td>
                                                <a href="{{url('.$edturl.')}}"><i class="fas fa-edit"></i></a>
                                                <a href="{{url('.$dlturl.')}}"><i class="fas fa-trash-alt"></i></a>
                                            </td>
                                        ';

                $res_create_content .='
                                        </tr>
                                    @endforeach
                                @endif
                                        ';  
                                        
                            $res_create_content .='
                                    </tbody>
                                </table>
                            </div><!-- end column -->
                        </div><!-- end row -->
                    </div><!-- end box -->
                </div><!-- end in-content-wrapper -->
            </div><!-- end listing-content -->
        </section>
@endsection';

$res_create_content .='
@section("css")
    @include("admin.extra.lib.datatable.css")
@endsection

@section("js")
    @include("admin.extra.lib.datatable.js")
@endsection';
//dataRow




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
        \DB::statement("INSERT INTO ecom_page_names (name,db_table,route_link) values ('".$migFileClassName."','".$getMigrationTableFile."','".$request->page_route."')");
        $sqlCheckMax=\DB::table('migrations')->orderBy('batch','DESC')->first();
        \DB::statement("INSERT INTO ecom_migrations (migration,batch) values ('".$slashes."','".($sqlCheckMax->batch+1)."')");

        $laraTableDB="CREATE TABLE `ecom_".$getMigrationTableFile."` (
            `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,";
        foreach($request->field_name as $key=>$field){       
                $laraTableDB .="
                `".$this->genarateFieldName($field)."` VARCHAR(191) NULL  DEFAULT NULL COLLATE 'utf8mb4_unicode_ci',";    
        }
            
        $laraTableDB.="    
            `store_id` INT(11) NULL DEFAULT NULL,
            `created_by` INT(11) NULL DEFAULT NULL,
            `updated_by` INT(11) NULL DEFAULT NULL,
            `deleted_at` TIMESTAMP NULL DEFAULT NULL,
            `created_at` TIMESTAMP NULL DEFAULT NULL,
            `updated_at` TIMESTAMP NULL DEFAULT NULL,
            PRIMARY KEY (`id`)
        )
        COLLATE='utf8mb4_unicode_ci'
        ENGINE=InnoDB
        ;
        ";

        \DB::statement($laraTableDB);

        $this->GenarateWithLink($finalMigrationFIle,$migContent);
    }

    public function crudgenarate(Request $request)
    {

        //dd($request);

        $logPath = __DIR__;


        //Route Genaration Start
        $this->CoreRouteResource($request->page_route);
        //Route Genaration End

        //Model Genaration Start
        $modelFileName=$this->genarateModelName($request->page_name);
        $getMigrationTable=$this->getPluralPrase(strtolower($modelFileName),strlen($modelFileName));
        $this->CoreModelResource($modelFileName,$getMigrationTable,$request);
        //Model Genaration End


        //Controller Genaration Start
        $controllerPath = __DIR__."/";
        $controllerPathFile = __DIR__."/".ucfirst($request->page_route)."Controller.php";
        $this->CoreControllerResource($modelFileName,$controllerPathFile,$request);
        //Controller Genaration End

        //Resource Directory Genaration Start
        $resourcePath = __DIR__."/../../../resources/views/admin/pages/".$this->modelResourceDirectory($modelFileName);
        if($this->createDirectoryWithLocation($resourcePath))
        //Resource Directory Genaration End


        //Resource Create View Genaration Start
        $this->CoreCreateViewFileResource($modelFileName,$request->page_route,$request);
        $this->CoreEditViewFileResource($modelFileName,$request->page_route,$request);
        $this->CoreListViewFileResource($modelFileName,$request->page_route,$request);
        //Resource Create View Genaration End
        
        //Migration Create Genaration Start
        $this->CoreMigrationFileResource($request);
        //Migration Create Genaration End

        //dd($request);
        //echo $routePath; die();
        return redirect(url('crud'))->with('status',$request->page_name.' created successfully.');
    }

    
}
