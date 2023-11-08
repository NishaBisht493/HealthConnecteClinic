<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/public">
@include('admin.css')
<style type = "text/css">
    label, input{
        display: inline-block;
        width: 200px;
    }
    .close{
        display: inline;
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
<div class = "container" align = "center"style = "padding-top: 40px;margin-top:100px; border:2px solid white;box-sizing: border-box; height:700px;justify-content: center;margin-right:400px;width:600px;">
    @if(session()->has('message'))
        <div class = "alert alert-success">
            <button type="button" class = "close" data-dismiss = "alert">x</button>
            {{session()->get('message')}}
        </div>
    @endif 
    <form action="{{url('updateData', $data->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div style = "padding:15px">
            <label for="name">Doctor Name: </label>
            <input style = "color: black" type="text" name = "name" value = "{{$data->name}}">
        </div>
        <div style = "padding:15px">
            <label for="phone">Contact: </label>
            <input style = "color: black" type="number" name = "phone" value = "{{$data->phone}}">
        </div>
        <div style = "padding:15px">
            <label for="email">Email: </label>
            <input style = "color: black" type="text" name = "email" value = "{{$data->email}}">
        </div>
        <div style = "padding:15px">
            <label for="speciality">Speciality: </label>
            <input style = "color: black" type="text" name="speciality" value="{{$data->speciality}}">
        </div>
        <div style = "padding:15px">
            <label for="file">Current Photo: </label>
            <img height = "150" width = "150"  src="doctorImages/{{$data->file}}" alt="{{$data->file}}'s Photo">
        </div>

        <div style = "padding:15px">
            <label for="file">New Photo: </label>
            <input type="file" name = "file">
        </div>

        <div style = "padding:15px">
            <input type="submit" class = "btn btn-primary ">
        </div>
    </form>
</div>
</div>
<!-- partial -->
@include('admin.script')
</body>
</html>