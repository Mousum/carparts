/**
 * Created by Mausum on 9/2/2015.
 */
$(document).ready(function () {
    var baseurl = $("#baseurl").attr('data-content');

    $("#brand").change(function () {
        $.get(baseurl + '/getmodels?brand=' + $(this).val(), function (data) {
           var result = JSON.parse(data);
            var html  = '<option value="">Select Model</option>';
            $.each(result,function(index,value){
                    html +='<option value="'+value.model_id+'">'+value.model_name+'</option>'
            });
            $("#model").html(html);
        });
    });
    $("#model").change(function () {
        $.get(baseurl + '/getengines?model=' + $(this).val(), function (data) {
           var result = JSON.parse(data);
            var html  = '<option value="">Select Engine</option>';
            $.each(result,function(index,value){
                    html +='<option value="'+value.engine_id+'">'+value.engine_name+'</option>'
            });
            $("#engine").html(html);
        });
    });
    $(".btn-details").click(function(){
       // alert($(this).attr('data-id'));
        var  id = $(this).attr('data-id');
        var  title =  $(this).attr('data-title').toLowerCase().replace(/\s+/g, '-');
        $.get(baseurl+'/productdetailspartial?id='+$(this).attr('data-id'),function(data){
            $('.countHistory').val($('.countHistory').val()+1);
            window.history.pushState("", "", baseurl+"/productdetails/"+id+'-'+title);
            $(".modal-body").html(data);
            $('#product-modal').on('hidden.bs.modal', function () {
                window.history.go(-$('.countHistory').val());
                $('.countHistory').val(0);
            })
        });
    });

    $(".small-pic").click(function () {
        $(".large").attr('src', $(this).attr("data-value"));
    });
    $(".share").click(function(){
        var link = $(this).attr('data-link');
        $('.'+link).trigger('click');
    });
    $body = $("body");

    $(document).on({
        ajaxStart: function() { $body.addClass("loading");    },
        ajaxStop: function() { $body.removeClass("loading"); }
    });
    $(".btn-event").click(function(){
        // alert($(this).attr('data-id'));
        var  id = $(this).attr('data-id');
        //var  title =  $(this).attr('data-title').toLowerCase().replace(/\s+/g, '-');
        $.get(baseurl+'/eventdetails?id='+$(this).attr('data-id'),function(data){
        //    //$('.countHistory').val($('.countHistory').val()+1);
        //    //window.history.pushState("", "", baseurl+"/event/"+title);
            $(".modal-body").html(data);
        //    $('#product-modal').on('hidden.bs.modal', function () {
        //        //window.history.go(-$('.countHistory').val());
        //        //$('.countHistory').val(0);
        //    })
        });
    });
});
