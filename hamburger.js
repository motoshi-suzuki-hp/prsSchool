
// ボタン、メニュー、モーダル要素の取得
var btn = document.getElementById("button");
var menu = document.getElementById("menu_sp");
var modal = document.getElementById("modal");
    
// ボタンがクリックされたらclassを追加
btn.addEventListener("click",function(){
    menu.classList.toggle("add-menu_sp");
    modal.classList.toggle("add-modal_sp");
    btn.classList.toggle("active");
});