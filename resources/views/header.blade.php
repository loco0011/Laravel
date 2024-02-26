<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header Menu</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #007bff;
            padding: 10px 20px;
        }

        .menu-options {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: flex-end;
        }

        .menu-option {
            margin-left: 20px;
        }

        .menu-option a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        .menu-option a:hover {
            color: #0056b3;
        }
    </style>
</head>
<body>
    <header>
        <ul class="menu-options header__item">
            <li class="menu-option">
                <a href="{{url('employee/employee')}}">Employee</a>
            </li>
             <li class="menu-option">
                <a href="{{url('employee/department')}}">Department</a>
            </li>
             <li class="menu-option">
                <a href="{{url('/dashboard')}}">Home</a>
            </li>
        </ul>
    </header>
</body>
</html>
