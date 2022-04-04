<?php
require_once('../includes/config.php');
include('logged_in.php');
include('session_vars.php');

// https://stackoverflow.com/questions/11636293/populate-another-select-dropdown-from-database-based-on-dropdown-selection




$sql1 = "SELECT * FROM NIST_depts";
$result = mysqli_query($con, $sql1)
or die("Query fail: " . mysqli_error($con));

while($row = $result->fetch_assoc()){
    $categories[] = array("id" => $row['id'], "val" => $row['cat']);
}

$sql2= "SELECT * FROM NIST_members";
$result = mysqli_query($con, $sql1)
or die("Query fail: " . mysqli_error($con));

while($row = $result->fetch_assoc()){
    $subcats[$row['catid']][] = array("id" => $row['id'], "val" => $row['subcat']);
}

$jsonCats = json_encode($categories);
$jsonSubCats = json_encode($subcats);


?>

<!docytpe html>
<html>

<head>
    <script type='text/javascript'>
        <?php
        echo "var categories = $jsonCats; \n";
        echo "var subcats = $jsonSubCats; \n";
        ?>
        function loadCategories(){
            var select = document.getElementById("categoriesSelect");
            select.onchange = updateSubCats;
            for(var i = 0; i < categories.length; i++){
                select.options[i] = new Option(categories[i].val,categories[i].id);
            }
        }
        function updateSubCats(){
            var catSelect = this;
            var catid = this.value;
            var subcatSelect = document.getElementById("subcatsSelect");
            subcatSelect.options.length = 0; //delete all options if any present
            for(var i = 0; i < subcats[catid].length; i++){
                subcatSelect.options[i] = new Option(subcats[catid][i].val,subcats[catid][i].id);
            }
        }
    </script>

</head>

<body onload='loadCategories()'>
<select id='categoriesSelect'>
</select>

<select id='subcatsSelect'>
</select>
</body>
</html>