<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employee Details</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Add custom styles here */
        .container {
            margin-top: 50px;
        }
        .card-header {
            background-color: #626466;
            color: #ffffff;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        .table-bordered {
            border: 1px solid #dee2e6;
            border-collapse: collapse;
        }
        .table-bordered th,
        .table-bordered td {
            border: 1px solid #dee2e6;
            padding: 8px;
        }
        .btn-position {
            margin-left: auto; /* Align the button to the right */
        }
         .card {
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
        }
    </style>
</head>
<body>
       @include('header')

    <div class="container">
    @if (Session::has('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ Session::get('message') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="mb-0">
                            Employee Details
                        </h4>
                        <a href="{{ url('employee/employee/create') }}" class="btn btn-primary">Add Employee</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email Id</th>
                                        <th>Department</th>
                                        <th>Designation</th>
                                        <th>Action</th> <!-- Add Action column -->
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($employee as $employee)
                                    <tr>
                                        <td>{{ $employee->name }}</td>
                                        <td>{{ $employee->email }}</td>
                                        <td>{{ $employee->department->name }}</td>
                                        <td>{{ $employee->Designation }}</td>
                                        <td>
                                            <a href="{{url('employee/employee',$employee->id)}}" class="btn btn-secondary">Edit</a>
                                            <a href="{{url('employee/employee/delete',$employee->id)}}" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
