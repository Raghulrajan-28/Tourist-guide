<?php

include "db.php";

$sql = "SELECT * FROM bookings ORDER BY booking_id DESC";

$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Booking Details - TravelGuide</title>

    <style>

        body {
            font-family: Arial, sans-serif;
            background: #f5f3ff;
            margin: 0;
            padding: 30px;
        }

        h1 {
            text-align: center;
            color: #5b21b6;
        }

        .table-container {
            overflow-x: auto;
            background: white;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background: #5b21b6;
            color: white;
            padding: 12px;
        }

        td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
            text-align: center;
        }

        tr:hover {
            background: #f3f0ff;
        }

        .back {
            display: block;
            width: 180px;
            margin: 25px auto;
            text-align: center;
            text-decoration: none;
            background: #f97316;
            color: white;
            padding: 12px;
            border-radius: 8px;
        }

    </style>

</head>

<body>

<h1>Tourist Guide Bookings</h1>

<div class="table-container">

<table>

    <tr>

        <th>Booking ID</th>

        <th>Name</th>

        <th>Phone</th>

        <th>Date</th>

        <th>Guide Slot</th>

        <th>Time</th>

        <th>People</th>

        <th>Total Amount</th>

        <th>Booked On</th>

    </tr>

<?php

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

?>

    <tr>

        <td>
            <?php echo $row["booking_id"]; ?>
        </td>

        <td>
            <?php echo htmlspecialchars($row["name"]); ?>
        </td>

        <td>
            <?php echo htmlspecialchars($row["phone"]); ?>
        </td>

        <td>
            <?php echo htmlspecialchars($row["booking_date"]); ?>
        </td>

        <td>
            <?php echo htmlspecialchars($row["slot"]); ?>
        </td>

        <td>
            <?php echo htmlspecialchars($row["time_slot"]); ?>
        </td>

        <td>
            <?php echo $row["people"]; ?>
        </td>

        <td>
            ₹<?php echo number_format($row["total_amount"], 2); ?>
        </td>

        <td>
            <?php echo $row["booking_date_time"]; ?>
        </td>

    </tr>

<?php

    }

} else {

?>

    <tr>

        <td colspan="9">
            No bookings found.
        </td>

    </tr>

<?php

}

?>

</table>

</div>

<a href="index.html" class="back">
    Back to Booking Page
</a>

</body>

</html>

<?php

$conn->close();

?>