@extends('base')
@section('body')

<title>registo trabalhador</title>

</head>

<body>
    <div class="container pt-4">
        <div class="card shadow" style="height: 100%;">
            <div class="row pt-5 " style="background-image: url('C:\laragon\www\web2\img\fundo_forms.jpg');">
                <div class="row ps-5 px-5 w-50">
                    <div class=" card shadow mb-4 -d-flex flex-column align-items-center flex-shrink-0 py-2 border border-dark"
                        style="background-color: #74C69D; width: 100%;">
                        <h2 class="title text-center py-lg-5 text-success"> <b> Registe uma nova Tarefa </b> </h2>
                        <div class="row justify-content-center align-items-center w-75">
                            <div class=" align-content-center">
                                <form data-toggle="validator" role="form" method="POST">
                                    @csrf
                                    <div class="form-group y-2">
                                        <label for="trabalhador_nome"></label>
                                        <input class="form-control" type="text" name="trabalhador_nome"
                                            placeholder="Digite o nome da tarefa..." required>
                                    </div>

                                    <div class="form-group">
                                        <label for="salario_base"></label>
                                        <select required id="salario_base" name="salario_base" class="form-control"
                                            aria-required="true">
                                            <option value="">Escolha a parcela</option>
                                            <option value=""></option>
                                            <option value=""></option>
                                            <option value=""></option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="salario_base"></label>
                                        <select required id="salario_base" name="salario_base" class="form-control"
                                            aria-required="true">
                                            <option value="">Escolha um estado</option>
                                            <option value="100">100 €</option>
                                            <option value="200">200 €</option>
                                            <option value="300">300 €</option>
                                        </select>
                                    </div>

                                    <!--aqui vão entrar duas FK-->
                                    <div class="form-group">
                                        <label for="user_id"></label>
                                        <input class="form-control" type="email" name="user_id"
                                            placeholder="Digite o User id do trabalhador...">
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <label for="estado" aria-placeholder="escolha"></label>
                                            <select required id="estado" name="estado" class="form-control">
                                                <option value="">Escolha um trabalhador</option>
                                                <option value=""></option>
                                                <option value=""></option>
                                                <option value=""></option>
                                            </select>
                                        </div>

                                        <!--fim FK-->

                                </form>
                                <form>
                                    <div class="pt-3 text-start">
                                        <label for="diaa"></label>
                                        <input type="date" id="bday" name="diaa" required
                                            pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}">
                                        <span class="validity">Data de definição</span>
                                    </div>
                                    <div class="form-group pt-3">
                                        <label for="diaa"></label>
                                        <input type="date" id="bday" name="diaa" required
                                            pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}">
                                        <span class="validity">Data de inicio</span>
                                    </div>
                                    <div class="form-group pt-3">
                                        <label for="diaa"></label>
                                        <input type="date" id="bday" name="diaa" required
                                            pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}">
                                        <span class="validity">Data fim (previsto)</span>
                                    </div>
                                    <div class="form-group pt-3">
                                        <label for="diaa"></label>
                                        <input type="date" id="bday" name="diaa" required
                                            pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}">
                                        <span class="validity">Data conclusão </span>
                                    </div>
                                </form>
                                <div class="row text-center">
                                    <div class="form-group text-center py-4 text-light">
                                        <button class="bg bg-success" type="submit"><b>Registar</b></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

    @endsection
   
   
    

      
  


 