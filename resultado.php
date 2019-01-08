<?php
$qtdMaterias = $_GET['qtdMaterias'];
$totalQuestoes = 0;
$totalAcertos = 0;
for ($i = 1; $i <= $qtdMaterias; $i++) {
    ${'nomeMateria' . $i} = $_GET['nomeMateria' . $i]; // nome da matéria
    ${'qtdQuestoesMateria' . $i} = $_GET['qtdQuestoesMateria' . $i]; // quantidade de questões de cada materia
    ${'qtdAcertosMateria' . $i} = $_GET['qtdAcertosMateria' . $i]; // quantidade de acertos de cada materia
    ${'notaMateria' . $i} = round((3 / $_GET['qtdQuestoesMateria' . $i]) * $_GET['qtdAcertosMateria' . $i], 2); // nota da materia = (3 / quantidade de questoes da materia) * quantidade de acertos da materia
    $totalQuestoes = $totalQuestoes + $_GET['qtdQuestoesMateria' . $i]; // total de questões da prova
    $totalAcertos = $totalAcertos + $_GET['qtdAcertosMateria' . $i]; //total de acertos
    $notaGlobal = round((2 / $totalQuestoes)*$totalAcertos, 2);

}
for ($i = 1; $i <= $qtdMaterias; $i++){
    ${'notaTotalMateria'.$i} = $notaGlobal + ${'notaMateria' . $i};

}
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
            height: 100%;
            font-family: 'Raleway', sans-serif;

        }
        .notaGlobal{
            font-size: 20px;
        }
        img{
            position: absolute;
            opacity: 0.3;
        }

    </style>
</head>
<body>
        <div class="col-sm-12">
            <img src="estrelaudf.png" alt="Estrela UDF" class="img-responsive" style="background: transparent;">

            <div class="text-center mb-5">
                <h1>Calculadora de Nota da PRI - UDF</h1>
                <h4>Prova Regimental Integralizada</h4>
            </div>

                <div class="form-group text-center">
                    <label><h2>Resultado:</h2></label>
                    <div>
                        <p class="notaGlobal">Sua prova continha <?php echo $totalQuestoes; ?> questões.</p>
                        <p class="notaGlobal">Você acertou no total <?php echo $totalAcertos; ?> questões.
                        <p class="notaGlobal"><b>Sua nota global é <?php echo number_format($notaGlobal,2); ?>.</b></p>
                    </div>
                    <div class="row">
                    <?php
                        for ($i = 1; $i <= $qtdMaterias; $i++){
                            echo '<div class="border border-dark col-sm-5  mx-auto my-2" style="background-color: #EEF7FA;">
                                    <h3>'.ucwords(${'nomeMateria' . $i}).'</h3>
                                    <p>Você acertou '.${'qtdAcertosMateria' . $i}.' de '. ${'qtdQuestoesMateria' . $i} .' questões nesta disciplina.</p>
                                    <p>Sua nota Específica nesta disciplina é '. number_format(${'notaMateria' . $i},2) .'</p>
                                    <h5>A nota <b>total</b> em '.ucwords(${'nomeMateria' . $i}).' é <b>'. number_format(${'notaTotalMateria'.$i},2) .'</b></h5>
                                  </div>';
                        }
                    ?>
                    </div>
                </div>
            <a href="javascript:history.back()" class="btn btn-block btn-primary my-2 col-sm-6 mx-auto">Voltar</a>
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