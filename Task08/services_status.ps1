$services = Get-Service

$services | ForEach-Object {
    $serviceName = $_.Name
    $serviceStatus = $_.Status

    if ($serviceStatus -eq "Running") {
        $color = "Green"
    } else {
        $color = "Red"
    }

    Write-Host $serviceName -NoNewline -ForegroundColor $color
    Write-Host " ($serviceStatus)" -ForegroundColor $color
}