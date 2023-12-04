$(function(){
    //ページを表示させる場所の設定
    var $content = $('#div');
    //ボタンをクリックした時の処理
    $(document).on('click', 'ul li a', function(event) {
        event.preventDefault();
        //.gnavi aのhrefにあるリンク先を保存
        var link = $(this).attr("href");
        //リンク先が今と同じであれば遷移させない
        if(link == lastpage){
            return false;
        }else{
            $content.fadeOut(600, function() {
                getPage(link);
            });
            //今のリンク先を保存
            lastpage = link;
        }
    });
    //初期表示
    var lastpage = "./species1.php";
    //ページを取得してくる
    function getPage(elm){
        $.ajax({
            url: elm,
            cache: false,
            dataType: 'html',
        })
        .done(function(data){
            $("#div").fadeOut();
            $content.html(data).fadeIn(600);
        })
        .fail(function(jqXHR, textStatus, errorThrown) {
            // 失敗時の処理
            alert('Error:', jqXHR, textStatus, errorThrown);
        });
    }
});