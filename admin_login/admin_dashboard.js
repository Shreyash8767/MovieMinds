document.addEventListener('DOMContentLoaded', () => {
    const feedbackTableBody = document.querySelector('#feedbackTable tbody');

    // Retrieve feedback data from localStorage
    const feedbackData = JSON.parse(localStorage.getItem('feedback')) || [];

    feedbackData.forEach(feedback => {
        const row = document.createElement('tr');
        row.innerHTML = `
            <td>${feedback.name}</td>
            <td>${feedback.email}</td>
            <td>${feedback.phoneNumber}</td>
            <td>${feedback.message}</td>
        `;
        feedbackTableBody.appendChild(row);
    });
});
