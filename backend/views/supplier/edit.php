<?php include_once('backend/views/common/header.php'); ?>

    <div class="widget">
        <div class="widget-content-white glossed">
            <div class="padded">
                <form method="post" class="form-horizontal" enctype="multipart/form-data" id="form-supplier-insert" action="admin.php?controller=supplier&action=edit">

                    <h3 class="form-title form-title-first">
                        <i class="icon-terminal"></i> Input Form
                    </h3>
                    <input name="ID" type="hidden" value="<?php echo $supplier ? $supplier['ID'] : '0'; ?>"/>
                    <div class="form-group">
                        <label class="col-xs-2 control-label">Supplier Name</label>
                        <div class="col-xs-10">
                            <input type="text" name="Name" class="form-control" value="<?php echo $supplier ? $supplier['Name'] : ''; ?>"/>

                        </div>

                    </div>
                    <div class="form-group">
                        <label class="col-xs-2 control-label">Email</label>
                        <div class="col-xs-10">
                            <input type="text" name="Email" class="form-control" value="<?php echo $supplier ? $supplier['Email'] : ''; ?>"/>

                        </div>

                    </div>
                    <div class="form-group">
                        <label class="col-xs-2 control-label">Phone</label>
                        <div class="col-xs-10">
                            <input type="text" name="Phone" class="form-control" value="<?php echo $supplier ? $supplier['Phone'] : ''; ?>"/>

                        </div>

                    </div>
                    <div class="form-group">
                        <label class="col-xs-2 control-label">Logo</label>
                        <div class="col-xs-10">
                            <input type="text" class="form-control" id="txtLogo" name="Logo" value="<?php echo $supplier ? $supplier['Logo'] : ''; ?>"/>
                            <?php if($supplier){
                                echo ' <div class="img-responsive" style = "padding-top: 5px" >
                            <img id = "logo" src = "assets/upload/images/Suppliers/'.$supplier["Logo"].'" style = "width: 200px; height: 160px;" />
                        </div >';
                            }else {
                                echo ' <div class="img-responsive" style = "padding-top: 5px" >
                            <img id = "logo" src = "" style = "width: 200px; height: 160px; display: none" />
                        </div >';
                            }?>

                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-10 pull-right">
                            <button type="submit" class="btn btn-primary"><?php echo $supplier?'Update':'Insert' ?></button>
                            <a href="<?php echo base_url("admin.php?controller=supplier")?>" class="btn btn-warning">Cancel</a>
                        </div>

                    </div>

                </form>
            </div>
            <div class="col-md-6">
            </div>
        </div>
    </div>
    <script>

        $('#txtLogo').on('click', function(e) {
            e.preventDefault();
            var finder = new CKFinder();
            finder.selectActionFunction = function(fileUrl) {
                $('#txtLogo').val(splitImage(fileUrl));
                $('#logo').css("display", "block");
                $('#logo').attr("src", fileUrl);
            };
            finder.popup();
        });
    </script>
<?php include_once('backend/views/common/footer.php'); ?>