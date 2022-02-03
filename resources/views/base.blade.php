<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" >
   <!--o meu nao funcionou sem chamar o JS-->
    
    <title>index</title>
</head>
<body>
    <!-- Bootstrap navbar - green -->
    
    <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #74C69D;" >
        
        <div class="row text-success fs-5 fw-bold text-start p-3">G FARM</div>
                    
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav text-start">
                    <li class="nav-item fw-bold">
                    <a class="nav-link ps-5" href="#">Campo</a>
                    </li>
                    <li class="nav-item fw-bold">
                    <a class="nav-link" href="#">Trabalhadores</a>
                    </li>
                    <li class="nav-item fw-bold">
                    <a class="nav-link " href="#">Produção</a>
                    </li>
                    <li class="nav-item fw-bold">
                    <a class="nav-link" href="#">Tarefas</a>
                    </li>                                     
                 </ul>

                 <div class="row col-9"></div>
                 <button class="btn btn-light me-3 ">Login</button>            
           
            </div>
        </div>
    </nav>
    <hr>

    @yield('body')

    <footer class="text-center text-white fixed-bottom" style="background-color: #74C69D;">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
          © 2020 Copyright:
          <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>    
          
        </div>
        <!-- Copyright -->
      </footer>
</body>
</html>