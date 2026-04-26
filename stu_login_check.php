<?php
session_start();
include('connection.php');

if (isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';

    if ($email === '' || $password === '') {
        ?>
        <script>alert("Your Login Email or Password is empty"); window.history.back();</script>
        <?php
        exit;
    }

    $hashedPassword = sha1($password);
    $stmt = mysqli_prepare($conn, 'SELECT 1 FROM stu_register WHERE stu_email = ? AND stu_password = ? LIMIT 1');

    if ($stmt === false) {
        ?>
        <script>alert("Login is temporarily unavailable. Please try again."); window.history.back();</script>
        <?php
        exit;
    }

    mysqli_stmt_bind_param($stmt, 'ss', $email, $hashedPassword);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);

    if (mysqli_stmt_num_rows($stmt) === 1) {
        $_SESSION['email'] = $email;
        mysqli_stmt_close($stmt);
        header('Location: stu_home.php');
        exit;
    }

    mysqli_stmt_close($stmt);
    ?>
    <script>alert("Your Login Email or Password is invalid"); window.history.back();</script>
    <?php
}
?>
