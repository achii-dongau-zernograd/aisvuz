
            <h1>Сведения о педагогических (научно-педагогических) работниках образовательной организации для каждой реализуемой образовательной программы</h1>

<?php
            /*подключаем xml файл*/
            $xml = simplexml_load_file('../data/t16teachingStaff.xml');
            $spoilerId=10;
            foreach($xml->TeachingStaffBindingList->TeachingStaff as $curNode)
            {
                //$spoilerId++;
?>
            <a href="#spoiler-<?php echo $spoilerId; ?>" data-toggle="collapse" class="btn btn-primary btn-block">
                <?php echo $curNode->EduLevel.'. '.$curNode->EduCode.' '.$curNode->EduName.'. Форма обучения: '.$curNode->EduForm.'';  ?>
            </a>
            <div class="collapse" id="spoiler-<?php echo $spoilerId++; ?>">                                
                <div class="well">
                    <table itemprop="teachingStaff" class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Ф.И.О. преподавателя, реализующего программу</th>
                                <th>Должность преподавателя</th>
                                <th>Перечень преподаваемых дисциплин</th>
                                <th>Уровень образования</th>
                                <th>Квалификация</th>
                                <th>Учёная степень педагогического работника (при наличии)</th>
                                <th>Учёное звание педагогического работника (при наличии)</th>
                                <th>Наименование направления подготовки и (или) специальности педагогического работника</th>
                                <th>Сведения о повышении квалификации и (или) профессиональной переподготовке педагогического работника (при наличии)</th>
                                <th>Общий стаж работы</th>
                                <th>Стаж работы педагогического работника по специальности</th>
                            </tr>                    
                        </thead>
                        <tbody>
                            <?php foreach($curNode->TeachingStaffRows->TeachingStaffRow as $curRow){ ; echo PHP_EOL; ?>
                                <tr>
                                    <!-- Ф.И.О. преподавателя, реализующего программу -->
                                    <td itemprop="fio">
                                        <?php echo $curRow->Fio; echo PHP_EOL; ?>
                                    </td>
                                    <!-- Должность преподавателя -->
                                    <td itemprop="post">
                                        <?php foreach($curRow->Post->string as $curPost) { echo '<p>'.$curPost.'</p>'; }; echo PHP_EOL;  ?>
                                    </td>
                                    <!-- Перечень преподаваемых дисциплин -->
                                    <td itemprop="teachingDiscipline">
                                        <?php foreach($curRow->TeachingDisciplines->string as $curTeachingDiscipline) { echo '<p>'.$curTeachingDiscipline.'</p>'; }; echo PHP_EOL;  ?>
                                    </td>
                                    <!-- Уровень образования преподавателя -->
                                    <td itemprop="teachingLevel">
                                        <?php echo $curRow->TeachingLevel; echo PHP_EOL; ?>
                                    </td>
                                    <!-- Квалификация преподавателя -->
                                    <td itemprop="teachingQual">
                                        <?php foreach($curRow->TeachingQual->string as $curTeachingQual) { echo '<p>'.$curTeachingQual.'</p>'; }; echo PHP_EOL;  ?>
                                    </td>
                                    <!-- Учёная степень педагогического работника (при наличии) -->
                                    <td itemprop="degree">
                                        <?php echo $curRow->Degree; echo PHP_EOL; ?>
                                    </td>
                                    <!-- Учёное звание педагогического работника (при наличии) -->
                                    <td itemprop="academStat">
                                        <?php echo $curRow->AcademStat; echo PHP_EOL; ?>
                                    </td>
                                    <!-- Наименование направления подготовки и (или) специальности педагогического работника -->
                                    <td itemprop="employeeQualification">
                                        <?php foreach($curRow->EmployeeQualification->string as $curEmployeeQualification) { echo '<p>'.$curEmployeeQualification.'</p>'; }; echo PHP_EOL;  ?>
                                    </td>
                                    <!-- Сведения о повышении квалификации и (или) профессиональной переподготовке педагогического работника (при наличии) -->
                                    <td itemprop="profDevelopment">
                                        <a href="#spoiler-<?php echo $spoilerId; ?>" data-toggle="collapse" class="btn btn-primary btn-block">
                                            <?php echo 'Сведения о повышении квалификации'; echo PHP_EOL;  ?>
                                        </a>
                                        <div class="collapse" id="spoiler-<?php echo $spoilerId++; ?>">                                
                                            <div class="well">
                                                <?php foreach($curRow->ProfDevelopment->Training->string as $curTraining) { echo '<p>'.$curTraining.'</p>'; }; echo PHP_EOL;  ?>
                                            </div>
                                        </div>                                        
                                        <?php if($curRow->ProfDevelopment->ProfessionalRetraining->string->count()>0){ ; echo PHP_EOL; ?>
                                        <a href="#spoiler-<?php echo $spoilerId; ?>" data-toggle="collapse" class="btn btn-primary btn-block">
                                            <?php echo 'Сведения о профессиональной переподготовке'; echo PHP_EOL;  ?>
                                        </a>
                                        <div class="collapse" id="spoiler-<?php echo $spoilerId++; ?>">
                                            <div class="well">
                                                <?php foreach($curRow->ProfDevelopment->ProfessionalRetraining->string as $curProfessionalRetraining) { echo '<p>'.$curProfessionalRetraining.'</p>'; }; echo PHP_EOL;  ?>
                                            </div>
                                        </div>
                                        <?php } echo PHP_EOL; ?>
                                    </td>
                                    <!-- Общий стаж работы -->
                                    <td itemprop="genExperience">
                                        <?php echo $curRow->GenExperience; echo PHP_EOL; ?>
                                    </td>
                                    <!-- Стаж работы педагогического работника по специальности -->
                                    <td itemprop="specExperience">
                                        <?php echo $curRow->SpecExperience; echo PHP_EOL; ?>
                                    </td>
                                </tr>
                            <?php }; echo PHP_EOL; ?>
                        </tbody>
                    </table>
                </div>
            </div>
<?php                            
            }
?> 
