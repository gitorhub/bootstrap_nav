<nav class="navbar navbar-expand-xl navbar-light bg-light containers">
    <!-- toogle menu icon -->
    <div class="col-2 col-xl-1 d-xl-none zindex-2 p-0 m-0">
      <button type="button" class="btn d-xl-none " data-toggle="modal" data-target="#modalPoll-1"> <i
          class="fas fa-bars fa-2x"></i> </button>
    </div>
    <!-- brand logo -->
    <div class="justify-content-center d-flex mr-xl-3  col col-xl-2">
      <a class="navbar-brand  text-center" href="#"><img src="images/wood-logo-dark.svg" alt="wood logo"
          class="big-logo-size"></a>
    </div>
    <!-- manu -xl manu category başlıklar modal ile -->

    <div class="modal" id="modalPoll-1">
      <div class="modal-size">
        <div class="modal-content">

          <div class="col-12  my-2">
            <input type="text" placeholder="Search for products" class="border-0 py-2 col-11"><span class="border-0"><i
                class="fas fa-search"></i></span>
          </div>

          <div class="d-flex row">
            <ul class="nav nav-tabs col" id="myTab" role="tablist">
              <li class="nav-item col btn bg-light">
                <a class="btn active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                  aria-selected="true">MENU</a>
              </li>
              <li class="nav-item col btn bg-light">
                <a class="btn" id="category-tab" data-toggle="tab" href="#category" role="tab" aria-controls="category"
                  aria-selected="false">CATEGORIES</a>
              </li>
            </ul>
          </div>

          <!-- total expand -->
          <?php include "total-expand.php" ?>

        </div>
      </div>
    </div>



    <!-- menu sağı başlıklar midde-nav -->
    <?php include "middle-nav.php" ?>

  </nav>