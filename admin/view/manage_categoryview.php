<?php

$catgory = $obj->manageCategory();

if (isset($_GET['status'])) {
    if ($_GET['status'] == 'delete') {
        $delid = $_GET['id'];
        $message = $obj->delete_Category($delid);
    }
}



?>
<h1>Manage Category</h1>
<?php if (isset($message)) {
    echo $message;
}
?>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>action</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($cat = mysqli_fetch_assoc($catgory)) {   ?>
            <tr>
                <td><?php echo $cat['id'] ?></td>
                <td><?php echo $cat['name'] ?></td>
                <td><?php echo $cat['description'] ?></td>
                <td>
                    <a class="btn btn-primary" href="edit_category.php?status=edit&&id=<?php echo $cat['id']; ?>">Edit</a>
                    <a class="btn btn-danger" href="?status=delete&&id=<?php echo $cat['id']; ?>">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>