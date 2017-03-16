<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
    <?php include'includes/head.php'; ?>    
</head>
<body>

    <?php include'includes/header.php'; ?>   

    <div class="ui fluid container">
        <!-- First tab - Work by adding active to 'ui tab container' class -->
        <div class="ui fluid tab container" data-tab="first">
            <h3 class="ui header">LOCATION OF ACTIVE SALES REPRESENTATIVES</h3>
            <!-- <div id="map"></div> -->
        </div>
        <!-- First tab - Work by adding active to 'ui tab container' class -->


        <!-- Second tab - Work by adding active to 'ui tab container' class -->
        <div class="ui tab fluid container" data-tab="second">
            <h3 class="ui header">INVENTORY</h3>

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
                    <div class="six wide column">
                    </div>
                    <div class="two wide column">
                        <button class="ui right olive labeled icon button">
                            <i class="upload icon"></i>
                            &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            CSV
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </button> 
                    </div>
                    <!-- Modal button is here  -->
                    <div class="three wide column">
                        <button class="ui right black labeled icon button" id="AddProducts" >
                            <i class="plus icon"></i>
                            Add Product
                        </button>
                    </div>
                </div>
            </div>

            <!-- Modal content is here. and everything is hidden  make sure the proper ID's are added-->
            <div id="modaldiv" class="ui modal">
                <i class="close icon"></i>
                <div class="header">
                    Product Information
                </div>
                <div class="content">
                    <form class="ui form">
                        <div class="field">
                            <div class="three fields">
                                <div class="field">
                                    <input type="text" name="shipping[product-id]" placeholder="Product ID">
                                </div>
                                <div class="field">
                                    <input type="text" name="shipping[warehouse-id]" placeholder="Warehouse ID">
                                </div>
                                <div class="field">
                                    <input type="text" name="shipping[product-group]" placeholder="Product Group">
                                </div>
                            </div>
                            <!-- Text Area  -->
                            <div class="field">
                                <textarea placeholder="Description"></textarea>
                            </div>
                            <div class="two fields">
                                <div class="field"></div>
                                <div class="field">
                                    <input type="text" name="shipping[price]" placeholder="Price">
                                </div>
                                <div class="field">
                                    <input type="text" name="shipping[qty]" placeholder="Qty">
                                </div>
                                <div class="field"></div>
                            </div>
                        </div>

                    </form>
                </div>
                <!-- Modal Buttons  -->
                <div class="actions" id="modalsbuttons">
                    <div class="ui green button">Add Product</div>
                    <div class="ui red button close">Cancel</div>
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

        <!-- Modal content is here. and everything is hidden  make sure the proper ID's are added-->
        <div id="modaldivedit" class="ui modal">
            <i class="close icon"></i>
            <div class="header">
                Product Information
            </div>
            <div class="content">
                <form class="ui form">
                    <div class="field">
                        <div class="three fields">
                            <div class="field">
                                <input type="text" name="shipping[product-id]" placeholder="Product ID">
                            </div>
                            <div class="field">
                                <input type="text" name="shipping[warehouse-id]" placeholder="Warehouse ID">
                            </div>
                            <div class="field">
                                <input type="text" name="shipping[product-group]" placeholder="Product Group">
                            </div>
                        </div>
                        <!-- Text Area  -->
                        <div class="field">
                            <textarea placeholder="Description"></textarea>
                        </div>
                        <div class="two fields">
                            <div class="field"></div>
                            <div class="field">
                                <input type="text" name="shipping[price]" placeholder="Price">
                            </div>
                            <div class="field">
                                <input type="text" name="shipping[qty]" placeholder="Qty">
                            </div>
                            <div class="field"></div>
                        </div>
                    </div>

                </form>
            </div>
            <!-- Modal Buttons  -->
            <div class="actions" id="modalsbuttons">
                <div class="ui green button">Add Product</div>
                <div class="ui red button close">Cancel</div>
            </div>
        </div>        

        <!-- Delete product modal  -->
        <div class="ui small basic test modal" id="modaldivdelete">
            <div class="ui icon header">
                <i class="trash icon"></i>
                Delete Product
            </div>
            <div class="content">
                <p>You're about to delete a product from the database, Would you like us to delete this from the database?</p>
            </div>
            <div class="actions">
                <div class="ui red basic cancel inverted button">
                    <i class="remove icon"></i>
                    No
                </div>
                <div class="ui green ok inverted button">
                    <i class="checkmark icon"></i>
                    Yes
                </div>
            </div>
        </div>
        <!-- Second tab - Work by adding active to 'ui tab container' class -->

        <!-- Third tab - Work by adding active to 'ui tab container' class -->
        <div class="ui tab fluid container" data-tab="third">
            <div class="ui grid">
                <div class="four column row">
                    <div class="left floated column">
                        <h3 class="ui header" style="margin-top: 10px;">INVENTORY</h3>
                    </div>
                    <div class="right floated column">
                        <div class="ui selection dropdown" style="margin-left: 10px;">
                            <input type="hidden" name="gender">
                            <i class="dropdown icon"></i>
                            <div class="default text">Order Status</div>
                            <div class="menu">
                                <div class="item" data-value="1">Sent</div>
                                <div class="item" data-value="0">Pending</div>
                                <div class="item" data-value="2">Delivered</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <table class="ui very padded table">
                <thead>
                    <tr>
                        <th>
                            Date
                        </th>
                        <th>
                            Order Number #
                        </th>
                    </tr>
                </TR>
            </thead>
            <tbody>
                <tr>
                    <td class="collapsing selectable">
                        <div class="ui linkz red label">23/07/2017</div>
                    </td>
                    <td class="selectable">
                        <a href="orders.php" target="_blank">Order #224321</a>
                    </td>
                </tr>
                <tr>
                    <td class="selectable">
                        <div class="ui linkz green label">31/02/2016</div>
                    </td>
                    <td class="selectable">
                        <a href="orders.php">Order #224321</a>
                    </td>
                </tr>
                <tr>
                    <td class="selectable">
                        <div class="ui linkz red label">15/02/2018</div>
                    </td>
                    <td class="selectable">
                        <a href="orders.php">Order #224321</a>
                    </td>
                </tr>
                <tr>
                    <td class="selectable">
                        <div class="ui linkz orange label">31/09/2010</div>
                    </td>
                    <td class="selectable">
                        <a href="orders.php">Order #224321</a>
                    </td>
                </tr>
                <tr>
                    <td class="selectable">
                        <div class="ui linkz orange label">07/07/2017</div>
                    </td>
                    <td class="selectable">
                        <a href="orders.php">Order #224321</a>
                    </td>
                </tr>
                <tr>
                    <td class="selectable">
                        <div class="ui linkz green label">07/07/2017</div>
                    </td>
                    <td class="selectable">
                        <a href="orders.php">Order #224321</a>
                    </td>
                </tr>
                <tr>
                    <td class="selectable">
                        <div class="ui linkz red label">07/07/2017</div>
                    </td>
                    <td class="selectable">
                        <a href="orders.php">Order #224321</a>
                    </td>
                </tr>
                <tr>
                    <td class="selectable">
                        <div class="ui linkz red label">07/07/2017</div>
                    </td>
                    <td class="selectable">
                        <a href="orders.php">Order #224321</a>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="ui pagination menu">
            <a class="item">
                <i class="chevron right small icon"></i> Next Page 
            </a>
        </div>

    </div>
    <!-- Third tab - Work by adding active to 'ui tab container' class -->


    <div class="ui active fluid tab container" data-tab="fourth">
        <div class="ui fluid container">
            <div class="ui grid">

                <div class="six wide column" id="greycolumnone">

                    <div class="ui demos vertical fluid indexpage tabular menu"> 
                        <h3 class="ui header redtxt">SALES REPRESENTATIVES</h3>

                        <a class="active item" data-tab="1">

                            <div class="ui grid" id="sidebartext">
                                <div class="row">
                                    <div class="three wide column">
                                        <i class="chevron large right icon"></i>
                                    </div>
                                    <div class="three wide column">
                                        <img class="ui centered right floated image" src="images/user.png">
                                    </div>
                                    <div class="nine wide column">
                                        <div class="ui form">
                                            <div class="inline fields">
                                                <div class="sixteen wide field">
                                                    <h4>Kasun Wijesekara</h4>
                                                </div>
                                            </div>
                                            <div class="inline fields">
                                                <div class="sixteen wide field">
                                                    <label>kasunwijesekara@gmail.com</label>
                                                </div>
                                            </div>
                                            <div class="inline fields">
                                                <div class="sixteen wide field">
                                                    <label>Enabled</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </a>


                        <a class="item" data-tab="2">
                            <div class="ui grid" id="sidebartext">
                                <div class="row">
                                    <div class="three wide column">
                                        <i class="chevron large right icon"></i>
                                    </div>
                                    <div class="three wide column">
                                        <img class="ui centered right floated image" src="images/user.png">
                                    </div>
                                    <div class="nine wide column">
                                        <div class="ui form">
                                            <div class="inline fields">
                                                <div class="sixteen wide field">
                                                    <h4>John Wijesekara</h4>
                                                </div>
                                            </div>
                                            <div class="inline fields">
                                                <div class="sixteen wide field">
                                                    <label>kasunwijesekara@gmail.com</label>
                                                </div>
                                            </div>
                                            <div class="inline fields">
                                                <div class="sixteen wide field">
                                                    <label>Enabled</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a class="item" data-tab="3">
                            <div class="ui grid" id="sidebartext">
                                <div class="row">
                                    <div class="three wide column">
                                        <i class="chevron large right icon"></i>
                                    </div>
                                    <div class="three wide column">
                                        <img class="ui centered right floated image" src="images/user.png">
                                    </div>
                                    <div class="nine wide column">
                                        <div class="ui form">
                                            <div class="inline fields">
                                                <div class="sixteen wide field">
                                                    <h4>Sena Wijesekara</h4>
                                                </div>
                                            </div>
                                            <div class="inline fields">
                                                <div class="sixteen wide field">
                                                    <label>kasunwijesekara@gmail.com</label>
                                                </div>
                                            </div>
                                            <div class="inline fields">
                                                <div class="sixteen wide field">
                                                    <label>Enabled</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a class="item" data-tab="4">
                            <div class="ui grid" id="sidebartext">
                                <div class="row">
                                    <div class="three wide column">
                                        <i class="chevron large right icon"></i>
                                    </div>
                                    <div class="three wide column">
                                        <img class="ui centered right floated image" src="images/user.png">
                                    </div>
                                    <div class="nine wide column">
                                        <div class="ui form">
                                            <div class="inline fields">
                                                <div class="sixteen wide field">
                                                    <h4>Doe Wijesekara</h4>
                                                </div>
                                            </div>
                                            <div class="inline fields">
                                                <div class="sixteen wide field">
                                                    <label>kasunwijesekara@gmail.com</label>
                                                </div>
                                            </div>
                                            <div class="inline fields">
                                                <div class="sixteen wide field">
                                                    <label>Enabled</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>

                    </div>        
                </div>


                <div class="ten wide column" id="greycolumn">

                    <div class="ui active fluid tab container" data-tab="1">
                        <div class="ui container">
                            <h3 class="ui header blacktxt">Sales Representatives Details - <span class="greentxt">Active</span></h3>
                            <!-- Grid to display sales rep information -->

                            <div class="ui grid" id="salesrepdet">
                                <div class="row">
                                    <div class="five wide column">
                                        <img class="ui centered right floated image" src="images/user.png">
                                    </div>
                                    <div class="ten wide column">
                                        <div class="ui form">
                                            <div class="inline fields">
                                                <div class="sixteen wide field">
                                                    <label>Profile Name</label>
                                                    <input type="text" placeholder="Kasun Wijesekara">
                                                </div>
                                            </div>
                                            <div class="inline fields">
                                                <div class="sixteen wide field">
                                                    <label>Profile Description</label>
                                                    <input type="text" placeholder="Profile Description">
                                                </div>
                                            </div>
                                            <div class="inline fields">
                                                <div class="sixteen wide field">
                                                    <label>Modified</label>
                                                    <input type="text" placeholder="20.04.2016">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h3 class="ui header blacktxt">Customer Information</h3>
                            <div class="ui form"><!-- Form section -->
                                <div class="two fields">
                                    <div class="field">
                                        <label>ID</label>
                                        <input placeholder="6653" type="text">
                                    </div>
                                    <div class="field">
                                        <label>City</label>
                                        <input placeholder="Pamankada" type="text">
                                    </div>
                                </div>

                                <div class="two fields">
                                    <div class="field">
                                        <label>Title</label>
                                        <input placeholder="Mr." type="text">
                                    </div>
                                    <div class="field">
                                        <label>Post Code</label>
                                        <input placeholder="1025" type="text">
                                    </div>
                                </div>

                                <div class="two fields">
                                    <div class="field">
                                        <label>First Name</label>
                                        <input placeholder="Kasun" type="text">
                                    </div>
                                    <div class="field">
                                        <label>Country</label>
                                        <input placeholder="Sri Lanka" type="text">
                                    </div>
                                </div>

                                <div class="two fields">
                                    <div class="field">
                                        <label>Last Name</label>
                                        <input placeholder="Wijesekara" type="text">
                                    </div>
                                    <div class="field">
                                        <label>Prefered Language</label>
                                        <input placeholder="Spanish" type="text">
                                    </div>
                                </div>

                                <div class="two fields">
                                    <div class="field">
                                        <label>Email</label>
                                        <input placeholder="kasunwijesekara@gmail.com" type="text">
                                    </div>
                                    <div class="field">
                                        <label>Supervised By</label>
                                        <input placeholder="Sachin" type="text">
                                    </div>
                                </div>
                                <div class="two fields">
                                    <div class="field">
                                    </div>
                                    <div class="field">
                                        <a id="SalesRepEdit" class="ui red button">
                                            Edit 
                                        </a> 
                                    </div>
                                </div>
                            </div>
                        </div><!-- Form section div-->

                        <h3 class="ui header blacktxt">Location History</h3>
                        <div class="ui one column centered grid spaced">
                            <div class="column">
                                <div id="map"></div>
                            </div>
                        </div>

                        <h3 class="ui header blacktxt">Target &amp; Sales</h3>
                        <div class="ui one column centered grid spaced">
                            <div class="column">
                                <canvas id="canvas"></canvas>
                            </div>
                        </div>

                    </div>  <!-- data tab 1 closing div -->



                    <div class="ui fluid tab container" data-tab="2">
                        <div class="ui container">
                            <h3 class="ui header blacktxt">Sales Representatives Details - <span class="greentxt">Active</span></h3>
                            <!-- Grid to display sales rep information -->

                            <div class="ui grid" id="salesrepdet">
                                <div class="row">
                                    <div class="five wide column">
                                        <img class="ui centered right floated image" src="images/user.png">
                                    </div>
                                    <div class="ten wide column">
                                        <div class="ui form">
                                            <div class="inline fields">
                                                <div class="sixteen wide field">
                                                    <label>Profile Name</label>
                                                    <input type="text" placeholder="Kasun Wijesekara">
                                                </div>
                                            </div>
                                            <div class="inline fields">
                                                <div class="sixteen wide field">
                                                    <label>Profile Description</label>
                                                    <input type="text" placeholder="Profile Description">
                                                </div>
                                            </div>
                                            <div class="inline fields">
                                                <div class="sixteen wide field">
                                                    <label>Modified</label>
                                                    <input type="text" placeholder="20.04.2016">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h3 class="ui header blacktxt">Customer Information</h3>
                            <div class="ui form"><!-- Form section -->
                                <div class="two fields">
                                    <div class="field">
                                        <label>ID</label>
                                        <input placeholder="6653" type="text">
                                    </div>
                                    <div class="field">
                                        <label>City</label>
                                        <input placeholder="Pamankada" type="text">
                                    </div>
                                </div>

                                <div class="two fields">
                                    <div class="field">
                                        <label>Title</label>
                                        <input placeholder="Mr." type="text">
                                    </div>
                                    <div class="field">
                                        <label>Post Code</label>
                                        <input placeholder="1025" type="text">
                                    </div>
                                </div>

                                <div class="two fields">
                                    <div class="field">
                                        <label>First Name</label>
                                        <input placeholder="Kasun" type="text">
                                    </div>
                                    <div class="field">
                                        <label>Country</label>
                                        <input placeholder="Sri Lanka" type="text">
                                    </div>
                                </div>

                                <div class="two fields">
                                    <div class="field">
                                        <label>Last Name</label>
                                        <input placeholder="Wijesekara" type="text">
                                    </div>
                                    <div class="field">
                                        <label>Prefered Language</label>
                                        <input placeholder="Spanish" type="text">
                                    </div>
                                </div>

                                <div class="two fields">
                                    <div class="field">
                                        <label>Email</label>
                                        <input placeholder="kasunwijesekara@gmail.com" type="text">
                                    </div>
                                    <div class="field">
                                        <label>Supervised By</label>
                                        <input placeholder="Sachin" type="text">
                                    </div>
                                </div>
                                <div class="two fields">
                                    <div class="field">
                                    </div>
                                    <div class="field">
                                        <a id="SalesRepEdit2" class="ui red button">
                                            Edit 
                                        </a> 
                                    </div>
                                </div>
                            </div>
                        </div><!-- Form section div-->

                        <h3 class="ui header blacktxt">Location History</h3>
                        <div class="ui one column centered grid spaced">
                            <div class="column">
                                <div id="map"></div>
                            </div>
                        </div>

                        <h3 class="ui header blacktxt">Target &amp; Sales</h3>
                        <div class="ui one column centered grid spaced">
                            <div class="column">
                                <canvas id="canvas"></canvas>
                            </div>
                        </div>

                    </div>  

                    <div class="ui fluid tab container" data-tab="3">
                        <div class="ui container">
                            <h3 class="ui header blacktxt">Sales Representatives Details - <span class="greentxt">Active</span></h3>
                            <!-- Grid to display sales rep information -->

                            <div class="ui grid" id="salesrepdet">
                                <div class="row">
                                    <div class="five wide column">
                                        <img class="ui centered right floated image" src="images/user.png">
                                    </div>
                                    <div class="ten wide column">
                                        <div class="ui form">
                                            <div class="inline fields">
                                                <div class="sixteen wide field">
                                                    <label>Profile Name</label>
                                                    <input type="text" placeholder="Kasun Wijesekara">
                                                </div>
                                            </div>
                                            <div class="inline fields">
                                                <div class="sixteen wide field">
                                                    <label>Profile Description</label>
                                                    <input type="text" placeholder="Profile Description">
                                                </div>
                                            </div>
                                            <div class="inline fields">
                                                <div class="sixteen wide field">
                                                    <label>Modified</label>
                                                    <input type="text" placeholder="20.04.2016">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h3 class="ui header blacktxt">Customer Information</h3>
                            <div class="ui form"><!-- Form section -->
                                <div class="two fields">
                                    <div class="field">
                                        <label>ID</label>
                                        <input placeholder="6653" type="text">
                                    </div>
                                    <div class="field">
                                        <label>City</label>
                                        <input placeholder="Pamankada" type="text">
                                    </div>
                                </div>

                                <div class="two fields">
                                    <div class="field">
                                        <label>Title</label>
                                        <input placeholder="Mr." type="text">
                                    </div>
                                    <div class="field">
                                        <label>Post Code</label>
                                        <input placeholder="1025" type="text">
                                    </div>
                                </div>

                                <div class="two fields">
                                    <div class="field">
                                        <label>First Name</label>
                                        <input placeholder="Kasun" type="text">
                                    </div>
                                    <div class="field">
                                        <label>Country</label>
                                        <input placeholder="Sri Lanka" type="text">
                                    </div>
                                </div>

                                <div class="two fields">
                                    <div class="field">
                                        <label>Last Name</label>
                                        <input placeholder="Wijesekara" type="text">
                                    </div>
                                    <div class="field">
                                        <label>Prefered Language</label>
                                        <input placeholder="Spanish" type="text">
                                    </div>
                                </div>

                                <div class="two fields">
                                    <div class="field">
                                        <label>Email</label>
                                        <input placeholder="kasunwijesekara@gmail.com" type="text">
                                    </div>
                                    <div class="field">
                                        <label>Supervised By</label>
                                        <input placeholder="Sachin" type="text">
                                    </div>
                                </div>
                            </div>
                        </div><!-- Form section div-->

                        <h3 class="ui header blacktxt">Location History</h3>
                        <div class="ui one column centered grid spaced">
                            <div class="column">
                                <div id="map"></div>
                            </div>
                        </div>

                        <h3 class="ui header blacktxt">Target &amp; Sales</h3>
                        <div class="ui one column centered grid spaced">
                            <div class="column">
                                <canvas id="canvas"></canvas>
                            </div>
                        </div>

                    </div>  

                    <div class="ui fluid tab container" data-tab="4">
                        <div class="ui container">
                            <h3 class="ui header blacktxt">Sales Representatives Details - <span class="greentxt">Active</span></h3>
                            <!-- Grid to display sales rep information -->

                            <div class="ui grid" id="salesrepdet">
                                <div class="row">
                                    <div class="five wide column">
                                        <img class="ui centered right floated image" src="images/user.png">
                                    </div>
                                    <div class="ten wide column">
                                        <div class="ui form">
                                            <div class="inline fields">
                                                <div class="sixteen wide field">
                                                    <label>Profile Name</label>
                                                    <input type="text" placeholder="Kasun Wijesekara">
                                                </div>
                                            </div>
                                            <div class="inline fields">
                                                <div class="sixteen wide field">
                                                    <label>Profile Description</label>
                                                    <input type="text" placeholder="Profile Description">
                                                </div>
                                            </div>
                                            <div class="inline fields">
                                                <div class="sixteen wide field">
                                                    <label>Modified</label>
                                                    <input type="text" placeholder="20.04.2016">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h3 class="ui header blacktxt">Customer Information</h3>
                            <div class="ui form"><!-- Form section -->
                                <div class="two fields">
                                    <div class="field">
                                        <label>ID</label>
                                        <input placeholder="6653" type="text">
                                    </div>
                                    <div class="field">
                                        <label>City</label>
                                        <input placeholder="Pamankada" type="text">
                                    </div>
                                </div>

                                <div class="two fields">
                                    <div class="field">
                                        <label>Title</label>
                                        <input placeholder="Mr." type="text">
                                    </div>
                                    <div class="field">
                                        <label>Post Code</label>
                                        <input placeholder="1025" type="text">
                                    </div>
                                </div>

                                <div class="two fields">
                                    <div class="field">
                                        <label>First Name</label>
                                        <input placeholder="Kasun" type="text">
                                    </div>
                                    <div class="field">
                                        <label>Country</label>
                                        <input placeholder="Sri Lanka" type="text">
                                    </div>
                                </div>

                                <div class="two fields">
                                    <div class="field">
                                        <label>Last Name</label>
                                        <input placeholder="Wijesekara" type="text">
                                    </div>
                                    <div class="field">
                                        <label>Prefered Language</label>
                                        <input placeholder="Spanish" type="text">
                                    </div>
                                </div>

                                <div class="two fields">
                                    <div class="field">
                                        <label>Email</label>
                                        <input placeholder="kasunwijesekara@gmail.com" type="text">
                                    </div>
                                    <div class="field">
                                        <label>Supervised By</label>
                                        <input placeholder="Sachin" type="text">
                                    </div>
                                </div>
                            </div>
                        </div><!-- Form section div-->

                        <h3 class="ui header blacktxt">Location History</h3>
                        <div class="ui one column centered grid spaced">
                            <div class="column">
                                <div id="map"></div>
                            </div>
                        </div>

                        <h3 class="ui header blacktxt">Target &amp; Sales</h3>
                        <div class="ui one column centered grid spaced">
                            <div class="column">
                                <canvas id="canvas"></canvas>
                            </div>
                        </div>

                    </div>   

                </div>

            </div>
        </div>
    </div>

    <!-- Modal content is here. and everything is hidden  make sure the proper ID's are added-->
                        <div id="SalesRepEditMod" class="ui modal">
                            <i class="close icon"></i>
                            <div class="header">
                                Add Product Catalogue
                            </div>
                            <div class="content">
                                <div class="ui equal width form">
                                    <div class="fields">
                                        <div class="field">
                                            <label>Name</label>
                                            <input type="text" placeholder="Name">
                                        </div>
                                        <div class="field">
                                            <label>Username</label>
                                            <input type="text" placeholder="Username">
                                        </div>
                                    </div>
                                    <div class="fields">
                                        <div class="field">
                                            <label>Password</label>
                                            <input type="text" placeholder="Password">
                                        </div>
                                        <div class="field">
                                            <label>Contact Number</label>
                                            <input type="text" placeholder="Contact Number">
                                        </div>
                                    </div>
                                    <div class="fields">
                                        <div class="field">
                                            <label>Email</label>
                                            <input type="text" placeholder="Email">
                                        </div>
                                        <div class="field">
                                            <label>Status</label>
                                            <input type="text" placeholder="Status">
                                        </div>
                                    </div>
                                    <div class="fields">
                                        <div class="field">
                                            <label>Sales Target</label>
                                            <input type="text" placeholder="Sales Target">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal Buttons  -->
                            <div class="actions" id="modalsbuttons">
                                <div class="ui green button">Submit</div>
                                <!-- <div class="ui red button close">Cancel</div> -->
                            </div>
                        </div>
                        </div><!--  Modal End  -->

                        <!-- Modal content is here. and everything is hidden  make sure the proper ID's are added-->
                        <div id="SalesRepEditMod2" class="ui modal">
                            <i class="close icon"></i>
                            <div class="header">
                                Add Product Catalogue
                            </div>
                            <div class="content">
                                <div class="ui equal width form">
                                    <div class="fields">
                                        <div class="field">
                                            <label>Name</label>
                                            <input type="text" placeholder="Name">
                                        </div>
                                        <div class="field">
                                            <label>Username</label>
                                            <input type="text" placeholder="Username">
                                        </div>
                                    </div>
                                    <div class="fields">
                                        <div class="field">
                                            <label>Password</label>
                                            <input type="text" placeholder="Password">
                                        </div>
                                        <div class="field">
                                            <label>Contact Number</label>
                                            <input type="text" placeholder="Contact Number">
                                        </div>
                                    </div>
                                    <div class="fields">
                                        <div class="field">
                                            <label>Email</label>
                                            <input type="text" placeholder="Email">
                                        </div>
                                        <div class="field">
                                            <label>Status</label>
                                            <input type="text" placeholder="Status">
                                        </div>
                                    </div>
                                    <div class="fields">
                                        <div class="field">
                                            <label>Sales Target</label>
                                            <input type="text" placeholder="Sales Target">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal Buttons  -->
                            <div class="actions" id="modalsbuttons">
                                <div class="ui green button">Submit</div>
                                <!-- <div class="ui red button close">Cancel</div> -->
                            </div>
                        </div>
                        </div><!--  Modal End  -->
    <!-- Fourth tab - End please add the active class to 'ui tab container' -->



    <!-- fifth tab - Work by adding active to 'ui tab container' class -->
    <div class="ui tab fluid container" data-tab="fifth">
        <div class="ui grid">
            <div class="four column row">
                <div class="left floated column">
                    <h3 class="ui header" style="margin-top: 10px;">ADD USER</h3>
                </div>
            </div>
        </div>


        <div class="ui container">
            <div class="ui equal width form">
                <div class="fields">
                    <div class="field">
                        <label>Name</label>
                        <input type="text" placeholder="Name">
                    </div>
                    <div class="field">
                        <label>Username</label>
                        <input type="text" placeholder="Username">
                    </div>
                </div>
                <div class="fields">
                    <div class="field">
                        <label>Password</label>
                        <input type="text" placeholder="Password">
                    </div>
                    <div class="field">
                        <label>Contact</label>
                        <input type="text" placeholder="Contact">
                    </div>
                </div>
                <div class="field">
                    <label>Group</label>
                    <div class="ui selection dropdown">
                        <input type="hidden" name="user">
                        <i class="dropdown icon"></i>
                        <div class="default text">User type</div>
                        <div class="menu">
                            <div class="item" data-value="1">Manager</div>
                            <div class="item" data-value="0">Warenhouse</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="ui container center aligned" id="addusersec">
            <button class="ui button">
                Submit
            </button>
        </div>

    </div>
    <!-- fifth tab - Work by adding active to 'ui tab container' class -->

    <!-- sixth tab - Work by adding active to 'ui tab container' class -->
    <div class="ui tab fluid container" data-tab="sixth">
        <div class="ui grid">
            <div class="four column row">
                <div class="left floated column">
                    <h3 class="ui header" style="margin-top: 10px;">ADD WAREHOUSE</h3>
                </div>
            </div>
        </div>


        <div class="ui container">
            <div class="ui equal width form">
                <div class="fields">
                    <div class="field">
                        <label>Warehouse Code</label>
                        <input type="text" placeholder="Warehouse code">
                    </div>
                    <div class="field">
                        <label>Username</label>
                        <input type="text" placeholder="Username">
                    </div>
                </div>
                <div class="fields">
                    <div class="field">
                        <label>Address</label>
                        <input type="text" placeholder="Address">
                    </div>
                    <div class="field">
                        <label>Contact Number</label>
                        <input type="text" placeholder="Contact Number">
                    </div>
                </div>
                <div class="field">
                    <label>Email</label>
                    <input type="text" placeholder="Contact Email">
                </div>
            </div>
        </div>

        <div class="ui container center aligned" id="addusersec">
            <button class="ui button">
                Submit
            </button>
        </div>

    </div>
    <!-- sixth tab - Work by adding active to 'ui tab container' class -->

    <!-- seventh tab - Work by adding active to 'ui tab container' class -->
    <div class="ui tab fluid container" data-tab="seventh">

        <!-- SALES TEAM -->
        <div class="ui grid" id="salesteamcon">
            <div class="four column row">
                <div class="center floated column">
                    <h3 class="ui header" style="margin-top: 10px;">SALES TEAM</h3>
                </div>
            </div>
        </div>
        <div class="ui container">
            <div class="ui equal width form">
                <div class="fields">
                    <div class="field">
                        <label>Name</label>
                        <input type="text" placeholder="Warehouse code">
                    </div>
                    <div class="field">
                        <label>Manager</label>
                        <div class="ui selection dropdown">
                            <input type="hidden" name="user">
                            <i class="dropdown icon"></i>
                            <div class="default text">Select Manager</div>
                            <div class="menu">
                                <div class="item" data-value="1">Manager</div>
                                <div class="item" data-value="0">Warenhouse</div>
                            </div>
                        </div>
                    </div>  
                </div>
                <div class="ui container center aligned" id="warehousesecone">
                    <button class="ui button">
                        Submit
                    </button>
                </div>
            </div>
        </div>
        <!-- SALES TEAM -->

        <!-- ADD AGENTS TO SALES TEAM -->
        <div class="ui grid" id="agentsteamcon">
            <div class="four column row">
                <div class="center floated column">
                    <h3 class="ui header" style="margin-top: 10px;">ADD AGENTS TO SALES TEAM</h3>
                </div>
            </div>
        </div>
        <div class="ui container">
            <div class="ui equal width form">
                <div class="fields">
                    <div class="field">
                        <label>Sales Team</label>
                        <div class="ui selection dropdown">
                            <input type="hidden" name="user">
                            <i class="dropdown icon"></i>
                            <div class="default text">Select Manager</div>
                            <div class="menu">
                                <div class="item" data-value="1">Manager</div>
                                <div class="item" data-value="0">Warenhouse</div>
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <label>Agent</label>
                        <div class="ui selection dropdown">
                            <input type="hidden" name="user">
                            <i class="dropdown icon"></i>
                            <div class="default text">Select Manager</div>
                            <div class="menu">
                                <div class="item" data-value="1">Manager</div>
                                <div class="item" data-value="0">Warenhouse</div>
                            </div>
                        </div>
                    </div>  
                </div>

                <div class="ui container center aligned" id="warehousesecone">
                    <button class="ui button">
                        Submit
                    </button>
                </div>

            </div>
        </div>
        <!-- ADD AGENTS TO SALES TEAM -->

    </div>
    <!-- seventh tab - Work by adding active to 'ui tab container' class -->

    <!-- eighth tab - Work by adding active to 'ui tab container' class -->
    <div class="ui tab fluid container" data-tab="eighth">
        <h3 class="ui header">ALL WAREHOUSES</h3>

        <!-- Table Starts here -->
        <table class="ui very padded table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Warehouse Code</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Contact Number</th>
                    <th>Email</th>
                    <th>Stock/Orders</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>F 42</td>
                    <td>John Doe</td>
                    <td>11/A, 1st Lane, Colombo</td>
                    <td>075532371</td>
                    <td>johndoe@gmail.com</td>
                    <td>
                        <a href="orders.php" class="ui violet button">
                            View
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>F 42</td>
                    <td>John Doe</td>
                    <td>11/A, 1st Lane, Colombo</td>
                    <td>075532371</td>
                    <td>johndoe@gmail.com</td>
                    <td>
                        <a href="orders.php" class="ui violet button">
                            View
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- eighth tab - Work by adding active to 'ui tab container' class -->

    <!-- ninth tab - Work by adding active to 'ui tab container' class -->
    <div class="ui tab fluid container" data-tab="ninth">
        <h3 class="ui header">ALL TEAMS</h3>

        <!-- Table Starts here -->
        <table class="ui very padded table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Team Manager</th>
                    <th>View</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>F 42</td>
                    <td>John Doe</td>
                    <td>
                        <a href="allteams.php" target="_blank" class="ui violet button">
                            View Record
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>F 42</td>
                    <td>John Doe</td>
                    <td>
                        <a href="allteams.php" target="_blank" class="ui violet button">
                            View Record
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- ninth tab - Work by adding active to 'ui tab container' class -->

    <!-- tenth tab - Work by adding active to 'ui tab container' class -->
    <div class="ui tab fluid container" data-tab="tenth">
        <div class="ui grid">
            <div class="four column row">
                <div class="left floated column">
                <h3 id="salesrepcon" class="ui header" style="margin-top: 10px;">ADD SALES REPRESENTATIVES</h3>
                </div>
            </div>
        </div>


        <div class="ui container">
            <div class="ui equal width form">
                <div class="fields">
                    <div class="field">
                        <label>Name</label>
                        <input type="text" placeholder="Name">
                    </div>
                    <div class="field">
                        <label>Username</label>
                        <input type="text" placeholder="Username">
                    </div>
                </div>
                <div class="fields">
                    <div class="field">
                        <label>Password</label>
                        <input type="text" placeholder="Password">
                    </div>
                    <div class="field">
                        <label>Device</label>
                        <div class="ui selection dropdown">
                            <input type="hidden" name="user">
                            <i class="dropdown icon"></i>
                            <div class="default text">Select Device</div>
                            <div class="menu">
                                <div class="item" data-value="1">Android 1025</div>
                                <div class="item" data-value="0">Android 2012</div>
                            </div>
                        </div>
                    </div>  
                </div>
                <div class="fields">
                    <div class="field">
                        <label>Contact Number</label>
                        <input type="text" placeholder="Contact Number">
                    </div>
                    <div class="field">
                        <label>Email</label>
                        <input type="text" placeholder="Email">
                    </div>
                </div>
                <div class="field">
                        <label>Status</label>
                        <div class="ui selection dropdown">
                            <input type="hidden" name="user">
                            <i class="dropdown icon"></i>
                            <div class="default text">Select Status</div>
                            <div class="menu">
                                <div class="item" data-value="1">Online</div>
                                <div class="item" data-value="0">Offline</div>
                            </div>
                        </div>
                    </div>  
            </div>
        </div>

        <div class="ui container center aligned" id="addusersec">
            <button class="ui button">
                Submit
            </button>
        </div>

    </div>
    <!-- tenth tab - Work by adding active to 'ui tab container' class -->


    <!-- eleventh tab - Work by adding active to 'ui tab container' class -->
        <div class="ui tab fluid container" data-tab="eleventh">
            <h3 class="ui header">PRODUCT CATALOGUES</h3>

            <!-- my inventroy button area -->
            <div class="ui grid">
                <div class="row">
                    <div class="five wide column">
                    </div>
                    <div class="six wide column">
                    </div>
                    <div class="two wide column">
                    </div>
                    <!-- Modal button is here  -->
                    <div class="three wide column">
                        <a id="AddNew2" class="ui right red labeled icon button">
                            <i class="plus icon"></i>
                            Add Catalogue
                        </a>
                    </div>
                </div>
            </div>


            <!-- Table Starts here -->
            <table class="ui very padded table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Product Code</th>
                        <th>Description</th>
                        <th>Product Group</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>3564D</td>
                        <td>Tooth Brush Medium</td>
                        <td>HG 20938</td>
                        <td>Very Good content please buy</td>
                        <td>28</td>
                    </tr>
                    <tr>
                        <td>2517S</td>
                        <td>Water Bottle Large</td>
                        <td>HG 20938</td>
                        <td>15, Very Good content please buy</td>
                        <td>28</td>
                        <!-- <td>
                            <a href="#" id="AddNew2" class="ui purple button">Add New</a>
                        </td> -->
                    </tr>
                     
                </tbody>
            </table>

             <!-- Modal content is here. and everything is hidden  make sure the proper ID's are added-->
        <div id="AddNewCon" class="ui modal">
            <i class="close icon"></i>
            <div class="header">
                Add Product Catalogue
            </div>
            <div class="content">
                <div class="ui equal width form">
                <div class="fields">
                    <div class="field">
                        <label>Name</label>
                        <input type="text" placeholder="Name">
                    </div>
                    <div class="field">
                        <label>Product Code</label>
                        <input type="text" placeholder="Product Code">
                    </div>
                </div>
                <div class="fields">
                    <div class="field">
                        <label>Description</label>
                        <input type="text" placeholder="Description">
                    </div>
                    <div class="field">
                        <label>Product Group</label>
                        <input type="text" placeholder="Product Group">
                    </div> 
                </div>
                <div class="fields">
                    <div class="field">
                        <label>Video URL</label>
                        <input type="text" placeholder="URL">
                    </div>
                    <div class="field">
                        <label>File URL</label>
                        <input type="text" placeholder="URL">
                    </div>
                </div>
            </div>
            </div>
            <!-- Modal Buttons  -->
            <div class="actions" id="modalsbuttons">
                <div class="ui green button">Add Product</div>
                <!-- <div class="ui red button close">Cancel</div> -->
            </div>
        </div>
    </div>
        <!-- eleventh tab - Work by adding active to 'ui tab container' class -->

        <!-- twelfth tab - Work by adding active to 'ui tab container' class -->
        <div class="ui tab fluid container" data-tab="twelfth">
            <h3 class="ui header">CUSTOMERS</h3>

            <!-- my inventroy button area -->
            <div class="ui grid">
                <div class="row">
                    <div class="five wide column">
                    </div>
                    <div class="six wide column">
                    </div>
                    <div class="two wide column">
                    </div>
                    <!-- Modal button is here  -->
                    <div class="three wide column">
                        <a id="AddNewCus" class="ui right red labeled icon button">
                            <i class="plus icon"></i>
                            New Customer
                        </a>
                    </div>
                </div>
            </div>


            <!-- Table Starts here -->
            <table class="ui very padded table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Contact Number</th>
                        <th>Edit / Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>3564D</td>
                        <td>Tooth Brush Medium</td>
                        <td>HG 20938</td>
                        <td>Very Good content please buy</td>
                        <td>
                            <a href="#" id="editCustomer"><i class="file big olive text link outline icon"></i></a>
                            <a href="#" id="deleteCustomer"><i class="trash big red link trash outline icon"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>2517S</td>
                        <td>Water Bottle Large</td>
                        <td>HG 20938</td>
                        <td>15, Very Good content please buy</td>
                        <td>
                            <a href="#" id="editCustomer2"><i class="file big olive text link outline icon"></i></a>
                            <a href="#" id="deleteCustomer2"><i class="trash big red link trash outline icon"></i></a>
                        </td>
                    </tr>
                     
                </tbody>
            </table>

        <!-- Modal content is here. and everything is hidden  make sure the proper ID's are added-->
        <div id="AddNewCusMod" class="ui modal">
            <i class="close icon"></i>
            <div class="header">
                Add Product Catalogue
            </div>
            <div class="content">
                <div class="ui equal width form">
                <div class="fields">
                    <div class="field">
                        <label>Name</label>
                        <input type="text" placeholder="Name">
                    </div>
                    <div class="field">
                        <label>Contact Number</label>
                        <input type="text" placeholder="Contact Number">
                    </div>
                </div>
                <div class="fields">
                    <div class="field">
                        <label>Address</label>
                        <input type="text" placeholder="Address">
                    </div>
                </div>
            </div>
            </div>
            <!-- Modal Buttons  -->
            <div class="actions" id="modalsbuttons">
                <div class="ui green button">Add Product</div>
                <!-- <div class="ui red button close">Cancel</div> -->
            </div>
        </div>        

        <!-- Modal content is here. and everything is hidden  make sure the proper ID's are added-->
        <div id="EditNewCusMod" class="ui modal">
            <i class="close icon"></i>
            <div class="header">
                Add Product Catalogue
            </div>
            <div class="content">
                <div class="ui equal width form">
                <div class="fields">
                    <div class="field">
                        <label>Name</label>
                        <input type="text" placeholder="Name">
                    </div>
                    <div class="field">
                        <label>Contact Number</label>
                        <input type="text" placeholder="Contact Number">
                    </div>
                </div>
                <div class="fields">
                    <div class="field">
                        <label>Address</label>
                        <input type="text" placeholder="Address">
                    </div>
                </div>
            </div>
            </div>
            <!-- Modal Buttons  -->
            <div class="actions" id="modalsbuttons">
                <div class="ui green button">Add Product</div>
                <!-- <div class="ui red button close">Cancel</div> -->
            </div>
        </div>       

        <!-- Delete product modal  -->
        <div class="ui small basic test modal" id="deleteCustomerMod">
            <div class="ui icon header">
                <i class="trash icon"></i>
                Delete Product
            </div>
            <div class="content">
                <p>You're about to delete a product from the database, Would you like us to delete this from the database?</p>
            </div>
            <div class="actions">
                <div class="ui red basic cancel inverted button">
                    <i class="remove icon"></i>
                    No
                </div>
                <div class="ui green ok inverted button">
                    <i class="checkmark icon"></i>
                    Yes
                </div>
            </div>
        </div>
        
    </div>
        <!-- twelfth tab - Work by adding active to 'ui tab container' class -->


        <!-- thirteen tab - Work by adding active to 'ui tab container' class -->
    <div class="ui tab fluid container" data-tab="thirteen">
        <div class="ui grid">
            <div class="four column row">
                <div class="left floated column">
                <h3 id="salesrepcon" class="ui header" style="margin-top: 10px;">ASSIGN WAREHOUSE TO AGENT</h3>
                </div>
            </div>
        </div>

        <div class="ui container">
            <div class="ui equal width form">
                <div class="fields">
                    <div class="field">
                        <label>Agent</label>
                        <div class="ui selection dropdown">
                            <input type="hidden" name="user">
                            <i class="dropdown icon"></i>
                            <div class="default text">Select Agent</div>
                            <div class="menu">
                                <div class="item" data-value="1">Agent 291</div>
                                <div class="item" data-value="0">Agent 2931</div>
                            </div>
                        </div>
                    </div>  
                    <div class="field">
                        <label>Warehouse Code</label>
                        <div class="ui selection dropdown">
                            <input type="hidden" name="user">
                            <i class="dropdown icon"></i>
                            <div class="default text">Select Warehouse</div>
                            <div class="menu">
                                <div class="item" data-value="1">Warehouse 232</div>
                                <div class="item" data-value="0">Warehouse 232</div>
                            </div>
                        </div>
                    </div>  
                </div> 
            </div>
        </div>

        <div class="ui container center aligned" id="addusersec">
            <button class="ui button">
                Submit
            </button>
        </div>

    </div>
    <!-- thirteen tab - Work by adding active to 'ui tab container' class -->

    <!-- fourteen tab - Work by adding active to 'ui tab container' class -->
    <div class="ui tab fluid container" data-tab="fourteen">
        <h3 class="ui header">View Cash Collections</h3>

        <!-- Table Starts here -->
        <table class="ui very padded table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Date</th>
                    <th>Order</th>
                    <th>Warehouse Code</th>
                    <th>Customer</th>
                    <th>Agent</th>
                    <th>Amount Collectable</th>                    
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>23 Jan 2018</td>
                    <td>Order Number</td>
                    <td>Warehouse 212</td>
                    <td>John Doe</td>
                    <td>John Donation</td>
                    <td>23,000</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>23 Jan 2018</td>
                    <td>Order Number</td>
                    <td>Warehouse 212</td>
                    <td>John Doe</td>
                    <td>John Donation</td>
                    <td>23,000</td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- fourteen tab - Work by adding active to 'ui tab container' class -->



</div> <!-- Add this div to DIV TAG FOR PUSHER make sure the content stays inside the sidebar -->
<?php include'includes/footer.php'; ?>

<script>
    function initMap() {
        var uluru = {lat: 6.864333, lng: 79.895913};
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 16,
            scrollwheel: false,
            center: uluru
        });
        var marker = new google.maps.Marker({
            position: uluru,
            map: map
        });
    }
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAQgfxcOsxYPUuGfivNg_l6z9bpMKILpw4&callback=initMap"></script>
</body>
</html>