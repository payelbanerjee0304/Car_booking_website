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
@if($errors->any())
	<div class="alert alert-danger">
		<ul>
		    @foreach($errors->all() as $error)
			<li>{{$error}}</li>
			@endforeach
		</ul>
	</div>
@endif
@if(session('message'))
    <div class="alert alert-info">
        <ul>
            <li>{{session('message')}}</li>
            <li><a href="{{url('/index')}}">Back to Home Page</a></li>
        </ul>
    </div>
@endif
    <div class="container">
    <form method='post' action='{{url("/submit")}}' enctype="multipart/form-data">
        @csrf
        <header class='modal-header alert alert-success'>
        <marquee scrollamount='10' onmouseover='this.stop();' onmouseout='this.start();'>
		    <h1><strong>Cab Booking Form</strong></h1>
        </marquee>
        </header>
        <div class="table responsiv">
        <table class='table table-hover table-border'>
            <tr>
                <td colspan="2">
                    <div class="form-group alert alert-primary">
                        <label id='d1'>Requirement Type</label>
                        <select class="form-control" name="requirement">
                        <option>Select</option>
                        <option name="requirement" value="twowheeler">2-wheeler</option>
                        <option name="requirement" value="fourseater">Cab for 4-people</option>
                        <option name="requirement" value="sixseater">Cab for 6-people</option>
                        </select>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="form-group">
                        <label id='d2' >Pick-up Location</label>
                        <input type="text" name="pickup" class="form-control alert alert-primary">
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <label id='d3' >Drop Location</label>
                        <input type="text" name="drop" class="form-control alert alert-primary">
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="form-group">
                        <label id='d4'>Booking Date</label>
                        <input type="date" name="bdate" class="form-control alert alert-primary">
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <label id='d5' >Booking time</label>
                        <input type="time" name="btime" class="form-control alert alert-primary">
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <div class="form-group">
                        <label id='d6' >Name</label>
                        <input type="text" name="name" class="form-control alert alert-primary" placeholder="First+middle+surname" >
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="form-group">
                        <label id='d8' >Email</label>
                        <input type="email" name="email" class="form-control alert alert-primary">
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <label id='d9' >Phone No.</label>
                        <input type="number" name="phone" class="form-control alert alert-primary">
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                <div class="form-group alert alert-primary">
                        <label id='d10' >Upload any govt id</label>
                        <input type="file" name="file"class="form-control">
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="2"  class="text-center">
                    <div class="form-group">
                        <input type="submit" name="submit" value="Submit" class="btn btn-success btn-lg">
                        <input type="reset" name="reset" value="Reset" class="btn btn-danger btn-lg">
                    </div>
                </td>
            </tr>
    </form>
</div>
</body>
</html>