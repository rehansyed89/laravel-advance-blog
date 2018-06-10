<div class="content-wrapper">
    @include('admin.layouts.pageHeader')

    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title"></h3>
        </div>
        @include('common.error')
        <form role="form" action="{{ route('role.store') }} " method="post">
            {{ csrf_field() }}
            <div class="box-body">
                <div class="col-lg-offset-3 col-lg-6">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Title">
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <label >Posts Permissions</label>
                            @foreach($permissions as $permission)
                                @if($permission->for == 'post')
                                    <div class="checkbox">
                                        <label><input type="checkbox" name="permission[]" value="{{ $permission->id }}">{{ $permission->name }}</label>
                                    </div>
                                @endif
                            @endforeach

                        </div>
                        <div class="col-lg-4">
                            <label >User Permissions</label>
                            @foreach($permissions as $permission)
                                @if($permission->for == 'user')
                                    <div class="checkbox">
                                        <label><input type="checkbox" name="permission[]" value="{{ $permission->id }}">{{ $permission->name }}</label>
                                    </div>
                                @endif
                            @endforeach
                        </div>

                        <div class="col-lg-4">
                            <label >Other Permissions</label>
                            @foreach($permissions as $permission)
                                @if($permission->for == 'other')
                                    <div class="checkbox">
                                        <label><input type="checkbox" name="permission[]" value="{{ $permission->id }}">{{ $permission->name }}</label>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>

            </div>

        </form>
    </div>
</div>