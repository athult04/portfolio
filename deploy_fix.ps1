$git = "C:\Program Files\Git\cmd\git.exe"

Write-Host "Initializing Git..."
& $git init

Write-Host "Configuring generic git user..."
& $git config user.email "portfolio@example.com"
& $git config user.name "Portfolio Builder"

Write-Host "Adding changes..."
& $git add .
& $git add -u

Write-Host "Committing cleanup..."
& $git commit -m "Clean up unused files"

Write-Host "Pushing..."
& $git branch -M main

Write-Host "Adding remote..."
& $git remote remove origin
& $git remote add origin https://github.com/athult04/portfolio.git

Write-Host "Pushing to GitHub..."
& $git push -u origin main --force

Write-Host "Done! Please check your repository."
