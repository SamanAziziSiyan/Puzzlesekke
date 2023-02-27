$(document).ready(function(){
    persian={0:'۰',1:'۱',2:'۲',3:'۳',4:'۴',5:'۵',6:'۶',7:'۷',8:'۸',9:'۹'};
    function traverse(el){
        if(el.nodeType==3){
            var list=el.data.match(/[0-9]/g);
            if(list!=null && list.length!=0){
                for(var i=0;i<list.length;i++)
                    el.data=el.data.replace(list[i],persian[list[i]]);
            }
        }
        for(var i=0;i<el.childNodes.length;i++){
            traverse(el.childNodes[i]);
        }
    }
    traverse(document.body);
});
//check checkbox
$(document).ready(function(){
    $(".select-all").click(function(){
        if(this.checked){
            $(".checkbox").each(function(){
                this.checked = true;
            });
        }else{
            $(".checkbox").each(function(){
                this.checked = false;
            });
        }
    });
});

$(document).ready(function(){
    $('input:radio[name="series"]').filter('[value="no-series"]').attr('checked', true);
});
//comment operator show
$(document).ready(function() {
    $('.comment-row-show').hover(function() {
        $(this).addClass('active-op');
        $(this).parents('.comment-row-show').removeClass('active-op');
    }, function() {
        $(this).removeClass('active-op');
        $(this).parents('.comment-row-show').addClass('active-op');
    });
});
//datepicker
/*$(document).ready(function() {
    $(".datepick").datepicker({
        showOn: 'button',
        buttonImage: 'css/images/calendar.png',
        dateFormat: 'yy-mm-dd',
        buttonImageOnly: true
    });
});*/
//add input by click
$(document).ready(function() {
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID
    /*var poll_item_label      = $(".poll-item-label"); //poll_item_label*/

    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div><input type="text" class="form-control"  name="item[]" placeholder="آیتم نظرسنجی..."><a href="#" class="remove_field">حذف</a></div>'); //add input box
        }
       /* poll_item_label.show();*/
    });
    $(wrapper).on("click",".remove_field", function(e){ //userActions click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});
//date picker

$(function () {
    $(".date_picker").persianDatepicker({ theme: "lightorang", alwaysShow: false,
        formatDate: "YYYY/0M/0D"
    });


});

var myBarChart = new Chart(ctx, {
    type: 'bar',
    data: data,
    options: options
});


