
<style>
</style>
<nav id="sidebar" class='mx-lt-5 bg-dark' >
		
		<div class="sidebar-list">

				<a href="index.php?page=home" class="nav-item nav-home"><span class='icon-field'><i class="fa fa-home"></i></span> Home</a>
				<a href="index.php?page=loans" class="nav-item nav-loans"><span class='icon-field'><i class="fa fa-file-invoice-dollar"></i></span> Loans</a>	
				<a href="index.php?page=payments" class="nav-item nav-payments"><span class='icon-field'><i class="fa fa-money-bill"></i></span> Payments</a>
				<a href="index.php?page=borrowers" class="nav-item nav-borrowers"><span class='icon-field'><i class="fa fa-user-friends"></i></span> Loan Application</a>
				<a href="index.php?page=Transaction" class="nav-item nav-plan"><span class='icon-field'><i class="fa fa-list-alt"></i></span> Transaction</a>	
				<a href="index.php?page=Bank-Reconciliation" class="nav-item nav-Bank_Reconciliation"></i></span> Bank-Reconciliation</a>		
				<?php if($_SESSION['login_type'] == 1): ?>
				<a href="index.php?page=users" class="nav-item nav-users"><span class='icon-field'><i class="fa fa-users"></i></span> Users</a>
				
			<?php endif; ?>
		</div>

</nav>
<script>
	$('.nav-<?php echo isset($_GET['page']) ? $_GET['page'] : '' ?>').addClass('active')
</script>
