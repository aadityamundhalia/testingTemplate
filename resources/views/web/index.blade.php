@section('pageTitle', 'Web Data')
@extends('layout.mainlayout')
@section('content')
<h2>Web Testing Data</h2>
<div id="app">
    <a href="/export" class="btn btn-dark">Export</a>
    <br><br>
    <div class="table-responsive">
        {{-- $dataTable->table() --}}
        <table class="table thead-dark" id="web-table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Developer Name</th>
                <th scope="col">Project Name</th>
                <th scope="col">Project Number</th>
                <th scope="col">Commencement Date</th>
                <th scope="col">Competition Date</th>
                <th scope="col">Total Reveisons</th>
                <th scope="col">Summary</th>
                <th scope="col">created_at</th>
                <th scope="col">updated_at</th>
                <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>
@endsection
