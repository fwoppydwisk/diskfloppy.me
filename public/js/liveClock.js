function time() {
    var span = document.getElementById("clock");
    var d = new Date();
    span.textContent = d.toLocaleString('en-US', {hour: '2-digit', minute: '2-digit', second: '2-digit', hour12: false, timeZone: 'Europe/London' })
}
setInterval(time, 1000);
