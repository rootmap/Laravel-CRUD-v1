
@extends("admin.layout.master")
@section("title","Site Settings Data")
@section("content")
        <section>
            <div class="content listing-content">
                <div class="in-content-wrapper">
                    <div class="box">
                        <div class="row no-gutters" style="border-bottom: 3px #fff solid;">
                            <div class="col text-left">
                                <div class="add-new">
                                    <a href="{{url('sitesettings/create')}}">Add New<i class="fas fa-plus"></i></a>
                                </div><!-- End add-new-->
                            </div><!-- End column-->
                            <div class="col">
                                <div class="heading-messages">
                                    <h3 class="text-center">Site Settings Listing</h3>
                                </div><!-- End heading-messages -->
                            </div><!-- End column -->
                            <div class="col text-right">
                                <div class="tools-btns">
                                    <!-- <a href="#"><i class="fas fa-print" data-toggle="tooltip" data-html="true"
                                            title="Print"></i></a>-->
                                    <a href="{{url('sitesettings/export/pdf')}}"><i class="fas fa-file-pdf" data-toggle="tooltip" data-html="true"
                                            title="Pdf"></i></a>
                                    <a href="{{url('sitesettings/export/excel')}}"><i class="fas fa-file-excel" data-toggle="tooltip" data-html="true"
                                            title="Excel"></i></a>
                                </div><!-- End tool-btns-->
                            </div><!-- End text-right-->

                        </div><!-- end row -->
                        <div class="row no-gutters">
                            <div class="col">
                                <table id="example" class="display table-hover table-responsive-xl listing">
                                    <thead>
                                        <tr>
                                            <th class="text-center">ID</th>
                                            <th class="text-center">Site Name</th>
                                            <th class="text-center">Site logo</th>
                                <th class="text-center">Created At</th>
                                <th class="text-center">Actions</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                @if(count($dataRow))
                                    @foreach($dataRow as $row)  
                                        <tr><td class="text-center">{{$row->id}}</td><td class="text-center">{{$row->sitename}}</td><td class="text-center">{{$row->sitelogo}}</td>
                                            <td>{{formatDate($row->created_at)}}</td>
                                            <td>
                                                <a href="{{url('sitesettings/edit/'.$row->id)}}"><i class="fas fa-edit"></i></a>
                                                <a href="{{url('sitesettings/delete/'.$row->id)}}"><i class="fas fa-trash-alt"></i></a>
                                            </td>
                                        
                                        </tr>
                                    @endforeach
                                @endif
                                        
                                    </tbody>
                                </table>
                            </div><!-- end column -->
                        </div><!-- end row -->
                    </div><!-- end box -->
                </div><!-- end in-content-wrapper -->
            </div><!-- end listing-content -->
        </section>
@endsection
@section("css")
    @include("admin.extra.lib.datatable.css")
@endsection

@section("js")
    @include("admin.extra.lib.datatable.js")
@endsection