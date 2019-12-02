

@extends("admin.layout.master")
@section("title","Test Phased")
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
                                            <h4>Add New Test Phased</h4>
                                        </div><!-- end details-text -->
                                    </div><!-- End column -->
                                    <div class="col-md-6">
                                        <div class="breadcrumb">
                                            <div class="breadcrumb-item"><i class="fas fa-angle-right"></i><a href="{{url('testphased/list')}}"> Data List </a>
                                            </div>
                                            <div class="breadcrumb-item active"><i class="fas fa-angle-right"></i><a href="{{url('testphased/create')}}">  Create New </a>
                                            </div>
                                            <div class="breadcrumb-item"><i class="fas fa-angle-right"></i> Edit / Modify 
                                            </div>
                                            
                                        </div><!-- end breadcrumb -->
                                    </div><!-- End column -->
                                </div><!-- end row -->
                            </form>
                        </div>


                        <div class="hotel-listing-form">
                            <form class="text-center" action="{{url('testphased/update/'.$dataRow->id)}}" method="post" enctype="multipart/form-data" >
                               
                               {{csrf_field()}}
                            
                        <div class="form-row">
                            <div class="col-md">
                                <div class="form-group">
                                    <label for="inputGroupSelect07" class="" for="name">Name:</label>
                                    <input type="text" 
                                     
                                <?php 
                                if(isset($dataRow->name)){
                                    ?>
                                    value="{{$dataRow->name}}" 
                                    <?php 
                                }
                                ?>
                                 id="name" name="name" class="form-control" placeholder="Enter Name">
                                </div><!-- end form-group -->
                            </div><!-- end column -->
                        </div><!-- end form-row -->



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
