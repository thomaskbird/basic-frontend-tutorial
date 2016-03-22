<!doctype html>
<html>
<head>
<title>Basic Demo Tutorial</title>

<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>

<style>
/**
 *  General overwrite styles
 */
body {
    margin: 0;
    font-family: 'Source Sans Pro', sans-serif;
    font-weight: 100;
    font-size: 1.0em;
}

p {
    font-size: 16px;
}

h1,h2,h3,h4,h5 {
    font-weight: 100;
}

h2 {
    color: #603D77;
    font-size: 32px;
    margin: 0;
}

p {
    margin: 10px 0;
    line-height: 150%;
}

b {
    font-weight: 700;
}

ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

/**
 *  Helper classes
 */
.text-center {
    text-align: center;
}

.img {
    max-width: 100%;
}

.img-thumbnail {
    border: 5px solid #fff;
    -webkit-box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.25);
    -moz-box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.25);
    box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.25);
}

.left, .right {
    width: 50%;
    padding: 2.5%;
    box-sizing: border-box;
}

.left {
    float: left;
}

.right {
    float: left;
}

.wrap {
    width: 100%;
    float: left;
    padding: 0;
}

.container {
    width: 80%;
    margin: 0 auto;
}

/**
 *  Core styles
 */
#hero {
    background: url(img/people-night.jpg) no-repeat center top;
    background-size: cover;
    text-align: center;
}

#hero .container {
    padding: 200px 0;
}

#hero h1, #hero h4 {
    color: #fff;
    text-shadow: 0px 2px 10px rgba(0, 0, 0, 0.75);
}

#hero h1 {
    font-size: 74px;
    margin: 0;
    text-transform: uppercase;
}

#hero h1 b {
    font-size: 104px;
}

#hero h4 {
    font-size: 34px;
    margin: 0;
}

.hero-btns {
    list-style: none;
    margin: 50px 0 0;
    padding: 0;
}

.hero-btns li {
    display: inline-block;
    margin: 0 10px;
}

.btn {
    display: inherit;
    padding: 10px 20px;
    font-size: 16px;
    font-weight: 400;
    text-transform: uppercase;
    border-radius: 7px;
    -webkit-border-radius: 7px;
    -moz-border-radius: 7px;
    text-decoration: none;
}

.btn-transparent {
    color: #fff;
    border: 2px solid #fff;
}

.btn-transparent:hover {
    background: rgba(255,255,255,0.1) ;
}

.btn-primary {
    color: #fff;
    border: 2px solid #3B1156;
    background: #603D77;
}

.btn-primary:hover {
    background: #593571;
}

#navigation {
    background: #603D77;
}

#navigation ul {
    list-style: none;
    margin: 0;
    padding: 0;
}

#navigation li {
    display: inline-block;
}

#navigation a {
    color: #bbb;
    font-size: 16px;
    text-decoration: none;
    padding: 15px 20px;
    display: inherit;
}

#navigation a:hover {
    color: #fff;
    background: #513067;
}

#mission {
    background: #f5f5f5;
}

#our-people {
    background: #f5f5f5;
}

#about li {
    width: 33.3333333%;
    float: left;
}

#about img {
    width: 100%;
    opacity: .75;
}

#about img:hover {
    opacity: 1;
}

.address {
    width: 25%;
    float: left;
    padding: 15px;
    box-sizing: border-box;
}

#map iframe {
    width: 100%;
    height: 300px;
}

#footer {
    background: #603D77;
    color: #fff;
}

#footer h2 {
    color: #fff;
}

#footer a {
    color: #fff;
    text-decoration: none;
}

#footer a:hover {
    text-decoration: underline;
}

#devices, #mission, #our-people, #map-intro, #footer {
    padding: 50px 0;
}

@media( max-width: 768px ) {
    .left, .right {
        width: 100%;
    }

    #about li {
        width: 50%;
    }

    .address {
        width: 50%;
    }
}
</style>

</head>
<body>

<div class="wrap" id="hero">
    <div class="container text-center">
        <h1>Music . <b>Love</b> . Life</h1>
        <h4>Making music easier to find, share and love!</h4>

        <ul class="hero-btns">
            <li><a class="btn btn-transparent" href="">Join</a></li>
            <li><a class="btn btn-primary" href="">Start <b>discovering</b></a></li>
        </ul>
    </div>
</div>

<div class="wrap" id="navigation">
    <div class="container">
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">Discover</a></li>
            <li><a href="">Categories</a></li>
            <li><a href="">Genre</a></li>
            <li><a href="">Sponsors</a></li>
            <li><a href="">Contact</a></li>
        </ul>
    </div>
</div>

<div class="wrap" id="mission">
    <div class="container text-center">
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
            <h2>Works whereever you are, on whatever you're using!</h2>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi commodi consequuntur, dolore dolores, eum expedita explicabo illo inventore iusto molestiae non quae quam quasi recusandae repellat, totam veniam vitae voluptatibus!</p>

            <a class="btn btn-primary" href=""><b>Download</b> from the app store</a>
        </div>
    </div>
</div>

<div class="wrap" id="our-people">
    <div class="container text-center">
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

<div class="wrap" id="map-intro">
    <div class="container">
        <h2 class="text-center">We have numerous locations globally</h2>

        <div class="address">
            <p><b>Headquarters</b><br/>
            123 Somewhere Rd.<br/>
            Silicon Valley, CA 94301<br/>
            P: 800-567-4958</p>
        </div>

        <div class="address">
            <p><b>Headquarters</b><br/>
                123 Somewhere Rd.<br/>
                Silicon Valley, CA 94301<br/>
                P: 800-567-4958</p>
        </div>

        <div class="address">
            <p><b>Headquarters</b><br/>
                123 Somewhere Rd.<br/>
                Silicon Valley, CA 94301<br/>
                P: 800-567-4958</p>
        </div>

        <div class="address">
            <p><b>Headquarters</b><br/>
                123 Somewhere Rd.<br/>
                Silicon Valley, CA 94301<br/>
                P: 800-567-4958</p>
        </div>
    </div>
</div>

<div class="wrap" id="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d405691.57240383344!2d-122.3212843181106!3d37.40247298383319!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb68ad0cfc739%3A0x7eb356b66bd4b50e!2sSilicon+Valley%2C+CA!5e0!3m2!1sen!2sus!4v1458624896221" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

<div class="wrap" id="footer">
    <div class="container text-center">
        <h2><b>Music Made Easy,</b> Just The Way We Like It!</h2>

        &copy; <?php echo date('Y'); ?> All rights reserved.
        Photo Credit: <a target="_blank" href="https://www.pexels.com/">https://www.pexels.com</a>
    </div>
</div>

</body>
</html>