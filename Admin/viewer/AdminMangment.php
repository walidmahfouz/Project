<?php require 'include.php';?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><!--[if IE]><html xmlns="http://www.w3.org/1999/xhtml" class="ie-browser" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office"><![endif]--><!--[if !IE]><!--><html style="margin: 0;padding: 0;" xmlns="http://www.w3.org/1999/xhtml"><!--<![endif]--><head>
 <script src="https://code.jquery.com/jquery-1.12.3.min.js"></script>
 <script>
     $(document).ready(function(){
    $(":button.but1").click(function(){
        $("div.st").show();
        $("div.st").animate({Down: '250px'});
    });
     $(":button.but1").dblclick(function(){
        $("div.st").hide();
    });
	
	 $("li.logout").on({
		 mouseenter:function(){
			 $(this).css({"background-color":"white","box-shadow":"0px 0px 50px white","border":"1px solid rgba(36, 68, 85,.5)"});
			 $("li.logout span").css("color","rgba(36, 68, 85,.5)");
			 $("li.logout a ").css("color","red");
		 } ,
         mouseleave:function(){
             $(this).css({"background-color":"rgba(36, 68, 85,.5)","box-shadow":"0px 0px 0px rgba(36, 68, 85,.5)","border":"1px solid white"});
			 $("li.logout span").css("color","red");
		     $("li.logout a ").css("color","white"); 
		 },
		click:function(){
			 
			 $(this).css("box-shadow","0 0 90px red");
			 $("li.logout span").css("color","rgba(36, 68, 85,.5)");
			 $("li.logout a ").css("color","red");
		 } 
	 });
});

     $(document).ready(function(){
    $(":button.but2").click(function(){
        $("div.st2").show();
        $("div.st2").animate({Down: '250px'});
    });
     $(":button.but2").dblclick(function(){
        $("div.st2").hide();
    });
});
     $(document).ready(function(){
    $(":button.but3").click(function(){
        $("div.st3").show();
        $("div.st3").animate({Down: '250px'});
    });
     $(":button.but3").dblclick(function(){
        $("div.st3").hide();
    });
});
     $(document).ready(function(){
    $(":button.but4").click(function(){
        $("div.st4").show();
        $("div.st4").animate({Down: '250px'});
    });
     $(":button.but4").dblclick(function(){
        $("div.st4").hide();
    });
});
     $(document).ready(function(){
    $(":button.but5").click(function(){
        $("div.st5").show();
        $("div.st5").animate({Down: '250px'});
    });
     $(":button.but5").dblclick(function(){
        $("div.st5").hide();
    });
});
     $(document).ready(function(){
    $(":button.but6").click(function(){
        $("div.st6").show();
        $("div.st6").animate({Down: '250px'});
    });
     $(":button.but6").dblclick(function(){
        $("div.st6").hide();
    });
});
     $(document).ready(function(){
    $(":button.but7").click(function(){
        $("div.st7").show();
        $("div.st7").animate({Down: '250px'});
    });
     $(":button.but7").dblclick(function(){
        $("div.st7").hide();
    });
});
     $(document).ready(function(){
    $(":button.but8").click(function(){
        $("div.st8").show();
        $("div.st8").animate({Down: '250px'});
    });
     $(":button.but8").dblclick(function(){
        $("div.st8").hide();
    });
});
</script>
    <!--[if gte mso 9]><xml>
     <o:OfficeDocumentSettings>
      <o:AllowPNG/>
      <o:PixelsPerInch>96</o:PixelsPerInch>
     </o:OfficeDocumentSettings>
    </xml><![endif]-->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width">
    <!--[if !mso]><!--><meta http-equiv="X-UA-Compatible" content="IE=edge"><!--<![endif]-->
    <title>BF-basic-e-commerce</title>
    <style type="text/css" id="media-query">
      body {
  margin: 0;
  padding: 0; }
  .header 
{
	 display:block;
	 position:fixed;
	 z-index:2;
	 margin:1px;
	 padding:0px ;
	 background-color: rgba(36, 68, 85,.9);
	 width:99.8%;
	 overflow:hidden;
	 list-style-type:none;
	 border-radius:5px;
}
ul.header li 
{
     display:inline-block;
  	 background-color:rgba(36, 68, 85,.5);
	 margin:0px;
	 padding:15px;
	 float:left;
	 border-radius:2px;
	 border: 1px solid white;
	 cursor: pointer;
} 

ul li.logout
{
	 float:right;
	 padding-left:15px;
	 margin-right:0px;
	 -webkit-transition-duration: 0.4s; /* Safari */
     transition-duration: 0.4s;
}
li.logout > a , ul li span 
{
	 display:block;
	 text-align:center;
	 color:white;
	 text-decoration:none;
	 font-size:15px;
	 font-family:Cursive,serief;
	 padding:-1px 1px 1px 1px;
	 font-weight:bold;
}
ul li span i,ul li.logout span 
{
	 margin-right: 5px;
	 font-size:20px;
	 padding-top:5px;
	 padding-right:2px;
	 color:red;
}

table, tr, td {
  vertical-align: top;
  border-collapse: collapse; }

.ie-browser table, .mso-container table {
  table-layout: fixed; }

* {
  line-height: inherit; }

a[x-apple-data-detectors=true] {
  color: inherit !important;
  text-decoration: none !important; }

[owa] .img-container div, [owa] .img-container button {
  display: block !important; }

[owa] .fullwidth button {
  width: 100% !important; }

.ie-browser .col, [owa] .block-grid .col {
  display: table-cell;
  float: none !important;
  vertical-align: top; }

.ie-browser .num12, .ie-browser .block-grid, [owa] .num12, [owa] .block-grid {
  width: 500px !important; }

.ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {
  line-height: 100%; }

.ie-browser .mixed-two-up .num4, [owa] .mixed-two-up .num4 {
  width: 164px !important; }

.ie-browser .mixed-two-up .num8, [owa] .mixed-two-up .num8 {
  width: 328px !important; }

.ie-browser .block-grid.two-up .col, [owa] .block-grid.two-up .col {
  width: 250px !important; }

.ie-browser .block-grid.three-up .col, [owa] .block-grid.three-up .col {
  width: 166px !important; }

.ie-browser .block-grid.four-up .col, [owa] .block-grid.four-up .col {
  width: 125px !important; }

.ie-browser .block-grid.five-up .col, [owa] .block-grid.five-up .col {
  width: 100px !important; }

.ie-browser .block-grid.six-up .col, [owa] .block-grid.six-up .col {
  width: 83px !important; }

.ie-browser .block-grid.seven-up .col, [owa] .block-grid.seven-up .col {
  width: 71px !important; }

.ie-browser .block-grid.eight-up .col, [owa] .block-grid.eight-up .col {
  width: 62px !important; }

.ie-browser .block-grid.nine-up .col, [owa] .block-grid.nine-up .col {
  width: 55px !important; }

.ie-browser .block-grid.ten-up .col, [owa] .block-grid.ten-up .col {
  width: 50px !important; }

.ie-browser .block-grid.eleven-up .col, [owa] .block-grid.eleven-up .col {
  width: 45px !important; }

.ie-browser .block-grid.twelve-up .col, [owa] .block-grid.twelve-up .col {
  width: 41px !important; }

@media only screen and (min-width: 520px) {
  .block-grid {
    width: 500px !important; }
  .block-grid .col {
    display: table-cell;
    Float: none !important;
    vertical-align: top; }
    .block-grid .col.num12 {
      width: 500px !important; }
  .block-grid.mixed-two-up .col.num4 {
    width: 164px !important; }
  .block-grid.mixed-two-up .col.num8 {
    width: 328px !important; }
  .block-grid.two-up .col {
    width: 250px !important; }
  .block-grid.three-up .col {
    width: 166px !important; }
  .block-grid.four-up .col {
    width: 125px !important; }
  .block-grid.five-up .col {
    width: 100px !important; }
  .block-grid.six-up .col {
    width: 83px !important; }
  .block-grid.seven-up .col {
    width: 71px !important; }
  .block-grid.eight-up .col {
    width: 62px !important; }
  .block-grid.nine-up .col {
    width: 55px !important; }
  .block-grid.ten-up .col {
    width: 50px !important; }
  .block-grid.eleven-up .col {
    width: 45px !important; }
  .block-grid.twelve-up .col {
    width: 41px !important; } }

@media (max-width: 520px) {
  .block-grid, .col {
    min-width: 320px !important;
    max-width: 100% !important; }
  .block-grid {
    width: calc(100% - 40px) !important; }
  .col {
    width: 100% !important; }
    .col > div {
      margin: 0 auto; }
  img.fullwidth {
    max-width: 100% !important; } }
input[type=button] {
    width: 30%;
    background-color: #4CAF90;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=button]:hover {
    background-color:  #80ffbf;
}
        .st
{
background:#ffffe6;
height:200px;
width:300px;
position:absolute;
display:none;
}
          .st2
{
background:#ffffe6;
height:200px;
width:300px;
position:absolute;
display:none;
}
          .st3
{
background:#ffffe6;
height:200px;
width:300px;
 position:absolute;
display:none;
}
          .st4
{
background:#ffffe6;
height:200px;
width:300px;
position:absolute;
display:none;
}
          .st5
{
background:#ffffe6;
height:200px;
width:300px;
position:absolute;
display:none;
}
          .st6
{
background:#ffffe6;
height:200px;
width:300px;
position:absolute;
display:none;
}
          .st7
{
background:#ffffe6;
height:200px;
width:300px;
position:absolute;
display:none;
}
          .st8
{
background:#ffffe6;
height:200px;
width:300px;
position:absolute;
display:none;
}
    </style>
</head>
<!--[if mso]>
<body class="mso-container" style="background-color:#FFFFFF;">
<![endif]-->
<!--[if !mso]><!-->
<body class="clean-body" style="margin: 0;padding: 0;-webkit-text-size-adjust: 100%;background-color: #FFFFFF">
<!--<![endif]-->
  <div class="nl-container" style="min-width: 320px;Margin: 0 auto;background-color: #FFFFFF">
    <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td align="center" style="background-color: #FFFFFF;"><![endif]-->

    <div style="background-color:#D9D9D9;">
      <div style="Margin: 0 auto;min-width: 320px;max-width: 500px;width: 500px;width: calc(19000% - 98300px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;" class="block-grid two-up">
        <div style="border-collapse: collapse;display: table;width: 100%;">
          <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="background-color:#D9D9D9;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width: 500px;"><tr class="layout-full-width" style="background-color:transparent;"><![endif]-->

              <!--[if (mso)|(IE)]><td align="center" width="250" style=" width:250px; padding-right: 0px; padding-left: 0px; padding-top:15px; padding-bottom:15px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><![endif]-->
            <div class="col num6" style="Float: left;max-width: 320px;min-width: 250px;width: 250px;width: calc(35250px - 7000%);background-color: transparent;">
              <div style="background-color: transparent; width: 100% !important;">
              <!--[if (!mso)&(!IE)]><!--><div style="border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:15px; padding-bottom:15px; padding-right: 0px; padding-left: 0px;"><!--<![endif]-->


                    <div align="center" class="img-container center fullwidth" style="padding-right: 0px;  padding-left: 0px;">
<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px;" align="center"><![endif]-->
  <a href="https://beefree.io" target="_blank">
    <img class="center fullwidth" align="center" border="0" src="images/placeholder_01.png" alt="Image" title="Image" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;width: 100%;max-width: 250px" width="250">
  </a>
<!--[if mso]></td></tr></table><![endif]-->
</div>


              <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
              </div>
            </div>
              <!--[if (mso)|(IE)]></td><td align="center" width="250" style=" width:250px; padding-right: 0px; padding-left: 0px; padding-top:15px; padding-bottom:15px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><![endif]-->
            <div class="col num6" style="Float: left;max-width: 320px;min-width: 250px;width: 250px;width: calc(35250px - 7000%);background-color: transparent;">
              <div style="background-color: transparent; width: 100% !important;">
              <!--[if (!mso)&(!IE)]><!--><div style="border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:15px; padding-bottom:15px; padding-right: 0px; padding-left: 0px;"><!--<![endif]-->


                    <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top: 20px; padding-bottom: 20px;"><![endif]-->
<div style="padding-right: 0px; padding-left: 0px; padding-top: 20px; padding-bottom: 20px;">
	<div style="font-size:18px;line-height:27px;text-align:right;color:#888888;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;"><p style="margin: 0;font-size: 18px;line-height: 27px;text-align: right"><span style="font-size: 16px; line-height: 24px;"><strong><span style="line-height: 24px; font-size: 16px;"> Admin </span></strong></span></p></div>
</div>
<!--[if mso]></td></tr></table><![endif]-->


              <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
              </div>
            </div>
          <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
        </div>
      </div>
    </div>    <div style="background-color:#EDEDED;">
      <div style="Margin: 0 auto;min-width: 320px;max-width: 500px;width: 500px;width: calc(19000% - 98300px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;" class="block-grid ">
        <div style="border-collapse: collapse;display: table;width: 100%;">
          <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="background-color:#EDEDED;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width: 500px;"><tr class="layout-full-width" style="background-color:transparent;"><![endif]-->

              <!--[if (mso)|(IE)]><td align="center" width="500" style=" width:500px; padding-right: 10px; padding-left: 10px; padding-top:10px; padding-bottom:10px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><![endif]-->
            <div class="col num12" style="min-width: 320px;max-width: 500px;width: 500px;width: calc(18000% - 89500px);background-color: transparent;">
              <div style="background-color: transparent; width: 100% !important;">
              <!--[if (!mso)&(!IE)]><!--><div style="border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:10px; padding-bottom:10px; padding-right: 10px; padding-left: 10px;"><!--<![endif]-->


                    <div align="center" class="img-container center fullwidth" style="padding-right: 0px;  padding-left: 0px;">
<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px;" align="center"><![endif]-->
  <a href="https://beefree.io" target="_blank">
    <img class="center fullwidth" align="center" border="0" src="images/beautiful-luxury-hotel-swimming-pool-resort_1203-3371.jpg" alt="Image" title="Image" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;width: 100%;max-width: 480px" width="480">
  </a>
<!--[if mso]></td></tr></table><![endif]-->
</div>


              <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
              </div>
            </div>
          <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
        </div>
      </div>
    </div>    <div style="background-color:transparent;">
      <div style="Margin: 0 auto;min-width: 320px;max-width: 500px;width: 500px;width: calc(19000% - 98300px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;" class="block-grid ">
        <div style="border-collapse: collapse;display: table;width: 100%;">
          <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="background-color:transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width: 500px;"><tr class="layout-full-width" style="background-color:transparent;"><![endif]-->

              <!--[if (mso)|(IE)]><td align="center" width="500" style=" width:500px; padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><![endif]-->
            <div class="col num12" style="min-width: 320px;max-width: 500px;width: 500px;width: calc(18000% - 89500px);background-color: transparent;">
              <div style="background-color: transparent; width: 100% !important;">
              <!--[if (!mso)&(!IE)]><!--><div style="border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;"><!--<![endif]-->


                    <div style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;">
  <!--[if (mso)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px;padding-left: 10px; padding-top: 10px; padding-bottom: 10px;"><table width="100%" align="center" cellpadding="0" cellspacing="0" border="0"><tr><td><![endif]-->
  <div align="center"><div style="border-top: 10px solid transparent; width:100%;">&nbsp;</div></div>
  <!--[if (mso)]></td></tr></table></td></tr></table><![endif]-->
</div>


              <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
              </div>
            </div>
          <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
        </div>
      </div>
    </div>    <div style="background-color:transparent;">
      <div style="Margin: 0 auto;min-width: 320px;max-width: 500px;width: 500px;width: calc(19000% - 98300px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;" class="block-grid two-up">
        <div style="border-collapse: collapse;display: table;width: 100%;">
          <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="background-color:transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width: 500px;"><tr class="layout-full-width" style="background-color:transparent;"><![endif]-->

              <!--[if (mso)|(IE)]><td align="center" width="250" style=" width:250px; padding-right: 0px; padding-left: 0px; padding-top:20px; padding-bottom:20px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><![endif]-->
            <div class="col num6" style="Float: left;max-width: 320px;min-width: 250px;width: 250px;width: calc(35250px - 7000%);background-color: transparent;">
              <div style="background-color: transparent; width: 100% !important;">
              <!--[if (!mso)&(!IE)]><!--><div style="border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:20px; padding-bottom:20px; padding-right: 0px; padding-left: 0px;"><!--<![endif]-->


                    <div align="center" class="img-container center" style="padding-right: 0px;  padding-left: 0px;">
<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px;" align="center"><![endif]-->
  <a href="" target="_blank">
    <img class="center" align="center" border="0" src="images/close-up-of-gray-blanket-on-the-bed_1122-1470.jpg" alt="Image" title="Image" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;width: 100%;max-width: 180px" width="180">
  </a>
<!--[if mso]></td></tr></table><![endif]-->
</div>



                    <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top: 15px; padding-bottom: 0px;"><![endif]-->
<div style="padding-right: 0px; padding-left: 0px; padding-top: 15px; padding-bottom: 0px;">
	<div style="font-size:14px;line-height:17px;text-align:center;color:#555555;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;">

    <p style="margin: 0;font-size: 14px;line-height: 17px;text-align: center"><span style="font-size: 20px; line-height: 24px;"><strong><span style="font-family: arial, helvetica, sans-serif; line-height: 24px; font-size: 20px;">ROOMS</span></strong></span></p></div>
        <input class="but1" type="button" value="ADD" style="margin-left:25px;">
    <div class="st">
       <form method="post" action="/Project/Admin/controler/admin.php">
    Ro_id:  <input type="text" name="ROOM_NUM" style="badding-left:7px" >
           <br>
    Type:  <input type="text" name="type" style="badding-left:7px" ><br>
    State: <input type="text" name="state" style="badding-left:7px" ><br>
    Description: <input type="text" name="description" style="badding-left:7px"><br>
    price: <input type="text" name="price" style="badding-left:7px"><br> 
    Max_adult: <input type="text" name="max_adult" style="badding-left:7px"><br>
    Max_kids: <input type="text" name="max_kids" style="badding-left:7px"><br>
         <input type="submit" name="btnadd"  style="margin-left:50px;">   
       </form>  
    </div>
    <input type="button" value="update" class="but2" style="margin-left:50px;">
   <div class="st2">
       <form method="post" action="/Project/Admin/controler/admin.php">
    Ro_id:  <input type="text" name="ROOM_NUM1" style="badding-left:7px" >
           <br>
    Type:  <input type="text" name="type1" style="badding-left:7px" ><br>
    State: <input type="text" name="state1" style="badding-left:7px" ><br>
    Description: <input type="text" name="description1" style="badding-left:7px"><br>
    price: <input type="text" name="price1" style="badding-left:7px"><br> 
    Max_adult: <input type="text" name="max_adult1" style="badding-left:7px"><br>
    Max_kids: <input type="text" name="max_kids1" style="badding-left:7px"><br>
            <input type= "submit" name="updater"style="margin-left:40px;">  
            <input type="submit" value="deleteroom" name="deleteroom"  style="margin-left:20px;">  
       </form>
    </div>
</div>
<!--[if mso]></td></tr></table><![endif]-->



                    <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top: 5px; padding-bottom: 5px;"><![endif]-->
<div style="padding-right: 0px; padding-left: 0px; padding-top: 5px; padding-bottom: 5px;">
	<div style="font-size:14px;line-height:17px;text-align:center;color:#aaaaaa;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;"><p style="margin: 0;font-size: 14px;line-height: 17px;text-align: center">I'm a block of text and I like latin.</p></div>
</div>
<!--[if mso]></td></tr></table><![endif]-->



                    <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top: 10px; padding-bottom: 10px;"><![endif]-->
<div style="padding-right: 0px; padding-left: 0px; padding-top: 10px; padding-bottom: 10px;">
	<div style="font-size:12px;line-height:14px;text-align:center;color:#C7702E;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;"><p style="margin: 0;font-size: 12px;line-height: 14px;text-align: center"><a style="color:#C7702E" href="https://beefree.io" target="_blank"><strong><span style="font-size: 14px; font-family: arial, helvetica, sans-serif; line-height: 16px;"><span style="text-decoration: underline; font-size: 14px; line-height: 16px;">More info</span>&nbsp;?</span></strong></a></p></div>
</div>
<!--[if mso]></td></tr></table><![endif]-->


              <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
              </div>
            </div>
              <!--[if (mso)|(IE)]></td><td align="center" width="250" style=" width:250px; padding-right: 0px; padding-left: 10px; padding-top:20px; padding-bottom:30px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><![endif]-->
            <div class="col num6" style="Float: left;max-width: 320px;min-width: 250px;width: 250px;width: calc(35250px - 7000%);background-color: transparent;">
              <div style="background-color: transparent; width: 100% !important;">
              <!--[if (!mso)&(!IE)]><!--><div style="border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:20px; padding-bottom:30px; padding-right: 0px; padding-left: 10px;"><!--<![endif]-->


                    <div align="center" class="img-container center" style="padding-right: 0px;  padding-left: 0px;">
<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px;" align="center"><![endif]-->
  <a href="https://beefree.io" target="_blank">
    <img class="center" align="center" border="0" src="images/beautiful-luxury-hotel-swimming-pool-resort_1203-3371.jpg" alt="Image" title="Image" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;width: 100%;max-width: 180px" width="180">
  </a>
<!--[if mso]></td></tr></table><![endif]-->
</div>



                    <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top: 15px; padding-bottom: 0px;"><![endif]-->
<div style="padding-right: 0px; padding-left: 0px; padding-top: 15px; padding-bottom: 0px;">
	<div style="font-size:14px;line-height:17px;text-align:center;color:#555555;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;"><p style="margin: 0;font-size: 14px;line-height: 17px;text-align: center"><span style="font-size: 20px; line-height: 24px;"><strong><span style="font-family: arial, helvetica, sans-serif; line-height: 24px; font-size: 20px;">TRIPS</span></strong></span></p></div>
        <input class="but3" type="button" value="ADD" style="margin-left:25px;">
    <div class="st3"  >
          <form method="post" action="/Project/Admin/controler/admin.php">
    T_id:  <input type="text" name="T_id" style="badding-left:7px" >
           <br>
    Description:<input type="text" name="descriptiont" style="badding-left:7px">
    Duration:<input type="text" name="duration" style="badding-left:7px" ><br>
    discount:<input type="text" name="discount" style="badding-left:7px" ><br>
    deadline:<input type="text" name="deadline"  style="badding-left:7px" ><br>  
     Max_num: <input type="text" name="max_num" style="badding-left:7px"><br>    price: <input type="text" name="pricet" style="badding-left:7px"><br> 
            <input type="submit" name="addtrip" style="margin-left:50px;">   
       </form> 
    </div>
    <input class="but4" type="button" value="update" style="margin-left:50px;">
    <div class="st4">
           <form method="post" action="/Project/Admin/controler/admin.php">
    T_id:  <input type="text" name="T_id2" style="badding-left:7px" > <br>
    Description:<input type="text" name="description2" style="badding-left:7px"><br>
    Duration:<input type="text" name="duration1" style="badding-left:7px" ><br>
    discount:<input type="text" name="discount1" style="badding-left:7px" ><br>
    deadline:<input type="text" name="deadline1"  style="badding-left:7px" ><br>  
     Max_num: <input type="text" name="max_num1" style="badding-left:7px"><br>    price: <input type="text" name="price1" style="badding-left:7px"><br> 
             <input type="submit" value="updatetrip" name="updatetrip" style="margin-left:40px;">  
            <input type="submit" value="deletertrip" name="deletetrip" style="margin-left:20px;">  
       </form> 
    <form>
    </div>
</div>
<!--[if mso]></td></tr></table><![endif]-->



                    <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top: 5px; padding-bottom: 5px;"><![endif]-->
<div style="padding-right: 0px; padding-left: 0px; padding-top: 5px; padding-bottom: 5px;">
	<div style="font-size:14px;line-height:17px;text-align:center;color:#aaaaaa;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;"><p style="margin: 0;font-size: 14px;line-height: 17px;text-align: center">I'm a block of text and I like latin.</p></div>
</div>
<!--[if mso]></td></tr></table><![endif]-->



                    <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top: 10px; padding-bottom: 10px;"><![endif]-->
<div style="padding-right: 0px; padding-left: 0px; padding-top: 10px; padding-bottom: 10px;">
	<div style="font-size:12px;line-height:14px;text-align:center;color:#C7702E;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;"><p style="margin: 0;font-size: 12px;line-height: 14px;text-align: center"><a style="color:#C7702E" href="https://beefree.io" target="_blank"><strong><span style="font-size: 14px; font-family: arial, helvetica, sans-serif; line-height: 16px;"><span style="text-decoration: underline; font-size: 14px; line-height: 16px;">More info</span>&nbsp;?</span></strong></a></p></div>
</div>
<!--[if mso]></td></tr></table><![endif]-->


              <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
              </div>
            </div>
          <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
        </div>
      </div>
    </div>    <div style="background-color:transparent;">
      <div style="Margin: 0 auto;min-width: 320px;max-width: 500px;width: 500px;width: calc(19000% - 98300px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;" class="block-grid ">
        <div style="border-collapse: collapse;display: table;width: 100%;">
          <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="background-color:transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width: 500px;"><tr class="layout-full-width" style="background-color:transparent;"><![endif]-->

              <!--[if (mso)|(IE)]><td align="center" width="500" style=" width:500px; padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><![endif]-->
            <div class="col num12" style="min-width: 320px;max-width: 500px;width: 500px;width: calc(18000% - 89500px);background-color: transparent;">
              <div style="background-color: transparent; width: 100% !important;">
              <!--[if (!mso)&(!IE)]><!--><div style="border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;"><!--<![endif]-->


                    <div style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 20px;">
  <!--[if (mso)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px;padding-left: 10px; padding-top: 10px; padding-bottom: 20px;"><table width="100%" align="center" cellpadding="0" cellspacing="0" border="0"><tr><td><![endif]-->
  <div align="center"><div style="border-top: 1px solid #dddddd; width:100%;">&nbsp;</div></div>
  <!--[if (mso)]></td></tr></table></td></tr></table><![endif]-->
</div>


              <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
              </div>
            </div>
          <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
        </div>
      </div>
    </div>    <div style="background-color:transparent;">
      <div style="Margin: 0 auto;min-width: 320px;max-width: 500px;width: 500px;width: calc(19000% - 98300px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;" class="block-grid two-up">
        <div style="border-collapse: collapse;display: table;width: 100%;">
          <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="background-color:transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width: 500px;"><tr class="layout-full-width" style="background-color:transparent;"><![endif]-->

              <!--[if (mso)|(IE)]><td align="center" width="250" style=" width:250px; padding-right: 0px; padding-left: 0px; padding-top:20px; padding-bottom:20px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><![endif]-->
            <div class="col num6" style="Float: left;max-width: 320px;min-width: 250px;width: 250px;width: calc(35250px - 7000%);background-color: transparent;">
              <div style="background-color: transparent; width: 100% !important;">
              <!--[if (!mso)&(!IE)]><!--><div style="border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:20px; padding-bottom:20px; padding-right: 0px; padding-left: 0px;"><!--<![endif]-->


                    <div align="center" class="img-container center" style="padding-right: 0px;  padding-left: 0px;">
<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px;" align="center"><![endif]-->
  <a href="https://beefree.io" target="_blank">
    <img class="center" align="center" border="0" src="images/travel-banners_23-2147515682.jpg" alt="Image" title="Image" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;width: 100%;max-width: 180px" width="180">
  </a>
<!--[if mso]></td></tr></table><![endif]-->
</div>



                    <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top: 15px; padding-bottom: 0px;"><![endif]-->
<div style="padding-right: 0px; padding-left: 0px; padding-top: 15px; padding-bottom: 0px;">
	<div style="font-size:14px;line-height:17px;text-align:center;color:#555555;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;"><p style="margin: 0;font-size: 14px;line-height: 17px;text-align: center"><span style="font-size: 20px; line-height: 24px;"><strong><span style="font-family: arial, helvetica, sans-serif; line-height: 24px; font-size: 20px;">OFFERS</span></strong></span></p></div>
        <input class="but5" type="button" value="ADD" style="margin-left:25px;">
    <div class="st5">
    <form method="post" action="/Project/Admin/controler/admin.php" >
    off_id:  <input type="text" name="offer_id" style="badding-left:7px" > <br>
    content:<input type="text" name="content" style="badding-left:7px" ><br>
    discount:<input type="text" name="discount" style="badding-left:7px" ><br>
   price: <input type="text" name="price" style="badding-left:7px"><br> 
   date: <input type="text" name="date" style="badding-left:7px"><br> 
             <input type="submit" value="addffer" name="addoffer"  style="margin-left:40px;">   
       </form> 
    </div>
    <input class="but6" type="button" value="update" style="margin-left:50px;">
    <div class="st6">
       <form method="post" action="/Project/Admin/controler/admin.php">
    off_id:  <input type="text" name="offer_id1" style="badding-left:7px" > <br>
    content:<input type="text" name="content1" style="badding-left:7px" ><br>
    discount:<input type="text" name="discount1" style="badding-left:7px" ><br>
   price: <input type="text" name="price3" style="badding-left:7px"><br> 
   date: <input type="text" name="date1" style="badding-left:7px"><br> 
             <input type="submit" value="updateoffer" name="updateoffer" style="margin-left:40px;">  
            <input type="submit" value="deleteoffer" name="deleteoffer"  style="margin-left:20px;">  
       </form>
    </div>
</div>
<!--[if mso]></td></tr></table><![endif]-->



                    <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top: 5px; padding-bottom: 5px;"><![endif]-->
<div style="padding-right: 0px; padding-left: 0px; padding-top: 5px; padding-bottom: 5px;">
	<div style="font-size:14px;line-height:17px;text-align:center;color:#aaaaaa;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;"><p style="margin: 0;font-size: 14px;line-height: 17px;text-align: center">I'm a block of text and I like latin.</p></div>
</div>
<!--[if mso]></td></tr></table><![endif]-->



                    <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top: 10px; padding-bottom: 10px;"><![endif]-->
<div style="padding-right: 0px; padding-left: 0px; padding-top: 10px; padding-bottom: 10px;">
	<div style="font-size:12px;line-height:14px;text-align:center;color:#C7702E;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;"><p style="margin: 0;font-size: 12px;line-height: 14px;text-align: center"><a style="color:#C7702E" href="https://beefree.io" target="_blank"><strong><span style="font-size: 14px; font-family: arial, helvetica, sans-serif; line-height: 16px;"><span style="text-decoration: underline; font-size: 14px; line-height: 16px;">More info</span>&nbsp;?</span></strong></a></p></div>
</div>
<!--[if mso]></td></tr></table><![endif]-->


              <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
              </div>
            </div>
              <!--[if (mso)|(IE)]></td><td align="center" width="250" style=" width:250px; padding-right: 0px; padding-left: 10px; padding-top:20px; padding-bottom:30px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><![endif]-->
            <div class="col num6" style="Float: left;max-width: 320px;min-width: 250px;width: 250px;width: calc(35250px - 7000%);background-color: transparent;">
              <div style="background-color: transparent; width: 100% !important;">
              <!--[if (!mso)&(!IE)]><!--><div style="border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:20px; padding-bottom:30px; padding-right: 0px; padding-left: 10px;"><!--<![endif]-->


                    <div align="center" class="img-container center" style="padding-right: 0px;  padding-left: 0px;">
<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px;" align="center"><![endif]-->
  <a href="https://beefree.io" target="_blank">
    <img class="center" align="center" border="0" src="images/hotel-employees-pack_23-2147498573.jpg" alt="Image" title="Image" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;width: 100%;max-width: 180px" width="180">
  </a>
<!--[if mso]></td></tr></table><![endif]-->
</div>



                    <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top: 15px; padding-bottom: 0px;"><![endif]-->
<div style="padding-right: 0px; padding-left: 0px; padding-top: 15px; padding-bottom: 0px;">

	<div style="font-size:14px;line-height:17px;text-align:center;color:#555555;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;"><p style="margin: 0;font-size: 14px;line-height: 17px;text-align: center"><span style="font-size: 20px; line-height: 24px;"><strong><span style="font-family: arial, helvetica, sans-serif; line-height: 24px; font-size: 20px;">STUFF</span></strong></span></p></div>
        <input class="but7" type="button" value="ADD" style="margin-left:25px;">
    <div class="st7">
       <form method="post" action="/Project/Admin/controler/admin.php">
      SSN:  <input type="text" name="SSN" style="badding-left:7px" > <br>
      Fname:<input type="text" name="Fname" style="badding-left:7px" ><br>
      Lname:<input type="text" name="Lname" style="badding-left:7px" ><br>
     password: <input type="text" name="password" style="badding-left:7px"><br> 
    BDate: <input type="date" name="BDate" style="badding-left:7px"><br>
    Phone: <input type="text" name="Phone" style="badding-left:7px"><br>
    Stype: <input type="text" name="Stype" style="badding-left:7px"><br>
    Email: <input type="text" name="Email" style="badding-left:7px"><br>
             <input type="submit" value="addstuff" name="addstuff" style="margin-left:40px;">  
       </form>
    </div>
    <input class="but8" type="button" value="update" style="margin-left:50px;">
    <div class="st8">
         <form method="post" action="/Project/Admin/controler/admin.php">
      SSN:  <input type="text" name="SSN1" style="badding-left:7px" > <br>
      Fname:<input type="text" name="Fname1" style="badding-left:7px" ><br>
      Lname:<input type="text" name="Lname1" style="badding-left:7px" ><br>
     password: <input type="text" name="password1" style="badding-left:7px"><br> 
    BDate: <input type="date" name="BDate1" style="badding-left:7px"><br>
    Phone: <input type="text" name="Phone1" style="badding-left:7px"><br>
    Stype: <input type="text" name="Stype1" style="badding-left:7px"><br>
    Email: <input type="text" name="Email1" style="badding-left:7px"><br>
             <input type="submit" value="updatestuff" name="updatestuff" style="margin-left:40px;">  
            <input type="submit" value="deletestuff" name="deletestuff" style="margin-left:20px;">  
       </form>
    </div>
</div>
<!--[if mso]></td></tr></table><![endif]-->



                    <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top: 5px; padding-bottom: 5px;"><![endif]-->
<div style="padding-right: 0px; padding-left: 0px; padding-top: 5px; padding-bottom: 5px;">
	<div style="font-size:14px;line-height:17px;text-align:center;color:#aaaaaa;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;"><p style="margin: 0;font-size: 14px;line-height: 17px;text-align: center">I'm a block of text and I like latin.</p></div>
</div>
<!--[if mso]></td></tr></table><![endif]-->



                    <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top: 10px; padding-bottom: 10px;"><![endif]-->
<div style="padding-right: 0px; padding-left: 0px; padding-top: 10px; padding-bottom: 10px;">
	<div style="font-size:12px;line-height:14px;text-align:center;color:#C7702E;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;"><p style="margin: 0;font-size: 12px;line-height: 14px;text-align: center"><a style="color:#C7702E" href="https://beefree.io" target="_blank"><strong><span style="font-size: 14px; font-family: arial, helvetica, sans-serif; line-height: 16px;"><span style="text-decoration: underline; font-size: 14px; line-height: 16px;">More info</span>&nbsp;?</span></strong></a></p></div>

</div>
<!--[if mso]></td></tr></table><![endif]-->


              <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
              </div>
            </div>
          <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
        </div>
      </div>
    </div>    <div style="background-color:transparent;">
      <div style="Margin: 0 auto;min-width: 320px;max-width: 500px;width: 500px;width: calc(19000% - 98300px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;" class="block-grid ">
        <div style="border-collapse: collapse;display: table;width: 100%;">
          <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="background-color:transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width: 500px;"><tr class="layout-full-width" style="background-color:transparent;"><![endif]-->

              <!--[if (mso)|(IE)]><td align="center" width="500" style=" width:500px; padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><![endif]-->
            <div class="col num12" style="min-width: 320px;max-width: 500px;width: 500px;width: calc(18000% - 89500px);background-color: transparent;">
              <div style="background-color: transparent; width: 100% !important;">
              <!--[if (!mso)&(!IE)]><!--><div style="border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;"><!--<![endif]-->


                    <div style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;">
  <!--[if (mso)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px;padding-left: 10px; padding-top: 10px; padding-bottom: 10px;"><table width="100%" align="center" cellpadding="0" cellspacing="0" border="0"><tr><td><![endif]-->
  <div align="center"><div style="border-top: 10px solid transparent; width:100%;">&nbsp;</div></div>
  <!--[if (mso)]></td></tr></table></td></tr></table><![endif]-->
</div>


              <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
              </div>
            </div>
          <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
        </div>
      </div>
    </div>    <div style="background-color:#444444;">
      <div style="Margin: 0 auto;min-width: 320px;max-width: 500px;width: 500px;width: calc(19000% - 98300px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;" class="block-grid ">
        <div style="border-collapse: collapse;display: table;width: 100%;">
          <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="background-color:#444444;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width: 500px;"><tr class="layout-full-width" style="background-color:transparent;"><![endif]-->

              <!--[if (mso)|(IE)]><td align="center" width="500" style=" width:500px; padding-right: 0px; padding-left: 0px; padding-top:25px; padding-bottom:25px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><![endif]-->
            <div class="col num12" style="min-width: 320px;max-width: 500px;width: 500px;width: calc(18000% - 89500px);background-color: transparent;">
              <div style="background-color: transparent; width: 100% !important;">
              <!--[if (!mso)&(!IE)]><!--><div style="border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:25px; padding-bottom:25px; padding-right: 0px; padding-left: 0px;"><!--<![endif]-->



<div align="center" style="Margin-right: 10px; Margin-left: 10px; Margin-bottom: 10px;">
  <div style="line-height:10px;font-size:1px">&nbsp;</div>
  <div style="display: table; max-width:131px;">
  <!--[if (mso)|(IE)]><table width="131" align="center" cellpadding="0" cellspacing="0" border="0" style="border-collapse:collapse; mso-table-lspace: 0pt;mso-table-rspace: 0pt; width:131px;"><tr><td width="37" style="width:37px;" valign="top"><![endif]-->
    <table align="left" border="0" cellspacing="0" cellpadding="0" width="32" height="32" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;Margin-right: 5px">
      <tbody><tr style="vertical-align: top"><td align="left" valign="middle" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">
        <a href="https://www.facebook.com/" title="Facebook" target="_blank">
          <img src="images/facebook.png" alt="Facebook" title="Facebook" width="32" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important">
        </a>
      </td></tr>
    </tbody></table>
      <!--[if (mso)|(IE)]></td><td width="37" style="width:37px;" valign="top"><![endif]-->
    <table align="left" border="0" cellspacing="0" cellpadding="0" width="32" height="32" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;Margin-right: 5px">
      <tbody><tr style="vertical-align: top"><td align="left" valign="middle" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">
        <a href="http://twitter.com/" title="Twitter" target="_blank">
          <img src="images/twitter.png" alt="Twitter" title="Twitter" width="32" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important">
        </a>
      </td></tr>
    </tbody></table>
      <!--[if (mso)|(IE)]></td><td width="37" style="width:37px;" valign="top"><![endif]-->
    <table align="left" border="0" cellspacing="0" cellpadding="0" width="32" height="32" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;Margin-right: 0">
      <tbody><tr style="vertical-align: top"><td align="left" valign="middle" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">
        <a href="http://plus.google.com/" title="Google+" target="_blank">
          <img src="images/googleplus.png" alt="Google+" title="Google+" width="32" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important">
        </a>
      </td></tr>
    </tbody></table>
    <!--[if (mso)|(IE)]></td></tr></table><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td>&nbsp;</td></tr></table><![endif]-->
  </div>
</div>



                    <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;"><![endif]-->
<div style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;">
	<div style="font-size:18px;line-height:22px;text-align:center;color:#bbbbbb;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;"><p style="margin: 0;font-size: 18px;line-height: 22px;text-align: center"><span style="font-size: 14px; line-height: 16px;">This is a sample template from BEE free email editor</span><br><span style="font-size: 14px; line-height: 16px;">Visit <span style="text-decoration: underline; line-height: 16px; font-size: 14px;"><strong><a style="color:#C7702E" href="https://beefree.io" target="_blank">beefree.io</a></strong></span>&nbsp;to create beautiful and rich email messages at no cost.</span></p></div>
</div>
<!--[if mso]></td></tr></table><![endif]-->


              <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
              </div>
            </div>
          <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
        </div>
      </div>
    </div>   <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
  </div>


</body></html>
SELECT url.link,usertype.type from usertype INNER JOIN url on usertype.U_ID=url.ID  INNER JOIN user_url ON url.ID=user_url.url_id INNER join users ON users.ssn=user_url.user_id where users.email='mahmod@sunst.com' and users.password='26383693'
