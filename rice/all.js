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