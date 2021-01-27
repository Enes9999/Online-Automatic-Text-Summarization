<?php
require_once 'header.php';
require_once '../Storage/Database.php';
require_once "../UserData/Profile.php";
require_once "../UserData/Deactivate.php";
require_once "../UserData/UserDetails/Account.php";
require_once "../UserData/UserDetails/History.php";


$error = false;
if (isset($_REQUEST['action'])) {
    switch ($_REQUEST['action']) {
        case 'user.delete':
            header("Location: index.php");
            $valid = Deactivate::deleteUser($_REQUEST['id']);
            if (!$valid) {
                $error = 'Deleting users failed.';
            }
            session_destroy();
            break;
        case 'history.delete':
            $valid = History::deleteHistory($_REQUEST['id']);
            if (!$valid) {
                $error = 'Deleting history failed.';
            }
            break;
        case 'edit':
            $valid = Profile::edit($_REQUEST['id']);
            if (!$valid) {
                $error = 'Editing profile failed.';
            }
            break;
    }
}
$db = Database::getInstance();
$history = History::getHistory();
$show = Profile::showprofile();




?>
<h1>Profili</h1>

<table border='1'>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Password</th>
        <th>Gender</th>
        <th>Birthday</th>
        <th>Delete</th>

    </tr>


    <tr>
        <td><?php echo $show['id']; ?></td>
        <td><?php echo $show['name']; ?></td>
        <td><?php echo $show['lastname']; ?></td>
        <td><?php echo $show['email']; ?></td>
        <td><?php echo $show['password']; ?></td>
        <td><?php echo $show['gender']; ?></td>
        <td><?php echo $show['birthdate']; ?></td>
        <td><a href="profile.php?action=user.delete&id=<?php echo $show['id']; ?>">Delete</a></td>
    </tr>
</table>
<br>
<h3>Update Data</h3>

<form action="profile.php?action=edit&id=<?php echo $show['id']; ?>" method="POST" type="text">
    <table border='1'>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Lastname</th>
            <th>Email</th>
            <th>Password</th>
            <th>Gender</th>
            <th>Birthday</th>
            <th>Update</th>

        </tr>
        <tr>

            <td><?php echo $show['id']; ?></td>
            <td><input type="text" name="name" value="" placeholder="Enter name"></td>
            <td><input type="text" name="lastname" value="" placeholder="Enter lastname"></td>
            <td><?php echo $show['email']; ?></td>
            <td><input type="password" name="password" placeholder="password" data-validate="Password is required"></td>
            <td><input type="text" name="gender" value="" placeholder="Enter gender"></td>
            <td><input type="date" name="birthdate" value="" placeholder="Enter birthdate"></td>
            <td><input type="submit" name="update" value="update"></td>
        </tr>
    </table>
</form>
<br>
<br>

<table border='1'>
    <tr>
        <th>History</th>
        <th>ID History</th>
        <th>Delete</th>
        <th>Date</th>
    </tr>
    <?php foreach ($history as $histor) : ?>
        <tr>


            <td><?php echo $histor['History']; ?></td>
            <td><?php echo $histor['IDHISTORY']; ?></td>
            <td><a href="profile.php?action=history.delete&id=<?php echo $histor['IDHISTORY']; ?>">Delete</a></td>
            <td><?php echo $histor['Date']; ?></td>
        </tr>
    <?php endforeach; ?>

</table>

<br><br><br><br><br><br><br>







<?php
require_once('footer.php');
?>