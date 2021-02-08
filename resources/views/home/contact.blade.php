    @extends('layouts.home')


    @section('title','Contact- '.$setting->title)


    @section('description')
        {{$setting->description}}

    @endsection

    @section('keywords',$setting->keywords)

    @section('content')



    <div id="breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{route('home')}}">Home</a> </li>
                <li class="active">Contact</li>
            </ul>
        </div>
    </div>




    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="aside-title">İletişim Bilgileri</h3>
                    {!!$setting->contact!!}
                </div>
                <div class="col-md-6">
                    <h3 class="aside-title">İletişim Formu</h3>
                    @include('home.message')
                    <form class="contact-form" method="post" action="{{route('sendmessage')}}">
                        @csrf
                        <div class="form-group">
                            <label for="name" class="sr-only">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label for="phone" class="sr-only">Phone</label>
                            <input type="text" class="form-control" id="phone" placeholder="Phone">
                        </div>
                        <div class="form-group">
                            <label for="email" class="sr-only">Email</label>
                            <input type="text" class="form-control" id="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="subject" class="sr-only">Subject</label>
                            <input type="text" class="form-control" id="subject" placeholder="Subject">
                        </div>
                        <div class="form-group">
                            <label for="message" class="sr-only">Message</label>
                            <textarea class="form-control" id="message" rows="7" placeholder="Message"></textarea>
                        </div>

                        <div class="form-group">
                            <input type="submit" id="btn-submit" class="btn btn-send-message btn-md" value="Send Message">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    @endsection
