<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        @if (!Auth::check())
            <li class="nav-item">
                <a class="nav-link" href="/">
                    <span class="menu-title">Início</span>
                    <i class="fal fa-home menu-icon"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#entrar">
                    <span class="menu-title">Entrar</span>
                    <i class="fal fa-sign-in-alt menu-icon"></i>
                </a>
            </li>
        @else
            <li class="nav-item nav-profile">
                <a href="#" class="nav-link">
                <div class="nav-profile-image">
                    @if (Auth::user()->foto != null)
                        <img src="{{ asset('images/avatar.png') }}" width="50%" class="rounded-circle" alt="">
                        <!--<img src="{{ asset('storage/images/'.Auth::user()->id.'/'.Auth::user()->foto) }}" width="40%" class="rounded-circle" alt="">-->
                    @else
                        <img src="{{ asset('images/avatar.png') }}" width="50%" class="rounded-circle" alt="">
                    @endif
                    <span class="login-status online"></span>
                    <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                    @php
                        $nomeExp = explode(" ",Auth::user()->nome);
                        if(count($nomeExp) >= 2){
                            $nome = $nomeExp[0].' '.$nomeExp[1];
                        }else{
                            $nome = $nomeExp[0];
                        }
                    @endphp
                    <span class="font-weight-bold mb-2">{{ $nome }}</span>
                    <span class="text-secondary text-small">Agente Celcoin</span>
                </div>
                <i class="fad fa-badge-dollar text-muted nav-profile-badge"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/">
                    <span class="menu-title">Início</span>
                    <i class="fal fa-home menu-icon"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#celcoin" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Celcoin</span>
                <i class="menu-arrow"></i>
                <i class="fal fa-comment-dollar menu-icon"></i>
                </a>
                <div class="collapse" id="celcoin">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" target="_blank" href="https://app.celcoin.com.br/Usuario/LoginUsuario/">Entrar</a></li>
                    <li class="nav-item"> <a class="nav-link" target="_blank" href="https://app2.celcoin.com.br/#/servicos">Todos os Serviços</a></li>
                    <li class="nav-item"> <a class="nav-link" target="_blank" href="https://app.celcoin.com.br/#/servicos/pagar_conta">Pagar Conta</a></li>
                    <li class="nav-item"> <a class="nav-link" target="_blank" href="https://app.celcoin.com.br/#/servicos/recarga_celular">Recarga de Celular</a></li>
                    <li class="nav-item"> <a class="nav-link" target="_blank" href="https://app.celcoin.com.br/#/relatorios/vendas">Comprovantes</a></li>
                    <li class="nav-item"> <a class="nav-link" target="_blank" href="https://app.celcoin.com.br/#/financas/deposito">Realizar Deposito</a></li>
                    <li class="nav-item"> <a class="nav-link" target="_blank" href="https://app.celcoin.com.br/#/financas/saque">Realizar Saque</a></li>
                    <li class="nav-item"> <a class="nav-link" target="_blank" href="https://app.celcoin.com.br/#/financas/transferencia">Realizar Transferencia</a></li>
                    
                </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Serviços</span>
                <i class="menu-arrow"></i>
                <i class="fal fa-browser menu-icon"></i>
                </a>
                <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="/agente/detran">Detran</a></li>
                    <li class="nav-item"> <a class="nav-link" href="/agente/energia">Energia</a></li>
                    <li class="nav-item"> <a class="nav-link" href="/agente/agua">Água</a></li>
                    <li class="nav-item"> <a class="nav-link" href="/agente/boleto">2ª Via de Boletos</a></li>
                    <li class="nav-item"> <a class="nav-link" href="/agente/fatura">2ª Via de Faturas</a></li>
                </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/agente/desktop">
                <span class="menu-title">Sistema Desktop <sup>Em breve</sup></span>
                <i class="fal fa-laptop menu-icon"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('comunidade') }}">
                <span class="menu-title">Comunidade de Agentes</span>
                <i class="fal fa-comments-dollar menu-icon"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('suporteView') }}">
                    <span class="menu-title">Suporte <sup>Em breve</sup></span>
                    <i class="fal fa-user-headset menu-icon"></i>
                </a>
            </li>
            @if (Auth::user()->cnpj != null)
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('soumei') }}">
                        <span class="menu-title">Sou MEI</span>
                        <i class="fal fa-store-alt menu-icon"></i>
                    </a>
                </li>
            @endif
            @if (Auth::user()->permissao == 'M')
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('controleUsuarios') }}">
                        <span class="menu-title">Controle de Usuários</span>
                        <i class="fal fa-users menu-icon"></i>
                    </a>
                </li>    
                
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('controleNotificacao') }}">
                        <span class="menu-title">Controle de Notificações</span>
                        <i class="fal fa-bells menu-icon"></i>
                    </a>
                </li>    
            @endif
            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}">
                    <span class="menu-title">Sair</span>
                    <i class="fal fa-sign-out menu-icon"></i>
                </a>
            </li>    
        @endif
    </ul>
  </nav>