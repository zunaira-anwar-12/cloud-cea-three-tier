<?php
// api/health.php - used by the load balancer health check (no DB access)
header('Content-Type: application/json');
echo json_encode(['status' => 'ok', 'version' => getenv('APP_VERSION') ?: 'v1']);
?>
