<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Probe</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/coin-slider.css" />
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-titillium-250.js"></script>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/coin-slider.min.js"></script>
</head>
<body>
<div class="container">
    <div class="header">
        <div class="header_resize">
            <div class="logo">
                <h1><a href="index.html"><span>Probe</span> <small>Company Slogan Here</small></a></h1>
            </div>
        </div>
    </div>
    <div class="clr"></div>
    <br>
    <div class="main-content">
        
        <div class="left-sidebar">
        <div class="funkyradio">
            <div class="funkyradio-info">
                <input type="checkbox" name="checkbox" id="checkbox1" checked/>
                <label for="checkbox1">Company Profile</label>
            </div>       
             <div class="funkyradio-default">
                <input type="checkbox" name="checkbox" id="checkbox2" checked/>
                <label for="checkbox1">Service</label>
            </div>       
             <div class="funkyradio-default">
                <input type="checkbox" name="checkbox" id="checkbox3" checked/>
                <label for="checkbox1">Session</label>
            </div>       
             <div class="funkyradio-default">
                <input type="checkbox" name="checkbox" id="checkbox4" checked/>
                <label for="checkbox1">Reporting</label>
            </div>            
        </div>
        </div>
        <div class="content">
             <!-- @include ('Admin.companyProfile') -->
             <!-- @include ('Admin.service') -->
             @include ('Admin.session')
        </div>
    </div>
</div>
</body>
</html>
