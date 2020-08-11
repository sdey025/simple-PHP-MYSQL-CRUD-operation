<?php
include_once 'database.php';
$sql = "DELETE FROM details WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully <a href='delete_&_update.php'>Go back</a>";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>