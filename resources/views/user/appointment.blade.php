<!DOCTYPE html>
<html>
    <head>
    <title>Appointment Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
        background-color: #f8f9fa;
        }
        .containerNew {
        max-width: 600px;
        margin: 50px auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2{
            text-align: center;
        }
    </style>
</head>
<body>

    <div class="containerNew">
    <h2 class="mb-4">Book An Appointment</h2>
    <form method="POST" action = "{{url('appointment')}}" enctype="multipart/form-data" class = "main-form">
        @csrf
        <div class="form-group wow fadeInRight">
            <label for="name">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="Enter your name" value="{{ old('name') }}">
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group wow fadeInLeft">
            <label for="age">Age</label>
            <input type="text" class="form-control @error('age') is-invalid @enderror" name="age" id="age" placeholder="Enter your age" value="{{ old('age') }}">
            @error('age')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group wow fadeInRight">
            <label>Gender</label>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="male" name="gender" value="male" >
                <label class="form-check-label" for="male">Male</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="female" name="gender" value="female" >
                <label class="form-check-label" for="female">Female</label>
            </div>
        </div>

        <div class="form-group wow fadeInLeft">
            <label for="phone">Phone Number</label>
            <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" id="phone" placeholder="Enter your phone number" value="{{ old('phone') }}" >
            @error('phone')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group wow fadeInRight">
            <label for="email">Email</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Enter your email" value="{{ old('email') }}" >
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group wow fadeInLeft">
        <label for="department">Choose Doctor</label>
        <select name="doctor" id="department" class="custom-select">
            <option value="default">---Select Doctor---</option>
            @foreach($doctor as $doctors)
            <option value="{{$doctors->name}}">{{$doctors->name}} ({{$doctors->speciality}})</option>
            @endforeach
        </select>
        </div>

        <div class="form-group wow fadeInRight">
            <label for="appointmentDate">Appointment Date</label>
            <input type="date" class="form-control @error('appDate') is-invalid @enderror" id="appointmentDate" name="appDate" value="{{ old('appDate') }}">
            @error('appDate')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group wow fadeInLeft">
            <label for="appointmentTime">Appointment Time</label>
            <input type="time" class="form-control @error('appTime') is-invalid @enderror" id="appointmentTime" name="appTime" value="{{ old('appTime') }}">
            @error('appTime')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group wow fadeInRight">
            <label for="prescriptionReport">Previous Prescription Report(if any)</label>
            <input type="file" class="form-control-file @error('prescriptionReport') is-invalid @enderror" id="prescriptionReport" name="prescriptionReport">
            @error('prescriptionReport')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>


        <div class="form-group wow fadeInLeft">
            <label for="message">Appointment Reason/Additional information</label>
            <textarea class="form-control" id="message" rows="3" name = "message" placeholder="Any additional information"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>

</body>
</html>
