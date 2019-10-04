<?php
$config = fopen('config.json', 'r') or die("Unable to open file!");
$file = json_decode(fread($config,filesize("config.json")));
var_dump($file->mode);
fclose($config);
die();
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
            <option value="normal" <?php ($file->mode == 'normal') ? echo 'selected' : echo ''; ?> >Normal</option>
            <option value="gaming" <?php ($file->mode == 'gaming') ? echo 'selected' : echo ''; ?> >Gaming</option>
            <option value="breathe" <?php ($file->mode == 'breathe') ? echo 'selected' : echo ''; ?> >Breathe</option>
            <option value="demo" <?php ($file->mode == 'demo') ? echo 'selected' : echo ''; ?> >Demo</option>
            <option value="wave" <?php ($file->mode == 'wave') ? echo 'selected' : echo ''; ?> >Wave</option>
        </select>
    </div>

    <table>
        <tr>
            <th>Left</th>
            <td><label for="lcolor">Color</label></td>
            <td>
                <select id="lcolor" name="lcolor">
                    <option value="off" <?php ($file->lcolor == 'off') ? echo 'selected' : echo ''; ?> >Off</option>
                    <option value="red" <?php ($file->lcolor == 'red') ? echo 'selected' : echo ''; ?> >Red</option>
                    <option value="orange" <?php ($file->lcolor == 'orange') ? echo 'selected' : echo ''; ?> >Orange</option>
                    <option value="yellow" <?php ($file->lcolor == 'yellow') ? echo 'selected' : echo ''; ?> >Yellow</option>
                    <option value="green" <?php ($file->lcolor == 'green') ? echo 'selected' : echo ''; ?> >Green</option>
                    <option value="sky" <?php ($file->lcolor == 'sky') ? echo 'selected' : echo ''; ?> >Sky</option>
                    <option value="blue" <?php ($file->lcolor == 'blue') ? echo 'selected' : echo ''; ?> >Blue</option>
                    <option value="purple" <?php ($file->lcolor == 'purple') ? echo 'selected' : echo ''; ?> >Purple</option>
                    <option value="white" <?php ($file->lcolor == 'white') ? echo 'selected' : echo ''; ?> >White</option>
                </select>
            </td>
            <td>
                <label for="lintensities">Intensities</label>
            </td>
            <td>
                <select id="lintensities" name="lintensities">
                    <option value="hight" <?php ($file->lintensities == 'hight') ? echo 'selected' : echo ''; ?> >Hight</option>
                    <option value="medium" <?php ($file->lintensities == 'medium') ? echo 'selected' : echo ''; ?> >Medium</option>
                    <option value="low" <?php ($file->lintensities == 'low') ? echo 'selected' : echo ''; ?> >Low</option>
                    <option value="light" <?php ($file->lintensities == 'light') ? echo 'selected' : echo ''; ?> >Light</option>
                </select>
            </td>
        </tr>
        <tr>
            <th>Middle</th>
            <td><label for="mcolor">Color</label></td>
            <td>
                <select id="mcolor" name="mcolor">
                    <option value="off" <?php ($file->mcolor == 'off') ? echo 'selected' : echo ''; ?> >Off</option>
                    <option value="red" <?php ($file->mcolor == 'red') ? echo 'selected' : echo ''; ?> >Red</option>
                    <option value="orange" <?php ($file->mcolor == 'orange') ? echo 'selected' : echo ''; ?> >Orange</option>
                    <option value="yellow" <?php ($file->mcolor == 'yellow') ? echo 'selected' : echo ''; ?> >Yellow</option>
                    <option value="green" <?php ($file->mcolor == 'green') ? echo 'selected' : echo ''; ?> >Green</option>
                    <option value="sky" <?php ($file->mcolor == 'sky') ? echo 'selected' : echo ''; ?> >Sky</option>
                    <option value="blue" <?php ($file->mcolor == 'blue') ? echo 'selected' : echo ''; ?> >Blue</option>
                    <option value="purple" <?php ($file->mcolor == 'purple') ? echo 'selected' : echo ''; ?> >Purple</option>
                    <option value="white" <?php ($file->mcolor == 'white') ? echo 'selected' : echo ''; ?> >White</option>
                </select>
            </td>
            <td>
                <label for="mintensities">Intensities</label>
            </td>
            <td>
                <select id="mintensities" name="mintensities">
                    <option value="hight">Hight</option>
                    <option value="medium">Medium</option>
                    <option value="low">Low</option>
                    <option value="light">Light</option>
                </select>
            </td>
        </tr>
        <tr>
            <th>Right</th>
            <td>
                <label for="rcolor">Color</label>
            </td>
            <td>
                <select id="rcolor" name="rcolor">
                    <option value="off">Off</option>
                    <option value="red">Red</option>
                    <option value="orange">Orange</option>
                    <option value="yellow">Yellow</option>
                    <option value="green">Green</option>
                    <option value="sky">Sky</option>
                    <option value="blue">Blue</option>
                    <option value="purple">Purple</option>
                    <option value="white">White</option>
                </select>
            </td>
            <td>
                <label for="rintensities">Intensities</label>
            </td>
            <td>
                <select id="rintensities" name="rintensities">
                    <option value="hight">Hight</option>
                    <option value="medium">Medium</option>
                    <option value="low">Low</option>
                    <option value="light">Light</option>
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

<?php
if (isset($_POST['mode'])) {
    shell_exec("msi-keyboard -m '" . $_POST['mode'] . "' -c left,'" . $_POST['lcolor'] . "','" . $_POST['lintensities'] . "' -c middle,'" . $_POST['mcolor'] . "','" . $_POST['mintensities'] . "' -c right,'" . $_POST['rcolor'] . "','" . $_POST['rintensities'] . "'");

    $config = fopen('config.json', 'w') or die("Unable to open file!");
    fwrite($config, json_encode($_POST));
    fclose($config);
}
?>