@include('includes.header')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Customer Detail</h4>
                <h6 class="card-subtitle">Click edit icon against any Customer to update his information</h6>
                <div class="table-responsive m-t-40">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered"
                        cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>SNo.</th>
                                <th>Name</th>
                                <th>Father Name</th>
                                <th>CNIC</th>
                                <th>Locker No</th>
                                <th>Timmig</th>
                                <th>Actions</th>
                                <th>Detail</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($customers as $customer)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $customer->name }}</td>
                                    <td>{{ $customer->fname }}</td>
                                    <td>{{ $customer->cnic }}</td>
                                    <td>{{ $customer->locker_number }}</td>
                                    <td>{{ $customer->timming }}</td>
                                    <td><a href="{{ route('Customers.edit', $customer->id) }}"><i
                                                class="btn btn-primary fa fa-edit" aria-hidden="true"></i></a>
                                        <button class="btn btn-danger" data-toggle="modal"
                                            data-target="#delete{{ $customer->id }}"><i class="fa fa-trash"
                                                aria-hidden="true"></i></button>
                                    </td>
                                    <td><a class="btn btn-success" style="align-content:center;"
                                            href="{{ route('Customers.show', $customer->id) }}"><i
                                                class="fa fa-i-cursor" aria-hidden="true"></i></a></td>
                                </tr>

                                <div class="modal modal-danger fade" id="delete{{ $customer->id }}" tabindex="-1"
                                    role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close"></button>

                                            </div>
                                            <form action="{{ route('Customers.destroy', $customer->id) }}"
                                                method="post">
                                                @csrf
                                                @method('DELETE')
                                                <div class="modal-body">
                                                    <p class="text-center">
                                                        Are you sure you want to Perform this Action?
                                                    </p>
                                                    <input type="hidden" name="id" id="cat_id"
                                                        value="{{ $customer->id }}">

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-success"
                                                        data-dismiss="modal">No,
                                                        Cancel</button>
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </tbody>
                    </table>
                    <span>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>

@include('includes.footer')
@include('includes.messages')
