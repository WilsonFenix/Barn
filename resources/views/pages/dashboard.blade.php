@extends('base')
dd

@section('body')
    <!-- Content Row -->
<div class="row" style="text-align: center;padding-left: 2% ;padding-right: 2%;">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            produção (Mensais)</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">Toneladas(campo calculado)</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                          Produção (Annual)</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">Toneladas(campo calculado)</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tarefas Feitas
                        </div>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                            </div>
                            <div class="col">
                                <div class="progress progress-sm mr-2">
                                    <div class="progress-bar bg-info" role="progressbar"
                                        style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Tarefas Planejadas</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

   <!--tarefas para hoje-->

   <div class="conteiner ">         
           <div class="row ps-5 px-5">   
              <div class="d-flex flex-column align-items-center flex-shrink-0 py-2" style="background-color: #74C69D; width: 100%;">              
                  <div class="card card border-success col-6">  
                      
                          <a href="#" ></a>
                              <span class="fs-3 fw-bold text-center py-3">Lista de tarefas de hoje</span>
                          </a>
                          <div class="list-group list-group-flush border-bottom scrollarea">
                          <a href="#" class="list-group-item list-group-item-action py-5 lh-tight" aria-current="true">
                              <div class="d-flex w-100 align-items-center justify-content-between">
                              <strong class="mb-1">tarefa 1</strong>
                              <small>$date</small>
                              </div>
                              <div class="col-10 mb-1 small">especificacoes</div>
                          </a>
                          <a href="#" class="list-group-item list-group-item-action py-5 lh-tight">
                              <div class="d-flex w-100 align-items-center justify-content-between">
                              <strong class="mb-1">tarefa 2</strong>
                              <small class="text-muted">$date</small>
                              </div>
                              <div class="col-10 mb-1 small">...</div>
                          </a>
                          <a href="#" class="list-group-item list-group-item-action py-5 lh-tight">
                              <div class="d-flex w-100 align-items-center justify-content-between">
                              <strong class="mb-1">tarefa 3</strong>
                              <small class="text-muted">$date</small>
                              </div>
                              <div class="col-10 mb-1 small">...</div>
                          </a>
                      
                          <a href="#" class="list-group-item list-group-item-action py-5 lh-tight" aria-current="true">
                              <div class="d-flex w-100 align-items-center justify-content-between">
                              <strong class="mb-1">tarefa 4</strong>
                              <small class="text-muted">$date</small>
                              </div>
                              <div class="col-10 mb-1 small">...</div>
                          </a>
                          
                          <a href="#" class="list-group-item list-group-item-action py-5 lh-tight" aria-current="true">
                              <div class="d-flex w-100 align-items-center justify-content-between ">
                              <strong class="mb-1">tarefa n</strong>
                              <small class="text-muted">$date</small>
                              </div>
                              <div class="col-10 mb-1 small">ficará a quantidade de tarefas programdas em tarefas</div>
                          </a>   
                          <div class="row pb-5"></div>                        
                       
                      </div>
                  </div>
              </div>
              <!-- Project Card Example -->
   <div class="conteiner  mb-3 col-6 p-5 ">
      <div class="card shadow mb-4">
          <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Projects</h6>
          </div>
          <div class="card-body">
              <h4 class="small font-weight-bold">projeto <span
                      class="float-right">20%</span></h4>
              <div class="progress mb-4">
                  <div class="progress-bar bg-danger" role="progressbar" style="width: 20%"
                      aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <h4 class="small font-weight-bold">projeto 2 <span
                      class="float-right">40%</span></h4>
              <div class="progress mb-4">
                  <div class="progress-bar bg-warning" role="progressbar" style="width: 40%"
                      aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <h4 class="small font-weight-bold">projeto 3<span
                      class="float-right">60%</span></h4>
              <div class="progress mb-4">
                  <div class="progress-bar" role="progressbar" style="width: 60%"
                      aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <h4 class="small font-weight-bold">projeto 4 <span
                      class="float-right">80%</span></h4>
              <div class="progress mb-4">
                  <div class="progress-bar bg-info" role="progressbar" style="width: 80%"
                      aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <h4 class="small font-weight-bold">projeto n<span
                      class="float-right">Complete!</span></h4>
              <div class="progress">
                  <div class="progress-bar bg-success" role="progressbar" style="width: 100%"
                      aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
          </div>
      </div>
  </div> 
          <div class="col-6">
              <table class="table">
                  <div class="fs-4 fw-bold text-center font">Lista dos melhores trabalhadores</div>
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
  </div>
<script src="/js/bootstrap.min.js"></script>
@endsection
