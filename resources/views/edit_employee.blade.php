<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Employee</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Custom styles */
        .card {
            margin-top: 10vh;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #86888a;
            color: #fff;
            border-radius: 15px 15px 0 0;
            text-align: center; /* Center align the title */
        }

        .btn-primary,
        .btn-secondary {
            border-radius: 10px;
            padding: 10px 20px;
            font-weight: bold;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .btn-secondary {
            background-color: #6c757d;
            border-color: #6c757d;
        }

        .btn-secondary:hover {
            background-color: #5a6268;
            border-color: #545b62;
        }

        .form-control {
            border: 1px solid #ced4da;
            border-radius: 10px;
            padding: 12px;
            font-size: 16px;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        .form-label {
            font-weight: bold;
        }

        .form-group {
            margin-bottom: 20px;
        }

        /* Center align the buttons */
        .btn-group {
            text-align: center;
        }
        /* Ensure the dropdown arrow is visible and properly aligned */
/* Center-align the dropdown menu within the select field */
.style {
  z-index: 10;
}

    </style>
</head>
<body>
           @include('header')

    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <h4 class="mb-0">Update Employee</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('employee/employee',$employee->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name" class="form-label">Employee Name</label>
                                        <input type="text" name="name" value="{{$employee->name}}" id="name" class="form-control" placeholder="Enter employee name">
                                    </div>
                                    <div class="form-group">
                                        <label for="department" class="form-label">Department</label>
                                        <select name="department_id" id="department" class="form-control style">
                                            @foreach($department as $item)
                                            <option value="{{ $item->id }}" {{$employee->department_id == $item->id ? 'selected':''}}>
                                                {{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="designation" class="form-label">Designation</label>
                                        <input type="text" name="designation" value="{{$employee->Designation}}" id="designation" class="form-control" placeholder="Enter designation">
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="text" name="email"  value="{{$employee->email}}" id="email" class="form-control" placeholder="Enter email">
                                    </div>
                                </div>
                            </div>
                            <div class="btn-group">
                                <button type="submit" class="btn btn-primary">Save</button>
                                <a href="{{ url('employee/employee') }}" class="btn btn-secondary">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
