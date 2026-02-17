<?php
session_start();
header("Content-Type: application/json");

// Honeypot
if(!empty($_POST['company'])) exit;

// Basic spam protection
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    exit;
}

// CSRF
if ($_POST['csrf_token'] !== ($_SESSION['csrf_token'] ?? $_POST['csrf_token'])) {
    echo json_encode(["status"=>"error","message"=>"Invalid request"]);
    exit;
}

// // DB Connection
// $conn = new mysqli("localhost","db_user","db_pass","db_name");
// if ($conn->connect_error) exit;

// // Inputs
// $name = htmlspecialchars($_POST['name']);
// $phone = preg_replace('/[^0-9]/', '', $_POST['phone']);
// $pickup = $_POST['pickup'];
// $destination = $_POST['destination'];
// $start = $_POST['start_date'];
// $end = $_POST['end_date'];
// $passengers = $_POST['passengers'];
// $page = $_POST['page_url'];
// $ip = $_SERVER['REMOTE_ADDR'];

// // Rate limit (same IP)
// $check = $conn->query("SELECT id FROM tempo_leads WHERE ip_address='$ip' AND created_at > NOW() - INTERVAL 5 MINUTE");
// if ($check->num_rows > 3) {
//     echo json_encode(["status"=>"error","message"=>"Too many requests"]);
//     exit;
// }

// // Insert
// $stmt = $conn->prepare("INSERT INTO tempo_leads 
// (name,phone,pickup,destination,start_date,end_date,passengers,page_url,ip_address) 
// VALUES (?,?,?,?,?,?,?,?,?)");

// $stmt->bind_param("ssssssiss",
//     $name,$phone,$pickup,$destination,$start,$end,$passengers,$page,$ip
// );
// $stmt->execute();

// WhatsApp message
$msg = urlencode(
    "🚐 *New Tempo Traveller Enquiry*\n\n".
    "👤 Name: $name\n".
    "📞 Phone: $phone\n".
    "📍 From: $pickup\n".
    "🏁 To: $destination\n".
    "📅 Travel: $start to $end\n".
    "👥 Passengers: $passengers\n".
    "🌐 Page: $page\n\n".
    "From tempotravellerindia.in".
);

$whatsapp = "https://wa.me/919999029051?text=".$msg;

echo json_encode([
    "status"=>"success",
    "whatsapp"=>$whatsapp
]);
