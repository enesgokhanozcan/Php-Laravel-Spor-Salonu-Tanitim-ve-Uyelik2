    @extends('layouts.home')


    @section('title', 'Order Items')


    @section('content')



    <div id="breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{route('home')}}">Home</a> </li>
                <li class="active">Order Items</li>
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
                    @php
                    $total=0;
                    @endphp

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
                            <td><a href="{{route('user_shopcart_delete',['id'=>$rs->id])}}" onclick="return confirm('Delete !  Are you sure?')" >Delete</a></td>

                            <td>{{$rs->total}}</td>
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
