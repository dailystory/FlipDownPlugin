document.addEventListener("DOMContentLoaded", function () {
    const date = new Date(document.getElementById('flipdown').dataset.date);
    const timeInMillisecond = date.getTime();
    const unix_timestamp = Math.floor(date.getTime() / 1000);

    var flipdown = new FlipDown(Number(unix_timestamp))

    // Start the countdown
    .start();
});