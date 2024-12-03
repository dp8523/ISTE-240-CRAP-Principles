<?php
    $title = "Alignment";
    $path = "../../";

    require_once('functions.php');
    require_once($path . 'assets/inc/header.inc.php');
?>

<main>
    <h1>Alignment</h1>
    <div class="example">
        <h2>Introduction to Alignment</h2>
        <p>
            Alignment is crucial for maintaining a clear, organized structure in design. It helps guide the viewer’s eye through the page
            in a logical flow, reducing clutter and increasing readability. Proper alignment creates a visual hierarchy, making it easier for
            users to understand the relationship between different elements on a page.
        </p>
    </div>
    <div class="example">
    <h2>Examples of Good Alignment</h2>
    <section>
        <?php
        renderExample(
            'Centered Alignment',
            'This example uses centered alignment to bring focus to the main content, creating a formal and balanced look.'
        );
        ?>
    </section>
    
        <img class="imgVertical" src="<?php echo $path; ?>assets/images/alignment_good1.jpg" alt="Centered Alignment Example">

    <section>
        <?php
        renderExample(
            'Left Alignment with Clear Hierarchy',
            'This layout positions content in a structured manner, using left alignment to create a clean reading path.'
        );
        ?>
    </section>
        <img class="imgVertical" src="<?php echo $path; ?>assets/images/alignment_good2.jpg" alt="Left Alignment Example">
    </div>
    
    <div class="example">
        <h2>Examples of Poor Alignment</h2>
        <section>
            <?php
            renderExample(
                'Disorganized Content',
                'Elements are scattered with no clear alignment, making it hard for users to follow the content.'
            );
            ?>
        </section>
        <div class="imgCenter">
            <img src="<?php echo $path; ?>assets/images/alignment_bad1.jpg" alt="Disorganized Content Example">
        </div>
        <section>

            <?php
            renderExample(
                'Inconsistent Spacing and Positioning',
                'Here, uneven spacing and inconsistent positioning create a chaotic, unprofessional appearance.'
            );
            ?>
        </section>
        <div class="imgCenter">
            <img src="<?php echo $path; ?>assets/images/alignment_bad2.jpg" alt="Inconsistent Spacing Example">
        </div>
        
    </div>

    <div class="example">
        <h2>Why Alignment Matters</h2>
        <p>
            Proper alignment not only enhances aesthetics but also improves the user experience by creating a sense of order.
            When content is aligned, users can navigate more intuitively, ensuring that the design feels cohesive and easy to follow.
        </p>
    </div>
</main>

<?php
    require_once($path . 'assets/inc/footer.php'); // Include updated footer
?>
