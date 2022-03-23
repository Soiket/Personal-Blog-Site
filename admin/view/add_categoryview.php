<?php
if (isset($_POST['add_cat'])) {
    $return_msg = $obj->addCategory($_POST);
}

?>

<h2>Add Category</h2>
<?php if (isset($return_msg)) {
    echo $return_msg;
}
?>
<form action="" method="POST">

    <div class="form-group">
        <label class="small mb-1" for="cat_name">Category Name</label>
        <input name="cat_name" class="form-control py-4" id="cat_name" type="text" required />
    </div>

    <div class="form-group">
        <label class="small mb-1" for="cat_des">Category Description</label>
        <input name="cat_des" class="form-control py-4" id="cat_des" type="textarea"/>
    </div>
    <input type="submit" name="add_cat" value="Add Category" class="from-control btn btn-block btn-primary">


</form>