
<?php
    echo 'Below are the details: '.'<br>';
    
    echo 'First name: '.$_POST['first_name'].'<br>';
    $firstname=$_POST['first_name'];
    echo 'Last Name: '.$_POST['last_name'].'<br>';
    $lastname=$_POST['last_name'];
    echo 'Email: '.$_POST['email'].'<br>';
    $email=$_POST['email'];
    echo 'Phone Number: '.$_POST['phone_number'].'<br>';
    $phonenumber=$_POST['phone_number'];
    echo 'State: '.$_POST['state'].'<br>';
    $state=$_POST['state'];
    echo 'City: '.$_POST['city'].'<br>';
    $city=$_POST['city'];
    echo 'Address: '.$_POST['address'].'<br>';
    $address=$_POST['address'];
    echo 'Postcode: '.$_POST['postcode'].'<br>';
    $postcode=$_POST['postcode'];
    echo 'Product: '.$_POST['product'].'<br>';
    $product=$_POST['product'];
    echo 'Item: '.$_POST['item'].'<br>';
    $item=$_POST['item'];
    echo 'Need Explain: '.$_POST['need-explain'].'<br>';
    $needexplain=$_POST['need-explain'];
    echo 'Improvement: '.$_POST['improvement'].'<br>';
    $improvement=$_POST['improvement'];

    //connect to database
    $conn=mysqli_connect('localhost','jonathan','gundamisthebest','jonathan_db');
    //check connection
    if($conn){
    echo 'Connect Successful!!';
    }
    else
    {
    echo 'Connection error: '. mysqli_connect_error();
    }

    $sql="INSERT INTO enquiry (firstname,lastname,email,phonenumber,state,city,address,postcode,product,item,needexplain,improvement) VALUES
    ('$firstname','$lastname','$email','$phonenumber','$state','$city','$address','$postcode','$product','$item','$needexplain','$improvement')";
    if (mysqli_query($conn,$sql)){
        echo '<script type="text/javascript"> alert("Enquiry recorded successful"); </script>';
    }
    else
    {
        echo '<script type="text/javascript"> alert("Enquiry recorded fail"); </script>';
    }
    echo '<script type="text/javascript">window.location = \'./enquiry.php\';</script>';
    //close connection
    mysqli_close($conn);
?>


