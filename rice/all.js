/*riceType.html的表格顯示 */
window.onload = function(){
    var rice = [
        {
            type:'圓米',
            img:'Images/roundrice.jpg',
            price:26,
            country:'台灣',
            year:2021,
            eng:'round'
        },
        {
            type:'長米',
            img:'Images/longrice.jpg',
            price:29,
            country:'台灣',
            year:2021,
            eng:'long'
        },
        {
            type:'糙米',
            img:'Images/brownrice.jpg',
            price:30,
            country:'台灣',
            year:2021,
            eng:'brown'
        }
    ];
    var riceTable;
    for(var i=0; i<rice.length; i++){
        riceTable += "<tr>";
        riceTable += "<td>"+rice[i].type + "</td>";
        riceTable += "<td><img src='"+rice[i].img+"'</td>";
        riceTable += "<td>"+rice[i].price + "</td>";
        riceTable += "<td>"+rice[i].country + "</td>";
        riceTable += "<td>"+rice[i].year + "</td>";
        riceTable += "<td><input type='number' name='"+rice[i].eng+"'Num value='10' min='10' max='1000' step='5'></td>";
        riceTable += "<td><input type='submit' name='"+rice[i].eng+"'Buy value='加入購物車'></td>";
        riceTable += "</tr>";
    }
    $("#riceIntroduce").html(riceTable);
}

/*顯示密碼設定*/
var flag = 0, flag2 = 0;
function showEye1() {
    if (flag == 0) {
        document.getElementById("pw1").type = "text";
        document.getElementById("eye1").className = "far fa-eye-slash";
        flag = 1;
    } else {
        document.getElementById("pw1").type = "password";
        document.getElementById("eye1").className = "far fa-eye";
        flag = 0;
    }
}
function showEye2() {
    if (flag2 == 0) {
        document.getElementById("pw2").type = "text";
        document.getElementById("eye2").className = "far fa-eye-slash";
        flag2 = 1;
    } else {
        document.getElementById("pw2").type = "password";
        document.getElementById("eye2").className = "far fa-eye";
        flag2 = 0;
    }
}

// 切換中英文
function changeLan(lan) {
    document.getElementById('buy').innerHTML = " ";
    document.getElementById('address').innerHTML = " ";
    document.getElementById('intr').innerHTML = " ";
    document.getElementById('login').innerHTML = " ";
    document.getElementById('res').innerHTML = " ";
    document.getElementById('intrBuy').innerHTML = " ";
    document.getElementById('cart').innerHTML = " ";
    $("body").attr('lan', lan);
}
