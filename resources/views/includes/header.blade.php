<header>
    <div class="container p-3">
      <nav class="navbar navbar-expand-lg p-0">
        <div class="row m-auto container-fluid justify-content-center">

        <div class="col-1">
            <a href="#"><img src="./assets/images/dc-logo.png" alt="dc-logo" /></a>
          </div>
        
          <ul class="col-8">
            @for($i = 0; $i < 10; $i++)
                <li>
                    <a
                    class="py-lg-5 px-lg-2 mx-lg-1" 
                    href="#">Link</a>
                </li>
            @endfor

          </ul>

        </div>
      </nav>
    </div>
  </header>