<script type="text/javascript">
	$( document ).ready(function(e) {
		
		$(document).on('click', '.cd-read-more', function(){
			var id = $(this).attr('data-id');
			var base_url = {!! json_encode(url('/')) !!};
			$.ajax({
			    url: base_url +'/content_article/'+ id,
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