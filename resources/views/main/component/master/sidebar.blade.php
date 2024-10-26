<div class="py-1 top">
    <div class="container">
        <div class="row">
            <div class="col-sm text-center text-md-left mb-md-0 mb-2 pr-md-4 d-flex topper align-items-center">
                <p class="mb-0 w-100">
                    <span class="fa fa-paper-plane"></span>
                    <span class="text">mesakh@ptusd.co.id</span>
                </p>
            </div>
            <div class="col-sm justify-content-center d-flex mb-md-0 mb-2">
                <div class="social-media">
                    <p class="mb-0 d-flex">
                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
                    </p>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="pt-4 pb-5">
    <div class="container">
        <div class="row d-flex align-items-start align-items-center px-3 px-md-0">
            <div class="col-md-4 d-flex mb-2 mb-md-0">
                <a class="navbar-brand d-flex flex-column align-items-center" href="index.html">
                    <img src="{{ asset('frontend/images/USD/USD.png') }}" alt="Crane" style="width: auto; height: 60px;"> <!-- Replace with your image path -->
                    <span class="ml-2"><small>PT Universal Sinergi Dinamika</small></span>
                </a>
            </div>
            <div class="col-md-4 d-flex topper mb-md-0 mb-2 align-items-center">
                <div class="icon d-flex justify-content-center align-items-center">
                    <span class="fa fa-map"></span>
                </div>
                <div class="pr-md-4 pl-md-3 pl-3 text">
                    <p class="con"><span>Free Call</span> <span>+1 234 456 78910</span></p>
                    <p class="con">Call Us Now for Customer Support</p>
                </div>
            </div>
            <div class="col-md-4 d-flex topper mb-md-0 align-items-center">
                <div class="icon d-flex justify-content-center align-items-center">
                    <span class="fa fa-paper-plane"></span>
                </div>
                <div class="text pl-3 pl-md-3">
                    <p class="hr"><span>Our Location</span></p>
                    <p class="con">Location here...</p>
                </div>
            </div>
        </div>
    </div>
</div>


{{-- navigation --}}
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container d-flex align-items-center">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-bars"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a href="{{url('/')}}" class="nav-link">Home</a></li>
                <div class="navbar2">
                    <div class="dropdown2">
                      <button class="dropbtn">Product & Services 
                        <i class="fa fa-caret-down"></i>
                      </button>
                      <div class="dropdown-content">
                      <li>
                            <a href="#">Pumps</a>
                            <ul>
                                <li><a href="{{route('api.pump')}}">API 610 </a></li>
                                <li><a href="{{route('fire.pump')}}">Fire Pumps</a></li>
                                <li><a href="{{route('hori.pump')}}">Horizontal Centrifugal</a></li>
                                <li><a href="{{route('magnet.pump')}}">Magnetic Drive Seal-Less</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Water & Wastewater</a>
                            <ul>
                                <li><a href="{{route('aspirator.water')}}">Aire<sup>02</sup> Argos Batch Reactor</a></li>
                                <li><a href="{{route('argos.water')}}">Aire<sup>02</sup>Aspirator Aerator</a></li>
                                <li><a href="{{route('bio.water')}}">Aire<sup>02</sup>BIO FFILM</a></li>
                                <li><a href="{{route('mixer.water')}}">Aire<sup>02</sup>Mixer</a></li>
                                <li><a href="{{route('triton.water')}}">Aire<sup>02</sup>Triton Aerator Mixer</a></li>
                                <li><a href="{{route('halo.water')}}">HALO Aire02 Surface Aerot</a></li>
                                <li><a href="{{route('micro.water')}}">Microfloat System</a></li>
                                <li><a href="{{route('trioval.water')}}">Trioval Oxydation Ditch Aeration System</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Aguaculture</a>
                            <ul>
                                <li><a href="{{route('aqua.aire2')}}">Aire<sup>02</sup></a></li>
                                <li><a href="{{route('aqua.autopump')}}">Automatic Priming Pump</a></li>
                                <li><a href="{{route('d3.diatom')}}">D3 Diatom Enchancer</a></li>
                                <li><a href="{{route('diff.user')}}">Diffuser</a></li>
                                <li><a href="{{route('shrimp.shield')}}">ShrimShield & Pondtos</a></li>
                                <li><a href="{{route('sub.sible')}}">Submersible</a></li>
                            </ul>
                        </li>
                        <a href="#">Heat Exchanger</a>
                        <!-- <a href="#">Sjrp</a>
                        <a href="#">Flood Barriers</a>
                        <a href="#">Energy Conservation</a>
                        <a href="#">Solar Panel / Street Light System</a> -->
                      </div>
                    </div> 
                  </div>

                  <div class="navbar2">
                    <div class="dropdown2">
                      <button class="dropbtn">News 
                        <i class="fa fa-caret-down"></i>
                      </button>
                      <div class="dropdown-content">
                        <a href="{{route('publicnews.index')}}">News</a>
                        <a href="#">Article</a>
                      </div>
                    </div> 
                  </div>
                <li class="nav-item"><a href="{{route('project.index')}}" class="nav-link">Projects</a></li>
                <div class="navbar2">
                    <div class="dropdown2">
                      <button class="dropbtn">Transaction 
                        <i class="fa fa-caret-down"></i>
                      </button>
                      <div class="dropdown-content">
                        <a href="#">Purchase</a>
                        <a href="#">Rfq</a>
                      </div>
                    </div> 
                  </div>

                <li class="nav-item"><a href="{{route('contact.index')}}" class="nav-link">Contact Us</a></li>
            </ul>
        </div>
        
    </div>
</nav>
{{-- loading --}}
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
