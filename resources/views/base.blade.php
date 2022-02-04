<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>index</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light pt-3" style="background-color: #74C69D;" >
        
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
    
                 <div class="row col-8"></div>
                 <button class="btn btn-light me-3 ">Login</button>            
           
            </div>
        </div>
    </nav>

    @yield('body')

    <script src="/js/bootstrap.min.js"></script>

    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top" >
        <div class="col-md-4 d-flex align-items-center">
        <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
            <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
        </a>
        <span class="text-muted">© 2021 Company, Inc</span>
        </div>
    <div class="col-md-8 d-flex align-items-center"> Desenvolvedores: Carlos Wilson e Leandro Santos</div>   
  </footer>
</body>
</html>