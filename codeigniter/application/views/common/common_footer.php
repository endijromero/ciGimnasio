




<script type="text/javascript" src="<?= base_url('/assets/library/js/jquery.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('/assets/library/js/materialize.min.js') ?>"></script>

<script type="text/javascript">
	$(document).ready(function(){
		 $(".button-collapse").sideNav({
		 	menuWidth: 260
		 });
		 
		 $('ul.tabs').tabs();

		 $('.datepicker').pickadate({
		    selectMonths: true, // Creates a dropdown to control month
		    selectYears: 15 // Creates a dropdown of 15 years to control year
		  });

		 $('.modal-trigger').leanModal();
	})
</script>
</body>
</html>