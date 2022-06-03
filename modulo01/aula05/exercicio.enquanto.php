<select>
    <option selected>--Escolha o ano --</option>
    <?php
        $ano = 2022;

        while ($ano >= 1900){
            echo "<option>{$ano}</option>";
            $ano--;
        }


    ?>

</select>