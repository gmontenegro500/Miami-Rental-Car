<?php
include('inc/cars.php');
if (isset($_GET["id"])) {
	$car_id = $_GET["id"];
	if (isset($cars[$car_id])) {
		$car = $cars[$car_id];
	}
}
if (!isset($car)) {
	header("Location: vehicles.php");
	exit();
}
$section = "vehicle";
$pageTitle = $car["name"];

include('inc/header.php'); ?>
<div class="content container">
	<div class="row">
		<div class="vehicle-img col-md-6">
			<img src="<?php echo $car['img'];?>">
		</div>
		<div class="reservation col-md-6">	
		<form action="vehicle.php">
			<div class="field size">
				<label for="pickuplocation">Pick-up location:</label>
				<select name="pick-up location" id="pickuplocation">
					<option value="0">Select a pick-up location</option>
					<option value="Miami Beach">Miami Beach</option>
					<option value="Miami Airport">Miami Airport</option>
					<option value="Ft. Lauderdale Airport">Ft. Lauderdale Airport</option>
				</select>
			</div>
			<div class="field size">
				<label for="dropofflocation">Drop-off location:</label>
				<select name="pick-up location" id="pickuplocation">
					<option value="0">Select a drop-off location</option>
					<option value="Miami Beach">Miami Beach</option>
					<option value="Miami Airport">Miami Airport</option>
					<option value="Ft. Lauderdale Airport">Ft. Lauderdale Airport</option>
				</select>
			</div>
			<div class="clear"></div>
			<div class="field size">
				<label>Pick-up date:</label>
				<input name="pick-up Date" id="pickUpDate" type="text">
			</div>
			<div class="field size">
				<label for="pickuptime">Pick-up time:</label>
				<select name="Pick-up Time" id="pickuptime">
								<option value=""></option>
								<option value="07:30 AM">7:30 AM</option>
								<option value="08:00 AM">8:00 AM</option>
								<option value="09:00 AM">9:00 AM</option>
								<option value="10:00 AM">10:00 AM</option>
								<option value="11:00 AM">11:00 AM</option>
								<option selected="selected" value="12:00 PM">12:00 PM</option>
								<option value="01:00 PM">1:00 PM</option>
								<option value="02:00 PM">2:00 PM</option>
								<option value="03:00 PM">3:00 PM</option>
								<option value="04:00 PM">4:00 PM</option>
								<option value="05:00 PM">5:00 PM</option>
								<option value="06:00 PM">6:00 PM</option>
								<option value="07:00 PM">7:00 PM</option>
				</select>
			</div>
			<div class="clear"></div>
			<!-- drop-off date -->
			<div class="field size">
				<label>Drop-off date:</label>
				<input name="Drop-off Date" id="dropOffDate" type="text">
			</div>	
				<!-- drop-off time -->
			<div class="field size">	
				<label for="dropofftime">Drop-off time:</label>
				<select name="Pick-up Time" id="pickuptime" class="fchange">
								<option value=""></option>
								<option value="07:30 AM">7:30 AM</option>
								<option value="08:00 AM">8:00 AM</option>
								<option value="09:00 AM">9:00 AM</option>
								<option value="10:00 AM">10:00 AM</option>
								<option value="11:00 AM">11:00 AM</option>
								<option selected="selected" value="12:00 PM">12:00 PM</option>
								<option value="01:00 PM">1:00 PM</option>
								<option value="02:00 PM">2:00 PM</option>
								<option value="03:00 PM">3:00 PM</option>
								<option value="04:00 PM">4:00 PM</option>
								<option value="05:00 PM">5:00 PM</option>
								<option value="06:00 PM">6:00 PM</option>
								<option value="07:00 PM">7:00 PM</option>
				</select>
			</div>
			<div class="field size">
				<label for="driversage">Driver's age:</label>
				<select name="drivers age" id="driversage">
					<option value="0">Select</option>
					<option value="21-24">21-24</option>
					<option value="25 and up">25 and up</option>
				</select>
			</div>
		</div>
	</div>
</div>
<div class="content container">	
	<div class="row info">
		<div class="s-extras col-md-4">
			<h3>Suggested Extras</h3>
			<table class="table">
				<tbody>
					<tr>
						<td>
							<input type="checkbox">
						</td>
						<td>
							<label>Loss damage waiver</label>
						</td>
						<td>
							<p>$23/day</p>
						</td>	
					</tr>
					<tr>
						<td>
							<input type="checkbox">
						</td>
						<td>
							<label>Navigation system</label>
						</td>
						<td>
							<p>$9/day</p>
						</td>	
					</tr>
					<tr>
						<td>
							<input type="checkbox">
						</td>
						<td>
							<label>Toll service</label>
						</td>
						<td>
							<p>$8/day</p>
						</td>	
					</tr>
					<tr>
						<td>
							<input type="checkbox">
						</td>
						<td>
							<label>Child safety seat</label>
						</td>
						<td>
							<p>$5/day</p>
						</td>	
					</tr>
					<tr>
						<td>
							<input type="checkbox">
						</td>
						<td>
							<label>Additional driver</label>
						</td>
						<td>
							<p>$20/day</p>
						</td>	
					</tr>	
				</tbody>
			</table>
		</div>
		<div class="total-p col-md-4">
			<h3>Your total price</h3>
			<table class="table">
				<tbody>
					<tr>
						<td>
							Rental price
						</td>
						<td>
							<p><?php echo "$".$car["price"]."/day"; ?></p>
						</td>	
					</tr>
					<!-- If the driver is under age, charge the driver -->
					<!-- <tr>
						<td>
							<label>Underage driver</label>
						</td>
						<td>
							<p>$20/day</p>
						</td>	
					</tr> -->

					<!-- If drop off location is different from pick up location, charge the customer $20 -->

					<!-- <tr>
						<td>
							<label>Pick-up/Drop-off charge (if different)</label>
						</td>
						<td>
							<p>$20/day</p>
						</td>	
					</tr> -->

					<!-- sub-total -->

					<!-- <tr>
						<td>
							<label>Sub-total</label>
						</td>
						<td>
							<p>?</p>
						</td>	
					</tr> -->

					<!-- Sale tax is 7% of the sub-total-->

					<!-- <tr>
						<td>
							<label>Sale tax</label>
						</td>
						<td>
							<p>7%</p>
						</td>	
					</tr> -->
					<tr>
						<td>
							<label>Total</label>
						</td>
						<td>
							<p><?php echo "$".$car["price"]."/day"; ?></p>
						</td>	
					</tr>	
				</tbody>
			</table>
		</div>
		<div class="submit col-md-4">
			<h3>Send your request</h3>
				<table>
					<tbody>
					<tr>
						<td>
							<label>First Name:</label>
							<input type="text" name="fname" value="<?php echo (isset($fname) ? $fname : ""); ?>" placeholder="Your Name"style="width:90%">
						</td>
						<td>
							<label>Last Name:</label>
							<input type="text" name="lname" value="<?php echo (isset($lname) ? $lname : ""); ?>" placeholder="Your Last Name">
						</td>
					</tr>
					<tr>
						<td>
							<label>Phone:</label>
							<input type="text" name="phone" value="<?php echo (isset($phone) ? $phone : ""); ?>" placeholder="Phone Number" style="width:90%">
						</td>
						<td>
							<label>Email:</label>
							<input type="text" name="email" value="<?php echo (isset($email) ? $email : ""); ?>" placeholder="Your email">
						</td>
					</tr>
					</tbody>
				</table>
				<table>
					<tbody>
						<tr>
							<td>
								<label>Comments:</label>
								<textarea name="mess" style="width:100%"></textarea>
							</td>
						</tr>
						<tr>
							<td>
								<button class="boton" value="send" style="margin-top:15px">Submit</button>
							</td>
						</tr>
					</tbody>
				</table>
			</div> 
		</form>	
	</div>
</div>
<?php include('inc/footer.php') ?>