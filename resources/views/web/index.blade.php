@section('pageTitle', 'Web Data')
@extends('layout.mainlayout')
@section('content')
<h2>Web Testing Data</h2>
<button type="button" class="btn btn-dark">Export Excel</button>
<button type="button" class="btn btn-dark">Export CSV</button>
<button type="button" class="btn btn-dark">Export PDF</button>
<button type="button" class="btn btn-dark">Printable</button>
<br><br>
<div id="app">
</div>
<div class="table-responsive">
{{-- $dataTable->table() --}}
<table class="table thead-dark" id="users-table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Developer Name</th>
        <th scope="col">Project Name</th>
        <th scope="col">Project Number</th>
        <th scope="col">Commencement Date</th>
        <th scope="col">Competition Date</th>
        <th scope="col">created_at</th>
        <th scope="col">updated_at</th>
        <th scope="col">action</th>
        </tr>
    </thead>
    <tbody>
    </tbody>
</table>
</div>
@endsection
