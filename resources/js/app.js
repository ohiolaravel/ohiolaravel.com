require('./bootstrap');

import flatpickr from "flatpickr";

if (document.getElementById('start_at')) {
    flatpickr('#start_at', {enableTime: true});
}

if (document.getElementById('end_at')) {
    flatpickr('#end_at', {enableTime: true});
}
