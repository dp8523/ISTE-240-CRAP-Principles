<?php
    $title = 'Card Design';

    require_once('../../assets/inc/header.php');
?>

<div class="pageTitle">
    <h1>Dynamic Card Design</h1>
</div>


<div class="tightText">
<p>
Today many websites and applications make use of cards as a design element. Cards aid in terms of simplicity and content organization. The key to a good card design is to make it evenly spaced giving room for some sort of thumbnail image while also providing information about what that thumbnail image is related to. Cards can be utilized to present a lot of information in small bits.
</p>
</div>

<div class="imgCenter">
    <img src="../../assets/images/card1.jpg" alt="Card Design 1 (Source: uxpin)">
</div>

<div class="tightText">
<p>
For example, news websites will often make their front page covered in staggered cards with an image and some sort of headline. The small bit of information they supply would hopefully draw the viewer in and make them click on the article. If they didn’t utilize cards the information could be less appealing to the user.
</p>
</div>

<div class="imgCenter">
    <img src="../../assets/images/card2.png" alt="Card Design 2 (Source: uxpin)">
</div>

<br>

<!-- Card Examples Here Not using images-->
<div class="cards">
    <!-- Image-heavy card -->
    <div class="card">
        <img src="path/to/image1.jpg" alt="Beautiful Beach" class="card-img">
        <div class="card-content">
            <h2>Explore the Tropics</h2>
            <p>Discover pristine beaches and lush forests for your next adventure.</p>
        </div>
    </div>

    <!-- Headline-focused card -->
    <div class="card">
        <div class="card-content">
            <h2>Breaking News</h2>
            <p>Stay updated with the latest developments around the world.</p>
        </div>
    </div>

    <!-- Balanced card -->
    <div class="card">
        <img src="path/to/image2.jpg" alt="City Skyline" class="card-img">
        <div class="card-content">
            <h2>City Life Awaits</h2>
            <p>Experience the vibrant culture and buzzing nightlife of urban centers.</p>
        </div>
    </div>
</div>

<div class="tightText">
<p>
The card on the left uses a headline to draw the users attention with a small image. Meanwhile the card on the left side is mostly an image which draws the users attention with visuals. Both of these are useful but are used in different ways. 
</p>
</div>

<div class="tightText">
<p>
For reference, if you were to design a site around travel locations you may want to use the one on the left as it shows more of the location rather than explaining it. On the right you would use it for news headlines or possibly blog articles as they do not always have an image that will be important when drawing user attention. The middle card is dynamic in the sense that the image to text ratio is balanced so you could use it for most anything. </p>
</div>

<?php
    require_once("../../assets/inc/footer.php");
?>