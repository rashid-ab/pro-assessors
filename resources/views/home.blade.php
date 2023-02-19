@extends('layouts.app')
@section('content')
        {{-- Banner Section --}}
        {{-- <div class="banner" style="height: 500px;">
                <div class="banner-childs">
                        <p>Streamline Your Reporting<br>Process with Pro Assessors</p>
                </div>
                <div class="banner-childs">
                        <img src="assets/smallicons.png" style="width: 35%;" alt="">
                        <img src="assets/hand.png" style="width: 60%;" alt="">
                </div>
        </div> --}}
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="banner" style="height: 500px;">
                <div class="banner-childs">
                        <p>Streamline Your Reporting<br>Process with Pro Assessors</p>
                </div>
                <div class="banner-childs">
                        <img src="assets/smallicons.png" style="width: 35%;" alt="">
                        <img src="assets/hand.png" style="width: 60%;" alt="">
                </div>
        </div>
              </div>
              <div class="carousel-item">
                <div class="banner" style="height: 500px;">
                <div class="banner-childs">
                        <p>Streamline Your Reporting<br>Process with Pro Assessors</p>
                </div>
                <div class="banner-childs">
                        <img src="assets/smallicons.png" style="width: 35%;" alt="">
                        <img src="assets/hand.png" style="width: 60%;" alt="">
                </div>
        </div>
              </div>
              <div class="carousel-item">
                <div class="banner" style="height: 500px;">
                <div class="banner-childs">
                        <p>Streamline Your Reporting<br>Process with Pro Assessors</p>
                </div>
                <div class="banner-childs">
                        <img src="assets/smallicons.png" style="width: 35%;" alt="">
                        <img src="assets/hand.png" style="width: 60%;" alt="">
                </div>
        </div>
              </div>
            </div>
          </div>
        {{-- Value Section --}}
        <div class="values" style="height: 400px;">
                <div class="values-childs" style="flex: 4">
                        <img src="assets/values.png" style="width: 95%;height:95%;margin-top:10px" alt="">
                </div>
                <div class="values-childs" style="flex: 3;display: flex;justify-content: center;width: 10%;">
                        <div class="text-buttons">
                                <p>Our Value</p>
                                <div class="carouselBtn">
                                            <div class="swiper-button-prev swiper-navBtn"><a class="btn btn-primary" ><img src="assets/left.png" alt=""></a></div>
                                            <div class="swiper-button-next swiper-navBtn"><a class="btn btn-primary"><img src="assets/right.png" alt=""></a></div>
                                </div>
                                
                        </div>
                        <div class="slide-container swiper" style="margin-left: -200px;">
                            <div class="slide-content">
                                <div class="card-wrapper swiper-wrapper">
                                    <div class="card swiper-slide" style="">
                                        <div class="thumb-wrapper" style="background-color: #515C84;height: 150px;">
                                            <img src="assets/doctor.png" class="" width="30px" height="30px" alt="">
                                            <p style="font-size: 1rem !important;margin: 15px 0px;">Secure Transmission</p>
                                            <p style="font-size: .6rem !important;margin: 15px 0px;font-weight: 600">Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum </p>
                                        </div>
                                    </div>
                                    <div class="card swiper-slide">
                                        <div class="thumb-wrapper" style="height: 150px;">
                                            <img src="assets/heart.png" class="" width="30px" height="30px" alt="">
                                            <p style="font-size: 1rem !important;margin: 15px 0px;color: #20215E">Seamless Operation</p>
                                            <p style="font-size: .6rem !important;margin: 15px 0px;font-weight: 600;color: #20215E">Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum </p>
                                        </div>
                                    </div>
                                    <div class="card swiper-slide">
                                        <div class="thumb-wrapper" style="height: 150px;">
                                            <img src="assets/dentist.png" class="" width="30px" height="30px" alt="">
                                            <p style="font-size: 1rem !important;margin: 15px 0px;color: #20215E">Seamless Operation</p>
                                            <p style="font-size: .6rem !important;margin: 15px 0px;font-weight: 600;color: #20215E">Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum </p>
                                        </div>
                                    </div>
                                    
                                    <div class="card swiper-slide">
                                        <div class="thumb-wrapper" style="height: 150px;">
                                            <img src="assets/heart.png" class="" width="30px" height="30px" alt="">
                                            <p style="font-size: 1rem !important;margin: 15px 0px;color: #20215E">Seamless Operation</p>
                                            <p style="font-size: .6rem !important;margin: 15px 0px;font-weight: 600;color: #20215E">Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum </p>
                                        </div>
                                    </div>
                                    <div class="card swiper-slide">
                                        <div class="thumb-wrapper" style="height: 150px;">
                                            <img src="assets/dentist.png" class="" width="30px" height="30px" alt="">
                                            <p style="font-size: 1rem !important;margin: 15px 0px;color: #20215E">Seamless Operation</p>
                                            <p style="font-size: .6rem !important;margin: 15px 0px;font-weight: 600;color: #20215E">Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum </p>
                                        </div>
                                    </div>
                                    
                                    <div class="card swiper-slide">
                                        <div class="thumb-wrapper" style="height: 150px;">
                                            <img src="assets/heart.png" class="" width="30px" height="30px" alt="">
                                            <p style="font-size: 1rem !important;margin: 15px 0px;color: #20215E">Seamless Operation</p>
                                            <p style="font-size: .6rem !important;margin: 15px 0px;font-weight: 600;color: #20215E">Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum </p>
                                        </div>
                                    </div>
                                    <div class="card swiper-slide">
                                        <div class="thumb-wrapper" style="height: 150px;">
                                            <img src="assets/dentist.png" class="" width="30px" height="30px" alt="">
                                            <p style="font-size: 1rem !important;margin: 15px 0px;color: #20215E">Seamless Operation</p>
                                            <p style="font-size: .6rem !important;margin: 15px 0px;font-weight: 600;color: #20215E">Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum </p>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                
                            {{-- <div class="swiper-button-next swiper-navBtn"></div>
                            <div class="swiper-button-prev swiper-navBtn"></div> --}}
                        </div>
                </div>
            </div>
        {{-- About Section --}}

        <div class="about" style="height: 500px;">
            <div class="about-childs" style="flex: 1.3;background-color: #F1EFF2;padding: 75px;">
                    <p style="line-height: 1em;">About<br>
                        Pro-Assessors</p>
                        <div style="width: 80%;margin: 20px 0px;">
                            <p style="font-size: .7rem;color: #76777B">Pro Assessors is proud to be the first seamless, web-based platform of its kind that simplifies and streamlines the process of reporting by connecting clients with legal services and medical specialties of their choice to obtain professional opinions, literally at a glance.
                                <br><br>
                                This service is the first of its kind enabling users to interact with providers to request medical assessments and obtain med-legal reports in an efficient and effective manner by employing faster and simpler working methods.
                                Book the required assessment and obtain a......READ MORE
                            </p>
                        </div>
            </div>
            <div class="about-childs about-second-child" style="flex: 1;display: flex;">
                <div style="padding: 0px 32px;flex:1;">
                    <p style="font-size: 1rem;margin-top: 80px;">
                        This service is the first of its kind enabling users to interact with providers to request medical assessments and obtain med-legal reports
                    </p>
                </div>
                <div style="flex:2;">
                    <img src="assets/about.png" alt="">
                </div>
                {{--  --}}
            </div>
        </div>
        
        {{-- Contact Section --}}

        <div class="contact" style="height: 500px;background-color: #20215E">
            <div class="contact-childs" style="flex: 1;">
                    <p>Looking for an expert?<br>Make a Request for an Assessment
                    </p>
                        
            </div>
            <div class="contact-childs contact-second-child" style="flex: 1.5;display: flex;">
                <div style="background-color: #FFFFFF;height: 400px;width: 80%;border-radius:10px;">
                    <div class="row">
                        <div class="col-xs-12 ">
                            <form role="form" style="padding: 30px">
                                
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label for="first_name">First Name</label>
                                            <input type="text" name="first_name" id="first_name" class="form-control input-lg" placeholder="write your first name here" tabindex="1">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label for="last_name">Last Name</label>
                                            <input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="write your last name here" tabindex="2">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" name="email" id="email" class="form-control input-lg" placeholder="write your email here" tabindex="5">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label for="subject">Subject</label>
                                            <input type="text" name="subject" id="subject" class="form-control input-lg" placeholder="write your subject here" tabindex="6">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12" style="width:100%">
                                        <div class="form-group" style="width:100%">
                                            <label for="address">Address Issue</label>
                                            <input type="text" name="address" id="address" class="form-control input-lg" placeholder="what can we help ypu with?" tabindex="6">
                                        </div>    
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-md-6"><input type="submit" value="Submit" class="btn btn-primary btn-block btn-lg" style="background-color: #20215E !important;border-radius: 50px;border: none !important" tabindex="7"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
@endsection