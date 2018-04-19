<?php
$conn = mysql_connect("localhost", "root", "","youtube");
//mysql_create_db("projectsoftwear");
	class offer
	{
		private $discount;
		private $price;
		private $content;
		private $date;
		private $id;
		//private $today = date(Y-m-d);
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

			if (!$conn)
			{
 			    die("Connection failed: " . mysqli_connect_error());
			}else
			{
                 if($this->check===true)
			     {
				     $sql = "insert into offer (Content,deadline,Discount ,Price)
					 values ($content, $deadline, $discount, $price)";

			        if (mysql_query($sql))
		             {
		                 return true;
			         }
    		         else
    		         {
			             return false;
			         }
			     }
			     else
			     {
				     return false;
			     }

		    }
		}

		public function BookThisOffer($offerid, $guestid, $accept)
		{

			if (!$conn)
			{
 			    die("Connection failed: " . mysql_error());
			}

			$sql = "INSERT INTO bookoffer (B_OfferID, B_GuestId, Accept)
					VALUES ($offerid, $guestid, $accept)";

			 if (mysql_query($sql))
		         {
		             return true;
			     }
    		 else
    		     {
			         return false;
			     }
		}
    function setofferid($ido)
		{
			$this->id=$ido;
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
