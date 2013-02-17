<?php echo $this->load->view('back/header')?>
<div id="content" class="white">
    <h1><img src="<?php echo base_url();?>resources/images/icons/posts.png" alt="" /> Blog

    </h1>
     
	<div class="bloc">
	    <div class="title">
	        Write Blog
	    </div>
	    <div class="content dashboard">
		    <form method="post" action="<?php echo base_url().'admin/addBlog'?>">
		    	<table>
		    	<tr>
		    		<th>Title </th>
		    		<th><input class="input" type="text" name="title"/></th>
		    	</tr>
		    	<tr>
		    	<th>Content </th>
		    	<th><textarea class="input" rows="4" cols="50" name="content" ></textarea></th>
		    	</tr>
		    	<tr>
		    		<th></th>
		    		<th><input class="button" type="submit" value="Submit"></th>
		    	</tr>
		    	</table>
		    </form>	       
	    </div>
	</div>
	<div class="bloc">
	    <div class="title">
	        Blog
	    </div>

	    <div class="content dashboard">
	        
	        	<table style="widht:100%">
	        		<tr>
	        			<th width="25%">Title</th>
	        			<th width="60%">Content</th>
	        			<th>Action</th>
	        		</tr>
	        		<?php foreach($blogs as $blog){?>
	        		<tr>
	        			<td><?php echo $blog['title']; ?></td>
	        			<td><?php echo $blog['content']; ?></td>
	        			<td><a class="button" href="<?php echo base_url().'admin/blog_edit/'.$blog['id']; ?>">Edit</a> 
	        				| <a class="button" href="<?php echo base_url().'admin/blog_del/'.$blog['id']; ?>">Delete</a></td>
	        		</tr>
	        		<?php } ?>
	        	</table>
	        	       
	    </div>
	</div>

	<div class="cb"></div>

	</div>
    </body>
</html>