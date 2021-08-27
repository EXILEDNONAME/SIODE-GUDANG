@extends('layouts.backend.system.index', ['status' => 'true'])
@push('title', 'Item Categories')

@push('content-head')
<th> Name </th>
<th> Description </th>
@endpush

@push('content-body')
{ data: 'name' },
{ data: 'description' },
@endpush
