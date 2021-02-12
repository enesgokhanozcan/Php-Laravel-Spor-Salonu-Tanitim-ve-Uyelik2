    @extends('layouts.home')


    @section('title', 'User Product')



    @section('content')



    <div id="breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{route('home')}}">Home</a> </li>
                <li class="active">User Product</li>
            </ul>
        </div>
    </div>




    <div class="section">
        <div class="card-header">
            <a href="{{route('user_product_add')}}" type="button" class="btn btn-block btn-info" style="width: border-box;"></a>
        </div>
        <div class="container">
            <div class="row">
                <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                    <tr>
                        <th>İd</th>
                        <th>Category</th>
                        <th>Title(s)</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Image Gallery</th>
                        <th>Status</th>
                    </tr>
                    </thead>


                    <tbody>
                    @foreach($datalist as $rs)


                        <tr>
                            <td>{{$rs->id}}</td>
                            <td>{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs->category,$rs->category->title)}}</td>
                            <td>{{$rs->title}}</td>
                            <td>{{$rs->price}}</td>
                            <td> @if ($rs->image)
                                    <img src="{{Storage::url($rs->image)}}" height="30" alt=" ">
                                @endif

                            </td>
                            <td><a href="{{route('user_image_add',['product_id'=>$rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 witdth=1100,height=700')"><img src="{{asset('assets/admin/images')}}/gallery.icon.png" height="25"></a></td>
                            <td>{{$rs->status}}</td>
                            <td><a href="{{route('user_product_edit',['id'=>$rs->id])}}">Edit</a> </td>
                            <td><a href="{{route('user_product_delete',['id'=>$rs->id])}}" onclick="return confirm('Delete !  Are you sure?')" >Delete</a></td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    @endsection
