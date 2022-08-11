@extends('admin.layout.index')

@section('content')

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Edit Supplier</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form autocomplete="off" action="{{ route('supplier.update', ['id' => $supplier->id]) }}" method="post">
                @csrf
                @method('PUT')
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            @foreach ($errors->all() as $error)
                                <p><i class="icon fas fa-exclamation-triangle"></i>{{ $error }}</p>
                            @endforeach
                        </div>
                    @endif

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control required input-area" id="title" placeholder="" value="{{ $supplier->name }}">
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" name="address" class="form-control required input-area" id="title" placeholder="" value="{{ $supplier->address }}">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" name="phone" class="form-control required input-area" id="title" placeholder="" value="{{ $supplier->phone }}">
                    </div>
                    <div class="form-group">
                        <label for="contact_person">Contact person</label>
                        <input type="text" name="contact_person" class="form-control required input-area" id="title" placeholder="" value="{{ $supplier->contact_person }}">
                    </div>

                    <div class="form-group">
                        <label for="services">Services</label>
                        <select name="services[]" id="services" class="select2" multiple="multiple"
                                data-placeholder="Select services" style="width: 100%;">
                            @foreach($services as $k => $v)
                                <option value="{{ $k }}" @if(in_array($k, $supplier->services->pluck('id')->all())) selected @endif">{{ $v }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
@endsection
