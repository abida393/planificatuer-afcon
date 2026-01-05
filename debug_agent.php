<?php

require __DIR__ . '/vendor/autoload.php';

use Symfony\Component\Process\Process;

// Simulate the logic in routes/web.php
$team = "Morocco";
$budget = "mid";
$scriptPath = __DIR__ . '/python_agent/agent.py';

echo "Testing Python Agent Execution...\n";
echo "Script Path: $scriptPath\n";

$process = new Process(['python', $scriptPath, '--team', $team, '--budget', $budget]);
$process->setWorkingDirectory(__DIR__);
$process->run();

if (!$process->isSuccessful()) {
    echo "ERROR: Process Failed\n";
    echo "Exit Code: " . $process->getExitCode() . "\n";
    echo "Error Output:\n" . $process->getErrorOutput() . "\n";
} else {
    echo "SUCCESS: Process Finished\n";
}

echo "Standard Output:\n";
$output = $process->getOutput();
echo "['" . $output . "']\n"; // Brackets to see whitespace

$json = json_decode($output, true);
if (json_last_error() !== JSON_ERROR_NONE) {
    echo "JSON DECODE ERROR: " . json_last_error_msg() . "\n";
} else {
    echo "JSON VALID: Yes\n";
}
