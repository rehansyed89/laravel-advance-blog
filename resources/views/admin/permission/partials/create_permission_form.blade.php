<div class="content-wrapper">
    @include('admin.layouts.pageHeader')

    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title"></h3>
        </div>
        @include('common.error')
        <form role="form" action="{{ route('permission.store') }} " method="post">
            {{ csrf_field() }}
            <div class="box-body">
                <div class="col-lg-offset-3 col-lg-6">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Title">
                    </div>
                    <div class="form-group">
                        <label for="for">Permission For</label>
                        <select name="for" id="for" class="form-control">
                            <option selected disabled>Select Permission for</option>
                            <option value="user">User</option>
                            <option value="post">Post</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>

            </div>

        </form>
    </div>
</div>