<?php echo $this->load->view('back/header')?>
<div id="content" class="white">
    <h1><img src="<?php echo base_url();?>resources/images/icons/posts.png" alt="" /> Contact
    </h1>
	<div class="bloc">
	    <div class="title">
	        Contact
	    </div>

	    <div class="content dashboard">
	        
	        	<table style="widht:100%">
	        		<tr>
	        			<th width="25%">Name</th>
	        			<th width="25%">Email</th>
	        			<th>Msg</th>
	        		</tr>
	        		<?php foreach ($contacts as $contact) { ?>
	        			<tr>
		        			<td><?php echo $contact['name'];?></td>
		        			<td><?php echo $contact['email'];?></td>
		        			<td><?php echo $contact['msg'];?></td>
		        		</tr>
	        		<?php } ?>
	        	</table>
	        	       
	    </div>
	</div>

	<div class="cb"></div>

	</div>
    </body>
</html>