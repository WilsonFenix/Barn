


@extends('base')
@section('body')
<title>registo dos Campos</title>

</head>
<body>

  <div class="card border-sucess">
  <div class="container pt-4">
   <!--posso usar aqui para colocar uma bg-image-->
    <div class="row">
      <div class="col">
        <div class="card shadow" style="heigth:100% ; width:100%">        
        <div class="row ps-5 px-5 pt-3">              
          <div class=" card shadow mb-4 -d-flex flex-column align-items-center flex-shrink-0 py-2 border border-dark" style="background-color: #74C69D; width: 100%;">                 
              <h2 class="title text-center py-lg-5 text-success"> <b>  Registe um novo campo </b> </h2>
               <div class="row justify-content-center align-items-center w-75">
                   <div class=" align-content-center">
                     <form data-toggle="validator" role="form">
                       <div class="form-group y-2" >
                         <label for="trabalhador_nome"></label>
                           <input class="form-control" type="text" name="trabalhador_nome" placeholder="Digite o nome do campo..." required>
                       </div>
 
                       <div class="form-group">
                         <label for="trabalhador_bi"></label>
                           <input class="form-control" type="text" name="trabalhador_bi" placeholder="Digite o numero do lote..." required minlength="7">
                           <span class="help-block">Mínimo de seis (6) digitos</span>
                       </div>
 
                       <div class="form-group">
                         <label for="trabalhador_bi"></label>
                           <input class="form-control" type="text" name="trabalhador_n_contrato" placeholder="Digite o endereço do campo..."required minlength="7">
                       </div>
 
                       <div class="form-group">
                         <label for="salário_base"></label>
                         <select required id="salário_base" name="salário_base" class="form-control" aria-required="true">
                           <option value="">Escolha uma opção</option>
                         <option value="100">1 hectar</option>
                         <option value="200">2 hectares</option>
                         <option value="300">3 hectar</option>
                         </select>
                     </div>                
                       
                             <!--aqui vão entrar duas FK-->
                       <div class="form-group">
                         <label for="user_id"></label>
                           <input class="form-control" type="email" name="user_id" placeholder="Digite o User id do trabalhador...">
                       </div>
                     <div class="row">
                       <div class="form-group">
                         <label for="estado" aria-placeholder="escolha"></label>
                           <select required id="estado" name="estado" class="form-control">
                               <option value="">Escolha uma opção</option>
                             <option value="estagiario(a)">5 ton(a)</option>
                             <option value="efetivo(a)">10 ton(a)</option>
                             <option value="coordenador(a)">15 ton(a)</option>
                           </select>                          
                         </div>
                                                 
                           <!--fim FK-->
                     <div class="row text-center">
                       <div class="form-group text-center py-4 text-light">
                         <button class="bg bg-success" type="submit"><b>registar</b></button>
                       </div>               
                       </form>
                   </div>
                   </div>
                 </div>
               </div>            
             </div> 
           </div>    
             
            
              </div>
         </div>
         
       <div class="col">
        
        <div class="card shadow" style="heigth:100% ; width:100%">        
          <div class="row ps-5 px-5 pt-3">              
            <div class=" card shadow mb-4 -d-flex flex-column align-items-center flex-shrink-0 py-2 border border-dark" style="background-color: #74C69D; width: 100%;">                 
                <h2 class="title text-center py-lg-5 text-success"> <b>  Registe uma nova parcela </b> </h2>
                 <div class="row justify-content-center align-items-center w-75">
                     <div class=" align-content-center">
                       <form data-toggle="validator" role="form">
                         <div class="form-group y-2" >
                           <label for="trabalhador_nome"></label>
                             <input class="form-control" type="text" name="trabalhador_nome" placeholder="Digite o lote da parcela..." required>
                         </div>
                           
                         <div class="form-group">
                           <label for="salário_base"></label>
                           <select required id="salário_base" name="salário_base" class="form-control" aria-required="true">
                             <option value="">Escolha uma opção</option>
                           <option value="100">1 hectar</option>
                           <option value="200">500 km</option>
                           <option value="300">250 km</option>
                           </select>
                       </div>    
                       
                       <div class="form-group">
                        <label for="trabalhador_bi"></label>
                          <input class="form-control" type="text" name="trabalhador_n_contrato" placeholder="Digite a cultura..."required minlength="7">
                          <span class="help-block">Nos ultimos 6 meses</span>
                        </div>
                         
                               <!--aqui vão entrar duas FK-->
                      <div class="row">
                         <div class="form-group">
                           <label for="estado" placeholder=""></label>
                             <select required id="estado" name="estado" class="form-control">
                                 <option class="text-muted" value="">Escolha a produção</option>
                               <option value="estagiario(a)">1 ton(a)</option>
                               <option value="efetivo(a)">2 ton(a)</option>
                               <option value="coordenador(a)">3 ton(a)</option>
                              </select>                       
                           </div>

                           <div class="row">
                            <div class="form-group">
                              <label for="estado" aria-placeholder="escolha"></label>
                                <select required id="estado" name="estado" class="form-control">
                                    <option value="">Escolha o campo</option>
                                  <option value=""></option>
                                  <option value=""></option>
                                  <option value=""></option>
                                </select>                          
                              </div>
                              <div class="row">
                                <div class="form-group">
                                  <label for="estado" aria-placeholder="escolha"></label>
                                    <select required id="estado" name="estado" class="form-control">
                                        <option value="">Escolha o estado</option>
                                      <option value=""></option>
                                      <option value=""></option>
                                      <option value=""></option>
                                    </select>                          
                                  </div>
                                                   
                             <!--fim FK-->
                       <div class="row text-center">
                         <div class="form-group text-center py-4 text-light">
                           <button class="bg bg-success" type="submit"><b>registar</b></button>
                         </div>               
                         </form>
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




  



