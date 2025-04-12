<?php
session_start();
require_once 'config.php'; // Include database connection

// Fetch Data from Database
$reservations = $conn->query("SELECT * FROM reservations");
$orders = $conn->query("SELECT * FROM `orders`");
$payments = $conn->query("SELECT * FROM payments");
$users = $conn->query("SELECT * FROM users");


// Fetch Metrics
$total_reservations = $reservations->num_rows;
$total_orders = $orders->num_rows;
$total_payments = $conn->query("SELECT SUM(amount_paid) AS total FROM payments")->fetch_assoc()['total'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashbord</title>
    <link rel="stylesheet" href="styles.css">
    <script>
        function showTab(tabId) {
            document.querySelectorAll('.content').forEach(section => section.style.display = 'none');
            document.getElementById(tabId).style.display = 'block';
        }
    </script>
    <style>
        /* General Styles */
        body {
            font-family: "Poppins", sans-serif;
            background: linear-gradient(to right, #37474F, #455A64);
            color: #ECEFF1;
            display: flex;
            height: 100vh;
        }

        /* Sidebar */
        .sidebar {
            width: 260px;
            background: #263238;
            padding: 20px;
            display: flex;
            flex-direction: column;
            gap: 15px;
            box-shadow: 2px 0px 10px rgba(0, 0, 0, 0.2);
        }
        .sidebar h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #FFA726;
        }
        .sidebar a {
            display: block;
            color: #ECEFF1;
            text-decoration: none;
            padding: 12px;
            background: #455A64;
            text-align: center;
            border-radius: 5px;
            font-weight: bold;
            transition: 0.3s;
            cursor: pointer;
        }
        .sidebar a:hover {
            background: #546E7A;
            transform: scale(1.05);
        }

        /* Main Content */
        .main-content {
            flex: 1;
            padding: 20px;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        /* Metrics Section */
        .metrics {
            display: flex;
            justify-content: space-around;
            background: #455A64;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
        }
        .metric-box {
            background: #FFA726;
            padding: 15px;
            border-radius: 5px;
            font-weight: bold;
        }

        /* Table Container */
        .table-container {
            background: #ECEFF1;
            color: #37474F;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            display: none;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        table, th, td {
            border: 1px solid #B0BEC5;
        }
        th, td {
            padding: 12px;
            text-align: left;
        }
        th {
            background: #455A64;
            color: #ECEFF1;
        }
        tr:nth-child(even) {
            background: #CFD8DC;
        }
        tr:nth-child(odd) {
            background: #ECEFF1;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .sidebar {
                width: 100%;
                text-align: center;
            }
            .main-content {
                padding: 10px;
            }
            .metrics {
                flex-direction: column;
                align-items: center;
                gap: 10px;
            }
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <h2>SeaSide Admin Dashboard</h2>
        <a onclick="showTab('customers')">Manage Users</a>
        <a onclick="showTab('reservations')">Manage Reservations</a>
        <a onclick="showTab('orders')">Manage Orders</a>
        <a onclick="showTab('payments')">Manage Payments</a>
      <!--  <a onclick="showTab('tables')">Manage Tables</a>
        <a onclick="showTab('user')">Manage Users</a>-->
        <a href="user_page.php">Logout</a>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Metrics Section -->
        <div class="metrics">
            <div class="metric-box">Total Customers: <?php echo $total_customers; ?></div>
            <div class="metric-box">Total Reservations: <?php echo $total_reservations; ?></div>
            <div class="metric-box">Total Orders: <?php echo $total_orders; ?></div>
            <div class="metric-box">Total Payments: ₱<?php echo number_format($total_payments, 2); ?></div>
            <div class="metric-box">Available Tables: <?php echo $total_available_tables; ?></div>
        </div>

        <!-- Main Content -->
    <div class="main-content">
        <!-- Customers Table -->
        <div id="customers" class="table-container content">
            <h3>Manage Users</h3>
            <table>
                <thead>
                    <tr>
                        <th>User ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Contact</th>
                        <th>role</th>
                        
                       
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $users->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['phone_number']; ?></td>
                            <td><?php echo $row['role']; ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>

        <!-- Manage reservation Table -->
        <div id="reservations" class="table-container content">
            <h3>Manage Reservations</h3>
            <table>
                <thead>
                    <tr>
                        <th>Reservation ID</th>
                        <th>Customer Name</th>
                        <th>Phone number</th>
                        <th>Guests</th>
                        <th>Reservation Date</th>
                        <th>Reservation Time</th>
                        <th>Request</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $reservations->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['phone_number']; ?></td>
                            <td><?php echo $row['guests']; ?></td>
                            <td><?php echo $row['reservation_date']; ?></td>
                            <td><?php echo $row['reservation_time']; ?></td>
                            <td><?php echo $row['notes']; ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>

        <!-- Orders Table -->
        <div id="orders" class="table-container content">
            <h3>Manage Orders</h3>
            <table>
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Reservation ID</th>
                        <th>Order Item</th>
                        <th>Total Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $orders->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo $row['order_id']; ?></td>
                            <td><?php echo $row['reservation_id']; ?></td>
                            <td><?php echo $row['order_item']; ?></td>
                            <td>₱<?php echo number_format($row['total_amount'], 2); ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>

        <!-- Payments Table -->
        <div id="payments" class="table-container content">
            <h3>Manage Payments</h3>
            <table>
                <thead>
                    <tr>
                        <th>Payment ID</th>
                        <th>Order ID</th>
                        <th>Amount Paid</th>
                        <th>Payment Date</th>
                        <th>Payment Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $payments->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo $row['payment_id']; ?></td>
                            <td><?php echo $row['order_id']; ?></td>
                            <td>₱<?php echo number_format($row['amount_paid'], 2); ?></td>
                            <td><?php echo $row['payment_date']; ?></td>
                            <td><?php echo $row['payment_status']; ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>

        <!-- Tables Section -->
        <div id="tables" class="table-container content">
            <h3>Manage Tables</h3>
            <table>
                <thead>
                    <tr>
                        <th>Table ID</th>
                        <th>Table Number</th>
                        <th>Seating Capacity</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $tables->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo $row['table_id']; ?></td>
                            <td><?php echo $row['table_number']; ?></td>
                            <td><?php echo $row['seating_capacity']; ?></td>
                            <td><?php echo $row['status']; ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>

                    <!-- user table -->
    <div id="user" class="table-container content">
            <h3>Manage user</h3>
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>role</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $user->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['role']; ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>

    <script> showTab('customers'); </script>

</body>
</html>
