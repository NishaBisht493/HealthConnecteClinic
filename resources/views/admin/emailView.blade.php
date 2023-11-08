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

</style>
</head>
<body>
<div class="container-scroller">
<!-- partial:partials/_sidebar.html -->
@include('admin.sidebar')
<!-- partial -->
@include('admin.navbar')
<div class="container-fluid page-body-wrapper">
<div class = "container" align = "center" style = "padding-top: 100px; border:2px solid white;box-sizing: border-box; ">
    <form action="{{url('sendEmail', $data->id)}}" method="POST">
        @csrf
        <div style = "padding:15px">
            <label for="greet">Greeting: </label>
            <input style = "color: black" type="text" name = "greet" >
        </div>
        <div style = "padding:15px">
            <label for="msg">Message: </label>
            <input style = "color: black" type="text" name = "msg">
        </div>
        <div style = "padding:15px">
            <label for="action">Action Text: </label>
            <input style = "color: black" type="text" name = "action">
        </div>
        <div style = "padding:15px">
            <label for="actionurl">Action URL: </label>
            <input style = "color: black" type="text" name = "actionurl">
        </div>
        <div style = "padding:15px">
            <label for="end">Closing: </label>
            <input style = "color: black" type="text" name = "end">
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