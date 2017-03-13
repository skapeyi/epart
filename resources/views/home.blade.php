@extends('layouts.home')

@section('content')
    <header >
        <div class="container">
            <div class="row">
                <div class="col-sm-9 col-md-offset-2">
                    <div class="header-content" style="max-height: 150px;">
                        <div class="header-content-inner">
                            <h5 style="font-size: 14px;">Toro Development Network(ToroDev) together with SPIDER – The Swedish Program for ICT in Developing Regions at the Department of Computer & System Sciences (DSV) Stockholm University and other partners are implementing the “MML – Me & My Leader” eParticipation System that uses MobileSMS – Radio – Online/Internet technologies to promote citizens’ engagement with duty-bearers in Uganda and Kenya to improve prioritized public service delivery.</h5>
                            <a href="/register" class="btn btn-outline btn-xl page-scroll">Register Now for Free!</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </header>

    <section id="download" class="download bg-primary text-center" style="padding-top: 10px; padding-bottom:10px;">
        <div class="container">
            <div class="row" >
                <div class="col-md-4">
                    <h3 class="section-heading">e - Information</h3>
                    <p> This module disseminates all formats of information to stakeholders Mobile SMS, e-mails, images, downloads, video, voice and through social media platforms.</p>
                    <a href="/information" class="btn btn-outline btn-xl page-scroll">Get information now!</a>

                </div>

                <div class="col-md-4">
                    <h3 class="section-heading">e-Discussion</h3>
                    <p>This online module is designed to supplement the offline discussions and knowledge sharing and has features that support real-time online discussions through SMS, Social Media, over the web.</p>
                    <a href="/discussions" class="btn btn-outline btn-xl page-scroll">Get involved!</a>


                </div>

                <div class="col-md-4">
                    <h3 class="section-heading">e - Decision Making</h3>
                    <p> This online module is designed to supplement offline decision making process through providing strategic priority decision options drawn from e-discussion and e-information modules of the MML eParticipation System.</p>
                    <a href="/login" class="btn btn-outline btn-xl page-scroll">Let's Get Started!</a>

                </div>

            </div>
        </div>
    </section>

    {{--<section id="contact" class="contact bg-primary" style="background: #943B7D">--}}
        {{--<div class="container">--}}
            {{--<ul class="list-inline list-social">--}}
                {{--<li class="social-twitter">--}}
                    {{--<a href="#"><i class="fa fa-twitter"></i></a>--}}
                {{--</li>--}}
                {{--<li class="social-facebook">--}}
                    {{--<a href="#"><i class="fa fa-facebook"></i></a>--}}
                {{--</li>--}}
                {{--<li class="social-google-plus">--}}
                    {{--<a href="#"><i class="fa fa-google-plus"></i></a>--}}
                {{--</li>--}}
            {{--</ul>--}}
        {{--</div>--}}
    {{--</section>--}}

    <section  id="partners" style="padding: 0px;">
        <div class="container">
            <h4>Our Partners</h4>
            <div class="col-md-6">
                <img src="/img/spider.png" class="img-responsive">
            </div>
            <div class="col-md-6">
                <img src="/img/ned.png" class="img-responsive">
            </div>
        </div>
    </section>



@endsection
