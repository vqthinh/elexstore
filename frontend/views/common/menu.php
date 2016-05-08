<ul class="nav navbar-nav">
    <li><a href="<?php echo base_url()?>">Home</a></li>
    <?php foreach ($categories as $category) {
        echo '<li><a href="index.php?controller=product&action=category&cid='.$category['ID'].'">'.$category['Name'].'</a></li>';
    } ?>
</ul>