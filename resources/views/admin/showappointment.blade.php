<!DOCTYPE html>
<html lang="en">
<head>
@include('admin.css')
<style>
    .table thead th, .jsgrid .jsgrid-table thead th {
    border-top: 0;
    border-bottom-width: 1px;
    font-weight: 500;
    color: #ffffff;
}
</style>
</head>
<body>
<div class="container-scroller">
<!-- partial:partials/_sidebar.html -->
@include('admin.sidebar')
<!-- partial -->
@include('admin.navbar')
<div class="container-fluid page-body-wrapper">
    <div align = "center" style = "padding-top:70px;margin-right:150px">
        <table class="table table-bordered">
            <thead class = "bg-light table-active">
                <tr align = "center" class = "bg-primary" >
                    <th>Patient Name</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Contact</th>
                    <th>Dr.Name</th>
                    <th>App.Date</th>
                    <th>App.Time</th>
                    <th>Status</th>
                    <th>Approve</th>
                    <th>Cancel</th>
                    <!-- <th>Send Mail</th> -->
                </tr>
            </thead>
            <tbody class = "bg-light">
                @foreach($data as $appointment)
                <tr align = "center">
                    <td>{{$appointment->name}}</td>
                    <td>{{$appointment->age}}</td>
                    <td>{{$appointment->gender}}</td>
                    <td>{{$appointment->phone}}</td>
                    <td>{{$appointment->doctor}}</td>
                    <td>{{$appointment->appDate}}</td>
                    <td>{{$appointment->appTime}}</td>
                    <td>{{$appointment->status}}</td>
                    <td>
                        <a class = "btn btn-success" href="{{url('approved', $appointment->id)}}">Approve</a>
                    </td>
                    <td>
                        <a class = "btn btn-danger" href="{{url('cancelled', $appointment->id)}}">Cancel</a>
                    </td>
                    <!-- <td>
                        <a class = "btn btn-primary" href="{{url('emailView', $appointment->id)}}">Send Mail</a>
                    </td> -->
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<!-- container-scroller -->
@include('admin.script')
</body>
</html>