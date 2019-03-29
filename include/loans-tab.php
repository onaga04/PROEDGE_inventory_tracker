<button id="add-student">Add Student</button>

<div id='create_student' class='create-form'>

  <form action="database/create-student.php" method="POST">
    First name:<br>
    <input type="text" name="first_name" value="">
    <br>
    Last name:<br>
    <input type="text" name="last_name" value="">
    <br>
    A number:<br>
    <input type="text" name="a_number" value="">
    <br>
    email:<br>
    <input type="text" name="email" value="">
    <br><br>
    <input type="submit" value="Submit">
  </form>
</div>


<table class="table">
    <thead>
    <tr>
        <th></th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>A number</th>
        <th>Email</th>
        <th>Actions</th>

    </tr>
    </thead>
    <tbody>
    <?php

    foreach ($student as $person) {
        $delete_href = "/inventory/database/delete-student.php?id=".$person["id"];
        echo
            '<tr>
            <td></td>
            <td>' . $person["first_name"] . '</td>
            <td>' . $person["last_name"] . '</td>
            <td>' . $person["a_number"] . '</td>
            <td>' . $person["email"] . '</td>
             <td>
             <a href='.$delete_href.' class="delete-student">Delete</a>
             </td>
             </tr>';
    }
    ?>

    </tbody>
</table>


