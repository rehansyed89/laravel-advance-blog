<div class="content-wrapper">
    @include('admin.layouts.pageHeader')

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Permissions</h3>
                        <a class='col-lg-offset-5 btn btn-success' href="{{ route('permission.create') }}">Add New</a>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fa fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="box">
                            <div class="box-header">@include('common.error')</div>
                            <div class="box-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>For</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($permissions as $permission)
                                        <tr>
                                            <td>{{ $loop->index +1 }}</td>
                                            <td>{{ $permission->name }}</td>
                                            <td>{{ $permission->for }}</td>
                                            <td><a href="{{ route('permission.edit', $permission->id) }}"><span class="glyphicon glyphicon-edit"></span></a></td>
                                            <td>
                                                <form id="delete_form_{{ $permission->id }}" action="{{ route('permission.destroy',$permission->id) }}" method="post">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}
                                                    <a href="" onclick="destroyPermission('delete_form_{{ $permission->id }}');">
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
            </div>
        </div>
    </section>
</div>