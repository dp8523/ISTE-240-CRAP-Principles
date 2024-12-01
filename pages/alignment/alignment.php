<?php
include 'config.php';
include 'header.php';
include 'functions.php';

$pageTitle = 'Alignment';
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
            renderExample('Centered Alignment', 'This example uses centered alignment to bring focus to the main content, creating a formal and balanced look.');
            renderExample('Left Alignment with Clear Hierarchy', 'This layout positions content in a structured manner, using left alignment to create a clean reading path.');
            ?>
        </section>
    </div>
    <div class="example">
        <h2>Examples of Poor Alignment</h2>
        <section>
            <?php
            renderExample('Disorganized Content', 'Elements are scattered with no clear alignment, making it hard for users to follow the content.');
            renderExample('Inconsistent Spacing and Positioning', 'Here, uneven spacing and inconsistent positioning create a chaotic, unprofessional appearance.');
            ?>
        </section>
    </div>
    <div class="example">
        <h2>Why Alignment Matters</h2>
        <p>
            Proper alignment not only enhances aesthetics but also improves the user experience by creating a sense of order.
            When content is aligned, users can navigate more intuitively, ensuring that the design feels cohesive and easy to follow.
        </p>
    </div>
</main>
<?php include 'footer.php'; ?>
