<?php
//connect to database
$conn = mysqli_connect('localhost', 'jonathan', 'gundamisthebest', 'jonathan_db');
//check connection
//make query for all enquiries
$sql = 'SELECT id,firstname,lastname,email,phonenumber,state,city,address,postcode,product,item,needexplain,improvement FROM enquiry;';
//make query and get result
$result = mysqli_query($conn, $sql);
//fetch the resulting rows as an array
$enquirys = mysqli_fetch_all($result, MYSQLI_ASSOC);
//free result from memory
mysqli_free_result($result);

//close connection
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="author" content="Jonathan">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Gundam Nation">
    <link rel="stylesheet" href="style/style.css" />
    <script src="script/main.js" defer></script>
    <script src="script/script.js"></script>
    <title>Gundam Nation | Acknowledgement</title>
</head>

<body>
    <div class="scrollTop" onclick="scrollToTop();">Back To Top</div>
    <?php include 'header.php'; ?>


    <div class="container-acknowledgement">
        <h1>View Enquiries</h1>
    </div>
    <section>
        <div class="container-1-1">
            <div class="container-1-2">
                <h2 class="container-acknowledgement1">Enquiries</h2>
                <div class="container-acknowledgement2">
                    <table class="table-custom">
                        <tr>
                            <th style="text-align:center">ID</th>
                            <th style="text-align:center">First Name</th>
                            <th style="text-align:center">Last Name</th>
                            <th style="text-align:center">Email</th>
                            <th style="text-align:center">Phone Number</th>
                            <th style="text-align:center">State</th>
                            <th style="text-align:center">City</th>
                            <th style="text-align:center">Address</th>
                            <th style="text-align:center">Postcode</th>
                            <th style="text-align:center">Product</th>
                            <th style="text-align:center">Item</th>
                            <th style="text-align:center">Need Explain</th>
                            <th style="text-align:center">Improvement</th>
                        </tr>
                        <?php
                        foreach ($enquirys as $enquiry) {
                            print_r('<tr>');
                            print_r('<th>' . $enquiry['id'] . '</th>');
                            print_r('<th>' . $enquiry['firstname'] . '</th>');
                            print_r('<th>' . $enquiry['lastname'] . '</th>');
                            print_r('<th>' . $enquiry['email'] . '</th>');
                            print_r('<th>' . $enquiry['phonenumber'] . '</th>');
                            print_r('<th>' . $enquiry['state'] . '</th>');
                            print_r('<th>' . $enquiry['city'] . '</th>');
                            print_r('<th>' . $enquiry['address'] . '</th>');
                            print_r('<th>' . $enquiry['postcode'] . '</th>');
                            print_r('<th>' . $enquiry['product'] . '</th>');
                            print_r('<th>' . $enquiry['item'] . '</th>');
                            print_r('<th>' . $enquiry['needexplain'] . '</th>');
                            print_r('<th>' . $enquiry['improvement'] . '</th>');
                            print_r('</tr>');
                        }
                        ?>
                </div>
                </table>
            </div>
        </div>
    </section>
    <?php include 'footer.php'; ?>
</body>

</html>