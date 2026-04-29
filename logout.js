function logout() {
    fetch('logout.php')
        .then(response => response.text())
        .then(data => {
            alert("Logout effettuato con successo!");
            window.location.href = "logout.html"; // reindirizza al login
        })
        .catch(error => {
            console.error("Errore:", error);
        });
}