<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sopranos Pizzabar</title>
    <link rel="stylesheet" href="media/css/style.css">
    <link rel="icon" href="media/img/sopranos-icon.png">
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "sopranos_db";

/* $conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
$sql = "INSERT INTO pizza_order (first_name, last_name, email, postcode, house_number, payment_methode, pick_up, store_location, product, price)
VALUES ('kees', 'kaas', 'keeskaas@gmail.com', '1234AB', '2', '2', '1', '1', '1')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  } */

?>
<body>
    <div id="container">
        <div id="Left_Side">
            <img src="media/img/sopranos-logo.png" alt="">
            <!--Navigatie Menu-->
            <div id="navigation">
                <ul class="menu">
                    <li id="Home_Page_Link">Home Page</li>
                    <li id="Menu_Link">Pizza's</li>
                        
                            <li class="Pizza_Menu" id="Tonno_Link">Tonno</li>
                            <li class="Pizza_Menu" id="Vegetariano_Link">Vegetariano</li>
                            <li class="Pizza_Menu" id="Quattro_Formaggio_Link">Quattro Formaggio</li>
                            <li class="Pizza_Menu" id="Sopranos_Deluxe_Link">Sopranos Deluxe</li>
                        
                    
                </ul>
            </div>
        </div>
        
        <div id="Middle">

        </div>

        <div id="Right_Side">
            <div id="Order_List">
                <div id="Header_Order">
                    <div class="column_h1">Wat</div>
                    <div class="column_h2">Maat</div>
                    <div class="column_h3">Aantal</div>
                    <div class="column_h4">Prijs</div>
                </div>

                <div class="Pizza_Order">
                    <div class="column_1">
                        <div>Tonno</div>
                    </div>
                    <div class="Pizza_Order_Data">
                        <div class="Pizza_Order_MAP">
                            <div class="column_2">Medium</div>
                            <div class="column_3 Pizza_Counter">0</div>
                            <div id="TM" class="column_4">€ 5,99</div>
                        </div>
                        <div class="Pizza_Order_MAP">
                            <div class="column_2">Large</div>
                            <div class="column_3 Pizza_Counter">0</div>
                            <div id="TL" class="column_4">€ 6,99</div>
                        </div>
                        <div class="Pizza_Order_MAP">
                            <div class="column_2">Calzone</div>
                            <div class="column_3 Pizza_Counter">0</div>
                            <div id="TC" class="column_4">€ 6,99</div>
                        </div>
                    </div>
                </div>    
                <div class="Pizza_Order">
                    <div class="column_1">
                        <div>Vegetariano</div>
                    </div>
                    <div class="Pizza_Order_Data">
                        <div class="Pizza_Order_MAP">
                            <div class="column_2">Medium</div>
                            <div class="column_3 Pizza_Counter">0</div>
                            <div id="VM" class="column_4">€ 5,99</div>
                        </div>
                        <div class="Pizza_Order_MAP">
                            <div class="column_2">Large</div>
                            <div class="column_3 Pizza_Counter">0</div>
                            <div id="VL" class="column_4">€ 6,99</div>
                        </div>
                        <div class="Pizza_Order_MAP">
                            <div class="column_2">Calzone</div>
                            <div class="column_3 Pizza_Counter">0</div>
                            <div id="VC" class="column_4">€ 6,99</div>
                        </div>
                    </div>
                </div>
                <div class="Pizza_Order">
                    <div class="column_1">
                        <div>Quattro Formaggio</div>
                    </div>
                    <div class="Pizza_Order_Data">
                        <div class="Pizza_Order_MAP">
                            <div class="column_2">Medium</div>
                            <div class="column_3 Pizza_Counter">0</div>
                            <div id="QM" class="column_4">€ 5,99</div>
                        </div>
                        <div class="Pizza_Order_MAP">
                            <div class="column_2">Large</div>
                            <div class="column_3 Pizza_Counter">0</div>
                            <div id="QL" class="column_4">€ 6,99</div>
                        </div>
                        <div class="Pizza_Order_MAP">
                            <div class="column_2">Calzone</div>
                            <div class="column_3 Pizza_Counter">0</div>
                            <div id="QC" class="column_4">€ 6,99</div>
                        </div>
                    </div>
                </div>
                <div class="Pizza_Order">
                    <div class="column_1">
                        <div>Sopranos Deluxe</div>
                    </div>
                    <div class="Pizza_Order_Data">
                        <div class="Pizza_Order_MAP">
                            <div class="column_2">Medium</div>
                            <div class="column_3 Pizza_Counter">0</div>
                            <div id="SM" class="column_4">€ 5,99</div>
                        </div>
                        <div class="Pizza_Order_MAP">
                            <div class="column_2">Large</div>
                            <div class="column_3 Pizza_Counter">0</div>
                            <div id="SL" class="column_4">€ 6,99</div>
                        </div>
                        <div class="Pizza_Order_MAP">
                            <div class="column_2">Calzone</div>
                            <div class="column_3 Pizza_Counter">0</div>
                            <div id="SC" class="column_4">€ 6,99</div>
                        </div>
                    </div>
                </div>
                <div class="Pizza_Order_Total">
                    <div class="column_1" style="border: none"></div>
                    <div class="Pizza_Order_Data">
                        <div class="Pizza_Order_SBT">
                            <div class="column_ex">Subtotaal</div>
                            <div id="Subtotal" class="column_4">€ 0,00</div>
                        </div>
                        <div class="Pizza_Order_SBT">
                            <div class="column_ex">Bezorgkosten</div>
                            <div id="Delivery_Amount" class="column_4">€ 0,00</div>
                        </div>
                        <div class="Pizza_Order_SBT">
                            <div class="column_ex">Totaal</div>
                            <div id="Total" class="column_4 ">€ 0,00</div>
                        </div>
                    </div>  
                </div>
                

            </div>
            <div id="Order_Form">
                <form action="" method="post">
                    <label for="fname">Voornaam:</label><br>
                    <input type="text" name="fname" id="fname" required><br>
                    <label for="lname">Achternaam:</label><br>
                    <input type="text" name="lname" id="lname" required><br>
                    <label for="email">E-mail Adress:</label><br>
                    <input type="text" name="email" id="email" required><br>
                    <label for="postcode">Postcode:</label><br>
                    <input type="text" name="postcode" id="postcode" required><br>
                    <label for="huisnummer">Huisnummer:</label><br>
                    <input type="text" name="huisnummer" id="huisnummber" required><br>
                    <br>
                    <label for="payment">Betaal Methode</label><br>
                    <input type="radio" id="iDeal" name="payment" value="iDeal" required>
                    <label for="iDeal">iDEAL</label><br>
                    <input type="radio" id="PayPal" name="payment" value="PayPal" required>
                    <label for="PayPal">PayPal</label><br>
                    <input type="radio" id="CreditCard" name="payment" value="CreditCard" required>
                    <label for="CreditCard">Credit Card</label><br>
                    <br>
                    <input type="radio" id="Delivery" name="Delivery" value="Delivery" required onclick="Total()">
                    <label for="Delivery">Bezorgen</label><br>
                    <input type="radio" id="Pick_Up" name="Delivery" value="Pick_Up" required onclick="Total()">
                    <label for="Pick_Up">Ophalen</label><br>
                    <br>
                    <label for="store">Winkel locatie</label>
                    <select name="store" id="store">
                        <option value="Rotterdam">Rotterdam</option>
                        <option value="Amsterdam">Amsterdam</option>
                        <option value="Nijmegen">Nijmegen</option>
                        <option value="Utrecht">Utrecht</option>
                    </select>
                    <input type="submit" value="Bestel" id="Order_Button">
                </form>
                <h2>Totaal: <span id="Form_Total">€ 0,00</span></h2>
            </div>
        </div>
    </div>
</body>
<script src="media/js/script.js"></script>
</html>