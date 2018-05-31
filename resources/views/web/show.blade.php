@section('pageTitle', 'Web Record Data')
@extends('layout.mainlayout')
@section('content')
<h2>Web Testing Data</h2>
<div id="app">
</div>
<table class="table table-bordered">
    <tbody>
        <tr>
            <th scope="row">Id</th>
            <td>{{ $item->id }}</td>
        </tr>
        <tr>
            <th scope="row">Developer</th>
            <td>{{ $item->developer }}</td>
        </tr>
    </tbody>
</table>
@endsection
