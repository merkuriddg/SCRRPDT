<html>
<head>
<title>AAT_Admin: Change Session</title>
</head>

    <body>
    <?php
    session_start(); // for show your session value 
    
echo "<pre>";
print_r($_SESSION);
echo "</pre>";
        
//        print_r($_SESSION)."<br>"; // remove this after check
    ?>

        
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <form name="myForm" action="dashboard.php" method="POST">

    <table>
        <tr>
            <td style="width:272px;">
                <select name="member_position" id="member_position" onchange="update_session_value(this.value)">
                    <option value="CEO">CEO</option>
                    <option value="CFO">CFO</option>
                    <option value="CMO">CMO</option>
                    <option value="COO">COO</option>
                    <option value="CSO">CSO</option>
                    <option value="CTO">CTO</option>
                </select></td>

            <td style="text-align:left;color:gray;">
                <span style="color:crimson;">*
            </span>Select Temp Group
            </td>
        </tr>
    </table>
    <input type="submit" name="submit" class="button_add" onsubmit="return validateForm()">

</form>

<script>
    function update_session_value(value) {
        $.ajax({
            type: "POST",
            url: '_admin_session_edit.php', // change url as your 
            data: 'member_position=' + value,
            dataType: 'json',
            success: function (data) {

            }
        });
    }

</script>
</body>
</html>