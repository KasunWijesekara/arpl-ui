<!DOCTYPE html>
<html>
<head>
    <title>Warehouse orders Page</title>
    <?php include'includes/head.php'; ?>    
</head>
<body>

    <?php include'includes/header2.php'; ?>   

    <!-- Second tab - Work by adding active to 'ui tab container' class -->
        <div class="ui fluid container">
            <h3 class="ui header">WAREHOUSE INVENTORY</h3>

            <!-- my inventroy button area -->
            <div class="ui grid">
                <div class="row">
                    <div class="five wide column">
                        <div class="ui icon input" style="margin-left: 10px!important;">
                            <input type="text" placeholder="Search..." size="45">
                        </div>
                        <button class="ui icon button">
                            <i class="search icon"></i>
                        </button>
                    </div>
                </div>
            </div>


            <!-- Table Starts here -->
            <table class="ui very padded table">
                <thead>
                    <tr>
                        <th>Code</th>
                        <th>Description</th>
                        <th>Group</th>
                        <th>Unit Price</th>
                        <th>Status</th>
                        <th>Quantity</th>
                        <th>Edit/Remove</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>3564D</td>
                        <td>Tooth Brush Medium</td>
                        <td>Citadel</td>
                        <td>3500LKR</td>
                        <td>
                            <div class="ui green label">&nbsp;&nbsp; Available &nbsp;&nbsp;</div>
                        </td>
                        <td>240</td>
                        <td>
                            <a href="#" id="EditProducts"><i class="file big olive text link outline icon"></i></a>
                            <a href="#" id="deleteProduct"><i class="trash big red link trash outline icon"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>2517S</td>
                        <td>Water Bottle Large</td>
                        <td>Icon</td>
                        <td>15,000LKR</td>
                        <td>
                            <div class="ui red label">Out of Stock</div>
                        </td>
                        <td>0</td>
                        <td>
                            <a href="#" id="EditProducts2"><i class="file big olive text link outline icon"></i></a>
                            <a href="#"><i class="trash big red link trash outline icon"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>2517S</td>
                        <td>Coca Cola Bottle Large</td>
                        <td>Icon</td>
                        <td>12,000LKR</td>
                        <td>
                            <div class="ui green label">&nbsp;&nbsp; Available &nbsp;&nbsp;</div>
                        </td>
                        <td>765</td>
                        <td>
                            <a href="#" id="EditProducts"><i class="file big olive text link outline icon"></i></a>
                            <a href="#"><i class="trash big red link trash outline icon"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>2517S</td>
                        <td>Milk Bottle Large</td>
                        <td>Icon</td>
                        <td>7500LKR</td>
                        <td>
                            <div class="ui green label">&nbsp;&nbsp; Available &nbsp;&nbsp;</div>
                        </td>
                        <td>765</td>
                        <td>
                            <a href="#" id="EditProducts"><i class="file big olive text link outline icon"></i></a>
                            <a href="#"><i class="trash big red link trash outline icon"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>2517S</td>
                        <td>Milk Bottle Large</td>
                        <td>Icon</td>
                        <td>9500LKR</td>
                        <td>
                            <div class="ui green label">&nbsp;&nbsp; Available &nbsp;&nbsp;</div>
                        </td>
                        <td>765</td>
                        <td>
                            <a href="#" id="EditProducts"><i class="file big olive text link outline icon"></i></a>
                            <a href="#"><i class="trash big red link trash outline icon"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>2517S</td>
                        <td>Milk Bottle Large</td>
                        <td>Icon</td>
                        <td>2500LKR</td>
                        <td>
                            <div class="ui red label">Out of Stock</div>
                        </td>
                        <td>0</td>
                        <td>
                            <a href="#" id="EditProducts"><i class="file big olive text link outline icon"></i></a>
                            <a href="#"><i class="trash big red link trash outline icon"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>2517S</td>
                        <td>Milk Bottle Large</td>
                        <td>Icon</td>
                        <td>4300LKR</td>
                        <td>
                            <div class="ui green label">&nbsp;&nbsp; Available &nbsp;&nbsp;</div>
                        </td>
                        <td>765</td>
                        <td>
                            <a href="#" id="EditProducts"><i class="file big olive text link outline icon"></i></a>
                            <a href="#"><i class="trash big red link trash outline icon"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>2517S</td>
                        <td>Milk Bottle Large</td>
                        <td>Icon</td>
                        <td>500LKR</td>
                        <td>
                            <div class="ui red label">Out of Stock</div>
                        </td>
                        <td>0</td>
                        <td>
                            <a href="#" id="EditProducts"><i class="file big olive text link outline icon"></i></a>
                            <a href="#"><i class="trash big red link trash outline icon"></i></a>
                        </td>
                    </tr>   
                </tbody>
            </table>
        </div>

              

        


        <!-- Second tab - Work by adding active to 'ui tab container' class -->


</div> <!-- Add this div to DIV TAG FOR PUSHER make sure the content stays inside the sidebar -->
<?php include'includes/footer.php'; ?>
</body>
</html>