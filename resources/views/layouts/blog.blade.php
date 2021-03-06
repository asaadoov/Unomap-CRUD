<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Arctic - Responsive, Personal Blog Theme</title>
<meta name="description" content="Arctic - HTML5 Template">
<meta name="author" content="joshuapotter.me">
<meta name="author" content="lucaskriebel.com">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- jQuery - http://jquery.com/ -->
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<!-- Adds Support for HTML5 on IE6 - IE9 -->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!-- Font Awesome by Dave Gandy - http://fontawesome.io/ -->
<link rel="stylesheet" href="{{ asset('font-awesome/4-0-3/css/font-awesome.css') }}">
<!-- Google Fonts -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Rokkitt:700' rel='stylesheet' type='text/css'>
<!-- FlexSlider by wooThemes - http://www.woothemes.com/flexslider/ -->
<link rel="stylesheet" href="{{ asset('css/flexslider.css" type="text/css') }}">
<!-- Main Stylesheets -->
<link rel="stylesheet" href="{{ asset('css/main_stylesheet.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('css/responsive_stylesheet.css') }}" type="text/css">
<!-- Favicon -->
<link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">
</head>
    <body>
    <!-- Header -->
    <header id="header">
            <!-- Logo (LEFT) -->
            <div id="logo"><a href="{{ asset('index.html') }}" title="Logo"><img src="images/logo.jpg" alt="Logo" /></a></div>
            <!-- Navigation (RIGHT) -->
            <div id="navigation">
                <!-- Responsive Layout Only -->
                <div class="navigation_title"><i class="fa fa-bars"></i> MENU</div>
                <!-- Nav Bar (LEFT) -->
                <nav>
                    <ul>
                        <li><a href="{{ asset('index.html') }}" class="nav_link"  id="nav_current" title="Home">Home</a></li>
                        <li><a href="{{ asset('archive.html') }}" class="nav_link" title="Archive">Archive</a></li>
                        <li><a href="{{ asset('contact.html') }}" class="nav_link" title="Contact">Contact</a></li>
                    </ul>
                </nav>
                <!-- Responsive Layout Only -->
                <nav>
                    <div class="navigation_title"><i class="fa fa-info"></i >Other</div>
                    <ul>
                        <li><a href="{{ asset('#') }}" class="nav_link_other" title="New Blog Post">New Blog Post</a></li>
                        <li><a href="{{ asset('#') }}" class="nav_link_other" title="Social Media">Social Media</a></li>
                    </ul>
                </nav>
                <!-- Search Box (RIGHT) -->
                <div id="search">
                    <!-- Responsive Layout Only -->
                    <div class="navigation_title"><i class="fa fa-search"></i> Search</div>
                    <div id="search_box">
                        <form>
                            <input type="text" id="search_textbox" placeholder="Search keyword...">
                            <input type="submit" id="search_button" value="">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>
<!-- Subheader -->
<header id="subheader">
    <div id="subheader_wrap">
        <!-- Icon Background -->
        <div id="icon_border"></div>
    </div>
</header>
<!-- Main Content -->
<section id="content">
<!-- Icon -->
<div id="icon_wrap">
    <!-- Icon Image can be modified in #Icon CSS Rule -->
    <div id="icon">
        <a href="{{ asset('#') }}" title="Icon"><div id="icon_link"></div></a>
    </div>
</div>
<!-- Content Wrap -->
<div id="content_wrap">
<!-- Top Categories -->
<div class="categories">
    <nav>
        <ul>
            <li><a href="{{ asset('#') }}" class="categories_link" id="current_categories" title="All">All</a></li>
            <li><a href="{{ asset('#') }}" class="categories_link" title="Photography">Photography</a></li>
            <li><a href="{{ asset('#') }}" class="categories_link" title="Videos">Videos</a></li>
            <li><a href="{{ asset('#') }}" class="categories_link" title="Travel">Travel</a></li>
            <li><a href="{{ asset('#') }}" class="categories_link" title="Food">Food</a></li>
            <li><a href="{{ asset('#') }}" class="categories_link" title="Culture">Culture</a></li>
            <li><a href="{{ asset('#') }}" class="categories_link" title="Music">Music</a></li>
            <li><a href="{{ asset('#') }}" class="categories_link" title="Technology">Technology</a></li>
            <li><a href="{{ asset('#') }}" class="categories_link" title="Health">Health</a></li>
            <li><a href="{{ asset('#') }}" class="categories_link" title="Movies">Movies</a></li>
            <li><a href="{{ asset('#') }}" class="categories_link" title="Fashion">Fashion</a></li>
            <li><a class="categories_link" id="more"><i class="fa fa-angle-double-down fa-lg" id="sort_down"></i></a></li>
        </ul>
    </nav>
</div>
<!-- Unlisted Categories - Press "#more" to show -->
<div id="categories_unlisted" class="categories">
    <nav>
        <ul>
            <li><a href="{{ asset('#') }}" class="categories_link" title="Books">Books</a></li>
            <li><a href="{{ asset('#') }}" class="categories_link" title="Opinion">Opinion</a></li>
            <li><a href="{{ asset('#') }}" class="categories_link" title="Vacation">Vacation</a></li>
            <li><a href="{{ asset('#') }}" class="categories_link" title="Work">Work</a></li>
        </ul>
    </nav>
</div>
<!-- Post #1 -->
<article class="post">
    <!-- Post Media - Single Image -->
    <section class="post_media">
        <!-- Post Media Icon (TOP RIGHT) -->
        <div class="post_type" id="photo"></div>
        <!-- Post Media Image -->
        <img src="images/post_photo.jpg" alt="Photo by Joshua Potter - http://www.flickr.com/photos/joshuapotter/" />
    </section>
    <!-- Post Content - Text -->
    <section class="post_content">
        <!-- Post Header -->
        <header class="post_header">
            <!-- Post Title -->
            <div class="post_title"><a href="{{ asset('post_image.html') }}">Standard Post with Image Feature</a></div>
            <!-- Post Header -->
            <div class="post_date">December 2, 2013</div>
        </header>
        <!-- Post Body -->
        <div class="post_body">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean dictum ullamcorper augue. Ut pretium dapibus diam, a luctus sapien vehicula a. Praesent consequat sem velit, eget cursus lectus hendrerit sed. Maecenas sed posuere eros. Vestibulum convallis nec lorem ut sagittis. Nullam in tortor erat. Proin bibendum sem est. Pellentesque tempus augue accumsan malesuada iaculis. Vestibulum et sapien erat. Praesent eu semper dolor. Integer ultrices risus mi, sed rutrum diam tempus quis.</p>
            <p class="dark_font">Nulla tincidunt a orci ac cursus. Maecenas vel commodo libero. Curabitur eu molestie tortor. Vestibulum mattis vehicula lacus, sit amet scelerisque mi volutpat at. Cras feugiat ut leo ac rutrum. Nulla posuere neque luctus libero pretium adipiscing. Nullam nisi augue, venenatis id luctus ut, egestas vitae dui. Integer risus nisi, lobortis at faucibus quis, malesuada non mauris. Maecenas sed imperdiet nulla.</p>
        </div>
        <!-- Post Footer -->
        <footer class="post_footer">
            <div class="post_footer_left">
                <!-- Read More Button-->
                <a href="{{ asset('post_image.html') }}" title="Read More"><div class="post_read_more_pad"><div class="post_read_more">Read More</div></div></a>
                <!-- User/Comment/Favorite Icons -->
                <div class="post_comment_icons">
                    <ul>
                        <li><a href="{{ asset('post_image.html') }}" class="user_icon" title="Users"><i class="fa fa-user"></i>291</a></li>
                        <li><a href="{{ asset('post_image.html') }}" class="comment_icon" title="Comments"><i class="fa fa-comment"></i>0</a></li>
                        <li><a href="{{ asset('post_image.html') }}" class="heart_icon" title="Favorites"><i class="fa fa-heart"></i>60</a></li>
                    </ul>
                </div>
            </div>
            <!-- Social Media Buttons -->
            <div class="post_social_media">
                <a href="{{ asset('#') }}" class="share_facebook" title="Share on Facebook"><i class="fa fa-thumbs-up"></i>Share</a>
                <a href="{{ asset('#') }}" class="share_twitter" title="Share on Twitter"><i class="fa fa-twitter"></i>Tweet</a>
            </div>
        </footer>
    </section>
</article>
<!-- Post #2 -->
<article class="post">
    <!-- Post Media - Gallery Images -->
    <section class="post_media">
        <!-- Post Type Icon (TOP RIGHT) -->
        <div class="post_type" id="photoset"></div>
        <!-- Image Slider -->
        <div class="flexslider">
            <ul class="slides">
                <li><img src="images/post_photo.jpg" alt="Gallery Image 1" /></li>
                <li><img src="images/post_photo_2.jpg" alt="Gallery Image 2" /></li>
                <li><img src="images/post_photo_3.jpg" alt="Gallery Image 3" /></li>
            </ul>
        </div>
    </section>
    <!-- Post Content - Text -->
    <section class="post_content">
        <!-- Post Header -->
        <header class="post_header">
            <!-- Post Title -->
            <div class="post_title"><a href="{{ asset('post_gallery.html') }}">Standard Post with Gallery Feature</a></div>
            <!-- Post Date -->
            <div class="post_date">October 19, 2013</div>
        </header>
        <!-- Post Body -->
        <div class="post_body">
            <p> Curabitur sit amet dictum nulla. Vestibulum ante ipsum primis in  faucibus orci luctus et ultrices posuere cubilia Curae; Ut sed sem  fermentum, varius mi sagittis, molestie elit. Maecenas vel gravida  tortor. Vivamus iaculis accumsan neque eu porttitor. Nulla aliquet purus  arcu, nec auctor ligula aliquet sit amet. Quisque congue lobortis  suscipit. Nulla blandit, nibh in pellentesque pharetra, velit nisl  ullamcorper est, id convallis erat lectus ac neque. Etiam eu purus non  dolor faucibus pharetra. </p>
            <p class="quote">Ut in euismod magna. Mauris nec suscipit erat. Proin elementum aliquet  mi. Quisque euismod urna non arcu scelerisque, vel dapibus velit mollis.  Aenean porta neque eget turpis facilisis rhoncus. Curabitur rutrum elit  nec est bibendum, quis aliquam felis lobortis. Nullam ornare, libero  venenatis aliquam viverra, nulla nunc vehicula leo, sed fringilla purus  nulla vel arcu. </p>
            <p>Morbi porta elit nec quam adipiscing, id sagittis arcu  dignissim. Suspendisse tincidunt ornare arcu, eu cursus est vestibulum  eget. Vestibulum egestas turpis nisi, tristique feugiat purus sodales  non. </p>
        </div>
        <!-- Post Footer -->
        <footer class="post_footer">
            <div class="post_footer_left">
                <!-- Read More Button-->
                <a href="{{ asset('post_gallery.html') }}" title="Read More"><div class="post_read_more_pad"><div class="post_read_more">Read More</div></div></a>
                <!-- User/Comment/Favorite Icons -->
                <div class="post_comment_icons">
                    <ul>
                        <li><a href="{{ asset('post_gallery.html') }}" class="user_icon" title="Users"><i class="fa fa-user"></i>438</a></li>
                        <li><a href="{{ asset('post_gallery.html') }}" class="comment_icon" title="Comments"><i class="fa fa-comment"></i>8</a></li>
                        <li><a href="{{ asset('post_gallery.html') }}" class="heart_icon" title="Favorites"><i class="fa fa-heart"></i>124</a></li>
                    </ul>
                </div>
            </div>
            <!-- Social Media Buttons -->
            <div class="post_social_media">
                <a href="{{ asset('#') }}" class="share_facebook" title="Share on Facebook"><i class="fa fa-thumbs-up"></i>Share</a>
                <a href="{{ asset('#') }}" class="share_twitter" title="Share on Twitter"><i class="fa fa-twitter"></i>Tweet</a>
            </div>
        </footer>
    </section>
</article>
<!-- Post #3 -->
<article class="post">
    <!-- Post Media - Video -->
    <section class="post_media">
        <!-- Post Type Icon (TOP RIGHT) -->
        <div class="post_type" id="video"></div>
        <!-- Video -->
        <iframe src="http://player.vimeo.com/video/7449107" width="916" height="515" allowfullscreen></iframe>
    </section>
    <!-- Post Content - Text -->
    <section class="post_content">
        <!-- Post Header -->
        <header class="post_header">
            <!-- Post Title -->
            <div class="post_title"><a href="{{ asset('post_video.html">Standard Post with Video Feature</a></div>
            <!-- Post Date -->
            <div class="post_date">August 11, 2013</div>
        </header>
        <!-- Post Body -->
        <div class="post_body">
            <p> In odio urna, fringilla sit amet velit eget, suscipit rhoncus nulla. Fusce eu nunc eget felis ultricies mattis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam id posuere erat. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed imperdiet nisl id tortor commodo, pretium rutrum libero ultrices. Cras ac sapien in enim molestie tempor. Vivamus faucibus lorem in erat condimentum imperdiet. Aliquam non augue pulvinar, mollis lacus in, auctor ligula. Sed at purus nisi. Donec quis viverra sapien. Sed iaculis non leo ac vestibulum. Fusce feugiat urna sem, sed accumsan sem suscipit in. Donec pellentesque sollicitudin bibendum. Duis neque libero, imperdiet sed diam eu, feugiat vehicula enim. Integer pretium, lorem sed placerat rhoncus, neque enim malesuada lacus, at pretium sapien lectus id nibh. Donec vitae hendrerit quam, ac lacinia orci. Nulla faucibus commodo consectetur. Ut accumsan nisi eget interdum varius. Mauris non erat velit. Quisque ornare vel nisi id iaculis. Phasellus nec cursus lacus, eget condimentum tortor. </p>
        </div>
        <!-- Post Footer -->
        <footer class="post_footer">
            <div class="post_footer_left">
                <!-- Read More Button-->
                <a href="{{ asset('post_video.html" title="Read More"><div class="post_read_more_pad"><div class="post_read_more">Read More</div></div></a>
                <!-- User/Comment/Favorite Icons -->
                <div class="post_comment_icons">
                    <ul>
                        <li><a href="{{ asset('post_video.html" class="user_icon" title="Users"><i class="fa fa-user"></i>94</a></li>
                        <li><a href="{{ asset('post_video.html" class="comment_icon" title="Comments"><i class="fa fa-comment"></i>3</a></li>
                        <li><a href="{{ asset('post_video.html" class="heart_icon" title="Favorites"><i class="fa fa-heart"></i>76</a></li>
                    </ul>
                </div>
            </div>
            <!-- Social Media Buttons -->
            <div class="post_social_media">
                <a href="{{ asset('#" class="share_facebook" title="Share on Facebook"><i class="fa fa-thumbs-up"></i>Share</a>
                <a href="{{ asset('#" class="share_twitter" title="Share on Twitter"><i class="fa fa-twitter"></i>Tweet</a>
            </div>
        </footer>
    </section>
</article>
<!-- Post #4 -->
<article class="post">
    <!-- Replaces Post Media Tag -->
    <section class="post_content">
        <!-- Post Header -->
        <header class="post_header">
            <!-- Post Title -->
            <div class="post_title"><a href="{{ asset('post_standard.html">Standard Post</a></div>
            <!-- Post Date -->
            <div class="post_date">July 23, 2013</div>
        </header>
        <!-- Post Body -->
        <div class="post_body">
            <p> Curabitur id lectus dictum, volutpat neque vel, lobortis orci. Mauris  pellentesque dictum libero, ac ultrices velit. Nullam vitae felis et  neque gravida mattis. Pellentesque ac dignissim nisl. Mauris in massa in  velit facilisis ornare. Fusce ut urna ut erat rutrum suscipit. Maecenas  eget luctus sem. </p>
            <p> Cras laoreet dignissim odio accumsan adipiscing. Nam sit amet nulla et  felis imperdiet tristique. Morbi lorem quam, viverra quis nisi non,  egestas lacinia tortor. Integer eu ipsum mauris. Cras eu nisi vel quam  dictum dictum. Sed non nibh tortor. Pellentesque molestie urna in metus  lacinia, eu placerat ante pretium. Duis in nibh lorem. </p>
            <p> Mauris et magna et ipsum mattis pharetra sed dignissim neque. Nam  ultricies neque eget convallis congue. Sed ultricies lectus justo, non  iaculis neque feugiat nec. <span class="highlight">Nunc malesuada nisl magna, ut luctus turpis  varius quis.</span> Praesent gravida suscipit ligula vel placerat. Etiam eget  ipsum at enim eleifend gravida. Duis nec diam vel libero egestas  pulvinar rhoncus sit amet risus. Vestibulum ante ipsum primis in  faucibus orci luctus et ultrices posuere cubilia Curae; Nullam et lorem  nibh. Vivamus mattis nisl sit amet orci pretium posuere. Phasellus sed  quam nibh. Mauris venenatis orci adipiscing consectetur gravida. Aenean  ut pharetra lacus, a dignissim elit. Nunc et metus aliquet, varius dolor  sit amet, placerat diam. </p>
        </div>
        <!-- Post Footer -->
        <footer class="post_footer">
            <div class="post_footer_left">
                <!-- Read More Button-->
                <a href="{{ asset('post_standard.html" title="Read More"><div class="post_read_more_pad"><div class="post_read_more">Read More</div></div></a>
                <!-- User/Comment/Favorite Icons -->
                <div class="post_comment_icons">
                    <ul>
                        <li><a href="{{ asset('post_standard.html" class="user_icon" title="Users"><i class="fa fa-user"></i>303</a></li>
                        <li><a href="{{ asset('post_standard.html" class="comment_icon" title="Comments"><i class="fa fa-comment"></i>4</a></li>
                        <li><a href="{{ asset('post_standard.html" class="heart_icon" title="Favorites"><i class="fa fa-heart"></i>88</a></li>
                    </ul>
                </div>
            </div>
            <!-- Social Media Buttons -->
            <div class="post_social_media">
                <a href="{{ asset('#" class="share_facebook" title="Share on Facebook"><i class="fa fa-thumbs-up"></i>Share</a>
                <a href="{{ asset('#" class="share_twitter" title="Share on Twitter"><i class="fa fa-twitter"></i>Tweet</a>
            </div>
        </footer>
    </section>
</article>
</div>
<!-- Pagination/Social Media -->
<footer id="page_footer">
    <nav id="pagination">
        <!-- Footer Navigation -->
        <ul>
            <li><a href="{{ asset('#" class="pagination_link" id="left"><i class="fa fa-angle-double-left"></i> Previous</a></li>
        </ul>
        <ul>
            <li><a href="{{ asset('#" class="pagination_link">1</a></li>
            <li><a href="{{ asset('#" class="pagination_link" id="current_page">2</a></li>
            <li><a href="{{ asset('#" class="pagination_link">3</a></li>
            <li>...</li>
            <li><a href="{{ asset('#" class="pagination_link">18</a></li>
        </ul>
        <ul>
            <li><a href="{{ asset('#" class="pagination_link">Next <i class="fa fa-angle-double-right"></i></a></li>
        </ul>
    </nav>
    <!-- Blog Post Button -->
    <a href="{{ asset('#" title="New Blog Post"><div id="new_post">New Blog Post</div></a>
    <!-- Social Media -->
    <div id="social_media">
        <ul>
            <li><a href="{{ asset('#" class="facebook"><i class="fa fa-facebook fa-lg"></i></a></li>
            <li><a href="{{ asset('#" class="twitter"><i class="fa fa-twitter fa-lg"></i></a></li>
            <li><a href="{{ asset('#" class="google_plus"><i class="fa fa-google-plus fa-lg"></i></a></li>
            <li><a href="{{ asset('#" class="linkedin"><i class="fa fa-linkedin fa-lg"></i></a></li>
            <li><a href="{{ asset('#" class="dribbble"><i class="fa fa-dribbble fa-lg"></i></a></li>
            <li><a href="{{ asset('#" class="instagram"><i class="fa fa-instagram fa-lg"></i></a></li>
            <li><a href="{{ asset('#" class="youtube"><i class="fa fa-youtube-play fa-lg"></i></a></li>
            <li><a href="{{ asset('#" class="pinterest"><i class="fa fa-pinterest fa-lg"></i></a></li>
        </ul>
    </div>
</footer>
<footer id="footer_banner">
    <div id="footer_banner_wrap">&#169; Copyright Arctic 2013</div>
</footer>
</section>
<!-- Blur.js - https://github.com/jakiestfu/Blur.js -->
<script type="text/javascript" src="js/blur.min.js"></script>
<!-- FlexSlider -->
<script src="js/jquery.flexslider-min.js"></script>
<!-- Custom Javascript -->
<script src="js/custom.js"></script>
<center><font size="2">This is the free demo result. For a full version of this website, please go to  <a href="{{ asset('https://www6.waybackmachinedownloader.com/website-downloader-online/scrape-all-files/">https://www6.waybackmachinedownloader.com/website-downloader-online/scrape-all-files/</a></font></center></body>
</html>


