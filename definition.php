<?php
include "header.php";
include "navbar.php";
include "data.php";

$data = load_demo_data();
$searched_term = $_POST['search-term'];
?>
<div class="container">
  <?php if (array_key_exists($searched_term, $data)): ?>
    <div class="row">
      <div class="col s12">
        <h1><?php echo $searched_term ?></h1>
      </div>
    </div>
    <div class="row">
      <div class="col s12">
        <h6><?php $definition = $data[$searched_term];
          echo $definition ?></h6>

      </div>
    </div>
  <?php else: ?>
    <div class="row">
      <div class="col s12">
        <h2>Tidak ditemui istilah '<?php echo $searched_term ?>' dalam kamus.</h2>
      </div>
    </div>
  <?php endif; ?>
  <div class="row">
    <div class="col s12">
      <a href="index.php" class="waves-effect waves-light btn">Balik</a>
    </div>
  </div>
</div>
<?php include "footer.php"; ?>
