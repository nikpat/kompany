<?php echo $this->load->view('back/header')?>
<div id="content" class="white">
    <h1><img src="<?php echo base_url();?>resources/images/icons/posts.png" alt="" /> Blog

    </h1>     
	<div class="bloc">
	    <div class="title">
	        Blog 
	    </div>
	    <div class="content dashboard">	        
	        <form method="POST" action="<?php echo base_url()."admin/blog_edit/".$blog['id'];?>" >
	        	<table>
	        		<tr>
	        			<th>Title</th>
	        			<th><input type="text" name="title" value="<?php echo $blog['title']?>"/></th>
	        		</tr>
	        		<tr>
	        			<th>Content</th>
	        			<th><textarea type="text" rows="4" cols="80" name="content"><?php echo $blog['content']?></textarea></th>
	        		</tr>
	        		<tr>
	        			<th></th>
	        			<th><input type="submit" value="Done"/></th>
	        		</tr>
	        	</table>
	        </form>	     
	    </div>
	</div>

	<div class="cb"></div>

	</div>
    </body>
</html>