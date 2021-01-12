<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.home')


@section('title', 'Laravel Fitness')


@section('description')
    Türkiyenin en iyi fitness sitesi....

@endsection

@section('keywords', 'fitness, yoga, cycling')

@section('content')
    <div id="fh5co-schedule-section" class="fh5co-lightgray-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="heading-section text-center animate-box">
                        <h2>Class Schedule</h2>
                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                    </div>
                </div>
            </div>
            <div class="row animate-box">
                <div class="col-md-10 col-md-offset-1 text-center">
                    <ul class="schedule">
                        <li><a href="#" class="active" data-sched="sunday">Sunday</a></li>
                        <li><a href="#" data-sched="monday">Monday</a></li>
                        <li><a href="#" data-sched="tuesday">Tuesday</a></li>
                        <li><a href="#" data-sched="wednesday">Wednesday</a></li>
                        <li><a href="#" data-sched="thursday">Thursday</a></li>
                        <li><a href="#" data-sched="monday">Monday</a></li>
                        <li><a href="#" data-sched="saturday">Saturday</a></li>
                    </ul>
                </div>
                <div class="row text-center">

                    <div class="col-md-12 schedule-container">

                        <div class="schedule-content active" data-day="sunday">
                            <div class="col-md-3 col-sm-6">
                                <div class="program program-schedule">
                                    <img src="{{asset('assets')}}/images/fit-dumbell.svg" alt="Cycling">
                                    <small>06AM-7AM</small>
                                    <h3>Body Building</h3>
                                    <span>John Doe</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="program program-schedule">
                                    <img src="{{asset('assets')}}/images/fit-yoga.svg" alt="">
                                    <small>06AM-7AM</small>
                                    <h3>Yoga Programs</h3>
                                    <span>James Smith</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="program program-schedule">
                                    <img src="{{asset('assets')}}/images/fit-cycling.svg" alt="">
                                    <small>06AM-7AM</small>
                                    <h3>Cycling Program</h3>
                                    <span>Rita Doe</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="program program-schedule">
                                    <img src="{{asset('assets')}}/images/fit-boxing.svg" alt="Cycling">
                                    <small>06AM-7AM</small>
                                    <h3>Boxing Fitness</h3>
                                    <span>John Dose</span>
                                </div>
                            </div>
                        </div>
                        <!-- END sched-content -->

                        <div class="schedule-content" data-day="monday">
                            <div class="col-md-3 col-sm-6">
                                <div class="program program-schedule">
                                    <img src="{{asset('assets')}}/images/fit-yoga.svg" alt="">
                                    <small>06AM-7AM</small>
                                    <h3>Yoga Programs</h3>
                                    <span>James Smith</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="program program-schedule">
                                    <img src="{{asset('assets')}}/images/fit-dumbell.svg" alt="Cycling">
                                    <small>06AM-7AM</small>
                                    <h3>Body Building</h3>
                                    <span>John Doe</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="program program-schedule">
                                    <img src="{{asset('assets')}}/images/fit-boxing.svg" alt="Cycling">
                                    <small>06AM-7AM</small>
                                    <h3>Boxing Fitness</h3>
                                    <span>John Dose</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="program program-schedule">
                                    <img src="{{asset('assets')}}/images/fit-cycling.svg" alt="">
                                    <small>06AM-7AM</small>
                                    <h3>Cycling Program</h3>
                                    <span>Rita Doe</span>
                                </div>
                            </div>

                        </div>
                        <!-- END sched-content -->

                        <div class="schedule-content" data-day="tuesday">
                            <div class="col-md-3 col-sm-6">
                                <div class="program program-schedule">
                                    <img src="{{asset('assets')}}/images/fit-dumbell.svg" alt="Cycling">
                                    <small>06AM-7AM</small>
                                    <h3>Body Building</h3>
                                    <span>John Doe</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="program program-schedule">
                                    <img src="{{asset('assets')}}/images/fit-yoga.svg" alt="">
                                    <small>06AM-7AM</small>
                                    <h3>Yoga Programs</h3>
                                    <span>James Smith</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="program program-schedule">
                                    <img src="{{asset('assets')}}/images/fit-cycling.svg" alt="">
                                    <small>06AM-7AM</small>
                                    <h3>Cycling Program</h3>
                                    <span>Rita Doe</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="program program-schedule">
                                    <img src="{{asset('assets')}}/images/fit-boxing.svg" alt="Cycling">
                                    <small>06AM-7AM</small>
                                    <h3>Boxing Fitness</h3>
                                    <span>John Dose</span>
                                </div>
                            </div>
                        </div>
                        <!-- END sched-content -->

                        <div class="schedule-content" data-day="wednesday">
                            <div class="col-md-3 col-sm-6">
                                <div class="program program-schedule">
                                    <img src="{{asset('assets')}}/images/fit-yoga.svg" alt="">
                                    <small>06AM-7AM</small>
                                    <h3>Yoga Programs</h3>
                                    <span>James Smith</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="program program-schedule">
                                    <img src="{{asset('assets')}}/images/fit-dumbell.svg" alt="Cycling">
                                    <small>06AM-7AM</small>
                                    <h3>Body Building</h3>
                                    <span>John Doe</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="program program-schedule">
                                    <img src="{{asset('assets')}}/images/fit-boxing.svg" alt="Cycling">
                                    <small>06AM-7AM</small>
                                    <h3>Boxing Fitness</h3>
                                    <span>John Dose</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="program program-schedule">
                                    <img src="{{asset('assets')}}/images/fit-cycling.svg" alt="">
                                    <small>06AM-7AM</small>
                                    <h3>Cycling Program</h3>
                                    <span>Rita Doe</span>
                                </div>
                            </div>
                        </div>
                        <!-- END sched-content -->

                        <div class="schedule-content" data-day="thursday">
                            <div class="col-md-3 col-sm-6">
                                <div class="program program-schedule">
                                    <img src="{{asset('assets')}}/images/fit-dumbell.svg" alt="Cycling">
                                    <small>06AM-7AM</small>
                                    <h3>Body Building</h3>
                                    <span>John Doe</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="program program-schedule">
                                    <img src="{{asset('assets')}}/images/fit-yoga.svg" alt="">
                                    <small>06AM-7AM</small>
                                    <h3>Yoga Programs</h3>
                                    <span>James Smith</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="program program-schedule">
                                    <img src="{{asset('assets')}}/images/fit-cycling.svg" alt="">
                                    <small>06AM-7AM</small>
                                    <h3>Cycling Program</h3>
                                    <span>Rita Doe</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="program program-schedule">
                                    <img src="{{asset('assets')}}/images/fit-boxing.svg" alt="Cycling">
                                    <small>06AM-7AM</small>
                                    <h3>Boxing Fitness</h3>
                                    <span>John Dose</span>
                                </div>
                            </div>
                        </div>
                        <!-- END sched-content -->

                        <div class="schedule-content" data-day="friday">
                            <div class="col-md-3 col-sm-6">
                                <div class="program program-schedule">
                                    <img src="{{asset('assets')}}/images/fit-yoga.svg" alt="">
                                    <small>06AM-7AM</small>
                                    <h3>Yoga Programs</h3>
                                    <span>James Smith</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="program program-schedule">
                                    <img src="{{asset('assets')}}/images/fit-dumbell.svg" alt="Cycling">
                                    <small>06AM-7AM</small>
                                    <h3>Body Building</h3>
                                    <span>John Doe</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="program program-schedule">
                                    <img src="{{asset('assets')}}/images/fit-boxing.svg" alt="Cycling">
                                    <small>06AM-7AM</small>
                                    <h3>Boxing Fitness</h3>
                                    <span>John Dose</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="program program-schedule">
                                    <img src="{{asset('assets')}}/images/fit-cycling.svg" alt="">
                                    <small>06AM-7AM</small>
                                    <h3>Cycling Program</h3>
                                    <span>Rita Doe</span>
                                </div>
                            </div>
                        </div>
                        <!-- END sched-content -->

                        <div class="schedule-content" data-day="saturday">
                            <div class="col-md-3 col-sm-6">
                                <div class="program program-schedule">
                                    <img src="{{asset('assets')}}/images/fit-dumbell.svg" alt="Cycling">
                                    <small>06AM-7AM</small>
                                    <h3>Body Building</h3>
                                    <span>John Doe</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="program program-schedule">
                                    <img src="{{asset('assets')}}/images/fit-yoga.svg" alt="">
                                    <small>06AM-7AM</small>
                                    <h3>Yoga Programs</h3>
                                    <span>James Smith</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="program program-schedule">
                                    <img src="{{asset('assets')}}/images/fit-cycling.svg" alt="">
                                    <small>06AM-7AM</small>
                                    <h3>Cycling Program</h3>
                                    <span>Rita Doe</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="program program-schedule">
                                    <img src="{{asset('assets')}}/images/fit-boxing.svg" alt="Cycling">
                                    <small>06AM-7AM</small>
                                    <h3>Boxing Fitness</h3>
                                    <span>John Dose</span>
                                </div>
                            </div>
                        </div>
                        <!-- END sched-content -->
                    </div>


                </div>
            </div>
        </div>
    </div>
    <div id="fh5co-programs-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="heading-section text-center animate-box">
                        <h2>Our Programs</h2>
                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4 col-sm-6">
                    <div class="program animate-box">
                        <img src="{{asset('assets')}}/images/fit-dumbell.svg" alt="Cycling">
                        <h3>Body Combat</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                        <span><a href="#" class="btn btn-default">Join Now</a></span>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="program animate-box">
                        <img src="{{asset('assets')}}/images/fit-yoga.svg" alt="">
                        <h3>Yoga Programs</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                        <span><a href="#" class="btn btn-default">Join Now</a></span>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="program animate-box">
                        <img src="{{asset('assets')}}/images/fit-cycling.svg" alt="">
                        <h3>Cycling Program</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                        <span><a href="#" class="btn btn-default">Join Now</a></span>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="program animate-box">
                        <img src="{{asset('assets')}}/images/fit-boxing.svg" alt="Cycling">
                        <h3>Boxing Fitness</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                        <span><a href="#" class="btn btn-default">Join Now</a></span>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="program animate-box">
                        <img src="{{asset('assets')}}/images/fit-swimming.svg" alt="">
                        <h3>Swimming Program</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                        <span><a href="#" class="btn btn-default">Join Now</a></span>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="program animate-box">
                        <img src="{{asset('assets')}}/images/fit-massage.svg" alt="">
                        <h3>Massage</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                        <span><a href="#" class="btn btn-default">Join Now</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="fh5co-team-section" class="fh5co-lightgray-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="heading-section text-center animate-box">
                        <h2>Meet Our Trainers</h2>
                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4 col-sm-6">
                    <div class="team-section-grid animate-box" style="background-image: url(images/trainer-1.jpg);">
                        <div class="overlay-section">
                            <div class="desc">
                                <h3>John Doe</h3>
                                <span>Body Trainer</span>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                                <p class="fh5co-social-icons">
                                    <a href="#"><i class="icon-twitter-with-circle"></i></a>
                                    <a href="#"><i class="icon-facebook-with-circle"></i></a>
                                    <a href="#"><i class="icon-instagram-with-circle"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="team-section-grid animate-box" style="background-image: url(images/trainer-2.jpg);">
                        <div class="overlay-section">
                            <div class="desc">
                                <h3>James Smith</h3>
                                <span>Swimming Trainer</span>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                                <p class="fh5co-social-icons">
                                    <a href="#"><i class="icon-twitter-with-circle"></i></a>
                                    <a href="#"><i class="icon-facebook-with-circle"></i></a>
                                    <a href="#"><i class="icon-instagram-with-circle"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="team-section-grid animate-box" style="background-image: url(images/trainer-3.jpg);">
                        <div class="overlay-section">
                            <div class="desc">
                                <h3>John Doe</h3>
                                <span>Chief Executive Officer</span>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p class="fh5co-social-icons">
                                    <a href="#"><i class="icon-twitter-with-circle"></i></a>
                                    <a href="#"><i class="icon-facebook-with-circle"></i></a>
                                    <a href="#"><i class="icon-instagram-with-circle"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="team-section-grid animate-box" style="background-image: url(images/trainer-4.jpg);">
                        <div class="overlay-section">
                            <div class="desc">
                                <h3>John Doe</h3>
                                <span>Chief Executive Officer</span>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p class="fh5co-social-icons">
                                    <a href="#"><i class="icon-twitter-with-circle"></i></a>
                                    <a href="#"><i class="icon-facebook-with-circle"></i></a>
                                    <a href="#"><i class="icon-instagram-with-circle"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="team-section-grid animate-box" style="background-image: url(images/trainer-5.jpg);">
                        <div class="overlay-section">
                            <div class="desc">
                                <h3>John Doe</h3>
                                <span>Chief Executive Officer</span>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p class="fh5co-social-icons">
                                    <a href="#"><i class="icon-twitter-with-circle"></i></a>
                                    <a href="#"><i class="icon-facebook-with-circle"></i></a>
                                    <a href="#"><i class="icon-instagram-with-circle"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="team-section-grid animate-box" style="background-image: url(images/trainer-6.jpg);">
                        <div class="overlay-section">
                            <div class="desc">
                                <h3>John Doe</h3>
                                <span>Chief Executive Officer</span>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p class="fh5co-social-icons">
                                    <a href="#"><i class="icon-twitter-with-circle"></i></a>
                                    <a href="#"><i class="icon-facebook-with-circle"></i></a>
                                    <a href="#"><i class="icon-instagram-with-circle"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="fh5co-parallax" style="background-image: url(images/home-image-2.jpg);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-md-pull-3 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 fh5co-table">
                    <div class="fh5co-intro fh5co-table-cell box-area">
                        <div class="animate-box">
                            <h1>Fitness Classes this summer</h1>
                            <p>Pay now and get 25% Discount</p>
                            <a href="#" class="btn btn-primary">Become A Member</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- end: fh5co-parallax -->
    <div id="fh5co-pricing-section" class="fh5co-pricing fh5co-lightgray-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="heading-section text-center animate-box">
                        <h2>Pricing Plan</h2>
                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="pricing">
                    <div class="col-md-3 animate-box">
                        <div class="price-box animate-box">
                            <h2 class="pricing-plan">Starter</h2>
                            <div class="price"><sup class="currency">$</sup>9<small>/month</small></div>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                            <ul class="classes">
                                <li>15 Cardio Classes</li>
                                <li class="color">10 Swimming Lesson</li>
                                <li>10 Yoga Classes</li>
                                <li class="color">20 Aerobics</li>
                                <li>10 Zumba Classes</li>
                                <li class="color">5 Massage</li>
                                <li>10 Body Building</li>
                            </ul>
                            <a href="#" class="btn btn-default">Select Plan</a>
                        </div>
                    </div>

                    <div class="col-md-3 animate-box">
                        <div class="price-box animate-box">
                            <h2 class="pricing-plan">Basic</h2>
                            <div class="price"><sup class="currency">$</sup>27<small>/month</small></div>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                            <ul class="classes">
                                <li>15 Cardio Classes</li>
                                <li class="color">10 Swimming Lesson</li>
                                <li>10 Yoga Classes</li>
                                <li class="color">20 Aerobics</li>
                                <li>10 Zumba Classes</li>
                                <li class="color">5 Massage</li>
                                <li>10 Body Building</li>
                            </ul>
                            <a href="#" class="btn btn-default">Select Plan</a>
                        </div>
                    </div>

                    <div class="col-md-3 animate-box">
                        <div class="price-box animate-box popular">
                            <h2 class="pricing-plan pricing-plan-offer">Pro <span>Best Offer</span></h2>
                            <div class="price"><sup class="currency">$</sup>74<small>/month</small></div>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                            <ul class="classes">
                                <li>15 Cardio Classes</li>
                                <li class="color">10 Swimming Lesson</li>
                                <li>10 Yoga Classes</li>
                                <li class="color">20 Aerobics</li>
                                <li>10 Zumba Classes</li>
                                <li class="color">5 Massage</li>
                                <li>10 Body Building</li>
                            </ul>
                            <a href="#" class="btn btn-select-plan btn-sm">Select Plan</a>
                        </div>
                    </div>

                    <div class="col-md-3 animate-box">
                        <div class="price-box animate-box">
                            <h2 class="pricing-plan">Unlimited</h2>
                            <div class="price"><sup class="currency">$</sup>140<small>/month</small></div>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                            <ul class="classes">
                                <li>15 Cardio Classes</li>
                                <li class="color">10 Swimming Lesson</li>
                                <li>10 Yoga Classes</li>
                                <li class="color">20 Aerobics</li>
                                <li>10 Zumba Classes</li>
                                <li class="color">5 Massage</li>
                                <li>10 Body Building</li>
                            </ul>
                            <a href="#" class="btn btn-default">Select Plan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection




