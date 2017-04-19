@extends('layouts.home')

@section('content')
    <header >
        <div class="container">
            <div class="row">
                <div class="col-sm-9 col-md-offset-2">
                    <div class="header-content" style="max-height: 150px;">
                        <div class="header-content-inner">
                            <h5 style="font-size: 14px;">The “MML – Me & My Leader” eParticipation System that uses MobileSMS – Radio – Online/Internet technologies to promote citizens’ engagement with duty-bearers in Uganda and Kenya to improve prioritized public service delivery.</h5>
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
                    <p>This provides information to stakeholders through Mobile SMS, e-mails, images, downloads, video, voice and through social media platforms.</p>
                    <a href="/information" class="btn btn-outline btn-xl page-scroll">Get information now!</a>

                </div>

                <div class="col-md-4">
                    <h3 class="section-heading">e-Discussion</h3>
                    <p>This supplements the offline discussions and knowledge sharing and has features that support real-time online discussions through SMS, Social Media, over the web.</p>
                    <a href="/discussions" class="btn btn-outline btn-xl page-scroll">Get involved!</a>


                </div>

                <div class="col-md-4">
                    <h3 class="section-heading">e - Decision Making</h3>
                    <p> This supplements the decision making process through providing strategic priority decision options drawn from e-discussion and e-information modules of the MML eParticipation System.</p>
                    <a href="/login" class="btn btn-outline btn-xl page-scroll"> Decide Now !</a>

                </div>

            </div>
        </div>
    </section>



    <section  id="partners" style="padding: 0px;">
        <div class="container">
            <h4>Our Partners</h4>
            <div class="col-md-3">
              <a href="http://spidercenter.org" target="_blank">
                <img src="/img/spider.png" class="img-responsive">
              </a>
            </div>
            <div class="col-md-3">
              <a href="http://www.ned.org" target="_blank">
                <img src="/img/ned.png" class="img-responsive">
              </a>
            </div>
            <div class="col-md-3">
              <a href="http://ict4democracy.org" target="_blank">
                <img src="/img/ict_4_dem.jpg" class="img-responsive">
              </a>
            </div>
            <div class="col-md-3">
              <a href="http://ict4democracy.org" target="_blank">
                <img src="/img/stockholm.png" class="img-responsive">
              </a>
            </div>

        </div>
    </section>



@endsection
