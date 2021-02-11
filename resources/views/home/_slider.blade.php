@php
    $slider=\App\Models\Product::select('id','title','image','price','slug')->limit(4)->get();
@endphp
<div id="home">
    <div class="container">
        <div class="home-wrap">
            <div id="home-slick">
                <div class="item active">


                </div>


                @foreach($slider as $rs)
                <div class="banner banner-1">
                    <img src="{{Storage::url($rs->image)}}" alt="">

                    <div class="banner-caption text-center  active  ">

                        <h1>{{$rs->title}}</h1>
                        <h1>{{$rs->price}}</h1>
                        <a href="{{route('product',['id'=>$rs->id,'slug'=>$rs->slug])}}" class="btn btn-default"></a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

