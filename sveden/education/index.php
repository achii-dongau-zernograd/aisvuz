<?php include("../../includes/header.php"); ?>

<div class="container-fluid">
    <h1 class="text-center">Образование</h1>
    
    <a href="#spoiler-1" data-toggle="collapse" class="btn btn-primary btn-block">Информация о сроке действия государственной аккредитации образовательной программы, о языках, на которых осуществляется образование (обучение)</a>
    <div class="collapse" id="spoiler-1">
        <div class="well">
            <?php include("t6eduAccred.php"); ?>
        </div>
    </div>
    
    <a href="#spoiler-2" data-toggle="collapse" class="btn btn-danger btn-block">Информация о численности обучающихся по реализуемым образовательным программам за счет бюджетных ассигнований федерального бюджета, бюджетов субъектов Российской Федерации, местных бюджетов и по договорам об образовании за счет средств физических и (или) юридических лиц</a>
    <div class="collapse" id="spoiler-2">
        <div class="well">
            <?php include("t15rucovodstvoFil.php"); ?>
        </div>
    </div>
    
    <a href="#spoiler-3" data-toggle="collapse" class="btn btn-danger btn-block">Информация о результатах приема по каждой профессии, специальности среднего профессионального образования (при наличии вступительных испытаний), каждому направлению подготовки или специальности высшего образования с различными условиями приема (на места, финансируемые за счет бюджетных ассигнований федерального бюджета, бюджетов субъектов Российской Федерации, местных бюджетов, по договорам об образовании за счет средств физических и (или) юридических лиц</a>
    <div class="collapse" id="spoiler-3">
        <div class="well">
            <?php include("t16teachingStaff.php"); ?>
        </div>
    </div>
    
    <a href="#spoiler-4" data-toggle="collapse" class="btn btn-primary btn-block">Информация о результатах перевода, восстановления и отчисления</a>
    <div class="collapse" id="spoiler-4">
        <div class="well">
            <?php include("t9eduPerevod.php"); ?>
        </div>
    </div>
    
    <a href="#spoiler-5" data-toggle="collapse" class="btn btn-primary btn-block">Информация по образовательным программам, в том числе адаптированным</a>
    <div class="collapse" id="spoiler-5">
        <div class="well">
            <?php include("t10eduOP.php"); ?>
        </div>
    </div>
    
    <a href="#spoiler-6" data-toggle="collapse" class="btn btn-primary btn-block">«Образовательная программа» (объем программы по годам)</a>
    <div class="collapse" id="spoiler-6">
        <div class="well">
            <?php include("t11eduOPYears.php"); ?>
        </div>
    </div>
    
    <a href="#spoiler-7" data-toggle="collapse" class="btn btn-primary btn-block">«Образовательная программа» (наличие практики)</a>
    <div class="collapse" id="spoiler-7">
        <div class="well">
            <?php include("t12eduPr.php"); ?>
        </div>
    </div>
    
    <a href="#spoiler-8" data-toggle="collapse" class="btn btn-primary btn-block">«Образовательная программа» (направления и результаты научной (научно-исследовательской) деятельности)</a>
    <div class="collapse" id="spoiler-8">
        <div class="well">
            <?php include("t13eduNir.php"); ?>
        </div>
    </div>
    
</div>

<?php include("../../includes/footer.php"); ?>