<?php
echo '
<script>
var a = 1;
if ( a === ' . $_SESSION['checka'] . ' ) {
        document.getElementById(\'authorization\').style.display = \'block\';
        document.getElementById(\'bga\').style.display = \'block\';
        document.getElementById(\'login\').style.border = \'1px solid red\';
        document.getElementById(\'password\').style.border = \'1px solid red\';
}
</script>
';
?>