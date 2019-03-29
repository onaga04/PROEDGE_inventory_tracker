<button id="create-loan">Create Loan</button>

<div id='create_loan' class='create-form'>
    <form action="/inventory/database/create-loan.php" method="POST">
        <select id="student_id" name="student_id">
            <option value="students">Students</option>
            <?php
            foreach($student as $person){
                echo
                    '<option value="'.$person["id"].'">'. $person["first_name"]. ' '. $person["last_name"] .'</option>';
            }
            ?>
        </select>


        <br><br>
        <select id="inventory_id" name="inventory_id">
            <option value="inventory">Inventory</option>
            <?php
            foreach($inventory as $item){
                echo
                    '<option value="'.$item["id"].'">'. $item["description"]. ' || '. $item["color"] .'</option>';
            }
            ?>
        </select>
        <br><br>
        <input type="submit" value="Submit">
    </form>
</div>


<table class="table">
    <thead>
    <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>A number</th>

        <th>Description</th>
        <th>Color</th>
        <th>Actions</th>

    </tr>
    </thead>
    <tbody>
    <?php

    foreach ($loans as $loan) {
        $delete_href = "/inventory/database/delete-loan.php?id=".$loan["id"];

        echo
            '<tr>
            <td>' . $loan["first_name"] . '</td>
            <td>' . $loan["last_name"] . '</td>
            <td>' . $loan["a_number"] . '</td>
            <td>' . $loan["description"] . '</td>
            <td>' . $loan["color"] . '</td>
             <td>
             <a href='.$delete_href.' class="delete-loan">Delete</a>

             </td>
             </tr>';
    }
    ?>

    </tbody>
</table>





