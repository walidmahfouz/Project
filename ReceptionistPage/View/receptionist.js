$(document).ready(function()
{
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
	 $("div#report ").on({
		 mouseenter:function(){
			 $(this).css({"background-color":"white","box-shadow":"0px 0px 50px red","border":"1px solid rgba(36, 68, 85,.5)"});
			 $("#report a").css({"color":"red"});
		 } ,
         mouseleave:function(){
             $(this).css({"background-color":"rgba(36, 68, 85,.7)","box-shadow":"0px 0px 25px rgb(247, 237, 0)","border":"2px solid white"});
			 $("#report a").css({"color":"white"});
		 } 
	 });
	 $("div#notification ").on({
		 mouseenter:function(){
			 $(this).css({"background-color":"white","box-shadow":"0px 0px 50px red","border":"1px solid rgba(36, 68, 85,.5)"});
			 $("#notification a i").css({"color":"red"});
		 } ,
         mouseleave:function(){
             $(this).css({"background-color":"rgba(36, 68, 85,.7)","box-shadow":"0px 0px 25px rgb(247, 237, 0)","border":"2px solid white"});
			 $("#notification a i").css({"color":"white"});
		 } ,
		 click:function(){
			 $("div#reservations").slideDown(1000);
			 $("div.confirmation").hide();
			 $("div.tripreservation").slideUp();
			 $("div.showreservation button ").css("visibility","visible");
			 $("div.showtrep button ").css("visibility","visible");
			 $("div.guestresevation").css("visibility","hidden");
			 $(".emptyroom ,.nearcheckout").css("visibility","hidden");
		 }	 
	 });
	 $("div#confirmation ").on({
		 mouseenter:function(){
			 $(this).css({"background-color":"white","box-shadow":"0px 0px 50px red","border":"1px solid rgba(36, 68, 85,.5)"});
			 $("#confirmation a").css({"color":"red"});
		 } ,
         mouseleave:function(){
             $(this).css({"background-color":"rgba(36, 68, 85,.7)","box-shadow":"0px 0px 25px rgb(247, 237, 0)","border":"2px solid white"});
			  $("#confirmation a").css({"color":"white"});
			  
		 } ,
		 click:function(){
			 $.ajax ({	
		          
			      url : " ../Controller/htmlconfirmation.php",
			      type : "post",
			      dataType : "html",
			      cache : false,
			      async : true,
                  success : function(rt,st,xhr)
			             {
                             if(st=="error")
							 {
								 alert("Error :"+xhr.status+" "+xhr.statusText);
							 }
							 else
								 
							 {
                                 $("#formconfirmation fieldset").html(rt);
							 }
			             }
		        });
			 $("div.confirmation").slideDown(1000);
			 $("div#reservations").hide(); 
             $("div.confirmation input[type=email]").val("");
			 $("div.tripreservation").slideUp();
		 }	 
	 });
   $("div.showreservation button ").on({
	
		 click:function(){
			 $.ajax ({	
		          
			      url : "../Controller/Reservationphp.php",
			      type : "post",
			      dataType : "html",
			      cache : false,
			      async : true,
                  success : function(rt,st,xhr)
			             {
                             if(st=="error")
							 {
								 alert("Error :"+xhr.status+" "+xhr.statusText);
							 }
							 else
								 
							 {
                                 $(".guestresevation  form .inform").html(rt);
							 }
			             }
		        });
			 $("div.tripreservation").slideUp();
			 $(this).css("visibility","hidden");
			 $("div.guestresevation").css("visibility","visible");
			 $(".emptyroom ,.nearcheckout").css("visibility","visible"); 
		 }	 
	 });
	 $("div.showtrep button ").on({
	
		 click:function(){
			 $("#reservations").slideUp();
			 $(".tripreservation").slideDown(50);
		 }	 
	 });
	 $("div.guestresevation input[type=submit] ").on({
	
		 click:function(){	
		 
		   var dataform = $("div.guestresevation form").serialize();
			
              $.ajax ({	
		          
			      url : "../Controller/reservationConfirmation.php",
			      type : "post",
				  data: dataform,
			      dataType : "html",
			      cache : false,
			      async : true,
                  success : function(rt,st,xhr)
			             {
                             if(st=="error")
							 {
								 alert("Error :"+xhr.status+" "+xhr.statusText);
							 }
							 else
								 
							 {
                                 $("#formconfirmation fieldset").html(rt);
							 }
			             }
		        });		 
             $(".guestresevation").css("visibility","hidden");
			 $("div.confirmation").show();
			 $("div.showreservation button ").css("visibility","visible");
			 $(".showtrep").show();
			 $("#reservations").hide(100);
			 return false;
		 }	 
	 });
	 $("div.emptyroom input[type=submit]").on({
		    
		 click:function(){
			 
			var dataform = $("form#formemptyroom").serialize();
			 $.ajax ({	
		          
			      url : "../Controller/checkinRecephp.php",
			      type : "post",
				  data : dataform,
			      dataType : "html",
			      cache : false,
			      async : true,
                  success : function(rt,st,xhr)
			             {
                             if(st=="error")
							 {
								 alert("Error :"+xhr.status+" "+xhr.statusText);
							 }
							 else
								 
							 {
                                 $("div.emptyroom .holdtable table tbody").html(rt);
							 }
			             }
		        });
			
			 $("div.emptyroom .holdtable").slideDown(100);
			 $("div.emptyroom input[name=roomtype]").slideUp("slow");
			 $("div.emptyroom button").slideDown("slow");
			 $(this).slideUp("slow");
			 
			 return false;
		 }
	 });
	$("div.emptyroom button").on({
	
		 click:function(){
			 
			 $(this).hide("slow");
		     $("div.emptyroom .holdtable").slideUp(100);
			 $("div.emptyroom input[name=roomtype]").show("fast");
			 $("div.emptyroom input[type=submit]").show("fast");
		 }
     });		 
	  $("div.nearcheckout button").on({
	     
		 click:function(){
			 
			$.ajax ({	
		 
			      url : "../Controller/Nearistcheckoutphp.php",
			      type : "post",
			      dataType : "html",
			      cache : false,
			      async : true,
                  success : function(rt,st,xhr)
			             {
                             if(st=="error")
							 {
								 alert("Error :"+xhr.status+" "+xhr.statusText);
							 }
							 else
							 {
								 $("div.nearcheckout .holdtable table tbody").html(rt);
							 }
			             }
		        });
			 $("div.nearcheckout .holdtable").slideToggle(100);
		 }
		 
	 });
	 $("div.entertripid input[type=submit]").on({
	
		 click:function(){
			 var dataform=$("div.entertripid form").serialize();
		    $.ajax ({	
		 
			      url : "../Controller/checkinRecephp.php",
			      type : "post",
			      data : dataform,
			      dataType : "html",
			      cache : false,
			      async : true,
                  success : function(rt,st,xhr)
			             {
                             if(st=="error")
							 {
								 alert("Error :"+xhr.status+" "+xhr.statusText);
							 }
							 else
							 {
								 $('div.trip .inform').html(rt);
							 }
			             }
		        });
		     
			 $("div.trip").css("visibility","visible");
			 $(".entertripid").css("visibility","hidden");
			 return false;
		 }	 
	 });
	 $("div.trip input[type=submit]").on({
	
		 click:function(){
			  var dataform=$("div.trip form").serialize();
		    $.ajax ({	
		 
			      url : "../Controller/checkinRecephp.php",
			      type : "post",
			      data : dataform,
			      dataType : "html",
			      cache : false,
			      async : true,
                  success : function(rt,st,xhr)
			             {
                             if(st=="error")
							 {
								 alert("Error :"+xhr.status+" "+xhr.statusText);
							 }	
			             }
		        });
		     
			 $("div.trip").css("visibility","hidden");
			 $(".tripreservation").slideUp();
			 $(".showtrep").css("visibility","visible"); 
			 $(".entertripid").css("visibility","visible");
			 return false;
		 }	 
	 });
	 $("form#formcheckout").on('submit',function(e)
	    {
		    var dataform=$(this).serialize();
		    $.ajax ({	
		 
			      url : "../Controller/checkinRecephp.php",
			      type : "post",
			      data : dataform,
			      dataType : "html",
			      cache : false,
			      async : true,
                  success : function(rt,st,xhr)
			             {
                             if(st=="error")
							 {
								 alert("Error :"+xhr.status+" "+xhr.statusText);
							 }
							 else
							 {
								 	 $("#response span").html(rt);
							 }
			             }
		        });
					$("#response").show();
		     return false;
		
	     }); 
	 $("form#formcheckINsomeone").on('submit',function(e)
	    {
		    var dataform=$(this).serialize();
		    $.ajax ({	
		 
			      url : "../Controller/checkinRecephp.php",
			      type : "post",
			      data : dataform,
			      dataType : "html",
			      cache : false,
			      async : true,
                  success : function(rt,st,xhr)
			             {
                             if(st=="error")
							 {
								 alert("Error :"+xhr.status+" "+xhr.statusText);
							 }
							 else
							 {
								 $("#response span").html(rt);
							 }
			             }
		        });
				
				$("#response").show();
		     return false;
		     
	     }); 
	$("div.confirmation form input[type=submit]").on({
		
		click:function()
		{
		 var dataform=$("div.confirmation form#formconfirmation").serialize();
		    $.ajax ({	
		 
			      url : "../Controller/checkinRecephp.php",
			      type : "post",
			      data : dataform,
			      dataType : "html",
			      cache : false,
			      async : true,
                  success : function(rt,st,xhr)
			             {
                             if(st=="error")
							 {
								 alert("Error :"+xhr.status+" "+xhr.statusText);
							 }
							 else
							 {
								 alert(rt);
							 }
			             }
		        });
				
		     return false;
		}
		
	});
	$("#response button").on({
		
		click:function()
		{
		   	$("#response").hide();
		}
		
	});
});
