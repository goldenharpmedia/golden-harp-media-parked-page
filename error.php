<?php
  $page_redirected_from = $_SERVER['REQUEST_URI'];  // this is especially useful with error 404 to indicate the missing page.
  $server_url = "http://" . $_SERVER["SERVER_NAME"];
  $redirect_url = $_SERVER["REDIRECT_URL"];
  $redirect_url_array = parse_url($redirect_url);
  $end_of_path = strrchr($redirect_url_array["path"], "/");

  switch(getenv("REDIRECT_STATUS")){
    # "400 - Bad Request"
    case 400:
    $error_code = "400";
    break;

    # "401 - Unauthorized"
    case 401:
    $error_code = "401";
    break;

    # "403 - Forbidden"
    case 403:
    $error_code = "403";
    break;

    # "404 - Not Found"
    case 404:
    $error_code = "404";
    break;
  }
?>

<!DOCTYPE html>
  <head>
    <title>Page Not Found</title>

    <meta name="robots" content="noindex">

    <title>This Domain is Parked</title>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="https://www.goldenharpmedia.com/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://www.goldenharpmedia.com/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://www.goldenharpmedia.com/favicon-16x16.png">
    <link rel="manifest" href="https://www.goldenharpmedia.com/site.webmanifest">

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <!-- custom css stylesheets -->
    <link href="https://www.goldenharpmedia.com/css/layout-styles.css" rel="stylesheet">
    <link href="https://www.goldenharpmedia.com/css/general-styles.css" rel="stylesheet">

    <!-- shared site styles -->
    <link href="https://www.goldenharpmedia.com/css/shared-site-styles/site-styles.css" rel="stylesheet">
    <link href="https://www.goldenharpmedia.com/css/shared-site-styles/header-styles.css" rel="stylesheet">
    <link href="https://www.goldenharpmedia.com/css/shared-site-styles/footer-styles.css" rel="stylesheet">
    <link href="https://www.goldenharpmedia.com/css/shared-site-styles/hero-styles.css" rel="stylesheet">
    <link href="https://www.goldenharpmedia.com/css/shared-site-styles/webpage-mockup-styles.css" rel="stylesheet">

    <!-- page styles -->
    <style>
      #harp{
        max-width:20vw;
        max-height:20vw;
        margin-right:30px;
      }

      @media only screen and (min-width:1200px){
        #harp{
          max-width:250px;
          max-height:250px;
          margin-right:25px;
        }
      }
      @media only screen and (max-width:600px){
        .section-sub-content > .flex-container{
          flex-wrap:wrap;
        }
        #harp{
          max-width:80px;
          max-height:80px;
          margin:0 auto 30px auto;
        }
      }

    </style>

    <!-- script files -->
    <script src="https://www.goldenharpmedia.com/js/shared-scripts.js"></script>
    <script src="https://www.goldenharpmedia.com/js/site-scripts.js"></script>

    
    <!--  -->
    <!-- initial load transition -->
    <style>
      .loading{
        opacity:0;
      }
    </style>
    <script>
      window.addEventListener("load", function(){
        document.body.classList.remove("loading");
      })
    </script>

    <noscript>
      <style>
        .loading{
          opacity:1;
        }
      </style>
    </noscript>

    <!-- hide JS only items when there isn't js -->
    <noscript>
      <style>
        .show-with-js{
          display:none;
        }
        .hide-with-js{
          display:block;
        }
      </style>
    </noscript>

    <!-- tracking -->
    <script data-host="https://microanalytics.io" data-dnt="false" src="https://microanalytics.io/js/script.js" id="ZwSg9rf6GA" async defer></script>

  </head>

  <body class="loading flex-container flex-vertical light-mode">
    <div class="scroll-manager">
      <div id="page-content" class="flex-height">

        <section id="error" class="flex-container flex-vertical">
          <div class="section-sub-content max-width-section flex-container flex-height flex-width all-center">
            <div class="flex-container align-center">
              <svg id="harp" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 560 560"><defs><style>.cls-1{fill:#333;}.cls-2{fill:#fc0;}</style></defs><g><path class="cls-1" d="M417.5,223.35l-7.04-14.26-.27-.54c-2.98,.83-5.92,1.58-8.8,2.27l1.4,2.83,7.84,15.89c2.23-2.37,4.52-4.42,6.88-6.18Z"/><path class="cls-1" d="M257.18,448.78l-107.47-217.71c.24,2.97,1.01,15.89,7.25,34.79l78.89,159.81c6.93,8.46,14.05,16.17,21.33,23.1Z"/><path class="cls-1" d="M158.54,157.27c-1.71,3.34-3.18,7.08-4.43,11.13l36.76,74.47,95,192.43,5.43-9.11-93.1-188.59-39.66-80.34Z"/><path class="cls-1" d="M221.04,192.17l-26.74-54.16c-.1-.06-.2-.13-.3-.19-3.48-.49-6.75-.53-9.81-.17l29.44,59.65,96.98,196.46,5.43-9.11-95.02-192.48Z"/><path class="cls-1" d="M260.06,179.51l-.54-1.09c-4.61-2.36-9.14-4.85-13.6-7.44l6.77,13.71,82.68,167.49,5.43-9.11-80.74-163.57Z"/><path class="cls-1" d="M319.37,207.95c-4.25-1.63-8.46-3.47-12.63-5.49l53.4,108.17,5.43-9.11-46.19-93.56Z"/><path class="cls-1" d="M368.42,215.62c-3.32,.15-6.6,.18-9.87,.11l26.33,53.34,5.43-9.11-21.89-44.33Z"/></g><path class="cls-2" d="M455.37,97.41c-.7,0-1.41,0-2.13,.02-31.65,.71-73.78,25.42-105.19,25.42-.16,0-.32,0-.48,0C245.6,119.28,188.65,0,117.58,0c-20.64,0-53.61,19.04-45.2,163.53,10.48,180,89.52,312.2,178.05,379.11l3.91,2.86c14.9,10.5,25.04,14.51,32.55,14.51s12.35-3.97,16.74-9.46c2.6-3.25,4.84-6.77,6.91-10.38l150.81-263.07c11.64-23.16-1.36-40.43-17.29-40.43-9.32,0-16.23,2.59-26.62,20.04l-139.96,235.03C139.35,408.72,72.97,101.08,160.43,101.07h0c9.39,0,20.55,3.55,33.59,11.3,40.53,24.1,81.85,60.06,129.06,63.61,5.02,.38,10.06,.58,15.17,.58,24.65,0,50.84-4.78,83.56-18.04,4.3,22.23,22.54,34.84,42.78,34.84,23.48,0,44.38-19.71,44.38-47.28,0-31.47-20.84-48.67-53.6-48.67Z"/></svg>
              
              <div class="flex-width">
                <h1 class="text-left">That's an Error (<?php print ($error_code); ?>)</h1>
                <p>Looks like we've hit a bit of a snag. Check the URL above and try again. You can also head to the homepage of this website (<a class="standard-link" href="<?php print ($server_url); ?>"><?php print ($server_url); ?></a>) or go directly to the <a href="https://www.goldenharpmedia.com" class="standard-link">Golden Harp Media homepage</a> to try to find what you were looking for there.</p>
              </div>
            </div>
          </div>
        </section>
      </div>

      <div id="page-footer" class="set-height">
        <div id="true-footer">
          <div id="footer-top" class="max-width-section flex-container align-top">
            <div id="footer-left-col" class="flex-width">
              <a id="footer-image" href="https://goldenharpmedia.com"></a>
              <div id="footer-socials-container" class="set-width flex-container align-self-top">
                <!-- instagram icon -->
                <a class="footer-social set-width" href="https://www.instagram.com/goldenharpmedia/" target="_blank">
                  <div class="ui-icon icon-button">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50"><path d="M30.89,13.13c-1.53-.07-2-.08-5.89-.08s-4.35,0-5.89.08c-4,.18-5.8,2-6,6-.07,1.54-.09,2-.09,5.89s0,4.35.09,5.89c.18,3.92,2,5.8,6,6,1.53.07,2,.09,5.89.09s4.36,0,5.89-.09c4-.18,5.8-2.06,6-6,.07-1.53.09-2,.09-5.89s0-4.35-.09-5.89C36.69,15.19,34.85,13.31,30.89,13.13ZM25,32.49A7.49,7.49,0,1,1,32.49,25,7.49,7.49,0,0,1,25,32.49ZM32.79,19a1.75,1.75,0,1,1,1.75-1.75A1.75,1.75,0,0,1,32.79,19Zm-2.93,6A4.86,4.86,0,1,1,25,20.14,4.86,4.86,0,0,1,29.86,25ZM25,0A25,25,0,1,0,50,25,25,25,0,0,0,25,0ZM39.5,31c-.24,5.3-3.2,8.24-8.49,8.49-1.55.07-2.05.08-6,.08s-4.46,0-6-.08c-5.3-.25-8.24-3.19-8.49-8.49-.07-1.55-.08-2.05-.08-6s0-4.46.08-6c.25-5.3,3.19-8.24,8.49-8.48,1.55-.08,2.05-.09,6-.09s4.46,0,6,.09c5.31.24,8.25,3.19,8.49,8.48.07,1.55.08,2.05.08,6S39.57,29.46,39.5,31Z"/></svg>
                  </div>
                </a>
                <!-- facebook icon -->
                <a class="footer-social set-width" href="https://www.facebook.com/GoldenHarpM" target="_blank">
                  <div class="ui-icon icon-button">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50"><path d="M25,0A25,25,0,1,0,50,25,25,25,0,0,0,25,0Zm6.25,16.67H28.44c-1.12,0-1.36.46-1.36,1.62v2.54h4.17L30.81,25H27.08V39.58H20.83V25H16.67V20.83h4.16V16c0-3.68,1.94-5.6,6.31-5.6h4.11Z"/></svg>
                  </div>
                </a>
                <!-- thumbtack icon -->
                <!-- <a class="footer-social set-width" href="https://www.thumbtack.com/ne/omaha/web-design/golden-harp-media/service/437426083332235268?utm_medium=web&utm_source=txt&surface=sp&referrer_pk=437426083139264516" target="_blank">
                  <div class="ui-icon icon-button">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50"><path d="M25,0A25,25,0,1,0,50,25,25,25,0,0,0,25,0Zm3,32.45a11.61,11.61,0,0,1-1.76,6.12l-1.28,2-1.28-2A11.52,11.52,0,0,1,22,32.45V22.64A7.33,7.33,0,0,1,28,20ZM37.5,17.78h-25V12.5h25Z"/></svg>
                  </div>
                </a> -->
                <!-- email icon -->
                <a class="footer-social set-width" href="&#x6d;&#x61;&#x69;&#x6c;&#x74;&#x6f;&#x3a;&#x69;&#x6e;&#x66;&#x6f;&#x40;&#x67;&#x6f;&#x6c;&#x64;&#x65;&#x6e;&#x68;&#x61;&#x72;&#x70;&#x6d;&#x65;&#x64;&#x69;&#x61;&#x2e;&#x63;&#x6f;&#x6d;">
                  <div class="ui-icon icon-button">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50"><path d="M25,0A25,25,0,1,0,50,25,25,25,0,0,0,25,0ZM39.56,14.54,25,26.35,10.44,14.54Zm0,20.83H10.42V17.66L25,29.47,39.58,17.66Z"/></svg>
                  </div>
                </a>
                <!-- phone icon -->
                <a class="footer-social set-width" href="&#x74;&#x65;&#x6c;&#x3a;&#x34;&#x30;&#x32;&#x36;&#x30;&#x33;&#x32;&#x35;&#x30;&#x35;">
                  <div class="ui-icon icon-button">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50"><path d="M25,0A25,25,0,1,0,50,25,25,25,0,0,0,25,0Zm7.18,37.14C24.5,40.65,12.59,17.49,20.09,13.58l2.2-1.08,3.64,7.1-2.18,1.07c-2.28,1.22,2.47,10.5,4.81,9.37L30.71,29l3.66,7.07Z"/></svg>
                  </div>
                </a>
              </div>
            </div>
            
            <div id="footer-info-container" class="set-width flex-container">
              <div class="footer-info-col set-width">
                <div class="footer-col-section">
                  <h5>Legal</h5>
                  <div class="footer-link-container">
                    <a class="standard-link" href="https://www.goldenharpmedia.com/legal/privacy-policy.html">Privacy Policy</a>
                  </div>
                  <div class="footer-link-container">
                    <a class="standard-link" href="https://www.goldenharpmedia.com/legal/cookie-policy.html">Cookie Policy</a>
                  </div>
                </div>
              </div>

              <div class="footer-info-col set-width">
                <div class="footer-col-section">
                  <h5>Company</h5>
                  <div class="footer-link-container">
                    <a class="standard-link" href="https://www.goldenharpmedia.com#about">About Us</a>
                  </div>
                </div>
              </div>
              <div class="footer-info-col set-width">
                <div class="footer-col-section">
                  <h5>Events</h5>
                  <div class="footer-link-container">
                    <!-- <span>No upcoming events to show</span> -->
                    <div class="footer-link-container">
                      <a class="standard-link" href="https://www.goldenharpmedia.com/skills/secure.php">SkillsUSA 2023</a>
                    </div>
                    <!-- <div class="footer-link-container">
                      <a class="standard-link" href="/events/sbsp-2023.html">Small Business Saturday Prep 2023</a>
                    </div> -->
                  </div>
                </div>
                <div class="footer-col-section">
                  <h5>Past Events</h5>
                  <div class="footer-link-container">
                    <span>No past events to show</span>
                    <!-- <div class="footer-link-container">
                      <a class="standard-link" href="/skills/skills-usa-submissions-2022.html">SkillsUSA 2022</a>
                    </div> -->
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div id="footer-bottom" class="max-width-section flex-container align-center">
            <div class="flex-width">
              <p>Copyright &copy; <span id="current-year-text"></span> Golden Harp Media, LLC. All Rights Reserved.</p>
            </div>
            <div class="set-width footer-badges-container flex-container align-center">
              <!-- website carbon -->
              <div class="footer-badge">
                <div id="wcb" class="carbonbadge wcb-d"></div>
                <script src="https://unpkg.com/website-carbon-badges@1.1.3/b.min.js" defer></script>
              </div>
              <!-- clean creatives -->
              <div class="clean-creatives-badge footer-badge">
                <a href="https://www.cleancreatives.org" target="_blank">
                  <div class="clean-creatives-img"></div>
                </a>
                
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>

  </body>
</html>