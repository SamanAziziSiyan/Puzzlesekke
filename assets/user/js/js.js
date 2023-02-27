jQuery(document).ready(function () {
    $.simpleTicker($("#ticker-fade"),{
        speed : 1000,
        delay : 5000,
        easing : 'swing',
        effectType:'fade'
    });
});

//bootslidemenu
$('#slide-nav').BootSideMenu({

    // 'left' or 'right'
    side: "right",

    // animation speed
    duration: 500,

    // restore last menu status on page refresh
    remember: true,

    // auto close
    autoClose: false,

    // push the whole page
    pushBody: false,

    // close on click
    closeOnClick: true,

    // width

    // icons
    icons: {
        left: 'glyphicon glyphicon-chevron-left',
        right: 'glyphicon glyphicon-chevron-right',
        down: 'glyphicon glyphicon-chevron-down'
    },

    // 'dracula', 'darkblue', 'zenburn', 'pinklady', 'somebook'
    theme: '',

});