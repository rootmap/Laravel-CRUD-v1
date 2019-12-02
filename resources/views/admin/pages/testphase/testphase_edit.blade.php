

@extends("admin.layout.master")
@section("title","Test Phase")
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
                                            <h4>Add New Test Phase</h4>
                                        </div><!-- end details-text -->
                                    </div><!-- End column -->
                                    <div class="col-md-6">
                                        <div class="breadcrumb">
                                            <div class="breadcrumb-item"><i class="fas fa-angle-right"></i><a href="{{url('testphase/list')}}"> Data List </a>
                                            </div>
                                            <div class="breadcrumb-item active"><i class="fas fa-angle-right"></i><a href="{{url('testphase/create')}}">  Create New </a>
                                            </div>
                                            <div class="breadcrumb-item"><i class="fas fa-angle-right"></i> Edit / Modify 
                                            </div>
                                            
                                        </div><!-- end breadcrumb -->
                                    </div><!-- End column -->
                                </div><!-- end row -->
                            </form>
                        </div>


                        <div class="hotel-listing-form">
                            <form class="text-center" action="{{url('testphase/update/'.$dataRow->id)}}" method="post" enctype="multipart/form-data" >
                               
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
                        <div class="form-group">
                                <h4>Address</h4>
                                <textarea class="form-control textarea text-left p-3 h-100"
                                        id="address" name="address" rows="5" placeholder="Enter Address"><?php 
                                if(isset($dataRow->address)){
                                    
                                    echo $dataRow->address;
                                    
                                }
                                ?></textarea>
                        </div><!-- end form-group -->
                        <div class="form-row">
                            <div class="col-md">
                                <div class="form-group">
                                    <label for="inputGroupSelect07" class="" for="phone">Phone:</label>
                                    <input type="text" 
                                     
                                <?php 
                                if(isset($dataRow->phone)){
                                    ?>
                                    value="{{$dataRow->phone}}" 
                                    <?php 
                                }
                                ?>
                                 id="phone" name="phone" class="form-control" placeholder="Enter Phone">
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
                          <input type="text" disabled="disabled"  for="gender" class="form-control" value="Select Sex" />
                        </div>



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
