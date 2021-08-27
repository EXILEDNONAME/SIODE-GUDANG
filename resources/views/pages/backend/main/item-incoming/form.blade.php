<div class="form-group row">
  <label class="col-lg-3 col-form-label"> Catalog </label>
  <div class="col-lg-9">
    {!! Form::select('id_catalog', catalogs(), (isset($data->id_catalog) ? $data->id_catalog : NULL), ['placeholder' => '- Select Catalog -', 'class' => 'form-control', 'required' => 'required']) !!}
    @error('id_catalog') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
  </div>
</div>

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
  <label class="col-lg-3 col-form-label"> Quantity </label>
  <div class="col-lg-9">
    {!! Form::number('quantity', (isset($data->quantity) ? $data->quantity : ''), ['class' => $errors->has('quantity') ? 'form-control is-invalid' : 'form-control', 'required' => 'required']) !!}
    @error('quantity') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
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
