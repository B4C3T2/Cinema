<?php
	class BookigManagement{
		public $firstName;
		public $lastName;
		public $email;
		public $passWord;
		public $bookingId;
		
		function Query(){
			//Database connection will be soon
			return new array();
		}
		
		function Booking($loggedInUser, $selectedSeats){
			//Database connection will be soon(bookingId will be set by database connection)
			return "Successful booking ".$this->bookingId;
		}
		
		function BillGenerate($selectedSeats){
			$prize = count($selectedSeats) * 1500;
			return $prize;
		}
	}
?>