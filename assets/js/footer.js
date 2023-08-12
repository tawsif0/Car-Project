setTimeout(function () {
        document.getElementById('error').style.display = 'none';
    }, 5000);
var el = document.getElementById('to-admin-panel');
if (el != '') {

        el.onclick = showFoo;


}

function showFoo() {
        if (localStorage.ad_log == "true") {
                location.replace("admin.php");

        } else {
                location.replace("adminlog.php");

        }
}