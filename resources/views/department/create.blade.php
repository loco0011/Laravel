<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Department</title>
    <style>
        body {
            background-color: #f8f9fa;
            color: #333;
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 600px;
            margin: 10vh auto;
            padding: 0 20px;
        }
        .card {
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
            background-color: #fff;
        }
        .card-header {
            background-color: #818385;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            border-radius: 10px 10px 0 0;
            margin-top: 10px;
            margin-bottom: 10px;
            /* margin-left: 10px;/ */
        }
        .form-control {
            border-radius: 10px;
            border: 1px solid #ced4da;
            padding: 10px;
            font-size: 16px;
            width: 90%;
            margin-bottom: 15px;
            margin-top: 10px;
        }
         .btn-primary {
            border-radius: 10px;
            padding: 10px 20px;
            font-weight: bold;
            background-color: #007bff;
            border-color: #007bff;
            width: 20%;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-right: 10px; /* Added margin-right */
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .btn-secondary {
            border-radius: 10px;
            padding: 10px 20px;
            font-weight: bold;
            background-color: #6c757d; /* Changed color */
            border-color: #6c757d; /* Changed color */
            width: 60%;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .btn-secondary:hover {
            background-color: #5a6268; /* Changed color */
        }

    </style>
</head>
<body>
           @include('header')

    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4>Add Department</h4>
            </div>
            <div class="card-body">
                <form action="{{url('employee/department')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Department Name</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Enter department name">
                    </div> 
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a href="{{url('employee/departent/create')}}" class="btn btn-secondary">Back</a>
                </form>
            </div>
        </div>
    </div> 
</body>
</html>
