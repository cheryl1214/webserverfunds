<!DOCTYPE html>
<html>
    <head>
        <title>Intro to JS</title>
        <style>
        h1, h2, p{ margin: 0px; margin-left: 8px;}
        button, #submit { 
            margin: 20px;
            border-radius: 5px;
        }
        button:hover, #submit:hover { opacity: 0.6; }
        img, form { margin-left: 20px; margin-top: 20px;}
        img { width: 700px; height: auto; }
        body {
            font-family: "Century Gothic";
            background-image: url("img/PEAK_KeyArt_No_Logo.webp");
            background-size: 100% auto;
            background-repeat: repeat-y;
            background-attachment: fixed;
        }
        .box1 {
            background: rgba(0, 0, 0, 0.6);
            color: white;
            border-radius: 10px;
            padding: 20px;
        }
        </style>

        <script>
            // Change paragraph function
            function parChanged() {
                document.getElementById("chgPar").innerHTML = "The text has been changed.";
            }
            // Hide <div> element function
            function setVis() {
                x = document.getElementById("myDIV");
                if (x.style.display === "none") {
                    x.style.display = "block";
                }
                else {
                    x.style.display = "none";
                }
            }
            //Change img src function
            function imgChanged() {
                document.getElementById("myImg").src = "img/PEAK_Mesa.jpg";
            }
            //Change text of clicked button function
            function butChanged(elem) {
                elem.innerHTML = "Goodbye World!";
            }
            //Change LED state
            function ledChanged() {
                <?php
                $toggle = shell_exec("gpio toggle 0");
                ?>
            }
            //Onblur event to check if input is empty function
            function onBlur() {
                field = document.getElementById("userName").value;
                if (field.trim() === "") {
                    window.alert("This field is required");
                }
            }
            //Fetch API function
            async function getText(file) {
                let myPEAK = await fetch(file);
                let myText = await myPEAK.text();
                document.getElementById("rule0").innerHTML = myText;
            }
        </script>
    </head>
    <body>
        <br>
        <div class="box1">
            <h1>JavaScript Events</h1>
            <p>This lab will mainly introduce JavaScript events.</p>
        </div>
        <br>
        <div class="box1">
            <!--Alert-->
            <h2>Alert event</h2>
            <button onclick="window.alert('Hello World!')">Click for alert</button>
            <hr>

            <!--Change Paragraph-->
            <h2>Change paragraph event</h2>
            <p id="chgPar" style="margin-top: 8px;">This is the text that will eventually be replaced.</p>
            <button type="button" onclick="parChanged()">Click to change text</button>
            <br>
            <hr>

            <!--Visibility setting-->
            <h2>Hide/Show event</h2>
            <div id="myDIV">
                <img src="img/PEAK_Shore.jpg">
            </div>
            <button onclick="setVis()">Click to hide/show</button>
            <br>
            <hr>

            <!--Change img src-->
            <h2>Change image event</h2>
            <img id="myImg" src="img/PEAK_Alpine.jpg">
            <br>
            <button onclick="imgChanged()">Click for MESA</button>
            <br>
            <hr>

            <!--Change text of button onclick-->
            <h2>Change button text event</h2>
            <button onclick="butChanged(this)">Hello World!</button>
            <br>
            <hr>

            <!--Onblur event-->
            <h2>Onblur event</h2>
            <form style="margin-bottom: 20px;">
               Username:<input type="text" id="userName" onblur="onBlur()">
            </form>
            <hr>

            <!--Fetch API-->
            <h2>Fetch API event</h2>
            <p id="rule0">Rule 0: Never abandon a Friend in Need!</p>
            <button onclick="getText('txt/PEAK.txt')">Click to fetch text</button>
            <hr>

            <!--PHP & MySQL-->
            <h2>PHP & MySQL</h2>
            <form action="php/sqlprocess.php" method="post">
                <fieldset>
                    <legend>Enter a food item:</legend>
                    Food Item: <input type="text" name="food_item"><br><br>
                    Weight: <input type="number" name="weight"><br><br>
                    Hunger: <input type="number" name="hunger"><br><br>
                    Energy: <input type="number" name="energy"><br><br>
                    Injury: <input type="number" name="injury"><br><br>
                    Poison: <input type="number" name="poison"><br><br>
                    Frost: <input type="number" name="frost"><br><br>
                    Burnt: <input type="number" name="burnt"><br><br>
                    Thorns: <input type="number" name="thorns"><br><br>
                    Drowsy: <input type="number" name="drowsy"><br><br>
                    Location: <input type="text" name="location"><br>
                    <input type="submit" id="submit" name="submit" value="Submit">
                </fieldset>
            </form>
            <form action="php/sqlresponse.php" method="post">
                <fieldset>
                    <legend>Filter Data:</legend>
                    Filter: <input type="text" name="filter"><br><br>
                    <input type="submit" id="submit" value="Submit">
                </fieldset>
            </form>

            <!-- LED button -->
            <button onclick="ledChanged()">Change LED State</button>
        </div>
    </body>
</html>