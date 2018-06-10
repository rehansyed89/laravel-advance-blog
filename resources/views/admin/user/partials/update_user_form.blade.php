<div class="content-wrapper">
    @include('admin.layouts.pageHeader')

    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title"></h3>
        </div>
        @include('common.error')
        <form role="form" method="POST" action="{{ route('user.update',$user->id) }}">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="box-body">
                <div class="col-lg-offset-3 col-lg-6">
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="name">Name</label>
                        <input id="name" type="text" class="form-control" name="name" value="@if (old('name')){{ old('name') }}@else{{ $user->name }}@endif">
                        @if ($errors->has('name'))
                            <span class="help-block">
                                   <strong>{{ $errors->first('name') }}</strong>
                               </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email">E-Mail Address</label>
                        <input id="email" type="email" class="form-control" name="email" value="@if (old('email')){{ old('email') }}@else{{ $user->email }}@endif">

                        @if ($errors->has('email'))
                            <span class="help-block">
                                   <strong>{{ $errors->first('email') }}</strong>
                               </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                        <label for="phone" >Phone</label>
                        <input id="name" type="number" class="form-control" name="phone" value="@if (old('phone')){{ old('phone') }}@else{{ $user->phone }}@endif">

                        @if ($errors->has('phone'))
                            <span class="help-block">
                                   <strong>{{ $errors->first('phone') }}</strong>
                               </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="status">Status</label>
                        <div class="checkbox ">
                            <label>
                                <input type="checkbox" name="status"
                                       @if(old('status') == 1 || $user->status == 1)
                                         checked
                                       @endif
                                       value="{{ $user->status }}">
                                Active
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Assign Role</label>
                        <div class="row">
                            @foreach($roles as $role)
                                <div class="col-lg-3">
                                    <div class="checkbox ">
                                        <label>
                                            <input type="checkbox" name="role[]" value="{{ $role->id }}"
                                                   @foreach ($user->roles as $user_role)
                                                    @if ($user_role->id == $role->id) checked @endif
                                                   @endforeach>
                                            {{ $role->name }}
                                        </label>
                                    </div>
                                </div>
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