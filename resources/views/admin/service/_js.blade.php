<script>

    function removeImage() {
        $('.close').each(function () {
            $(this).on('click', function () {
                var imageDiv = $(this).parent();
                var fileId = imageDiv.data('fileid').toString();
                var serviceBlockId = imageDiv.data('serviceblockid');
                var hiddenField = $('#blocks_' + serviceBlockId + '_image_ids');
                var imgArr = hiddenField.val().split(',');
                var index = imgArr.indexOf(fileId);
                if (index > -1) {
                    imgArr.splice(index, 1);
                }
                var newHiddenVal = imgArr.join();
                hiddenField.val(newHiddenVal);
                imageDiv.remove();
            })
        })
    }

    function removePriceDepends() {
        $('.remove-price-depends:not(:first)').each(function () {
            $(this).on('click', function () {
                $(this).parent().parent().remove();
            })
        })
    }

    var countPriceDepends = '{{ $i }}';

    function removeCarouselItem() {
        var count = 0;
        $('.remove-carousel').each(function () {
            count++;
            $(this).on('click', function () {
                var imageDiv = $(this).parents('.add-carousel-data').children('.img-wrap');
                if (typeof imageDiv.data('fileid') !== "undefined") {
                    var fileId = imageDiv.data('fileid').toString();
                    var serviceBlockId = imageDiv.data('serviceblockid');
                    var hiddenField = $('#blocks_' + serviceBlockId + '_image_ids');
                    var imgArr = hiddenField.val().split(',');
                    var index = imgArr.indexOf(fileId);
                    if (index > -1) {
                        imgArr.splice(index, 1);
                    }
                    var newHiddenVal = imgArr.join();
                    hiddenField.val(newHiddenVal);
                }
                $(this).parent().parent().remove();
                count--;
                removeCarouselItem();

            })
        })
    }

    $('#add_price_depends').on('click', function () {
        countPriceDepends++;
        $('#price_depends_data').append(
            '<div>\n' +
            '            <ul class="nav nav-tabs">\n' +
            '                <li class="active"><a data-toggle="tab" href="#price_depends_' + countPriceDepends + '_ru_tab">RU</a></li>\n' +
            '                <li><a data-toggle="tab" href="#price_depends_' + countPriceDepends + '_ua_tab">UA</a></li>\n' +
            '            </ul>\n' +
            '            <div class="tab-content">\n' +
            '                <div id="price_depends_' + countPriceDepends + '_ru_tab" class="tab-pane fade in active">\n' +
            '                    <div class="form-group">\n' +
            '                        <strong>Цена зависит от[RU]:</strong>\n' +
            '<input type="text" name="price_depends_ru[' + countPriceDepends + ']" class="form-control">' +
            '\n' +
            '                    </div>\n' +
            '                </div>\n' +
            '\n' +
            '                <div id="price_depends_' + countPriceDepends + '_ua_tab" class="tab-pane fade">\n' +
            '                    <div class="form-group">\n' +
            '                        <strong>Цена зависит от[UA]:</strong>\n' +
            '<input type="text" name="price_depends_ua[' + countPriceDepends + ']" class="form-control">\n' +
            '                    </div>\n' +
            '                </div>\n' +
            '            </div>\n' +
            '            <div class="btn btn-box-tool"><i class="fa fa-minus remove-price-depends"></i></div>\n' +
            '        </div>');
        removePriceDepends();
    });

    var count = '{{ $count }}';

    $('#add_carousel').on('click', function () {
        count++;

        $('#carousel_panel').append(
            '<div class="add-carousel-data">\n' +
            '                        <ul class="nav nav-tabs">\n' +
            '                            <li class="active"><a data-toggle="tab" href="#block_two_' + count + '_tab_ru">RU</a></li>\n' +
            '                            <li><a data-toggle="tab" href="#block_two_' + count + '_tab_ua">UA</a></li>\n' +
            '                        </ul>\n' +
            '\n' +
            '                        <div class="tab-content">\n' +
            '                            <div id="block_two_' + count + '_tab_ru" class="tab-pane fade in active">\n' +
            '                                <div class="form-group">\n' +
            '                                        <strong>Заголовок[RU]:</strong>\n' +
            '                                        <div class="input-group">\n' +
            '                                            <input name="blocks[1][' + count + '][title_ru]" type="text" class="form-control"/>\n' +
            '                                        </div>\n' +
            '                                </div>\n' +
            '                            </div>\n' +
            '\n' +
            '                            <div id="block_two_' + count + '_tab_ua" class="tab-pane fade">\n' +
            '                                <div class="form-group">\n' +
            '                                        <strong>Заголовок[UA]:</strong>\n' +
            '                                        <div class="input-group">\n' +
            '                                            <input name="blocks[1][' + count + '][title_ua]" type="text" class="form-control"/>\n' +
            '                                        </div>\n' +
            '                                </div>\n' +
            '                            </div>\n' +
            '                        </div>\n' +
            '\n' +
            '<input name="blocks[1][' + count + '][image]" type="file" class="form-control">' +
            '<input name="blocks[1][' + count + '][image_alt]" type="text" class="form-control" placeholder="ALT">' +
            '                        <div class="btn btn-box-tool"><i class="fa fa-minus remove-carousel"></i></div>\n' +
            '                    </div>');
        removeCarouselItem();
    });

    removePriceDepends();
    removeCarouselItem();
    removeImage();

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
        CKEDITOR.on('dialogDefinition', function (ev) {
            var image;
            // Take the dialog name and its definition from the event data
            var dialogName = ev.data.name;
            var dialogDefinition = ev.data.definition;
            var editor = ev.editor;
            if (dialogName == 'image') {
                dialogDefinition.onLoad = function (ev) {
                };
                dialogDefinition.onOk = function (e) {
                    //var imageAlt = image[2].alt;
                    var imageSrcUrl = e.sender.originalElement.$.src;
                    //console.log(ev.sender.originalElement.$.currentSrc);
                    image = $('a').find('img');
                    var imageTag = $("img[src='"+imageSrcUrl+"']");
                    var imageAlt = imageTag["0"].alt;
                    var imgHtml;
                    var str = "<img src=\'" + imageSrcUrl + "\' alt=\'" + imageAlt + "\' title=\'image\'/>";
                    if (image[2].title ) {
                        imgHtml = CKEDITOR.dom.element.createFromHtml(str);
                    } else {
                        imgHtml = CKEDITOR.dom.element.createFromHtml("<div class='image-container'>"+str+"</div>");
                    }
                    editor.insertElement(imgHtml);
                };
            }
        })
    });
</script>