@extends('base')
@section('body')

<title>registo trabalhador</title>
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
                                    <label for="estado_nome"></label>
                                    <input class="form-control" type="text" name="estado_nome"
                                        placeholder="Digite o nome do Estado..." required>
                                </div>

                                <div class="form-group y-2">
                                    <label for="estado_descricao"></label>
                                    <input class="form-control" type="text" name="estado_descricao"
                                        placeholder="Digite a descricao..." required>
                                </div>

                                <div class="row">
                                    <div class="row text-center">
                                        <div class="form-group text-center py-4 text-light">
                                            <button class="bg bg-success" type="submit"><b>Registar</b></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection