@extends('layouts.app')

@permission('blog-edit')
@section('main-content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            {{--<div class="pull-left">--}}
            {{--<h2>Изменить</h2>--}}
            {{--</div>--}}
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('admin.blog.index') }}"> Назад</a>
            </div>
        </div>
    </div>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {!! Form::model($blog, ['method' => 'PATCH','files' => true,'route' => ['admin.blog.update', $blog->id]]) !!}
    <div class="row">
        @include('admin.blog._form')

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Сохранить</button>
        </div>
    </div>
    {!! Form::close() !!}
@endsection
@endpermission
@section('page-scripts')
    <script>
        var token = $('meta[name="csrf-token"]').attr('content');
        var options = {
            //filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=' + token,
            //filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token=' + token
//        allowedContent: 'img[!src,alt]  ;'
        };


        $('.ckeditor').each(function (index, el) {
        CKEDITOR.replace(el, options);
        //            CKEDITOR.on('dialogDefinition', function (ev) {
        //                var image;
        //                // Take the dialog name and its definition from the event data
        //                var dialogName = ev.data.name;
        //                var dialogDefinition = ev.data.definition;
        //                var editor = ev.editor;
        //                if (dialogName == 'image') {
        //                    dialogDefinition.onLoad = function (ev) {
        //                    };
        //                    dialogDefinition.onOk = function (e) {
        //                        //var imageAlt = image[2].alt;
        //                        var imageSrcUrl = e.sender.originalElement.$.src;
        //                        //console.log(ev.sender.originalElement.$.currentSrc);
        //                        image = $('a').find('img');
        //                        var imageTag = $("img[src='"+imageSrcUrl+"']");
        //                        var imageAlt = imageTag["0"].alt;
        //                        var imgHtml;
        //                        var imageTitle = imageTag["0"].title;
        //                        var str = "<img src=\'" + imageSrcUrl + "\' alt=\'" + imageAlt + "\' title=\'image\'/>";
        //                        if (imageTitle) {
        //                            imgHtml = CKEDITOR.dom.element.createFromHtml(str);
        //                        } else {
        //                            imgHtml = CKEDITOR.dom.element.createFromHtml("<div class='image-container'>"+str+"</div>");
        //                        }
        //                        editor.insertElement(imgHtml);
        //                    };
        //                }
        });
    </script>
@endsection