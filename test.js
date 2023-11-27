$(function(){
//ページを表示させる場所の設定
var $content = $('.displayArea');
//ボタンをクリックした時の処理
$(document).on('click', '.gnavi a', function(event) {
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
// 遷移可能であればローディング表示させる
$("#loader").show();

});
//初期表示
getPage("test1.html");
var lastpage = "test1.html";

//ページを取得してくる
function getPage(elm){
$.ajax({
type: 'GET',
url: elm,
dataType: 'html',
success: function(data){
$("#loader").fadeOut();
$content.html(data).fadeIn(600);
},
error:function() {
alert('問題が発生しました。');
}
});
}
});