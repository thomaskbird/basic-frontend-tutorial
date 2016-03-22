<!doctype html>
<html>
<head>
<title>Basic Demo Tutorial</title>

    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>

<style>
body {
    margin: 0;
    font-family: 'Source Sans Pro', sans-serif;
    font-weight: 100;
    font-size: 1.0em;
}

h1,h2,h3,h4,h5 {
    font-weight: 100;
}

h2 {
    color: #603D77;
    font-size: 52px;
    margin: 50px 0 0px 0;
}

p {
    margin: 10px 0;
}

b {
    font-weight: 700;
}

.text-center {
    text-align: center;
}

.wrap {
    width: 100%; float: left;
}

.container {
    width: 80%;
    margin: 0 auto;
}

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
    font-size: 104px;
    margin: 0;
    text-transform: uppercase;
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
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid asperiores aut debitis, eum ex facilis fugiat harum illum inventore molestias necessitatibus omnis possimus praesentium quae quam quisquam, repudiandae voluptas voluptate?</p>
    </div>
</div>

<div class="wrap" id="devices">
    <div class="container text-center">

    </div>
</div>

</body>
</html>