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
<!-- App scripts -->
@stack('scripts')
<script>
$(function() {
    $('#users-table').DataTable({
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
            {data: 'created_at'},
            {data: 'updated_at'},
            {data: 'action'},
        ]
    });
});
</script>
