@extends('layouts.backend.system.index')
@push('title', 'Stocks')

@push('content-head')
<th> Code </th>
<th> Name </th>
<th> Color </th>
<th> Size </th>
<th> Quantity </th>
@endpush

@push('content-body')
{ data: 'code' },
{ data: 'name' },
{ data: 'color' },
{ data: 'size' },
{ data: 'quantities' },
@endpush
