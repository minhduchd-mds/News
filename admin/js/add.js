$(document).ready(function () {
//     thêm cở sở dữ liệu nhập từ bàn phím  .
//    lưu chữ text
//     tạo post lên database
    $('#add').click(function () {
        $.ajax({
            url : "post.php",
            dataType: jsonpCallback,
            success : function (data) {
                // var dataHtml = data;
                // var text ='';
                // for(var i = 0;i <= dataHtml;i++){
                //     var title  = dataHtml.title;
                //     var images  = dataHtml.images;
                //     var conten = dataHtml.conten;
                //     text +=''
                // }
                $("#text").html(data);
            }
        });
    })

});