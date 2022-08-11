@extends('admin.layout.index')

@section('content')

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Add New Offer</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form autocomplete="off" action="{{ route('offer.store') }}" method="post">
                @csrf
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
                        <label for="description">Description</label>
                        <input type="text" name="description" class="form-control required input-area" placeholder="">
                    </div>
                        <div class="form-group">
                            <label for="delivery_date">Delivery Date</label>
                            <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                <input type="text" name="delivery_date" class="form-control datetimepicker-input" data-target="#reservationdate">
                                <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="quality">Quality</label>
                            <select class="form-control" id="quality" name="quality">
                                @for($i = 1; $i<=10; $i++)
                                    <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="text" name="price" class="form-control required input-area" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="tender_id">Tender</label>
                            <select class="form-control @error('tender_id') is-invalid @enderror" id="tender_id" name="tender_id">
                                @foreach($tenders as $k => $v)
                                    <option value="{{ $k }}">{{ $v }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="supplier_id">Supplier</label>
                            <select class="form-control @error('tender_id') is-invalid @enderror" id="supplier_id" name="supplier_id">
                                @foreach($suppliers as $k => $v)
                                    <option value="{{ $k }}">{{ $v }}</option>
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
