window.onload = function(){
        (function () {
            var date = new Date();
            var time = date.getHours() + ':' + date.getMinutes() + ':' + date.getSeconds();
            document.getElementsByTagName('div')[1].innerHTML = "Aeg JS' is on: "+time;
            window.setTimeout(arguments.callee, 1000);
            
        })();
    };