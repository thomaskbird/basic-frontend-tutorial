# Tutorial

We'll be building this example website:

[![alt text](img/sample-full-finished-example.jpg "Full example")](img/sample-full-finished-example.jpg)

To run this code and view it, go into your command prompt and cd into this directory then run this command:

`php -S localhost:8000`

#### Step 1 
- Create an index file, for this tutorial we'll use the `.php` extension so that you can make use of some basic php scripting.
- So in the root directory create a `index.php` file and save it.
- Next inside the `css` directory create a `app.css` file.

These are the basic files you will need to get started.

#### Step 2
- Open up your `index.php` file and let's put a basic boilerplate of code:

```html
<!doctype html>
<html>
<head>
<title>My example</title>
</head>
<body>

</body>
</html>
```

- Let's also link to your stylesheet so that the styles can be reflected inside your `index.php`

```html
<!doctype html>
<html>
<head>
<title>My example</title>

<link rel="stylesheet" href="css/app.css" />
</head>
<body>

</body>
</html>
```

So if we look at the example image, we can basically break the website down into 9 sections:

- Hero section
- Navigation
- Mission
- Device info
- Team about section
- Culture image section
- Locations
- Map
- Footer

If you look at the design we will notice that there are essentially two containers around each section. There is an outside container that spans the full width of the viewable area and an inside container that holds the content within 1170px and centered on the page. Below is a graphic with the outer container highlighted with red and the inside container highlighted with green.

[![alt text](img/sample-full-finished-example-container-highlights.jpg "Containers highlighted")](img/sample-full-finished-example-container-highlights.jpg)

#### Step 4
Next let's create 4 structural elements, a wrap, container, container__stacked and row. Your wrap will be the red outlined full container, the green outlined area will be a container that has columns sitting side by side in it. The container__stacked will create a container that stacks the inner elements instead of making columns sitting side by side. Finally we will create a row that will be for inner elements that need to be stacked but also have inner elements that are sitting side by side. If this doesn't make sense right now it's fine well explain more in depth later.

So let's add some markup to our example, to create the inner and outer containers, for this well use `section` html tags and `div` tags:

```html
<!doctype html>
<html>
<head>
<title>My example</title>

<link rel="stylesheet" href="css/app.css" />
</head>
<body>

<section class="wrap" id="hero">
    <div class="container">
        
    </div>
</section>

<navigation class="wrap" id="navigation">
    <div class="container">

    </div>
</navigation>

<section class="wrap" id="mission">
    <div class="container">
    
    </div>
</section>

<section class="wrap" id="devices">
    <div class="container">

    </div>
</section>

<section class="wrap" id="our-people">
    <div class="container">
    
    </div>
</section>

<section class="wrap" id="about">
    
</section>

<section class="wrap" id="map-intro">
    <div class="container">
    
    </div>
</section>

<section class="wrap" id="map">
    
</section>

<footer class="wrap" id="footer">
    <div class="container">
    
    </div>
</footer>

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script src="/js/site.js"></script>

</body>
</html>
```

We'll also link some javascript files near the bottom of the index. It's a similar concept to linking in the stylesheet with a slightly different syntax. Here is an example:
```html
<script src="/path/to/file.js"></script>
```

So let's create a javascript file in the `js` directory called `site.js` and import it, this is what the import would look like:
```html
<script src="/js/site.js"></script>
```

We'll also import in a framework called [jQuery](https://jquery.com/) from a remote site. This will help facilate some minor javascript interactions. Importing will look like this:
```html
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
```

So altogether, you'll also notice each `wrap` element has an `id` attribute, this is how we will target each major section individually so that we can add things like the background images, background colors and such to the individual containers:

```html
<!doctype html>
<html>
<head>
<title>My example</title>

<link rel="stylesheet" href="css/app.css" />
</head>
<body>

<section class="wrap" id="hero">
    <div class="container">
        
    </div>
</section>

<navigation class="wrap" id="navigation">
    <div class="container">

    </div>
</navigation>

<section class="wrap" id="mission">
    <div class="container">
    
    </div>
</section>

<section class="wrap" id="devices">
    <div class="container">

    </div>
</section>

<section class="wrap" id="our-people">
    <div class="container">
    
    </div>
</section>

<section class="wrap" id="about">
    
</section>

<section class="wrap" id="map-intro">
    <div class="container">
    
    </div>
</section>

<section class="wrap" id="map">
    
</section>

<footer class="wrap" id="footer">
    <div class="container">
    
    </div>
</footer>

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script src="/js/site.js"></script>

</body>
</html>
```

Let's also add a custom font to help clean up the websites look and feel, we can do this by opening up our `css/app.css` and adding the following line at the top of the file:

```css
@import "//fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic";
```

A brief explanation, on the web there are webfonts, this allows custom fonts that are not installed on a users computer to be used on the web. Google has an open source [font library](https://fonts.google.com/) that is free to use, it gives you a wide variety of fonts to choose from and it's a resource you don't have to host yourself.

We'll also add some basic styling overrides to customize the look and feel of our webpage just a bit:

```css
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

label {
    display: block;
    color: #aaa;
    font-size: 14px;
    margin-bottom: 5px;
}

/**
 *  Helper classes
 */
.img {
    max-width: 100%;
}

.img-thumbnail {
    border: 5px solid #fff;
    -webkit-box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.25);
    -moz-box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.25);
    box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.25);
}
```

At the very top in the `body` rule you'll see this line `font-family: 'Source Sans Pro', sans-serif;` Remember we imported the google font, this essentially tells the entire page to use this font. 

I'm not gonna go into to much detail about what these styles do, they are very basic and mostly resets to the user agent / defaults. The class `.img-thumbnail` is a helper class to give the images just a little bit more styling and make them look a little bit cleaner when displayed on the website. An example of how this class will look when applied to an image is below highlighted in red:

[![alt text](img/sample-thumbnail.jpg "Thumbnail example")](img/sample-thumbnail.jpg)

Next let's start some general styles by adding the following lines to the `app.css`:

You'll also notice these three lines in the `.img-thumbnail` styles:

```css
-webkit-box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.25);
-moz-box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.25);
box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.25);
```

This is the same exact rule, the difference is that some of the rules have a `-prefix-`. These prefixes are because not every browser supports code written the same way. These browser prefixes allow the browsers that don't support the plain `box-shadow` rule, unless you have the browser prefix, the browser won't know how to apply this rule. You can find a good more detailed explanation here in this [article](https://www.lifewire.com/css-vendor-prefixes-3466867).

This `.text-center` and `.text-left` class will allow us to easily align center or left the text inside of whatever tag we apply this class to. It can easily be attached any html tag by doing this `class="text-center"` or `class="text-left"`. Text by default aligns to the left, but there will be times where you may set something to align center, but have child items that need to be left aligned which is where the `.text-left` class will come in handy.

```css
.text-center {
    text-align: center;
}

.text-left {
    text-align: left;
}
```

Here we've targeted to classes, `.wrap` and `container`. You can add multiple selectors by separating them by commas. Below we've added the rule `display: flex;` this tells the browser to display both these elements as [`flex`](https://css-tricks.com/snippets/css/a-guide-to-flexbox/) items.  
```css
.wrap,
.container {
    display: flex;
}
```

Next for the `.container` we want to set a fluid width to the container, this means that the container will change per the screen size to adapt to a variety of devices. Here we've chosen so set the width to `80%` and we also want the container to be centered, which is what `margin: 0 auto;` does. 
```css
.container {
    width: 80%;
    margin: 0 auto;
}
```

Next is a helper container class, by default, when you set an element to display flex, it's children elements will automatically be positioned to set side by side, here we will override this with the `flex-direction` rule, setting it to column.
```css
.container__stacked {
    flex-direction: column;
}
```

The following is another helper class, by add this class similarly the way we did with the `container__stacked` class, we can apply this set of style rules. Here again we are setting the elements `display` to `flex`. This allows the contained elements to sit side by side, this class will be used on elements that are inside a parent that need the elements stacked but then also have an stacked element that will have other side by side inside elements.
```css
.row {
    display: flex;
}
```

From here on out well focus on each individual section, adding the content and styling working from the top down.

#### Step 5
Let's start with the `#hero` section, let's add the following markup:

```html
<section class="wrap" id="hero">
    <div class="container container__stacked text-center">
        <h1>Music . <b>Love</b> . Life</h1>
        <h4>Making music easier to find, share and love!</h4>

        <ul class="hero-btns">
            <li><a class="btn btn-transparent" href="">Join</a></li>
            <li><a class="btn btn-primary" href="">Start <b>discovering</b></a></li>
        </ul>
    </div>
</section>
```

Some things to note:
- Our text is center aligned
- The background image

Next we'll add the styles for the hero section:

Here we'll apply the background image, we'll set the size to cover so that the image stretches to the full width of the container/screen size.  
```css
#hero {
    background: url(/img/people-night.jpg) no-repeat center top;
    background-size: cover;
}
```

This add some padding to the container item, we'll also apply some color and text shadow to the headline:
```css
#hero .container {
    padding: 100px 0;
}

#hero h1, #hero h4 {
    color: #fff;
    text-shadow: 0px 2px 10px rgba(0, 0, 0, 0.75);
}
```

Below are more styles to give the text a bit more life.
```css
#hero h1 {
    font-size: 74px;
    margin: 0;
    text-transform: uppercase;
    font-weight: 400;
}

#hero h1 b {
    font-size: 104px;
}

#hero h4 {
    font-size: 34px;
    margin: 0;
    font-weight: 300;
}
```

#### Step 6

Next well style the buttons, positioning and display within this section:
```css
.hero-btns {
    margin: 50px 0 0;
}

.hero-btns li {
    display: inline-block;
    margin: 0 5px;
}
```

Next let's add some styles to give the buttons the right look and feel, these classes will be able to placed on any link or button and give them this look and feel.
```css
.btn {
    cursor: pointer;
    font-size: 16px;
    display: inherit;
    font-weight: 400;
    border-radius: 7px;
    padding: 10px 20px;
    text-decoration: none;
    -moz-border-radius: 7px;
    text-transform: uppercase;
    -webkit-border-radius: 7px;
}

.btn-transparent {
    color: #fff;
    border: 2px solid #fff;
    background: transparent;
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
```

In this code you'll notice the `:hover` added to some of the selectors, this is basically saying when the mouse hovers over this item, apply these rules. It gives us the ability to customize styling and give feedback to the user when events happen.

At this point your site should look something like this:

[![alt text](img/sample-hero-section.jpg "Full example")](img/sample-hero-section.jpg)

#### Step 7

Next let's add the navigational html markup:

```html
<navigation class="wrap" id="navigation">
    <div class="container">
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/discover.php">Discover</a></li>
            <li><a href="/categories.php">Categories</a></li>
            <li><a href="/genre.php">Genre</a></li>
            <li><a href="/sponsors.php">Sponsors</a></li>
            <li><a href="/contact.php">Contact</a></li>
        </ul>
    </div>
</navigation>
```

Here we are using a unordered list with links as each one of the list items content. We've added the links to the individual pages, but the pages don't exist so if you click any of the links it will take you to a `Not Found` which is a 404 error page. A 404 error code is part of a set of codes that describe what has happened on a page or resource loaded by the server. More on status codes can be found here in this [article](https://www.restapitutorial.com/httpstatuscodes.html)
