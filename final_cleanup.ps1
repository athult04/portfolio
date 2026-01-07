$git = "C:\Program Files\Git\cmd\git.exe"

Write-Host "Adding changes..."
& $git add .
& $git add -u

Write-Host "Committing cleanup..."
& $git commit -m "Clean up unused files"

Write-Host "Pushing..."
& $git push -u origin main

Write-Host "Done!"
