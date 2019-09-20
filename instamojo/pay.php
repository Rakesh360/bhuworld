<?php 
$product_name = $_POST["course_name"];
$price = $_POST["price"];
$name = $_POST["student_name"];
$phone = $_POST["m_number"];
$email = $_POST["email"];


include 'src/instamojo.php';

$api = new Instamojo\Instamojo('test_9f0cd6e73f16fc3b984db1a8d42', 'test_77cb05510a342e7be711119f40a','https://test.instamojo.com/api/1.1/');


try {
    $response = $api->paymentRequestCreate(array(
        "purpose" => $product_name,
        "amount" => $price,
        "buyer_name" => $name,
        "phone" => $phone,
        "send_email" => true,
        "send_sms" => true,
        "email" => $email,
        'allow_repeated_payments' => false,
        "redirect_url" => "http://localhost:8080/instamojo/thankyou.php",
        //"webhook" => "localhost:8080/instamojo/webhook.php"
        ));
    //print_r($response);

    $pay_ulr = $response['longurl'];
    
    //Redirect($response['longurl'],302); //Go to Payment page

    header("Location: $pay_ulr");
    exit();

}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}     
  ?>