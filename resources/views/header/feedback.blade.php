@extends('header.layout.main')
@section('content')
 <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Feedback</h2>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-lg-offset-2">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    {!! Form::open(array('route'=>'header.savefeedback'))!!}
                    <form name="sentMessage" id="contactForm" novalidate>
                        
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Message</label>
                                <textarea rows="5" class="form-control" placeholder="Message" id="message" 
                                required data-validation-required-message="Please enter a message." name="message"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>

                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Image</label>
                                <input type="file"  id="image" name="image">
                            </div>
                        </div>
                        <br>


                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg">Send</button>
                            </div>
                        </div>
                    {!!Form::close()!!}
                </div>
            </div>
        </div>
    </section>
@endsection