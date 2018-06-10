<div class="content-wrapper">
    @include('admin.layouts.pageHeader')

    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Post</h3>
        </div>
        @include('common.error')
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
                    <br>
                    <div class="form-group">
                        <div class="pull-right">
                            <label for="image">File input</label>
                            <input type="file" id="image" name="image">
                        </div>
                        <div class="checkbox pull-left">
                            <label>
                                <input type="checkbox" id="status" name="status" value="1"> Publish
                            </label>
                        </div>
                    </div>
                    <br>
                    <div class="form-group" style="margin-top: 18px;">
                        <label>Tags</label>
                        <select class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="Select a Tag" style="width: 100%;" tabindex="-1" aria-hidden="true" name="post_tags[]">
                            @foreach($tags as $tag)
                                <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group" style="margin-top: 18px;">
                        <label>Categories</label>
                        <select class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="Select a Category" style="width: 100%;" tabindex="-1" aria-hidden="true" name="category_posts[]">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
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
                    <textarea id="editor1" name="body" style="width: 100%; height: 600px !important; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                </div>
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>