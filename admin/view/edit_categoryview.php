<?php
if (isset($_GET['status'])) {
    if (($_GET['status'] == 'edit')) {
        $editid = $_GET['id'];
        $category = $obj->get_category_info($editid);
    }
}

if (isset($_POST['submit'])) {
    $message = $obj->update_category($_POST);
}
?>
<h2>Edit Category</h2>
<?php if (isset($message)) {
    echo $message;
}
?>
<form action="" method="POST">
    <input type="hidden" name="edit_id" value="<?php echo $editid ?>">
    <div class="form-group">
        <label class="small mb-1" for="cat_name">Category Name</label>
        <input name="cat_name" class="form-control py-4" id="cat_name" value="<?php echo $category['name'] ?>" type="text" required />
    </div>

    <div class="form-group">
        <label class="small mb-1" for="cat_des">Category Description</label>
        <input name="cat_des" class="form-control py-4" id="cat_des" value="<?php echo $category['description'] ?>" type="textarea" />
    </div>
    <input type="submit" name="submit" value="Update" class="from-control btn btn-block btn-primary">


</form>