//radar
var ctxR = document.getElementById("radarChart").getContext('2d');
var myRadarChart = new Chart(ctxR, {
    type: 'radar',
    data: {
        labels: ["Action", "Drama", "Romantic", "Kids", "Motivational", "Documental", "Comedy"],
        datasets: [{
                label: "Rented movies",
                data: [6, 5, 9, 8, 5, 5, 4],
                backgroundColor: [
                    'rgba(105, 0, 132, .2)',
                ],
                borderColor: [
                    'rgba(200, 99, 132, .7)',
                ],
                borderWidth: 2
            },
            {
                label: "Quantity",
                data: [2, 4, 4, 1, 9, 2, 10],
                backgroundColor: [
                    'rgba(0, 250, 220, .2)',
                ],
                borderColor: [
                    'rgba(0, 213, 132, .7)',
                ],
                borderWidth: 2
            }
        ]
    },
    options: {
        responsive: true
    }
});
//line
var ctxL = document.getElementById("lineChart").getContext('2d');
var myLineChart = new Chart(ctxL, {
    type: 'line',
    data: {
        labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
        datasets: [{
                label: "New users",
                data: [65, 59, 80, 81, 56, 55, 40, 46,35,87,76],
                backgroundColor: [
                    '#0f40a95f',
                ],
                borderColor: [
                    '#0f3fa9',
                ],
                borderWidth: 2
            },
            {
                label: "Rented movies",
                data: [28, 48, 40, 19, 86, 27, 90,89,65,87,55],
                backgroundColor: [
                    '#ffab0370',
                ],
                borderColor: [
                    '#ffa903',
                ],
                borderWidth: 2
            }
        ]
    },
    options: {
        responsive: true
    }
});