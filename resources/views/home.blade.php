@extends('layouts.home')

@section('content')
    <header >
        <div class="container">
            <div class="row">
                <div class="col-sm-9 col-md-offset-2">
                    <div class="header-content" style="max-height: 320px;">
                        <div class="header-content-inner">
                            <h3>Toro Development Network(ToroDev) together with SPIDER – The Swedish Program for ICT in Developing
                                Regions at the Department of Computer & System Sciences (DSV) Stockholm University and
                                other partners to implement the proposed “MML – Me & My Leader” eParticipation System
                                that uses MobileSMS – Radio – Online/Internet technologies to promote citizens’
                                engagement with duty-bearers in Uganda and Kenya to improve prioritized public service
                                delivery.</h3>
                            <a href="/register" class="btn btn-outline btn-xl page-scroll">Register Now for Free!</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </header>

    <section id="download" class="download bg-primary text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h3 class="section-heading">e - Information</h3>
                    <p>This allows for the dissemination of all all formats of information e.g. SMS, e-mails, images, a self-triggered features that can send remainders to interested parties.</p>
                    <a href="/information" class="btn btn-outline btn-xl page-scroll">Get information now!</a>

                </div>

                <div class="col-md-4">
                    <h3 class="section-heading">e-Discussion</h3>
                    <p>The module should be designed to supplement face to face discussions and have features that
                        support real-time online and offline discussions.</p>
                    <a href="/discussions" class="btn btn-outline btn-xl page-scroll">Get involved!</a>


                </div>

                <div class="col-md-4">
                    <h3 class="section-heading">e - Decision Making</h3>
                    <p>The module should be designed to supplement face to
                        face discussions and have features that support real-time online and offline
                        discussions.</p>
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
            <h2>Our Partners</h2>
            <div class="col-md-6">
                <img src="/img/spider.png" class="img-responsive">
            </div>
            <div class="col-md-6">
                <img src="/img/ned.png" class="img-responsive">
            </div>
        </div>
    </section>



@endsection
