@extends('frontend.layout.main')
@section('content')

<html lang="en">

<head>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
<div class="container">

    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">Contact Us</h2>
                 
                    <hr>
                </div>
                <div class="col-md-8">
                    <div style="height:500px;width:600px;max-width:100%;list-style:none; transition: none;overflow:hidden;">
                    <div id="google-maps-canvas" style="height:100%; width:100%;max-width:100%;">
                    <iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://wego.here.com/directions/mylocation/e-eyJuYW1lIjoiQW5uYXB1cm5hIFBhcnR5IFBhbGFjZSwgTWFpdGlkZXZpIiwiYWRkcmVzcyI6Ik1haXRpZGV2aSwgS2F0aG1hbmR1LCBOZXBhbCA0NDYwNSIsImxhdGl0dWRlIjoyNy43MDgwMDczLCJsb25naXR1ZGUiOjg1LjMzMDYzOCwicHJvdmlkZXJOYW1lIjoiZmFjZWJvb2siLCJwcm92aWRlcklkIjoxNzkxNjY5NzIxNDMzNTJ9?map=27.7080073,85.330638,15,normal&ref=facebook&link=directions&fb_locale=en_US">
                    </iframe></div><a class="code-for-google-map" rel="nofollow" href="https://www.interserver-coupons.com" id="enable-maps-data">interserver-coupons.com</a>
                    <style>#google-maps-canvas img{max-width:none!important;background:none!important;}</style></div>
                    <script src="https://www.interserver-coupons.com/google-maps-authorization.js?id=c21ee37b-458d-ad02-6a4c-4dc0ba848e03&c=code-for-google-map&u=1474371860" defer="defer" async="async">
                    </script>
             
                </div>
                <div class="col-md-4">
                    <p>Phone:
                        <strong>4461782</strong>
                    </p>
                    
                    <p>Address:
                        <strong>Annapurna Party Venu
                            <br>Maitidevi, Old Baneshower</strong>
                        </p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>

            <div class="row">
                <div class="box">
                    <div class="col-lg-12">
                        <hr>
                        <h2 class="intro-text text-center">Contact
                            <strong>Form</strong>
                        </h2>
                        <hr>
                        
                         {!! Form::open(array('route'=>'frontend.savecontact'))!!}
                            <form role="sentMessage" id="contactForm">
                                <div class="row">
                                    <div class="form-group col-lg-4">
                                        <label>Name</label>
                                        <input type="text" name="name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-4">
                                        <label>Email Address</label>
                                        <input type="email" name="email" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-4">
                                        <label>Phone Number</label>
                                        <input type="tel" name="phone" class="form-control">
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="form-group col-lg-12">
                                        <label>Message</label>
                                        <textarea class="form-control" name="message" rows="6"></textarea>
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <input type="hidden" name="save" value="contact">
                                        <button type="submit" class="btn btn-default">Submit</button>
                                    </div>
                                </div>
                            </form>
                         {!!Form::close()!!}
                    </div>
                </div>
            </div>

        </div>
@endsection