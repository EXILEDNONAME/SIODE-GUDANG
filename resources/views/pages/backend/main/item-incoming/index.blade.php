@extends('layouts.backend.system.index', ['status' => 'true'])
@push('title', 'Item Incomings')

@push('content-head')
<th> Category </th>
<th> Supplier </th>
<th> Name </th>
<th> Quantity </th>
<th> Size </th>
<th> Color </th>
@endpush

@push('content-body')
{ data: 'id_categories' },
{ data: 'id_suppliers' },
{ data: 'name' },
{ data: 'quantity' },
{ data: 'size' },
{ data: 'color' },
@endpush
