<header class="container-fluid">
	<div class="row">
		<div class="col-sm-5"><a href="index.php"><img src="../images/logo.png" alt="logomarca Health++" style="width: 200px padding: 10px"></a></div>
	</div>		
</header>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark menu">
	<div class="container-fluid">
		<ul class="navbar-nav mr-auto">
			<li <?php if ($paginaAtiva == 'cadastroFuncionario') echo "class='nav-item active'";?>>
        		<a class="nav-link" href="cadastroFuncionario.php">Novo Funcionário</a>
			</li>
			<li <?php if ($paginaAtiva == 'cadastroCliente') echo "class='nav-item active'";?>>
        		<a class="nav-link" href="cadastroCliente.php">Novo Cliente</a>
			</li>
			<li <?php if ($paginaAtiva == 'listarFuncionario') echo "class='nav-item active'";?>>
        		<a class="nav-link" href="listarFuncionario.php">Funcionários</a>
			</li>
			<li <?php if ($paginaAtiva == 'listarCliente') echo "class='nav-item active'";?>>
        		<a class="nav-link" href="listarCliente.php">Clientes</a>
			 </li>
			 <li <?php if ($paginaAtiva == 'cadastroImovel') echo "class='nav-item active'";?>>
        		<a class="nav-link" href="cadastroImovel.php">Novo Imóvel</a>
			 </li>
			 <li <?php if ($paginaAtiva == 'listarImoveis') echo "class='nav-item active'";?>>
        		<a class="nav-link" href="listarImoveis.php">Imóveis</a>
			 </li>
			 <li <?php if ($paginaAtiva == 'listarInteresses') echo "class='nav-item active'";?>>
        		<a class="nav-link" href="listarInteresses.php">Interesses Clientes</a>
			 </li>
			 <li <?php if ($paginaAtiva == 'listarContatos') echo "class='nav-item active'";?>>
        		<a class="nav-link" href="listarContatos.php">Mensagens</a>
     		</li>
		</ul>
		<ul class="nav navbar-nav navbar-right menu">
			<li ><a class="nav-link" href="logout.php">Logout</a></li>
		</ul>
	</div>
</nav>
