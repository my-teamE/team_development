document.querySelector(".date").innerHTML = showTime();

function showTime(){
    var now = new Date();
    var month = now.getMonth();
    var day = now.getDate();
    var hour = now.getHours();

    var text = (Number(now.getMonth()) + 1) + "月" + day + "日" + hour + "時更新";

    return text;
}


