<!DOCTYPE html>
<html lang="en">

<head>

    <title>Areas of Practise Page | LAWZIA</title>

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
                <h4>Practice Areas</h4>
                <h6>Strengthen your profile </h6>
            </div>
            <form class="col s12" action="../../backend/add-practise-areas.php" method="post">
                <div class="row">
                    <div class="input-field col s4">
                        <input type="checkbox" class="filled-in" id="Admin-law" name="area_list[]"
                               value="Administrative Law"/>
                        <label for="Admin-law">Administrative Law</label>
                    </div>
                    <div class="input-field col s4">
                        <input type="checkbox" class="filled-in" id="Ad-law" name="area_list[]"
                               value="Advertising Law"/>
                        <label for="Ad-law">Advertising Law</label>
                    </div>
                    <div class="input-field col s4">
                        <input type="checkbox" class="filled-in" id="Admiral-law" name="area_list[]"
                               value="Admiral law"/>
                        <label for="Admiral-law">Admiralty Law</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s4">
                        <input type="checkbox" class="filled-in" id="Agency-law" name="area_list[]"
                               value="Agency law"/>
                        <label for="Agency-law">Agency Law</label>
                    </div>
                    <div class="input-field col s4">
                        <input type="checkbox" class="filled-in" id="Alcohol-law" name="area_list[]"
                               value="Alcohol law"/>
                        <label for="Alcohol-law">Alcohol Law</label>
                    </div>
                    <div class="input-field col s4">
                        <input type="checkbox" class="filled-in" id="Adr-law" name="area_list[]"
                               value="Alternative dispute resolution Law"/>
                        <label for="Adr-law">Alternative dispute resolution Law</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s4">
                        <input type="checkbox" class="filled-in" id="Animal-law" name="area_list[]"
                               value="Animal law"/>
                        <label for="Animal-law">Animal Law</label>
                    </div>
                    <div class="input-field col s4">
                        <input type="checkbox" class="filled-in" id="Antitrust-law"
                               name="area_list[]" value="Antitrust law"/>
                        <label for="Antitrust-law">Antitrust Law</label>
                    </div>
                    <div class="input-field col s4">
                        <input type="checkbox" class="filled-in" id="Art-law" name="area_list[]"
                               value="Art law"/>
                        <label for="Art-law">Art& Culture Law</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s4">
                        <input type="checkbox" class="filled-in" id="Aviation-law"
                               name="area_list[]" value="Aviation law"/>
                        <label for="Aviation-law">Aviation Law</label>
                    </div>
                    <div class="input-field col s4">
                        <input type="checkbox" class="filled-in" id="Bank-law" name="area_list[]"
                               value="Bank law"/>
                        <label for="Bank-law">Bank Law</label>
                    </div>
                    <div class="input-field col s4">
                        <input type="checkbox" class="filled-in" id="Bankruptcy-law"
                               name="area_list[]" value="Bankruptcy law"/>
                        <label for="Bankruptcy-law">Bankruptcy Law</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s4">
                        <input type="checkbox" class="filled-in" id="Bioethics-law"
                               name="area_list[]" value="Bioethics law"/>
                        <label for="Bioethics-law">Boiethics Law</label>
                    </div>
                    <div class="input-field col s4">
                        <input type="checkbox" class="filled-in" id="Business-law"
                               name="area_list[]" value="Business law"/>
                        <label for="Business-law">Business Law</label>
                    </div>
                    <div class="input-field col s4">
                        <input type="checkbox" class="filled-in" id="Bus.org-law" name="area_list[]"
                               value="Business Organization Law"/>
                        <label for="Bus.org-law">Business Organization Law</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s4">
                        <input type="checkbox" class="filled-in" id="Child-law" name="area_list[]"
                               value="Child law"/>
                        <label for="Child-law">Child Abuse and neglect</label>
                    </div>
                    <div class="input-field col s4">
                        <input type="checkbox" class="filled-in" id="Civil-law" name="area_list[]"
                               value="Civil law"/>
                        <label for="Civil-law">Civil Law(Common Law)</label>
                    </div>
                    <div class="input-field col s4">
                        <input type="checkbox" class="filled-in" id="Communi-law" name="area_list[]"
                               value="Communication law"/>
                        <label for="Communi-law">Communications Law</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s4">
                        <input type="checkbox" class="filled-in" id="Computer-law"
                               name="area_list[]" value="Computer law"/>
                        <label for="Computer-law">Computer Law</label>
                    </div>
                    <div class="input-field col s4">
                        <input type="checkbox" class="filled-in" id="Conflict-law"
                               name="area_list[]" value="Conflict law"/>
                        <label for="Conflict-law">Conflict of Law</label>
                    </div>
                    <div class="input-field col s4">
                        <input type="checkbox" class="filled-in" id="Constitutional-law"
                               name="area_list[]" value="Constitutional law"/>
                        <label for="Constitutional-law">Constitutional Law</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s4">
                        <input type="checkbox" class="filled-in" id="Construct-law"
                               name="area_list[]" value="Construction law"/>
                        <label for="Construct-law">Construction Law</label>
                    </div>
                    <div class="input-field col s4">
                        <input type="checkbox" class="filled-in" id="Consumer-law"
                               name="area_list[]" value="Consumer law"/>
                        <label for="Consumer-law">Consumer Law</label>
                    </div>
                    <div class="input-field col s4">
                        <input type="checkbox" class="filled-in" id="Contract-law"
                               name="area_list[]" value="Contract law"/>
                        <label for="Contract-law">Contract Law</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s4">
                        <input type="checkbox" class="filled-in" id="Copyright-law"
                               name="area_list[]" value="Copyright law"/>
                        <label for="Copyright-law">Copyright Law</label>
                    </div>
                    <div class="input-field col s4">
                        <input type="checkbox" class="filled-in" id="Corp-law" name="area_list[]"
                               value="Corporate law"/>
                        <label for="Corp-law">Corporate Law</label>
                    </div>
                    <div class="input-field col s4">
                        <input type="checkbox" class="filled-in" id="Criminal-law"
                               name="area_list[]" value="Criminal law"/>
                        <label for="Criminal-law">Criminal Law</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s4">
                        <input type="checkbox" class="filled-in" id="Crypto-law" name="area_list[]"
                               value="Cryptography law"/>
                        <label for="Crypto-law">Cryptography Law</label>
                    </div>
                    <div class="input-field col s4">
                        <input type="checkbox" class="filled-in" id="Cult-law" name="area_list[]"
                               value="Cultural property Law"/>
                        <label for="Cult-law">Cultural property Law</label>
                    </div>
                    <div class="input-field col s4">
                        <input type="checkbox" class="filled-in" id="custom-law" name="area_list[]"
                               value="Custom law"/>
                        <label for="custom-law">Custom</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s4">
                        <input type="checkbox" class="filled-in" id="Cyber-law" name="area_list[]"
                               value="Cyber law"/>
                        <label for="Cyber-law">Cyber Law</label>
                    </div>
                    <div class="input-field col s4">
                        <input type="checkbox" class="filled-in" id="Divorce-law" name="area_list[]"
                               value="Divorce law"/>
                        <label for="Divorce-law">Divorce Law</label>
                    </div>
                    <div class="input-field col s4">
                        <input type="checkbox" class="filled-in" id="Drug-law" name="area_list[]"
                               value="Drug law"/>
                        <label for="Drug-law">Drug Control Law</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s4">
                        <input type="checkbox" class="filled-in" id="Edu-law" name="area_list[]"
                               value="Educational law"/>
                        <label for="Edu-law">Educational Law</label>
                    </div>
                    <div class="input-field col s4">
                        <input type="checkbox" class="filled-in" id="Elder-law" name="area_list[]"
                               value="Elder law"/>
                        <label for="Elder-law">Elder Law</label>
                    </div>
                    <div class="input-field col s4">
                        <input type="checkbox" class="filled-in" id="Employ-law" name="area_list[]"
                               value="Employment law"/>
                        <label for="Employ-law">Employment Law</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s4">
                        <input type="checkbox" class="filled-in" id="Energy-law" name="area_list[]"
                               value="Energy law"/>
                        <label for="Energy-law">Energy Law</label>
                    </div>
                    <div class="input-field col s4">
                        <input type="checkbox" class="filled-in" id="Enter-law" name="area_list[]"
                               value="Entertainment law"/>
                        <label for="Enter-law">Entertainment Law</label>
                    </div>
                    <div class="input-field col s4">
                        <input type="checkbox" class="filled-in" id="Env-law" name="area_list[]"
                               value="Environment law"/>
                        <label for="Env-law">Environment Law</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s4">
                        <input type="checkbox" class="filled-in" id="Family-law" name="area_list[]"
                               value="Family law"/>
                        <label for="Family-law">Family Law</label>
                    </div>
                    <div class="input-field col s4">
                        <input type="checkbox" class="filled-in" id="Finance-law" name="area_list[]"
                               value="Financial Services Regulation Law"/>
                        <label for="Finance-law">Financial Services Regulation Law</label>
                    </div>
                    <div class="input-field col s4">
                        <input type="checkbox" class="filled-in" id="Firearm-law" name="area_list[]"
                               value="Firearm Law"/>
                        <label for="Firearm-law">Firearm Law</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s4">
                        <input type="checkbox" class="filled-in" id="Food-law" name="area_list[]"
                               value="Food Law"/>
                        <label for="Food-law">Food Law</label>
                    </div>
                    <div class="input-field col s4">
                        <input type="checkbox" class="filled-in" id="Health-law" name="area_list[]"
                               value="Health Care Law"/>
                        <label for="Health-law">Health Care Law</label>
                    </div>
                    <div class="input-field col s4">
                        <input type="checkbox" class="filled-in" id="Insu-law" name="area_list[]"
                               value="Insurance Law/">
                        <label for="Insu-law">Insurance Law</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s4">
                        <input type="checkbox" class="filled-in" id="Inter-law" name="area_list[]"
                               value="International Law"/>
                        <label for="Inter-law">International Law</label>
                    </div>
                    <div class="input-field col s4">
                        <input type="checkbox" class="filled-in" id="Juv-law" name="area_list[]"
                               value="Juvenile Law"/>
                        <label for="Juv-law">Juvenile Law</label>
                    </div>
                    <div class="input-field col s4">
                        <input type="checkbox" class="filled-in" id="Labour-law" name="area_list[]"
                               value="Labour Law"/>
                        <label for="Labour-law">Labour Law</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s4">
                        <input type="checkbox" class="filled-in" id="Land-law" name="area_list[]"
                               value="Land Use Law"/>
                        <label for="Land-law">Land Use Law</label>
                    </div>
                    <div class="input-field col s4">
                        <input type="checkbox" class="filled-in" id="Maritime-law"
                               name="area_list[]" value="Maritime Law"/>
                        <label for="Maritime-law">Maritime Law</label>
                    </div>
                    <div class="input-field col s4">
                        <input type="checkbox" class="filled-in" id="Military-law"
                               name="area_list[]" value="Military Law"/>
                        <label for="Military-law">Military Law</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s4">
                        <input type="checkbox" class="filled-in" id="Municipal-law"
                               name="area_list[]" value="Municipal Law"/>
                        <label for="Municipal-law">Municipal Law</label>
                    </div>
                    <div class="input-field col s4">
                        <input type="checkbox" class="filled-in" id="Patent-law" name="area_list[]"
                               value="Patents"/>
                        <label for="Patent-law">Patents </label>
                    </div>
                    <div class="input-field col s4">
                        <input type="checkbox" class="filled-in" id="Property-law"
                               name="area_list[]" value="Property Law"/>
                        <label for="Property-law">Property Law</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s4">
                        <input type="checkbox" class="filled-in" id="real-law" name="area_list[]"
                               value="Real Estate Law"/>
                        <label for="real-law">Real Estate Law</label>
                    </div>
                    <div class="input-field col s4">
                        <input type="checkbox" class="filled-in" id="Sec-law" name="area_list[]"
                               value="Security Law"/>
                        <label for="Sec-law">Security Law</label>
                    </div>
                    <div class="input-field col s4">
                        <input type="checkbox" class="filled-in" id="sport-law" name="area_list[]"
                               value="Sports law"/>
                        <label for="sport-law">Sports Law</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s4">
                        <input type="checkbox" class="filled-in" id="Tax-law" name="area_list[]"
                               value="Tax Law"/>
                        <label for="Tax-law">Tax Law</label>
                    </div>
                    <div class="input-field col s4">
                        <input type="checkbox" class="filled-in" id="Trade-law" name="area_list[]"
                               value="Trademark Law"/>
                        <label for="Trade-law">Trademark Law </label>
                    </div>
                    <div class="input-field col s4">
                        <input type="checkbox" class="filled-in" id="Will-law" name="area_list[]"
                               value="Wills and Probate"/>
                        <label for="Will-law">Wills and Probate </label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <button class="btn waves-effect waves-light col s12" type="submit">Finish
                        </button>
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
<script type="text/javascript" src="../../js/prism-new.js"></script>
<!--scrollbar-->
<script type="text/javascript" src="../../js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>

<!--plugins.js - Some Specific JS codes for Plugin Settings-->
<script type="text/javascript" src="../../js/plugins-new.js"></script>

<!-- Toast Notification -->
<script type="text/javascript">
    // Toast Notification
    $(window).load(function () {
        setTimeout(function () {
            Materialize.toast('<span>SELECT YOUR AREAS OF PRACTISE </span>', 1500);
        }, 2000);
        setTimeout(function () {
            Materialize.toast('<span>!</span>', 3000);
        }, 5000);

    });
</script>

</body>
</html>