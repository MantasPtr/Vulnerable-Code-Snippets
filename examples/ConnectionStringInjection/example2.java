try
{
Class.forName("com.mysql.jdbc.Driver").newInstance();
String url = "jdbc:mysql://10.12.1.34/" + request.getParameter("selectedDB");
conn = DriverManager.getConnection(url, username, password);
doUnitWork();
}
catch(ClassNotFoundException cnfe)
{
 // TODO: manage exception
}
catch(SQLException se)
{
 // TODO: manage exception
}
catch(InstantiationException ie)
{
 // TODO: manage exception
}
finally
{
 // TODO: manage conn
}
       
