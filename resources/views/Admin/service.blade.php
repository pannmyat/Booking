@extends('master')
@section('content')
<div class="left-sidebar">
    <div class="funkyradio">
        <div class="funkyradio-default">
            <input type="checkbox" name="checkbox" id="checkbox1" checked/>
            <label for="checkbox1"><a href="{{ url('/admin/companyinfo') }}">Company Profile</a></label>
        </div>       
         <div class="funkyradio-info">
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
<h3>Service</h3>
    <form role="form" method="post" action="{{ url('/admin/category') }}">
        {{ csrf_field() }}            
        <div class="form-group">
            <div class="panel panel-default">
                <div class="panel-heading">                        
                    <label>Service Group</label>
                    <input type="text" name="service_group" class="service_group">   
                    <button type="button" class="btn btn-info btn-normal btn-inline" v-on:click="optionClick">+</button>     
                </div> 
                <div class="Value panel-body">                    
                    <ul>            
                        <li>                                                   
                            <label>Service Title</label>
                            <input type="text" name="service[]" class="service" size=45> 
                            <label>Price</label>
                            <input type="text" name="price[]" class="price" size=10> $
                        </li>
                        <hr> 
                    </ul>
                    <ul v-show="listStatus">
                        <li v-for="(key, item) in list">                                        
                            <label>Service Title</label>
                            <input type="text" name="service[]" class="service" size=45> 
                            <label>Price</label>
                            <input type="text" name="price[]" class="price" size=10> $  
                            <hr>                           
                        </li>
                    </ul>

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
                        service: '',                       
                        price: '',                       
                    });
                },
              
            }
        })
    </script>
@endsection