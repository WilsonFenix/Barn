@extends('base')
@section('body') 
  

    <div class="conteiner ">        
       <div class="row pt-5 ps-8" style="background-image: url('img/fundo_forms.jpg');">           
        <div class="row ps-5 px-5">   
           <div class="w-100">
            <div class="card shadow mb-4 ">                            
                <table class="table">
                <div class="row">
                    <div class="col-10">
                        <div class="fs-4 fw-bold text-sm-end col-8 ">Lista dos melhores trabalhadores</div>
                    </div>                 
                    <div class="col-2 text-sm-end">
                        <a href="form_tarefa" class="btn btn-success fw-bold  " tabindex="-1" role="button" aria-disabled="true">+</a>
                    </div>
                </div>
                
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Apelido</th>
                        <th scope="col">User</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                    </tr>
                    </tbody>
                    <div class="row mb-3"></div>
                </table>               
                </div>                
                </div>                                                  

@endsection




                                    
    
        
                                    











