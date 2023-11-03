document.addEventListener("DOMContentLoaded", function () {

    const flipdown_elems = document.querySelectorAll('.flipdown');

    // nothing to do
    if (0 === flipdown_elems.length)
        return;

    // process each one we find
    var arr = [...flipdown_elems]; // converts NodeList to Array
    arr.forEach(elem => {

        let dataset_date = elem.dataset.date;
        const theme = elem.dataset.theme ?? 'dark';

        let date = new Date(dataset_date);

        if (!isValidDate(date))
        {
            console.warn('Invalid date in FlipDown countdown');
            continue;
        }

        let unix_timestamp = dateToUnixTimestamp(date);

        new FlipDown(unix_timestamp, {
            theme: theme
        }).start();
    
    });

    // convert a date to a unixtime stamp
    function dateToUnixTimestamp(date)
        const timeInMillisecond = date.getTime();
        const unix_timestamp = Math.floor(date.getTime() / 1000);

        return Number(unix_timestamp);
    }

    function isValidDate(d) {
        return d instanceof Date && !isNaN(d);
    }
});