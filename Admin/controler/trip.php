<?php
$conn = mysql_connect("localhost","root","", "youtube");
class Trip
	{
		private $discription;
		private $price;
		private $duration;
		private $discount;
		private $maxnumber;
		private $deadline;
		private $id;
		private $checks=false;
		private $person;
		//private $today = date("d-m-y");

		public function __construct()
		{

		}

		public function checkTrip($deadline)
		{
			if ($deadline>=$this->today )
			{
				$this->checks=true;
			}
			else
			{
				$this->checks=false;
			}

		}

		public function acceptTrip($description, $price, $deadline, $discount=0)
		{

			if (!$conn)
			{
 			    die("Connection failed: " . mysqli_connect_error());
			}
			else
			{
            if($this->checks===true)
			{
			      $sql = "insert into offers (description , deadline , discount , price )
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

	 function bookThisTrip($tripid, $guestid, $accept)
		{

			if (!$conn)
			{
 			    die("Connection failed: " . mysqli_connect_error());
			}

			$sql = "insert into offers (tripid, guestid, accept)
					values ($tripid, $guestid, $accept)";

			if (mysqli_query($conn, $sql))
		    {
		          return true;
			}
    		else
    		{
			     return false;
			}
		}


		 function setDescription ($description)
		{
			$this->content=$description;
		}

		 function setDeadline ($deadline)
		{
			$this->deadline=$deadline;
		}

		 function setPrice ($price)
		{
			$this->price=$price;
		}

		 function setDiscount ($discount)
		{
			$this->discount=$discount;
		}
		function setduration($du)
		{
			$this->duration=$du;
		}
		function getduration()
		{
			return $this->duration;
		}

	   function getDescription ()
		{
			return $this->description;
		}

		 function getDeadline ()
		{
			return $this->deadline;
		}

		function getPrice ()
		{
			return $this->price;
		}

		 function getDiscount ()
		{
			return $this->discount;
		}
		function setid($id)
		{
			$this->id=$id;
		}
		function getid()
		{
			return $this->id;
		}
		function setmaxnum($max)
		{
			$this->maxnumber=$max;
		}
		function getmaxnum()
		{
			return $this->maxnumber;
		}


	}
}
}
?>
