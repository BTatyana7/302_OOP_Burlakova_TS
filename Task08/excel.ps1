$currentUserName = $env:USERNAME
$computerName = $env:COMPUTERNAME

$excel = New-Object -ComObject Excel.Application

$workbook = $excel.Workbooks.Add()

$worksheet = $workbook.ActiveSheet

$cell = $worksheet.Range("B2")
$cell.Value2 = "Привет от PowerShell"
$cell.Font.Size = 12
$cell.Font.Italic = $true

$fileName = "${currentUserName}_${computerName}.xlsx"
$filePath = Join-Path -Path $env:USERPROFILE -ChildPath $fileName

$workbook.SaveAs($filePath)

$workbook.Close()
$excel.Quit()

[System.Runtime.Interopservices.Marshal]::ReleaseComObject($worksheet) | Out-Null
[System.Runtime.Interopservices.Marshal]::ReleaseComObject($workbook) | Out-Null
[System.Runtime.Interopservices.Marshal]::ReleaseComObject($excel) | Out-Null

Write-Host "File saved: $filePath"