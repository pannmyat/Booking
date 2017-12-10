<h3>Service</h3>
<form role="form" method="post" action="{{ url('/admin/category') }}">
    {{ csrf_field() }}            
    <div class="form-group">
        <div class="panel panel-default">
            <div class="panel-heading">                        
                <label>Service Group</label>
                <input type="text" name="service_group" class="service_group">                        
            </div> 
            <div class="Value panel-body">
                <button class="addValue btn btn-info" >+</button> <br>                       
                <label>Service Title</label>
                <input type="text" name="service[]" class="service" size=45> 
                <label>Price</label>
                <input type="text" name="price[]" class="price" size=10> $                         
            </div>
        </div>
    </div>        
    <input type="submit" value="Submit" class="btn btn-info btn-normal btn-inline">
</form>