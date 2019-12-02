
@extends("admin.layout.master")
@section("title","Attendance")
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
                                            <h4>Add New Attendance</h4>
                                        </div><!-- end details-text -->
                                    </div><!-- End column -->
                                    <div class="col-md-6">
                                        <div class="breadcrumb">
                                            <div class="breadcrumb-item"><i class="fas fa-angle-right"></i><a href="{{url('attendance/list')}}"> Attendance Data</a>
                                            </div>
                                            <div class="breadcrumb-item active"><i class="fas fa-angle-right"></i> Create New 
                                            </div>
                                        </div><!-- end breadcrumb -->
                                    </div><!-- End column -->
                                </div><!-- end row -->
                            </form>
                        </div>


                        <div class="hotel-listing-form">
                            <form class="text-center" action="{{url('attendance')}}" method="post" enctype="multipart/form-data">
                               
                               {{csrf_field()}}
                            
                        <div class="form-row">
                            <div class="col-md">
                                <div class="form-group">
                                    <label for="inputGroupSelect07" class="" for="membername">Member Name:</label>
                                    <input type="text" id="membername" name="membername" class="form-control" placeholder="Enter Name">
                                </div><!-- end form-group -->
                            </div><!-- end column -->
                        </div><!-- end form-row -->
                        
                        <div class="form-row">
                            <div class="col-md">
                                <div class="form-group">
                                    <label for="inputGroupSelect07" class="" for="memberid">Member ID:</label>
                                    <input type="text" id="memberid" name="memberid" class="form-control" placeholder="Enter Member ID">
                                </div><!-- end form-group -->
                            </div><!-- end column -->
                        
                            <div class="col-md">
                                <div class="form-group">
                                    <label for="inputGroupSelect07" class="" for="locker">Locker:</label>
                                    <input type="text" id="locker" name="locker" class="form-control" placeholder="Enter Locker No">
                                </div><!-- end form-group -->
                            </div><!-- end column -->
                        </div><!-- end form-row -->
                        
                        <div class="form-row">
                            <div class="col-md">
                                <div class="form-group">
                                    <label for="inputGroupSelect07" class="" for="intime">In Time:</label>
                                    <input type="text" id="intime" name="intime" class="form-control" placeholder="Enter In Time">
                                </div><!-- end form-group -->
                            </div><!-- end column -->
     
                            <div class="col-md">
                                <div class="form-group">
                                    <label for="inputGroupSelect07" class="" for="outtime">Out Time:</label>
                                    <input type="text" id="outtime" name="outtime" class="form-control" placeholder="Enter Out Time">
                                </div><!-- end form-group -->
                            </div><!-- end column -->
                        </div><!-- end form-row -->
                        



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
@endsection