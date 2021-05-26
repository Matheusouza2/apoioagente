<div class="row">
    <div class="col-md-4 stretch-card grid-margin">
      <div class="card bg-gradient-danger card-img-holder text-white">
        <div class="card-body">
          <img src="{{ asset('images/circle.svg') }}" class="card-img-absolute" alt="circle-image" />
          <h4 class="font-weight-normal mb-3">Ganhos do mês <i class="fal fa-chart-line fa-2x float-right"></i>
          </h4>
          <h2 class="mb-5">R$ {{ number_format($ValorGanho, 2, ',', '.') }}</h2>
          <h6 class="card-text">Crescimento de 100% <sup>*Comparado com o mês anterior</sup></h6>
        </div>
      </div>
    </div>
    <div class="col-md-4 stretch-card grid-margin">
      <div class="card bg-gradient-info card-img-holder text-white">
        <div class="card-body">
          <img src="{{ asset('images/circle.svg') }}" class="card-img-absolute" alt="circle-image" />
          <h4 class="font-weight-normal mb-3">Sua jornada <sup>Em breve</sup><i class="fad fa-badge-dollar text-white fa-2x float-right"></i>
          </h4>
          <div class="progress mb-5 mt-4">
            <div class="progress-bar bg-secondary" role="progressbar" style="width: 0%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <h6 class="card-text">100% para o próximo nível</h6>
        </div>
      </div>
    </div>
    <div class="col-md-4 stretch-card grid-margin">
      <div class="card bg-gradient-success card-img-holder text-white">
        <div class="card-body">
          <img src="{{ asset('images/circle.svg') }}" class="card-img-absolute" alt="circle-image" />
          <h4 class="font-weight-normal mb-3">Ganhos Totais <sup>Em breve</sup> <i class="fal fa-usd-circle fa-2x float-right"></i>
          </h4>
          <h2 class="mb-5">R$ 0,00</h2>
          <h6 class="card-text">Increased by 5%</h6>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12 col-md-12 col-lg-8 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="clearfix">
            <h4 class="card-title float-left">Gestão de Comissões</h4>
          </div>
          <div class="row">
            <div class="col-lg-4">
              <div class="form-group">
                <label class="form-control-label" for="valor">Valor Ganho</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">R$</span>
                  </div>
                  <input type="text" class="form-control" placeholder="Valor" id="valor" onKeyPress="return(moeda(this,'.',',',event))" aria-label="Valor" aria-describedby="basic-addon1">
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <label class="form-control-label" for="nome">Categoria</label>
                <select name="" class="form-control" id="categoria">
                  <option value="Boleto">Boleto</option>
                  <option value="Recargas">Recargas</option>
                  <option value="Jogos">Jogos</option>
                  <option value="Sky">Sky</option>
                  <option value="Telesena">Telesena</option>
                  <option value="Consulta CPF/CNPJ">Consulta CPF/CNPJ</option>
                  <option value="Consulta Veicular">Consulta Veicular</option>
                  <option value="Passagens">Passagens</option>
                  <option value="Serviços Digitais">Serviços Digitais</option>
                  <option value="Outros">Outros</option>
                </select>
              </div>
            </div>
            <div class="col-lg-2">
              <div class="form-group">
                <button type="button" class="btn btn-primary" style="margin-top: 13%" onclick="inserirTable()">Adicionar</button>
              </div>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="table-responsive">
              <h4 class="float-left">Ganhos do dia</h4>
              <table class="table align-items-center table-flush">
                <thead class="">
                  <tr>
                    <th scope="col">Data</th>
                    <th scope="col">Movimentação</th>
                    <th scope="col">Valor Ganho</th>
                    <th scope="col">Excluir</th>
                    <th scope="col" hidden></th>
                  </tr>
                </thead>
                <tbody id="movimentacao">
                </tbody>
              </table>
              <img src="{{ asset('images/loading.gif') }}" style="display: block;margin-left: auto;margin-right: auto; width: 50px; height: 50px;" id="loading">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-md-12 col-lg-4 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Quer ganhar mais?</h4>
          <div class="row mt-4">
            <div class="col-sm-12 col-lg-12 mt-4">
              Você sabia que é possivel ganhar até <strong>0,55 centavos</strong> por transação no Celcoin? 
              <br>
              <br>
              Isso mesmo, se você tem um CNPJ e fazer o credenciamento com a Celcoin você pode receber 0,55 centavos por transação de Ficha de Compensasão(BOLETOS) e 0,35 centavos
              por Conta Convenio(Agua, Luz, Detran).
              <br>
              <br>
              Basta você ter um CNPJ, e não é tão dificil assim de conseguir um, se você quer saber como se tornar MEI e faturar mais com o Celcoin <a href="{{ route('queromei') }}"> Clica aqui </a>que eu 
              vou te ensinar a abrir um MEI e como gerenciar o mesmo, clientes com CNPJ terão acesso direto a um chat comigo para tirarem todas as duvidas, e eu vou deixar
              bem claro sobre como tudo funciona, sem enrolação. 

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Ganhos Mensais</h4>
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th> Mês Referência </th>
                  <th> Valor </th>
                  <th> Detalhes </th>
                </tr>
              </thead>
              <tbody id="mesTable">
              </tbody>
            </table>
            <img src="{{ asset('images/loading.gif') }}" style="display: block;margin-left: auto;margin-right: auto; width: 50px; height: 50px;" id="loadingMes">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-7 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Metas</h4>
          <small>Em breve você poderá definir metas para alcançar com suas comissões</small>
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th> # </th>
                  <th> Name </th>
                  <th> Due Date </th>
                  <th> Progress </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td> 1 </td>
                  <td> Herman Beck </td>
                  <td> May 15, 2015 </td>
                  <td>
                    <div class="progress">
                      <div class="progress-bar bg-gradient-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td> 2 </td>
                  <td> Messsy Adam </td>
                  <td> Jul 01, 2015 </td>
                  <td>
                    <div class="progress">
                      <div class="progress-bar bg-gradient-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td> 3 </td>
                  <td> John Richards </td>
                  <td> Apr 12, 2015 </td>
                  <td>
                    <div class="progress">
                      <div class="progress-bar bg-gradient-warning" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td> 4 </td>
                  <td> Peter Meggik </td>
                  <td> May 15, 2015 </td>
                  <td>
                    <div class="progress">
                      <div class="progress-bar bg-gradient-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td> 5 </td>
                  <td> Edward </td>
                  <td> May 03, 2015 </td>
                  <td>
                    <div class="progress">
                      <div class="progress-bar bg-gradient-danger" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td> 5 </td>
                  <td> Ronald </td>
                  <td> Jun 05, 2015 </td>
                  <td>
                    <div class="progress">
                      <div class="progress-bar bg-gradient-info" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-5 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title text-white">Todo</h4>
          <div class="add-items d-flex">
            <input type="text" class="form-control todo-list-input" placeholder="What do you need to do today?">
            <button class="add btn btn-gradient-primary font-weight-bold todo-list-add-btn" id="add-task">Add</button>
          </div>
          <div class="list-wrapper">
            <ul class="d-flex flex-column-reverse todo-list todo-list-custom">
              <li>
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="checkbox" type="checkbox"> Meeting with Alisa </label>
                </div>
                <i class="remove fal fa-times-circle"></i>
              </li>
              <li class="completed">
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="checkbox" type="checkbox" checked> Call John </label>
                </div>
                <i class="remove fal fa-times-circle"></i>
              </li>
              <li>
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="checkbox" type="checkbox"> Create invoice </label>
                </div>
                <i class="remove fal fa-times-circle"></i>
              </li>
              <li>
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="checkbox" type="checkbox"> Print Statements </label>
                </div>
                <i class="remove fal fa-times-circle"></i>
              </li>
              <li class="completed">
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="checkbox" type="checkbox" checked> Prepare for presentation </label>
                </div>
                <i class="remove fal fa-times-circle"></i>
              </li>
              <li>
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="checkbox" type="checkbox"> Pick up kids from school </label>
                </div>
                <i class="remove far fa-times-circle"></i>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>