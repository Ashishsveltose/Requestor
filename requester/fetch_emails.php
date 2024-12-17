<?php



$host = 'localhost'; 
$db = 'invoiceo_ticket'; 
$user = 'invoiceo_ticket'; 
$pass = 'ejnav4aqfMVDqkBbcVLb'; 

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['email'])) {
    $email = $conn->real_escape_string($_POST['email']);
    $sql = "SELECT email FROM org_list WHERE email LIKE '%$email%' LIMIT 5"; // Fetch matching emails
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<div class="suggestion" style="padding: 8px; cursor: pointer;">' . htmlspecialchars($row['email']) . '</div>';
        }
    } else {
        echo '<div style="padding: 8px;">No suggestions</div>';
    }
}

$conn->close();
?>
