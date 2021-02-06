@php

    $setting=\App\Http\Controllers\HomeController::getsetting()

@endphp


<footer>
    <div id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 animate-box">
                    <h3 class="section-title">About Us</h3>
                    <p>2010 yılından bugüne kadar hizmet veren Royal Sports yeni konsepti ile karşınızda! Uygun fiyatlarla ulaşılabilecek spor deneyimi sunan ROYAL SPORTS, keyfini çıkarmak isteyen herkes için. Sen de bu deneyimin bir parçası olmak istiyorsan, hemen randevu al!

                        Senelerin tecrübesinin üstüne, Royal Sports’un muzip ruhunu kattık, size spor yapmanız için rahat ve eğlenceli bir atmosfer yarattık. Size sadece tadını çıkarmak kaldı..</p>
                </div>

                <div class="col-md-4 animate-box">
                    <h3 class="section-title">Our Address</h3>
                    <strong>Company:</strong>{{$setting->company}}
                    <strong>Address:</strong>{{$setting->address}}
                    <strong>Phone:</strong>{{$setting->phone}}
                    <strong>Fax:</strong>{{$setting->fax}}
                    <strong>Email:</strong>{{$setting->email}}

                </div>
                <div class="col-md-4 animate-box">
                    <h3 class="section-title">Drop us a line</h3>
                    <form class="contact-form">
                        <div class="form-group">
                            <label for="name" class="sr-only">Name</label>
                            <input type="name" class="form-control" id="name" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label for="email" class="sr-only">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="message" class="sr-only">Message</label>
                            <textarea class="form-control" id="message" rows="7" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" id="btn-submit" class="btn btn-send-message btn-md" value="Send Message">
                        </div>
                    </form>
                </div>
            </div>
            <div class="row copy-right">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <p class="fh5co-social-icons">
                        @if ($setting->twitter!=null)<a href="{{$setting->twitter}}" target="_blank"><i class="icon-twitter2"></i></a>@endif
                        @if ($setting->facebook!=null)<a href="{{$setting->facebook}}" target="_blank"><i class="icon-facebook2"></i></a>@endif
                        @if ($setting->instagram!=null)<a href="{{$setting->instagram}}" target="_blank"><i class="icon-instagram"></i></a>@endif
                        @if ($setting->youtube!=null)<a href="{{$setting->youtube}}" target="_blank"><i class="icon-youtube"></i></a>@endif
                    </p>
                    <p> <a href="#">Fitness</a>. All Rights Reserved. {{$setting->company}}</p>
                </div>
            </div>
        </div>
    </div>
</footer>


</div>
<!-- END fh5co-page -->

</div>

<!-- END fh5co-wrapper -->
<!-- jQuery -->


<script src="{{asset('assets')}}/js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="{{asset('assets')}}/js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="{{asset('assets')}}/js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="{{asset('assets')}}/js/jquery.waypoints.min.js"></script>
<!-- Stellar -->
<script src="{{asset('assets')}}/js/jquery.stellar.min.js"></script>
<!-- Superfish -->
<script src="{{asset('assets')}}/js/hoverIntent.js"></script>
<script src="{{asset('assets')}}/js/superfish.js"></script>

<!-- Main JS (Do not remove) -->
<script src="{{asset('assets')}}/js/main.js"></script>
