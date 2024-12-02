<?php
    $title = "Contrast";
    $path = "../../";

    require_once('../../assets/inc/header.inc.php');
?>

<div class="pageTitle">
    <h1>Contrast</h1>
</div>

<div class="bigImgCenter">
    <img src="../../assets/images/apple_contrast.png" alt="iPhone Contrast Example">
</div>

<div class="tightText">
    <p>
        Contrast as mentioned is key for a website to stand out. This front page is Apple's 
        and they utilize contrast very well here to make all their text stand out. The first
        thing our eyes are drawn to is the lit up "Pro" text behind the phone which brings
        attention to the device and the text itself. The bright illuminating color makes the
        text stand out against the black background. Also note that the navigation has a white
        background with black text making it legible and easily accessible. If you were to
        imagine these colors differently, such as the word "Pro" being in dark blue text,
        it would be much harder to see. The contrast between the black background of the
        phone advertisement and the white of the navigation bar makes your attention drawn
        to the advertisement. This just highlights the importance of contrast because it
        can be used to make things both legible and interesting to look at.
    </p>
</div>

<div class="imgCenter">
    <img src="../../assets/images/bad_contrast.jpg" alt="Text is a darker shade of the same color as the background">
</div>

<div class="imgCenter">
    <img src="../../assets/images/good_contrast.jpg" alt="Text color stands out from the background">
</div>

<div class="tightText">
    <p>
        Contrast is quite simple, it is utilizing color themes and elements to create a page
        hierarchy and to create easier readability on the page. For example if you had white
        text on a black background the text would be very legible whereas if you had lime green
        text on a blue background it would be much harder to distinguish. By using contrast you
        can easily section parts of pages to better order and stylize your content. The whole
        concept is that by adding colors that contrast one another, you can more effectively
        catch the attention of the reader.
    </p>
</div>

<h2>Try It Here!</h2>
<p>
    The text box below will apply any entered CSS rules to the space to the right. <br><br>
    Try setting "background-color" to "blue". The text will be hard to read due to lack of contrast
    with the background. Now set "background-color to white". The text will stand out even more than before! <br><br>
    Tinker with the other rules to make the text stand out even more!
</p>

<div id="contrastInteractive" class="interactive">
    <textarea name="cssInput" id="cssInput">color: darkblue;&#13;background-color: teal;&#13;font-size: 30px;&#13;font-weight: 900;</textarea>
    <div id="contrastExample" class="stylizedSpace">
        Contrast
    </div>
</div>

<?php
    require_once("../../assets/inc/footer.inc.php");
?>