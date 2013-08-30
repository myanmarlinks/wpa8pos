	<div class="row fixed_top" id="breadcrumb">	
		<ol class="breadcrumb">		
			<li><button type="button" class="btn btn-sm btn-magenta" id="clickme"><i class="icon-reorder"></i> Menu</button></li>
			<li class="active">Home</li>
		</ol>
	</div>
	
	<script>
    $( '#clickme' ).click(function() {
        $( "#sidebar" ).toggle( "slide" );
      });
  	</script>