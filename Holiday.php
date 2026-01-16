<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAPSI Holidays - Reservation Confirmed</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <nav class="top-nav">
        <a href="index.php" class="nav-link"><span>Home</span></a>
        <a href="Holiday.html" class="nav-link"><span>Back</span></a>
    </nav>
    <div class="container">
        <div class="card">
            <h1>PAPSI Holidays</h1>
            <p class="subtitle">Reservation Confirmation</p>
            <div class="reservation-result">
                <?php
                $price = 500;
                $hotelmodifier = 1;
                $placemodifier = 1;
                $hotel = $_POST['rdoHotel'];
                $destination = $_POST['rdoDestination'];
                $success = false;

                if ($hotel=="three") {
                   if ($destination=="HongKong") {
                    $hotelmodifier = 2;
                    $price = $price * $placemodifier;
                    $success = true;
                   }
                   else if ($destination=="Singapore") {
                    $hotelmodifier = 3.5;
                    $price = $price * $placemodifier;
                    $success = true;
                   }
                   else if ($destination=="Malaysia") {
                    $price = $price * $placemodifier;
                    $success = true;
                   }
                }
                else if ($hotel=="five") {
                   if ($destination=="HongKong") {
                    $hotelmodifier = 2.5;
                    $price = $price * $placemodifier * $hotelmodifier;
                    $success = true;
                   }
                   else if ($destination=="Singapore") {
                    $hotelmodifier = 4;
                    $price = $price * $placemodifier * $hotelmodifier;
                    $success = true;
                   }
                   else if ($destination=="Malaysia") {
                    $price = $price * $placemodifier * $hotelmodifier;
                    $success = true;
                   }
                }

                if ($success) {
                    $hotelStars = ($hotel == "three") ? "⭐⭐⭐" : "⭐⭐⭐⭐⭐";
                    echo "<div class='success-message'>";
                    echo "<div class='icon-large'>✅</div>";
                    echo "<h2>Reservation Confirmed!</h2>";
                    echo "<div class='reservation-details'>";
                    echo "<div class='detail-item'><span class='label'>Destination:</span> <span class='value'>$destination</span></div>";
                    echo "<div class='detail-item'><span class='label'>Hotel Type:</span> <span class='value'>$hotelStars " . ucfirst($hotel) . " Star</span></div>";
                    echo "<div class='detail-item price'><span class='label'>Total Cost:</span> <span class='value'>\$$price</span></div>";
                    echo "<p class='duration'>One-week holiday package</p>";
                    echo "</div>";
                    echo "<p class='thank-you'>Thank you for choosing PAPSI Holidays! Enjoy your trip! 🎉</p>";
                    echo "</div>";
                } else {
                    echo "<div class='error-message'>";
                    echo "<div class='icon-large'>❌</div>";
                    echo "<h2>Invalid Entry</h2>";
                    echo "<p>Sorry, you have made an invalid entry. Please try again.</p>";
                    echo "</div>";
                }
                ?>
            </div>
            <a href="Holiday.html" class="btn btn-primary">Make Another Reservation</a>
        </div>
    </div>
</body>
</html>
