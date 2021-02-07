<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="{{route('admin_home')}}" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile clearfix">
                    <div class="profile_pic">
                        <img src="{{asset('assets')}}/admin/production/images/img.jpg" alt="..." class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        @auth
                            <a href="#" class="d-block">{{ Auth::user()->name }} </a>
                            <a href="{{route('logout')}}" >Logout</a>
                        @endauth
                    </div>
                </div>
                <!-- /menu profile quick info -->

                <br />
