function renderCart() {
    $.ajax(

        {
            type: "GET",
            url: "../models/goodsToCart.php",
            //data: str,
            success: function (answer) {
                console.log(answer);
                document.querySelector('.mainCart').innerHTML = "";
                document.querySelector('.mainCart').innerHTML = ` `;
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
    console.log(countValue);
    let str = "id="+id+"&counter="+countValue;
    $.ajax(
        {
            type: "GET",
            url: "../models/decrement.php",
            data: str,
            success: function (res) {
                if(res == 0){
                    renderCart();
                    //document.querySelector('.goodsItem').innerHTML = ' ';
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







