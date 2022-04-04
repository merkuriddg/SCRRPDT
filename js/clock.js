function convertTime(i) {
    "use strict";
    if (i > 24) {i = i - 24; }  // convert greater than 24
    return i;
}

function checkTime(i) {
    "use strict";
    if (i < 10) {i = "0" + i; }   // add zero in front of numbers < 10
    return i;
}
function startTime() {
    "use strict";
    var today = new Date(),
        dd1 = today.getDate(),
        dd2 = today.getDate(),
        dd3 = today.getDate(),
        dd4 = today.getDate(),
        dd5 = today.getDate(),
        dd6 = today.getDate(),
        mm = today.getMonth() + 1, //January is 0!
        yyyy = today.getFullYear(),
        h1 = today.getHours(),      //Rochester
        h2 = today.getHours() + 5,  //London
        h3 = today.getHours() + 6,  //Zagreb
        h4 = today.getHours() + 6,  //Pristina
        h5 = today.getHours() + 8,  //Dubai
        h6 = today.getHours() + 12, //Beijing
        m = today.getMinutes(),
        s = today.getSeconds(),
        t = setTimeout(startTime, 500);

    if (dd1 < 10) {
        dd1 = '0' + dd1;
    }
    if (dd2 < 10) {
        dd2 = '0' + dd2;
    }
    if (dd3 < 10) {
        dd3 = '0' + dd3;
    }
    if (dd4 < 10) {
        dd4 = '0' + dd4;
    }
    if (dd5 < 10) {
        dd5 = '0' + dd5;
    }
    if (dd6 < 10) {
        dd6 = '0' + dd6;
    }

    if (mm < 10) {
        mm = '0' + mm;
    }

    if (h1 > 23) {
        h1 = 0;
        dd1 = dd1 + 1;
    }
    if (h2 > 23) {
        h2 = convertTime(h2);
        dd2 = dd2 + 1;
    }
    if (h3 > 23) {
        h3 = convertTime(h3);
        dd3 = dd3 + 1;
    }
    if (h4 > 23) {
        h4 = convertTime(h4);
        dd4 = dd4 + 1;
    }
    if (h5 > 23) {
        h5 = convertTime(h5);
        dd5 = dd5 + 1;
    }
    if (h6 > 23) {
        h6 = convertTime(h6);
        dd6 = dd6 + 1;
    }
    
    
    m = checkTime(m);
    s = checkTime(s);
    
    document.getElementById('dat1').innerHTML =
        today = mm + '/' + dd1 + '/' + yyyy;
    document.getElementById('dat2').innerHTML =
        today = mm + '/' + dd2 + '/' + yyyy;
    document.getElementById('dat3').innerHTML =
        today = mm + '/' + dd3 + '/' + yyyy;
    document.getElementById('dat4').innerHTML =
        today = mm + '/' + dd4 + '/' + yyyy;
    document.getElementById('dat5').innerHTML =
        today = mm + '/' + dd5 + '/' + yyyy;
    document.getElementById('dat6').innerHTML =
        today = mm + '/' + dd6 + '/' + yyyy;

    document.getElementById('txt1').innerHTML =
        h1 + ":" + m + ":" + s;
    document.getElementById('txt2').innerHTML =
        h2 + ":" + m + ":" + s;
    document.getElementById('txt3').innerHTML =
        h3 + ":" + m + ":" + s;
    document.getElementById('txt4').innerHTML =
        h4 + ":" + m + ":" + s;
    document.getElementById('txt5').innerHTML =
        h5 + ":" + m + ":" + s;
    document.getElementById('txt6').innerHTML =
        h6 + ":" + m + ":" + s;
    

}


