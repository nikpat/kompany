<?php 
  $this->load->view('front/header.php') 
?>
    <section class="main-heading">
      <section class="container">
       <div class="row">
         <article class="nine columns">
           <h1>Contact</h1>
         </article>
        
       </div>
      </section>
    </section>

<div class="container wrap"><!-- Container starts -->

 
      <section class="row remove-bottom">
      <section class="sixteen columns"><!-- Section starts -->        
        
      <!-- Google Maps -->
      <div class="row">
          <article id="map" class="sixteen columns alpha"></article>
      </div>
        
	   <!-- Paragraph --> 
       <div class="eleven columns alpha">
 
        
      <section class="leave-comment"><!-- Comments form -->
      <div class="message"><div id="alert"></div></div>
      <form action="contact/sendmail.php" method="post" id="contactForm">
        <ul class="form">
        <li>
          <input type="text" name="name" value="" id="name" placeholder="Enter your name..." />
        </li>
        <li>
          <input type="text" name="email" value="" id="email" placeholder="Enter your e-mail.."/>
        </li>
        <li>
          <textarea rows="7" style="width:80%;" name="message" placeholder="Enter your message..."></textarea>
        </li>
        <li class="submitbutton">
          <input type="submit" value="Send message" id="submit" />
        </li>
        </ul>
      </form>
      </section>
    </div>
     
     <div class="five columns omega contact">
     <h4 class="add-bottom">Contact Info</h4>

      <p>
        Envato Melbourne, <br />
        Little Lonsdale St, Melbourne  <br />
        Rutrum faucibus road <br /> 
      </p>
      
        <ul>
          <li><span class="icon" data-icon="&#x0040;"></span> +381 11 27740 318</li>
          <li><span class="icon" data-icon="&#x004f;"></span> +381 64 560 754 </li>
          <li><span class="icon" data-icon="&#x003f;"></span> +381 11 27740 842 </li>
          <li><span class="icon" data-icon="&#xf0004;"></span> support@envato.com </li>
        </ul>
     </div>
      </section>
      </section><!-- Leaving comments form ends -->



<br class="clear" />
    <!-- Arrow image that appears before footer-->
    <section class="arrow">
      <img src="images/arrow.png" alt="Footer" />
    </section>

</div><!-- Main content container ends here -->

<div class="row bottom remove-bottom">
       <section class="container bottom">
       <section class="container">  
  <div class="eight columns left"><!-- Copyright text-->
    Copyright © 2012 Mimo. All Rights Reserved.
  </div>
  <div class="eight columns right">
   <a href="#top">Jump to the top.</a><!-- Jump to top hyperlink -->
  </div>
  </section>
  </section>
</div>

	<!-- JS Import
	================================================== -->
    
	<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script><!-- jQuery Library -->	  
 
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    
	<?php echo Assets::js('tabs.js')?>
	<?php echo Assets::js('jquery.prettyPhoto.js')?>
	<?php echo Assets::js('jquery.jquery.tweet.js')?>
	<?php echo Assets::js('smoothscroll.js')?>
	<?php echo Assets::js('jquery.form.js')?>
	<?php echo Assets::js('jquery.jquery.flexslider-min.js')?>
	<?php echo Assets::js('jquery.gmap.min.js')?>
	<?php echo Assets::js('jquery.quovolver.js')?>
	<?php echo Assets::js('contact/jquery.form.js')?>
    <!-- JS Plugin Settings
	================================================== -->   
     
    <!-- Slider Settings-->
	<script>
    $(window).load(function() {
    $('.flexslider').flexslider({
	    useCCS: false,
		easing: "swing",
		animation: "slide",              //String: Select your animation type, "fade" or "slide"
		slideDirection: "horizontal",   //String: Select the sliding direction, "horizontal" or "vertical"
		slideshow: true,                //Boolean: Animate slider automatically
		slideshowSpeed: 7000,           //Integer: Set the speed of the slideshow cycling, in milliseconds
		animationDuration: 600,         //Integer: Set the speed of animations, in milliseconds
		directionNav: true,             //Boolean: Create navigation for previous/next navigation? (true/false)
		controlNav: false,               //Boolean: Create navigation for paging control of each clide? Note: Leave true for manualControls usage
		keyboardNav: true,              //Boolean: Allow slider navigating via keyboard left/right keys
		mousewheel: false,              //Boolean: Allow slider navigating via mousewheel
		prevText: "Previous",           //String: Set the text for the "previous" directionNav item
		nextText: "Next",               //String: Set the text for the "next" directionNav item
		pausePlay: false,               //Boolean: Create pause/play dynamic element
		pauseText: 'Pause',             //String: Set the text for the "pause" pausePlay item
		playText: 'Play',               //String: Set the text for the "play" pausePlay item
		randomize: false,               //Boolean: Randomize slide order
		slideToStart:0,                //Integer: The slide that the slider should start on. Array notation (0 = first slide)
		animationLoop: true,            //Boolean: Should the animation loop? If false, directionNav will received "disable" classes at either end
		pauseOnAction: true,            //Boolean: Pause the slideshow when interacting with control elements, highly recommended.
		pauseOnHover: false,            //Boolean: Pause the slideshow when hovering over slider, then resume when no longer hovering
		controlsContainer: "",          //Selector: Declare which container the navigation elements should be appended too. Default container is the flexSlider element. Example use would be ".flexslider-container", "#container", etc. If the given element is not found, the default action will be taken.
		manualControls: "",             //Selector: Declare custom control navigation. Example would be ".flex-control-nav li" or "#tabs-nav li img", etc. The number of elements in your controlNav should match the number of slides/tabs.
		start: function(){},            //Callback: function(slider) - Fires when the slider loads the first slide
		before: function(){},           //Callback: function(slider) - Fires asynchronously with each slider animation
		after: function(){},            //Callback: function(slider) - Fires after each slider animation completes
		end: function(){}               //Callback: function(slider) - Fires when the slider reaches the last slide (asynchronous)

	});
	 });
    </script>
    
    <!-- Initializes Twitter plugin-->
    <script>
    jQuery(function($){
        $(".tweet").tweet({
            username: "pavlerohalj",
            join_text: "auto",
            avatar_size: 32,
            count: 2,
            auto_join_text_default: "", 
            auto_join_text_ed: "",
            auto_join_text_ing: "",
            auto_join_text_reply: "",
            auto_join_text_url: "",
            loading_text: "loading tweets..."
        });
    });
    </script>
    
    <!-- gMaps plugin --> 
    <script>		  
		  $('#map').gMap( {
     latitude: 19.1101,
     longitude:  73.0625,
	 address: "Mumbai,India ",
     maptype: 'ROADMAP',
     zoom: 5,
     controls: {
         panControl: true,
         zoomControl: false,
         mapTypeControl: true,
         scaleControl: false,
         streetViewControl: false,
         overviewMapControl: false},
	 	
	markers:[{
	  latitude: 19.1101,
	  longitude: 73.0625,
	  html: "Mumbai, India",
	  popup: true
		}]
});
	</script>
    
    <!-- Used only for JS plugins initialization 
	================================================== --> 
    
    <!-- Fading Dropdown menu -->
	<script>
      $(document).ready(function () { 
        $('#nav li').hover(
          function () {
            //show the submenu
            $('ul', this).hide().fadeToggle("450");
          }
        );
      });
    </script>  
        
    <!-- Initializes prettyPhoto plugin-->
    <script>
	$(document).ready(function(){
	  $("a[data-rel^='prettyPhoto']").prettyPhoto({hook: 'data-rel'});
    });
	</script>
        
    <script>
	$(document).ready(function() {
    // Call Quovolver on the '.quotes' object
      $('.quvolver').quovolver();
    });
	</script>
    
    <!-- Contact form -->
    <script>    
    $(document).ready(function() { 
    var options = { 
    target:        '#alert',
    beforeSubmit:  showRequest,
    success:       showResponse
    }; 
    $('#contactForm').ajaxForm(options); 
    }); 
    function showRequest(formData, jqForm, options) { 
    var queryString = $.param(formData); 
    return true; 
    } 
    function showResponse(responseText, statusText)  {  
    } 
    $.fn.clearForm = function() {
      return this.each(function() {
        var type = this.type, tag = this.tagName.toLowerCase();
        if (tag == 'form')
          return $(':input',this).clearForm();
        if (type == 'text' || type == 'password' || tag == 'textarea')
          this.value = '';
        else if (type == 'checkbox' || type == 'radio')
          this.checked = false;
        else if (tag == 'select')
          this.selectedIndex = -1;
      });
    };
    </script>
    
    <!-- Generating mobile navigation based on desktop navigation links -->
    <script>
	 // DOM ready
	 $(function() {
	   
      // Create the dropdown base
      $("<select />").appendTo("#nav");
      
      // Create default option "Go to..."
      $("<option />", {
         "selected": "selected",
         "value"   : "",
         "text"    : "Go to..."
      }).appendTo("nav select");
      
      // Populate dropdown with menu items
      $("#nav a.main").each(function() {
       var el = $(this);
       $("<option />", {
           "value"   : el.attr("href"),
           "text"    : el.text(),
       }).appendTo("#nav select option.main");
      });
	  
	  $("#nav a").each(function() {
       var el = $(this);
       $("<option />", {
           "value"   : el.attr("href"),
           "text"    : el.text(),
       }).appendTo("#nav select");
      });
      
	   // To make dropdown actually work
	   // To make more unobtrusive: http://css-tricks.com/4064-unobtrusive-page-changer/
      $("#nav select").change(function() {
        window.location = $(this).find("option:selected").val();
      });
	 
	 });
	</script>
    
    <!-- Stlye switcher - feel free to remove this -->
	<script>
    $(document).ready(function(){ 
    $("span.change_theme").click( function(){ $
      (".options").slideToggle();
    });
    });
    </script>
    
<!-- End Document
================================================== -->
</body>
</html>