<?php
echo "View page under contruction <br> <br>";

$conn = mysqli_connect("localhost","root","","vendordb");

$result = mysqli_query($conn, "SELECT * FROM vendor_info ");

echo "<table border = '1'>
<tr>
<th>id</th>
<th>username</th>
<th>email.com</th>
<th>password</th>
</tr>
";

while ($row = mysqli_fetch_array($result))

{
echo "<tr>";
echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['vendor_username'] . "</td>";
echo "<td>" . $row['vendor_email'] . "</td>";
echo "<td>" . $row['vendor_password'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($conn);
?>