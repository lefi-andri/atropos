$(function () {
    $('body').tooltip({selector: '[data-toggles="tooltip"]'});
    $('[data-toggles="tooltip"]').tooltip()
});

//Tawk to


$(document).ready(function(){ 

    

    $("input[id='total']").val("Download (0)");
    $("input[id='total']").attr('disabled', true);
    $(document).on("click", "input[type='checkbox']", function(){
        total=0;
        $("input[type='checkbox']:checked").each(function(){
            total += 1
        });
        if(total==0){
            $("input[id='total']").attr('disabled', true);
        }else{
            $('#total').removeAttr('disabled');
        }            
        $("input[id='total']").val("Download ("+total+")");
        $("input[id='downld']").val(total);
    });

    //modal clients
    $('#myModal').on('show.bs.modal', function (e) {
        var rowid = $(e.relatedTarget).data('id');
        $.ajax({
            type : 'post',
            // url : 'http://www.chesna.co.id/frontend/clients/looks_clients',
            url : 'http://localhost/chesna/frontend/clients/looks_clients',
            data :  'rowid='+ rowid,
            success : function(data){
            $('.fetched-data').html(data);
            }
        });
     });
    //modal pencarian sertifikat
    $('#modal_sertifikat').on('show.bs.modal', function (e) {
        var rowid = $(e.relatedTarget).data('id');
        $.ajax({
            type : 'post',
            // url : 'http://www.chesna.co.id/clients/search/looks',
            url : 'http://localhost/chesna/clients/search/looks',
            data :  'rowid='+ rowid,
            success : function(data){
            $('.fetched-data').html(data);
            }
        });
     });

    //FOR SET TIMEOUT
    setTimeout(function(){$(".alert").fadeIn('slow');}, 500);

    // Animate and WOW Animation
    var wow = new WOW(
        {
            offset: 50,
            mobile: false,
            live: true
        }
    );
    wow.init();

});

setTimeout(function(){$(".alert").fadeOut('slow');}, 5000);

//EVENTS
$(document).ready(function(){
    load_event_selected();    
});

$(document).ready(function(){
    $("#event_selected").change(function(){
        load_event_selected()
    });
});

function load_event_selected()
{
    var event_selected = $("#event_selected").val();      
    $.ajax({        
    // url:"http://www.chesna.co.id/frontend/event/data_event_selected",
    url:"http://localhost/chesna/frontend/event/data_event_selected",
    data:"event_selected=" + event_selected ,
        success: function(html){
            $("#my_event_selected").html(html);
        }
    });
}