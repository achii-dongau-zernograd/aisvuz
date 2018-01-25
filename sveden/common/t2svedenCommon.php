            <h1>Основные сведения</h1>
            <table class="table table-bordered table-hover table-striped">     
<?php
                /*подключаем xml файл*/
                $xml = simplexml_load_file('../data/t2svedenCommon.xml');
?>
                <tr>
                    <td>Дата создания образовательной организации</td>
                    <td itemprop="regDate"><?php echo date("d.m.Y",strtotime($xml->DateOfCreation)); ?></td>
                </tr>
                <tr>
                    <td>Адрес местонахождения образовательной организации</td>
                    <td><?php echo $xml->PostCode.", "
                            .$xml->Country.", "
                            .$xml->Region.", "
                            .$xml->Settlement.", "
                            .$xml->Street.", "
                            .$xml->HouseNumber; ?></td>
                </tr>
                <tr>
                    <td>Филиалы образовательной организации</td>
                    <td><?php echo $xml->ExistenceOfFilials=="true"?"есть":"нет"; ?></td>
                </tr>
                <tr>
                    <td>Режим, график работы</td>
                    <td>
                        <?php 
                            foreach($xml->WorkingRegime->string as $workingRegime)
                            {
                                echo "<p>".$workingRegime."</p>"; 
                            }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Контактные телефоны</td>
                    <td>
                        <?php 
                            foreach($xml->PhoneNumbers->string as $phoneNumber)
                            {
                                echo $phoneNumber."; "; 
                            }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Факсы</td>                    
                    <td>
                        <?php 
                            foreach($xml->Faxes->string as $fax)
                            {
                                echo $fax."; "; 
                            }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Адреса электронной почты</td>
                    <td>
                        <?php 
                            foreach($xml->EmailAddresses->string as $emailAddress)
                            {
                                echo $emailAddress."; "; 
                            }
                        ?>
                    </td>
                </tr>
            </table>
