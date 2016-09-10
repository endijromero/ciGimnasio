<div class="navbar-fixed">
      <nav>
	    <div class="nav-wrapper">
	      
	      	<ul class="left gs-menu-left-item">
	      		<li>
	      			<a href="#!">GR Gimnasio</a>
	      		</li>
	      		<li>
	      			<form>
				        <div class="input-field">
				          <input id="search" type="search" required>
				          <label for="search"><i class="fa fa-search" aria-hidden="true"></i></label>
				        </div>
			      	</form>
	      		</li>
	      	</ul>

	     
	      
	      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
	      <ul class="right hide-on-med-and-down gs-menu-right-item">
	      	<li>
	      		<div>
	      			<i class="fa fa-envelope" aria-hidden="true"></i>
	      		</div>
	      	</li>
	      	<li>
	      		<div>
	      			<i class="fa fa-cog" aria-hidden="true"></i>
	      		</div>
	      	</li>
	      	<li>
	      		<div>
	      			<i class="fa fa-user" aria-hidden="true"></i>
	      		</div>
	      	</li>
	        <li>
	        	<?= anchor('admin/logeout', 'Logeout') ?>
	        </li>
	      </ul>
	      <ul class="side-nav" id="mobile-demo">
	        <li>
	        	<?= anchor('admin/logeout', 'Logeout') ?>
	        </li>
	      </ul>
	    </div>
	</nav>
</div>