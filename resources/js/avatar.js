/**
 * Created by leonard on 9/16/15.
 */

$(document).ready(function(){
    var defaultAvatarImage = $('#avatar_link').html();
    $("#avatar").fileinput({
        overwriteInitial: true,
        maxFileSize: 1500,
        showClose: false,
        showCaption: false,
        browseLabel: '',
        removeLabel: '',
        browseIcon: '<i class="glyphicon glyphicon-folder-open"></i>',
        removeIcon: '<i class="glyphicon glyphicon-remove"></i>',
        removeTitle: 'Cancel or reset changes',
        elErrorContainer: '#kv-avatar-errors',
        msgErrorClass: 'alert alert-block alert-danger',
        defaultPreviewContent: defaultAvatarImage,
        layoutTemplates: {main2: '{preview} {remove} {browse}'},
        allowedFileExtensions: ["jpg", "png", "gif"]
    });
});