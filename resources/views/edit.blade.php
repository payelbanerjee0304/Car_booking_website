<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cab Rental Website</title>
    <link rel="icon" href="assets/images/favicon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style type="text/css">
        body{background-image:url('assets/images/slider-image-2-1920x600.jpg');
        background-size:500px;
        }
        table{background-image:url('assets/images/blog-6-370x270.jpg');
        background-size:600px;
        }
        #d1,#d2,#d3,#d4,#d5,#d6,#d8,#d9,#d10{
			margin: 10px;
			border: 1px solid #000;
			padding: 10px 20px;
            background-color: #134738;
			color: #F3FDDE;
            opacity: 0.9;
			box-shadow: 12px 12px 12px #ccc;
            border-radius: 15px;
            font-family: "Times New Roman", Times, serif;
            font-size: 25px;
		}
    </style>
</head>
<body>
@if(isset($userinfo))
    <div class="container">
    <form method='post' action='{{url("/update")}}' enctype="multipart/form-data">
        @csrf
        <header class='modal-header alert alert-success'>
        <marquee scrollamount='10' onmouseover='this.stop();' onmouseout='this.start();'>
		    <h1><strong>Cab Booking Form</strong></h1>
        </marquee>
        </header>
        <div class="table responsiv">
        <table class='table table-hover table-border'>
            <input type="number" name="uid" value="{{$userinfo->user_id}}" hidden>
            <tr>
                <td colspan="2">
                    <div class="form-group alert alert-primary">
                        <label id='d1'>Requirement Type</label>
                        <select class="form-control" name="requirement">
                        <option>Select</option>
                        <option name="requirement" value="twowheeler"@if($userinfo->requirement == "twowheeler") selected @endif>2-wheeler</option>
                        <option name="requirement" value="fourseater"@if($userinfo->requirement == "fourseater") selected @endif>Cab for 4-people</option>
                        <option name="requirement" value="sixseater"@if($userinfo->requirement == "sixseater") selected @endif>Cab for 6-people</option>
                        </select>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="form-group">
                        <label id='d2' >Pick-up Location</label>
                        <input type="text" name="pickup" value="{{$userinfo->pickup}}" class="form-control alert alert-primary">
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <label id='d3' >Drop Location</label>
                        <input type="text" name="drop" value="{{$userinfo->drop_loc}}" class="form-control alert alert-primary">
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="form-group">
                        <label id='d5' >Booking time</label>
                        <input type="time" name="btime" value="{{$userinfo->btime}}" class="form-control alert alert-primary">
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <label id='d6' >Name</label>
                        <input type="text" name="name" value="{{$userinfo->name}}" class="form-control alert alert-primary" placeholder="First+middle+surname" >
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                <div class="form-group alert alert-primary">
                        <label id='d10' >Upload any govt id</label>
                        <input type="file" name="file"class="form-control"><img src="{{$userinfo->image}}" height="100" alt="User Image">
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="2"  class="text-center">
                    <div class="form-group">
                        <input type="submit" name="submit" value="Update" class="btn btn-success btn-lg">
                    </div>
                </td>
            </tr>
    </form>
</div>
@endif
</body>
</html>