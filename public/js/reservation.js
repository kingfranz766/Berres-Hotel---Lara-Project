//Room Reservation
document.getElementById("Rooms").addEventListener("change", function() {
    // Retrieve the selected value from the dropdown
    var selectedRoom = this.value;
    
    // Update the value in the input field
    document.getElementById("chosen-room").value = selectedRoom;
});

//Reservation Services Modal
document.addEventListener('DOMContentLoaded', () => {
    const openModalBtn = document.getElementById('openModalBtn');
    const dropdown = document.getElementById('dropdown');
    const chosenServicesInput = document.getElementById('chosen-services');

    openModalBtn.addEventListener('click', (event) => {
        // Get the bounding rectangle of the search icon
        const rect = event.target.getBoundingClientRect();
        
        // Position the dropdown near the search icon
        dropdown.style.top = `${rect.bottom + window.scrollY}px`;
        dropdown.style.left = `${rect.left + window.scrollX}px`;
        dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
    });

    dropdown.addEventListener('change', () => {
        const selectedServices = Array.from(dropdown.querySelectorAll('input[type="checkbox"]:checked'))
            .map(checkbox => checkbox.value);
        chosenServicesInput.value = selectedServices.join(', ');
    });

    document.addEventListener('click', (event) => {
        if (!openModalBtn.contains(event.target) && !dropdown.contains(event.target)) {
            dropdown.style.display = 'none';
        }
    });
});