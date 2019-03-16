<!doctype html>
<html>
<head>
<title>Basic Demo Tutorial</title>

<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/app.css" />

</head>
<body>

<?php require 'lib/homepage-hero.php'; ?>

<?php require 'lib/header.php'; ?>

<div class="wrap" id="mission">
    <div class="container container__stacked text-center">
        <h2>Mission</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid asperiores aut debitis, eum ex facilis fugiat harum illum inventore molestias necessitatibus omnis possimus praesentium quae quam quisquam, repudiandae voluptas voluptate? Aliquid asperiores aut debitis, eum ex facilis fugiat harum illum inventore molestias necessitatibus omnis possimus praesentium quae quam quisquam, repudiandae voluptas voluptate.</p>
    </div>
</div>

<div class="wrap" id="devices">
    <div class="container text-center">
        <div class="left">
            <img class="img img-thumbnail" src="img/devices.jpg" alt="Works on all devices" />
        </div>
        <div class="right">
            <h2>Works where ever you are, on whatever device you're using!</h2>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi commodi consequuntur, dolore dolores, eum expedita explicabo illo inventore iusto molestiae non quae quam quasi recusandae repellat, totam veniam vitae voluptatibus!</p>

            <a class="btn btn-primary" href=""><b>Download</b> from the app store</a>
        </div>
    </div>
</div>

<div class="wrap" id="our-people">
    <div class="container container__stacked text-center">
        <h2>We value our team, check us out!</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid asperiores aut debitis, eum ex facilis fugiat harum illum inventore molestias necessitatibus omnis possimus praesentium quae quam quisquam, repudiandae voluptas voluptate? Aliquid asperiores aut debitis, eum ex facilis fugiat harum illum inventore molestias necessitatibus omnis possimus praesentium quae quam quisquam, repudiandae voluptas voluptate. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid asperiores aut debitis, eum ex facilis fugiat harum illum inventore molestias necessitatibus omnis possimus praesentium quae quam quisquam, repudiandae voluptas voluptate? Aliquid asperiores aut debitis, eum ex facilis fugiat harum illum inventore molestias necessitatibus omnis possimus praesentium quae quam quisquam, repudiandae voluptas voluptate.</p>
    </div>
</div>

<div class="wrap" id="about">
    <ul>
        <li><img class="montage" src="img/people-1.jpg" /></li>
        <li><img class="montage" src="img/people-2.jpg" /></li>
        <li><img class="montage" src="img/people-3.jpg" /></li>
        <li><img class="montage" src="img/people-4.jpg" /></li>
        <li><img class="montage" src="img/people-5.jpg" /></li>
        <li><img class="montage" src="img/people-6.jpg" /></li>
    </ul>
</div>

<?php require 'lib/locations.php'; ?>

<div class="wrap" id="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d405691.57240383344!2d-122.3212843181106!3d37.40247298383319!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb68ad0cfc739%3A0x7eb356b66bd4b50e!2sSilicon+Valley%2C+CA!5e0!3m2!1sen!2sus!4v1458624896221" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

<?php require 'lib/footer.php'; ?>

</body>
</html>