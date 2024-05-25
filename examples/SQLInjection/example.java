String username = request.getParameter("username");
Statement statement = connection.createStatement();  
String query = "SELECT secret FROM Users WHERE (username = '" + username + "' AND NOT role = 'admin')";
ResultSet result = statement.executeQuery(query);

String query2 = String.format("SELECT secret FROM Users WHERE (username = '%s' AND NOT role = 'admin')", username);
ResultSet result2 = statement.executeQuery(query2);
