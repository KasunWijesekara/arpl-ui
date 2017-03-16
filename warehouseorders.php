<!DOCTYPE html>
<html>
<head>
    <title>Warehouse orders Page</title>
    <?php include'includes/head.php'; ?>    
</head>
<body>

    <?php include'includes/header2.php'; ?>   

    <div class="ui container">
        <h3 class="ui header">Order Number #46573</h3>
        <div class="ui grid">
            <div class="ten wide column">
                <table class="ui striped table">
                    <thead>
                        <tr>
                            <th>Order Items</th>
                            <th>Quantity</th>
                            <th>Unit Price</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>John Lilki</td>
                            <td>122</td>
                            <td>50,000LKR</td>
                            <td>30,000LKR</td>
                        </tr>
                        <tr>
                            <td>Jamie Harington</td>
                            <td>122</td>
                            <td>50,000LKR</td>
                            <td>30,000LKR</td>
                        </tr>
                        <tr>
                            <td>Jill Lewis</td>
                            <td>122</td>
                            <td>50,000LKR</td>
                            <td>30,000LKR</td>
                        </tr>
                        <tr>
                            <td>John Lilki</td>
                            <td>122</td>
                            <td>50,000LKR</td>
                            <td>30,000LKR</td>
                        </tr>
                        <tr>
                            <td>John Lilki</td>
                            <td>122</td>
                            <td>50,000LKR</td>
                            <td>30,000LKR</td>
                        </tr>
                        <tr>
                            <td>Jamie Harington</td>
                            <td>122</td>
                            <td>50,000LKR</td>
                            <td>30,000LKR</td>
                        </tr>
                        <tr>
                            <td>Jill Lewis</td>
                            <td>122</td>
                            <td>50,000LKR</td>
                            <td>30,000LKR</td>
                        </tr>
                        <tr>
                            <td>John Lilki</td>
                            <td>122</td>
                            <td>50,000LKR</td>
                            <td>30,000LKR</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="six wide column">
                <h3 class="ui dividing header">Order Information</h3>
                <table class="ui definition table">
                    <tbody>
                        <tr>
                            <td>Order ID</td>
                            <td>#7261442</td>
                        </tr>
                        <tr>
                            <td>Order Date</td>
                            <td>23.09.2019</td>
                        </tr>
                        <tr>
                            <td>Shop ID</td>
                            <td>#ARPL3450</td>
                        </tr>
                        <tr>
                            <td>Shop Name</td>
                            <td>Ariyarathne Rice Shop</td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td>11/A, 1st Lane, Pagoda Road, Nugegoda</td>
                        </tr>
                        <tr>
                            <td>Representative</td>
                            <td>John Doe</td>
                        </tr>
                    </tbody>
                </table>
                <div class="ui segment" id="statuscolumn">
                    <h3 class="ui dividing header">Status of the Order</h3>
                    <div class="ui basic segment">
                    <div class="ui grid">
                        <div class="eight wide column">
                            <h2>345,000 LKR</h2>
                        </div>
                        <div class="eight wide column">
                            <h2 class="statusorg">Pending</h2>
                        </div>

                        <div class="ui center aligned container">
                            <button class="ui primary button">
                            Mark as Sent
                            </button>
                            <button class="ui green button">
                                Mark as discarded
                            </button>
                        </div>

                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div> <!-- Add this div to DIV TAG FOR PUSHER make sure the content stays inside the sidebar -->
<?php include'includes/footer.php'; ?>
</body>
</html>