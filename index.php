<?php
include "header.php";
include "navbar.php";
include "data.php";
?>
  <div class="container">
    <div class="pt-10"></div>
    <h1 class="mb-10">Selamat datang di kamus perakaunan!</h1>

    <!--    Autocomplete form for searching terms -->
    <form class="d-flex flex-wrap" action="definition.php" method="post">
      <a id="search-term-index"></a>

      <button type="submit"
              class="w-100 w-25-md mt-2 mt-0-md ml-2-md button primary">
        Cari
      </button>
    </form>
  </div>

  <script type="text/javascript">
    // load demo data
    const terms = Object(<?php echo json_encode(array_keys(load_demo_data())) ?>);
    let termsToString = terms.toString();
    termsToString = termsToString.replace(/,/g, ', ');
    console.log(termsToString);

    $("<input class=\"w-100 w-50-md\" type=\"text\" data-role=\"input\" name=\"search-term\" placeholder=\"Cari istilah...\" data-autocomplete=\"" + termsToString + "\">")
      .insertAfter('#search-term-index');
  </script>
<?php include "footer.php"; ?>