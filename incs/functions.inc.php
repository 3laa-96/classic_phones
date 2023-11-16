<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "classic_phones";

function connect()
{
  global $servername, $username, $password, $db;
  $conn = new mysqli($servername, $username, $password, $db);
  return $conn;
}

function connectPDO()
{
  global $servername, $username, $password, $db;
  $dsn = "mysql:host=$servername;dbname=$db;charset=UTF8";
  try {
    $options = [
      \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
      \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
      \PDO::ATTR_EMULATE_PREPARES => false,
    ];
    $pdo = new PDO($dsn, $username, $password, $options);
    return $pdo;
  } catch (PDOException $ex) {
    echo $ex->getMessage();
    die();
  }
}
function logError(Exception $exception)
{
  date_default_timezone_set('Asia/Beirut');

  $filename = "log/log_" . date("Y_m_d") . ".log";
  $handler = fopen($filename, "a") or die("cannot open the file");

  fwrite($handler, "Error:" . $exception->getMessage() . "\n");
  fwrite($handler, "Path:" . $exception->getFile() . "\n");
  fwrite($handler, "Line:" . $exception->getLine() . "\n");
  fwrite($handler, "datetime:" . date("Y-m-d H:i:s") . "\n");
  fwrite($handler, "\n");
  fclose($handler);
  exit;
}
?>
<script>
  function updateClock() {
    var now = new Date();
    var hours = now.getHours();
    var minutes = now.getMinutes();
    var seconds = now.getSeconds();

    hours = hours < 10 ? "0" + hours : hours;
    minutes = minutes < 10 ? "0" + minutes : minutes;
    seconds = seconds < 10 ? "0" + seconds : seconds;

    var timeString = hours + ":" + minutes + ":" + seconds;

    var clockElement = document.getElementById("clock");
    if (clockElement) {
      clockElement.textContent = timeString;
    }
    setTimeout(updateClock, 1000);
  }
  updateClock();
</script>