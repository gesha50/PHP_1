function renderCart() {
    $.ajax(

        {
            type: "GET",
            url: "../models/renderGoodsToCart.php",
            //data: str,
            contentType: 'application/json',
            dataType: "json",
            error: function (req, text, error) { // отслеживание ошибок во время выполнения ajax-запроса
                alert('Хьюстон, У нас проблемы! ' + text + ' | ' + error);
            },
            success: function (answer) {
                console.log(answer[1].price);
                console.log(answer[0].price);
                //document.querySelector('.mainCart').innerHTML = "";
                document.querySelector('.mainCart').innerHTML = "ok"+ answer[0].title + "ok2" + answer[1].title;
            }
        }
    )
}

function buy(id){
    let str = "id="+id;
    $.ajax(
        {
            type: "GET",
            url: "../models/addToCart.php",
            data: str,
            success: function (answer) {
            }
        }
    )
}
function decrement(id){
    let countValue = document.getElementById('counterValue_'+id).value;
    let str = "id="+id+"&counter="+countValue;
    $.ajax(
        {
            type: "GET",
            url: "../models/decrement.php",
            data: str,
            success: function (res) {
                if(res == 0){
                    renderCart();
                } else {
                    document.getElementById("counterValue_"+id).value = res;
                }
            }
        }
    )
}
function increment(id){
    let str = "id="+id;
    $.ajax(
        {
            type: "GET",
            url: "../models/increment.php",
            data: str,
            success: function (answer) {
                document.getElementById("counterValue_"+id).value = answer;
            }
        }
    )
}







