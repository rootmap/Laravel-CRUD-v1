@extends("admin.layout.master")
@section("title","Student")
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
                                            <h4>Add New Student</h4>
                                        </div><!-- end details-text -->
                                    </div><!-- End column -->
                                    <div class="col-md-6">
                                        <div class="breadcrumb">
                                            <div class="breadcrumb-item"><i class="fas fa-angle-right"></i><a href="{{url('student/list')}}"> Data List </a>
                                            </div>
                                            <div class="breadcrumb-item active"><i class="fas fa-angle-right"></i><a href="{{url('student/create')}}">  Create New </a>
                                            </div>
                                            <div class="breadcrumb-item"><i class="fas fa-angle-right"></i> Edit / Modify 
                                            </div>
                                            
                                        </div><!-- end breadcrumb -->
                                    </div><!-- End column -->
                                </div><!-- end row -->
                            </form>
                        </div>


                        <div class="hotel-listing-form">
                            <form class="text-center" action="{{url('student/update/'.$dataRow->id)}}" method="post" enctype="multipart/form-data" >
                               
                               {{csrf_field()}}
                            
                        <div class="form-row">
                            <div class="col-md">
                                <div class="form-group">
                                    <label for="inputGroupSelect07" class="" for="firstname">First Name:</label>
                                    <input type="text" 
                                     
                                <?php 
                                if(isset($dataRow->firstname)){
                                    ?>
                                    value="{{$dataRow->firstname}}" 
                                    <?php 
                                }
                                ?>
                                 id="firstname" name="firstname" class="form-control" placeholder="Enter First Name">
                                </div><!-- end form-group -->
                            </div><!-- end column -->

                            <div class="col-md">
                                <div class="form-group">
                                    <label for="inputGroupSelect07" class="" for="lastname">Last Name:</label>
                                    <input type="text" 
                                     
                                <?php 
                                if(isset($dataRow->lastname)){
                                    ?>
                                    value="{{$dataRow->lastname}}" 
                                    <?php 
                                }
                                ?>
                                 id="lastname" name="lastname" class="form-control" placeholder="Enter Last Name">
                                </div><!-- end form-group -->
                            </div><!-- end column -->
                        </div><!-- end form-row -->

                        <div class="input-group mb-4">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              
                                        <input type="radio" <?php 
                                            if($dataRow->gender=="Male"){
                                                ?>
                                                checked="checked" 
                                                <?php 
                                            }
                                            ?>
                                        id="gender_0" name="gender" value="Male">&nbsp;Male&nbsp; 
                                        <input type="radio" <?php 
                                            if($dataRow->gender=="Female"){
                                                ?>
                                                checked="checked" 
                                                <?php 
                                            }
                                            ?>
                                        id="gender_1" name="gender" value="Female">&nbsp;Female&nbsp; 
                            </div>
                          </div>
                          <input type="text" disabled="disabled"  for="gender" class="form-control" value="Select Your Sex" />
                        </div>
                        <div class="form-row">
                            <div class="col-md">
                                <div class="form-group">

                                    <label for="inputGroupSelect07" class="" for="photo">Photo:</label>
                                <input type="file" id="photo" name="photo">
                                <input type="hidden" value="{{$dataRow->photo}}" name="ex_photo" />
                                @if(isset($dataRow->photo))
                                    @if(!empty($dataRow->photo))
                                        <img src="{{url('upload/student/'.$dataRow->photo)}}" width="150">
                                    @endif
                                @endif
                            </div><!-- end form-group -->
                            </div><!-- end column -->
                        </div><!-- end form-row -->
                        <div class="form-group">
                                <h4>Address</h4>
                                <textarea class="form-control textarea text-left p-3 h-100"
                                        id="address" name="address" rows="5" placeholder="Enter Address"><?php 
                                if(isset($dataRow->address)){
                                    
                                    echo $dataRow->address;
                                    
                                }
                                ?></textarea>
                        </div><!-- end form-group -->



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
