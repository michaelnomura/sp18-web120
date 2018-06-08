<?php include 'includes/header.php'?>


<p>Flexboxes a great choice for websites looking to make a simple layout that can resize without creating breakpoints. The aims it to create a more efficient way to the layout websites. I see many advocates for its use like Chris Cook from Quora who says “Flexbox is definitely the way to go for 99% of cases. If you're building a standard website, flex gives you the layout benefits of floats, without the strange quirks and hacks.”</p>
<p> The way flexbox works is there is a container with elements distributed along a x or y axis called flex items. These elements can be distributed in the box without the fear of overflow or clipping. The control that you get over the page elements outweighs the disadvantages when you need it. Chris David Mills from Mozilla says “Flexbox provides tools to allow rapid creation of complex, flexible layouts, and features that historically proved difficult with CSS.”
</p>
<p>On the other hand you always want to look at your user base. The main drawback is the fact the it may not be supported by older browsers. If you target audience does not have access to newer hardware. This is a rare case as most websites will only be visited by people who have access to modern hardware. You also need to use a prefixer to wrap the css to make it cross platform compatible, which is not difficult but adds to the time it takes to write the code.  Ire Aderinokun from bitsofcode.de says “Using autoprefixer, we can specify which browser versions we want to support, and the correct vendor prefixes will be automatically added.”
</p>
<p>In conclusion I hope something like the flexbox model continues to gain support throughout browsers. It has a more initiative feel than using floats in css, because it relies on patterns.</p>

    </section>
    <!-- END LEFT COL -->

    <!-- START RIGHT COL -->
    <aside>
     <h3>Additonal Resources</h3>
     <ul>
        <li><a href="https://www.quora.com/Should-I-use-Flexbox-floats-or-anything-else-for-my-CSS-layout"><p>Should I use Flexbox, floats, or anything else for my CSS layout?</p><p>by Chris Cook Jan 17 2017</p></a></li>
        <li><a href="https://developer.mozilla.org/en-US/docs/Learn/CSS/CSS_layout/Flexbox"><p>Should I use Flexbox, floats, or anything else for my CSS layout?</p><p>by Chris David Mills, Jan 21, 2018, 4:37:46 AM</p></a></li>
        <li><a href="https://bitsofco.de/6-reasons-to-start-using-flexbox/"><p>6 Reasons to Start Using Flexbox </p><p>by Ire Aderinokun Feb 23, 2016</p></a></li>   
        </ul>
</aside>
    <!-- END RIGHT COL -->
    
    <!-- START Footer -->
<?php include 'includes/footer.php'?>