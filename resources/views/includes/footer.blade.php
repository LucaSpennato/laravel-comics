<footer>
    <section class="foot-upper-section">
        <div class="container">
            <div class="row py-5 justify-content-start justify-content-md-center">

                @for($i = 0; $i < 5; $i++)
                    <div class="col-6 py-3 col-md-2 py-md-0">
                        <a href="#"><img src="" alt="link"></a>
                        <span class="ps-2">text</span>
                    </div>
                @endfor
            </div>
        </div>
    </section>
    <section id="foot-middle-section" class="p-0 bg-footer-img">

        <div class="container">

          <div class="row">

            <nav class="row col-12 col-lg-6 p-5">

                <div class="col-4 d-inline">
                <ul>
                    @for($i = 0; $i < 5; $i++)
                        <li><h5>nome Lista</h5></li>
                        <li>
                            <a href="#">link</a>
                        </li>
                    @endfor
                </ul>

                </div>

            </nav>

            <div class="col-lg-6 d-none d-lg-block bg-logo"></div>
            </div>

        </div>
    </section>

    <section class="bottom-section p-0 bg-dark">
      <div class="container">

        <div class="row p-4 justify-content-between align-items-center">

          <div class="col-2">
            <a class="btn btn-outline-primary text-light p-2"> SIGN-UP NOW! </a>
          </div>

          <div class="col-4">
            <ul class="d-flex justify-content-center align-items-center">

              <li><h5 class="m-0 me-2">follow us</h5></li>

                @for($i = 0; $i < 5; $i++)
                    <li>
                        <a href="#" target="_blank">
                        <img src="" alt="iconLink"/></a>
                    </li> 
                @endfor
            </ul>

          </div>
  
        </div>

      </div>

  </section>
    
</footer>