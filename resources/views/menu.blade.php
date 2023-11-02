<div class="area"></div><nav class="main-menu">
    <ul>
        <li>
            <a href="/dash">
                <i class="fa fa-home fa-2x"></i>
                <span class="nav-text">
                              Dashboard
                          </span>
            </a>

        </li>
        <li class="has-subnav">
            <a href="/dashMarcas">
                <i class="fa fa-users fa-2x"></i>
                <span class="nav-text">
                              Gerenciar marcas
                          </span>

            </a>
            <input hidden="hidden" class="link" value="{{ env('APP_URL') }}"></input>

        </li>
        <li class="has-subnav">
            <a href="/dashModelos">
                <i class="fa fa-users fa-2x"></i>
                <span class="nav-text">
                              Gerenciar modelos
                          </span>

            </a>

        </li>
        <li class="has-subnav">
            <a href="/dashVeiculos">
                <i class="fa fa-users fa-2x"></i>
                <span class="nav-text">
                              Gerenciar veiculos
                          </span>

            </a>

        </li>

    </ul>

    <ul class="logout">
        <li>
            <a >
                <i class="fa fa-power-off fa-2x"></i>
                <span class="nav-text" onclick="logoutFuncion()">
                              Logout
                          </span>
            </a>
        </li>
    </ul>
</nav>

<script>
    function logoutFuncion() {

        const link = document.getElementsByClassName("link")[0].value;

        const url = link+"/api/logout";
        $.ajax({
            url: url,
            type: 'POST',
            headers: {
                "Content-Type": "application/x-www-form-urlencoded",
                "Authorization": "Bearer "+localStorage.getItem('authToken')
            },

            success: function () {
                window.location.href = link+'/login';
            },
            error: function () {
                console.log('erro do token');
                window.location.href = link+'/login';
            },
        });

    }
</script>

<style>
    @import url(//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css);

    @import url(https://fonts.googleapis.com/css?family=Titillium+Web:300);
    .fa-2x {
        font-size: 2em;
    }
    .fa {
        position: relative;
        display: table-cell;
        width: 60px;
        height: 36px;
        text-align: center;
        vertical-align: middle;
        font-size:20px;
    }
    .a{

    }


    .main-menu:hover,nav.main-menu.expanded {
        width:250px;
        overflow:visible;
    }

    .main-menu {
        background:#212121;
        border-right:1px solid #e5e5e5;
        position:fixed;
        top:0;
        bottom:0;
        height:100%;
        left:0;
        width:60px;
        overflow:hidden;
        -webkit-transition:width .05s linear;
        transition:width .05s linear;
        -webkit-transform:translateZ(0) scale(1,1);
        z-index:1000;
    }

    .main-menu>ul {
        margin:7px 0;
    }

    .main-menu li {
        position:relative;
        display:block;
        width:250px;
    }

    .main-menu li>a {
        position:relative;
        display:table;
        border-collapse:collapse;
        border-spacing:0;
        color:#999;
        font-family: arial;
        font-size: 14px;
        text-decoration:none;
        -webkit-transform:translateZ(0) scale(1,1);
        -webkit-transition:all .1s linear;
        transition:all .1s linear;

    }

    .main-menu .nav-icon {
        position:relative;
        display:table-cell;
        width:60px;
        height:36px;
        text-align:center;
        vertical-align:middle;
        font-size:18px;
    }

    .main-menu .nav-text {
        position:relative;
        display:table-cell;
        vertical-align:middle;
        width:190px;
        font-family: 'Titillium Web', sans-serif;
    }

    .main-menu>ul.logout {
        position:absolute;
        left:0;
        bottom:0;
    }

    .no-touch .scrollable.hover {
        overflow-y:hidden;
    }

    .no-touch .scrollable.hover:hover {
        overflow-y:auto;
        overflow:visible;
    }

    a:hover,a:focus {
        text-decoration:none;
    }

    nav {
        -webkit-user-select:none;
        -moz-user-select:none;
        -ms-user-select:none;
        -o-user-select:none;
        user-select:none;
    }

    nav ul,nav li {
        outline:0;
        margin:0;
        padding:0;
    }
    a{
        color: white !important;
    }

    .main-menu li:hover>a,nav.main-menu li.active>a,.dropdown-menu>li>a:hover,.dropdown-menu>li>a:focus,.dropdown-menu>.active>a,.dropdown-menu>.active>a:hover,.dropdown-menu>.active>a:focus,.no-touch .dashboard-page nav.dashboard-menu ul li:hover a,.dashboard-page nav.dashboard-menu ul li.active a {
        color:#fff;
        background-color:#000000;
    }
    .area {
        float: left;
        background: #e2e2e2;
        width: 100%;
        height: 100%;
    }
    @font-face {
        font-family: 'Titillium Web';
        font-style: normal;
        font-weight: 300;
        src: local('Titillium WebLight'), local('TitilliumWeb-Light'), url(http://themes.googleusercontent.com/static/fonts/titilliumweb/v2/anMUvcNT0H1YN4FII8wpr24bNCNEoFTpS2BTjF6FB5E.woff) format('woff');
    }

</style>
