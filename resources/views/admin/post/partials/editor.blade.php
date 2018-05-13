<div class="content-wrapper">
    <section class="content-header">
        <h1>Blog Post</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">Editors</li>
        </ol>
    </section>
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Post</h3>
        </div>
        @if(count($errors) > 0)
            @foreach($errors->all() as $error)
                <p class="alert alert-danger">{{$error}}</p>
            @endforeach
        @endif
        <form role="form" action="{{ route('post.store') }}" method="post">
            {{csrf_field()}}
            <div class="box-body">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="title">Post Title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Title">
                    </div>
                    <div class="form-group">
                        <label for="subtitle">Sub Title</label>
                        <input type="text" class="form-control" id="subtitle" name="subtitle" placeholder="Sub title">
                    </div>
                    <div class="form-group">
                        <label for="slug">Slug</label>
                        <input type="text" class="form-control" id="slug" name= "slug" placeholder="Slug">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="image">File input</label>
                        <input type="file" id="image" name="image">
                    </div>
                    <br><br>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" id="status" name="status"> Publish
                        </label>
                    </div>
                </div>

            </div>
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Body</h3>
                    <div class="pull-right box-tools">
                        <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fa fa-minus"></i></button>
                    </div>
                </div>
                <div class="box-body pad">
                    <textarea class="textarea" id="body" name="body" style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                </div>
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>


<script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>

<script>
    $(function () {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('editor1');
        //bootstrap WYSIHTML5 - text editor
        $(".textarea").wysihtml5();
    });
</script>