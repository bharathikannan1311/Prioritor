<?php 
session_start();
?>
<!DOCTYPE html>
<html>

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../assets/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/navbar.css">
    <link rel="stylesheet" type="text/css" href="assets/stylespecific.css">
    <title>Main Page</title>

</head>

<body class="mx-5 my-2">

    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
        <a href="../main page ambulance.php">Basic Details</a>
        <button class="dropdown-btn ddstyle">Specific Details<span>&nbsp&#x2193;</span></button>
        <div class="dropdown-container">
            <a href="#">Blood Loss</a>
            <a href="Fracture Specific.php">Fracture</a>
            <a href="Heart Problem Specific.php">Heart Problem</a>
            <a href="Pregnancy Specific.php">Pregnancy</a>
            <a href="Head Damage.php">Head Damage</a>
            <a href="Burns Specific.php">Burns</a>
            <a href="#">Any Others</a>
        </div>
        <a href="Mapspage.html" target="_blank">GPS Tracking</a>
        <a href="#">Any Other Details</a>
    </div>

    <div id="main">
        <div class="navbar-custom mb-4">
            <span class="navbar-toggle-custom m-2 p-2" id="js-navbar-toggle-custom">
            ☰
        </span>
            <a href="#" class="logo-custom">Prioritor</a>
            <ul class="main-nav-custom mt-2" id="js-menu-custom">
                <li class="mt-1">
                    <a href="#" class="nav-links-custom">Home</a>
                </li>
                <li class="mt-1">
                    <a href="#" class="nav-links-custom">Contact Us</a>
                </li>
                <li>
                    <form class="ml-4" action="../../includes/logout.inc.php" method="post">
                        <button type="submit" name="logout-submit" class="btn cursor">Log Out</button>
                    </form>
                </li>
            </ul>
        </div>
        <div>
            <button class="openbtn" onclick="openNav()">☰ Menu</button>
        </div>
        <div>
            <center>
                <h2><strong>Blood Loss Specific Details</strong></h2></center>
        </div>
        <div>
            <form action="includesspecificdata/signupbloodlossspecific.inc.php" method="post">
                <label for="bloodloss"><strong>1)Blood Loss Class:</strong></label>
                <select id="classid" name="bloodlossclass" class="custom-select">
                    <option value="Not Entered"> -- </option>
                    <option value="class1">Class1 (15%)</option>
                    <option value="class2">Class2 (15-30%)</option>
                    <option value="class3">Class3 (30-40%)</option>
                    <option value="class4">Class4 (>40%)</option>
                </select>

                <input type="checkbox" id="InternalBleedingId" name="internalexternalbleeding[]" value="Internal Bleeding">
                <label for="Internal Bleeding"> Internal Bleeding </label>
                <br>

                <input type="checkbox" id="ExtrenalBleedingId" name="internalexternalbleeding[]" value="External Bleeding">
                <label for="External Bleeding"> External Bleeding </label>
                <br>


                <input type="submit" value="Submit" name="bloodlosssubmit">
            </form>
        </div>
    </div>

    <script>
        function openNav() {
            document.getElementById("mySidebar")
                .style.width = "250px";
            document.getElementById("main")
                .style.marginLeft = "250px";
        }

        function closeNav() {
            document.getElementById("mySidebar")
                .style.width = "0";
            document.getElementById("main")
                .style.marginLeft = "0";
        }



        var dropdown = document.getElementsByClassName("dropdown-btn");
        var i;

        for (i = 0; i < dropdown.length; i++) {
            dropdown[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var dropdownContent = this.nextElementSibling;
                if (dropdownContent.style.display === "block") {
                    dropdownContent.style.display = "none";
                } else {
                    dropdownContent.style.display = "block";
                }
            });
        }

    </script>
    <script src="assets/navbar.js"></script>
</body>

</html>

