<?php
include 'db_connection.php';

// Get order ID securely from URL
$orderId = isset($_GET['order_id']) ? mysqli_real_escape_string($conn, $_GET['order_id']) : null;

if ($orderId) {
    // Get order details using the order ID
    $query = "SELECT * FROM orders WHERE batch_order_number = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, 's', $orderId);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<h2>Order Confirmation</h2>";
            echo "<p>Order ID: " . htmlspecialchars($row['batch_order_number']) . "</p>";
            echo "<p>Product: " . htmlspecialchars($row['product_name']) . "</p>";
            echo "<p>Quantity: " . htmlspecialchars($row['quantity']) . "</p>";
            echo "<p>Total Price: " . htmlspecialchars($row['subtotal']) . "</p>";
        }
    } else {
        echo "<p>Error retrieving order details.</p>";
    }
} else {
    echo "<p>Invalid order ID.</p>";
}
?>
