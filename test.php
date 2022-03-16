<form method="POST">
    <button type="submit" name="submit" value="btn">hi</button>
    <button type="submit" name="logout" value="btn">logout</button>
</form>
<?php
if (isset($_POST['submit'])) {
    echo 1;
}
if (isset($_POST['logout'])) {
    echo 2;
}
