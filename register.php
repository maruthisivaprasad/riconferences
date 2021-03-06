<?php include_once 'header.php';
require_once('config.php');
$sql = "select * from events where slug='".$_GET['id']."'";
$res = mysqli_query($conn,$sql);
$result = mysqli_fetch_object($res);
$eventid = $result->slug;
$earlydate1 = $regulardate1 = $onspotdate1 = $earlydate = $regulardate = $onspotdate = '';
if (!empty($result->early_date)) {
    $earlydate1 = strtotime($result->early_date);
}
if (!empty($result->regular_date)) {
    $regulardate1 = strtotime($result->regular_date);
}
if (!empty($result->onsport_date)) {
    $onspotdate1 = strtotime($result->onsport_date);
}
$today = strtotime(date('Y-m-d'));
if($today > $earlydate1)
    $earlydate = 1;
else
    $earlydate = 0;
if($today > $regulardate1)
    $regulardate = 1;
else
    $regulardate = 0;
if($today > $onspotdate1)
    $onspotdate = 1;
else
    $onspotdate = 0;
?>
<title>Register | RI Conferences</title>
<div class="inner-banner">
    <div class="overlay">
        <div class="container clearfix text-center">
            <h2>Registration</h2>
        </div> <!-- /.container -->
    </div> <!-- /.overlay -->
</div> <!-- /.inner-banner -->
<div class="about-us-section">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <form action="<?php echo $paypalURL; ?>" method="post" name="form1" id="form1">
            <div class="col">
                <div class="form-row">
                <div class="form-group col-md-6 mb-2">
                    <input type="hidden" name="business" value="<?php echo $paypalID; ?>">
                    <input type="hidden" name="cmd" value="_xclick">
                    <input type="hidden" name="currency_code" value="USD">
                    <input type='hidden' name='cancel_return' value='<?php echo $urlpath;?>/index.php'>
                    <input type='hidden' name='return' value='<?php echo $urlpath;?>/checkout.php'>
                    <input type='hidden' name='notify_url' value='<?php echo $urlpath;?>/checkout.php'>
                    <select name="title" class="form-control" placeholder="Title" required data-validation-required-message="Please select your title.">
                      <option value="" selected>Select Titles</option>
                      <option value="Dr.">Dr.</option>
                      <option value="Mr.">Mr.</option>
                      <option value="Mrs.">Mrs.</option>
                      <option value="Ms.">Ms.</option>
                    </select>
                    <input type="hidden" name="eventid" id="eventid" value="<?php echo $eventid;?>">
                    <p class="help-block text-danger ma-0 mb-0"></p>
                </div>
                <div class="form-group col-md-6 mb-2">
                    <input type="text" class="form-control" placeholder="Your Name *" name="name" id="name" required data-validation-required-message="Please enter your name.">
                    <p class="help-block text-danger ma-0 mb-0"></p>
                </div>
                </div>
                <div class="form-row">
                <div class="form-group col-md-6 mb-2">
                    <input type="email" class="form-control" placeholder="Your Email *" name="email" id="email" required data-validation-required-message="Please enter your email address.">
                    <p class="help-block text-danger ma-0 mb-0"></p>
                </div>
                <div class="form-group col-md-6 mb-2">
                    <input type="tel" class="form-control" placeholder="Your Phone *" name="phone" id="phone" required data-validation-required-message="Please enter your phone number.">
                    <p class="help-block text-danger ma-0 mb-0"></p>
                </div>
                </div>
                <div class="form-row">
                <div class="form-group col-md-6 mb-2">
                        <select class="form-control" name="country" placeholder="Select country" required data-validation-required-message="Please select your country.">
                            <option value="" selected="selected">Select country</option>
                                              <option value="United States" >United States</option>
                                              <option value="United Kingdom"  >United Kingdom</option>
                                              <option value="Afghanistan"  >Afghanistan</option>
                                              <option value="Albania"  >Albania</option>
                                              <option value="Algeria"  >Algeria</option>
                                              <option value="American Samoa"  >American Samoa</option>
                                              <option value="Andorra"  >Andorra</option>
    
                                              <option value="Angola"  >Angola</option>
                                              <option value="Anguilla"  >Anguilla</option>
                                              <option value="Antarctica"  >Antarctica</option>
                                              <option value="Antigua and Barbuda"  >Antigua and Barbuda</option>
                                              <option value="Argentina"  >Argentina</option>
                                              <option value="Armenia"  >Armenia</option>
    
                                              <option value="Aruba"  >Aruba</option>
                                              <option value="Australia"  >Australia</option>
                                              <option value="Austria"  >Austria</option>
                                              <option value="Azerbaijan"  >Azerbaijan</option>
                                              <option value="Bahamas"  >Bahamas</option>
                                              <option value="Bahrain"  >Bahrain</option>
    
                                              <option value="Bangladesh"  >Bangladesh</option>
                                              <option value="Barbados"  >Barbados</option>
                                              <option value="Belarus"  >Belarus</option>
                                              <option value="Belgium"  >Belgium</option>
                                              <option value="Belize"  >Belize</option>
                                              <option value="Benin"  >Benin</option>
    
                                              <option value="Bermuda"  >Bermuda</option>
                                              <option value="Bhutan"  >Bhutan</option>
                                              <option value="Bolivia"  >Bolivia</option>
                                              <option value="Bosnia and Herzegovina"  >Bosnia and Herzegovina</option>
                                              <option value="Botswana"  >Botswana</option>
                                              <option value="Bouvet Island"  >Bouvet Island</option>
    
                                              <option value="Brazil"  >Brazil</option>
                                              <option value="British Indian Ocean Territory"  >British Indian Ocean Territory</option>
                                              <option value="Brunei Darussalam"  >Brunei Darussalam</option>
                                              <option value="Bulgaria"  >Bulgaria</option>
                                              <option value="Burkina Faso"  >Burkina Faso</option>
                                              <option value="Burundi"  >Burundi</option>
    
                                              <option value="Cambodia"  >Cambodia</option>
                                              <option value="Cameroon"  >Cameroon</option>
                                              <option value="Canada"  >Canada</option>
                                              <option value="Canadian Nunavut Territory"  >Canadian Nunavut Territory</option>
                                              <option value="Cape Verde"  >Cape Verde</option>
                                              <option value="Cayman Islands"  >Cayman Islands</option>
    
                                              <option value="Central African Republic"  >Central African Republic</option>
                                              <option value="Chad"  >Chad</option>
                                              <option value="Chile"  >Chile</option>
                                              <option value="China"  >China</option>
                                              <option value="Christmas Island"  >Christmas Island</option>
                                              <option value="Cocos (Keeling Islands)"  >Cocos (Keeling Islands)</option>
    
                                              <option value="Colombia"  >Colombia</option>
                                              <option value="Comoros"  >Comoros</option>
                                              <option value="Congo"  >Congo</option>
                                              <option value="Cook Islands"  >Cook Islands</option>
                                              <option value="Costa Rica"  >Costa Rica</option>
                                              <option value="Cote D'Ivoire (Ivory Coast)"  >Cote D'Ivoire (Ivory Coast)</option>
    
                                              <option value="Croatia (Hrvatska)"  >Croatia (Hrvatska)</option>
                                              <option value="Cuba"  >Cuba</option>
                                              <option value="Cyprus"  >Cyprus</option>
                                              <option value="Czech Republic"  >Czech Republic</option>
                                              <option value="Denmark"  >Denmark</option>
                                              <option value="Djibouti"  >Djibouti</option>
    
                                              <option value="Dominica"  >Dominica</option>
                                              <option value="Dominican Republic"  >Dominican Republic</option>
                                              <option value="East Timor"  >East Timor</option>
                                              <option value="Ecuador"  >Ecuador</option>
                                              <option value="Egypt"  >Egypt</option>
                                              <option value="El Salvador"  >El Salvador</option>
    
                                              <option value="Equatorial Guinea"  >Equatorial Guinea</option>
                                              <option value="Eritrea"  >Eritrea</option>
                                              <option value="Estonia"  >Estonia</option>
                                              <option value="Ethiopia"  >Ethiopia</option>
                                              <option value="Falkland Islands (Malvinas)"  >Falkland Islands (Malvinas)</option>
                                              <option value="Faroe Islands"  >Faroe Islands</option>
    
                                              <option value="Fiji"  >Fiji</option>
                                              <option value="Finland"  >Finland</option>
                                              <option value="France"  >France</option>
                                              <option value="France, Metropolitan"  >France, Metropolitan</option>
                                              <option value="French Guiana"  >French Guiana</option>
                                              <option value="French Polynesia"  >French Polynesia</option>
    
                                              <option value="French Southern Territories"  >French Southern Territories</option>
                                              <option value="Gabon"  >Gabon</option>
                                              <option value="Gambia"  >Gambia</option>
                                              <option value="Georgia"  >Georgia</option>
                                              <option value="Germany"  >Germany</option>
                                              <option value="Ghana"  >Ghana</option>
    
                                              <option value="Gibraltar"  >Gibraltar</option>
                                              <option value="Greece"  >Greece</option>
                                              <option value="Greenland"  >Greenland</option>
                                              <option value="Grenada"  >Grenada</option>
                                              <option value="Guadeloupe"  >Guadeloupe</option>
                                              <option value="Guam"  >Guam</option>
    
                                              <option value="Guatemala"  >Guatemala</option>
                                              <option value="Guinea"  >Guinea</option>
                                              <option value="Guinea-Bissau"  >Guinea-Bissau</option>
                                              <option value="Guyana"  >Guyana</option>
                                              <option value="Haiti"  >Haiti</option>
                                              <option value="Heard and McDonald Islands"  >Heard and McDonald Islands</option>
    
                                              <option value="Honduras"  >Honduras</option>
                                              <option value="Hong Kong"  >Hong Kong</option>
                                              <option value="Hungary"  >Hungary</option>
                                              <option value="Iceland"  >Iceland</option>
                                              <option value="India"  >India</option>
                                              <option value="Indonesia"  >Indonesia</option>
    
                                              <option value="Iran"  >Iran</option>
                                              <option value="Iraq"  >Iraq</option>
                                              <option value="Ireland"  >Ireland</option>
                                              <option value="Israel"  >Israel</option>
                                              <option value="Italy"  >Italy</option>
                                              <option value="Jamaica"  >Jamaica</option>
    
                                              <option value="Japan"  >Japan</option>
                                              <option value="Jordan"  >Jordan</option>
                                              <option value="Kazakhstan"  >Kazakhstan</option>
                                              <option value="Kenya"  >Kenya</option>
                                              <option value="Kiribati"  >Kiribati</option>
                                              <option value="Korea (North)"  >Korea (North)</option>
    
                                              <option value="Korea (South)"  >Korea (South)</option>
                                              <option value="Kuwait"  >Kuwait</option>
                                              <option value="Kyrgyzstan"  >Kyrgyzstan</option>
                                              <option value="Laos"  >Laos</option>
                                              <option value="Latvia"  >Latvia</option>
                                              <option value="Lebanon"  >Lebanon</option>
    
                                              <option value="Lesotho"  >Lesotho</option>
                                              <option value="Liberia"  >Liberia</option>
                                              <option value="Libya"  >Libya</option>
                                              <option value="Liechtenstein"  >Liechtenstein</option>
                                              <option value="Lithuania"  >Lithuania</option>
                                              <option value="Luxembourg"  >Luxembourg</option>
    
                                              <option value="Macau"  >Macau</option>
                                              <option value="Macedonia"  >Macedonia</option>
                                              <option value="Madagascar"  >Madagascar</option>
                                              <option value="Malawi"  >Malawi</option>
                                              <option value="Malaysia"  >Malaysia</option>
                                              <option value="Maldives"  >Maldives</option>
    
                                              <option value="Mali"  >Mali</option>
                                              <option value="Malta<"  >Malta</option>
                                              <option value="Marshall Islands"  >Marshall Islands</option>
                                              <option value="Martinique"  >Martinique</option>
                                              <option value="Mauritania"  >Mauritania</option>
                                              <option value="Mauritius"  >Mauritius</option>
    
                                              <option value="Mayotte"  >Mayotte</option>
                                              <option value="Mexico"  >Mexico</option>
                                              <option value="Micronesia"  >Micronesia</option>
                                              <option value="Moldova"  >Moldova</option>
                                              <option value="Monaco"  >Monaco</option>
                                              <option value="Mongolia"  >Mongolia</option>
    
                                              <option value="Montserrat"  >Montserrat</option>
                                              <option value="Morocco"  >Morocco</option>
                                              <option value="Mozambique"  >Mozambique</option>
                                              <option value="Myanmar"  >Myanmar</option>
                                              <option value="Namibia"  >Namibia</option>
                                              <option value="Nauru"  >Nauru</option>
    
                                              <option value="Nepal"  >Nepal</option>
                                              <option value="Netherlands"  >Netherlands</option>
                                              <option value="Netherlands Antilles"  >Netherlands Antilles</option>
                                              <option value="New Caledonia"  >New Caledonia</option>
                                              <option value="New Zealand"  >New Zealand</option>
                                              <option value="Nicaragua"  >Nicaragua</option>
    
                                              <option value="Niger"  >Niger</option>
                                              <option value="Nigeria"  >Nigeria</option>
                                              <option value="Niue"  >Niue</option>
                                              <option value="Norfolk Island"  >Norfolk Island</option>
                                              <option value="Northern Mariana Islands"  >Northern Mariana Islands</option>
                                              <option value="Norway"  >Norway</option>
    
                                              <option value="Oman"  >Oman</option>
                                              <option value="Pakistan"  >Pakistan</option>
                                              <option value="Palau"  >Palau</option>
                                              <option value="Panama"  >Panama</option>
                                              <option value="Papua New Guinea"  >Papua New Guinea</option>
                                              <option value="Paraguay"  >Paraguay</option>
    
                                              <option value="Peru"  >Peru</option>
                                              <option value="Philippines"  >Philippines</option>
                                              <option value="Pitcairn"  >Pitcairn</option>
                                              <option value="Poland"  >Poland</option>
                                              <option value="Portugal"  >Portugal</option>
                                              <option value="Qatar"  >Qatar</option>
    
                                              <option value="Reunion"  >Reunion</option>
                                              <option value="Romania"  >Romania</option>
                                              <option value="Russian Federation"  >Russian Federation</option>
                                              <option value="Rwanda"  >Rwanda</option>
                                              <option value="S. Georgia and S. Sandwich Isls."  >S. Georgia and S. Sandwich Isls.</option>
                                              <option value="Saint Kitts and Nevis"  >Saint Kitts and Nevis</option>
    
                                              <option value="Saint Lucia"  >Saint Lucia</option>
                                              <option value="Saint Vincent and The Grenadines"  >Saint Vincent and The Grenadines</option>
                                              <option value="Samoa"  >Samoa</option>
                                              <option value="San Marino"  >San Marino</option>
                                              <option value="Sao Tome and Principe"  >Sao Tome and Principe</option>
                                              <option value="Saudi Arabia"  >Saudi Arabia</option>
    
                                              <option value="Senegal"  >Senegal</option>
                                              <option value="Seychelles"  >Seychelles</option>
                                              <option value="Sierra Leone"  >Sierra Leone</option>
                                              <option value="Singapore"  >Singapore</option>
                                              <option value="Slovak Republic"  >Slovak Republic</option>
                                              <option value="Slovenia"  >Slovenia</option>
    
                                              <option value="Solomon Islands"  >Solomon Islands</option>
                                              <option value="Somalia"  >Somalia</option>
                                              <option value="South Africa"  >South Africa</option>
                                              <option value="Spain"  >Spain</option>
                                              <option value="Sri Lanka"  >Sri Lanka</option>
                                              <option value="St. Helena"  >St. Helena</option>
    
                                              <option value="St. Pierre and Miquelon"  >St. Pierre and Miquelon</option>
                                              <option value="Sudan"  >Sudan</option>
                                              <option value="Suriname"  >Suriname</option>
                                              <option value="Svalbard and Jan Mayen Islands"  >Svalbard and Jan Mayen Islands</option>
                                              <option value="Swaziland"  >Swaziland</option>
                                              <option value="Sweden"  >Sweden</option>
    
                                              <option value="Switzerland"  >Switzerland</option>
                                              <option value="Syria"  >Syria</option>
                                              <option value="Taiwan"  >Taiwan</option>
                                              <option value="Tajikistan"  >Tajikistan</option>
                                              <option value="Tanzania"  >Tanzania</option>
                                              <option value="Thailand"  >Thailand</option>
    
                                              <option value="Togo"  >Togo</option>
                                              <option value="Tokelau"  >Tokelau</option>
                                              <option value="Tonga"  >Tonga</option>
                                              <option value="Trinidad and Tobago"  >Trinidad and Tobago</option>
                                              <option value="Tunisia"  >Tunisia</option>
                                              <option value="Turkey"  >Turkey</option>
    
                                              <option value="Turkmenistan"  >Turkmenistan</option>
                                              <option value="Turks and Caicos Islands"  >Turks and Caicos Islands</option>
                                              <option value="Tuvalu"  >Tuvalu</option>
                                              <option value="US Minor Outlying Islands"  >US Minor Outlying Islands</option>
                                              <option value="Uganda"  >Uganda</option>
                                              <option value="Ukraine"  >Ukraine</option>
    
    
                                              <option value="United Arab Emirates"  >United Arab Emirates</option>
                                              <option value="United Kingdom">United Kingdom</option>
                                              <option value="United States">United States</option>
                                              <option value="Uruguay"  >Uruguay</option>
                                              <option value="Uzbekistan"  >Uzbekistan</option>
                                              <option value="Vanuatu"  >Vanuatu</option>
    
                                              <option value="Vatican City State (Holy See)"  >Vatican City State (Holy See)</option>
                                              <option value="Venezuela"  >Venezuela</option>
    
                                              <option value="Viet Nam"  >Viet Nam</option>
                                              <option value="Virgin Islands (British)"  >Virgin Islands (British)</option>
                                              <option value="Wallis and Futuna Islands"  >Wallis and Futuna Islands</option>
                                              <option value="Western Sahara"  >Western Sahara</option>
    
                                              <option value="Yemen"  >Yemen</option>
                                              <option value="Yugoslavia"  >Yugoslavia</option>
                                              <option value="Zaire"  >Zaire</option>
                                              <option value="Zambia"  >Zambia</option>
                                              <option value="Zimbabwe"  >Zimbabwe</option>
                    </select>
                    <p class="help-block text-danger ma-0 mb-0"></p>
                 </div>
                
                 <div class="form-group col-md-6 mb-2">
					<textarea class="form-control" placeholder="Address" name="address" required data-validation-required-message="Please enter your address."></textarea>
                    <p class="help-block text-danger ma-0 mb-0"></p>
                 </div>
                 </div>
              
              <div class="clearfix"></div>
                    <div class="" style="width:100%;margin-left: 0px;">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th style="width:250px"&nbsp;></th>
                    <th style="width:250px" colspan="2">Earlybird on date <?php echo $result->early_date;?></th>
                    <th style="width:250px" colspan="2">Regular on date <?php echo $result->regular_date;?></th>
                    <th style="width:250px" colspan="2">On Spot on date <?php echo $result->onsport_date;?></th>
                  </tr>
                  <tr>
                    <th style="width:250px"&nbsp;></th>
                    <th style="width:125px">Academic</th>
                    <th style="width:125px">Business</th>
                    <th style="width:125px">Academic</th>
                    <th style="width:125px">Business</th>
                    <th style="width:125px">Academic</th>
                    <th style="width:125px">Business</th>
                    <th style="width:125px">Accommodation</th>
                  </tr>
                </thead>
                
                <tbody>
                  <tr>
                    <td>Speaker</td>
                    <td><?php if($earlydate == 0) {?>
                            <input type="radio" name="eamount" id="eamount" value="<?php echo $result->speaker_early_academic;?>"/>
                        <?php }?>  $<?php echo $result->speaker_early_academic;?></td>
                    <td><?php if($earlydate == 0) {?>
                        <input type="radio" name="eamount" id="eamount" value="<?php echo $result->speaker_early_business;?>"/><?php }?>  $<?php echo $result->speaker_early_business;?></td>
                    <td><?php if($regulardate == 0) {?>
                        <input type="radio" name="eamount" id="eamount" value="<?php echo $result->speaker_regular_academic;?>"/><?php }?>  $<?php echo $result->speaker_regular_academic;?></td>
                    <td><?php if($regulardate == 0) {?>
                        <input type="radio" name="eamount" id="eamount" value="<?php echo $result->speaker_regular_business;?>"/><?php }?>  $<?php echo $result->speaker_regular_business;?></td>
                    <td><?php if($onspotdate == 0) {?>
                        <input type="radio" name="eamount" id="eamount" value="<?php echo $result->speaker_onspot_academic;?>"/><?php }?>  $<?php echo $result->speaker_onspot_academic;?></td>
                    <td><?php if($onspotdate == 0) {?>
                        <input type="radio" name="eamount" id="eamount" value="<?php echo $result->speaker_onspot_business;?>"/><?php }?>  $<?php echo $result->speaker_onspot_business;?></td>
                  </tr>
                  <tr>
                    <td>Student</td>
                    <td><?php if($earlydate == 0) {?>
                        <input type="radio" name="eamount" id="eamount" value="<?php echo $result->student_early_academic;?>"/><?php }?>  $<?php echo $result->student_early_academic;?></td>
                    <td><?php if($earlydate == 0) {?>
                        <input type="radio" name="eamount" id="eamount" value="<?php echo $result->student_early_business;?>"/><?php }?>  $<?php echo $result->student_early_business;?></td>
                    <td><?php if($regulardate == 0) {?>
                        <input type="radio" name="eamount" id="eamount" value="<?php echo $result->student_regular_academic;?>"/><?php }?>  $<?php echo $result->student_regular_academic;?></td>
                    <td><?php if($regulardate == 0) {?>
                        <input type="radio" name="eamount" id="eamount" value="<?php echo $result->student_regular_business;?>"/><?php }?>  $<?php echo $result->student_regular_business;?></td>
                    <td><?php if($onspotdate == 0) {?>
                        <input type="radio" name="eamount" id="eamount" value="<?php echo $result->student_onspot_academic;?>"/><?php }?>  $<?php echo $result->student_onspot_academic;?></td>
                    <td><?php if($onspotdate == 0) {?>
                        <input type="radio" name="eamount" id="eamount" value="<?php echo $result->student_onspot_business;?>"/><?php }?>  $<?php echo $result->student_onspot_business;?></td>
                  </tr>
                  <tr>
                    <td>Delegate</td>
                    <td><?php if($earlydate == 0) {?>
                        <input type="radio" name="eamount" id="eamount" value="<?php echo $result->delegate_early_academic;?>"/><?php }?>  $<?php echo $result->delegate_early_academic;?></td>
                    <td><?php if($earlydate == 0) {?>
                        <input type="radio" name="eamount" id="eamount" value="<?php echo $result->delegate_early_business;?>"/><?php }?>  $<?php echo $result->delegate_early_business;?></td>
                    <td><?php if($regulardate == 0) {?>
                        <input type="radio" name="eamount" id="eamount" value="<?php echo $result->delegate_regular_academic;?>"/><?php }?>  $<?php echo $result->delegate_regular_academic;?></td>
                    <td><?php if($regulardate == 0) {?>
                        <input type="radio" name="eamount" id="eamount" value="<?php echo $result->delegate_regular_business;?>"/><?php }?>  $<?php echo $result->delegate_regular_business;?></td>
                    <td><?php if($onspotdate == 0) {?>
                        <input type="radio" name="eamount" id="eamount" value="<?php echo $result->delegate_onspot_academic;?>"/><?php }?>  $<?php echo $result->delegate_onspot_academic;?></td>
                    <td><?php if($onspotdate == 0) {?>
                        <input type="radio" name="eamount" id="eamount" value="<?php echo $result->delegate_onspot_business;?>"/><?php }?>  $<?php echo $result->delegate_onspot_business;?></td>
                  </tr>
                  <tr>
                    <td>Delegate</td>
                    <td colspan="2">
                        <input type="radio" name="aamount" id="aamount" value="<?php echo $result->speaker_accommodation;?>"/>$<?php echo $result->speaker_accommodation;?>
                    </td>
                    <td colspan="2">
                        <input type="radio" name="aamount" id="aamount" value="<?php echo $result->student_accommodation;?>"/>$<?php echo $result->student_accommodation;?>
                    </td>
                    <td colspan="2">
                        <input type="radio" name="aamount" id="aamount" value="<?php echo $result->delegate_accommodation;?>"/>$<?php echo $result->delegate_accommodation;?>
                    </td>
                  </tr>
                  <tr>
                      <td colspan="7">Total Amount: <input type="text" name="amount" id="amount" value="" readonly=""/></td>
                  </tr>
                </tbody>
              </table>
                <input type="image" class="btn btn-md" name="submit" border="0" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif" alt="PayPal - The safer, easier way to pay online"> 
                <img alt="" border="0" width="1" height="1" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
            </form>  
            </div>
        </div>
    </div> <!-- /.container -->
    <div class="col-md-2">
        <img src="images/paypal.jpg" class="mb-2">
        <h4>Only Registration Includes</h4>
        <ul>
            <li>Access to all Speaker Sessions and Network Sessions</li>
            <li>Fully Accessibility to Conference E-Material</li>
            <li>Lunch & Coffee breaks during the conference</li>
            <li>Certificate of participants</li>
        </ul>
    </div>
</div>
</div> </br><!-- /.about-us-section -->
            
            <?php include_once 'footer.php'; ?>
            <!-- jQuery -->
            <script src="<?php echo $urlpath;?>/vendor/jquery.2.2.3.min.js"></script>
            <!-- Popper js -->
            <script src="<?php echo $urlpath;?>/vendor/popper.js/popper.min.js"></script>
            <!-- Bootstrap JS -->
            <script src="<?php echo $urlpath;?>/vendor/bootstrap/js/bootstrap.min.js"></script>
            <!-- Language Stitcher -->
            <script src="<?php echo $urlpath;?>/vendor/language-switcher/jquery.polyglot.language.switcher.js"></script>
            <!-- Mega menu  -->
            <script src="<?php echo $urlpath;?>/vendor/bootstrap-mega-menu/js/menu.js"></script>
            <!-- WOW js -->
            <script src="<?php echo $urlpath;?>/vendor/WOW-master/dist/wow.min.js"></script>
            <!-- owl.carousel -->
            <script src="<?php echo $urlpath;?>/vendor/owl-carousel/owl.carousel.min.js"></script>
            <!-- js count to -->
            <script src="<?php echo $urlpath;?>/vendor/jquery.appear.js"></script>
            <script src="<?php echo $urlpath;?>/vendor/jquery.countTo.js"></script>
            <!-- Fancybox -->
            <script src="<?php echo $urlpath;?>/vendor/fancybox/dist/jquery.fancybox.min.js"></script>

            <!-- Theme js -->
            <script src="<?php echo $urlpath;?>/js/theme.js"></script>
        </div> <!-- /.main-page-wrapper -->
    </body>
</html>
<script>
    $("input[name='eamount']").change(function(){
        var eamount = parseInt($('input[name=eamount]:checked', '#form1').val(), 10);
        var aeamount = $('input[name=aamount]:checked', '#form1').val();
        if(aeamount !== undefined)
            var aamount = parseInt($('input[name=aamount]:checked', '#form1').val(), 10);
        else
            var aamount = '';
        if(aamount != '')
        {
            var amount = eamount + aamount;
        }
        else
            var amount = eamount;
        $('#amount').val(amount);
    });
    $("input[name='aamount']").change(function(){
        var eamount = parseInt($('input[name=aamount]:checked', '#form1').val(), 10);
        var aeamount = $('input[name=eamount]:checked', '#form1').val();
        if(aeamount !== undefined)
            var aamount = parseInt($('input[name=eamount]:checked', '#form1').val(), 10);
        else
            var aamount = '';
        var aamount = parseInt($('input[name=eamount]:checked', '#form1').val(), 10);
        if(aamount != '')
        {
            var amount = eamount + aamount;
        }
        else
            var amount = aamount;
        $('#amount').val(amount);
    });
</script>    
