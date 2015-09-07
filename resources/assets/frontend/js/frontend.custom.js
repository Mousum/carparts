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
        $.get(baseurl+'/productdetailspartial?id='+$(this).attr('data-id'),function(data){
            $(".modal-body").html(data);
        });
    });
});