<div class="row">
    <div class="col-sm-12 col-md-6 col-lg-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="clearfix">
                    <h4 class="card-title float-left">Olá Agente</h4>
                </div>
                <p>Seja bem-vindo ao primeiro sistema de apoio a comunidade de agentes do Celcoin.</p>
                <p>Se você veio pelo vídeo do <a href="https://www.youtube.com/channel/UCwM0Bh4sf0rxdnHsFk67DmA" target="_blank"> Marcello Rizzon</a>, não se preocupe a plataforma precisou passar por melhorias visuais mais continua a mesma.</p>
                <hr>
                <p>Se você tá acessando pelo celular e tá recebendo a mensagem de que a pagina não é segura, tenta acesso pelo link <a href="https://apoioagente.herokuapp.com">https://apoioagente.herokuapp.com</a></p>
                <p>Em alguns celulares e computadores estava aparecendo como site não seguro, mais isso era um erro no estilo da pagina, agora está tudo resolvido. <br>
                A plataforma continua grátis como sempre, e eu estou preparando o material para ganhar seus <strong>0,55 centavos</strong> por boleto pago no Celcoin, então espera só mais um pouco.
                <hr>
                <br>
                <h5>Vamos falar de coisas boas <strong>(NOVIDADES)</strong></h5>
                <ul class="list-arrow">
                    <li>Agora você terá tudo de novo compartilhado pelo Celcoin aqui na tela inicial.</li>
                    <li>Para os Microempreendedores Individuais (MEI) estará saindo um sistema de PDV(frente de caixa e controle de estoque).</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6 grid-margin stretch-card" id="entrar">
        <div class="card justify-content-center align-items-center">
            <div class="card-body">
                <div class="clearfix">
                    <h4 class="card-title text-center">Entrar</h4>
                </div>
                <form action="{{ route('login') }}" method="POST" class="mt-5 needs-validation" novalidate>
                    @csrf
                    <div class="row text-center">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="email">Login</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="E-mail" required>
                                <div class="invalid-feedback">
                                    Por favor verifique se o e-mail digitado é valido.
                                  </div>
                            </div>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="senha">Senha</label>
                                <input type="password" class="form-control" id="senha" name="password" minlength="0" placeholder="Senha" required>
                                <div class="invalid-feedback">
                                    Verifique se sua senha possui 8 ou mais caracteres
                                  </div>
                            </div>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col-12">
                            <button type="submit" class="btn btn-gradient-primary">Entrar</button>
                        </div>                        
                    </div>
                </form>
                <hr>
                <div class="row text-center">
                    <div class="col-12">
                        <button type="submit" data-target="#cadastro" data-toggle="modal" class="btn btn-inverse-info">Cadastre-se</button>
                    </div>
                    <div class="col-12 mt-5">
                        <h5>Importante</h5>
                        Todas as informações prestadas pelo Agente são criptografadas, mais para sua segurança nunca forneça senhas ou dados de acesso reais a qualquer conta sejá de e-mail ou de acesso ao proprio Celcoin
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Start Modal Exames-->
<div class="modal fade text-left" id="cadastro" tabindex="-1" aria-labelledby="myModalLabel160" style="display: none" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-color">
                <h5 class="modal-title white" id="myModalLabel160">
                    Cadastro de Agente
                </h5>
            </div>
            <div class="modal-body">
                <form action="{{ route('cadastro') }}" method="POST" class="needs-validation forms-sample" novalidate>
                    @csrf
                    <div class="row justify-content-center align-items-center">
                        <div class="form-group mb-3 col-8">
                            <label class="form-control-label" for="nome">Nome</label>
                            <input class="form-control" name="nome" type="text" id="nome" required>
                            <div class="invalid-feedback">Campo de preenchimento obrigatório</div>
                            
                        </div>
                        <div class="form-group mb-3 col-8">
                            <label class="form-control-label" for="email">E-mail</label>
                            <input class="form-control" name="email" type="email" id="email" required>
                            <div class="invalid-feedback">Campo de preenchimento obrigatório</div>
                            
                        </div>
                        <div class="form-group mb-3 col-8">
                            <label class="form-control-label" for="password">Senha</label>
                            <input class="form-control" name="password" type="password" minlength="8" id="password" required>
                            <div class="invalid-feedback">Campo de preenchimento obrigatório</div>
                        </div>
                        <div class="text-right">
                            <button type="button" class="btn btn-inverse-danger mt-4" data-dismiss="modal">
                                <span class="d-sm-block">Cancelar</span>
                            </button>
                            <button type="submit" class="btn btn-inverse-success ml-1 mt-4">
                                <span class="d-sm-block">Cadastrar</span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Modal Exames -->
<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="clearfix">
                    <div class="row">
                        <h4 class="card-title float-left">Novidades</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <p>Corre que tá acabando, a promoção dura só até o dia 04/04/2021</p>
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" data-interval="2500">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="{{ asset('images/news/1.jpg') }}" width="400px" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{ asset('images/news/2.jpg') }}" width="400px" alt="First slide">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <p>A Celcoin tirou a nova pagina do ar para algumas manutenções a mesma continua acessivel no link:  <a href="http://app2.celcoin.com.br/" target="_blank">Celcoin Nova Pagina</a></p>
                                <img src="{{ asset('images/news/nova_page.png') }}" class="d-block w-100" width="1000px">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>