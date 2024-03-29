<?php
session_start();
if (!isset($_SESSION['userId'])) {
    https: //www.php.net/manual/en/function.session-destroy.php
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(
            session_name(),
            '', tempo() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }
    session_destroy();
    header("location: login.php");
}
include './partials/template/header.php';
?>

<h1>Arrivederci !</h1>

<?php
include './partials/template/footer.php';
?>