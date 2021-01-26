<?php
require_once 'header.php';
require_once '../Storage/Database.php';
require_once "../UserData/UserDetails/Account.php";
require_once "../UserData/UserDetails/History.php";


$error = false;
if (isset($_REQUEST['action'])) {
    switch ($_REQUEST['action']) {
        case 'user.delete':
            header("Location: index.php");
            $valid = Profile::delete($_REQUEST['id']);
            if (!$valid) {
                $error = 'Deleting users failed.';
            }
            session_destroy();
            break;
        case 'history.delete':
            $valid = History::delete($_REQUEST['id']);
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

$sql = " SELECT id, name, lastname, email, password, gender, birthdate FROM users WHERE id = '" . $_SESSION['user']['id'] . "'";
$results = current($db->find($sql));


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
        <td><?php echo $results['id']; ?></td>
        <td><?php echo $results['name']; ?></td>
        <td><?php echo $results['lastname']; ?></td>
        <td><?php echo $results['email']; ?></td>
        <td><?php echo $results['password']; ?></td>
        <td><?php echo $results['gender']; ?></td>
        <td><?php echo $results['birthdate']; ?></td>
        <td><a href="profile.php?action=user.delete&id=<?php echo $results['id']; ?>">Delete</a></td>
    </tr>
</table>
<br>

<h3>Update Data</h3>

<form action="profile.php?action=edit&id=<?php echo $results['id']; ?>" method="POST" type="text">

    <?php echo $results['id']; ?>
    <input type="text" name="name" value="" placeholder="Enter name">
    <input type="text" name="lastname" value="" placeholder="Enter lastname">
    <?php echo $results['email']; ?>
    <input type="password" name="password" placeholder="password" data-validate="Password is required">
    <input type="text" name="gender" value="" placeholder="Enter gender">
    <input type="date" name="birthdate" value="" placeholder="Enter birthdate">
    <input type="submit" name="update" value="update">

</form>
<br>
<br>

<table border='1'>
    <tr>
        <th>History</th>
        <th>Delete</th>
        <th>Date</th>
    </tr>
    <?php foreach ($history as $histor) : ?>
        <tr>


            <td><?php echo $histor['History']; ?></td>
            <td><a href="profile.php?action=history.delete&id=<?php echo $results['id']; ?>">Delete</a></td>
            <td><?php echo $histor['Date']; ?></td>
        </tr>
    <?php endforeach; ?>

</table>

<br><br><br><br><br><br><br>







<?php
require_once('footer.php');
?>