<?php include_once('backend/views/common/header.php'); ?>
    <div class="widget">
        <div class="alert alert-warning alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <i class="icon-exclamation-sign"></i> <strong>Welcome!</strong> This is a dashboard of the powerful admin template.
        </div>
    </div>
    <div class="widget">
        <div class="widget-controls pull-right">
            <a href="#" class="widget-link-remove"><i class="icon-minus-sign"></i></a>
            <a href="#" class="widget-link-remove"><i class="icon-remove-sign"></i></a>
        </div>
        <h3 class="section-title first-title"><i class="icon-tasks"></i> Statistics</h3>
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 text-center">
                <div class="widget-content-blue-wrapper changed-up">
                    <div class="widget-content-blue-inner padded">
                        <div class="pre-value-block"><i class="icon-dashboard"></i> Total Visits</div>
                        <div class="value-block">
                            <div class="value-self">10,520</div>
                            <div class="value-sub">This Week</div>
                        </div>
                        <span class="dynamicsparkline">Loading..</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 text-center">
                <div class="widget-content-blue-wrapper changed-up">
                    <div class="widget-content-blue-inner padded">
                        <div class="pre-value-block"><i class="icon-user"></i> New Users</div>
                        <div class="value-block">
                            <div class="value-self">1,120</div>
                            <div class="value-sub">This Month</div>
                        </div>
                        <span class="dynamicsparkline">Loading..</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 text-center hidden-md">
                <div class="widget-content-blue-wrapper changed-up">
                    <div class="widget-content-blue-inner padded">
                        <div class="pre-value-block"><i class="icon-signin"></i> Sold Items</div>
                        <div class="value-block">
                            <div class="value-self">275</div>
                            <div class="value-sub">This Week</div>
                        </div>
                        <span class="dynamicsparkline">Loading..</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 text-center">
                <div class="widget-content-blue-wrapper changed-up">
                    <div class="widget-content-blue-inner padded">
                        <div class="pre-value-block"><i class="icon-money"></i> Net Profit</div>
                        <div class="value-block">
                            <div class="value-self">$9,240</div>
                            <div class="value-sub">Yesterday</div>
                        </div>
                        <span class="dynamicbars">Loading..</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include_once('backend/views/common/footer.php'); ?>