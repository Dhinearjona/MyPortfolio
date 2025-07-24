#!/bin/bash

read -p "Enter commit message: " commit_msg

if [ -z "$commit_msg" ]; then
  commit_msg="update $(date +'%Y-%m-%d %H:%M:%S')"
fi

echo "🧹 Staging changes..."
git add .

echo "📝 Committing with message: $commit_msg"
git commit -m "$commit_msg"

echo "🚀 Pushing to GitHub..."
git push origin main

echo "✅ Done!"