<script>

$(function() {
    $('#users-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route("datatables-data") !!}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'email', name: 'email' },
            { data: 'created_at', name: 'created_at' },
            { data: 'updated_at', name: 'updated_at' }
        ]
    });
}),

$(document).on('click', '#create_article', function(){
    var base_url = {!! json_encode(url('/')) !!};
    $.ajax({
        url: base_url +'/article/create',
        type: "GET",
        async:true,
        processData: true,
        complete:function() {
        },
        success: function (data) {
            $('.content').html(data);
        },
        error: function(response) {
        }
    });
})


</script>