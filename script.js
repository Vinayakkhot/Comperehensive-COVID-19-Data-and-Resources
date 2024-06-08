
// Function to fetch COVID-19 data
function fetchCovidData() {
    fetch('https://api.covid19india.org/data.json')
        .then(response => response.json())
        .then(data => {
            // Update the HTML elements with the data
            document.getElementById('Active Cases').textContent = data.Active.toLocaleString();
            document.getElementById('Death Cases').textContent = data.Deaths.toLocaleString();
            document.getElementById('Recovered Cases').textContent = data.Recovered.toLocaleString();
        })
        .catch(error => {
            console.error('Error fetching COVID-19 data:', error);
        });
}

// Call the fetchCovidData function to load data on page load
fetchCovidData();
