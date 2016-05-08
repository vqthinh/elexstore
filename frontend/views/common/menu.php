<ul class="nav navbar-nav">
    <li><a href="@Url.Action("Index","Home")">Home</a></li>
    <li><a href="@Url.Action("Shop","Products")">Shop page</a></li>
    <?php foreach ($categories as $category) {
        echo '<li><a href="index.php?controller=category&amp;cid='.$category['ID'].'">'.$category['Name'].'</a></li>';
    } ?>
</ul>