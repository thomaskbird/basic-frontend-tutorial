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

<section class="wrap" id="mission">
    <div class="container container__stacked text-center">
        <h2>Mission</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid asperiores aut debitis, eum ex facilis fugiat harum illum inventore molestias necessitatibus omnis possimus praesentium quae quam quisquam, repudiandae voluptas voluptate? Aliquid asperiores aut debitis, eum ex facilis fugiat harum illum inventore molestias necessitatibus omnis possimus praesentium quae quam quisquam, repudiandae voluptas voluptate.</p>
    </div>
</section>

<section class="wrap" id="devices">
    <div class="container text-center">
        <div class="column">
            <img class="img img-thumbnail" src="img/devices.jpg" alt="Works on all devices" />
        </div>
        <div class="column">
            <h2>Works where ever you are, on whatever device you're using!</h2>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi commodi consequuntur, dolore dolores, eum expedita explicabo illo inventore iusto molestiae non quae quam quasi recusandae repellat, totam veniam vitae voluptatibus!</p>

            <a class="btn btn-primary" href=""><b>Download</b> from the app store</a>
        </div>
    </div>
</section>

<section class="wrap" id="our-people">
    <div class="container container__stacked text-center">
        <h2>We value our team, check us out!</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid asperiores aut debitis, eum ex facilis fugiat harum illum inventore molestias necessitatibus omnis possimus praesentium quae quam quisquam, repudiandae voluptas voluptate? Aliquid asperiores aut debitis, eum ex facilis fugiat harum illum inventore molestias necessitatibus omnis possimus praesentium quae quam quisquam, repudiandae voluptas voluptate. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid asperiores aut debitis, eum ex facilis fugiat harum illum inventore molestias necessitatibus omnis possimus praesentium quae quam quisquam, repudiandae voluptas voluptate? Aliquid asperiores aut debitis, eum ex facilis fugiat harum illum inventore molestias necessitatibus omnis possimus praesentium quae quam quisquam, repudiandae voluptas voluptate.</p>
    </div>
</section>

<section class="wrap" id="about">
    <ul class="row">
        <li><img class="montage" src="img/people-1.jpg" /></li>
        <li><img class="montage" src="img/people-2.jpg" /></li>
        <li><img class="montage" src="img/people-3.jpg" /></li>
        <li><img class="montage" src="img/people-4.jpg" /></li>
        <li><img class="montage" src="img/people-5.jpg" /></li>
        <li><img class="montage" src="img/people-6.jpg" /></li>
    </ul>
</section>

<?php require 'lib/locations.php'; ?>

<?php require 'lib/map.php'; ?>

<?php require 'lib/footer.php'; ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script src="/js/site.js"></script>

</body>
</html>