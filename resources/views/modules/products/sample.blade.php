@extends('layouts.smes')
@section('products')
    <div class="slider">
        <ul class="slides">
            <li>
                <img src="/img/sme-1.jpg"/>
            </li>
            <li>
                <img src="/img/sme-2.jpg"/>
            </li>
            <li>
                <img src="/img/sme-3.jpg"/>
            </li>
        </ul>
    </div>
<!--Shelf A -->
<div class="shelf-name" id="top-shelf">
    <h5>Laptop Shelf</h5>
</div>

<div class="shelf">
    <div class="row">
        <div class="col l2 m2 s2"></div>

        <div class="col l8 m8 s8">

            <div class="col l3 m3 s3">
                <div class="card">
                    <div class="card-image">
                        <img src="img/laptop-1.jpeg">
                        {{--<a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">aspect_ratio</i></a>--}}
                    </div>
                    <div class="card-content">
                        <a><span class="card-title">Apple iMac Pro</span> </a>
                        <span class="card-title"> <h5><sup>GHS</sup> 12,200. <span class="amt-dec">55</span></h5></span>
                        {{--<p>Delali Computers</p>--}}
                    </div>
                </div>
            </div>
            <div class="col l3 m3 s3">
                <div class="card">
                    <div class="card-image">
                        <img src="img/laptop-2.jpeg">
                        {{--<a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">aspect_ratio</i></a>--}}
                    </div>
                    <div class="card-content">
                        <a><span class="card-title">HP Ultrabook i7</span> </a>
                        <span class="card-title"> <h5><sup>GHS</sup> 3,000. <span class="amt-dec">00</span></h5></span>
                        {{--<p>Delali Computers</p>--}}
                    </div>
                </div>
            </div>
            <div class="col l3 m3 s3">
                <div class="card">
                    <div class="card-image">
                        <img src="img/laptop-3.jpeg">
                        {{--<a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">aspect_ratio</i></a>--}}
                    </div>
                    <div class="card-content">
                        <a><span class="card-title">Macbook Pro i5</span> </a>
                        <span class="card-title"> <h5><sup>GHS</sup> 15,000. <span class="amt-dec">00</span></h5></span>
                        {{--<p>Delali Computers</p>--}}
                    </div>
                </div>
            </div>
            <div class="col l3 m3 s3">
                <div class="card">
                    <div class="card-image">
                        <img src="img/laptop-4.jpeg">
                        {{--<a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">aspect_ratio</i></a>--}}
                    </div>
                    <div class="card-content">
                        <a><span class="card-title">Blue HP Netbook</span> </a>
                        <span class="card-title"> <h5><sup>GHS</sup> 2,100. <span class="amt-dec">00</span></h5></span>
                        {{--<p>Delali Computers</p>--}}
                    </div>
                </div>
            </div>
        </div>

        <div class="col l2 m2 s2">
            <a class="btn" style="background-color: darkred">
                <b> manage</b>
                <i class="large material-icons" style="display: inline !important;; vertical-align: middle !important;">mode_edit</i>
            </a>
        </div>
        <br>

    </div>
    <!--<div class="load-btn">
        <a class="waves-effect waves-light btn-large"><i class="material-icons right">arrow_forward</i>See more</a>
    </div> --> <br>
</div>

<div class="divider"></div> <br>

</div>
<!--Shelf B

<div class="shelf-name">
    <h5>Motherboard Shelf</h5>
</div>

-->
<div class="shelf-name">
    <h5>Motherboard Shelf</h5>
</div>
<div class="shelf">
    <div class="row">
        <div class="col l2 m2 s2"></div>

        <div class="col l8 m8 s8">

            <div class="col l3 m3 s3">
                <div class="card">
                    <div class="card-image">
                        <img src="img/mother-1.jpeg">
                    </div>
                    <div class="card-content">
                        <a><span class="card-title">ATX 380 Motherboard</span> </a>
                        <span class="card-title"> <h5><sup>GHS</sup> 1,200. <span class="amt-dec">55</span></h5></span>
                        {{--<p>Delali Computers</p>--}}
                    </div>




                </div>
            </div>
            <div class="col l3 m3 s3">
                <div class="card">
                    <div class="card-image">
                        <img src="img/mother-2.jpg">
                    </div>
                    <div class="card-content">
                        <a><span class="card-title">Pico BTX Motherboard</span> </a>
                        <span class="card-title"> <h5><sup>GHS</sup> 600. <span class="amt-dec">00</span></h5></span>
                        {{--<p>Delali Computers</p>--}}
                    </div>
                </div>
            </div>
            <div class="col l3 m3 s3">
                <div class="card">
                    <div class="card-image">
                        <img src="img/mother-3.jpeg">
                    </div>
                    <div class="card-content">
                        <a><span class="card-title">Mini ITX 3.3 Motherboard</span> </a>
                        <span class="card-title"> <h5><sup>GHS</sup> 950. <span class="amt-dec">33</span></h5></span>
                        {{--<p>Delali Computers</p>--}}
                    </div>
                </div>
            </div>
            <div class="col l3 m3 s3">
                <div class="card">
                    <div class="card-image">
                        <img src="img/mother-4.jpeg">
                    </div>
                    <div class="card-content">
                        <a><span class="card-title">LPX 730G Motherboard</span> </a>
                        <span class="card-title"> <h5><sup>GHS</sup> 1,100. <span class="amt-dec">00</span></h5></span>
                        {{--<p>Delali Computers</p>--}}
                    </div>
                </div>
            </div>
        </div>

        <div class="col l2 m2 s2"></div>
        <br>

    </div>
    <div class="load-btn">
        <a class="waves-effect waves-light btn-large"><i class="material-icons right">arrow_forward</i>See more</a>
    </div> <br>

    <br>
</div>

@endsection