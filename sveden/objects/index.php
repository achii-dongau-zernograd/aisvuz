<?php include("../../includes/header.php"); ?>

<div class="container-fluid">
    <h1 class="text-center">Материально-техническое обеспечение и оснащённость образовательного процесса</h1>
    
    <a href="#spoiler-1" data-toggle="collapse" class="btn btn-danger btn-block">Сведения о наличии оборудованных учебных кабинетов, объектов для проведения практических занятий</a>
    <div class="collapse" id="spoiler-1">
        <div class="well">
            <?php include("t17purposeCab.php"); ?>
        </div>
    </div>
    
    <a href="#spoiler-2" data-toggle="collapse" class="btn btn-danger btn-block">Сведения о наличии библиотек, объектов спорта, об условиях питания и охраны здоровья обучающихся</a>
    <div class="collapse" id="spoiler-2">
        <div class="well">
            <?php include("t18purposeLibr.php"); ?>
        </div>
    </div>
    
    <a href="#spoiler-3" data-toggle="collapse" class="btn btn-danger btn-block">Сведения о доступе к электронной информационно-образовательной среде, информационным системам и информационно-телекоммуникационным сетям и электронным ресурсам, к которым обеспечивается доступ обучающихся</a>
    <div class="collapse" id="spoiler-3">
        <div class="well">
            <?php include("t19purposeEios.php"); ?>
        </div>
    </div>
    
</div>

<?php include("../../includes/footer.php"); ?>