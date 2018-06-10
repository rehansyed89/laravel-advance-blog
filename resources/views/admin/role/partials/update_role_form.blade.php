<div class="content-wrapper">
    @include('admin.layouts.pageHeader')

    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title"></h3>
        </div>
        @include('common.error')
        <form role="form" action="{{ route('role.update',$role->id) }} " method="post">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="box-body">
                <div class="col-lg-offset-3 col-lg-6">
                    <div class="form-group">
                        <label for="name">Role</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $role->name }}">
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <label >Posts Permissions</label>
                            @foreach($permissions as $permission)
                                @if($permission->for == 'post')
                                    <div class="checkbox">
                                        <label>

                                            <input type="checkbox" name="permission[]"
                                                   @foreach($role->permissions as $role_permit)
                                                   @if($role_permit->id == $permission->id) checked @endif
                                                   @endforeach
                                                   value="{{ $permission->id }}">
                                            {{ $permission->name }}
                                        </label>
                                    </div>
                                @endif
                            @endforeach

                        </div>
                        <div class="col-lg-4">
                            <label >User Permissions</label>
                            @foreach($permissions as $permission)
                                @if($permission->for == 'user')
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="permission[]"
                                                   @foreach($role->permissions as $role_permit)
                                                     @if($role_permit->id == $permission->id) checked @endif
                                                   @endforeach
                                                   value="{{ $permission->id }}">
                                            {{ $permission->name }}
                                        </label>
                                    </div>
                                @endif
                            @endforeach
                        </div>

                        <div class="col-lg-4">
                            <label >Other Permissions</label>
                            @foreach($permissions as $permission)
                                @if($permission->for == 'other')
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="permission[]"
                                                   @foreach($role->permissions as $role_permit)
                                                        @if($role_permit->id == $permission->id) checked @endif
                                                   @endforeach
                                                   value="{{ $permission->id }}">
                                            {{ $permission->name }}
                                        </label>
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