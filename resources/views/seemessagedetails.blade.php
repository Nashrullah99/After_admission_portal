<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/3da1a747b2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Document</title>
</head>
<body>
    <button class="back-to-top-btn"><i class="fas fa-angle-double-up"></i></button>
    <div>
        <div class="bup" style="display: flex; flex-direction:column">
            <div class="bup-left">
                <div class="bup-logo"><a href=""><img src="{{ asset('images/bup.png') }}" alt="bup-logo" width="90px" height="90px"></a></div>
            </div>
            <div class="admission-year" style="text-align: center;">
                <h3>Undergraduate admission</h3>
                <h4>2023-2024</h4>
            </div>           
        </div>
        <div>
            <nav class="navbar bg-light menu">
                <div class="container-fluid">
                  <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <!-- <a class="navbar-brand" href="#">Log out</a> -->
                  <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                      <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Admin Menu</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body d-flex justify-content-center">
                      <div class="d-flex flex-column">
                        <div class="btn-group d-flex justify-content-center w-100">
                          <div class="admin-image">
                            <img src="./images/Naum.jpg" alt="">
                          </div>
                          <span class="dropdown-toggle mt-2 toggler" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false"></span>
                          <ul class="dropdown-menu bg-light p-3">
                            <div class="dropdown-item">
                              <li><a href="#" style="color: black;">Change password</a></li>
                            </div>
                            <div class="dropdown-item">
                              <li><a href="{{ route('adminlogout') }}" style="color: black;">Log out</a></li>
                            </div>
                          </ul>
                        </div>
                        <div>
                          <p style="font-size: 1.2rem;">BUP ADMIN</p>
                        </div>
                      </div>
                  </div>
                </div>
              </nav>
        </div>
        <div>
            <div class="d-flex flex-column justify-content-center align-items-center pt-3">
                
                <h4 class="m-5">Message from {{ $user->username }}</h4>
                
            </div>
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Phone number</th>
                    <th>Email</th>
                    <th>Problem type</th>
                    <th>problem details</th>

                </tr>
            
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->phonenumber }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->problemtype }}</td>
                    <td>{{ $user->problemdetails }}</td>
                </tr>
                
            </table>

        </div>
    </div>    
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script>
      const backtotopbtn = document.querySelector(".back-to-top-btn");
      window.addEventListener("scroll", functionscroll);

      function functionscroll(){
          if(window.scrollY > 300){
              backtotopbtn.style.display = "block";
          }
          else{
              backtotopbtn.style.display = "none";
          }
      }
      backtotopbtn.addEventListener("click", backtotop);
      function backtotop(){
          window.scrollTo({
              top: 0,
              left: 0,
              behavior: "smooth"
          });
      }

    </script>
</body>
</html>