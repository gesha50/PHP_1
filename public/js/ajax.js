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
                let elem = document.querySelector('.mainCart')
                let item;
                if(answer.length){
                    console.log(answer.length)
                    let totalPrice = 0;
                    for (let key in answer) {
                        totalPrice += answer[key].price * answer[key].counter;
                        let itemAllPrice = answer[key].price * answer[key].counter;
                        item = '<div class="goodsItem">';
                        item += '<a  href="item.php?id=' + answer[key].id_good +'"><img class="imgMini" src="' + answer[key].urlB + '" alt=""></a>\n'
                        item += '<div class="itemText">';
                        item += '<h3>' + answer[key].title + '</h3> <br>';
                        item += '<p>Цена:' + answer[key].price + '</p> <br></div>';
                        item += '<div class="counterDiv">';
                        item += '<a class="counterCart decrement_' + answer[key].cart_id + '" onclick="decrement(' + answer[key].cart_id + ',' + answer[key].counter + ')">-</a>';
                        item += '<input id="counterValue_' + answer[key].cart_id + '" class="counterCart" value="' + answer[key].counter + '">\n';
                        item += '<a class="counterCart increment_' + answer[key].cart_id + '" onclick="increment(' + answer[key].cart_id + ')">+</a></div>';
                        item += '<span class="price">цена: ' + itemAllPrice + '</span>\n';
                        item += '<a onclick="decrement(' + answer[key].cart_id + ',1)" class="delete">Удалить</a></div>\n';
                        if(key == 0){
                            elem.innerHTML = '';
                        }
                        elem.innerHTML += item;
                    }
                    totalDiv = '<span class="totalPrice">Итого: ' + totalPrice + '</span>';
                    totalDiv += '<a href="order.php"><button class="button allBuy">Оформить заказ</button></a>\n';
                    elem.innerHTML += totalDiv;
                } else {
                    elem.innerHTML = "Корзина пуста =(";
                }
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
function decrement(id,counter){
    if(!counter){
        counter = document.getElementById('counterValue_'+id).value;
    }
    let str = "id="+id+"&counter="+counter;
    $.ajax(
        {
            type: "GET",
            url: "../models/decrement.php",
            data: str,
            success: function (res) {
                if(res == 0){
                    renderCart();
                } else {
                    renderCart();
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
                renderCart();
            }
        }
    )
}

function aboutOrder(id) {
    console.log(id);
    let str = "id="+id;
    $.ajax(
        {
            type: "GET",
            url: "../models/aboutOrderId.php",
            data: str,
            dataType: "json",
            success: function (answer) {
                console.log(answer);
                let modal = document.querySelector('.popup__text');
                let totalPrice = 0;
                let itemAllPrice = 0;
                let item = '<table><tr><th>Имя товара:</th><th>стоимость:</th><th>кол-во:</th><th>всего:</th></tr>';
                for (let key in answer) {
                    totalPrice = answer[key].price * answer[key].counter;
                    itemAllPrice += answer[key].price * answer[key].counter;
                    item += '<tr><td>' + answer[key].title + '</td>';
                    item += '<td>' + answer[key].price + '</td>';
                    item += '<td>' + answer[key].counter + '</td>';
                    item += '<td>' + totalPrice + '</td></tr>';

                    if(key == 0){
                        modal.innerHTML = '';
                    }
                }
                item += '</table>';
                item += '<p>Общая стоимость заказа: ' + itemAllPrice + '</p>';

                modal.innerHTML += item;
            }
        }
    )
}







