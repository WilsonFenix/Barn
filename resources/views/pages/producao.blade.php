@extends('base')
@section('body')
<title>registar Produção</title>

  </head>
    <body>
      <div class="container pt-4">
        <div class="card shadow" style="height: 100%;">
        <div class="row pt-5 " style="background-color:darkgray;">
      
  

        <div class="row ps-5 px-5 w-100">              
           <div class=" card shadow mb-4 -d-flex flex-column align-items-center flex-shrink-0 py-2 border border-dark" style="background-color: #74C69D; width: 100%;">                 
               <h2 class="title text-center py-lg-5 text-success"> <b>  Registe a produção</b> </h2>
                <div class="row justify-content-center align-items-center w-75">
                    <div class=" align-content-center">
                      <form data-toggle="validator" role="form">
                        <div class="form-group y-2" >
                          <label for="trabalhador_nome"></label>
                            <input class="form-control" type="text" name="trabalhador_nome" placeholder="Quantidade em toneladas..." required>
                        </div>
  
                        <div class="form-group">
                          <label for="salário_base"></label>
                          <select required id="salário_base" name="salário_base" class="form-control" aria-required="true">
                            <option value="">O trabalhador...</option>
                          <option value=""></option>
                          <option value=""></option>
                          <option value=""></option>
                          </select>
                      </div> 
                      
                      <div class="form-group">
                        <label for="salário_base"></label>
                        <select required id="salário_base" name="salário_base" class="form-control" aria-required="true">
                          <option value="">A parcela...</option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                        </select>
                    </div> 
                    <div class="form-group">
                        <label for="salário_base"></label>
                        <select required id="salário_base" name="salário_base" class="form-control" aria-required="true">
                          <option value="">O estado...</option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                        </select>
                    </div>   
                    
                        <div class="pt-3 text-center">
                          <label for="diaa"></label>
                          <input type="date" id="bday" name="diaa" required pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}">
                          <span class="validity">Data de colheita</span>
                        </div>


                        <div class="row text-center">
                            <div class="form-group text-center py-4 text-light">
                              <button class="bg bg-success" type="submit"><b>Registar</b></button>
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
   
   
    

      
  


 