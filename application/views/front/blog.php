<?php 
  $this->load->view('front/header.php') 
?>
    <section class="main-heading">
      <section class="container">
       <div class="row">
         <article class="nine columns">
           <h1>Blog</h1>
         </article>
        
       </div>
      </section>
    </section>
  <div class="container wrap">
    <section class="sixteen columns">
    <div class="left">
        <span class="icon" data-icon="7"></span><!-- Blog post type icon -->
          <!-- Blog post headings-->
          <article class="heading">
            <h4>Blog Post Title</h4>
            <small class="half-bottom">By Pavle .</small>
          </article>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor i ncididunt ut labore et dolore magna aliqua. Dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>        
      </div>
     </section>

    <section class="sixteen columns">
    <div class="left">
        <span class="icon" data-icon="7"></span><!-- Blog post type icon -->
          <!-- Blog post headings-->
          <article class="heading">
            <h4>Blog Post Title</h4>
            <small class="half-bottom">By Pavle .</small>
          </article>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor i ncididunt ut labore et dolore magna aliqua. Dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>        
      </div>
     </section>
     <?php foreach($blogs as $blog){ ?>
      <div class="left">
          <!-- Blog post headings-->
          <article class="heading">
            <h4><?php echo $blog['title']?></h4>
            <small class="half-bottom">By : <?php echo $blog['username']?></small>
          </article>
          <p><?php echo $blog['content']?></p>       
      </div>
     </section>
     <?php } ?>
    </div>