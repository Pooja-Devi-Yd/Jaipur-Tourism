<?php

if (isset($_GET['action']) && $_GET['action'] == 'bus_booking') {
	
	include('lib/config.php');

	$from_journey 	= 	$_POST['from_journey'];
	$to_journey 	= 	$_POST['to_journey'];
	$journeydate 	= 	$_POST['journeydate'];
	$returndate 	= 	$_POST['returndate'];
	$full_name 		= 	$_POST['full_name'];
	$contact 		= 	$_POST['contact'];
	$address 		= 	$_POST['address'];
	$email 			= 	$_POST['email'];
	$seat   		=   implode(",",$_POST['seat']);
	$Price_bus 			= 	$_POST['Price_bus'];
	//payments
	$Payments 		= $_POST['Payments'];
	$card 			= $_POST['card'];
	$card_holder	= $_POST['card_holder'];
	$Surname 		= $_POST['Surname'];
	$Card_nunmber 	= $_POST['Card_nunmber'];
	$Expiry_month 	= $_POST['Expiry_month'];
	$Expiry_year 	= $_POST['Expiry_year'];
	$CVV_number 	= $_POST['CVV_number'];
	
	$sqlinsert 		= 	"INSERT INTO travel_info (from_journey, to_journey, journeydate, returndate, full_name, contact, address, email, seat, Price_bus ) VALUES ('$from_journey', '$to_journey', '$journeydate', '$returndate', '$full_name', '$contact', '$address', '$email', '$seat', '$Price_bus')";
	
	//echo "SQL : ".$sqlinsert; die();
	
	if(mysqli_query($dbcon, $sqlinsert)){
		echo "success";
	} else {
		die('error inserting new record');
	}
	
	//$newrecord = "1 record added to database";
	
} //end of mail statement

// form 2

if (isset($_GET['action']) && $_GET['action'] == 'bus_booking_private') {
	
	include('lib/config.php');

	$bus 			= $_POST['bus'];
	$car 			= $_POST['car'];
	$from_journey2 	= $_POST['from_journey2'];
	$to_journey2 	= $_POST['to_journey2'];
	$journeydate2 	= $_POST['journeydate2'];
	$returndate2	= $_POST['returndate2'];
	$name_pri 		= $_POST['name_pri'];
	$contact_pri	= $_POST['contact_pri'];
	$address_pri 	= $_POST['address_pri'];
	$email_pri		= $_POST['email_pri'];
	$Bus_price		= $_POST['Bus_price'];
	$Car_price		= $_POST['Car_price'];
	
	
	$sqlinsert2 = "INSERT INTO travel_info_private (bus, car, from_journey2, to_journey2, journeydate2, returndate2, name_pri, contact_pri, address_pri, email_pri, Bus_price, Car_price ) VALUES ('$bus','$car','$from_journey2', '$to_journey2', '$journeydate2', '$returndate2', '$name_pri', '$contact_pri', '$address_pri', '$email_pri', '$Bus_price', '$Car_price' )";
	
	//echo "SQL : ".$sqlinsert; die();
	
	if(mysqli_query($dbcon, $sqlinsert2)){
		echo "success";
	} else {
		die('error inserting new record');
	}
	
	//$newrecord = "1 record added to database";
	
} //end of mail statement


// form 3

if (isset($_GET['action']) && $_GET['action'] == 'Onilne_Payments') {
	
	include('lib/config.php');
	
	$Payments 		= $_POST['Payments'];
	$card 			= $_POST['card'];
	$card_holder	= $_POST['card_holder'];
	$Surname 		= $_POST['Surname'];
	$Card_nunmber 	= $_POST['Card_nunmber'];
	$Expiry_month 	= $_POST['Expiry_month'];
	$Expiry_year 	= $_POST['Expiry_year'];
	$CVV_number 	= $_POST['CVV_number'];
	
	$payee_name 	= $_POST['payee_name'];
	$payee_contact 	= $_POST['payee_contact'];
	$payee_address 	= $_POST['payee_address'];
	$payee_email 	= $_POST['payee_email'];
	
	

	$sqlinsert3 = "INSERT INTO Payments_table (Payments, card, card_holder, Surname, Card_nunmber, Expiry_month, Expiry_year, CVV_number, payee_name, payee_contact, payee_address, payee_email ) VALUES ('$Payments','$card','$card_holder', '$Surname', '$Card_nunmber', '$Expiry_month', '$Expiry_year', '$CVV_number', '$payee_name', '$payee_contact', '$payee_address', '$payee_email' )";
	
	//echo "SQL : ".$sqlinsert; die();
	
	if(mysqli_query($dbcon, $sqlinsert3)){
		echo "success";
	} else {
		die('error inserting new record');
	}
	
}


?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=yes">
	<title>Mumbai: Travel and Tours</title>
	<!-- CSS --->
	<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Signika:600,400' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/main.css" type="text/css" type="text/css" />
	<link rel="stylesheet" href="css/jquery-ui.css" type="text/css">
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
	<!-- CSS --->
	<!-- JS -->
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.validate.min.js"></script>
	<script src="js/additional-methods.min.js"></script>
	<script src="js/script.js"></script>
	<!-- JS -->
	
</head>
<body>
	<div class="header tac">
	<div class="container">
	    <p>Jaipur Tourism &amp; Management</p>
	</div>
	</div>
	<div id="wrapper">
       <div class="container">
          <ul id="myTabs" class="nav nav-tabs" role="tablist">
           <li role="presentation" class="active"><a href="#bus-booking" aria-controls="Bus Booking" role="tab" data-toggle="tab">Bus Booking</a></li>
           <li role="presentation"><a href="#private-booking" aria-controls="Private Booking" role="tab" data-toggle="tab">Private Booking</a></li>
          </ul>
      
          <div class="tabcontents tab-content">
            <div role="tabpanel" class="tab-pane active" id="bus-booking">
                <p class="signika">Select Public Bus and Travel all over Jaipur </p>
                <form action="index.php" method="POST" class="mt15 signupForm" name="form1" id="form1">
                   <div class="row">
                    <div class="col-xs-12 col-sm-7">
                       <div class="row">
                           <div class="form-group col-xs-12 col-sm-12 col-md-6">
                            <label for="from" class="common-style signika">From</label>
                            <input type="text" name="from_journey" id="from_journey" class="form-control dropdown common-style signika orderID" placeholder="Please type your near area..." autocomplete="off" />
                            </div>	
                            <div class="fl-le exchange tac exc-middle"><img src="img/switchFromTo.png" alt="" /></div>
                            <div class="form-group col-xs-12 col-sm-12 col-md-6">
                                <label for="to" class="common-style signika">To</label>
                                <input type="text" name="to_journey" id="to_journey" class="form-control dropdown common-style signika" placeholder="Please type your near area..." autocomplete="off" />
                            </div>
                            <div class="form-group col-xs-12 col-sm-12 col-md-6">
                                <label for="journeydate" class="common-style signika">Date of Journey</label>
                                <input type="text" name="journeydate" id="journeydate" class="form-control datepicker common-style signika" autocomplete="off" />
                            </div>
                            <div class="form-group col-xs-12 col-sm-12 col-md-6">
                                <label for="returndate" class="common-style signika">Date of Return (Optional)</label>
                                <input type="text" name="returndate" id="returndate" class="form-control datepicker common-style signika" autocomplete="off" />
                            </div>
                       </div>
                       <hr/>
                       <div class="row">
                        <div class="form-group col-xs-12 col-sm-12 col-md-6">
                            <label for="full_name" class="common-style signika">Full Name</label>
                            <input type="text" name="full_name" id="full_name" class="form-control common-style signika payee_name-Main" autocomplete="off" />
                        </div>
                        <div class="form-group col-xs-12 col-sm-12 col-md-6">
                            <label for="Contact" class="common-style signika">Contact Number</label>
                            <input type="text" name="contact" id="contact" class="form-control common-style signika payee_contact-Main" maxlength="10" autocomplete="off" />
                        </div>
                        <div class="form-group col-xs-12 col-sm-12 col-md-6">
                            <label for="address" class="common-style signika">Address</label>
                            <input type="text" name="address" id="address" class="form-control common-style signika payee_address-Main" autocomplete="off" />
                        </div>
                        <div class="form-group col-xs-12 col-sm-12 col-md-6">
                            <label for="email" class="common-style signika">Email</label>
                            <input type="text" name="email" id="email" class="form-control common-style signika payee_email-Main" autocomplete="off" />
                        </div>
                        <div class="col-xs-12 text-right findBus">
                            <input type="submit" name="" class="submitbtn signika" value="Search Buses" autocomplete="off" />
                        </div>
                       </div>
                    </div>
                    <div class="col-xs-12 col-sm-5">
                        <div class="seat-arrangement fl-le" id="seatVal" name="seatVal">
                            <div class="leftbs fl-le">
                                <label for="seat" class="available booked"></label>		<input type="checkbox" name="seat[]" id="seat"   value="1"  />
                                <label for="seat2" class="available booked"></label>	<input type="checkbox" name="seat[]" id="seat2"  value="2"  />
                                <label for="seat3" class="available booked"></label>	<input type="checkbox" name="seat[]" id="seat3"  value="3"  />
                                <label for="seat4" class="available book"></label>		<input type="checkbox" name="seat[]" id="seat4"  value="4"  />
                                <label for="seat5" class="available book"></label>		<input type="checkbox" name="seat[]" id="seat5"  value="5"  />
                                <label for="seat6" class="available book"></label>		<input type="checkbox" name="seat[]" id="seat6"  value="6"  />
                                <label for="seat7" class="available book"></label>		<input type="checkbox" name="seat[]" id="seat7"  value="7"  />
                                <label for="seat8" class="available book"></label>		<input type="checkbox" name="seat[]" id="seat8"  value="8"  />
                                <label for="seat9" class="available book"></label>		<input type="checkbox" name="seat[]" id="seat9"  value="9"  />
                                <label for="seat10" class="available booked"></label>	<input type="checkbox" name="seat[]" id="seat10" value="10"  />
                                <label for="seat11" class="available booked"></label>	<input type="checkbox" name="seat[]" id="seat11" value="11"  />
                                <label for="seat12" class="available booked"></label>	<input type="checkbox" name="seat[]" id="seat12" value="12"  />
                                <label for="seat13" class="available booked"></label>	<input type="checkbox" name="seat[]" id="seat13" value="13"  />
                                <label for="seat14" class="available book"></label>		<input type="checkbox" name="seat[]" id="seat14" value="14" />
                                <label for="seat15" class="available book"></label>		<input type="checkbox" name="seat[]" id="seat15" value="15" />
                                <label for="seat16" class="available book"></label>		<input type="checkbox" name="seat[]" id="seat16" value="16" />
                                <label for="seat17" class="available book"></label>		<input type="checkbox" name="seat[]" id="seat17" value="17" />
                                <label for="seat18" class="available book"></label>		<input type="checkbox" name="seat[]" id="seat18" value="18" />
                                <label for="seat19" class="available booked"></label>	<input type="checkbox" name="seat[]" id="seat19" value="19" />
                                <label for="seat20" class="available booked"></label>	<input type="checkbox" name="seat[]" id="seat20" value="20" />
                                <label for="seat21" class="available booked"></label>	<input type="checkbox" name="seat[]" id="seat21" value="21" />
                                <label for="seat22" class="available book"></label>		<input type="checkbox" name="seat[]" id="seat22" value="22" />
                                <label for="seat23" class="available book"></label>		<input type="checkbox" name="seat[]" id="seat23" value="23" />
                                <label for="seat24" class="available book"></label>		<input type="checkbox" name="seat[]" id="seat24" value="24" />
                                <label for="seat25" class="available booked"></label>	<input type="checkbox" name="seat[]" id="seat25" value="25" />
                                <label for="seat26" class="available booked"></label>	<input type="checkbox" name="seat[]" id="seat26" value="26" />
                                <label for="seat27" class="available booked"></label>	<input type="checkbox" name="seat[]" id="seat27" value="27" />
                                <label for="seat28" class="available book"></label>		<input type="checkbox" name="seat[]" id="seat28" value="28" />
                                <label for="seat29" class="available booked"></label>	<input type="checkbox" name="seat[]" id="seat29" value="29" />
                                <label for="seat30" class="available book"></label>		<input type="checkbox" name="seat[]" id="seat30" value="30" />
                                <label for="seat31" class="available book"></label>		<input type="checkbox" name="seat[]" id="seat31" value="31" />
                                <label for="seat32" class="available book"></label>		<input type="checkbox" name="seat[]" id="seat32" value="32" />
                                <label for="seat33" class="available book"></label>		<input type="checkbox" name="seat[]" id="seat33" value="33" />
                            </div>
                            <div class="rightbs fl-ri">
                                <label for="seat34" class="available book"></label>		<input type="checkbox" name="seat[]" id="seat34" value="34" />
                                <label for="seat35" class="available booked"></label>	<input type="checkbox" name="seat[]" id="seat35" value="35" />
                                <label for="seat36" class="available booked"></label>	<input type="checkbox" name="seat[]" id="seat36" value="36" />
                                <label for="seat37" class="available book"></label>		<input type="checkbox" name="seat[]" id="seat37" value="37" />
                                <label for="seat38" class="available book"></label>		<input type="checkbox" name="seat[]" id="seat38" value="38" />
                                <label for="seat39" class="available book"></label>		<input type="checkbox" name="seat[]" id="seat39" value="39" />
                                <label for="seat40" class="available book"></label>		<input type="checkbox" name="seat[]" id="seat40" value="40" />
                                <label for="seat41" class="available book"></label>		<input type="checkbox" name="seat[]" id="seat41" value="41" />
                                <label for="seat42" class="available booked"></label>	<input type="checkbox" name="seat[]" id="seat42" value="42" />
                                <label for="seat43" class="available booked"></label>	<input type="checkbox" name="seat[]" id="seat43" value="43" />
                                <label for="seat44" class="available book"></label>		<input type="checkbox" name="seat[]" id="seat44" value="44" />
                                <label for="seat45" class="available book"></label>		<input type="checkbox" name="seat[]" id="seat45" value="45" />
                                <label for="seat46" class="available book"></label>		<input type="checkbox" name="seat[]" id="seat46" value="46" />
                                <label for="seat47" class="available booked"></label>	<input type="checkbox" name="seat[]" id="seat47" value="47" />
                                <label for="seat48" class="available booked"></label>	<input type="checkbox" name="seat[]" id="seat48" value="48" />
                                <label for="seat49" class="available book"></label>		<input type="checkbox" name="seat[]" id="seat49" value="49" />
                                <label for="seat50" class="available book"></label>		<input type="checkbox" name="seat[]" id="seat50" value="50" />
                                <label for="seat51" class="available book"></label>		<input type="checkbox" name="seat[]" id="seat51" value="51" />
                            </div>
                        </div>	
                        <div class="seat-info fl-le">
                            <a href="javascript:void(0);" class="available fl-le po-no"></a><p class="fl-le av-text signika">Available</p>
                            <div class="clear"></div>
                            <a href="javascript:void(0);" class="available booked fl-le po-no"></a><p class="fl-le av-text signika">Booked</p>
                            <div class="clear"></div>
                            <a href="javascript:void(0);" class="available bsbgp fl-le po-no"></a><p class="fl-le av-text signika">Selected</p>
                        </div>
                        <div class="fl-le">
                            <label for="Price" class="money-label fl-le signika"><span class="rupees">&#8377;</span></label>
                            <input type="text" name="Price_bus" id="Price_bus" value="0" class="money fl-le" readonly />
                        </div>
                    </div>
                   </div>
                </form>
            </div>
            <div role="tabpanel" class="tab-pane" id="private-booking">
            <p class="signika">Select your private vehicle bus or car for big and small families</p>
            <form action="index.php" method="POST" class="signupForm2" name="form2" id="form2">
                <div class="row">
                  <div class="col-xs-12 col-sm-7">
                   <div class="row">
                    <div class="form-group col-xs-12 col-sm-12 col-md-6">
                        <label for="bus" class="common-style signika">Select Bus</label>
                        <select name="bus" id="bus" class="form-control common-style signika vahVal" autocomplete="off">
                            <option value=""></option>
                            <option data-pri="Bus special offer &#8377; 10000" value="Would you like our recommended Bus">Would you like our recommended Bus</option>
                            <option data-pri="Bus special offer &#8377; 20000" value="Power Vehicle Innovation - Minibus">Power Vehicle Innovation - Minibus</option>
                            <option data-pri="Bus special offer &#8377; 21000" value="Autosan">Autosan</option>
                            <option data-pri="Bus special offer &#8377; 25000" value="MAN Truck & Bus - Double deck">MAN Truck &amp; Bus - Double deck</option>
                            <option data-pri="Bus special offer &#8377; 30000" value="Chassis - Tata Motors">Chassis - Tata Motors</option>
                            <option data-pri="Bus special offer &#8377; 33000" value="Forward control chassis">Forward control chassis</option>
                            <option data-pri="Bus special offer &#8377; 29999" value="Del Monte Motor Works, Inc.">Del Monte Motor Works, Inc.</option>
                            <option data-pri="Bus special offer &#8377; 49999" value="Mitsubishi Fuso Truck and Bus Corporation">Mitsubishi Fuso Truck and Bus Corporation</option>
                            <option data-pri="Bus special offer &#8377; 15000" value="Hyundai Motor Company">Hyundai Motor Company</option>
                            <option data-pri="Bus special offer &#8377; 27999" value="Volvo Buses">Volvo Buses</option>
                            <option data-pri="Bus special offer &#8377; 29999" value="Volvo Bus B7R">Volvo Bus B7R</option>
                            <option data-pri="Bus special offer &#8377; 26000" value="Volvo Bus B7L">Volvo Bus B7L</option>
                            <option data-pri="Bus special offer &#8377; 24000" value="Volvo Bus B6">Volvo Bus B6</option>
                            <option data-pri="Bus special offer &#8377; 30000" value="Volvo Bus B10B">Volvo Bus B10B</option>
                            <option data-pri="Bus special offer &#8377; 28000" value="Volvo Bus B10L">Volvo Bus B10L</option>
                            <option data-pri="Bus special offer &#8377; 32000" value="Volvo Bus B10M">Volvo Bus B10M</option>
                            <option data-pri="Bus special offer &#8377; 22000" value="Volvo Bus B57">Volvo Bus B57</option>
                            <option data-pri="Bus special offer &#8377; 65000" value="Walter Alexander Coachbuilders / TransBus">Walter Alexander Coachbuilders / TransBus</option>
                            <option data-pri="Bus special offer &#8377; 33000" value="Arway">Arway</option>
                            <option data-pri="Bus special offer &#8377; 42000" value="Plaxton">Plaxton</option>
                            <option data-pri="Bus special offer &#8377; 18000" value="Toyota - minibus">Toyota - minibus</option>
                            <option data-pri="Bus special offer &#8377; 17000" value="Hyundai">Hyundai</option>
                        </select>
                    </div>
                    <div class="fl-le exchange tac signika exc-middle exc-or">or</div>
                    <div class="form-group col-xs-12 col-sm-12 col-md-6">
                        <label for="car" class="common-style signika">Select Car/Jeep/Marshal</label>
                        <select name="car" id="car"  class="form-control common-style signika vahVal" autocomplete="off">
                            <option value=""></option>
                            <option data-pri="Rs. 8000" value="Would you like our recommended Bus">Would you like our recommended Bus</option>
                            <optgroup label="Car">
                                <option data-pri="Private vahicle offer &#8377; 16000" value="Accord">Accord</option>
                                <option data-pri="Private vahicle offer &#8377; 22000" value="Aerio">Aerio</option>
                                <option data-pri="Private vahicle offer &#8377; 29999" value="Aerostar">Aerostar</option>
                                <option data-pri="Private vahicle offer &#8377; 30000" value="Ambassador">Ambassador</option>
                                <option data-pri="Private vahicle offer &#8377; 39999" value="Avenger">Avenger</option>
                                <option data-pri="Private vahicle offer &#8377; 24999" value="Aspire">Aspire</option>
                                <option data-pri="Private vahicle offer &#8377; 20000" value="Bertone (Volvo coupe)">Bertone (Volvo coupe)</option>
                                <option data-pri="Private vahicle offer &#8377; 28000" value="Bluebird (Nissan/Datsun)">Bluebird (Nissan/Datsun)</option>
                                <option data-pri="Private vahicle offer &#8377; 32000" value="Chevette">Chevette</option>
                                <option data-pri="Private vahicle offer &#8377; 12000" value="City">City</option>
                                <option data-pri="Private vahicle offer &#8377; 10000" value="Civic">Civic</option>
                                <option data-pri="Private vahicle offer &#8377; 8000" value="Corolla">Corolla</option>
                                <option data-pri="Private vahicle offer &#8377; 14000" value="Corvette">Corvette</option>
                                <option data-pri="Private vahicle offer &#8377; 17000" value="Dynasty">Dynasty</option>
                                <option data-pri="Private vahicle offer &#8377; 19990" value="Endeavor">Endeavor</option>
                                <option data-pri="Private vahicle offer &#8377; 11111" value="Escort">Escort</option>
                                <option data-pri="Private vahicle offer &#8377; 22000" value="Fiesta">Fiesta</option>
                                <option data-pri="Private vahicle offer &#8377; 30000" value="GTI (Volkswagen)">GTI (Volkswagen)</option>
                                <option data-pri="Private vahicle offer &#8377; 28999" value="Honey Bee (Nissan/Datsun)">Honey Bee (Nissan/Datsun)</option>
                                <option data-pri="Private vahicle offer &#8377; 39999" value="Land Cruiser">Land Cruiser</option>
                                <option data-pri="Private vahicle offer &#8377; 26000" value="Polo">Polo</option>
                                <option data-pri="Private vahicle offer &#8377; 35000" value="Q5, Q7, Q9 (Audi)">Q5, Q7, Q9 (Audi)</option>
                                <option data-pri="Private vahicle offer &#8377; 32000" value="R32 (Volkswagen)">R32 (Volkswagen)</option>
                                <option data-pri="Private vahicle offer &#8377; 210000" value="Volt">Volt</option>
                                <option data-pri="Private vahicle offer &#8377; 38000" value="Mercedes-Benz">Mercedes-Benz</option>
                            </optgroup>
                            <optgroup label="Jeep/Marshel">
                                <option data-pri="Rs. 22000" value="Grand Cherokee">Grand Cherokee</option>
                                <option data-pri="Rs. 15000" value="Compass">Compass</option>
                                <option data-pri="Rs. 19000" value="Wrangler">Wrangler</option>
                                <option data-pri="Rs. 14000" value="Patriot">Patriot</option>
                                <option data-pri="Rs. 10000" value="Liberty">Liberty</option>
                                <option data-pri="Rs. 19000" value="Cherokee">Cherokee</option>
                                <option data-pri="Rs. 17000" value="CJ">CJ</option>
                                <option data-pri="Rs. 14000" value="Commander">Commander</option>
                                <option data-pri="Rs. 20000" value="Gladiator">Gladiator</option>
                                <option data-pri="Rs. 1500" value="DJ">DJ</option>
                                <option data-pri="Rs. 9999" value="Safari">Safari</option>
                            </optgroup> 
                        </select>       
                    </div>
                    <div class="form-group col-xs-12 col-sm-12 col-md-6">
                        <label for="from" class="common-style signika">From</label>
                        <input type="text" name="from_journey2" id="from_journey2" class="form-control dropdown common-style signika" placeholder="Please type your near area..." autocomplete="off" />
                    </div>	
                    <div class="form-group col-xs-12 col-sm-12 col-md-6">
                        <label for="to" class="common-style signika">To</label>
                        <input type="text" name="to_journey2" id="to_journey2" class="form-control dropdown common-style signika" placeholder="Please type your near area..." autocomplete="off" />
                    </div>
                    <div class="form-group col-xs-12 col-sm-12 col-md-6">
                        <label for="journeydate" class="common-style signika">Date of Journey</label>
                        <input type="text" name="journeydate2" id="journeydate2" class="form-control datepicker common-style signika" autocomplete="off" />
                    </div>
                    <div class="form-group col-xs-12 col-sm-12 col-md-6">
                        <label for="returndate" class="common-style signika">Date of Return (Optional)</label>
                        <input type="text" name="returndate2" id="returndate2" class="form-control datepicker common-style signika" autocomplete="off" />
                    </div>
                   </div>	
                    <hr/>
                   <div class="row">
                    <div class="form-group col-xs-12 col-sm-12 col-md-6">
                        <label for="name_pri" class="common-style signika">Full Name</label>
                        <input type="text" name="name_pri" id="name_pri" class="form-control common-style signika payee_name-Main" autocomplete="off" />
                    </div>
                    <div class="form-group col-xs-12 col-sm-12 col-md-6">
                        <label for="Contact_pri" class="common-style signika">Contact Number</label>
                        <input type="text" name="contact_pri" id="contact_pri" class="form-control common-style signika payee_contact-Main" maxlength="10" autocomplete="off" />
                    </div>
                    <div class="form-group col-xs-12 col-sm-12 col-md-6">
                        <label for="address_pri" class="common-style signika">Address</label>
                        <input type="text" name="address_pri" id="address_pri" class="form-control common-style signika payee_address-Main" autocomplete="off" />
                    </div>
                    <div class="form-group col-xs-12 col-sm-12 col-md-6">
                        <label for="email_pri" class="common-style signika">Email</label>
                        <input type="text" name="email_pri" id="email_pri" class="form-control common-style signika payee_email-Main" autocomplete="off" />
                    </div>
                    <div class="col-xs-12 text-right findBus">
                        <input type="submit" name="" class="fl-ri mtb submitbtn signika" value="Search Buses" />
                    </div>
                   </div>
                  </div>
                  <div class="col-xs-12 col-sm-5">
                      <input type="text" name="Bus_price" id="Bus_price" class="money fl-le bus_pri" readonly autocomplete="off" />
                      <input type="text" name="Car_price" id="Car_price" class="money fl-le bus_pri car_pri" readonly autocomplete="off" />
                  </div>
                </div>	
            </form>
        </div>
        
        <div class="on-pay" id="On_pay">
         <div class="payMax">
              <form action="index.php" method="POST" class="signupForm3" name="form3" id="form3">
                  <table class="myTable fl-le">
                      <tr>
                          <div class="on-cod">
                              <input type="radio" name="Payments" class="order-user" value="Online" id="Payments_online" checked="checked" /><label for="Payments_online" class="signika">Online Payment</label><div class="radio-space">&nbsp;</div>
                              <input type="radio" name="Payments" class="order-user" value="COD" id="Payments_cod" /><label for="Payments_cod" class="signika">Cash on Delivery (COD)</label>
                          </div>
                      </tr>
                      <tr class="hide-pay">
                          <div class="creditcard1 hide-pay pos-r">
                              <ul>
                                  <li><input type="radio" name="card" value="Visa" id="visa"><label for="visa"><img src="img/visa.jpg" /></label></li>
                                  <li><input type="radio" name="card" value="Master Card" id="master"><label for="master"><img src="img/mastercard.jpg" /></label></li>
                                  <li><input type="radio" name="card" value="American Express" id="ame_ex"><label for="ame_ex"><img src="img/americanexpress.jpg" /></label></li>
                                  <li><input type="radio" name="card" value="Others" id="othres"><label for="othres" class="signika othrs">Others</label></li>
                              </ul>
                          </div>
                      </tr>
                      <tr class="hide-pay">
                          <td>
                              <label for="card_holder" class="signika">Name</label>
                          </td>
                          <td>
                              <input type="text" name="card_holder" id="card_holder" placeholder="Card holder Name" class="form-control common-style signika" autocomplete="off" />
                          </td>
                      </tr>
                      <tr class="hide-pay">
                          <td>
                              <label for="Surname" class="signika">Last Name</label>
                          </td>
                          <td>
                              <input type="text" name="Surname" id="Surname"  placeholder="Card holder Surname" class="form-control common-style signika" autocomplete="off" />
                          </td>
                      </tr>
                      <tr class="hide-pay">
                          <td>
                              <label for="Card_nunmber" class="signika">Card Number</label>
                          </td>
                          <td>
                              <input type="text" name="Card_nunmber" id="Card_nunmber" placeholder="Enter Your Card Number*" class="form-control common-style signika" autocomplete="off" />
                          </td>
                      </tr>
                      <tr class="hide-pay">
                          <td>
                              <label for="Expiry_month" class="signika">Expiry Date</label>
                          </td>
                          <td>
                              <div class="pos-r card-exp">
                              <select name="Expiry_month" id="Expiry_month" class="form-control common-style signika month" autocomplete="off">
                                  <option value="">Month</option>
                                  <option value="January">January</option>
                                  <option value="February">February</option>
                                  <option value="March">March</option>
                                  <option value="April">April</option>
                                  <option value="May">May</option>
                                  <option value="June">June</option>
                                  <option value="July">July</option>
                                  <option value="August">August</option>
                                  <option value="September">September</option>
                                  <option value="October"> October </option>
                                  <option value="November"> November </option>
                                  <option value="December"> December </option>
                              </select>
                              <input type="text" name="Expiry_year" id="Expiry_year" placeholder="Year" class="form-control common-style signika s-width" autocomplete="off" />
                              </div>
                          </td>
                      </tr>
                      <tr class="hide-pay">
                          <td>
                              <label for="CVV_number" class="signika">CVV</label>
                          </td>
                          <td>
                              <div class="pos-r fl-le width100">
                                  <input type="text" name="CVV_number" id="CVV_number" placeholder="CVV*" class="form-control common-style signika s-width" autocomplete="off" />
                                  <img src="img/date.png" class="fl-le cvv-img" />
                              </div>
                          </td>
                      </tr>
                  </table>
                      <input type="hidden" name="payee_name" id="payee_name" />
                      <input type="hidden" name="payee_contact" id="payee_contact" />
                      <input type="hidden" name="payee_address" id="payee_address" />
                      <input type="hidden" name="payee_email" id="payee_email" />
                      <input type="submit" class="fl-ri mtb submitbtn signika pay-btn" id="pay-btn" value="Pay" />
              </form>
         </div>
        </div>
        
      </div>
      
      
      </div>
      
      
      <!---<div class="overlay c-over"></div>
      <div class="thankyou tac signika c-over">
          <a href="" id="close">x</a>
          Thank you for your booking<span style="display:block"> We wish you <br/> Happy Journey </span>
      </div>-->
      
      <div class="modal fade bs-example-modal-sm" tabindex="-1" id="myModal" role="dialog" aria-labelledby="mySmallModalLabel">
      
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
           <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
          </div>
           <div class="modal-body">
               Thank you for your booking <span style="display:block"> We wish you <br/> Happy Journey </span>
           </div>
        </div>
      </div>
    </div>
      
	</div>
	
	

</body>
</html>