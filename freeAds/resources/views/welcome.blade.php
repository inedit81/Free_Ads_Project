<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" type="text/css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css"  />
        <!-- Styles -->

        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

<style type="text/css">
    body {
      -webkit-font-smoothing: antialiased;
      -moz-font-smoothing: grayscale;
    }

    .ui.inverted.segment {
        background: rgb(2,0,36);
background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(104,68,162,1) 35%, rgba(0,212,255,1) 100%);
    }

    .ui.vertical.segment:not(.inverted) {
      padding-top: 6rem;
      padding-bottom: 6rem;
    }

    .six.wide.column img {
      width: 100%;
    }

    .ui.borderless.inverted.menu {
      background-color: #2f2f2f;
      border-radius: 4px;
      flex-wrap: wrap;
    }

    .ui.borderless.inverted.menu .active.item {
      background-color: black;
    }

    span.sub {
      color: rgba(0, 0, 0, 0.6);
    }

    .ten.wide.column h1 {
      font-size: 3rem;
    }

    .ten.wide.column p {
      font-size: 1.5rem;
    }

    p code {
      color: #c7254e;
      background-color: #f9f2f4;
      border-radius: 4px;
      margin-left: 0.5rem;
      margin-right: 0.5rem;
    }

    .ui.tablet.computer.only.padded.grid {
      position: absolute;
      z-index: 8;
      width: 100%;
      top: 1rem;
    }

    .ui.mobile.only.grid .ui.menu .ui.vertical.menu {
      display: none;
    }

    .ui.mobile.only.grid .ui.vertical.menu .dropdown.icon {
      float: unset;
    }

    .ui.mobile.only.grid .ui.vertical.menu .dropdown.icon:before {
      content: "\f0d7";
    }

    .ui.mobile.only.grid .ui.vertical.menu .ui.dropdown.item .menu {
      position: static;
      width: 100%;
      background-color: unset;
      border: none;
    }

    .ui.mobile.only.grid .ui.vertical.menu .ui.dropdown.item {
      background-color: rgb(47, 47, 47);
    }

    .ui.mobile.only.grid .ui.vertical.menu .ui.dropdown.item .menu {
      margin-top: 6px;
    }

    .ui.mobile.only.grid .ui.vertical.menu .ui.dropdown.item .menu .header,
    .ui.mobile.only.grid .ui.vertical.menu .ui.dropdown.item .menu .item {
      color: rgba(255, 255, 255, 0.9) !important;
    }

    .slide .ui.inverted.vertical.segment {
      padding-top: 16rem;
      padding-bottom: 4rem;
      height: 600px;
    }

    .slide .ui.text.container {
      max-width: 70%;
    }

    .slick-dotted.slick-slider {
      margin-bottom: 0;
    }

    .slick-prev.slick-arrow {
      padding-left: 8rem;
      padding-right: calc(8rem + 20px);
      display: inline-block;
      height: 100%;
      z-index: 32;
      /*  background: linear-gradient(
            to right,
            rgba(0, 0, 0, 0.5) 0%,
            rgba(0, 0, 0, 0.0001) 100% */
      );
    }

    .slick-next.slick-arrow {
      padding-left: 8rem;
      padding-right: calc(8rem + 20px);
      display: inline-block;
      height: 100%;
      z-index: 32;
     /* background: linear-gradient(
        to left,
        rgba(0, 0, 0, 0.5) 0%,
        rgba(0, 0, 0, 0.0001) 100% */
      );
    }

    @media only screen and (max-width: 767px) {
      .slick-prev.slick-arrow {
        padding-left: 4rem;
        padding-right: calc(4rem + 20px);
      }

      .slick-next.slick-arrow {
        padding-left: 4rem;
        padding-right: calc(4rem + 20px);
      }
    }

    .slick-dots {
      bottom: 15px;
    }

    .slide .ui.segment h1 {
      font-size: 3rem;
    }

    .slide .ui.segment p {
      font-size: 1.5rem;
    }


  </style>
    </head>
    <body id="root">
        <div class="ui tablet computer only padded grid">
            <div class="ui container">
                <div class="ui inverted borderless huge menu">
                    <a class="active item">FreeADS</a>
            @if (Route::has('login'))
            
                    @auth
                        <a href="{{ url('/home') }}" class="item">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="item">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="item">Register</a>
                        @endif
                    @endif
            @endif
                </div>   
            </div> 
        </div>
        <div class="slide">
            <div class="ui inverted vertical center aligned segment">
              <div class="ui active text container">
                <h1 class="ui inverted header">Introducing Smart Watch Series</h1>
                <p>
                    You've never seen a watch like this
                </p>
                <div class="ui huge primary button">Shop Now</div>
              </div>
            </div>
            <div class="ui inverted vertical center aligned segment">
              <div class="ui active text container">
                <h1 class="ui inverted header">New Always-On Retina display</h1>
                <p>
                    Features to help you stay active, healthy, and connected. Introducing Smart Watch Series.
                </p>
                <div class="ui huge primary button">Shop Now</div>
              </div>
            </div>
            <div class="ui inverted vertical center aligned segment">
              <div class="ui active text container">
                <h1 class="ui inverted header">One more for good measure</h1>
                <p>
                  Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec
                  id elit non mi porta gravida at eget metus. Nullam id dolor id nibh
                  ultricies vehicula ut id elit.
                </p>
                <div class="ui huge primary button">Browse gallery</div>
              </div>
            </div>
          </div>
          <div class="ui container">
            <div class="ui vertical segment">
              <div class="ui three column stackable center aligned grid container">
                <div class="column">
                  <img
                    class="ui centered small circular image"
                    src="https://cdn.shopify.com/s/files/1/0366/5149/9652/products/product-image-1323401861_370x.jpg?v=1584831060"
                  />
                  <h1 class="ui header">Heading</h1>
                  <p>
                    Donec sed odio dui. Etiam porta sem malesuada magna mollis
                    euismod. Nullam id dolor id nibh ultricies vehicula ut id elit.
                    Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                    Praesent commodo cursus magna.
                  </p>
                  <div class="ui basic button">View details &raquo;</div>
                </div>
                <div class="column">
                  <img
                    class="ui centered small circular image"
                    src="https://cdn.shopify.com/s/files/1/0366/5149/9652/products/1e671ab2-b323-47dd-a8ac-a74711016c74_1.3b2a96c4b9ddddde954063e120336cb2_1024x1024@2x.jpg?v=1587487434"
                  />
                  <h1 class="ui header">Heading</h1>
                  <p>
                    Donec sed odio dui. Etiam porta sem malesuada magna mollis
                    euismod. Nullam id dolor id nibh ultricies vehicula ut id elit.
                    Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                    Praesent commodo cursus magna.
                  </p>
                  <div class="ui basic button">View details &raquo;</div>
                </div>
                <div class="column">
                  <img
                    class="ui centered small circular image"
                    src="https://cdn.shopify.com/s/files/1/0366/5149/9652/products/apple_mww72ll_a_watch_5_gps_1506029_370x.jpg?v=1591714268"
                  />
                  <h1 class="ui header">Heading</h1>
                  <p>
                    Donec sed odio dui. Etiam porta sem malesuada magna mollis
                    euismod. Nullam id dolor id nibh ultricies vehicula ut id elit.
                    Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                    Praesent commodo cursus magna.
                  </p>
                  <div class="ui basic button">View details &raquo;</div>
                </div>
              </div>
            </div>
            <div class="ui vertical segment">
              <div class="ui stackable grid">
                <div class="ten wide column">
                  <h1 class="ui header">
                    First featurette heading.
                    <span class="sub">It'll blow your mind.</span>
                  </h1>
                  <p>
                    Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id
                    ligula porta felis euismod semper. Praesent commodo cursus magna,
                    vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus
                    commodo.
                  </p>
                </div>
                <div class="six wide right aligned column">
                  <img
                    class="ui image"
                    src="https://cdn.shopify.com/s/files/1/0366/5149/9652/files/apple-watch-4-640x387_540x.jpg?v=1584818911"
                  />
                </div>
              </div>
            </div>
            <div class="ui vertical segment">
              <div class="ui stackable grid">
                <div class="six wide column">
                  <img
                    class="ui image"
                    src="https://cdn.shopify.com/s/files/1/0366/5149/9652/products/71CPElw64HL._AC_SL1500_1024x1024@2x.jpg?v=1593659392"
                  />
                </div>
                <div class="ten wide column">
                  <h1 class="ui header">
                    Oh yeah, <span class="sub">it's that good.</span>
                  </h1>
                  <p>
                    Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id
                    ligula porta felis euismod semper. Praesent commodo cursus magna,
                    vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus
                    commodo.
                  </p>
                </div>
              </div>
            </div>
            <div class="ui vertical segment">
              <div class="ui stackable grid">
                <div class="ten wide column">
                  <h1 class="ui header">
                    And lastly, <span class="sub">this one.</span>
                  </h1>
                  <p>
                    Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id
                    ligula porta felis euismod semper. Praesent commodo cursus magna,
                    vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus
                    commodo.
                  </p>
                </div>
                <div class="six wide right aligned column">
                  <img
                    class="ui image"
                    src="https://cdn.shopify.com/s/files/1/0366/5149/9652/products/51GhVGRZgPL._AC_SL1000_1024x1024@2x.jpg?v=1593659092"
                  />
                </div>
              </div>
            </div>
            <footer class="ui vertical segment">
              <div class="ui two column grid">
                <div class="column">
                  &copy; 2017 Company, Inc. · <a href="#root">Privacy</a> ·
                  <a href="#root">Terms</a>
                </div>
                <div class="right aligned column">
                  <a href="#root">Back to top</a>
                </div>
              </div>
            </footer>
          </div>
    </body>
    <div class="ui inverted vertical footer segment" style="padding-top: 5rem">
        <div class="ui center aligned container">
          <div class="ui stackable inverted divided grid">
            <div class="three wide column">
              <h4 class="ui inverted header">Services</h4>
              <div class="ui inverted link list">
                <a class="item" href="#root">Contact us</a>
                <a class="item" href="#root">Shipping</a>
                <a class="item" href="#root">Refund Policy</a>
                <a class="item" href="#root">FAQs</a>
              </div>
            </div>
            <div class="three wide column">
              <h4 class="ui inverted header">Follow us</h4>
              <div class="row row-cols-4">
                <a class="col" href="#root"><i class="fab fa-facebook"></i></a>
                <a class="col" href="#root"><i class="fab fa-instagram"></i></a>
                <a class="col" href="#root"><i class="fab fa-twitter"></i></a>
                <a class="col" href="#root"><i class="fab fa-github"></i></a>
              </div>
            </div>
            <div class="three wide column">
              <h4 class="ui inverted header">Group 3</h4>
              <div class="ui inverted link list">
                <a class="item" href="#root">Link One</a>
                <a class="item" href="#root">Link Two</a>
                <a class="item" href="#root">Link Three</a>
                <a class="item" href="#root">Link Four</a>
              </div>
            </div>
            <div class="seven wide column">
              <h4 class="ui inverted header">Footer Header</h4>
              <p>
                Extra space for a call to action inside the footer that could help
                re-engage users.
              </p>
            </div>
          </div>
          <div class="ui inverted section divider"></div>
          <div class="ui horizontal inverted small divided link list">
            <a class="item" href="#root">Site Map</a>
            <a class="item" href="#root">Contact Us</a>
            <a class="item" href="#root">Terms and Conditions</a>
            <a class="item" href="#root">Privacy Policy</a>
          </div>
        </div>
      </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
    <script>
      $(document).ready(function() {
        $(".ui.toggle.button").click(function() {
          $(".mobile.only.grid .ui.vertical.menu").toggle(100);
        });

        $(".ui.dropdown").dropdown();

        $(".slide").slick({
          autoplay: true,
          dots: true,
          speed: 500
        });
      });
    </script>
  
    <script>
    (function(i, s, o, g, r, a, m) {
      i["GoogleAnalyticsObject"] = r;
      (i[r] =
        i[r] ||
        function() {
          (i[r].q = i[r].q || []).push(arguments);
        }),
        (i[r].l = 1 * new Date());
      (a = s.createElement(o)), (m = s.getElementsByTagName(o)[0]);
      a.async = 1;
      a.src = g;
      m.parentNode.insertBefore(a, m);
    })(window, document, "script", "//www.google-analytics.com/analytics.js", "ga");

    ga("create", "UA-87734989-1", "auto");
    ga("send", "pageview");
    </script>
</html>
