<nav class="navbar navbar-dar navbar-expand-lg bg-white absolute-top mb-0" style="width: 100%" id="mynav">
    <div class="container-fluid ">
      <a class="navbar-brand text-white fs-2" href="#"><img class="" src="image/alen.png" alt="Alen-Logo" style=" width: 7%; height:7%;"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse nav justify-content-end " id="navbarSupportedContent">
        <nav class="">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class=
            "nav-item">
              <a class="nav-link text-pharma fs-4 px-2" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link text-pharma fs-4 px-2" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-pharma fs-4 px-2" href="services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-pharma fs-4 px-2 rounded-3" href="#contact">Contact</a>
            </li>
            <li class="nav-item">
              <button onClick="login()" class="fs-4 btn btnlogin rounded-3">Login</button>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </nav>
  <script>
    function login() {
      window.location.href ="/login";
    }
    // var myNav = document.getElementById('mynav');
    // window.onscroll = function () { 
    //       if (document.body.scrollTop >= 200 || document.documentElement.scrollTop >= 200 ) {
    //           myNav.classList.add("nav-colored");
    //           myNav.classList.remove("bg-pharma");
    //       } 
    //       else {
    //           myNav.classList.add("bg-pharma");
    //           myNav.classList.remove("nav-colored");
    //       }
    //   };
  </script>
