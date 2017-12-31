<?php
session_start();

$productArray = array(
  "save1" => array("name" => "FenuSave", "details" => "Buy 1 month", "price" => 45, "quantity" => null),
  "save2" => array("name" => "FenuSave", "details" => "Buy 2 get 1 free", "price" => 90, "quantity" => null),
  "save4" => array("name" => "FenuSave", "details" => "Buy 4 get 2 free", "price" => 180, "quantity" => null),
  "save6" => array("name" => "FenuSave", "details" => "Buy 6 get 3 free", "price" => 270, "quantity" => null),
  "save8" => array("name" => "FenuSave", "details" => "Buy 8 get 4 free", "price" => 360, "quantity" => null),
  "save10" => array("name" => "FenuSave", "details" => "Buy 10 get 5 free", "price" => 450, "quantity" => null),
  "save12" => array("name" => "FenuSave", "details" => "Buy 12 get 6 free", "price" => 540, "quantity" => null),
  "save14" => array("name" => "FenuSave", "details" => "Buy 14 get 7 free", "price" => 630, "quantity" => null),
  "savebox" => array("name" => "FenuSave", "details" => "Yard Box [30 horses for 30 days]", "price" => 700, "quantity" => null),
  "care1" => array("name" => "FenuCare", "details" => "Buy 1 month", "price" => 85, "quantity" => null),
  "care2" => array("name" => "FenuCare", "details" => "Buy 2 months", "price" => 170, "quantity" => null),
  "care3" => array("name" => "FenuCare", "details" => "Buy 3 months", "price" => 255, "quantity" => null),
  "carebox" => array("name" => "FenuCare", "details" => "Yard Box [30 horses for 30 days]", "price" => 1800, "quantity" => null),
  "feast" => array("name" => "FenuFeast", "details" => "daily", "price" => 5, "quantity" => null),
  "camel" => array("name" => "FenuCamel", "details" => "Buy 1 month", "price" => 1000, "quantity" => null),
  "camelbox" => array("name" => "FenuCamel", "details" => "Yard Box [30 horses for 30 days]", "price" => 25000, "quantity" => null),
  "foal1" => array("name" => "FenuFoal", "details" => "Buy 1 month", "price" => 100, "quantity" => null),
  "foal2" => array("name" => "FenuFoal", "details" => "Buy 2 months", "price" => 200, "quantity" => null),
  "foal3" => array("name" => "FenuFoal", "details" => "Buy 3 months", "price" => 300, "quantity" => null),
  "foalbox" => array("name" => "FenuFoal", "details" => "Yard Box [30 horses for 30 days]", "price" => 2400, "quantity" => null)
);

if(!empty($_GET["action"])) {
  switch($_GET["action"]) {
    case "add":
      $productId = $_GET['id'];
      $quantity = $_GET["quantity"];

      if(!empty($quantity)) {
        $itemQuantityArr = array($productId => $quantity);

        if(!empty($_SESSION["cart_item"])) {
          if(in_array($productId,array_keys($_SESSION["cart_item"]))) {
            foreach($_SESSION["cart_item"] as $key => $value) {
              if($productId == $key) {
                if(empty($_SESSION["cart_item"][$key])) {
                  $_SESSION["cart_item"][$key] = 0;
                }
                $_SESSION["cart_item"][$key] += $quantity;
              }
            }
          } else {
            $_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemQuantityArr);
          }
        } else {
          $_SESSION["cart_item"] = $itemQuantityArr;
        }
      }
    break;
    case "remove":
      $productId = $_GET['id'];

      if(!empty($_SESSION["cart_item"])) {
        foreach($_SESSION["cart_item"] as $key => $value) {
          if($productId == $key) {
            unset($_SESSION["cart_item"][$key]);
            $_SESSION['item_total'] -= $productArray['$key']['price'] * $value;
          }
          if(empty($_SESSION["cart_item"])) {
            unset($_SESSION["cart_item"]);
          }
        }
      }
    break;
    case "empty":
      unset($_SESSION["cart_item"]);
      unset($_SESSION["item_total"]);
    break;
  }
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Buy Now - FenuHealth</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script type="text/javascript" src="quantity.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script type="text/javascript" src="jquery.js"></script>
  </head>

  <body>
    <header>
      <img id="logo" src="img/logo.jpg" />
      <nav class="nav-menu">
        <img class="menuButton" src="img/menu.png" alt="button to open menu"/>
        <ul id="menu">
          <li><a href="index.php">Home</a></li>
          <li><a href="products.php">Products</a></li>
          <li><a href="symptoms.php">Symptoms</a></li>
          <li><a href="awards.php">Awards</a></li>
          <li><a href="videos.php">Videos</a></li>
          <li><a href="faq.php">FAQ</a></li>
          <li><a href="docs.php">Docs</a></li>
          <li id="current"><a href="buy-now.php">Buy Now</a></li>
          <li><a href="contact-us.php">Contact Us</a></li>
        </ul>
      </nav>
    </header>

    <div class="container">
      <?php
if(isset($_SESSION["cart_item"]) && $_POST['action'] != "payment"){
    $_SESSION['item_total'] = 0;
?>
      <table class="prices">
        <caption><h1>Cart</h1></caption>
<tbody>
<tr>
<th style="text-align:left;"><strong>Name</strong></th>
<th style="text-align:right;"><strong>Quantity</strong></th>
<th style="text-align:right;"><strong>Price</strong></th>
<th style="text-align:center;"><strong>Action</strong></th>
</tr>
<?php
    $productList = "";
    foreach ($_SESSION['cart_item'] as $key => $value){
      if ($_POST['action'] != "payment") {
		?>
				<tr class="text-center">
				<td><strong><?php echo $productArray[$key]['name'].' '.$productArray[$key]['details']; ?></strong></td>
				<td><?php echo $value; ?></td>
				<td><?php echo "€".$productArray[$key]['price']; ?></td>
				<td><a href="?action=remove&id=<?php echo $key; ?>" class="btnRemoveAction">Remove Item</a></td>
				</tr>
<?php
        $_SESSION['item_total'] += ($productArray[$key]['price'] * $_SESSION["cart_item"][$key]);
      }
    }
?>
<tr>
  <td colspan="5" align=right><strong>Total:</strong> <?php echo "&euro;".$_SESSION['item_total']; ?></td>
</tr>

<?php
  }
  if ($_POST['action'] == 'payment') {

    $description = "";
    foreach($_SESSION['cart_item'] as $key => $value) {
      $description .= $productArray[$key]['name'].' '.$productArray[$key]['details'].' x'.$value.', ';
    }

    require_once('stripe/lib/Stripe.php');
	$name = $_POST["stripeShippingName"];
	$address = ($_POST["stripeShippingAddressLine1"] . ", " . $_POST["stripeShippingAddressCity"] . ", " . $_POST["stripeShippingAddressCountry"]);
	$email = $_POST["stripeEmail"];
	$stripe = array(
	//Live Keys
    'secret_key'      => 'secret_key',
    'publishable_key' => 'publishing key'
    );
    Stripe::setApiKey($stripe['secret_key']);
    if ($_POST) {
      $error = NULL;
      try {
        if (!isset($_POST['stripeToken']))
          throw new Exception("The Stripe Token was not generated correctly");
        $charge = Stripe_Charge::create(array(
          'card'     => $_POST['stripeToken'],
          'amount'   => $_SESSION['item_total']*100,
          'currency' => 'EUR',
          'metadata' =>
            array(
              'Description' => $description,
              'Name' => $name,
              'Address' => $address,
              'Email' => $email
            )
          )
        );
        ?>
  <p class="text-center">
    <p class="text-center" style="margin-top: 0px;">Your transaction has gone through! A receipt has been sent to your email.</p>
  <p>
    <?php
      }
      catch (Exception $e) {
        $error = $e->getMessage();


        ?>
  <p class="text-center">
    <p class="text-center" style="margin-top: 0px;">There was an issue processing the transaction, please call us to make the order and to let us know what happened!</p>
  <p>
    <?php
      }
  	}

    //email
  	$subject = ("FenuHealth receipt");

  	$message = "
		<html>
		<head>
		<title>" . $subject . "</title>
		</head>
		<body>
		<p>Hi " . $name . "</p>
		<p>Thank you for purchasing " . $description . " from FenuHealth.</p>
		<p>Please double check that your address right! if not contact us as soon as possible by email, nutrition@fenuhealth.com or fenuhealth@gmail.com or call Eoin on 0892000217 or  Sarah on 0892000218.
		<p>Address: " . $address . ".</p>
		<p>Many Thanks,<br>FenuHealth Team</p>
		</body>
		</html>
	";
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$headers .= "From: Orders@fenuhealth.com";

	mail($email, $subject, $message, $headers);

    unset($_SESSION['cart_item']);

  } elseif ($_GET['action'] == 'buynow') {
    require_once('stripe/lib/Stripe.php');
      $stripe = array(
          //Live Key
          'publishable_key' => 'publishable_key'
      );
    ?>
</tbody>
</table>
    <form id="paybutton" action="buy-now.php" method="POST" class="div-center">
      <input type="hidden" name="action" value="payment" />
      <script src="https://button.stripe.com/v1/button.js" class="stripe-button"
        data-key="<?php echo $stripe['publishable_key']; ?>"
        data-amount="<?php echo $_SESSION['item_total']*100; ?>"
        data-currency="EUR"
        data-name="Fenu Health"
        data-label="Pay by Card"
        data-email="true"
        data-billingAddress="false"
        data-shippingAddress="true"
        data-bitcoin="true">
      </script>
    </form>
    <?php
  } else {
    if(isset($_SESSION["cart_item"])){
    ?>

<tr>
  <td colspan="4">
    <form action="" method="GET">
      <input type="hidden" name="action" value="buynow" />
      <input class="quantity-submit" style="float: right" type="submit" value="Buy Now" />
    </form>
  </td>
</tr>
      <?php } ?>
</tbody>
</table>
      <table class="prices">
        <th colspan="3">
          <h3>FenuSave</h3>
        </th>
        <tr>
          <td>
            Buy 1 month
          </td>
          <td>
            €45
          </td>
          <td class="quantity">
            <form method="GET" action="">
              <img class="quantity-button" src="img/dec-arrow.png" onclick="changeQuantity(-1, 'save1')" />
              <input class="quantity-txt vert-align" type="text" id="save1" name="quantity" value="0" onchange="negNum('save1')">
              <input type="hidden" name="id" value="save1" />
              <input type="hidden" name="action" value="add" />
              <img class="quantity-button" src="img/inc-arrow.png" onclick="changeQuantity(1, 'save1')" />
              <input type="submit" class="quantity-submit vert-align" value="Add to Checkout" />
            </form>
          </td>
        </tr>
        <tr>
          <td>
            Buy 2 get 1 free
          </td>
          <td>
            €90
          </td>
          <td class="quantity">
            <form method="GET" action="">
              <img class="quantity-button" src="img/dec-arrow.png" onclick="changeQuantity(-1, 'save2')" />
              <input class="quantity-txt vert-align" type="text" id="save2" name="quantity" value="0" onchange="negNum('save2')">
              <input type="hidden" name="id" value="save2" />
              <input type="hidden" name="action" value="add" />
              <img class="quantity-button" src="img/inc-arrow.png" onclick="changeQuantity(1, 'save2')" />
              <input type="submit" class="quantity-submit vert-align" value="Add to Checkout" />
            </form>
          </td>
        </tr>
        <tr>
          <td>
            Buy 4 get 2 free
          </td>
          <td>
            €180
          </td>
          <td class="quantity">
            <form method="GET" action="">
              <img class="quantity-button" src="img/dec-arrow.png" onclick="changeQuantity(-1, 'save4')" />
              <input class="quantity-txt vert-align" type="text" id="save4" name="quantity" value="0" onchange="negNum('save4')">
              <input type="hidden" name="id" value="save4" />
              <input type="hidden" name="action" value="add" />
              <img class="quantity-button" src="img/inc-arrow.png" onclick="changeQuantity(1, 'save4')" />
              <input type="submit" class="quantity-submit vert-align" value="Add to Checkout" />
            </form>
          </td>
        </tr>
        <tr>
          <td>
            Buy 6 get 3 free
          </td>
          <td>
            €270
          </td>
          <td class="quantity">
            <form method="GET" action="">
              <img class="quantity-button" src="img/dec-arrow.png" onclick="changeQuantity(-1, 'save6')" />
              <input class="quantity-txt vert-align" type="text" id="save6" name="quantity" value="0" onchange="negNum('save6')">
              <input type="hidden" name="id" value="save6" />
              <input type="hidden" name="action" value="add" />
              <img class="quantity-button" src="img/inc-arrow.png" onclick="changeQuantity(1, 'save6')" />
              <input type="submit" class="quantity-submit vert-align" value="Add to Checkout" />
            </form>
          </td>
        </tr>
        <tr>
          <td>
            Buy 8 get 4 free
          </td>
          <td>
            €360
          </td>
          <td class="quantity">
            <form method="GET" action="">
              <img class="quantity-button" src="img/dec-arrow.png" onclick="changeQuantity(-1, 'save8')" />
              <input class="quantity-txt vert-align" type="text" id="save8" name="quantity" value="0" onchange="negNum('save8')">
              <input type="hidden" name="id" value="save8" />
              <input type="hidden" name="action" value="add" />
              <img class="quantity-button" src="img/inc-arrow.png" onclick="changeQuantity(1, 'save8')" />
              <input type="submit" class="quantity-submit vert-align" value="Add to Checkout" />
            </form>
          </td>
        </tr>
        <tr>
          <td>
            Buy 10 get 5 free
          </td>
          <td>
            €450
          </td>
          <td class="quantity">
            <form method="GET" action="">
              <img class="quantity-button" src="img/dec-arrow.png" onclick="changeQuantity(-1, 'save10')" />
              <input class="quantity-txt vert-align" type="text" id="save10" name="quantity" value="0" onchange="negNum('save10')">
              <input type="hidden" name="id" value="save10" />
              <input type="hidden" name="action" value="add" />
              <img class="quantity-button" src="img/inc-arrow.png" onclick="changeQuantity(1, 'save10')" />
              <input type="submit" class="quantity-submit vert-align" value="Add to Checkout" />
            </form>
          </td>
        </tr>
        <tr>
          <td>
            Buy 12 get 6 free
          </td>
          <td>
            €540
          </td>
          <td class="quantity">
            <form method="GET" action="">
              <img class="quantity-button" src="img/dec-arrow.png" onclick="changeQuantity(-1, 'save12')" />
              <input class="quantity-txt vert-align" type="text" id="save12" name="quantity" value="0" onchange="negNum('save12')">
              <input type="hidden" name="id" value="save12" />
              <input type="hidden" name="action" value="add" />
              <img class="quantity-button" src="img/inc-arrow.png" onclick="changeQuantity(1, 'save12')" />
              <input type="submit" class="quantity-submit vert-align" value="Add to Checkout" />
            </form>
          </td>
        </tr>
        <tr>
          <td>
            Buy 14 get 7 free
          </td>
          <td>
            €630
          </td>
          <td class="quantity">
            <form method="GET" action="">
              <img class="quantity-button" src="img/dec-arrow.png" onclick="changeQuantity(-1, 'save14')" />
              <input class="quantity-txt vert-align" type="text" id="save14" name="quantity" value="0" onchange="negNum('save14')">
              <input type="hidden" name="id" value="save14" />
              <input type="hidden" name="action" value="add" />
              <img class="quantity-button" src="img/inc-arrow.png" onclick="changeQuantity(1, 'save14')" />
              <input type="submit" class="quantity-submit vert-align" value="Add to Checkout" />
            </form>
          </td>
        </tr>
        <tr>
          <td>
            Yard Box [30 horses for 30 days]
          </td>
          <td>
            €700
          </td>
          <td class="quantity">
            <form method="GET" action="">
              <img class="quantity-button" src="img/dec-arrow.png" onclick="changeQuantity(-1, 'savebox')" />
              <input class="quantity-txt vert-align" type="text" id="savebox" name="quantity" value="0" onchange="negNum('fsbox')">
              <input type="hidden" name="id" value="savebox" />
              <input type="hidden" name="action" value="add" />
              <img class="quantity-button" src="img/inc-arrow.png" onclick="changeQuantity(1, 'savebox')" />
              <input type="submit" class="quantity-submit vert-align" value="Add to Checkout" />
            </form>
          </td>
        </tr>
      </table>

      <table class="prices">
        <th colspan="3">
          <h3 class="center">FenuCare helps cure gastric ulcers</h3>
        </th>
        <tr>
          <td>
            Buy 1 month
          </td>
          <td>
            €85
          </td>
          <td class="quantity">
            <form method="GET" action="">
              <img class="quantity-button" src="img/dec-arrow.png" onclick="changeQuantity(-1, 'care1')" />
              <input class="quantity-txt vert-align" type="text" id="care1" name="quantity" value="0" onchange="negNum('care1')">
              <input type="hidden" name="id" value="care1" />
              <input type="hidden" name="action" value="add" />
              <img class="quantity-button" src="img/inc-arrow.png" onclick="changeQuantity(1, 'care1')" />
              <input type="submit" class="quantity-submit vert-align" value="Add to Checkout" />
            </form>
          </td>
        </tr>
        <tr>
          <td>
            Buy 2 months
          </td>
          <td>
            €170
          </td>
          <td class="quantity">
            <form method="GET" action="">
              <img class="quantity-button" src="img/dec-arrow.png" onclick="changeQuantity(-1, 'care2')" />
              <input class="quantity-txt vert-align" type="text" id="care2" name="quantity" value="0" onchange="negNum('care2')">
              <input type="hidden" name="id" value="care2" />
              <input type="hidden" name="action" value="add" />
              <img class="quantity-button" src="img/inc-arrow.png" onclick="changeQuantity(1, 'care2')" />
              <input type="submit" class="quantity-submit vert-align" value="Add to Checkout" />
            </form>
          </td>
        </tr>
        <tr>
          <td>
            Buy 3 months
          </td>
          <td>
            €255
          </td>
          <td class="quantity">
            <form method="GET" action="">
              <img class="quantity-button" src="img/dec-arrow.png" onclick="changeQuantity(-1, 'care3')" />
              <input class="quantity-txt vert-align" type="text" id="care3" name="quantity" value="0" onchange="negNum('care3')">
              <input type="hidden" name="id" value="care3" />
              <input type="hidden" name="action" value="add" />
              <img class="quantity-button" src="img/inc-arrow.png" onclick="changeQuantity(1, 'care3')" />
              <input type="submit" class="quantity-submit vert-align" value="Add to Checkout" />
            </form>
          </td>
        </tr>
        <tr>
          <td>
            Yard Box [30 horses for 30 days]
          </td>
          <td>
            €1,800
          </td>
          <td class="quantity">
            <form method="GET" action="">
              <img class="quantity-button" src="img/dec-arrow.png" onclick="changeQuantity(-1, 'carebox')" />
              <input class="quantity-txt vert-align" type="text" id="carebox" name="quantity" value="0" onchange="negNum('carebox')">
              <input type="hidden" name="id" value="carebox" />
              <input type="hidden" name="action" value="add" />
              <img class="quantity-button" src="img/inc-arrow.png" onclick="changeQuantity(1, 'carebox')" />
              <input type="submit" class="quantity-submit vert-align" value="Add to Checkout" />
            </form>
          </td>
        </tr>
      </table>

      <table class="prices">
        <th colspan="3">
          <h3 class="center">FenuFeast provides a reward or a special treat</h3>
        </th>
        <tr>
          <td>
            For the picky eater
          </td>
          <td>
            €5 per day
          </td>
          <td class="quantity">
            <form method="GET" action="">
              <img class="quantity-button" src="img/dec-arrow.png" onclick="changeQuantity(-1, 'feast')" />
              <input class="quantity-txt vert-align" type="text" id="feast" name="quantity" value="0" onchange="negNum('feast')">
              <input type="hidden" name="id" value="feast" />
              <input type="hidden" name="action" value="add" />
              <img class="quantity-button" src="img/inc-arrow.png" onclick="changeQuantity(1, 'feast')" />
              <input type="submit" class="quantity-submit vert-align" value="Add to Checkout" />
            </form>
          </td>
        </tr>
      </table>

      <table class="prices">
        <th colspan="3">
          <h3 class="center">FenuCamel helps camels race to victory</h3>
        </th>
        <tr>
          <td>
            Buy 1 month
          </td>
          <td>
            €1000
          </td>
          <td class="quantity">
            <form method="GET" action="">
              <img class="quantity-button" src="img/dec-arrow.png" onclick="changeQuantity(-1, 'camel')" />
              <input class="quantity-txt vert-align" type="text" id="camel" name="quantity" value="0" onchange="negNum('camel')">
              <input type="hidden" name="id" value="camel" />
              <input type="hidden" name="action" value="add" />
              <img class="quantity-button" src="img/inc-arrow.png" onclick="changeQuantity(1, 'camel')" />
              <input type="submit" class="quantity-submit vert-align" value="Add to Checkout" />
            </form>
          </td>
        </tr>
        <tr>
          <td>
            Yard Box [30 camels for 30 days]
          </td>
          <td>
            €25,000.00
          </td>
          <td class="quantity">
            <form method="GET" action="">
              <img class="quantity-button" src="img/dec-arrow.png" onclick="changeQuantity(-1, 'camelbox')" />
              <input class="quantity-txt vert-align" type="text" id="camelbox" name="quantity" value="0" onchange="negNum('camelbox')">
              <input type="hidden" name="id" value="camelbox" />
              <input type="hidden" name="action" value="add" />
              <img class="quantity-button" src="img/inc-arrow.png" onclick="changeQuantity(1, 'camelbox')" />
              <input type="submit" class="quantity-submit vert-align" value="Add to Checkout" />
            </form>
          </td>
        </tr>
      </table>

      <table class="prices">
        <th colspan="3">
          <h3 class="center">FenuFoal</h3>
        </th>
        <tr>
          <td>
            Buy 1 month
          </td>
          <td>
            €100
          </td>
          <td class="quantity">
            <form method="GET" action="">
              <img class="quantity-button" src="img/dec-arrow.png" onclick="changeQuantity(-1, 'foal1')" />
              <input class="quantity-txt vert-align" type="text" id="foal1" name="quantity" value="0" onchange="negNum('foal1')">
              <input type="hidden" name="id" value="foal1" />
              <input type="hidden" name="action" value="add" />
              <img class="quantity-button" src="img/inc-arrow.png" onclick="changeQuantity(1, 'foal1')" />
              <input type="submit" class="quantity-submit vert-align" value="Add to Checkout" />
            </form>
          </td>
        </tr>
        <tr>
          <td>
            Buy 2 month
          </td>
          <td>
            €200
          </td>
          <td class="quantity">
            <form method="GET" action="">
              <img class="quantity-button" src="img/dec-arrow.png" onclick="changeQuantity(-1, 'foal2')" />
              <input class="quantity-txt vert-align" type="text" id="foal2" name="quantity" value="0" onchange="negNum('foal2')">
              <input type="hidden" name="id" value="foal2" />
              <input type="hidden" name="action" value="add" />
              <img class="quantity-button" src="img/inc-arrow.png" onclick="changeQuantity(1, 'foal2')" />
              <input type="submit" class="quantity-submit vert-align" value="Add to Checkout" />
            </form>
          </td>
        </tr>
        <tr>
          <td>
            Buy 3 month
          </td>
          <td>
            €300
          </td>
          <td class="quantity">
            <form method="GET" action="">
              <img class="quantity-button" src="img/dec-arrow.png" onclick="changeQuantity(-1, 'foal3')" />
              <input class="quantity-txt vert-align" type="text" id="foal3" name="quantity" value="0" onchange="negNum('foal3')">
              <input type="hidden" name="id" value="foal3" />
              <input type="hidden" name="action" value="add" />
              <img class="quantity-button" src="img/inc-arrow.png" onclick="changeQuantity(1, 'foal3')" />
              <input type="submit" class="quantity-submit vert-align" value="Add to Checkout" />
            </form>
          </td>
        </tr>
        <tr>
          <td>
            Yard Box [30 foals for 30 days]
          </td>
          <td>
            €2,400
          </td>
          <td class="quantity">
            <form method="GET" action="">
              <img class="quantity-button" src="img/dec-arrow.png" onclick="changeQuantity(-1, 'foalbox')" />
              <input class="quantity-txt vert-align" type="text" id="foalbox" name="quantity" value="0" onchange="negNum('foalbox')">
              <input type="hidden" name="id" value="foalbox" />
              <input type="hidden" name="action" value="add" />
              <img class="quantity-button" src="img/inc-arrow.png" onclick="changeQuantity(1, 'foalbox')" />
              <input type="submit" class="quantity-submit vert-align" value="Add to Checkout" />
            </form>
          </td>
        </tr>
      </table>

      <h3 style="margin-top: 30px" class="text-center">FenuJoint is suitable for the older horse</h3>
      <p  style="margin-bottom: 20px" class="text-center">
        Only available in Germany &amp; Mainland Europe through a distribution deal
      </p>

      <h3  style="margin-top: 30px" class="text-center">FenuCalm helps horses relax</h3>
      <p  style="margin-bottom: 20px" class="text-center">
        FenuCalm helps horses relaxOnly available in Germany &amp; Mainland Europe through a distribution deal
      </p>

      <h3  style="margin-top: 30px" class="text-center">FenuLyte replaces electrolytes after exercise or travel</h3>
      <p  style="margin-bottom: 20px" class="text-center">
        Only available in Germany &amp; Mainland Europe through a distribution deal
      </p>

<?php
  }
?>
    </div>

    <?php include('footer.php'); ?>
  </body>
</html>
