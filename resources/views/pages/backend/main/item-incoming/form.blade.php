<div class="form-group row">
  <label class="col-lg-3 col-form-label"> Supplier </label>
  <div class="col-lg-8">
    {!! Form::select('id_supplier', suppliers(), (isset($data->id_supplier) ? $data->id_supplier : NULL), ['placeholder' => '- Select Supplier -', 'class' => 'form-control', 'required' => 'required']) !!}
    @error('id_supplier') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
  </div>
  <div class="col-lg-1">
    <a href="/dashboard/suppliers/create" target="_blank" class="btn btn-disable" data-toggle="tooltip" title="" data-placement="left" data-original-title="Add Supplier">
      <i class="fas fa-plus"></i>
    </a>
  </div>
</div>

<div class="form-group row">
  <label class="col-lg-3 col-form-label"> Category </label>
  <div class="col-lg-8">
    {!! Form::select('id_category', item_categories(), (isset($data->id_category) ? $data->id_category : NULL), ['placeholder' => '- Select Category -', 'class' => 'form-control', 'required' => 'required']) !!}
    @error('id_category') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
  </div>
  <div class="col-lg-1">
    <a href="/dashboard/item-categories/create" target="_blank" class="btn btn-disable" data-toggle="tooltip" title="" data-placement="left" data-original-title="Add Category">
      <i class="fas fa-plus"></i>
    </a>
  </div>
</div>

<div class="form-group row">
  <label class="col-lg-3 col-form-label"> Name </label>
  <div class="col-lg-9">
    {!! Form::text('name', (isset($data->name) ? $data->name : ''), ['class' => $errors->has('name') ? 'form-control is-invalid' : 'form-control', 'required' => 'required']) !!}
    @error('name') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
  </div>
</div>

<div class="form-group row">
  <label class="col-lg-3 col-form-label"> Quantity </label>
  <div class="col-lg-9">
    {!! Form::number('quantity', (isset($data->quantity) ? $data->quantity : ''), ['class' => $errors->has('quantity') ? 'form-control is-invalid' : 'form-control', 'required' => 'required']) !!}
    @error('quantity') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
  </div>
</div>

<div class="form-group row">
  <label class="col-lg-3 col-form-label"> Size </label>
  <div class="col-lg-9">
    {!! Form::text('size', (isset($data->size) ? $data->size : ''), ['class' => $errors->has('size') ? 'form-control is-invalid' : 'form-control', 'required' => 'required']) !!}
    @error('size') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
  </div>
</div>

<div class="form-group row">
  <label class="col-lg-3 col-form-label"> Color </label>
  <div class="col-lg-9">
    {!! Form::text('color', (isset($data->color) ? $data->color : ''), ['class' => $errors->has('color') ? 'form-control is-invalid' : 'form-control', 'required' => 'required']) !!}
    @error('color') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
  </div>
</div>

<div class="form-group row">
  <label class="col-lg-3 col-form-label"> Description </label>
  <div class="col-lg-9">
    {!! Form::textarea('description', (isset($data->description) ? $data->description : ''), [ 'id' => 'kt-tinymce-1', 'class' => $errors->has('description') ? 'form-control is-invalid' : 'form-control']) !!}
    @error('description') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
  </div>
</div>

@include('includes.partial.datatable.form')
