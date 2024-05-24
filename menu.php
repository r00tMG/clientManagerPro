
<nav class="navbar navbar-expand-lg bg-body-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <!-- <a class="nav-link active" aria-current="page" href="#"> -->
            <!-- Button trigger modal -->
        <a type="button" class="nav-link active " data-bs-toggle="modal" data-bs-target="#exampleModal">
          Create
        </a>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Create Clients</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <!-- Formulaire d'enrregistrement de client -->
                <div class="container mt-5 w-50">
                    <h3 class="text-center"></h3>
                    <form action="" method="POST" class="form-group">
                        <div class="mb-2">
                            <input type="text" name="name" id="" placeholder="Nom" class="form-control">
                        </div>
                        <div class="mb-2">
                            <input type="text" name="email" id="" placeholder="Email" class="form-control">
                        </div>
                        <div class="mb-2">
                            <input type="number" name="phone" id="" placeholder="Phone" class="form-control">
                        </div>
                        <div class="mb-2">
                            <input type="text" name="status" id="" placeholder="Status" class="form-control">
                        </div>
                        <div>
                            <input  type="submit" value="CREATE" class="btn btn-primary mx-auto" name="" id="" placeholder="Nom" class="form-control">
                        </div>
                        
                    </form>
                </div>
              </div>
              <!-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div> -->
            </div>
          </div>
        </div>
          <!-- </a> -->
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li> -->
        
      </ul>
      <style>
        .mt-2logout{
          margin-top: 13px !important;
        }
      </style>
      <ul class="navbar-nav ">
        <li class="nav-item ">
          <a class="nav-link btn" href="api/auth/logout.php">
          <svg stroke="currentColor" class="mt-2logout text-danger" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M16 13L16 11 7 11 7 8 2 12 7 16 7 13z"></path><path d="M20,3h-9C9.897,3,9,3.897,9,5v4h2V5h9v14h-9v-4H9v4c0,1.103,0.897,2,2,2h9c1.103,0,2-0.897,2-2V5C22,3.897,21.103,3,20,3z"></path></svg>
          </a>
        </li>
        <li class="nav-item ">
            <a class="nav-link" >
              <?php
              require_once 'index.php';
              if(isset($_SESSION['users'])){
                echo '
                '.$_SESSION['users'][0].'
                <img src="/api/users/uploads/'.$_SESSION['users'][1].'" width="40px" height="40px" class="img-fluid rounded-circle" "/>
                ';
              }
              ?>
            </a>
        </li>

      </ul>
    </div>
  </div>
</nav>