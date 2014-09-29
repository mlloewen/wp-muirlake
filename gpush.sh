#!/bin/bash        
          if [ -z "$1" ]; then 
              echo usage: $0 Git commit Message
              exit
          fi
git add .
git commit -m "%1"
git pushd
