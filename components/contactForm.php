<form id="contactForm" action="procesar.php" method="POST">
    <div class="form-floating mb-3">
        <input class="form-control" id="name" name="name" type="text" placeholder="Ingresa tu nombre..." required />
        <label for="name">Nombre completo</label>
    </div>
    <div class="form-floating mb-3">
        <textarea class="form-control" id="message" name="message" placeholder="Ingresa tu mensaje aquí..." style="height: 10rem" required></textarea>
        <label for="message">Mensaje</label>
    </div>
    <div class="d-grid">
        <button class="btn btn-primary btn-lg" id="submitButton" type="submit">Enviar</button>
    </div>
</form>

<div id="responseMessage" class="alert alert-success mt-3" role="alert" style="display:none;"></div>
<div id="cardsContainer" class="mt-3"></div>

<script>
document.getElementById("contactForm").addEventListener("submit", function(event) {
    event.preventDefault(); 

    const formData = new FormData(this);

    fetch("procesar.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.status === "success") {
            const responseMessage = document.getElementById("responseMessage");
            responseMessage.style.display = "block";
            responseMessage.textContent = data.message;

            const card = document.createElement("div");
            card.className = "card mt-3";
            card.innerHTML = `
            <div class="card">
                <div class="card-body p-4">
                    <div class="d-flex">
                        <div class="flex-shrink-0"><i class="bi bi-chat-right-quote-fill text-primary fs-1"></i></div>
                            <div class="ms-4">
                                <p class='mb-1'>${data.entry.name}</p>
                            <div class='small text-muted'>
                                <p class="card-text">${data.entry.message}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            `;
            document.getElementById("cardsContainer").prepend(card);
            document.getElementById("contactForm").reset();
        }
    })
    .catch(error => console.error("Error:", error));
});
</script>
