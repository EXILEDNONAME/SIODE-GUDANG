@extends('layouts.backend.system.index', ['status' => 'true'])
@push('title', 'Stocks')

@push('content-head')
<th> Category </th>
<th> Name </th>
<th> Description </th>
@endpush

@push('content-body')
{ data: 'id_categories' },
{ data: 'name' },
{ data: 'description' },
@endpush
