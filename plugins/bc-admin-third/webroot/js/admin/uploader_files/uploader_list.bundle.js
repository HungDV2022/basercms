/**
 * baserCMS :  Based Website Development Project <https://basercms.net>
 * Copyright (c) NPO baser foundation <https://baserfoundation.org/>
 *
 * @copyright     Copyright (c) NPO baser foundation
 * @link          https://basercms.net baserCMS Project
 * @since         5.0.0
 * @license       https://basercms.net/license/index.html MIT License
 */
$((function(){var e=$("#ListId").html();$("#ListId").remove();var l=$([]).add($("#name")).add($("#alt")),i=$.baseUrl()+"/",a=$("#AdminPrefix").html(),t=null;function n(){var l=$.bcUtil.apiBaseUrl+"bc-uploader/uploader_files/upload.json",i=$(this);$.bcUtil.showLoader(),$("#UploaderFileFile"+e).val()&&$.bcToken.check((function(){var a=new FormData;return a.append("file",i.prop("files")[0]),a.append("_csrfToken",$.bcToken.key),$("#UploaderFileUploaderCategoryId"+e).length&&a.append("uploader_category_id",$("#UploaderFileUploaderCategoryId"+e).val()),$.ajax({url:l,headers:{Authorization:$.bcJwt.accessToken},type:"post",data:a,dataType:"json",processData:!1,contentType:!1,cache:!1,success:d})}),{useUpdate:!1,hideLoader:!1})}function d(l){l?($("#UploaderFileUploaderCategoryId"+e).length&&($("#FilterUploaderCategoryId"+e).val($("#UploaderFileUploaderCategoryId"+e).val()),t=$("#UploaderFileUploaderCategoryId"+e).val()),o()):($("#ErrorMessage").remove(),$("#FileList"+e).prepend('<p id="ErrorMessage" class="message">'+bcI18n.uploaderAlertMessage2+"</p>"),$("#Waiting").hide()),$("#UploaderFileFile"+e).remove(),$("#SpanUploadFile"+e).append('<input id="UploaderFileFile'+e+'" type="file" value="" name="data[UploaderFile][file]" class="uploader-file-file" />'),$("#UploaderFileFile"+e).change(n),$.bcToken.key=null}function o(){var l,i;$.bcUtil.ajax((l=$("#ListUrl"+e).attr("href"),i=[],$("#FilterUploaderCategoryId"+e).length&&i.push("uploader_category_id="+$("#FilterUploaderCategoryId"+e).val()),$('input[name="data[Filter][uploader_type]"]:checked').length&&i.push("uploader_type="+$('input[name="data[Filter][uploader_type]"]:checked').val()),$("#FilterName"+e).val()&&i.push("name="+encodeURI($("#FilterName"+e).val())),i.length&&(l+="?"+i.join("&")),l),s,{hideLoader:!1,type:"GET"})}function r(e){var l=$("#LoginUserId").html(),i=$("#LoginUserGroupId").html(),a=Number($("#UsePermission").html()),t=!1;return 1!=i&&a&&l!=e&&(t=!0),t}function s(l){$("#FileList"+e).html(l),function(){$("#UsePermission").html(),t&&$("#UploaderFileUploaderCategoryId"+e).val(t),$(".selectable-file").unbind("click.selectEvent"),$(".selectable-file").unbind("mouseenter.selectEvent"),$(".selectable-file").unbind("mouseleave.selectEvent"),$(".page-numbers a").unbind("click.paginationEvent"),$(".selectable-file").unbind("dblclick.dblclickEvent"),$(".filter-control").unbind("click.filterEvent"),$(".btn-delete").unbind("click");var l="#bbb";$.fn.contextMenu&&!e&&$("#DivPanelList").length&&$("#DivPanelList").contextMenu({selector:".selectable-file",callback:c,build:function(e,l){var i=r($(e).find(".user-id").html());return{items:{edit:{name:bcI18n.uploaderEdit,icon:"edit",disabled:function(e,l){return i}},delete:{name:bcI18n.uploaderDelete,icon:"delete",disabled:function(e,l){return i}}}}}}),$("#DivPanelList .selectable-file").each((function(){$.fn.contextMenu&&!e?r($(this).find(".user-id").html())?$(this).bind("dblclick.dblclickEvent",(function(){alert(bcI18n.uploaderAlertMessage3)})):$(this).bind("dblclick.dblclickEvent",(function(){$("#EditDialog").dialog("open")})):$(this).bind("contextmenu",(function(e){return!1})),$(this).hasClass("unpublish")&&$(this).css("background-color",l)})),$("#UploaderFileFile"+e).change(n),e?($(".selectable-file").bind("mouseenter.selectEvent",(function(){$(this).css("background-color","#FFCC00")})),$(".selectable-file").bind("mouseleave.selectEvent",(function(){$(this).css("background-color","#FFFFFF"),$(this).hasClass("unpublish")&&$(this).css("background-color",l)})),$(".selectable-file").each((function(){$(this).bind("mousedown",(function(){$(".selectable-file").removeClass("selected"),$(this).addClass("selected")}))}))):($("#DivPanelList .selectable-file").bind("mouseenter.selectEvent",(function(){$(this).css("background-color","#FFCC00")})),$("#DivPanelList .selectable-file").bind("mouseleave.selectEvent",(function(){$(this).css("background-color","#FFFFFF"),$(this).hasClass("unpublish")&&$(this).css("background-color",l)})),$("#DivPanelList .selectable-file").each((function(){$(this).bind("mousedown",(function(){$(".selectable-file").removeClass("selected"),$(this).addClass("selected")}))}))),$(".page-numbers a").bind("click.paginationEvent",(function(){return $("#Waiting").show(),$.get($(this).attr("href"),s),!1})),$("#BtnFilter"+e).bind("click.filterEvent",(function(){o()})),$("#FileList"+e).trigger("filelistload"),$("#FileList"+e).effect("highlight",{},1500)}(),$("#FileList"+e).trigger("loadTableComplete"),$("#Waiting").hide()}function c(l,t,n){var d=i+a+"/uploader/uploader_files/delete/"+$("#FileList"+e+" .selected .id").html();switch(-1!=(n=l.indexOf("#"))&&(l=l.substring(n+1,l.length)),l){case"edit":$("#EditDialog").dialog("open");break;case"delete":confirm(bcI18n.uploaderConfirmMessage1)&&$.bcToken.check((function(){return $("#Waiting").show(),$.bcUtil.ajax(d,(function(l){l?($("#FileList"+e).trigger("deletecomplete"),o()):($("#Waiting").hide(),alert(bcI18n.uploaderAlertMessage4)),$.bcToken.key=null}),{data:{_Token:{key:$.bcToken.key}},hideLoader:!1})}),{useUpdate:!1,hideLoader:!1})}}o(),$("#EditDialog").dialog({bgiframe:!0,autoOpen:!1,position:{at:"center center",of:window},width:960,modal:!0,open:function(){var l=$("#FileList"+e+" .selected .name").html(),t=i+a+"/uploader/uploader_files/ajax_image/"+l+"/midium";$("#UploaderFileId"+e).val($("#FileList"+e+" .selected .id").html()),$("#UploaderFileName"+e).val(l),$("#UploaderFileAlt"+e).val($("#FileList"+e+" .selected .alt").html());var n=$("#FileList"+e+" .selected .publish-begin").html(),d=$("#FileList"+e+" .selected .publish-begin-time").html();$("#UploaderFilePublishBeginDate").val(n),$("#UploaderFilePublishBeginTime").val(d);var o=n;d&&(o+=" "+d),$("#UploaderFilePublishBegin").val(o);var r=$("#FileList"+e+" .selected .publish-end").html(),s=$("#FileList"+e+" .selected .publish-end-time").html();$("#UploaderFilePublishEndDate").val(r),$("#UploaderFilePublishEndTime").val(s);var c=r;s&&(c+=" "+s),$("#UploaderFilePublishEnd").val(c),$("#UploaderFileUserId"+e).val($("#FileList"+e+" .selected .user-id").html()),$("#UploaderFileUserName"+e).html($("#FileList"+e+" .selected .user-name").html()),$("#_UploaderFileUploaderCategoryId"+e).length&&$("#_UploaderFileUploaderCategoryId"+e).val($("#FileList"+e+" .selected .uploader-category-id").html()),$.get(t,(function(l){$("#UploaderFileImage"+e).html(l)}))},buttons:{cancel:{text:bcI18n.uploaderCancel,click:function(){$(this).dialog("close"),$("#UploaderFileImage"+e).html('<img src="'+i+'img/admin/ajax-loader.gif" />')}},save:{text:bcI18n.uploaderSave,click:function(){var a=$(this);$.bcToken.check((function(){var t={"data[UploaderFile][id]":$("#UploaderFileId"+e).val(),"data[UploaderFile][name]":$("#UploaderFileName"+e).val(),"data[UploaderFile][alt]":$("#UploaderFileAlt"+e).val(),"data[UploaderFile][publish_begin]":$("#UploaderFilePublishBegin"+e).val(),"data[UploaderFile][publish_end]":$("#UploaderFilePublishEnd"+e).val(),"data[UploaderFile][user_id]":$("#UploaderFileUserId"+e).val(),"data[UploaderFile][uploader_category_id]":$("#_UploaderFileUploaderCategoryId"+e).val(),_csrfToken:$.bcToken.key};return $.bcUtil.ajax($("#UploaderFileEditForm"+e).attr("action"),(function(t){t?(o(),l.removeClass("ui-state-error"),a.dialog("close"),$("#UploaderFileImage"+e).html('<img src="'+i+'img/admin/ajax-loader.gif" />')):($.bcUtil.hideLoader(),alert(bcI18n.uploaderAlertMessage1)),$.bcToken.key=null}),{data:t})}),{hideLoader:!1,useUpdate:!1})}}},close:function(){l.val("").removeClass("ui-state-error"),$("#UploaderFileImage"+e).html('<img src="'+i+'img/admin/ajax-loader.gif" />')}})}));
//# sourceMappingURL=uploader_list.bundle.js.map