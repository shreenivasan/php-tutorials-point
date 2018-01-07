<div class="gallery">
    <ul>
    <?php foreach($images as $img): ?>
        <li><img src="uploads/<?php echo $img['name']; ?>" /></li>
    <?php endforeach; ?>
    </ul>
</div>