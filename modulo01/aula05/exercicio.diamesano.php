<select>
    <option>Dia nascimento</option>
        <?php   
            for ($dia = 1; $dia <=31; $dia++){
                echo "<option>{$dia}</option>";
            }

        ?>
</select>
<select>
    <option>Mês nascimento:</option>
        <?php
            for ($mes = 1; $mes <= 12; $mes++){
                echo "<option>{$mes}</option>";
            }
        ?>
</select>
<select>
    <option>Ano nascimento:</option>
        <?php
            for ($ano = 2022; $ano >= 1900; $ano--){
                echo "<option>{$ano}</option>";
            }
        ?>
</select>
