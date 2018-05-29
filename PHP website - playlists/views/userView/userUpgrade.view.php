<?php
require 'views/divs/styles.php';
?>

    <body>
<?php
require 'views/divs/userNavbar.php';
?>
    Hello <?= htmlspecialchars($_SESSION['name']); ?>
    </body>
    <a href="https://www.paypal.me/diaconu96"> Press this to upgrade</a>
</html>
