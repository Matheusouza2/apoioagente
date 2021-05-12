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
                    <img src="{{ asset('images/avatar.png') }}" alt="profile">
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
                    <span class="text-secondary text-small">Project Manager</span>
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
                <a class="nav-link" target="_blank" href="https://app.celcoin.com.br/Usuario/LoginUsuario/">
                    <span class="menu-title">Celcoin</span>
                    <i class="fal fa-comment-dollar menu-icon"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" target="_blank" href="https://app2.celcoin.com.br/">
                    <span class="menu-title">Celcoin <sup>Nova Pagina</sup></span>
                    <i class="fal fa-comment-dollar menu-icon"></i>
                </a>
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
                <a class="nav-link" href="/agente/netflix">
                <span class="menu-title">Revenda Netflix <sup>Em breve</sup></span>
                <i class="fal fa-tv menu-icon"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="pages/forms/basic_elements.html">
                <span class="menu-title">Sistema Desktop <sup>Em breve</sup></span>
                <i class="fal fa-laptop menu-icon"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="pages/charts/chartjs.html">
                <span class="menu-title">Comunidade de Agentes</span>
                <i class="fal fa-comments-dollar menu-icon"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="pages/tables/basic-table.html">
                <span class="menu-title">Suporte <sup>Em breve</sup></span>
                <i class="fal fa-user-headset menu-icon"></i>
                </a>
            </li>
            @if (Auth::user()->permissao == 'M')
                <li class="nav-item">
                    <a class="nav-link" href="pages/tables/basic-table.html">
                    <span class="menu-title">Controle de Usuários</span>
                    <i class="fal fa-users menu-icon"></i>
                    </a>
                </li>    
            @endif
        @endif
    </ul>
  </nav>