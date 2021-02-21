<?php include 'includes/header.php';?>
<p class="indent">
    In this article, I’ll show how to create a simple responsive image gallery using flexbox. With CSS and HTML, you can make a flexible and nicely organized photo gallery. Let’s take a look at how it works. 
</p>

<h3>
    1. Creating the HTML
</h3>

<p class="indent">
First, create HTML that includes a simple <strong>&ltdiv&gt</strong> element which has <strong>&ltimg&gt</strong> tags in it . The class “gallery” is going to be the flex container. Then, add your image links or images inside of img tags using src attribute. And, set the class (“photo”) for images. Don’t forget the alt attribute which is an alternative information for an image. - <a href="https://developer.mozilla.org/en-US/docs/Learn/Accessibility/What_is_accessibility" target="_blank">Accessibility</a>
</p>

<img src="images/html-gallery.png" class="gallery" alt="capture of creating html for gallery" >

<h3>
    2. Basic style of the CSS
</h3>

<p>
    Next, let’s move to CSS. I’ll add the box-sizing: border-box property so that the padding and border will be included in the total widths and heights of the elements. Usually, it’s recommended to use because it ensures that all elements are sized in this more intuitive way.
</p>

<img src="images/box-sizing.png" class="gallery" alt="capture of box-sizing" >

<h3>
    3. Mobile page
</h3>

<p>
    For the responsive page, I’ll start off by creating a mobile page, and every image will be in one column. Since the &ltdiv&gt is a block element, flexbox doesn’t need yet. <a href="https://developer.mozilla.org/en-US/docs/Glossary/Progressive_Enhancement" target="_blank">Progressive enhancement</a> 
</p>

<img src="images/css-mobile-page.png" class="gallery" alt="capture of css for mobile page">

<P>
    It looks like this.
</P>

<img src="images/mobile_ver.png" class="gallery" alt="capture of mobile page">

<h3>
    4. Tablet page
</h3>

<P>
    Let’s move on to medium screen devices. Use the media query, and set min-width 600px. I’ll make two images in a row using display: flex, flex-wrap so that the images will nicely flow into a grid.
</P>

<img src="images/mediaquery-tablet.png" class="gallery" alt="capture of mediaquery for tablet">

<p>
    This is how the tablet viewport looks like. 
</p>

<img src="images/tablet_ver.png" class="gallery" alt="capture of tablet page">

<h3>
    5. Desktop  
</h3>

<p>
    Last step is making for the largest screen. Let’s set the min-width to 1000px. All I need to do is set the width of the img tags. I want four images in a row on the desktop. 
</p>

<img src="images/desktop_ver.png" class="gallery" alt="capture of desktop page">

<h3>
    Conclusion 
</h3>

<p class="indent">
I introduced a very simple and basic version of responsive image gallery. With only a few lines, you can make a responsive design of image gallery. But, note that the flexbox has issues with keeping aspect ratio when images have different widths and heights. In that case, using the CSS grid will be the best solution.
</p>



</section>

<aside>
    <h3>Citation</h3>
        <p>
            Rascia, Tania</br>
            <a href="http://www.w3schools.com/css/css3_box-sizing.asp.">
            “How to Build a Responsive Image Gallery with Flexbox.”
            </a>
        </p>
        <p> 
            DeveloperDrive.com</br>
            <a href="http://www.developerdrive.com/responsive-image-gallery-flexbox/.">
            “How to Create a Responsive Image Gallery with Flexbox - Developer Drive.” 
            </a>
        </p>
</aside>

<?php include 'includes/footer.php';?>
