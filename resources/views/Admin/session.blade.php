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
                <select class="form-control" name="parent_id">
                    <option value="0">hourly</option>
                    <option value="1">customize</option>                        
                </select><br>
            </div> 
            <div class="Value panel-body">
                <label>Service Hour</label>
                <div class="hourly_service">                   
                    <select class="form-control" name="parent_id">
                        <option value="1">1 hour</option>
                        <option value="2">1.5 hour</option>
                        <option value="3">2 hour</option>
                        <option value="4">2.5 hour</option> 
                        <option value="5">3 hour</option>                       
                    </select><br>
                </div>
                <div class="customize_service">
                    <button class="addValue btn btn-info" >+</button> <br>                       
                    <label>Start Time</label>
                    <input type="text" name="str_time" class="service" size=15>                      
                    <label>                 End Time</label>
                    <input type="text" name="end_time" class="price" size=15> 
                </div>                      
            </div>
        </div>
    </div>      
    <input type="submit" value="Submit" class="btn btn-info btn-normal btn-inline">
    </form>
