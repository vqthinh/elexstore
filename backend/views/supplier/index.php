<?php include_once('backend/views/common/header.php'); ?>
<div class="widget">
    <div class="widget-content-white glossed">
        <div class="padded">
            <form>
                <table class="table table-striped table-bordered table-hover" style="table-layout: fixed">
                    <colgroup>
                        <col span="1" style="width: 15%;overflow: hidden">
                        <col span="1" style="width: 20%;overflow: hidden">
                        <col span="1" style="width: 20%;overflow: hidden">
                        <col span="1" style="width: 30%;overflow: hidden">
                        <col span="1" style="width: 15%;overflow: hidden">
                    </colgroup>
                    <thead>
                    <tr>
                        <th>
                            Name
                        </th>
                        <th>
                            Email
                        </th>
                        <th>
                           Phone
                        </th>
                        <th>
                            Logo
                        </th>
                        <th>
                            Action
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($suppliers as $supplier): ?>
                        <tr id="row_@item.ID">
                            <td style="overflow: hidden">
                                <?php echo $supplier['Name'];?>
                            </td>
                            <td style="overflow: hidden">
                                <?php echo $supplier['Email'];?>
                            </td>
                            <td style="overflow: hidden">
                                <?php echo $supplier['Phone'];?>
                            </td>
                            <td style="overflow: hidden">
                                <?php echo $supplier['Logo'];?>
                            </td>
                            <td>
                                <a href="admin.php?controller=supplier&amp;action=edit&amp;cid=<?php echo $supplier['ID'];?>" class="btn btn-warning btn-sm">
                                    <i class="icon icon-edit"></i>
                                </a>
                                <a href="admin.php?controller=supplier&amp;action=delete&amp;cid=<?php echo $supplier['ID'];?>" class="btn btn-warning btn-sm">
                                    <i class="icon icon-trash"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
                <?php echo $pagination; ?>
            </form>
            <a class="btn btn-primary btn-lg" href="admin.php?controller=supplier&action=edit">Create new + </a>
        </div>
    </div>
</div>
<?php include_once('backend/views/common/footer.php'); ?>
