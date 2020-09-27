<?php
// You can find the database configuration inside bootstrap.php
require "../bootstrap.php";

// API user credentials (2020.09.07) Attila
define("CLIENT_USERNAME", "test");
define("CLIENT_PASSWORD", "12345");

/**
 * Put an x inside the [] (brackets) if a subtask is done.
 * TODO:
 * [ ] Run the dbseed.php to seed the database
 * [ ] Basic Authentication
 *     - If Auth fails send back HTTP 401
 * [ ] Check if request is GET or POST if not send back HTTP 404
 * [ ] Check if request content is application/json if not give back HTTP 404
 * [ ] Make a function that will handle the incoming JSON
 *     - Example incoming JSON:
 *      {
 *          "name": "Steve Jobs"
 *      }
 * [ ] Every response is JSON
 *     - Example response JSON:
 *      {
 *          "id": 1,
 *          "name": "Steve Jobs",
 *          "age": 34
 *      }
 */
?>