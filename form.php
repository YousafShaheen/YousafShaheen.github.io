<?PHP
$sender = 'shaheeny@mcmaster.ca';
$recipient = 'yousaf.a.shaheen@gmail.com';

$subject = "php mail test";
$message = "php test message";
$headers = 'From:' . $sender;

if (true)
{
    echo "Message accepted";
}
else
{
    echo "Error: Message not accepted";
}
?>