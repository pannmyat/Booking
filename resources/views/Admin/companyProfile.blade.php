<h3>Company Profile</h3>
        <form role="form" method="post" action="{{ url('/admin/category') }}">
            {{ csrf_field() }}
            <div class="form-group">
                <label>Main Title</label>
                <input class="form-control" placeholder="Enter text" name="main_title">
            </div>
            <div class="form-group">
                <label>Sub Title</label>
                <input class="form-control" placeholder="Enter text" name="sub_tiitle">
            </div>  
            <div class="form-group">
                <label>Contact Address</label>
                <input class="form-control" placeholder="Enter text" name="address">
            </div>  
            <div class="form-group">
                <label>Contact No</label>
                <input class="form-control" placeholder="Enter text" name="ph_no">
            </div>  
            <div class="form-group">
                <label>Email</label>
                <input class="form-control" placeholder="Enter text" name="email">
            </div>    
            <div class="form-group">
                <div class="photos">
                  <label>Logo</label><br>
                  <input type="file" name="logo" class="form-group" accept="image/*">

              </div>     
            </div>            
            <input type="submit" value="Submit" class="btn btn-info btn-normal btn-inline">
        </form>