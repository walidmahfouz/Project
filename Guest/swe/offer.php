<?php

$servername = "localhost";
$username = "root";
$password = "";
$database= "projectsoftwear";
$connect=mysqli_connect($servername,$username,$password,$database);
if(!$connect)
{
	echo ":))";
}
else
{
	echo"welcome";

}


	class offers
	{
		private $discount;
		private $price;
		private $content;
		private $date;
		private $id;
		private $today;
		private $deadline;
		private $check=false;

		public function checkOffer($deadline)
		{
			if ($this->today <= $deadline)
			{
				$this->check=true;
			}
			else
			{
				$this->check = false;
			}
		}

		public function AcceptOffer($content, $deadline, $discount=0, $price )
		{

			
                 if($this->check===true) 
			     {
				     $sql = "insert into offer (Content,deadline,Discount ,Price)
					 values ($content, $deadline, $discount, $price)";
				
			        mysql_query($sql);
		             
			     }
			     else
			     {
				     return false;
			     }
				
		    
		}
		
		 function BookThisOffer($offerid, $guestid, $accept)
		{

$servername = "localhost";
$username = "root";
$password = "";
$database= "projectsoftwear";
$connect=mysqli_connect($servername,$username,$password,$database);
if(!$connect)
{
	echo ":))";
}
else
{
	echo"welcome";

}


			$sql = mysql_query("INSERT INTO bookoffer (B_OfferID ,B_GuestId, Accept)
					VALUES ($offerid, $guestid, $accept)");	


		         
		}

		public function setContent ($content)
		{
			$this->content=$content;
		}
	
		public function setDeadline ($deadline)
		{
			$this->deadline=$deadline;
		}

		public function setPrice ($price)
		{
			$this->price=$price;
		}

		public function setDiscount ($discount)
		{
			$this->discount=$discount;
		}

		public function getContent ()
		{
			return $this->content;
		}

		public function getDeadline ()
		{
			return $this->deadline;
		}

		public function getPrice ()
		{
			return $this->price;
		}

		public function getDiscount ()
		{
			return $this->discount;
		}


	}
	
?>