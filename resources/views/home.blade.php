@extends('layouts.home')

@section('content')
    <header>
        <div class="container">
            <div class="row">
                <div class="col-sm-9 col-md-offset-2">
                    <div class="header-content">
                        <div class="header-content-inner">
                            <h3>Toro Development together with SPIDER – The Swedish Program for ICT in Developing
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
                <div class="col-md-8">
                    <h2 class="section-heading">e - Information</h2>
                    <p>This module allows for the dissemination of all all formats of information e.g. Short message
                        services (SMS), e-mails, images, etc and has self-triggered features that can send alter and
                        remainders messages to interested parties.</p>

                </div>
                <div class="col-md-4" style="margin-top: 100px;">
                    <a href="/information" class="btn btn-outline btn-xl page-scroll">Get information now!</a>
                </div>
            </div>
        </div>
    </section>


    <section id="features" class="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-offset-3 text-center">
                    <h2 class="section-heading">e-Discussion</h2>
                    <p>The module should be designed to supplement face to face discussions and have features that
                        support real-time online and offline discussions.</p>
                    <a href="/discussion" class="btn btn-outline btn-xl page-scroll">Get involved!</a>


                </div>
            </div>

            <div class="row">


            </div>


        </div>
    </section>

    <section class="cta">
        <div class="cta-content">
            <div class="container">
                <h2>e-Decision making.</h2>
                <div class="row">
                    <div class="col-md-5">
                        <p style="text-align: center;color: #fff; ">The module should be designed to supplement face to
                            face discussions and have features that support real-time online and offline
                            discussions.</p>

                    </div>

                </div>
                <a href="/login" class="btn btn-outline btn-xl page-scroll">Let's Get Started!</a>
            </div>
        </div>
        <div class="overlay"></div>
    </section>

    <section id="contact" class="contact bg-primary">
        <div class="container">
            <h2>We love new friends!</h2>
            <ul class="list-inline list-social">
                <li class="social-twitter">
                    <a href="#"><i class="fa fa-twitter"></i></a>
                </li>
                <li class="social-facebook">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                </li>
                <li class="social-google-plus">
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                </li>
            </ul>
        </div>
    </section>



@endsection
