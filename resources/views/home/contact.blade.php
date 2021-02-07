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

                </div>
            </div>
        </div>
    </div>


    @endsection
