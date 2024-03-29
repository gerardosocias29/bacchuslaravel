@extends('layouts.app')

@section('content')
    <!-- HOME SECTION -->
    <div id="home" class="section">
        <div class="box-wrapper">                                                                                             
            <div class="container-fluid">  
                <div class="row no-gutter"> 
                    <div class="col-md-12">      
                        <script>
                            var slider1_speed = "2000";
                            var slider1_auto = "true";
                            var slider1_hover = "false";+
                        </script>

                        <div class="image-slider-wrapper relative slider1">
                            <div id="slider1" class="image-slider slider">
                                <div>
                                    <img src="{{ asset('images/hero_img_01.jpg') }}" alt=""> 
                                </div>
                                <div>
                                    <img src="{{ asset('images/hero_img_02.jpg') }}" alt="">    
                                </div>
                                <div>
                                    <img src="{{ asset('images/hero_img_03.jpg') }}" alt=""> 
                                </div>      
                            </div>
                        </div>
                    </div>
                </div>                    
            </div>
        </div>
    </div>

    <!-- SERVICE SECTION -->

    <div id="services" class="section">
        <div class="box-wrapper">                                                
            <div class="content-980">                                                
                <div class="container-fluid">  
                    <div class="row no-gutter"> 
                        <div class="col-md-5 animate">                            
                            <h2 class="big-title">Services With Clean Code & Awesome Design</h2> 
                            <p>
                                The regret on our side is, they used to say years ago, we are reading about you in science class. Now they say, we are reading about you in history class.
                            </p>
                            <br>
                            <p>
                                We choose to go to the moon in this decade and do the other things, not because they are easy, but because they are hard, because that goal will serve to organize and measure the best of our energies and skills.                                    
                            </p>
                        </div>
                        <div class="col-md-5 col-md-offset-2 service-items-holder"> 
                            <div class="row no-gutter animate">                                                                                                
                                <div class="service-holder">
                                    <div class="service-img"> 
                                        <img src="{{ asset('images/icon_interactive@2x.png') }}" alt="">
                                    </div>
                                    <div class="service-txt">
                                        <h4>Interactive</h4>
                                        <p>For those who have seen the Earth from space, and for the hundreds and perhaps thousands more.</p>
                                    </div>
                                </div>
                            </div>
                            <br>                                
                            <br>                                
                            <div class="row no-gutter animate">   
                                <div class="service-holder">
                                    <div class="service-img"> 
                                        <img src="{{ asset('images/icon_brand@2x.png') }}" alt="">
                                    </div>
                                    <div class="service-txt">
                                        <h4>Brand</h4>
                                        <p>Astronomy compels the soul to look upward, and leads us from this world to another.</p>
                                    </div>
                                </div>      
                            </div>      
                            <br>                                
                            <br>                                
                            <div class="row no-gutter animate">
                                <div class="service-holder">
                                    <div class="service-img"> 
                                        <img src="{{ asset('images/icon_print@2x.png') }}" alt="">
                                    </div>
                                    <div class="service-txt">
                                        <h4>Print</h4>
                                        <p>I believe every human has a finite number of heartbeats. I don't intend to waste any of mine.</p>
                                    </div>
                                </div>
                            </div>      
                        </div>
                    </div>
                </div>                                          
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            {!! $chartjs->render() !!}
        </div>
    </div>

    <!-- PORTFOLIO SECTION -->

    <div id="portfolio" class="section">                                
        <div class="box-wrapper">                                                                                                      
            <div class="grid" id="portfolio-grid">
                <div class="grid-sizer"></div>
                <div class="grid-item element-item p_2x2">
                    <a data-rel="prettyPhoto[gallery1]" href="https://vimeo.com/157276599">
                        <img src="{{asset('images/portfolio_item_01.jpg')}}" alt="">
                        <div class="portfolio-text-holder">
                            <div class="portfolio-text-wrapper">
                                <p class="portfolio-type">
                                    <img src="{{asset('images/icon_play@2x.png')}}" alt="">
                                </p>                               
                                <p class="portfolio-text">VIDEO</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="grid-item element-item p_1x1">
                    <a data-rel="prettyPhoto[gallery1]" href="{{asset('images/portfolio_item_02_large.jpg')}}">
                        <img src="{{asset('images/portfolio_item_02.jpg')}}" alt="">
                        <div class="portfolio-text-holder">
                            <div class="portfolio-text-wrapper">
                                <p class="portfolio-type">
                                    <img src="{{asset('images/icon_view@2x.png')}}" alt="">
                                </p>                               
                                <p class="portfolio-text">IMAGE</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="grid-item element-item p_1x1">
                    <a href="single.html">
                        <img src="{{asset('images/portfolio_item_03.jpg')}}" alt="">
                        <div class="portfolio-text-holder">
                            <div class="portfolio-text-wrapper">
                                <p class="portfolio-type">
                                    <img src="{{asset('images/icon_post@2x.png')}}" alt="">
                                </p>                               
                                <p class="portfolio-text">TEXT</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="grid-item element-item p_1x1">
                    <a href="http://cocobasic.com" target="_blank">
                        <img src="{{asset('images/portfolio_item_04.jpg')}}" alt="">
                        <div class="portfolio-text-holder">
                            <div class="portfolio-text-wrapper">
                                <p class="portfolio-type">
                                    <img src="{{asset('images/icon_external@2x.png')}}" alt="">
                                </p>                               
                                <p class="portfolio-text">LINK</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="grid-item element-item p_1x1">
                    <a href="single.html">
                        <img src="{{asset('images/portfolio_item_05.jpg')}}" alt="">
                        <div class="portfolio-text-holder">
                            <div class="portfolio-text-wrapper">
                                <p class="portfolio-type">
                                    <img src="{{asset('images/icon_post@2x.png')}}" alt="">
                                </p>     
                                <p class="portfolio-text">TEXT</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="grid-item element-item p_1x1">
                    <a data-rel="prettyPhoto[gallery1]" href="{{asset('images/portfolio_item_06_large.jpg')}}">
                        <img src="{{asset('images/portfolio_item_06.jpg')}}" alt="">
                        <div class="portfolio-text-holder">
                            <div class="portfolio-text-wrapper">
                                <p class="portfolio-type">
                                    <img src="{{asset('images/icon_view@2x.png')}}" alt="">
                                </p>   
                                <p class="portfolio-text">IMAGE</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="clear"></div>                          
            </div>
            <div class="content-980">                                                
                <div class="process-holder">
                    <div class="process animate">
                        <span>1</span>
                        <span>/</span>
                        <span>3</span>
                        <p class="process-txt">Explore & Collect Information</p>
                    </div>
                    <div class="separator animate"></div>
                    <div class="process animate wait-03s">
                        <span>2</span>
                        <span>/</span>
                        <span>3</span>
                        <p class="process-txt">Explore & Collect Information</p>
                    </div>
                    <div class="separator animate wait-03s"></div>
                    <div class="process animate wait-06s">
                        <span>3</span>
                        <span>/</span>
                        <span>3</span>
                        <p class="process-txt">Explore & Collect Information</p>
                    </div>
                </div>
            </div>
        </div>                    
    </div>            

    <!-- NEWS SECTION -->

    <div id="news" class="section">                                
        <div class="box-wrapper">                                                                                              
            <div class="container-fluid">  
                <div class="row no-gutter news-holder"> 
                    <div class="col-sm-6 col-md-6 post post-1">                            
                        <p class="category">INSPIRATIONAL</p>
                        <h2 class="entry-title">Time is on Our Side</h2>   
                        <p class="excerpt">Talent she for lively eat led sister. Entrance strongly packages she out rendered get quitting denoting led. Dwelling confined improved it he no doubtful raptures.</p>
                        <a class="read-more" href="single.html">Read More</a>
                    </div>
                    <div class="col-sm-6 col-md-6 post post-2">                            
                        <p class="category">THOUGHTS</p>
                        <h2 class="entry-title">Hello to my Second Post</h2>   
                        <p class="excerpt">Smile spoke total few great had never their too. Amongst moments do in arrived at my replied. Fat weddings servants but man believed prospect.</p>
                        <a class="read-more" href="single.html">Read More</a>
                    </div>
                </div>
            </div>                                         
        </div>
    </div>


    <!-- SUPPORT SECTION -->

    <div id="support" class="section">                                
        <div class="box-wrapper">                                                                                              
            <div class="container-fluid">  
                <div class="row no-gutter"> 
                    <div class="col-md-6 col-md-offset-6">
                        <div class="quote">
                            <h2 class="entry-title animate">The art and science of asking questions is the source of all knowledge</h2>                               
                        </div>
                    </div>                        
                </div>
                <div class="row no-gutter"> 
                    <div class="col-md-9 col-md-offset-3 support-service">                                                                                
                        <div class="row no-gutter">                                          
                            <div class="col-sm-2 text-center animate wait-03s"> 
                                <img class="support-img" src="{{asset('images/icon_photo@2x.png')}}" alt="Photo Sessions">
                                <p class="support-item-text">Photo Sessions</p>
                            </div>
                            <div class="col-sm-2 col-sm-offset-3 text-center animate wait-03s">                                                                 
                                <img class="support-img" src="{{asset('images/icon_support@2x.png')}}" alt="24/7 Support">
                                <p class="support-item-text">24/7 Support</p>
                            </div>
                            <div class="col-sm-2 col-sm-offset-3 text-center animate wait-03s">
                                <img class="support-img" src="{{asset('images/icon_diamond@2x.png')}}" alt="Pixel Precise">
                                <p class="support-item-text">Pixel Precise</p>
                            </div>
                        </div>    
                        <div class="row no-gutter"> 
                            <div class="col-md-11 m-top-40 animate wait-03s">
                                Drawings me opinions returned absolute in. Otherwise therefore hex did are unfeeling something. Certain be ye amiable by exposed so. To celebrated estimating excellence do.
                            </div>
                        </div>
                    </div>                                                                   
                </div>
            </div>                                         
        </div>
    </div>


    <!-- FOCUS SECTION -->
        
    <div id="focus" class="section">                                
        <div class="box-wrapper">                                                                                              
            <div class="container-fluid">  
                <div class="row no-gutter"> 
                    <div class="col-md-6">                            
                        <img src="{{asset('images/image_icons.jpg')}}" alt="">                                           
                    </div>
                    <div class="col-md-6">
                        <div class="focus-holder">
                            <h2 class="entry-title">Focus and Photo by Professionals</h2>  
                            <br>
                            <br>
                            <p>
                                We choose to go to the moon in this decade and do the other things, not because they are easy, but because they are hard, because that goal will serve to organize and measure the best of our energies and skills.
                            </p>
                            <br>
                            <p>
                                We won’t be doing it just to get out there in space we’ll be doing it because the things we learn out there will be making life better for a lot of people.
                            </p>
                        </div>
                    </div>                  
                </div>      
                <div class="row no-gutter"> 
                    <div class="col-md-12">
                        <script>
                            var text1_speed = "500";
                            var text1_auto = "false";
                            var text1_hover = "true";
                        </script>

                        <div class="testimonial-slider-holder relative">
                            <div class="testimonial-slider-quote">“</div>
                            <div id="text1" class="testimonial-slider slider">
                                <div>
                                    <div class="testimonial-content">
                                        <p class="author-text">Imperdiet dui accumsan sit amet. Tempor id eu nisl nunc. Augue ut lectus arcu bibendum. Dignissim cras tincidunt lobortis feugiat vivamus.</p>
                                        <img class="author-img" src="{{asset('images/avatar_img_01@2x.png')}}" alt=""/> 
                                        <p class="author-name">Jane Williams</p>
                                    </div>  
                                </div>
                                <div>
                                    <div class="testimonial-content">
                                        <p class="author-text">Bibendum at varius vel pharetra. Enim ut tellus elementum sagittis vitae et leo duis ut. Arcu odio ut sem nulla pharetra diam sit amet.</p>
                                        <img class="author-img" src="{{asset('images/avatar_img_02@2x.png')}}" alt=""/> 
                                        <p class="author-name">John Doe</p>
                                    </div>   
                                </div>
                                <div>
                                    <div class="testimonial-content">
                                        <p class="author-text">Nec feugiat in fermentum posuere urna nec tincidunt praesent semper. Dictum fusce ut placerat orci. Leo in vitae turpis massa sed.</p>
                                        <img class="author-img" src="{{asset('images/avatar_img_03@2x.png')}}" alt=""/> 
                                        <p class="author-name">Anna Who</p>
                                    </div> 
                                </div>      
                            </div>
                        </div>
                    </div>                        
                </div>
            </div>                  
        </div>                  
    </div>

    <!-- PRICING SECTION -->

    <div id="pricing" class="section">                                
        <div class="box-wrapper">                                                                                              
            <div class="container-fluid">
                <div class="content-980">
                    <div class="row no-gutter"> 
                        <div class="col-md-8 col-md-offset-2 pricing-intro">
                            Pricing me opinions returned absolute in. Otherwise therefore hex did are unfeeling something. Certain be ye amiable by exposed so. To celebrated estimating excellence do.
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="row no-gutter"> 
                        <div class="col-md-4">  
                            <div class="pricing-holder price1 animate">
                                <p class="pricing-title">
                                    STARTER
                                    <br>
                                    PACK
                                </p>
                                <div class="pricing-content">
                                    <p>Auctor neque in euismod</p>
                                    <p>Sem erat nec nibh nulla</p>
                                    <p>Magna est suspendisse sem</p>
                                    <p><del>Viverra eget interdum nec</del></p>
                                    <p><del>Dignissim ipsum nulla</del></p>
                                    <p><del>Porta vestibulum nec</del></p>
                                    <p><del>Auctor neque in euismod</del></p>
                                    <p><del>Sem erat nec nibh nulla</del></p>
                                </div>
                                <p class="pricing-price"><span>$</span>29</p>
                                <a class="pricing-buy" href="single.html">BUY</a>
                            </div>
                        </div>
                        <div class="col-md-4">  
                            <div class="pricing-holder price2 animate wait-03s">
                                <p class="pricing-title">
                                    BUSINESS
                                    <br>
                                    PACK
                                </p>
                                <div class="pricing-content">
                                    <p>Auctor neque in euismod</p>
                                    <p>Sem erat nec nibh nulla</p>
                                    <p>Magna est suspendisse sem</p>
                                    <p>Viverra eget interdum nec</p>
                                    <p>Dignissim ipsum nulla</p>
                                    <p><del>Porta vestibulum nec</del></p>
                                    <p><del>Auctor neque in euismod</del></p>
                                    <p><del>Sem erat nec nibh nulla</del></p>                                  
                                </div>
                                <p class="pricing-price"><span>$</span>49</p>
                                <a class="pricing-buy" href="single.html">BUY</a>
                            </div>
                        </div>
                        <div class="col-md-4">  
                            <div class="pricing-holder price3 animate wait-06s">
                                <p class="pricing-title">
                                    PROFESSIONAL
                                    <br>
                                    PACK
                                </p>
                                <div class="pricing-content">
                                    <p>Auctor neque in euismod</p>
                                    <p>Sem erat nec nibh nulla</p>
                                    <p>Magna est suspendisse sem</p>
                                    <p>Viverra eget interdum nec</p>
                                    <p>Dignissim ipsum nulla</p>
                                    <p>Porta vestibulum nec</p>
                                    <p>Auctor neque in euismod</p>
                                    <p>Sem erat nec nibh nulla</p> 
                                </div>
                                <p class="pricing-price"><span>$</span>69</p>
                                <a class="pricing-buy" href="single.html">BUY</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- TEAM SECTION -->

    <div id="team" class="section">                                
        <div class="box-wrapper">                                                                                              
            <div class="container-fluid">                      
                <div class="row no-gutter"> 
                    <div class="col-md-12">
                        <img src="{{asset('images/about_img_01.jpg')}}" alt="Peter Johansen"/>
                    </div>
                    <div class="col-md-6 m-top-40">
                        <div class="progress_bar animate">                         
                            <div class="progress_bar_field_holder" style="width:81%;">  
                                <div class="progress_bar_title">HTML</div>    
                                <div class="progress_bar_percent_text">81%</div>                       
                                <div class="progress_bar_field_perecent"></div>    
                            </div>              
                        </div>
                        <div class="progress_bar animate wait-03s">                         
                            <div class="progress_bar_field_holder" style="width:93%;">  
                                <div class="progress_bar_title">CSS</div>    
                                <div class="progress_bar_percent_text">93%</div>                       
                                <div class="progress_bar_field_perecent"></div>    
                            </div>              
                        </div>
                        <div class="progress_bar animate wait-06s">                         
                            <div class="progress_bar_field_holder" style="width:72%;">  
                                <div class="progress_bar_title">PSD</div>    
                                <div class="progress_bar_percent_text">72%</div>                       
                                <div class="progress_bar_field_perecent"></div>    
                            </div>              
                        </div>
                        <div class="progress_bar animate wait-09s">                         
                            <div class="progress_bar_field_holder" style="width:99%;">  
                                <div class="progress_bar_title">LOVE</div>    
                                <div class="progress_bar_percent_text">99%</div>                       
                                <div class="progress_bar_field_perecent"></div>    
                            </div>              
                        </div>
                    </div>                         
                    <div class="col-md-6 team-member featured animate">
                        <div class="member-wrapper">
                            <h4 class="member-name">Peter Johanson</h4>
                            <p class="member-position">CEO</p>                            
                            <div class="member-content">
                                <p>
                                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim.
                                </p>
                                <br>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                </p>
                            </div>                      
                        </div>
                    </div>                         
                    <div class="col-sm-6 col-md-6 team-member">                            
                        <img src="{{asset('images/about_img_02.jpg')}}" alt="John Willson" />
                        <div class="member-wrapper">
                            <h4 class="member-name">John Willson</h4>
                            <p class="member-position">CODER</p>                            
                            <div class="member-content">
                                <p>
                                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim.
                                </p>
                            </div>        
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 team-member member-3">                            
                        <img src="{{asset('images/about_img_03.jpg')}}" alt="Molly Chen" />
                        <div class="member-wrapper">
                            <h4 class="member-name">Molly Chen</h4>
                            <p class="member-position">DESIGNER</p>                            
                            <div class="member-content">
                                <p>
                                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim.
                                </p>
                            </div>        
                        </div>
                    </div>
                </div>                                         
            </div>
        </div>
    </div>


    <!-- CONTACT SECTION -->

    <div id="contact" class="section">                                
        <div class="box-wrapper">                                                                                              
            <div class="container-fluid"> 
                <div class="row no-gutter">                        
                    <div class="col-md-12">
                        <ul class="counter-widget">
                            <li class="animate">
                                <p class="count">739</p>
                                <span>CUPS OF COFFEE</span>
                            </li>
                            <li class="animate wait-03s">
                                <p class="count">540</p>
                                <span>TB USED</span>
                            </li>
                            <li class="animate wait-06s">
                                <p class="count">6217</p>
                                <span>CALLS MADE</span>
                            </li>
                            <li class="animate wait-09s">
                                <p class="count">1183</p>
                                <span>TWEETS</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row no-gutter"> 
                    <div class="col-sm-6 col-md-6 contact-info">
                        <p>
                            Consectetur adipisicing elit sed eiusmod tempor incididunt ut dolore magna labore eiusmod. Lorem ipsum dolor sit amet consectetur est adipisicing elit, sed do eiusmod tempor.
                        </p>
                        <br>
                        <p><b>Address:</b> New York, NY, United States</p>
                        <p><b>Phone:</b> +1 234-567-890</p>
                        <p><b>Hours:</b> 9:00 am – 5:00 pm</p>
                    </div>                        
                    <div class="col-sm-6 col-md-6 contact-form-holder">
                        <div class="contact-form">
                            <p><input id="name" type="text" name="your-name" placeholder="Name"></p>
                            <p><input id="contact-email" type="email" name="your-email" placeholder="Email"></p>
                            <p><input id="subject" type="text" name="your-subject" placeholder="Subject"></p>
                            <p><textarea id="message" name="your-message" placeholder="Message"></textarea></p>
                            <p><input type="submit" onClick="SendMail()" value="SEND"></p>                                
                        </div>
                    </div>
                </div>
            </div>                                         
        </div>                  
    </div>

    @if (session('status'))
        {{ session('status') }}
    @endif

@endsection
