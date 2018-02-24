<?php
include '../backend/lawyer-profile-update.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Profile Page | LAWZIA</title>

    <link rel="icon" href="../images/lawzia-logo.jpg" sizes="32x32">

    <!-- CORE CSS-->
    <link rel="stylesheet" href="../INDEX/assets/css/navmenu/styles.css">

    <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- Custome CSS-->
    <link href="../css/custom-style.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- CSS style Horizontal Nav (Layout 03)-->
    <link href="../css/style-horizontal.css" type="text/css" rel="stylesheet" media="screen,projection">


    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="../css/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="../js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="../js/plugins/chartist-js/chartist.min.css" type="text/css" rel="stylesheet" media="screen,projection">
</head>

<body class="white">
<!-- Start Page Loading -->
<div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>
<!-- End Page Loading -->

<!-- //////////////////////////////////////////////////////////////////////////// -->

<!-- start header nav-->
<nav>
    <div class="main-nav navbar-collapse collapse">
        <div class="container">
            <ul class="nav nav-justified">
                <li><a href="../INDEX/index.html">HOME</a></li>
                <li><a href="../backend/logout.php">logout</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- //////////////////////////////////////////////////////////////////////////// -->
<div id="profile-page" class="section">
    <!-- profile-page-header -->
    <div id="profile-page-header" class="card">
        <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="../images/law-profile.jpg" alt="user background" >
        </div>
        <figure class="card-profile-image">
            <img src="../images/user-profile-pic.png" alt="profile image" class="circle z-depth-2 " id="profileImage">
        </figure>
        <div class="card-content">
            <div class="row">
                <div class="col s3 offset-s2">
                    <h4 class="card-title grey-text text-darken-4"><?=$username?></h4>
                    <p class="medium-small grey-text"><?=$country?></p>
                </div>
                <div class="col s3 offset-l3 right-align">
                    <a class="btn-floating activator waves-effect waves-light darken-2 right">
                        <i class="mdi-action-perm-identity"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="card-reveal">
            <p>
                <span class="card-title grey-text text-darken-4"> <i class="mdi-navigation-close right"></i><i class="mdi-action-perm-identity cyan-text text-darken-2"></i><?=strtoupper($fName)." ".strtoupper($lName) ?></span>

            </p>

            <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>

            <p><i class="mdi-action-perm-phone-msg cyan-text text-darken-2"></i> <?=$contact?></p>
            <p><i class="mdi-communication-email cyan-text text-darken-2"></i> <?=$email?></p>
            <p><i class="mdi-device-airplanemode-on cyan-text text-darken-2"></i><?=$country?></p>
        </div>
    </div>
    <!--/ profile-page-header -->

    <!-- profile-page-content -->
    <div id="profile-page-content" class="row">
        <!-- profile-page-sidebar-->
        <div id="profile-page-sidebar" class="col s12 m4">

            <!-- task-card -->
            <ul id="task-card" class="collection with-header">
                <li class="collection-header cyan">
                    <h4 class="task-card-title">Summary</h4>
                    <p class="task-card-date"></p>
                </li>
                <li class="collection-item dismissable"> <label for="summary">Create your own professional summary
                    </label>
                    <input type="text" id="summary"/>

                </li>

            </ul>

            <!-- task-card -->
            <ul id="profile-page-about-feed" class="collection z-depth-1">

                <li class="collection-item avatar">
                    <i class="mdi-file-folder circle"></i>
                    <span class="title">Answer new Questions</span>
                    <br> <span class="ultra-small">select the relevant country and category</span>

                </li>
                <li class="collection-item avatar">
                    <i class="mdi-action-assessment circle green"></i>
                    <span class="title">How to earn badges</span>
                    <br> <span class="ultra-small">Go to the link and see</span>

                </li>
            </ul>

        </div>

        <!-- profile-page-sidebar-->
        <!-- profile-page-wall -->
        <div  class="col s12 m8">

                    <div id="profile-page-wall-share" class="row">
                        <div class="col s12">
                            <div class="tabs tab-profile z-depth-1 light-blue">
                                <div class="col s12">
                                    <p class="white-text waves-effect waves-light">Edit Profile Info</p>
                                </div>
                            </div>
                            <div  class="tab-content col s12  grey lighten-4">
                                <form class="col s12" method="post" action="../backend/lawyer-update-regProfile.php">
                                    <h5 class="waves-light">Personal Info</h5>
                                    <div class="row">
                                        <div class="input-field col s3">
                                            <select class="browser-default">
                                                <option value="1">Mr.</option>
                                                <option value="2">Mrs.</option>
                                                <option value="3">Miss.</option>
                                            </select>
                                        </div>
                                        <div class="input-field col s3">
                                            <input id="first_name" type="text" value="<?=$fName?>">
                                            <label for="first_name">First Name</label>
                                        </div>
                                        <div class="input-field col s6">
                                            <input id="last_name" type="text" value="<?=$lName?>">
                                            <label for="last_name">Last Name</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s6">
                                            <select class="browser-default">
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
                                                <option value="Bolivia, Plurinational State of" title="Bolivia, Plurinational State of">Bolivia, Plurinational State of</option>
                                                <option value="Bonaire, Sint Eustatius and Saba" title="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</option>
                                                <option value="Bosnia and Herzegovina" title="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                                <option value="Botswana" title="Botswana">Botswana</option>
                                                <option value="Bouvet Island" title="Bouvet Island">Bouvet Island</option>
                                                <option value="Brazil" title="Brazil">Brazil</option>
                                                <option value="British Indian Ocean Territory" title="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                                <option value="Brunei Darussalam" title="Brunei Darussalam">Brunei Darussalam</option>
                                                <option value="Bulgaria" title="Bulgaria">Bulgaria</option>
                                                <option value="Burkina Faso" title="Burkina Faso">Burkina Faso</option>
                                                <option value="Burundi" title="Burundi">Burundi</option>
                                                <option value="Cambodia" title="Cambodia">Cambodia</option>
                                                <option value="Cameroon" title="Cameroon">Cameroon</option>
                                                <option value="Canada" title="Canada">Canada</option>
                                                <option value="Cape Verde" title="Cape Verde">Cape Verde</option>
                                                <option value="Cayman Islands" title="Cayman Islands">Cayman Islands</option>
                                                <option value="Central African Republic" title="Central African Republic">Central African Republic</option>
                                                <option value="Chad" title="Chad">Chad</option>
                                                <option value="Chile" title="Chile">Chile</option>
                                                <option value="China" title="China">China</option>
                                                <option value="Christmas Island" title="Christmas Island">Christmas Island</option>
                                                <option value="Cocos (Keeling) Islands" title="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                                <option value="Colombia" title="Colombia">Colombia</option>
                                                <option value="Comoros" title="Comoros">Comoros</option>
                                                <option value="Congo" title="Congo">Congo</option>
                                                <option value="Congo, the Democratic Republic of the" title="Congo, the Democratic Republic of the">Congo, the Democratic Republic of the</option>
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
                                                <option value="Falkland Islands (Malvinas)" title="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                                <option value="Faroe Islands" title="Faroe Islands">Faroe Islands</option>
                                                <option value="Fiji" title="Fiji">Fiji</option>
                                                <option value="Finland" title="Finland">Finland</option>
                                                <option value="France" title="France">France</option>
                                                <option value="French Guiana" title="French Guiana">French Guiana</option>
                                                <option value="French Polynesia" title="French Polynesia">French Polynesia</option>
                                                <option value="French Southern Territories" title="French Southern Territories">French Southern Territories</option>
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
                                                <option value="Heard Island and McDonald Islands" title="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option>
                                                <option value="Holy See (Vatican City State)" title="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                                <option value="Honduras" title="Honduras">Honduras</option>
                                                <option value="Hong Kong" title="Hong Kong">Hong Kong</option>
                                                <option value="Hungary" title="Hungary">Hungary</option>
                                                <option value="Iceland" title="Iceland">Iceland</option>
                                                <option value="India" title="India">India</option>
                                                <option value="Indonesia" title="Indonesia">Indonesia</option>
                                                <option value="Iran, Islamic Republic of" title="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
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
                                                <option value="Korea, Democratic People's Republic of" title="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                                <option value="Korea, Republic of" title="Korea, Republic of">Korea, Republic of</option>
                                                <option value="Kuwait" title="Kuwait">Kuwait</option>
                                                <option value="Kyrgyzstan" title="Kyrgyzstan">Kyrgyzstan</option>
                                                <option value="Lao People's Democratic Republic" title="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                                <option value="Latvia" title="Latvia">Latvia</option>
                                                <option value="Lebanon" title="Lebanon">Lebanon</option>
                                                <option value="Lesotho" title="Lesotho">Lesotho</option>
                                                <option value="Liberia" title="Liberia">Liberia</option>
                                                <option value="Libya" title="Libya">Libya</option>
                                                <option value="Liechtenstein" title="Liechtenstein">Liechtenstein</option>
                                                <option value="Lithuania" title="Lithuania">Lithuania</option>
                                                <option value="Luxembourg" title="Luxembourg">Luxembourg</option>
                                                <option value="Macao" title="Macao">Macao</option>
                                                <option value="Macedonia, the former Yugoslav Republic of" title="Macedonia, the former Yugoslav Republic of">Macedonia, the former Yugoslav Republic of</option>
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
                                                <option value="Micronesia, Federated States of" title="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                                <option value="Moldova, Republic of" title="Moldova, Republic of">Moldova, Republic of</option>
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
                                                <option value="Northern Mariana Islands" title="Northern Mariana Islands">Northern Mariana Islands</option>
                                                <option value="Norway" title="Norway">Norway</option>
                                                <option value="Oman" title="Oman">Oman</option>
                                                <option value="Pakistan" title="Pakistan">Pakistan</option>
                                                <option value="Palau" title="Palau">Palau</option>
                                                <option value="Palestinian Territory, Occupied" title="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
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
                                                <option value="Saint Helena, Ascension and Tristan da Cunha" title="Saint Helena, Ascension and Tristan da Cunha">Saint Helena, Ascension and Tristan da Cunha</option>
                                                <option value="Saint Kitts and Nevis" title="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                <option value="Saint Lucia" title="Saint Lucia">Saint Lucia</option>
                                                <option value="Saint Martin (French part)" title="Saint Martin (French part)">Saint Martin (French part)</option>
                                                <option value="Saint Pierre and Miquelon" title="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                                <option value="Saint Vincent and the Grenadines" title="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                                <option value="Samoa" title="Samoa">Samoa</option>
                                                <option value="San Marino" title="San Marino">San Marino</option>
                                                <option value="Sao Tome and Principe" title="Sao Tome and Principe">Sao Tome and Principe</option>
                                                <option value="Saudi Arabia" title="Saudi Arabia">Saudi Arabia</option>
                                                <option value="Senegal" title="Senegal">Senegal</option>
                                                <option value="Serbia" title="Serbia">Serbia</option>
                                                <option value="Seychelles" title="Seychelles">Seychelles</option>
                                                <option value="Sierra Leone" title="Sierra Leone">Sierra Leone</option>
                                                <option value="Singapore" title="Singapore">Singapore</option>
                                                <option value="Sint Maarten (Dutch part)" title="Sint Maarten (Dutch part)">Sint Maarten (Dutch part)</option>
                                                <option value="Slovakia" title="Slovakia">Slovakia</option>
                                                <option value="Slovenia" title="Slovenia">Slovenia</option>
                                                <option value="Solomon Islands" title="Solomon Islands">Solomon Islands</option>
                                                <option value="Somalia" title="Somalia">Somalia</option>
                                                <option value="South Africa" title="South Africa">South Africa</option>
                                                <option value="South Georgia and the South Sandwich Islands" title="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
                                                <option value="South Sudan" title="South Sudan">South Sudan</option>
                                                <option value="Spain" title="Spain">Spain</option>
                                                <option value="Sri Lanka" title="Sri Lanka">Sri Lanka</option>
                                                <option value="Sudan" title="Sudan">Sudan</option>
                                                <option value="Suriname" title="Suriname">Suriname</option>
                                                <option value="Svalbard and Jan Mayen" title="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                                <option value="Swaziland" title="Swaziland">Swaziland</option>
                                                <option value="Sweden" title="Sweden">Sweden</option>
                                                <option value="Switzerland" title="Switzerland">Switzerland</option>
                                                <option value="Syrian Arab Republic" title="Syrian Arab Republic">Syrian Arab Republic</option>
                                                <option value="Taiwan, Province of China" title="Taiwan, Province of China">Taiwan, Province of China</option>
                                                <option value="Tajikistan" title="Tajikistan">Tajikistan</option>
                                                <option value="Tanzania, United Republic of" title="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                                <option value="Thailand" title="Thailand">Thailand</option>
                                                <option value="Timor-Leste" title="Timor-Leste">Timor-Leste</option>
                                                <option value="Togo" title="Togo">Togo</option>
                                                <option value="Tokelau" title="Tokelau">Tokelau</option>
                                                <option value="Tonga" title="Tonga">Tonga</option>
                                                <option value="Trinidad and Tobago" title="Trinidad and Tobago">Trinidad and Tobago</option>
                                                <option value="Tunisia" title="Tunisia">Tunisia</option>
                                                <option value="Turkey" title="Turkey">Turkey</option>
                                                <option value="Turkmenistan" title="Turkmenistan">Turkmenistan</option>
                                                <option value="Turks and Caicos Islands" title="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                                <option value="Tuvalu" title="Tuvalu">Tuvalu</option>
                                                <option value="Uganda" title="Uganda">Uganda</option>
                                                <option value="Ukraine" title="Ukraine">Ukraine</option>
                                                <option value="United Arab Emirates" title="United Arab Emirates">United Arab Emirates</option>
                                                <option value="United Kingdom" title="United Kingdom">United Kingdom</option>
                                                <option value="United States" title="United States">United States</option>
                                                <option value="United States Minor Outlying Islands" title="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                                <option value="Uruguay" title="Uruguay">Uruguay</option>
                                                <option value="Uzbekistan" title="Uzbekistan">Uzbekistan</option>
                                                <option value="Vanuatu" title="Vanuatu">Vanuatu</option>
                                                <option value="Venezuela, Bolivarian Republic of" title="Venezuela, Bolivarian Republic of">Venezuela, Bolivarian Republic of</option>
                                                <option value="Viet Nam" title="Viet Nam">Viet Nam</option>
                                                <option value="Virgin Islands, British" title="Virgin Islands, British">Virgin Islands, British</option>
                                                <option value="Virgin Islands, U.S." title="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                                <option value="Wallis and Futuna" title="Wallis and Futuna">Wallis and Futuna</option>
                                                <option value="Western Sahara" title="Western Sahara">Western Sahara</option>
                                                <option value="Yemen" title="Yemen">Yemen</option>
                                                <option value="Zambia" title="Zambia">Zambia</option>
                                                <option value="Zimbabwe" title="Zimbabwe">Zimbabwe</option>
                                            </select>
                                        </div>
                                        <div class="input-field col s6">
                                            <input id="contact" type="tel" value="<?=$contact?>">
                                            <label for="contact">Contact No</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s6">
                                            <input id="email" type="email" value="<?=$email?>">
                                            <label for="email">Email</label>
                                        </div>
                                        <div class="input-field col s6">
                                            <input id="p_add" type="text">
                                            <label for="p_add">Address</label>
                                        </div>
                                    </div>
                                    <h5 class="waves-light">Work Info</h5>

                                    <h6>Practise Areas:</h6>
                                    <div class="row">
                                        <div class="input-field col s4">
                                            <input type="checkbox" class="filled-in" id="Admin-law"  />
                                            <label for="Admin-law">Administrative Law</label>
                                        </div>
                                        <div class="input-field col s4">
                                            <input type="checkbox" class="filled-in" id="Ad-law"  />
                                            <label for="Ad-law">Advertising Law</label>
                                        </div>
                                        <div class="input-field col s4">
                                            <input type="checkbox" class="filled-in" id="Admiral-law"  />
                                            <label for="Admiral-law">Admiralty Law</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s4">
                                            <input type="checkbox" class="filled-in" id="Agency-law"  />
                                            <label for="Agency-law">Agency Law</label>
                                        </div>
                                        <div class="input-field col s4">
                                            <input type="checkbox" class="filled-in" id="Alcohol-law"  />
                                            <label for="Alcohol-law">Alcohol Law</label>
                                        </div>
                                        <div class="input-field col s4">
                                            <input type="checkbox" class="filled-in" id="Adr-law"  />
                                            <label for="Adr-law">Alternative dispute resolution Law</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s4">
                                            <input type="checkbox" class="filled-in" id="Animal-law"  />
                                            <label for="Animal-law">Animal Law</label>
                                        </div>
                                        <div class="input-field col s4">
                                            <input type="checkbox" class="filled-in" id="Antitrust-law"  />
                                            <label for="Antitrust-law">Antitrust Law</label>
                                        </div>
                                        <div class="input-field col s4">
                                            <input type="checkbox" class="filled-in" id="Art-law"  />
                                            <label for="Art-law">Art& Culture Law</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s4">
                                            <input type="checkbox" class="filled-in" id="Aviation-law"  />
                                            <label for="Aviation-law">Aviation Law</label>
                                        </div>
                                        <div class="input-field col s4">
                                            <input type="checkbox" class="filled-in" id="Bank-law"  />
                                            <label for="Bank-law">Bank Law</label>
                                        </div>
                                        <div class="input-field col s4">
                                            <input type="checkbox" class="filled-in" id="Bankruptcy-law"  />
                                            <label for="Bankruptcy-law">Bankruptcy Law</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s4">
                                            <input type="checkbox" class="filled-in" id="Bioethics-law"  />
                                            <label for="Bioethics-law">Boiethics Law</label>
                                        </div>
                                        <div class="input-field col s4">
                                            <input type="checkbox" class="filled-in" id="Business-law"  />
                                            <label for="Business-law">Business Law</label>
                                        </div>
                                        <div class="input-field col s4">
                                            <input type="checkbox" class="filled-in" id="Bus.org-law"  />
                                            <label for="Bus.org-law">Business Organization Law</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s4">
                                            <input type="checkbox" class="filled-in" id="Child-law"  />
                                            <label for="Child-law">Child Abuse and neglect</label>
                                        </div>
                                        <div class="input-field col s4">
                                            <input type="checkbox" class="filled-in" id="Civil-law"  />
                                            <label for="Civil-law">Civil Law(Common Law)</label>
                                        </div>
                                        <div class="input-field col s4">
                                            <input type="checkbox" class="filled-in" id="Communi-law"  />
                                            <label for="Communi-law">Communications Law</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s4">
                                            <input type="checkbox" class="filled-in" id="Computer-law"  />
                                            <label for="Computer-law">Computer Law</label>
                                        </div>
                                        <div class="input-field col s4">
                                            <input type="checkbox" class="filled-in" id="Conflict-law"  />
                                            <label for="Conflict-law">Conflict of Law</label>
                                        </div>
                                        <div class="input-field col s4">
                                            <input type="checkbox" class="filled-in" id="Constitutional-law"  />
                                            <label for="Constitutional-law">Constitutional Law</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s4">
                                            <input type="checkbox" class="filled-in" id="Construct-law"  />
                                            <label for="Construct-law">Construction Law</label>
                                        </div>
                                        <div class="input-field col s4">
                                            <input type="checkbox" class="filled-in" id="Consumer-law"  />
                                            <label for="Consumer-law">Consumer Law</label>
                                        </div>
                                        <div class="input-field col s4">
                                            <input type="checkbox" class="filled-in" id="Contract-law"  />
                                            <label for="Contract-law">Contract Law</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s4">
                                            <input type="checkbox" class="filled-in" id="Copyright-law"  />
                                            <label for="Copyright-law">Copyright Law</label>
                                        </div>
                                        <div class="input-field col s4">
                                            <input type="checkbox" class="filled-in" id="Corp-law"  />
                                            <label for="Corp-law">Corporate Law</label>
                                        </div>
                                        <div class="input-field col s4">
                                            <input type="checkbox" class="filled-in" id="Criminal-law"  />
                                            <label for="Criminal-law">Criminal Law</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s4">
                                            <input type="checkbox" class="filled-in" id="Crypto-law"  />
                                            <label for="Crypto-law">Cryptography Law</label>
                                        </div>
                                        <div class="input-field col s4">
                                            <input type="checkbox" class="filled-in" id="Cult-law"  />
                                            <label for="Cultural-law">Cultural property Law</label>
                                        </div>
                                        <div class="input-field col s4">
                                            <input type="checkbox" class="filled-in" id="custom-law"  />
                                            <label for="custom-law">Custom</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s4">
                                            <input type="checkbox" class="filled-in" id="Cyber-law"  />
                                            <label for="Cyber-law">Cyber Law</label>
                                        </div>
                                        <div class="input-field col s4">
                                            <input type="checkbox" class="filled-in" id="Divorce-law"  />
                                            <label for="Divorce-law">Divorce Law</label>
                                        </div>
                                        <div class="input-field col s4">
                                            <input type="checkbox" class="filled-in" id="Drug-law"  />
                                            <label for="Drug-law">Drug Control Law</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s4">
                                            <input type="checkbox" class="filled-in" id="Edu-law"  />
                                            <label for="Edu-law">Educational Law</label>
                                        </div>
                                        <div class="input-field col s4">
                                            <input type="checkbox" class="filled-in" id="Elder-law"  />
                                            <label for="Elder-law">Elder Law</label>
                                        </div>
                                        <div class="input-field col s4">
                                            <input type="checkbox" class="filled-in" id="Employ-law"  />
                                            <label for="Employ-law">Employment Law</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s4">
                                            <input type="checkbox" class="filled-in" id="Energy-law"  />
                                            <label for="Energy-law">Energy Law</label>
                                        </div>
                                        <div class="input-field col s4">
                                            <input type="checkbox" class="filled-in" id="Enter-law"  />
                                            <label for="Enter-law">Entertainment Law</label>
                                        </div>
                                        <div class="input-field col s4">
                                            <input type="checkbox" class="filled-in" id="Env-law"  />
                                            <label for="Env-law">Environment Law</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s4">
                                            <input type="checkbox" class="filled-in" id="Family-law"  />
                                            <label for="Family-law">Family Law</label>
                                        </div>
                                        <div class="input-field col s4">
                                            <input type="checkbox" class="filled-in" id="Finance-law"  />
                                            <label for="Finance-law">Financial Services Regulation Law</label>
                                        </div>
                                        <div class="input-field col s4">
                                            <input type="checkbox" class="filled-in" id="Firearm-law"  />
                                            <label for="Firearm-law">Firearm Law</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s4">
                                            <input type="checkbox" class="filled-in" id="Food-law"  />
                                            <label for="Food-law">Food Law</label>
                                        </div>
                                        <div class="input-field col s4">
                                            <input type="checkbox" class="filled-in" id="Health-law"  />
                                            <label for="Health-law">Health Care Law</label>
                                        </div>
                                        <div class="input-field col s4">
                                            <input type="checkbox" class="filled-in" id="Insu-law"  />
                                            <label for="Insu-law">Insurance Law</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s4">
                                            <input type="checkbox" class="filled-in" id="Inter-law"  />
                                            <label for="Inter-law">International Law</label>
                                        </div>
                                        <div class="input-field col s4">
                                            <input type="checkbox" class="filled-in" id="Juv-law"  />
                                            <label for="Juv-law">Juvenile Law</label>
                                        </div>
                                        <div class="input-field col s4">
                                            <input type="checkbox" class="filled-in" id="Labour-law"  />
                                            <label for="Labour-law">Labour Law</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s4">
                                            <input type="checkbox" class="filled-in" id="Land-law"  />
                                            <label for="Land-law">Land Use Law</label>
                                        </div>
                                        <div class="input-field col s4">
                                            <input type="checkbox" class="filled-in" id="Maritime-law"  />
                                            <label for="Maritime-law">Maritime Law</label>
                                        </div>
                                        <div class="input-field col s4">
                                            <input type="checkbox" class="filled-in" id="Military-law"  />
                                            <label for="Military-law">Military Law</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s4">
                                            <input type="checkbox" class="filled-in" id="Municipal-law"  />
                                            <label for="Municipal-law">Municipal Law</label>
                                        </div>
                                        <div class="input-field col s4">
                                            <input type="checkbox" class="filled-in" id="Patent-law"  />
                                            <label for="Patent-law">Patents </label>
                                        </div>
                                        <div class="input-field col s4">
                                            <input type="checkbox" class="filled-in" id="Property-law"  />
                                            <label for="Property-law">Property Law</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s4">
                                            <input type="checkbox" class="filled-in" id="real-law"  />
                                            <label for="real-law">Real Estate Law</label>
                                        </div>
                                        <div class="input-field col s4">
                                            <input type="checkbox" class="filled-in" id="Sec-law"  />
                                            <label for="Sec-law">Security Law</label>
                                        </div>
                                        <div class="input-field col s4">
                                            <input type="checkbox" class="filled-in" id="sport-law"  />
                                            <label for="sport-law">Sports Law</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s4">
                                            <input type="checkbox" class="filled-in" id="Tax-law"  />
                                            <label for="Tax-law">Tax Law</label>
                                        </div>
                                        <div class="input-field col s4">
                                            <input type="checkbox" class="filled-in" id="Trade-law"  />
                                            <label for="Trade-law">Trademark Law </label>
                                        </div>
                                        <div class="input-field col s4">
                                            <input type="checkbox" class="filled-in" id="Will-law"  />
                                            <label for="Will-law">Wills and Probate </label>
                                        </div>
                                    </div>
                                    <br>
                                    <br>
                                    <h6>Work Experience:</h6>
                                    <div class="row">
                                        <div class="input-field col s6">
                                            <select class="browser-default">
                                                <option value="1">Trainee</option>
                                                <option value="2">less than 5 years</option>
                                                <option value="3">less than 10 years</option>
                                                <option value="4">10+ years</option>

                                            </select>
                                        </div>
                                    </div>
                                    <br>
                                    <br>
                                    <h6>Work Place Details:</h6>
                                    <div class="row">
                                        <div class="input-field col s6">
                                            <input id="w_name" type="text">
                                            <label for="w_name">Name</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s6">
                                            <input id="w_add" type="text">
                                            <label for="w_add">Address</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s6">
                                            <input id="w_email" type="email">
                                            <label for="w_email">Email</label>
                                        </div>
                                        <div class="input-field col s6">
                                            <input id="w_tel" type="tel">
                                            <label for="w_tel">Contact No</label>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-field col s12">
                                            <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Update Profile
                                                <i class="mdi-content-send right"></i>
                                            </button>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--


                                                    <div class="row" id="add-new-field">
                                                        <div class="input-field col s6" id="add-new-work-place">
                                                            <input type="text" id="work-ex">
                                                            <label for="work-ex">workplace Name,Address</label>
                                                        </div>

                                                        <button type="submit" class="btn-floating btn-small waves-effect waves-light blue"><i class="mdi-content-add" onclick="
                                                        return addInput('add-new-field')"></i></button>

                                                    </div>

                                                        <div class="row">
                                                            <div class="input-field col s6">
                                                                <input type="date" class="datepicker">
                                                                <label for="dob">DOB</label>
                                                            </div>
                                                        </div>


                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                                <textarea id="message5" class="materialize-textarea" length="120"></textarea>
                                                                <label for="message">Message</label>
                                                            </div>

                                                        </div>
                                                    </form>
                                                </div>

                                                -->
        </div>
    </div>



    <!--end container-->


    <!-- END MAIN -->



    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START FOOTER -->
    <footer class="page-footer">
        <div class="footer-copyright">
            <div class="container">
                <span>Copyright © 2018 <a class="grey-text text-lighten-4"  target="_blank">osh</a> All rights reserved.</span>
                <span class="right"> Design and Developed by <a class="grey-text text-lighten-4" >osh</a></span>
            </div>
        </div>
    </footer>
    <!-- END FOOTER -->




    <!-- ================================================
    Scripts
    ================================================ -->

    <!-- jQuery Library -->
    <script type="text/javascript" src="../js/jquery-1.11.2.min.js"></script>
    <!--materialize js-->
    <script type="text/javascript" src="../js/materialize.js"></script>
    <!--prism-->
    <script type="text/javascript" src="../js/prism.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="../js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <!-- chartist -->
    <script type="text/javascript" src="../js/plugins/chartist-js/chartist.min.js"></script>
    <!--custom -->
    <script type="text/javascript" src="../js/custom/addNewElement.js"></script>

    <!-- sparkline -->
    <script type="text/javascript" src="../js/plugins/sparkline/jquery.sparkline.min.js"></script>
    <script type="text/javascript" src="../js/plugins/sparkline/sparkline-script.js"></script>

    <!-- google map api -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAZnaZBXLqNBRXjd-82km_NO7GUItyKek"></script>

    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="../js/plugins.js"></script>


</body>
</html>