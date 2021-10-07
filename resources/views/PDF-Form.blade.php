
@extends('layouts.app')

@section('content')
    <div class="container">
        <h4> <b>Create PDF</b></h4>
        <p>Make Your CV with Fast & Efficient way </p>
        <form class="theme-form" action="{{ route('generate-pdf') }}" method="post" enctype="multipart/form-data" name="cv_form" id="cv_form">
            @csrf
            <p><b>Personal Info:</b></p>
            <div class="form-row">
<!-- -------------------------------------------------------------------------------------- -->
                <div class="form-group">
                    <label for="image" class="col-md-4 col-form-label text-md-left">{{ __('Image:') }}</label>
                    <div class="col-md-12">
                        <input class=" p-0 bg-light  @error('image') is-invalid @enderror"  value="{{ old('image') }}" required autocomplete="image" autofocus  id="image" type="file" name="image">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                </div>
<!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
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
@endsection
