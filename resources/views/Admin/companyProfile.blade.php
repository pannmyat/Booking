@extends('master')
@section('content')
<div class="left-sidebar">
    <div class="funkyradio">
        <div class="funkyradio-info">
            <input type="checkbox" name="checkbox" id="checkbox1" checked/>
            <label for="checkbox1"><a href="{{ url('/admin/companyinfo') }}">Company Profile</a></label>
        </div>       
         <div class="funkyradio-default">
            <input type="checkbox" name="checkbox" id="checkbox2" checked/>
            <label for="checkbox1"><a href="{{ url('/admin/service') }}">Service</a></label>
        </div>       
         <div class="funkyradio-default">
            <input type="checkbox" name="checkbox" id="checkbox3" checked/>
            <label for="checkbox1"><a href="{{ url('/admin/session') }}">session</a></label>
        </div>       
         <div class="funkyradio-default">
            <input type="checkbox" name="checkbox" id="checkbox4" checked/>
            <label for="checkbox1"><a href="{{ url('/admin/report') }}">Reporting</a></label>
        </div>           
    </div>      
</div>
<div class="content">
    <h3>Company Profile</h3>
    <form role="form" method="post" action="{{ url('/admin/companyinfo') }}">
        {{ csrf_field() }}
        <div class="form-group">
            <label>Company Name</label>
            <input class="form-control" placeholder="Enter Company Name" name="name">
            @if ($errors->has('name')) <p class="help-block" style="color:red;">{{ $errors->first('name') }}</p> @endif
        </div>
        <div class="form-group">
            <label>Sub Title</label>
            <input class="form-control" placeholder="Enter Sub Title" name="title">
        </div>  
        <div class="form-group">
            <label>Contact Address</label>
            <input class="form-control" placeholder="Enter Contact Address" name="address">
        </div>  
        <div class="form-group">
            <label>Contact No</label><br>
            <input class="form-control" id="phone" type="tel" name="contactno">
        </div>  
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" placeholder="Enter text" name="email">
        </div>    
        <div class="form-group">
            <div class="photos">
              <label>Logo</label><br>
              <input type="file" name="logo" class="form-group" accept="image/*">

          </div>     
        </div>            
        <input type="submit" value="Submit" class="btn btn-info btn-normal btn-inline">
    </form>

</div>
 <script>
    jQuery(function($){
        $("#phone").intlTelInput({      
          utilsScript: "{{ url('/') }}/js/utils.js"
        });
    });
  </script>
@endSection