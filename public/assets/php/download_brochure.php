<?php
// download_brochure.php

// Normalize the brochure filenames (you can extend this later if needed)
$brochureFiles = [
    'damac seacrest'   => 'damac-seacrest.pdf',
    'samana barari'    => 'samana-barari.pdf',
    'damac islands'    => 'damac-islands.pdf',
    'damac riverside' => 'damac-riverside.pdf'
];

// Step 1: Get the project string (e.g., "Damac Seacrest – 1 Room Apartment")
$fullProject = $_GET['project'] ?? '';
error_log("Requested project: " . $fullProject);

// Step 2: Extract base project name (everything before “–” if it exists)
$parts = explode('–', $fullProject);
$baseProject = strtolower(trim($parts[0]));

// Step 3: Match the brochure
$brochureFile = $brochureFiles[$baseProject] ?? 'default-brochure.pdf';
$path = __DIR__ . '/../brochures/' . $brochureFile;

// Step 4: Download
if (!file_exists($path)) {
    error_log("Brochure file not found: $path");
    http_response_code(404);
    exit("File not found.");
}

header('Content-Description: File Transfer');
header('Content-Type: application/pdf');
header('Content-Disposition: attachment; filename="' . basename($path) . '"');
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');
header('Content-Length: ' . filesize($path));

ob_clean();
flush();
readfile($path);
exit;
