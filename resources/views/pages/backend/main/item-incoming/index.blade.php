@extends('layouts.backend.system.index', ['status' => 'true'])
@push('title', 'Item Incomings')

@push('content-head')
<th> Supplier </th>
<th> Category </th>
<th> Name </th>
<th> Description </th>
<th> Quantity </th>
<th> Size </th>
@endpush

@push('content-body')
{ data: 'id_suppliers' },
{ data: 'id_categories' },
{ data: 'name' },
{ data: 'description' },
{ data: 'quantity' },
{ data: 'size' },
@endpush
