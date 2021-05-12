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
                <p>Algumas mudanças precisaram ser realizadas para a adaptação do sistema nos celulares que não estava funcionando muito bem, o visual também não estava me agradando então a mudança só trouxe melhorias.</p>
                <p>Devido ao baixo nível de engajamento na comunidade nós tivemos que restringir a página para pessoas cadastradas. <br> Não, ela não será paga nem hoje, nem amanhã, nem nunca.
                Você pode continuar desfrutando da plataforma de forma gratuita para gerir suas comissões e tudo mais. <br> Porém terá que realizar um rápido cadastro e realizar o seu login para 
                desfrutar de todas as ferramentas agora.</p>
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
                    <h4 class="card-title float-left">Novidades</h4>
                </div>
            </div>
        </div>
    </div>
</div>