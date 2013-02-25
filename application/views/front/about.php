<?php 
  $this->load->view('front/header.php') 
?>
    <section class="main-heading">
      <section class="container">
       <div class="row">
         <article class="nine columns">
           <h1>About</h1>

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
              <?php echo $info['about'];?>
            </article>       
        </div>
       </section>
    </div>