<?php
include "header.php";
include "navbar.php";
include "data.php";

$data = load_demo_data();
$searched_term = $_POST['search-term'];
?>
<div class="d-flex flex-column container">
  <?php if (array_key_exists($searched_term, $data)): ?>
    <h1><?php echo $searched_term ?></h1>
    <h6><?php $definition = $data[$searched_term];
      echo $definition ?></h6>
  <?php else: ?>
    <h2>Tidak ditemui istilah '<?php echo $searched_term ?>' dalam kamus.</h2>
  <?php endif; ?>
  <a href="index.php" class="mt-4 button primary">Balik</a>
</div>
<?php include "footer.php"; ?>
