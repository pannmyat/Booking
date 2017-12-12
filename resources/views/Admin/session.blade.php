@extends('master')
@section('content')
<div class="left-sidebar">
    <div class="funkyradio">
        <div class="funkyradio-default">
            <input type="checkbox" name="checkbox" id="checkbox1" checked/>
            <label for="checkbox1"><a href="{{ url('/admin/companyinfo') }}">Company Profile</a></label>
        </div>       
         <div class="funkyradio-default">
            <input type="checkbox" name="checkbox" id="checkbox2" checked/>
            <label for="checkbox1"><a href="{{ url('/admin/service') }}">Service</a></label>
        </div>       
         <div class="funkyradio-info">
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
    <h3>Session</h3>
    <form role="form" method="post" action="{{ url('/admin/category') }}">
        {{ csrf_field() }}   
        <div class="row">
        <div class="col-lg-6">         
            <div class="form-group">
                    <label>Service Group</label>
                    <select class="form-control" name="session_group">
                        <option></option>                            
                    </select>                   
            </div>            
        </div>
        <div class="col-lg-6">  
            <label>Service Title</label>
            <select class="form-control" name="session_title">
                <option></option>                            
            </select>
        </div>
        </div>
    <div class="form-group">
        <div class="panel panel-default">
            <div class="panel-heading">                        
                <label>Service Type</label>
                <select class="form-control" name="parent_id" v-model="selected">
                    <option value=""></option>
                    <option value="0">hourly</option>
                    <option value="1">customize</option>                        
                </select><br>                
            </div> 
            <div class="Value panel-body">                
                <div class="hourly_service" v-if="selected === '0'">  
                    <label>Service Hour</label>                 
                    <select class="form-control" name="parent_id">
                        <option value="1">1 hour</option>
                        <option value="2">1.5 hour</option>
                        <option value="3">2 hour</option>
                        <option value="4">2.5 hour</option> 
                        <option value="5">3 hour</option>                       
                    </select><br>
                    <label>Open Time</label>
                    <input type="text" name="open_time[]" class="open_time" size=15>                      
                    <label>                Close Time</label>
                    <input type="text" name="close_time[]" class="close_time" size=15>
                </div>
                <div class="customize_service"  v-if="selected === '1'">
                     <button type="button" class="btn btn-info btn-normal btn-inline" v-on:click="optionClick">+</button><br>       
                     <ul>            
                        <li>                                       
                            <label>Start Time</label>
                            <input type="text" name="str_time[]" class="str_time" size=15>                      
                            <label>                 End Time</label>
                            <input type="text" name="end_time[]" class="end_time" size=15>
                        </li>
                        <hr>
                    </ul> 
                    <ul v-show="listStatus">            
                        <li>                                               
                            <label>Start Time</label>
                            <input type="text" name="str_time[]" class="str_time" size=15>                      
                            <label>                 End Time</label>
                            <input type="text" name="end_time[]" class="end_time" size=15>
                        </li>
                        <hr>
                    </ul> 
                </div>                      
            </div>
        </div>
    </div>      
    <input type="submit" value="Submit" class="btn btn-info btn-normal btn-inline">
    </form>
</div>
<script type="text/javascript" src="{{url('/')}}/js/vue.js"></script>
    <script>
        new Vue({
            el: '.content',
            data: {        
                 list: [],
                 listResult: '',
                 listStatus:false,
            },
            computed: {
                listStatus: function () {
                  return (this.list.length > 0) ? true : false; 
                },               
            },          
            methods: {
                optionClick: function() {                    
                    this.list.push({
                        str_time: '',                       
                        end_time: '',                       
                    });
                },
              
            }
        })
    </script>
@endsection