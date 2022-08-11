@extends('admin.layout.index')

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Some Tender</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                @if (session()->has('success'))
                    <div class="alert bg-teal alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <i class="icon fas fa-check"></i> {{ session('success') }}
                    </div>
                @endif

                    <table class="table table-bordered">
                    <thead>

                    <tr>
                        <th>Description</th>
                        <th>Budget</th>
                        <th>Delivery Date</th>
                        <th>Deadline</th>
                        <th>Edit</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{Str::limit($tender->description, 25)}}</td>
                            <td>{{$tender->budget}}</td>
                            <td>{{$tender->delivery_date->format('y-m-d')}}</td>
                            <td>{{$tender->deadline->format('y-m-d')}}</td>
                            <td>
                                <a href="{{ route('tender.edit', ['id' => $tender->id]) }}"
                                   class="btn btn-info btn-sm float-left mr-1">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Latest offers</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                @if (session()->has('success'))
                    <div class="alert bg-teal alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <i class="icon fas fa-check"></i> {{ session('success') }}
                    </div>
                @endif
                @if($tender->offers->count())

                    <table class="table table-bordered">
                        <thead>

                        <tr>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Delivery Date</th>
                            <th>Quality</th>
                            <th>Tender</th>
                            <th>Supplier</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($tender->offers as $offer)
                            <tr>
                                <td><a href="{{ route('offer.show', ['id' => $offer->id]) }}" title="{{$offer->description}}">{{Str::limit($offer->description, 25)}}</a></td>
                                <td>{{$offer->price}}</td>
                                <td>{{$offer->delivery_date->format('y-m-d')}}</td>
                                <td>{{$offer->quality}}</td>
                                <td>{{Str::limit($offer->tender->description, 25)}}</td>
                                <td>{{$offer->supplier->name}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @else
                    <p>There Are No Latest Offers Yet</p>
                @endif
            </div>
            <!-- /.card-body -->
           {{-- <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                    {{ $offers->links() }}
                </ul>
            </div>--}}
        </div>
        <!-- /.card -->
    </div>
@endsection

