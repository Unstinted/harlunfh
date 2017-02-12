@extends('layouts.pages')
		@section('content')
		<!-- Cart Area -->
		<div class="chart-area">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="cart-title">
							<h2>Shopping Cart</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<!-- Cart Item -->
						<div class="chart-item table-responsive fix">
							<table class="col-md-12">
								<thead>
									<tr>
										<th class="th-delate">Remove</th>
										<th class="th-product">Images</th>
										<th class="th-details">Product Name</th>
										<th class="th-edit">Edit</th>
										<th class="th-price">Unit Price</th>
										<th class="th-qty">Qty</th>
										<th class="th-total">Subtotal</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="th-delate"><a href="#">X</a></td>
										<td class="th-product">
											<a href="#"><img src="img/cart/c3.jpg" alt="cart"></a>
										</td>
										<td class="th-details">
											<h2><a href="#">Baby New Style Jackets</a></h2>
										</td>
										<td class="th-edit"><a href="#">Edit</a></td>
										<td class="th-price">$225.00</td>
										<td class="th-qty">
											<input type="text" placeholder="1">
										</td>
										<td class="th-total">$225.00</td>
									</tr>
									<tr>
										<td class="th-delate"><a href="#">X</a></td>
										<td class="th-product">
											<a href="#"><img src="img/cart/c4.jpg" alt="cart"></a>
										</td>
										<td class="th-details">
											<h2><a href="#">Baby New Style Jackets</a></h2>
										</td>
										<td class="th-edit"><a href="#">Edit</a></td>
										<td class="th-price">$445.00</td>
										<td class="th-qty">
											<input type="text" placeholder="1">
										</td>
										<td class="th-total">$445.00</td>
									</tr>
								</tbody>
							</table>
						</div><!-- End Cart Item -->
						<div class="shoping-cart-button">
							<div class="cart-button-left">
								<button type="button" class="btn">Continue Shopping</button>
							</div>
							<div class="cart-button-right">
								<button type="button" class="btn">Update Shopping Cart</button>
								<button type="button" class="btn">Clear Shopping Cart</button>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- Cart Shoping Area -->
					<div class="cart-shopping-area fix">
						<div class="col-md-4 col-sm-12">
							<div class="calculate-shipping chart-all fix">
								<h2>Estimate Shipping and Tax</h2>
								<p>Enter your destination to get a shipping estimate.</p>
								<h3>Country <sup>*</sup></h3>
								<select>
									<option value="AF">Afghanistan</option>
									<option value="AX">Åland Islands</option>
									<option value="AL">Albania</option>
									<option value="DZ">Algeria</option>
									<option value="AS">American Samoa</option>
									<option value="AD">Andorra</option>
									<option value="AO">Angola</option>
									<option value="AI">Anguilla</option>
									<option value="AQ">Antarctica</option>
									<option value="AG">Antigua and Barbuda</option>
									<option value="AR">Argentina</option>
									<option value="AM">Armenia</option>
									<option value="AW">Aruba</option>
									<option value="AU">Australia</option>
									<option value="AT">Austria</option>
									<option value="AZ">Azerbaijan</option>
									<option value="BS">Bahamas</option>
									<option value="BH">Bahrain</option>
									<option value="BD">Bangladesh</option>
									<option value="BB">Barbados</option>
									<option value="BY">Belarus</option>
									<option value="BE">Belgium</option>
									<option value="BZ">Belize</option>
									<option value="BJ">Benin</option>
									<option value="BM">Bermuda</option>
									<option value="BT">Bhutan</option>
									<option value="BO">Bolivia</option>
									<option value="BA">Bosnia and Herzegovina</option>
									<option value="BW">Botswana</option>
									<option value="BV">Bouvet Island</option>
									<option value="BR">Brazil</option>
									<option value="IO">British Indian Ocean Territory</option>
									<option value="VG">British Virgin Islands</option>
									<option value="BN">Brunei</option>
									<option value="BG">Bulgaria</option>
									<option value="BF">Burkina Faso</option>
									<option value="BI">Burundi</option>
									<option value="KH">Cambodia</option>
									<option value="CM">Cameroon</option>
									<option value="CA">Canada</option>
									<option value="CV">Cape Verde</option>
									<option value="KY">Cayman Islands</option>
									<option value="CF">Central African Republic</option>
									<option value="TD">Chad</option>
									<option value="CL">Chile</option>
									<option value="CN">China</option>
									<option value="CX">Christmas Island</option>
									<option value="CC">Cocos (Keeling) Islands</option>
									<option value="CO">Colombia</option>
									<option value="KM">Comoros</option>
									<option value="CG">Congo - Brazzaville</option>
									<option value="CD">Congo - Kinshasa</option>
									<option value="CK">Cook Islands</option>
									<option value="CR">Costa Rica</option>
									<option value="CI">Côte d’Ivoire</option>
									<option value="HR">Croatia</option>
									<option value="CU">Cuba</option>
									<option value="CY">Cyprus</option>
									<option value="CZ">Czech Republic</option>
									<option value="DK">Denmark</option>
									<option value="DJ">Djibouti</option>
									<option value="DM">Dominica</option>
									<option value="DO">Dominican Republic</option>
									<option value="EC">Ecuador</option>
									<option value="EG">Egypt</option>
									<option value="SV">El Salvador</option>
									<option value="GQ">Equatorial Guinea</option>
									<option value="ER">Eritrea</option>
									<option value="EE">Estonia</option>
									<option value="ET">Ethiopia</option>
									<option value="FK">Falkland Islands</option>
									<option value="FO">Faroe Islands</option>
									<option value="FJ">Fiji</option>
									<option value="FI">Finland</option>
									<option value="FR">France</option>
									<option value="GF">French Guiana</option>
									<option value="PF">French Polynesia</option>
									<option value="TF">French Southern Territories</option>
									<option value="GA">Gabon</option>
									<option value="GM">Gambia</option>
									<option value="GE">Georgia</option>
									<option value="DE">Germany</option>
									<option value="GH">Ghana</option>
									<option value="GI">Gibraltar</option>
									<option value="GR">Greece</option>
									<option value="GL">Greenland</option>
									<option value="GD">Grenada</option>
									<option value="GP">Guadeloupe</option>
									<option value="GU">Guam</option>
									<option value="GT">Guatemala</option>
									<option value="GG">Guernsey</option>
									<option value="GN">Guinea</option>
									<option value="GW">Guinea-Bissau</option>
									<option value="GY">Guyana</option>
									<option value="HT">Haiti</option>
									<option value="HM">Heard & McDonald Islands</option>
									<option value="HN">Honduras</option>
									<option value="HK">Hong Kong SAR China</option>
									<option value="HU">Hungary</option>
									<option value="IS">Iceland</option>
									<option value="IN">India</option>
									<option value="ID">Indonesia</option>
									<option value="IR">Iran</option>
									<option value="IQ">Iraq</option>
									<option value="IE">Ireland</option>
									<option value="IM">Isle of Man</option>
									<option value="IL">Israel</option>
									<option value="IT">Italy</option>
									<option value="JM">Jamaica</option>
									<option value="JP">Japan</option>
									<option value="JE">Jersey</option>
									<option value="JO">Jordan</option>
									<option value="KZ">Kazakhstan</option>
									<option value="KE">Kenya</option>
									<option value="KI">Kiribati</option>
									<option value="KW">Kuwait</option>
									<option value="KG">Kyrgyzstan</option>
									<option value="LA">Laos</option>
									<option value="LV">Latvia</option>
									<option value="LB">Lebanon</option>
									<option value="LS">Lesotho</option>
									<option value="LR">Liberia</option>
									<option value="LY">Libya</option>
									<option value="LI">Liechtenstein</option>
									<option value="LT">Lithuania</option>
									<option value="LU">Luxembourg</option>
									<option value="MO">Macau SAR China</option>
									<option value="MK">Macedonia</option>
									<option value="MG">Madagascar</option>
									<option value="MW">Malawi</option>
									<option value="MY">Malaysia</option>
									<option value="MV">Maldives</option>
									<option value="ML">Mali</option>
									<option value="MT">Malta</option>
									<option value="MH">Marshall Islands</option>
									<option value="MQ">Martinique</option>
									<option value="MR">Mauritania</option>
									<option value="MU">Mauritius</option>
									<option value="YT">Mayotte</option>
									<option value="MX">Mexico</option>
									<option value="FM">Micronesia</option>
									<option value="MD">Moldova</option>
									<option value="MC">Monaco</option>
									<option value="MN">Mongolia</option>
									<option value="ME">Montenegro</option>
									<option value="MS">Montserrat</option>
									<option value="MA">Morocco</option>
									<option value="MZ">Mozambique</option>
									<option value="MM">Myanmar (Burma)</option>
									<option value="NA">Namibia</option>
									<option value="NR">Nauru</option>
									<option value="NP">Nepal</option>
									<option value="NL">Netherlands</option>
									<option value="AN">Netherlands Antilles</option>
									<option value="NC">New Caledonia</option>
									<option value="NZ">New Zealand</option>
									<option value="NI">Nicaragua</option>
									<option value="NE">Niger</option>
									<option value="NG">Nigeria</option>
									<option value="NU">Niue</option>
									<option value="NF">Norfolk Island</option>
									<option value="MP">Northern Mariana Islands</option>
									<option value="KP">North Korea</option>
									<option value="NO">Norway</option>
									<option value="OM">Oman</option>
									<option value="PK">Pakistan</option>
									<option value="PW">Palau</option>
									<option value="PS">Palestinian Territories</option>
									<option value="PA">Panama</option>
									<option value="PG">Papua New Guinea</option>
									<option value="PY">Paraguay</option>
									<option value="PE">Peru</option>
									<option value="PH">Philippines</option>
									<option value="PN">Pitcairn Islands</option>
									<option value="PL">Poland</option>
									<option value="PT">Portugal</option>
									<option value="PR">Puerto Rico</option>
									<option value="QA">Qatar</option>
									<option value="RE">Réunion</option>
									<option value="RO">Romania</option>
									<option value="RU">Russia</option>
									<option value="RW">Rwanda</option>
									<option value="BL">Saint Barthélemy</option>
									<option value="SH">Saint Helena</option>
									<option value="KN">Saint Kitts and Nevis</option>
									<option value="LC">Saint Lucia</option>
									<option value="MF">Saint Martin</option>
									<option value="PM">Saint Pierre and Miquelon</option>
									<option value="WS">Samoa</option>
									<option value="SM">San Marino</option>
									<option value="ST">São Tomé and Príncipe</option>
									<option value="SA">Saudi Arabia</option>
									<option value="SN">Senegal</option>
									<option value="RS">Serbia</option>
									<option value="SC">Seychelles</option>
									<option value="SL">Sierra Leone</option>
									<option value="SG">Singapore</option>
									<option value="SK">Slovakia</option>
									<option value="SI">Slovenia</option>
									<option value="SB">Solomon Islands</option>
									<option value="SO">Somalia</option>
									<option value="ZA">South Africa</option>
									<option value="GS">South Georgia & South Sandwich Islands</option>
									<option value="KR">South Korea</option>
									<option value="ES">Spain</option>
									<option value="LK">Sri Lanka</option>
									<option value="VC">St. Vincent & Grenadines</option>
									<option value="SD">Sudan</option>
									<option value="SR">Suriname</option>
									<option value="SJ">Svalbard and Jan Mayen</option>
									<option value="SZ">Swaziland</option>
									<option value="SE">Sweden</option>
									<option value="CH">Switzerland</option>
									<option value="SY">Syria</option>
									<option value="TW">Taiwan</option>
									<option value="TJ">Tajikistan</option>
									<option value="TZ">Tanzania</option>
									<option value="TH">Thailand</option>
									<option value="TL">Timor-Leste</option>
									<option value="TG">Togo</option>
									<option value="TK">Tokelau</option>
									<option value="TO">Tonga</option>
									<option value="TT">Trinidad and Tobago</option>
									<option value="TN">Tunisia</option>
									<option value="TR">Turkey</option>
									<option value="TM">Turkmenistan</option>
									<option value="TC">Turks and Caicos Islands</option>
									<option value="TV">Tuvalu</option>
									<option value="UG">Uganda</option>
									<option value="UA">Ukraine</option>
									<option value="AE">United Arab Emirates</option>
									<option value="GB">United Kingdom</option>
									<option selected="selected" value="US">United States</option>
									<option value="UY">Uruguay</option>
									<option value="UM">U.S. Outlying Islands</option>
									<option value="VI">U.S. Virgin Islands</option>
									<option value="UZ">Uzbekistan</option>
									<option value="VU">Vanuatu</option>
									<option value="VA">Vatican City</option>
									<option value="VE">Venezuela</option>
									<option value="VN">Vietnam</option>
									<option value="WF">Wallis and Futuna</option>
									<option value="EH">Western Sahara</option>
									<option value="YE">Yemen</option>
									<option value="ZM">Zambia</option>
									<option value="ZW">Zimbabwe</option>
								</select>
								<h3>State/Province</h3>
								<select>
									<option value="">Please select region, state or province</option>
									<option value="1">Alabama</option>
									<option value="2">Alaska</option>
									<option value="3">American Samoa</option>
									<option value="4">Arizona</option>
									<option value="5">Arkansas</option>
									<option value="6">Armed Forces Africa</option>
									<option value="7">Armed Forces Americas</option>
									<option value="8">Armed Forces Canada</option>
									<option value="9">Armed Forces Europe</option>
									<option value="10">Armed Forces Middle East</option>
									<option value="11">Armed Forces Pacific</option>
									<option value="12">California</option>
									<option value="13">Colorado</option>
									<option value="14">Connecticut</option>
									<option value="15">Delaware</option>
									<option value="16">District of Columbia</option>
									<option value="17">Federated States Of Micronesia</option>
									<option value="18">Florida</option>
									<option value="19">Georgia</option>
									<option value="20">Guam</option>
									<option value="21">Hawaii</option>
									<option value="22">Idaho</option>
									<option value="23">Illinois</option>
									<option value="24">Indiana</option>
									<option value="25">Iowa</option>
									<option value="26">Kansas</option>
									<option value="27">Kentucky</option>
									<option value="28">Louisiana</option>
									<option value="29">Maine</option>
									<option value="30">Marshall Islands</option>
									<option value="31">Maryland</option>
									<option value="32">Massachusetts</option>
									<option value="33">Michigan</option>
									<option value="34">Minnesota</option>
									<option value="35">Mississippi</option>
									<option value="36">Missouri</option>
									<option value="37">Montana</option>
									<option value="38">Nebraska</option>
									<option value="39">Nevada</option>
									<option value="40">New Hampshire</option>
									<option value="41">New Jersey</option>
									<option value="42">New Mexico</option>
									<option value="43">New York</option>
									<option value="44">North Carolina</option>
									<option value="45">North Dakota</option>
									<option value="46">Northern Mariana Islands</option>
									<option value="47">Ohio</option>
									<option value="48">Oklahoma</option>
									<option value="49">Oregon</option>
									<option value="50">Palau</option>
									<option value="51">Pennsylvania</option>
									<option value="52">Puerto Rico</option>
									<option value="53">Rhode Island</option>
									<option value="54">South Carolina</option>
									<option value="55">South Dakota</option>
									<option value="56">Tennessee</option>
									<option value="57">Texas</option>
									<option value="58">Utah</option>
									<option value="59">Vermont</option>
									<option value="60">Virgin Islands</option>
									<option value="61">Virginia</option>
									<option value="62">Washington</option>
									<option value="63">West Virginia</option>
									<option value="64">Wisconsin</option>
									<option value="65">Wyoming</option>
								</select>
								<h3>Zip/Postal Code</h3>
								<input type="text">
								<div class="shiping-cart-button">
									<button type="button" class="btn">Get A Quote</button>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-12">
							<div class="chart-all fix">
								<h2>Discount Codes</h2>
								<p>Enter your coupon code if you have one.</p>
								<input type="text">
								<div class="shiping-cart-button">
									<button type="button" class="btn">Apply Coupon</button>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-12">
							<div class="shopping-summary chart-all fix">
								<div class="shopping-cost-area">
									<div class="shopping-cost">
										<div class="shopping-cost-right">
											<p>$2.010.00</p>
											<p><b>$2.010.00</b></p>
										</div>
										<div class="shopping-cost-left">
											<p class="floatright">Sub Total </p>
											<p><b>GRAND TOTAL</b> </p>
										</div>
									</div>
									<div class="shiping-cart-button">
										<button type="button" class="btn">Proceed to Checkout</button>
									</div>
									<a href="#">Checkout with Multiple Addresses</a>
								</div>
							</div>
						</div>
					</div><!-- End Cart Shoping Area -->
				</div>
			</div>
		</div><!-- End Cart Area -->
		@endsection
		
		
		
		
		
		
		
