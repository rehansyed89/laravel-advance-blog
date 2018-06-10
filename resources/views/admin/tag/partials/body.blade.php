<div class="content-wrapper">
    @include('admin.layouts.pageHeader')

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Tags</h3>
                        <a class='col-lg-offset-5 btn btn-success' href="{{ route('tag.create') }}">Add New</a>
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
                                <th>Slug</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($tags as $tag)
                                <tr>
                                    <td>{{ $loop->index +1 }}</td>
                                    <td>{{ $tag->name }}</td>
                                    <td>{{ $tag->slug }}</td>
                                    <td><a href="{{ route('tag.edit', $tag->id) }}"><span class="glyphicon glyphicon-edit"></span></a></td>
                                    <td>
                                        <form id="delete_form_{{ $tag->id }}" action="{{ route('tag.destroy',$tag->id) }}" method="post">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <a href="" onclick="destroyTag('delete_form_{{ $tag->id }}');">
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
                                <th>Slug</th>
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