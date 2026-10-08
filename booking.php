
<?php

// Get booking details from the HTML form

$name = $_POST['name'] ?? '';
$phone = $_POST['phone'] ?? '';
$date = $_POST['date'] ?? '';
$slot = $_POST['slot'] ?? '';
$time = $_POST['time'] ?? '';
$people = $_POST['people'] ?? '1';

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Booking Confirmation - TravelGuide</title>

    <link rel="stylesheet" href="style.css">

    <style>

        .confirmation-page {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 30px;
        }

        .confirmation-card {
            width: 100%;
            max-width: 600px;
            background: white;
            padding: 35px;
            border-radius: 15px;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.15);
        }

        .confirmation-card h1 {
            text-align: center;
            color: #f57c00;
            margin-bottom: 10px;
        }

        .confirmation-card p {
            text-align: center;
            color: #555;
            margin-bottom: 25px;
        }

        .booking-details {
            margin-top: 20px;
        }

        .detail-row {
            display: flex;
            justify-content: space-between;
            padding: 14px 5px;
            border-bottom: 1px solid #ddd;
        }

        .detail-row strong {
            color: #333;
        }

        .detail-row span {
            color: #555;
        }

        .total-row {
            font-size: 20px;
            margin-top: 10px;
        }

        .back-button {
            display: block;
            width: fit-content;
            margin: 30px auto 0;
            padding: 12px 25px;
            background: #f57c00;
            color: white;
            text-decoration: none;
            border-radius: 8px;
        }

        .back-button:hover {
            opacity: 0.9;
        }

    </style>

</head>

<body>

<header class="topbar">

    <a class="logo" href="index.html">
        Travel<span>Guide</span>
    </a>

</header>


<main class="confirmation-page">

    <section class="confirmation-card">

        <h1>Booking Confirmed!</h1>

        <p>
            Your tourist guide booking has been successfully submitted.
        </p>


        <div class="booking-details">


            <div class="detail-row">

                <strong>Full Name</strong>

                <span>
                    <?php echo htmlspecialchars($name); ?>
                </span>

            </div>


            <div class="detail-row">

                <strong>Phone Number</strong>

                <span>
                    <?php echo htmlspecialchars($phone); ?>
                </span>

            </div>


            <div class="detail-row">

                <strong>Booking Date</strong>

                <span>
                    <?php echo htmlspecialchars($date); ?>
                </span>

            </div>


            <div class="detail-row">

                <strong>Guide Slot</strong>

                <span>
                    <?php echo htmlspecialchars($slot); ?>
                </span>

            </div>


            <div class="detail-row">

                <strong>Time</strong>

                <span>
                    <?php echo htmlspecialchars($time); ?>
                </span>

            </div>


            <div class="detail-row">

                <strong>Number of People</strong>

                <span>
                    <?php echo htmlspecialchars($people); ?>
                </span>

            </div>


            <div class="detail-row total-row">

                <strong>Total Amount</strong>

                <span>
                    ₹<?php echo (600 * (int)$people); ?>
                </span>

            </div>


        </div>


        <a href="index.html" class="back-button">
            Back to Booking
        </a>


    </section>

</main>

</body>

</html>