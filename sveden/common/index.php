<?php include("../../includes/header.php"); ?>

<div class="container-fluid">
    <h1 class="text-center">Основные сведения</h1>
    
    <a href="#spoiler-1" data-toggle="collapse" class="btn btn-primary btn-block">Основные сведения</a>
    <div class="collapse" id="spoiler-1">
        <div class="well">
            <?php include("t2svedenCommon.php"); ?>
        </div>
    </div>
    
    <a href="#spoiler-2" data-toggle="collapse" class="btn btn-primary btn-block">Сведения об учредителях</a>
    <div class="collapse" id="spoiler-2">
        <div class="well">
            <?php include("t3uchredLaw.php"); ?>
        </div>
    </div>
    
    <a href="#spoiler-3" data-toggle="collapse" class="btn btn-primary btn-block">Сведения о филиалах</a>
    <div class="collapse" id="spoiler-3">
        <div class="well">
            <?php include("t4filInfo.php"); ?>
        </div>
    </div>

</div>

<?php include("../../includes/footer.php"); ?>