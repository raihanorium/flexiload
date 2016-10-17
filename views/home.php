<i>Home</i>

<?php
$users = selectQuery('select full_name from user');
print_r($users);