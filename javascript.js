var day;


function getMonth() {
    var date = new Date();
    var month = date.getMonth();
    if (month == 0) {
        document.getElementById('month').innerHTML = "January";
        month = "January";
    } else if (month == 1) {
        document.getElementById('month').innerHTML = "February";
        month = "February";
    } else if (month == 2) {
        document.getElementById('month').innerHTML = "March";
        month = "March";
    } else if (month == 3) {
        document.getElementById('month').innerHTML = "April";
        month = "April";
    } else if (month == 4) {
        document.getElementById('month').innerHTML = "May";
        month = "May";
    } else if (month == 5) {
        document.getElementById('month').innerHTML = "June";
        month = "June";
    } else if (month == 6) {
        document.getElementById('month').innerHTML = "July";
        month = "July";
    } else if (month == 7) {
        document.getElementById('month').innerHTML = "August";
        month = "August";
    } else if (month == 8) {
        document.getElementById('month').innerHTML = "September";
        month = "September";
    } else if (month == 9) {
        document.getElementById('month').innerHTML = "October";
        month = "October";
    } else if (month == 10) {
        document.getElementById('month').innerHTML = "November";
        month = "November";
    } else if (month == 11) {
        document.getElementById('month').innerHTML = "December";
        month = "December";
    }
    return month;
}

function check(value) {
    document.querySelectorAll(".selected").forEach(x => x.className = "");
    day = value;
    document.getElementById("bookingTimes").style.visibility = "visible";
    var content = document.getElementsByTagName("li");
    if (day == value) {
        content[day + 6].className = "selected";
    }

    return day;
}


function time(choice) {

    if (choice == 0) {
        choice = "2:30 P.M - 4:00 P.M";
    } else if (choice == 1) {
        choice = "4:30 P.M - 6:00 P.M";
    } else if (choice == 2) {
        choice = "6:30 P.M - 8:00 P.M";
    }
    var outputTime = day + ", " + month.innerHTML + " " + choice;
    document.getElementById("submit").style.visibility = "visible";
    addBooking(outputTime);
    return outputTime;
}

function addBooking(value2) {
    // creates an array of all headers
    var check = document.getElementsByTagName('h1');
    // loop checks if there is already a header, if not then make one and if there is it will replace it with the new selected booking
    if (typeof(check[0]) != 'undefined' && check[0] != null) {
        check[0].remove();
        var p = document.getElementById("output");
        var head = document.createElement('h1');
        head.innerHTML = "Congratulations, your booking is on:" + "<br>" + value2;
        head.style.textAlign = "center";
        p.appendChild(head);
    } else {
        var p = document.getElementById("output");
        var head = document.createElement('h1');
        head.innerHTML = "Congratulations, your booking is on: " + "<br>" + value2;
        head.style.textAlign = "center";
        p.appendChild(head);
    }

}