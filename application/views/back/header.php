<!DOCTYPE html>
<html>
    <head>
        <title>Kompany Admin</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
                <!-- jQuery AND jQueryUI -->

        <?php echo load_css("style.css");?>
        <?php echo load_css("jwysiwyg/jquery.wysiwyg.old-school.css"); ?>
        <?php echo load_css("style.css"); ?>
        
        <?php echo Assets::js('jquery.min.js')?>
        <?php echo Assets::js('jquery-ui.min.js')?>
        <?php echo Assets::js('min.js')?>
        <?php echo Assets::js('content/settings/main.js')?>

           
    </head>
<body>
   
        <!--              
                HEAD
                        --> 
        <div id="head">
            <div class="left">
                <a href="#" class="button profile"><img src="<?php echo base_url();?>resources/images/icons/top/huser.png" alt="" /></a>
                Hi, 
                <a href="#">John Doe</a>
                |
                <a href="#">Logout</a>
            </div>
            <div class="right">
                <form action="#" id="search" class="search placeholder">
                    <label>Looking for something ?</label>
                    <input type="text" value="" name="q" class="text"/>
                    <input type="submit" value="rechercher" class="submit"/>
                </form>
            </div>
        </div>
                
                
        <!--            
                SIDEBAR
                         --> 
        <div id="sidebar">
            <ul>
                <li <?php echo $tab == 'dashboard' ? "class='current hover'" : '' ?>>
                    <a href="/">
                        <img src="<?php echo base_url();?>resources/images/icons/menu/inbox.png" alt="" />
                        Dashboard
                    </a>
                </li>
                <li <?php echo $tab == 'blog' ? "class='current hover'" : '' ?>>
                    <a href="<?php echo base_url();?>admin/blog">
                        <img src="<?php echo base_url();?>resources/images/icons/menu/layout.png" alt="" /> Blog
                    </a>
                </li>
                <li <?php echo $tab == 'msgs' ? "class='current hover'" : '' ?>>
                    <a href="<?php echo base_url();?>admin/msgs">
                        <img src="<?php echo base_url();?>resources/images/icons/menu/inbox.png" alt="" /> Messages </a>
                   
                </li>
                <li <?php echo $tab == 'portfolio' ? "class='current hover'" : '' ?>>
                    <a href="<?php echo base_url();?>admin/portfolio">
                        <img src="<?php echo base_url();?>resources/images/icons/menu/flag.png" alt="" /> Portfolio</a>
                </li>
                <li <?php echo $tab == 'about' ? "class='current hover'" : '' ?>>
                    <a href="<?php echo base_url();?>admin/about"><img src="<?php echo base_url();?>resources/images/icons/menu/lab.png" alt="" /> About</a>
                </li>                
            </ul>
            <a href="#collapse" id="menucollapse">&#9664; Collapse sidebar</a>

        </div>