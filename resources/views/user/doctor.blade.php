
<div class="page-section">
    <div class="container">
        <h1 class="text-center mb-5 wow fadeInUp"><strong>Meet Our Doctors</strong></h1>

        <div class="owl-carousel wow fadeInLeft" id="doctorSlideshow">
            @foreach($doctor as $doctors)
            <div class="item">
                <div class="card-doctor" style="border:1px solid gray">
                    <div class="header">
                        <img style = " height:250px !important" src="doctorImages/{{$doctors->file}}" alt="{{$doctors->name}}'s Photo">
                        <div class="meta">
                        <a href="#"><span class="mai-call"></span></a>
                        <a href="#"><span class="mai-logo-whatsapp"></span></a>
                        </div>
                    </div>
                    <div class="body">
                        <p class="text-xl mb-0">{{$doctors->name}}</p>
                        <span class="text-sm text-grey">{{$doctors->speciality}}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>