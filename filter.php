<?php

// Query to fetch blood group options from the database
$sql = "SELECT blood_group FROM blood_groups";
$result = mysqli_query($conn, $sql);

// Generate the blood group options for the dropdown
$options = '';
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $options .= "<option value='" . $row['blood_group'] . "'>" . $row['blood_group'] . "</option>";
    }
}


// Return the generated options
echo $options;
?>
