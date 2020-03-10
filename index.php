<?php
include "header.php";
include "navbar.php";
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
              <label for="search-term-autocomplete">Search a Term</label>
              <input type="text" id="search-term-autocomplete"
                     name="search-term"
                     class="autocomplete-content">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script type="text/javascript">
    $(document).ready(() => {
      console.log("document is ready");
      $('#search-term-autocomplete').autocomplete({
        data: {
          "Apple": null,
          "Microsoft": null,
          "Google": "https://placehold.it/250x250",
        },
      });
    });
  </script>

<?php include "footer.php"; ?>