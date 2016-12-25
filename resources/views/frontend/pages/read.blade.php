@extends('softadmin::frontend.leftsidebar')
@section('secondary_title')
    {{ $dataTypeContent->title }}
@stop
@section('main_menu')
    <ul class="menuzord-menu menuzord-indented scrollable menuzord-right">
        <li class="active"><a href="#">HOME</a>
            <ul class="dropdown">
                <li><a href="index-2.html">Home Version 1</a></li>
                <li><a href="home-2.html">Home Version 2</a></li>
                <li><a href="home-3.html">Home Version 3</a></li>                           
                <li><a href="home-4.html">Home Version 4</a></li>
                <li><a href="onepage-1.html" target="_blank">Onepage Version 1</a></li>
                <li><a href="onepage-2.html" target="_blank">Onepage Version 2</a></li>
                <li><a href="onepage-3.html" target="_blank">Onepage Version 3</a></li>                     
                <li><a href="onepage-4.html" target="_blank">Onepage Version 4</a></li>
            </ul>   
        </li>
        <li><a href="#">PAGES</a>
            <div class="megamenu">
                <div class="megamenu-row">
                
                    <div class="col4">
                        <ul>
                            <li><h5>PAGE SAMPLES</h5></li>
                            <li><a href="about-us-1.html"><i class="fa fa-angle-right"></i> About Us 1</a></li>
                            <li><a href="about-us-2.html"><i class="fa fa-angle-right"></i> About Us 2</a></li>
                            <li><a href="about-us-3.html"><i class="fa fa-angle-right"></i> About Us 3</a></li>
                            <li><a href="about-us-4.html"><i class="fa fa-angle-right"></i> About Us 4</a></li>
                            <li><a href="contact-us-1.html"><i class="fa fa-angle-right"></i> Contact Us 1</a></li>
                            <li><a href="contact-us-2.html"><i class="fa fa-angle-right"></i> Contact Us 2</a></li>
                            <li><a href="contact-us-3.html"><i class="fa fa-angle-right"></i> Contact Us 3</a></li>
                            <li><a href="faq-1.html"><i class="fa fa-angle-right"></i> FAQ 1</a></li>
                            <li><a href="faq-2.html"><i class="fa fa-angle-right"></i> FAQ 2</a></li>
                            <li><a href="404-page.html"><i class="fa fa-angle-right"></i> 404 Page</a></li>
                        </ul>
                    </div>
                    <div class="col4">                                      
                        <ul>
                            <li><h5>PORTFOLIO PAGES</h5></li>
                            <li><a href="portfolio-v1-2-columns.html"><i class="fa fa-angle-right"></i> Portfolio V1 - 2 Columns</a></li>
                            <li><a href="portfolio-v1-3-columns.html"><i class="fa fa-angle-right"></i> Portfolio V1 - 3 Columns</a></li>
                            <li><a href="portfolio-v1-4-columns.html"><i class="fa fa-angle-right"></i> Portfolio V1 - 4 Columns</a></li>
                            <li><a href="portfolio-v2-2-columns.html"><i class="fa fa-angle-right"></i> Portfolio V2 - 2 Columns</a></li>
                            <li><a href="portfolio-v2-3-columns.html"><i class="fa fa-angle-right"></i> Portfolio V2 - 3 Columns</a></li>
                            <li><a href="portfolio-v2-4-columns.html"><i class="fa fa-angle-right"></i> Portfolio V2 - 4 Columns</a></li>
                            <li><a href="portfolio-fullwidth-3-columns.html"><i class="fa fa-angle-right"></i> Portfolio 3 Cloumns - Full Width</a></li>        
                            <li><a href="portfolio-fullwidth-4-columns.html"><i class="fa fa-angle-right"></i> Portfolio 4 Cloumns - Full Width</a></li>    
                            <li><a href="portfolio-detail.html"><i class="fa fa-angle-right"></i> Portfolio Detail</a></li> 
                        </ul>
                    </div>
                    <div class="col4">
                        <ul>
                            <li><h5>GALLERY PAGES</h5></li>
                            <li><a href="photogallery-v1-2-columns.html"><i class="fa fa-angle-right"></i> Gallery V1 - 2 Columns</a></li>
                            <li><a href="photogallery-v1-3-columns.html"><i class="fa fa-angle-right"></i> Gallery V1 - 3 Columns</a></li>
                            <li><a href="photogallery-v1-4-columns.html"><i class="fa fa-angle-right"></i> Gallery V1 - 4 Columns</a></li>
                            <li><a href="photogallery-v2-2-columns.html"><i class="fa fa-angle-right"></i> Gallery V2 - 2 Columns</a></li>
                            <li><a href="photogallery-v2-3-columns.html"><i class="fa fa-angle-right"></i> Gallery V2 - 3 Columns</a></li>
                            <li><a href="photogallery-v2-4-columns.html"><i class="fa fa-angle-right"></i> Gallery V2 - 4 Columns</a></li>
                            <li><a href="photogallery-fullwidth-3-columns.html"><i class="fa fa-angle-right"></i> Gallery 3 Columns - Full Width</a></li>
                            <li><a href="photogallery-fullwidth-4-columns.html"><i class="fa fa-angle-right"></i> Gallery 4 Columns - Full Width</a></li>
                        </ul>
                    </div>
                    
                </div>      
            </div>
        </li>
        <li><a href="#">BLOG</a>
            <ul class="dropdown">
            
                <li><a href="#">Blog Grids</a>                          
                    <ul class="dropdown dropdown-right">
                       <li><a href="blog-1-col-sidebar-right.html">1 Column + Sidebar Right</a></li>
                       <li><a href="blog-1-col-sidebar-left.html">1 Column + Sidebar Left</a></li>
                       <li><a href="blog-2-col-sidebar-right.html">2 Columns + Sidebar Right</a></li>
                       <li><a href="blog-2-col-sidebar-left.html">2 Columns + Sidebar Left</a></li>
                       <li><a href="blog-2-col-no-sidebar.html">2 Columns - No Sidebar</a></li>
                       <li><a href="blog-3-col-no-sidebar.html">3 Columns - No Sidebar</a></li>
                       <li><a href="blog-list-post.html">List Post</a></li>
                    </ul>                                   
                </li>
                
                <li><a href="#">Single Post</a>
                    <ul class="dropdown dropdown-right">
                       <li><a href="blog-single-post-sidebar-right.html">Single Post + Sidebar Right</a></li>
                       <li><a href="blog-single-post-sidebar-left.html">Single Post + Sidebar Left</a></li>
                       <li><a href="blog-single-post-fullwidth.html">Single Post + Full Width</a></li>  
                    </ul>   
                </li>   
                
                <li><a href="#">Post Types</a>
                    <ul class="dropdown dropdown-right">
                        <li><a href="blog-single-post-sidebar-right.html">Standart Post</a></li>
                        <li><a href="blog-post-type-qoute.html">Qoute Post</a></li>
                        <li><a href="blog-post-type-youtube.html#">Youtube Video Post</a></li>  
                        <li><a href="blog-post-type-vimeo.html">Vimeo Video Post</a></li>
                        <li><a href="blog-post-type-soundcloud.html">Soundcloud Post</a></li>
                        <li><a href="blog-post-type-mixcloud.html">Mixcloud Post</a></li>
                        <li><a href="blog-post-type-link.html">Link Post</a></li>       
                        <li><a href="blog-post-type-slider.html">Slider Post</a></li>
                        <li><a href="blog-post-type-gallery.html">Gallery Post</a></li>
                    </ul>   
                </li>
                
            </ul>      
        </li>   
        <li><a href="#">COMPONENTS</a>
            <div class="megamenu">
                <h5 class="text-white">COMPONENTS</h5>
                <div class="megamenu-row">                                      
                    <div class="col4">
                        <ul>    
                        
                            <li>
                                <a href="components-services.html">
                                    <i class="fa fa-angle-right"></i>Services
                                </a>
                            </li>
                            
                            <li>
                                <a href="components-parallax-blocks.html">
                                    <i class="fa fa-angle-right"></i>Parallax Blocks
                                </a>
                            </li>
                            
                            <li>
                                <a href="components-team.html">
                                    <i class="fa fa-angle-right"></i>Team
                                </a>
                            </li>
                            
                            <li>
                                <a href="components-fonts.html">
                                    <i class="fa fa-angle-right"></i>Fonts
                                </a>
                            </li>   
                        </ul>
                    </div>
                    <div class="col4">
                        <ul>                                        
                            <li>
                                <a href="components-accordions.html">
                                    <i class="fa fa-angle-right"></i>Accordions
                                </a>
                            </li>
                            
                            <li>
                                <a href="components-counters.html">
                                    <i class="fa fa-angle-right"></i>Counters
                                </a>
                            </li>
                            
                            <li>
                                <a href="components-tabs.html">
                                    <i class="fa fa-angle-right"></i>Tabs
                                </a>
                            </li>
                            
                            <li>
                                <a href="components-pricings.html">
                                    <i class="fa fa-angle-right"></i>Pricings
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col4">
                        <ul>
                        
                            <li>
                                <a href="components-latest-works.html">
                                    <i class="fa fa-angle-right"></i>Latest Works
                                </a>
                            </li>
                            
                            <li>
                                <a href="components-blog-elements.html">
                                    <i class="fa fa-angle-right"></i>Blog Elements
                                </a>
                            </li>
                            
                            <li>
                                <a href="components-effects.html">
                                    <i class="fa fa-angle-right"></i>Effects
                                </a>
                            </li>
                            
                            <li>
                                <a href="components-about-blocks.html">
                                    <i class="fa fa-angle-right"></i>About Blocks
                                </a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </li>
        <li><a href="typography.html">TYPOGRAPHY</a></li>
        <li class="search">
            <form action="#your-action-page" method="get">
                <input type="text" name="search" placeholder="Search"/>
            </form>
        </li>
        
    </ul>
@stop


@section('content')
    <div class="col-sm-12 col-md-12">
        <div class="thumbnail text-left">
            <!--sinister-hover-effects-->
            <div class="ImageWrapper BackgroundS">
                <img src="<?= Softadmin::image($dataTypeContent->image) ?>" alt="..." style="width:100%"/>
                <div class="ImageOverlayH"></div>
                <div class="StyleLi">
                    <span class="WhiteRounded">
                        <a class="test-popup-link" href="images/blog/post_images/2.jpg">
                            <i class="flaticon-search19"></i>
                        </a>
                    </span>
                    <span class="WhiteRounded"><a href="#"><i class="flaticon-link15"></i></a></span>
                </div>
            </div>
            <!--sinister-hover-effects-->
            
            <div class="caption margin-top-10">
                <div class="social-icons pull-right" style="display:inline-block">
                    <ul>                                
                        <li data-toggle="tooltip" data-placement="top" title="Facebook">
                            <a href="#" class="fb-icon"><i class="fa fa-facebook"></i></a>
                        </li>
                        
                        <li data-toggle="tooltip" data-placement="top" title="Twitter">
                            <a href="#" class="twitter-icon"><i class="fa fa-twitter"></i></a>
                        </li>
                        
                        <li data-toggle="tooltip" data-placement="top" title="Google Plus">
                            <a href="#" class="google-icon"><i class="fa fa-google-plus"></i></a>
                        </li>
                        
                        <li data-toggle="tooltip" data-placement="top" title="Linkedin">
                            <a href="#" class="linkedin-icon"><i class="fa fa-linkedin"></i></a>
                        </li>
                        
                        <li data-toggle="tooltip" data-placement="top" title="Rss">
                            <a href="#" class="rss-icon"><i class="fa fa-rss"></i></a>
                        </li>                               
                    </ul>
                </div>
        
            <div class="clearfix"></div> 
            <h3 class="plist-header-bold margin-top-10"><a href="#">{{ $dataTypeContent->title }}</a></h3>
            <?php echo $dataTypeContent->body ?>
            <p class="pull-left margin-0">
                <a href="#"><span class="btn1 btn1-default">CONTINUE READING</span></a>
            </p>
            <p class="post-date-author-comment post-date-right">{{ $dataTypeContent->created_at }}</p>
        </div>
        </div>
    </div>
@stop

@section('javascript')

@stop