<!DOCTYPE html>
<html>
<head>
    <title>Agent Details</title>
    <?php include'includes/head.php'; ?>    
</head>
<body>

    <?php include'includes/header3.php'; ?>   

    <!-- fifteen tab - Work by adding active to 'ui tab container' class -->
<div class="ui fluid container" data-tab="fifteen">
    <h3 class="ui header">ID - 2931 | Agent Name - John Doe</h3>

    <!-- my inventroy button area -->
    <div class="ui grid">
        <div class="row">
            <div class="four wide column">
                <div class="ui selection dropdown" style="margin-left: 10px;">
                    <input type="hidden" name="gender">
                    <i class="dropdown icon"></i>
                    <div class="default text">Assing a Warehouse</div>
                    <div class="menu">
                        <div class="item" data-value="0">Warehouse 1</div>
                        <div class="item" data-value="1">Warehouse 2</div>
                        <div class="item" data-value="2">Warehouse 3</div>
                    </div>
                </div>
                <button class="ui red icon button">
                    <i class="add icon"></i>
                </button>
            </div>
            <div class="four wide column">
                <div class="ui action input">
                    <input type="text" placeholder="60,000">
                    <button class="ui blue button">Select a target</button>
                </div>
            </div>
            <div class="four wide column">
                <div class="ui selection dropdown" style="margin-left: 10px;">
                    <input type="hidden" name="gender">
                    <i class="dropdown icon"></i>
                    <div class="default text">Select Month</div>
                    <div class="menu">
                        <div class="item" data-value="0">January</div>
                        <div class="item" data-value="1">Febuary</div>
                        <div class="item" data-value="2">March</div>
                        <div class="item" data-value="3">April</div>
                        <div class="item" data-value="4">May</div>
                        <div class="item" data-value="5">June</div>
                        <div class="item" data-value="6">July</div>
                        <div class="item" data-value="7">August</div>
                        <div class="item" data-value="8">Sepetember</div>
                        <div class="item" data-value="9">October</div>
                        <div class="item" data-value="10">November</div>
                        <div class="item" data-value="11">December</div>
                    </div>
                </div>
                <button class="ui green icon button">
                    <i class="add icon"></i>
                </button>
            </div>
            <div class="four wide column">
                <a href="#AgentDetails" class="ui right blue labeled icon button" id="AgentDetails" >
                    <i class="home icon"></i>
                    Warehouses
                </a>
            </div>
        </div>
    </div>
    <div class="ui grid">
        <div class="eight wide column">
            <div class="ui container">
                <canvas id="pieChart" style="height:250px"></canvas>
                <ul class="chart-legend clearfix">
                    <i class="circle icon" style="color: #f56954;"></i> Completed
                    <i class="circle icon" style="color:#00c0ef;"></i> In Complete
                </ul>
            </div>

        </div>
        <div class="eight wide column">
            <!-- Table Starts here -->
            <h4>Attendance History</h4>
            <table class="ui very padded table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Punch IN</th>
                        <th>Punch OUT</th>                    
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>23 Jan 2018 | 8.00AM</td>
                        <td>23 Jan 2018 | 8.00PM</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>23 Jan 2018 | 8.00AM</td>
                        <td>23 Jan 2018 | 8.00PM</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- fifteen tab - Work by adding active to 'ui tab container' class -->
<!-- fifteen tab Modal is placed here  -->
<!-- Modal content is here. and everything is hidden  make sure the proper ID's are added-->
<div id="AgentDetailsModal" class="ui modal">
    <i class="close icon"></i>
    <div class="header">
        Assigned Warehouses
    </div>
    <div class="content">
        <table class="ui very padded table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Warehouse</th>
                    <th>Warehouse Code</th>                    
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Warehouse 1</td>
                    <td>W 2837</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Warehouse 2</td>
                    <td>W 2873</td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- Modal Buttons  -->
    <div class="actions" id="modalsbuttons">
        <div class="ui green button">Submit</div>
        <!-- <div class="ui red button close">Cancel</div> -->
    </div>
</div>
<?php include'includes/footer2.php'; ?>
</body>
</html>