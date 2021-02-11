@extends('layouts.admin')
@section('title','My Orders')
@section('content')
    <div id="breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{route('home')}}">Home</a> </li>
                <li class="active">User Orders</li>
            </ul>
        </div>
    </div>


    <div class="section">
        <div class="container">
            <div class="row">
                <div class="x_content">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box table-responsive">
                                <p class="text-muted font-13 m-b-30">
                                    DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function: <code>$().DataTable();</code>
                                </p>
                                <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Phone(s)</th>
                                        <th>Email</th>
                                        <th>Address</th>
                                        <th>Total</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>


                                    <tbody>
                                    @foreach($datalist as $rs)


                                        <tr>
                                            <td>{{$rs->name}}</td>
                                            <td>{{$rs->email}}</td>
                                            <td>{{$rs->phone}}</td>
                                            <td>{{$rs->address}}</td>
                                            <td>{{$rs->total}}</td>
                                            <td>{{$rs->created_at}}</td>
                                            <td>{{$rs->status}}</td>

                                            <td><a href="{{route('user_order_show',['id'=>$rs->id])}}">Edit</a> </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
