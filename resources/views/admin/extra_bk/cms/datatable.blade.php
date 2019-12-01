
$res_create_content .='
@section("js")
<script>
    
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