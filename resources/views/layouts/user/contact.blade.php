@extends('layouts.user.layout')

@section('title', 'Trang contact')

@section('css')
    <link id="callCss" rel="stylesheet" href="{{ asset('themes/bootshop/bootstrap.min.css') }}" media="screen" />
    <link href="{{ asset('themes/css/base.css') }}" rel="stylesheet" media="screen" />
    <!-- Bootstrap style responsive -->
    <link href="{{ asset('themes/css/bootstrap-responsive.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('themes/css/font-awesome.css') }}" rel="stylesheet" type="text/css">
    <!-- Google-code-prettify -->
    <link href="{{ asset('themes/js/google-code-prettify/prettify.css') }}" rel="stylesheet" />
    <!-- fav and touch icons -->
    <link rel="shortcut icon" href="{{ asset('themes/images/ico/favicon.ico') }}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
        href="{{ asset('themes/images/ico/apple-touch-icon-144-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
        href="{{ asset('themes/images/ico/apple-touch-icon-114-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
        href="{{ asset('themes/images/ico/apple-touch-icon-72-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('themes/images/ico/apple-touch-icon-57-precomposed.png') }}">
    <style type="text/css" id="enject"></style>
@endsection

@section('menu')
    <div id="header">
        <div class="container">
            <div id="logoArea" class="navbar">
                <a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-inner">
                    <a class="brand" href="index.html"><img src="themes/images/logo.png" alt="Bootsshop" /></a>
                    <form class="form-inline navbar-search" method="post" action="products.html">
                        <input id="srchFld" class="srchTxt" type="text" />
                        <select class="srchTxt">
                            <option>All</option>
                            <option>CLOTHES </option>
                            <option>FOOD AND BEVERAGES </option>
                            <option>HEALTH & BEAUTY </option>
                            <option>SPORTS & LEISURE </option>
                            <option>BOOKS & ENTERTAINMENTS </option>
                        </select>
                        <button type="submit" id="submitButton" class="btn btn-primary">Go</button>
                    </form>
                    <ul id="topMenu" class="nav pull-right">
                        <li class=""><a href="/special">Specials Offer</a></li>
                        <li class=""><a href="/delivery">Delivery</a></li>
                        <li class=""><a href="/contact">Contact</a></li>
                        <li class="">
                            <a href="#login" role="button" data-toggle="modal" style="padding-right:0"><span
                                    class="btn btn-large btn-success">Login</span></a>
                            <div id="login" class="modal hide fade in" tabindex="-1" role="dialog"
                                aria-labelledby="login" aria-hidden="false">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    <h3>Login Block</h3>
                                </div>
                                <div class="modal-body">
                                    <form class="form-horizontal loginFrm">
                                        <div class="control-group">
                                            <input type="text" id="inputEmail" placeholder="Email">
                                        </div>
                                        <div class="control-group">
                                            <input type="password" id="inputPassword" placeholder="Password">
                                        </div>
                                        <div class="control-group">
                                            <label class="checkbox">
                                                <input type="checkbox"> Remember me
                                            </label>
                                        </div>
                                    </form>
                                    <button type="submit" class="btn btn-success">Sign in</button>
                                    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('contact')
<div id="mainBody">
    <div class="container">
        <hr class="soften">
        <h1>Visit us</h1>
        <hr class="soften"/>	
        <div class="row">
            <div class="span4">
            <h4>Contact Details</h4>
            <p>	18 Fresno,<br/> CA 93727, USA
                <br/><br/>
                info@bootsshop.com<br/>
                ﻿Tel 123-456-6780<br/>
                Fax 123-456-5679<br/>
                web:bootsshop.com
            </p>		
            </div>
                
            <div class="span4">
            <h4>Opening Hours</h4>
                <h5> Monday - Friday</h5>
                <p>09:00am - 09:00pm<br/><br/></p>
                <h5>Saturday</h5>
                <p>09:00am - 07:00pm<br/><br/></p>
                <h5>Sunday</h5>
                <p>12:30pm - 06:00pm<br/><br/></p>
            </div>
            <div class="span4">
            <h4>Email Us</h4>
            <form class="form-horizontal">
            <fieldset>
              <div class="control-group">
               
                  <input type="text" placeholder="name" class="input-xlarge"/>
               
              </div>
               <div class="control-group">
               
                  <input type="text" placeholder="email" class="input-xlarge"/>
               
              </div>
               <div class="control-group">
               
                  <input type="text" placeholder="subject" class="input-xlarge"/>
              
              </div>
              <div class="control-group">
                  <textarea rows="3" id="textarea" class="input-xlarge"></textarea>
               
              </div>
    
                <button class="btn btn-large" type="submit">Send Messages</button>
    
            </fieldset>
          </form>
            </div>
        </div>
        <div class="row">
        <div class="span12">
        <iframe style="width:100%; height:300; border: 0px" scrolling="no" src="https://maps.google.co.uk/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=18+California,+Fresno,+CA,+United+States&amp;aq=0&amp;oq=18+California+united+state&amp;sll=39.9589,-120.955336&amp;sspn=0.007114,0.016512&amp;ie=UTF8&amp;hq=&amp;hnear=18,+Fresno,+California+93727,+United+States&amp;t=m&amp;ll=36.732762,-119.695787&amp;spn=0.017197,0.100336&amp;z=14&amp;output=embed"></iframe><br />
        <small><a href="https://maps.google.co.uk/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=18+California,+Fresno,+CA,+United+States&amp;aq=0&amp;oq=18+California+united+state&amp;sll=39.9589,-120.955336&amp;sspn=0.007114,0.016512&amp;ie=UTF8&amp;hq=&amp;hnear=18,+Fresno,+California+93727,+United+States&amp;t=m&amp;ll=36.732762,-119.695787&amp;spn=0.017197,0.100336&amp;z=14" style="color:#0000FF;text-align:left">View Larger Map</a></small>
        </div>
        </div>
    </div>
    </div>
@endsection



@section('footer')
    <div id="footerSection">
        <div class="container">
            <div class="row">
                <div class="span3">
                    <h5>ACCOUNT</h5>
                    <a href="login.html">YOUR ACCOUNT</a>
                    <a href="login.html">PERSONAL INFORMATION</a>
                    <a href="login.html">ADDRESSES</a>
                    <a href="login.html">DISCOUNT</a>
                    <a href="login.html">ORDER HISTORY</a>
                </div>
                <div class="span3">
                    <h5>INFORMATION</h5>
                    <a href="contact.html">CONTACT</a>
                    <a href="register.html">REGISTRATION</a>
                    <a href="legal_notice.html">LEGAL NOTICE</a>
                    <a href="tac.html">TERMS AND CONDITIONS</a>
                    <a href="faq.html">FAQ</a>
                </div>
                <div class="span3">
                    <h5>OUR OFFERS</h5>
                    <a href="#">NEW PRODUCTS</a>
                    <a href="#">TOP SELLERS</a>
                    <a href="special_offer.html">SPECIAL OFFERS</a>
                    <a href="#">MANUFACTURERS</a>
                    <a href="#">SUPPLIERS</a>
                </div>
                <div id="socialMedia" class="span3 pull-right">
                    <h5>SOCIAL MEDIA </h5>
                    <a href="#"><img width="60" height="60" src="themes/images/facebook.png"
                            title="facebook" alt="facebook" /></a>
                    <a href="#"><img width="60" height="60" src="themes/images/twitter.png"
                            title="twitter" alt="twitter" /></a>
                    <a href="#"><img width="60" height="60" src="themes/images/youtube.png"
                            title="youtube" alt="youtube" /></a>
                </div>
            </div>
            <p class="pull-right">&copy; Bootshop</p>
        </div><!-- Container End -->
    </div>
@endsection

@section('js')
    <script src="themes/js/jquery.js" type="text/javascript"></script>
    <script src="themes/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="themes/js/google-code-prettify/prettify.js"></script>

    <script src="themes/js/bootshop.js"></script>
    <script src="themes/js/jquery.lightbox-0.5.js"></script>
@endsection

