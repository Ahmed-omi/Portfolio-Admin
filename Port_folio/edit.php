
<?php
require 'db.php';
$id = $_GET['id'];
$sql = 'SELECT * FROM projects WHERE id=:id';
$statement = $connection->prepare($sql);
$statement->execute([':id' => $id ]);
$person = $statement->fetch(PDO::FETCH_OBJ);
if ( isset($_POST['name']) && isset($_POST['short_desc'])  && isset($_POST['long_desc']) && isset($_POST['category'])&& isset($_POST['images'])) {
  $name = $_POST['name'];
  $short_desc = $_POST['short_desc'];
  $long_desc = $_POST['long_desc'];
  $category = $_POST['category'];
  $images = $_POST['images'];
  $sql = 'UPDATE projects SET name=:name,short_desc=:short_desc, long_desc=:long_desc , category=:category, images=:images WHERE id=:id';
  $statement = $connection->prepare($sql);

	if($statement->execute([':name' => $name, ':short_desc' => $short_desc, ':long_desc' => $long_desc,':category' => $category,':images' => $images, ':id' => $id])){
    header("Location:espace-membre.php");
  }

}


 ?>

<?php require 'header.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Update</h2>
    </div>
    <div class="card-body">
      <?php if(!empty($message)): ?>
        <div class="alert alert-success">
          <?= $message; ?>
        </div>
      <?php endif; ?>
      <form method="post">
        <div class="form-group">
          <label for="name">Name</label>
          <input value="<?= $person->name; ?>" type="text" name="name" id="name" class="form-control">
        </div>
        <div class="form-group">
          <label for="short_desc">short Desc</label>
          <input value="<?= $person->short_desc; ?>" type="text" name="short_desc" id="short_desc" class="form-control">
        </div>
        <div class="form-group">
          <label for="long_desc">Long Desc</label>
          <input type="text" value="<?= $person->long_desc; ?>" name="long_desc" id="long_desc" class="form-control">
        </div>
        <div class="form-group">
          <label for="category">Categories</label>
          <input type="text" value="<?= $person->category; ?>" name="category" id="category" class="form-control">
        </div>
        <div class="form-group">
          <label for="images">Images</label>
          <input type="text" value="<?= $person->images; ?>" name="images" id="images" class="form-control">
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-info">Update Project</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php require 'footer.php'; ?>
