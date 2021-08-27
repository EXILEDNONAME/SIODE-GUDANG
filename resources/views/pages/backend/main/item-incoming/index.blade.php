@extends('layouts.backend.system.index', ['status' => 'true'])
@push('title', 'Item Incomings')

@push('content-head')
<th> Catalogs </th>
<th> Supplier </th>
<th> Quantity </th>
@endpush

@push('content-body')
{ data: 'id_catalogs' },
{ data: 'id_suppliers' },
{ data: 'quantity' },
@endpush
