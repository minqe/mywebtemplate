@extends('layouts.softui-dashboard')

@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container-fluid">
        <h1>ระบบสร้างห้องเรียน Online </h1>
        <p>
        <ul class="list-group list-group-horizontal">
            <li class="list-group-item">
                <div class="dropdown">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                        รายวิชา
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">cs1</a>
                        <a class="dropdown-item" href="#">cs2</a>
                        <a class="dropdown-item" href="#">cs3</a>
                    </div>
                </div>
            </li>
        </ul>
        </p>
        <p>วิชา CS1</p>

        <div class="row">
            <div class="col-sm-12" style="background-color:lavender;">
                <div class="container">
                    <h2>อาจารย์ผู้สอน อาจารย์ 1 Email sample@mju.ac.th</h2>
                    <p>รายชื่อผู้ลงทะเบียน</p>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ชื่อ-นามสกุล</th>
                                <th>รหัสนักศึกษา</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>ยินดี ยินแย้ม</td>
                                <td>6xxxxxxxxx</td>
                                <td>john@mju.ac.th</td>
                            </tr>
                            <tr>
                                <td>Mary</td>
                                <td>6xxxxxxxxx</td>
                                <td>mary@mju.ac.th</td>
                            </tr>
                            <tr>
                                <td>July</td>
                                <td>6xxxxxxxxx</td>
                                <td>july@mju.ac.th</td>
                            </tr>
                            <tr>
                                <td>July</td>
                                <td>6xxxxxxxxx</td>
                                <td>july@mju.ac.th</td>
                            </tr>
                            <tr>
                                <td>July</td>
                                <td>6xxxxxxxxx</td>
                                <td>july@mju.ac.th</td>
                            </tr>
                            <tr>
                                <td>July</td>
                                <td>6xxxxxxxxx</td>
                                <td>july@mju.ac.th</td>
                            </tr>
                            <tr>
                                <td>July</td>
                                <td>6xxxxxxxxx</td>
                                <td>july@mju.ac.th</td>
                            </tr>
                            <tr>
                                <td>July</td>
                                <td>6xxxxxxxxx</td>
                                <td>july@mju.ac.th</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
</body>

</html>
<div class="container-fluid">
    <div class="row">
        <div class="col" style="background-color:lavender;"></div>
        <div class="col" style="background-color:lavender;">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </div>
        <div class="col" style="background-color:lavender;"></div>
    </div>
</div>

</body>

</html>
<div class="container-fluid">
    <div class="row">
        <div class="col" style="background-color:lavender;"></div>
        <div class="col" style="background-color:lavender;">
            <button type="button" class="btn btn-success">สร้างห้องเรียน</button>
        </div>
        <div class="col" style="background-color:lavender;"></div>
    </div>
</div>
</body>

</html>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-4" style="background-color:lavender;"></div>
        <div class="col-sm-8" style="background-color:lavender;"></div>
    </div>
</div>
</div>
</div>
</div>
</div>

</body>

</html>


@endsection