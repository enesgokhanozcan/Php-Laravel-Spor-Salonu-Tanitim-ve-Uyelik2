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
                        <th>Month</th>
                        <th>Total</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    @php
                    $total=0;
                    @endphp

                    @foreach($datalist as $rs)


                        <tr>
                            <td><a href="{{route('product',['id'=>$rs->product->id,'slug'=>$rs->product->slug])}}"></a>
                            {{$rs->product->title}}
                            <td>{{$rs->quantity}}</td>
                            <td class="thumb">
                                @if ($rs->product->image)
                                    <img src="{{\Illuminate\Support\Facades\Storage::url($rs->product->image)}}" height="30" alt=" ">
                                @endif

                            </td>
                            <td><a href="{{route('product',['id'=>$rs->product->id,'slug'=>$rs->product->slug])}}"></a>
                                {{$rs->product->title}}
                            </td>
                            <td>{{$rs->quantity}}</td>
                            <td>{{$rs->product->price}}</td>


                            <td>{{$rs->product->price*$rs->quantity}}</td>
                            <td><a href="{{route('user_shopcart_update',['id'=>$rs->id])}}">Edit</a> </td>
                            <td><a href="{{route('user_shopcart_delete',['id'=>$rs->id])}}" onclick="return confirm('Delete !  Are you sure?')" >Delete</a></td>

                        </tr>
                        @php
                            $total+=$rs->price*$rs->quantity;
                        @endphp
                    @endforeach
                    </tbody>
                </table>
                <form action="{{route('user_order_add')}}" method="post">
                    @csrf
                    <input type="hidden"  name="total" value="{{$total}}">
                    <div class="pull-right">
                        <button type="submit" class="primary-btn">Place Order</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    @endsection
