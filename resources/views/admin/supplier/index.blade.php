@extends('admin.layout.index')

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">All Suppliers</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                @if (session()->has('success'))
                    <div class="alert bg-teal alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <i class="icon fas fa-check"></i> {{ session('success') }}
                    </div>
                @endif
                @if($suppliers->count())

                    <table class="table table-bordered">
                    <thead>

                    <tr>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Contact person</th>
                        <th>Services</th>
                        <th>Edit</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($suppliers as $supplier)
                        <tr>
                            <td><a href="{{ route('supplier.show', ['id' => $supplier->id]) }}" title="{{$supplier->name}}">{{Str::limit($supplier->name, 25)}}</a></td>
                            <td>{{$supplier->address}}</td>
                            <td>{{$supplier->phone}}</td>
                            <td>{{$supplier->contact_person}}</td>
                            <td>{{ $supplier->services->pluck('description')->join(', ') }}</td>
                            <td>
                                <a href="{{ route('supplier.edit', ['id' => $supplier->id]) }}"
                                   class="btn btn-info btn-sm float-left mr-1">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @else
                    <p>There Are No Suppliers Yet</p>
                @endif
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                    {{ $suppliers->links() }}
                </ul>
            </div>
        </div>
        <!-- /.card -->
    </div>
@endsection

