var time = setInterval(function() {
    var date = new Date();
    document.getElementById("middle").innerHTML = (date.getHours() + ":" + date.getMinutes() + ":" + date.getSeconds());
}, 1000);