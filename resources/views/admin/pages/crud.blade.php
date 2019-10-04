@extends('admin.layout.index')
@section('title','CRUD Form Page')
@section('page-name','CRUD Form Page')
@section('content')
                <!-- Basic Form Elements Title -->
                <!-- END Form Elements Title -->

                <!-- Basic Form Elements Content -->
                <form action="{{route('crudgenarate')}}" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="example-text-input">Page Name</label>
                        <div class="col-md-9">
                            <input type="text" id="page_name" class="form-control" placeholder="Text" name="page_name">
                            <span class="help-block">This is a help text</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="example-email-input">Page Route URL</label>
                        <div class="col-md-9">
                            <input type="text" id="page_route" class="form-control" placeholder="Text" name="page_route">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Field Name</th>
                                        <th>Field Type</th>
                                        <th>Related Table</th>
                                        <th>Option Field</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr id="tr1" class="crud-item">
                                        <td>1</td>
                                        <td>
                                            <input type="text" id="example-text-input" class="form-control" placeholder="Field Name" name="field_name[]"><br />
                                            <input type="text" id="example-text-input" class="form-control" placeholder="place Holder" name="field_name_placeholder[]">
                                        </td>
                                        <td>
                                            <select id="example-select" name="field_type[]" class="form-control" size="1">
                                                <option value="0">Select Type</option>
                                                <option value="1">Input Field</option>
                                                <option value="2">Text Area</option>
                                                <option value="3">Check Box</option>
                                                <option value="4">Radio Button</option>
                                                <option value="5">Select Option</option>
                                                <option value="6">Upload Image</option>
                                                <option value="7">Upload File</option>
                                            </select> <br />
                                            <input type="checkbox" id="example-text-input"  name="field_validation[]"> Validation Required
                                        </td>
                                        <td>
                                            <select id="example-select" name="field_table[]" class="form-control" size="1">
                                                <option value="1">Static Option</option>
                                                <option value="0">Select Table</option>
                                            </select>
                                        </td>
                                        <td>
                                            <input type="text" id="example-text-input" class="form-control" placeholder="Text" name="field_option[]">
                                        </td>
                                        <td>
                                            <button onclick="deleteRow(this)" class="btn btn-warning deleteRow btn-alt btn-default"><i class="fa fa-times fa-fw"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                    <div class="form-group form-actions">
                        <div class="col-md-6">
                            <button type="button" onclick="javascript:addmore();" class="btn btn-sm btn-primary"><i class="fa fa-angle-right"></i> Add More Field</button>
                        </div>
                        <div class="col-md-6">
                            
                            <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-angle-right"></i> Submit</button>
                            <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Reset</button>
                        </div>
                    </div>
                </form>
                <!-- END Basic Form Elements Content -->
@endsection

@section('js')
    <script type="text/javascript">
        

        function refreshSerial(){
            var r=1;
            $.each($(".crud-item"),function(key,row){
                $(this).attr("id","tr"+r);
                $(this).find("td:first").html(r);
                r++;
            });
        }

        $('tbody').sortable({
            stop: function (event, ui) {
                refreshSerial(); // re-number rows after sorting
            }
        });

        function addmore(){
            $("tr[class^='crud-item']:last").after($("tr[class^='crud-item']:last").clone());
            var item=$(".crud-item").length;
            refreshSerial();
        }

        function deleteRow(place){
            var item=$(".crud-item").length;
            if(item>1)
            {
                var itemID=$(place).parent().parent().attr("id");
                $("#"+itemID).remove()
            }
            refreshSerial(); 
        }
        var rootURL="{{url('/')}}";
        $(document).ready(function(){
            $("#page_name").keyup(function(){
                var getPageName=$(this).val();
                var getPageName=$.trim(getPageName);
                var getPageName=getPageName.replace(" ","").toLowerCase();
                console.log(getPageName);
                //page_route
                $("#page_route").val(getPageName);
            });
        });
    </script>
@endsection
