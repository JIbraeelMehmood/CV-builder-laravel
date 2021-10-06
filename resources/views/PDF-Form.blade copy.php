<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <h4> <b>Create PDF</b></h4>
        <p>Make Your CV with Fast & Efficient way </p>
        <form class="theme-form" action="{{ route('generate-pdf') }}" method="post" name="cv_form" id="cv_form">
            @csrf
            <p><b>Personal Info:</b></p>
            <div class="form-row">
<!-- -------------------------------------------------------------------------------------- -->
                <div class="form-group ">
                    <label for="name" class="col-md-4 col-form-label text-md-left">{{ __('Name:') }}</label>
                    <div class="col-md-12">
                        <input id="name" type="text"
                            class=" p-4 bg-light form-control @error('name') is-invalid @enderror" name="name"
                            value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
<!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
                <div class="form-group ">
                    <label for="email" class="col-md-4 col-form-label text-md-left">{{ __('Email:') }}</label>
                    <div class="col-md-12">
                        <input id="email" type="text"
                            class=" p-4 bg-light form-control @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
<!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
                <div class="form-group ">
                    <label for="contact" class="col-md-4 col-form-label text-md-left">{{ __('Contact:') }}</label>
                    <div class="col-md-12">
                        <input id="contact" type="text"
                            class=" p-4 bg-light form-control @error('contact') is-invalid @enderror" name="contact"
                            value="{{ old('contact') }}" required autocomplete="contact" autofocus>
                        @error('contact')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
<!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
                <div class="form-group ">
                    <label for="address" class="col-md-4 col-form-label text-md-left">{{ __('Address:') }}</label>
                    <div class="col-md-12">
                        <input id="address" type="text"
                            class=" p-4 bg-light form-control @error('address') is-invalid @enderror" name="address"
                            value="{{ old('address') }}" required autocomplete="address" autofocus>
                        @error('address')
                        <span class="invalidaddress-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
<!-- ====================================================================================== -->
<p><b>Projects:</b></p>
<!-- -------------------------------------------------------------------------------------- -->
        <div class="alert alert-danger print-error-msg" style="display:none">
            <ul></ul>
        </div>
        <div class="alert alert-success print-success-msg" style="display:none">
            <ul></ul>
        </div>
        <div class="table-responsive">  
            <table class="table table-bordered" id="dynamic_field">  
                <tr>  
                    <td><input type="text" name="projectsname[]" placeholder="Enter your ProjectName" class="form-control name_list" /></td>  
                    <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>  
                </tr>  
            </table>  
        </div>
<!-- ====================================================================================== -->
<p><b>Education:</b></p>
<!-- -------------------------------------------------------------------------------------- -->
        <div class="alert alert-danger print-error-msg" style="display:none">
            <ul></ul>
        </div>
        <div class="alert alert-success print-success-msg" style="display:none">
            <ul></ul>
        </div>
        <div class="table-responsive">  
            <table class="table table-bordered" id="dynamic_field2">  
                <tr> 
                    <td><input type="text" name="education[]" placeholder="Enter your Education" class="form-control education_list" /></td>  
                    <td><input type="text" name="educationDetails[]" placeholder="Enter your Education Details" class="form-control educationdetails_list" /></td>  
                    <td><input type="text" name="educationstatus[]" placeholder="Enter your Education Status" class="form-control educationstatus_list" /></td>  
                    <td><button type="button" name="add2" id="add2" class="btn btn-success">Add More</button></td>  
                </tr>  
            </table>  
        </div>
<!-- ====================================================================================== -->
<p><b>Experience:</b></p>
<!-- -------------------------------------------------------------------------------------- -->
        <div class="alert alert-danger print-error-msg" style="display:none">
            <ul></ul>
        </div>
        <div class="alert alert-success print-success-msg" style="display:none">
            <ul></ul>
        </div>
        <div class="table-responsive">  
            <table class="table table-bordered" id="dynamic_field3">  
                <tr>  
                    <td><input type="text" name="experience[]" placeholder="Enter your Experience" class="form-control experience_list" /></td>  
                    <td><input type="text" name="experienceDetails[]" placeholder="Enter your Experience Details" class="form-control experiencedetails_list" /></td>  
                    <td><button type="button" name="add3" id="add3" class="btn btn-success">Add More</button></td>  
                </tr>  
            </table>  
        </div>
<!-- ====================================================================================== -->



<!-- -------------------------------------------------------------------------------------- -->
            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" name="submit" id="submit" class="btn btn-primary">
                        {{ __('Submit') }}
                    </button>
                </div>
            </div>
        </form>
    </div>

</body>
<script type="text/javascript">
    $(document).ready(function(){      
      var postURL = "<?php echo url('/generate-pdf'); ?>";
      var i=1;  

      $('#add').click(function(){  
           i++;  
           $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added"><td><input type="text" name="projectsname[]" placeholder="Enter your ProjectName" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
      });
      $('#add2').click(function(){  
           i++;  
           $('#dynamic_field2').append('<tr id="row'+i+'" class="dynamic-added"> <td><input type="text" name="education[]" placeholder="Enter your Education" class="form-control education_list" /></td>  <td><input type="text" name="educationDetails[]" placeholder="Enter your Education Details" class="form-control educationdetails_list" /></td><td><input type="text" name="educationstatus[]" placeholder="Enter your Education Status" class="form-control educationstatus_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove2">X</button></td></tr>');  
      });    
      $('#add3').click(function(){  
           i++;  
           $('#dynamic_field3').append('<tr id="row'+i+'" class="dynamic-added"><td><input type="text" name="experience[]" placeholder="Enter your Experience" class="form-control experience_list" /></td>  <td><input type="text" name="experienceDetails[]" placeholder="Enter your Experience Details" class="form-control experiencedetails_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove3">X</button></td></tr>');  
      });  
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });  
      $(document).on('click', '.btn_remove2', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });
      $(document).on('click', '.btn_remove3', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });
      $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });

      $('#submit').click(function(){            
           $.ajax({  
                url:postURL,  
                method:"POST",  
                data:$('#cv_form').serialize(),
                type:'json',
                success:function(data)  
                {
                    if(data.error){
                        printErrorMsg(data.error);
                    }else{
                        i=1;
                        $('.dynamic-added').remove();
                        $('.dynamic-added2').remove();
                        $('.dynamic-added3').remove();

                        $('#cv_form')[0].reset();
                        $(".print-success-msg").find("ul").html('');
                        $(".print-success-msg").css('display','block');
                        $(".print-error-msg").css('display','none');
                        $(".print-success-msg").find("ul").append('<li>Record Inserted Successfully.</li>');
                    }
                }  
           });  
      });  
      function printErrorMsg (msg) {
         $(".print-error-msg").find("ul").html('');
         $(".print-error-msg").css('display','block');
         $(".print-success-msg").css('display','none');
         $.each( msg, function( key, value ) {
            $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
         });
      }
    });
//===============================================  

</script>
</html>