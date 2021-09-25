<?php
require 'db.php';
$message = '';
if (isset ($_POST['name'])  && isset($_POST['short_desc']) && isset($_POST['long_desc']) && isset($_POST['category'])&& isset($_POST['images']) ) {
  $name = $_POST['name'];
  $short_desc = $_POST['short_desc'];
  $long_desc = $_POST['long_desc'];
  $category = $_POST['category'];
  $images = $_POST['images'];
  $sql = 'INSERT INTO projects(name, short_desc, long_desc, category, images) VALUES(:name, :short_desc, :long_desc, :category, :images)';
  $statement = $connection->prepare($sql);
  if ($statement->execute([':name' => $name, ':short_desc' => $short_desc , ':long_desc' => $long_desc ,':category' => $category ,':images' => $images])) {
    $message = 'data inserted successfully';
  }
}


 ?>
<?php require 'header.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Create</h2>
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
          <input type="text" name="name" id="name" class="form-control">
        </div>
        <div class="form-group">
          <label for="short_desc">Short desc</label>
          <input type="text" name="short_desc" id="short_desc" class="form-control">
        </div>
        <div class="form-group">
          <label for="long_desc">Long desc</label>
          <input type="text" name="long_desc" id="long_desc" class="form-control">
        </div>
        <div class="form-group">
          <label for="category">Categories</label>
          <input type="text" name="category" id="category" class="form-control">
        </div>
        <div class="form-group">
          <label for="images">Images</label>
          <input type="text" name="images" id="images" class="form-control">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-info">Create</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php require 'footer.php'; ?>
