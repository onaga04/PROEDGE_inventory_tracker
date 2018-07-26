
<?php
include ('includes/header.php');
?>
<html>
<main> <!-- Main content goes here -->
    <div class="container">
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#menu1">Create Inventory</a></li>
            <li><a data-toggle="tab" href="#menu2">Create Loan</a></li>
            <li><a data-toggle="tab" href="#menu3">Update Inventory</a></li>
            <li><a data-toggle="tab" href="#menu4">Inventory</a></li>
            <li><a data-toggle="tab" href="#menu5">Loans</a></li>
           
        </ul>

        <div class="tab-content">
            <div id="menu1" class="tab-pane fade in active">
                
                <?php
                require ('includes/header.php');
                ?>

            </div>
            <div id="menu2" class="tab-pane fade">
                  <?php
                require ('includes/header.php');
                ?>
            </div>
            <div id="menu3" class="tab-pane fade">
                <form action="/main.php">
                    Description:<br>
                        <input type="text" name="description" value="dress pants">
                        <br>
                    Color:<br>
                        <input type="text" name="color" value="black">
                        <br>
                </form>
            </div>
            <div id="menu4" class="tab-pane fade">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Clothing</th>
                        <th>color</th>
                        <th>Description</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>dress pants</td>
                        <td>black</td>
                        <td>striped</td>
                    </tr>
                    <tr>
                        <td>scarf</td>
                        <td>brown</td>
                        <td>wool</td>
                    </tr>
                    <tr>
                        <td>Shirt</td>
                        <td>Black and white</td>
                        <td>long sleeve</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            </div>
            <div>

            <div id="menu5" class="tab-pane fade">
            <table class="table">
                    <thead>
                    <tr>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>A number</th>
                        <th>Email</th>
                        <th>cloth description</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>John</td>
                        <td>Doe</td>
                        <td>A8499288392</td>
                        <td>john@example.com</td>
                        <td>black blazer</td>
                    </tr>
                    <tr>
                        <td>Mary</td>
                        <td>Moe</td>
                        <td>A38932924704</td>
                        <td>mary@example.com</td>
                        <td>red jacket</td>
                    </tr>
                    <tr>
                        <td>July</td>
                        <td>Dooley</td>
                        <td>A9236482</td>
                        <td>july@example.com</td>
                        <td> dress pants</td>
                    </tr>
                    </tbody>
                </table>
        </div>

    </div>
 </main>
 </html>
<?php
include ('includes/footer.php');
?>
