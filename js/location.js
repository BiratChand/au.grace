/**
 * Location handling JavaScript
 */

document.addEventListener('DOMContentLoaded', function() {
    // City selector dropdown functionality
    const cityDropdown = document.getElementById('cityDropdown');
    const cityItems = document.querySelectorAll('.city-selector .dropdown-item');
    
    if (cityItems) {
        cityItems.forEach(item => {
            item.addEventListener('click', function(e) {
                e.preventDefault();
                const city = this.textContent.trim();
                
                // Set cookie directly from JS as backup
                setCookie('user_city', city, 30);
                
                // Redirect to the same page with city parameter
                window.location.href = updateQueryStringParameter(window.location.href, 'city', city);
            });
        });
    }
    
    // Function to set cookie
    function setCookie(name, value, days) {
        let expires = "";
        if (days) {
            const date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            expires = "; expires=" + date.toUTCString();
        }
        document.cookie = name + "=" + (value || "") + expires + "; path=/";
    }
    
    // Function to update URL parameter
    function updateQueryStringParameter(uri, key, value) {
        const re = new RegExp("([?&])" + key + "=.*?(&|$)", "i");
        const separator = uri.indexOf('?') !== -1 ? "&" : "?";
        
        if (uri.match(re)) {
            return uri.replace(re, '$1' + key + "=" + value + '$2');
        } else {
            return uri + separator + key + "=" + value;
        }
    }
    
    // Optional: IP-based geolocation as fallback if no city is selected
    // This is a client-side fallback in case the PHP detection fails
    function detectCityFromIP() {
        // Check if we already have a city cookie
        if (document.cookie.split(';').some((item) => item.trim().startsWith('user_city='))) {
            return; // We already have a city, no need to detect
        }
        
        // Use ip-api.com for geolocation
        fetch('http://ip-api.com/json/?fields=status,city')
            .then(response => response.json())
            .then(data => {
                if (data && data.status === 'success' && data.city) {
                    const city = data.city.toUpperCase();
                    setCookie('user_city', city, 30);
                    
                    // Reload the page to apply the city
                    window.location.reload();
                }
            })
            .catch(error => {
                console.error('Error detecting city:', error);
            });
    }
    
    // Uncomment the line below if you want to enable client-side IP detection as fallback
    // detectCityFromIP();
}); 