var ctx1 = document.getElementById('adsTrafficChart').getContext('2d');
        var adsTrafficChart = new Chart(ctx1, {
            type: 'bar',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                datasets: [{
                    label: 'Ads Traffic',
                    data: [1200, 1900, 3000, 5000, 2300, 3400, 4700],
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
                plugins: {
                    legend: {
                        labels: {
                            color: 'black' // Adjust the legend color to white
                        }
                    }
                }
            }
        });

        var ctx2 = document.getElementById('siteTrafficChart').getContext('2d');
        var siteTrafficChart = new Chart(ctx2, {
            type: 'doughnut',
            data: {
                labels: ['Youtube', 'Facebook', 'Twitter', 'Instagram', 'Tiktok', 'Shopee'],
                datasets: [{
                    label: 'Site Traffic',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        labels: {
                            color: 'black' // Adjust the legend color to white
                        }
                    }
                }
            }
        });