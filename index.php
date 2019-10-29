
<?php
// Turn on GPIO pin 3
echo shell_exec('/home/pi/a.out writepin '.$_POST["pinno"].' '.$_POST['taskOption']);
?>
<form  method="post">
GPIO Pin Number:
<input type="text" name="pinno" />
GPIO Pin Value:
<select name="taskOption">
<option value="1">1</option>
<option value="0">0</option>
</select>
<input type="submit" name="btnSendForm" value="Submit" />
</form>





