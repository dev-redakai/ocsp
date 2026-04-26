<?php
session_start();
include('connection.php');

if (isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';

    if ($username === '' || $password === '') {
        ?>
        <script>alert("Invalid Details"); window.history.back();</script>
        <?php
        exit;
    }

    $stmt = mysqli_prepare($conn, 'SELECT 1 FROM admin_register WHERE a_name = ? AND a_password = ? LIMIT 1');

    if ($stmt === false) {
        ?>
        <script>alert("Login is temporarily unavailable. Please try again."); window.history.back();</script>
        <?php
        exit;
    }

    mysqli_stmt_bind_param($stmt, 'ss', $username, $password);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);

    if (mysqli_stmt_num_rows($stmt) === 1) {
        $_SESSION['username'] = $username;
        mysqli_stmt_close($stmt);
        header('Location: welcome.php');
        exit;
    }

    mysqli_stmt_close($stmt);
    ?>
    <script>alert("Invalid Details");</script>
    <?php
    header('Location: index.php');
    exit;
}
?>
