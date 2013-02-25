<?php echo $this->load->view('back/header')?>
<div id="content" class="white">
    <h1><img src="<?php echo base_url();?>resources/images/icons/posts.png" alt="" /> About

    </h1>
     <a class="button" href="<?php echo base_url();?>admin/users">Back</a>
	<div class="bloc">
	    <div class="title">
	        About
	    </div>
	    <div class="content dashboard">
		    <form method="POST" action="<?php echo base_url();?>admin/about">
		    About:<br>
		    <textarea name="about" rows="15" cols="90"><?php echo $info['about'] ?></textarea><br>
		    <input class="button" type="submit" value="Submit">
		    </form>	       
	    </div>
	</div>

	<div class="cb"></div>

	</div>
    </body>
</html>