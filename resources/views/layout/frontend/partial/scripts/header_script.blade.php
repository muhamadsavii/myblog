<script type="text/javascript">
	
		function categori(dt){
			var id = dt;
			var base_url = {!! json_encode(url('/')) !!};
			alert(id);
			$.ajax({
			    url: base_url+'/content_article_all',
			    type: "GET",
			    data:{
			    	id : id,
			    },
			    async:true,
			    processData: true,
			    complete:function() {
			    },
			    success: function (data) {
			    	$('#cd-timeline').html(data);
			    },
			    error: function(response) {
			    }
			});
		};
		
	
</script>