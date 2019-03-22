<?php session_start(); ?>
<!doctype html>
<html>
<head>
<title>Basic Demo Tutorial</title>

<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/app.css" />

</head>
<body>

<?php require 'lib/header.php'; ?>

<div class="wrap" id="contact-form">
    <div class="container container__stacked text-center">

        <h2>Get in touch, with us!</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid asperiores aut debitis, eum ex facilis fugiat harum illum inventore molestias necessitatibus omnis possimus praesentium quae quam quisquam, repudiandae voluptas voluptate? Aliquid asperiores aut debitis, eum ex facilis fugiat harum illum inventore molestias necessitatibus omnis possimus praesentium quae quam quisquam, repudiandae voluptas voluptate.</p>

        <?php

        if($_SESSION['response']) {
            foreach($_SESSION['response']['msgs'] as $msg) {
                $class = $_SESSION['response']['failed'] ? "failed" : "success";
                echo '<p class="'. $class .'">'. $msg .'</p>';
            }
        }
        ?>

        <form action="process/contact.php" method="post" class="text-left">

            <div class="form-group width-full">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name..." />
            </div>

            <div>
                <div class="form-group width-half">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter phone..." />
                </div>
                <div class="form-group width-half">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email" id="email" placeholder="Enter email..." />
                </div>
            </div>

            <div class="form-group width-full">
                <label for="message">Message</label>
                <textarea class="form-control" name="message" id="message" placeholder="Enter your message..."></textarea>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Send message</button>
            </div>

        </form>
    </div>
</div>

<?php require 'lib/locations.php'; ?>

<?php require 'lib/map.php'; ?>

<?php require 'lib/footer.php'; ?>

</body>
</html>

<?php unset($_SESSION['response']); ?>