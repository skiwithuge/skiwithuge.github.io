#!/bin/sh
for i in *; do
    convert "$i" -thumbnail 100 "thumb_$i";
done;
