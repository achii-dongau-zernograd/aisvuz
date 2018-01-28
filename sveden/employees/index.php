<?php include("../../includes/header.php"); ?>

<div class="container-fluid">
    <h1 class="text-center">Руководство. Педагогический (научно-педагогический) состав</h1>
    
    <a href="#spoiler-1" data-toggle="collapse" class="btn btn-primary btn-block">Информация об администрации образовательной организации</a>
    <div class="collapse" id="spoiler-1">
        <div class="well">
            <?php include("t14rucovodstvo.php"); ?>
        </div>
    </div>
    
    <a href="#spoiler-2" data-toggle="collapse" class="btn btn-primary btn-block">Информация о руководителях филиалов (при наличии)</a>
    <div class="collapse" id="spoiler-2">
        <div class="well">
            <?php include("t15rucovodstvoFil.php"); ?>
        </div>
    </div>
    
    <a href="#spoiler-3" data-toggle="collapse" class="btn btn-danger btn-block">Информация о составе педагогических (научно-педагогических) работников образовательной организации</a>
    <div class="collapse" id="spoiler-3">
        <div class="well">
            <?php include("t16teachingStaff.php"); ?>
        </div>
    </div>
    
</div>

<?php include("../../includes/footer.php"); ?>