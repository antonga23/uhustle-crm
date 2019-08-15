#!/bin/bash
find . -type f -name "*.png" -o -name "*.PNG" | xargs optipng -nb -nc
find . -type f -name "*.jpg" -o -name "*.JPG" | xargs jpegoptim -f --strip-all
