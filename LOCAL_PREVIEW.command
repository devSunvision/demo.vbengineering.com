#!/bin/bash
DIR="$(cd "$(dirname "$0")" && pwd)"
cd "$DIR"
echo "=============================================="
echo "  VB Engineering Website · Local Preview"
echo "=============================================="
echo ""
echo "Opening http://localhost:8080 in your browser..."
echo "Press Ctrl+C in this terminal window to stop."
echo ""
( sleep 2 && (open "http://localhost:8080" 2>/dev/null || xdg-open "http://localhost:8080" 2>/dev/null) ) &
python3 -m http.server 8080
