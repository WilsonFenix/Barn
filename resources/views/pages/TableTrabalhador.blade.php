@extends('base')
@section('body')
<title>registo trabalhador</title>
<div class="container pt-4">
    <div class="card shadow" style="height: 100%;">
        <div class="row pt-5 " style="background-image: url('C:\laragon\www\web2\img\fundo_forms.jpg');">
            <div class="row ps-5 px-5 w-50">
                <div class=" card shadow mb-4 -d-flex flex-column align-items-center flex-shrink-0 py-2 border border-dark"
                    style="background-color: #74C69D; width: 100%;">
                    <h2 class="title text-center py-lg-5 text-success"> <b> Registe um novo trabalhador </b> </h2>
                    <div class="row justify-content-center align-items-center w-75">
                        <div class=" align-content-center">
                            <form data-toggle="validator" role="form" method="POST">
                                <div class="form-group y-2">
                                    <label for="trabalhador_nome"></label>
                                    <input class="form-control" type="text" name="trabalhador_nome"
                                        placeholder="Digite o nome do trabalhador..." required>
                                </div>

                                <div class="form-group">
                                    <label for="trabalhador_bi"></label>
                                    <input class="form-control" type="text" name="trabalhador_bi"
                                        placeholder="Digite o numero do BI do trabalhador..." required minlength="7">
                                    <span class="help-block">Mínimo de seis (6) digitos</span>
                                </div>

                                <div class="form-group">
                                    <label for="trabalhador_bi"></label>
                                    <input class="form-control" type="text" name="trabalhador_n_contrato"
                                        placeholder="Digite o numero do contrato do trabalhador..." required
                                        minlength="7">
                                </div>

                                <div class="form-group">
                                    <label for="salário_base"></label>
                                    <select required id="salário_base" name="salário_base" class="form-control"
                                        aria-required="true">
                                        <option value="">Escolha uma opção</option>
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
                                            <option value="">Escolha uma opção</option>
                                            <option value="estagiario(a)">Estagiario(a)</option>
                                            <option value="efetivo(a)">Efetivo(a)</option>
                                            <option value="coordenador(a)">Coordenador(a)</option>
                                        </select>
                                    </div>

                                    <!--fim FK-->
                                    <div class="row text-center">
                                        <div class="form-group text-center py-4 text-light">
                                            <button class="bg bg-success" type="submit"><b>Cadastrar</b></button>
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
   
   
    

      
  


 