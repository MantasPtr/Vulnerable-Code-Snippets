for FILE in $(find ./examples -type f); do
    echo "Processing $FILE";
    /Users/mape/code-review-tool-test/venv/bin/python3 /Users/mape/code-review-tool-test/gptscan.py -u "$FILE" > out/$(basename "$FILE").txt;
done


/Users/mape/code-review-tool-test/venv/bin/python3 /Users/mape/code-review-tool-test/gptscan.py -u ./examples/SSRF/express.js > out/ssrf.express.js.txt;