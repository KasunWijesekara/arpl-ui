<!DOCTYPE html>
<html>
<head>
    <title>Orders Page</title>
    <?php include'includes/head.php'; ?>    
</head>
<body>

    <?php include'includes/header2.php'; ?>   

    <div class="ui active container" id="allteamcon">
            <h3 class="ui header">TEAM DETAILS</h3>

            <div class="ui equal width form">
                <div class="fields">
                    <div class="field">
                        <label>Team Name</label>
                    </div>
                    <div class="field">
                        <input type="text" placeholder="Name">
                    </div>
                </div>
            </div>

            <div class="ui equal width form">
                <div class="fields">
                    <div class="field">
                        <label>Manager Name</label>
                    </div>
                    <div class="field">
                        <input type="text" placeholder="Manager Name">
                    </div>
                </div>
            </div>
    </div>


        <div class="ui active container">
            <h3 class="ui header">SALES REPRESENTATIVES</h3>

            <!-- Table Starts here -->
            <table class="ui very padded table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>User name</th>
                        <th>Device</th>
                        <th>Contact</th>
                        <th>Email</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Kasun Wijesekara</td>
                        <td>KasunWije</td>
                        <td>Android 102</td>
                        <td>0755646830</td>
                        <td>kasun@gmail.com</td>
                        <td>
                            <a class="ui violet button">
                                Pending
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Kasun Wijesekara</td>
                        <td>KasunWije</td>
                        <td>Android 102</td>
                        <td>0755646830</td>
                        <td>kasun@gmail.com</td>
                        <td>
                            <a class="ui green button">
                                Online
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>



</div> <!-- Add this div to DIV TAG FOR PUSHER make sure the content stays inside the sidebar -->
<?php include'includes/footer.php'; ?>
</body>
</html>