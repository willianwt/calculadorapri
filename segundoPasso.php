<?php
$qtdMaterias = $_POST['qtdMaterias'];

?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Calculadora de nota da PRI</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <title>Calculadora de nota da PRI</title>

    <style>
        body,html {
            height: 98%;
            font-family: 'Raleway', sans-serif;

        }
        img{
            position: absolute;
            opacity: 0.3;
        }
    </style>
</head>
<body>
    <div class="row mx-1">
        <div class="col-sm-12 mx-auto mb-5 p-2" >
            <img src="estrelaudf.png" alt="Estrela UDF" class="img-responsive" style="background: transparent;">
            <div class="text-center mb-5">
                <h1>Calculadora de Nota da PRI - UDF</h1>
                <h5>Prova Regimental Integralizada</h5>
            </div>
            <form method="POST" action="resultado.php">
                <div class="container-fluid row">
            <?php
                for ($i = 1; $i <= $qtdMaterias; $i++){
                    echo '<div class="border border-info rounded p-1 m-1 col-sm-5 align-items-center" style="background-color: #EEF7FA;">
                            <div class="form-group">
                              <label for="qtdMaterias"><h5>Informe o nome da '.$i.'ª Disciplina:</h5></label>
                              <input type="text" class="form-control" id="nomeMateria'.$i.'" name="nomeMateria'.$i.'" aria-describedby="nomeMateria'.$i.'" placeholder="Nome da Disciplina"  required>
                          </div>';
                    echo '<div class="form-group">
                              <label for="qtdQuestoesMateria"><h5>Informe o número de questões da '.$i.'ª Disciplina:</h5></label>
                              <input type="number" class="form-control" id="qtdQuestoesMateria'.$i.'" name="qtdQuestoesMateria'.$i.'" aria-describedby="qtdQuestoesMateria'.$i.'" placeholder="Número de questões" required>
                          </div>';
                    echo '<div class="form-group">
                              <label for="qtdAcertosMateria"><h5>Informe o número de acertos na '.$i.'ª Disciplina: </h5></label>
                              <input type="number" class="form-control" id="qtdAcertosMateria'.$i.'" name="qtdAcertosMateria'.$i.'" aria-describedby="qtdAcertosMateria'.$i.'" placeholder="Quantidade de Acertos" required>
                          </div>';
                    echo '</div><hr>';
            }
            ?>
                </div>

                <input type="hidden" name="qtdMaterias" value="<?php echo $qtdMaterias; ?>">
                <button type="submit" class="btn btn-block btn-primary my-2 col-sm-6 mx-auto">Enviar</button>
                <a href="javascript:history.back()" class="btn btn-block btn-warning my-2 col-sm-6 mx-auto">Voltar</a>

            </form>
            </div>
        </div>
    </div>
    <footer class="footer fixed-bottom text-right" style="font-size: .7em">
        Desenvolvido por <a href="mailto:willianwt@gmail.com">Willian Taiguara<a>
    </footer>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="js/bootstrap.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>
