<!DOCTYPE html>
<html lang="en">
<head>
@include('admin.css')
<style type = "text/css">
    label, input{
        display: inline-block;
        width: 200px;
    }
    .white-text{
        color:white;
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
<div class = "container" align = "center" style = "padding-top: 70px;margin-top:100px; border:2px solid white;box-sizing: border-box; height:600px;justify-content: center;margin-right:420px;width:500px;">
    <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div style="padding: 15px" class="@error('name') is-invalid @enderror">
            <label for="name">Doctor Name: </label>
            <input style="color: black" type="text" name="name" placeholder="write your name here" value="{{ old('name') }}">
            @error('name')
                <div class="invalid-feedback white-text">{{ $message }}</div>
            @enderror
        </div>

        <div style="padding: 15px" class="@error('phone') is-invalid @enderror">
            <label for="phone">Phone Number: </label>
            <input style="color: black" type="number" name="phone" placeholder="779541xxxx" value="{{ old('phone') }}">
            @error('phone')
                <div class="invalid-feedback white-text">{{ $message }}</div>
            @enderror
        </div>

        <div style="padding: 15px" class="@error('email') is-invalid @enderror">
            <label for="email">Email: </label>
            <input style="color: black" type="text" name="email" placeholder="doctor@gmail.com" value="{{ old('email') }}">
            @error('email')
                <div class="invalid-feedback white-text">{{ $message }}</div>
            @enderror
        </div>

        <div style="padding: 15px" class="@error('speciality') is-invalid @enderror">
            <label for="speciality">Speciality: </label>
            <select name="speciality" style="color: black; width: 200px">
                <option value="select">---Select---</option>
                <option value="cardiologist">Cardiologist</option>
                <option value="dermatologist">Dermatologist</option>
                <option value="neurologist">Neurologist</option>
                <option value="radiologist">Radiologist</option>
                <option value="surgeon">Surgeon</option>
                <option value="others">Other</option>
            </select>
            @error('speciality')
                <div class="invalid-feedback white-text">{{ $message }}</div>
            @enderror
        </div>


        <div style="padding: 15px" class="@error('file') is-invalid @enderror">
            <label for="file">Doctor's Photo: </label>
            <input type="file" name="file">
            @error('file')
                <div class="white-text">{{$message}}</div>
            @enderror
        </div>


        <div style = "padding:15px">
            <input type="submit" class = "btn btn-primary ">
        </div>
    </form>
</div>
</div>
<!-- container-scroller -->
@include('admin.script')
</body>
</html>