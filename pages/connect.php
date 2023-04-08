<?PHP
    echo "Hello Friends"
    $first = $_POST['first'];
    $last = $_POST['last'];
    $gmail = $_POST['gmail'];
    $question = $_POST['question'];
    $title = $_POST['title'];

    $conn = new mysqli_connect('localhost','root','','contect');
    if($conn->connect_error) {
        die('Connection Failed : '.$conn->connect_error);
    }else {
        $stmt = $conn->prepare("insert into Contect Form(first,last,gmail,question,title)values(?, ?, ?, ?, ?)");
        $stmt-> bind_param("sssss",$first, $last, $gmail, $quesion, $title);
        $stmt-> execute();
        echo "Massage Sended Sucefully...";
        $stmt->close();
        $conn->close();
    }             
             
?>