$desktopPath = [Environment]::GetFolderPath('Desktop')

$badLinksPath = Join-Path -Path $desktopPath -ChildPath "BadLinks"
if (-not (Test-Path $badLinksPath)) {
    New-Item -Path $badLinksPath -ItemType Directory | Out-Null
}

$shell = New-Object -ComObject WScript.Shell

$desktopShortcutFiles = Get-ChildItem -Path $desktopPath -Filter "*.lnk" -File

foreach ($shortcutFile in $desktopShortcutFiles) {
    $shortcut = $shell.CreateShortcut($shortcutFile.FullName)
    $targetPath = $shortcut.TargetPath

    if (-not (Test-Path $targetPath)) {
        $newPath = Join-Path -Path $badLinksPath -ChildPath $shortcutFile.Name
        Move-Item -Path $shortcutFile.FullName -Destination $newPath
        Write-Host "Invalid label moved: $shortcutFile"
    }
}

Write-Host "Label verification is complete."