<?php
    $title = "White Space";
    $path = "../../";

    require_once('functions.php');
    require_once($path . 'assets/inc/header.inc.php');
?>

<main>
    <h1>White Space</h1>
    <div class="example">
        <h2>Introduction to White Space</h2>
        <p>
            White space, or negative space, is the empty space around and between elements in a design. It’s a critical part of any layout, as it
            helps to create breathing room and gives content a structured appearance. By balancing content with white space, designers
            can make pages more readable, comfortable, and visually appealing.
        </p>
    </div>
    <div class="example">
        <h2>Examples of Effective Use of White Space</h2>
        <section>
            <?php
            renderExample(
                'Ample Spacing Between Text and Images',
                'This example demonstrates how separating text from images with white space creates a more organized and balanced layout.'
            );
            ?>
        </section>
        <img class="imgCenter" src="<?php echo $path; ?>assets/images/whitespace_good1.jpg" alt="Ample Spacing Example">

        <section>
            <?php
            renderExample(
                'Margin and Padding Around Content Blocks',
                'By adding margins and padding, content blocks are more visually distinct, improving readability and making navigation easier.'
            );
            ?>
        </section>
        <img class="imgCenter" src="<?php echo $path; ?>assets/images/whitespace_good2.jpg" alt="Margin and Padding Example">
    </div>
    <div class="example">
        <h2>Examples of Poor Use of White Space</h2>
        <section>
            <?php
            renderExample(
                'Text and Images Crowded Together',
                'Without enough space between text and images, the design feels cramped and difficult to follow.'
            );
            ?>
        </section>
        <img class="imgCenter" src="<?php echo $path; ?>assets/images/whitespace_bad1.jpg" alt="Crowded Content Example">

        <section>
            <?php
            renderExample(
                'Overlapping or Cluttered Content Blocks',
                'When content blocks lack adequate separation, the layout appears chaotic, reducing readability and user comfort.'
            );
            ?>
        </section>
        <img class="imgCenter" src="<?php echo $path; ?>assets/images/whitespace_bad2.jpg" alt="Cluttered Content Example">
    </div>
    <div class="example">
        <h2>Why White Space Matters</h2>
        <p>
            White space enhances both aesthetics and functionality by creating separation and clarity. It helps users navigate the page effortlessly,
            making the design appear intentional and polished. Effective use of white space not only improves readability but also contributes
            to an enjoyable, accessible user experience.
        </p>
    </div>
</main>

<?php
    require_once($path . 'assets/inc/footer.php');
?>
