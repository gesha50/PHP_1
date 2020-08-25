
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
function decrement(id, counter){
    console.log(counter);
    let str = "id="+id+"&counter="+counter;
    let count = document.getElementById('counterValue');
    count = counter;
    $.ajax(
        {
            type: "GET",
            url: "../models/decrement.php",
            data: str,
            success: function (res) {
                if(res == 0){
                    alert('ok');
                    document.getElementsByClassName('goodsItem').innerHTML = "";
                } else {
                    document.getElementById("counterValue").innerText = res;
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
                document.getElementById("counterValue").innerText = answer;
            }
        }
    )
}







