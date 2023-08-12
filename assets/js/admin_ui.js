setTimeout(function () {
    document.getElementById('error').style.display = 'none';
}, 5000); // <-- time in milliseconds

const divs = ['d1', 'd2', 'd3', 'd4', 'd5']
let i = 0
document.getElementById('d1').style.display = 'block';
document.getElementById('d2').style.display = 'none';
document.getElementById('d3').style.display = 'none';
document.getElementById('d4').style.display = 'none';
document.getElementById('d5').style.display = 'none';



const toggleTo2 = document.getElementById("b2");
const toggleTo1 = document.getElementById("b1");
const toggleTo3 = document.getElementById("b3");
const toggleTo4 = document.getElementById("b4");
const toggleTo5 = document.getElementById("b5");

const div1 = document.getElementById("d1");
const div2 = document.getElementById("d2");
const div3 = document.getElementById("d3");
const div4 = document.getElementById("d4");
const div5 = document.getElementById("d5");

const hide = el => el.style.setProperty("display", "none");
const show = el => el.style.setProperty("display", "block");

hide(d2);

toggleTo2.addEventListener("click", () => {
    hide(d1);

    hide(div3);
    hide(div4);
    hide(div5);
    show(div2);
});

toggleTo1.addEventListener("click", () => {
    hide(div2);
    hide(div3);
    hide(div4);
    hide(div5);

    show(div1);
});

toggleTo3.addEventListener("click", () => {
    hide(div2);
    hide(div1);
    hide(div4);
    hide(div5);

    show(div3);
});

toggleTo4.addEventListener("click", () => {
    hide(div2);
    hide(div1);
    hide(div3);
    hide(div5);

    show(div4);
});

toggleTo5.addEventListener("click", () => {
    hide(div2);
    hide(div1);
    hide(div4);
    hide(div3);

    show(div5);
});


function myFunction() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}

function myFunction1() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("myInput1");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable1");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}


function myFunction2() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("myInput2");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable2");
    tr = table.getElementsByTagName("div");
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("div")[0];
        if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}
var x = ''


function toReply(text,email) {
    localStorage.text = text
    localStorage.email = email
    location.replace('feed_reply.php')





}

function see(text,reply) {
    localStorage.text = text
    localStorage.reply = email
    location.replace('sp_q.php')





}









