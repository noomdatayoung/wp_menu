<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7, IE=9" />
<meta name="viewport" content="width=device-width, initial-scale=1 " />
<div id=ct></div>
<div id=topbar><div id=logo>LOGO</div>
<div id=nounder><a href="#toggle"><div id=ib1>&#9776;</div></a></div>
<div id="toggle" class="sidenav" ><div id=nounder><a href="#" class="close"><div id=ib2 ><span >&times;</span></div></a></div>
	<div id=menu style="overflow-y: auto; height:800px;width:90%; >

<?php
require('wp-blog-header.php');
//get_header(); 
//wp_nav_menu( array( theme_location' => 'my-custom-menu', 
//    'container_class' => 'custom-menu-class', 
// 'depth'          => 2,
//'menu_id' => 'nav') ); 
//wp_nav_menu( array( 'location' => 'my-custom-menu', 'depth' => 1 ) );


//wp_nav_menu(array('theme_location' => 'my-custom-menu', 'start_depth' => 1));
wp_nav_menu( array( 'location' => 'my-custom-menu'));
?></div>
  </div>
  
  </div>
<?php
echo "<div id=ct>";
$usr=$_GET["url"];

//exit;
$url=url_to_postid($usr);
require('wp-blog-header.php');

$page_id = $url;  //Page ID
$page_data = get_page( $page_id ); 
$title = $page_data->post_title; 
$content = apply_filters('the_content', $page_data->post_content);
//display the title and content
//echo "<br>$usr";

echo "$title<hr>";
echo "<p id=result>$content</p></div>";
?>

<style>

/* Sarabun Font */
@font-face {

    font-family: 'Sarabun';
    src: url('https://cdn.jsdelivr.net/npm/font-th-sarabun-new@1.0.0/fonts/THSarabunNew_bold-webfont.ttf') format('truetype');
    font-weight: normal;
    font-style: normal;
}
.sarabun {
    font-family: 'Sarabun', sans-serif
}
body,
button,
input,
select,
#result,
textarea {
    font-family: "Sarabun", arial, sans-serif;
font-size:16px;
}
</style>

<style>
html,body,div,span,applet,object,iframe,h1,h2,
h3,h4,h5,h6,p,blockquote,a,abbr,acronym,address,
big,cite,del,dfn,em,img,ins,kbd,q,s,samp,small,
strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,
dd,ol,ul,li,fieldset,form,label,legend,table,caption,
tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,
embed,figure,figcaption,footer,header,hgroup,input,menu,
nav,output,ruby,section,summary,time,mark,audio,video {
border: 0;
margin: 0;
padding: 0px 0px;
vertical-align: baseline;

}

#logo {
position:fixed;
top:10px;
right: 10px;
}
body{
overflow-y: auto;
///scroll
}
#ct {position:absolute;   margin:41px 0px;padding-left:5px;padding-right:5px;width:100%;padding:0px;
}
#ct img {
max-width:1000px; 
}
#topbar{
position:fixed;
maargin-top:0px;
marigin-left:0px;
left:0px;
margin:0;
padding:10px 10px;
width:100%;
background-color:white;
z-index:99;
height:40px;
border-bottom: solid 1px #f2f3f4 ;
   background-color: rgba(254, 254, 254, 0.8);
}
#nounder a{    text-decoration: none;}
#ib1,#ib2 a,a:visited{
color:black;
}
#ib1,#ib2 {
border: 10px solid rgba(244, 244, 244, 0.1);
box-sizing: border-box;
background-color:rgba(244, 244, 244, .1);
font-size:143%;
width:40px;
height:40px;
line-height:22px;
left:0px;
}
#ib2{
border: 10px solid black;
background-color:black;
color:white;
font-size:219%;
line-height:20px;
}
#ib2:hover{
border: 10px solid #222222;
background-color:#ff3a3a;
color:white;
}
#ib1:hover{
border: 10px solid #f2f3f4;
background-color:white;
color:grey;
}
#menu ul {
    list-style-type: none;
	meargin-left:70px;
}

#menu li {
 display:block;
}

#menu{
padding:0px 150px;
z-index:999;

}


#menu a:visited{ text-decoration: none;color:white;}
#toggle {
	position:absolute;	
	width:100%;
	top:10px;
left:0px;
height:200;	
	display: none;
	background-color:black;
	   opacity:1;
   //background-color: red;
	sheight:;
	}
#menu a{
ffloat:center;
    wpadding: 0px 4px 8px 32px;
    text-decoration: none;
    font-size: 20px;
    color: white;#818181;
    display: block;
    transition: 0.3s;
background-color: blaqck;
cursor:pointer;
padding:0px 0px;
border-bottom: solid .1px #222222 ;

}
#menu a:hover{
   
   border-bottom: solid 1px white ;
   color:grey ;
}
ul {
    list-style-type: none;
}
#toggle {
  display: none;
}

#toggle:target {
  display: block;
}

#toggle:target + .close {
  display: block;
}

.colose {
  display: none;
}
#aa {
  display: block;
}
.sub-menu li {
  //float: left;
   width: 160px;
    display: block;
	  //padding: 12px 12px;
text-indent: 25px; 
	  
}

@media screen and (orientation:landscape), (device-width: 768px) and (device-height: 1024px) 
{
#logo {
position:fixed;
top:10px;
left: 5px;
z-index:9;
width:30px;
}
li {float: left;margin:0px 5px;}
#ib1 {
  display: none;
}
#toggle {
  display: block;
  	background-color:white;
	color:black;
	height:40px;
	z-index:0;
	  sbackground: rgb(204, 204, 204); /* Fallback for older browsers without RGBA-support */
   background: rgba(204, 204, 204, 0.1);
   text-decoration: none;
}
#menu {
padding:5px 0px;
margin-left:60px;
font-size:100%;
z-index:99;
position: absolute;
    right: 0px;
    width: 350px;
    wborder: .01px solid rgba(204, 204, 204, .2);
    padding: 5px 5px;
   //margin:0 auto;
}

#menu a{display: block; text-decoration: none;color:black;border-bottom: solid 0px rgba(204, 204, 204, 0.0) ;}
#menu a:hover{ text-decoration: none; color:black;  border-bottom: solid 1px red ;}
#menu a:visited{color:black;
}
.close {
  display: none;
}

@media screen and (orientation:landscape), (min-device-width: 1348px)
{

#menu {
psadding:5px 0px;
  position: fixed;
    left: 180px;
    width: 500px;
    wborder: .01px solid rgba(204, 204, 204, .2);
    padding: 5px 5px;
font-size:100%;
z-index:99;

    margin:0 auto;

}
}


li {
    line-height:100%;
  float: left;
}

li a, .dropbtn {
  display: inline-block;
  //color: white;
  text-align: center;
  padding: 12px 16px;
  text-decoration: none;
}

li a:hover, .sub-menu :hover .dropbtn {
  //background-color: red;
  
}

li.menu-item-has-children {
  display: inline-block;
 
}
.sub-menu li {
  //float: left;
   width: 160px;
    display: block;
	  padding: 12px 12px;
	  
}

.sub-menu {

  display: none;
  position: absolute;
  background-color: #f9f9f9;  
  //min-width: 160px;
  max-width: 190px;
    padding: 1px 1px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.8);
  z-index: 1;
}



.sub-menu a {
  color: black;
  padding: 12px 12px;
  text-decoration: none;
  display: block;
  text-align: left;
  zbackground-color: red;
}

.sub-menu a:hover {background-color: #f1f1f1;zbackground-color: #ccc;}

.menu-item-has-children:hover .sub-menu {
  display: block;
  
}
}


</style>
