@extends('layouts.backend.system.index', ['status' => 'true'])
@push('title', 'Catalogs')

@push('content-head')
<th> Code </th>
<th> Category </th>
<th> Name </th>
<th> Color </th>
<th> Size </th>
<th> Stock </th>
@endpush

@push('content-body')
{ data: 'code', searchable: false, sortable: false, width: 1, className: 'text-nowrap'  },
{ data: 'id_categories' },
{ data: 'name' },
{ data: 'color', width: 1, className: 'text-nowrap' },
{ data: 'size', width: 1, className: 'text-nowrap' },
{ data: 'stock', width: 1, className: 'text-nowrap' },
@endpush
