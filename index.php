<!--###################################################################################################################################
#		PROJETO CALCULADORA DE NOTA DA PRI - PROVA REGIMENTAL INTEGRALIZADA
#		AUTOR: 	WILLIAN TAIGUARA
#		CONTATO: willianwt@gmail.com
#######################################################################################################################################-->

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <title>Calculadora de nota da PRI</title>

    <style>
        body,html {
            height: 100%;
            font-family: 'Raleway', sans-serif;
        }
        *{
            z-index: 1;
        }
        #estrela {
            position: absolute;
            z-index: -1 !important;
            background: transparent;
            width: 9vw;
        }
    </style>
</head>
<body>
    <div class="row h-100 mx-1">
        <div class="col-sm-6 mx-auto align-self-center mb-5 border border-dark rounded py-2" style="background-color: #EEF7FA;">
            <img src="estrelaudf.png" alt="Estrela UDF" id="estrela" class="img-responsive float-left">

            <div class="text-center mb-5">
                <h1>Calculadora de Nota da PRI - UDF</h1>
                <h4>Prova Regimental Integralizada</h4>
            </div>
            <form method="get" action="segundoPasso.php">
                <div class="form-group text-center">
                    <label for="qtdMaterias"><h4>Informe a quantidade de DISCIPLINAS da PRI:</h4></label>
                    <input type="number" class="form-control col-sm-4 text-center mx-auto" id="qtdMaterias" name="qtdMaterias" aria-describedby="qtdMaterias" placeholder="Mínimo de 1 / Máximo de 20" min="1" max="20" required>
                </div>
                <button type="submit" class="btn btn-primary float-right">Enviar</button>
            </form>
        </div>
    </div>
    <footer class="footer fixed-bottom text-right" style="font-size: .7em">
        Desenvolvido por Willian Taiguara em <a href="mailto:willianwt@gmail.com">willianwt@gmail.com<a>
    </footer>
    <!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="js/bootstrap.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>