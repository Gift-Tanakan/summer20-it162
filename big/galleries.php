<?php include "includes/header.php";?>
<h3>Here are simple ways to build a gallery.</h3>


<p>Having a gallery on a website is one of the best practices of maintaining users’ engagement. It grabs users’ attention by presenting images relating to a brand. It  can communicate a powerful brand’s message, and can effectively influence users to take action. Besides, it builds users’ satisfaction and positive impression towards the brand.  There are several ways to build a gallery. This article will first tap into a basic way of gallery building using HTML and CSS. Second, let’s get to another level of using HTML, CSS and JavaScript.</p>

<p><strong>Gallery building with HTML and CSS:</strong> Below is the result example from W3schools and all the code used in the editor. </p>

<img class="content" src="images/gallery_simple.png" alt="HTML Gallery Layout">

<p><strong>CSS:</strong></p> 

<div class="snippet-code">


    <p> * {<br>
        box-sizing: border-box;<br>
        }<br>
        <br>
        body {<br>
        <span>background-color: #f1f1f1;<br></span>
        <span>padding: 20px;<br></span>
        <span>font-family: Arial;<br></span>
        }<br>
        <br>
        /* Center website */<br>
        .main {<br>
        <span>max-width: 1000px;<br></span>
        <span>margin: auto;<br></span>
        }<br>
        <br>
        h1 {<br>
        <span>font-size: 50px;<br></span>
        <span>word-break: break-all;<br></span>
        }<br>
        <br>
        .row {<br>
        <span>margin: 8px -16px;<br></span>
        }<br>
        <br>
        /* Add padding BETWEEN each column */<br>
        .row,<br>
        .row > .column {<br>
        <span>padding: 8px;<br></span>
        }<br>
        <br>
        /* Create four equal columns that floats next to each other */<br>
        .column {<br>
        <span>float: left;<br></span>
        <span>width: 25%;<br></span>
        }<br>
        <br>
        /* Clear floats after rows */<br> 
        .row:after {<br>
        <span>content: "";<br></span>
        <span>display: table;<br></span>
        <span>clear: both;<br></span>
        }<br>
        <br>
        /* Content */<br>
        .content {<br>
        <span>background-color: white;<br></span>
        <span>padding: 10px;<br></span>
        }<br>
        <br>
        /* Responsive layout - makes a two column-layout instead of four columns */<br>
        @media screen and (max-width: 900px) {<br>
        <span>.column {<br></span>
        <span>width: 50%;<br></span>
        }<br>
        }<br>
        <br>
        /* Responsive layout - makes the two columns stack on top of each other instead of next to each other */<br>
        @media screen and (max-width: 600px) {<br>
        <span>.column {<br></span>
        <span>width: 100%;<br></span>
        }<br>       
        }
</div>
<p><strong>HTML:</strong></p>
        <figure>
            <img class="content" src="images/gal-html.png" alt="HTML Code for the Gallery"> 
        </figure>


    <p>The layout of the gallery is built from a class ‘row’. ‘row’ contains 4 small columns and each has an image in it. The last biggest image doesn’t have any of those classes, so it appears as its original size. This simple gallery also creates a nice user experience by including responsive design in it. By applying the responsive design, it enables users to view the gallery in any device and still see great layout on the browser. Although, this is a very basic, static gallery, it’s a great start for a beginner to learn how to build a simple and yet high-quality gallery with HTML and CSS.
    </p>

    <p><strong>Gallery building with HTML, CSS and JavaScript</strong>: In this example from <a href="https://www.youtube.com/watch?v=TSRtBISvsh4" class="tel" target="_blank">Clever Techie Channel</a> on Youtube, the developer uses both HTML, CSS, JavaScript and a lightbox plugin.</p>

    <figure>
        <img class="content" src="images/gall-js1.png" alt="Gallery Example">
        <figcaption>This is how the gallery looks like</figcaption>
    </figure>

    <figure>
        <img class="content" src="images/gall-js2.png" alt="Gallery Example">
        <figcaption>When hovering over each image, it will enlarge the image (see the center most right one).</figcaption>
    </figure>

    <figure>
        <img class="content" src="images/gall-js3.png" alt="Image Enlarged">
        <figcaption>When clicking on each one, a big image will appear and becomes a slide show. This is how the lightbox helps make the gallery to be more dynamic.
        </figcaption>
    </figure>

    <figure>
        <img class="content" src="images/gall-js4.png" alt="Images files">
        <figcaption>The developer starts by saving all image sizes in a folder. Each image has one small size and one big size.</figcaption>
    </figure>

    <figure>
        <img class="content" src="images/gall-js5.png" alt="HTML Code for the Gallery">
        <figcaption>After linking the css file in the head tags, the developer inserts each small image (b) into anchor tags that each one has a big image (a) in it. So, the small images will appear on the browser, once clicked, the big images will appear.</figcaption>
    </figure>

    <figure>
        <img class="content" src="images/gall-js6.png" alt="CSS Code for the Gallery">
        <figcaption>For CSS, he just sets the margin for the gallery, for each image, and lastly, he sets the hover state of each image to scale a little bigger when hovered.</figcaption>
    </figure>

    <figure>
        <img class="content" src="images/gall-js7.png" alt="Lightbox for the Gallery">
        <figcaption>Lightbox can be downloaded from this <a href="https://lokeshdhakar.com/projects/lightbox2/" class="tel" target="_blank">website.</a> Then follow the <a href="https://www.youtube.com/watch?v=TSRtBISvsh4" class="tel" target="_blank">video</a> on how to integrate the file and code in detail (minute mark : 5.31 mins). The final step is testing if the lightbox works properly or not.
        </figcaption>
    </figure>

    <p>Now, you have learned how to build a gallery using HTML, CSS, and JavaScript from an external source. This is a little more advanced than the previous method but can make the gallery look more appealing and interactive. </p>
    
    <p>Whether you choose the simpler or more advanced way of building a gallery, it’s always important to know your audience well and know your goal of the gallery, so that it can leverage your audience experience and make them come back to your website.</p>


    </section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
    <h3>Sources</h3>

    <p>w3schools. “How TO - Portfolio Gallery” <em>w3schools</em>, 31 July 2020, https://www.w3schools.com/howto/<br>howto_css_portfolio_gallery.asp.</p>  
    
    <p>Clever Techie “How To Create Image Gallery Using HTML, CSS and Javascript | Lightbox Gallery” <em>Clever Techie</em> , 31 July 2020, https://www.youtube.com/watch?v=TSRtBISvsh4.</p> 

</aside>
<!-- END RIGHT COL -->

<?php include "includes/footer.php";?>