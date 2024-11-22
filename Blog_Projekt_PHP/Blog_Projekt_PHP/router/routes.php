<?php
$page = basename($_SERVER['REQUEST_URI'] ?? '');

$viewDir = "views";

switch ($page) {
    case 'home':
    case 'index':
        require $viewDir . '/home_view.php';
        break;
    case 'login':
        require $viewDir . '/login_view.php';
        break;
    case 'sign_up':
        require $viewDir . '/signup_view.php';
        break;
    case 'writeBlog':
        require $viewDir . '/writeBlog_view.php';
        break;
    default:
        http_response_code(404);
        require $viewDir . '/404_view.php';
}
?>