<?php include_once('backend/views/common/header.php'); ?>

<div class="widget">
    <div class="widget-content-white glossed">
        <div class="padded">
            <form method="post" class="form-horizontal" enctype="multipart/form-data" id="form-category-insert" action="admin.php?controller=category&action=edit">

                <h3 class="form-title form-title-first">
                    <i class="icon-terminal"></i> Input Form
                </h3>
                <input name="ID" type="hidden" value="<?php echo $category ? $category['ID'] : '0'; ?>"/>
                <div class="form-group">
                    <label class="col-xs-2 control-label">Category Name</label>
                    <div class="col-xs-10">
                        <input type="text" name="Name" class="form-control" value="<?php echo $category ? $category['Name'] : ''; ?>"/>

                    </div>

                </div>
                <div class="form-group">
                    <label class="col-xs-2 control-label">Image</label>
                    <div class="col-xs-10">
                        <input type="text" class="form-control" id="txtImage" name="Image" value="<?php echo $category ? $category['Image'] : ''; ?>"/>
                        <?php if($category){
                            echo ' <div class="img-responsive" style = "padding-top: 5px" >
                            <img id = "img" src = "assets/upload/images/Categories/'.$category["Image"].'" style = "width: 200px; height: 160px;" />
                        </div >';
                        }else {
                            echo ' <div class="img-responsive" style = "padding-top: 5px" >
                            <img id = "img" src = "" style = "width: 200px; height: 160px; display: none" />
                        </div >';
                            }?>

                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-2 control-label">Icon</label>
                    <div class="col-xs-10">
                        <input type="text" class="form-control" id="txtIcon" name="Icon" value="<?php echo $category ? $category['Icon'] : ''; ?>"/>
                        <?php if($category){
                            echo ' <div class="img-responsive" style = "padding-top: 5px" >
                            <img id = "ico" src = "assets/upload/images/Categories/'.$category["Icon"].'" style = "width: 200px; height: 160px;" />
                        </div >';
                        }else {
                            echo ' <div class="img-responsive" style = "padding-top: 5px" >
                            <img id = "ico" src = "" style = "width: 200px; height: 160px; display: none" />
                        </div >';
                        }?>


                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-10 pull-right">
                        <button type="submit" class="btn btn-primary"><?php echo $category?'Update':'Insert' ?></button>
                        <a href="<?php echo base_url("admin.php?controller=category")?>" class="btn btn-warning">Cancel</a>
                    </div>

                </div>

            </form>
        </div>
        <div class="col-md-6">
        </div>
    </div>
</div>
    <script>

        $('#txtImage').on('click', function(e) {
            e.preventDefault();
            var finder = new CKFinder();
            finder.selectActionFunction = function(fileUrl) {
                $('#txtImage').val(splitImage(fileUrl));
                $('#img').css("display", "block");
                $('#img').attr("src", fileUrl);
            };
            finder.popup();
        });
        $('#txtIcon').on('click', function(e) {
            e.preventDefault();
            var finder = new CKFinder();
            finder.selectActionFunction = function(fileUrl) {
                $('#txtIcon').val(splitImage(fileUrl));
                $('#ico').css("display", "block");
                $('#ico').attr("src", fileUrl);
            };
            finder.popup();
        });
    </script>
<?php include_once('backend/views/common/footer.php'); ?>