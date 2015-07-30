<?php
/*
Template Name:footer
 */
$wp_path = 'http://coloredcow.in/wp/wp-content/themes/coloredcow';
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
      <script src="<?php echo "$wp_path";?>/index.js"></script>
    <link href="<?php echo "$wp_path";?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo "$wp_path";?>/css/footer.css" rel="stylesheet">

  </head>
  <body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="<?php echo "$wp_path";?>js/bootstrap.min.js"></script>
      <div class="container-fluid">
       <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 footer">
                    <div class="row">
              <div class="col-lg-2 col-md-2 col-sm-1 hidden-xs fheading">
              </div>
              <div class="col-lg-8 col-md-8 col-sm-10 col-xs-12 fheading">
                  <a href="<?php cc_home_path();?>" class="fhome"> Colored Cow</a>
              </div>
              <div class="col-lg-2 col-md-2 col-sm-1 hidden-xs fheading">
              </div>
                    </div>
               <div class="row">
              <div class="col-lg-3 col-md-2 col-sm-2 col-xs-2">
              </div>
              <div class="col-lg-6 col-md-8 col-sm-8 col-xs-8 ftext">
                 <div>
                  We are a tribe of charged individuals who care about 
                  technology and people. We are powered by our thoughts 
                  and our values.
                  </div>
                   </div>
              <div class="col-lg-3 col-md-2 col-sm-2 col-xs-2">
              </div>
      </div>
                    <div class="row">
                    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 fspace">
                        </div>
                    
                    </div>
                        <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 fmenu">
                        <a href="<?php cc_root_path();?>/about" class="fmenutext"> About</a>    
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 fmenu">
                         <a href="<?php cc_root_path();?>/service" class="fmenutext"> Services</a>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 fmenu">
                          <a href="#" class="fmenutext"> Education</a>    
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 fmenu">
                           <a href="<?php cc_root_path();?>/blog" class="fmenutext"> Blog</a>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 fmenu">
                          <a href="<?php cc_root_path();?>/career" class="fmenutext"> Career</a>    
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 fmenu">
                           <a href="<?php cc_root_path();?>/contact" class="fmenutext"> Contact</a>    
                    </div>
                </div>            
                    
                    
      </div>
          </div>
          
      </div>
    </body>
</html>
