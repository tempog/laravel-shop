<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-static-top">
    <div class="container">
        <!-- Branding Image -->
        <a href="{{ url('/') }}" class="navbar-brand">
            <img src="data:image/png;base64,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"
                 height="35px" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav navbar-right">
                <!-- 登录注册链接开始 -->
                @guest
                <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">登录</a></li>
                <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">注册</a></li>
                @else
                <li class="nav-item"><a href="{{ route('cart.index') }}" class="nav-link mt-1"><i class="fa fa-shopping-cart"></i> 购物车 <strong>{{ count(Auth::user()->cartItems()->get()) }}</strong> 件</a></li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="https://avatars1.githubusercontent.com/u/22145534?s=460&v=4"
                             class="img-responsive img-circle" width="30px" height="30px">
                        {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a href="{{ route('user_addresses.index') }}" class="dropdown-item">收货地址</a>
                        <a href="{{ route('products.favorites') }}" class="dropdown-item">我的收藏</a>
                        <a href="#" class="dropdown-item" id="logout"
                           onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            退出登录
                        </a>
                        <form action="{{ route('logout') }}" id="logout-form" method="POST" style="display:none;">
                            {{ csrf_field() }}
                        </form>
                    </div>
                </li>
                @endguest
                <!-- 登录注册链接结束 -->
            </ul>
        </div>
    </div>
</nav>
