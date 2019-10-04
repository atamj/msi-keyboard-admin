<?php
$config = fopen('config.json', 'r') or die("Unable to open file!");
$file = json_decode(fread($config,filesize("config.json")));
fclose($config);
?>
<style>
    table {
        width: 100%;
    }

    th {
        background-color: black;
        color: white;
    }
</style>
<form method="post">
    <div style="margin-bottom: 20px;">
        <label for="mode">Mode</label>
        <select id="mode" name="mode">
            <option value="normal" <?php if ($file->mode == 'normal'){echo 'selected';} ?> >Normal</option>
            <option value="gaming" <?php if ($file->mode == "gaming"){echo 'selected';} ?> >Gaming</option>
            <option value="breathe" <?php if ($file->mode == "breathe"){echo 'selected';} ?> >Breathe</option>
            <option value="demo" <?php if ($file->mode == "demo"){echo 'selected';} ?> >Demo</option>
            <option value="wave" <?php if ($file->mode == "wave"){echo 'selected';} ?> >Wave</option>
        </select>
    </div>

    <table>
        <tr>
            <th id="left">Left</th>
            <td><label for="lcolor">Color</label></td>
            <td>
                <select id="lcolor" name="lcolor">
                    <option value="off" <?php if ($file->lcolor == 'red') echo 'selected'; ?> >Off</option>
                    <option value="red" <?php if ($file->lcolor == 'red') echo 'selected'; ?> >Red</option>
                    <option value="orange" <?php if ($file->lcolor == 'orange') echo 'selected'; ?> >Orange</option>
                    <option value="yellow" <?php if ($file->lcolor == 'yellow') echo 'selected'; ?> >Yellow</option>
                    <option value="green" <?php if ($file->lcolor == 'green') echo 'selected'; ?> >Green</option>
                    <option value="sky" <?php if ($file->lcolor == 'sky') echo 'selected'; ?> >Sky</option>
                    <option value="blue" <?php if ($file->lcolor == 'blue') echo 'selected'; ?> >Blue</option>
                    <option value="purple" <?php if ($file->lcolor == 'purple') echo 'selected'; ?> >Purple</option>
                    <option value="white" <?php if ($file->lcolor == 'white') echo 'selected'; ?> >White</option>
                </select>
            </td>
            <td>
                <label for="lintensities">Intensities</label>
            </td>
            <td>
                <select id="lintensities" name="lintensities">
                    <option value="hight" <?php if ($file->lintensities == 'hight') echo 'selected'; ?> >Hight</option>
                    <option value="medium" <?php if ($file->lintensities == 'medium') echo 'selected'; ?> >Medium</option>
                    <option value="low" <?php if ($file->lintensities == 'low') echo 'selected'; ?> >Low</option>
                    <option value="light" <?php if ($file->lintensities == 'light') echo 'selected'; ?> >Light</option>
                </select>
            </td>
        </tr>
        <tr>
            <th id="middle">Middle</th>
            <td><label for="mcolor">Color</label></td>
            <td>
                <select id="mcolor" name="mcolor">
                    <option value="off" <?php if ($file->mcolor == 'off') echo 'selected'; ?> >Off</option>
                    <option value="red" <?php if ($file->mcolor == 'red') echo 'selected'; ?> >Red</option>
                    <option value="orange" <?php if ($file->mcolor == 'orange') echo 'selected'; ?> >Orange</option>
                    <option value="yellow" <?php if ($file->mcolor == 'yellow') echo 'selected'; ?> >Yellow</option>
                    <option value="green" <?php if ($file->mcolor == 'green') echo 'selected'; ?> >Green</option>
                    <option value="sky" <?php if ($file->mcolor == 'sky') echo 'selected'; ?> >Sky</option>
                    <option value="blue" <?php if ($file->mcolor == 'blue') echo 'selected'; ?> >Blue</option>
                    <option value="purple" <?php if ($file->mcolor == 'purple') echo 'selected'; ?> >Purple</option>
                    <option value="white" <?php if ($file->mcolor == 'white') echo 'selected'; ?> >White</option>
                </select>
            </td>
            <td>
                <label for="mintensities">Intensities</label>
            </td>
            <td>
                <select id="mintensities" name="mintensities">
                    <option value="hight" <?php if ($file->mintensities == 'hight') echo 'selected'; ?> >Hight</option>
                    <option value="medium" <?php if ($file->mintensities == 'medium') echo 'selected'; ?> >Medium</option>
                    <option value="low" <?php if ($file->mintensities == 'low') echo 'selected'; ?> >Low</option>
                    <option value="light" <?php if ($file->mintensities == 'light') echo 'selected'; ?> >Light</option>
                </select>
            </td>
        </tr>
        <tr>
            <th id="right">Right</th>
            <td>
                <label for="rcolor">Color</label>
            </td>
            <td>
                <select id="rcolor" name="rcolor">
                    <option value="off" <?php if ($file->rcolor == 'off') echo 'selected'; ?> >Off</option>
                    <option style="background-color: red;" value="red" <?php if ($file->rcolor == 'red') echo 'selected'; ?> >Red</option>
                    <option value="orange" <?php if ($file->rcolor == 'orange') echo 'selected'; ?> >Orange</option>
                    <option value="yellow" <?php if ($file->rcolor == 'yellow') echo 'selected'; ?> >Yellow</option>
                    <option value="green" <?php if ($file->rcolor == 'green') echo 'selected'; ?> >Green</option>
                    <option value="sky" <?php if ($file->rcolor == 'sky') echo 'selected'; ?> >Sky</option>
                    <option value="blue" <?php if ($file->rcolor == 'blue') echo 'selected'; ?> >Blue</option>
                    <option value="purple" <?php if ($file->rcolor == 'purple') echo 'selected'; ?> >Purple</option>
                    <option value="white" <?php if ($file->rcolor == 'white') echo 'selected'; ?> >White</option>
                </select>
            </td>
            <td>
                <label for="rintensities">Intensities</label>
            </td>
            <td>
                <select id="rintensities" name="rintensities">
                    <option value="hight" <?php if ($file->rintensities == 'hight') echo 'selected'; ?> >Hight</option>
                    <option value="medium" <?php if ($file->rintensities == 'medium') echo 'selected'; ?> >Medium</option>
                    <option value="low" <?php if ($file->rintensities == 'low') echo 'selected'; ?> >Low</option>
                    <option value="light" <?php if ($file->rintensities == 'light') echo 'selected'; ?> >Light</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="save">
            </td>
        </tr>
    </table>
</form>

    <script>

    </script>

<?php
if (isset($_POST['mode'])) {
    shell_exec("msi-keyboard -m '" . $_POST['mode'] . "' -c left,'" . $_POST['lcolor'] . "','" . $_POST['lintensities'] . "' -c middle,'" . $_POST['mcolor'] . "','" . $_POST['mintensities'] . "' -c right,'" . $_POST['rcolor'] . "','" . $_POST['rintensities'] . "'");

    $config = fopen('config.json', 'w') or die("Unable to open file!");
    fwrite($config, json_encode($_POST));
    fclose($config);
}
?>