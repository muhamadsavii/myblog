<script type="text/javascript">
	var base_url = {!! json_encode(url('/')) !!};

	$( document ).ready(function(e) {
		$.ajax({
		    url: base_url +'/content_article_all',
		    type: "GET",
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
		
		$(document).on('click', '.cd-read-more', function(){
			var id = $(this).attr('data-id');
			var categori = $(this).attr('data-categori');
			
			if(categori == 'cd-icon-picture.svg'){
				var url = base_url +'/content_article_image/'+ id;
			}else{
				var url = base_url +'/content_article/'+ id;
			}

			$.ajax({
			    url: url,
			    type: "GET",
			    async:true,
			    processData: true,
			    complete:function() {
			    },
			    success: function (data) {
			    	$('#cd-timeline').addClass('cd-container-before');
			    	$('#cd-timeline').addClass('display-none');
			    	$('.article-content').removeClass('display-none');
			    	$('.article-content').html(data);
			    },
			    error: function(response) {
			    }
			});
		})
	
	})
	
</script>