#!/bin/bash

root="/home/projects/BISS"
repository="https://github.com/spaces-team/BISS.git"
git ls-remote "$repository" "refs/heads/*" | while read sha ref; do
  branch=$(basename "$ref")
  if [[ $branch -ne "master" ]]; then
    target="$root/public_html/$branch"
    if [[ -d "$target" ]]; then
    cd "$target"
    git pull
    else
    git clone --depth=1 https://github.com/spaces-team/BISS.git --single-branch --branch "$branch" "$target"
    cd "$target"
    git config core.sharedRepository true
    cd "$root"
    fi
    chmod -R 775 "$target"
    chgrp -R biss2022 "$target"
  fi
done