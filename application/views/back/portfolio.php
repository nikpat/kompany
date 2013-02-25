<?php echo $this->load->view('back/header')?>
<div id="content" class="white">
    <h1><img src="<?php echo base_url();?>resources/images/icons/posts.png" alt="" /> Portfolio

    </h1>
     
	<div class="bloc">
	    <div class="title">
	        Insert Portfolio
	    </div>
	    <div class="content dashboard">
		    <form method="post" action="<?php echo base_url().'admin/users'?>">
		    	<table>
		    	<tr>
		    		<th>Title </th>
		    		<th><input class="input" type="text" name="title"/></th>
		    	</tr>
		    	<tr>
			    	<th>Upload Pic</th>
			    	<th><input type="file" name="pic" size="20" /></th>
		    	</tr>
		    	<tr>
			    	<th>Link</th>
			    	<th><input class="input" type="text" name="link"/></th>
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
	        Portfolio
	    </div>

	    <div class="content dashboard">
	        
	        	<table style="widht:100%">
	        		<tr>
	        			<th width="25%">Title</th>
	        			<th width="40%">link</th>
	        			<th>Action</th>
	        		</tr>
	        		<?php foreach($params as $param){?>
	        		<tr>
	        			<td><?php echo $param['title']; ?></td>
	        			<td><?php echo $param['link']; ?></td>
	        			<td><img src="<?php echo base_url()."uploads/".$param['pic']; ?>" width="60" height="60"></td>
	        			<td><a class="button" href="<?php echo base_url().'admin/p_edit/'.$param['id']; ?>">Edit</a> 
	        				| <a class="button" href="<?php echo base_url().'admin/p_del/'.$param['id']; ?>">Delete</a></td>
	        		</tr>
	        		<?php } ?>
	        	</table>
	        	       
	    </div>
	</div>

	<div class="cb"></div>

	</div>
    </body>
</html>