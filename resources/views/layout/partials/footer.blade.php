<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<!--<script src="{{ asset('js/app.js') }}"></script>-->
<script src="{{ mix('js/app.js') }}"></script>
<!-- Icons -->
<script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
<script>
    feather.replace()
</script>
<!-- jQuery -->
<script src="//code.jquery.com/jquery.js"></script>
<!-- DataTables -->
<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>
<!-- App scripts -->
@stack('scripts')
<script>
$(function() {
    $('#web-table').DataTable({
        processing: true,
        serverSide: true,
        pageLength: 12,
        order: [ [0, 'desc'] ],
        ajax: 'http://127.0.0.1:8000/get_datatable',
        columns: [
            {data: 'id'},
            {data: 'developer'},
            {data: 'projectName'},
            {data: 'projectNumber'},
            {data: 'commencementDate'},
            {data: 'competitionDate'},
            {data: 'totalRevesions'},
            {data: 'created_at'},
            {data: 'updated_at'},
            {data: 'action'},
        ]
    });
});
function deleter(id) {
    //var answer = confirm("Are you sure you want to delete")
    $.confirm({
        title: 'Confirm!',
        content: 'Are you sure want to delete item with id: '+id,
        buttons: {
            confirm: function () {
                $.ajax({
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        id: id,
                        _method: 'DELETE',
                        _token: "{{ csrf_token() }}",
                    },
                    url: "webdata/"+id,
                    success: function (data) {
                        $("#delete_" + id).parent().parent().fadeOut("fast");
                        //$.alert('Item with id: '+id+' has been deleted successfully');
                    },
                    error: function (data) {
                        console.log('Error:', data);
                        $.alert('An error occured while deleting id: '+id+' please check console log for errors');
                    }
                });
            },
            cancel: function () {
                //$.alert('Canceled!');
            },
        }
    });
}
</script>
