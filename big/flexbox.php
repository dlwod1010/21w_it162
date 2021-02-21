<?php include 'includes/header.php';?>
<p class="indent">
  How to display contents and flexible(responsive)design is really important these days.  And, CSS is one of the most essential parts of web design. In CSS, the flex-box allows us to distribute space and align items in a container easily, so it’s efficient and useful for making a responsive layout. For that reason, I’d like to share about the CSS flex-box. 
</p>

<p>
  To start using Flexbox, we need to create a flexbox container using <em>display: flex;</em>  property. After that, the elements become flex items inside of the flex container.
</p>


  <ul>
    <li>Flex container: parent element that holds all flex items.</li>
    <li>Flex items: any direct child element within the flex container.</li>
  </ul>


<p>
  After setting the container’s display property to flex, the elements will be arranged from left to right as default. Adding the <em>flex-direction</em> property to the flex container to make change the direction of the flex items display.   
</p>

<p>
  Flex-direction : 
</p>

<p>
  <ul>
    <li>row(default): left to right.</li>
    <li>row-reverse: right to left.</li>
    <li>column: same as row but top to bottom.</li>
    <licolumn-reverse: same as row-reverse but bottom to top.li>
  </ul>
</p>

<p>
  Since flexbox was designed as a one-dimensional model, flex items will all try to fit onto one line. We can change the items to wrap onto multiple lines with <em>flex-wrap: wrap;</em> property.
</p>

<p>
  Flex-wrap: 
</p>

<p>
  <ul>
    <li>nowrap (default): all flex items will be on one line.</li>
    <li>wrap: flex items will wrap onto multiple lines.</li>
    <li>wrap-reverse: flex items will wrap onto multiple lines from bottom to top.</li>
  </ul>
</p>

<p>
  There is a shorthand for flex-direction and flex-wrap combined, which is <em>flex-flow</em>.</br>
  (ex) flex-flow: row wrap(default); or column wrap;
</p>


<p>
  To control the horizontal(main axis) alignment of the flex items, use <em>justify-content</em> property.
</p>

<p>
  Justify-content: 
</p>

<p>
  <ul>
    <li>flex-start(default): items are packed toward the start of the flex-direction.</li>
    <li>flex-end: items are packed toward the end of the flex-direction.</li>
    <li>center: items are centered along the line.</li>
    <li>space-between: items are evenly distributed in the line; first item is on the start line, last item on the end line.</li>
    <li>space-around: items are evenly distributed in the line with equal space around them.</li>
    <li>space-evenly: items are distributed, and spacing between any items (and the space to the edges) is equal.</li>
  </ul>
</p>

<p>
  Aligning the items on the cross axis, use <em>align-items</em> property.
</p>

<p>
  <ul>
    <li>Stretch(default): stretch to fill the container.</li>
    <li>Flex-start: items line up at the start of the flex container.</li>
    <li>Flex-end: items line up at the end of the flex container.</li>
    <li>Center: items are centered.</li>
  </ul>
</p>

<p class="indent">
  Knowing how to use flexbox properly will be allowing you to create an amazing layout easily on the majority of modern browsers. [except for IE10, UC browser...<a href="https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Flexible_Box_Layout/Backwards_Compatibility_of_Flexbox" target="_blank">more</a>]
  We’ve looked through basic concepts of the flexbox, and hopefully this guide can help you. To practice using flexbox properties,  I recommend the <a href="https://flexboxfroggy.com/" target="_blank">Flexbox Froggy game</a>, please try it!.
</p>
  
</section>

<aside>
 <h3>Citation</h3>
    <p>
      Coyier, Chris</br>
      <a href="https://css-tricks.com/snippets/css/a-guide-to-flexbox/" target="_blank">
        “A Complete Guide to Flexbox: CSS-Tricks.” 
      </a>
    </p>
    <p>
      MDN</br>
      <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Flexible_Box_Layout/Basic_Concepts_of_Flexbox." target="_blank">
        “Web Technology for Developers.” 
      </a>
    </p>
    
</aside>
<!-- END RIGHT COL -->
<?php include 'includes/footer.php';?>
