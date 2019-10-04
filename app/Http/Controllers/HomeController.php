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
            
        }


        return $content;
    }

    private function genarateStaticDropDown($param=''){
        $content='
        <option value="">Please select</option>';
        $checkBoxArray=explode(",",$param);
        foreach ($checkBoxArray as $key => $value) {
            $content .='
            <option value="'.trim($value).'">'.$value.'</option>';
        }

        return $content;
    }

    private function genarateStaticCheckbox($filedName,$param){
        $content='';
        $checkBoxArray=explode(",",$param);
        foreach ($checkBoxArray as $key => $value) {
            $content .='
                                <div class="checkbox">
                                    <label for="example-checkbox1">
                                        <input type="checkbox" id="'.$filedName.'_'.$key.'" name="'.$filedName.'" value="'.trim($value).'"> '.$value.'
                                    </label>
                                </div>';
        }

        return $content;
    }


    private function genarateStaticRadioButton($filedName,$param){
        $content='';
        $checkBoxArray=explode(",",$param);
        foreach ($checkBoxArray as $key => $value) {
            $content .='
                                <div class="radio">
                                    <label for="example-radio1">
                                        <input type="radio" id="'.$filedName.'_'.$key.'" name="'.$filedName.'" value="'.trim($value).'">'.$value.'
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
        $routeContent .="\nRoute::get('/".$page_route."','".ucfirst($page_route)."Controller@index');";
        $routeContent .="\nRoute::post('/".$page_route."','".ucfirst($page_route)."Controller@store');";
        $routeContent .="\nRoute::post('/".$page_route."/ajax','".ucfirst($page_route)."Controller@ajaxSave');";
        $routeContent .="\nRoute::post('/".$page_route."/datatable/ajax','".ucfirst($page_route)."Controller@datatable');";
        $routeContent .="\nRoute::post('/".$page_route."/update/{id}','".ucfirst($page_route)."Controller@update');";
        $routeContent .="\n//======================== ".ucfirst($page_route)." Route End ===============================//";
        $this->GenarateWithLink($routePath,$routeContent);

    }

    private function CoreModelResource($modelFileName,$getMigrationTable){
        $modelContent='';
        $modelContent .="<?php

namespace App; 

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ".$modelFileName." extends Model
{
    use SoftDeletes;
    protected &#36;dates = ['deleted_at'];
    protected &#36;table='".$getMigrationTable."';
}
        ";

        $modelPathFile = __DIR__."/../../".$modelFileName.".php";

        $this->GenarateWithLink($modelPathFile,$modelContent);
    }

    private function CoreControllerResource($modelFileName,$controllerPathFile){
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
    public function index(){
        //'.formatDateTime(date('Y-m-d H:i:s')).'
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){';

    $controllerContent .="           
        return view('admin.pages.".$this->modelResourceDirectory($modelFileName).".".$this->modelResourceDirectory($modelFileName)."_create');";

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\&#$2$#;'.$modelFileName.'  &#36;'.strtolower($modelFileName).'
     * @return \Illuminate\Http\Response
     */
    public function show('.$modelFileName.' &#36;'.strtolower($modelFileName).')
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\&#$2$#;'.$modelFileName.'  &#36;'.strtolower($modelFileName).'
     * @return \Illuminate\Http\Response
     */
    public function edit('.$modelFileName.' &#36;'.strtolower($modelFileName).')
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  &#36;request
     * @param  \App\&#$2$#;'.$modelFileName.'  &#36;'.strtolower($modelFileName).'
     * @return \Illuminate\Http\Response
     */
    public function update(Request &#36;request, '.$modelFileName.' &#36;'.strtolower($modelFileName).')
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\&#$2$#;'.$modelFileName.'  &#36;'.strtolower($modelFileName).'
     * @return \Illuminate\Http\Response
     */
    public function destroy('.$modelFileName.' &#36;'.strtolower($modelFileName).')
    {
        //
    }
}
';

        $this->GenarateWithLink($controllerPathFile,$controllerContent);
    }

    private function CoreViewFileResource($modelFileName,$page_route,$request){
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

    public function crudgenarate(Request $request)
    {
        $logPath = __DIR__;


        //Route Genaration Start
        //$this->CoreRouteResource($request->page_route);
        //$this->GenarateWithLink($routePath,$routeContent);
        //Route Genaration End

        //Model Genaration Start
        $modelPath = __DIR__."/../../";
        $modelFileName=$this->genarateModelName($request->page_name);
        $getMigrationTable=$this->getPluralPrase(strtolower($modelFileName),strlen($modelFileName));
        //$this->CoreModelResource($modelFileName,$getMigrationTable);
        //Model Genaration End


        //Controller Genaration Start
        $controllerPath = __DIR__."/";
        $controllerPathFile = __DIR__."/".ucfirst($request->page_route)."Controller.php";
        $this->CoreControllerResource($modelFileName,$controllerPathFile);
        //Controller Genaration End

        //Resource Directory Genaration Start
        $resourcePath = __DIR__."/../../../resources/views/admin/pages/".$this->modelResourceDirectory($modelFileName);
        if($this->createDirectoryWithLocation($resourcePath))
        //Resource Directory Genaration End


        //Resource Create View Genaration Start
        $this->CoreViewFileResource($modelFileName,$request->page_route,$request);
        //Resource Create View Genaration End



        //echo $routePath; die();
        dd($request);
    }

    
}
