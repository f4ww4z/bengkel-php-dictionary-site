<?php

class Term
{
  // Properties
  public $term;
  public $definition;

  // Constructor with 2 parameters
  function __construct($term, $definition)
  {
    $this->term = $term;
    $this->definition = $definition;
  }
}

function load_demo_data()
{
  return array(
          "Akaun Nyata" => "Akaun yang disediakan untuk menunjukkan semua kos yang terlibat di dalam pengeluaran sesuatu keluaran pada akhir tempoh perakaunan.",
          "Dokumen Sumber" => "Duti yang dikenakan pada barang yang diimport."
  );
}


include "header.php";
include "navbar.php";
?>
<div class="container">
  <div class="row">
    <div class="col s12">
      <h1>You searched for '<?php echo $_POST['search-term'] ?>'</h1>
    </div>
  </div>
</div>
<?php include "footer.php"; ?>
