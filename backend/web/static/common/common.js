$(function () {
    $('.logout').click(function () {
        $.post('/system/login/logout',{},function (json) {
            if(json.status == 1){
                console.log(json)
                window.location.reload();
            }

        })
    })
})