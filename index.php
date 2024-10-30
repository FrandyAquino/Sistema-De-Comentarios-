<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Plantilla de Negocios - Plantilla de Inicio de Bootstrap</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
</head>
<body>
    <?php include 'components/header.php'; ?>

    <header class="bg-dark py-5">
        <div class="container px-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-6 text-center my-5">
                    <h1 class="display-5 fw-bolder text-white mb-2">Presenta tu negocio de una nueva manera</h1>
                    <p class="lead text-white-50 mb-4">Diseña y personaliza rápidamente sitios móviles adaptables con Bootstrap, ¡la herramienta de código abierto más popular para frontend!</p>
                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                        <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#features">Comenzar</a>
                        <a class="btn btn-outline-light btn-lg px-4" href="#!">Saber más</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="bg-light py-5">
        <div class="container px-5 my-5 px-5">
            <div class="text-center mb-5">
                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
                <h2 class="fw-bolder">Ponte en contacto</h2>
                <p class="lead mb-0">Nos encantaría saber de ti</p>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-6">
                    <?php 
                    include 'components/contactForm.php'; 

                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $name = htmlspecialchars($_POST['name']);
                        $email = htmlspecialchars($_POST['email']);
                        $phone = htmlspecialchars($_POST['phone']);
                        $message = htmlspecialchars($_POST['message']);
                        
                        include 'components/messageCard.php';
                    }
                    ?>

                </div>
            </div>
        </div>
    </section>

    <?php include 'components/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>
</html>
