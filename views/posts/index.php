<p><h2>List of all posts:</h2></p>

<?php foreach ($posts as $post) { ?>
    <p>
        <?php echo $post->author; ?>
        <a href='?controller=posts&amp;action=show&amp;id=<?php echo $post->id; ?>'>See content</a>
    </p>
<?php } ?>