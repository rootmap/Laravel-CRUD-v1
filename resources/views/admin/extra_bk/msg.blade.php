@if (session('status'))

    <div class="alert successPlace alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4><i class="fa fa-check-circle"></i> Success</h4>  {{ session('status') }} 
    </div>

    <script type="text/javascript">
        setTimeout(function(){
            $('.successPlace').fadeOut('slow');
        }, 5000);
    </script>
    <?php 
    Session::forget('status');
    ?>
@endif

@if (session('success'))

    <div class="alert successPlace alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4><i class="fa fa-check-circle"></i> Success</h4>  {{ session('success') }} 
    </div>

    <script type="text/javascript">
        setTimeout(function(){
            $('.successPlace').fadeOut('slow');
        }, 5000);
    </script>
    <?php 
    Session::forget('success');
    ?>
@endif

@if (session('error'))
    <div class="alert allDanger alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4><i class="fa fa-times-circle"></i> Error</h4>  {{ session('error') }}
    </div>

    <script type="text/javascript">
        setTimeout(function(){
            $('.allDanger').fadeOut('slow');
        }, 5000);
    </script>
    <?php 
    Session::forget('error');
    ?>
@endif

@if (count($errors) > 0)
     @foreach ($errors->all() as $error)
     <div class="alert allDanger alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4><i class="fa fa-times-circle"></i> Error</h4>   {{ $error }}
    </div>
    @endforeach
    <script type="text/javascript">
        setTimeout(function(){
            $('.allDanger').fadeOut('slow');
        }, 5000);
    </script>
@endif