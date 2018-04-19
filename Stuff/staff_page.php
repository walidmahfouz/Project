<?php 
include 'report.php';
require 'include.php';
?>



<!DOCTYPE html>


<html>
<head>
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
             <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
             <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script>

$(document).ready(function(){
	
    

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
    
	$("#se").hide();
	$("#re").hide();
    $("#button1").click(function(){
        $("#se").toggle();
		$("#re").hide();
    });
    
    $("#button2").click(function(){
	$("#se").hide();
	$("#re").toggle();
    });
});
</script>
    
    
    
<style> 
    body{
        background-color: darkseagreen;
        }
    
    
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
    
#not{
    width: 30%;
    padding: 26px 20px;
    margin: 80px 20px;
    border: none;
    border-radius: 4px;
    background-color: #f1f1f1;
    float: right;
    }
    

    
     #button0 {
  display: <?php echo $display2 ;?>;
  padding: 15px 25px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
     margin: 100px 630px;
}

#button0:hover {background-color: #3e8e41}

#button0:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
  
    
    
    
    
    
    
    
    
 #button1 {
  display: <?php echo $display2 ;?>;
  padding: 15px 25px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
     margin: 0px 270px;
}

#button1:hover {background-color: #3e8e41}

#button1:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
    
    #button2 {
  display: <?php echo $display1 ;?>;
  padding: 15px 25px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
  float:right;
  margin: 0px 270px;
}

#button2:hover {background-color: #3e8e41}

#button2:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
    
    
    input[type=text], select {
    width: 15%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

    
      textarea {
    width: 100%;
    height: 150px;
    padding: 12px 20px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color: #f8f8f8;
    font-size: 16px;
    resize: none;
}
input[type=submit] {
    width: 10%;
    height: 40px;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    text-align: center;
    margin: 0px 500px;
    }
input[type=submit]:hover {
    background-color: #45a049;
}

div {
    width: 80%;
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
    margin: 100px;
}
    
  
    
</style>
</head>
<body>

<!--<form>
  <select id="not" name="not">
    <option value="">notification</option>
    <option value="">Cccc</option>
    <option value="">aaa</option>
  </select>
</form>-->
    <form method="post" action="formhandel.php">
        <button  id="button0"  name="notfication">notification</button>
    </form>
     <br><br> <br><br><br><br> <br><br> <br><br>
     <button  id="button1" >send report</button>
     <button id="button2" >recieve report</button>
    
       <div id="re">
      <form  method ="post" action="stuff.php">
        <input type="submit" name="okay" value="shownow">
     </form>
    </div>
    
    <br><br> <br><br><br><br> 
    
    
    <div id="se">
  <form method ="post" action="formhandel.php">
    <label for="tt ">to</label>
      <br>
    <input type="text" id="tt" name="text" placeholder="">
      <br>
    <label for="from">from</label>
      <br>
    <input type="text" id="from" name="from" placeholder="">
      <br>
    <label for="content ">content</label>
      <br>
    <input type="text" id="content" name="content" placeholder="">
      <br>
      <label for="date ">date</label>
      <br>
    <input type="date" id="date" name="date" placeholder="">
      <br><br>
    <label for="supject">subject</label>
      <br><br>
    <textarea name="message"></textarea>
  <br><br>
    <input type="submit" value="send" name="send">
  </form>
</div>
    

    <!-- <div id="re">
  <form  method ="post" action="formhandel.php">
    <label for="recieve " readonly>to</label>
      <br>
    <input type="text" id="to" name="to1"  value=" " readonly>
<br>
    <label for="from">from</label>
      <br>
    <input type="text" id="from" name="from1" value="" readonly>
<br>
          <label for="content ">content</label>
      <br>
    <input type="text" id="content" name="content1" placeholder="">
      <br>
      <label for="date ">date</label>
      <br>
    <input type="date" id="date" name="date1" placeholder="">
      <br><br>
    <label for="subject">subject</label>
      <br><br>
    <textarea name="message1" readonly></textarea>
  <br><br>
    <input type="submit" value="okay" name="okay">
  </form>
</div>-->
   
    
</body>
</html>