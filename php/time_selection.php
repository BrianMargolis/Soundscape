<?php

if (isset($_GET["period"])) {
    $period = $_GET["period"];
} else {
    $period = 'week';
}
?>

<div class="container-fluid">
    <div class="row">
        <div class = "col-md-1">
        </div>
        <div class="col-md-2" id="time_selection">
            <div class="btn-group">
                <button class="btn btn-primary status">Past <?php echo $period ?></button>
                <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                    <span class="caret" style = "color: rgb(219, 221, 224)"></span>
                </button>
                <ul class="dropdown-menu dropdown-inverse">
                    <li><a href='?period=day' onclick="updatePeriod('day')">Past day</a></li>
                    <li><a href='?period=week' onclick="updatePeriod('week')">Past week</a></li>
                    <li><a href='?period=month' onclick="updatePeriod('month')">Past month</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>