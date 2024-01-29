document.addEventListener("DOMContentLoaded", () => {
    // Select all elements with the class 'flipdown'
    const flipdownElements = document.querySelectorAll('.flipdown');

    // Exit if no flipdown elements are found
    if (flipdownElements.length === 0) return;

    // Iterate over each flipdown element
    flipdownElements.forEach(elem => {
        // Retrieve the countdown target date and theme from data attributes
        const targetDate = elem.dataset.date;
        const theme = elem.dataset.theme || 'dark'; // Default to 'dark' theme if none specified

        const date = new Date(targetDate);

        // Warn and skip to the next element if the date is invalid
        if (!isValidDate(date)) {
            console.warn('Invalid date in FlipDown countdown:', targetDate);
            return; // 'continue' isn't valid in forEach. Use 'return' to skip to the next iteration.
        }

        // Convert the date to a Unix timestamp and initialize FlipDown
        const unixTimestamp = dateToUnixTimestamp(date);
        new FlipDown(unixTimestamp, { theme }).start();
    });

    // Function to convert a Date object to a Unix timestamp
    function dateToUnixTimestamp(date) {
        // getTime() returns milliseconds. Convert to seconds by dividing by 1000
        return Math.floor(date.getTime() / 1000);
    }

    // Function to check if a variable is a valid Date object
    function isValidDate(d) {
        return d instanceof Date && !isNaN(d.getTime());
    }
});