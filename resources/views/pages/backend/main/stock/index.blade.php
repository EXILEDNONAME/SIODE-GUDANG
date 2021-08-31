@extends('layouts.backend.system.index_non-editable')
@push('title', 'Stocks')

@push('content-head')
<th> Code </th>
<th> Name </th>
<th> Color </th>
<th> Size </th>
<th> Quantity </th>
@endpush

@push('content-body')
{ data: 'code', 'width': '1', 'className': 'text-nowrap' },
{ data: 'name' },
{ data: 'color', 'width': '1', 'className': 'text-nowrap' },
{ data: 'size', 'className': 'align-middle text-center', 'width': '1', },
{ data: 'quantities', 'className': 'align-middle text-center', 'width': '1', },
@endpush
