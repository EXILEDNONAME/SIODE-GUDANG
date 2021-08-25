@extends('layouts.backend.system.index', ['status' => 'true'])
@push('title', 'Suppliers')

@push('content-head')
<th> Name </th>
<th> Description </th>
@endpush

@push('content-body')
{ data: 'name' },
{ data: 'description' },
@endpush
