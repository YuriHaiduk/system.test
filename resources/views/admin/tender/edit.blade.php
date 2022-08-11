@extends('admin.layout.index')

@section('content')

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Edit Tender</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form autocomplete="off" action="{{ route('tender.update', ['id' => $tender->id]) }}" method="post">
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
                        <label for="description">Description</label>
                        <input type="text" name="description" class="form-control required input-area" placeholder="" value="{{ $tender->description }}">
                    </div>
                    <div class="form-group">
                        <label for="budget">Budget</label>
                        <input type="text" name="budget" class="form-control required input-area" placeholder="" value="{{ $tender->budget }}">
                    </div>
                    <div class="form-group">
                        <label for="delivery_date">Delivery Date</label>
                        <div class="input-group date" id="reservationdate" data-target-input="nearest">
                            <input type="text" name="delivery_date" class="form-control datetimepicker-input" data-target="#reservationdate" value="{{ $tender->delivery_date->format('m/d/y') }}">
                            <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="deadline">Deadline</label>
                        <div class="input-group date" id="reservationdate2" data-target-input="nearest">
                            <input type="text" name="deadline" class="form-control datetimepicker-input" data-target="#reservationdate2" value="{{ $tender->deadline->format('m/d/y') }}">
                            <div class="input-group-append" data-target="#reservationdate2" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
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
