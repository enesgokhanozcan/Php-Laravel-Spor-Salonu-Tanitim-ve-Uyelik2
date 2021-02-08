<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
<link rel="shortcut icon" href={{asset('assets')}}/"favicon.ico">

<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700,900' rel='stylesheet' type='text/css'>

<!-- Animate.css -->
<link rel="stylesheet" href="{{asset('assets')}}/css/animate.css">
<!-- Icomoon Icon Fonts-->
<link rel="stylesheet" href="{{asset('assets')}}/css/icomoon.css">
<!-- Bootstrap  -->
<link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap.css">
<!-- Superfish -->
<link rel="stylesheet" href="{{asset('assets')}}/css/superfish.css">

<link rel="stylesheet" href="{{asset('assets')}}/css/style.css">


<!-- Modernizr JS -->
<script src="js/modernizr-2.6.2.min.js"></script>
<!-- FOR IE9 below -->
<!--[if lt IE 9]>
<script src="js/respond.min.js"></script>
<![endif]-->
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Message Detail</h3>
            </div>
            @include('home.message')
            <div class="title_right">
                <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Edit Product</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Settings 1</a>
                                    <a class="dropdown-item" href="#">Settings 2</a>
                                </div>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <form role="form" action="{{route('admin_message_update', ['id'=>$data->id])}}" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="" method="post">
                            @csrf
                            <table id="datatable" class="table table-striped table-bordered" style="width:100%">

                                <tr><th>Id</th><td>{{$data->id}}</td></tr>
                                <tr><th>Name</th><td>{{$data->name}}</td></tr>
                                <tr><th>Email</th><td>{{$data->email}}</td></tr>
                                <tr><th>Phone</th><td>{{$data->phone}}</td></tr>
                                <tr><th>Subject</th><td>{{$data->subject}}</td></tr>
                                <tr><th>Message</th><td>{{$data->message}}</td></tr>
                                <tr><th>Admin Note</th><td>
                                    <textarea id="summernote" name="detail" >{{$data->note}}</textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td><button type="submit" class="btn btn-success">Update Product</button></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

