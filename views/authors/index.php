<p><h2>List of all authors:</h2></p>
<?php
$authors = [];
foreach ($posts as $post) {
    $authors[] = $post->author;
}
$unique_authors = array_unique($authors);
?>

<?php foreach ($unique_authors as $author) { ?>
    <p>
        <?php echo $author; ?>
    </p>
<?php } ?>