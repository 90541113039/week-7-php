<!-- /about.php -->
<?php include 'includes/header.php'; ?>

<main>
    <h1>About Us</h1>
    <p>This is the about page of the PHP-based website.</p>
    
    <?php
    $teamMembers = [
        "John Doe" => "Project Manager",
        "Jane Smith" => "Lead Developer",
        "Mike Johnson" => "Designer",
        "Emily Davis" => "QA Engineer"
    ];
    ?>

    <h2>Our Team</h2>
    <ul>
        <?php foreach ($teamMembers as $name => $position): ?>
            <li><?php echo "$name - $position"; ?></li>
        <?php endforeach; ?>
    </ul>
</main>

<?php include 'footer.php'; ?>
