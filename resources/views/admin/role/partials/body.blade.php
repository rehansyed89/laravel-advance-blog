<div class="content-wrapper">
    @include('admin.layouts.pageHeader')

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Roles</h3>
                        <a class='col-lg-offset-5 btn btn-success' href="{{ route('role.create') }}">Add New</a>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fa fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($roles as $role)
                                <tr>
                                    <td>{{ $loop->index +1 }}</td>
                                    <td>{{ $role->name }}</td>
                                    <td><a href="{{ route('role.edit', $role->id) }}"><span class="glyphicon glyphicon-edit"></span></a></td>
                                    <td>
                                        <form id="delete_form_{{ $role->id }}" action="{{ route('role.destroy',$role->id) }}" method="post">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <a href="" onclick="destroyRole('delete_form_{{ $role->id }}');">
                                                <span class="glyphicon glyphicon-trash"></span>
                                            </a>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>