<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row bg-dark p-2">
            <h3 class="text-white">PHP Project</h3>
        </div>
        <div class="row bg-info py-5">
            <div class="col-6">
                @if(session('message'))
                    <div class="alert alert-success">
                        {{session('message')}}
                    </div>
                @endif()
                <h2>Registration</h2>
                <form action="/add-std" method="post">
                    <div class="form-group">
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" class="form-control" name="name" required>
                    </div>

                    <div class="form-group">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" name="email" required>
                    </div>
                         
                    <button type="submit" class="btn btn-dark">Submit</button>
                    @csrf
                </form>
            </div>
            <div class="col-6">
                <h3>Registered Students</h3>
                @if($students)
                    <ul class="list-group">
                        @foreach($students as $data)
                            <li class="list-group-item">{{$data->name}} - {{$data->email}}</li>
                        @endforeach
                    </ul> 
                @else
                    <p>No Students Data</p>
                @endif               
            </div>
        </div>
    </div>
</body>
</html>