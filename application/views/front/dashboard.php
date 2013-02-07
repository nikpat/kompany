<?php 
  $this->load->view('front/header.php') 
?>

<div class="container wrap"><!-- Container starts -->
  
  <!-- Services starts -->
  <section class="sixteen columns services">
    <div class="row remove-all">
      <!-- Service #1 -->
      <article class="four columns alpha">
        <h5 class="add-bottom"><span class="icon" data-icon="&#x0026;"></span><span class="text">Beautiful Design</span></h5>
        <span class="bracket">}</span>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br />
        
        <a href="#" class="button-more" >Learn More <span class="icon-more" data-icon="&#xe03e;"></span></a></p>
      </article>
      
      <!-- Service #2 -->      
      <article class="four columns">
        <h5 class="add-bottom"><span class="icon" data-icon="&#x006e;"></span><span class="text">Development</span></h5>
        <span class="bracket">}</span>        
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  <br />
        
        <a href="#" class="button-more" >Learn More <span class="icon-more" data-icon="&#xe03e;"></span></a></p>
      </article>
      
      <!-- Service #3 -->     
      <article class="four columns">
        <h5 class="add-bottom"><span class="icon" data-icon="&#x006f;"></span><span class="text">Easy To Use</span></h5>
         <span class="bracket">}</span>       
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  <br />
        
        <a href="#" class="button-more" >Learn More <span class="icon-more" data-icon="&#xe03e;"></span></a></p>
      </article> 
      
      <!-- Service #4 -->     
      <article class="four columns omega">
        <h5 class="add-bottom"><span class="icon" data-icon="&#x006a;"></span><span class="text">Secure</span></h5>
        <span class="bracket">}</span>        
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br />
        
        <a href="#" class="button-more" >Learn More <span class="icon-more" data-icon="&#xe03e;"></span></a></p>
      </article>  
    </div>  

  </section><!-- Services ends-->

  <div class="hr  sixteen columns"><hr class="stripe"></div><!-- Horizontal divider -->
</div>
   


<div class="row bottom remove-bottom">
       <section class="container bottom">
       <section class="container">  
  <div class="eight columns left"><!-- Copyright text-->
    Copyright © 2012 Kompany. All Rights Reserved.
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
<?php echo Assets::js('jquery.gmap.min.js')?>
<?php echo Assets::js('jquery.quovolver.js')?>

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
     latitude: 44.796759,
     longitude: 20.443497,
	 address: "Belgrade, Serbia",
	 zoom: 5,
     maptype: 'ROADMAP',
     zoom: 8,
     controls: {
         panControl: true,
         zoomControl: false,
         mapTypeControl: true,
         scaleControl: false,
         streetViewControl: false,
         overviewMapControl: false},
	 	
	markers:[{
	  latitude: 44.796759,
	  longitude: 20.443497,
	  html: "Belgrade, Serbia",
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
