<?php
define("SITE_PATH", "/srv/http/learn/");
require_once(SITE_PATH."/config/config.php");
?>
    <a href="<?php echo(SITE_URL); ?>pages/login.php">
        <button>Login</button>
    </a>
    <a href="<?php echo(SITE_URL); ?>pages/register.php">
        <button>Register</button>
    </a>

    <a href="<?php echo(SITE_URL); ?>">
        <button>Home</button>
    </a>


