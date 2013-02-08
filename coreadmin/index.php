<!DOCTYPE html>
<html>
    <head>
        <title>Your Admin Panel</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="js/jwysiwyg/jquery.wysiwyg.old-school.css" />

        <!-- jQuery AND jQueryUI -->
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js"></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.13/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/min.js"></script>
    
            </head>
    <body>
        
        <script type="text/javascript" src="content/settings/main.js"></script>
<link rel="stylesheet" href="content/settings/style.css" />


  <div class="settings" id="settings">
        <div class="wrapper">
            <div class="grid3">
                <div class="titre">Backgrounds</div>
                <a href="url(css/img/bg.png)" class="backgroundChanger active" title="White"></a>
                <a href="url(css/img/dark-bg.png)" class="backgroundChanger dark" title="Dark"></a>
                <a href="url(css/img/wood.jpg) fixed" class="backgroundChanger dark" title="Wood"></a>
                <a href="url(css/img/altbg/smoothwall.png)" class="backgroundChanger" title="Smoothwall"></a>
                <a href="url(css/img/altbg/black_denim.png) fixed" class="backgroundChanger dark" title="black_denim"></a>
                <a href="url(css/img/altbg/carbon.gif) fixed" class="backgroundChanger dark" title="Carbon"></a>
                <a href="url(css/img/altbg/double_lined.png) fixed" class="backgroundChanger" title="Double lined"></a>
                <div class="clear"></div>
            </div>
            <div class="grid3">
                <div class="titre">Bloc style</div>
                <a href="black" class="blocChanger" title="Black" style="background:url(css/img/bloctitle.png);"></a>
                <a href="white" class="blocChanger active" title="White" style="background:url(css/img/white-title.png);"></a>
                <a href="wood" class="blocChanger" title="Wood" style="background:url(css/img/wood-title.jpg);"></a>
                <div class="clear"></div>
            </div>
            <div class="grid3">
                <div class="titre">Sidebar style</div>
                <a href="grey" class="sidebarChanger active" title="Grey" style="background:#494949"></a>
                <a href="black" class="sidebarChanger" title="Black" style="background:#262626"></a>
                <a href="white" class="sidebarChanger" title="White" style="background:#EEEEEE"></a>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
        <a class="settingbutton" href="#">

        </a>
    </div>        
        <!--              
                HEAD
                        --> 
        <div id="head">
            <div class="left">
                <a href="#" class="button profile"><img src="img/icons/top/huser.png" alt="" /></a>
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
                <li>
                    <a href="index.php">
                        <img src="img/icons/menu/inbox.png" alt="" />
                        Dashboard
                    </a>
                </li>
                <li><a href="#"><img src="img/icons/menu/layout.png" alt="" /> Elements</a>
                    <ul>
                                                <li class="current"><a href="index.php?p=index">Dashboard</a></li>
                                                <li><a href="index.php?p=forms">Forms</a></li>
                                                <li><a href="index.php?p=table">Table</a></li>
                                                <li><a href="index.php?p=tabs">Tabs</a></li>
                                                <li><a href="index.php?p=gallery">Gallery</a></li>
                                                <li><a href="index.php?p=notif">Notifications</a></li>
                                                <li><a href="index.php?p=charts">Charts</a></li>
                                                <li><a href="index.php?p=typo">Typography</a></li>
                                                <li><a href="index.php?p=icons">Icons</a></li>
                                                <li><a href="index.php?p=calendar">Calendar</a></li>
                                            </ul>
                </li>
                <li><a href="#"><img src="img/icons/menu/brush.png" alt="" /> Another submenu</a>
                    <ul>
                        <li><a href="#">Fake menu #1</a></li>
                        <li><a href="#">Fake menu #2</a></li>
                        <li><a href="#">Fake menu #3</a></li>
                    </ul>
                </li>
                <li><a href="#"><img src="img/icons/menu/brush.png" alt="" /> Infinite sublevel</a>
                    <ul>
                        <li><a href="#">Fake menu #1</a></li>
                        <li><a href="#">Fake menu #2</a></li>
                        <li><a href="#">Fake menu #3</a>
                        <ul>
                            <li><a href="#">Fake menu #1</a></li>
                            <li><a href="#">Fake menu #2</a></li>
                            <li><a href="#">Fake menu #3</a>
                                <ul>
                                    <li><a href="#">Fake menu #1</a></li>
                                    <li><a href="#">Fake menu #2</a></li>
                                    <li><a href="#">Fake menu #3</a></li>
                                </ul>
                            </li>
                        </ul>
                        </li>
                    </ul>
                </li>
                <li class="nosubmenu"><a href="#"><img src="img/icons/menu/lab.png" alt="" /> This button is useless</a></li>
                <li class="nosubmenu"><a href="modal.html" class="zoombox w450 h700"><img src="img/icons/menu/comment.png" alt="" /> Modal box</a></li>
            </ul>
            <a href="#collapse" id="menucollapse">&#9664; Collapse sidebar</a>

        </div>
                
                
                
                
        <!--            
              CONTENT 
                        --> 
        <div id="content" class="white">
                            <h1><img src="img/icons/dashboard.png" alt="" /> Dashboard
</h1>
                
<div class="bloc left">
    <div class="title">
        Dashboard
    </div>
    <div class="content dashboard">
        <div class="center">
            <a href="#" class="shortcut">
                <img src="img/page.png" alt="" width="48" height="48"/>
                Write an Article
            </a>
            <a href="#" class="shortcut">
                <img src="img/picture.png" alt="" width="48" height="48" />
                Write an Article
            </a>
            <a href="#" class="shortcut">
                <img src="img/contact.png" alt="" width="48" height="48" />
                Manage contacts
            </a>
            <a href="#" class="shortcut last">
                <img src="img/event.png" alt="" width="48" height="48" />
                Manage events
            </a>
            <div class="cb"></div>
        </div>
        <p>Icons by <a href="http://icondrawer.com">icondrawer.com</a></p>
    </div>
</div>


                
<div class="bloc right">
    <div class="title">
        Today
    </div>
    <div class="content">
        <div class="left">
            <table class="noalt">
                <thead>
                    <tr>
                        <th colspan="2"><em>Content</em></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><h4>460</h4></td>
                        <td>Posts</td>
                    </tr>
                    <tr>
                        <td><h4>12</h4></td>
                        <td>Pages</td>
                    </tr>
                    <tr>
                        <td><h4>5</h4></td>
                        <td>Categories</td>
                    </tr>
                    <tr>
                        <td><h4>20 000</h4></td>
                        <td>Contacts</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="right">
            <table class="noalt">
                <thead>
                    <tr>
                        <th colspan="2"><em>Comments</em></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><h4>46 000</h4></td>
                        <td class="good">Comments</td>
                    </tr>
                    <tr>
                        <td><h4>5</h4></td>
                        <td class="neutral">Waiting for validation</td>
                    </tr>
                    <tr>
                        <td><h4>0</h4></td>
                        <td class="bad">Spams</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="cb"></div>
    </div>
</div>

<div class="cb"></div>

<div class="bloc">
    <div class="title">What's new</div>
    <div class="content">   
                <h5>10/10/2011</h5>
        <ul>
            <li>
                New minify system, you can now do change to Javascript sourcecode and generates a minfiy version after all using <a href="lib/minify/b=app/webroot/demo/coreadmin/js&f=cookie/jquery.cookie.js,jwysiwyg/jquery.wysiwyg.js,tooltipsy.min.js,iphone-style-checkboxes.js,excanvas.js,zoombox/zoombox.js,visualize.jQuery.js,jquery.uniform.js,main.js">this link</a>
            </li>
            <li>New alert messages</li>
            <li>CSS Merged into one CSS</li>
            <li>New input "loading" added to display a loading state on a specific field</li>
            <li>Fixed a bug caused by "Console.log" that broke charts on Internet Explorer</li>
            <li>Fixed a bug with uniform plugin that doesn't work with jQuery 1.6 (attr('checked') replaced by is(':checked')</li>
            <li>A new element (class "logo") allow you to add your own branding in the head (your logo has to be 42 pixel high</li>
            <li>The left sidebar can be collapsed !</li>

        </ul>
        <h5>09/08/2011</h5>
        <ul>
            <li>Minor CSS bug fixes</li>
            <li>New gallery template</li>
            <li>New tabs code, the new code uses jQuery.cookie to remember what tab was opened</li>
            <li>Minified CSS and Minified Javascript is now include, no need to include 200 scripts anymore</li> 
            <li>Infinite sublevel for left sidebar (thanks @sscowden for suggestion)</li>
        </ul>
        <h5>01/07/2011</h5>
        <ul>
            <li>Fixed path for CSS and Javascript files on HTML demos</li>
            <li>Charts script updated, you can now add tooltips using ‘tips’ class on table</li>
        </ul>
        <h5>16/06/2011</h5>
        <ul>
            <li>Completely reworked substyles system, you have now 3 sidebars styles, 2 body styles and 3 bloc styles. Wood styles completely reworked.</li>
            <li>Added icons so you don’t have to look for icons</li>
            <li>Added galllery system</li>
            <li>Settings pannel added on the demo so you can test substyles easily</li>
            <li>Modal style added, so you can open subpages within modal boxes</li>
            <li>Fixed a bug on page that didn’t have title</li>
        </ul>
        <h5>06/06/2011</h5>
        <ul>
            <li>Fixed a bug on menu links with submenu</li>
            <li>Added some styles on datepicker (now “today” and “current day” have different style)</li>
        </ul>

    </div>
</div>
           

<div class="bloc">
    <div class="title">
        Shortcuts
    </div>
    <div class="content">
        <a href="index.php?p=typo" class="shortcut">
            <img src="img/icons/font.png" alt="" />
            Typography
        </a>
        <a href="index.php?p=table" class="shortcut">
            <img src="img/icons/window.png" alt=""  width="32" height="32"/>
            Table
        </a>
        <a href="index.php?p=notif" class="shortcut">
            <img src="img/icons/warning.png" alt=""  width="32" height="32"/>
            Notifications
        </a>
        <a href="index.php?p=forms" class="shortcut">
            <img src="img/icons/posts.png" alt=""  width="32" height="32"/>
            Forms
        </a>
        <a href="index.php?p=charts" class="shortcut">
            <img src="img/icons/chart.png" alt=""  width="32" height="32"/>
            Charts
        </a>
        <a href="index.php?p=calendar" class="shortcut">
            <img src="img/icons/calendar.png" alt=""  width="32" height="32"/>
            Calendar
        </a>
        <div class="cb"></div>
    </div>
</div>                    </div>
        
        
    </body>
</html>