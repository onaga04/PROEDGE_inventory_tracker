
<?php
include ('include/header.php');
?>
<main> <!-- Main content goes here -->
    <div class="container">
        <ul class="nav nav-tabs">
<!--            <li class="active"><a data-toggle="tab" href="#menu1">Create Inventory</a></li>-->
<!--            <li><a data-toggle="tab" href="#menu2">Create student</a></li>-->

            <li><a data-toggle="tab" href="#menu3">Inventory</a></li>
            <li><a data-toggle="tab" href="#menu4">Students</a></li>
            <li><a data-toggle="tab" href="#menu5">Loans</a></li>
           
        </ul>

        <div class="tab-content">
<!--            <div id="menu1" class="tab-pane fade in active">-->
<!--                -->
<!--                --><?php
//                require_once ('include/create-inventory.php');
//                ?>
<!---->
<!--            </div>-->
<!--            <div id="menu2" class="tab-pane fade">-->
<!--                  --><?php
//                require_once('include/create-student.php');
//                ?>
<!--            </div>-->

            <div id="menu3" class="tab-pane fade in active">
                <?php include_once('include/show-inventory.php'); ?>


            </div>


            <div id="menu4" class="tab-pane fade">
                <?php include_once('include/loans-tab.php'); ?>
            </div>
            <div id="menu5" class="tab-pane fade">
                <?php include_once('include/create-loan.php'); ?>
            </div>

    </div>
 </main>
<?php
include ('include/footer.php');
?>
