<!DOCTYPE html>
<html lang="en">
<head>
@include('admin.css')
<style>
    .table thead th {
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
<!-- partial -->
<div class="container-fluid page-body-wrapper">
    <div align = "center" style = "padding:70px;margin-right:150px">
        <table class="table table-bordered">
            <thead class = "bg-light table-active">
                <tr align = "center" class = "bg-primary" >
                    <th>Doctor Name</th>
                    <th>Contact</th>
                    <th>Email</th>
                    <th>Speciality</th>
                    <th>Image</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody class = "bg-light">
                @foreach($data as $doctor)
                <tr align = "center">
                    <td>{{$doctor->name}}</td>
                    <td>{{$doctor->phone}}</td>
                    <td>{{$doctor->email}}</td>
                    <td>{{$doctor->speciality}}</td>
                    <td><img src="doctorImages/{{$doctor->file}}" alt="{{$doctor->file}}'s Photo"></td>
                    <td><a class = "btn btn-primary" href="{{url('updateDoctor', $doctor->id)}}">Update</a></td>
                    <td><a onclick = "return confirm('Do you really want to delete this data?')" class = "btn btn-danger" href="{{url('deleteDoctor', $doctor->id)}}">Delete</a></td>
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