<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>My Graduate Page</title>


</head>

<body class="bg-secondary">
    <h1 class="text-center bg-white py-3">My Graduate Page</h1>

    <div class="container">

        <section class="content">

            <article class="bg-white border border-secondary rounded p-5 my-5">
                <h2 class="text-center">Carregar Informações</h2>
                <div class="form-group">
                    <label for="loadUserFile">Carregar minhas informações. Apenas para usuários que já montaram um site e baixaram o arquivo.</label>
                    <input type="file" class="form-control" id="loadUserFile" aria-describedby="fileHelp">
                    <small id="fileHelp" class="form-text text-muted">Apenas arquivo JSON do usuário</small>
                </div>
                <button type="submit" class="btn btn-block btn-outline-primary mb-2">Buscar Arquivo</button>
                </form>
            </article>
            <article class="bg-white border border-secondary rounded p-5">
                <h2 class="text-center">Inserir ou editar Informações</h2>
                <?php if (!isset($_GET['step']) || $_GET['step'] === '1') : ?>
                    <?php include_once('inc/step1.php') ?>
                <?php elseif ($_GET['step'] === '2') : ?>
                    <?php include_once('inc/step2.php') ?>
                <?php elseif ($_GET['step'] === '3') : ?>
                    <?php include_once('inc/step3.php') ?>
                <?php else : ?>
                    <p>Página não existe</p>
                <?php endif ?>
            </article>
        </section>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="vendor/tinymce/tinymce/tinymce.js"></script>

    <!-- to do. Need to organize this -->
    <script>
        tinymce.init({
            selector: '.mytextarea',
            plugins: 'lists media link',         
            toolbar: 'numlist bullist media link'
        });
    </script>

    <script>

        function storeStep1() {
            tinyMCE.triggerSave();
            let name = $('#content #name').val();
            let about = $('#content #about').val();
            let contact = $('#content #contact').val();

            let contentHome = [name, about, contact];
            let contentRasearch = [];
            localStorage.setItem('contentHome', contentHome);
            window.location = 'index.php?step=2';
        }
    </script>

    <script>
        function storeStep2() {
            window.location = 'index.php?step=3';
        }
    </script>

    <script>
        function storeStep3() {
            sendToApi();
        }
    </script>

    <script>
        function sendToApi() {
            let contentHome = localStorage.getItem('contentHome')
            $.ajax({
                    url: "../api/public/website/",
                    method: 'GET',
                    data: {
                        'contentHome': contentHome,
                        'contentResearch': []
                    }
                })
                .done(function(data) {
                    alert(data.data);
                    $('#finalResult').html('<a href="'+data.data+'">Download</a>');
                });
        }
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
</body>

</html>