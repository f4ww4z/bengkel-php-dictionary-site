<?php
include "header.php";
include "navbar.php";
include "data.php";
?>
  <div class="container">
    <h1>Selamat datang di kamus perakaunan!</h1>

    <!--    Autocomplete form for searching terms -->
    <div class="row">
      <div class="col s12">
        <form action="definition.php" method="post">
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix">search</i>
              <label for="search-term-autocomplete">Cari Istilah...</label>
              <input type="text"
                     id="search-term-autocomplete"
                     name="search-term"
                     class="autocomplete-content"
                     autocomplete="off">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script type="text/javascript">
    $(document).ready(() => {
      // load demo data
      const terms = Object(<?php echo json_encode(load_demo_data())?>);
      console.log(terms);

      $('#search-term-autocomplete').autocomplete({
        data: terms,
      });

    });
  </script>

<?php include "footer.php"; ?>