    @extends('layouts.home')


    @section('title', $data->title)


    @section('description')
        {{$data->description}}

    @endsection

    @section('keywords',$data->keywords)

    @section('content')



    <div id="breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{route('home')}}">Home</a> </li>
                <li class="active">Product Detail</li>
            </ul>
        </div>
    </div>




    <div class="section">
        <div class="container">
            <div class="row">
                <!-- Car-->
                <div class="container py-lg-5">
                    <h3 class="heading text-capitalize text-center">{{ $data -> title }} Details</h3><br>

                    <!-- Car Info-->
                    <div class="col-md-6 col-sm-6 text-center">
                        <div class="thumbnail">
                            <a> <img src="{{ \Illuminate\Support\Facades\Storage::url($data->image) }}" alt="Image" style="max-width:100%;"></a>
                        </div>
                        @foreach($datalist as $rs)
                            <div class="thumbnail">
                                <a> <img src="{{ \Illuminate\Support\Facades\Storage::url($rs->image) }}" alt="Image" style="max-width:100%;"></a>
                            </div>
                        @endforeach
                        <h5 class="my-2 text-center text-uppercase">{{$data->title}}</h5>
                        <h5 class="my-2 text-center text-uppercase">{{$data->price}}</h5>
                        <h5 class="heading mb-3 text-center" ><strong>Description:</strong> {{$data->description}}</h5>
                    </div>

                </div>
                <!-- Car-->
            </div>
        </div>
    </div>


    @endsection
