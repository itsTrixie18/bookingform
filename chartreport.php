<canvas id="bookingChart" width="400" height="200"></canvas>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
fetch('chart.php')
.then(res => res.json())
.then(data => {
    const labels = data.map(item => item.date);
    const totals = data.map(item => item.total);

    new Chart(document.getElementById('bookingChart'), {
        type: 'bar', // can also use 'line' or 'pie'
        data: {
            labels: labels,
            datasets: [{
                label: 'Number of Bookings',
                data: totals,
                backgroundColor: 'rgba(54, 162, 235, 0.6)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            scales: { y: { beginAtZero: true } }
        }
    });
});
</script>
