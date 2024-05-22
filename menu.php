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
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      
    </div>
  </div>
</nav>