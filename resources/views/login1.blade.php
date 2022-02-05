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
    <nav class="navbar navbar-expand-lg navbar-light pt-0" style="background-color: #74C69D;" >
        
        <div class="row text-success fs-5 fw-bold text-start p-1 "><a class="nav-link" href="/"> G FARM</a></div>
                    
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav text-start">
                    <li class="nav-item fw-bold">
                    <a class="nav-link ps-5" href="campo">Campo</a>
                    </li>
                    <li class="nav-item fw-bold">
                    <a class="nav-link" href="trabalhador">Trabalhadores</a>
                    </li>
                    <li class="nav-item fw-bold">
                    <a class="nav-link " href="producao">Produção</a>
                    </li>
                    <li class="nav-item fw-bold">
                    <a class="nav-link" href="tarefas">Tarefas</a>
                    </li>                                     
                 </ul>
    
                 <div class="row col-7 me-5 "></div>
                 <a href="login" class="btn btn-secondary active" aria-current="page">Login</a>
                 <div class="row col-0 ps-3 "></div>
                 <a href="register" class="btn btn-secondary active" aria-current="page">Entrar</a>            
           
            </div>
        </div>
    </nav>

    @yield('body')
</body>

    <script src="/js/bootstrap.min.js"></script>

   

</html>