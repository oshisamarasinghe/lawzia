<!DOCTYPE html>
<html lang="en">

<head>

    <title>Register Page | LAWZIA</title>

    <link rel="icon" href="../../images/lawzia-logo.jpg" sizes="32x32">


    <!-- CORE CSS-->
    <link rel="stylesheet" href="../../INDEX/assets/css/navmenu/styles.css">

    <link href="../../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="../../css/style.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- Custom CSS-->
    <link href="../../css/custom-style.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="../../css/style-horizontal.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="../../css/page-center.css" type="text/css" rel="stylesheet" media="screen,projection">

    <link href="../../css/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="../../js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet"
          media="screen,projection">

</head>

<body background="../../images/background-img.jpg">
<!--Page Loading -->
<!--?php include '../header-footer/nav-lawyer.php'; ?-->

<div id="basic-form" class="section">
    <div class="row">
        <div class="col s12 z-depth-4 card-panel">
            <div class="input-field col s12 center">
                <h4>Register</h4>
            </div>
            <div class="row">
                <form class="col s12" action="../../backend/lawyer-register.php" method="post">
                    <div class="row">
                        <div class="input-field col s3">
                            <select class="browser-default" name="title">
                                <option value="Mr.">Mr.</option>
                                <option value="Mrs.">Mrs.</option>
                                <option value="Ms.">Ms.</option>
                            </select>
                        </div>
                        <div class="input-field col s3">
                            <input id="first_name" type="text" name="fname">
                            <label for="first_name">First Name</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="last_name" type="text" name="lname">
                            <label for="last_name">Last Name</label>
                        </div>
                    </div>
                    <div class="row">
                        <label>Country</label>
                        <select class="browser-default" name="country">
                            <option value="" disabled selected>Choose your Country</option>
                            <option value="Afghanistan" title="Afghanistan">Afghanistan</option>
                            <option value="Åland Islands" title="Åland Islands">Åland Islands</option>
                            <option value="Albania" title="Albania">Albania</option>
                            <option value="Algeria" title="Algeria">Algeria</option>
                            <option value="American Samoa" title="American Samoa">American Samoa</option>
                            <option value="Andorra" title="Andorra">Andorra</option>
                            <option value="Angola" title="Angola">Angola</option>
                            <option value="Anguilla" title="Anguilla">Anguilla</option>
                            <option value="Antarctica" title="Antarctica">Antarctica</option>
                            <option value="Antigua and Barbuda" title="Antigua and Barbuda">Antigua and Barbuda</option>
                            <option value="Argentina" title="Argentina">Argentina</option>
                            <option value="Armenia" title="Armenia">Armenia</option>
                            <option value="Aruba" title="Aruba">Aruba</option>
                            <option value="Australia" title="Australia">Australia</option>
                            <option value="Austria" title="Austria">Austria</option>
                            <option value="Azerbaijan" title="Azerbaijan">Azerbaijan</option>
                            <option value="Bahamas" title="Bahamas">Bahamas</option>
                            <option value="Bahrain" title="Bahrain">Bahrain</option>
                            <option value="Bangladesh" title="Bangladesh">Bangladesh</option>
                            <option value="Barbados" title="Barbados">Barbados</option>
                            <option value="Belarus" title="Belarus">Belarus</option>
                            <option value="Belgium" title="Belgium">Belgium</option>
                            <option value="Belize" title="Belize">Belize</option>
                            <option value="Benin" title="Benin">Benin</option>
                            <option value="Bermuda" title="Bermuda">Bermuda</option>
                            <option value="Bhutan" title="Bhutan">Bhutan</option>
                            <option value="Bolivia, Plurinational State of" title="Bolivia, Plurinational State of">
                                Bolivia, Plurinational State of
                            </option>
                            <option value="Bonaire, Sint Eustatius and Saba" title="Bonaire, Sint Eustatius and Saba">
                                Bonaire, Sint Eustatius and Saba
                            </option>
                            <option value="Bosnia and Herzegovina" title="Bosnia and Herzegovina">Bosnia and
                                Herzegovina
                            </option>
                            <option value="Botswana" title="Botswana">Botswana</option>
                            <option value="Bouvet Island" title="Bouvet Island">Bouvet Island</option>
                            <option value="Brazil" title="Brazil">Brazil</option>
                            <option value="British Indian Ocean Territory" title="British Indian Ocean Territory">
                                British Indian Ocean Territory
                            </option>
                            <option value="Brunei Darussalam" title="Brunei Darussalam">Brunei Darussalam</option>
                            <option value="Bulgaria" title="Bulgaria">Bulgaria</option>
                            <option value="Burkina Faso" title="Burkina Faso">Burkina Faso</option>
                            <option value="Burundi" title="Burundi">Burundi</option>
                            <option value="Cambodia" title="Cambodia">Cambodia</option>
                            <option value="Cameroon" title="Cameroon">Cameroon</option>
                            <option value="Canada" title="Canada">Canada</option>
                            <option value="Cape Verde" title="Cape Verde">Cape Verde</option>
                            <option value="Cayman Islands" title="Cayman Islands">Cayman Islands</option>
                            <option value="Central African Republic" title="Central African Republic">Central African
                                Republic
                            </option>
                            <option value="Chad" title="Chad">Chad</option>
                            <option value="Chile" title="Chile">Chile</option>
                            <option value="China" title="China">China</option>
                            <option value="Christmas Island" title="Christmas Island">Christmas Island</option>
                            <option value="Cocos (Keeling) Islands" title="Cocos (Keeling) Islands">Cocos (Keeling)
                                Islands
                            </option>
                            <option value="Colombia" title="Colombia">Colombia</option>
                            <option value="Comoros" title="Comoros">Comoros</option>
                            <option value="Congo" title="Congo">Congo</option>
                            <option value="Congo, the Democratic Republic of the"
                                    title="Congo, the Democratic Republic of the">Congo, the Democratic Republic of the
                            </option>
                            <option value="Cook Islands" title="Cook Islands">Cook Islands</option>
                            <option value="Costa Rica" title="Costa Rica">Costa Rica</option>
                            <option value="Côte d'Ivoire" title="Côte d'Ivoire">Côte d'Ivoire</option>
                            <option value="Croatia" title="Croatia">Croatia</option>
                            <option value="Cuba" title="Cuba">Cuba</option>
                            <option value="Curaçao" title="Curaçao">Curaçao</option>
                            <option value="Cyprus" title="Cyprus">Cyprus</option>
                            <option value="Czech Republic" title="Czech Republic">Czech Republic</option>
                            <option value="Denmark" title="Denmark">Denmark</option>
                            <option value="Djibouti" title="Djibouti">Djibouti</option>
                            <option value="Dominica" title="Dominica">Dominica</option>
                            <option value="Dominican Republic" title="Dominican Republic">Dominican Republic</option>
                            <option value="Ecuador" title="Ecuador">Ecuador</option>
                            <option value="Egypt" title="Egypt">Egypt</option>
                            <option value="El Salvador" title="El Salvador">El Salvador</option>
                            <option value="Equatorial Guinea" title="Equatorial Guinea">Equatorial Guinea</option>
                            <option value="Eritrea" title="Eritrea">Eritrea</option>
                            <option value="Estonia" title="Estonia">Estonia</option>
                            <option value="Ethiopia" title="Ethiopia">Ethiopia</option>
                            <option value="Falkland Islands (Malvinas)" title="Falkland Islands (Malvinas)">Falkland
                                Islands (Malvinas)
                            </option>
                            <option value="Faroe Islands" title="Faroe Islands">Faroe Islands</option>
                            <option value="Fiji" title="Fiji">Fiji</option>
                            <option value="Finland" title="Finland">Finland</option>
                            <option value="France" title="France">France</option>
                            <option value="French Guiana" title="French Guiana">French Guiana</option>
                            <option value="French Polynesia" title="French Polynesia">French Polynesia</option>
                            <option value="French Southern Territories" title="French Southern Territories">French
                                Southern Territories
                            </option>
                            <option value="Gabon" title="Gabon">Gabon</option>
                            <option value="Gambia" title="Gambia">Gambia</option>
                            <option value="Georgia" title="Georgia">Georgia</option>
                            <option value="Germany" title="Germany">Germany</option>
                            <option value="Ghana" title="Ghana">Ghana</option>
                            <option value="Gibraltar" title="Gibraltar">Gibraltar</option>
                            <option value="Greece" title="Greece">Greece</option>
                            <option value="Greenland" title="Greenland">Greenland</option>
                            <option value="Grenada" title="Grenada">Grenada</option>
                            <option value="Guadeloupe" title="Guadeloupe">Guadeloupe</option>
                            <option value="Guam" title="Guam">Guam</option>
                            <option value="Guatemala" title="Guatemala">Guatemala</option>
                            <option value="Guernsey" title="Guernsey">Guernsey</option>
                            <option value="Guinea" title="Guinea">Guinea</option>
                            <option value="Guinea-Bissau" title="Guinea-Bissau">Guinea-Bissau</option>
                            <option value="Guyana" title="Guyana">Guyana</option>
                            <option value="Haiti" title="Haiti">Haiti</option>
                            <option value="Heard Island and McDonald Islands" title="Heard Island and McDonald Islands">
                                Heard Island and McDonald Islands
                            </option>
                            <option value="Holy See (Vatican City State)" title="Holy See (Vatican City State)">Holy See
                                (Vatican City State)
                            </option>
                            <option value="Honduras" title="Honduras">Honduras</option>
                            <option value="Hong Kong" title="Hong Kong">Hong Kong</option>
                            <option value="Hungary" title="Hungary">Hungary</option>
                            <option value="Iceland" title="Iceland">Iceland</option>
                            <option value="India" title="India">India</option>
                            <option value="Indonesia" title="Indonesia">Indonesia</option>
                            <option value="Iran, Islamic Republic of" title="Iran, Islamic Republic of">Iran, Islamic
                                Republic of
                            </option>
                            <option value="Iraq" title="Iraq">Iraq</option>
                            <option value="Ireland" title="Ireland">Ireland</option>
                            <option value="Isle of Man" title="Isle of Man">Isle of Man</option>
                            <option value="Israel" title="Israel">Israel</option>
                            <option value="Italy" title="Italy">Italy</option>
                            <option value="Jamaica" title="Jamaica">Jamaica</option>
                            <option value="Japan" title="Japan">Japan</option>
                            <option value="Jersey" title="Jersey">Jersey</option>
                            <option value="Jordan" title="Jordan">Jordan</option>
                            <option value="Kazakhstan" title="Kazakhstan">Kazakhstan</option>
                            <option value="Kenya" title="Kenya">Kenya</option>
                            <option value="Kiribati" title="Kiribati">Kiribati</option>
                            <option value="Korea, Democratic People's Republic of"
                                    title="Korea, Democratic People's Republic of">Korea, Democratic People's Republic
                                of
                            </option>
                            <option value="Korea, Republic of" title="Korea, Republic of">Korea, Republic of</option>
                            <option value="Kuwait" title="Kuwait">Kuwait</option>
                            <option value="Kyrgyzstan" title="Kyrgyzstan">Kyrgyzstan</option>
                            <option value="Lao People's Democratic Republic" title="Lao People's Democratic Republic">
                                Lao People's Democratic Republic
                            </option>
                            <option value="Latvia" title="Latvia">Latvia</option>
                            <option value="Lebanon" title="Lebanon">Lebanon</option>
                            <option value="Lesotho" title="Lesotho">Lesotho</option>
                            <option value="Liberia" title="Liberia">Liberia</option>
                            <option value="Libya" title="Libya">Libya</option>
                            <option value="Liechtenstein" title="Liechtenstein">Liechtenstein</option>
                            <option value="Lithuania" title="Lithuania">Lithuania</option>
                            <option value="Luxembourg" title="Luxembourg">Luxembourg</option>
                            <option value="Macao" title="Macao">Macao</option>
                            <option value="Macedonia, the former Yugoslav Republic of"
                                    title="Macedonia, the former Yugoslav Republic of">Macedonia, the former Yugoslav
                                Republic of
                            </option>
                            <option value="Madagascar" title="Madagascar">Madagascar</option>
                            <option value="Malawi" title="Malawi">Malawi</option>
                            <option value="Malaysia" title="Malaysia">Malaysia</option>
                            <option value="Maldives" title="Maldives">Maldives</option>
                            <option value="Mali" title="Mali">Mali</option>
                            <option value="Malta" title="Malta">Malta</option>
                            <option value="Marshall Islands" title="Marshall Islands">Marshall Islands</option>
                            <option value="Martinique" title="Martinique">Martinique</option>
                            <option value="Mauritania" title="Mauritania">Mauritania</option>
                            <option value="Mauritius" title="Mauritius">Mauritius</option>
                            <option value="Mayotte" title="Mayotte">Mayotte</option>
                            <option value="Mexico" title="Mexico">Mexico</option>
                            <option value="Micronesia, Federated States of" title="Micronesia, Federated States of">
                                Micronesia, Federated States of
                            </option>
                            <option value="Moldova, Republic of" title="Moldova, Republic of">Moldova, Republic of
                            </option>
                            <option value="Monaco" title="Monaco">Monaco</option>
                            <option value="Mongolia" title="Mongolia">Mongolia</option>
                            <option value="Montenegro" title="Montenegro">Montenegro</option>
                            <option value="Montserrat" title="Montserrat">Montserrat</option>
                            <option value="Morocco" title="Morocco">Morocco</option>
                            <option value="Mozambique" title="Mozambique">Mozambique</option>
                            <option value="Myanmar" title="Myanmar">Myanmar</option>
                            <option value="Namibia" title="Namibia">Namibia</option>
                            <option value="Nauru" title="Nauru">Nauru</option>
                            <option value="Nepal" title="Nepal">Nepal</option>
                            <option value="Netherlands" title="Netherlands">Netherlands</option>
                            <option value="New Caledonia" title="New Caledonia">New Caledonia</option>
                            <option value="New Zealand" title="New Zealand">New Zealand</option>
                            <option value="Nicaragua" title="Nicaragua">Nicaragua</option>
                            <option value="Niger" title="Niger">Niger</option>
                            <option value="Nigeria" title="Nigeria">Nigeria</option>
                            <option value="Niue" title="Niue">Niue</option>
                            <option value="Norfolk Island" title="Norfolk Island">Norfolk Island</option>
                            <option value="Northern Mariana Islands" title="Northern Mariana Islands">Northern Mariana
                                Islands
                            </option>
                            <option value="Norway" title="Norway">Norway</option>
                            <option value="Oman" title="Oman">Oman</option>
                            <option value="Pakistan" title="Pakistan">Pakistan</option>
                            <option value="Palau" title="Palau">Palau</option>
                            <option value="Palestinian Territory, Occupied" title="Palestinian Territory, Occupied">
                                Palestinian Territory, Occupied
                            </option>
                            <option value="Panama" title="Panama">Panama</option>
                            <option value="Papua New Guinea" title="Papua New Guinea">Papua New Guinea</option>
                            <option value="Paraguay" title="Paraguay">Paraguay</option>
                            <option value="Peru" title="Peru">Peru</option>
                            <option value="Philippines" title="Philippines">Philippines</option>
                            <option value="Pitcairn" title="Pitcairn">Pitcairn</option>
                            <option value="Poland" title="Poland">Poland</option>
                            <option value="Portugal" title="Portugal">Portugal</option>
                            <option value="Puerto Rico" title="Puerto Rico">Puerto Rico</option>
                            <option value="Qatar" title="Qatar">Qatar</option>
                            <option value="Réunion" title="Réunion">Réunion</option>
                            <option value="Romania" title="Romania">Romania</option>
                            <option value="Russian Federation" title="Russian Federation">Russian Federation</option>
                            <option value="Rwanda" title="Rwanda">Rwanda</option>
                            <option value="Saint Barthélemy" title="Saint Barthélemy">Saint Barthélemy</option>
                            <option value="Saint Helena, Ascension and Tristan da Cunha"
                                    title="Saint Helena, Ascension and Tristan da Cunha">Saint Helena, Ascension and
                                Tristan da Cunha
                            </option>
                            <option value="Saint Kitts and Nevis" title="Saint Kitts and Nevis">Saint Kitts and Nevis
                            </option>
                            <option value="Saint Lucia" title="Saint Lucia">Saint Lucia</option>
                            <option value="Saint Martin (French part)" title="Saint Martin (French part)">Saint Martin
                                (French part)
                            </option>
                            <option value="Saint Pierre and Miquelon" title="Saint Pierre and Miquelon">Saint Pierre and
                                Miquelon
                            </option>
                            <option value="Saint Vincent and the Grenadines" title="Saint Vincent and the Grenadines">
                                Saint Vincent and the Grenadines
                            </option>
                            <option value="Samoa" title="Samoa">Samoa</option>
                            <option value="San Marino" title="San Marino">San Marino</option>
                            <option value="Sao Tome and Principe" title="Sao Tome and Principe">Sao Tome and Principe
                            </option>
                            <option value="Saudi Arabia" title="Saudi Arabia">Saudi Arabia</option>
                            <option value="Senegal" title="Senegal">Senegal</option>
                            <option value="Serbia" title="Serbia">Serbia</option>
                            <option value="Seychelles" title="Seychelles">Seychelles</option>
                            <option value="Sierra Leone" title="Sierra Leone">Sierra Leone</option>
                            <option value="Singapore" title="Singapore">Singapore</option>
                            <option value="Sint Maarten (Dutch part)" title="Sint Maarten (Dutch part)">Sint Maarten
                                (Dutch part)
                            </option>
                            <option value="Slovakia" title="Slovakia">Slovakia</option>
                            <option value="Slovenia" title="Slovenia">Slovenia</option>
                            <option value="Solomon Islands" title="Solomon Islands">Solomon Islands</option>
                            <option value="Somalia" title="Somalia">Somalia</option>
                            <option value="South Africa" title="South Africa">South Africa</option>
                            <option value="South Georgia and the South Sandwich Islands"
                                    title="South Georgia and the South Sandwich Islands">South Georgia and the South
                                Sandwich Islands
                            </option>
                            <option value="South Sudan" title="South Sudan">South Sudan</option>
                            <option value="Spain" title="Spain">Spain</option>
                            <option value="Sri Lanka" title="Sri Lanka">Sri Lanka</option>
                            <option value="Sudan" title="Sudan">Sudan</option>
                            <option value="Suriname" title="Suriname">Suriname</option>
                            <option value="Svalbard and Jan Mayen" title="Svalbard and Jan Mayen">Svalbard and Jan
                                Mayen
                            </option>
                            <option value="Swaziland" title="Swaziland">Swaziland</option>
                            <option value="Sweden" title="Sweden">Sweden</option>
                            <option value="Switzerland" title="Switzerland">Switzerland</option>
                            <option value="Syrian Arab Republic" title="Syrian Arab Republic">Syrian Arab Republic
                            </option>
                            <option value="Taiwan, Province of China" title="Taiwan, Province of China">Taiwan, Province
                                of China
                            </option>
                            <option value="Tajikistan" title="Tajikistan">Tajikistan</option>
                            <option value="Tanzania, United Republic of" title="Tanzania, United Republic of">Tanzania,
                                United Republic of
                            </option>
                            <option value="Thailand" title="Thailand">Thailand</option>
                            <option value="Timor-Leste" title="Timor-Leste">Timor-Leste</option>
                            <option value="Togo" title="Togo">Togo</option>
                            <option value="Tokelau" title="Tokelau">Tokelau</option>
                            <option value="Tonga" title="Tonga">Tonga</option>
                            <option value="Trinidad and Tobago" title="Trinidad and Tobago">Trinidad and Tobago</option>
                            <option value="Tunisia" title="Tunisia">Tunisia</option>
                            <option value="Turkey" title="Turkey">Turkey</option>
                            <option value="Turkmenistan" title="Turkmenistan">Turkmenistan</option>
                            <option value="Turks and Caicos Islands" title="Turks and Caicos Islands">Turks and Caicos
                                Islands
                            </option>
                            <option value="Tuvalu" title="Tuvalu">Tuvalu</option>
                            <option value="Uganda" title="Uganda">Uganda</option>
                            <option value="Ukraine" title="Ukraine">Ukraine</option>
                            <option value="United Arab Emirates" title="United Arab Emirates">United Arab Emirates
                            </option>
                            <option value="United Kingdom" title="United Kingdom">United Kingdom</option>
                            <option value="United States" title="United States">United States</option>
                            <option value="United States Minor Outlying Islands"
                                    title="United States Minor Outlying Islands">United States Minor Outlying Islands
                            </option>
                            <option value="Uruguay" title="Uruguay">Uruguay</option>
                            <option value="Uzbekistan" title="Uzbekistan">Uzbekistan</option>
                            <option value="Vanuatu" title="Vanuatu">Vanuatu</option>
                            <option value="Venezuela, Bolivarian Republic of" title="Venezuela, Bolivarian Republic of">
                                Venezuela, Bolivarian Republic of
                            </option>
                            <option value="Viet Nam" title="Viet Nam">Viet Nam</option>
                            <option value="Virgin Islands, British" title="Virgin Islands, British">Virgin Islands,
                                British
                            </option>
                            <option value="Virgin Islands, U.S." title="Virgin Islands, U.S.">Virgin Islands, U.S.
                            </option>
                            <option value="Wallis and Futuna" title="Wallis and Futuna">Wallis and Futuna</option>
                            <option value="Western Sahara" title="Western Sahara">Western Sahara</option>
                            <option value="Yemen" title="Yemen">Yemen</option>
                            <option value="Zambia" title="Zambia">Zambia</option>
                            <option value="Zimbabwe" title="Zimbabwe">Zimbabwe</option>
                        </select>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="email" type="email" name="email">
                            <label for="email">Email</label>
                        </div>
                        <div class="input-field col s3">
                            <select type="select" name="CountryCode" class= "browser-default"aria-required="true" role="combobox"
                                    aria-labelledby="country-code-lbl-aria" >
                                <option role="option" data-code="+93" value="AF" >Afghanistan &#x202A;(+93)&#x202C;</option>
                                <option role="option" data-code="+355" value="AL" >Albania &#x202A;(+355)&#x202C;</option>
                                <option role="option" data-code="+213" value="DZ" >Algeria &#x202A;(+213)&#x202C;</option>
                                <option role="option" data-code="+1" value="AS" >American Samoa &#x202A;(+1)&#x202C;</option>
                                <option role="option" data-code="+376" value="AD" >Andorra &#x202A;(+376)&#x202C;</option>
                                <option role="option" data-code="+244" value="AO" >Angola &#x202A;(+244)&#x202C;</option>
                                <option role="option" data-code="+1" value="AI" >Anguilla &#x202A;(+1)&#x202C;</option>
                                <option role="option" data-code="+1" value="AG" >Antigua and Barbuda &#x202A;(+1)&#x202C;</option>
                                <option role="option" data-code="+54" value="AR" >Argentina &#x202A;(+54)&#x202C;</option>
                                <option role="option" data-code="+374" value="AM" >Armenia &#x202A;(+374)&#x202C;</option>
                                <option role="option" data-code="+297" value="AW" >Aruba &#x202A;(+297)&#x202C;</option>
                                <option role="option" data-code="+247" value="AC" >Ascension &#x202A;(+247)&#x202C;</option>
                                <option role="option" data-code="+61" value="AU" >Australia &#x202A;(+61)&#x202C;</option>
                                <option role="option" data-code="+672" value="AX" >Australian External Territories &#x202A;(+672)&#x202C;</option>
                                <option role="option" data-code="+43" value="AT" >Austria &#x202A;(+43)&#x202C;</option>
                                <option role="option" data-code="+994" value="AZ" >Azerbaijan &#x202A;(+994)&#x202C;</option>
                                <option role="option" data-code="+1" value="BS" >Bahamas &#x202A;(+1)&#x202C;</option>
                                <option role="option" data-code="+973" value="BH" >Bahrain &#x202A;(+973)&#x202C;</option>
                                <option role="option" data-code="+880" value="BD" >Bangladesh &#x202A;(+880)&#x202C;</option>
                                <option role="option" data-code="+1" value="BB" >Barbados &#x202A;(+1)&#x202C;</option>
                                <option role="option" data-code="+375" value="BY" >Belarus &#x202A;(+375)&#x202C;</option>
                                <option role="option" data-code="+32" value="BE" >Belgium &#x202A;(+32)&#x202C;</option>
                                <option role="option" data-code="+501" value="BZ" >Belize &#x202A;(+501)&#x202C;</option>
                                <option role="option" data-code="+229" value="BJ" >Benin &#x202A;(+229)&#x202C;</option>
                                <option role="option" data-code="+1" value="BM" >Bermuda &#x202A;(+1)&#x202C;</option>
                                <option role="option" data-code="+975" value="BT" >Bhutan &#x202A;(+975)&#x202C;</option>
                                <option role="option" data-code="+591" value="BO" >Bolivia &#x202A;(+591)&#x202C;</option>
                                <option role="option" data-code="+387" value="BA" >Bosnia and Herzegovina &#x202A;(+387)&#x202C;</option>
                                <option role="option" data-code="+267" value="BW" >Botswana &#x202A;(+267)&#x202C;</option>
                                <option role="option" data-code="+55" value="BR" >Brazil &#x202A;(+55)&#x202C;</option>
                                <option role="option" data-code="+1" value="VG" >British Virgin Islands &#x202A;(+1)&#x202C;</option>
                                <option role="option" data-code="+673" value="BN" >Brunei Darussalam &#x202A;(+673)&#x202C;</option>
                                <option role="option" data-code="+359" value="BG" >Bulgaria &#x202A;(+359)&#x202C;</option>
                                <option role="option" data-code="+226" value="BF" >Burkina Faso &#x202A;(+226)&#x202C;</option>
                                <option role="option" data-code="+257" value="BI" >Burundi &#x202A;(+257)&#x202C;</option>
                                <option role="option" data-code="+855" value="KH" >Cambodia &#x202A;(+855)&#x202C;</option>
                                <option role="option" data-code="+237" value="CM" >Cameroon &#x202A;(+237)&#x202C;</option>
                                <option role="option" data-code="+1" value="CA" >Canada &#x202A;(+1)&#x202C;</option>
                                <option role="option" data-code="+238" value="CV" >Cape Verde &#x202A;(+238)&#x202C;</option>
                                <option role="option" data-code="+1" value="KY" >Cayman Islands &#x202A;(+1)&#x202C;</option>
                                <option role="option" data-code="+236" value="CF" >Central African Republic &#x202A;(+236)&#x202C;</option>
                                <option role="option" data-code="+235" value="TD" >Chad &#x202A;(+235)&#x202C;</option>
                                <option role="option" data-code="+56" value="CL" >Chile &#x202A;(+56)&#x202C;</option>
                                <option role="option" data-code="+86" value="CN" >China &#x202A;(+86)&#x202C;</option>
                                <option role="option" data-code="+57" value="CO" >Colombia &#x202A;(+57)&#x202C;</option>
                                <option role="option" data-code="+269" value="KM" >Comoros &#x202A;(+269)&#x202C;</option>
                                <option role="option" data-code="+242" value="CG" >Congo &#x202A;(+242)&#x202C;</option>
                                <option role="option" data-code="+682" value="CK" >Cook Islands &#x202A;(+682)&#x202C;</option>
                                <option role="option" data-code="+506" value="CR" >Costa Rica &#x202A;(+506)&#x202C;</option>
                                <option role="option" data-code="+225" value="CI" >Cote dÕIvoire &#x202A;(+225)&#x202C;</option>
                                <option role="option" data-code="+385" value="HR" >Croatia &#x202A;(+385)&#x202C;</option>
                                <option role="option" data-code="+53" value="CU" >Cuba &#x202A;(+53)&#x202C;</option>
                                <option role="option" data-code="+357" value="CY" >Cyprus &#x202A;(+357)&#x202C;</option>
                                <option role="option" data-code="+420" value="CZ" >Czech Republic &#x202A;(+420)&#x202C;</option>
                                <option role="option" data-code="+243" value="CD" >Democratic Republic of the Congo &#x202A;(+243)&#x202C;</option>
                                <option role="option" data-code="+45" value="DK" >Denmark &#x202A;(+45)&#x202C;</option>
                                <option role="option" data-code="+246" value="DG" >Diego Garcia &#x202A;(+246)&#x202C;</option>
                                <option role="option" data-code="+253" value="DJ" >Djibouti &#x202A;(+253)&#x202C;</option>
                                <option role="option" data-code="+1" value="DM" >Dominica &#x202A;(+1)&#x202C;</option>
                                <option role="option" data-code="+1" value="DO" >Dominican Republic &#x202A;(+1)&#x202C;</option>
                                <option role="option" data-code="+670" value="TL" >East Timor &#x202A;(+670)&#x202C;</option>
                                <option role="option" data-code="+593" value="EC" >Ecuador &#x202A;(+593)&#x202C;</option>
                                <option role="option" data-code="+20" value="EG" >Egypt &#x202A;(+20)&#x202C;</option>
                                <option role="option" data-code="+503" value="SV" >El Salvador &#x202A;(+503)&#x202C;</option>
                                <option role="option" data-code="+240" value="GQ" >Equatorial Guinea &#x202A;(+240)&#x202C;</option>
                                <option role="option" data-code="+291" value="ER" >Eritrea &#x202A;(+291)&#x202C;</option>
                                <option role="option" data-code="+372" value="EE" >Estonia &#x202A;(+372)&#x202C;</option>
                                <option role="option" data-code="+251" value="ET" >Ethiopia &#x202A;(+251)&#x202C;</option>
                                <option role="option" data-code="+500" value="FK" >Falkland Islands &#x202A;(+500)&#x202C;</option>
                                <option role="option" data-code="+298" value="FO" >Faroe Islands &#x202A;(+298)&#x202C;</option>
                                <option role="option" data-code="+679" value="FJ" >Fiji &#x202A;(+679)&#x202C;</option>
                                <option role="option" data-code="+358" value="FI" >Finland &#x202A;(+358)&#x202C;</option>
                                <option role="option" data-code="+33" value="FR" >France &#x202A;(+33)&#x202C;</option>
                                <option role="option" data-code="+594" value="GF" >French Guiana &#x202A;(+594)&#x202C;</option>
                                <option role="option" data-code="+689" value="PF" >French Polynesia &#x202A;(+689)&#x202C;</option>
                                <option role="option" data-code="+241" value="GA" >Gabon &#x202A;(+241)&#x202C;</option>
                                <option role="option" data-code="+220" value="GM" >Gambia &#x202A;(+220)&#x202C;</option>
                                <option role="option" data-code="+995" value="GE" >Georgia &#x202A;(+995)&#x202C;</option>
                                <option role="option" data-code="+49" value="DE" >Germany &#x202A;(+49)&#x202C;</option>
                                <option role="option" data-code="+233" value="GH" >Ghana &#x202A;(+233)&#x202C;</option>
                                <option role="option" data-code="+350" value="GI" >Gibraltar &#x202A;(+350)&#x202C;</option>
                                <option role="option" data-code="+30" value="GR" >Greece &#x202A;(+30)&#x202C;</option>
                                <option role="option" data-code="+299" value="GL" >Greenland &#x202A;(+299)&#x202C;</option>
                                <option role="option" data-code="+1" value="GD" >Grenada &#x202A;(+1)&#x202C;</option>
                                <option role="option" data-code="+590" value="GP" >Guadeloupe &#x202A;(+590)&#x202C;</option>
                                <option role="option" data-code="+1" value="GU" >Guam &#x202A;(+1)&#x202C;</option>
                                <option role="option" data-code="+502" value="GT" >Guatemala &#x202A;(+502)&#x202C;</option>
                                <option role="option" data-code="+224" value="GN" >Guinea &#x202A;(+224)&#x202C;</option>
                                <option role="option" data-code="+245" value="GW" > &#x202A;(+245)&#x202C;</option>
                                <option role="option" data-code="+592" value="GY" >Guyana &#x202A;(+592)&#x202C;</option>
                                <option role="option" data-code="+509" value="HT" >Haiti &#x202A;(+509)&#x202C;</option>
                                <option role="option" data-code="+504" value="HN" >Honduras &#x202A;(+504)&#x202C;</option>
                                <option role="option" data-code="+852" value="HK" >Hong Kong &#x202A;(+852)&#x202C;</option>
                                <option role="option" data-code="+36" value="HU" >Hungary &#x202A;(+36)&#x202C;</option>
                                <option role="option" data-code="+354" value="IS" >Iceland &#x202A;(+354)&#x202C;</option>
                                <option role="option" data-code="+91" value="IN" >India &#x202A;(+91)&#x202C;</option>
                                <option role="option" data-code="+62" value="ID" >Indonesia &#x202A;(+62)&#x202C;</option>
                                <option role="option" data-code="+98" value="IR" >Iran &#x202A;(+98)&#x202C;</option>
                                <option role="option" data-code="+964" value="IQ" >Iraq &#x202A;(+964)&#x202C;</option>
                                <option role="option" data-code="+353" value="IE" >Ireland &#x202A;(+353)&#x202C;</option>
                                <option role="option" data-code="+972" value="IL" >Israel &#x202A;(+972)&#x202C;</option>
                                <option role="option" data-code="+39" value="IT" >Italy &#x202A;(+39)&#x202C;</option>
                                <option role="option" data-code="+1" value="JM" >Jamaica &#x202A;(+1)&#x202C;</option>
                                <option role="option" data-code="+81" value="JP" >Japan &#x202A;(+81)&#x202C;</option>
                                <option role="option" data-code="+962" value="JO" >Jordan &#x202A;(+962)&#x202C;</option>
                                <option role="option" data-code="+7" value="KZ" >Kazakhstan &#x202A;(+7)&#x202C;</option>
                                <option role="option" data-code="+254" value="KE" >Kenya &#x202A;(+254)&#x202C;</option>
                                <option role="option" data-code="+686" value="KI" >Kiribati &#x202A;(+686)&#x202C;</option>
                                <option role="option" data-code="+965" value="KW" >Kuwait &#x202A;(+965)&#x202C;</option>
                                <option role="option" data-code="+996" value="KG" >Kyrgyzstan &#x202A;(+996)&#x202C;</option>
                                <option role="option" data-code="+856" value="LA" >Laos &#x202A;(+856)&#x202C;</option>
                                <option role="option" data-code="+371" value="LV" >Latvia &#x202A;(+371)&#x202C;</option>
                                <option role="option" data-code="+961" value="LB" >Lebanon &#x202A;(+961)&#x202C;</option>
                                <option role="option" data-code="+266" value="LS" >Lesotho &#x202A;(+266)&#x202C;</option>
                                <option role="option" data-code="+231" value="LR" >Liberia &#x202A;(+231)&#x202C;</option>
                                <option role="option" data-code="+218" value="LY" >Libya &#x202A;(+218)&#x202C;</option>
                                <option role="option" data-code="+423" value="LI" >Liechtenstein &#x202A;(+423)&#x202C;</option>
                                <option role="option" data-code="+370" value="LT" >Lithuania &#x202A;(+370)&#x202C;</option>
                                <option role="option" data-code="+352" value="LU" >Luxembourg &#x202A;(+352)&#x202C;</option>
                                <option role="option" data-code="+853" value="MO" >Macao &#x202A;(+853)&#x202C;</option>
                                <option role="option" data-code="+389" value="MK" >Macedonia &#x202A;(+389)&#x202C;</option>
                                <option role="option" data-code="+261" value="MG" >Madagascar &#x202A;(+261)&#x202C;</option>
                                <option role="option" data-code="+265" value="MW" >Malawi &#x202A;(+265)&#x202C;</option>
                                <option role="option" data-code="+60" value="MY" >Malaysia &#x202A;(+60)&#x202C;</option>
                                <option role="option" data-code="+960" value="MV" >Maldives &#x202A;(+960)&#x202C;</option>
                                <option role="option" data-code="+223" value="ML" >Mali &#x202A;(+223)&#x202C;</option>
                                <option role="option" data-code="+356" value="MT" >Malta &#x202A;(+356)&#x202C;</option>
                                <option role="option" data-code="+692" value="MH" >Marshall Islands &#x202A;(+692)&#x202C;</option>
                                <option role="option" data-code="+596" value="MQ" >Martinique &#x202A;(+596)&#x202C;</option>
                                <option role="option" data-code="+222" value="MR" >Mauritania &#x202A;(+222)&#x202C;</option>
                                <option role="option" data-code="+230" value="MU" >Mauritius &#x202A;(+230)&#x202C;</option>
                                <option role="option" data-code="+52" value="MX" >Mexico &#x202A;(+52)&#x202C;</option>
                                <option role="option" data-code="+691" value="FM" >Micronesia &#x202A;(+691)&#x202C;</option>
                                <option role="option" data-code="+373" value="MD" >Moldova &#x202A;(+373)&#x202C;</option>
                                <option role="option" data-code="+377" value="MC" >Monaco &#x202A;(+377)&#x202C;</option>
                                <option role="option" data-code="+976" value="MN" >Mongolia &#x202A;(+976)&#x202C;</option>
                                <option role="option" data-code="+382" value="ME" >Montenegro &#x202A;(+382)&#x202C;</option>
                                <option role="option" data-code="+1" value="MS" >Montserrat &#x202A;(+1)&#x202C;</option>
                                <option role="option" data-code="+212" value="MA" >Morocco &#x202A;(+212)&#x202C;</option>
                                <option role="option" data-code="+258" value="MZ" >Mozambique &#x202A;(+258)&#x202C;</option>
                                <option role="option" data-code="+95" value="MM" >Myanmar &#x202A;(+95)&#x202C;</option>
                                <option role="option" data-code="+264" value="NA" >Namibia &#x202A;(+264)&#x202C;</option>
                                <option role="option" data-code="+674" value="NR" >Nauru &#x202A;(+674)&#x202C;</option>
                                <option role="option" data-code="+977" value="NP" >Nepal &#x202A;(+977)&#x202C;</option>
                                <option role="option" data-code="+31" value="NL" >Netherlands &#x202A;(+31)&#x202C;</option>
                                <option role="option" data-code="+599" value="AN" > &#x202A;(+599)&#x202C;</option>
                                <option role="option" data-code="+687" value="NC" >New Caledonia &#x202A;(+687)&#x202C;</option>
                                <option role="option" data-code="+64" value="NZ" >New Zealand &#x202A;(+64)&#x202C;</option>
                                <option role="option" data-code="+505" value="NI" >Nicaragua &#x202A;(+505)&#x202C;</option>
                                <option role="option" data-code="+227" value="NE" >Niger &#x202A;(+227)&#x202C;</option>
                                <option role="option" data-code="+234" value="NG" >Nigeria &#x202A;(+234)&#x202C;</option>
                                <option role="option" data-code="+683" value="NU" >Niue &#x202A;(+683)&#x202C;</option>
                                <option role="option" data-code="+850" value="KP" >North Korea &#x202A;(+850)&#x202C;</option>
                                <option role="option" data-code="+1" value="MP" >Northern Mariana Islands &#x202A;(+1)&#x202C;</option>
                                <option role="option" data-code="+47" value="NO" >Norway &#x202A;(+47)&#x202C;</option>
                                <option role="option" data-code="+968" value="OM" >Oman &#x202A;(+968)&#x202C;</option>
                                <option role="option" data-code="+92" value="PK" >Pakistan &#x202A;(+92)&#x202C;</option>
                                <option role="option" data-code="+680" value="PW" >Palau &#x202A;(+680)&#x202C;</option>
                                <option role="option" data-code="+970" value="PS" >Palestine &#x202A;(+970)&#x202C;</option>
                                <option role="option" data-code="+507" value="PA" >Panama &#x202A;(+507)&#x202C;</option>
                                <option role="option" data-code="+675" value="PG" >Papua New Guinea &#x202A;(+675)&#x202C;</option>
                                <option role="option" data-code="+595" value="PY" >Paraguay &#x202A;(+595)&#x202C;</option>
                                <option role="option" data-code="+51" value="PE" >Peru &#x202A;(+51)&#x202C;</option>
                                <option role="option" data-code="+63" value="PH" >Philippines &#x202A;(+63)&#x202C;</option>
                                <option role="option" data-code="+48" value="PL" >Poland &#x202A;(+48)&#x202C;</option>
                                <option role="option" data-code="+351" value="PT" >Portugal &#x202A;(+351)&#x202C;</option>
                                <option role="option" data-code="+1" value="PR" >Puerto Rico &#x202A;(+1)&#x202C;</option>
                                <option role="option" data-code="+974" value="QA" >Qatar &#x202A;(+974)&#x202C;</option>
                                <option role="option" data-code="+262" value="RE" >Reunion &#x202A;(+262)&#x202C;</option>
                                <option role="option" data-code="+40" value="RO" >Romania &#x202A;(+40)&#x202C;</option>
                                <option role="option" data-code="+7" value="RU" >Russia &#x202A;(+7)&#x202C;</option>
                                <option role="option" data-code="+250" value="RW" >Rwanda &#x202A;(+250)&#x202C;</option>
                                <option role="option" data-code="+290" value="SH" >Saint Helena &#x202A;(+290)&#x202C;</option>
                                <option role="option" data-code="+1" value="KN" >Saint Kitts and Nevis &#x202A;(+1)&#x202C;</option>
                                <option role="option" data-code="+1" value="LC" >Saint Lucia &#x202A;(+1)&#x202C;</option>
                                <option role="option" data-code="+508" value="PM" >Saint Pierre and Miquelon &#x202A;(+508)&#x202C;</option>
                                <option role="option" data-code="+1" value="VC" >Saint Vincent and Grenadines &#x202A;(+1)&#x202C;</option>
                                <option role="option" data-code="+685" value="WS" >Samoa &#x202A;(+685)&#x202C;</option>
                                <option role="option" data-code="+378" value="SM" >San Marino &#x202A;(+378)&#x202C;</option>
                                <option role="option" data-code="+239" value="ST" >Sao Tome and Principe &#x202A;(+239)&#x202C;</option>
                                <option role="option" data-code="+966" value="SA" >Saudi Arabia &#x202A;(+966)&#x202C;</option>
                                <option role="option" data-code="+221" value="SN" >Senegal &#x202A;(+221)&#x202C;</option>
                                <option role="option" data-code="+381" value="RS" >Serbia &#x202A;(+381)&#x202C;</option>
                                <option role="option" data-code="+248" value="SC" >Seychelles &#x202A;(+248)&#x202C;</option>
                                <option role="option" data-code="+232" value="SL" >Sierra Leone &#x202A;(+232)&#x202C;</option>
                                <option role="option" data-code="+65" value="SG" >Singapore &#x202A;(+65)&#x202C;</option>
                                <option role="option" data-code="+421" value="SK" >Slovakia &#x202A;(+421)&#x202C;</option>
                                <option role="option" data-code="+386" value="SI" >Slovenia &#x202A;(+386)&#x202C;</option>
                                <option role="option" data-code="+677" value="SB" >Solomon Islands &#x202A;(+677)&#x202C;</option>
                                <option role="option" data-code="+252" value="SO" >Somalia &#x202A;(+252)&#x202C;</option>
                                <option role="option" data-code="+27" value="ZA" >South Africa &#x202A;(+27)&#x202C;</option>
                                <option role="option" data-code="+82" value="KR" >South Korea &#x202A;(+82)&#x202C;</option>
                                <option role="option" data-code="+34" value="ES" >Spain &#x202A;(+34)&#x202C;</option>
                                <option role="option" data-code="+94" value="LK" >Sri Lanka &#x202A;(+94)&#x202C;</option>
                                <option role="option" data-code="+249" value="SD" >Sudan &#x202A;(+249)&#x202C;</option>
                                <option role="option" data-code="+597" value="SR" >Suriname &#x202A;(+597)&#x202C;</option>
                                <option role="option" data-code="+268" value="SZ" >Swaziland &#x202A;(+268)&#x202C;</option>
                                <option role="option" data-code="+46" value="SE" >Sweden &#x202A;(+46)&#x202C;</option>
                                <option role="option" data-code="+41" value="CH" >Switzerland &#x202A;(+41)&#x202C;</option>
                                <option role="option" data-code="+963" value="SY" >Syria &#x202A;(+963)&#x202C;</option>
                                <option role="option" data-code="+886" value="TW" >Taiwan &#x202A;(+886)&#x202C;</option>
                                <option role="option" data-code="+992" value="TJ" >Tajikistan &#x202A;(+992)&#x202C;</option>
                                <option role="option" data-code="+255" value="TZ" >Tanzania &#x202A;(+255)&#x202C;</option>
                                <option role="option" data-code="+66" value="TH" >Thailand &#x202A;(+66)&#x202C;</option>
                                <option role="option" data-code="+228" value="TG" >Togo &#x202A;(+228)&#x202C;</option>
                                <option role="option" data-code="+690" value="TK" >Tokelau &#x202A;(+690)&#x202C;</option>
                                <option role="option" data-code="+676" value="TO" >Tonga &#x202A;(+676)&#x202C;</option>
                                <option role="option" data-code="+1" value="TT" >Trinidad and Tobago &#x202A;(+1)&#x202C;</option>
                                <option role="option" data-code="+216" value="TN" >Tunisia &#x202A;(+216)&#x202C;</option>
                                <option role="option" data-code="+90" value="TR" >Turkey &#x202A;(+90)&#x202C;</option>
                                <option role="option" data-code="+993" value="TM" >Turkmenistan &#x202A;(+993)&#x202C;</option>
                                <option role="option" data-code="+1" value="TC" >Turks and Caicos Islands &#x202A;(+1)&#x202C;</option>
                                <option role="option" data-code="+688" value="TV" >Tuvalu &#x202A;(+688)&#x202C;</option>
                                <option role="option" data-code="+1" value="VI" >US Virgin Islands &#x202A;(+1)&#x202C;</option>
                                <option role="option" data-code="+256" value="UG" >Uganda &#x202A;(+256)&#x202C;</option>
                                <option role="option" data-code="+380" value="UA" >Ukraine &#x202A;(+380)&#x202C;</option>
                                <option role="option" data-code="+971" value="AE" >United Arab Emirates &#x202A;(+971)&#x202C;</option>
                                <option role="option" data-code="+44" value="GB" >United Kingdom &#x202A;(+44)&#x202C;</option>
                                <option role="option" data-code="+1" value="US" data-format="(XXX) XXX-XXXX" selected="selected">United States &#x202A;(+1)&#x202C;</option>
                                <option role="option" data-code="+598" value="UY" >Uruguay &#x202A;(+598)&#x202C;</option>
                                <option role="option" data-code="+998" value="UZ" >Uzbekistan &#x202A;(+998)&#x202C;</option>
                                <option role="option" data-code="+678" value="VU" >Vanuatu &#x202A;(+678)&#x202C;</option>
                                <option role="option" data-code="+379" value="VA" >Vatican City &#x202A;(+379)&#x202C;</option>
                                <option role="option" data-code="+58" value="VE" >Venezuela &#x202A;(+58)&#x202C;</option>
                                <option role="option" data-code="+84" value="VN" >Vietnam &#x202A;(+84)&#x202C;</option>
                                <option role="option" data-code="+681" value="WF" >Wallis and Futuna &#x202A;(+681)&#x202C;</option>
                                <option role="option" data-code="+967" value="YE" >Yemen &#x202A;(+967)&#x202C;</option>
                                <option role="option" data-code="+260" value="ZM" >Zambia &#x202A;(+260)&#x202C;</option>
                                <option role="option" data-code="+263" value="ZW" >Zimbabwe &#x202A;(+263)&#x202C;</option>
                            </select>

                        </div>

                        <div class="input-field col s3">
                            <input id="contact" type="tel" name="contact">
                            <label for="contact">Contact No</label>
                        </div>
                    </div>


                    <h6>Work Experience:</h6>
                    <div class="row">
                        <div class="input-field col s6">
                            <select class="browser-default" name="exp">
                                <option value="Trainee">Trainee</option>
                                <option value="less than 5 years">less than 5 years</option>
                                <option value="less than 10 years">less than 10 years</option>
                                <option value="10+ years">10+ years</option>

                            </select>
                        </div>
                    </div>
                    <br>
                    <br>
                    <h6>Work Place Details:</h6>
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="w_name" type="text" name="w_name">
                            <label for="w_name">Company Name</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="w_position" type="text" name="w_position" placeholder="Director/Assistant Lawyer/Trainee..">
                            <label for="w_position" class="active">Position</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s4">
                            <input id="w_street" type="text" name="w_street">
                            <label for="w_street">Street</label>
                        </div>
                        <div class="input-field col s4">
                            <input id="w_city" type="text" name="w_city">
                            <label for="w_city">City</label>
                        </div>
                        <div class="input-field col s4">
                            <div class="row">
                                <select class="browser-default" name="w_country">
                                    <option value="" disabled selected>Company Country</option>
                                    <option value="Afghanistan" title="Afghanistan">Afghanistan</option>
                                    <option value="Åland Islands" title="Åland Islands">Åland Islands
                                    </option>
                                    <option value="Albania" title="Albania">Albania</option>
                                    <option value="Algeria" title="Algeria">Algeria</option>
                                    <option value="American Samoa" title="American Samoa">American Samoa
                                    </option>
                                    <option value="Andorra" title="Andorra">Andorra</option>
                                    <option value="Angola" title="Angola">Angola</option>
                                    <option value="Anguilla" title="Anguilla">Anguilla</option>
                                    <option value="Antarctica" title="Antarctica">Antarctica</option>
                                    <option value="Antigua and Barbuda" title="Antigua and Barbuda">Antigua
                                        and Barbuda
                                    </option>
                                    <option value="Argentina" title="Argentina">Argentina</option>
                                    <option value="Armenia" title="Armenia">Armenia</option>
                                    <option value="Aruba" title="Aruba">Aruba</option>
                                    <option value="Australia" title="Australia">Australia</option>
                                    <option value="Austria" title="Austria">Austria</option>
                                    <option value="Azerbaijan" title="Azerbaijan">Azerbaijan</option>
                                    <option value="Bahamas" title="Bahamas">Bahamas</option>
                                    <option value="Bahrain" title="Bahrain">Bahrain</option>
                                    <option value="Bangladesh" title="Bangladesh">Bangladesh</option>
                                    <option value="Barbados" title="Barbados">Barbados</option>
                                    <option value="Belarus" title="Belarus">Belarus</option>
                                    <option value="Belgium" title="Belgium">Belgium</option>
                                    <option value="Belize" title="Belize">Belize</option>
                                    <option value="Benin" title="Benin">Benin</option>
                                    <option value="Bermuda" title="Bermuda">Bermuda</option>
                                    <option value="Bhutan" title="Bhutan">Bhutan</option>
                                    <option value="Bolivia, Plurinational State of"
                                            title="Bolivia, Plurinational State of">Bolivia, Plurinational
                                        State of
                                    </option>
                                    <option value="Bonaire, Sint Eustatius and Saba"
                                            title="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius
                                        and Saba
                                    </option>
                                    <option value="Bosnia and Herzegovina" title="Bosnia and Herzegovina">
                                        Bosnia and Herzegovina
                                    </option>
                                    <option value="Botswana" title="Botswana">Botswana</option>
                                    <option value="Bouvet Island" title="Bouvet Island">Bouvet Island
                                    </option>
                                    <option value="Brazil" title="Brazil">Brazil</option>
                                    <option value="British Indian Ocean Territory"
                                            title="British Indian Ocean Territory">British Indian Ocean
                                        Territory
                                    </option>
                                    <option value="Brunei Darussalam" title="Brunei Darussalam">Brunei
                                        Darussalam
                                    </option>
                                    <option value="Bulgaria" title="Bulgaria">Bulgaria</option>
                                    <option value="Burkina Faso" title="Burkina Faso">Burkina Faso</option>
                                    <option value="Burundi" title="Burundi">Burundi</option>
                                    <option value="Cambodia" title="Cambodia">Cambodia</option>
                                    <option value="Cameroon" title="Cameroon">Cameroon</option>
                                    <option value="Canada" title="Canada">Canada</option>
                                    <option value="Cape Verde" title="Cape Verde">Cape Verde</option>
                                    <option value="Cayman Islands" title="Cayman Islands">Cayman Islands
                                    </option>
                                    <option value="Central African Republic"
                                            title="Central African Republic">Central African Republic
                                    </option>
                                    <option value="Chad" title="Chad">Chad</option>
                                    <option value="Chile" title="Chile">Chile</option>
                                    <option value="China" title="China">China</option>
                                    <option value="Christmas Island" title="Christmas Island">Christmas
                                        Island
                                    </option>
                                    <option value="Cocos (Keeling) Islands" title="Cocos (Keeling) Islands">
                                        Cocos (Keeling) Islands
                                    </option>
                                    <option value="Colombia" title="Colombia">Colombia</option>
                                    <option value="Comoros" title="Comoros">Comoros</option>
                                    <option value="Congo" title="Congo">Congo</option>
                                    <option value="Congo, the Democratic Republic of the"
                                            title="Congo, the Democratic Republic of the">Congo, the
                                        Democratic Republic of the
                                    </option>
                                    <option value="Cook Islands" title="Cook Islands">Cook Islands</option>
                                    <option value="Costa Rica" title="Costa Rica">Costa Rica</option>
                                    <option value="Côte d'Ivoire" title="Côte d'Ivoire">Côte d'Ivoire
                                    </option>
                                    <option value="Croatia" title="Croatia">Croatia</option>
                                    <option value="Cuba" title="Cuba">Cuba</option>
                                    <option value="Curaçao" title="Curaçao">Curaçao</option>
                                    <option value="Cyprus" title="Cyprus">Cyprus</option>
                                    <option value="Czech Republic" title="Czech Republic">Czech Republic
                                    </option>
                                    <option value="Denmark" title="Denmark">Denmark</option>
                                    <option value="Djibouti" title="Djibouti">Djibouti</option>
                                    <option value="Dominica" title="Dominica">Dominica</option>
                                    <option value="Dominican Republic" title="Dominican Republic">Dominican
                                        Republic
                                    </option>
                                    <option value="Ecuador" title="Ecuador">Ecuador</option>
                                    <option value="Egypt" title="Egypt">Egypt</option>
                                    <option value="El Salvador" title="El Salvador">El Salvador</option>
                                    <option value="Equatorial Guinea" title="Equatorial Guinea">Equatorial
                                        Guinea
                                    </option>
                                    <option value="Eritrea" title="Eritrea">Eritrea</option>
                                    <option value="Estonia" title="Estonia">Estonia</option>
                                    <option value="Ethiopia" title="Ethiopia">Ethiopia</option>
                                    <option value="Falkland Islands (Malvinas)"
                                            title="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)
                                    </option>
                                    <option value="Faroe Islands" title="Faroe Islands">Faroe Islands
                                    </option>
                                    <option value="Fiji" title="Fiji">Fiji</option>
                                    <option value="Finland" title="Finland">Finland</option>
                                    <option value="France" title="France">France</option>
                                    <option value="French Guiana" title="French Guiana">French Guiana
                                    </option>
                                    <option value="French Polynesia" title="French Polynesia">French
                                        Polynesia
                                    </option>
                                    <option value="French Southern Territories"
                                            title="French Southern Territories">French Southern Territories
                                    </option>
                                    <option value="Gabon" title="Gabon">Gabon</option>
                                    <option value="Gambia" title="Gambia">Gambia</option>
                                    <option value="Georgia" title="Georgia">Georgia</option>
                                    <option value="Germany" title="Germany">Germany</option>
                                    <option value="Ghana" title="Ghana">Ghana</option>
                                    <option value="Gibraltar" title="Gibraltar">Gibraltar</option>
                                    <option value="Greece" title="Greece">Greece</option>
                                    <option value="Greenland" title="Greenland">Greenland</option>
                                    <option value="Grenada" title="Grenada">Grenada</option>
                                    <option value="Guadeloupe" title="Guadeloupe">Guadeloupe</option>
                                    <option value="Guam" title="Guam">Guam</option>
                                    <option value="Guatemala" title="Guatemala">Guatemala</option>
                                    <option value="Guernsey" title="Guernsey">Guernsey</option>
                                    <option value="Guinea" title="Guinea">Guinea</option>
                                    <option value="Guinea-Bissau" title="Guinea-Bissau">Guinea-Bissau
                                    </option>
                                    <option value="Guyana" title="Guyana">Guyana</option>
                                    <option value="Haiti" title="Haiti">Haiti</option>
                                    <option value="Heard Island and McDonald Islands"
                                            title="Heard Island and McDonald Islands">Heard Island and
                                        McDonald Islands
                                    </option>
                                    <option value="Holy See (Vatican City State)"
                                            title="Holy See (Vatican City State)">Holy See (Vatican City
                                        State)
                                    </option>
                                    <option value="Honduras" title="Honduras">Honduras</option>
                                    <option value="Hong Kong" title="Hong Kong">Hong Kong</option>
                                    <option value="Hungary" title="Hungary">Hungary</option>
                                    <option value="Iceland" title="Iceland">Iceland</option>
                                    <option value="India" title="India">India</option>
                                    <option value="Indonesia" title="Indonesia">Indonesia</option>
                                    <option value="Iran, Islamic Republic of"
                                            title="Iran, Islamic Republic of">Iran, Islamic Republic of
                                    </option>
                                    <option value="Iraq" title="Iraq">Iraq</option>
                                    <option value="Ireland" title="Ireland">Ireland</option>
                                    <option value="Isle of Man" title="Isle of Man">Isle of Man</option>
                                    <option value="Israel" title="Israel">Israel</option>
                                    <option value="Italy" title="Italy">Italy</option>
                                    <option value="Jamaica" title="Jamaica">Jamaica</option>
                                    <option value="Japan" title="Japan">Japan</option>
                                    <option value="Jersey" title="Jersey">Jersey</option>
                                    <option value="Jordan" title="Jordan">Jordan</option>
                                    <option value="Kazakhstan" title="Kazakhstan">Kazakhstan</option>
                                    <option value="Kenya" title="Kenya">Kenya</option>
                                    <option value="Kiribati" title="Kiribati">Kiribati</option>
                                    <option value="Korea, Democratic People's Republic of"
                                            title="Korea, Democratic People's Republic of">Korea, Democratic
                                        People's Republic of
                                    </option>
                                    <option value="Korea, Republic of" title="Korea, Republic of">Korea,
                                        Republic of
                                    </option>
                                    <option value="Kuwait" title="Kuwait">Kuwait</option>
                                    <option value="Kyrgyzstan" title="Kyrgyzstan">Kyrgyzstan</option>
                                    <option value="Lao People's Democratic Republic"
                                            title="Lao People's Democratic Republic">Lao People's Democratic
                                        Republic
                                    </option>
                                    <option value="Latvia" title="Latvia">Latvia</option>
                                    <option value="Lebanon" title="Lebanon">Lebanon</option>
                                    <option value="Lesotho" title="Lesotho">Lesotho</option>
                                    <option value="Liberia" title="Liberia">Liberia</option>
                                    <option value="Libya" title="Libya">Libya</option>
                                    <option value="Liechtenstein" title="Liechtenstein">Liechtenstein
                                    </option>
                                    <option value="Lithuania" title="Lithuania">Lithuania</option>
                                    <option value="Luxembourg" title="Luxembourg">Luxembourg</option>
                                    <option value="Macao" title="Macao">Macao</option>
                                    <option value="Macedonia, the former Yugoslav Republic of"
                                            title="Macedonia, the former Yugoslav Republic of">Macedonia,
                                        the former Yugoslav Republic of
                                    </option>
                                    <option value="Madagascar" title="Madagascar">Madagascar</option>
                                    <option value="Malawi" title="Malawi">Malawi</option>
                                    <option value="Malaysia" title="Malaysia">Malaysia</option>
                                    <option value="Maldives" title="Maldives">Maldives</option>
                                    <option value="Mali" title="Mali">Mali</option>
                                    <option value="Malta" title="Malta">Malta</option>
                                    <option value="Marshall Islands" title="Marshall Islands">Marshall
                                        Islands
                                    </option>
                                    <option value="Martinique" title="Martinique">Martinique</option>
                                    <option value="Mauritania" title="Mauritania">Mauritania</option>
                                    <option value="Mauritius" title="Mauritius">Mauritius</option>
                                    <option value="Mayotte" title="Mayotte">Mayotte</option>
                                    <option value="Mexico" title="Mexico">Mexico</option>
                                    <option value="Micronesia, Federated States of"
                                            title="Micronesia, Federated States of">Micronesia, Federated
                                        States of
                                    </option>
                                    <option value="Moldova, Republic of" title="Moldova, Republic of">
                                        Moldova, Republic of
                                    </option>
                                    <option value="Monaco" title="Monaco">Monaco</option>
                                    <option value="Mongolia" title="Mongolia">Mongolia</option>
                                    <option value="Montenegro" title="Montenegro">Montenegro</option>
                                    <option value="Montserrat" title="Montserrat">Montserrat</option>
                                    <option value="Morocco" title="Morocco">Morocco</option>
                                    <option value="Mozambique" title="Mozambique">Mozambique</option>
                                    <option value="Myanmar" title="Myanmar">Myanmar</option>
                                    <option value="Namibia" title="Namibia">Namibia</option>
                                    <option value="Nauru" title="Nauru">Nauru</option>
                                    <option value="Nepal" title="Nepal">Nepal</option>
                                    <option value="Netherlands" title="Netherlands">Netherlands</option>
                                    <option value="New Caledonia" title="New Caledonia">New Caledonia
                                    </option>
                                    <option value="New Zealand" title="New Zealand">New Zealand</option>
                                    <option value="Nicaragua" title="Nicaragua">Nicaragua</option>
                                    <option value="Niger" title="Niger">Niger</option>
                                    <option value="Nigeria" title="Nigeria">Nigeria</option>
                                    <option value="Niue" title="Niue">Niue</option>
                                    <option value="Norfolk Island" title="Norfolk Island">Norfolk Island
                                    </option>
                                    <option value="Northern Mariana Islands"
                                            title="Northern Mariana Islands">Northern Mariana Islands
                                    </option>
                                    <option value="Norway" title="Norway">Norway</option>
                                    <option value="Oman" title="Oman">Oman</option>
                                    <option value="Pakistan" title="Pakistan">Pakistan</option>
                                    <option value="Palau" title="Palau">Palau</option>
                                    <option value="Palestinian Territory, Occupied"
                                            title="Palestinian Territory, Occupied">Palestinian Territory,
                                        Occupied
                                    </option>
                                    <option value="Panama" title="Panama">Panama</option>
                                    <option value="Papua New Guinea" title="Papua New Guinea">Papua New
                                        Guinea
                                    </option>
                                    <option value="Paraguay" title="Paraguay">Paraguay</option>
                                    <option value="Peru" title="Peru">Peru</option>
                                    <option value="Philippines" title="Philippines">Philippines</option>
                                    <option value="Pitcairn" title="Pitcairn">Pitcairn</option>
                                    <option value="Poland" title="Poland">Poland</option>
                                    <option value="Portugal" title="Portugal">Portugal</option>
                                    <option value="Puerto Rico" title="Puerto Rico">Puerto Rico</option>
                                    <option value="Qatar" title="Qatar">Qatar</option>
                                    <option value="Réunion" title="Réunion">Réunion</option>
                                    <option value="Romania" title="Romania">Romania</option>
                                    <option value="Russian Federation" title="Russian Federation">Russian
                                        Federation
                                    </option>
                                    <option value="Rwanda" title="Rwanda">Rwanda</option>
                                    <option value="Saint Barthélemy" title="Saint Barthélemy">Saint
                                        Barthélemy
                                    </option>
                                    <option value="Saint Helena, Ascension and Tristan da Cunha"
                                            title="Saint Helena, Ascension and Tristan da Cunha">Saint
                                        Helena, Ascension and Tristan da Cunha
                                    </option>
                                    <option value="Saint Kitts and Nevis" title="Saint Kitts and Nevis">
                                        Saint Kitts and Nevis
                                    </option>
                                    <option value="Saint Lucia" title="Saint Lucia">Saint Lucia</option>
                                    <option value="Saint Martin (French part)"
                                            title="Saint Martin (French part)">Saint Martin (French part)
                                    </option>
                                    <option value="Saint Pierre and Miquelon"
                                            title="Saint Pierre and Miquelon">Saint Pierre and Miquelon
                                    </option>
                                    <option value="Saint Vincent and the Grenadines"
                                            title="Saint Vincent and the Grenadines">Saint Vincent and the
                                        Grenadines
                                    </option>
                                    <option value="Samoa" title="Samoa">Samoa</option>
                                    <option value="San Marino" title="San Marino">San Marino</option>
                                    <option value="Sao Tome and Principe" title="Sao Tome and Principe">Sao
                                        Tome and Principe
                                    </option>
                                    <option value="Saudi Arabia" title="Saudi Arabia">Saudi Arabia</option>
                                    <option value="Senegal" title="Senegal">Senegal</option>
                                    <option value="Serbia" title="Serbia">Serbia</option>
                                    <option value="Seychelles" title="Seychelles">Seychelles</option>
                                    <option value="Sierra Leone" title="Sierra Leone">Sierra Leone</option>
                                    <option value="Singapore" title="Singapore">Singapore</option>
                                    <option value="Sint Maarten (Dutch part)"
                                            title="Sint Maarten (Dutch part)">Sint Maarten (Dutch part)
                                    </option>
                                    <option value="Slovakia" title="Slovakia">Slovakia</option>
                                    <option value="Slovenia" title="Slovenia">Slovenia</option>
                                    <option value="Solomon Islands" title="Solomon Islands">Solomon
                                        Islands
                                    </option>
                                    <option value="Somalia" title="Somalia">Somalia</option>
                                    <option value="South Africa" title="South Africa">South Africa</option>
                                    <option value="South Georgia and the South Sandwich Islands"
                                            title="South Georgia and the South Sandwich Islands">South
                                        Georgia and the South Sandwich Islands
                                    </option>
                                    <option value="South Sudan" title="South Sudan">South Sudan</option>
                                    <option value="Spain" title="Spain">Spain</option>
                                    <option value="Sri Lanka" title="Sri Lanka">Sri Lanka</option>
                                    <option value="Sudan" title="Sudan">Sudan</option>
                                    <option value="Suriname" title="Suriname">Suriname</option>
                                    <option value="Svalbard and Jan Mayen" title="Svalbard and Jan Mayen">
                                        Svalbard and Jan Mayen
                                    </option>
                                    <option value="Swaziland" title="Swaziland">Swaziland</option>
                                    <option value="Sweden" title="Sweden">Sweden</option>
                                    <option value="Switzerland" title="Switzerland">Switzerland</option>
                                    <option value="Syrian Arab Republic" title="Syrian Arab Republic">Syrian
                                        Arab Republic
                                    </option>
                                    <option value="Taiwan, Province of China"
                                            title="Taiwan, Province of China">Taiwan, Province of China
                                    </option>
                                    <option value="Tajikistan" title="Tajikistan">Tajikistan</option>
                                    <option value="Tanzania, United Republic of"
                                            title="Tanzania, United Republic of">Tanzania, United Republic
                                        of
                                    </option>
                                    <option value="Thailand" title="Thailand">Thailand</option>
                                    <option value="Timor-Leste" title="Timor-Leste">Timor-Leste</option>
                                    <option value="Togo" title="Togo">Togo</option>
                                    <option value="Tokelau" title="Tokelau">Tokelau</option>
                                    <option value="Tonga" title="Tonga">Tonga</option>
                                    <option value="Trinidad and Tobago" title="Trinidad and Tobago">Trinidad
                                        and Tobago
                                    </option>
                                    <option value="Tunisia" title="Tunisia">Tunisia</option>
                                    <option value="Turkey" title="Turkey">Turkey</option>
                                    <option value="Turkmenistan" title="Turkmenistan">Turkmenistan</option>
                                    <option value="Turks and Caicos Islands"
                                            title="Turks and Caicos Islands">Turks and Caicos Islands
                                    </option>
                                    <option value="Tuvalu" title="Tuvalu">Tuvalu</option>
                                    <option value="Uganda" title="Uganda">Uganda</option>
                                    <option value="Ukraine" title="Ukraine">Ukraine</option>
                                    <option value="United Arab Emirates" title="United Arab Emirates">United
                                        Arab Emirates
                                    </option>
                                    <option value="United Kingdom" title="United Kingdom">United Kingdom
                                    </option>
                                    <option value="United States" title="United States">United States
                                    </option>
                                    <option value="United States Minor Outlying Islands"
                                            title="United States Minor Outlying Islands">United States Minor
                                        Outlying Islands
                                    </option>
                                    <option value="Uruguay" title="Uruguay">Uruguay</option>
                                    <option value="Uzbekistan" title="Uzbekistan">Uzbekistan</option>
                                    <option value="Vanuatu" title="Vanuatu">Vanuatu</option>
                                    <option value="Venezuela, Bolivarian Republic of"
                                            title="Venezuela, Bolivarian Republic of">Venezuela, Bolivarian
                                        Republic of
                                    </option>
                                    <option value="Viet Nam" title="Viet Nam">Viet Nam</option>
                                    <option value="Virgin Islands, British" title="Virgin Islands, British">
                                        Virgin Islands, British
                                    </option>
                                    <option value="Virgin Islands, U.S." title="Virgin Islands, U.S.">Virgin
                                        Islands, U.S.
                                    </option>
                                    <option value="Wallis and Futuna" title="Wallis and Futuna">Wallis and
                                        Futuna
                                    </option>
                                    <option value="Western Sahara" title="Western Sahara">Western Sahara
                                    </option>
                                    <option value="Yemen" title="Yemen">Yemen</option>
                                    <option value="Zambia" title="Zambia">Zambia</option>
                                    <option value="Zimbabwe" title="Zimbabwe">Zimbabwe</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <input id="w_email" type="email" name="w_email" >
                                <label for="w_email" >Email</label>
                            </div>
                            <div class="input-field col s3">
                                <select type="select" name="w_CountryCode" class= "browser-default"aria-required="true" role="combobox"
                                        aria-labelledby="country-code-lbl-aria" >
                                    <option role="option" data-code="+93" value="AF" >Afghanistan &#x202A;(+93)&#x202C;</option>
                                    <option role="option" data-code="+355" value="AL" >Albania &#x202A;(+355)&#x202C;</option>
                                    <option role="option" data-code="+213" value="DZ" >Algeria &#x202A;(+213)&#x202C;</option>
                                    <option role="option" data-code="+1" value="AS" >American Samoa &#x202A;(+1)&#x202C;</option>
                                    <option role="option" data-code="+376" value="AD" >Andorra &#x202A;(+376)&#x202C;</option>
                                    <option role="option" data-code="+244" value="AO" >Angola &#x202A;(+244)&#x202C;</option>
                                    <option role="option" data-code="+1" value="AI" >Anguilla &#x202A;(+1)&#x202C;</option>
                                    <option role="option" data-code="+1" value="AG" >Antigua and Barbuda &#x202A;(+1)&#x202C;</option>
                                    <option role="option" data-code="+54" value="AR" >Argentina &#x202A;(+54)&#x202C;</option>
                                    <option role="option" data-code="+374" value="AM" >Armenia &#x202A;(+374)&#x202C;</option>
                                    <option role="option" data-code="+297" value="AW" >Aruba &#x202A;(+297)&#x202C;</option>
                                    <option role="option" data-code="+247" value="AC" >Ascension &#x202A;(+247)&#x202C;</option>
                                    <option role="option" data-code="+61" value="AU" >Australia &#x202A;(+61)&#x202C;</option>
                                    <option role="option" data-code="+672" value="AX" >Australian External Territories &#x202A;(+672)&#x202C;</option>
                                    <option role="option" data-code="+43" value="AT" >Austria &#x202A;(+43)&#x202C;</option>
                                    <option role="option" data-code="+994" value="AZ" >Azerbaijan &#x202A;(+994)&#x202C;</option>
                                    <option role="option" data-code="+1" value="BS" >Bahamas &#x202A;(+1)&#x202C;</option>
                                    <option role="option" data-code="+973" value="BH" >Bahrain &#x202A;(+973)&#x202C;</option>
                                    <option role="option" data-code="+880" value="BD" >Bangladesh &#x202A;(+880)&#x202C;</option>
                                    <option role="option" data-code="+1" value="BB" >Barbados &#x202A;(+1)&#x202C;</option>
                                    <option role="option" data-code="+375" value="BY" >Belarus &#x202A;(+375)&#x202C;</option>
                                    <option role="option" data-code="+32" value="BE" >Belgium &#x202A;(+32)&#x202C;</option>
                                    <option role="option" data-code="+501" value="BZ" >Belize &#x202A;(+501)&#x202C;</option>
                                    <option role="option" data-code="+229" value="BJ" >Benin &#x202A;(+229)&#x202C;</option>
                                    <option role="option" data-code="+1" value="BM" >Bermuda &#x202A;(+1)&#x202C;</option>
                                    <option role="option" data-code="+975" value="BT" >Bhutan &#x202A;(+975)&#x202C;</option>
                                    <option role="option" data-code="+591" value="BO" >Bolivia &#x202A;(+591)&#x202C;</option>
                                    <option role="option" data-code="+387" value="BA" >Bosnia and Herzegovina &#x202A;(+387)&#x202C;</option>
                                    <option role="option" data-code="+267" value="BW" >Botswana &#x202A;(+267)&#x202C;</option>
                                    <option role="option" data-code="+55" value="BR" >Brazil &#x202A;(+55)&#x202C;</option>
                                    <option role="option" data-code="+1" value="VG" >British Virgin Islands &#x202A;(+1)&#x202C;</option>
                                    <option role="option" data-code="+673" value="BN" >Brunei Darussalam &#x202A;(+673)&#x202C;</option>
                                    <option role="option" data-code="+359" value="BG" >Bulgaria &#x202A;(+359)&#x202C;</option>
                                    <option role="option" data-code="+226" value="BF" >Burkina Faso &#x202A;(+226)&#x202C;</option>
                                    <option role="option" data-code="+257" value="BI" >Burundi &#x202A;(+257)&#x202C;</option>
                                    <option role="option" data-code="+855" value="KH" >Cambodia &#x202A;(+855)&#x202C;</option>
                                    <option role="option" data-code="+237" value="CM" >Cameroon &#x202A;(+237)&#x202C;</option>
                                    <option role="option" data-code="+1" value="CA" >Canada &#x202A;(+1)&#x202C;</option>
                                    <option role="option" data-code="+238" value="CV" >Cape Verde &#x202A;(+238)&#x202C;</option>
                                    <option role="option" data-code="+1" value="KY" >Cayman Islands &#x202A;(+1)&#x202C;</option>
                                    <option role="option" data-code="+236" value="CF" >Central African Republic &#x202A;(+236)&#x202C;</option>
                                    <option role="option" data-code="+235" value="TD" >Chad &#x202A;(+235)&#x202C;</option>
                                    <option role="option" data-code="+56" value="CL" >Chile &#x202A;(+56)&#x202C;</option>
                                    <option role="option" data-code="+86" value="CN" >China &#x202A;(+86)&#x202C;</option>
                                    <option role="option" data-code="+57" value="CO" >Colombia &#x202A;(+57)&#x202C;</option>
                                    <option role="option" data-code="+269" value="KM" >Comoros &#x202A;(+269)&#x202C;</option>
                                    <option role="option" data-code="+242" value="CG" >Congo &#x202A;(+242)&#x202C;</option>
                                    <option role="option" data-code="+682" value="CK" >Cook Islands &#x202A;(+682)&#x202C;</option>
                                    <option role="option" data-code="+506" value="CR" >Costa Rica &#x202A;(+506)&#x202C;</option>
                                    <option role="option" data-code="+225" value="CI" >Cote dÕIvoire &#x202A;(+225)&#x202C;</option>
                                    <option role="option" data-code="+385" value="HR" >Croatia &#x202A;(+385)&#x202C;</option>
                                    <option role="option" data-code="+53" value="CU" >Cuba &#x202A;(+53)&#x202C;</option>
                                    <option role="option" data-code="+357" value="CY" >Cyprus &#x202A;(+357)&#x202C;</option>
                                    <option role="option" data-code="+420" value="CZ" >Czech Republic &#x202A;(+420)&#x202C;</option>
                                    <option role="option" data-code="+243" value="CD" >Democratic Republic of the Congo &#x202A;(+243)&#x202C;</option>
                                    <option role="option" data-code="+45" value="DK" >Denmark &#x202A;(+45)&#x202C;</option>
                                    <option role="option" data-code="+246" value="DG" >Diego Garcia &#x202A;(+246)&#x202C;</option>
                                    <option role="option" data-code="+253" value="DJ" >Djibouti &#x202A;(+253)&#x202C;</option>
                                    <option role="option" data-code="+1" value="DM" >Dominica &#x202A;(+1)&#x202C;</option>
                                    <option role="option" data-code="+1" value="DO" >Dominican Republic &#x202A;(+1)&#x202C;</option>
                                    <option role="option" data-code="+670" value="TL" >East Timor &#x202A;(+670)&#x202C;</option>
                                    <option role="option" data-code="+593" value="EC" >Ecuador &#x202A;(+593)&#x202C;</option>
                                    <option role="option" data-code="+20" value="EG" >Egypt &#x202A;(+20)&#x202C;</option>
                                    <option role="option" data-code="+503" value="SV" >El Salvador &#x202A;(+503)&#x202C;</option>
                                    <option role="option" data-code="+240" value="GQ" >Equatorial Guinea &#x202A;(+240)&#x202C;</option>
                                    <option role="option" data-code="+291" value="ER" >Eritrea &#x202A;(+291)&#x202C;</option>
                                    <option role="option" data-code="+372" value="EE" >Estonia &#x202A;(+372)&#x202C;</option>
                                    <option role="option" data-code="+251" value="ET" >Ethiopia &#x202A;(+251)&#x202C;</option>
                                    <option role="option" data-code="+500" value="FK" >Falkland Islands &#x202A;(+500)&#x202C;</option>
                                    <option role="option" data-code="+298" value="FO" >Faroe Islands &#x202A;(+298)&#x202C;</option>
                                    <option role="option" data-code="+679" value="FJ" >Fiji &#x202A;(+679)&#x202C;</option>
                                    <option role="option" data-code="+358" value="FI" >Finland &#x202A;(+358)&#x202C;</option>
                                    <option role="option" data-code="+33" value="FR" >France &#x202A;(+33)&#x202C;</option>
                                    <option role="option" data-code="+594" value="GF" >French Guiana &#x202A;(+594)&#x202C;</option>
                                    <option role="option" data-code="+689" value="PF" >French Polynesia &#x202A;(+689)&#x202C;</option>
                                    <option role="option" data-code="+241" value="GA" >Gabon &#x202A;(+241)&#x202C;</option>
                                    <option role="option" data-code="+220" value="GM" >Gambia &#x202A;(+220)&#x202C;</option>
                                    <option role="option" data-code="+995" value="GE" >Georgia &#x202A;(+995)&#x202C;</option>
                                    <option role="option" data-code="+49" value="DE" >Germany &#x202A;(+49)&#x202C;</option>
                                    <option role="option" data-code="+233" value="GH" >Ghana &#x202A;(+233)&#x202C;</option>
                                    <option role="option" data-code="+350" value="GI" >Gibraltar &#x202A;(+350)&#x202C;</option>
                                    <option role="option" data-code="+30" value="GR" >Greece &#x202A;(+30)&#x202C;</option>
                                    <option role="option" data-code="+299" value="GL" >Greenland &#x202A;(+299)&#x202C;</option>
                                    <option role="option" data-code="+1" value="GD" >Grenada &#x202A;(+1)&#x202C;</option>
                                    <option role="option" data-code="+590" value="GP" >Guadeloupe &#x202A;(+590)&#x202C;</option>
                                    <option role="option" data-code="+1" value="GU" >Guam &#x202A;(+1)&#x202C;</option>
                                    <option role="option" data-code="+502" value="GT" >Guatemala &#x202A;(+502)&#x202C;</option>
                                    <option role="option" data-code="+224" value="GN" >Guinea &#x202A;(+224)&#x202C;</option>
                                    <option role="option" data-code="+245" value="GW" > &#x202A;(+245)&#x202C;</option>
                                    <option role="option" data-code="+592" value="GY" >Guyana &#x202A;(+592)&#x202C;</option>
                                    <option role="option" data-code="+509" value="HT" >Haiti &#x202A;(+509)&#x202C;</option>
                                    <option role="option" data-code="+504" value="HN" >Honduras &#x202A;(+504)&#x202C;</option>
                                    <option role="option" data-code="+852" value="HK" >Hong Kong &#x202A;(+852)&#x202C;</option>
                                    <option role="option" data-code="+36" value="HU" >Hungary &#x202A;(+36)&#x202C;</option>
                                    <option role="option" data-code="+354" value="IS" >Iceland &#x202A;(+354)&#x202C;</option>
                                    <option role="option" data-code="+91" value="IN" >India &#x202A;(+91)&#x202C;</option>
                                    <option role="option" data-code="+62" value="ID" >Indonesia &#x202A;(+62)&#x202C;</option>
                                    <option role="option" data-code="+98" value="IR" >Iran &#x202A;(+98)&#x202C;</option>
                                    <option role="option" data-code="+964" value="IQ" >Iraq &#x202A;(+964)&#x202C;</option>
                                    <option role="option" data-code="+353" value="IE" >Ireland &#x202A;(+353)&#x202C;</option>
                                    <option role="option" data-code="+972" value="IL" >Israel &#x202A;(+972)&#x202C;</option>
                                    <option role="option" data-code="+39" value="IT" >Italy &#x202A;(+39)&#x202C;</option>
                                    <option role="option" data-code="+1" value="JM" >Jamaica &#x202A;(+1)&#x202C;</option>
                                    <option role="option" data-code="+81" value="JP" >Japan &#x202A;(+81)&#x202C;</option>
                                    <option role="option" data-code="+962" value="JO" >Jordan &#x202A;(+962)&#x202C;</option>
                                    <option role="option" data-code="+7" value="KZ" >Kazakhstan &#x202A;(+7)&#x202C;</option>
                                    <option role="option" data-code="+254" value="KE" >Kenya &#x202A;(+254)&#x202C;</option>
                                    <option role="option" data-code="+686" value="KI" >Kiribati &#x202A;(+686)&#x202C;</option>
                                    <option role="option" data-code="+965" value="KW" >Kuwait &#x202A;(+965)&#x202C;</option>
                                    <option role="option" data-code="+996" value="KG" >Kyrgyzstan &#x202A;(+996)&#x202C;</option>
                                    <option role="option" data-code="+856" value="LA" >Laos &#x202A;(+856)&#x202C;</option>
                                    <option role="option" data-code="+371" value="LV" >Latvia &#x202A;(+371)&#x202C;</option>
                                    <option role="option" data-code="+961" value="LB" >Lebanon &#x202A;(+961)&#x202C;</option>
                                    <option role="option" data-code="+266" value="LS" >Lesotho &#x202A;(+266)&#x202C;</option>
                                    <option role="option" data-code="+231" value="LR" >Liberia &#x202A;(+231)&#x202C;</option>
                                    <option role="option" data-code="+218" value="LY" >Libya &#x202A;(+218)&#x202C;</option>
                                    <option role="option" data-code="+423" value="LI" >Liechtenstein &#x202A;(+423)&#x202C;</option>
                                    <option role="option" data-code="+370" value="LT" >Lithuania &#x202A;(+370)&#x202C;</option>
                                    <option role="option" data-code="+352" value="LU" >Luxembourg &#x202A;(+352)&#x202C;</option>
                                    <option role="option" data-code="+853" value="MO" >Macao &#x202A;(+853)&#x202C;</option>
                                    <option role="option" data-code="+389" value="MK" >Macedonia &#x202A;(+389)&#x202C;</option>
                                    <option role="option" data-code="+261" value="MG" >Madagascar &#x202A;(+261)&#x202C;</option>
                                    <option role="option" data-code="+265" value="MW" >Malawi &#x202A;(+265)&#x202C;</option>
                                    <option role="option" data-code="+60" value="MY" >Malaysia &#x202A;(+60)&#x202C;</option>
                                    <option role="option" data-code="+960" value="MV" >Maldives &#x202A;(+960)&#x202C;</option>
                                    <option role="option" data-code="+223" value="ML" >Mali &#x202A;(+223)&#x202C;</option>
                                    <option role="option" data-code="+356" value="MT" >Malta &#x202A;(+356)&#x202C;</option>
                                    <option role="option" data-code="+692" value="MH" >Marshall Islands &#x202A;(+692)&#x202C;</option>
                                    <option role="option" data-code="+596" value="MQ" >Martinique &#x202A;(+596)&#x202C;</option>
                                    <option role="option" data-code="+222" value="MR" >Mauritania &#x202A;(+222)&#x202C;</option>
                                    <option role="option" data-code="+230" value="MU" >Mauritius &#x202A;(+230)&#x202C;</option>
                                    <option role="option" data-code="+52" value="MX" >Mexico &#x202A;(+52)&#x202C;</option>
                                    <option role="option" data-code="+691" value="FM" >Micronesia &#x202A;(+691)&#x202C;</option>
                                    <option role="option" data-code="+373" value="MD" >Moldova &#x202A;(+373)&#x202C;</option>
                                    <option role="option" data-code="+377" value="MC" >Monaco &#x202A;(+377)&#x202C;</option>
                                    <option role="option" data-code="+976" value="MN" >Mongolia &#x202A;(+976)&#x202C;</option>
                                    <option role="option" data-code="+382" value="ME" >Montenegro &#x202A;(+382)&#x202C;</option>
                                    <option role="option" data-code="+1" value="MS" >Montserrat &#x202A;(+1)&#x202C;</option>
                                    <option role="option" data-code="+212" value="MA" >Morocco &#x202A;(+212)&#x202C;</option>
                                    <option role="option" data-code="+258" value="MZ" >Mozambique &#x202A;(+258)&#x202C;</option>
                                    <option role="option" data-code="+95" value="MM" >Myanmar &#x202A;(+95)&#x202C;</option>
                                    <option role="option" data-code="+264" value="NA" >Namibia &#x202A;(+264)&#x202C;</option>
                                    <option role="option" data-code="+674" value="NR" >Nauru &#x202A;(+674)&#x202C;</option>
                                    <option role="option" data-code="+977" value="NP" >Nepal &#x202A;(+977)&#x202C;</option>
                                    <option role="option" data-code="+31" value="NL" >Netherlands &#x202A;(+31)&#x202C;</option>
                                    <option role="option" data-code="+599" value="AN" > &#x202A;(+599)&#x202C;</option>
                                    <option role="option" data-code="+687" value="NC" >New Caledonia &#x202A;(+687)&#x202C;</option>
                                    <option role="option" data-code="+64" value="NZ" >New Zealand &#x202A;(+64)&#x202C;</option>
                                    <option role="option" data-code="+505" value="NI" >Nicaragua &#x202A;(+505)&#x202C;</option>
                                    <option role="option" data-code="+227" value="NE" >Niger &#x202A;(+227)&#x202C;</option>
                                    <option role="option" data-code="+234" value="NG" >Nigeria &#x202A;(+234)&#x202C;</option>
                                    <option role="option" data-code="+683" value="NU" >Niue &#x202A;(+683)&#x202C;</option>
                                    <option role="option" data-code="+850" value="KP" >North Korea &#x202A;(+850)&#x202C;</option>
                                    <option role="option" data-code="+1" value="MP" >Northern Mariana Islands &#x202A;(+1)&#x202C;</option>
                                    <option role="option" data-code="+47" value="NO" >Norway &#x202A;(+47)&#x202C;</option>
                                    <option role="option" data-code="+968" value="OM" >Oman &#x202A;(+968)&#x202C;</option>
                                    <option role="option" data-code="+92" value="PK" >Pakistan &#x202A;(+92)&#x202C;</option>
                                    <option role="option" data-code="+680" value="PW" >Palau &#x202A;(+680)&#x202C;</option>
                                    <option role="option" data-code="+970" value="PS" >Palestine &#x202A;(+970)&#x202C;</option>
                                    <option role="option" data-code="+507" value="PA" >Panama &#x202A;(+507)&#x202C;</option>
                                    <option role="option" data-code="+675" value="PG" >Papua New Guinea &#x202A;(+675)&#x202C;</option>
                                    <option role="option" data-code="+595" value="PY" >Paraguay &#x202A;(+595)&#x202C;</option>
                                    <option role="option" data-code="+51" value="PE" >Peru &#x202A;(+51)&#x202C;</option>
                                    <option role="option" data-code="+63" value="PH" >Philippines &#x202A;(+63)&#x202C;</option>
                                    <option role="option" data-code="+48" value="PL" >Poland &#x202A;(+48)&#x202C;</option>
                                    <option role="option" data-code="+351" value="PT" >Portugal &#x202A;(+351)&#x202C;</option>
                                    <option role="option" data-code="+1" value="PR" >Puerto Rico &#x202A;(+1)&#x202C;</option>
                                    <option role="option" data-code="+974" value="QA" >Qatar &#x202A;(+974)&#x202C;</option>
                                    <option role="option" data-code="+262" value="RE" >Reunion &#x202A;(+262)&#x202C;</option>
                                    <option role="option" data-code="+40" value="RO" >Romania &#x202A;(+40)&#x202C;</option>
                                    <option role="option" data-code="+7" value="RU" >Russia &#x202A;(+7)&#x202C;</option>
                                    <option role="option" data-code="+250" value="RW" >Rwanda &#x202A;(+250)&#x202C;</option>
                                    <option role="option" data-code="+290" value="SH" >Saint Helena &#x202A;(+290)&#x202C;</option>
                                    <option role="option" data-code="+1" value="KN" >Saint Kitts and Nevis &#x202A;(+1)&#x202C;</option>
                                    <option role="option" data-code="+1" value="LC" >Saint Lucia &#x202A;(+1)&#x202C;</option>
                                    <option role="option" data-code="+508" value="PM" >Saint Pierre and Miquelon &#x202A;(+508)&#x202C;</option>
                                    <option role="option" data-code="+1" value="VC" >Saint Vincent and Grenadines &#x202A;(+1)&#x202C;</option>
                                    <option role="option" data-code="+685" value="WS" >Samoa &#x202A;(+685)&#x202C;</option>
                                    <option role="option" data-code="+378" value="SM" >San Marino &#x202A;(+378)&#x202C;</option>
                                    <option role="option" data-code="+239" value="ST" >Sao Tome and Principe &#x202A;(+239)&#x202C;</option>
                                    <option role="option" data-code="+966" value="SA" >Saudi Arabia &#x202A;(+966)&#x202C;</option>
                                    <option role="option" data-code="+221" value="SN" >Senegal &#x202A;(+221)&#x202C;</option>
                                    <option role="option" data-code="+381" value="RS" >Serbia &#x202A;(+381)&#x202C;</option>
                                    <option role="option" data-code="+248" value="SC" >Seychelles &#x202A;(+248)&#x202C;</option>
                                    <option role="option" data-code="+232" value="SL" >Sierra Leone &#x202A;(+232)&#x202C;</option>
                                    <option role="option" data-code="+65" value="SG" >Singapore &#x202A;(+65)&#x202C;</option>
                                    <option role="option" data-code="+421" value="SK" >Slovakia &#x202A;(+421)&#x202C;</option>
                                    <option role="option" data-code="+386" value="SI" >Slovenia &#x202A;(+386)&#x202C;</option>
                                    <option role="option" data-code="+677" value="SB" >Solomon Islands &#x202A;(+677)&#x202C;</option>
                                    <option role="option" data-code="+252" value="SO" >Somalia &#x202A;(+252)&#x202C;</option>
                                    <option role="option" data-code="+27" value="ZA" >South Africa &#x202A;(+27)&#x202C;</option>
                                    <option role="option" data-code="+82" value="KR" >South Korea &#x202A;(+82)&#x202C;</option>
                                    <option role="option" data-code="+34" value="ES" >Spain &#x202A;(+34)&#x202C;</option>
                                    <option role="option" data-code="+94" value="LK" >Sri Lanka &#x202A;(+94)&#x202C;</option>
                                    <option role="option" data-code="+249" value="SD" >Sudan &#x202A;(+249)&#x202C;</option>
                                    <option role="option" data-code="+597" value="SR" >Suriname &#x202A;(+597)&#x202C;</option>
                                    <option role="option" data-code="+268" value="SZ" >Swaziland &#x202A;(+268)&#x202C;</option>
                                    <option role="option" data-code="+46" value="SE" >Sweden &#x202A;(+46)&#x202C;</option>
                                    <option role="option" data-code="+41" value="CH" >Switzerland &#x202A;(+41)&#x202C;</option>
                                    <option role="option" data-code="+963" value="SY" >Syria &#x202A;(+963)&#x202C;</option>
                                    <option role="option" data-code="+886" value="TW" >Taiwan &#x202A;(+886)&#x202C;</option>
                                    <option role="option" data-code="+992" value="TJ" >Tajikistan &#x202A;(+992)&#x202C;</option>
                                    <option role="option" data-code="+255" value="TZ" >Tanzania &#x202A;(+255)&#x202C;</option>
                                    <option role="option" data-code="+66" value="TH" >Thailand &#x202A;(+66)&#x202C;</option>
                                    <option role="option" data-code="+228" value="TG" >Togo &#x202A;(+228)&#x202C;</option>
                                    <option role="option" data-code="+690" value="TK" >Tokelau &#x202A;(+690)&#x202C;</option>
                                    <option role="option" data-code="+676" value="TO" >Tonga &#x202A;(+676)&#x202C;</option>
                                    <option role="option" data-code="+1" value="TT" >Trinidad and Tobago &#x202A;(+1)&#x202C;</option>
                                    <option role="option" data-code="+216" value="TN" >Tunisia &#x202A;(+216)&#x202C;</option>
                                    <option role="option" data-code="+90" value="TR" >Turkey &#x202A;(+90)&#x202C;</option>
                                    <option role="option" data-code="+993" value="TM" >Turkmenistan &#x202A;(+993)&#x202C;</option>
                                    <option role="option" data-code="+1" value="TC" >Turks and Caicos Islands &#x202A;(+1)&#x202C;</option>
                                    <option role="option" data-code="+688" value="TV" >Tuvalu &#x202A;(+688)&#x202C;</option>
                                    <option role="option" data-code="+1" value="VI" >US Virgin Islands &#x202A;(+1)&#x202C;</option>
                                    <option role="option" data-code="+256" value="UG" >Uganda &#x202A;(+256)&#x202C;</option>
                                    <option role="option" data-code="+380" value="UA" >Ukraine &#x202A;(+380)&#x202C;</option>
                                    <option role="option" data-code="+971" value="AE" >United Arab Emirates &#x202A;(+971)&#x202C;</option>
                                    <option role="option" data-code="+44" value="GB" >United Kingdom &#x202A;(+44)&#x202C;</option>
                                    <option role="option" data-code="+1" value="US" data-format="(XXX) XXX-XXXX" selected="selected">United States &#x202A;(+1)&#x202C;</option>
                                    <option role="option" data-code="+598" value="UY" >Uruguay &#x202A;(+598)&#x202C;</option>
                                    <option role="option" data-code="+998" value="UZ" >Uzbekistan &#x202A;(+998)&#x202C;</option>
                                    <option role="option" data-code="+678" value="VU" >Vanuatu &#x202A;(+678)&#x202C;</option>
                                    <option role="option" data-code="+379" value="VA" >Vatican City &#x202A;(+379)&#x202C;</option>
                                    <option role="option" data-code="+58" value="VE" >Venezuela &#x202A;(+58)&#x202C;</option>
                                    <option role="option" data-code="+84" value="VN" >Vietnam &#x202A;(+84)&#x202C;</option>
                                    <option role="option" data-code="+681" value="WF" >Wallis and Futuna &#x202A;(+681)&#x202C;</option>
                                    <option role="option" data-code="+967" value="YE" >Yemen &#x202A;(+967)&#x202C;</option>
                                    <option role="option" data-code="+260" value="ZM" >Zambia &#x202A;(+260)&#x202C;</option>
                                    <option role="option" data-code="+263" value="ZW" >Zimbabwe &#x202A;(+263)&#x202C;</option>
                                </select>

                            </div>

                            <div class="input-field col s3">
                                <input id="w_tel" type="tel" name="w_tel">
                                <label for="w_tel">Contact No</label>
                            </div>
                        </div>
                        <br>
                        <h6 align="center" class="cyan-text">Register Yourselves giving a username and password !</h6>
                        <div class="row">
                            <div class="input-field col s6 ">
                                <input id="user_name" type="text" name="username">
                                <label for="user_name">Username</label>
                            </div>
                            <div class="input-field col s6 ">
                                <input id="password" type="password" name="password">
                                <label for="password">Password</label>
                            </div>
                        </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <button class="btn waves-effect waves-light col s12" href="lawyer-register.php"
                                    type="submit">Register Now
                            </button>
                        </div>
                        <div class="input-field col s12">
                            <p class="margin center medium-small sign-up">Already have an account? <a
                                    href="../login.php">Login</a>
                            </p>
                        </div>
                    </div>
            </div>
        </div>
    </div>

    <!-- jQuery Library -->
    <script type="text/javascript" src="../../js/jquery-1.11.2.min.js"></script>
    <!--materialize js-->
    <script type="text/javascript" src="../../js/materialize.js"></script>
    <!--prism-->
    <script type="text/javascript" src="../../js/prism.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="../../js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>

    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="../../js/plugins.js"></script>

</body>
</html>