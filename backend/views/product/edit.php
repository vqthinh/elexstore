<?php include_once('backend/views/common/header.php'); ?>

    <div class="widget">
        <div class="widget-content-white glossed">
            <div class="padded">
                <form method="post" class="form-horizontal" enctype="multipart/form-data" id="form-product-insert" action="admin.php?controller=product&action=edit">

                    <h3 class="form-title form-title-first">
                        <i class="icon-terminal"></i> Input Form
                    </h3>
                    <input name="ID" type="hidden" value="<?php echo $product ? $product['ID'] : '0'; ?>"/>
                    <div class="form-group">
                        <label class="col-xs-2 control-label">Product Name</label>
                        <div class="col-xs-10">
                            <input type="text" name="Name" class="form-control" id="txtName" value="<?php echo $product ? $product['Name'] : ''; ?>"/>

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-xs-2 control-label">Price</label>
                        <div class="col-xs-10">
                            <input type="number" name="Price" class="form-control" id="txtPrice" value="<?php echo $product ? $product['Price'] : ''; ?>"/>

                        </div>

                    </div>

                    <div class="form-group">
                        <label class="col-xs-2 control-label">Image</label>
                        <div class="col-xs-10">
                            <input type="text" class="form-control" id="txtImage" name="Image" value="<?php echo $product ? $product['Image'] : ''; ?>"/>
                            <?php if($product){
                                echo ' <div class="img-responsive" style = "padding-top: 5px" >
                            <img id = "img" src = "assets/upload/images/'.$product["Image"].'" style = "width: 200px; height: 160px;" />
                        </div >';
                            }else {
                                echo ' <div class="img-responsive" style = "padding-top: 5px" >
                            <img id = "img" src = "" style = "width: 200px; height: 160px; display: none" />
                        </div >';
                            }?>

                        </div>
                    </div>

<!--                    //Phần ni chưa chắc nghe :v bên C# có readonly mà bên ni 2 cái Create vs Edit là 1 nên ta chưa biết thêm như răng-->
                    <div class="form-group">
                        <label class="col-xs-2 control-label">Product Date</label>
                        <div class="col-xs-10">
                            <input type="text" name="ProductDate" class="form-control" id="txtDate" readonly="readonly" value="<?php echo $product ? date_format(date_create($product['ProductDate']),"d/m/Y"): ''; ?>"/>
                        </div>
                    </div>

<!--                    //Bên C# cái ni là TextArea-->
                    <div class="form-group">
                        <label class="col-xs-2 control-label">Description</label>
                        <div class="col-xs-10">
                            <textarea name="Description" class="form-control" id="txtDescription"><?php echo $product ? $product['Description'] : ''; ?></textarea>
                        </div>
                    </div>

<!--                    //DropDownList-->
                    <div class="form-group">
                        <label class="col-xs-2 control-label">Category</label>
                        <div class="col-xs-10">
                            <select name="CategoryID" class="form-control">
                                <?php foreach ($categories as $category) {
                                    $selected = '';
                                    if ($product && ($product['CategoryID']==$category['ID'])) $selected = 'selected=""';
                                    echo '<option value="'.$category['ID'].'" '.$selected.'>'.$category['Name'].'</option>';
                                } ?>
                            </select>
                        </div>

                    </div>

<!--                    //DropDownList-->
                    <div class="form-group">
                        <label class="col-xs-2 control-label">Supplier</label>
                        <div class="col-xs-10">
                            <select name="SupplierID" class="form-control">
                                <?php foreach ($suppliers as $supplier) {
                                    $selected = '';
                                    if ($product && ($product['SupplierID']==$supplier['ID'])) $selected = 'selected=""';
                                    echo '<option value="'.$supplier['ID'].'" '.$selected.'>'.$supplier['Name'].'</option>';
                                } ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-xs-2 control-label">Quantity</label>
                        <div class="col-xs-10">
                            <input type="number" name="Quantity" class="form-control" id="txtQuantity" value="<?php echo $product ? $product['Quantity'] : ''; ?>"/>
                        </div>
                    </div>
<!--                    //checkbox---------------------->
                    <div class="form-group">
                        <label class="col-xs-2 control-label">Special</label>
                        <div class="col-xs-10">
                            <?php
                            if($product){
                                if($product['Special']==1){
                                    echo  '<input name="Special" id="Special" type="checkbox" checked="checked"/>';
                                }
                                else{
                                    echo  '<input name="Special" id="Special" type="checkbox"/>';
                                }
                            }else{
                                echo '<input name="Special" id="Special" type="checkbox"/>';
                            }
                            ?>
                        </div>
                    </div>

<!--                    //có readonly và value = 0-->
                    <div class="form-group">
                        <label class="col-xs-2 control-label">Views</label>
                        <div class="col-xs-10">
                            <input type="text" name="Views" class="form-control" id="txtViews" readonly="readonly" value="<?php echo $product ? $product['Views'] : ''; ?>"/>
                        </div>
                    </div>

<!--                    //có readonly và value = 0-->
                    <div class="form-group">
                        <label class="col-xs-2 control-label">Sells</label>
                        <div class="col-xs-10">
                            <input type="text" name="Sells" class="form-control" id="txtSells" readonly="readonly" value="<?php echo $product ? $product['Sells'] : ''; ?>"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-10 pull-right">
                            <button type="submit" class="btn btn-primary"><?php echo $product?'Update':'Insert' ?></button>
                            <a href="<?php echo base_url("admin.php?controller=product")?>" class="btn btn-warning">Cancel</a>
                        </div>

                    </div>

                </form>
            </div>
            <div class="col-md-6">
            </div>
        </div>
    </div>
    <script>
        var editor = CKEDITOR.replace('txtDescription',{
            filebrowserBrowseUrl: 'assets/Plugins/ckfinder/ckfinder.html',
                filebrowserUploadUrl: 'assets/Plugins/ckfinder/connector?command=QuickUpload&type=Images'
        });
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

    </script>
<?php include_once('backend/views/common/footer.php'); ?>