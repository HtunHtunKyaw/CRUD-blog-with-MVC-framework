<?php
    require (APPROOT . '/views/includes/head.php');
?>

<div class="navbar">
    <?php
        require (APPROOT . '/views/includes/navigation.php');
    ?>
</div>
<?php  
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);    
?>
<div class="container-login">
    <div class="wrapper-login">
        <h2>Sign In</h2>
        <form action="<?php echo URLROOT; ?>/users/login" method="POST">
            <input type="text" placeholder="Username *" name="username">
            <span class="invalidFeedback">
                <?php echo $data['usernameError'] ?>
            </span>

            <input type="password" placeholder="Password *" name="password">
            <span class="invalidFeedback">
                <?php echo $data['passwordError'] ?>
            </span>

            <button type="submit" id="submit" value="submit">Submit</button>
            <p class="option">Not registered yet? <a href="<?php echo URLROOT; ?>/users/register">Create an account!</a></p>
        </form>
    </div>
</div>