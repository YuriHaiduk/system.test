@extends('admin.layout.index')

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">All Tenders</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                @if (session()->has('success'))
                    <div class="alert bg-teal alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <i class="icon fas fa-check"></i> {{ session('success') }}
                    </div>
                @endif
                @if($tenders->count())

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
                    @foreach($tenders as $tender)
                        <tr>
                            <td><a href="{{ route('tender.show', ['id' => $tender->id]) }}" title="{{$tender->description}}">{{Str::limit($tender->description, 25)}}</a></td>
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
                        @endforeach
                    </tbody>
                </table>
                @else
                    <p>There Are No Tenders Yet</p>
                @endif
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                    {{ $tenders->links() }}
                </ul>
            </div>
        </div>
        <!-- /.card -->
    </div>
@endsection

