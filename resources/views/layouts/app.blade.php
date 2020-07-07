

<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="">
    <meta property="twitter:site" content="">
    <meta property="twitter:creator" content="">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Ictiopesca">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="">
    <meta property="og:description" content="">
    <title>@yield('title') - Ictiopesca</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/css/main.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css">
    
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    
    
    <meta name="csrf-token" content="{{ csrf_token() }}">
<!--         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" /> -->
        <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
<!--         <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet"> -->

    
  </head>
  <body class="app sidebar-mini">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="/home">Ictiopesca</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <li class="app-search">
          <input class="app-search__input" type="search" placeholder="Pesquisar">
          <button class="app-search__button"><i class="fa fa-search"></i></button>
        </li>
        <!--Notification Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Show notifications"><i class="fa fa-bell-o fa-lg"></i></a>
          <ul class="app-notification dropdown-menu dropdown-menu-right">
            <li class="app-notification__title">You have 4 new notifications.</li>
            <div class="app-notification__content">
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                  <div>
                    <p class="app-notification__message">Lisa sent you a mail</p>
                    <p class="app-notification__meta">2 min ago</p>
                  </div></a></li>
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
                  <div>
                    <p class="app-notification__message">Mail server not working</p>
                    <p class="app-notification__meta">5 min ago</p>
                  </div></a></li>
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
                  <div>
                    <p class="app-notification__message">Transaction complete</p>
                    <p class="app-notification__meta">2 days ago</p>
                  </div></a></li>
              <div class="app-notification__content">
                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                    <div>
                      <p class="app-notification__message">Lisa sent you a mail</p>
                      <p class="app-notification__meta">2 min ago</p>
                    </div></a></li>
                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
                    <div>
                      <p class="app-notification__message">Mail server not working</p>
                      <p class="app-notification__meta">5 min ago</p>
                    </div></a></li>
                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
                    <div>
                      <p class="app-notification__message">Transaction complete</p>
                      <p class="app-notification__meta">2 days ago</p>
                    </div></a></li>
              </div>
            </div>
            <li class="app-notification__footer"><a href="#">See all notifications.</a></li>
          </ul>
        </li>
        <!-- User Menu-->
        @auth
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href="*"><i class="fa fa-cog fa-lg"></i> Configurações</a></li>
            <li><a class="dropdown-item" href="*"><i class="fa fa-user fa-lg"></i> Perfil</a></li>
            <li><a class="dropdown-item" href="{{ route('logoutt') }}" onclick="event.preventDefault();  document.getElementById('logout-form').submit();"><i class="fa fa-sign-out fa-lg"></i>Sair</a></li>
                <form id="logout-form" action="{{ route('logoutt') }}" method="POST" style="display: none;">
                  @csrf
                </form>
            
          </ul>
        </li>
        @endauth
      </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
<!--       <div class="app-sidebar__user"> -->
<!--      fotinha -->
<!--       </div> -->
      <ul class="app-menu">
        <li>
        <a class="app-menu__item" href="/home">
        <i class="app-menu__icon fa fa-dashboard"></i>
        <span class="app-menu__label">Início</span>
        </a>
        </li>
        
        
         
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-file-text"></i><span class="app-menu__label">Perfil</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item active" href="{{route('usuarios.create')}}"><i class="icon fa fa-circle-o"></i>Usuário</a></li>
<!--             <li><a class="treeview-item" href="*"><i class="icon fa fa-circle-o"></i>Perfil</a></li> -->
          </ul>
        </li>
        
           <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-file-text"></i><span class="app-menu__label">Admin</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item active" href="{{route('pesc_especies.create')}}"><i class="icon fa fa-circle-o"></i>Espécies</a></li>
              <li><a class="treeview-item active" href="{{route('pesc_localidades.create')}}"><i class="icon fa fa-circle-o"></i>Localidades</a></li>
<!--             <li><a class="treeview-item" href="*"><i class="icon fa fa-circle-o"></i>Perfil</a></li> -->
          </ul>
        </li>

 
<!--         <li class="treeview is-expanded"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-file-text"></i><span class="app-menu__label">Pages</span><i class="treeview-indicator fa fa-angle-right"></i></a> -->
<!--           <ul class="treeview-menu"> -->
<!--             <li><a class="treeview-item active" href="blank-page.html"><i class="icon fa fa-circle-o"></i> Blank Page</a></li> -->
<!--             <li><a class="treeview-item" href="page-login.html"><i class="icon fa fa-circle-o"></i> Login Page</a></li> -->
<!--             <li><a class="treeview-item" href="page-lockscreen.html"><i class="icon fa fa-circle-o"></i> Lockscreen Page</a></li> -->
<!--             <li><a class="treeview-item" href="page-user.html"><i class="icon fa fa-circle-o"></i> User Page</a></li> -->
<!--             <li><a class="treeview-item" href="page-invoice.html"><i class="icon fa fa-circle-o"></i> Invoice Page</a></li> -->
<!--             <li><a class="treeview-item" href="page-calendar.html"><i class="icon fa fa-circle-o"></i> Calendar Page</a></li> -->
<!--             <li><a class="treeview-item" href="page-mailbox.html"><i class="icon fa fa-circle-o"></i> Mailbox</a></li> -->
<!--             <li><a class="treeview-item" href="page-error.html"><i class="icon fa fa-circle-o"></i> Error Page</a></li> -->
<!--           </ul> -->
<!--         </li> -->


<!--         <li><a class="app-menu__item" href="docs.html"><i class="app-menu__icon fa fa-file-code-o"></i><span class="app-menu__label">Docs</span></a></li> -->
      </ul>
    </aside>
    <main class="app-content">
     @yield('content')
    </main>
    
    <!-- Essential javascripts for application to work-->
    <script src="{{url('/')}}/js/jquery-3.3.1.min.js"></script>
    <script src="{{url('/')}}/js/popper.min.js"></script>
    <script src="{{url('/')}}/js/bootstrap.min.js"></script>
    <script src="{{url('/')}}/js/main.js"></script>
    
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    
    
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js"></script>
        <script>
            error=false
            
            function validate()
            {
                if(document.userForm.localidade.value !='' )
                	document.userForm.btnsave.disabled=false
                else
                	document.userForm.btnsave.disabled=true
            }
        </script>
    
    
    <!-- Page specific javascripts-->
    
    
    <!-- Google analytics script-->
    <script type="text/javascript">



    $(document).ready(function () {
    var table = $('.data-table').DataTable({
    select: false,
    searching: true,
    processing: true,
    serverSide: true,
    ajax: "{{ route('pesc_localidades.index') }}",
    columns: [
    {data: 'id', name: 'id'},
    {data: 'localidade', name: 'localidade'},
    ]
    });


    var data = [
        [
            "Tiger Nixon",
           
        ],
        [
            "Garrett Winters",
           
        ]
    ]

    $(function() {
  		$('.data-table1').DataTable({
  		"searching": true,
        "processing": false,
        "serverSide": true,
        dom: 'Bfrtip',
        buttons: [
        	{
            	extend: 'excelHtml5',
            	
        	},
        	
        ],
        ajax: "{{ route('pesc_mercados.index') }}",
        columns: [
          			  { data: 'id', name: 'id' },
//             		  { data: 'cat', name: 'cat' },
//             		  { data: 'localidade', name: 'localidade' },
//             		  { data: 'ct', name: 'ct' },
//             		  { data: 'cp', name: 'cp' },
//             		  { data: 'pt', name: 'pt' },
//             		  { data: 'cab', name: 'cab' },
//             		  { data: 'sexo', name: 'sexo' },
//             		  { data: 'cresc', name: 'cresc' },
//             		  { data: 'gg', name: 'gg' },
//             		  { data: 'gr', name: 'gr' },
//             		  { data: 'data', name: 'data' },
//             		  { data: 'cf', name: 'cf' },
//             		  { data: 'gen', name: 'gen' },
//             		  { data: 'od', name: 'od' },
//             		  { data: 'ap', name: 'ap' },
            		 
        		],
        		
        		 language: {
        		        processing:     "Carregando dados...",
        		        search:         "Procurar&nbsp;:",
        		        loadingRecords: "Carregando dados...",
        		        info:           "Mostrando _START_ a _END_ de _TOTAL_ totais de dados",
        		        infoEmpty:      "Mostrando 0 a 0 de 0 totais de dados",
        		        zeroRecords:    "Nenhum resultado encontrado",
        		        emptyTable:     "Nenhum resultado encontrado",
        		        infoFiltered:   "(filtrado de _MAX_ totais de dados)",
        		        paginate: {
        		            first:      "Primeira",
        		            previous:   "Anterior",
        		            next:       "Próxima",
        		            last:       "Última"
        		        },
        		        },
        		       
        		   
		
 			 })
        });

    
      if(document.location.hostname == 'pratikborsadiya.in') {
      	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      	ga('create', 'UA-72504830-1', 'auto');
      	ga('send', 'pageview');
      }

    });

    </script>
    
    
  </body>
</html>

