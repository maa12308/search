<header class="mb-4">
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
        {{-- トップページへのリンク --}}
        <a class="navbar-bland" href="/">title</a>
        
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav">
                @if (Auth::check())
                
                <li class="nav-item dropdown">
                   
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img class="rounded img-fluid" src="{{ Gravatar::get(Auth::user()->email, ['size' => 30]) }}" alt=""></a>
                    <ul class="dropdown-menu dropdown-menu-right">
                         <li>
                            <a href="{{ route('items.create') }}">
                                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                                検索する
                              </a>
                        </li>
                        {{-- ユーザ詳細ページへのリンク --}}
                        <li><a href="{{ route('users.show', Auth::user()->id) }}">マイページ</a></li>
                        <li class="dropdown-divider"></li>  
                        {{-- ログアウトへのリンク --}}
                        <li><a href="{{ route('logout.get') }}">ログアウト</a></li>
                    </ul>
                </ll>
                @else
                    {{-- ユーザ登録ページへのリンク --}}
                    <li><a href="{{ route('signup.get') }}">登録</a></li>
                    <li><a href="{{ route('login.get') }}">ログイン</a></li>
                @endif
            </ul>
        </div>
    </nav>
</header>