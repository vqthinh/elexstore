<?php ?>
<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" />
<style>
    .ui-autocomplete {
        z-index: 100;
    }
</style>
<script>
    $(function () {

        $("#search").autocomplete({
            source: function (request, response) {
                $.ajax({
                    url: "frontend/views/common/search.php",
                    type: "GET",
                    dataType: "json",
                    data: { term: request.term },
                    success: function (data) {
                        response($.map(data, function (item) {
                            //noinspection JSUnresolvedVariable
                            return { label: item.Name, value: item.Name,value2:item.ID };
                        }));
                    }
                });
            }, select: function (event, ui) {
                $("#searchResult").val(ui.item.value2);
            }
        });

    });
    function clickSearch() {
        if($('#search').val()==""){
            alert('Please insert Search Term')
        }else{
            var href = 'index.php?controller=product&action=details&pid=' + $('#searchResult').val();
            window.location = href;
        }

    };
</script>
<div class="single-sidebar">
    <h2 class="sidebar-title">Search Products</h2>
        <input type="text" name="term" id="search" placeholder="Search a product..."/>
        <input type="hidden" name="pid" id="searchResult"/>
        <button onclick="clickSearch()" value="Details" class="add_to_cart_button">Submit</button>

</div>