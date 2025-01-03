@extends('layouts.user.layout')

@section('title', 'Trang sản phẩm')

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


@section('products')
<div id="mainBody">
    <div class="container">
        <div class="row">
            <div id="sidebar" class="span3">
                <div class="well well-small"><a id="myCart" href="product_summary.html"><img
                            src="themes/images/ico-cart.png" alt="cart">3 Items in your cart <span
                            class="badge badge-warning pull-right">$155.00</span></a></div>
                <ul id="sideManu" class="nav nav-tabs nav-stacked">
                    <li class="subMenu open"><a> ELECTRONICS [230]</a>
                        <ul>
                            <li><a class="active" href="products.html"><i class="icon-chevron-right"></i>Cameras
                                    (100) </a></li>
                            <li><a href="products.html"><i class="icon-chevron-right"></i>Computers, Tablets &
                                    laptop (30)</a></li>
                            <li><a href="products.html"><i class="icon-chevron-right"></i>Mobile Phone (80)</a>
                            </li>
                            <li><a href="products.html"><i class="icon-chevron-right"></i>Sound & Vision (15)</a>
                            </li>
                        </ul>
                    </li>
                    <li class="subMenu"><a> CLOTHES [840] </a>
                        <ul style="display:none">
                            <li><a href="products.html"><i class="icon-chevron-right"></i>Women's Clothing
                                    (45)</a></li>
                            <li><a href="products.html"><i class="icon-chevron-right"></i>Women's Shoes (8)</a>
                            </li>
                            <li><a href="products.html"><i class="icon-chevron-right"></i>Women's Hand Bags
                                    (5)</a></li>
                            <li><a href="products.html"><i class="icon-chevron-right"></i>Men's Clothings (45)</a>
                            </li>
                            <li><a href="products.html"><i class="icon-chevron-right"></i>Men's Shoes (6)</a></li>
                            <li><a href="products.html"><i class="icon-chevron-right"></i>Kids Clothing (5)</a>
                            </li>
                            <li><a href="products.html"><i class="icon-chevron-right"></i>Kids Shoes (3)</a></li>
                        </ul>
                    </li>
                    <li class="subMenu"><a>FOOD AND BEVERAGES [1000]</a>
                        <ul style="display:none">
                            <li><a href="products.html"><i class="icon-chevron-right"></i>Angoves (35)</a></li>
                            <li><a href="products.html"><i class="icon-chevron-right"></i>Bouchard Aine & Fils
                                    (8)</a></li>
                            <li><a href="products.html"><i class="icon-chevron-right"></i>French Rabbit (5)</a>
                            </li>
                            <li><a href="products.html"><i class="icon-chevron-right"></i>Louis Bernard (45)</a>
                            </li>
                            <li><a href="products.html"><i class="icon-chevron-right"></i>BIB Wine (Bag in Box)
                                    (8)</a></li>
                            <li><a href="products.html"><i class="icon-chevron-right"></i>Other Liquors & Wine
                                    (5)</a></li>
                            <li><a href="products.html"><i class="icon-chevron-right"></i>Garden (3)</a></li>
                            <li><a href="products.html"><i class="icon-chevron-right"></i>Khao Shong (11)</a></li>
                        </ul>
                    </li>
                    <li><a href="products.html">HEALTH & BEAUTY [18]</a></li>
                    <li><a href="products.html">SPORTS & LEISURE [58]</a></li>
                    <li><a href="products.html">BOOKS & ENTERTAINMENTS [14]</a></li>
                </ul>
                <br />
                <div class="thumbnail">
                    <img src="themes/images/products/panasonic.jpg" alt="Bootshop panasonoc New camera" />
                    <div class="caption">
                        <h5>Panasonic</h5>
                        <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i
                                    class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i
                                    class="icon-shopping-cart"></i></a> <a class="btn btn-primary"
                                href="#">$222.00</a></h4>
                    </div>
                </div><br />
                <div class="thumbnail">
                    <img src="themes/images/products/kindle.png" title="Bootshop New Kindel" alt="Bootshop Kindel">
                    <div class="caption">
                        <h5>Kindle</h5>
                        <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i
                                    class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i
                                    class="icon-shopping-cart"></i></a> <a class="btn btn-primary"
                                href="#">$222.00</a></h4>
                    </div>
                </div><br />
                <div class="thumbnail">
                    <img src="themes/images/payment_methods.png" title="Bootshop Payment Methods"
                        alt="Payments Methods">
                    <div class="caption">
                        <h5>Payment Methods</h5>
                    </div>
                </div>
            </div>
            <div class="span9">
                <ul class="breadcrumb">
                    <li><a href="/">Home</a> <span class="divider">/</span></li>
                    <li class="active"> SHOPPING CART</li>
                </ul>
                <h3>  SHOPPING CART [ <small>3 Item(s) </small>]<a href="products.html" class="btn btn-large pull-right"><i class="icon-arrow-left"></i> Continue Shopping </a></h3>	
                <hr class="soft"/>
                <table class="table table-bordered">
                    <tr><th> I AM ALREADY REGISTERED  </th></tr>
                     <tr> 
                     <td>
                        <form class="form-horizontal">
                            <div class="control-group">
                              <label class="control-label" for="inputUsername">Username</label>
                              <div class="controls">
                                <input type="text" id="inputUsername" placeholder="Username">
                              </div>
                            </div>
                            <div class="control-group">
                              <label class="control-label" for="inputPassword1">Password</label>
                              <div class="controls">
                                <input type="password" id="inputPassword1" placeholder="Password">
                              </div>
                            </div>
                            <div class="control-group">
                              <div class="controls">
                                <button type="submit" class="btn">Sign in</button> OR <a href="register.html" class="btn">Register Now!</a>
                              </div>
                            </div>
                            <div class="control-group">
                                <div class="controls">
                                  <a href="forgetpass.html" style="text-decoration:underline">Forgot password ?</a>
                                </div>
                            </div>
                        </form>
                      </td>
                      </tr>
                </table>		
                        
                <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th>Product</th>
                              <th>Description</th>
                              <th>Quantity/Update</th>
                              <th>Price</th>
                              <th>Discount</th>
                              <th>Tax</th>
                              <th>Total</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td> <img width="60" src="themes/images/products/4.jpg" alt=""/></td>
                              <td>MASSA AST<br/>Color : black, Material : metal</td>
                              <td>
                                <div class="input-append"><input class="span1" style="max-width:34px" placeholder="1" id="appendedInputButtons" size="16" type="text"><button class="btn" type="button"><i class="icon-minus"></i></button><button class="btn" type="button"><i class="icon-plus"></i></button><button class="btn btn-danger" type="button"><i class="icon-remove icon-white"></i></button>				</div>
                              </td>
                              <td>$120.00</td>
                              <td>$25.00</td>
                              <td>$15.00</td>
                              <td>$110.00</td>
                            </tr>
                            <tr>
                              <td> <img width="60" src="themes/images/products/8.jpg" alt=""/></td>
                              <td>MASSA AST<br/>Color : black, Material : metal</td>
                              <td>
                                <div class="input-append"><input class="span1" style="max-width:34px" placeholder="1"  size="16" type="text"><button class="btn" type="button"><i class="icon-minus"></i></button><button class="btn" type="button"><i class="icon-plus"></i></button><button class="btn btn-danger" type="button"><i class="icon-remove icon-white"></i></button>				</div>
                              </td>
                              <td>$7.00</td>
                              <td>--</td>
                              <td>$1.00</td>
                              <td>$8.00</td>
                            </tr>
                            <tr>
                              <td> <img width="60" src="themes/images/products/3.jpg" alt=""/></td>
                              <td>MASSA AST<br/>Color : black, Material : metal</td>
                              <td>
                                <div class="input-append"><input class="span1" style="max-width:34px" placeholder="1"  size="16" type="text"><button class="btn" type="button"><i class="icon-minus"></i></button><button class="btn" type="button"><i class="icon-plus"></i></button><button class="btn btn-danger" type="button"><i class="icon-remove icon-white"></i></button>				</div>
                              </td>
                              <td>$120.00</td>
                              <td>$25.00</td>
                              <td>$15.00</td>
                              <td>$110.00</td>
                            </tr>
                            
                            <tr>
                              <td colspan="6" style="text-align:right">Total Price:	</td>
                              <td> $228.00</td>
                            </tr>
                             <tr>
                              <td colspan="6" style="text-align:right">Total Discount:	</td>
                              <td> $50.00</td>
                            </tr>
                             <tr>
                              <td colspan="6" style="text-align:right">Total Tax:	</td>
                              <td> $31.00</td>
                            </tr>
                             <tr>
                              <td colspan="6" style="text-align:right"><strong>TOTAL ($228 - $50 + $31) =</strong></td>
                              <td class="label label-important" style="display:block"> <strong> $155.00 </strong></td>
                            </tr>
                            </tbody>
                        </table>
                    
                    
                        <table class="table table-bordered">
                        <tbody>
                             <tr>
                              <td> 
                            <form class="form-horizontal">
                            <div class="control-group">
                            <label class="control-label"><strong> VOUCHERS CODE: </strong> </label>
                            <div class="controls">
                            <input type="text" class="input-medium" placeholder="CODE">
                            <button type="submit" class="btn"> ADD </button>
                            </div>
                            </div>
                            </form>
                            </td>
                            </tr>
                            
                        </tbody>
                        </table>
                        
                        <table class="table table-bordered">
                         <tr><th>ESTIMATE YOUR SHIPPING </th></tr>
                         <tr> 
                         <td>
                            <form class="form-horizontal">
                              <div class="control-group">
                                <label class="control-label" for="inputCountry">Country </label>
                                <div class="controls">
                                  <input type="text" id="inputCountry" placeholder="Country">
                                </div>
                              </div>
                              <div class="control-group">
                                <label class="control-label" for="inputPost">Post Code/ Zipcode </label>
                                <div class="controls">
                                  <input type="text" id="inputPost" placeholder="Postcode">
                                </div>
                              </div>
                              <div class="control-group">
                                <div class="controls">
                                  <button type="submit" class="btn">ESTIMATE </button>
                                </div>
                              </div>
                            </form>				  
                          </td>
                          </tr>
                        </table>		
                <a href="products.html" class="btn btn-large"><i class="icon-arrow-left"></i> Continue Shopping </a>
                <a href="login.html" class="btn btn-large pull-right">Next <i class="icon-arrow-right"></i></a>
                
            </div>
            </div></div>
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