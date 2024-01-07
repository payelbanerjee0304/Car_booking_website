<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cab Rental Website</title>
    <link rel="icon" href="assets/images/favicon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style type="text/css">
        #t1{
            margin: 10px;
			border: 1px solid #000;
			padding: 10px 20px;
            background-color: #CEDC73;
			color: red;
        }
        #a1{
            color: #0007F0;
        }
    </style>
</head>
<body>
    <p><h1  id="a1">Welcome Admin</h1></p>
    @if(session('message'))
    <div class="alert alert-info">
        <ul>
            <li>{{session('message')}}</li>
        </ul>
    </div>
    @endif
    <div class="form-group">
        @if(isset($allinfo))
        <div class="table-responsiv">
            <table id="t1" border="1" cellpadding="20" cellspacing="0" class="table table-bordered table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>SL. No.</th>
                        <th>Requirement For</th>
                        <th>Pick-up Location</th>
                        <th>Drop Location</th>
                        <th>Booking Date</th>
                        <th>Booking time</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone No.</th>
                        <th>Govt. Id</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $i=1;
                    @endphp
                    @foreach($allinfo as $all)
                    <tr>
                        <td>@php echo $i; $i++; @endphp</td>
                        <td>{{$all->requirement}}</td>
                        <td>{{$all->pickup}}</td>
                        <td>{{$all->drop_loc}}</td>
                        <td>{{$all->bdate}}</td>
                        <td>{{$all->btime}}</td>
                        <td>{{$all->name}}</td>
                        <td><a href="mailto:{{$all->email}}">{{$all->email}}</a></td>
                        <td><a href="tel:{{$all->phone}}">{{$all->phone}}</a></td>
                        <td><img src="{{$all->image}}" height="100" alt="User Image"></td>
                        <td>
                            <a href="{{url('/delete')}}{{$all->user_id}}" class="btn btn-danger btn-sm">Delete</a> || 
                            <a href="{{url('/logout')}}" class="btn btn-primary btn-sm">Logout</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @endif
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+ZjNdZ9u8g0L5BIhK+5r5swa5F+9z5E4qDOH6jBZhc5z5W5M" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-RfDf3gFhzz0Dp9v7N7P9sJVgBq/7Fks6v5z5buUqF+76E4e5z5F5O3D5P5G5r5R5" crossorigin="anonymous"></script>
</body>
</html>