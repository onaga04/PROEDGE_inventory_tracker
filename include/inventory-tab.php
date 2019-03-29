<button id="add-inventory">Add Inventory</button>

<div id='create_inventory' class='create-form'>
    <form action="/inventory/database/create-inventory.php" method="POST">
        Description:<br>
        <input type="text" name="description" value="">
        <br>
        Color:<br>
        <input type="text" name="color" value="">
        <br><br>
        <input type="submit" value="Submit">
    </form>
    <!-- //Submit Button -->
</div>

<table class="table">
    <thead>
    <tr>
        <th>Description</th>
        <th>Color</th>
        <th>Actions</th>

    </tr>
    </thead>
    <tbody>
    <?php

    foreach ($inventory as $item) {
        $update_href = "/inventory/database/update-inventory.php?id=".$item["id"];
        $delete_href = "/inventory/database/delete-inventory.php?id=".$item["id"];
        echo
            '<tr>
            
            <td>' . $item["description"] . '</td>
            <td>' . $item["color"] . '</td>
            <td>
                <a href='.$update_href.' class="update-inventory">Update</a>
                <a href='.$delete_href.' class="delete-inventory">Delete</a>
            </td>
            
        </tr>';
    }
    ?>

    </tbody>
  </table>




