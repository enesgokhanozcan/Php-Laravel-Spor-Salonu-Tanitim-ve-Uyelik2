    @extends('layouts.home')


    @section('title', 'My Shopcart')


    @section('content')



    <div id="breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{route('home')}}">Home</a> </li>
                <li class="active">Shopcart</li>
            </ul>
        </div>
    </div>




    <div class="section">
        <div class="container">
            <div class="row">
                <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                    <tr>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Month</th>
                        <th>Total</th>
                        <th>Actions</th>
                    </tr>
                    </thead>

                    @foreach($datalist as $rs)


                        <tr>
                            <td> @if ($rs->image)
                                    <img src="{{Storage::url($rs->image)}}" height="30" alt=" ">
                                @endif

                            </td>
                            <td>{{$rs->title}}</td>
                            <td>{{$rs->quantity}}</td>
                            <td>{{$rs->price}}</td>
                            <td>{{$rs->status}}</td>
                            <td><a href="{{route('user_shopcart_update',['id'=>$rs->id])}}">Edit</a> </td>
                            <td><a href="{{route('user_shopcart_delete',['id'=>$rs->id])}}" onclick="return confirm('Delete !  Are you sure?')" >Delete</a></td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    @endsection
