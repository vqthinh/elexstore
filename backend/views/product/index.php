<?php include_once('backend/views/common/header.php'); ?>
<div class="widget">
    <div class="widget-content-white glossed">
        <div class="padded">
            <form>
                <table class="table table-striped table-bordered table-hover" style="table-layout: fixed">
                    <colgroup>
                        <col span="1" style="width: 35%;overflow: hidden">
                        <col span="1" style="width: 15%;overflow: hidden">
                        <col span="1" style="width: 25%;overflow: hidden">
                        <col span="1" style="width: 25%;overflow: hidden">
                    </colgroup>
                    <thead>
                    <tr>
                        <th>
                            Name
                        </th>
                        <th>
                            Price
                        </th>
                        <th>
                            Image
                        </th>
                        <th>
                            Action
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($products as $product): ?>
                        <tr id="row_@item.ID">
                            <td style="overflow: hidden">
                                <?php echo $product['Name'];?>
                            </td>
                            <td style="overflow: hidden">
                                <?php echo $product['Price'];?>
                            </td>
                            <td style="overflow: hidden">
                               <img src="assets/upload/images/Products/<?php echo $product['Image'];?>" width="50" height="50"/>
                            </td>
                            <td style="overflow: hidden">
                                <a href="admin.php?controller=product&amp;action=edit&amp;pid=<?php echo $product['ID'];?>" class="btn btn-warning btn-sm">
                                    <i class="icon icon-edit"></i>
                                </a>
                                <a href="admin.php?controller=product&amp;action=delete&amp;pid=<?php echo $product['ID'];?>" class="btn btn-warning btn-sm">
                                    <i class="icon icon-trash"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
                <?php echo $pagination; ?>
            </form>
            <a class="btn btn-primary btn-lg" href="admin.php?controller=product&action=edit">Create new + </a>
        </div>
    </div>
</div>
<?php include_once('backend/views/common/footer.php'); ?>
