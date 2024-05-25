SONARQUBE_URL="localhost:9001"
YOUR_PROJECT_KEY="VCS"
YOUR_REPO=$(pwd)
TOKEN="your_token_here"


docker run \
    --rm \
    -e SONAR_HOST_URL="http://${SONARQUBE_URL}" \
    -e SONAR_SCANNER_OPTS="-Dsonar.projectKey=${YOUR_PROJECT_KEY} -Dsonar.python.version=2.7,3.8" \
    -e SONAR_TOKEN="${TOKEN}" \
    -v "${YOUR_REPO}/examples:/usr/src" \
    --network=host \
    sonarsource/sonar-scanner-cli