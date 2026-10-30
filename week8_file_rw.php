<?php
$f = ($_POST['file'] ?? '') . ($_POST['ext'] ?? '');
$txt = $_POST['data'] ?? '';
if (isset($_POST['save'])) {
    if (file_exists($f)) echo "<p style='color:red'>file already exists</p>";
    else { file_put_contents($f, $txt); echo "your data is saved"; }
}
if (isset($_POST['disp'])) {
    if (file_exists($f)) $txt = file_get_contents($f);
    else echo "<p style='color:red'>file doesn't exist</p>";
}
?>
<form method="post">
    Enter your file: <input name="file"><br>
    Choose your extension: <select name="ext">
        <option value="">choose ext</option>
        <option>.txt</option>
        <option>.docs</option>
        <option>.pdf</option>
    </select><br>
    Enter your contents: <textarea rows="6" cols="30" name="data"><?= $txt ?></textarea><br>
    <input type="submit" name="save" value="Save">
    <input type="submit" name="disp" value="Disp">
</form>
