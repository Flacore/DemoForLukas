<?php
?>
<!DOCTYPE html>
<html>
<head>
    <script src="jquery-3.6.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>

<h2>HTML Forms</h2>

<form id="form1" action="../LukasDemo/select/select.php">
    <label for="fname">First name:</label><br>
    <input type="text" id="fname" name="fname" value="John"><br>
</form>

<button onclick="loadDoc()">test</button>

<table id="tablet">
    <tr>
        <th>meno</th>
    </tr>
</table>

<script>
    function loadDoc() {
        var form = $('#form1');
        var actionUrl = form.attr('action');

        $.ajax({
            type: "POST",
            url: actionUrl,
            data: form.serialize(), // serializes the form's elements.
            success: function(data)
            {
                document.getElementById('tablet').innerHTML = data;
            }
        });
    }
</script>
</body>
</html>

